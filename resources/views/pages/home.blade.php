<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>{{ __('home.title') }}</title>
<meta name="description" content="{{ __('home.meta_description') }}">
<meta name="google-site-verification" content="eEm_jo1DU-jl5GIWEa3wANkWLe-lNPZmm-B_Z1ALcDg" />
<link rel="icon" href="{{ asset('favicon.ico') }}">
<link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">

{{-- Canonical + hreflang (locale-aware) --}}
<link rel="canonical" href="{{ \App\Helpers\SeoHelper::canonicalUrl() }}">
{!! \App\Helpers\SeoHelper::hreflangTags() !!}

{{-- Open Graph --}}
<meta property="og:title" content="{{ __('home.title') }}" />
<meta property="og:description" content="{{ __('home.meta_description') }}" />
<meta property="og:url" content="{{ \App\Helpers\SeoHelper::canonicalUrl() }}" />
<meta property="og:image" content="{{ asset('social_profile.png') }}" />
<meta property="og:type" content="website" />
<meta property="og:locale" content="{{ \App\Helpers\SeoHelper::ogLocale() }}" />
<meta property="og:site_name" content="CodElevator" />

{{-- Twitter Card --}}
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="{{ __('home.title') }}" />
<meta name="twitter:description" content="{{ __('home.meta_description') }}" />
<meta name="twitter:image" content="{{ asset('social_profile.png') }}" />

@include('components.partials.organization-schema')

{{-- JSON-LD: WebSite --}}
<script type="application/ld+json">
@php
$websiteSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'WebSite',
    'name' => 'CodElevator',
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
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600&family=IBM+Plex+Mono:wght@500;600&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<script>
tailwind.config = { theme: { extend: {
  colors: { brass:'#c9a24b', ink:'#0b0b0d' },
  fontFamily: { display:['"Space Grotesk"','sans-serif'], body:['Inter','sans-serif'], mono:['"IBM Plex Mono"','monospace'] }
}}}
</script>
<style>
  :root{ padding-top:env(safe-area-inset-top,0px); padding-bottom:env(safe-area-inset-bottom,0px); }
  *{box-sizing:border-box}
  html,body{height:100%; margin:0; background:#0b0b0d; color:#eeece6; font-family:'Inter',sans-serif;}

  .grain{position:fixed; inset:-100px; z-index:50; pointer-events:none; opacity:.05; mix-blend-mode:overlay;
    background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='140' height='140'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='2' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");}

  .lift-scroll{height:100svh; overflow-y:scroll; scroll-snap-type:y mandatory; scrollbar-width:none;}
  .lift-scroll::-webkit-scrollbar{display:none;}
  .deck{position:relative; min-height:100svh; scroll-snap-align:start; scroll-snap-stop:always; padding:100px 6vw 60px; overflow:hidden; display:flex; align-items:center; justify-content:center;}
  .deck.deck-top{align-items:flex-start;}

  .ghost{position:absolute; z-index:0; font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:min(46vw,620px); line-height:1; color:rgba(255,255,255,.035); letter-spacing:-.04em; user-select:none; top:50%; left:50%; transform:translate(-50%,-46%) scale(.9); transition:transform 1s cubic-bezier(.2,.7,.3,1), opacity 1s;}
  .deck.is-open .ghost{transform:translate(-50%,-46%) scale(1);}

  .content{position:relative; z-index:5; text-align:center; display:flex; flex-direction:column; align-items:center; gap:1.5rem; max-width:920px; margin:0 auto; opacity:0; transform:translateY(26px); transition:opacity .9s ease, transform .9s cubic-bezier(.2,.7,.3,1);}
  .content-left{position:relative; z-index:5; max-width:840px; margin:0 auto; width:100%; opacity:0; transform:translateY(26px); transition:opacity .9s ease, transform .9s cubic-bezier(.2,.7,.3,1);}
  .deck.is-open .content, .deck.is-open .content-left{opacity:1; transform:translateY(0);}

  .brand{display:flex; align-items:center; gap:8px; font-family:'Space Grotesk',sans-serif; font-weight:600; font-size:1.4rem; color:#fff;}
  .brand .dot{color:#c9a24b;}

  .indicator{position:fixed; left:14px; top:50%; transform:translateY(-50%); z-index:60; background:rgba(20,20,22,.85); backdrop-filter:blur(4px); border:1px solid #35342f; border-radius:10px; padding:10px 8px; box-shadow:0 10px 30px rgba(0,0,0,.4);}
  .indicator .digit{font-family:'IBM Plex Mono',monospace; font-size:1.3rem; font-weight:600; color:#c9a24b; text-shadow:0 0 10px rgba(201,162,75,.5); width:32px; text-align:center;}
  .indicator .arrow{width:0;height:0;border-left:6px solid transparent;border-right:6px solid transparent; margin:4px auto; opacity:.25; transition:opacity .3s;}
  .indicator .arrow.up{border-bottom:9px solid #8891a6;} .indicator .arrow.down{border-top:9px solid #8891a6;} .indicator .arrow.lit{opacity:1;}
  @media(max-width:768px){.indicator{left:6px; padding:6px 5px;} .indicator .digit{font-size:1rem; width:24px;} .ghost{font-size:min(60vw,320px);}}

  .eyebrow{display:inline-flex; align-items:center; gap:8px; color:#c9a24b; font-family:'IBM Plex Mono',monospace; font-size:.7rem; letter-spacing:.03em;}
  .rivet{width:7px;height:7px;border-radius:50%;background:#c9a24b; box-shadow:0 0 8px #c9a24b;}

  .link-row{display:flex; flex-wrap:wrap; justify-content:center; gap:28px; margin-top:.6rem;}
  .link-row a{position:relative; color:#eeece6; text-decoration:none; font-weight:500; font-size:.92rem; padding-bottom:5px;}
  .link-row a::after{content:''; position:absolute; left:0; bottom:0; width:0; height:1px; background:#c9a24b; transition:width .3s;}
  .link-row a:hover::after{width:100%;}

  .directory{border:1px solid rgba(255,255,255,.12); border-radius:14px; background:rgba(18,18,20,.55); backdrop-filter:blur(6px); overflow:hidden;}
  .dir-row{display:flex; gap:20px; padding:22px 24px; border-bottom:1px solid rgba(255,255,255,.08); text-align:left; align-items:flex-start;}
  .dir-row:last-child{border-bottom:none;}
  .dir-row .num{font-family:'IBM Plex Mono',monospace; color:#c9a24b; font-size:.8rem; padding-top:3px; flex:0 0 34px;}
  .dir-row h3{font-family:'Space Grotesk',sans-serif; color:#fff; font-weight:600; font-size:1.05rem; margin-bottom:6px;}
  .dir-row p{color:rgba(238,236,230,.6); font-size:.88rem; line-height:1.55; margin-bottom:8px;}
  .dir-row a{color:#c9a24b; font-size:.82rem; font-weight:600; text-decoration:none;}
  .dir-row a:hover{color:#fff;}

  .feature-grid{display:grid; grid-template-columns:1fr 1fr; gap:16px; text-align:left;}
  @media(max-width:680px){.feature-grid{grid-template-columns:1fr;}}
  .feature-card{border:1px solid rgba(255,255,255,.12); background:rgba(18,18,20,.55); backdrop-filter:blur(6px); border-radius:12px; padding:22px;}
  .feature-card h3{font-family:'Space Grotesk',sans-serif; color:#fff; font-weight:600; font-size:1.05rem; margin-bottom:8px;}
  .feature-card p{color:rgba(238,236,230,.6); font-size:.88rem; line-height:1.55;}
  .plaques{display:flex; flex-wrap:wrap; justify-content:center; gap:9px; margin-top:1.6rem;}
  .plaque{border:1px solid rgba(255,255,255,.15); background:rgba(18,18,20,.6); border-radius:6px; padding:7px 13px; font-size:.78rem; color:#c9c6bd;}

  .gallery{display:flex; justify-content:center; gap:18px; flex-wrap:wrap;}
  .frame{width:210px; background:rgba(18,18,20,.6); backdrop-filter:blur(6px); border:1px solid rgba(255,255,255,.12); border-radius:10px; overflow:hidden; text-align:left; transition:transform .3s;}
  .frame:hover{transform:translateY(-6px);}
  .frame .art{height:4px;} .frame .body{padding:14px;}

  .doors{position:absolute; inset:0; z-index:40; pointer-events:none;}
  .door{position:absolute; top:0; bottom:0; width:51%; background:linear-gradient(180deg,#221f1c,#141210); box-shadow:inset 0 0 70px rgba(0,0,0,.55); transition:transform .95s cubic-bezier(.77,0,.18,1);}
  .door::after{content:''; position:absolute; top:0; bottom:0; width:2px; background:#c9a24b; opacity:.6;}
  .door.left{left:0;} .door.left::after{right:0;} .door.right{right:0;} .door.right::after{left:0;}
  .deck.is-open .door.left{transform:translateX(-102%);} .deck.is-open .door.right{transform:translateX(102%);}
  @media (prefers-reduced-motion: reduce){ .door{transition:none!important;} .content,.content-left,.ghost{transition:none!important; opacity:1!important; transform:none!important;} }

  .scroll-hint{position:absolute; bottom:22px; left:50%; transform:translateX(-50%); z-index:5; color:#7d7a70; font-family:'IBM Plex Mono',monospace; font-size:.65rem; display:flex; flex-direction:column; align-items:center; gap:4px; animation:bob 1.8s infinite;}
  @keyframes bob{0%,100%{transform:translate(-50%,0)}50%{transform:translate(-50%,6px)}}
</style>
</head>
<body class="font-body">
<div class="grain"></div>
<div class="indicator"><div class="arrow up" id="arrowUp"></div><div class="digit" id="floorDigit">04</div><div class="arrow down lit" id="arrowDown"></div></div>

<div class="lift-scroll" id="scroll">

<section id="floor-1" class="deck" data-idx="0" style="background:radial-gradient(ellipse at 50% 20%, #17140d, #0b0b0d 65%);">
  <span class="ghost">04</span>
  <div class="content">
    <div class="brand"><span>Cod<span class="dot">Elevator</span></span></div>
    <span class="eyebrow"><span class="rivet"></span>{{ __('home.lift_floor1_eyebrow') }}</span>
    <h1 class="font-display text-4xl sm:text-5xl md:text-6xl font-semibold text-white leading-[1.08]">{{ __('home.title_part1') }}<br><span class="text-brass">{{ __('home.title_highlight') }}</span></h1>
    <p class="text-white/60 text-lg max-w-xl">{{ __('home.subtitle') }}</p>
    <div class="link-row">
      <a href="{{ route('about') }}">{{ __('app.header_about') }}</a>
      <a href="{{ route('services') }}">{{ __('app.header_services') }}</a>
      <a href="{{ route('services.website-for-company') }}">{{ __('app.header_website_for_company') }}</a>
      <a href="{{ route('portfolio') }}">{{ __('app.header_portfolio') }}</a>
      <a href="{{ route('blog') }}">{{ __('app.header_blog') }}</a>
      <a href="{{ route('contact') }}">{{ __('app.header_contact') }}</a>
    </div>
    <a href="{{ route('contact') }}" class="mt-2 px-7 py-3.5 bg-brass hover:bg-white text-[#0b0b0d] rounded-md font-semibold transition">{{ __('home.cta_primary') }}</a>
  </div>
  <div class="scroll-hint">▾ {{ __('home.lift_scroll_hint') }}</div>
  <div class="doors deck-doors"><div class="door left"></div><div class="door right"></div></div>
</section>

<section id="floor-2" class="deck deck-top" data-idx="1" style="background:#0d0d0f;">
  <span class="ghost">03</span>
  <div class="content-left">
    <div class="text-center mb-8">
      <span class="eyebrow justify-center"><span class="rivet"></span>{{ __('home.lift_floor2_eyebrow') }}</span>
      <h2 class="font-display text-3xl md:text-4xl font-semibold text-white mt-3">{{ __('home.services_title') }} {{ __('home.services_highlight') }}</h2>
      <p class="text-white/50 max-w-xl mx-auto mt-2">{{ __('home.services_subtitle') }}</p>
    </div>
    <div class="directory">
      <div class="dir-row"><span class="num">01</span><div><h3>{{ __('home.service_software_title') }}</h3><p>{{ __('home.service_software_desc') }}</p><a href="{{ route('services') }}">{{ __('home.service_software_cta') }} →</a></div></div>
      <div class="dir-row"><span class="num">02</span><div><h3>{{ __('home.service_ready_title') }}</h3><p>{{ __('home.service_ready_desc') }}</p><a href="{{ route('services') }}">{{ __('home.service_ready_cta') }} →</a></div></div>
      <div class="dir-row"><span class="num">03</span><div><h3>{{ __('home.service_3') }}</h3><p>{{ __('home.service_3_desc') }}</p><a href="{{ route('services') }}">{{ __('home.service_3_cta') }} →</a></div></div>
      <div class="dir-row"><span class="num">04</span><div><h3>{{ __('home.service_design_title') }}</h3><p>{{ __('home.service_design_desc') }}</p><a href="{{ route('services') }}">{{ __('home.service_design_cta') }} →</a></div></div>
      <div class="dir-row"><span class="num">05</span><div><h3>{{ __('home.service_consulting_title') }}</h3><p>{{ __('home.service_consulting_desc') }}</p><a href="{{ route('services') }}">{{ __('home.service_consulting_cta') }} →</a></div></div>
      <div class="dir-row"><span class="num">06</span><div><h3>{{ __('home.service_security_title') }}</h3><p>{{ __('home.service_security_desc') }}</p><a href="{{ route('services') }}">{{ __('home.service_security_cta') }} →</a></div></div>
    </div>
  </div>
  <div class="doors deck-doors"><div class="door left"></div><div class="door right"></div></div>
</section>

<section id="floor-3" class="deck deck-top" data-idx="2" style="background:#0b0b0d;">
  <span class="ghost">02</span>
  <div class="content-left">
    <div class="text-center mb-8">
      <span class="eyebrow justify-center"><span class="rivet"></span>{{ __('home.lift_floor3_eyebrow') }}</span>
      <h2 class="font-display text-3xl md:text-4xl font-semibold text-white mt-3">{{ __('home.why_title') }}</h2>
      <p class="text-white/50 max-w-xl mx-auto mt-2">{{ __('home.why_subtitle') }}</p>
    </div>
    <div class="feature-grid">
      <div class="feature-card"><h3>{{ __('home.why_feat1_title') }}</h3><p>{{ __('home.why_feat1_desc') }}</p></div>
      <div class="feature-card"><h3>{{ __('home.why_feat2_title') }}</h3><p>{{ __('home.why_feat2_desc') }}</p></div>
      <div class="feature-card"><h3>{{ __('home.why_feat3_title') }}</h3><p>{{ __('home.why_feat3_desc') }}</p></div>
      <div class="feature-card"><h3>{{ __('home.why_feat4_title') }}</h3><p>{{ __('home.why_feat4_desc') }}</p></div>
    </div>
    <div class="plaques">
      <span class="plaque">Laravel</span><span class="plaque">Vue.js</span><span class="plaque">PHP</span>
      <span class="plaque">PostgreSQL</span><span class="plaque">Redis</span><span class="plaque">Tailwind CSS</span>
    </div>
  </div>
  <div class="doors deck-doors"><div class="door left"></div><div class="door right"></div></div>
</section>

<section id="floor-4" class="deck" data-idx="3" style="background:#0d0d0f;">
  <span class="ghost">01</span>
  <div class="content">
    <span class="eyebrow"><span class="rivet"></span>{{ __('home.lift_floor4_eyebrow') }}</span>
    <h2 class="font-display text-3xl md:text-4xl font-semibold text-white">{{ __('home.lift_portfolio_title') }}</h2>
    <div class="gallery">
      <div class="frame"><div class="art" style="background:#c9a24b;"></div><div class="body"><p class="text-white font-display font-semibold text-sm mb-1">{{ __('home.lift_pf1_title') }}</p><p class="text-white/50 text-xs">{{ __('home.lift_pf1_desc') }}</p></div></div>
      <div class="frame"><div class="art" style="background:#8891a6;"></div><div class="body"><p class="text-white font-display font-semibold text-sm mb-1">{{ __('home.lift_pf2_title') }}</p><p class="text-white/50 text-xs">{{ __('home.lift_pf2_desc') }}</p></div></div>
      <div class="frame"><div class="art" style="background:#c9a24b;"></div><div class="body"><p class="text-white font-display font-semibold text-sm mb-1">{{ __('home.lift_pf3_title') }}</p><p class="text-white/50 text-xs">{{ __('home.lift_pf3_desc') }}</p></div></div>
    </div>
    <a href="{{ route('portfolio') }}" class="text-brass text-sm font-medium hover:text-white">{{ __('home.lift_portfolio_link') }}</a>
  </div>
  <div class="doors deck-doors"><div class="door left"></div><div class="door right"></div></div>
</section>

<section id="floor-5" class="deck" data-idx="4" style="background:radial-gradient(ellipse at 50% 85%, #17140d, #0b0b0d 65%);">
  <span class="ghost">00</span>
  <div class="content">
    <span class="eyebrow"><span class="rivet"></span>{{ __('home.lift_floor5_eyebrow') }}</span>
    <h2 class="font-display text-3xl md:text-4xl font-semibold text-white max-w-xl">{{ __('services.cta_title') }}</h2>
    <p class="text-white/60 max-w-md">{{ __('services.cta_subtitle') }}</p>
    <div class="flex flex-wrap gap-4 justify-center">
      <a href="{{ route('contact') }}" class="px-7 py-3.5 bg-brass hover:bg-white text-[#0b0b0d] rounded-md font-semibold transition">{{ __('services.cta_button_contact') }}</a>
      <a href="https://t.me/green4kife" target="_blank" rel="noopener" class="px-7 py-3.5 border border-white/25 hover:border-brass text-white rounded-md font-semibold transition">{{ __('services.cta_button_telegram') }}</a>
      <a href="https://wa.me/48883219797" target="_blank" rel="noopener" class="px-7 py-3.5 border border-white/25 hover:border-brass text-white rounded-md font-semibold transition">{{ __('services.cta_button_whatsapp') }}</a>
    </div>
    <div class="flex flex-wrap gap-4 justify-center text-white/40 text-xs">
      <span>{{ __('app.footer_contact_email') }}</span><span>{{ __('app.footer_contact_phone') }}</span><span>{{ __('app.footer_copyright') }}</span>
    </div>
  </div>
  <div class="doors deck-doors"><div class="door left"></div><div class="door right"></div></div>
</section>

</div>

<script>
  const decks=[...document.querySelectorAll('.deck')];
  const digit=document.getElementById('floorDigit'), up=document.getElementById('arrowUp'), down=document.getElementById('arrowDown');
  const labels=['04','03','02','01','00'];
  let last=0;
  const io=new IntersectionObserver((entries)=>{
    entries.forEach(e=>{
      e.target.classList.toggle('is-open', e.intersectionRatio>0.32);
      if(e.intersectionRatio>0.32){
        const idx=+e.target.dataset.idx;
        digit.textContent=labels[idx];
        up.classList.toggle('lit', idx<last); down.classList.toggle('lit', idx>=last);
        last=idx;
      }
    });
  }, {threshold:[0,0.32,1]});
  decks.forEach(d=>io.observe(d));
  requestAnimationFrame(()=> setTimeout(()=> decks[0].classList.add('is-open'), 350));
</script>
</body>
</html>
