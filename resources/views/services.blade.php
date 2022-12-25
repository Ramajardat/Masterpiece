@extends('layouts.master')
@section('services')
<main>
    <!--? slider Area Start-->
    <div class="slider-area slider-area2 slider-height2 position-relative" data-background="assets/img/hero/hero2.png">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider">
                <div class="slider-cap-wrapper">
                    <div class="hero-caption">
                        <h1 data-animation="fadeInLeft" data-delay=".4s">Services</h1>
                        <!-- breadcrumb Start-->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ asset('/') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ asset('/services') }}">Services</a></li>
                            </ol>
                        </nav>
                    </div>

                    <!-- breadcrumb End -->
                    <div class="hero-img">
                        <img src="#" alt=""  data-animation="fadeInRight" data-transition-duration="5s">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--? Services Area Start -->
    <section class="services-section section-padding30 fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-70">
                        <span>Our Service</span>
                        <h2>We offer a range of strategic services to meet the unique and diverse needs of our clients.</h2>
                    </div>
                </div>
            </div>
            <div class=" d-flex">

            @foreach ($Services as $service)

            <div class="row">
                <div class="col-lg-4 col-md-6 ">
                    <div class="single-services single-services2 mb-30 section-over1 text-center">
                        <div class="services-img">
                            <img src="assets/img/gallery/Research paper-amico.png" alt="">
                            <div class="services-caption">
                                <h3><a href="#">{{ $service['name'] }}</a></h3>
                                <p>{{ $service['description'] }}</p>
                                <a href="{{ asset('/appointment') }}" class="btn btn3">Make Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-6">
                    <div class="single-services single-services2 mb-30 section-over1 text-center">
                        <div class="services-img">
                            <img src="assets/img/gallery/Analyze-bro.png" alt="">
                            <div class="services-caption">
                                <h3><a href="#">Financial Analaysis</a></h3>
                                <p>an assessment of the viability, stability, and profitability of a business.</p>
                                <a href="{{ asset('/appointment') }}" class="btn btn3">Make Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services single-services2 mb-30 section-over1 text-center">
                        <div class="services-img">
                            <img src="assets/img/gallery/Swot analysis-amico.png" alt="">
                            <div class="services-caption">
                                <h3><a href="#">Stretagic Planning</a></h3>
                                <p>define their vision and identify their organization's goals and objectives.</p>
                                <a href="{{ asset('/appointment') }}" class="btn btn3">Make Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services single-services2 mb-30 section-over1 text-center">
                        <div class="services-img">
                            <img src="assets/img/gallery/Business crisis-amico.png" alt="">
                            <div class="services-caption">
                                <h3><a href="#">Market Analysis</a></h3>
                                <p>is the process of conducting thorough research on a specific market.</p>
                                <a href="{{ asset('/appointment') }}" class="btn btn3">Make Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services single-services2 mb-30 section-over1 text-center">
                        <div class="services-img">
                            <img src="assets/img/gallery/Marketing-amico.png" alt="">
                            <div class="services-caption">
                                <h3><a href="#">Media planing</a></h3>
                                <p> identifying and selecting media outlets in which to place paid advertisements.</p>
                                <a href="{{ asset('/appointment') }}" class="btn btn3">Make Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services single-services2 mb-30 section-over1 text-center">
                        <div class="services-img">
                            <img src="assets/img/gallery/Business decisions-bro.png" alt="">
                            <div class="services-caption">
                                <h3><a href="#">Business Planning                                </a></h3>
                                <p> is a process of developing a roadmap aimed at achieving a business goal.</p>
                                <a href="{{ asset('/appointment') }}" class="btn btn3">Make Appointment</a>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
            @endforeach
        </div>

        </div>
    </section>
    <!--Services Area End -->
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
                        <a href="#" class="btn2 w-btn wantToWork-btn"><i class="fas fa-phone"></i>  +962778084901</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Want To work End -->
</main>
@endsection
