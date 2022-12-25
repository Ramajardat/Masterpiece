@extends('layouts.master')
@section('content')

<main>
    <!--? slider Area Start-->
    <div class="slider-area  slider-height position-relative" data-background="assets/img/hero/h1_hero.png">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider">
                <div class="slider-cap-wrapper">
                    <div class="hero-caption">
                        <span>Best Service</span>
                        <h1 data-animation="fadeInLeft" data-delay=".4s">Business  Consulting</h1>
                        <p data-animation="fadeInLeft" data-delay=".6s">We Help To Push Your Business To The Top Level.</p>
                        <!-- Hero Btn -->
                        @guest

                        <a href="{{ asset('/register') }}" class="btn"  data-animation="fadeInLeft" data-delay=".9s" >Start Now</a>
                        @else
                        <a href="#services" class="btn"  data-animation="fadeInLeft" data-delay=".9s" >Start Now</a>
                        @endguest

                    </div>
                    <div class="hero-img">
                        <img src="assets/img/hero/h1_hero1.png" alt=""  data-animation="fadeInRight" data-transition-duration="5s">
                    </div>
                </div>
            </div>
        </div>
        <!-- Video icon -->
        {{-- <div class="video-icon" >
            <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0"><i class="fas fa-play"></i></a>
        </div> --}}
    </div>
    <!-- slider Area End-->
    <!--? Services Area Start -->
    <section class="services-section section-padding30 fix" id="services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-70">
                        <span>Our Service</span>
                        <h2>We offer a range of strategic services to meet the unique and diverse needs of our clients.
                            </h2>
                    </div>
                </div>
            </div>
            <div class="all services-active d-flex">
            @foreach ($Services as $service)

            {{-- <div class="services-active"> --}}
                <div class="single-services section-over1 text-center">
                    <div class="services-img">
                        <img src="assets/img/gallery/Research paper-amico.png" alt="">
                        <div class="services-caption">
                            <h3><a href="#">{{ $service['name'] }}</a></h3>
                            <p>{{ $service['description'] }}</p>
                            <a href="{{ asset('/appointment') }}" class="btn btn3">Make Appointment</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
                {{-- <div class="single-services section-over1 text-center">
                    <div class="services-img">
                        <img src="assets/img/gallery/Analyze-bro.png" alt="">
                        <div class="services-caption">
                            <h3><a href="#">Financial Analaysis
                            </a></h3>
                            <p>an assessment of the viability, stability, and profitability of a business.</p>
                            <a href="{{ asset('/appointment') }}" class="btn btn3">Make Appointment</a>
                        </div>
                    </div>
                </div>
                <div class="single-services section-over1 text-center">
                    <div class="services-img">
                        <img src="assets/img/gallery/Swot analysis-amico.png" alt="">
                        <div class="services-caption">
                            <h3><a href="#">Stretagic Planning
                            </a></h3>
                            <p>define their vision and identify their organization's goals and objectives.</p>
                            <a href="{{ asset('/appointment') }}" class="btn btn3">Make Appointment</a>
                        </div>
                    </div>
                </div>
                <div class="single-services section-over1 text-center">
                    <div class="services-img">
                        <img src="assets/img/gallery/Business crisis-amico.png" alt="">
                        <div class="services-caption">
                            <h3><a href="#">Market Analysis
                            </a></h3>
                            <p>is the process of conducting thorough research on a specific market.</p>
                            <a href="{{ asset('/appointment') }}" class="btn btn3">Make Appointment</a>
                        </div>
                    </div>
                </div>--}}
            {{-- </div> --}}
        </div>
    </section>
    <!--Services Area End -->
    <!--! About Area Start 01 -->
    {{-- <section class="about-area fix">
        <!--Right Contents  -->
        <div class="about-img">

        </div>
        <!-- left Contents -->
        <div class="about-details">
            <div class="right-caption">
                <!-- Section Tittle -->
                <div class="section-tittle mb-50">
                    <h2>Our<br>Philosophy</h2>
                </div>
                <div class="about-more">
                    <p>The automated process starts as soon as
                        your clothes go into the machine. Duis cursus, mi quis
                        viverra ornare, eros dolor interdum nulla, ut commodo
                        diam libero vitae erat. Aenean faucibus nibh et justo
                        cursus id rutrum lorem imperdiet. Nunc ut sem vitae
                        risus tristique posuere.</p>
                        <p class="pera-bottom">Interdum nulla, ut commodo diam libero vitae erat.
                            Aenean faucibus nibh et justo cursus id rutrum lorem
                            imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                            <div class="footer-tittles">
                                <p>CEO, Consulto</p>
                                <h2>Capcilena Hanry</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--? Testimonial Area Start -->
    <section class="testimonial-area testimonial-padding fix" data-background="assets/img/gallery/section_bg03.png">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class=" col-lg-9">
                    <div class="about-caption">
                        <!-- Testimonial Start -->
                        <div class="h1-testimonial-active dot-style">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial position-relative">
                                <div class="testimonial-caption">
                                    <img src="assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
                                    <p>In the last six months we have seen our organizational profitability increase significantly thanks in large part to the change in practices around resource management and global resourcing of our projects.</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center">
                                    <div class="founder-img">
                                        <img src="assets/img/icon/testimonial.png" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Rawia Amer</span>
                                        <p>Founder at Colorlib</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial position-relative">
                                <div class="testimonial-caption">
                                    <img src="assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
                                    <p>We began working with Consilia because we were facing a lot of challenges within our organization. We were not organized, we were not effectively using our PSA tool and we were not delivering projects to clients on time.”.</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center">
                                    <div class="founder-img">
                                        <img src="assets/img/icon/testimonial.png" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Sana'a Hasan</span>
                                        <p>Creative designer at Colorlib</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--? Testimonial Area End -->
    <!-- Dashboard Blog Start -->
    {{-- <section class="home-blog section-padding40 fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-70">
                        <span>Case studies</span>
                        <h2>Some great stuffs we have done</h2>
                    </div>
                </div>
            </div>
            <div class="blog-active">
                <!-- Single -->
                <div class="single-blogs">
                    <div class="blog-img">
                        <img src="assets/img/gallery/blogs1.png" alt="">
                    </div>
                    <div class="blogs-cap">
                        <h5><a href="#">Starts the automated process.</a></h5>
                        <p>The automated process starts as soon as your  clothes go into the machine.</p>
                    </div>
                    <div class="stickers">
                        <span>Urban</span>
                    </div>
                </div>
                <!-- Single -->
                <div class="single-blogs">
                    <div class="blog-img">
                        <img src="assets/img/gallery/blogs2.png" alt="">
                    </div>
                    <div class="blogs-cap">
                        <h5><a href="#">Starts the automated process.</a></h5>
                        <p>The automated process starts as soon as your  clothes go into the machine.</p>
                    </div>
                    <div class="stickers">
                        <span>Urban</span>
                    </div>
                </div>
                <!-- Single -->
                <div class="single-blogs">
                    <div class="blog-img">
                        <img src="assets/img/gallery/blogs3.png" alt="">
                    </div>
                    <div class="blogs-cap">
                        <h5><a href="#">Starts the automated process.</a></h5>
                        <p>The automated process starts as soon as your  clothes go into the machine.</p>
                    </div>
                    <div class="stickers">
                        <span>Urban</span>
                    </div>
                </div>
                <!-- Single -->
                <div class="single-blogs">
                    <div class="blog-img">
                        <img src="assets/img/gallery/blogs2.png" alt="">
                    </div>
                    <div class="blogs-cap">
                        <h5><a href="#">Starts the automated process.</a></h5>
                        <p>The automated process starts as soon as your  clothes go into the machine.</p>
                    </div>
                    <div class="stickers">
                        <span>Urban</span>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Dashboard Blog End -->
    {{-- <!--? Office environment  Start-->
    <section class="office-environments section-bg2 section-padding40"  data-background="assets/img/gallery/section_bg02.png">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8">
                    <div class="office-pera">
                        <div class="section-tittle">
                            <h2 class="mb-30">Office <br>Environment</h2>
                            <p>The automated process starts as soon as
                                your clothes go into the machine. Duis cursus, mi quis
                                viverra ornare, eros dolor interdum nulla, ut commodo
                                diam libero vitae erat. Aenean faucibus nibh et justo
                                cursus id rutrum lorem imperdiet. Nunc ut sem vitae
                                risus tristique posuere.</p>

                                <p>Interdum nulla, ut commodo diam libero vitae erat.
                                Aenean faucibus nibh et justo cursus id rutrum lorem
                            imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Office environment  End-->
    <!--? Team Ara Start -->
    <section class="team-area section-padding20">
        <div class="container">
            <div class="row justify-content-center">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-70">
                        <span>Experts</span>
                        <h2>Our consultents</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($Cons as $user)
                @php
                $userCon =App\Models\User::find($user['user_id']);
                @endphp
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            {{-- <img src="assets/img/gallery/team2.png" alt=""> --}}
                            <img src="data:image/jpg;charset=utf8;base64,{{ $user['image'] }}" alt="">

                            <div class="team-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-caption">
                            <h3><a href="#">{{ $userCon['name'] }}</a></h3>
                            <p>{{ $user['overview'] }}</p>
                        </div>
                        <!-- Blog Social -->
                    </div>
                </div>
                @endforeach
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="assets/img/gallery/team2.png" alt="">
                            <div class="team-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-caption">
                            <h3><a href="#">Dirluba Jahan</a></h3>
                            <p>Senior business consultant</p>
                        </div>
                        <!-- Blog Social -->
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- Team Ara End -->
    <!--? Want To work -->
    <section class="wantToWork-area section-bg2"  data-background="assets/img/gallery/section_bg01.png">
        <div class="container">
            <div class="wants-wrapper w-padding2">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-7 col-lg-7 col-md-12">
                        <div class="wantToWork-caption wantToWork-caption2">
                            <h2>Need a consulting services?</h2>
                            <p>Please register and then get an appointment for any consulting services you want to have.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <a href="{{ asset('/appointment') }}" class="btn w-btn wantToWork-btn mr-20">Make an Appointment</a>
                        <a href="#" class="btn2 w-btn wantToWork-btn"><i class="fas fa-phone"></i> +962778084901</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Want To work End -->
</main>

@endsection

