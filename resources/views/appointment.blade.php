@extends('layouts.master')
@section('content')
  <!--? slider Area Start-->
  <div class="slider-area slider-area2 slider-height2 position-relative" data-background="assets/img/hero/hero2.png">
    <div class="slider-active">
        <!-- Single Slider -->
        <div class="single-slider">
            <div class="slider-cap-wrapper">
                <div class="hero-caption">
                    <h1 data-animation="fadeInLeft" data-delay=".4s"> Appointment</h1>
                    <!-- breadcrumb Start-->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ asset('/') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ asset('/appointment') }}">Make An Appointment</a></li>
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
            <h3 class="mb-30">Appointment Form </h3>
            <form action="#" method="POST" >
                <div class="mt-10">
                    <input type="text" name="first_name" placeholder="First Name"
                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required
                    class="single-input">
                </div>
                <div class="mt-10">
                    <input type="text" name="last_name" placeholder="Last Name"
                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required
                    class="single-input">
                </div>

                <div class="mt-10">
                    <input type="email" name="EMAIL" placeholder="Email address"
                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required
                    class="single-input">
                </div>
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
                    <input type="datetime-local" name="date" placeholder="Preffered Date and time" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Address'" required class="single-input">
                </div>
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                    <div class="form-select" id="default-select">
                        <select>
                            <option value=" 1">City</option>
                            <option value="Amman">Amman	</option>
                            <option value="Zarqa">Zarqa	</option>
                            <option value="Irbid">Irbid	</option>
                            <option value="Ajloun">Ajloun</option>
                            <option value="Jarash">Jarash</option>
                            <option value="Mafraq">Mafraq</option>
                            <option value="Balqa">Balqa	</option>
                            <option value="Aqaba">Aqaba	</option>
                            <option value="Madaba">Madaba</option>
                            <option value="Karak">Karak</option>
                            <option value="Tafilah">Tafilah</option>
                            <option value="Ma'an">Ma'an</option>
                        </select>
                    </div>
                </div>


                <div class="mt-10">
                    <textarea class="single-textarea" placeholder="Message" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Message'" required></textarea>
                </div>

                <div class="header-left-btn f-left d-none d-sm-block  mt-5">
                    <a href="#" class="header-btn">Make an Appointment</a>
                </div>
            </form>
        </div>
    </div>

    {{-- End Appointment Section --}}
@endsection
