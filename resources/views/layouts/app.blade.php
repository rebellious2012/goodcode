<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CodElevator - Leading IT Company')</title>
    <meta name="description" content="@yield('meta_description', __('home.meta_description'))">
    <meta name="google-site-verification" content="eEm_jo1DU-jl5GIWEa3wANkWLe-lNPZmm-B_Z1ALcDg" />
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">

    {{-- Canonical --}}
    <link rel="canonical" href="{{ \App\Helpers\SeoHelper::canonicalUrl() }}">
    {!! \App\Helpers\SeoHelper::hreflangTags() !!}

    {{-- Open Graph --}}
    <meta property="og:title" content="@yield('title', 'CodElevator - Leading IT Company')" />
    <meta property="og:description" content="@yield('meta_description', __('home.meta_description'))" />
    <meta property="og:url" content="{{ \App\Helpers\SeoHelper::canonicalUrl() }}" />
    <meta property="og:image" content="{{ asset('social_profile.png') }}" />
    <meta property="og:type" content="@yield('og_type', 'website')" />
    <meta property="og:locale" content="{{ \App\Helpers\SeoHelper::ogLocale() }}" />
    <meta property="og:site_name" content="CodElevator Solutions" />

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="@yield('title', 'CodElevator - Leading IT Company')" />
    <meta name="twitter:description" content="@yield('meta_description', __('home.meta_description'))" />
    <meta name="twitter:image" content="{{ asset('social_profile.png') }}" />

    {{-- JSON-LD Structured Data: Organization --}}
    <script type="application/ld+json">
    @php
    $orgSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => 'CodElevator Solutions',
        'url' => url('/'),
        'logo' => asset('codelevator_logo_v2.png'),
        'contactPoint' => [
            '@type' => 'ContactPoint',
            'telephone' => '+48 883-219-797',
            'contactType' => 'sales',
            'email' => 'support@codelevator.top',
        ],
        'address' => [
            '@type' => 'PostalAddress',
            'addressCountry' => 'PL',
        ],
    ];
    @endphp
    {!! json_encode($orgSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>

    {{-- JSON-LD: WebSite --}}
    <script type="application/ld+json">
    @php
    $websiteSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => 'CodElevator Solutions',
        'url' => url('/'),
        'potentialAction' => [
            '@type' => 'SearchAction',
            'target' => url('/') . '/?s={search_term_string}',
            'query-input' => 'required name=search_term_string',
        ],
    ];
    @endphp
    {!! json_encode($websiteSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>

    @yield('head_extra')

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'deep-blue': '#0f172a',
                        'bright-indigo': '#6366f1',
                        'bright-indigo-light': '#818cf8',
                        'bright-cyan': '#22d3ee'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-deep-blue text-white min-h-screen">
    @include('components.header')

    <main>
        @yield('content')
    </main>

    @include('components.footer')
</body>
</html>
