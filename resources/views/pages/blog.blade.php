@extends('layouts.app')

@section('title', __('blog.title'))

@section('content')
<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-deep-blue via-slate-900 to-slate-800">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">
            {{ __('blog.hero_title') }} <span class="text-bright-indigo">{{ __('blog.hero_highlight') }}</span>
        </h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">
            {{ __('blog.hero_subtitle') }}
        </p>
    </div>
</section>

<!-- Featured Article -->
<section class="py-20 bg-slate-800/30">
    <div class="container mx-auto px-4">
        <div class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="h-64 lg:h-auto bg-gradient-to-br from-bright-indigo to-bright-cyan flex items-center justify-center">
                    <div class="text-white text-center">
                        <svg class="w-20 h-20 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                        <div class="text-sm opacity-80">{{ __('blog.featured_article') }}</div>
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex items-center space-x-4 mb-4">
                        <span class="px-3 py-1 bg-bright-indigo/20 text-bright-indigo rounded-full text-sm">AI & Machine Learning</span>
                        <span class="text-gray-400 text-sm">January 15, 2025</span>
                    </div>
                    <h2 class="text-3xl font-bold text-white mb-4">
                        The Future of AI in Enterprise Software Development
                    </h2>
                    <p class="text-gray-300 mb-6">
                        Explore how artificial intelligence is revolutionizing enterprise software development, from automated code generation to intelligent testing and deployment strategies. Learn about the latest AI tools and frameworks that are transforming how we build and maintain complex software systems.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-gradient-to-r from-bright-cyan to-bright-indigo rounded-full flex items-center justify-center">
                                <span class="text-white font-semibold text-sm">MJ</span>
                            </div>
                            <div>
                                <div class="text-white font-semibold">Maria Johnson</div>
                                <div class="text-gray-400 text-sm">CTO</div>
                            </div>
                        </div>
                        <a href="/blog/ai-enterprise-software" class="text-bright-cyan hover:text-bright-indigo transition-colors font-semibold">
                            {{ __('blog.read_more') }} →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Articles Grid -->
<section class="py-20 bg-slate-900/30">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Article 1 -->
            <article class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl overflow-hidden hover:border-bright-indigo transition-all duration-300">
                <div class="h-48 bg-gradient-to-br from-bright-cyan to-bright-indigo flex items-center justify-center">
                    <div class="text-white text-center">
                        <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"></path>
                        </svg>
                        <div class="text-sm opacity-80">Cloud Computing</div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center space-x-4 mb-3">
                        <span class="px-3 py-1 bg-bright-cyan/20 text-bright-cyan rounded-full text-sm">Cloud</span>
                        <span class="text-gray-400 text-sm">January 12, 2025</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">
                        Multi-Cloud Strategy: Benefits and Best Practices
                    </h3>
                    <p class="text-gray-300 mb-4">
                        Discover how to implement a successful multi-cloud strategy that reduces vendor lock-in, improves resilience, and optimizes costs across different cloud providers.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 bg-gradient-to-r from-bright-indigo to-bright-cyan rounded-full flex items-center justify-center">
                                <span class="text-white font-semibold text-xs">DW</span>
                            </div>
                            <span class="text-gray-400 text-sm">David Wilson</span>
                        </div>
                        <a href="/blog/multi-cloud-strategy" class="text-bright-cyan hover:text-bright-indigo transition-colors font-semibold">
                            {{ __('blog.read_more') }} →
                        </a>
                    </div>
                </div>
            </article>

            <!-- Article 2 -->
            <article class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl overflow-hidden hover:border-bright-cyan transition-all duration-300">
                <div class="h-48 bg-gradient-to-br from-bright-indigo to-bright-cyan flex items-center justify-center">
                    <div class="text-white text-center">
                        <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                        <div class="text-sm opacity-80">Mobile Development</div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center space-x-4 mb-3">
                        <span class="px-3 py-1 bg-bright-indigo/20 text-bright-indigo rounded-full text-sm">Mobile</span>
                        <span class="text-gray-400 text-sm">January 10, 2025</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">
                        React Native vs Flutter: Choosing the Right Framework
                    </h3>
                    <p class="text-gray-300 mb-4">
                        A comprehensive comparison of React Native and Flutter for cross-platform mobile development, including performance, development experience, and ecosystem considerations.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 bg-gradient-to-r from-bright-cyan to-bright-indigo rounded-full flex items-center justify-center">
                                <span class="text-white font-semibold text-xs">JS</span>
                            </div>
                            <span class="text-gray-400 text-sm">John Smith</span>
                        </div>
                        <a href="/blog/react-native-vs-flutter" class="text-bright-cyan hover:text-bright-indigo transition-colors font-semibold">
                            {{ __('blog.read_more') }} →
                        </a>
                    </div>
                </div>
            </article>

            <!-- Article 3 -->
            <article class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl overflow-hidden hover:border-bright-indigo transition-all duration-300">
                <div class="h-48 bg-gradient-to-br from-bright-cyan to-bright-indigo flex items-center justify-center">
                    <div class="text-white text-center">
                        <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                        <div class="text-sm opacity-80">Cybersecurity</div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center space-x-4 mb-3">
                        <span class="px-3 py-1 bg-bright-cyan/20 text-bright-cyan rounded-full text-sm">Security</span>
                        <span class="text-gray-400 text-sm">January 8, 2025</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">
                        Zero Trust Architecture: Implementation Guide
                    </h3>
                    <p class="text-gray-300 mb-4">
                        Learn how to implement Zero Trust security architecture in your organization, including key principles, technologies, and step-by-step implementation strategies.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 bg-gradient-to-r from-bright-indigo to-bright-cyan rounded-full flex items-center justify-center">
                                <span class="text-white font-semibold text-xs">MJ</span>
                            </div>
                            <span class="text-gray-400 text-sm">Maria Johnson</span>
                        </div>
                        <a href="/blog/zero-trust-architecture" class="text-bright-cyan hover:text-bright-indigo transition-colors font-semibold">
                            {{ __('blog.read_more') }} →
                        </a>
                    </div>
                </div>
            </article>

            <!-- Article 4 -->
            <article class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl overflow-hidden hover:border-bright-cyan transition-all duration-300">
                <div class="h-48 bg-gradient-to-br from-bright-indigo to-bright-cyan flex items-center justify-center">
                    <div class="text-white text-center">
                        <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                        </svg>
                        <div class="text-sm opacity-80">DevOps</div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center space-x-4 mb-3">
                        <span class="px-3 py-1 bg-bright-indigo/20 text-bright-indigo rounded-full text-sm">DevOps</span>
                        <span class="text-gray-400 text-sm">January 5, 2025</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">
                        Kubernetes Best Practices for Production
                    </h3>
                    <p class="text-gray-300 mb-4">
                        Essential Kubernetes best practices for running production workloads, including security, monitoring, resource management, and deployment strategies.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 bg-gradient-to-r from-bright-cyan to-bright-indigo rounded-full flex items-center justify-center">
                                <span class="text-white font-semibold text-xs">DW</span>
                            </div>
                            <span class="text-gray-400 text-sm">David Wilson</span>
                        </div>
                        <a href="/blog/kubernetes-production-practices" class="text-bright-cyan hover:text-bright-indigo transition-colors font-semibold">
                            {{ __('blog.read_more') }} →
                        </a>
                    </div>
                </div>
            </article>

            <!-- Article 5 -->
            <article class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl overflow-hidden hover:border-bright-indigo transition-all duration-300">
                <div class="h-48 bg-gradient-to-br from-bright-cyan to-bright-indigo flex items-center justify-center">
                    <div class="text-white text-center">
                        <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                        </svg>
                        <div class="text-sm opacity-80">Web Development</div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center space-x-4 mb-3">
                        <span class="px-3 py-1 bg-bright-cyan/20 text-bright-cyan rounded-full text-sm">Web Dev</span>
                        <span class="text-gray-400 text-sm">January 3, 2025</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">
                        Modern Frontend Architecture Patterns
                    </h3>
                    <p class="text-gray-300 mb-4">
                        Explore modern frontend architecture patterns including micro-frontends, JAMstack, and component-driven development for scalable web applications.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 bg-gradient-to-r from-bright-indigo to-bright-cyan rounded-full flex items-center justify-center">
                                <span class="text-white font-semibold text-xs">JS</span>
                            </div>
                            <span class="text-gray-400 text-sm">John Smith</span>
                        </div>
                        <a href="/blog/frontend-architecture-patterns" class="text-bright-cyan hover:text-bright-indigo transition-colors font-semibold">
                            {{ __('blog.read_more') }} →
                        </a>
                    </div>
                </div>
            </article>

            <!-- Article 6 -->
            <article class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl overflow-hidden hover:border-bright-cyan transition-all duration-300">
                <div class="h-48 bg-gradient-to-br from-bright-indigo to-bright-cyan flex items-center justify-center">
                    <div class="text-white text-center">
                        <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
                        </svg>
                        <div class="text-sm opacity-80">Database</div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center space-x-4 mb-3">
                        <span class="px-3 py-1 bg-bright-indigo/20 text-bright-indigo rounded-full text-sm">Database</span>
                        <span class="text-gray-400 text-sm">December 30, 2024</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">
                        Database Optimization for High-Traffic Applications
                    </h3>
                    <p class="text-gray-300 mb-4">
                        Learn advanced database optimization techniques for high-traffic applications, including indexing strategies, query optimization, and caching mechanisms.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 bg-gradient-to-r from-bright-cyan to-bright-indigo rounded-full flex items-center justify-center">
                                <span class="text-white font-semibold text-xs">MJ</span>
                            </div>
                            <span class="text-gray-400 text-sm">Maria Johnson</span>
                        </div>
                        <a href="/blog/database-optimization" class="text-bright-cyan hover:text-bright-indigo transition-colors font-semibold">
                            {{ __('blog.read_more') }} →
                        </a>
                    </div>
                </div>
            </article>

        </div>

        <!-- Load More Button -->
        <div class="text-center mt-12">
            <button class="bg-gradient-to-r from-bright-indigo to-bright-cyan text-white px-8 py-4 rounded-lg font-semibold hover:shadow-lg transition-all duration-300">
                {{ __('blog.load_more') }}
            </button>
        </div>
    </div>
</section>

<!-- Newsletter Signup -->
<section class="py-20 bg-gradient-to-r from-slate-900 to-deep-blue">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
            {{ __('blog.newsletter_title') }} <span class="text-bright-cyan">{{ __('blog.newsletter_highlight') }}</span>
        </h2>
        <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
            {{ __('blog.newsletter_subtitle') }}
        </p>
        
        <div class="max-w-md mx-auto">
            <div class="flex gap-4">
                <input type="email" placeholder="{{ __('blog.newsletter_placeholder') }}"
                       class="flex-1 px-4 py-3 bg-slate-800 border border-slate-600 rounded-lg text-white placeholder-gray-400 focus:border-bright-cyan focus:ring-1 focus:ring-bright-cyan transition-colors">
                <button class="bg-gradient-to-r from-bright-indigo to-bright-cyan text-white px-6 py-3 rounded-lg font-semibold hover:shadow-lg transition-all duration-300">
                    {{ __('blog.newsletter_button') }}
                </button>
            </div>
            <p class="text-gray-400 text-sm mt-3">
                {{ __('blog.newsletter_privacy') }}
            </p>
        </div>
    </div>
</section>

@include('components.cta')
@endsection

