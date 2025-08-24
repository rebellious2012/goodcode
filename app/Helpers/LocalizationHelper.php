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

        // Если мы хотим переключиться на язык по умолчанию, префикс не нужен
        if ($targetLocale === $defaultLocale) {
            // Убираем 'locale.' из имени роута, если оно там есть
            $routeName = str_replace('locale.', '', $currentRouteName);
            // Убираем параметр 'locale' из параметров
            unset($currentRouteParams['locale']);
            return route($routeName, $currentRouteParams);
        }

        // Если мы переключаемся на другой язык
        // Убедимся, что имя роута содержит префикс 'locale.'
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
        $currentLocale = Illuminate\Support\Facades\App::getLocale();
        $defaultLocale = config('app.locale');

        if ($currentLocale === $defaultLocale) {
            // For the default locale, use the simple route name (e.g., 'about').
            return route($name, $parameters);
        } else {
            // For other locales, use the prefixed route name (e.g., 'locale.about').
            $parameters['locale'] = $currentLocale;
            return route('locale.' . $name, $parameters);
        }
    }
}