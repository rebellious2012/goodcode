@extends('layouts.app')

@section('title', __('services.title'))

@section('content')

{{-- ========== HERO ========== --}}
<section class="relative py-24 bg-gradient-to-br from-deep-blue via-slate-900 to-slate-800 overflow-hidden">
    {{-- Decorative background blobs --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-bright-indigo/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-80 h-80 bg-bright-cyan/10 rounded-full blur-3xl"></div>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-6 leading-tight">
            {{ __('services.hero_title') }} <span class="text-transparent bg-clip-text bg-gradient-to-r from-bright-indigo to-bright-cyan">{{ __('services.hero_highlight') }}</span>
        </h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto mb-10">
            {{ __('services.hero_subtitle') }}
        </p>
        {{-- Quick jump navigation --}}
        <div class="flex flex-wrap justify-center gap-3">
            <a href="#crm" class="text-sm text-gray-300 hover:text-bright-cyan transition-colors border border-slate-600 hover:border-bright-cyan/50 rounded-full px-4 py-2">{{ __('services.jump_crm') }}</a>
            <a href="#ready" class="text-sm text-gray-300 hover:text-bright-cyan transition-colors border border-slate-600 hover:border-bright-cyan/50 rounded-full px-4 py-2">{{ __('services.jump_ready') }}</a>
            <a href="#seo" class="text-sm text-gray-300 hover:text-bright-cyan transition-colors border border-slate-600 hover:border-bright-cyan/50 rounded-full px-4 py-2">{{ __('services.jump_seo') }}</a>
            <a href="#design" class="text-sm text-gray-300 hover:text-bright-cyan transition-colors border border-slate-600 hover:border-bright-cyan/50 rounded-full px-4 py-2">{{ __('services.jump_design') }}</a>
            <a href="#audit" class="text-sm text-gray-300 hover:text-bright-cyan transition-colors border border-slate-600 hover:border-bright-cyan/50 rounded-full px-4 py-2">{{ __('services.jump_audit') }}</a>
            <a href="#api" class="text-sm text-gray-300 hover:text-bright-cyan transition-colors border border-slate-600 hover:border-bright-cyan/50 rounded-full px-4 py-2">{{ __('services.jump_api') }}</a>
        </div>
    </div>
</section>


{{-- ========== SERVICE 1: CRM & ADMIN PANELS ========== --}}
<section id="crm" class="py-24 bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            {{-- Left: text --}}
            <div>
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-12 h-12 bg-gradient-to-br from-bright-indigo to-bright-cyan rounded-xl flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18"/>
                        </svg>
                    </div>
                    <span class="text-bright-cyan text-sm font-semibold tracking-widest uppercase">{{ __('services.crm_service_num') }}</span>
                </div>
                <h2 class="text-4xl font-bold text-white mb-5">{!! __('services.crm_title') !!}</h2>
                <p class="text-gray-300 text-lg mb-6">
                    {{ __('services.crm_desc') }}
                </p>

                {{-- Feature list --}}
                <ul class="space-y-4 mb-8">
                    @foreach([
                        [__('services.crm_feature_1_title'), __('services.crm_feature_1_desc')],
                        [__('services.crm_feature_2_title'), __('services.crm_feature_2_desc')],
                        [__('services.crm_feature_3_title'), __('services.crm_feature_3_desc')],
                        [__('services.crm_feature_4_title'), __('services.crm_feature_4_desc')],
                        [__('services.crm_feature_5_title'), __('services.crm_feature_5_desc')],
                    ] as [$title, $desc])
                    <li class="flex items-start gap-4 bg-slate-800/50 rounded-xl p-4 border border-slate-700 hover:border-bright-indigo/50 transition-colors">
                        <svg class="w-5 h-5 text-bright-cyan mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <div>
                            <div class="text-white font-semibold text-sm">{{ $title }}</div>
                            <div class="text-gray-400 text-sm mt-0.5">{{ $desc }}</div>
                        </div>
                    </li>
                    @endforeach
                </ul>

                <a href="/contact" class="inline-block bg-gradient-to-r from-bright-indigo to-bright-cyan text-white px-8 py-4 rounded-xl font-semibold hover:shadow-lg hover:shadow-bright-indigo/30 transition-all duration-300">
                    {{ __('services.crm_discuss_btn') }}
                </a>
            </div>

            {{-- Right: stack cards --}}
            <div class="grid grid-cols-2 gap-4">
                @foreach([
                    ['Laravel', __('services.crm_stack_backend_name'), __('services.crm_stack_backend_desc')],
                    ['Vue.js / React', __('services.crm_stack_frontend_name'), __('services.crm_stack_frontend_desc')],
                    ['PostgreSQL / MySQL', __('services.crm_stack_db_name'), __('services.crm_stack_db_desc')],
                    ['Redis & Queues', __('services.crm_stack_perf_name'), __('services.crm_stack_perf_desc')],
                    ['REST & GraphQL API', __('services.crm_stack_integrations_name'), __('services.crm_stack_integrations_desc')],
                    ['Docker / CI/CD', __('services.crm_stack_deploy_name'), __('services.crm_stack_deploy_desc')],
                ] as [$name, $cat, $desc])
                <div class="bg-slate-800 border border-slate-700 rounded-xl p-5 hover:border-bright-cyan/40 transition-colors group">
                    <div class="text-bright-cyan text-xs font-semibold uppercase tracking-wider mb-1 group-hover:text-bright-indigo transition-colors">{{ $cat }}</div>
                    <div class="text-white font-bold mb-1">{{ $name }}</div>
                    <div class="text-gray-400 text-xs">{{ $desc }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


{{-- ========== SERVICE 2: READY-MADE SOLUTIONS ========== --}}
<section id="ready" class="py-24 bg-slate-800/40">
    <div class="container mx-auto px-4">
        <div class="text-center mb-14">
            <div class="flex items-center justify-center gap-3 mb-4">
                <span class="text-bright-cyan text-sm font-semibold tracking-widest uppercase">{{ __('services.ready_service_num') }}</span>
            </div>
            <h2 class="text-4xl font-bold text-white mb-4">{!! __('services.ready_title') !!}</h2>
            <p class="text-gray-300 max-w-2xl mx-auto text-lg">
                {{ __('services.ready_subtitle') }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            @foreach([
                [
                    'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-2 10v-5a1 1 0 00-1-1h-2a1 1 0 00-1 1v5m4 0H9',
                    'title' => __('services.ready_solution_1_title'),
                    'badge' => __('services.ready_solution_1_badge'),
                    'desc' => __('services.ready_solution_1_desc'),
                    'tags' => [__('services.ready_solution_1_tag_1'), __('services.ready_solution_1_tag_2'), __('services.ready_solution_1_tag_3'), __('services.ready_solution_1_tag_4')],
                    'color' => 'bright-indigo',
                ],
                [
                    'icon' => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
                    'title' => __('services.ready_solution_2_title'),
                    'badge' => __('services.ready_solution_2_badge'),
                    'desc' => __('services.ready_solution_2_desc'),
                    'tags' => [__('services.ready_solution_2_tag_1'), __('services.ready_solution_2_tag_2'), __('services.ready_solution_2_tag_3'), __('services.ready_solution_2_tag_4')],
                    'color' => 'bright-cyan',
                ],
                [
                    'icon' => 'M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z',
                    'title' => __('services.ready_solution_3_title'),
                    'badge' => __('services.ready_solution_3_badge'),
                    'desc' => __('services.ready_solution_3_desc'),
                    'tags' => [__('services.ready_solution_3_tag_1'), __('services.ready_solution_3_tag_2'), __('services.ready_solution_3_tag_3'), __('services.ready_solution_3_tag_4')],
                    'color' => 'bright-indigo',
                ],
                [
                    'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2',
                    'title' => __('services.ready_solution_4_title'),
                    'badge' => __('services.ready_solution_4_badge'),
                    'desc' => __('services.ready_solution_4_desc'),
                    'tags' => [__('services.ready_solution_4_tag_1'), __('services.ready_solution_4_tag_2'), __('services.ready_solution_4_tag_3')],
                    'color' => 'bright-cyan',
                ],
                [
                    'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0',
                    'title' => __('services.ready_solution_5_title'),
                    'badge' => __('services.ready_solution_5_badge'),
                    'desc' => __('services.ready_solution_5_desc'),
                    'tags' => [__('services.ready_solution_5_tag_1'), __('services.ready_solution_5_tag_2'), __('services.ready_solution_5_tag_3')],
                    'color' => 'bright-indigo',
                ],
                [
                    'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253',
                    'title' => __('services.ready_solution_6_title'),
                    'badge' => __('services.ready_solution_6_badge'),
                    'desc' => __('services.ready_solution_6_desc'),
                    'tags' => [__('services.ready_solution_6_tag_1'), __('services.ready_solution_6_tag_2'), __('services.ready_solution_6_tag_3')],
                    'color' => 'bright-cyan',
                ],
            ] as $s)
            <div class="bg-slate-900/80 border border-slate-700 rounded-2xl p-6 hover:border-{{ $s['color'] }}/50 transition-all duration-300 group flex flex-col">
                <div class="flex items-start justify-between mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-bright-indigo/30 to-bright-cyan/30 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-bright-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $s['icon'] }}"/>
                        </svg>
                    </div>
                    <span class="text-xs font-semibold bg-{{ $s['color'] }}/20 text-{{ $s['color'] }} px-3 py-1 rounded-full border border-{{ $s['color'] }}/30">{{ $s['badge'] }}</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">{{ $s['title'] }}</h3>
                <p class="text-gray-400 text-sm mb-4 flex-1">{{ $s['desc'] }}</p>
                <div class="flex flex-wrap gap-2">
                    @foreach($s['tags'] as $t)
                    <span class="text-xs bg-slate-800 text-gray-400 px-2 py-1 rounded-md border border-slate-700">{{ $t }}</span>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center">
            <p class="text-gray-400 mb-5">{{ __('services.ready_demo_text') }}</p>
            <a href="/contact" class="inline-block bg-gradient-to-r from-bright-cyan to-bright-indigo text-white px-8 py-4 rounded-xl font-semibold hover:shadow-lg hover:shadow-bright-cyan/30 transition-all duration-300">
                {{ __('services.ready_demo_btn') }}
            </a>
        </div>
    </div>
</section>


{{-- ========== SERVICE 3: SEO & SMM ========== --}}
<section id="seo" class="py-24 bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            {{-- Left: visual --}}
            <div class="order-2 lg:order-1">
                <div class="bg-gradient-to-br from-bright-indigo/10 to-bright-cyan/10 border border-slate-700 rounded-2xl p-8">
                    <h3 class="text-xl font-bold text-white mb-6">{{ __('services.seo_complex_title') }}</h3>
                    <div class="space-y-5">
                        @foreach([
                            [__('services.seo_complex_1_title'), __('services.seo_complex_1_desc'), 'from-blue-500 to-indigo-600'],
                            [__('services.seo_complex_2_title'), __('services.seo_complex_2_desc'), 'from-indigo-500 to-purple-600'],
                            [__('services.seo_complex_3_title'), __('services.seo_complex_3_desc'), 'from-cyan-500 to-blue-600'],
                            [__('services.seo_complex_4_title'), __('services.seo_complex_4_desc'), 'from-teal-500 to-cyan-600'],
                            [__('services.seo_complex_5_title'), __('services.seo_complex_5_desc'), 'from-bright-indigo to-bright-cyan'],
                        ] as [$title, $desc, $grad])
                        <div class="flex items-start gap-4">
                            <div class="w-2 h-2 rounded-full bg-gradient-to-r {{ $grad }} mt-2 shrink-0"></div>
                            <div>
                                <div class="text-white font-semibold text-sm">{{ $title }}</div>
                                <div class="text-gray-400 text-xs mt-0.5">{{ $desc }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    {{-- Fake metrics --}}
                    <div class="grid grid-cols-3 gap-4 mt-8 pt-6 border-t border-slate-700">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-bright-cyan">+240%</div>
                            <div class="text-gray-400 text-xs mt-1">{{ __('services.seo_metric_1_title') }}</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-bright-indigo">TOP-3</div>
                            <div class="text-gray-400 text-xs mt-1">{{ __('services.seo_metric_2_title') }}</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-bright-cyan">×3.5</div>
                            <div class="text-gray-400 text-xs mt-1">{{ __('services.seo_metric_3_title') }}</div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right: text --}}
            <div class="order-1 lg:order-2">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-12 h-12 bg-gradient-to-br from-bright-cyan to-bright-indigo rounded-xl flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                    </div>
                    <span class="text-bright-cyan text-sm font-semibold tracking-widest uppercase">{{ __('services.seo_service_num') }}</span>
                </div>
                <h2 class="text-4xl font-bold text-white mb-5">{!! __('services.seo_title') !!}</h2>
                <p class="text-gray-300 text-lg mb-6">
                    {{ __('services.seo_desc_1') }}
                </p>
                <p class="text-gray-400 mb-8">
                    {{ __('services.seo_desc_2') }}
                </p>
                <div class="flex flex-wrap gap-3 mb-8">
                    @foreach(['Google Search', 'Instagram', 'Facebook', 'TikTok', 'LinkedIn', 'VK'] as $pl)
                    <span class="text-sm bg-slate-800 text-gray-300 px-3 py-1.5 rounded-lg border border-slate-700">{{ $pl }}</span>
                    @endforeach
                </div>
                <a href="/contact" class="inline-block bg-gradient-to-r from-bright-cyan to-bright-indigo text-white px-8 py-4 rounded-xl font-semibold hover:shadow-lg hover:shadow-bright-cyan/30 transition-all duration-300">
                    {{ __('services.seo_strategy_btn') }}
                </a>
            </div>
        </div>
    </div>
</section>


{{-- ========== SERVICE 4: UI/UX DESIGN ========== --}}
<section id="design" class="py-24 bg-gradient-to-br from-slate-800/60 to-slate-900">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-12 h-12 bg-gradient-to-br from-bright-indigo to-bright-cyan rounded-xl flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                        </svg>
                    </div>
                    <span class="text-bright-cyan text-sm font-semibold tracking-widest uppercase">{{ __('services.design_service_num') }}</span>
                </div>
                <h2 class="text-4xl font-bold text-white mb-5">{{ __('services.design_title') }}</h2>
                <p class="text-gray-300 text-lg mb-6">
                    {{ __('services.design_desc') }}
                </p>

                <ul class="space-y-4 mb-8">
                    @foreach([
                        [__('services.design_list_1_title'), __('services.design_list_1_desc')],
                        [__('services.design_list_2_title'), __('services.design_list_2_desc')],
                        [__('services.design_list_3_title'), __('services.design_list_3_desc')],
                        [__('services.design_list_4_title'), __('services.design_list_4_desc')],
                        [__('services.design_list_5_title'), __('services.design_list_5_desc')],
                    ] as [$title, $desc])
                    <li class="flex items-start gap-4">
                        <div class="w-6 h-6 rounded-full bg-bright-indigo/20 border border-bright-indigo/50 flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-3 h-3 text-bright-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-white font-semibold text-sm">{{ $title }}</span>
                            <span class="text-gray-400 text-sm"> — {{ $desc }}</span>
                        </div>
                    </li>
                    @endforeach
                </ul>

                <a href="/contact" class="inline-block bg-gradient-to-r from-bright-indigo to-bright-cyan text-white px-8 py-4 rounded-xl font-semibold hover:shadow-lg hover:shadow-bright-indigo/30 transition-all duration-300">
                    {{ __('services.design_discuss_btn') }}
                </a>
            </div>

            {{-- Right: tools grid --}}
            <div>
                <div class="bg-slate-900/80 border border-slate-700 rounded-2xl p-8">
                    <h3 class="text-xl font-bold text-white mb-6">{{ __('services.design_process_title') }}</h3>
                    <div class="space-y-6">
                        @foreach([
                            ['1', __('services.design_process_1_title'), __('services.design_process_1_desc'), 'bright-indigo'],
                            ['2', __('services.design_process_2_title'), __('services.design_process_2_desc'), 'bright-cyan'],
                            ['3', __('services.design_process_3_title'), __('services.design_process_3_desc'), 'bright-indigo'],
                            ['4', __('services.design_process_4_title'), __('services.design_process_4_desc'), 'bright-cyan'],
                        ] as [$num, $title, $desc, $col])
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-{{ $col }}/20 border border-{{ $col }}/40 rounded-full flex items-center justify-center shrink-0">
                                <span class="text-{{ $col }} font-bold text-sm">{{ $num }}</span>
                            </div>
                            <div>
                                <div class="text-white font-semibold">{{ $title }}</div>
                                <div class="text-gray-400 text-sm mt-0.5">{{ $desc }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="mt-8 pt-6 border-t border-slate-700">
                        <div class="text-gray-400 text-sm mb-3">{{ __('services.design_tools_title') }}</div>
                        <div class="flex flex-wrap gap-2">
                            @foreach(['Figma', 'FigJam', 'Adobe XD', 'Illustrator', 'Photoshop', 'Lottie', 'Zeplin'] as $tool)
                            <span class="text-xs bg-slate-800 border border-slate-600 text-gray-300 px-3 py-1.5 rounded-lg">{{ $tool }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ========== SERVICE 5: BUSINESS AUDIT ========== --}}
<section id="audit" class="py-24 bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            {{-- Left: audit areas --}}
            <div class="order-2 lg:order-1">
                <div class="grid grid-cols-2 gap-4">
                    @foreach([
                        [__('services.audit_area_1_title'), __('services.audit_area_1_desc'), 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2'],
                        [__('services.audit_area_2_title'), __('services.audit_area_2_desc'), 'M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 10H3m18-10h-2m2 10h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z'],
                        [__('services.audit_area_3_title'), __('services.audit_area_3_desc'), 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z'],
                        [__('services.audit_area_4_title'), __('services.audit_area_4_desc'), 'M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z'],
                        [__('services.audit_area_5_title'), __('services.audit_area_5_desc'), 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0'],
                        [__('services.audit_area_6_title'), __('services.audit_area_6_desc'), 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z M15 12a3 3 0 11-6 0 3 3 0 016 0z'],
                    ] as [$title, $desc, $icon])
                    <div class="bg-slate-800/60 border border-slate-700 rounded-xl p-5 hover:border-bright-indigo/40 transition-colors">
                        <svg class="w-7 h-7 text-bright-cyan mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $icon }}"/>
                        </svg>
                        <div class="text-white font-semibold text-sm mb-1">{{ $title }}</div>
                        <div class="text-gray-400 text-xs">{{ $desc }}</div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Right: text --}}
            <div class="order-1 lg:order-2">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-12 h-12 bg-gradient-to-br from-bright-indigo to-bright-cyan rounded-xl flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                    <span class="text-bright-cyan text-sm font-semibold tracking-widest uppercase">{{ __('services.audit_service_num') }}</span>
                </div>
                <h2 class="text-4xl font-bold text-white mb-5">{{ __('services.audit_title') }}</h2>
                <p class="text-gray-300 text-lg mb-6">
                    {{ __('services.audit_desc_1') }}
                </p>
                <p class="text-gray-400 mb-6">
                    {{ __('services.audit_desc_2') }}
                </p>

                <div class="bg-slate-800/50 border border-slate-700 rounded-xl p-5 mb-8">
                    <div class="text-white font-semibold mb-3">{{ __('services.audit_output_title') }}</div>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li class="flex items-center gap-2"><span class="text-bright-cyan">→</span> {{ __('services.audit_output_1') }}</li>
                        <li class="flex items-center gap-2"><span class="text-bright-cyan">→</span> {{ __('services.audit_output_2') }}</li>
                        <li class="flex items-center gap-2"><span class="text-bright-cyan">→</span> {{ __('services.audit_output_3') }}</li>
                        <li class="flex items-center gap-2"><span class="text-bright-cyan">→</span> {{ __('services.audit_output_4') }}</li>
                        <li class="flex items-center gap-2"><span class="text-bright-cyan">→</span> {{ __('services.audit_output_5') }}</li>
                    </ul>
                </div>

                <a href="/contact" class="inline-block bg-gradient-to-r from-bright-indigo to-bright-cyan text-white px-8 py-4 rounded-xl font-semibold hover:shadow-lg hover:shadow-bright-indigo/30 transition-all duration-300">
                    {{ __('services.audit_btn') }}
                </a>
            </div>
        </div>
    </div>
</section>


{{-- ========== SERVICE 6: API & AI INTEGRATIONS ========== --}}
<section id="api" class="py-24 bg-gradient-to-br from-slate-800/40 to-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-14">
            <div class="flex items-center justify-center gap-3 mb-4">
                <span class="text-bright-cyan text-sm font-semibold tracking-widest uppercase">{{ __('services.api_service_num') }}</span>
            </div>
            <h2 class="text-4xl font-bold text-white mb-4">{{ __('services.api_title') }}</h2>
            <p class="text-gray-300 max-w-2xl mx-auto text-lg">
                {{ __('services.api_subtitle') }}
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">

            {{-- Telephony & Communication --}}
            <div class="bg-slate-900/80 border border-slate-700 rounded-2xl p-7 hover:border-bright-indigo/50 transition-all duration-300">
                <div class="w-12 h-12 bg-bright-indigo/20 border border-bright-indigo/40 rounded-xl flex items-center justify-center mb-5">
                    <svg class="w-6 h-6 text-bright-indigo" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">{{ __('services.api_block_1_title') }}</h3>
                <p class="text-gray-400 text-sm mb-5">{{ __('services.api_block_1_desc') }}</p>
                <div class="space-y-2">
                    @foreach([__('services.api_block_1_item_1'), 'Ringostat', 'Asterisk / FreePBX', 'Telegram Bot API', 'Viber Business', 'WhatsApp Business API'] as $item)
                    <div class="flex items-center gap-2 text-sm text-gray-300">
                        <div class="w-1.5 h-1.5 rounded-full bg-bright-indigo"></div>
                        {{ $item }}
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- 1C & ERP integrations --}}
            <div class="bg-slate-900/80 border border-slate-700 rounded-2xl p-7 hover:border-bright-cyan/50 transition-all duration-300">
                <div class="w-12 h-12 bg-bright-cyan/20 border border-bright-cyan/40 rounded-xl flex items-center justify-center mb-5">
                    <svg class="w-6 h-6 text-bright-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">{{ __('services.api_block_2_title') }}</h3>
                <p class="text-gray-400 text-sm mb-5">{{ __('services.api_block_2_desc') }}</p>
                <div class="space-y-2">
                    @foreach([__('services.api_block_2_item_1'), __('services.api_block_2_item_2'), __('services.api_block_2_item_3'), __('services.api_block_2_item_4'), 'Odoo', 'amoCRM / Salesforce'] as $item)
                    <div class="flex items-center gap-2 text-sm text-gray-300">
                        <div class="w-1.5 h-1.5 rounded-full bg-bright-cyan"></div>
                        {{ $item }}
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- AI Solutions --}}
            <div class="bg-slate-900/80 border border-slate-700 rounded-2xl p-7 hover:border-bright-indigo/50 transition-all duration-300 relative overflow-hidden">
                <div class="absolute top-3 right-3 bg-gradient-to-r from-bright-indigo to-bright-cyan text-white text-xs px-2.5 py-1 rounded-full font-semibold">{{ __('services.api_trending') }}</div>
                <div class="w-12 h-12 bg-gradient-to-br from-bright-indigo/30 to-bright-cyan/30 border border-bright-indigo/40 rounded-xl flex items-center justify-center mb-5">
                    <svg class="w-6 h-6 text-bright-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">{{ __('services.api_block_3_title') }}</h3>
                <p class="text-gray-400 text-sm mb-5">{{ __('services.api_block_3_desc') }}</p>
                <div class="space-y-2">
                    @foreach([__('services.api_block_3_item_1'), __('services.api_block_3_item_2'), __('services.api_block_3_item_3'), __('services.api_block_3_item_4'), __('services.api_block_3_item_5'), __('services.api_block_3_item_6')] as $item)
                    <div class="flex items-center gap-2 text-sm text-gray-300">
                        <div class="w-1.5 h-1.5 rounded-full bg-gradient-to-r from-bright-indigo to-bright-cyan"></div>
                        {{ $item }}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Payment gateways --}}
        <div class="bg-slate-900/60 border border-slate-700 rounded-2xl p-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div>
                    <h3 class="text-xl font-bold text-white mb-3">{{ __('services.api_payment_title') }}</h3>
                    <p class="text-gray-400 text-sm mb-4">{{ __('services.api_payment_desc') }}</p>
                    <a href="/contact" class="inline-block bg-gradient-to-r from-bright-indigo to-bright-cyan text-white px-7 py-3.5 rounded-xl font-semibold text-sm hover:shadow-lg hover:shadow-bright-indigo/30 transition-all duration-300">
                        {{ __('services.api_payment_btn') }}
                    </a>
                </div>
                <div class="flex flex-wrap gap-3">
                    @foreach(['Stripe', 'LiqPay', 'Fondy / CloudPayments', 'PayPal', 'Przelewy24', 'Mono / PrivatBank API', 'Google Pay / Apple Pay'] as $p)
                    <span class="text-sm bg-slate-800 border border-slate-600 text-gray-300 px-4 py-2 rounded-xl">{{ $p }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


@include('components.cta')
@endsection
