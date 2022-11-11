@extends('layouts.master')
@section('content')

 <!--? slider Area Start-->
 <div class="slider-area slider-area2 slider-height2 position-relative" data-background="assets/img/hero/hero2.png">
    <div class="slider-active">
        <!-- Single Slider -->
        <div class="single-slider">
            <div class="slider-cap-wrapper">
                <div class="hero-caption">
                    <h1 data-animation="fadeInLeft" data-delay=".4s"> Payment</h1>
                    <!-- breadcrumb Start-->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ asset('/') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ asset('/payment') }}">Payment</a></li>
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

<div class="container">

    <div class="section-top-border">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <h3 class="mb-30">Payment Details </h3>
                <form action="#">
                    <div class="mt-10">
                        <input type="email" name="email" placeholder="Email address"
                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required
                        class="single-input">
                    </div>
                    <div class="mt-10">

                    <div class="d-flex align-items-center justify-content-between card-atm border rounded">
                        <div class="fab fa-cc-visa ps-3"></div>
                        <input type="text" class="single-input" placeholder="Card Details">
                        <div class="d-flex w-50">
                            <input type="text" class="single-input px-0" placeholder="MM/YY">
                            <input type="password" maxlength=3 class="single-input px-0" placeholder="CVV">
                        </div>
                    </div>
                </div>


                    <div class="mt-10">
                        <input type="text" name="Cardholder_name" placeholder="Cardholder name"
                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cardholder name'" required
                        class="single-input">
                    </div>


                    <div class="input-group-icon mt-10">
                        <div class="icon"><i class="bi bi-credit-card" aria-hidden="true"></i></div>

                    </div>


                    <div class="mt-10">
                        <input type="text" name="zip" placeholder="ZIP"
                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'ZIP'" required
                        class="single-input">
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <p class="fw-bold">Total</p>
                        <p class="fw-bold"><span class="fas fa-dollar-sign"></span>35.80</p>
                    </div>
                    <div class="header-left-btn f-left d-none d-sm-block  mt-5">
                        <a href="#" class="header-btn">Pay</a>
                    </div>
                </form>
            </div>
        </div>
@endsection
