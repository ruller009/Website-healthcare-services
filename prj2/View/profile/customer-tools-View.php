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
  <style type="text/css">
    .page-content{
      margin-top: 35px;
    }
  </style>
</head>
<body id="top">

  <div class="page-content">
    <div id="content">
      <div class="cover bg-light">
        <div class="container pt-2 pb-4 px-3">
          <div class="row">
            <div class="col-lg-6"><img class="img-fluid" src="<?php echo SITE_ROOT?>/Layout/profile_layout/images/superfolio_hello.svg" width="532" height="442" alt="hello"/></div>
            <div class="col-lg-6">
              <div class="mt-5">
                <h1 class="intro-title marker" data-aos="fade-left" data-aos-delay="50">This is your tools</h1>
                <div class="mt-3" data-aos="fade-up" data-aos-delay="200"><a class="btn btn-primary shadow-sm mt-1" href="#contact">Xem ghi chú</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="portolio-section px-3 px-lg-4 mt-5">
        <div class="container">
          <div class="text-center mb-5">
            <h2 class="marker marker-center">Các chức năng</h2>
          </div>
          <div class="grid pb-3" data-aos="zoom-in" data-aos-delay="100">
            <div class="grid-sizer"></div>





            <div class="grid-item"><a href="http://localhost/prj2/Customer/BMI">
              <figure class="portfolio-item"><img src="<?php echo SITE_ROOT?>/Layout/profile_layout/images/portfolio/folio7.png"/>
                <figcaption>
                  <h4>Tính BMI</h4>

                </figcaption>
              </figure></a></div>

              <div class="grid-item"><a href="http://localhost/prj2/Customer/calorieCalculator">
                <figure class="portfolio-item"><img src="<?php echo SITE_ROOT?>/Layout/profile_layout/images/portfolio/folio7.png"/>
                  <figcaption>
                    <h4>Tính Calories cần cho cơ thể</h4>
                  </figcaption>
                </figure></a></div>

                <div class="grid-item"><a href="http://localhost/prj2/Customer/sendmail">
                  <figure class="portfolio-item"><img src="<?php echo SITE_ROOT?>/Layout/profile_layout/images/portfolio/folio7.png"/>
                    <figcaption>
                      <h4>Đặt câu hỏi cho nhân viên

                        </h4>
                    </figcaption>
                  </figure></a></div>

                </div>
              </div>
            </div>

            <div class="contant-section px-3 px-lg-4 pb-4 mt-5 mb-5" id="contact">
              <div class="container-narrow">
                <div class="text-center mb-5">
                  <h2 class="marker marker-center">Ghi Chú</h2>
                </div>
                <div class="row">
                  <div class="col-md-6" data-aos="zoom-in" data-aos-delay="100">
                  </div>
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
                  <div class="mt-3">
                   <div class="mt-3" data-aos="fade-up" data-aos-delay="200">
                    <a href="https://localhost/prj2/Customer/note" class="btn btn-primary shadow-sm mt-1"  id="btnNote-update" style="color: black">Chỉnh sửa</a>
                  </div><br><br><br>
                  <div class="h5"><h2>Ghi lại những ghi chú của bạn ở đây</h2></div><br>
                  <div class="note">
                    <p><b style="font-size: 30px; color: orange"><?php echo $data['infor']['note']; ?></b></p>
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
      <script src="<?php echo SITE_ROOT?>/Layout/profile_layout/scripts/bootstrap.bundle.min.js?ver=1.0.1"></script>
      <script src="<?php echo SITE_ROOT?>/Layout/profile_layout/scripts/aos.js?ver=1.0.1"></script>
      <script src="<?php echo SITE_ROOT?>/Layout/profile_layout/scripts/main.js?ver=1.0.1"></script>
    </body>
    </html>