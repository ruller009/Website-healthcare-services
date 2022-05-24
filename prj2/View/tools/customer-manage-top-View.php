<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"> 
    <link href="<?php echo SITE_ROOT?>/Layout/front_end_layout/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo SITE_ROOT?>/Layout/front_end_layout/lib/flaticon/font/flaticon.css" rel="stylesheet"> 
    <link href="<?php echo SITE_ROOT?>/Layout/front_end_layout/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo SITE_ROOT?>/Layout/front_end_layout/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo SITE_ROOT?>/Layout/front_end_layout/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Top Bar Start -->
    <div class="top-bar d-none d-md-block">
        <div class="container-fluid">
            <div class="row1">
                <div class="col-md-8">
                    <div class="top-bar-left">
                        <div class="text">
                            <i class="far fa-clock"></i>
                            <h2>8:00 - 9:00</h2>
                            <p>Mon - Fri</p>
                        </div>
                        <div class="text">
                            <i class="fa fa-phone-alt"></i>
                            <h2>+123 456 7890</h2>
                            <p>For Appointment</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="top-bar-right">
                        <div class="social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand">Y<span>oo</span>ga</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="" class="nav-item nav-link active">News</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Diseases</a>
                        <div class="dropdown-menu">
                            <a href="" class="dropdown-item">Bệnh nhiễm trùng</a>
                            <a href="" class="dropdown-item">Bệnh nội tiết</a>
                            <a href="" class="dropdown-item">Bệnh tâm thần</a>
                            <a href="" class="dropdown-item">Bệnh hô hấp</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Medicine</a>
                        <div class="dropdown-menu">
                            <a href="" class="dropdown-item">Thuốc tây y</a>
                            <a href="" class="dropdown-item">Thuốc đông y</a>
                            <a href="" class="dropdown-item">Thực phẩm chức năng</a>
                        </div>
                    </div>

                    <a href="" class="nav-item nav-link">Science Research</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Search</a>
                        <div class="dropdown-menu">
                            <a href="" class="dropdown-item">Clinic</a>
                            <a href="" class="dropdown-item">Doctor</a>
                            <a href="" class="dropdown-item">Medicine</a>
                        </div>
                    </div>

                    <?php 
                    if (isset($_SESSION['username'])){
                    require_once('E:/xampp/htdocs/prj2/View/unit/user-nav-View.php');
                }
                else{
                require_once('E:/xampp/htdocs/prj2/View/unit/guest-nav-View.php');
            }
            ?>
        </div>
    </div>
</div>
</div>
<!-- Nav Bar End -->


<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row1">
            <div class="col-12">
                <h2 align="center"><?php echo $data['name']; ?></h2>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->
<div class="class">
    <div class="container">
        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <h4><?php echo $data['search']; ?></h4><br>
                    <div class="search-container" >
                        <div class="input-group mb-3" style="border: 1px solid #b1154a;">
                            <input id="key-search" type="text" class="form-control" placeholder="Search">
                        </div>
                    </div>
                </div>
                
                
                
            </div>
        </div>
        <!-- Blog End -->


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo SITE_ROOT?>/Layout/front_end_layout/lib/easing/easing.min.js"></script>
        <script src="<?php echo SITE_ROOT?>/Layout/front_end_layout/lib/wow/wow.min.js"></script>
        <script src="<?php echo SITE_ROOT?>/Layout/front_end_layout/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="<?php echo SITE_ROOT?>/Layout/front_end_layout/lib/isotope/isotope.pkgd.min.js"></script>
        <script src="<?php echo SITE_ROOT?>/Layout/front_end_layout/lib/lightbox/js/lightbox.min.js"></script>

        <!-- Contact Javascript File -->
        <script src="<?php echo SITE_ROOT?>/Layout/front_end_layout/mail/jqBootstrapValidation.min.js"></script>
        <script src="<?php echo SITE_ROOT?>/Layout/front_end_layout/mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="<?php echo SITE_ROOT?>/Layout/front_end_layout/js/main.js"></script>
    </body>
    </html>
