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
    <div class="wrapper">
        <?php
            require_once("header.php");
        ?>
        <!-- package title-->
        <!-- <div class="package-detail-title">
            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                <h3>รายละเอียดแพ็คเกจ</h3>
            </div>
        </div> --> 
        <!-- package title-->
  
        <div class="container" align=center>
            <!-- booking form search -->
            <div class="search-package">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="text-head-search">
                            <p class="booking">
                                <span>ประเภทงาน</span>
                            </p>
                            <p class="detail">
                                <span><?php echo $_SESSION['type_id']; ?></span>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="text-head-search">
                            <p class="booking">
                                <span>วัน เวลา</span>
                            </p>
                            <p class="detail">
                                <span><?php echo $_SESSION['date']; ?></span>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="text-head-search">
                            <p class="booking">
                                <span>จังหวัด</span>
                            </p>
                            <p class="detail">
                                <span>กรุงเทพมหานคร</span>
                            </p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- booking form search -->
                          <div class="package">
                                <div class="package-photographer" >
                                    <div class="row" style="padding: 25px;align-items: center;">
                                        <div class="col-6">
                                            <div class="ex-photo">
                                                <img src="img/photo/IFAL-0570.JPG" alt="" style="width:100%;">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-detail">
                                                <h4>'.$row['package_name'].'</h4>
                                                <p><i class="far fa-clock"></i> : '.$row['hour'].' ชั่วโมง</p>
                                                <h3>ราคา : '.$row['price'].' บาท</h3>
                                            </div>
                                            <div class="row" style="place-content: center;">
                                                <button class="btnBook" type="submit">BOOK NOW</button> &nbsp; &nbsp;   <!-- &nbsp  การเว้นช่องว่าง-->
                                                <button class="btnWish" href="#"><i class="far fa-bookmark"></i>  WISH LIST</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                
            </form>

            <!-- info-photographer -->
            <div class="info">
                <div class="info-photographer">
                    <div class="row">
                        <div class="col-2" style="padding: 5px;">
                            <div class="profile-user">
                                <a href=" ">
                                    <img title=" " alt=" " src="img/profile/profile_upload.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-3" style="padding: 0px;">
                            <div class="username-text">
                                <a href="#">
                                    <h3>username</h3>
                                </a>
                                <div class="verified-snap-info">
                                    <h3><img src="img/icons/verified.svg" alt="">Verified</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-2" style="padding: 0px;">
                            <div class="detail-pice">
                                <div class="info-text">
                                    <h4>ถ่ายไปแล้ว</h4>
                                    <h4>47 งาน</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-2" style="padding: 0px;">
                            <div class="detail-pice" >
                                <div class="info-text">
                                    <h4>ผู้ติดตาม</h4>
                                    <h4>120 คน</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-3" style="padding: 0px;">
                            <div class="detail-pice" >
                                <div class="info-text">
                                    <h4>คะแนน</h4>
                                    <div class="stars-info-photographer-pack_detail">
                                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- info-photographer -->

            <!-- menu -->
            <div class="profile-menu">
                <div class="profile-menu-container" style="width: auto;">
                    <div class="profile-menu-item-container">
                        <a href="/snap/package_detail.php" class="profile-menu-item">
                            <i style="margin-right: 10px;"></i>รายละเอียดงาน
                        </a>
                    </div>
                    <div class="profile-menu-item-container">
                        <a href="/snap/package_detail_portfolio.php" class="profile-menu-item active">
                            <i style="margin-right: 10px;"></i>ตัวอย่างผลงาน
                        </a>
                    </div>
                </div>
            </div>
            <!-- menu -->






        </div>
        <!-- container -->
    </div>
    <!------------ wrapper ------------>

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



</body>