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
            require_once('./db/db_connect.php');
        ?>

        <div class="calendar-graduation-bg">
            <div class="calendar-graduation-text">
                <h2><i class="fas fa-user-graduate"></i>   กำหนดการวันรับปริญญาของมหาวิทยาลัยทุกแห่งทั่วประเทศ ประจำปี 2563</h2>
            </div>
        </div>

       <div class="container" style="margin-bottom: 40px;">
            <!-- Calendar -->
            <div class="calendar-list">
                <!-- วันที่กับมหาลัย  -->
                <div class="row" style="background: #057ADF; padding: 20px;">
                    <div class="col-4">
                        <div class="calendar-head">
                            <h3> วันที่ </h3>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="calendar-head">
                            <h3> กำหนดการรับปริญญา </h3>
                        </div>
                    </div>
                </div>

                <!-- list วันกำหนดกับชื่อมหาลัย  -->
                <div class="row" style="background: #FFF; padding: 20px;">
                    <div class="col-4">
                        <div class="date-list">
                            <h4> 9 เมษายน 2563 </h4>
                            <h4> 10 เมษายน 2563 </h4>
                            <h4> 11 พฤษภาคม 2563 </h4>
                            <h4> 12 พฤษภาคม 2563 </h4>
                            <h4> 13 พฤษภาคม 2563 </h4>
                            <h4> 14 พฤษภาคม 2563 </h4>
                            <h4> 15 พฤษภาคม 2563 </h4>
                            <h4> 16 พฤษภาคม 2563 </h4>
                            <h4> 20 พฤษภาคม 2563 </h4>
                            <h4> 21 พฤษภาคม 2563 </h4>
                        </div>

                    </div>
                    <div class="col-8">
                        <div class="university-list">
                            <h4>  มหาวิทยาลัยธรรมศาสตร์ (วันรับจริง) </h4>
                            <h4>  มหาวิทยาลัยธรรมศาสตร์ (วันรับจริง) </h4>
                            <h4>  มหาวิทยาลัยกรุงเทพ (วันซ้อม) </h4>
                            <h4>  มหาวิทยาลัยกรุงเทพ (วันซ้อม) </h4>
                            <h4>  มหาวิทยาลัยกรุงเทพ (วันซ้อม) </h4>
                            <h4>  มหาวิทยาลัยกรุงเทพ (วันซ้อม) </h4>
                            <h4>  มหาวิทยาลัยกรุงเทพ (วันซ้อม) </h4>
                            <h4>  มหาวิทยาลัยกรุงเทพ (วันซ้อม) </h4>
                            <h4>  มหาวิทยาลัยกรุงเทพ (วันรับจริง) </h4>
                            <h4>  มหาวิทยาลัยกรุงเทพ (วันรับจริง) </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
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

    <!-- ---------------------------------->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="js/bootstrap.min.js" ></script>


</body>
</html>