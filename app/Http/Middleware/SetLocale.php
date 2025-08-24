<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $supportedLocales = config('app.supported_locales');
        $defaultLocale = config('app.locale');
        $locale = $request->segment(1);

        // If the URL segment is a supported locale...
        if (in_array($locale, $supportedLocales)) {
            // If the locale in the URL is the default locale (e.g., /en/about)...
            if ($locale === $defaultLocale) {
                // ...we redirect to the URL without the prefix (e.g., /about).
                // This is good for SEO and keeps URLs clean.
                $path = $request->path();
                // Replace '/en' with '' only at the beginning of the path
                $newPath = preg_replace("/^$defaultLocale/", '', $path, 1);
                // Ensure the path starts with a slash
                if (strpos($newPath, '/') !== 0) {
                    $newPath = '/' . $newPath;
                }
                return Redirect::to($newPath, 301);
            }

            // If it's a non-default locale (e.g., 'pl'), set it.
            App::setLocale($locale);
            // This ensures that any URLs generated during this request
            // will have the correct 'locale' parameter by default.
            URL::defaults(['locale' => $locale]);
        } else {
            // If the URL does not contain a locale prefix, we use the default.
            // We don't need to set URL::defaults here because the default routes
            // do not have a {locale} parameter.
            App::setLocale($defaultLocale);
        }

        return $next($request);
    }
}
