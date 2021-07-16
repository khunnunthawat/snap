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
    <div class="wrapper" >
        <?php
            require_once("header.php");
            require_once('./db/db_connect.php');
        ?>
        <!-- package title-->
        <!-- <div class="package-detail-title">
            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                <h3>รายละเอียดแพ็คเกจ</h3>
            </div>
        </div> --> 
        <!-- package title-->

        <form action="./order_detail.php?package_id=<?php echo $_REQUEST['package_id']; ?>" method="POST">
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
                                <?php 
                                        $sql_type_job = "select * from type_job where id = '".$_SESSION['type_job']."'";
                                        $result_type_job = mysqli_query($connect, $sql_type_job);
                                        $row = mysqli_fetch_array($result_type_job);
                                        echo '<span>'.$row['name'].'</span>';
                                        
                                        ?>
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

                <form action="./order_detail.php?package_id=<?php echo $_REQUEST['package_id']; ?>" method="POST">
                
                <?php
                    $sql_package = "SELECT *
                        FROM photographer_package 
                        WHERE id = '".$_REQUEST['package_id']."'";

                    $result_package = mysqli_query($connect, $sql_package);
                    $row = mysqli_fetch_array($result_package);

                    echo '
                            <div class="package">
                                    <div class="package-photographer" >
                                        <div class="row" style="padding: 25px;align-items: center;">
                                            <div class="col-6">
                                                <div class="ex-photo">
                                                    <img src="img/package/'.$row['img_package'].'" alt="" style="width:100%;">
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
                            ';
                ?>

                    
                </form>

                <!-- info-photographer -->
                <div class="info">
                    <div class="info-photographer">
                        <?php
                            $sql = "SELECT * FROM Photographers p 
                             INNER JOIN user u ON u.id = p.user_id
                             WHERE p.id = '".$row['photographer_id']."'";
                            $result = mysqli_query($connect, $sql);
                            $row_p = mysqli_fetch_array($result);
                        ?>
                        <div class="row">
                            <div class="col-2" style="padding-right:0px;">
                                <img src="img/<?php echo $row_p['avatar']; ?>" style="border-radius:50%; width: 60%;">
                            </div>
                            <div class="col-4" style="padding-right:0px;">
                                <h3 style="margin-bottom:0px;"><?php echo $row_p['username']; ?></h3>
                                <div class="verified_logo">
                                    <img src="img/logo/verified_logo.svg" style=" width: 30%;">
                                </div>
                                <p style="margin-bottom:0px;">เป็นสมาชิกเมื่อวันที่ : <?php echo $row_p['created_at']; ?></p>
                            </div>
                            <div class="col-3">
                                <p style="margin-bottom:0px;">ถ่ายไปแล้ว</p>
                                <h3 style="margin-bottom:0px;font-size: 23px;color: #282828;">29 งาน</h3>
                            </div>
                            <div class="col-3">
                                <p style="margin-bottom:0px;">ผู้ติดตาม</p>
                                <h3 style="margin-bottom:0px;font-size: 23px;color: #282828;">129 คน</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- info-photographer -->
                
                <!-- detail -->
                <div class="p-detail-work-snap">
                    <div class="row">
                        <div class="col-6">
                            <div class="list-detail-snap">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">รายละเอียด</label>
                                    <div class="p-box-detail">
                                        <div class="p-text-detail">
                                            <p><?php echo $row['detail']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-6">
                            <div class="list-detail-snap">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">รายละเอียดงาน</label>
                                    <div class="p-box-detail">
                                        <div class="p-text-detail-other">
                                            
                                            <p><?php echo $row['detail_job']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                


            </div>
            <!-- container -->
        </form>
    </div>

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
    
    <!------------ wrapper ------------>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="js/bootstrap.min.js" ></script>



</body>
</html>