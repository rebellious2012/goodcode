<section class="py-20 bg-gradient-to-r from-bright-indigo to-bright-cyan">
    <div class="container mx-auto px-4 text-center">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                {{ __('services.cta_title') }}
            </h2>
            <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                {{ __('services.cta_subtitle') }}
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-8">
                <a href="/contact" class="bg-white text-bright-indigo px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition-all duration-300 transform hover:-translate-y-1 shadow-lg">
                    {{ __('services.cta_button_contact') }}
                </a>
                <a href="https://t.me/green4kife" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-bright-indigo transition-all duration-300" target="_blank" rel="noopener">
                    {{ __('services.cta_button_telegram') }}
                </a>
                <a href="https://wa.me/48883219797" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-bright-indigo transition-all duration-300" target="_blank" rel="noopener">
                    {{ __('services.cta_button_whatsapp') }}
                </a>
            </div>
            
            <div class="flex flex-wrap justify-center items-center gap-8 text-white/80">
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>{{ __('services.cta_feature_free') }}</span>
                </div>
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>{{ __('services.cta_feature_quote') }}</span>
                </div>
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>{{ __('services.cta_feature_response') }}</span>
                </div>
            </div>
        </div>
    </div>
</section>
