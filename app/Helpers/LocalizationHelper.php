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