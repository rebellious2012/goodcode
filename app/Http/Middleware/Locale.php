<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class Locale
{
    public const MAIN_LANGUAGE = 'en';
    public const SUPPORTED_LANGUAGES = ['en', 'pl'];

    public static function mainLanguage()
    {
        return self::MAIN_LANGUAGE;
    }

    public static function languages()
    {
        return self::SUPPORTED_LANGUAGES;
    }
     /*
      * Проверяет наличие корректной метки языка в текущем URL
      * Возвращает метку или значеие null, если нет метки
      */
     public static function getLocaleFromUrl(): ?string
     {
        $uri = request()->path();
        $segmentsURI = explode('/',$uri); //делим на части по разделителю "/"
        if (!empty($segmentsURI[0]) && in_array($segmentsURI[0], self::languages())) {
            if ($segmentsURI[0] != self::mainLanguage())
            {
                return $segmentsURI[0];
            }
        }
        return null;
     }


    public function handle(Request $request, Closure $next): Response
    {
        try {
            $locale = self::getLocaleFromUrl();
            if ($locale !== null) {
                App::setLocale($locale);
            } else {
                App::setLocale(self::mainLanguage());
            }

            return $next($request);
        } catch (\Exception $e) {
            Log::error('Locale middleware: Exception caught', ['exception' => $e]);
            throw $e;
        }
    }
}
