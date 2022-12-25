
@extends('layouts.master')
@section('profile')


<link rel="stylesheet" href="../../public/assets/css/profile.css">
<!DOCTYPE html>
<html lang="en">


    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"
    />
    <!-- MDB -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
      rel="stylesheet"
    />
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <link rel="icon" type="image/png" href="images/icons/favicon.png" />

    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/bootstrap/css/bootstrap.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="fonts/font-awesome-4.7.0/css/font-awesome.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="fonts/iconic/css/material-design-iconic-font.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="fonts/linearicons-v1.0.0/icon-font.min.css"
    />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css" />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/css-hamburgers/hamburgers.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/animsition/css/animsition.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/select2/select2.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/daterangepicker/daterangepicker.css"
    />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css" />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/MagnificPopup/magnific-popup.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/perfect-scrollbar/perfect-scrollbar.css"
    />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <style>.profile-pic {
        color: transparent;
        transition: all 0.3s ease;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        transition: all 0.3s ease;
      }
      .profile-pic input {
        display: none;
      }
      .profile-pic img {
        position: absolute;
        object-fit: cover;
        width: 165px;
        height: 165px;
        box-shadow: 0 0 10px 0 rgba(218, 81, 81, 0.35);
        border-radius: 100px;
        z-index: 0;
      }
      .profile-pic .-label {
        cursor: pointer;
        height: 165px;
        width: 260px;
      }
      .profile-pic:hover .-label {
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 10000;
        color: #fafafa;
        transition: background-color 0.2s ease-in-out;
        border-radius: 100px;
        margin-bottom: 0;
      }

      </style>
    <title>Profile</title>
  </head>

  <body class="animsition">


  <section class="h-100 gradient-custom-2">
    <div class="py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-9 col-xl-7">
          <div class="card">
            <div class="rounded-top text-white d-flex flex-row" style="background-color: #FEF2ED; height: 210px">
              <div class="ms-4 mt-14 d-flex flex-column" style="width: 150px">
                <div class="profile-pic">
                  <label class="-label" for="file">
                    <span class="glyphicon glyphicon-camera"></span>
                    <span>Change Image</span>
                  </label>
                  <input id="file" type="file" onchange="loadFile(event)" />
                  <img src="assets/img/gallery/profile.png" id="output" width="100" />
                </div>
                {{-- <a class="btn btn-warning btn-sm" data-bs-toggle="modal" href="#exampleModalToggle" role="button" onclick="editForm()"
                  style="width: 50px;margin-left: 690px;">Edit</a> --}}
              </div>
              <div class="ms-3" style="margin-top: 130px">
                <h5 id="userName">{{ Auth::user()->name }}
</h5>
                {{-- <p id="role">New York</p> --}}
              </div>
            </div>

            <div class="card-body p-4 text-black">
              <div class="mb-5">
                <p class="lead fw-normal mb-1">About</p>
                <div class="p-4" style="background-color: #f9f9ff">
                  <p class="font-italic mb-1" id="ad1">email:{{ Auth::user()->email }}
</p>
                  <p class="font-italic mb-0" id="city">city:{{ Auth::user()->city }}
</p>
                  <p class="font-italic mb-0" id="country">Country:Jordan </p>
                  <p class="font-italic mb-0" id="mobile">Mobile: {{ Auth::user()->mobile }}
</p>
                </div>
              </div>
              <div class="section-top-border">
                <h3 class="mb-30">Table</h3>
                <div class="progress-table-wrap">
                    <div class="progress-table">
                        <div class="table-head">
                            <div class="serial">#</div>
                            <div class="country">Appointment</div>
                            <div class="visit">About the project</div>
                            {{-- <div class="percentage">Percentages</div> --}}
                        </div>
                        @foreach($appointments as $appointment)

                        <div class="table-row">
                            <div class="serial">{{$appointment->id}}</div>
                            <div class="country">
                                {{-- <img src="assets/img/elements/f1.jpg" alt="flag"> --}}
                                {{$appointment->appointment_time}}</div>
                            <div class="visit">{{$appointment->message}}</div>
                            {{-- <div class="percentage">
                                <div class="progress">
                                    <div class="progress-bar color-1" role="progressbar" style="width: 80%"
                                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div> --}}
                        </div>
                        @endforeach






                    </div>
                </div>
            </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel">Edit User Profile</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <form id="editForm">
            <input class="form-control" type="hidden" name="id" />
            <div class="form-group">
              <label for="email">Email</label>
              <input class="form-control" type="text" name="email" id="editEmail" />
            </div>
            <div class="form-group">
              <label for="first_name">First Name</label>
              <input class="form-control" type="text" name="first_name" id="editFirst" />
            </div>
            <div class="form-group">
              <label for="last_name">Last Name</label>
              <input class="form-control" type="text" name="last_name" id="editLast" />
            </div>
            <div class="form-group">
              <label for="last_name">Password</label>
              <input class="form-control" type="text" name="password" id="editPassword"/>
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <textarea class="form-control" type="text" name="address" rows="3" id="editAddress"></textarea>
            </div>
            <hr>
            <button type="button" class="btn btn-warning" id="btnUpdateSubmit">
              Update
            </button>

          </form>
        </div>

      </div>
    </div>
  </div>

  <br><br><br>
  <br><br><br>
  <br><br><br>
  </div>





  <script>
    var loadFile = function (event) {
      var image = document.getElementById("output");
      image.src = URL.createObjectURL(event.target.files[0]);
    };
  </script>

  <script src="./js/profile.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
  <script>
    $(".js-select2").each(function () {
      $(this).select2({
        minimumResultsForSearch: 20,
        dropdownParent: $(this).next(".dropDownSelect2"),
      });
    });
  </script>
  <!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/slick/slick.min.js"></script>
  <script src="js/slick-custom.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/parallax100/parallax100.js"></script>
  <script>
    $(".parallax100").parallax100();
  </script>
  <!--===============================================================================================-->
  <script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
  <script>
    $(".gallery-lb").each(function () {
      // the containers for all your galleries
      $(this).magnificPopup({
        delegate: "a", // the selector for gallery item
        type: "image",
        gallery: {
          enabled: true,
        },
        mainClass: "mfp-fade",
      });
    });
  </script>
  <!--===============================================================================================-->
  <script src="vendor/isotope/isotope.pkgd.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/sweetalert/sweetalert.min.js"></script>
  <script>
    $(".js-addwish-b2").on("click", function (e) {
      e.preventDefault();
    });

    $(".js-addwish-b2").each(function () {
      var nameProduct = $(this).parent().parent().find(".js-name-b2").html();
      $(this).on("click", function () {
        swal(nameProduct, "is added to wishlist !", "success");

        $(this).addClass("js-addedwish-b2");
        $(this).off("click");
      });
    });

    $(".js-addwish-detail").each(function () {
      var nameProduct = $(this)
        .parent()
        .parent()
        .parent()
        .find(".js-name-detail")
        .html();

      $(this).on("click", function () {
        swal(nameProduct, "is added to wishlist !", "success");

        $(this).addClass("js-addedwish-detail");
        $(this).off("click");
      });
    });

    /*---------------------------------------------*/

    $(".js-addcart-detail").each(function () {
      var nameProduct = $(this)
        .parent()
        .parent()
        .parent()
        .parent()
        .find(".js-name-detail")
        .html();
      $(this).on("click", function () {
        swal(nameProduct, "is added to cart !", "success");
      });
    });
  </script>
  <!--===============================================================================================-->
  <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script>
    $(".js-pscroll").each(function () {
      $(this).css("position", "relative");
      $(this).css("overflow", "hidden");
      var ps = new PerfectScrollbar(this, {
        wheelSpeed: 1,
        scrollingThreshold: 1000,
        wheelPropagation: false,
      });

      $(window).on("resize", function () {
        ps.update();
      });
    });
  </script>
  <!--===============================================================================================-->
  <script src="js/main.js"></script>
  <!-- MDB -->
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>

</body>

</html>
@endsection
