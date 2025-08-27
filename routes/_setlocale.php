<?php

use App\Http\Middleware\Locale;
use Illuminate\Support\Facades\Session;

Route::get('set-locale/{lang}', function ($lang) {
    if (in_array($lang, Locale::languages())) {
        Session::put('app_locale', $lang);
        app()->setLocale($lang);
    }


    $referer = url()->previous();

    $parse_url = parse_url($referer, PHP_URL_PATH);
    $segments = explode('/', trim($parse_url, '/'));

    // Удаляем 'set-locale' из сегментов, если он там есть
    $segments = array_values(array_diff($segments, ['set-locale']));

    // Удаляем текущий язык из URL, если он там есть
    if (!empty($segments[0]) && in_array($segments[0], Locale::languages())) {
        array_shift($segments);
    }

    // Добавляем новый язык в URL, если он не является основным
    if ($lang !== Locale::mainLanguage()) {
        array_unshift($segments, $lang);
    }

    // Формируем новый URL
    $url = url(implode('/', $segments));

    // Добавляем GET-параметры, если они были
    $query = parse_url($referer, PHP_URL_QUERY);
    if ($query) {
        $url .= '?' . $query;
    }

    return redirect($url);



})->name('set-locale');
