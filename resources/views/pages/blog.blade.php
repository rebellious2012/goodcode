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
@if($blogPosts->isNotEmpty())
<section class="py-20 bg-slate-800/30">
    <div class="container mx-auto px-4">
        <div class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="h-64 lg:h-auto bg-gradient-to-br from-bright-indigo to-bright-cyan flex items-center justify-center">
                    @if($blogPosts->first()->image)
                        <img src="{{ asset('storage/' . $blogPosts->first()->image) }}" alt="{{ $blogPosts->first()->title }}" class="w-full h-full object-cover">
                    @else
                    <div class="text-white text-center">
                        <svg class="w-20 h-20 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                        <div class="text-sm opacity-80">{{ __('blog.featured_article') }}</div>
                    </div>
                    @endif
                </div>
                <div class="p-8">
                    <div class="flex items-center space-x-4 mb-4">
                         @if($blogPosts->first()->tags)
                            @foreach($blogPosts->first()->tags as $tag)
                                <span class="px-3 py-1 bg-bright-indigo/20 text-bright-indigo rounded-full text-sm">{{ $tag }}</span>
                            @endforeach
                        @endif
                        <span class="text-gray-400 text-sm">{{ $blogPosts->first()->created_at->format('M d, Y') }}</span>
                    </div>
                    <h2 class="text-3xl font-bold text-white mb-4">
                        {{ $blogPosts->first()->title }}
                    </h2>
                    <p class="text-gray-300 mb-6">
                        {{ $blogPosts->first()->preview }}
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-gradient-to-r from-bright-cyan to-bright-indigo rounded-full flex items-center justify-center">
                                <span class="text-white font-semibold text-sm">{{ substr($blogPosts->first()->author, 0, 2) }}</span>
                            </div>
                            <div>
                                <div class="text-white font-semibold">{{ $blogPosts->first()->author }}</div>
                            </div>
                        </div>
                        <a href="#" class="text-bright-cyan hover:text-bright-indigo transition-colors font-semibold">
                            {{ __('blog.read_more') }} →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<!-- Blog Articles Grid -->
<section class="py-20 bg-slate-900/30">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($blogPosts->skip(1) as $post)
            <article class="bg-slate-900/80 backdrop-blur-sm border border-slate-700 rounded-xl overflow-hidden hover:border-bright-indigo transition-all duration-300">
                <div class="h-48 bg-gradient-to-br from-bright-cyan to-bright-indigo flex items-center justify-center">
                     @if($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                    @else
                    <div class="text-white text-center">
                        <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"></path>
                        </svg>
                        <div class="text-sm opacity-80">{{ $post->tags[0] ?? 'Blog' }}</div>
                    </div>
                    @endif
                </div>
                <div class="p-6">
                    <div class="flex items-center space-x-4 mb-3">
                        @if($post->tags)
                            @foreach($post->tags as $tag)
                                <span class="px-3 py-1 bg-bright-cyan/20 text-bright-cyan rounded-full text-sm">{{ $tag }}</span>
                            @endforeach
                        @endif
                        <span class="text-gray-400 text-sm">{{ $post->created_at->format('M d, Y') }}</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">
                        {{ $post->title }}
                    </h3>
                    <p class="text-gray-300 mb-4">
                       {{ $post->preview }}
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 bg-gradient-to-r from-bright-indigo to-bright-cyan rounded-full flex items-center justify-center">
                                <span class="text-white font-semibold text-xs">{{ substr($post->author, 0, 2) }}</span>
                            </div>
                            <span class="text-gray-400 text-sm">{{ $post->author }}</span>
                        </div>
                        <a href="#" class="text-bright-cyan hover:text-bright-indigo transition-colors font-semibold">
                            {{ __('blog.read_more') }} →
                        </a>
                    </div>
                </div>
            </article>
            @endforeach
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
