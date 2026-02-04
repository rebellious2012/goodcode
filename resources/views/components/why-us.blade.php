<section class="py-20 bg-gradient-to-r from-slate-900 to-deep-blue">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                {{ __('home.why_title') }}
                <span class="text-bright-cyan">CodElevator</span>?
            </h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                {{ __('home.why_subtitle') }}
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center group">
                <div class="w-20 h-20 bg-gradient-to-r from-bright-indigo to-bright-cyan rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0012 18.75c-1.03 0-1.9-.4-2.593-.896l-.547-.548z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">{{ __('home.why_feat1_title') }}</h3>
                <p class="text-gray-300">{{ __('home.why_feat1_desc') }}</p>
            </div>
            
            <div class="text-center group">
                <div class="w-20 h-20 bg-gradient-to-r from-bright-cyan to-bright-indigo rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">{{ __('home.why_feat2_title') }}</h3>
                <p class="text-gray-300">{{ __('home.why_feat2_desc') }}</p>
            </div>
            
            <div class="text-center group">
                <div class="w-20 h-20 bg-gradient-to-r from-bright-indigo to-bright-cyan rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">{{ __('home.why_feat3_title') }}</h3>
                <p class="text-gray-300">{{ __('home.why_feat3_desc') }}</p>
            </div>
            
            <div class="text-center group">
                <div class="w-20 h-20 bg-gradient-to-r from-bright-cyan to-bright-indigo rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">{{ __('home.why_feat4_title') }}</h3>
                <p class="text-gray-300">{{ __('home.why_feat4_desc') }}</p>
            </div>
        </div>
        
        <div class="mt-24">
            <p class="text-center text-gray-400 uppercase tracking-widest text-sm mb-10">Наш технологический стек</p>
            <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 opacity-60 grayscale hover:grayscale-0 transition-all duration-500">
                <img src="/img/logos/laravel.svg" alt="Laravel" class="h-10 md:h-12 pointer-events-none">
                <img src="/img/logos/vuejs.svg" alt="Vue.js" class="h-10 md:h-12 pointer-events-none">
                <img src="/img/logos/php.svg" alt="PHP" class="h-10 md:h-12 pointer-events-none">
                <img src="/img/logos/postgresql.svg" alt="PostgreSQL" class="h-10 md:h-12 pointer-events-none">
                <img src="/img/logos/redis.svg" alt="Redis" class="h-10 md:h-12 pointer-events-none">
                <img src="/img/logos/tailwind.svg" alt="Tailwind CSS" class="h-10 md:h-12 pointer-events-none">
            </div>
        </div>
    </div>
</section>