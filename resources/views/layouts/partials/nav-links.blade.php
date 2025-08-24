<li><a href="{{ route('home', ['locale' => App::getLocale()]) }}" class="{{ $linkClasses }}">{{ __('app.header_home') }}</a></li>
<li><a href="{{ route('about', ['locale' => App::getLocale()]) }}" class="{{ $linkClasses }}">{{ __('app.header_about') }}</a></li>
<li><a href="{{ route('services', ['locale' => App::getLocale()]) }}" class="{{ $linkClasses }}">{{ __('app.header_services') }}</a></li>
<li><a href="{{ route('portfolio', ['locale' => App::getLocale()]) }}" class="{{ $linkClasses }}">{{ __('app.header_portfolio') }}</a></li>
<li><a href="{{ route('blog', ['locale' => App::getLocale()]) }}" class="{{ $linkClasses }}">{{ __('app.header_blog') }}</a></li>
<li><a href="{{ route('contact', ['locale' => App::getLocale()]) }}" class="{{ $linkClasses }}">{{ __('app.header_contact') }}</a></li>
