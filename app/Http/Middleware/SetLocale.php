<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
         $supportedLocales = config('app.supported_locales', ['en']); 
        $defaultLocale = config('app.locale', 'en');

        // 2. Получаем локаль из первого сегмента URL
        $locale = $request->segment(1);

        // 3. Проверяем, поддерживается ли эта локаль
        if (in_array($locale, $supportedLocales)) {

            // 4. ГЛАВНОЕ УЛУЧШЕНИЕ: Если локаль в URL - это язык по умолчанию, делаем редирект
            if ($locale === $defaultLocale) {
                // Создаем новый URL, убрав языковой префикс (например, /en/about -> /about)
                $newPath = substr($request->getPathInfo(), 3); // Убираем первые 3 символа: /en
                if (empty($newPath)) {
                    $newPath = '/';
                }
                // Делаем 301 редирект для SEO
                return Redirect::to($newPath, 301);
            }

            // 5. Если это не язык по умолчанию, устанавливаем его
            App::setLocale($locale);
            URL::defaults(['locale' => $locale]);
         } else {
            // Если в URL нет локали, мы просто используем локаль по умолчанию
            // URL::defaults здесь не нужен, т.к. роуты для языка по умолчанию не должны иметь параметр {locale}
        }

        return $next($request);
    }
}
