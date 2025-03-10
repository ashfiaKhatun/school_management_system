@include("home.layout.header");

<body class="index-page">

    @include("home.layout.navbar");

    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>{{ __('msg.about_banner_title') }}</h1>
                            <p class="mb-0">{{ __('msg.about_banner_description') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Page Title -->


        <!-- Section: History Timeline -->
        <section class="container">
            <ul class="timeline">

                <li class="timeline-item mb-5">
                    <h5 class="fw-bold">{{ __('msg.establish_history_2005') }}</h5>
                    <p class="text-muted mb-2 fw-bold">{{ __('msg.establish_history_year_2005') }}</p>
                </li>

                <li class="timeline-item mb-5">
                    <h5 class="fw-bold">{{ __('msg.establish_history_2010') }}</h5>
                    <p class="text-muted mb-2 fw-bold">{{ __('msg.establish_history_year_2010') }}</p>
                </li>

                <li class="timeline-item mb-5">
                    <h5 class="fw-bold">{{ __('msg.establish_history_2015') }}</h5>
                    <p class="text-muted mb-2 fw-bold">{{ __('msg.establish_history_year_2015') }}</p>
                </li>

                <li class="timeline-item mb-5">
                    <h5 class="fw-bold">{{ __('msg.establish_history_2018') }}</h5>
                    <p class="text-muted mb-2 fw-bold">{{ __('msg.establish_history_year_2018') }}</p>
                </li>

                <li class="timeline-item mb-5">
                    <h5 class="fw-bold">{{ __('msg.establish_history_2020') }}</h5>
                    <p class="text-muted mb-2 fw-bold">{{ __('msg.establish_history_year_2020') }}</p>
                </li>

                <li class="timeline-item mb-5">
                    <h5 class="fw-bold">{{ __('msg.establish_history_2023') }}</h5>
                    <p class="text-muted mb-2 fw-bold">{{ __('msg.establish_history_year_2023') }}</p>
                </li>

                <li class="timeline-item mb-5">
                    <h5 class="fw-bold">{{ __('msg.establish_history_present') }}</h5>
                    <p class="text-muted mb-2 fw-bold">{{ __('msg.establish_history_year_present') }}</p>
                </li>

            </ul>
        </section><!-- Section: History Timeline -->



        <!-- Mission & Vision Section -->
        <section id="testimonials" class="testimonials section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>{{ __('msg.mission_vision_title') }}</h2>
                <p>{{ __('msg.about_mission') }}</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                        {
                            "loop": true,
                            "speed": 600,
                            "autoplay": {
                                "delay": 5000
                            },
                            "slidesPerView": "auto",
                            "pagination": {
                                "el": ".swiper-pagination",
                                "type": "bullets",
                                "clickable": true
                            },
                            "breakpoints": {
                                "320": {
                                    "slidesPerView": 1,
                                    "spaceBetween": 40
                                },
                                "1200": {
                                    "slidesPerView": 2,
                                    "spaceBetween": 20
                                }
                            }
                        }
                    </script>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                    <h3>{{ __('msg.mission_1') }}</h3>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>{{ __('msg.mission_1_description') }}</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                    <h3>{{ __('msg.mission_2') }}</h3>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>{{ __('msg.mission_2_description') }}</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                    <h3>{{ __('msg.mission_3') }}</h3>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>{{ __('msg.mission_3_description') }}</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                    <h3>{{ __('msg.mission_4') }}</h3>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>{{ __('msg.mission_4_description') }}</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>


            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <p>{{ __('msg.about_vision') }}</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                        {
                            "loop": true,
                            "speed": 600,
                            "autoplay": {
                                "delay": 5000
                            },
                            "slidesPerView": "auto",
                            "pagination": {
                                "el": ".swiper-pagination",
                                "type": "bullets",
                                "clickable": true
                            },
                            "breakpoints": {
                                "320": {
                                    "slidesPerView": 1,
                                    "spaceBetween": 40
                                },
                                "1200": {
                                    "slidesPerView": 2,
                                    "spaceBetween": 20
                                }
                            }
                        }
                    </script>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                    <h3>{{ __('msg.vision_1') }}</h3>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>{{ __('msg.vision_1_description') }}</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                    <h3>{{ __('msg.vision_2') }}</h3>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>{{ __('msg.vision_2_description') }}</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                    <h3>{{ __('msg.vision_3') }}</h3>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>{{ __('msg.vision_3_description') }}</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                    <h3>{{ __('msg.vision_4') }}</h3>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>{{ __('msg.vision_4_description') }}</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- /Mission & Vision Section -->



        <!-- Section: Timeline -->
        <section class="container">

            <!-- Grid component -->
            <div >
                <!-- Milestones -->
                <div>
                    <div class="section-title">
                        <p>{{ __('msg.milestones_title') }}</p>
                    </div>
                    <ul class="timeline">

                        <li class="timeline-item mb-5">
                            <h5>{{ __('msg.milestones_2010') }}</h5>
                            <p class="text-muted mb-2 fw-bold">{{ __('msg.milestones_year_2010') }}</p>
                        </li>

                        <li class="timeline-item mb-5">
                            <h5>{{ __('msg.milestones_2015') }}</h5>
                            <p class="text-muted mb-2 fw-bold">{{ __('msg.milestones_year_2015') }}</p>
                        </li>

                        <li class="timeline-item mb-5">
                            <h5>{{ __('msg.milestones_2018') }}</h5>
                            <p class="text-muted mb-2 fw-bold">{{ __('msg.milestones_year_2018') }}</p>
                        </li>

                        <li class="timeline-item mb-5">
                            <h5>{{ __('msg.milestones_2023') }}</h5>
                            <p class="text-muted mb-2 fw-bold">{{ __('msg.milestones_year_2023') }}</p>
                        </li>
                    </ul>
                </div>  <!-- /Milestones -->

                <div>
                        
                </div>
            </div>
        </section>
        <!-- Section: Timeline -->


    </main>

    @include("home.layout.footer");

</body>

</html>