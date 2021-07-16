<?php
session_start();

$status = $_GET['status'];
$_SESSION['status'] = $status;


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
    <!-- Header Section -->
    <div class="wrapper">

        <?php
            require_once("header.php");
        ?>

        <form action="./db/register_owner.php" method="POST">
        <div class="container">
          <div class="row" style="margin-top: 50px;">
            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                <div class="col text-center">
                    <h2 style= "font-size: 45px;" >ข้อมูลบริษัท</h2>
                    <h3 style= "font-size: 25px; color: #057ADF;">*สำหรับผู้ว่าจ้างในรูปแบบบริษัท ใช้ในการออกเอกสารบัญชี</h3>
                </div>
                <br>
                <div class="row" style="margin-left:30%;">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group mb-3">
                            <label for="basic-url" class="label-text-head">ชื่อบริษัท</label>
                            <input type="text" class="form-control" title="company" name="company"  
                            style="font-family: DB Adman X; font-style: normal; font-weight: normal; font-size: 25px; line-height: 27px; color: #057ADF;">
                        </div>
                    
                        <div class="form-group mb-3">
                            <label for="basic-url" class="label-text-head">ที่อยู่</label>
                            <input type="text" class="form-control" title="address" name="address"  
                            style="font-family: DB Adman X; font-style: normal; font-weight: normal; font-size: 25px; line-height: 27px; color: #057ADF;">
                        </div>

                        <div class="form-group mb-3">
                            <label for="basic-url" class="label-text-head">หมายเลขโทรศัพท์</label>
                            <input type="text" class="form-control" title="phone-number" name="phone-number"  pattern="[0-9]{15}" 
                            style="font-family: DB Adman X; font-style: normal; font-weight: normal; font-size: 25px; line-height: 27px; color: #057ADF;">
                        </div>

                        <div class="form-group mb-3">
                            <label for="basic-url" class="label-text-head">เลขผู้เสียภาษี</label>
                            <input type="text" class="form-control" title="tax-id" name="tax-id"  pattern="[0-9]{13}" 
                            style="font-family: DB Adman X; font-style: normal; font-weight: normal; font-size: 25px; line-height: 27px; color: #057ADF;">
                        </div>

                        <div class="form-group mb-3">
                            <label for="basic-url" class="label-text-head">ประเภทของธุรกิจ</label>
                            <input type="text" class="form-control" title="business-type" name="business-type"  pattern="[A-Za-z-0-9]{20}"
                            style="font-family: DB Adman X; font-style: normal; font-weight: normal; font-size: 25px; line-height: 27px; color: #057ADF;">
                        </div>
                     
                        <div class="form-group mb-3">
                            <label for="basic-url" class="label-text-head">เว็บไซต์ของบริษัท</label>
                            <input type="text" class="form-control" title="company-website" name="company-website"  pattern="[A-Za-z-0-9]{20}"
                            style="font-family: DB Adman X; font-style: normal; font-weight: normal; font-size: 25px; line-height: 27px; color: #057ADF;">
                        </div>

                        <div class="form-group mb-3">
                            <label for="basic-url" class="label-text-head">ใบกำกับภาษี</label>
                            <input type="text" class="form-control" title="tax-invoice" name="tax-invoice"  pattern="[A-Za-z-0-9]{20}"
                            style="font-family: DB Adman X; font-style: normal; font-weight: normal; font-size: 25px; line-height: 27px; color: #057ADF;">
                        </div>
                </div>
            </div>
            </div>
          </div>


            <div class="row" style="margin-top: 30px;">
                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                    <div class="col-12 text-right" style="margin-top: 15px; margin-right: 45px;">
                        <button type="submit" class="btn btn-primary" style="position: absolute; width: 160px; height: 50px; left: 900px; top: 3px; background: #057ADF; font-size: 26px;
                        border-radius: 45px;">ต่อไป</button>
                    </div>
                    <div class="col-13 text-left">
                        <i class="material-icons" style="font-size: 20px;font-weight: 600;line-height: 50px;color: #037ADF;"">ข้ามหน้าถัดไป</i>
                    </div>
                </div>    
            </div>
        </div>
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

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/bootstrap.min.js" ></script>

</body>
</html>