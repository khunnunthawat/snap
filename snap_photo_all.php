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
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

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
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
</head>
<style>
    .show-profile {
        width: 100%;
        margin: 0 auto;
} ;
</style>
<body>
    <div class="wrapper">
        <?php
            require_once("header.php");
            require_once('./db/db_connect.php');

            if(isset($_POST['form_search'])) {
                $_SESSION['date'] = $_POST['datepicker'];
                $_SESSION['type_job'] = $_POST['type_job'];
                $_SESSION['province'] = $_POST['province'];
                $_SESSION['id_photographer'] = $_POST['id_photographer'];
                $_SESSION['start_price'] = $_POST['start_price'];
                $_SESSION['end_price'] = $_POST['end_price'];
            }
            
            if (isset($_SESSION['id_photographer'])) {
                $sql = "SELECT u.avatar, p.Starting_wage, p.Highest_wage, p.province, 
                p.username, u.status, u.created_at, t.name as Job_type, p.verify FROM user u 
                INNER JOIN Photographers p ON u.id = p.user_id
                INNER JOIN photographer_type_job pt ON pt.id_photographer = p.id 
                INNER JOIN type_job t ON t.id = pt.id_type_job
                WHERE u.id = '".$_SESSION['id_photographer']."'";
                $result = mysqli_query($connect, $sql);
                $count_row = mysqli_num_rows($result);

                $Job_type = "";
                $i = 0;
                while($row = mysqli_fetch_array($result)){
                    $i++;
                    
                    $Job_type .= $row['Job_type'];
                    if($i<$count_row) {
                        $Job_type .= ", ";
                    }
                    
                    $avatar = $row['avatar'];
                    
                    $Starting_wage = $row['Starting_wage'];
                    $Highest_wage = $row['Highest_wage'];
                    $province = $row['province'];
                    $username = $row['username'];
                    $status = $row['status'];
                    $created_at = $row['created_at'];
                    $verify = $row['verify'];
                }
                
            } else if (isset($_SESSION['id'])){
                $sql = "SELECT u.avatar, p.Starting_wage, p.Highest_wage, p.province, 
                p.username, u.status, u.created_at, t.name as Job_type, p.verify FROM user u 
                INNER JOIN Photographers p ON u.id = p.user_id
                INNER JOIN photographer_type_job pt ON pt.id_photographer = p.id 
                INNER JOIN type_job t ON t.id = pt.id_type_job
                WHERE u.id = '".$_SESSION['id']."'";
                $result = mysqli_query($connect, $sql);
                $count_row = mysqli_num_rows($result);

                $Job_type = "";
                $i = 0;
                while($row = mysqli_fetch_array($result)){
                    $i++;
                    
                    $Job_type .= $row['Job_type'];
                    if($i<$count_row) {
                        $Job_type .= ", ";
                    }
                    
                    $avatar = $row['avatar'];
                    
                    $Starting_wage = $row['Starting_wage'];
                    $Highest_wage = $row['Highest_wage'];
                    $province = $row['province'];
                    $username = $row['username'];
                    $status = $row['status'];
                    $created_at = $row['created_at'];
                    $verify = $row['verify'];
                }
            } else {
                $avatar = 'profile/profile_photographer.jpg';
                $avatar = '';
                $Job_type = '';
                $Starting_wage = '';
                $Highest_wage = '';
                $province = '';
                $username = '';
                $status = '';
                $created_at = '';
            }
        ?>
        <!----- profile-photographer ----->
        <div class="profile-photographer-bg">
            <div class="row" align="center" style="width: 100%; max-width: 1200px; margin: 0 auto;">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" >
                    <div class="avatar-photographer-box">
                        <div class="avatar-photo" style="width:150px;height:150px;">
                            <img src="img/<?php echo $avatar; ?>" alt="">
                        </div>
                        <div class="follow">
                            <h5>ผู้ติดตาม x คน</h5>
                            <h5>ถ่ายแล้ว x งาน</h5>
                        </div>
                        <div class="stars-info-photographer" style="margin-top: 5px;">
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-left: -140px;">
                    <div class="row">
                        <h1 class="title" style="color: #057ADF;"><?php=$username?></h1>
                        <div class="box-btn-profile">
                            <a class="btn-profile-edit" href="snap_input.php?status=<?php=$status?>"
                            style="font-size: 20px; margin-left: 29px; margin-right: 29px;">Edit Profile</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="verified">
                            <h3><img src="img/icons/verified.svg" alt="">Verified</h3>
                        </div>
                        <div class="date-register-show" style="margin-top: 5px;">
                            <a style="color:#9D9D9D;" > เป็นสมาชิกเมื่อวันที่ : <?php echo $created_at; ?> </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="detail-info-photographer" style="margin-top: 5px;">
                            <h4> ประเภทงาน : <?php echo $Job_type; ?></h4>
                            <h4> พื้นที่ : <?php echo $province; ?></h4>
                            <h4> ค่าบริการเริ่มต้น : <?php echo $Starting_wage; ?></h4>
                            <h4> ค่าบริการสูงสุด : <?php echo $Highest_wage; ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!----- profile-photographer ----->

        <div class="container" align="center">
            
            <!-- ตารางงาน -->
            <div class="snap_calendar">
                <div class="snap_calendar_works">
                    <h3>ตารางงาน</h3>
                </div>
                <div class="row row-striped">
                    <div class="col-3">
                        <h4 class="display-4"><span class="badge badge-secondary">18</span></h4>
                        <h3>มีนา 2020</h3>
                    </div>
                    <div class="col-9">
                        <h3 class="text-uppercase"><strong style="font-weight: 500;">งานรับปริญญา นอกรอบ ครึ่งวัน</strong></h3>
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> จันทร์</li>
                            <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> 12:30 PM - 2:00 PM</li>
                        </ul>
                    </div>
                </div>
                <div class="row row-striped">
			        <div class="col-3">
				        <h1 class="display-4"><span class="badge badge-secondary">18</span></h1>
				        <h3>มีนา 2020</h3>
			        </div>
			        <div class="col-9">
				        <h3 class="text-uppercase"><strong style="font-weight: 500;">งานอีเว้นท์ ปาตี้วันเกิด</strong></h3>
				        <ul class="list-inline">
				            <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> ศุกร์</li>
					        <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> 2:30 PM - 4:00 PM</li>
				        </ul>
			        </div>
		        </div>
            </div>
            
            <!-- booking form search -->
            <div class="search-package">
                        
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                        <?php
                            $sql_reserve_package = "select * from reserve_package where photographer_id = '".$_SESSION['id_photographer']."'
                            ";
                            $result_reserve_package = mysqli_query($connect, $sql_reserve_package);
                            while($row = mysqli_fetch_array($result_reserve_package)){
                                    echo '<p>มีงานช่วง : '.$row['time_start'].' - </p>';
                            }
                        ?>
                    </div>
                </div>
            </div>
            <!-- booking form search -->

            <!-- menu -->
            <div class="profile-menu">
                <div class="profile-menu-container" style="width: auto;" role="tablist">
                    <div class="profile-menu-item-container">
                        <a class="profile-menu-item" data-toggle="tab" href="#package" role="tab" aria-selected="true">
                            <i class="fas fa-layer-group" style="margin-right: 10px;"></i>ประเภทงาน
                        </a>
                    </div>
                    <div class="profile-menu-item-container">
                        <a class="profile-menu-item" data-toggle="tab" href="#image_all" role="tab" aria-selected="false">
                            <i class="fas fa-images" style="margin-right: 10px;"></i>ผลงานทั้งหมด
                        </a>
                    </div>
                </div>
            </div>
            <!-- menu -->
            
            <!-- ablum all
            <img src="img/photo/IMG_3837.JPG" alt=""> -->
            <div class="album-all">
                <div class="gallery-container">
                    <div class="tz-gallery">
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <a class="lightbox" href="img/photo/IFAL-0570.JPG">
                                    <img src="img/photo/IFAL-0570.JPG" alt="">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <a class="lightbox" href="img/photo/IFAL-3787.JPG">
                                    <img src="img/photo/IFAL-3787.JPG" alt="">
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a class="lightbox" href="img/photo/IMG_7358.jpg">
                                    <img src="img/photo/IMG_7358.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a class="lightbox" href="img/photo/IMG_3383.JPG">
                                    <img src="img/photo/IMG_3383.JPG" alt="">
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a class="lightbox" href="img/photo/IFAL-7467.jpg">
                                    <img src="img/photo/IFAL-7467.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a class="lightbox" href="img/photo/IFAL-2823.JPG">
                                    <img src="img/photo/IFAL-2823.JPG" alt="">
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a class="lightbox" href="img/photo/IFAL-1987.jpg">
                                    <img src="img/photo/IFAL-1987.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a class="lightbox" href="img/photo/IFAL-7234.jpg">
                                    <img src="img/photo/IFAL-7234.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a class="lightbox" href="img/photo/IFAL-6543.JPG">
                                    <img src="img/photo/IFAL-6543.JPG" alt="">
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a class="lightbox" href="img/photo/IMG_3510.JPG">
                                    <img src="img/photo/IMG_3510.JPG" alt="">
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a class="lightbox" href="img/photo/IMG_0556.JPG">
                                    <img src="img/photo/IMG_0556.JPG" alt="">
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a class="lightbox" href="img/photo/IMG_7413.jpg">
                                    <img src="img/photo/IMG_7413.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a class="lightbox" href="img/photo/IFAL-5436.JPG">
                                    <img src="img/photo/IFAL-5436.JPG" alt="">
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a class="lightbox" href="img/photo/IMG_3146.JPG">
                                    <img src="img/photo/IMG_3146.JPG" alt="">
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a class="lightbox" href="img/photo/IMG_0587.jpg">
                                    <img src="img/photo/IMG_0587.jpg" alt="">
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- ablum all -->

            






        </div>
        <!-- container -->
            





    </div>
    <!---------- wrapper ---------->

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
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');
    </script>  
    
    <!-- ---------------------------------->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/bootstrap.min.js" ></script>
    <!-- ---------------------------------->

</body>
</html>