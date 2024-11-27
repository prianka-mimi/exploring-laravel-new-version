<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Mediplus</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
            </style>
        @endif

        {{-- custom link part start --}}
        <link rel="icon" href="{{asset('contents/website/images/logo-dark.png')}}">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('contents/website')}}/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/animate.css">

    <link rel="stylesheet" href="{{asset('contents/website')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/magnific-popup.css">

    <link rel="stylesheet" href="{{asset('contents/website')}}/css/aos.css">

    <link rel="stylesheet" href="{{asset('contents/website')}}/css/ionicons.min.css">

    <link rel="stylesheet" href="{{asset('contents/website')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/icomoon.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/style.css">
        {{-- custom link part end --}}
    </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        <div class="py-1 bg-black top">
          <div class="container">
              <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                  <div class="col-lg-12 d-block">
                      <div class="row d-flex">
                          <div class="col-md pr-4 d-flex topper align-items-center">
                              <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                              <span class="text">+ 1235 2355 98</span>
                          </div>
                          <div class="col-md pr-4 d-flex topper align-items-center">
                              <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                              <span class="text">youremail@email.com</span>
                          </div>
                          <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
                              <p class="mb-0 register-link">
                                @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Sign Up</a>
                                    @endif
                                @endauth
                        @endif
                            </p>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
          <div class="container">
            <a class="navbar-brand" href="index.html">Mediplus</a>
            <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
              <ul class="navbar-nav nav ml-auto">
                <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
                <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
                <li class="nav-item"><a href="#department-section" class="nav-link"><span>Department</span></a></li>
                <li class="nav-item"><a href="#doctor-section" class="nav-link"><span>Doctors</span></a></li>
                <li class="nav-item"><a href="#blog-section" class="nav-link"><span>Blog</span></a></li>
                <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
                <li class="nav-item cta mr-md-2"><a href="appointment.html" class="nav-link">Appointment</a></li>
              </ul>
            </div>
          </div>
        </nav>

        <section class="hero-wrap js-fullheight" style="background-image: url('{{asset('contents/website')}}/images/bg_3.jpg');" data-section="home" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-6 pt-5 ftco-animate">
                <div class="mt-5">
                    <span class="subheading">Welcome to Mediplus</span>
                  <h1 class="mb-4">We are here <br>for your Care</h1>
                  <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                  <p><a href="#" class="btn btn-primary py-3 px-4">Make an appointment</a></p>
              </div>
            </div>
          </div>
        </div>
      </section>

          <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
          <div class="container">
              <div class="row d-flex">
                  <div class="col-md-6 col-lg-5 d-flex">
                      <div class="img d-flex align-self-stretch align-items-center" style="background-image:url({{asset('contents/website')}}/images/about.jpg);">
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-7 pl-lg-5 py-md-5">
                      <div class="py-md-5">
                          <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
                          <h2 class="mb-4">We Are <span>Mediplus</span> A Medical Clinic</h2>
                          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                          <p><a href="#" class="btn btn-primary py-3 px-4">Make an appointment</a> <a href="#" class="btn btn-secondary py-3 px-4">Contact us</a></p>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
          </div>
      </section>


          <section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light">
              <div class="container">
          <div class="row d-flex">
              <div class="col-md-7 py-5">
                  <div class="py-lg-5">
                      <div class="row justify-content-center pb-5">
                        <div class="col-md-12 heading-section ftco-animate">
                          <h2 class="mb-3">Our Services</h2>
                        </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                          <div class="media block-6 services d-flex">
                            <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-ambulance"></span></div>
                            <div class="media-body pl-md-4">
                              <h3 class="heading mb-3">Emergency Services</h3>
                              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                          <div class="media block-6 services d-flex">
                            <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-doctor"></span></div>
                            <div class="media-body pl-md-4">
                              <h3 class="heading mb-3">Qualified Doctors</h3>
                              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                          <div class="media block-6 services d-flex">
                            <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-stethoscope"></span></div>
                            <div class="media-body pl-md-4">
                              <h3 class="heading mb-3">Outdoors Checkup</h3>
                              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                          <div class="media block-6 services d-flex">
                            <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-24-hours"></span></div>
                            <div class="media-body pl-md-4">
                              <h3 class="heading mb-3">24 Hours Service</h3>
                              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-5 d-flex">
                  <div class="appointment-wrap bg-white p-4 p-md-5 d-flex align-items-center">
                      <form action="#" class="appointment-form ftco-animate">
                          <h3>Free Consultation</h3>
                              <div class="">
                                  <div class="form-group">
                                      <input type="text" class="form-control" placeholder="First Name">
                                  </div>
                                  <div class="form-group">
                                      <input type="text" class="form-control" placeholder="Last Name">
                                  </div>
                              </div>
                              <div class="">
                                  <div class="form-group">
                                      <div class="form-field">
                                    <div class="select-wrap">
                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                            <select name="" id="" class="form-control">
                                <option value="">Select Your Services</option>
                              <option value="">Neurology</option>
                              <option value="">Cardiology</option>
                              <option value="">Dental</option>
                              <option value="">Ophthalmology</option>
                              <option value="">Other Services</option>
                            </select>
                          </div>
                            </div>
                                  </div>
                                  <div class="form-group">
                                      <input type="text" class="form-control" placeholder="Phone">
                                  </div>
                              </div>
                              <div class="">
                                  <div class="form-group">
                                      <div class="input-wrap">
                                  <div class="icon"><span class="ion-md-calendar"></span></div>
                                  <input type="text" class="form-control appointment_date" placeholder="Date">
                              </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="input-wrap">
                                  <div class="icon"><span class="ion-ios-clock"></span></div>
                                  <input type="text" class="form-control appointment_time" placeholder="Time">
                              </div>
                                  </div>
                              </div>
                              <div class="">
                                  <div class="form-group">
                            <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                          </div>
                          <div class="form-group">
                            <input type="submit" value="Appointment" class="btn btn-secondary py-3 px-4">
                          </div>
                              </div>
                          </form>
                      </div>
              </div>
              </div>
              </div>
          </section>

      <section class="ftco-intro img" style="background-image: url({{asset('contents/website')}}/images/bg_2.jpg);">
              <div class="overlay"></div>
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-md-9 text-center">
                          <h2>Your Health is Our Priority</h2>
                          <p>We can manage your dream building A small river named Duden flows by their place</p>
                          <p class="mb-0"><a href="#" class="btn btn-white px-4 py-3">Search Places</a></p>
                      </div>
                  </div>
              </div>
          </section>

          <section class="ftco-section ftco-no-pt ftco-no-pb" id="department-section">
          <div class="container-fluid px-0">
              <div class="row no-gutters">
                  <div class="col-md-4 d-flex">
                      <div class="img img-dept align-self-stretch" style="background-image: url({{asset('contents/website')}}/images/dept-1.jpg);"></div>
                  </div>

                  <div class="col-md-8">
                      <div class="row no-gutters">
                          <div class="col-md-4">
                              <div class="department-wrap p-4 ftco-animate">
                                  <div class="text p-2 text-center">
                                      <div class="icon">
                                          <span class="flaticon-stethoscope"></span>
                                      </div>
                                      <h3><a href="#">Neurology</a></h3>
                                      <p>Far far away, behind the word mountains</p>
                                  </div>
                              </div>
                              <div class="department-wrap p-4 ftco-animate">
                                  <div class="text p-2 text-center">
                                      <div class="icon">
                                          <span class="flaticon-stethoscope"></span>
                                      </div>
                                      <h3><a href="#">Surgical</a></h3>
                                      <p>Far far away, behind the word mountains</p>
                                  </div>
                              </div>
                              <div class="department-wrap p-4 ftco-animate">
                                  <div class="text p-2 text-center">
                                      <div class="icon">
                                          <span class="flaticon-stethoscope"></span>
                                      </div>
                                      <h3><a href="#">Dental</a></h3>
                                      <p>Far far away, behind the word mountains</p>
                                  </div>
                              </div>
                          </div>

                          <div class="col-md-4">
                              <div class="department-wrap p-4 ftco-animate">
                                  <div class="text p-2 text-center">
                                      <div class="icon">
                                          <span class="flaticon-stethoscope"></span>
                                      </div>
                                      <h3><a href="#">Opthalmology</a></h3>
                                      <p>Far far away, behind the word mountains</p>
                                  </div>
                              </div>
                              <div class="department-wrap p-4 ftco-animate">
                                  <div class="text p-2 text-center">
                                      <div class="icon">
                                          <span class="flaticon-stethoscope"></span>
                                      </div>
                                      <h3><a href="#">Cardiology</a></h3>
                                      <p>Far far away, behind the word mountains</p>
                                  </div>
                              </div>
                              <div class="department-wrap p-4 ftco-animate">
                                  <div class="text p-2 text-center">
                                      <div class="icon">
                                          <span class="flaticon-stethoscope"></span>
                                      </div>
                                      <h3><a href="#">Traumatology</a></h3>
                                      <p>Far far away, behind the word mountains</p>
                                  </div>
                              </div>
                          </div>

                          <div class="col-md-4">
                              <div class="department-wrap p-4 ftco-animate">
                                  <div class="text p-2 text-center">
                                      <div class="icon">
                                          <span class="flaticon-stethoscope"></span>
                                      </div>
                                      <h3><a href="#">Nuclear Magnetic</a></h3>
                                      <p>Far far away, behind the word mountains</p>
                                  </div>
                              </div>
                              <div class="department-wrap p-4 ftco-animate">
                                  <div class="text p-2 text-center">
                                      <div class="icon">
                                          <span class="flaticon-stethoscope"></span>
                                      </div>
                                      <h3><a href="#">X-ray</a></h3>
                                      <p>Far far away, behind the word mountains</p>
                                  </div>
                              </div>
                              <div class="department-wrap p-4 ftco-animate">
                                  <div class="text p-2 text-center">
                                      <div class="icon">
                                          <span class="flaticon-stethoscope"></span>
                                      </div>
                                      <h3><a href="#">Cardiology</a></h3>
                                      <p>Far far away, behind the word mountains</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

          <section class="ftco-section" id="doctor-section">
              <div class="container-fluid px-5">
                  <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
              <h2 class="mb-4">Our Qualified Doctors</h2>
              <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
          </div>
                  <div class="row">
                      <div class="col-md-6 col-lg-3 ftco-animate">
                          <div class="staff">
                              <div class="img-wrap d-flex align-items-stretch">
                                  <div class="img align-self-stretch" style="background-image: url({{asset('contents/website')}}/images/doc-1.jpg);"></div>
                              </div>
                              <div class="text pt-3 text-center">
                                  <h3 class="mb-2">Dr. Lloyd Wilson</h3>
                                  <span class="position mb-2">Neurologist</span>
                                  <div class="faded">
                                      <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                      <ul class="ftco-social text-center">
                          <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                          <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                          <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                          <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                        <p><a href="#" class="btn btn-primary">Book now</a></p>
                    </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-3 ftco-animate">
                          <div class="staff">
                              <div class="img-wrap d-flex align-items-stretch">
                                  <div class="img align-self-stretch" style="background-image: url({{asset('contents/website')}}/images/doc-2.jpg);"></div>
                              </div>
                              <div class="text pt-3 text-center">
                                  <h3 class="mb-2">Dr. Rachel Parker</h3>
                                  <span class="position mb-2">Ophthalmologist</span>
                                  <div class="faded">
                                      <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                      <ul class="ftco-social text-center">
                          <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                          <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                          <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                          <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                        <p><a href="#" class="btn btn-primary">Book now</a></p>
                    </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-3 ftco-animate">
                          <div class="staff">
                              <div class="img-wrap d-flex align-items-stretch">
                                  <div class="img align-self-stretch" style="background-image: url({{asset('contents/website')}}/images/doc-3.jpg);"></div>
                              </div>
                              <div class="text pt-3 text-center">
                                  <h3 class="mb-2">Dr. Ian Smith</h3>
                                  <span class="position mb-2">Dentist</span>
                                  <div class="faded">
                                      <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                      <ul class="ftco-social text-center">
                          <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                          <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                          <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                          <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                        <p><a href="#" class="btn btn-primary">Book now</a></p>
                    </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-3 ftco-animate">
                          <div class="staff">
                              <div class="img-wrap d-flex align-items-stretch">
                                  <div class="img align-self-stretch" style="background-image: url({{asset('contents/website')}}/images/doc-4.jpg);"></div>
                              </div>
                              <div class="text pt-3 text-center">
                                  <h3 class="mb-2">Dr. Alicia Henderson</h3>
                                  <span class="position mb-2">Pediatrician</span>
                                  <div class="faded">
                                      <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                      <ul class="ftco-social text-center">
                          <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                          <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                          <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                          <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                        <p><a href="#" class="btn btn-primary">Book now</a></p>
                    </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>

          <section class="ftco-facts img ftco-counter" style="background-image: url({{asset('contents/website')}}/images/bg_3.jpg);">
              <div class="overlay"></div>
              <div class="container">
                  <div class="row d-flex align-items-center">
                      <div class="col-md-5 heading-section heading-section-white">
                          <span class="subheading">Fun facts</span>
                          <h2 class="mb-4">Over 5,100 patients trust us</h2>
                          <p class="mb-0"><a href="#" class="btn btn-secondary px-4 py-3">Make an appointment</a></p>
                      </div>
                      <div class="col-md-7">
                          <div class="row pt-4">
                    <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                      <div class="block-18">
                        <div class="text">
                          <strong class="number" data-number="30">0</strong>
                          <span>Years of Experienced</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                      <div class="block-18">
                        <div class="text">
                          <strong class="number" data-number="4500">0</strong>
                          <span>Happy Patients</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                      <div class="block-18">
                        <div class="text">
                          <strong class="number" data-number="84">0</strong>
                          <span>Number of Doctors</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                      <div class="block-18">
                        <div class="text">
                          <strong class="number" data-number="300">0</strong>
                          <span>Number of Staffs</span>
                        </div>
                      </div>
                    </div>
                </div>
                      </div>
                  </div>
              </div>
          </section>


      <section class="ftco-section bg-light" id="blog-section">
        <div class="container">
          <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-10 heading-section text-center ftco-animate">
              <h2 class="mb-4">Gets Every Single Updates Here</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
          </div>
          <div class="row d-flex">
            <div class="col-md-4 ftco-animate">
              <div class="blog-entry">
                <a href="blog-single.html" class="block-20" style="background-image: url('{{asset('contents/website')}}/images/image_1.jpg');">
                </a>
                <div class="text d-block">
                    <div class="meta mb-3">
                    <div><a href="#">June 9, 2019</a></div>
                    <div><a href="#">Admin</a></div>
                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                  </div>
                  <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
                </div>
              </div>
              </div>

              <div class="col-md-4 ftco-animate">
              <div class="blog-entry">
                <a href="blog-single.html" class="block-20" style="background-image: url('{{asset('contents/website')}}/images/image_2.jpg');">
                </a>
                <div class="text d-block">
                    <div class="meta mb-3">
                    <div><a href="#">June 9, 2019</a></div>
                    <div><a href="#">Admin</a></div>
                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                  </div>
                  <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
                </div>
              </div>
              </div>

              <div class="col-md-4 ftco-animate">
              <div class="blog-entry">
                <a href="blog-single.html" class="block-20" style="background-image: url('{{asset('contents/website')}}/images/image_3.jpg');">
                </a>
                <div class="text d-block">
                    <div class="meta mb-3">
                    <div><a href="#">June 9, 2019</a></div>
                    <div><a href="#">Admin</a></div>
                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                  </div>
                  <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
                </div>
              </div>
              </div>

              <div class="col-md-4 ftco-animate">
              <div class="blog-entry">
                <a href="blog-single.html" class="block-20" style="background-image: url('{{asset('contents/website')}}/images/image_4.jpg');">
                </a>
                <div class="text d-block">
                    <div class="meta mb-3">
                    <div><a href="#">June 9, 2019</a></div>
                    <div><a href="#">Admin</a></div>
                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                  </div>
                  <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
                </div>
              </div>
              </div>

              <div class="col-md-4 ftco-animate">
              <div class="blog-entry">
                <a href="blog-single.html" class="block-20" style="background-image: url('{{asset('contents/website')}}/images/image_5.jpg');">
                </a>
                <div class="text d-block">
                    <div class="meta mb-3">
                    <div><a href="#">June 9, 2019</a></div>
                    <div><a href="#">Admin</a></div>
                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                  </div>
                  <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
                </div>
              </div>
              </div>

              <div class="col-md-4 ftco-animate">
              <div class="blog-entry">
                <a href="blog-single.html" class="block-20" style="background-image: url('{{asset('contents/website')}}/images/image_6.jpg');">
                </a>
                <div class="text d-block">
                    <div class="meta mb-3">
                    <div><a href="#">June 9, 2019</a></div>
                    <div><a href="#">Admin</a></div>
                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                  </div>
                  <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
                </div>
              </div>
              </div>
          </div>
        </div>
      </section>

      <section class="ftco-section testimony-section img" style="background-image: url({{asset('contents/website')}}/images/bg_3.jpg);">
          <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center pb-3">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <span class="subheading">Read testimonials</span>
              <h2 class="mb-4">Our Patient Says</h2>
            </div>
          </div>
          <div class="row ftco-animate justify-content-center">
            <div class="col-md-12">
              <div class="carousel-testimony owl-carousel ftco-owl">
                <div class="item">
                  <div class="testimony-wrap text-center py-4 pb-5">
                    <div class="user-img" style="background-image: url({{asset('contents/website')}}/images/person_1.jpg)">
                      <span class="quote d-flex align-items-center justify-content-center">
                        <i class="icon-quote-left"></i>
                      </span>
                    </div>
                    <div class="text px-4">
                      <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      <p class="name">Jeff Freshman</p>
                      <span class="position">Patients</span>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimony-wrap text-center py-4 pb-5">
                    <div class="user-img" style="background-image: url({{asset('contents/website')}}/images/person_2.jpg)">
                      <span class="quote d-flex align-items-center justify-content-center">
                        <i class="icon-quote-left"></i>
                      </span>
                    </div>
                    <div class="text px-4">
                      <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      <p class="name">Jeff Freshman</p>
                      <span class="position">Patients</span>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimony-wrap text-center py-4 pb-5">
                    <div class="user-img" style="background-image: url({{asset('contents/website')}}/images/person_3.jpg)">
                      <span class="quote d-flex align-items-center justify-content-center">
                        <i class="icon-quote-left"></i>
                      </span>
                    </div>
                    <div class="text px-4">
                      <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      <p class="name">Jeff Freshman</p>
                      <span class="position">Patients</span>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimony-wrap text-center py-4 pb-5">
                    <div class="user-img" style="background-image: url({{asset('contents/website')}}/images/person_1.jpg)">
                      <span class="quote d-flex align-items-center justify-content-center">
                        <i class="icon-quote-left"></i>
                      </span>
                    </div>
                    <div class="text px-4">
                      <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      <p class="name">Jeff Freshman</p>
                      <span class="position">Patients</span>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimony-wrap text-center py-4 pb-5">
                    <div class="user-img" style="background-image: url({{asset('contents/website')}}/images/person_3.jpg)">
                      <span class="quote d-flex align-items-center justify-content-center">
                        <i class="icon-quote-left"></i>
                      </span>
                    </div>
                    <div class="text px-4">
                      <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                      <p class="name">Jeff Freshman</p>
                      <span class="position">Patients</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="ftco-section contact-section" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
              <h2 class="mb-4">Contact Us</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
          </div>
          <div class="row d-flex contact-info mb-5">
            <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                <div class="align-self-stretch box p-4 text-center bg-light">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-map-signs"></span>
                    </div>
                    <h3 class="mb-4">Address</h3>
                  <p>198 West 21th Street, Suite 721 New York NY 10016</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                <div class="align-self-stretch box p-4 text-center bg-light">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-phone2"></span>
                    </div>
                    <h3 class="mb-4">Contact Number</h3>
                  <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                <div class="align-self-stretch box p-4 text-center bg-light">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-paper-plane"></span>
                    </div>
                    <h3 class="mb-4">Email Address</h3>
                  <p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                <div class="align-self-stretch box p-4 text-center bg-light">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="icon-globe"></span>
                    </div>
                    <h3 class="mb-4">Website</h3>
                  <p><a href="#">yoursite.com</a></p>
                </div>
            </div>
          </div>
          <div class="row no-gutters block-9">
            <div class="col-md-6 order-md-last d-flex">
              <form action="#" class="bg-light p-5 contact-form">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Email">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Subject">
                </div>
                <div class="form-group">
                  <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Send Message" class="btn btn-secondary py-3 px-5">
                </div>
              </form>

            </div>

            <div class="col-md-6 d-flex">
                <div id="map" class="bg-white"></div>
            </div>
          </div>
        </div>
      </section>

      <footer class="ftco-footer ftco-section img" style="background-image: url({{asset('contents/website')}}/images/footer-bg.jpg);">
          <div class="overlay"></div>
        <div class="container-fluid px-md-5">
          <div class="row mb-5">
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Mediplus</h2>
                <p>Far far away, behind the word mountains, far from the countries.</p>
                <ul class="ftco-footer-social list-unstyled mt-5">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4 ml-md-4">
                <h2 class="ftco-heading-2">Departments</h2>
                <ul class="list-unstyled">
                  <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Neurology</a></li>
                  <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Opthalmology</a></li>
                  <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Nuclear Magnetic</a></li>
                  <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Surgical</a></li>
                  <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Cardiology</a></li>
                  <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Dental</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4 ml-md-4">
                <h2 class="ftco-heading-2">Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                  <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                  <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Departments</a></li>
                  <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Doctors</a></li>
                  <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Blog</a></li>
                  <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Pricing</a></li>
                  <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
               <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Services</h2>
                <ul class="list-unstyled">
                  <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Emergency Services</a></li>
                  <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Qualified Doctors</a></li>
                  <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Outdoors Checkup</a></li>
                  <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>24 Hours Services</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">Have a Questions?</h2>
                  <div class="block-23 mb-3">
                    <ul>
                      <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                      <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                      <li><a href="#"><span class="icon icon-envelope pr-4"></span><span class="text">info@yourdomain.com</span></a></li>
                    </ul>
                  </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">

              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
          </div>
        </div>
      </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="{{asset('contents/website')}}/js/jquery.min.js"></script>
    <script src="{{asset('contents/website')}}/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="{{asset('contents/website')}}/js/popper.min.js"></script>
    <script src="{{asset('contents/website')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('contents/website')}}/js/jquery.easing.1.3.js"></script>
    <script src="{{asset('contents/website')}}/js/jquery.waypoints.min.js"></script>
    <script src="{{asset('contents/website')}}/js/jquery.stellar.min.js"></script>
    <script src="{{asset('contents/website')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('contents/website')}}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('contents/website')}}/js/aos.js"></script>
    <script src="{{asset('contents/website')}}/js/jquery.animateNumber.min.js"></script>
    <script src="{{asset('contents/website')}}/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{asset('contents/website')}}/js/google-map.js"></script>

    <script src="{{asset('contents/website')}}/js/main.js"></script>

    </body>
</html>
