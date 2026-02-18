@extends('layouts.app')

@section('title', __('about.title'))

@section('content')
<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-deep-blue via-slate-900 to-slate-800">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">
            {{ __('about.hero_title') }} <span class="text-bright-indigo">{{ __('about.hero_highlight') }}</span>
        </h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">
            {{ __('about.hero_subtitle') }}
        </p>
    </div>
</section>

<!-- Mission Section -->
<section class="py-20 bg-slate-800/30">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-4xl font-bold text-white mb-6">{{ __('about.mission_title') }}</h2>
                <p class="text-lg text-gray-300 mb-6">
                    {{ __('about.mission_p1') }}
                </p>
                <p class="text-lg text-gray-300 mb-6">
                    {{ __('about.mission_p2') }}
                </p>
                <p class="text-lg text-gray-300">
                    {{ __('about.mission_p3') }}
                </p>
            </div>
            <div class="bg-gradient-to-br from-slate-900 to-slate-800 border border-slate-700 rounded-xl p-8">
                <h3 class="text-2xl font-bold text-white mb-6">{{ __('about.tech_stack_title') }}</h3>
                
                <!-- Backend & Databases -->
                <div class="mb-6">
                    <p class="text-sm text-bright-cyan font-semibold mb-3">Backend & Databases</p>
                    <div class="grid grid-cols-3 gap-4">
                        <div class="bg-slate-800/50 rounded-lg p-3 flex items-center justify-center hover:bg-slate-700/50 transition-all hover:scale-105">
                            <img src="{{ asset('img/logos/php.svg') }}" alt="PHP" class="h-10 w-10">
                        </div>
                        <div class="bg-slate-800/50 rounded-lg p-3 flex items-center justify-center hover:bg-slate-700/50 transition-all hover:scale-105">
                            <img src="{{ asset('img/logos/laravel.svg') }}" alt="Laravel" class="h-10 w-10">
                        </div>
                        <div class="bg-slate-800/50 rounded-lg p-3 flex items-center justify-center hover:bg-slate-700/50 transition-all hover:scale-105">
                            <svg class="h-10 w-10 text-bright-indigo" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.23 12.004a2.236 2.236 0 0 1-2.235 2.236 2.236 2.236 0 0 1-2.236-2.236 2.236 2.236 0 0 1 2.235-2.236 2.236 2.236 0 0 1 2.236 2.236zm2.648-10.69c-1.346 0-3.107.96-4.888 2.622-1.78-1.653-3.542-2.602-4.887-2.602-.41 0-.783.093-1.106.278-1.375.793-1.683 3.264-.973 6.365C1.98 8.917 0 10.42 0 12.004c0 1.59 1.99 3.097 5.043 4.03-.704 3.113-.39 5.588.988 6.38.32.187.69.275 1.102.275 1.345 0 3.107-.96 4.888-2.624 1.78 1.654 3.542 2.603 4.887 2.603.41 0 .783-.09 1.106-.275 1.374-.792 1.683-3.263.973-6.365C22.02 15.096 24 13.59 24 12.004c0-1.59-1.99-3.097-5.043-4.032.704-3.11.39-5.587-.988-6.38-.318-.184-.688-.277-1.092-.278zm-.005 1.09v.006c.225 0 .406.044.558.127.666.382.955 1.835.73 3.704-.054.46-.142.945-.25 1.44-.96-.236-2.006-.417-3.107-.534-.66-.905-1.345-1.727-2.035-2.447 1.592-1.48 3.087-2.292 4.105-2.295zm-9.77.02c1.012 0 2.514.808 4.11 2.28-.686.72-1.37 1.537-2.02 2.442-1.107.117-2.154.298-3.113.538-.112-.49-.195-.964-.254-1.42-.23-1.868.054-3.32.714-3.707.19-.09.4-.127.563-.132zm4.882 3.05c.455.468.91.992 1.36 1.564-.44-.02-.89-.034-1.345-.034-.46 0-.915.01-1.36.034.44-.572.895-1.096 1.345-1.565zM12 8.1c.74 0 1.477.034 2.202.093.406.582.802 1.203 1.183 1.86.372.64.71 1.29 1.018 1.946-.308.655-.646 1.31-1.013 1.95-.38.66-.773 1.288-1.18 1.87-.728.063-1.466.098-2.21.098-.74 0-1.477-.035-2.202-.093-.406-.582-.802-1.204-1.183-1.86-.372-.64-.71-1.29-1.018-1.946.303-.657.646-1.313 1.013-1.954.38-.66.773-1.286 1.18-1.868.728-.064 1.466-.098 2.21-.098zm-3.635.254c-.24.377-.48.763-.704 1.16-.225.39-.435.782-.635 1.174-.265-.656-.49-1.31-.676-1.947.64-.15 1.315-.283 2.015-.386zm7.26 0c.695.103 1.365.23 2.006.387-.18.632-.405 1.282-.66 1.933-.2-.39-.41-.783-.64-1.174-.225-.392-.465-.774-.705-1.146zm3.063.675c.484.15.944.317 1.375.498 1.732.74 2.852 1.708 2.852 2.476-.005.768-1.125 1.74-2.857 2.475-.42.18-.88.342-1.355.493-.28-.958-.646-1.956-1.1-2.98.45-1.017.81-2.01 1.085-2.964zm-13.395.004c.278.96.645 1.957 1.1 2.98-.45 1.017-.812 2.01-1.086 2.964-.484-.15-.944-.318-1.37-.5-1.732-.737-2.852-1.706-2.852-2.474 0-.768 1.12-1.742 2.852-2.476.42-.18.88-.342 1.356-.494zm11.678 4.28c.265.657.49 1.312.676 1.948-.64.157-1.316.29-2.016.39.24-.375.48-.762.705-1.158.225-.39.435-.788.636-1.18zm-9.945.02c.2.392.41.783.64 1.175.23.39.465.772.705 1.143-.695-.102-1.365-.23-2.006-.386.18-.63.406-1.282.66-1.933zM17.92 16.32c.112.493.2.968.254 1.423.23 1.868-.054 3.32-.714 3.708-.147.09-.338.128-.563.128-1.012 0-2.514-.807-4.11-2.28.686-.72 1.37-1.536 2.02-2.44 1.107-.118 2.154-.3 3.113-.54zm-11.83.01c.96.234 2.006.415 3.107.532.66.905 1.345 1.727 2.035 2.446-1.595 1.483-3.092 2.295-4.11 2.295-.22-.005-.406-.05-.553-.132-.666-.38-.955-1.834-.73-3.703.054-.46.142-.944.25-1.438zm4.56.64c.44.02.89.034 1.345.034.46 0 .915-.01 1.36-.034-.44.572-.895 1.095-1.345 1.565-.455-.47-.91-.993-1.36-1.565z"/>
                            </svg>
                        </div>
                        <div class="bg-slate-800/50 rounded-lg p-3 flex items-center justify-center hover:bg-slate-700/50 transition-all hover:scale-105">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL" class="h-10 w-10">
                        </div>
                        <div class="bg-slate-800/50 rounded-lg p-3 flex items-center justify-center hover:bg-slate-700/50 transition-all hover:scale-105">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postgresql/postgresql-original.svg" alt="PostgreSQL" class="h-10 w-10">
                        </div>
                        <div class="bg-slate-800/50 rounded-lg p-3 flex items-center justify-center hover:bg-slate-700/50 transition-all hover:scale-105">
                            <svg class="h-10 w-10 text-yellow-400" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M21.333 10.547H10.666V8.88h10.667v1.667zm0 3.333H10.666v-1.667h10.667V13.88zm0 3.333H10.666v-1.667h10.667v1.667zM8.547 8.88H2.666v8.333h5.88V8.88z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Frontend & Design -->
                <div class="mb-6">
                    <p class="text-sm text-bright-cyan font-semibold mb-3">Frontend & Design</p>
                    <div class="grid grid-cols-3 gap-4">
                        <div class="bg-slate-800/50 rounded-lg p-3 flex items-center justify-center hover:bg-slate-700/50 transition-all hover:scale-105">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" alt="Vue.js" class="h-10 w-10">
                        </div>
                        <div class="bg-slate-800/50 rounded-lg p-3 flex items-center justify-center hover:bg-slate-700/50 transition-all hover:scale-105">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg" alt="Figma" class="h-10 w-10">
                        </div>
                    </div>
                </div>

                <!-- AI Tools -->
                <div class="mb-6">
                    <p class="text-sm text-bright-cyan font-semibold mb-3">AI-Powered Development</p>
                    <div class="grid grid-cols-3 gap-4">
                        <div class="bg-slate-800/50 rounded-lg p-3 flex items-center justify-center hover:bg-slate-700/50 transition-all hover:scale-105">
                            <svg class="h-10 w-10 text-orange-400" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M22.282 9.821a5.985 5.985 0 0 0-.516-4.91 6.046 6.046 0 0 0-6.51-2.9A6.065 6.065 0 0 0 4.981 4.18a5.985 5.985 0 0 0-3.998 2.9 6.046 6.046 0 0 0 .743 7.097 5.98 5.98 0 0 0 .51 4.911 6.051 6.051 0 0 0 6.515 2.9A5.985 5.985 0 0 0 13.26 24a6.056 6.056 0 0 0 5.772-4.206 5.99 5.99 0 0 0 3.997-2.9 6.056 6.056 0 0 0-.747-7.073zM13.26 22.43a4.476 4.476 0 0 1-2.876-1.04l.141-.081 4.779-2.758a.795.795 0 0 0 .392-.681v-6.737l2.02 1.168a.071.071 0 0 1 .038.052v5.583a4.504 4.504 0 0 1-4.494 4.494zM3.6 18.304a4.47 4.47 0 0 1-.535-3.014l.142.085 4.783 2.759a.771.771 0 0 0 .78 0l5.843-3.369v2.332a.08.08 0 0 1-.033.062L9.74 19.95a4.5 4.5 0 0 1-6.14-1.646zM2.34 7.896a4.485 4.485 0 0 1 2.366-1.973V11.6a.766.766 0 0 0 .388.676l5.815 3.355-2.02 1.168a.076.076 0 0 1-.071 0l-4.83-2.786A4.504 4.504 0 0 1 2.34 7.872zm16.597 3.855l-5.833-3.387L15.119 7.2a.076.076 0 0 1 .071 0l4.83 2.791a4.494 4.494 0 0 1-.676 8.105v-5.678a.79.79 0 0 0-.407-.667zm2.01-3.023l-.141-.085-4.774-2.782a.776.776 0 0 0-.785 0L9.409 9.23V6.897a.066.066 0 0 1 .028-.061l4.83-2.787a4.5 4.5 0 0 1 6.68 4.66zm-12.64 4.135l-2.02-1.164a.08.08 0 0 1-.038-.057V6.075a4.5 4.5 0 0 1 7.375-3.453l-.142.08L8.704 5.46a.795.795 0 0 0-.393.681zm1.097-2.365l2.602-1.5 2.607 1.5v2.999l-2.597 1.5-2.607-1.5z"/>
                            </svg>
                        </div>
                        <div class="bg-slate-800/50 rounded-lg p-3 flex items-center justify-center hover:bg-slate-700/50 transition-all hover:scale-105">
                            <svg class="h-10 w-10" viewBox="0 0 24 24" fill="none">
                                <rect width="24" height="24" rx="4" fill="#10A37F"/>
                                <path d="M12.5 8.5L15 11L12.5 13.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.5 13.5L6 11L8.5 8.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="bg-slate-800/50 rounded-lg p-3 flex items-center justify-center hover:bg-slate-700/50 transition-all hover:scale-105">
                            <svg class="h-10 w-10 text-purple-400" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                            </svg>
                        </div>
                        <div class="bg-slate-800/50 rounded-lg p-3 flex items-center justify-center hover:bg-slate-700/50 transition-all hover:scale-105">
                            <svg class="h-10 w-10 text-blue-400" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Marketing & Analytics -->
                <div>
                    <p class="text-sm text-bright-cyan font-semibold mb-3">Marketing & Analytics</p>
                    <div class="grid grid-cols-3 gap-4">
                        <div class="bg-slate-800/50 rounded-lg p-3 flex items-center justify-center hover:bg-slate-700/50 transition-all hover:scale-105">
                            <svg class="h-10 w-10 text-green-400" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                            </svg>
                        </div>
                        <div class="bg-slate-800/50 rounded-lg p-3 flex items-center justify-center hover:bg-slate-700/50 transition-all hover:scale-105">
                            <svg class="h-10 w-10 text-pink-400" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17 2H7C5.9 2 5 2.9 5 4v16c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-5 18c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm5-6H7V4h10v10z"/>
                            </svg>
                        </div>
                        <div class="bg-slate-800/50 rounded-lg p-3 flex items-center justify-center hover:bg-slate-700/50 transition-all hover:scale-105">
                            <svg class="h-10 w-10" viewBox="0 0 24 24" fill="none">
                                <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                                <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                                <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                                <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                            </svg>
                        </div>
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
                {{ __('about.team_title') }} <span class="text-bright-cyan">{{ __('about.team_highlight') }}</span>
            </h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                {{ __('about.team_subtitle') }}
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- CEO -->
            <div class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl p-8 text-center hover:border-bright-indigo transition-all duration-300">
                <div class="w-24 h-24 rounded-full mx-auto mb-6 overflow-hidden ring-4 ring-bright-indigo/30">
                    <img src="{{ asset('img/Roman.jpg') }}" alt="Roman Samoilenko" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Roman</h3>
                <p class="text-bright-cyan mb-4">{{ __('about.ceo_role') }}</p>
                <p class="text-gray-300">
                    {{ __('about.ceo_bio') }}
                </p>
            </div>
            
            <!-- CTO -->
            <div class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl p-8 text-center hover:border-bright-cyan transition-all duration-300">
                <div class="w-24 h-24 rounded-full mx-auto mb-6 overflow-hidden ring-4 ring-bright-cyan/30">
                    <img src="{{ asset('img/софия.png') }}" alt="Sophia" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Sophia</h3>
                <p class="text-bright-cyan mb-4">{{ __('about.cto_role') }}</p>
                <p class="text-gray-300">
                    {{ __('about.cto_bio') }}
                </p>
            </div>
            
            <!-- VP of Engineering -->
            <div class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl p-8 text-center hover:border-bright-indigo transition-all duration-300">
                <div class="w-24 h-24 rounded-full mx-auto mb-6 overflow-hidden ring-4 ring-bright-cyan/30">
                    <img src="{{ asset('img/dimon.jpg') }}" alt="Dmytro Kutsenko" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Dmytro Kutsenko</h3>
                <p class="text-bright-cyan mb-4">{{ __('about.vp_role') }}</p>
                <p class="text-gray-300">
                    {{ __('about.vp_bio') }}
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
                {{ __('about.values_title') }} <span class="text-bright-indigo">{{ __('about.values_highlight') }}</span>
            </h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                {{ __('about.values_subtitle') }}
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
                <h3 class="text-xl font-bold text-white mb-4">{{ __('about.value1_title') }}</h3>
                <p class="text-gray-300">
                    {{ __('about.value1_desc') }}
                </p>
            </div>
            
            <!-- Excellence -->
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-r from-bright-cyan to-bright-indigo rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">{{ __('about.value2_title') }}</h3>
                <p class="text-gray-300">
                    {{ __('about.value2_desc') }}
                </p>
            </div>
            
            <!-- Collaboration -->
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-r from-bright-indigo to-bright-cyan rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">{{ __('about.value3_title') }}</h3>
                <p class="text-gray-300">
                    {{ __('about.value3_desc') }}
                </p>
            </div>
            
            <!-- Integrity -->
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-r from-bright-cyan to-bright-indigo rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">{{ __('about.value4_title') }}</h3>
                <p class="text-gray-300">
                    {{ __('about.value4_desc') }}
                </p>
            </div>
        </div>
    </div>
</section>

@include('components.cta')
@endsection

