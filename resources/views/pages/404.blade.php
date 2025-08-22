@extends('layouts.app')

@section('title', '404 - Page Not Found | TechFlow Solutions')

@section('content')
<section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-deep-blue via-slate-900 to-slate-800">
    <div class="container mx-auto px-4 text-center">
        <div class="max-w-2xl mx-auto">
            <!-- 404 Animation/Graphic -->
            <div class="mb-12">
                <div class="relative">
                    <!-- Large 404 Text -->
                    <h1 class="text-9xl md:text-[12rem] font-bold text-transparent bg-gradient-to-r from-bright-indigo to-bright-cyan bg-clip-text leading-none">
                        404
                    </h1>
                    
                    <!-- Floating Elements -->
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <div class="w-32 h-32 bg-bright-indigo/20 rounded-full animate-pulse"></div>
                        <div class="absolute top-4 left-4 w-24 h-24 bg-bright-cyan/30 rounded-full animate-ping"></div>
                    </div>
                </div>
            </div>
            
            <!-- Error Message -->
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Oops! Page Not Found
            </h2>
            
            <p class="text-xl text-gray-300 mb-8 max-w-lg mx-auto">
                The page you're looking for seems to have vanished into the digital void. Don't worry, even the best developers encounter 404s!
            </p>
            
            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12">
                <a href="/" class="bg-gradient-to-r from-bright-indigo to-bright-cyan text-white px-8 py-4 rounded-lg font-semibold text-lg hover:shadow-lg hover:shadow-bright-indigo/25 transition-all duration-300 transform hover:-translate-y-1">
                    Go Home
                </a>
                <a href="/contact" class="border-2 border-bright-cyan text-bright-cyan px-8 py-4 rounded-lg font-semibold text-lg hover:bg-bright-cyan hover:text-deep-blue transition-all duration-300">
                    Contact Support
                </a>
            </div>
            
            <!-- Helpful Links -->
            <div class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl p-8">
                <h3 class="text-2xl font-bold text-white mb-6">Maybe you were looking for:</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <a href="/services" class="flex items-center space-x-3 text-gray-300 hover:text-bright-cyan transition-colors p-3 rounded-lg hover:bg-slate-800/50">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                        <span>Our Services</span>
                    </a>
                    <a href="/portfolio" class="flex items-center space-x-3 text-gray-300 hover:text-bright-cyan transition-colors p-3 rounded-lg hover:bg-slate-800/50">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                        <span>Portfolio</span>
                    </a>
                    <a href="/about" class="flex items-center space-x-3 text-gray-300 hover:text-bright-cyan transition-colors p-3 rounded-lg hover:bg-slate-800/50">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        <span>About Us</span>
                    </a>
                    <a href="/blog" class="flex items-center space-x-3 text-gray-300 hover:text-bright-cyan transition-colors p-3 rounded-lg hover:bg-slate-800/50">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                        </svg>
                        <span>Tech Blog</span>
                    </a>
                </div>
            </div>
            
            <!-- Fun Error Message -->
            <div class="mt-8 text-gray-400">
                <p class="text-sm">
                    Error Code: 404 | This page is probably debugging itself in another dimension 🚀
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

