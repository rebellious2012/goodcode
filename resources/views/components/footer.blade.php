<footer class="bg-slate-900 border-t border-slate-800 mt-20">
    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Company Info -->
            <div class="col-span-1 md:col-span-2">
                <h3 class="text-2xl font-bold text-white mb-4">
                    CodElevator<span class="text-bright-indigo">Solutions</span>
                </h3>
                <p class="text-gray-400 mb-6 max-w-md">
                    {{ __('app.footer_slogan') }}
                </p>
                <div class="flex space-x-4">
                    <!-- Instagram -->
                    <a href="#" class="text-gray-400 hover:text-bright-cyan transition-colors duration-300" aria-label="Instagram">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.981 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.981-6.98.058-1.28.072-1.689.072-4.948 0-3.259-.014-3.668-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                        </svg>
                    </a>
                    <!-- YouTube -->
                    <a href="#" class="text-gray-400 hover:text-bright-cyan transition-colors duration-300" aria-label="YouTube">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </a>
                    <!-- Facebook -->
                    <a href="https://www.facebook.com/profile.php?id=61584769756560" class="text-gray-400 hover:text-bright-cyan transition-colors duration-300" aria-label="Facebook">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <!-- Telegram -->
                    <a href="https://t.me/green4kife" class="text-gray-400 hover:text-bright-cyan transition-colors duration-300" aria-label="Telegram">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.14.14-.26.26-.54.26l.213-3.054 5.56-5.022c.24-.213-.054-.334-.373-.121l-6.869 4.326-2.96-.924c-.64-.203-.658-.64.135-.954l11.566-4.458c.538-.196 1.006.128.832.941z"/>
                        </svg>
                    </a>
                    <!-- Viber -->
                    <a href="#" class="text-gray-400 hover:text-bright-cyan transition-colors duration-300" aria-label="Viber">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.136 15.513c-.636-.201-1.303-.547-2.018-1.037-.714-.49-1.226-1.023-1.536-1.6-.31-.577-.398-1.064-.264-1.46.134-.396.398-.71.793-.941.394-.231.769-.524 1.124-.881.355-.355.53-.71.524-1.064-.006-.354-.2-.736-.585-1.146-.384-.41-.786-.888-1.208-1.436-.422-.548-.874-1.036-1.354-1.466-.481-.43-.988-.619-1.52-.569-.533.05-1.049.293-1.551.73-.502.436-1.026 1.004-1.396 1.701-.37.697-.482 1.338-.334 1.923.148.584.606 1.376 1.376 2.375.769.999 1.721 2.037 2.853 3.114 1.132 1.077 2.363 2.01 3.694 2.801 1.33.791 2.497 1.336 3.5 1.633 1.001.297 1.874.382 2.616.255.742-.127 1.355-.497 1.84-1.181.485-.684.793-1.395.923-2.133.131-.739.073-1.446-.173-2.12-.246-.675-.592-1.276-1.035-1.803-.443-.527-.956-.961-1.536-1.303-.58-.342-1.16-.454-1.741-.335z"/>
                        </svg>
                    </a>
                    <!-- WhatsApp -->
                    <a href="https://wa.me/48883219797" class="text-gray-400 hover:text-bright-cyan transition-colors duration-300" aria-label="WhatsApp">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                    </a>
                </div>

                <div class="mt-8">
                    @php
                        $flags = ['en' => '🇺🇸', 'pl' => '🇵🇱', 'ru' => '🇷🇺', 'uk' => '🇺🇦'];
                        $names = ['en' => 'English', 'pl' => 'Polski', 'ru' => 'Русский', 'uk' => 'Українська'];
                        $currentLocale = app()->getLocale();
                    @endphp
                    <div class="flex flex-wrap gap-3">
                        @foreach(config('app.supported_locales') as $locale)
                            <a href="{{ route('set-locale', ['lang' => $locale]) }}"
                               class="flex items-center space-x-2 px-3 py-1.5 rounded-lg transition-all duration-300 {{ $currentLocale == $locale ? 'bg-bright-indigo/20 text-white border border-bright-indigo/50' : 'bg-slate-800/50 text-gray-400 hover:bg-slate-800 hover:text-white border border-transparent' }}">
                                <span class="text-lg">{{ $flags[$locale] ?? '🌐' }}</span>
                                <span class="text-sm font-medium">{{ $names[$locale] ?? strtoupper($locale) }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div>
                <h4 class="text-lg font-semibold text-white mb-4">{{ __('app.footer_quick_links') }}</h4>
                <ul class="space-y-2">
                    <li><a href="/about" class="text-gray-400 hover:text-bright-cyan transition-colors duration-300">{{ __('app.header_about') }}</a></li>
                    <li><a href="/services" class="text-gray-400 hover:text-bright-cyan transition-colors duration-300">{{ __('app.header_services') }}</a></li>
                    <li><a href="/portfolio" class="text-gray-400 hover:text-bright-cyan transition-colors duration-300">{{ __('app.header_portfolio') }}</a></li>
                    <li><a href="/blog" class="text-gray-400 hover:text-bright-cyan transition-colors duration-300">{{ __('app.header_blog') }}</a></li>
                    <li><a href="/contact" class="text-gray-400 hover:text-bright-cyan transition-colors duration-300">{{ __('app.header_contact') }}</a></li>
                </ul>
            </div>
            
            <!-- Contact Info -->
            <div>
                <h4 class="text-lg font-semibold text-white mb-4">{{ __('app.footer_contact_info') }}</h4>
                <ul class="space-y-2 text-gray-400">
                    <li>📧 {{ __('app.footer_contact_email') }}</li>
                    <li>📞 {{ __('app.footer_contact_phone') }}</li>
                    <li>📍 {{ __('app.footer_contact_location') }}</li>
                </ul>
            </div>
        </div>
        
        <div class="border-t border-slate-800 mt-8 pt-8 text-center">
            <p class="text-gray-400">
                {!! __('app.footer_copyright') !!} |
                <a href="/privacy" class="hover:text-bright-cyan transition-colors">{{ __('app.footer_privacy') }}</a> |
                <a href="/terms" class="hover:text-bright-cyan transition-colors">{{ __('app.footer_terms') }}</a>
            </p>
        </div>
    </div>
</footer>

