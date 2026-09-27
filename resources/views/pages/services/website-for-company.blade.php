@extends('layouts.app')

@section('title', __('website-for-company.title'))
@section('meta_description', __('website-for-company.meta_description'))
@section('og_type', 'website')

@section('head_extra')
@php
$faq = [
    ['q' => __('website-for-company.faq_1_q'), 'a' => __('website-for-company.faq_1_a')],
    ['q' => __('website-for-company.faq_2_q'), 'a' => __('website-for-company.faq_2_a')],
    ['q' => __('website-for-company.faq_3_q'), 'a' => __('website-for-company.faq_3_a')],
    ['q' => __('website-for-company.faq_4_q'), 'a' => __('website-for-company.faq_4_a')],
    ['q' => __('website-for-company.faq_5_q'), 'a' => __('website-for-company.faq_5_a')],
    ['q' => __('website-for-company.faq_6_q'), 'a' => __('website-for-company.faq_6_a')],
];

$faqSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => array_map(function ($item) {
        return [
            '@type' => 'Question',
            'name' => $item['q'],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => $item['a']],
        ];
    }, $faq),
];

$serviceSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => __('website-for-company.title'),
    'description' => __('website-for-company.meta_description'),
    'provider' => [
        '@id' => 'https://codelevator.top/#organization',
    ],
    'areaServed' => 'PL',
    'availableLanguage' => ['en', 'pl', 'ru', 'uk'],
];
@endphp
<script type="application/ld+json">{!! json_encode($serviceSchema, JSON_UNESCAPED_SLASHES) !!}</script>
<script type="application/ld+json">{!! json_encode($faqSchema, JSON_UNESCAPED_SLASHES) !!}</script>
@endsection

@section('content')

{{-- ========== HERO ========== --}}
<section class="relative py-24 bg-gradient-to-br from-deep-blue via-slate-900 to-slate-800 overflow-hidden">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-bright-indigo/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-80 h-80 bg-bright-cyan/10 rounded-full blur-3xl"></div>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <span class="inline-block text-xs font-semibold tracking-widest uppercase text-bright-cyan border border-bright-cyan/30 rounded-full px-4 py-1.5 mb-6">
            {{ __('website-for-company.hero_badge') }}
        </span>
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight max-w-4xl mx-auto">
            {{ __('website-for-company.hero_title') }} <span class="text-transparent bg-clip-text bg-gradient-to-r from-bright-indigo to-bright-cyan">{{ __('website-for-company.hero_highlight') }}</span>
        </h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto mb-10 leading-relaxed">
            {{ __('website-for-company.hero_subtitle') }}
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="{{ route('contact') }}" class="bg-gradient-to-r from-bright-indigo to-bright-cyan text-white px-8 py-4 rounded-xl font-semibold hover:shadow-lg hover:shadow-bright-indigo/30 transition-all duration-300">
                {{ __('website-for-company.hero_cta_primary') }}
            </a>
            <a href="#process" class="border border-slate-600 text-white px-8 py-4 rounded-xl font-semibold hover:border-bright-cyan/50 transition-colors duration-300">
                {{ __('website-for-company.hero_cta_secondary') }}
            </a>
        </div>
    </div>
</section>

{{-- ========== ABOUT NOTE ========== --}}
<section class="py-10 bg-slate-900 border-b border-slate-800">
    <div class="container mx-auto px-4">
        <p class="max-w-3xl mx-auto text-center text-lg text-gray-300 leading-relaxed border-l-2 border-bright-cyan/60 pl-6">
            {{ __('website-for-company.about_note') }}
        </p>
    </div>
</section>

{{-- ========== TYPES ========== --}}
<section id="types" class="py-24 bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-14">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">{{ __('website-for-company.types_title') }}</h2>
            <p class="text-gray-400 max-w-2xl mx-auto text-lg">{{ __('website-for-company.types_subtitle') }}</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
                ['M4 6h16M4 12h16M4 18h16', 'types_1_title', 'types_1_desc', 'bright-indigo'],
                ['M3 12l9-9 9 9M5 10v10a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V10M9 21h6', 'types_2_title', 'types_2_desc', 'bright-cyan'],
                ['M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z', 'types_3_title', 'types_3_desc', 'bright-indigo'],
                ['M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4', 'types_4_title', 'types_4_desc', 'bright-cyan'],
                ['M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z', 'types_5_title', 'types_5_desc', 'bright-indigo'],
                ['M4 4v16h16M4 7h9v9M13 7l7 7', 'types_6_title', 'types_6_desc', 'bright-cyan'],
            ] as [$icon, $t, $d, $color])
            <div class="bg-slate-800/60 border border-slate-700 rounded-2xl p-8 hover:border-{{ $color }}/50 transition-all duration-300 group">
                <div class="w-14 h-14 bg-gradient-to-br from-bright-indigo/30 to-bright-cyan/30 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-bright-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $icon }}"/></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">{{ __("website-for-company.$t") }}</h3>
                <p class="text-gray-400 leading-relaxed">{{ __("website-for-company.$d") }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ========== PROCESS ========== --}}
<section id="process" class="py-24 bg-gradient-to-br from-slate-800/40 to-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-14">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">{{ __('website-for-company.process_title') }}</h2>
            <p class="text-gray-400 max-w-2xl mx-auto text-lg">{{ __('website-for-company.process_subtitle') }}</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-6">
            @foreach([
                ['1', 'process_1_title', 'process_1_desc', 'bright-indigo'],
                ['2', 'process_2_title', 'process_2_desc', 'bright-cyan'],
                ['3', 'process_3_title', 'process_3_desc', 'bright-indigo'],
                ['4', 'process_4_title', 'process_4_desc', 'bright-cyan'],
                ['5', 'process_5_title', 'process_5_desc', 'bright-indigo'],
            ] as [$num, $t, $d, $color])
            <div class="bg-slate-900/80 border border-slate-700 rounded-2xl p-6 text-center hover:border-bright-indigo/40 transition-colors">
                <div class="w-12 h-12 mx-auto bg-{{ $color }}/20 border border-{{ $color }}/40 rounded-full flex items-center justify-center mb-4">
                    <span class="text-{{ $color }} font-bold text-lg">{{ $num }}</span>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">{{ __("website-for-company.$t") }}</h3>
                <p class="text-gray-400 text-sm leading-relaxed">{{ __("website-for-company.$d") }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ========== TIMELINE ========== --}}
<section class="py-20 bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">{{ __('website-for-company.timeline_title') }}</h2>
            <p class="text-gray-400 max-w-2xl mx-auto text-lg">{{ __('website-for-company.timeline_subtitle') }}</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach([
                ['timeline_1_period', 'timeline_1_title', 'bright-indigo'],
                ['timeline_2_period', 'timeline_2_title', 'bright-cyan'],
                ['timeline_3_period', 'timeline_3_title', 'bright-indigo'],
            ] as [$p, $t, $color])
            <div class="bg-slate-800/60 border border-slate-700 rounded-2xl p-8 text-center">
                <div class="text-{{ $color }} font-bold text-sm uppercase tracking-widest mb-2">{{ __("website-for-company.$p") }}</div>
                <div class="text-white font-bold text-lg">{{ __("website-for-company.$t") }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ========== PRICING ========== --}}
<section id="pricing" class="py-24 bg-gradient-to-br from-slate-800/40 to-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-14">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">{{ __('website-for-company.pricing_title') }}</h2>
            <p class="text-gray-400 max-w-2xl mx-auto text-lg">{{ __('website-for-company.pricing_subtitle') }}</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach([
                ['pricing_1_title', 'pricing_1_desc', 'pricing_1_price', ['pricing_1_feature_1', 'pricing_1_feature_2', 'pricing_1_feature_3'], false],
                ['pricing_2_title', 'pricing_2_desc', 'pricing_2_price', ['pricing_2_feature_1', 'pricing_2_feature_2', 'pricing_2_feature_3'], true],
                ['pricing_3_title', 'pricing_3_desc', 'pricing_3_price', ['pricing_3_feature_1', 'pricing_3_feature_2', 'pricing_3_feature_3'], false],
                ['pricing_4_title', 'pricing_4_desc', 'pricing_4_price', ['pricing_4_feature_1', 'pricing_4_feature_2', 'pricing_4_feature_3'], false],
            ] as [$t, $d, $price, $features, $featured])
            <div class="{{ $featured ? 'bg-gradient-to-b from-bright-indigo/20 to-bright-cyan/10 border-bright-indigo/50' : 'bg-slate-900/80 border-slate-700' }} border rounded-2xl p-8 flex flex-col">
                <h3 class="text-xl font-bold text-white mb-1">{{ __("website-for-company.$t") }}</h3>
                <p class="text-gray-400 text-sm mb-4">{{ __("website-for-company.$d") }}</p>
                <div class="text-3xl font-bold text-bright-cyan mb-6">{{ __("website-for-company.$price") }}</div>
                <ul class="space-y-3 mb-8 flex-1">
                    @foreach($features as $f)
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-bright-cyan mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-gray-300 text-sm">{{ __("website-for-company.$f") }}</span>
                    </li>
                    @endforeach
                </ul>
                <a href="{{ route('contact') }}" class="text-center bg-gradient-to-r from-bright-indigo to-bright-cyan text-white px-6 py-3.5 rounded-xl font-semibold hover:shadow-lg hover:shadow-bright-indigo/30 transition-all duration-300">
                    {{ __('website-for-company.hero_cta_primary') }}
                </a>
            </div>
            @endforeach
        </div>
        <p class="text-center text-gray-400 mt-8">{{ __('website-for-company.pricing_note') }}</p>
    </div>
</section>

{{-- ========== CASES ========== --}}
<section class="py-24 bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-14">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">{{ __('website-for-company.cases_title') }}</h2>
            <p class="text-gray-400 max-w-2xl mx-auto text-lg">{{ __('website-for-company.cases_subtitle') }}</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach([
                ['M3 7a2 2 0 012-2h4l2 2h8a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V7z', 'case_1_title', 'case_1_desc'],
                ['M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z', 'case_2_title', 'case_2_desc'],
                ['M3 12l9-9 9 9M5 10v10a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V10M9 21h6', 'case_3_title', 'case_3_desc'],
            ] as [$icon, $t, $d])
            <div class="bg-slate-800/60 border border-slate-700 rounded-2xl p-8 hover:border-bright-cyan/40 transition-all duration-300 group">
                <div class="w-14 h-14 bg-gradient-to-br from-bright-indigo/30 to-bright-cyan/30 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-bright-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $icon }}"/></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">{{ __("website-for-company.$t") }}</h3>
                <p class="text-gray-400 leading-relaxed">{{ __("website-for-company.$d") }}</p>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-10">
            <a href="{{ route('portfolio') }}" class="inline-block border border-slate-600 text-white px-8 py-4 rounded-xl font-semibold hover:border-bright-cyan/50 transition-colors duration-300">
                {{ __('website-for-company.case_more') }}
            </a>
        </div>
    </div>
</section>

{{-- ========== FAQ ========== --}}
<section id="faq" class="py-24 bg-gradient-to-br from-slate-800/40 to-slate-900">
    <div class="container mx-auto px-4 max-w-4xl">
        <div class="text-center mb-14">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">{{ __('website-for-company.faq_title') }}</h2>
        </div>
        <div x-data="{ open: null }" class="space-y-4">
            @foreach($faq as $i => $item)
            <div class="bg-slate-900/80 border border-slate-700 rounded-2xl overflow-hidden">
                <button @click="open = open === {{ $i }} ? null : {{ $i }}" class="w-full flex items-center justify-between text-left p-6">
                    <span class="text-white font-semibold">{{ $item['q'] }}</span>
                    <svg class="w-5 h-5 text-bright-cyan shrink-0 ml-4 transition-transform" :class="open === {{ $i }} ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open === {{ $i }}" x-transition class="px-6 pb-6 text-gray-400 leading-relaxed">
                    {{ $item['a'] }}
                </div>
            </div>
            @endforeach
        </div>
        <p class="text-center text-gray-400 mt-8">
            {{ __('website-for-company.faq_more') }}
            <a href="{{ route('contact') }}" class="text-bright-cyan hover:text-bright-indigo-light transition-colors"> → {{ __('website-for-company.hero_cta_primary') }}</a>
        </p>
    </div>
</section>

{{-- ========== CTA ========== --}}
<section class="py-24 bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="bg-gradient-to-r from-bright-indigo to-bright-cyan rounded-[2.5rem] p-12 md:p-16 text-center relative overflow-hidden shadow-2xl shadow-bright-indigo/20">
            <div class="relative z-10">
                <h2 class="text-3xl md:text-5xl font-bold text-white mb-6 leading-tight">{{ __('website-for-company.cta_title') }}</h2>
                <p class="text-white/90 text-xl mb-10 max-w-2xl mx-auto">{{ __('website-for-company.cta_subtitle') }}</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-8">
                    <a href="{{ route('contact') }}" class="bg-white text-bright-indigo px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition-all duration-300 shadow-xl">
                        {{ __('website-for-company.cta_button_contact') }}
                    </a>
                    <a href="https://t.me/green4kife" target="_blank" rel="noopener" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-bright-indigo transition-all duration-300">
                        {{ __('website-for-company.cta_button_telegram') }}
                    </a>
                    <a href="https://wa.me/48883219797" target="_blank" rel="noopener" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-bright-indigo transition-all duration-300">
                        {{ __('website-for-company.cta_button_whatsapp') }}
                    </a>
                </div>
                <div class="flex flex-wrap justify-center items-center gap-8 text-white/80">
                    <div class="flex items-center space-x-2"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>{{ __('website-for-company.cta_feature_free') }}</span></div>
                    <div class="flex items-center space-x-2"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>{{ __('website-for-company.cta_feature_quote') }}</span></div>
                    <div class="flex items-center space-x-2"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg><span>{{ __('website-for-company.cta_feature_response') }}</span></div>
                </div>
            </div>
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-black/10 rounded-full blur-3xl"></div>
        </div>
    </div>
</section>

@endsection
