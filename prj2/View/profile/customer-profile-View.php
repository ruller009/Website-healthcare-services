<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
  <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Open+Sans:wght@300;400;600;700&amp;display=swap"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Open+Sans:wght@300;400;600;700&amp;display=swap" media="print" onload="this.media='all'"/>
  <noscript>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Open+Sans:wght@300;400;600;700&amp;display=swap"/>
  </noscript>
  <link href="<?php echo SITE_ROOT?>/Layout/profile_layout/css/font-awesome/css/all.min.css?ver=1.0.1" rel="stylesheet">
  <link href="<?php echo SITE_ROOT?>/Layout/profile_layout/css/aos.css?ver=1.0.1" rel="stylesheet">
  <link href="<?php echo SITE_ROOT?>/Layout/profile_layout/css/main.css?ver=1.0.1" rel="stylesheet">
  <noscript>
    <style type="text/css">
      [data-aos] {
        opacity: 1 !important;
        transform: translate(0) scale(1) !important;
      }
    </style>
  </noscript>
</head>
<body id="top">

  <div class="page-content">
    <div id="content">
      <div class="cover bg-light">
        <div class="container pt-2 pb-4 px-3">
          <div class="row">
            <div class="col-lg-6"><img class="img-fluid" src="<?php echo SITE_ROOT?>/Layout/profile_layout/images/superfolio_hello.svg" width="532" height="442" alt="hello"/>
            </div>
            <div class="col-lg-6">
              <div class="mt-5">
                <p class="lead text-uppercase mb-1">Hello!</p>
                <h1 class="intro-title marker" data-aos="fade-left" data-aos-delay="50">This is your profile</h1>
                <p class="lead fw-normal mt-3" data-aos="fade-up" data-aos-delay="100">Bệnh viện chăm sóc sức khỏe Ruller</p>
                <div class="mt-3" data-aos="fade-up" data-aos-delay="200">
                  <a class="btn btn-primary shadow-sm mt-1" href="#contact">Show More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="about-section pt-4 px-3 px-lg-4">
        <div class="container-narrow">
          <div class="row">
            <div class="col-md-6">
              <h2 class="h4 my-2">Description</h2>
              <h6 class="h4 my-2">Mô tả bản thân:</h6>
              <div class="mt-3" data-aos="fade-up" data-aos-delay="200">
                <a class="btn btn-primary shadow-sm mt-1" href="https://localhost/prj2/Customer/customiseProfile">Chỉnh sửa</a>
              </div><br><br><br>

              <div class="row mt-3">
                <div class="col-sm-2">
                  <div class="pb-1">Họ và tên:</div>
                </div>
                <div class="col-sm-10">
                  <div class="pb-1 fw-bolder"><?php echo $data['infor']['customer_name']; ?></div>
                </div>

                <div class="col-sm-2">
                  <div class="pb-1">Date of birth:</div>
                </div>
                <div class="col-sm-10">
                  <div class="pb-1 fw-bolder"><?php echo $data['infor']['date_of_birth']; ?></div>
                </div>
                <div class="col-sm-2">
                  <div class="pb-1">Email:</div>
                </div>
                <div class="col-sm-10">
                  <div class="pb-1 fw-bolder"><?php echo $data['infor']['email']; ?></div>
                </div>
                <div class="col-sm-2">
                  <div class="pb-1">Facebook:</div>
                </div>
                <div class="col-sm-10">
                  <div class="pb-1 fw-bolder"><?php echo $data['infor']['facebook']; ?></div>
                </div>
                <div class="col-sm-2">
                  <div class="pb-1">Phone:</div>
                </div>
                <div class="col-sm-10">
                  <div class="pb-1 fw-bolder"><?php echo $data['infor']['phone']; ?></div>
                </div>
                <div class="col-sm-2">
                  <div class="pb-1">Address:</div>
                </div>
                <div class="col-sm-10">
                  <div class="pb-1 fw-bolder"><?php echo $data['infor']['address']; ?></div>
                </div>
                <div class="col-sm-2">
                  <div class="pb-1">Career</div>
                </div>
                <div class="col-sm-10">
                  <div class="pb-1 fw-bolder"><?php echo $data['infor']['career']; ?></div>
                </div>
                <div class="col-sm-2">
                  <div class="pb-1">Quốc tịch</div>
                </div>
                <div class="col-sm-10">
                  <div class="pb-1 fw-bolder"><?php echo $data['infor']['nationality']; ?></div>
                </div>
              </div>
            </div>
            <div class="col-md-5 offset-md-1"><img class="avatar img-fluid mt-2" <?php echo $data['infor']['img_profile']; ?>></div>
          </div>
        </div>
      </div>





      <div class="contant-section px-3 px-lg-4 pb-4 mt-5 mb-5" id="contact">
        <div class="container-narrow">
          <div class="text-center mb-5">
            <h2 class="marker marker-center">Chi tiết</h2>
          </div>
          <div class="row">
            <div class="col-md-6" data-aos="zoom-in" data-aos-delay="100">
            </div>
          </div>
          <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
            <div class="mt-3">
              <div class="h5">Thông tin quan trọng của bạn</div>
              <p>Giữ chúng được an toàn tránh người khác nhìn thấy </p>
            </div>
            <div class="mt-5">
              <div class="row"> 
                <div class="col-sm-2">
                  <div class="pb-1">Password:</div>
                </div>
                <div class="col-sm-10">
                  <div class="pb-1 fw-bolder"><?php echo $data['infor']['password']; ?></div>
                </div>

                <div>
                  <a href="" class="btn btn-danger">Thay mật khẩu</a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div></div>
  </div>
  <script src="<?php echo SITE_ROOT?>/Layout/profile_layout/scripts/jquery.min.js?ver=1.0.1"></script>
  <script src="<?php echo SITE_ROOT?>/Layout/profile_layout/scripts/imagesloaded.pkgd.min.js?ver=1.0.1"></script>
  <script src="<?php echo SITE_ROOT?>/Layout/profile_layout/scripts/masonry.pkgd.min.js?ver=1.0.1"></script>
  <script src="<?php echo SITE_ROOT?>/Layout/profile_layout/scripts/aos.js?ver=1.0.1"></script>
  <script src="<?php echo SITE_ROOT?>/Layout/profile_layout/scripts/main.js?ver=1.0.1"></script>
</body>
</html>