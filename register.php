<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head> <!-- link -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>CANGPHAPA SNAP</title>
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <script src="https://kit.fontawesome.com/c3d7626d0f.js" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="stylesheet" href="fonts/DB Adman X Bd.ttf">
    <link rel="stylesheet" href="fonts/DB Adman X Bd.ttf">
    <link rel="stylesheet" href="fonts/DB Adman X.ttf">
    <link rel="stylesheet" href="fonts/DB Adman X Italic.ttf">
    <link rel="stylesheet" href="fonts/DB Adman X Li It.ttf">
    <link rel="stylesheet" href="fonts/DB Adman X Li.ttf">
    <link rel="stylesheet" href="fonts/DB Adman X UltraLi.ttf">
    <link rel="stylesheet" href="fonts/DB Adman X UltraLiIt.ttf">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>

<body>
    <!---------- Header Section ---------->
    <div class="wrapper">

        <?php
            require_once("header.php");
        ?>
        <div class="bg_register" style="max-width: 100%;">
            <div class=row>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="single_bg d-flex align-items-center slider_bg_2">
                        <div class="register-input">
                            <div class="icon-register">
                                <i class="fas fa-user-circle"></i>
                            </div>
                        <div class="text-register">
                            <h5 class="card-header info-color white-text text-center py-4" style="margin-top: -25px;">
                                <strong>สมัครสมาชิก</strong>
                            </h5>
                        </div>
                        <!--Card content-->
                        <div class="card-body px-lg-5 pt-0">
                        <!---------- Form ---------->
                        <!-- ส่งข้อมูลด้วย POST เข้าไปใน db/register.php -->
                        <form class="text-center" style="color: #757575;" action="./db/register.php" method="POST">
                            <!-- Email -->
                            <div class="md-form" style="margin-top: 10px;">
                                <input type="email" id="materialLoginFormEmail" name="email" class="form-control-1" 
                                placeholder="อีเมล" required>
                            </div>

                            <!-- Password -->
                            <div class="md-form" style="margin-top: 10px;">
                                <input type="password" id="materialLoginFormPassword" name="password"  class="form-control-1" 
                                placeholder="รหัสผ่าน" required>
                            </div>
                            <div class="md-form" style="margin-top: 10px;">
                                <input type="password" id="materialLoginFormPassword" name="confirm_password"  class="form-control-1" 
                                placeholder="ยืนยันรหัสผ่าน" required>
                            </div>

                            <!-- สมัครสมาชิก -->
                            <button id="btn-login" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" 
                            type="submit";>ยืนยันสมัครสมาชิก</button>

                            <!-- Register -->
                            <p style=" font-size: 18px;">ท่านเป็นสมาชิกอยู่แล้วหรือไม่ ?
                                <a href="login.php">เข้าสู่ระบบ</a>
                            </p>
                        </form>
                        <!----------Form End ---------->
                    </div>
                </div> <!-- register -->
            </div> <!-- single_bg -->
        </div>
    </div><!----------wrapper ---------->

    <!---------- Footer ---------->    
    <footer class="footer-bs">
        <div class="row">
        	<div class="col-md-4 footer-brand animated fadeInLeft">
            	<a href="./index.php"><img src="img/logo/snap_logo_white.svg"></a>
                <h2>ช่างภาพ สแนพ</h2>
                <h4>แหล่งรวมช่างภาพมืออาชีพ</h4>
                <h4>ค้นหาง่ายในไม่กี่นาที จองง่าย เชื่อถือได้</h4>
                <h4>ผ่านการรับรองจากเราแล้ว</h4>
            </div>
        	<div class="col-md-4 footer-nav animated fadeInUp">
            	<h4>เมนูหลัก</h4>
            	<div class="col-md-6">
                    <ul class="pages">
                        <li><a href="./index.php">ค้นหาช่างภาพ</a></li>
                        <li><a href="./changphapa_snap_about.php">ทำไมต้องเป็นช่างภาพสแนพ?</a></li>
                        <li><a href="./graduation_calendar.php">ปฏิทินกำหนดวันรับปริญญามหาลัยในไทย</a></li>
                    </ul>
                </div>
            	<div class="col-md-6">
                    <ul class="list">
                        <li><a href="#">เกี่ยวกับเรา</a></li>
                        <li><a href="#">ช่องทางการติดต่อ</a></li>
                        <li><a href="#">วิธีใช้งาน</a></li>
                    </ul>
                </div>
            </div>
        	<div class="col-md-4">
            	<h4>ค้นหาโปรไฟล์ช่างภาพ</h4>
                    <div class="search">
                        <div class="input-group">
                            <i class="material-icons" id="photo_camera" style="font-size: 25px;">photo_camera</i>
                            <input type="text" class="searchTerm" placeholder="ค้นหาช่างภาพ...">
                        </div>
                    </div>
            </div>
        </div>
    </footer>
    <!---------- Footer ---------->

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/bootstrap.min.js" ></script>
    
</body>
</html>