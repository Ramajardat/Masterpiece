<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Consilia Dashboard</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../../assets2/img/favicon.png" rel="icon">
    <link href="../../assets2/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets2/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../assets2/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../assets2/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../../assets2/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../../assets2/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../assets2/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../../assets2/css/style.css" rel="stylesheet">

    <!-- =======================================================
      * Template Name: NiceAdmin - v2.4.1
      * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      * Author: BootstrapMade.com
      * License: https://bootstrapmade.com/license/
      ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="dashboard" class="logo d-flex align-items-center">
                <img src="../../assets2/img/Logo.png" alt="">
                <span class="d-none d-lg-block">Dashboard</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->



        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">



                <li class="nav-item dropdown">


                <li class="nav-item pe-3 me-3">

                    {{-- <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <i class="bi bi-person-square"></i>
                        <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
                    </a><!-- End Profile Iamge Icon --> --}}

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                      this.closest('form').submit();">
                            {{ __('Sign Out') }}
                            <i class="bi bi-box-arrow-right ms-2"></i>
                        </x-dropdown-link>
                    </form>

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Kevin Anderson</h6>
                            <span>Admin</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>

                        </li>
                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="dashboard">
                    <i class="bi bi-person"></i>
                    <span>Users</span>
                </a>
            </li><!-- End Users Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="consultants">
                    <i class="bi bi-layout-text-window-reverse"></i>
                    <span>Consultant</span>
                </a>
            </li><!-- End Owners Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="services">
                    <i class="bi bi-journal-text"></i>
                    <span>Services</span>
                </a>
            </li><!-- End Surveys Nav -->
            {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="contact">
                    <i class="bi bi-people-fill"></i>
                    <span>Contacts</span>
                </a>
            </li><!-- End Contacts Nav --> --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="appointement">
                    <i class="bi bi-person-plus-fill"></i>
                    <span>Appointment</span>
                </a>
            </li><!-- End Subscribers Nav -->

        </ul>

    </aside>
    <!-- End Sidebar-->

    @yield('dashboard')
    @yield('owners')
    @yield('surveys')
    @yield('contact')
    @yield('subscribers')



    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>Consilia</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed & Developed by Consilia Team
        </div>
    </footer>
    <!-- End Footer -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../../assets2/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../../assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets2/vendor/chart.js/chart.min.js"></script>
    <script src="../../assets2/vendor/echarts/echarts.min.js"></script>
    <script src="../../assets2/vendor/quill/quill.min.js"></script>
    <script src="../../assets2/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../../assets2/vendor/tinymce/tinymce.min.js"></script>
    <script src="../../assets2/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../../assets2/js/main.js"></script>

</body>

</html>
