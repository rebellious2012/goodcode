<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Request;

if (!function_exists('getLocalizedURL')) {
    function getLocalizedURL(string $targetLocale): string
    {
        $defaultLocale = config('app.locale');
        $currentRouteName = Illuminate\Support\Facades\Route::currentRouteName();
        $currentRouteParams = Illuminate\Support\Facades\Route::current()->parameters();

        // When switching to the default locale, we need a URL without a prefix.
        if ($targetLocale === $defaultLocale) {
            $routeName = str_replace('locale.', '', $currentRouteName);
            unset($currentRouteParams['locale']);
            // Generate a relative path first (3rd parameter `false`) and then convert to a clean absolute URL.
            // This prevents the router from accidentally adding the '/en/' prefix based on context.
            return url(route($routeName, $currentRouteParams, false));
        }

        // When switching to a non-default locale, we need the 'locale.' prefixed route.
        if (!str_starts_with($currentRouteName, 'locale.')) {
            $currentRouteName = 'locale.' . $currentRouteName;
        }

        $params = array_merge($currentRouteParams, ['locale' => $targetLocale]);
        return route($currentRouteName, $params);
    }
}

if (!function_exists('localized_route')) {
    /**
     * Generates a URL for a given route name in the current locale.
     * Ex: localized_route('about') will generate /about for 'en' and /pl/about for 'pl'.
     */
    function localized_route(string $name, array $parameters = []): string
    {
        // First, try to get the locale from the current route's parameters.
        $currentLocale = request()->route('locale');

        // If the route parameter isn't present (e.g., for 'en' routes),
        // fall back to the application's currently set locale.
        if (!$currentLocale) {
            $currentLocale = Illuminate\Support\Facades\App::getLocale();
        }

        $defaultLocale = config('app.locale');

        if ($currentLocale === $defaultLocale) {
            // For the default locale, use the simple route name (e.g., 'about').
            // Ensure 'locale' parameter is not passed to the route.
            unset($parameters['locale']);
            return route($name, $parameters);
        } else {
            // For other locales, use the prefixed route name (e.g., 'locale.about').
            $parameters['locale'] = $currentLocale;
            return route('locale.' . $name, $parameters);
        }
    }
}