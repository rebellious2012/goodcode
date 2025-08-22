@extends('layouts.app')

@section('title', 'Contact Us - TechFlow Solutions | Get in Touch for Your Next Project')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-deep-blue via-slate-900 to-slate-800">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">
            Get In <span class="text-bright-indigo">Touch</span>
        </h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">
            Ready to transform your business with cutting-edge technology? Let's discuss your project and explore how we can help you achieve your goals.
        </p>
    </div>
</section>

<!-- Contact Information -->
<section class="py-20 bg-slate-800/30">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <!-- Office Location -->
            <div class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl p-8 text-center hover:border-bright-indigo transition-all duration-300">
                <div class="w-16 h-16 bg-gradient-to-r from-bright-indigo to-bright-cyan rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Visit Our Office</h3>
                <p class="text-gray-300 mb-2">123 Tech Street</p>
                <p class="text-gray-300 mb-2">Silicon Valley, CA 94025</p>
                <p class="text-gray-300">United States</p>
            </div>
            
            <!-- Phone -->
            <div class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl p-8 text-center hover:border-bright-cyan transition-all duration-300">
                <div class="w-16 h-16 bg-gradient-to-r from-bright-cyan to-bright-indigo rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Call Us</h3>
                <p class="text-gray-300 mb-2">+1 (555) 123-4567</p>
                <p class="text-gray-300 mb-2">+1 (555) 987-6543</p>
                <p class="text-gray-300 text-sm">Mon-Fri: 9AM-6PM PST</p>
            </div>
            
            <!-- Email -->
            <div class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl p-8 text-center hover:border-bright-indigo transition-all duration-300">
                <div class="w-16 h-16 bg-gradient-to-r from-bright-indigo to-bright-cyan rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Email Us</h3>
                <p class="text-gray-300 mb-2">hello@techflowsolutions.com</p>
                <p class="text-gray-300 mb-2">sales@techflowsolutions.com</p>
                <p class="text-gray-300 text-sm">24-hour response time</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form -->
@include('components.contact-form')

<!-- Map Section -->
<section class="py-20 bg-slate-900/50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Find Us on the <span class="text-bright-cyan">Map</span>
            </h2>
            <p class="text-xl text-gray-300">
                Located in the heart of Silicon Valley, we're easily accessible for in-person meetings and consultations.
            </p>
        </div>
        
        <!-- Map Placeholder -->
        <div class="bg-slate-800 rounded-xl overflow-hidden border border-slate-700">
            <div class="h-96 bg-gradient-to-br from-slate-700 to-slate-800 flex items-center justify-center">
                <div class="text-center text-gray-400">
                    <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <p class="text-lg">Interactive Map</p>
                    <p class="text-sm">123 Tech Street, Silicon Valley, CA 94025</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Office Hours & Additional Info -->
<section class="py-20 bg-gradient-to-r from-slate-900 to-deep-blue">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Office Hours -->
            <div>
                <h3 class="text-3xl font-bold text-white mb-8">Office Hours</h3>
                <div class="space-y-4">
                    <div class="flex justify-between items-center py-3 border-b border-slate-700">
                        <span class="text-gray-300">Monday - Friday</span>
                        <span class="text-bright-cyan font-semibold">9:00 AM - 6:00 PM</span>
                    </div>
                    <div class="flex justify-between items-center py-3 border-b border-slate-700">
                        <span class="text-gray-300">Saturday</span>
                        <span class="text-bright-cyan font-semibold">10:00 AM - 4:00 PM</span>
                    </div>
                    <div class="flex justify-between items-center py-3 border-b border-slate-700">
                        <span class="text-gray-300">Sunday</span>
                        <span class="text-gray-400">Closed</span>
                    </div>
                    <div class="flex justify-between items-center py-3">
                        <span class="text-gray-300">Emergency Support</span>
                        <span class="text-bright-indigo font-semibold">24/7 Available</span>
                    </div>
                </div>
            </div>
            
            <!-- Additional Information -->
            <div>
                <h3 class="text-3xl font-bold text-white mb-8">Why Choose Us?</h3>
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-bright-indigo rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold mb-2">Free Initial Consultation</h4>
                            <p class="text-gray-300">Get expert advice and project assessment at no cost.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-bright-cyan rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold mb-2">Rapid Response Time</h4>
                            <p class="text-gray-300">We respond to all inquiries within 24 hours.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-bright-indigo rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold mb-2">Transparent Pricing</h4>
                            <p class="text-gray-300">No hidden fees, clear project estimates upfront.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-bright-cyan rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold mb-2">Ongoing Support</h4>
                            <p class="text-gray-300">Comprehensive support and maintenance services.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Social Media -->
<section class="py-20 bg-slate-800/30">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
            Follow Us on <span class="text-bright-indigo">Social Media</span>
        </h2>
        <p class="text-xl text-gray-300 mb-12 max-w-2xl mx-auto">
            Stay connected and get the latest updates on our projects, insights, and company news.
        </p>
        
        <div class="flex justify-center space-x-6">
            <a href="#" class="w-16 h-16 bg-gradient-to-r from-bright-indigo to-bright-cyan rounded-full flex items-center justify-center hover:scale-110 transition-transform duration-300">
                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                </svg>
            </a>
            <a href="#" class="w-16 h-16 bg-gradient-to-r from-bright-cyan to-bright-indigo rounded-full flex items-center justify-center hover:scale-110 transition-transform duration-300">
                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                </svg>
            </a>
            <a href="#" class="w-16 h-16 bg-gradient-to-r from-bright-indigo to-bright-cyan rounded-full flex items-center justify-center hover:scale-110 transition-transform duration-300">
                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.746-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24c6.624 0 11.99-5.367 11.99-11.987C24.007 5.367 18.641.001.017 0z"/>
                </svg>
            </a>
            <a href="#" class="w-16 h-16 bg-gradient-to-r from-bright-cyan to-bright-indigo rounded-full flex items-center justify-center hover:scale-110 transition-transform duration-300">
                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.624 5.367 11.99 11.988 11.99s11.99-5.366 11.99-11.99C24.007 5.367 18.641.001 12.017.001zm4.624 17.266c-2.608 2.608-6.64 2.608-9.248 0s-2.608-6.64 0-9.248 6.64-2.608 9.248 0 2.608 6.64 0 9.248z"/>
                </svg>
            </a>
        </div>
    </div>
</section>

@include('components.cta')
@endsection

