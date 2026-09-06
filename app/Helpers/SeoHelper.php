<?php

namespace App\Helpers;

use Illuminate\Support\Facades\App;

class SeoHelper
{
    public static function languages(): array
    {
        return ['en', 'pl', 'ru', 'uk'];
    }

    public static function mainLanguage(): string
    {
        return 'en';
    }

    public static function currentLocale(): string
    {
        return App::getLocale();
    }

    public static function alternateUrls(): array
    {
        $path = request()->path();
        $path = $path === '/' ? '' : $path;
        $segments = explode('/', $path);
        if (!empty($segments[0]) && in_array($segments[0], self::languages())) {
            array_shift($segments);
        }
        $cleanPath = implode('/', $segments);

        $urls = [];
        foreach (self::languages() as $locale) {
            if ($locale === self::mainLanguage()) {
                $urls[$locale] = url($cleanPath);
            } else {
                $urls[$locale] = url($locale . ($cleanPath ? '/' . $cleanPath : ''));
            }
        }

        return $urls;
    }

    public static function hreflangTags(): string
    {
        $html = '';
        foreach (self::alternateUrls() as $locale => $url) {
            $html .= "\n        " . '<link rel="alternate" hreflang="' . $locale . '" href="' . e($url) . '">';
        }
        $mainUrl = self::alternateUrls()[self::mainLanguage()];
        $html .= "\n        " . '<link rel="alternate" hreflang="x-default" href="' . e($mainUrl) . '">';
        return $html;
    }

    public static function canonicalUrl(): string
    {
        return url()->current();
    }

    public static function ogLocale(): string
    {
        $map = [
            'en' => 'en_US',
            'pl' => 'pl_PL',
            'ru' => 'ru_RU',
            'uk' => 'uk_UA',
        ];
        return $map[self::currentLocale()] ?? 'en_US';
    }
}
