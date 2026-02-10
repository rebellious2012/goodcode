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
            @foreach($portfolioItems as $item)
            <div class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl overflow-hidden hover:border-bright-indigo transition-all duration-300 group"
                 x-show="activeFilter === 'all' || activeFilter === '{{ strtolower($item->category) }}'" x-transition>
                <div class="h-48 bg-gradient-to-br from-bright-indigo to-bright-cyan flex items-center justify-center">
                    @if($item->image)
                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-full h-full object-cover">
                   <div class="text-sm opacity-80">{{ $item->type }}</div>
                        @else
                    <div class="text-white text-center">
                        <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                        <div class="text-sm opacity-80">{{ $item->type }}</div>
                    </div>
                    @endif
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-3">{{ $item->title }}</h3>
                    <p class="text-gray-300 mb-4">
                        {{ $item->description }}
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach($item->technologies as $tech)
                        <span class="px-3 py-1 bg-bright-indigo/20 text-bright-indigo rounded-full text-sm">{{ $tech }}</span>
                        @endforeach
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-400 text-sm">{{ $item->category }}</span>
                        <a href="#" class="text-bright-cyan hover:text-bright-indigo transition-colors font-semibold">
                            {{ __('portfolio.view_details') }} →
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
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
