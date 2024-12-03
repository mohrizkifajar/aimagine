<!DOCTYPE html>
<html
    lang="en"
    class="light-style layout-navbar-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="/assets/"
    data-template="front-pages"
>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
        <title>Landing Page | AImagine</title>
        <meta name="description" content="" />

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="/assets/img/favicon/favicon.ico" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap" rel="stylesheet" />
        <link rel="stylesheet" href="assets/vendor/fonts/tabler-icons.css" />

        <!-- Core CSS -->
        <link rel="stylesheet" href="/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
        <link rel="stylesheet" href="/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
        <link rel="stylesheet" href="/assets/css/demo.css" />
        <link rel="stylesheet" href="/assets/vendor/css/pages/front-page.css" />

        <!-- Vendors CSS -->
        <link rel="stylesheet" href="/assets/vendor/libs/node-waves/node-waves.css" />
        <link rel="stylesheet" href="/assets/vendor/libs/nouislider/nouislider.css" />
        <link rel="stylesheet" href="/assets/vendor/libs/swiper/swiper.css" />

        <!-- Page CSS -->
        <link rel="stylesheet" href="/assets/vendor/css/pages/front-page-landing.css" />

        <!-- Helpers -->
        <script src="/assets/vendor/js/helpers.js"></script>
        <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
        <script src="/assets/vendor/js/template-customizer.js"></script>
        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="/assets/js/front-config.js"></script>
    </head>

    <body>
        <!-- Navbar: Start -->
        <nav class="layout-navbar shadow-none py-0">
            <div class="container">
                <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-4">
                    <!-- Menu logo wrapper: Start -->
                    <div class="navbar-brand app-brand demo d-flex py-0 py-lg-2 me-4">
                        <!-- Mobile menu toggle: Start-->
                        <button
                            class="navbar-toggler border-0 px-0 me-2"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                        >
                            <i class="ti ti-menu-2 ti-sm align-middle"></i>
                        </button>
                        <!-- Mobile menu toggle: End-->
                        <a href="landing-page.html" class="app-brand-link">
                            <span class="app-brand-logo demo">
                                <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                                    fill="#7367F0" />
                                <path
                                    opacity="0.06"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                                    fill="#161616" />
                                <path
                                    opacity="0.06"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                                    fill="#161616" />
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                                    fill="#7367F0" />
                                </svg>
                            </span>
                            <span class="app-brand-text demo menu-text fw-bold ms-2 ps-1">AImagine</span>
                        </a>
                    </div>
                    <!-- Menu logo wrapper: End -->

                    <!-- Menu wrapper: Start -->
                    <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
                        <button
                            class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                        >
                            <i class="ti ti-x ti-sm"></i>
                        </button>

                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link fw-medium" aria-current="page" href="#landingHero">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-medium" href="#landingFAQ">FAQ</a>
                            </li>
                        </ul>
                    </div>
                    <div class="landing-menu-overlay d-lg-none"></div>
                    <!-- Menu wrapper: End -->

                    <!-- Toolbar: Start -->
                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <!-- Style Switcher -->
                        <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                <i class="ti ti-sm"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                                <li>
                                <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                                    <span class="align-middle"><i class="ti ti-sun me-2"></i>Light</span>
                                </a>
                                </li>
                                <li>
                                <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                                    <span class="align-middle"><i class="ti ti-moon me-2"></i>Dark</span>
                                </a>
                                </li>
                                <li>
                                <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                                    <span class="align-middle"><i class="ti ti-device-desktop me-2"></i>System</span>
                                </a>
                                </li>
                            </ul>
                        </li>
                        <!-- / Style Switcher-->

                        <!-- navbar button: Start -->
                        <li>
                            <a href="/sign-in" class="btn btn-primary" target="_blank">
                                <span class="tf-icons ti ti-login scaleX-n1-rtl me-md-1"></span>
                                <span class="d-none d-md-block">Login/Register</span>
                            </a>
                        </li>
                        <!-- navbar button: End -->
                    </ul>
                    <!-- Toolbar: End -->
                </div>
            </div>
        </nav>
        <!-- Navbar: End -->

        <!-- Sections:Start -->
        <div data-bs-spy="scroll" class="scrollspy-example">
            <!-- Hero: Start -->
            <section id="hero-animation">
                <div id="landingHero" class="section-py landing-hero position-relative">
                    <div class="container">
                        <div class="hero-text-box text-center">
                            <h1 class="text-primary hero-title display-6 fw-bold">One dashboard to manage all your businesses</h1>
                            <h2 class="hero-sub-title h6 mb-4 pb-1">
                                Production-ready & easy to use Admin Template
                                <br class="d-none d-lg-block" />
                                for Reliability and Customizability.
                            </h2>
                            <div class="landing-hero-btn d-inline-block position-relative">
                                <span class="hero-btn-item position-absolute d-none d-md-flex text-heading">
                                    Join community
                                    <img
                                        src="/assets/img/front-pages/icons/Join-community-arrow.png"
                                        alt="Join community arrow"
                                        class="scaleX-n1-rtl"
                                    />
                                </span>
                                <a href="https://youtube.com/@aimagine_aimagine" target="_blank" class="btn btn-primary btn-lg">Get early access</a>
                            </div>
                        </div>
                        <div id="heroDashboardAnimation" class="hero-animation-img">
                            <a href="/vertical-menu-template/dashboards-ecommerce.html" target="_blank">
                                <div id="heroAnimationImg" class="position-relative hero-dashboard-img">
                                    <img
                                        src="/assets/img/front-pages/landing-page/hero-dashboard-light.png"
                                        alt="hero dashboard"
                                        class="animation-img"
                                        data-app-light-img="front-pages/landing-page/hero-dashboard-light.png"
                                        data-app-dark-img="front-pages/landing-page/hero-dashboard-dark.png"
                                    />
                                    <img
                                        src="/assets/img/front-pages/landing-page/hero-elements-light.png"
                                        alt="hero elements"
                                        class="position-absolute hero-elements-img animation-img top-0 start-0"
                                        data-app-light-img="front-pages/landing-page/hero-elements-light.png"
                                        data-app-dark-img="front-pages/landing-page/hero-elements-dark.png"
                                    />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="landing-hero-blank"></div>
            </section>
            <!-- Hero: End -->

            <!-- FAQ: Start -->
            <section id="landingFAQ" class="section-py bg-body landing-faq">
                <div class="container">
                    <div class="text-center mb-3 pb-1">
                        <span class="badge bg-label-primary">FAQ</span>
                    </div>
                    <h3 class="text-center mb-1">Frequently asked <span class="section-title">questions</span></h3>
                    <p class="text-center mb-5 pb-3">Browse through these FAQs to find answers to commonly asked questions.</p>
                    <div class="row gy-5">
                        <div class="col-lg-5">
                            <div class="text-center">
                                <img
                                    src="/assets/img/front-pages/landing-page/faq-boy-with-logos.png"
                                    alt="faq boy with logos"
                                    class="faq-image"
                                />
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="accordion" id="accordionExample">
                                <div class="card accordion-item active">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button
                                            type="button"
                                            class="accordion-button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#accordionOne"
                                            aria-expanded="true"
                                            aria-controls="accordionOne"
                                        >
                                            Do you charge for each upgrade?
                                        </button>
                                    </h2>

                                    <div id="accordionOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps icing
                                            marzipan gummi bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping
                                            soufflé. Wafer gummi bears marshmallow pastry pie.
                                        </div>
                                    </div>
                                </div>
                                <div class="card accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button
                                            type="button"
                                            class="accordion-button collapsed"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#accordionTwo"
                                            aria-expanded="false"
                                            aria-controls="accordionTwo"
                                        >
                                            Do I need to purchase a license for each website?
                                        </button>
                                    </h2>
                                    <div
                                        id="accordionTwo"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample"
                                    >
                                        <div class="accordion-body">
                                            Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat cake
                                            dragée ice cream halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies. Jelly
                                            beans candy canes carrot cake. Fruitcake chocolate chupa chups.
                                        </div>
                                    </div>
                                </div>
                                <div class="card accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button
                                            type="button"
                                            class="accordion-button collapsed"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#accordionThree"
                                            aria-expanded="false"
                                            aria-controls="accordionThree"
                                        >
                                            What is regular license?
                                        </button>
                                    </h2>
                                    <div
                                        id="accordionThree"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="headingThree"
                                        data-bs-parent="#accordionExample"
                                    >
                                        <div class="accordion-body">
                                            Regular license can be used for end products that do not charge users for access or service(access
                                            is free and there will be no monthly subscription fee). Single regular license can be used for
                                            single end product and end product can be used by you or your client. If you want to sell end
                                            product to multiple clients then you will need to purchase separate license for each client. The
                                            same rule applies if you want to use the same end product on multiple domains(unique setup). For
                                            more info on regular license you can check official description.
                                        </div>
                                    </div>
                                </div>
                                <div class="card accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button
                                            type="button"
                                            class="accordion-button collapsed"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#accordionFour"
                                            aria-expanded="false"
                                            aria-controls="accordionFour"
                                        >
                                            What is extended license?
                                        </button>
                                    </h2>
                                    <div
                                        id="accordionFour"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="headingFour"
                                        data-bs-parent="#accordionExample"
                                    >
                                        <div class="accordion-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis et aliquid quaerat possimus maxime!
                                            Mollitia reprehenderit neque repellat deleniti delectus architecto dolorum maxime, blanditiis
                                            earum ea, incidunt quam possimus cumque.
                                        </div>
                                    </div>
                                </div>
                                <div class="card accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button
                                            type="button"
                                            class="accordion-button collapsed"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#accordionFive"
                                            aria-expanded="false"
                                            aria-controls="accordionFive"
                                        >
                                            Which license is applicable for SASS application?
                                        </button>
                                    </h2>
                                    <div
                                        id="accordionFive"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="headingFive"
                                        data-bs-parent="#accordionExample"
                                    >
                                        <div class="accordion-body">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi molestias exercitationem ab cum
                                            nemo facere voluptates veritatis quia, eveniet veniam at et repudiandae mollitia ipsam quasi
                                            labore enim architecto non!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- FAQ: End -->
        </div>
        <!-- / Sections:End -->

        <!-- Footer: Start -->
        <footer class="landing-footer bg-body footer-text">
            <div class="footer-top">
                <div class="container">
                    <div class="row gx-0 gy-4 g-md-5">
                        <div class="col-lg-5">
                            <a href="landing-page.html" class="app-brand-link mb-4">
                                <span class="app-brand-logo demo">
                                    <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                                        fill="#7367F0" />
                                        <path
                                        opacity="0.06"
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                                        fill="#161616" />
                                        <path
                                        opacity="0.06"
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                                        fill="#161616" />
                                        <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                                        fill="#7367F0" />
                                    </svg>
                                </span>
                                <span class="app-brand-text demo footer-link fw-bold ms-2 ps-1">AImagine</span>
                            </a>
                            <p class="footer-text footer-logo-description mb-4">
                                Most developer friendly & highly customisable Admin Dashboard Template.
                            </p>
                            <form class="footer-form">
                                <label for="footer-email" class="small">Subscribe to newsletter</label>
                                <div class="d-flex mt-1">
                                    <input
                                        type="email"
                                        class="form-control rounded-0 rounded-start-bottom rounded-start-top"
                                        id="footer-email"
                                        placeholder="Your email"
                                    />
                                    <button ype="submit" class="btn btn-primary shadow-none rounded-0 rounded-end-bottom rounded-end-top">
                                        Subscribe
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <h6 class="footer-title mb-4">Demos</h6>
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <a href="../vertical-menu-template/" target="_blank" class="footer-link">Vertical Layout</a>
                                </li>
                                <li class="mb-3">
                                    <a href="../horizontal-menu-template/" target="_blank" class="footer-link">Horizontal Layout</a>
                                </li>
                                <li class="mb-3">
                                    <a href="../vertical-menu-template-bordered/" target="_blank" class="footer-link">Bordered Layout</a>
                                </li>
                                <li class="mb-3">
                                    <a href="../vertical-menu-template-semi-dark/" target="_blank" class="footer-link">Semi Dark Layout</a>
                                </li>
                                <li class="mb-3">
                                    <a href="../vertical-menu-template-dark/" target="_blank" class="footer-link">Dark Layout</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <h6 class="footer-title mb-4">Pages</h6>
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <a href="pricing-page.html" class="footer-link">Pricing</a>
                                </li>
                                <li class="mb-3">
                                    <a href="payment-page.html" class="footer-link">Payment<span class="badge rounded bg-primary ms-2">New</span></a>
                                </li>
                                <li class="mb-3">
                                    <a href="checkout-page.html" class="footer-link">Checkout</a>
                                </li>
                                <li class="mb-3">
                                    <a href="help-center-landing.html" class="footer-link">Help Center</a>
                                </li>
                                <li class="mb-3">
                                    <a href="../vertical-menu-template/auth-login-cover.html" target="_blank" class="footer-link">Login/Register</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <h6 class="footer-title mb-4">Download our app</h6>
                            <a href="javascript:void(0);" class="d-block footer-link mb-3 pb-2">
                                <img src="/assets/img/front-pages/landing-page/apple-icon.png" alt="apple icon" />
                            </a>
                            <a href="javascript:void(0);" class="d-block footer-link">
                                <img src="/assets/img/front-pages/landing-page/google-play-icon.png" alt="google play icon"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom py-3">
                <div class="container d-flex flex-wrap justify-content-between flex-md-row flex-column text-center text-md-start">
                    <div class="mb-2 mb-md-0">
                        <span class="footer-text">
                            ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                        </span>
                        <a href="https://pixinvent.com" target="_blank" class="fw-medium text-white footer-link">Pixinvent,</a>
                        <span class="footer-text"> Made with ❤️ for a better web.</span>
                    </div>
                    <div>
                        <a href="https://github.com/pixinvent" class="footer-link me-3" target="_blank">
                            <img
                                src="/assets/img/front-pages/icons/github-light.png"
                                alt="github icon"
                                data-app-light-img="front-pages/icons/github-light.png"
                                data-app-dark-img="front-pages/icons/github-dark.png"
                            />
                        </a>
                        <a href="https://www.facebook.com/pixinvents/" class="footer-link me-3" target="_blank">
                            <img
                                src="/assets/img/front-pages/icons/facebook-light.png"
                                alt="facebook icon"
                                data-app-light-img="front-pages/icons/facebook-light.png"
                                data-app-dark-img="front-pages/icons/facebook-dark.png"
                            />
                        </a>
                        <a href="https://twitter.com/pixinvents" class="footer-link me-3" target="_blank">
                            <img
                                src="/assets/img/front-pages/icons/twitter-light.png"
                                alt="twitter icon"
                                data-app-light-img="front-pages/icons/twitter-light.png"
                                data-app-dark-img="front-pages/icons/twitter-dark.png"
                            />
                        </a>
                        <a href="https://www.instagram.com/pixinvents/" class="footer-link" target="_blank">
                            <img
                                src="/assets/img/front-pages/icons/instagram-light.png"
                                alt="google icon"
                                data-app-light-img="front-pages/icons/instagram-light.png"
                                data-app-dark-img="front-pages/icons/instagram-dark.png"
                            />
                        </a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer: End -->

        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="/assets/vendor/libs/popper/popper.js"></script>
        <script src="/assets/vendor/js/bootstrap.js"></script>
        <script src="/assets/vendor/libs/node-waves/node-waves.js"></script>
        <!-- endbuild -->

        <!-- Vendors JS -->
        <script src="/assets/vendor/libs/nouislider/nouislider.js"></script>
        <script src="/assets/vendor/libs/swiper/swiper.js"></script>

        <!-- Main JS -->
        <script src="/assets/js/front-main.js"></script>

        <!-- Page JS -->
        <script src="/assets/js/front-page-landing.js"></script>
    </body>
</html>
