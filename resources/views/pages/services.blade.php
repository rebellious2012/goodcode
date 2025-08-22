@extends('layouts.app')

@section('title', 'Our Services - TechFlow Solutions | Custom Software, Cloud, Mobile & Web Development')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-deep-blue via-slate-900 to-slate-800">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">
            Our <span class="text-bright-indigo">Services</span>
        </h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">
            Comprehensive technology solutions designed to accelerate your business growth and digital transformation journey.
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
                    <h2 class="text-4xl font-bold text-white mb-6">Custom Software Development</h2>
                    <p class="text-lg text-gray-300 mb-6">
                        Transform your unique business requirements into powerful software solutions. Our expert development team creates bespoke applications tailored to your specific needs, ensuring perfect alignment with your business processes and goals.
                    </p>
                    <ul class="space-y-3 text-gray-300 mb-8">
                        <li class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-bright-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Enterprise-grade applications</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-bright-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>API development and integration</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-bright-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Database design and optimization</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-bright-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Legacy system modernization</span>
                        </li>
                    </ul>
                    <a href="/contact" class="bg-gradient-to-r from-bright-indigo to-bright-cyan text-white px-8 py-4 rounded-lg font-semibold hover:shadow-lg transition-all duration-300">
                        Get Started
                    </a>
                </div>
                <div class="bg-gradient-to-br from-bright-indigo/20 to-bright-cyan/20 rounded-xl p-8 border border-bright-indigo/30">
                    <h3 class="text-2xl font-bold text-white mb-6">Technologies We Use</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-slate-900/50 rounded-lg p-4 text-center">
                            <div class="text-bright-cyan font-semibold">Backend</div>
                            <div class="text-gray-300 text-sm mt-2">Python, Node.js, Java, .NET</div>
                        </div>
                        <div class="bg-slate-900/50 rounded-lg p-4 text-center">
                            <div class="text-bright-cyan font-semibold">Frontend</div>
                            <div class="text-gray-300 text-sm mt-2">React, Vue.js, Angular</div>
                        </div>
                        <div class="bg-slate-900/50 rounded-lg p-4 text-center">
                            <div class="text-bright-cyan font-semibold">Database</div>
                            <div class="text-gray-300 text-sm mt-2">PostgreSQL, MongoDB, Redis</div>
                        </div>
                        <div class="bg-slate-900/50 rounded-lg p-4 text-center">
                            <div class="text-bright-cyan font-semibold">Cloud</div>
                            <div class="text-gray-300 text-sm mt-2">AWS, Azure, Google Cloud</div>
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
                        <h3 class="text-2xl font-bold text-white mb-6">Cloud Migration Benefits</h3>
                        <div class="space-y-4">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-bright-cyan/20 rounded-lg flex items-center justify-center">
                                    <span class="text-bright-cyan font-bold">60%</span>
                                </div>
                                <div>
                                    <div class="text-white font-semibold">Cost Reduction</div>
                                    <div class="text-gray-300 text-sm">Average infrastructure savings</div>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-bright-cyan/20 rounded-lg flex items-center justify-center">
                                    <span class="text-bright-cyan font-bold">99.9%</span>
                                </div>
                                <div>
                                    <div class="text-white font-semibold">Uptime</div>
                                    <div class="text-gray-300 text-sm">Guaranteed availability</div>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-bright-cyan/20 rounded-lg flex items-center justify-center">
                                    <span class="text-bright-cyan font-bold">3x</span>
                                </div>
                                <div>
                                    <div class="text-white font-semibold">Faster Deployment</div>
                                    <div class="text-gray-300 text-sm">Accelerated time to market</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="order-1 lg:order-2">
                    <h2 class="text-4xl font-bold text-white mb-6">Cloud Solutions</h2>
                    <p class="text-lg text-gray-300 mb-6">
                        Migrate to the cloud with confidence and unlock the full potential of modern infrastructure. Our cloud experts help you choose the right platform and strategy for your business needs.
                    </p>
                    <ul class="space-y-3 text-gray-300 mb-8">
                        <li class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-bright-indigo" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Cloud migration strategy and execution</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-bright-indigo" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Multi-cloud and hybrid solutions</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-bright-indigo" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Cost optimization and monitoring</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-bright-indigo" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Security and compliance management</span>
                        </li>
                    </ul>
                    <a href="/contact" class="bg-gradient-to-r from-bright-cyan to-bright-indigo text-white px-8 py-4 rounded-lg font-semibold hover:shadow-lg transition-all duration-300">
                        Start Migration
                    </a>
                </div>
            </div>
        </div>

        <!-- Mobile Development -->
        <div class="mb-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-white mb-6">Mobile App Development</h2>
                    <p class="text-lg text-gray-300 mb-6">
                        Create engaging mobile experiences that delight your users and drive business growth. We develop native and cross-platform applications that perform flawlessly across all devices.
                    </p>
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="bg-slate-900/50 rounded-lg p-4 text-center border border-slate-700">
                            <div class="text-bright-cyan font-semibold mb-2">iOS Development</div>
                            <div class="text-gray-300 text-sm">Swift, Objective-C, SwiftUI</div>
                        </div>
                        <div class="bg-slate-900/50 rounded-lg p-4 text-center border border-slate-700">
                            <div class="text-bright-cyan font-semibold mb-2">Android Development</div>
                            <div class="text-gray-300 text-sm">Kotlin, Java, Jetpack Compose</div>
                        </div>
                        <div class="bg-slate-900/50 rounded-lg p-4 text-center border border-slate-700">
                            <div class="text-bright-cyan font-semibold mb-2">Cross-Platform</div>
                            <div class="text-gray-300 text-sm">React Native, Flutter</div>
                        </div>
                        <div class="bg-slate-900/50 rounded-lg p-4 text-center border border-slate-700">
                            <div class="text-bright-cyan font-semibold mb-2">Progressive Web Apps</div>
                            <div class="text-gray-300 text-sm">PWA, Service Workers</div>
                        </div>
                    </div>
                    <a href="/contact" class="bg-gradient-to-r from-bright-indigo to-bright-cyan text-white px-8 py-4 rounded-lg font-semibold hover:shadow-lg transition-all duration-300">
                        Build Your App
                    </a>
                </div>
                <div class="bg-gradient-to-br from-bright-indigo/20 to-bright-cyan/20 rounded-xl p-8 border border-bright-indigo/30">
                    <h3 class="text-2xl font-bold text-white mb-6">App Development Process</h3>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 bg-bright-indigo rounded-full flex items-center justify-center text-white font-bold text-sm">1</div>
                            <div>
                                <div class="text-white font-semibold">Discovery & Planning</div>
                                <div class="text-gray-300 text-sm">Requirements analysis and technical architecture</div>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 bg-bright-cyan rounded-full flex items-center justify-center text-white font-bold text-sm">2</div>
                            <div>
                                <div class="text-white font-semibold">UI/UX Design</div>
                                <div class="text-gray-300 text-sm">User-centered design and prototyping</div>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 bg-bright-indigo rounded-full flex items-center justify-center text-white font-bold text-sm">3</div>
                            <div>
                                <div class="text-white font-semibold">Development</div>
                                <div class="text-gray-300 text-sm">Agile development with regular updates</div>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 bg-bright-cyan rounded-full flex items-center justify-center text-white font-bold text-sm">4</div>
                            <div>
                                <div class="text-white font-semibold">Testing & Launch</div>
                                <div class="text-gray-300 text-sm">Quality assurance and app store deployment</div>
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
                Our Development <span class="text-bright-cyan">Process</span>
            </h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                We follow a proven methodology that ensures successful project delivery, on time and within budget.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-r from-bright-indigo to-bright-cyan rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-white">1</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Discovery</h3>
                <p class="text-gray-300">
                    We analyze your requirements, understand your business goals, and define the project scope and technical approach.
                </p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-r from-bright-cyan to-bright-indigo rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-white">2</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Design</h3>
                <p class="text-gray-300">
                    Our design team creates user-centered interfaces and system architecture that align with your brand and objectives.
                </p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-r from-bright-indigo to-bright-cyan rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-white">3</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Development</h3>
                <p class="text-gray-300">
                    We build your solution using agile methodologies, with regular updates and feedback loops throughout the process.
                </p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-r from-bright-cyan to-bright-indigo rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-white">4</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Deployment</h3>
                <p class="text-gray-300">
                    We deploy your solution with comprehensive testing, training, and ongoing support to ensure smooth operation.
                </p>
            </div>
        </div>
    </div>
</section>

@include('components.cta')
@endsection

