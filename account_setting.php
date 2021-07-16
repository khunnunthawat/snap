<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- link -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>CANGPHAPA SNAP</title>
    <!-- css -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
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
    <div class="wrapper">
        <?php
            require_once("header.php");
            require_once('./db/db_connect.php');

            if (isset($_SESSION['id'])) {
                $sql = "SELECT * FROM `user` WHERE id = '".$_SESSION['id']."'";
                $result = mysqli_query($connect, $sql);
                $row = mysqli_fetch_array($result);
                $avatar = $row['avatar'];
                $name_surname = $row['name_surname'];
                $id_passport_number = $row['id_passport_number'];
                $birthday = $row['birthday'];
                $phone = $row['phone'];
                $submit = 'edit';
            } else {
                $avatar = 'profile/profile_upload.jpg';
                $name_surname = '';
                $id_passport_number = '';
                $birthday = '';
                $phone = '';
                $submit = 'add';
            }
        ?>
        <form action="" style="background-color: #f0f8ff;">
            <!----- account setting ------>
            <div class="container">
                <div class="ac-setting">
                    <div class="account_setting">
                        <h2>ตั้งค่าบัญชี</h2>
                    </div>
                    <div class="row">
                        <!-- กล่องซ้าย -->
                        <div class="col-lg-3" style="margin-top: 15px;">
                            <div class="menu-left">
                                <div class="menu-bg">
                                    <div class="menu-list">
                                        <div class="userpage-sidebar-menu">
                                            <div class="stardust-dropdown">
                                                <div class="stardust-dropdown__item-header">
                                                    <a class="userpage-sidebar-menu-entry" href="order_booking.php">
                                                        <div class="userpage-sidebar-menu-entry__text">การจองของฉัน</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="stardust-dropdown">
                                                <div class="stardust-dropdown__item-header">
                                                    <a class="userpage-sidebar-menu-entry" href="user_profile.php">
                                                        <div class="userpage-sidebar-menu-entry__text">โปรไฟล์</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="stardust-dropdown">
                                                <div class="stardust-dropdown__item-header">
                                                    <a class="userpage-sidebar-menu-entry" href="account_setting.php">
                                                        <div class="userpage-sidebar-menu-entry__text">บัญชีของฉัน</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="stardust-dropdown">
                                                <div class="stardust-dropdown__item-header">
                                                    <a class="userpage-sidebar-menu-entry" href="#">
                                                        <div class="userpage-sidebar-menu-entry__text">ข้อมูลส่วนตัว</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="stardust-dropdown">
                                                <div class="stardust-dropdown__item-header">
                                                    <a class="userpage-sidebar-menu-entry" href="#">
                                                        <div class="userpage-sidebar-menu-entry__text">บัตรประชาชน</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- กล่องขวา -->
                        <div class="col-lg-9" style="margin-top: 15px;">
                            <div class="info-right">
                                <div class="menu-bg">
                                    
                                    

                                </div>
                                <!-- menu-bg -->

                            </div>

                        </div>
                    </div>
                    <!-- row -->
                </div>
            </div>
        </form>
        
        

    </div>
    <!-- end wrapper -->

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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="js/bootstrap.min.js" ></script>

    <script>
        $( document ).ready(function() {
            $('#up-photo').on('click', function() {
                $('#file-input').trigger('click');
            });

            $("#file-input").change(function(){
                readURL(this);
            });
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#avatar').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
       
    </script>


</body>
</html>