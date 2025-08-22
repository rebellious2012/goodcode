@extends('layouts.app')

@section('title', 'Portfolio - TechFlow Solutions | Our Success Stories & Case Studies')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-deep-blue via-slate-900 to-slate-800">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">
            Our <span class="text-bright-indigo">Portfolio</span>
        </h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">
            Explore our successful projects and discover how we've helped businesses across various industries achieve their digital transformation goals.
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
                All Projects
            </button>
            <button @click="activeFilter = 'web'" 
                    :class="activeFilter === 'web' ? 'bg-bright-indigo text-white' : 'bg-slate-800 text-gray-300 hover:bg-slate-700'"
                    class="px-6 py-3 rounded-lg font-semibold transition-all duration-300">
                Web Development
            </button>
            <button @click="activeFilter = 'mobile'" 
                    :class="activeFilter === 'mobile' ? 'bg-bright-indigo text-white' : 'bg-slate-800 text-gray-300 hover:bg-slate-700'"
                    class="px-6 py-3 rounded-lg font-semibold transition-all duration-300">
                Mobile Apps
            </button>
            <button @click="activeFilter = 'cloud'" 
                    :class="activeFilter === 'cloud' ? 'bg-bright-indigo text-white' : 'bg-slate-800 text-gray-300 hover:bg-slate-700'"
                    class="px-6 py-3 rounded-lg font-semibold transition-all duration-300">
                Cloud Solutions
            </button>
            <button @click="activeFilter = 'enterprise'" 
                    :class="activeFilter === 'enterprise' ? 'bg-bright-indigo text-white' : 'bg-slate-800 text-gray-300 hover:bg-slate-700'"
                    class="px-6 py-3 rounded-lg font-semibold transition-all duration-300">
                Enterprise Software
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
                        <div class="text-sm opacity-80">E-commerce Platform</div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-3">Global Fashion Marketplace</h3>
                    <p class="text-gray-300 mb-4">
                        Built a scalable e-commerce platform handling 100K+ daily transactions with advanced inventory management and AI-powered recommendations.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-bright-indigo/20 text-bright-indigo rounded-full text-sm">React</span>
                        <span class="px-3 py-1 bg-bright-cyan/20 text-bright-cyan rounded-full text-sm">Node.js</span>
                        <span class="px-3 py-1 bg-bright-indigo/20 text-bright-indigo rounded-full text-sm">AWS</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-400 text-sm">Fashion & Retail</span>
                        <a href="#" class="text-bright-cyan hover:text-bright-indigo transition-colors font-semibold">
                            View Details →
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
                        <div class="text-sm opacity-80">FinTech Application</div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-3">Digital Banking Solution</h3>
                    <p class="text-gray-300 mb-4">
                        Developed a secure mobile banking app with biometric authentication, real-time transactions, and comprehensive financial analytics.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-bright-cyan/20 text-bright-cyan rounded-full text-sm">Flutter</span>
                        <span class="px-3 py-1 bg-bright-indigo/20 text-bright-indigo rounded-full text-sm">Python</span>
                        <span class="px-3 py-1 bg-bright-cyan/20 text-bright-cyan rounded-full text-sm">Blockchain</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-400 text-sm">Financial Services</span>
                        <a href="#" class="text-bright-cyan hover:text-bright-indigo transition-colors font-semibold">
                            View Details →
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
                        <div class="text-sm opacity-80">Healthcare Platform</div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-3">Telemedicine Platform</h3>
                    <p class="text-gray-300 mb-4">
                        Created a comprehensive telemedicine solution connecting patients with healthcare providers through secure video consultations.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-bright-indigo/20 text-bright-indigo rounded-full text-sm">Vue.js</span>
                        <span class="px-3 py-1 bg-bright-cyan/20 text-bright-cyan rounded-full text-sm">Laravel</span>
                        <span class="px-3 py-1 bg-bright-indigo/20 text-bright-indigo rounded-full text-sm">WebRTC</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-400 text-sm">Healthcare</span>
                        <a href="#" class="text-bright-cyan hover:text-bright-indigo transition-colors font-semibold">
                            View Details →
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
                        <div class="text-sm opacity-80">Cloud Migration</div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-3">Enterprise Cloud Migration</h3>
                    <p class="text-gray-300 mb-4">
                        Migrated a Fortune 500 company's entire infrastructure to AWS, reducing costs by 40% and improving performance by 60%.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-bright-cyan/20 text-bright-cyan rounded-full text-sm">AWS</span>
                        <span class="px-3 py-1 bg-bright-indigo/20 text-bright-indigo rounded-full text-sm">Kubernetes</span>
                        <span class="px-3 py-1 bg-bright-cyan/20 text-bright-cyan rounded-full text-sm">Terraform</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-400 text-sm">Manufacturing</span>
                        <a href="#" class="text-bright-cyan hover:text-bright-indigo transition-colors font-semibold">
                            View Details →
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
                        <div class="text-sm opacity-80">Food Delivery App</div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-3">FoodFlow Delivery Platform</h3>
                    <p class="text-gray-300 mb-4">
                        Built a comprehensive food delivery ecosystem with customer, restaurant, and driver apps, serving 50+ cities.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-bright-indigo/20 text-bright-indigo rounded-full text-sm">React Native</span>
                        <span class="px-3 py-1 bg-bright-cyan/20 text-bright-cyan rounded-full text-sm">Node.js</span>
                        <span class="px-3 py-1 bg-bright-indigo/20 text-bright-indigo rounded-full text-sm">MongoDB</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-400 text-sm">Food & Beverage</span>
                        <a href="#" class="text-bright-cyan hover:text-bright-indigo transition-colors font-semibold">
                            View Details →
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
                        <div class="text-sm opacity-80">Enterprise ERP</div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-3">Manufacturing ERP System</h3>
                    <p class="text-gray-300 mb-4">
                        Developed a comprehensive ERP solution for a manufacturing company, integrating inventory, production, and financial management.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-bright-cyan/20 text-bright-cyan rounded-full text-sm">.NET Core</span>
                        <span class="px-3 py-1 bg-bright-indigo/20 text-bright-indigo rounded-full text-sm">Angular</span>
                        <span class="px-3 py-1 bg-bright-cyan/20 text-bright-cyan rounded-full text-sm">SQL Server</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-400 text-sm">Manufacturing</span>
                        <a href="#" class="text-bright-cyan hover:text-bright-indigo transition-colors font-semibold">
                            View Details →
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
            Our Success in Numbers
        </h2>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div>
                <div class="text-5xl md:text-6xl font-bold text-white mb-2">500+</div>
                <div class="text-white/90 text-lg">Projects Completed</div>
            </div>
            <div>
                <div class="text-5xl md:text-6xl font-bold text-white mb-2">98%</div>
                <div class="text-white/90 text-lg">Client Satisfaction</div>
            </div>
            <div>
                <div class="text-5xl md:text-6xl font-bold text-white mb-2">15+</div>
                <div class="text-white/90 text-lg">Industries Served</div>
            </div>
            <div>
                <div class="text-5xl md:text-6xl font-bold text-white mb-2">24/7</div>
                <div class="text-white/90 text-lg">Support Available</div>
            </div>
        </div>
    </div>
</section>

@include('components.cta')
@endsection

