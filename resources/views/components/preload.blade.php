<div class="preloader">
    <style>
        .preloader header {
            box-shadow: 0 0 2px rgb(0 0 0 / 18%), 0 1px 3px rgb(0 0 0 / 12%);
            height: 6.5rem;
            padding-top: 14px;
        }

        .preloader li {
            background-color: transparent !important;
        }

        .preloader a {
            color: #eee !important;
            background-color: #eee !important;
            line-height: 20px !important;
        }

        .preloader .logo a {
            background-color: transparent !important;
        }

        .preloader .loading-skeleton {
            margin: 0rem;
        }

        .header-height-1 {
            min-height: 20px;
            height: 70px !important;
        }

    </style>
    <header class="header-area header-responsive-padding header-height-1 loading-skeleton">
        <div class="header-bottom sticky-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="logo">
                            <a href="index.html"><img src="./assets/images/logo/logo.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 ocultar_movil d-flex justify-content-end">
                        <div class="main-menu text-center">
                            <nav>
                                <ul>
                                    <li><a href="about-us.html">Español</a></li>
                                    <li><a href="contact-us.html">Portugués</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 ocultar_pc">
                        <div class="header-action-wrap">
                            {{-- <div class="header-action-style">
                                <a title="Login Register" href="login-register.html"><i class="pe-7s-user"></i></a>
                            </div> --}}
                            <div class="header-action-style d-block d-lg-none">
                                <a class="mobile-menu-active-button " href="#">Español</a>
                            </div>
                            <div class="header-action-style d-block d-lg-none">
                                <a class="mobile-menu-active-button" href="#">Portugués</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="slider-area father_content h-auto">
        <div class="slider-active swiper-container h-auto">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="intro-section slider-height-1 slider-content-center bg-img single-animation-wrap slider-bg-color-2"
                        style="background-image:url(assets/images/slider/slider-bg-2.jpg)">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 hm2-slider-animation">
                                    <div class="slider-content-2 slider-content-2-wrap slider-animated-2">
                                        <h3 class="animated">Up To 40% Off</h3>
                                        <h1 class="animated">Summer <br>Collection</h1>
                                        <div class="slider-btn-2 btn-hover">
                                            <a href="product-details.html"
                                                class="btn hover-border-radius theme-color animated">
                                                Shop Now
                                            </a>
                                        </div>
                                        <h2 class="animated">Furnirtre</h2>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="intro-section slider-height-1 slider-content-center bg-img single-animation-wrap slider-bg-color-2"
                        style="background-image:url(assets/images/slider/slider-bg-2-2.jpg)">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 hm2-slider-animation">
                                    <div class="slider-content-2 slider-content-2-wrap slider-animated-2">
                                        <h3 class="animated">Up To 40% Off</h3>
                                        <h1 class="animated">Summer <br>Collection</h1>
                                        <div class="slider-btn-2 btn-hover">
                                            <a href="product-details.html"
                                                class="btn hover-border-radius theme-color animated">
                                                Shop Now
                                            </a>
                                        </div>
                                        <h2 class="animated">Furnirtre</h2>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-slider-prev2 main-slider-nav2"><i class="fa fa-angle-left"></i></div>
                <div class="home-slider-next2 main-slider-nav2"><i class="fa fa-angle-right"></i></div>
            </div>
        </div>
        <div class="child_content">
            <div class="row p-0 m-0 h-100">
                <div class="col-lg-6 col-md-12 col-12 h-100 ocultar_movil">

                </div>
                <div class="col-lg-6 col-md-12 col-12 h-100">
                    <div class="card h-auto mt-3">
                        <div class="card-body">
                            <h4 class="cl-azul-m text-uppercase fw-600 text-center">Bienvenido(a)</h4>
                            <p class="text-justify cl-negro fw-100">Le damos la bienvenida a nuestro sitio de registro
                                para
                                este
                                especial evento donde
                                conoceremos la nueva campaña Gear Up en LATAM.</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-azul-m">10 de septiembre</a>
                                <a class="btn btn-verde">09:00 a 10:00 h | GMT-5 (hora de México)</a>
                            </div>
                            <hr>
                            @livewire('form-register')
                        </div>
                    </div>
                    <div class="card h-auto mt-3 mb-lg-0 mb-md-3 mb-3">
                        <div class="card-body">
                            <div class="row d-flex align-items-center justify-content-center">
                                <div class="col-2 text-right pr-0">
                                    <img class="img-fluid img_emoji"
                                        src="{{ asset('assets/images/emojis/happy.svg') }}" alt="emoji">
                                </div>
                                <div class="col-8">
                                    <div id="time2"></div>
                                </div>
                                <div class="col-2 text-left pl-0">
                                    <img class="img-fluid img_emoji"
                                        src="{{ asset('assets/images/emojis/scared.svg') }}" alt="emoji">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-footer bg-azul">
            <div class="container">
                <div class="row w-60">
                    <div class="col-4">
                        <img class="img-fluid" src="{{ asset('assets/images/logo/logo.png') }}" alt="wavin">
                    </div>
                    <div class="col-6 pl-0">
                        <p class="ml-10 text-white">Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit. Est delectus veniam perferendis. Natus eveniet
                            omnis
                            sunt facere. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
