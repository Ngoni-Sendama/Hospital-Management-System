<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Crafto - The Multipurpose HTML5 Template</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="description" content="Elevate your online presence with Crafto - a modern, versatile, multipurpose Bootstrap 5 responsive HTML5, SCSS template using highly creative 48+ ready demos.">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        <!-- google fonts preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" href="{{asset('front/css/vendors.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('front/css/icon.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('front/css/style.css')}}"/>
        <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}"/>
        <link rel="stylesheet" href="{{asset('front/demos/hosting/hosting.css')}}" />
    </head>
    <body data-mobile-nav-style="full-screen-menu" data-mobile-nav-bg-color="">
        <!-- start header -->
        <header class="header-with-topbar">
            <div class="header-top-bar top-bar-dark cover-background" style="background-image: url('images/demo-hosting-header-bg.jpg')">
                <div class="container-fluid">
                    <div class="row h-42px align-items-center m-0">
                        <div class="col-md-7 text-center text-md-start">
                            <div class="fs-13 text-white"><span class="opacity-6 me-5px">Get a hosting plans, as low as starting at only</span><span class="fw-600">₹200/mo*</span></div>
                        </div>
                        <div class="col-5 text-end d-none d-md-flex">
                            <a href="javascript:;" class="widget fs-13 me-20px text-white opacity-8 d-none d-lg-inline-block"><i class="feather icon-feather-phone"></i>Customer service</a>
                            <a href="mailto:support@domain.com" class="widget fs-13 text-white text-white-hover opacity-8"><i class="feather icon-feather-mail text-white position-relative top-1px"></i>support@domain.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg header-transparent bg-transparent header-reverse" data-header-hover="light">
                <div class="container-fluid">
                    <div class="col-auto col-lg-2 me-lg-0 me-auto">
                        <a class="navbar-brand" href="/">
                            {{-- <img src="images/demo-hosting-logo-white.png" data-at2x="images/demo-hosting-logo-white@2x.png" alt="" class="default-logo">
                            <img src="images/demo-hosting-logo-black.png" data-at2x="images/demo-hosting-logo-black@2x.png" alt="" class="alt-logo">
                            <img src="images/demo-hosting-logo-black.png" data-at2x="images/demo-hosting-logo-black@2x.png" alt="" class="mobile-logo"> --}}
                            <h6 style="color: white;">HResource</h6>
                        </a>
                    </div>
                    <div class="col-auto menu-order position-static">
                        <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                                <li class="nav-item"><a href="javascript:;" class="nav-link">Billing</a></li>
                                <li class="nav-item"><a href="javascript:;" class="nav-link">Solutions</a></li>
                                <li class="nav-item"><a href="javascript:;" class="nav-link">Pricing</a></li>
                                <li class="nav-item"><a href="javascript:;" class="nav-link">Support</a></li>
                                <li class="nav-item"><a href="javascript:;" class="nav-link">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto col-lg-2 text-end lg-pe-5px">
                        <div class="header-icon">
                            <div class="header-search-icon icon d-none d-sm-flex">
                                <a href="#" class="search-form-icon header-search-form">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search align-middle feather icon-feather-search fs-18 me-5px xl-me-0" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                      </svg>
                                     <span class="align-middle d-none d-xxl-inline-block"> Search</span></a>
                                <div class="search-form-wrapper">
                                    <button title="Close" type="button" class="search-close">×</button>
                                    <form id="search-form" role="search" method="get" class="search-form text-left" action="search-result.html">
                                        <div class="search-form-box">
                                            <h2 class="text-dark-gray fw-700 ls-minus-2px text-center mb-4 alt-font">What are you looking for?</h2>
                                            <input class="search-input" id="search-form-input5e219ef164995" placeholder="Enter your keywords..." name="s" value="" type="text" autocomplete="off">
                                            <button type="submit" class="search-button">
                                                <i class="feather icon-feather-search" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="header-button ms-30px xxl-ms-10px xs-ms-0">
                                <a href="{{route('filament.dashboard.auth.login')}}" class="btn btn-white btn-small btn-rounded btn-box-shadow btn-switch-text fw-600">
                                    <span>
                                        <span class="btn-double-text" data-text="Sign up">Sign In</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end navigation -->
        </header>
        <!-- end header -->
        <!-- start banner -->
        <section class="cover-background full-screen bg-dark-gray ipad-top-space-margin position-relative section-dark md-h-auto" style="background-image: url('images/demo-hosting-home-bg.jpg')">
            <div id="particles-style-01" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true" data-particle-options='{"particles": {"number": {"value": 12,"density": {"enable": true,"value_area": 2000}},"color": {"value": ["#ed00a8", "#ed00a8", "#ed00a8", "#ed00a8"]},"shape": {"type": "edge","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 0.8,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 5,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":0.4,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'></div>
            <div class="container h-100">
                <div class="row align-items-center justify-content-center h-100">
                    <div class="col-xl-7 col-lg-8 col-md-10 text-white position-relative text-center text-lg-start">
                        <div class="fs-90 sm-fs-80 xs-fs-70 fw-600 mb-20px ls-minus-4px overflow-hidden">
                            <div class="d-inline-block" data-anime='{ "translateY": [100, 0], "easing": "easeOutCubic", "duration": 900 }'>
                                Hospital
                                Management

                                <div class="highlight-separator" data-shadow-animation="true" data-animation-delay="1500">
                                    Software<span><img src="images/highlight-separator.svg" alt=""></span>
                                </div>
                            </div>
                        </div>
                        <div class="fs-19 fw-300 mb-30px w-80 sm-w-100 opacity-6 d-block mx-auto mx-lg-0 overflow-hidden">
                            <span class="d-inline-block lh-32" data-anime='{ "translateY": [100, 0], "easing": "easeOutCubic", "duration": 900, "delay": 300 }'>Everything you need to run a hospital
                                .</span>
                        </div>
                        <div class="overflow-hidden pt-5px">
                            <a href="javascript:;" class="btn btn-extra-large btn-yellow btn-rounded btn-box-shadow btn-switch-text d-inline-block me-15px xs-m-10px align-middle fw-600" data-anime='{ "translateY": [100, 0], "easing": "easeOutCubic", "duration": 900, "delay": 500 }'>
                                <span>
                                    <span class="btn-double-text" data-text="Get started">Get started</span>
                                    <span><i class="feather icon-feather-arrow-right"></i></span>
                                </span>
                            </a>
                            <div class="text-white fs-15 d-inline-block last-paragraph-no-margin align-middle" data-anime='{ "translateY": [100, 0], "easing": "easeOutCubic", "duration": 900, "delay": 700 }'>
                                <p class="opacity-6 ls-minus-05px d-inline-block">Starting at only</p>
                                <span class="fw-500 d-inline-block ">₹200/mo*</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4">
                        <div class="outside-box-right-7 position-relative" data-anime='{ "opacity": [0, 1], "translateY": [100, 0], "easing": "easeOutQuad", "duration": 1200, "delay": 200 }'>
                            <img class="w-100" src="{{asset('images/HeroImage.png')}}" alt="">
                            <img class="w-100 position-absolute left-minus-2px top-minus-5px animation-float" src="{{asset('images/HeroImage.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end banner -->
        <!-- start section -->
        <section class="bg-very-light-gray pt-20px pb-20px sm-pt-40px" data-anime='{ "opacity": [0, 1], "translateY": [0, 0], "easing": "easeOutQuad", "duration": 1000,"staggervalue": 300, "delay": 600 }'>
            <div class="container overlap-section">
                <div class="row justify-content-center overlap-section border-radius-6px overflow-hidden g-0 box-shadow-extra-large">
                    <div class="col-lg-9 text-center fw-600 fs-24 lg-fs-22 ls-minus-05px text-dark-gray bg-white p-30px md-p-20px">Empower your Hospital efficiency with Hospital Management Software</div>
                    <div class="col-lg-3 text-center bg-yellow pt-30px pb-30px md-p-20px"><a href="javascript:;" class="fw-700 text-dark-gray text-dark-gray-hover fs-24 lg-fs-20 ls-minus-05px">Just ₹200 month<i class="feather icon-feather-arrow-right ms-5px"></i></a></div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="cover-background pt-5 xs-pt-8" style="background-image: url('https://craftohtml.themezaa.com/images/demo-hosting-home-02.png')">
            <div class="container">
                <div class="row justify-content-center mb-3">
                    <div class="col-lg-8 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 900, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <span class="text-base-color fw-600 mb-5px text-uppercase d-block">Why</span>
                        <h2 class="text-dark-gray fw-700 ls-minus-2px">Hresources</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center" data-anime='{ "el": "childs",  "translateY": [0, 0], "perspective": [1200, 1200], "scale": [1.05, 1], "rotateX": [50, 0], "opacity": [0,1], "duration":600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                        <div class="bg-white feature-box h-100 justify-content-start box-shadow-quadruple-large box-shadow-quadruple-large-hover text-start p-17 sm-p-14 border-radius-6px">
                            <div class="feature-box-icon mb-30px">
                                <img src="https://craftohtml.themezaa.com/images/demo-hosting-home-icon-02.svg" class="h-50px" alt="">
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block fw-600 text-dark-gray fs-18 ls-minus-05px">Complete Healthcare Solution</span>

                                <a href="javascript:;" class="btn btn-link btn-hover-animation-switch btn-extra-large text-base-color text-uppercase-inherit">
                                    <span>
                                        <span class="btn-text">Learn more</span>
                                        <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                        <div class="bg-white feature-box h-100 justify-content-start box-shadow-quadruple-large box-shadow-quadruple-large-hover text-start p-17 sm-p-14 border-radius-6px">
                            <div class="feature-box-icon mb-30px">
                                <img src="" class="h-50px" alt="">
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block fw-600 text-dark-gray fs-18 ls-minus-05px">Affordable</span>

                                <a href="javascript:;" class="btn btn-link btn-hover-animation-switch btn-extra-large text-base-color text-uppercase-inherit">
                                    <span>
                                        <span class="btn-text">Learn more</span>
                                        <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-07 transition-inner-all xs-mb-30px">
                        <div class="bg-white feature-box h-100 justify-content-start box-shadow-quadruple-large box-shadow-quadruple-large-hover text-start p-17 sm-p-14 border-radius-6px">
                            <div class="feature-box-icon mb-30px">
                                <img src="{{asset('images/health-equipment.jpg')}}" class="h-50px" alt="">
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block fw-600 text-dark-gray fs-18 ls-minus-05px">Equipment Management</span>

                                <a href="javascript:;" class="btn btn-link btn-hover-animation-switch btn-extra-large text-base-color text-uppercase-inherit">
                                    <span>
                                        <span class="btn-text">Learn more</span>
                                        <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-07 transition-inner-all">
                        <div class="bg-white feature-box h-100 justify-content-start box-shadow-quadruple-large box-shadow-quadruple-large-hover text-start p-17 sm-p-14 border-radius-6px">
                            <div class="feature-box-icon mb-30px">
                                <img src="images/demo-hosting-home-icon-05.svg" class="h-50px" alt="">
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block fw-600 text-dark-gray fs-18 ls-minus-05px">Resource Usage Analytics</span>

                                <a href="javascript:;" class="btn btn-link btn-hover-animation-switch btn-extra-large text-base-color text-uppercase-inherit">
                                    <span>
                                        <span class="btn-text">Learn more</span>
                                        <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="overflow-hidden">
            <div class="container">
                <div class="row align-items-center justify-content-center mb-6 sm-mb-50px position-relative">
                    <div class="col-lg-6 col-md-10 position-relative md-mb-30px" data-anime='{ "effect": "slide", "color": "#ffffff", "direction":"lr", "easing": "easeOutQuad", "delay":50}'>
                        <img class="w-100" src="{{asset('images/630x621.jpg')}}" data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)" alt="">
                    </div>
                    <div class="col-lg-5 offset-lg-1 last-paragraph-no-margin" data-anime='{ "el": "childs", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 900, "delay": 300, "easing": "easeOutCirc" }'>
                        <span class="text-base-color fw-600 mb-15px text-uppercase d-block">Simple and intuitive</span>
                        <h2 class="fw-600 text-dark-gray w-90 lg-w-100 text-dark-gray fw-700 ls-minus-2px">Real-time Bed Allocation and Monitoring</h2>
                        <p class="w-90 sm-w-100">Well-designed hospital management software system software has features for the seamless functioning of the hospital operations department.</p>
                        <ul class="p-0 mb-25px mt-15px list-style-01 w-90 lg-w-100">
                            <li class="border-color-extra-medium-gray fw-600 text-dark-gray d-flex align-items-center pt-15px pb-15px">
                                <div class="feature-box-icon feature-box-icon-rounded w-35px h-35px rounded-circle bg-solitude-blue me-10px text-center d-flex align-items-center justify-content-center flex-shrink-0"><i class="fa-solid fa-check fs-13 text-base-color"></i></div>
                                Track availability and occupancy of beds across wards.
                            </li>
                            <li class="border-color-extra-medium-gray fw-600 text-dark-gray d-flex align-items-center pt-15px pb-15px">
                                <div class="feature-box-icon feature-box-icon-rounded w-35px h-35px rounded-circle bg-solitude-blue me-10px text-center d-flex align-items-center justify-content-center flex-shrink-0"><i class="fa-solid fa-check fs-13 text-base-color"></i></div>
                                Automatically assign beds to patients based on real-time availability and patient priority (e.g., ICU beds for critical patients).
                            </li>
                        </ul>
                        <a href="javascript:;" class="btn btn-large btn-dark-gray btn-box-shadow btn-rounded btn-switch-text">
                            <span>
                                <span class="btn-double-text" data-text="Lowest pricing">Get started</span>
                                <span><i class="feather icon-feather-arrow-right"></i></span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center border border-color-extra-medium-gray border-radius-100px md-border-radius-6px p-50px lg-p-20px m-0 box-shadow-quadruple-large" data-bottom-top="transform:scale(1.1, 1.1) translateY(30px);" data-top-bottom="transform:scale(1, 1) translateY(-30px);">
                    <!-- start process step item -->
                    <div class="col-lg-4 col-md-6 process-step-style-07 position-relative md-mb-30px">
                        <div class="process-step-item d-flex align-items-center">
                            <div class="process-step-icon-wrap position-relative">
                                <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px bg-base-color fs-17 fw-500">
                                    <span class="number position-relative z-index-1 text-white">01</span>
                                </div>
                            </div>
                            <div class="process-content ps-20px last-paragraph-no-margin">
                                <span class="d-block fw-600 text-dark-gray fs-17 ls-minus-05px alt-font">Choose a your plan</span>
                                <p>Lorem ipsum simply printing</p>
                            </div>
                        </div>
                    </div>
                    <!-- end process step item -->
                    <!-- start process step item -->
                    <div class="col-lg-4 col-md-6 process-step-style-07 position-relative md-mb-30px">
                        <div class="process-step-item d-flex align-items-center">
                            <div class="process-step-icon-wrap position-relative">
                                <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px bg-base-color fs-17 fw-500">
                                    <span class="number position-relative z-index-1 text-white">02</span>
                                </div>
                            </div>
                            <div class="process-content ps-20px last-paragraph-no-margin">
                                <span class="d-block fw-600 text-dark-gray fs-17 ls-minus-05px alt-font">Enter Hopsital Details</span>
                                <p>Lorem ipsum simply printing</p>
                            </div>
                        </div>
                    </div>
                    <!-- end process step item -->
                    <!-- start process step item -->
                    <div class="col-lg-4 col-md-6 process-step-style-07 position-relative">
                        <div class="process-step-item d-flex align-items-center">
                            <div class="process-step-icon-wrap position-relative">
                                <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px bg-base-color fs-17 fw-500">
                                    <span class="number position-relative z-index-1 text-white">03</span>
                                </div>
                            </div>
                            <div class="process-content ps-20px last-paragraph-no-margin">
                                <span class="d-block fw-600 text-dark-gray fs-17 ls-minus-05px alt-font">start managing</span>
                                <p>Lorem ipsum simply printing</p>
                            </div>
                        </div>
                    </div>
                    <!-- end process step item -->
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="cover-background section-dark bg-midnight-dark-blue" style="background-image: url('images/demo-hosting-home-02.png')" data-0-top="background-color:rgb(25,30,61);" data-center-bottom="background-color:rgb(14,16,29);">
            <div class="container">
                <div class="row justify-content-center mb-3">
                    <div class="col-lg-8 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 900, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <span class="text-white opacity-5 mb-5px text-uppercase d-block">What we offers</span>
                        <h2 class="text-white fw-700 ls-minus-1px">Affordable services</h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 justify-content-center ps-8 pe-8 lg-px-0" data-anime='{ "el": "childs", "translateY": [30, 0], "scale":[0.8,1], "opacity": [0,1], "duration": 500, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all mb-30px">
                        <div class="feature-box hover-box h-100 transition light-hover border-radius-6px p-18 xs-p-12 last-paragraph-no-margin overflow-hidden border border-1 box-shadow-quadruple-large-hover border-color-transparent-white-light border-color-transparent-on-hover">
                            <div class="feature-box-icon">
                                <i class="line-icon-URL-Window icon-extra-large text-white mb-15px"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block text-white fw-500 lh-24">Medical Staff Management</span>
                            </div>
                            <div class="feature-box-overlay bg-white"></div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all mb-30px">
                        <div class="feature-box hover-box h-100 transition light-hover border-radius-6px p-18 xs-p-12 last-paragraph-no-margin overflow-hidden border border-1 box-shadow-quadruple-large-hover border-color-transparent-white-light border-color-transparent-on-hover">
                            <div class="feature-box-icon">
                                <i class="line-icon-Cloud-Email icon-extra-large text-white mb-15px"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block text-white fw-500 lh-24">Equipment Management</span>
                            </div>
                            <div class="feature-box-overlay bg-white"></div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all mb-30px">
                        <div class="feature-box hover-box h-100 transition light-hover border-radius-6px p-18 xs-p-12 last-paragraph-no-margin overflow-hidden border border-1 box-shadow-quadruple-large-hover border-color-transparent-white-light border-color-transparent-on-hover">
                            <div class="feature-box-icon">
                                <i class="line-icon-Network-Window icon-extra-large text-white mb-15px"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block text-white fw-500 lh-24">Resource Usage Analytics</span>
                            </div>
                            <div class="feature-box-overlay bg-white"></div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all mb-30px">
                        <div class="feature-box hover-box h-100 transition light-hover border-radius-6px p-18 xs-p-12 last-paragraph-no-margin overflow-hidden border border-1 box-shadow-quadruple-large-hover border-color-transparent-white-light border-color-transparent-on-hover">
                            <div class="feature-box-icon">
                                <i class="line-icon-Envelope icon-extra-large text-white mb-15px"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block text-white fw-500 lh-24">Demand Prediction <br> and Optimization

                                </span>
                            </div>
                            <div class="feature-box-overlay bg-white"></div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all md-mb-30px">
                        <div class="feature-box hover-box h-100 transition light-hover border-radius-6px p-18 xs-p-12 last-paragraph-no-margin overflow-hidden border border-1 box-shadow-quadruple-large-hover border-color-transparent-white-light border-color-transparent-on-hover">
                            <div class="feature-box-icon">
                                <i class="line-icon-Wordpress icon-extra-large text-white mb-15px"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block text-white fw-500 lh-24">Patient Flow Optimization</span>
                            </div>
                            <div class="feature-box-overlay bg-white"></div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all md-mb-30px">
                        <div class="feature-box hover-box h-100 transition light-hover border-radius-6px p-18 xs-p-12 last-paragraph-no-margin overflow-hidden border border-1 box-shadow-quadruple-large-hover border-color-transparent-white-light border-color-transparent-on-hover">
                            <div class="feature-box-icon">
                                <i class="line-icon-Big-Data icon-extra-large text-white mb-15px"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block text-white fw-500 lh-24">Alerts and Notifications</span>
                            </div>
                            <div class="feature-box-overlay bg-white"></div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all xs-mb-30px">
                        <div class="feature-box hover-box h-100 transition light-hover border-radius-6px p-15 xs-p-12 last-paragraph-no-margin overflow-hidden border border-1 box-shadow-quadruple-large-hover border-color-transparent-white-light border-color-transparent-on-hover">
                            <div class="feature-box-icon">
                                <i class="line-icon-Data-Password icon-extra-large text-white mb-15px"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block text-white fw-500 lh-24">Admin Dashboard</span>
                            </div>
                            <div class="feature-box-overlay bg-white"></div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all">
                        <div class="feature-box hover-box h-100 transition light-hover border-radius-6px p-18 xs-p-12 last-paragraph-no-margin overflow-hidden border border-1 box-shadow-quadruple-large-hover border-color-transparent-white-light border-color-transparent-on-hover">
                            <div class="feature-box-icon">
                                <i class="line-icon-Globe icon-extra-large text-white mb-15px"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block text-white fw-500 lh-24">Automated Scheduling</span>
                            </div>
                            <div class="feature-box-overlay bg-white"></div>
                        </div>
                    </div>
                    <!-- end features box item -->
                </div>
                <div class="row justify-content-center mt-6">
                    <div class="col-auto icon-with-text-style-08 sm-mb-10px" data-anime='{ "translateX": [-50, 0], "opacity": [0,1], "duration": 900, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="feature-box feature-box-left-icon-middle">
                            <div class="feature-box-icon me-10px">
                                <i class="bi bi-envelope icon-small text-yellow"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="alt-font text-white fs-18">Looking for help? <a href="#" class="text-decoration-line-bottom text-white fw-500">Submit a ticket</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto icon-with-text-style-08" data-anime='{ "translateX": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="feature-box feature-box-left-icon-middle">
                            <div class="feature-box-icon me-10px">
                                <i class="bi bi-chat-dots icon-small text-yellow"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="alt-font text-white fs-18">Keep in Touch. <a href="#" class="text-decoration-line-bottom text-white fw-500">Like us on Facebook</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="pb-0">
            <div class="container">
                <div class="row justify-content-center mb-3">
                    <div class="col-lg-8 text-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <span class="text-base-color fw-600 mb-5px text-uppercase d-block">Pricing plans</span>
                        <h2 class="fw-600 text-dark-gray text-dark-gray fw-700 ls-minus-2px">Hospital Management plans</h2>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center mb-6 md-mb-8">
                    <!-- start pricing item -->
                    <div class="col-lg-4 col-md-8 pricing-table-style-08 md-mb-30px" data-anime='{ "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <!-- start pricing table -->
                        <div class="pricing-table text-center pt-16 pb-35px bg-white box-shadow-quadruple-large border-radius-6px">
                            <div class="pricing-header ps-18 pe-18 md-ps-12 md-pe-12">
                                <div class="d-inline-block fs-12 text-uppercase bg-white ps-20px pe-20px fw-600 text-dark-gray mb-30px border-radius-100px box-shadow-large border border-1 border-color-extra-medium-gray">Basic Care</div>
                                <h2 class="text-dark-gray fw-600 mb-10px ls-minus-3px"><sup class="fs-30">₹</sup>250</h2>
                                <p class="mb-25px lh-28">Perfect for small clinics or hospitals just starting out. Includes essential features for managing patients and hospital resources.</p>
                                <a href="javascript:;" class="btn btn-large btn-dark-gray btn-round-edge btn-switch-text btn-box-shadow">
                                    <span>
                                        <span class="btn-double-text" data-text="Choose package">Choose package</span>
                                    </span>
                                </a>
                                <span class="fs-13 w-100 d-block mt-5px">Monthly billing</span>
                            </div>

                            <div class="pricing-footer">
                                <a href="javascript:;" class="text-decoration-line-bottom d-inline-block text-dark-gray fw-500 ls-minus-05px">Get your 30 day free trial</a>
                            </div>
                        </div>
                    </div>
                    <!-- end pricing item -->
                    <!-- start pricing item -->
                    <div class="col-lg-4 col-md-8 pricing-table-style-08 md-mb-30px" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <!-- start pricing table -->
                        <div class="pricing-table text-center pt-16 pb-35px bg-white box-shadow-quadruple-large border-radius-6px">
                            <div class="pricing-header ps-18 pe-18 md-ps-12 md-pe-12">
                                <div class="d-inline-block fs-12 text-uppercase bg-white ps-20px pe-20px fw-600 text-dark-gray mb-30px border-radius-100px box-shadow-large border border-1 border-color-extra-medium-gray">Adavanced </div>
                                <h2 class="text-dark-gray fw-600 mb-10px ls-minus-3px"><sup class="fs-30">₹</sup>750</h2>
                                <p class="mb-25px lh-28">Designed for medium-sized hospitals with growing needs. Includes advanced patient management, scheduling, and resource tracking.</p>
                                <a href="javascript:;" class="btn btn-large btn-yellow btn-round-edge btn-switch-text btn-box-shadow">
                                    <span>
                                        <span class="btn-double-text" data-text="Choose package">Choose package</span>
                                    </span>
                                </a>
                                <span class="fs-13 w-100 d-block mt-5px">Monthly billing</span>
                            </div>

                            <div class="pricing-footer">
                                <a href="javascript:;" class="text-decoration-line-bottom d-inline-block text-dark-gray fw-500 ls-minus-05px">Get your 30 day free trial</a>
                            </div>
                        </div>
                    </div>
                    <!-- end pricing item -->
                    <!-- start pricing item -->
                    <div class="col-lg-4 col-md-8 pricing-table-style-08" data-anime='{ "translateX": [-50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <!-- start pricing table -->
                        <div class="pricing-table text-center pt-16 pb-35px bg-white box-shadow-quadruple-large border-radius-6px">
                            <div class="pricing-header ps-18 pe-18 md-ps-12 md-pe-12">
                                <div class="d-inline-block fs-12 text-uppercase bg-white ps-20px pe-20px fw-600 text-dark-gray mb-30px border-radius-100px box-shadow-large border border-1 border-color-extra-medium-gray">Premium Care</div>
                                <h2 class="text-dark-gray fw-600 mb-10px ls-minus-3px"><sup class="fs-30">₹</sup>1050</h2>
                                <p class="mb-25px lh-28">Best for large hospitals with extensive operations. Offers comprehensive management tools, including patient records, doctor scheduling, bed management, and equipment tracking, with priority support.</p>
                                <a href="javascript:;" class="btn btn-large btn-dark-gray btn-round-edge btn-switch-text btn-box-shadow">
                                    <span>
                                        <span class="btn-double-text" data-text="Choose package">Choose package</span>
                                    </span>
                                </a>
                                <span class="fs-13 w-100 d-block mt-5px">Monthly billing</span>
                            </div>
                            <div class="pricing-footer">
                                <a href="javascript:;" class="text-decoration-line-bottom d-inline-block text-dark-gray fw-500 ls-minus-05px">Get your 30 day free trial</a>
                            </div>
                        </div>
                    </div>
                    <!-- end pricing item -->
                </div>
                <div class="row" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="col-12 text-center">
                        <div class="bg-dark-gray fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 me-10px xs-m-5px d-inline-block align-middle">Limited offer</div>
                        <div class="text-dark-gray fw-500 d-inline-block align-middle ls-minus-05px fs-18">Save 20% on annual plans. <a href="javascript:;" class="text-decoration-line-bottom text-dark-gray d-inline-block">Explore pricing plans<span class="bg-dark-gray"></span></a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="overflow-hidden">
            <div class="container">
                <div class="row align-items-center justify-content-center border-radius-8px p-4 xs-p-7 text-center text-lg-start g-0 cover-background" style="background-image: url('https://craftohtml.themezaa.com/images/demo-hosting-home-03.jpg')" data-bottom-top="transform:scale(1.1, 1.1) translateY(30px);" data-top-bottom="transform:scale(1.0, 1.0) translateY(-30px);">
                    <div class="col-lg-6 col-md-9 md-mb-10px icon-with-text-style-08">
                        <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                            <div class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle border border-2 border-color-transparent-white-light me-30px xs-me-25px">
                                <img src="https://craftohtml.themezaa.com/images/demo-hosting-home-icon.svg" class="w-50px h-50px" alt="">
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <h5 class="d-inline-block fw-600 text-white mb-0">Are you ready for a better productive business?</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end">
                        <div class="text-white d-inline-block last-paragraph-no-margin me-20px xs-m-10px">
                            <p class="opacity-8 d-inline-block">Starting at only</p>
                            <span class="fw-600 d-inline-block text-decoration-line-bottom">₹250 per month</span>
                        </div>
                        <a href="#" class="btn btn-medium btn-yellow btn-rounded fw-600 btn-switch-text btn-box-shadow">
                            <span>
                                <span class="btn-double-text" data-text="Sign up free">Sign up free</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="pt-0">
            <div class="container">
                <div class="row justify-content-center align-items-center mb-3">
                    <div class="col-lg-7 col-md-8 sm-mb-15px" data-anime='{ "translateX": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h2 class="text-dark-gray fw-700 ls-minus-1px mb-0">Have a question?</h2>
                    </div>
                    <div class="col-lg-3 col-md-4 text-start text-md-end" data-anime='{ "translateX": [-50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <span class="text-dark-gray fs-30 align-middle fancy-text-style-4 ls-minus-1px">&#128075; Say <span class="fw-600" data-fancy-text='{ "effect": "rotate", "string": ["hello!", "hallå!", "salve!"] }'></span></span>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="accordion accordion-style-02" id="accordion-style-02" data-active-icon="icon-feather-chevron-up" data-inactive-icon="icon-feather-chevron-down" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                            <!-- start accordion item -->
                            <div class="accordion-item active-accordion">
                                <div class="accordion-header border-bottom border-color-extra-medium-gray">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-01" aria-expanded="true" data-bs-parent="#accordion-style-02">
                                        <div class="accordion-title mb-0 position-relative text-dark-gray pe-30px">
                                            <i class="feather icon-feather-chevron-up icon-extra-medium"></i><span class="fw-600 fs-18">What is hospital management information system?</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-02-01" class="accordion-collapse collapse show" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                        <p>Hospital management information system is a computerised system that help in managing clinical, financial, laboratory, Inpatient, outpatient, pharmaceutical, etc. operations in a hospital. With the help of Hospital Management Information system, healtcare providers can focus more on providing quality healthcare to the patients.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="accordion-item">
                                <div class="accordion-header border-bottom border-color-extra-medium-gray">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-02" aria-expanded="false" data-bs-parent="#accordion-style-02">
                                        <div class="accordion-title mb-0 position-relative text-dark-gray pe-30px">
                                            <i class="feather icon-feather-chevron-down icon-extra-medium"></i><span class="fw-600 fs-18">What does a hospital information system do?</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-02-02" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                        <p>A hospital information system helps healthcare providers in streamlining their operations including managing patient health records(EMR/EHR), appointments, billing, diagnostics and much more.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="accordion-item">
                                <div class="accordion-header border-bottom border-color-light-medium-gray">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-03" aria-expanded="false" data-bs-parent="#accordion-style-02">
                                        <div class="accordion-title mb-0 position-relative text-dark-gray pe-30px">
                                            <i class="feather icon-feather-chevron-down icon-extra-medium"></i><span class="fw-600 fs-18">What is the major role of Hresources  ?</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-02-03" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                        <p>The system uses real-time data to predict demand and streamline hospital operations. It features a smart resource management system that optimizes the use of beds, medical staff, and equipment, ensuring efficient hospital workflows and better patient care.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <section class="pt-4">
            <div class="container">
                <div class="row position-relative clients-style-08" data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="col swiper text-center feather-shadow" data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed": 4000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper marquee-slide">
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/logo-envato.svg" class="h-40px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/logo-pingdom.svg" class="h-40px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/logo-paypal.svg" class="h-40px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/logo-walmart.svg" class="h-40px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/logo-amazon.svg" class="h-40px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/logo-logitech.svg" class="h-40px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/logo-envato.svg" class="h-40px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/logo-pingdom.svg" class="h-40px xs-h-30px" alt="" /></a>
                            </div>
                            <!-- end client item -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start footer -->
        <footer class="footer-dark bg-dark-blue pb-0 cover-background background-position-left-top" style="background-image: url('https://craftohtml.themezaa.com/images/demo-hosting-footer-bg.jpg')">
            <div class="container">
                <div class="row justify-content-center mb-5 md-mb-8 sm-mb-40px">
                    <!-- start footer column -->
                    <div class="col-6 col-lg-3 last-paragraph-no-margin order-sm-1 md-mb-40px xs-mb-30px">
                        <a href="/" class="footer-logo mb-15px d-inline-block">
                            HResources
                        </a>
                        <p class="w-90 lg-w-100">Lorem ipsum amet adipiscing elit to eiusmod ad tempor incididunt enim.</p>
                        <div class="elements-social social-icon-style-02 mt-20px xs-mt-15px">
                            <ul class="small-icon light">
                                <li class="my-0"><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li class="my-0"><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i class="fa-brands fa-dribbble"></i></a></li>
                                <li class="my-0"><a class="twitter" href="http://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                <li class="my-0"><a class="instagram" href="http://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-6 col-lg-2 col-sm-4 xs-mb-30px order-sm-3 order-lg-2">
                        <span class="fs-17 fw-500 d-block text-white mb-5px">Company</span>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="javascript:;">Hosting</a></li>
                            <li><a href="javascript:;">Domain</a></li>
                            <li><a href="javascript:;">Pricing</a></li>
                        </ul>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-6 col-lg-2 col-sm-4 xs-mb-30px order-sm-4 order-lg-3">
                        <span class="fs-17 fw-500 d-block text-white mb-5px">Customer</span>
                        <ul>
                            <li><a href="javascript:;">Client support</a></li>
                            <li><a href="javascript:;">Help center</a></li>
                            <li><a href="#">System status</a></li>
                            <li><a href="javascript:;">Feedback</a></li>
                        </ul>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-6 col-lg-2 col-sm-4 xs-mb-30px order-sm-5 order-lg-4">
                        <span class="fs-17 fw-500 d-block text-white mb-5px">Say hello</span>
                        <span class="d-inline-flex w-100">Need support?</span>
                        <a href="mailto:hi@domain.com" class="text-white lh-22 text-decoration-line-bottom d-inline-block mb-20px">hi@domain.com</a>
                        <span class="d-inline-flex w-100">Customer care</span>
                        <a href="tel:12345678910" class="text-white lh-22 d-inline-flex">+1 234 567 8910</a>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-lg-3 col-sm-6 ps-30px sm-ps-15px md-mb-40px xs-mb-0 order-sm-2 order-lg-5">
                        <span class="fs-17 fw-500 d-block text-white mb-5px">Subscribe our newsletter</span>
                        <p class="mb-20px">Subscribe our newsletter to get the latest news and updates!</p>
                        <div class="d-inline-block w-100 newsletter-style-02 position-relative mb-15px">
                            <form action="email-templates/subscribe-newsletter.php" method="post" class="position-relative w-100">
                                <input class="input-small bg-transparent-white-light fs-14 border-color-transparent w-100 form-control pe-50px ps-20px lg-ps-15px required" type="email" name="email" placeholder="Enter your email" />
                                <input type="hidden" name="redirect" value="">
                                <button class="btn pe-20px submit" aria-label="submit"><i class="icon bi bi-envelope icon-small text-white"></i></button>
                                <div class="form-results border-radius-4px pt-5px pb-5px ps-15px pe-15px fs-14 lh-22 mt-10px w-100 text-center position-absolute d-none"></div>
                            </form>
                        </div>

                    </div>
                    <!-- end footer column -->
                </div>
                <div class="border-top border-color-transparent-white-light pt-35px pb-35px text-center">
                    <span class="fs-13 w-60 lg-w-70 md-w-100 d-block mx-auto lh-22">This site is protected by reCAPTCHA and the Google <a href="#" class="text-white text-decoration-line-bottom">privacy policy</a> and <a href="#" class="text-white text-decoration-line-bottom">terms of service</a> apply. You must not use this website if you disagree with any of these website standard terms and conditions.</span>
                </div>
            </div>
        </footer>
        <!-- end footer -->

         <!-- start scroll progress -->
        <div class="scroll-progress d-none d-xxl-block">
          <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
          </a>
        </div>
        <!-- end scroll progress -->
        <!-- javascript libraries -->
        <script type="text/javascript" src="{{asset('front/js/jquery.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/js/vendors.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('front/js/main.js')}}"></script>
    </body>
</html>
