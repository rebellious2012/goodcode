@extends('layouts.app')

@section('title', __('about.title'))

@section('content')
<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-deep-blue via-slate-900 to-slate-800">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">
            {{ __('about.hero_title') }} <span class="text-bright-indigo">{{ __('about.hero_highlight') }}</span>
        </h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">
            {{ __('about.hero_subtitle') }}
        </p>
    </div>
</section>

<!-- Mission Section -->
<section class="py-20 bg-slate-800/30">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-4xl font-bold text-white mb-6">{{ __('about.mission_title') }}</h2>
                <p class="text-lg text-gray-300 mb-6">
                    {{ __('about.mission_p1') }}
                </p>
                <p class="text-lg text-gray-300 mb-6">
                    {{ __('about.mission_p2') }}
                </p>
                <p class="text-lg text-gray-300">
                    {{ __('about.mission_p3') }}
                </p>
            </div>
            <div class="bg-gradient-to-br from-bright-indigo to-bright-cyan rounded-xl p-8 text-white">
                <h3 class="text-2xl font-bold mb-6">{{ __('about.impact_title') }}</h3>
                <div class="space-y-4">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center">
                            <span class="text-2xl font-bold">{{ __('about.impact_stat1_number') }}</span>
                        </div>
                        <span>{{ __('about.impact_stat1_text') }}</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center">
                            <span class="text-2xl font-bold">{{ __('about.impact_stat2_number') }}</span>
                        </div>
                        <span>{{ __('about.impact_stat2_text') }}</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center">
                            <span class="text-2xl font-bold">{{ __('about.impact_stat3_number') }}</span>
                        </div>
                        <span>{{ __('about.impact_stat3_text') }}</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center">
                            <span class="text-2xl font-bold">{{ __('about.impact_stat4_number') }}</span>
                        </div>
                        <span>{{ __('about.impact_stat4_text') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-20 bg-slate-900/50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                {{ __('about.team_title') }} <span class="text-bright-cyan">{{ __('about.team_highlight') }}</span>
            </h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                {{ __('about.team_subtitle') }}
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- CEO -->
            <div class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl p-8 text-center hover:border-bright-indigo transition-all duration-300">
                <div class="w-24 h-24 bg-gradient-to-r from-bright-indigo to-bright-cyan rounded-full mx-auto mb-6 flex items-center justify-center">
                    <span class="text-2xl font-bold text-white">JS</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">John Smith</h3>
                <p class="text-bright-cyan mb-4">{{ __('about.ceo_role') }}</p>
                <p class="text-gray-300">
                    {{ __('about.ceo_bio') }}
                </p>
            </div>
            
            <!-- CTO -->
            <div class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl p-8 text-center hover:border-bright-cyan transition-all duration-300">
                <div class="w-24 h-24 bg-gradient-to-r from-bright-cyan to-bright-indigo rounded-full mx-auto mb-6 flex items-center justify-center">
                    <span class="text-2xl font-bold text-white">MJ</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Maria Johnson</h3>
                <p class="text-bright-cyan mb-4">{{ __('about.cto_role') }}</p>
                <p class="text-gray-300">
                    {{ __('about.cto_bio') }}
                </p>
            </div>
            
            <!-- VP of Engineering -->
            <div class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl p-8 text-center hover:border-bright-indigo transition-all duration-300">
                <div class="w-24 h-24 bg-gradient-to-r from-bright-indigo to-bright-cyan rounded-full mx-auto mb-6 flex items-center justify-center">
                    <span class="text-2xl font-bold text-white">DW</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">David Wilson</h3>
                <p class="text-bright-cyan mb-4">{{ __('about.vp_role') }}</p>
                <p class="text-gray-300">
                    {{ __('about.vp_bio') }}
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-20 bg-gradient-to-r from-slate-900 to-deep-blue">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                {{ __('about.values_title') }} <span class="text-bright-indigo">{{ __('about.values_highlight') }}</span>
            </h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                {{ __('about.values_subtitle') }}
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Innovation -->
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-r from-bright-indigo to-bright-cyan rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">{{ __('about.value1_title') }}</h3>
                <p class="text-gray-300">
                    {{ __('about.value1_desc') }}
                </p>
            </div>
            
            <!-- Excellence -->
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-r from-bright-cyan to-bright-indigo rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">{{ __('about.value2_title') }}</h3>
                <p class="text-gray-300">
                    {{ __('about.value2_desc') }}
                </p>
            </div>
            
            <!-- Collaboration -->
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-r from-bright-indigo to-bright-cyan rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">{{ __('about.value3_title') }}</h3>
                <p class="text-gray-300">
                    {{ __('about.value3_desc') }}
                </p>
            </div>
            
            <!-- Integrity -->
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-r from-bright-cyan to-bright-indigo rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">{{ __('about.value4_title') }}</h3>
                <p class="text-gray-300">
                    {{ __('about.value4_desc') }}
                </p>
            </div>
        </div>
    </div>
</section>

@include('components.cta')
@endsection

