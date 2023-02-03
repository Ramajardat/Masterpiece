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
                            @guest
                            <a href="{{ asset('/register') }}" class="btn btn3">Make Appointment</a>

                            @else

                            <a href="{{ asset('/appointment') }}" class="btn btn3">Make Appointment</a>
                            @endguest

                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>
   <!--! About Area Start 01 -->
   <div class="section-tittle text-center ">
       <span>About</span>
       <h2>Everything you want to know about us.</h2>
   </div>
   <section class="about-area fix  section-padding30 fix" id="about">

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
                <p>To always satisfy our customers by adding value through exemplary service with a moral goal of doing the right thing.

                    We have discovered that some consultancies provide great and long-lasting benefits and those that do all enable management to touch the spirit of their company and cause it to change.  This is our goal in providing consulting services.  Enabling positive change through adding value.
</p>
                <p class="pera-bottom"> Our work as consultants drives us to solve problems, teach, and enable businesses to do things they probably could have done on their own but would have taken much more time and expense than if we had not helped them.

                    Every day we strive to provide the best solutions, delivered on time.  Doing the right thing for our clients is paramount and our reputation speaks for itself and is our Consulting Philosophy.</p>
                <div class="footer-tittles">
                    <p>CEO, Consulto</p>
                    <h2>Rama Jaradat</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Area End-->
<!--! About Area Start 02-->
<div class="about-area2">
    <!-- left Contents -->
    <div class="about-details2">
        <div class="right-caption2">
            <!-- Section Tittle -->
            <div class="section-tittle mb-50">
                <h2>Creative solutions<br>from experts</h2>
            </div>
            <!-- collapse-wrapper -->
            <div class="collapse-wrapper">
                <div class="accordion" id="accordionExample">
                    <!-- single-one -->
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <a href="#" class="btn-link collapsed"  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">What is consulting?</a>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                Consulting is defined as the practice of providing a third party with expertise on a matter in exchange for a fee. The service may involve either advisory or implementation services. For the consultant, taking an independent and unbiased stance on an issue is central to his/her role.

                            </div>
                        </div>
                    </div>
                    <!-- single-two -->
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <a href="#" class="btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What skills does our consultants have for consulting?</a>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                Creative thinking, Problem-solving,Communicating clearly and empathetically, Organization, time management, and Curiosity.

                            </div>
                        </div>
                    </div>
                    <!-- single-three -->
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <a href="#" class="btn-link collapsed"  data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">What are the five phases of consulting?</a>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Contact, Discussion, Negotiation, Implementation and Evaluation.

                            </div>
                        </div>
                    </div>
                    <!-- single-four -->
                    <div class="card">
                        <div class="card-header" id="headingfouree">
                            <h2 class="mb-0">
                                <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFoure" aria-expanded="false" aria-controls="collapseFoure">How does a consultant help?</a>
                            </h2>
                        </div>
                        <div id="collapseFoure" class="collapse" aria-labelledby="headingfouree" data-parent="#accordionExample">
                            <div class="card-body">
                                Consultants provide analysis, insights, and recommendations for clients using their own expertise in relevant fields and in problem-solving.

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Right Contents  -->
    <div class="about-img2">
        <div class="info-man2">
            <div class="head-cap2">
                <img src="assets/img/icon/quality.svg" alt="">
                <h3>900+</h3>
            </div>
            <p>Interdum nulla, ut commodo<br>diam libero vitae erat.</p>
        </div>
        <div class="info-man2 info-man3">
            <div class="head-cap2">
                <img src="assets/img/icon/heart.svg" alt="">
                <h3>95%</h3>
            </div>
            <p>Interdum nulla, ut commodo<br> diam libero vitae erat.</p>
        </div>
    </div>
</div>
<!-- About Area End-->
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

    <!--? Team Ara Start -->
    <section class="team-area section-padding30" id="consultants">
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



            </div>
        </div>
    </section>
    <!-- Team Ara End -->
    <!--? Want To work -->
    {{-- <section class="wantToWork-area section-bg2"  data-background="assets/img/gallery/section_bg01.png">
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
                        @guest
                        <a href="{{ asset('/register') }}" class="btn w-btn wantToWork-btn mr-20">Make an Appointment</a>

                        @else

                        <a href="{{ asset('/appointment') }}" class="btn w-btn wantToWork-btn mr-20">Make an Appointment</a>
                        @endguest
                        <a  href="tel:+962778084901" class="btn2 w-btn wantToWork-btn"><i class="fas fa-phone"></i> +962778084901</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="wantToWork-area section-bg2"  data-background="assets/img/gallery/section_bg01.png">
        <div class="container">
            <div class="wants-wrapper w-padding2">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-7 col-lg-7 col-md-12">
                        <div class="wantToWork-caption wantToWork-caption2">
                            <h2>What are you waiting for? </h2>
                            <p>Join us now to be our new consultant!</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        @guest
                        <a href="{{ asset('/registerConsultant') }}" class="btn w-btn wantToWork-btn mr-20">Join as Consultant</a>

                        @else

                        <a href="{{ asset('/') }}" class="btn w-btn wantToWork-btn mr-20">Join as Consultant</a>
                        @endguest
                        <a  href="tel:+962778084901" class="btn2 w-btn wantToWork-btn"><i class="fas fa-phone"></i> +962778084901</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Want To work End -->
</main>

@endsection

