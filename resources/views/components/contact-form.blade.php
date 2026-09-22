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
                <form class="space-y-6" 
                      x-data="{
                          loading: false,
                          submitted: false,
                          errorMessage: '',
                          async handleSubmit(e) {
                              this.loading = true;
                              this.errorMessage = '';
                              const form = e.target;
                              const formData = new FormData(form);

                              try {
                                  const response = await fetch('{{ route('contact.submit') }}', {
                                      method: 'POST',
                                      headers: {
                                          'X-Requested-With': 'XMLHttpRequest',
                                          'Accept': 'application/json',
                                          'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                      },
                                      body: formData
                                  });

                                  const data = await response.json();

                                  if (response.ok && data.success) {
                                      this.submitted = true;
                                      form.reset();
                                  } else {
                                      if (data.errors) {
                                          this.errorMessage = Object.values(data.errors).flat().join('<br>');
                                      } else {
                                          this.errorMessage = data.message || 'Произошла ошибка при отправке. Пожалуйста, попробуйте позже.';
                                      }
                                  }
                              } catch (err) {
                                  this.errorMessage = 'Ошибка сети. Проверьте подключение к интернету и повторите попытку.';
                              } finally {
                                  this.loading = false;
                              }
                          }
                      }" 
                      @submit.prevent="handleSubmit($event)">
                    @csrf

                    <!-- Honeypot anti-spam trap (hidden from real users) -->
                    <div style="display: none !important;" aria-hidden="true">
                        <input type="text" name="website_hp" tabindex="-1" autocomplete="off">
                    </div>

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
                    
                    <!-- Submit button & Messages -->
                    <div class="text-center">
                        <button type="submit" 
                                class="bg-gradient-to-r from-bright-indigo to-bright-cyan text-white px-8 py-4 rounded-lg font-semibold text-lg hover:shadow-lg hover:shadow-bright-indigo/25 transition-all duration-300 transform hover:-translate-y-1 disabled:opacity-50 disabled:cursor-not-allowed inline-flex items-center justify-center space-x-2 min-w-[200px]"
                                :disabled="loading"
                                x-show="!submitted">
                            <span x-show="!loading">{{ __('contact.form_submit_button') }}</span>
                            <span x-show="loading" class="inline-flex items-center" style="display: none;">
                                <svg class="animate-spin -ml-1 mr-2 h-5 w-5 text-white" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                <span>{{ __('contact.sending') ?? 'Отправка...' }}</span>
                            </span>
                        </button>
                        
                        <!-- Error message -->
                        <div x-show="errorMessage" x-transition class="mt-4 bg-red-500/20 border border-red-500 rounded-lg p-4 text-red-400 text-left" x-html="errorMessage" style="display: none;"></div>

                        <!-- Success message -->
                        <div x-show="submitted" x-transition class="bg-green-500/20 border border-green-500 rounded-lg p-4 text-green-400 flex items-center justify-center" style="display: none;">
                            <svg class="w-6 h-6 inline-block mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>{{ __('contact.form_success_message') }}</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
