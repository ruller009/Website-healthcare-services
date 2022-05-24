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
            <a href="http://localhost/prj2/" class="navbar-brand">R<span>ul</span>ler Ho<span>spi</span>tal</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="http://localhost/prj2/News" class="nav-item nav-link active">News</a>

                    <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Diseases</a>
                        <div class="dropdown-menu">
                            <a href="https://localhost/prj2/ShowPost/Basic/diseases1" class="dropdown-item">Bệnh nhiễm trùng</a>
                            <a href="https://localhost/prj2/ShowPost/Basic/diseases2" class="dropdown-item">Bệnh nội tiết</a>
                            <a href="https://localhost/prj2/ShowPost/Basic/diseases3" class="dropdown-item">Bệnh tâm thần</a>
                            <a href="https://localhost/prj2/ShowPost/Basic/diseases4" class="dropdown-item">Bệnh hô hấp</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Medicine</a>
                        <div class="dropdown-menu">
                            <a href="https://localhost/prj2/ShowPost/Basic/medicine1" class="dropdown-item">Thuốc tây y</a>
                            <a href="https://localhost/prj2/ShowPost/Basic/medicine2" class="dropdown-item">Thuốc đông y</a>
                            <a href="https://localhost/prj2/ShowPost/Basic/medicine3" class="dropdown-item">Thực phẩm chức năng</a>
                        </div>
                    </div>

                    <a href="https://localhost/prj2/ShowPost/Basic/research" class="nav-item nav-link">Science Research</a>

                    <div class="nav-item dropdown">
                        <a href="http://localhost/prj2/Search" class="nav-link dropdown-toggle" data-toggle="dropdown">Search</a>
                        <div class="dropdown-menu">
                            <a href="https://localhost/prj2/Search/clinic_search" class="dropdown-item">Clinic</a>
                            <a href="https://localhost/prj2/Search/doctor_search" class="dropdown-item">Doctor</a>
                            <a href="https://localhost/prj2/Search/medicine_search" class="dropdown-item">Medicine</a>
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
                    <h2 align="center" st>Quản lý bài viết</h2><br><br>
                    <h2 align="center">Danh mục <?php
                    $category = $data['category'];
                     if($category=='diseases1'){
                        $title = 'Bệnh truyền nhiễm';
                    }else if($category=='diseases2'){
                        $title = 'Bệnh nội tiết';
                    }else if($category=='diseases3'){
                        $title = 'Bệnh tâm thần';
                    }else if($category=='diseases4'){
                        $title = 'Bệnh hô hấp';
                    }else if($category=='medicine1'){
                        $title = 'Thuốc tây y';
                    }else if($category=='medicine2'){
                        $title = 'Thuốc đông y';
                    }else if($category=='medicine3'){
                        $title = 'Thực phẩm chức năng';
                    }else if($category=='research'){
                        $title = 'Nghiên cứu khoa học';
                    } 
                    echo $title ?></h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="class">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            </div>
            <div class="row1">
                <div class="col-12">
                    <ul id="class-filter">
                        <li ><a href="https://localhost/prj2/Staff/listpost/diseases1">Bệnh nhiễm trùng</a></li>
                        <li ><a href="https://localhost/prj2/Staff/listpost/diseases2">Bệnh nội tiết</a></li>
                        <li ><a href="https://localhost/prj2/Staff/listpost/diseases3">Bệnh tâm thần</a></li>
                        <li ><a href="https://localhost/prj2/Staff/listpost/diseases4">Bệnh hô hấp</a></li>
                        <li ><a href="https://localhost/prj2/Staff/listpost/medicine1">Thuốc tây y</a></li>
                        <li ><a href="https://localhost/prj2/Staff/listpost/medicine2">Thuốc đông y</a></li>
                        <li ><a href="https://localhost/prj2/Staff/listpost/medicine3">Thực phẩm chức năng</a></li>
                        <li ><a href="https://localhost/prj2/Staff/listpost/research">Nghiên cứu khoa học</a></li>
                    </ul>
                </div>
            </div>



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
