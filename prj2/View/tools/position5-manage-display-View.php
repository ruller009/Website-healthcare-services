<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table V02</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_ROOT?>/Layout/search_layout/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_ROOT?>/Layout/search_layout/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_ROOT?>/Layout/search_layout/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_ROOT?>/Layout/search_layout/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_ROOT?>/Layout/search_layout/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_ROOT?>/Layout/search_layout/css/main.css">
    <!--===============================================================================================-->
</head>
<body>
    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table">

                    <div class="row header" >
                        <div class="cell">
                            Name
                        </div>
                        <div class="cell">
                            Address
                        </div>
                        <div class="cell" align="center">
                            Phone
                        </div>
                        <div class="cell">
                            Position
                        </div>
                    </div>

                    <?php while($row = pg_fetch_array($data['show'])){
                        require('position5-unit-View.php');
                    } ?>

                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $( function(){
            $('#delete').click(function(){
                if (confirm('Bạn có muốn xóa không?')){

                }
                else{
                    return false;
                }
            });
            $('#key-search').keyup(function(){
                var staff_search = $('#key-search').val();
                $.post('https://localhost/prj2/Ajax/search_staff', {staff: staff_search}, function(data){
                    $('.table').html(data); 
                });       
            })
        })
    </script>




    <!--===============================================================================================-->  
    <script src="<?php echo SITE_ROOT?>/Layout/search_layout/vendor/jquery/jquery-3.2.1.min.js"></script>

    <!--===============================================================================================-->
    <script src="<?php echo SITE_ROOT?>/Layout/search_layout/vendor/bootstrap/js/popper.js"></script>
    <script src="<?php echo SITE_ROOT?>/Layout/search_layout/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo SITE_ROOT?>/Layout/search_layout/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo SITE_ROOT?>/Layout/search_layout/js/main.js"></script>

</body>
</html>