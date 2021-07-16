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

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    
</head>

<body>
    <!-- Header Section -->
    <div class="wrapper">
        <?php
            require_once("header.php");
        ?>
       <h3>changphapa_snap_about</h3>                
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

</body>
</html>