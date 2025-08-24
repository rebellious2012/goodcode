<section class="relative min-h-screen flex flex-col items-center justify-center overflow-hidden">
    <!-- Background gradient -->
    <div class="absolute inset-0 bg-gradient-to-br from-deep-blue via-slate-900 to-slate-800"></div>
    
    <!-- Animated background elements -->
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-bright-indigo rounded-full mix-blend-multiply filter blur-xl animate-pulse"></div>
        <div class="absolute top-3/4 right-1/4 w-64 h-64 bg-bright-cyan rounded-full mix-blend-multiply filter blur-xl animate-pulse animation-delay-2000"></div>
    </div>
    
    <div class="relative z-10 container mx-auto px-4 text-center">
        <div class="max-w-4xl mx-auto">
            <!-- Main headline -->
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
                {{ __('home.title_part1') }}
                <span class="bg-gradient-to-r from-bright-indigo to-bright-cyan bg-clip-text text-transparent">
                    {{ __('home.title_highlight') }}
                </span>
            </h1>
            
            <!-- Subheadline -->
            <p class="text-xl md:text-2xl text-gray-300 mb-8 max-w-3xl mx-auto leading-relaxed">
                {{ __('home.subtitle') }}
            </p>
            
            <!-- CTA buttons -->
            <div class="flex justify-center gap-4 mb-10">
                <a href="#contact" class="btn btn-primary px-6 py-3 bg-bright-indigo hover:bg-bright-cyan text-white rounded-lg font-semibold shadow-lg transition duration-300">
                    {{ __('home.cta_primary') }}
                </a>
                <a href="#services" class="btn btn-outline px-6 py-3 border-2 border-bright-indigo hover:bg-bright-indigo text-white rounded-lg font-semibold transition duration-300">
                    {{ __('home.cta_secondary') }}
                </a>
            </div>

            <!-- Trust indicators -->
            <div class="flex flex-wrap justify-center items-center gap-8 text-gray-400">
                <div class="flex items-center space-x-2">
                    <span class="text-bright-cyan text-2xl font-bold">{{ __('home.stat_projects') }}</span>
                    <span>{{ __('home.stat_projects_text') }}</span>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-bright-cyan text-2xl font-bold">{{ __('home.stat_satisfaction') }}</span>
                    <span>{{ __('home.stat_satisfaction_text') }}</span>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-bright-cyan text-2xl font-bold">{{ __('home.stat_support') }}</span>
                    <span>{{ __('home.stat_support_text') }}</span>
                </div>
            </div>
        </div>
    </div>
</section>
