<section class="py-20 bg-slate-800/50">
    <div class="container mx-auto px-4">
        <!-- Section header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                {{ __('home.services_title') }} <span class="text-bright-indigo">{{ __('home.services_highlight') }}</span>
            </h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                {{ __('home.services_subtitle') }}
            </p>
        </div>
        
        <!-- Services grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Custom Software Development -->
            <div class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl p-8 hover:border-bright-indigo transition-all duration-300 group">
                <div class="w-16 h-16 bg-gradient-to-r from-bright-indigo to-bright-cyan rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">{{ __('home.service_software_title') }}</h3>
                <p class="text-gray-300 mb-6">{{ __('home.service_software_desc') }}</p>
                <a href="/services/software-development" class="text-bright-cyan hover:text-bright-indigo transition-colors font-semibold">
                    {{ __('home.learn_more') }} →
                </a>
            </div>

          
    <!-- Ready-Made Solutions -->
<div class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl p-8 hover:border-bright-cyan transition-all duration-300 group">
   <div class="w-16 h-16 bg-gradient-to-r from-bright-cyan to-bright-indigo rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"></path>
                    </svg>
                </div>
    <h3 class="text-2xl font-bold text-white mb-4">{{ __('home.service_ready_title') }}</h3>
    <p class="text-gray-300 mb-6">{{ __('home.service_ready_desc') }}</p>
    <a href="/services/ready-made-solutions" class="text-bright-cyan hover:text-bright-indigo transition-colors font-semibold">
        {{ __('home.learn_more') }} →
    </a>
</div>
            <!-- Mobile App Development -->
            <div class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl p-8 hover:border-bright-indigo transition-all duration-300 group">
                <div class="w-16 h-16 bg-gradient-to-r from-bright-indigo to-bright-cyan rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">{{ __('home.service_mobile_title') }}</h3>
                <p class="text-gray-300 mb-6">{{ __('home.service_mobile_desc') }}</p>
                <a href="/services/mobile-development" class="text-bright-cyan hover:text-bright-indigo transition-colors font-semibold">
                    {{ __('home.learn_more') }} →
                </a>
            </div>

            <!-- UI/UX Design -->
            <div class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl p-8 hover:border-bright-indigo transition-all duration-300 group">
                 <div class="w-16 h-16 bg-gradient-to-r from-bright-cyan to-bright-indigo rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">{{ __('home.service_design_title') }}</h3>
                <p class="text-gray-300 mb-6">{{ __('home.service_design_desc') }}</p>
                <a href="/services/ui-ux-design" class="text-bright-cyan hover:text-bright-indigo transition-colors font-semibold">
                    {{ __('home.learn_more') }} →
                </a>
            </div>

            <!-- IT Consulting -->
            <div class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl p-8 hover:border-bright-cyan transition-all duration-300 group">
                <div class="w-16 h-16 bg-gradient-to-r from-bright-indigo to-bright-cyan rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20h9M12 4h9M4 9h16M4 15h16"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">{{ __('home.service_consulting_title') }}</h3>
                <p class="text-gray-300 mb-6">{{ __('home.service_consulting_desc') }}</p>
                <a href="/services/it-consulting" class="text-bright-cyan hover:text-bright-indigo transition-colors font-semibold">
                    {{ __('home.learn_more') }} →
                </a>
            </div>

            <!-- Cybersecurity -->
            <div class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl p-8 hover:border-bright-indigo transition-all duration-300 group">
                <div class="w-16 h-16 bg-gradient-to-r from-bright-cyan to-bright-indigo rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">{{ __('home.service_security_title') }}</h3>
                <p class="text-gray-300 mb-6">{{ __('home.service_security_desc') }}</p>
                <a href="/services/cybersecurity" class="text-bright-cyan hover:text-bright-indigo transition-colors font-semibold">
                    {{ __('home.learn_more') }} →
                </a>
            </div>
        </div>
    </div>
</section>


