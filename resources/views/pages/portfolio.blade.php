@extends('layouts.app')

@section('title', __('portfolio.title'))

@section('content')
<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-deep-blue via-slate-900 to-slate-800">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">
            {{ __('portfolio.page_hero_title') }} <span class="text-bright-indigo">{{ __('portfolio.page_hero_highlight') }}</span>
        </h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">
            {{ __('portfolio.page_hero_subtitle') }}
        </p>
    </div>
</section>

<!-- Filter Section -->
<section class="py-12 bg-slate-800/30">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap justify-center gap-4" x-data="{ activeFilter: 'all' }">
            <button @click="activeFilter = 'all'" 
                    :class="activeFilter === 'all' ? 'bg-bright-indigo text-white' : 'bg-slate-800 text-gray-300 hover:bg-slate-700'"
                    class="px-6 py-3 rounded-lg font-semibold transition-all duration-300">
                {{ __('portfolio.filter_all') }}
            </button>
            <button @click="activeFilter = 'web'" 
                    :class="activeFilter === 'web' ? 'bg-bright-indigo text-white' : 'bg-slate-800 text-gray-300 hover:bg-slate-700'"
                    class="px-6 py-3 rounded-lg font-semibold transition-all duration-300">
                {{ __('portfolio.filter_web') }}
            </button>
            <button @click="activeFilter = 'mobile'" 
                    :class="activeFilter === 'mobile' ? 'bg-bright-indigo text-white' : 'bg-slate-800 text-gray-300 hover:bg-slate-700'"
                    class="px-6 py-3 rounded-lg font-semibold transition-all duration-300">
                {{ __('portfolio.filter_mobile') }}
            </button>
            <button @click="activeFilter = 'cloud'" 
                    :class="activeFilter === 'cloud' ? 'bg-bright-indigo text-white' : 'bg-slate-800 text-gray-300 hover:bg-slate-700'"
                    class="px-6 py-3 rounded-lg font-semibold transition-all duration-300">
                {{ __('portfolio.filter_cloud') }}
            </button>
            <button @click="activeFilter = 'enterprise'" 
                    :class="activeFilter === 'enterprise' ? 'bg-bright-indigo text-white' : 'bg-slate-800 text-gray-300 hover:bg-slate-700'"
                    class="px-6 py-3 rounded-lg font-semibold transition-all duration-300">
                {{ __('portfolio.filter_enterprise') }}
            </button>
        </div>
    </div>
</section>

<!-- Portfolio Grid -->
<section class="py-20 bg-slate-900/30">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" x-data="{ activeFilter: 'all' }">
            
            <!-- E-commerce Platform -->
            <div class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl overflow-hidden hover:border-bright-indigo transition-all duration-300 group"
                 x-show="activeFilter === 'all' || activeFilter === 'web'" x-transition>
                <div class="h-48 bg-gradient-to-br from-bright-indigo to-bright-cyan flex items-center justify-center">
                    <div class="text-white text-center">
                        <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                        <div class="text-sm opacity-80">{{ __('portfolio.project1_type') }}</div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-3">{{ __('portfolio.project1_title') }}</h3>
                    <p class="text-gray-300 mb-4">
                        {{ __('portfolio.project1_desc') }}
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-bright-indigo/20 text-bright-indigo rounded-full text-sm">React</span>
                        <span class="px-3 py-1 bg-bright-cyan/20 text-bright-cyan rounded-full text-sm">Node.js</span>
                        <span class="px-3 py-1 bg-bright-indigo/20 text-bright-indigo rounded-full text-sm">AWS</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-400 text-sm">{{ __('portfolio.project1_category') }}</span>
                        <a href="#" class="text-bright-cyan hover:text-bright-indigo transition-colors font-semibold">
                            {{ __('portfolio.view_details') }} →
                        </a>
                    </div>
                </div>
            </div>

            <!-- FinTech Mobile App -->
            <div class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl overflow-hidden hover:border-bright-cyan transition-all duration-300 group"
                 x-show="activeFilter === 'all' || activeFilter === 'mobile'" x-transition>
                <div class="h-48 bg-gradient-to-br from-bright-cyan to-bright-indigo flex items-center justify-center">
                    <div class="text-white text-center">
                        <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <div class="text-sm opacity-80">{{ __('portfolio.project2_type') }}</div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-3">{{ __('portfolio.project2_title') }}</h3>
                    <p class="text-gray-300 mb-4">
                        {{ __('portfolio.project2_desc') }}
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-bright-cyan/20 text-bright-cyan rounded-full text-sm">Flutter</span>
                        <span class="px-3 py-1 bg-bright-indigo/20 text-bright-indigo rounded-full text-sm">Python</span>
                        <span class="px-3 py-1 bg-bright-cyan/20 text-bright-cyan rounded-full text-sm">Blockchain</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-400 text-sm">{{ __('portfolio.project2_category') }}</span>
                        <a href="#" class="text-bright-cyan hover:text-bright-indigo transition-colors font-semibold">
                            {{ __('portfolio.view_details') }} →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Healthcare Platform -->
            <div class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl overflow-hidden hover:border-bright-indigo transition-all duration-300 group"
                 x-show="activeFilter === 'all' || activeFilter === 'web'" x-transition>
                <div class="h-48 bg-gradient-to-br from-bright-indigo to-bright-cyan flex items-center justify-center">
                    <div class="text-white text-center">
                        <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                        <div class="text-sm opacity-80">{{ __('portfolio.project3_type') }}</div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-3">{{ __('portfolio.project3_title') }}</h3>
                    <p class="text-gray-300 mb-4">
                        {{ __('portfolio.project3_desc') }}
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-bright-indigo/20 text-bright-indigo rounded-full text-sm">Vue.js</span>
                        <span class="px-3 py-1 bg-bright-cyan/20 text-bright-cyan rounded-full text-sm">Laravel</span>
                        <span class="px-3 py-1 bg-bright-indigo/20 text-bright-indigo rounded-full text-sm">WebRTC</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-400 text-sm">{{ __('portfolio.project3_category') }}</span>
                        <a href="#" class="text-bright-cyan hover:text-bright-indigo transition-colors font-semibold">
                            {{ __('portfolio.view_details') }} →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Cloud Migration -->
            <div class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl overflow-hidden hover:border-bright-cyan transition-all duration-300 group"
                 x-show="activeFilter === 'all' || activeFilter === 'cloud'" x-transition>
                <div class="h-48 bg-gradient-to-br from-bright-cyan to-bright-indigo flex items-center justify-center">
                    <div class="text-white text-center">
                        <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"></path>
                        </svg>
                        <div class="text-sm opacity-80">{{ __('portfolio.project4_type') }}</div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-3">{{ __('portfolio.project4_title') }}</h3>
                    <p class="text-gray-300 mb-4">
                        {{ __('portfolio.project4_desc') }}
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-bright-cyan/20 text-bright-cyan rounded-full text-sm">AWS</span>
                        <span class="px-3 py-1 bg-bright-indigo/20 text-bright-indigo rounded-full text-sm">Kubernetes</span>
                        <span class="px-3 py-1 bg-bright-cyan/20 text-bright-cyan rounded-full text-sm">Terraform</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-400 text-sm">{{ __('portfolio.project4_category') }}</span>
                        <a href="#" class="text-bright-cyan hover:text-bright-indigo transition-colors font-semibold">
                            {{ __('portfolio.view_details') }} →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Food Delivery App -->
            <div class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl overflow-hidden hover:border-bright-indigo transition-all duration-300 group"
                 x-show="activeFilter === 'all' || activeFilter === 'mobile'" x-transition>
                <div class="h-48 bg-gradient-to-br from-bright-indigo to-bright-cyan flex items-center justify-center">
                    <div class="text-white text-center">
                        <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                        <div class="text-sm opacity-80">{{ __('portfolio.project5_type') }}</div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-3">{{ __('portfolio.project5_title') }}</h3>
                    <p class="text-gray-300 mb-4">
                        {{ __('portfolio.project5_desc') }}
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-bright-indigo/20 text-bright-indigo rounded-full text-sm">React Native</span>
                        <span class="px-3 py-1 bg-bright-cyan/20 text-bright-cyan rounded-full text-sm">Node.js</span>
                        <span class="px-3 py-1 bg-bright-indigo/20 text-bright-indigo rounded-full text-sm">MongoDB</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-400 text-sm">{{ __('portfolio.project5_category') }}</span>
                        <a href="#" class="text-bright-cyan hover:text-bright-indigo transition-colors font-semibold">
                            {{ __('portfolio.view_details') }} →
                        </a>
                    </div>
                </div>
            </div>

            <!-- ERP System -->
            <div class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl overflow-hidden hover:border-bright-cyan transition-all duration-300 group"
                 x-show="activeFilter === 'all' || activeFilter === 'enterprise'" x-transition>
                <div class="h-48 bg-gradient-to-br from-bright-cyan to-bright-indigo flex items-center justify-center">
                    <div class="text-white text-center">
                        <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                        <div class="text-sm opacity-80">{{ __('portfolio.project6_type') }}</div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-3">{{ __('portfolio.project6_title') }}</h3>
                    <p class="text-gray-300 mb-4">
                        {{ __('portfolio.project6_desc') }}
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-bright-cyan/20 text-bright-cyan rounded-full text-sm">.NET Core</span>
                        <span class="px-3 py-1 bg-bright-indigo/20 text-bright-indigo rounded-full text-sm">Angular</span>
                        <span class="px-3 py-1 bg-bright-cyan/20 text-bright-cyan rounded-full text-sm">SQL Server</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-400 text-sm">{{ __('portfolio.project6_category') }}</span>
                        <a href="#" class="text-bright-cyan hover:text-bright-indigo transition-colors font-semibold">
                            {{ __('portfolio.view_details') }} →
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Success Metrics -->
<section class="py-20 bg-gradient-to-r from-bright-indigo to-bright-cyan">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-12">
            {{ __('portfolio.metrics_title') }}
        </h2>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div>
                <div class="text-5xl md:text-6xl font-bold text-white mb-2">{{ __('portfolio.metrics_stat1_number') }}</div>
                <div class="text-white/90 text-lg">{{ __('portfolio.metrics_stat1_label') }}</div>
            </div>
            <div>
                <div class="text-5xl md:text-6xl font-bold text-white mb-2">{{ __('portfolio.metrics_stat2_number') }}</div>
                <div class="text-white/90 text-lg">{{ __('portfolio.metrics_stat2_label') }}</div>
            </div>
            <div>
                <div class="text-5xl md:text-6xl font-bold text-white mb-2">{{ __('portfolio.metrics_stat3_number') }}</div>
                <div class="text-white/90 text-lg">{{ __('portfolio.metrics_stat3_label') }}</div>
            </div>
            <div>
                <div class="text-5xl md:text-6xl font-bold text-white mb-2">{{ __('portfolio.metrics_stat4_number') }}</div>
                <div class="text-white/90 text-lg">{{ __('portfolio.metrics_stat4_label') }}</div>
            </div>
        </div>
    </div>
</section>

@include('components.cta')
@endsection

