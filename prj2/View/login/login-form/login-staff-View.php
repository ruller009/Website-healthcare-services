<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo SITE_ROOT ?>/View/login/login-form/fonts/icomoon/style.css">

  <link rel="stylesheet" href="<?php echo SITE_ROOT ?>/View/login/login-form/css/owl.carousel.min.css">

  

  <!-- Style -->
  <link rel="stylesheet" href="<?php echo SITE_ROOT ?>/View/login/login-form/css/style.css">

  <title>Login #10</title>
</head>
<body>



  <div class="content">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-5 contents">
          <div class="form-block">
            <div class="mb-4">
              <h3><strong>LOG IN</strong></h3>
            </div>
            <form action="https://localhost/prj2/Login_Signup/Login_staff_solution" method="post" onsubmit="return Check()">
              <div class="form-group first">
                <input type="text" class="form-control" name="username" placeholder="username" id="username">
                <div id="user-warn" style="color: red"></div>
                

              </div>
              <div class="form-group last mb-4">
                <input type="password" class="form-control" name="password" placeholder="password" id="password">
                <div id="password-warn" style="color: red"></div>

              </div>

              <div class="d-flex mb-5 align-items-center">

                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div>

              <input type="submit" value="Log In" name="btnLogin" class="btn btn-pill text-white btn-block btn-primary"><br>
              <div style="color: red"><?php if(isset($data['failed'])){
                echo $data['failed'];
              } ?></div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $('#username').blur(function(){
      var username = $('#username').val();
      var regexUsername = /^([a-zA-Z]{1})([a-zA-Z0-9_]){5,15}$/;
      if (username==''){
        $('#user-warn').html('Không được để trống username');
      }else if (regexUsername.test(username)==false){
        $('#user-warn').html('username không đúng định dạng');
      }else{
        $('#user-warn').html('');
      }
    });


    $('#password').blur(function(){
      var password = $('#password').val();
      var regexPassword = /^[A-Za-z0-9]{6,16}$/;
      if (password==''){
        $('#password-warn').html('không được để trống password');
      }else if (regexPassword.test(password)==false){
        $('#password-warn').html('password sai định dạng');
      }else{
        $('#password-warn').html('');
      }
    });

    function Check(){
      var username = $('#username').val();
      var password = $('#password').val();
      var regexUsername = /^([a-zA-Z]{1})([a-zA-Z0-9_]){5,15}$/;
      var regexPassword = /^[A-Za-z0-9]{6,16}$/;

      if (username == ''||password == ''){
        return false;
        return;
      }
      var checkUsername = regexUsername.test(username);
      var checkPassword = regexPassword.test(password);


      if (checkUsername&&checkPassword){
        return true;
      }else{
        return false;
      }
    }

  </script>

  
  <script src="<?php echo SITE_ROOT ?>/View/login/login-form/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo SITE_ROOT ?>/View/login/login-form/js/popper.min.js"></script>
  <script src="<?php echo SITE_ROOT ?>/View/login/login-form/js/bootstrap.min.js"></script>
</body>
</html>