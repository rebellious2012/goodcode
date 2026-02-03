@extends('layouts.app')

@section('title', 'Real Estate Website Solution - CodElevator')

@section('content')
<!-- Hero Section -->
<section class="relative py-24 overflow-hidden bg-slate-900">
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80')] bg-cover bg-center opacity-10"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-slate-900/50 via-slate-900 to-slate-900"></div>
    
    <div class="container relative mx-auto px-4">
        <div class="max-w-4xl">
            <nav class="flex mb-8 text-sm text-gray-400" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-2">
                    <li><a href="{{ route('home') }}" class="hover:text-bright-indigo transition-colors">Home</a></li>
                    <li><span class="text-gray-600">/</span></li>
                    <li><a href="{{ route('services') }}" class="hover:text-bright-indigo transition-colors">Solutions</a></li>
                    <li><span class="text-gray-600">/</span></li>
                    <li class="text-gray-300">Real Estate</li>
                </ol>
            </nav>
            
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
                Enterprise <span class="text-transparent bg-clip-text bg-gradient-to-r from-bright-indigo to-bright-cyan">Real Estate</span> Platforms
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 mb-10 leading-relaxed max-w-2xl">
                Elevate your property business with a high-performance, scalable website designed to convert visitors into buyers and streamline your agency operations.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="#features" class="px-8 py-4 bg-bright-indigo text-white rounded-xl font-bold hover:bg-bright-indigo/90 transition-all shadow-lg shadow-bright-indigo/20">
                    Explore Features
                </a>
                <a href="{{ route('contact') }}" class="px-8 py-4 bg-slate-800 text-white border border-slate-700 rounded-xl font-bold hover:bg-slate-700 transition-all">
                    Get a Quote
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Stats/Value Props -->
<section class="py-12 bg-slate-900 border-y border-slate-800">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-3xl font-bold text-white mb-1">0.5s</div>
                <div class="text-gray-500 text-sm uppercase tracking-wider">Average Load Speed</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold text-white mb-1">SEO</div>
                <div class="text-gray-500 text-sm uppercase tracking-wider">Mobile-First Ready</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold text-white mb-1">100%</div>
                <div class="text-gray-500 text-sm uppercase tracking-wider">Customizable Design</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold text-white mb-1">API</div>
                <div class="text-gray-500 text-sm uppercase tracking-wider">MLS/IDX Integration</div>
            </div>
        </div>
    </div>
</section>

<!-- Features Grid -->
<section id="features" class="py-24 bg-slate-800/20">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-white mb-4">Powerful Features for Success</h2>
            <p class="text-gray-400 max-w-2xl mx-auto text-lg">Everything you need to manage properties, leads, and agents in one unified system.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="bg-slate-900/50 p-8 rounded-2xl border border-slate-700 hover:border-bright-indigo/50 transition-all group">
                <div class="w-14 h-14 bg-bright-indigo/10 text-bright-indigo rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Smart Property Catalog</h3>
                <p class="text-gray-400 leading-relaxed">
                    Advanced listing management with supporting high-res galleries, 360° virtual tours, and automated map placement.
                </p>
            </div>
            
            <!-- Feature 2 -->
            <div class="bg-slate-900/50 p-8 rounded-2xl border border-slate-700 hover:border-bright-cyan/50 transition-all group">
                <div class="w-14 h-14 bg-bright-cyan/10 text-bright-cyan rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Ultra-Fast Search</h3>
                <p class="text-gray-400 leading-relaxed">
                    AJAX-powered filters by price, location, property type, and square footage with instant results.
                </p>
            </div>
            
            <!-- Feature 3 -->
            <div class="bg-slate-900/50 p-8 rounded-2xl border border-slate-700 hover:border-bright-indigo/50 transition-all group">
                <div class="w-14 h-14 bg-bright-indigo/10 text-bright-indigo rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">User & Agent Profiles</h3>
                <p class="text-gray-400 leading-relaxed">
                    Dedicated dashboards for users to save "Favorites" and for agents to manage their own exclusive listings.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Content Showcase -->
<section class="py-24 bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <div class="lg:w-1/2">
                <div class="relative">
                    <div class="absolute -inset-4 bg-gradient-to-r from-bright-indigo to-bright-cyan rounded-3xl blur-2xl opacity-20"></div>
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
                         alt="Dashboard Preview" 
                         class="relative rounded-2xl border border-slate-700 shadow-2xl">
                </div>
            </div>
            <div class="lg:w-1/2">
                <h2 class="text-4xl font-bold text-white mb-6">Backend Management Made Simple</h2>
                <ul class="space-y-6">
                    <li class="flex items-start">
                        <div class="w-6 h-6 bg-bright-indigo/20 text-bright-indigo rounded-full flex items-center justify-center mt-1 mr-4 shrink-0 font-bold text-xs">✓</div>
                        <p class="text-gray-300"><span class="text-white font-semibold">Lead Tracking:</span> Capture inquires from forms and WhatsApp directly into your dashboard.</p>
                    </li>
                    <li class="flex items-start">
                        <div class="w-6 h-6 bg-bright-indigo/20 text-bright-indigo rounded-full flex items-center justify-center mt-1 mr-4 shrink-0 font-bold text-xs">✓</div>
                        <p class="text-gray-300"><span class="text-white font-semibold">Bulk Upload:</span> Import hundreds of properties via CSV or XML from external services.</p>
                    </li>
                    <li class="flex items-start">
                        <div class="w-6 h-6 bg-bright-indigo/20 text-bright-indigo rounded-full flex items-center justify-center mt-1 mr-4 shrink-0 font-bold text-xs">✓</div>
                        <p class="text-gray-300"><span class="text-white font-semibold">Notifications:</span> Email and SMS alerts for new listings matching users' criteria.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Tech Stack -->
<section class="py-24 bg-slate-800/10 border-t border-slate-800">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-white mb-12">Built with Industry Standards</h2>
        <div class="flex flex-wrap justify-center gap-8 md:gap-16 opacity-60">
            <div class="text-xl text-gray-400 font-bold">Laravel 11</div>
            <div class="text-xl text-gray-400 font-bold">Tailwind CSS</div>
            <div class="text-xl text-gray-400 font-bold">PostgreSQL</div>
            <div class="text-xl text-gray-400 font-bold">Alpine.js</div>
            <div class="text-xl text-gray-400 font-bold">Redis</div>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="py-24">
    <div class="container mx-auto px-4">
        <div class="bg-gradient-to-r from-bright-indigo to-bright-cyan rounded-[2.5rem] p-12 md:p-20 text-center relative overflow-hidden shadow-2xl shadow-bright-indigo/20">
            <div class="relative z-10">
                <h2 class="text-4xl md:text-6xl font-bold text-white mb-8 leading-tight">Ready to Launch Your <br>Real Estate Platform?</h2>
                <p class="text-white/80 text-xl mb-12 max-w-2xl mx-auto">
                    Get in touch today for a demo and a custom consultation. Let's build the future of property tech together.
                </p>
                <a href="{{ route('contact') }}" class="inline-block bg-white text-slate-900 px-12 py-5 rounded-2xl font-bold text-xl hover:scale-105 transition-all shadow-xl">
                    Contact Us Now
                </a>
            </div>
            <!-- Decorative circle -->
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-black/10 rounded-full blur-3xl"></div>
        </div>
    </div>
</section>
@endsection
