<header class="bg-slate-900/95 backdrop-blur-sm border-b border-slate-800 sticky top-0 z-50">
    <nav class="container mx-auto px-4 py-4">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <a href="/" class="text-2xl font-bold text-white hover:text-bright-cyan transition-colors duration-300">
                Cod<span class="text-bright-indigo">Elevator</span>
            </a>
            
            <!-- Desktop Navigation -->
            <ul class="hidden md:flex space-x-8">
                <li><a href="/" class="text-gray-300 hover:text-bright-cyan transition-colors duration-300 font-medium">{{ __('app.header_home') }}</a></li>
                <li><a href="/about" class="text-gray-300 hover:text-bright-cyan transition-colors duration-300 font-medium">{{ __('app.header_about') }}</a></li>
                <li><a href="/services" class="text-gray-300 hover:text-bright-cyan transition-colors duration-300 font-medium">{{ __('app.header_services') }}</a></li>
                <li><a href="/portfolio" class="text-gray-300 hover:text-bright-cyan transition-colors duration-300 font-medium">{{ __('app.header_portfolio') }}</a></li>
                <li><a href="/blog" class="text-gray-300 hover:text-bright-cyan transition-colors duration-300 font-medium">{{ __('app.header_blog') }}</a></li>
                <li><a href="/contact" class="text-gray-300 hover:text-bright-cyan transition-colors duration-300 font-medium">{{ __('app.header_contact') }}</a></li>
            </ul>
            
            <!-- Language Switcher -->
            <div class="flex items-center space-x-3">
                <div class="flex items-center space-x-2 bg-slate-800 rounded-lg p-2">
                    <button class="flex items-center space-x-1 px-2 py-1 rounded hover:bg-slate-700 transition-colors">
                        <span class="text-lg">🇺🇸</span>
                        <span class="text-sm font-medium">EN</span>
                    </button>
                    <button class="flex items-center space-x-1 px-2 py-1 rounded hover:bg-slate-700 transition-colors">
                        <span class="text-lg">🇵🇱</span>
                        <span class="text-sm font-medium">PL</span>
                    </button>
                </div>
                
                <!-- Mobile Menu Button -->
                <button class="md:hidden text-white hover:text-bright-cyan transition-colors" x-data="{ open: false }" @click="open = !open">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Mobile Navigation -->
        <div class="md:hidden mt-4 pb-4 border-t border-slate-800" x-data="{ open: false }" x-show="open" x-transition>
            <ul class="space-y-2 pt-4">
                <li><a href="/" class="block text-gray-300 hover:text-bright-cyan transition-colors duration-300 font-medium py-2">{{ __('app.header_home') }}</a></li>
                <li><a href="/about" class="block text-gray-300 hover:text-bright-cyan transition-colors duration-300 font-medium py-2">{{ __('app.header_about') }}</a></li>
                <li><a href="/services" class="block text-gray-300 hover:text-bright-cyan transition-colors duration-300 font-medium py-2">{{ __('app.header_services') }}</a></li>
                <li><a href="/portfolio" class="block text-gray-300 hover:text-bright-cyan transition-colors duration-300 font-medium py-2">{{ __('app.header_portfolio') }}</a></li>
                <li><a href="/blog" class="block text-gray-300 hover:text-bright-cyan transition-colors duration-300 font-medium py-2">{{ __('app.header_blog') }}</a></li>
                <li><a href="/contact" class="block text-gray-300 hover:text-bright-cyan transition-colors duration-300 font-medium py-2">{{ __('app.header_contact') }}</a></li>
            </ul>
        </div>
    </nav>
</header>

