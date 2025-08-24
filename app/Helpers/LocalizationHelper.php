<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('getLocalizedURL')) {
    /**
     * Generate a URL for the current route with a different locale.
     *
     * @param string $locale The new locale (e.g., 'en', 'pl').
     * @return string The generated URL.
     */
    function getLocalizedURL(string $locale): string
    {
        $currentRouteName = Route::currentRouteName();
        $currentRouteParams = Route::current()->parameters();

        // If there's no current route name (e.g., on a 404 page), default to home.
        if (!$currentRouteName) {
            return route('home', ['locale' => $locale]);
        }

        $params = array_merge($currentRouteParams, ['locale' => $locale]);

        return route($currentRouteName, $params);
    }
}
