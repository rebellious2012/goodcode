@extends('layouts.app')

@section('title', __('services.title'))

@section('content')
<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-deep-blue via-slate-900 to-slate-800">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">
            {{ __('services.hero_title') }} <span class="text-bright-indigo">{{ __('services.hero_highlight') }}</span>
        </h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">
            {{ __('services.hero_subtitle') }}
        </p>
    </div>
</section>

<!-- Services Overview -->
@include('components.services')

<!-- Detailed Services -->
<section class="py-20 bg-slate-900/30">
    <div class="container mx-auto px-4">
        <!-- Custom Software Development -->
        <div class="mb-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-white mb-6">{{ __('services.detailed_software_title') }}</h2>
                    <p class="text-lg text-gray-300 mb-6">
                        {{ __('services.detailed_software_desc') }}
                    </p>
                    <ul class="space-y-3 text-gray-300 mb-8">
                        <li class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-bright-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>{{ __('services.detailed_software_feature1') }}</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-bright-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>{{ __('services.detailed_software_feature2') }}</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-bright-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>{{ __('services.detailed_software_feature3') }}</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-bright-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>{{ __('services.detailed_software_feature4') }}</span>
                        </li>
                    </ul>
                    <a href="/contact" class="bg-gradient-to-r from-bright-indigo to-bright-cyan text-white px-8 py-4 rounded-lg font-semibold hover:shadow-lg transition-all duration-300">
                        {{ __('services.get_started_button') }}
                    </a>
                </div>
                <div class="bg-gradient-to-br from-bright-indigo/20 to-bright-cyan/20 rounded-xl p-8 border border-bright-indigo/30">
                    <h3 class="text-2xl font-bold text-white mb-6">{{ __('services.tech_we_use_title') }}</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-slate-900/50 rounded-lg p-4 text-center">
                            <div class="text-bright-cyan font-semibold">{{ __('services.tech_backend') }}</div>
                            <div class="text-gray-300 text-sm mt-2">{{ __('services.tech_backend_list') }}</div>
                        </div>
                        <div class="bg-slate-900/50 rounded-lg p-4 text-center">
                            <div class="text-bright-cyan font-semibold">{{ __('services.tech_frontend') }}</div>
                            <div class="text-gray-300 text-sm mt-2">{{ __('services.tech_frontend_list') }}</div>
                        </div>
                        <div class="bg-slate-900/50 rounded-lg p-4 text-center">
                            <div class="text-bright-cyan font-semibold">{{ __('services.tech_database') }}</div>
                            <div class="text-gray-300 text-sm mt-2">{{ __('services.tech_database_list') }}</div>
                        </div>
                        <div class="bg-slate-900/50 rounded-lg p-4 text-center">
                            <div class="text-bright-cyan font-semibold">{{ __('services.tech_cloud') }}</div>
                            <div class="text-gray-300 text-sm mt-2">{{ __('services.tech_cloud_list') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cloud Solutions -->
        <div class="mb-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="order-2 lg:order-1">
                    <div class="bg-gradient-to-br from-bright-cyan/20 to-bright-indigo/20 rounded-xl p-8 border border-bright-cyan/30">
                        <h3 class="text-2xl font-bold text-white mb-6">{{ __('services.cloud_benefits_title') }}</h3>
                        <div class="space-y-4">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-bright-cyan/20 rounded-lg flex items-center justify-center">
                                    <span class="text-bright-cyan font-bold">{{ __('services.cloud_benefit1_number') }}</span>
                                </div>
                                <div>
                                    <div class="text-white font-semibold">{{ __('services.cloud_benefit1_title') }}</div>
                                    <div class="text-gray-300 text-sm">{{ __('services.cloud_benefit1_desc') }}</div>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-bright-cyan/20 rounded-lg flex items-center justify-center">
                                    <span class="text-bright-cyan font-bold">{{ __('services.cloud_benefit2_number') }}</span>
                                </div>
                                <div>
                                    <div class="text-white font-semibold">{{ __('services.cloud_benefit2_title') }}</div>
                                    <div class="text-gray-300 text-sm">{{ __('services.cloud_benefit2_desc') }}</div>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-bright-cyan/20 rounded-lg flex items-center justify-center">
                                    <span class="text-bright-cyan font-bold">{{ __('services.cloud_benefit3_number') }}</span>
                                </div>
                                <div>
                                    <div class="text-white font-semibold">{{ __('services.cloud_benefit3_title') }}</div>
                                    <div class="text-gray-300 text-sm">{{ __('services.cloud_benefit3_desc') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="order-1 lg:order-2">
                    <h2 class="text-4xl font-bold text-white mb-6">{{ __('services.detailed_cloud_title') }}</h2>
                    <p class="text-lg text-gray-300 mb-6">
                        {{ __('services.detailed_cloud_desc') }}
                    </p>
                    <ul class="space-y-3 text-gray-300 mb-8">
                        <li class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-bright-indigo" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>{{ __('services.detailed_cloud_feature1') }}</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-bright-indigo" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>{{ __('services.detailed_cloud_feature2') }}</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-bright-indigo" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>{{ __('services.detailed_cloud_feature3') }}</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-bright-indigo" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>{{ __('services.detailed_cloud_feature4') }}</span>
                        </li>
                    </ul>
                    <a href="/contact" class="bg-gradient-to-r from-bright-cyan to-bright-indigo text-white px-8 py-4 rounded-lg font-semibold hover:shadow-lg transition-all duration-300">
                        {{ __('services.start_migration_button') }}
                    </a>
                </div>
            </div>
        </div>

        <!-- Mobile Development -->
        <div class="mb-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-white mb-6">{{ __('services.detailed_mobile_title') }}</h2>
                    <p class="text-lg text-gray-300 mb-6">
                        {{ __('services.detailed_mobile_desc') }}
                    </p>
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="bg-slate-900/50 rounded-lg p-4 text-center border border-slate-700">
                            <div class="text-bright-cyan font-semibold mb-2">{{ __('services.mobile_tech_ios') }}</div>
                            <div class="text-gray-300 text-sm">{{ __('services.mobile_tech_ios_list') }}</div>
                        </div>
                        <div class="bg-slate-900/50 rounded-lg p-4 text-center border border-slate-700">
                            <div class="text-bright-cyan font-semibold mb-2">{{ __('services.mobile_tech_android') }}</div>
                            <div class="text-gray-300 text-sm">{{ __('services.mobile_tech_android_list') }}</div>
                        </div>
                        <div class="bg-slate-900/50 rounded-lg p-4 text-center border border-slate-700">
                            <div class="text-bright-cyan font-semibold mb-2">{{ __('services.mobile_tech_cross') }}</div>
                            <div class="text-gray-300 text-sm">{{ __('services.mobile_tech_cross_list') }}</div>
                        </div>
                        <div class="bg-slate-900/50 rounded-lg p-4 text-center border border-slate-700">
                            <div class="text-bright-cyan font-semibold mb-2">{{ __('services.mobile_tech_pwa') }}</div>
                            <div class="text-gray-300 text-sm">{{ __('services.mobile_tech_pwa_list') }}</div>
                        </div>
                    </div>
                    <a href="/contact" class="bg-gradient-to-r from-bright-indigo to-bright-cyan text-white px-8 py-4 rounded-lg font-semibold hover:shadow-lg transition-all duration-300">
                        {{ __('services.build_your_app_button') }}
                    </a>
                </div>
                <div class="bg-gradient-to-br from-bright-indigo/20 to-bright-cyan/20 rounded-xl p-8 border border-bright-indigo/30">
                    <h3 class="text-2xl font-bold text-white mb-6">{{ __('services.app_dev_process_title') }}</h3>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 bg-bright-indigo rounded-full flex items-center justify-center text-white font-bold text-sm">1</div>
                            <div>
                                <div class="text-white font-semibold">{{ __('services.app_dev_step1_title') }}</div>
                                <div class="text-gray-300 text-sm">{{ __('services.app_dev_step1_desc') }}</div>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 bg-bright-cyan rounded-full flex items-center justify-center text-white font-bold text-sm">2</div>
                            <div>
                                <div class="text-white font-semibold">{{ __('services.app_dev_step2_title') }}</div>
                                <div class="text-gray-300 text-sm">{{ __('services.app_dev_step2_desc') }}</div>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 bg-bright-indigo rounded-full flex items-center justify-center text-white font-bold text-sm">3</div>
                            <div>
                                <div class="text-white font-semibold">{{ __('services.app_dev_step3_title') }}</div>
                                <div class="text-gray-300 text-sm">{{ __('services.app_dev_step3_desc') }}</div>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 bg-bright-cyan rounded-full flex items-center justify-center text-white font-bold text-sm">4</div>
                            <div>
                                <div class="text-white font-semibold">{{ __('services.app_dev_step4_title') }}</div>
                                <div class="text-gray-300 text-sm">{{ __('services.app_dev_step4_desc') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-20 bg-gradient-to-r from-slate-900 to-deep-blue">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                {{ __('services.process_title') }} <span class="text-bright-cyan">{{ __('services.process_highlight') }}</span>
            </h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                {{ __('services.process_subtitle') }}
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-r from-bright-indigo to-bright-cyan rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-white">1</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">{{ __('services.process_step1_title') }}</h3>
                <p class="text-gray-300">
                    {{ __('services.process_step1_desc') }}
                </p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-r from-bright-cyan to-bright-indigo rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-white">2</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">{{ __('services.process_step2_title') }}</h3>
                <p class="text-gray-300">
                    {{ __('services.process_step2_desc') }}
                </p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-r from-bright-indigo to-bright-cyan rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-white">3</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">{{ __('services.process_step3_title') }}</h3>
                <p class="text-gray-300">
                    {{ __('services.process_step3_desc') }}
                </p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-r from-bright-cyan to-bright-indigo rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-white">4</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">{{ __('services.process_step4_title') }}</h3>
                <p class="text-gray-300">
                    {{ __('services.process_step4_desc') }}
                </p>
            </div>
        </div>
    </div>
</section>

@include('components.cta')
@endsection

