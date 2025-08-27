@php
    $currentLocale = app()->getLocale(); // en или pl
    $alternateLocale = $currentLocale === 'pl' ? 'en' : 'pl';

    // Чистим путь от префикса языка
    $path = request()->path(); // ru/page или page
    $pathWithoutLocale = preg_replace('#^(pl|en)(/)?#', '', $path);
    $pathClean = trim($pathWithoutLocale, '/');

    $baseUrl = rtrim(config('app.url'), '/');

    // Ссылки
    $urlEn = $baseUrl . ($pathClean ? '/' . $pathClean : '');
    $urlPl = $baseUrl . '/pl' . ($pathClean ? '/' . $pathClean : '');
@endphp
<header x-data="{ open: false }" class="bg-slate-900/95 backdrop-blur-sm border-b border-slate-800 sticky top-0 z-50">
    <nav class="container mx-auto px-4 py-4">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="text-2xl font-bold text-white hover:text-bright-cyan transition-colors duration-300">
                Cod<span class="text-bright-indigo">Elevator</span>
            </a>
            
            <!-- Desktop Navigation -->
            <ul class="hidden md:flex space-x-8">
                @include('layouts.partials.nav-links', ['linkClasses' => 'text-gray-300 hover:text-bright-cyan transition-colors duration-300 font-medium'])
            </ul>
            
            <!-- Right side controls -->
            <div class="flex items-center space-x-3">
                <!-- Language Switcher -->
               
                <div class="flex items-center space-x-2 bg-slate-800 rounded-lg p-2">
    @php
        $currentLocale = app()->getLocale();
        $flags = ['en' => '🇺🇸', 'pl' => '🇵🇱'];
        $urls = [
            'en' => $baseUrl . ($pathClean ? '/' . $pathClean : ''),
            'pl' => $baseUrl . '/pl' . ($pathClean ? '/' . $pathClean : ''),
        ];
    @endphp
    @foreach(config('app.supported_locales') as $locale)
        @if($locale === $currentLocale)
            <span class="flex items-center space-x-1 px-2 py-1 rounded bg-slate-700 cursor-default">
                <span class="text-lg">{{ $flags[$locale] ?? '🌐' }}</span>
                <span class="text-sm font-medium text-white">{{ strtoupper($locale) }}</span>
            </span>
        @else
            <a href="{{ $urls[$locale] ?? '#' }}"
               aria-label="Switch to {{ strtoupper($locale) }}"
               class="flex items-center space-x-1 px-2 py-1 rounded hover:bg-slate-700 transition-colors">
                <span class="text-lg">{{ $flags[$locale] ?? '🌐' }}</span>
                <span class="text-sm font-medium text-white">{{ strtoupper($locale) }}</span>
            </a>
        @endif
    @endforeach
</div>

                
                <!-- Mobile Menu Button -->
                <button @click="open = !open" class="md:hidden text-white hover:text-bright-cyan transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Mobile Navigation -->
        <div x-show="open" @click.away="open = false" x-transition class="md:hidden mt-4 pb-4 border-t border-slate-800">
            <ul class="space-y-2 pt-4">
                @include('layouts.partials.nav-links', ['linkClasses' => 'block text-gray-300 hover:text-bright-cyan transition-colors duration-300 font-medium py-2'])
            </ul>
        </div>
    </nav>
</header>
