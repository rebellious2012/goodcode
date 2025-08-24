<section class="py-20 bg-slate-800/50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <!-- Section header -->
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    {{ __('contact.form_title') }} <span class="text-bright-cyan">{{ __('contact.form_highlight') }}</span>
                </h2>
                <p class="text-xl text-gray-300">
                    {{ __('contact.form_subtitle') }}
                </p>
            </div>
            
            <!-- Contact form -->
            <div class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl p-8">
                <form class="space-y-6" x-data="{ submitted: false }" @submit.prevent="submitted = true">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- First Name -->
                        <div>
                            <label for="first_name" class="block text-sm font-medium text-gray-300 mb-2">{{ __('contact.form_fname_label') }}</label>
                            <input type="text" id="first_name" name="first_name" required 
                                   class="w-full px-4 py-3 bg-slate-800 border border-slate-600 rounded-lg text-white placeholder-gray-400 focus:border-bright-cyan focus:ring-1 focus:ring-bright-cyan transition-colors"
                                   placeholder="{{ __('contact.form_fname_placeholder') }}">
                        </div>
                        
                        <!-- Last Name -->
                        <div>
                            <label for="last_name" class="block text-sm font-medium text-gray-300 mb-2">{{ __('contact.form_lname_label') }}</label>
                            <input type="text" id="last_name" name="last_name" required 
                                   class="w-full px-4 py-3 bg-slate-800 border border-slate-600 rounded-lg text-white placeholder-gray-400 focus:border-bright-cyan focus:ring-1 focus:ring-bright-cyan transition-colors"
                                   placeholder="{{ __('contact.form_lname_placeholder') }}">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-300 mb-2">{{ __('contact.form_email_label') }}</label>
                            <input type="email" id="email" name="email" required 
                                   class="w-full px-4 py-3 bg-slate-800 border border-slate-600 rounded-lg text-white placeholder-gray-400 focus:border-bright-cyan focus:ring-1 focus:ring-bright-cyan transition-colors"
                                   placeholder="{{ __('contact.form_email_placeholder') }}">
                        </div>
                        
                        <!-- Phone -->
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-300 mb-2">{{ __('contact.form_phone_label') }}</label>
                            <input type="tel" id="phone" name="phone" 
                                   class="w-full px-4 py-3 bg-slate-800 border border-slate-600 rounded-lg text-white placeholder-gray-400 focus:border-bright-cyan focus:ring-1 focus:ring-bright-cyan transition-colors"
                                   placeholder="{{ __('contact.form_phone_placeholder') }}">
                        </div>
                    </div>
                    
                    <!-- Company -->
                    <div>
                        <label for="company" class="block text-sm font-medium text-gray-300 mb-2">{{ __('contact.form_company_label') }}</label>
                        <input type="text" id="company" name="company" 
                               class="w-full px-4 py-3 bg-slate-800 border border-slate-600 rounded-lg text-white placeholder-gray-400 focus:border-bright-cyan focus:ring-1 focus:ring-bright-cyan transition-colors"
                               placeholder="{{ __('contact.form_company_placeholder') }}">
                    </div>
                    
                    <!-- Service Interest -->
                    <div>
                        <label for="service" class="block text-sm font-medium text-gray-300 mb-2">{{ __('contact.form_service_label') }}</label>
                        <select id="service" name="service" 
                                class="w-full px-4 py-3 bg-slate-800 border border-slate-600 rounded-lg text-white focus:border-bright-cyan focus:ring-1 focus:ring-bright-cyan transition-colors">
                            <option value="">{{ __('contact.form_service_option_default') }}</option>
                            <option value="custom-software">{{ __('contact.form_service_option1') }}</option>
                            <option value="cloud-solutions">{{ __('contact.form_service_option2') }}</option>
                            <option value="mobile-development">{{ __('contact.form_service_option3') }}</option>
                            <option value="web-development">{{ __('contact.form_service_option4') }}</option>
                            <option value="devops">{{ __('contact.form_service_option5') }}</option>
                            <option value="digital-transformation">{{ __('contact.form_service_option6') }}</option>
                            <option value="consultation">{{ __('contact.form_service_option7') }}</option>
                        </select>
                    </div>
                    
                    <!-- Project Budget -->
                    <div>
                        <label for="budget" class="block text-sm font-medium text-gray-300 mb-2">{{ __('contact.form_budget_label') }}</label>
                        <select id="budget" name="budget" 
                                class="w-full px-4 py-3 bg-slate-800 border border-slate-600 rounded-lg text-white focus:border-bright-cyan focus:ring-1 focus:ring-bright-cyan transition-colors">
                            <option value="">{{ __('contact.form_budget_option_default') }}</option>
                            <option value="under-25k">{{ __('contact.form_budget_option1') }}</option>
                            <option value="25k-50k">{{ __('contact.form_budget_option2') }}</option>
                            <option value="50k-100k">{{ __('contact.form_budget_option3') }}</option>
                            <option value="100k-250k">{{ __('contact.form_budget_option4') }}</option>
                            <option value="over-250k">{{ __('contact.form_budget_option5') }}</option>
                        </select>
                    </div>
                    
                    <!-- Message -->
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-300 mb-2">{{ __('contact.form_message_label') }}</label>
                        <textarea id="message" name="message" rows="6" required 
                                  class="w-full px-4 py-3 bg-slate-800 border border-slate-600 rounded-lg text-white placeholder-gray-400 focus:border-bright-cyan focus:ring-1 focus:ring-bright-cyan transition-colors resize-none"
                                  placeholder="{{ __('contact.form_message_placeholder') }}"></textarea>
                    </div>
                    
                    <!-- Submit button -->
                    <div class="text-center">
                        <button type="submit" 
                                class="bg-gradient-to-r from-bright-indigo to-bright-cyan text-white px-8 py-4 rounded-lg font-semibold text-lg hover:shadow-lg hover:shadow-bright-indigo/25 transition-all duration-300 transform hover:-translate-y-1"
                                x-show="!submitted">
                            {{ __('contact.form_submit_button') }}
                        </button>
                        
                        <!-- Success message -->
                        <div x-show="submitted" x-transition class="bg-green-500/20 border border-green-500 rounded-lg p-4 text-green-400">
                            <svg class="w-6 h-6 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            {{ __('contact.form_success_message') }}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

