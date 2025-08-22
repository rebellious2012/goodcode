@extends('layouts.app')

@section('title', 'About Us - TechFlow Solutions | Our Mission, Team & Values')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-deep-blue via-slate-900 to-slate-800">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">
            About <span class="text-bright-indigo">TechFlow Solutions</span>
        </h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">
            We're a team of passionate technologists dedicated to transforming businesses through innovative software solutions and strategic digital transformation.
        </p>
    </div>
</section>

<!-- Mission Section -->
<section class="py-20 bg-slate-800/30">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-4xl font-bold text-white mb-6">Our Mission</h2>
                <p class="text-lg text-gray-300 mb-6">
                    At TechFlow Solutions, we believe technology should empower businesses to achieve their full potential. Our mission is to bridge the gap between complex technical challenges and practical business solutions.
                </p>
                <p class="text-lg text-gray-300 mb-6">
                    We partner with companies across the United States and Europe to deliver cutting-edge software development, cloud infrastructure, and digital transformation services that drive measurable results and sustainable growth.
                </p>
                <p class="text-lg text-gray-300">
                    Since our founding in 2014, we've helped over 500 businesses modernize their operations, streamline their processes, and unlock new opportunities through strategic technology implementation.
                </p>
            </div>
            <div class="bg-gradient-to-br from-bright-indigo to-bright-cyan rounded-xl p-8 text-white">
                <h3 class="text-2xl font-bold mb-6">Our Impact</h3>
                <div class="space-y-4">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center">
                            <span class="text-2xl font-bold">500+</span>
                        </div>
                        <span>Successful Projects Delivered</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center">
                            <span class="text-2xl font-bold">98%</span>
                        </div>
                        <span>Client Satisfaction Rate</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center">
                            <span class="text-2xl font-bold">50+</span>
                        </div>
                        <span>Expert Team Members</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center">
                            <span class="text-2xl font-bold">10+</span>
                        </div>
                        <span>Years of Excellence</span>
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
                Meet Our <span class="text-bright-cyan">Leadership Team</span>
            </h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Our experienced leadership team brings together decades of expertise in technology, business strategy, and innovation.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- CEO -->
            <div class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl p-8 text-center hover:border-bright-indigo transition-all duration-300">
                <div class="w-24 h-24 bg-gradient-to-r from-bright-indigo to-bright-cyan rounded-full mx-auto mb-6 flex items-center justify-center">
                    <span class="text-2xl font-bold text-white">JS</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">John Smith</h3>
                <p class="text-bright-cyan mb-4">CEO & Founder</p>
                <p class="text-gray-300">
                    Former Microsoft executive with 15+ years experience leading digital transformation initiatives for Fortune 500 companies.
                </p>
            </div>
            
            <!-- CTO -->
            <div class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl p-8 text-center hover:border-bright-cyan transition-all duration-300">
                <div class="w-24 h-24 bg-gradient-to-r from-bright-cyan to-bright-indigo rounded-full mx-auto mb-6 flex items-center justify-center">
                    <span class="text-2xl font-bold text-white">MJ</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Maria Johnson</h3>
                <p class="text-bright-cyan mb-4">CTO</p>
                <p class="text-gray-300">
                    Cloud architecture expert and former Google engineer specializing in scalable systems and AI/ML implementations.
                </p>
            </div>
            
            <!-- VP of Engineering -->
            <div class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl p-8 text-center hover:border-bright-indigo transition-all duration-300">
                <div class="w-24 h-24 bg-gradient-to-r from-bright-indigo to-bright-cyan rounded-full mx-auto mb-6 flex items-center justify-center">
                    <span class="text-2xl font-bold text-white">DW</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">David Wilson</h3>
                <p class="text-bright-cyan mb-4">VP of Engineering</p>
                <p class="text-gray-300">
                    Full-stack development leader with expertise in modern frameworks and agile methodologies, former Amazon principal engineer.
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
                Our Core <span class="text-bright-indigo">Values</span>
            </h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                These principles guide everything we do and shape how we work with our clients and each other.
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
                <h3 class="text-xl font-bold text-white mb-4">Innovation</h3>
                <p class="text-gray-300">
                    We constantly explore new technologies and methodologies to deliver cutting-edge solutions that give our clients a competitive advantage.
                </p>
            </div>
            
            <!-- Excellence -->
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-r from-bright-cyan to-bright-indigo rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Excellence</h3>
                <p class="text-gray-300">
                    We maintain the highest standards in everything we do, from code quality to client communication and project delivery.
                </p>
            </div>
            
            <!-- Collaboration -->
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-r from-bright-indigo to-bright-cyan rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Collaboration</h3>
                <p class="text-gray-300">
                    We believe in true partnership with our clients, working together as an extension of their team to achieve shared goals.
                </p>
            </div>
            
            <!-- Integrity -->
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-r from-bright-cyan to-bright-indigo rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Integrity</h3>
                <p class="text-gray-300">
                    We operate with complete transparency, honesty, and ethical practices in all our business relationships and decisions.
                </p>
            </div>
        </div>
    </div>
</section>

@include('components.cta')
@endsection

