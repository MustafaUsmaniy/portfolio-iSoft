<!DOCTYPE html>
<html>

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="Themes Industry">
    <!-- description -->
    <meta name="description"
        content="MegaOne is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose studio and portfolio HTML5 template with 8 ready home page demos.">
    <!-- keywords -->
    <meta name="keywords"
        content="Creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, studio, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, studio, masonry, grid, faq">
    <!-- Page Title -->
    <title>Portfolio | MegaOne HTML5 Template</title>
    <!-- TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Favicon -->
    <link rel="icon" href="portfolio/img/favicon.ico">
    <!-- Bundle -->
    <link rel="stylesheet" href="vendor/css/bundle.min.css">
    <link rel="stylesheet" href="vendor/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="vendor/css/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/css/swiper.min.css">
    <link rel="stylesheet" href="vendor/css/wow.css">
    <!-- Style Sheet -->
    <link rel="stylesheet" href="portfolio/css/animate.css">
    <link rel="stylesheet" href="vendor/css/LineIcons.min.css">
    <link rel="stylesheet" href="vendor/css/mediaelementplayer.min.css" />
    <link rel="stylesheet" href="portfolio/css/hover.css">
    <link rel="stylesheet" href="portfolio/css/style.css">

</head>

<body data-spy="scroll" data-target=".side-nav-menu" data-offset="400">

    <!--modal window loader-->
    <div class="loader center-block">

        <div class="loaders loader-1">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>
        </div>
    </div>
    <!--modal window loader end-->

    <!--main page loader-->
    <div class="main-loader center-block">

        <div class="loaders loader-1">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>
        </div>

    </div>
    <!--main page loader end-->


    <!--main page content-->
    <div class="wrap_container body">
        <div class="main_container">
            <div class="side_nav cursor-light">
                <div class="my-sticky-nav">
                    <div class="side_menu">
                        <a class="brand-logo" href="/">
                            <img src="portfolio/img/logo.png" alt="logo" style="height: 87%;width: 87%;" />
                        </a>
                        <div id="my_tog" class="my_tog cursor-light" onmouseover="my_click();">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <nav class="side-nav-menu ">
                            <ul class="nav-menu nav-fill">
                                <li class="nav-item"><span>0</span>
                                    <p class="count1" data-count="1">1</p><span>.</span><a class="nav-link"
                                        href="#home">HOME<span class="active"></span></a>
                                </li>
                                <li class="nav-item"><span>0</span>
                                    <p class="count2" data-count="2">2</p><span>.</span><a class="nav-link"
                                        href="#services-sec">ABOUT MEGAONE<span></span></a>
                                </li>
                                <li class="nav-item"><span>0</span>
                                    <p class="count3" data-count="3">3</p><span>.</span><a class="nav-link"
                                        href="#project-sec">PROJECTS<span></span></a>
                                </li>
                                <li class="nav-item"><span>0</span>
                                    <p class="count5" data-count="4">4</p><span>.</span><a class="nav-link"
                                        href="#pricing-sec">PRICING<span></span></a>
                                </li>
                                <li class="nav-item"><span>0</span>
                                    <p class="count4" data-count="5">5</p><span>.</span><a class="nav-link"
                                        href="#client-sec">CLIENTS<span></span></a>
                                </li>
                                <li class="nav-item"><span>0</span>
                                    <p class="count6" data-count="6">6</p><span>.</span><a class="nav-link"
                                        href="#contact-us-sec">CONTACT
                                        US<span></span></a>
                                </li>
                            </ul>
                            <div class="slider-social side-icons cursor-light">
                                <ul class="list-unstyled">
                                    <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li class="animated-wrap"><a class="animated-element"
                                            href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li class="animated-wrap"><a class="animated-element"
                                            href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <p class="rites-res"><span class="d-block" style="color: #f73859;">© 2020 MegaOne.</span>
                                Made with love by Themes Industry</p>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="body_wrapper" id="body_section">
                <div class="inner-content">
                    <div class="overlay-body"></div>
                    <!-- nabvar start-->
                    <header id="home">
                        <nav class="navbar navbar-light bg-light cursor-light">
                            <div class="my_nav_tog d-block d-md-none">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <a class="navbar-brand ml-auto mr-auto" href="/">
                                <img src="portfolio/img/logo.png" alt="images" style="height: 100%;width: 100%;" />
                                <h1>{{app()->getLocale()}}</h1>
                            </a>
                            <!--Slider Social-->
                            <div class="slider-social d-none d-md-block">
                                <ul class="list-unstyled">
                                    <li class="animated-wrap">
                                        <a class="animated-element" href="/lang/uz">uz</a>
                                    </li>
                                    <li class="animated-wrap">
                                        <a class="animated-element" href="/lang/ru">ru</a>
                                        </li>
                                    <li class="animated-wrap">
                                        <a class="animated-element" href="/lang/en">en</a>
                                        </li>
                                    <li class="animated-wrap"><a class="animated-element"
                                            href="javascript:void(0);"><i class="fab fa-facebook-f"
                                                aria-hidden="true"></i></a></li>
                                    <li class="animated-wrap"><a class="animated-element"
                                            href="javascript:void(0);"><i class="fab fa-twitter"
                                                aria-hidden="true"></i></a></li>
                                    <li class="animated-wrap"><a class="animated-element"
                                            href="javascript:void(0);"><i class="fab fa-linkedin-in"
                                                aria-hidden="true"></i></a></li>
                                    <li class="animated-wrap"><a class="animated-element"
                                            href="javascript:void(0);"><i class="fab fa-instagram"
                                                aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <!--Cursor-->
                        </nav>

                        <!--Animated Cursor-->
                        <div class="aimated-cursor">
                            <div class="cursor">
                                <div class="cursor-loader"></div>
                            </div>
                        </div>
                        <!--Animated Cursor End-->

                        <div class="broad">
                            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
                            <nav class="side-nav-menu">
                                <a class="brand-logo" href="#">
                                    <img src="portfolio/img/logo.png" alt="images"
                                        style="height: 90%;width: 90%;" />
                                </a>
                                <ul class="nav-menu nav-fill">
                                    <li class="nav-item">
                                        <span>01.</span><a class="nav-link" href="#portfolio-sec">HOME<span
                                                class="active"></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <span>02.</span><a class="nav-link" href="#services-sec">ABOUT
                                            MEGAONE<span></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <span>03.</span><a class="nav-link"
                                            href="#project-sec">PROJECTS<span></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <span>04.</span><a class="nav-link"
                                            href="#pricing-sec">PRICING<span></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <span>05.</span><a class="nav-link"
                                            href="#client-sec">CLIENTS<span></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <span>06.</span><a class="nav-link" href="#contact-us-sec">
                                            {{__('words.contact')}}
                                            <span></span></a>
                                    </li>
                                </ul>
                                <div class="social-icons">
                                    <span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
                                    <span><a href="#"><i class="fab fa-twitter"></i></a></span>
                                    <span><a href="#"><i class="fab fa-linkedin-in"></i></a></span>
                                    <span><a href="#"><i class="fab fa-instagram"></i></a></span>
                                </div>
                                <p class="rites-res"><span class="d-block">© 2020 MegaOne.</span> Made with love by
                                    Themes Industry</p>

                            </nav>
                        </div>
                    </header>
                    <!-- navbar end-->
                    <!-- inner body content start-->
                    <div class="inner_body">

                        {{ $slot }}
                        <!--Contact us content end-->
                    </div>
                    <!-- inner body content end-->
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript -->
    <script src="vendor/js/bundle.min.js"></script>
    <script src="vendor/js/jquery.fancybox.min.js"></script>
    <script src="vendor/js/owl.carousel.min.js"></script>
    <script src="vendor/js/swiper.min.js"></script>
    <script src="vendor/js/parallaxie.min.js"></script>
    <script src="vendor/js/wow.min.js"></script>

    <!-- custom script -->
    <script src="portfolio/js/fancybox.js"></script>
    <script src="portfolio/js/TweenMax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJRG4KqGVNvAPY4UcVDLcLNXMXk2ktNfY"></script>
    <script src="portfolio/js/map.js"></script>
    <script src="vendor/js/mediaelement-and-player.min.js"></script>
    <script src="portfolio/js/script.js"></script>

</body>

</html>
