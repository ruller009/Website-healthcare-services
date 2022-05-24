<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>YOOGA - Free Yoga Website Template</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Template Stylesheet -->
    <link href="<?php echo SITE_ROOT?>/Layout/front_end_layout/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Top Bar Start -->
    <div class="top-bar d-none d-md-block">
        <div class="container-fluid">
            <div class="row">
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
            <div class="row">
                <div class="col-12">
                    <h2>Tính chỉ số BMI</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="about wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="section-header text-left">
                        <h2>Đo chỉ số cân nặng - chiều cao BMI</h2>
                    </div>
                    <div class="about-text">
                        <form>
                            <label style="font-size: 30px; color: green; font-weight: 200px">Nhập chiều cao của bạn</label><br>
                            <input type="text" name="" placeholder="Tính theo cm" id="height" style="color: blue"><br>
                            <label style="font-size: 30px; color: green; font-weight: 200px">Nhập cân nặng của bạn</label><br>
                            <input type="text" name="" placeholder="Tính theo kg" id="weight" style="color: purple"><br><br>
                            
                            <input type="reset" name="" value="Reset" id="reset" style="font-size: 50px; color: orange"><br><br>
                        </form>
                        <label><u style="font-size: 30px; color: black">Kết quả BMI của bạn:</u></label><br><br>
                        <div id="result" style="color: red"></div>
                        <label><u style="font-size: 30px; color: black;">Nhận xét và lời khuyên:</u></label><br>
                        <div id="comment" style="color: red"></div><br><br>
                        
                        <button id="btn" style="font-size: 30px; color: blue">Tính toán</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function(){
            $('#btn').click(function(){
                $('#result').html('');
                $('#comment').html('');
                var height = $('#height').val();
                var weight = $('#weight').val();
                if(weight==''||height==''){
                    $('#comment').html('Yêu cầu nhập đủ 2 phần chiều cao và cân nặng');
                    return;
                }
                if (weight==0){
                    $('#result').html('Không tính toán được');
                    $('#comment').html('Yêu cầu bạn nhập đúng thông tin');
                    return;
                }

                var bmi = weight / (height * height) * 10000;
                bmi = bmi.toFixed(2);
                var comment;
                if ( bmi < 16.9){
                    comment = 'Quá gầy';
                }
                if ( bmi>17 && bmi<18.4){
                    comment = 'Bạn có vẻ hơi gầy. Cần chú ý ăn uống và tập thể thao đều đặn';
                }
                if ( bmi>18.5 && bmi<24.9){
                    comment = 'Bạn có 1 cơ thể bình thường. Chúc mừng nhé';
                }
                if ( bmi>25 && bmi<29.9){
                    comment = 'Bạn hơi tăng cân rồi đó nha!!!';
                }
                if ( bmi>30 && bmi<34.9){
                    comment = 'Béo phì cấp độ 1';
                }
                if ( bmi>35 && bmi<40){
                    comment = 'Béo phì cấp độ 2';
                }
                if ( bmi>40){
                    comment = 'Béo phì cấp độ 3';
                }
                $('#result').html(bmi);
                $('#comment').html(comment);
            });
            $('#reset').click(function(){
                $('#result').html('');
                $('#comment').html('');
            });
        });
    </script>


    <!-- Discount Start -->
    <div class="discount " data-wow-delay="0.1s" style="margin-bottom: 90px;">
        <div class="container">
            <div class="section-header text-center">
                <h2><span>Thông tin về chỉ số BMI</span></h2>
            </div>
            <div class="container discount-text">
                <p align="left"><strong>
                    BMI (Body mass Index) là chỉ số được tính từ chiều cao và cân nặng, là một chỉ số đáng tin cậy về sự mập ốm của một người.
                </strong></p>
                <p align="left">
                    BMI không đo lường trực tiếp mỡ của cơ thể nhưng các nghiên cứu đã chứng minh rằng BMI tương quan với đo mỡ trực tiếp. BMI là phương pháp không tốn kém và dễ thực hiện để tầm soát vấn đề sức khoẻ.
                </p>
                <p align="left"><strong>
                    1. Sử dụng BMI như thế nào?
                </strong></p>
                <p align="left">
                    BMI được sử dụng như là một công cụ tầm soát để xác định trọng lượng thích hợp cho người lớn. Tuy nhiên, BMI không phải là công cụ chẩn đoán. Ví dụ, một người có chỉ số BMI cao, để xác định trọng lượng có phải là một nguy cơ cho sức khoẻ không thì các bác sĩ cần thực hiện thêm các đánh giá khác. Những đánh giá này gồm đo độ dày nếp da, đánh giá chế độ ăn, hoạt động thể lực, tiền sử gia đình và các sàng lọc sức khoẻ khác.
                </p>
                <p align="left"><strong>
                    2. Tại sao Cơ quan kiểm soát bệnh tật Hoa Kỳ - CDC sử dụng BMI để xác định sự thừa cân và béo phì?
                </strong></p>
                <p align="left">
                    Tính chỉ số BMI là một phương pháp tốt nhất để đánh giá thừa cân và béo phì cho một quần thể dân chúng. Để tính chỉ số BMI, người ta chỉ yêu cầu đo chiều cao và cân nặng, không tốn kém và dễ thực hiện. Sử dụng chỉ số BMI cho phép người ta so sánh tình trạng cân nặng của họ với quần thể nói chung. Công thức tính BMI theo đơn vị kilograms và mét (xem cách tính dưới đây)
                </p>
                <h3 align="left"><strong>
                    Cách tính và đánh giá chỉ số BMI như thế nào?
                </strong></h3>
                <p >
                    <img src="<?php echo SITE_ROOT ?>/Layout/images/chi-so-bmi-do-can-nang-chieu-cao.jpg" style="width: 100%">
                </p>
                <p align="left"><strong>
                   - Cách đánh giá chỉ số BMI
               </strong></p>
               <p align="left">
                Đối với người lớn từ 20 tuổi trở lên, Sử dụng bảng phân loại chuẩn cho cả nam và nữ để đánh giá chỉ số BMI.
            </p>
            <p >
                - BMI <16: Gầy độ III
            </p>
            <p>
                - 16 ≤ BMI <17: Gầy độ II
            </p>
            <p>
                - 17 ≤ BMI <18.5: Gầy độ I
            </p>
            <p>
                - 18.5 ≤ BMI <25: Bình thường
            </p>
            <p>- 25 ≤ BMI <30: Thừa cân</p>
            <p>- 30 ≤ BMI 35: Béo phì độ 1</p>
            <p>- 35 ≤ BMI <40: Béo phì độ II</p>
            <p>- BMI >40: Béo phì độ III</p>
        </div>
    </div>
</div>
<!-- Discount End -->



<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo SITE_ROOT?>/Layout/front_end_layout/lib/easing/easing.min.js"></script>
<script src="<?php echo SITE_ROOT?>/Layout/front_end_layout/lib/wow/wow.min.js"></script>
<script src="<?php echo SITE_ROOT?>/Layout/front_end_layout/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?php echo SITE_ROOT?>/Layout/front_end_layout/lib/isotope/isotope.pkgd.min.js"></script>
<script src="<?php echo SITE_ROOT?>/Layout/front_end_layout/lib/lightbox/js/lightbox.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="<?php echo SITE_ROOT?>/Layout/front_end_layout/js/main.js"></script>
</body>
</html>
