<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Request;

if (!function_exists('getLocalizedURL')) {
    /**
     * Generates a language-switched URL using direct path manipulation to avoid router issues.
     */
    function getLocalizedURL(string $targetLocale): string
    {
        $currentPath = request()->path();
        $currentLocale = request()->segment(1);
        $supportedLocales = config('app.supported_locales', ['en', 'pl']);
        $defaultLocale = config('app.locale', 'en');

        // Check if the first segment is a supported locale
        $isLocaleInPath = in_array($currentLocale, $supportedLocales);

        // If switching to the default locale, remove the prefix
        if ($targetLocale === $defaultLocale) {
            if ($isLocaleInPath) {
                // Path is /pl/about, remove /pl
                $pathWithoutLocale = substr($currentPath, strlen($currentLocale));
                return url(trim($pathWithoutLocale, '/'));
            }
            // Already on default, link to the same path
            return url($currentPath);
        }

        // If switching to a non-default locale
        if ($isLocaleInPath) {
            // Path is /pl/about, switch to /de/about (hypothetically)
            $pathWithoutLocale = substr($currentPath, strlen($currentLocale));
            return url($targetLocale . trim($pathWithoutLocale, '/'));
        } else {
            // Path is /about, switch to /pl/about
            // Handle the root URL case ('/') correctly
            $pathToPrefix = ($currentPath === '/') ? '' : $currentPath;
            return url($targetLocale . '/' . $pathToPrefix);
        }
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