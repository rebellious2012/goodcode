{{-- JSON-LD Structured Data: Organization (single source, included by layouts.app and pages.home) --}}
<script type="application/ld+json">
@php
$orgSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'Organization',
    '@id' => 'https://codelevator.top/#organization',
    'name' => 'CodElevator',
    'legalName' => 'CodElevator Samoilenko Roman',
    'url' => url('/'),
    'logo' => asset('codelevator_logo_v2.png'),
    'description' => __('home.meta_description'),
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => 'ul. Kościuszki',
        'addressLocality' => 'Stare Kurovo',
        'addressCountry' => 'PL',
    ],
    'knowsAbout' => [
        'Web development',
        'PHP',
        'Laravel',
        'Vue.js',
        'CRM',
        'Web applications',
        'SEO',
    ],
    'sameAs' => [
        'https://github.com/rebellious2012',
        'https://www.linkedin.com/in/-r-samoilenko/',
        'https://www.facebook.com/profile.php?id=61584769756560',
        'https://naszemiasto.pl/codelevator/kf/677631',
    ],
    'contactPoint' => [
        '@type' => 'ContactPoint',
        'telephone' => '+48 883-219-797',
        'contactType' => 'sales',
        'email' => 'support@codelevator.top',
        'availableLanguage' => ['pl', 'en', 'ru', 'uk'],
    ],
];
@endphp
{!! json_encode($orgSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
