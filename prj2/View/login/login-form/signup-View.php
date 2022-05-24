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
              <h3>Register</h3>
            </div>
            <form action="https://localhost/prj2/Login_Signup/Signup_Solution" method="post" onsubmit="return Check()">
              <div class="form-group first">
                <input type="text" class="form-control" id="username" name="username"  placeholder="username">
                <div id="user-warn" style="color: red"></div>
              </div>
              
              <div class="form-group last mb-4">
                <input type="text" class="form-control" name="name" placeholder="Họ và tên" id="name">
                <div id="name-warn" style="color: red"></div>
              </div>


              <div class="form-group last mb-4">
                <input type="password" class="form-control" name="password" placeholder="password" id="password">
                <div id="password-warn" style="color: red"></div>
              </div>

              <div class="form-group last mb-4">
                <input type="password" class="form-control"  placeholder="check password" id="confirm">
                <div id="confirm-warn" style="color: red"></div>
              </div>
              
              <div class="form-group last mb-4">
                <input type="date" class="form-control" name="date-of-birth"  placeholder="date of birth" id="date-of-birth">
              </div>

              <div class="form-group last mb-4">
                <input type="text" class="form-control" name="address" placeholder="address" id="address">
                <div id="address-warn" style="color: red"></div>
              </div>

              <div class="form-group last mb-4">
                <input type="text" class="form-control" name="phone" placeholder="phone number" id="phone">
                <div id="phone-warn" style="color: red"></div>
              </div>

              <div class="form-group last mb-4">
                <input type="text" class="form-control" name="email"  placeholder="email" id="email">
                <div id="email-warn" style="color: red"></div>
              </div>

              <div class="form-group last mb-4">
                <input type="text" class="form-control" name="nation"  placeholder="nationality" id="nation">
                <div id="nation-warn" style="color: red"></div>
              </div>



              <div class="d-flex mb-5 align-items-center">
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div>


              <input type="submit" value="Register" class="btn btn-pill text-white btn-block btn-primary" name="btnRegister">


            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">

    $( function(){
      $('#username').keyup(function(){
        var user_warn = $('#username').val();
        $.post('https://localhost/prj2/Ajax/checkUser', {warn: user_warn},function(data){
          $('#user-warn').html(data);
        })        
      });
    });


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

    $('#name').blur(function(){
      var name = $('#name').val();
      if (name==''){
        $('#name-warn').html('Không được để trống Họ và tên');
      }else if (name.length<6){
        $('#name-warn').html('Họ và tên không đúng định dạng');
      }else{
        $('#name-warn').html('');
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

    $('#confirm').blur(function(){
      var password = $('#password').val();
      var confirm = $('#confirm').val();
      if (confirm==''){
        $('#confirm-warn').html('không được để trống confirm password');
      }else if (confirm!=password){
        $('#confirm-warn').html('mật khẩu không trùng khớp');
      }else{
        $('#confirm-warn').html('');
      }
    });

    $('#address').blur(function(){
      var address = $('#address').val();
      if (address==''){
        $('#address-warn').html('Không được để trống address');
      }else{
        $('#address-warn').html('');
      }
    });


    $('#phone').blur(function(){
      var phone = $('#phone').val();
      var regexPhone = /^[0-9]{10}$/;
      if (phone==''){
        $('#phone-warn').html('Không được để trống phone number');
      }else if (regexPhone.test(phone)==false){
        $('#phone-warn').html('phone number không đúng định dạng');
      }else{
        $('#phone-warn').html('');
      }
    });

    $('#email').blur(function(){
      var email = $('#email').val();
      var regexEmail =  /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

      if (email==''){
        $('#email-warn').html('Không được để trống email');
      }else if (regexEmail.test(email)==false){
        $('#email-warn').html('email không đúng định dạng');
      }else{
        $('#email-warn').html('');
      }
    });


    $('#nation').blur(function(){
      var nation = $('#nation').val();
      if (nation==''){
        $('#nation-warn').html('Không được để trống nationality');
      }else{
        $('#nation-warn').html('');
      }
    });


    function Check(){
      var username = $('#username').val();
      var name = $('#name').val();
      var password = $('#password').val();
      var confirm = $('#confirm').val();
      var phone = $('#phone').val();
      var email = $('#email').val();
      var address = $('#address').val();
      var nation = $('#nation').val();

      var regexUsername = /^([a-zA-Z]{1})([a-zA-Z0-9_]){5,15}$/;
      var regexPassword = /^[A-Za-z0-9]{6,16}$/;
      var regexPhone = /^[0-9]{10}$/;
      var regexEmail =  /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

      if (username == ''||name==''||password == ''||confirm==''||phone==''||address==''||nation==''){
        return false;
        return;
      }
      var checkUsername = regexUsername.test(username);
      var checkPassword = regexPassword.test(password);
      var checkPhone = regexPhone.test(phone);
      var checkEmail = regexEmail.test(email);


      if (confirm!=password){
        return false;
        return;
      }
      if (checkUsername&&checkPassword&&checkEmail&&checkPhone&&name.length>=6){
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