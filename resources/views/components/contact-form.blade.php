<section class="py-20 bg-slate-800/50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <!-- Section header -->
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    Get In <span class="text-bright-cyan">Touch</span>
                </h2>
                <p class="text-xl text-gray-300">
                    Ready to start your project? Send us a message and we'll get back to you within 24 hours.
                </p>
            </div>
            
            <!-- Contact form -->
            <div class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl p-8">
                <form class="space-y-6" x-data="{ submitted: false }" @submit.prevent="submitted = true">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- First Name -->
                        <div>
                            <label for="first_name" class="block text-sm font-medium text-gray-300 mb-2">First Name *</label>
                            <input type="text" id="first_name" name="first_name" required 
                                   class="w-full px-4 py-3 bg-slate-800 border border-slate-600 rounded-lg text-white placeholder-gray-400 focus:border-bright-cyan focus:ring-1 focus:ring-bright-cyan transition-colors"
                                   placeholder="John">
                        </div>
                        
                        <!-- Last Name -->
                        <div>
                            <label for="last_name" class="block text-sm font-medium text-gray-300 mb-2">Last Name *</label>
                            <input type="text" id="last_name" name="last_name" required 
                                   class="w-full px-4 py-3 bg-slate-800 border border-slate-600 rounded-lg text-white placeholder-gray-400 focus:border-bright-cyan focus:ring-1 focus:ring-bright-cyan transition-colors"
                                   placeholder="Doe">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email Address *</label>
                            <input type="email" id="email" name="email" required 
                                   class="w-full px-4 py-3 bg-slate-800 border border-slate-600 rounded-lg text-white placeholder-gray-400 focus:border-bright-cyan focus:ring-1 focus:ring-bright-cyan transition-colors"
                                   placeholder="john@company.com">
                        </div>
                        
                        <!-- Phone -->
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-300 mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="phone" 
                                   class="w-full px-4 py-3 bg-slate-800 border border-slate-600 rounded-lg text-white placeholder-gray-400 focus:border-bright-cyan focus:ring-1 focus:ring-bright-cyan transition-colors"
                                   placeholder="+1 (555) 123-4567">
                        </div>
                    </div>
                    
                    <!-- Company -->
                    <div>
                        <label for="company" class="block text-sm font-medium text-gray-300 mb-2">Company Name</label>
                        <input type="text" id="company" name="company" 
                               class="w-full px-4 py-3 bg-slate-800 border border-slate-600 rounded-lg text-white placeholder-gray-400 focus:border-bright-cyan focus:ring-1 focus:ring-bright-cyan transition-colors"
                               placeholder="Your Company">
                    </div>
                    
                    <!-- Service Interest -->
                    <div>
                        <label for="service" class="block text-sm font-medium text-gray-300 mb-2">Service of Interest</label>
                        <select id="service" name="service" 
                                class="w-full px-4 py-3 bg-slate-800 border border-slate-600 rounded-lg text-white focus:border-bright-cyan focus:ring-1 focus:ring-bright-cyan transition-colors">
                            <option value="">Select a service</option>
                            <option value="custom-software">Custom Software Development</option>
                            <option value="cloud-solutions">Cloud Solutions</option>
                            <option value="mobile-development">Mobile App Development</option>
                            <option value="web-development">Web Development</option>
                            <option value="devops">DevOps & Infrastructure</option>
                            <option value="digital-transformation">Digital Transformation</option>
                            <option value="consultation">General Consultation</option>
                        </select>
                    </div>
                    
                    <!-- Project Budget -->
                    <div>
                        <label for="budget" class="block text-sm font-medium text-gray-300 mb-2">Project Budget</label>
                        <select id="budget" name="budget" 
                                class="w-full px-4 py-3 bg-slate-800 border border-slate-600 rounded-lg text-white focus:border-bright-cyan focus:ring-1 focus:ring-bright-cyan transition-colors">
                            <option value="">Select budget range</option>
                            <option value="under-25k">Under $25,000</option>
                            <option value="25k-50k">$25,000 - $50,000</option>
                            <option value="50k-100k">$50,000 - $100,000</option>
                            <option value="100k-250k">$100,000 - $250,000</option>
                            <option value="over-250k">Over $250,000</option>
                        </select>
                    </div>
                    
                    <!-- Message -->
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-300 mb-2">Project Details *</label>
                        <textarea id="message" name="message" rows="6" required 
                                  class="w-full px-4 py-3 bg-slate-800 border border-slate-600 rounded-lg text-white placeholder-gray-400 focus:border-bright-cyan focus:ring-1 focus:ring-bright-cyan transition-colors resize-none"
                                  placeholder="Tell us about your project requirements, goals, and timeline..."></textarea>
                    </div>
                    
                    <!-- Submit button -->
                    <div class="text-center">
                        <button type="submit" 
                                class="bg-gradient-to-r from-bright-indigo to-bright-cyan text-white px-8 py-4 rounded-lg font-semibold text-lg hover:shadow-lg hover:shadow-bright-indigo/25 transition-all duration-300 transform hover:-translate-y-1"
                                x-show="!submitted">
                            Send Message
                        </button>
                        
                        <!-- Success message -->
                        <div x-show="submitted" x-transition class="bg-green-500/20 border border-green-500 rounded-lg p-4 text-green-400">
                            <svg class="w-6 h-6 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Thank you! Your message has been sent. We'll get back to you within 24 hours.
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

