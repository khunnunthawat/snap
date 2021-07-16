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
            require_once('./db/db_connect.php');
        ?>

        <form action="./db/register_photographer.php" method="POST">
        <div class="container">
          <div class="row" style="margin-top: 50px;">
            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                <div class="col text-center">
                    <h2 style= "font-size: 45px;" ><img src="./img/icons/photography_flaticon.svg" style="width: 6%;"> กรอกข้อมูลช่างภาพ</h2>
                </div>
            </div>
          </div>
              <div class="row" style="margin-top: 25px; margin-right: 40px;">
                <div class="col" style=" margin-left: 300px; margin-right: 250px;">
                    <div class="form-group mb-3">
                    <label for="basic-url" class="label-text-head">username</label>
                    <input type="text" class="form-control" title="username" name="username"  
                    style="font-family: DB Adman X; font-style: normal; font-weight: normal; font-size: 25px; line-height: 27px; color: #057ADF;"
                    required>
                    <p class="description">* usename ช่างภาพ ไม่สามารถเปลี่ยนได้</p>
                    </div>
                
                    <div class="form-group mb-3">
                        <label class="label-text-head">จังหวัดที่รับงาน</label>
                        <select name="province" class="form-control" style="font-family: DB Adman X; font-style: normal; font-weight: normal; font-size: 20px; line-height: 27px; color: #000000;" required>
                            <option value="select-with-status__dropdown-item">เลือกพื้นที่รับงาน</option>
                            <option value="select-with-status__dropdown-item">ทุกพื้นที่</option>
                            <option value="จังหวัดกรุงเทพมหานคร">จังหวัดกรุงเทพมหานคร</option>
                            <option value="จังหวัดกระบี่">จังหวัดกระบี่</option>
                            <option value="จังหวัดกาญจนบุรี">จังหวัดกาญจนบุรี</option>
                            <option value="จังหวัดกาฬสินธุ์">จังหวัดกาฬสินธุ์</option>
                            <option value="จังหวัดกำแพงเพชร">จังหวัดกำแพงเพชร</option>
                            <option value="จังหวัดขอนแก่น">จังหวัดขอนแก่น</option>
                            <option value="จังหวัดจันทบุรี">จังหวัดจันทบุรี</option>
                            <option value="จังหวัดฉะเชิงเทรา">จังหวัดฉะเชิงเทรา</option>
                            <option value="จังหวัดชลบุรี">จังหวัดชลบุรี</option>
                            <option value="จังหวัดชัยนาท">จังหวัดชัยนาท</option>
                            <option value="จังหวัดชัยภูมิ">จังหวัดชัยภูมิ</option>
                            <option value="จังหวัดชุมพร">จังหวัดชุมพร</option>
                            <option value="จังหวัดเชียงราย">จังหวัดเชียงราย</option>
                            <option value="จังหวัดเชียงใหม่">จังหวัดเชียงใหม่</option>
                            <option value="จังหวัดตรัง">จังหวัดตรัง</option>
                            <option value="จังหวัดตราด">จังหวัดตราด</option>
                            <option value="จังหวัดตาก">จังหวัดตาก</option>
                            <option value="จังหวัดนครนายก">จังหวัดนครนายก</option>
                            <option value="จังหวัดนครปฐม">จังหวัดนครปฐม</option>
                            <option value="จังหวัดนครพนม">จังหวัดนครพนม</option>
                            <option value="จังหวัดนครราชสีมา">จังหวัดนครราชสีมา</option>
                            <option value="จังหวัดนครศรีธรรมราช">จังหวัดนครศรีธรรมราช</option>
                            <option value="จังหวัดนครสวรรค์">จังหวัดนครสวรรค์</option>
                            <option value="จังหวัดนนทบุรี">จังหวัดนนทบุรี</option>
                            <option value="จังหวัดนราธิวาส">จังหวัดนราธิวาส</option>
                            <option value="จังหวัดน่าน">จังหวัดน่าน</option>
                            <option value="จังหวัดบุรีรัมย์">จังหวัดบุรีรัมย์</option>
                            <option value="จังหวัดบึงกาฬ">จังหวัดบึงกาฬ</option>
                            <option value="จังหวัดปทุมธานี">จังหวัดปทุมธานี</option>
                            <option value="จังหวัดประจวบคีรีขันธ์">จังหวัดประจวบคีรีขันธ์</option>
                            <option value="จังหวัดปราจีนบุรี">จังหวัดปราจีนบุรี</option>
                            <option value="จังหวัดปัตตานี">จังหวัดปัตตานี</option>
                            <option value="จังหวัดพระนครศรีอยุธยา">จังหวัดพระนครศรีอยุธยา</option>
                            <option value="จังหวัดพะเยา">จังหวัดพะเยา</option>
                            <option value="จังหวัดพังงา">จังหวัดพังงา</option>
                            <option value="จังหวัดพัทลุง">จังหวัดพัทลุง</option>
                            <option value="จังหวัดพิจิตร">จังหวัดพิจิตร</option>
                            <option value="จังหวัดพิษณุโลก">จังหวัดพิษณุโลก</option>
                            <option value="จังหวัดเพชรบุรี">จังหวัดเพชรบุรี</option>
                            <option value="จังหวัดเพชรบูรณ์">จังหวัดเพชรบูรณ์</option>
                            <option value="จังหวัดแพร่">จังหวัดแพร่</option>
                            <option value="จังหวัดภูเก็ต">จังหวัดภูเก็ต</option>
                            <option value="จังหวัดมหาสารคาม">จังหวัดมหาสารคาม</option>
                            <option value="จังหวัดมุกดาหาร">จังหวัดมุกดาหาร</option>
                            <option value="จังหวัดแม่ฮ่องสอน">จังหวัดแม่ฮ่องสอน</option>
                            <option value="จังหวัดยะลา">จังหวัดยะลา</option>
                            <option value="จังหวัดยโสธร">จังหวัดยโสธร</option>
                            <option value="จังหวัดระนอง">จังหวัดระนอง</option>
                            <option value="จังหวัดระยอง">จังหวัดระยอง</option>
                            <option value="จังหวัดราชบุรี">จังหวัดราชบุรี</option>
                            <option value="จังหวัดร้อยเอ็ด">จังหวัดร้อยเอ็ด</option>
                            <option value="จังหวัดลพบุรี">จังหวัดลพบุรี</option>
                            <option value="จังหวัดลำปาง">จังหวัดลำปาง</option>
                            <option value="จังหวัดลำพูน">จังหวัดลำพูน</option>
                            <option value="จังหวัดเลย">จังหวัดเลย</option>
                            <option value="จังหวัดศรีสะเกษ">จังหวัดศรีสะเกษ</option>
                            <option value="จังหวัดสกลนคร">จังหวัดสกลนคร</option>
                            <option value="จังหวัดสงขลา">จังหวัดสงขลา</option>
                            <option value="จังหวัดสตูล">จังหวัดสตูล</option>
                            <option value="จังหวัดสมุทรปราการ">จังหวัดสมุทรปราการ</option>
                            <option value="จังหวัดสมุทรสงคราม">จังหวัดสมุทรสงคราม</option>
                            <option value="จังหวัดสมุทรสาคร">จังหวัดสมุทรสาคร</option>
                            <option value="จังหวัดสระบุรี">จังหวัดสระบุรี</option>
                            <option value="จังหวัดสระแก้ว">จังหวัดสระแก้ว</option>
                            <option value="จังหวัดสิงห์บุรี">จังหวัดสิงห์บุรี</option>
                            <option value="จังหวัดสุพรรณบุรี">จังหวัดสุพรรณบุรี</option>
                            <option value="จังหวัดสุราษฎร์ธานี">จังหวัดสุราษฎร์ธานี</option>
                            <option value="จังหวัดสุรินทร์">จังหวัดสุรินทร์</option>
                            <option value="จังหวัดสุโขทัย">จังหวัดสุโขทัย</option>
                            <option value="จังหวัดหนองคาย">จังหวัดหนองคาย</option>
                            <option value="จังหวัดหนองบัวลำภู">จังหวัดหนองบัวลำภู</option>
                            <option value="จังหวัดอำนาจเจริญ">จังหวัดอำนาจเจริญ</option>
                            <option value="จังหวัดอุดรธานี">จังหวัดอุดรธานี</option>
                            <option value="จังหวัดอุตรดิตถ์">จังหวัดอุตรดิตถ์</option>
                            <option value="จังหวัดอุทัยธานี">จังหวัดอุทัยธานี</option>
                            <option value="จังหวัดอุบลราชธานี">จังหวัดอุบลราชธานี</option>
                            <option value="จังหวัดอ่างทอง">จังหวัดอ่างทอง</option>
                          </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="basic-url" class="label-text-head">ประเภทที่รับงาน</label>
                          <div class="row">
                              <div class="col-md-6" >
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="congra" name="type_job[]" value="1">
                                    <label class="custom-control-label" for="congra">รับปริญญา</label>
                                  </div>

                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="fashion" name="type_job[]" value="2">
                                    <label class="custom-control-label" for="fashion">ภาพบุคคล/แฟชั่น</label>
                                  </div>

                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="wedding" name="type_job[]" value="3">
                                    <label class="custom-control-label" for="wedding">งานแต่งงาน</label>
                                  </div>

                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="prewedding" name="type_job[]" value="4">
                                    <label class="custom-control-label" for="prewedding">พรีเวดดิ้ง</label>
                                  </div>

                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="event" name="type_job[]" value="5">
                                    <label class="custom-control-label" for="event">งานอีเว้นท์</label>
                                  </div>

                              </div>
                              <div class="col-md-6" >
                              <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="product_food" name="type_job[]" value="6">
                                    <label class="custom-control-label" for="product_food">สินค้า/อาหาร</label>
                                  </div>

                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="home_hotel" name="type_job[]" value="7">
                                    <label class="custom-control-label" for="home_hotel">บ้าน/โรงแรม/สถาปัตยกรรม</label>
                                  </div>

                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="ordination" name="type_job[]" value="8">
                                    <label class="custom-control-label" for="ordination">งานอุปสมบท</label>
                                  </div>

                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="more_more" name="type_job[]" value="9">
                                    <label class="custom-control-label" for="more_more">อื่นๆ</label>
                                  </div>
                              </div>
                          </div>
                    </div>

                    <div class="form-group mb-3">
                    <label for="basic-url" class="label-text-head">ชั่วโมงทำงานต่อวัน</label>
                    <input type="number" class="form-control" pattern="[A-Za-z-0-9]{20}" title="ระบุจำนวนชั่วโมง" name="hour" required 
                    style="font-family: DB Adman X; font-style: normal; font-weight: normal; font-size: 25px; line-height: 27px; color: #057ADF;">
                     </div>

                    <div class="form-group mb-3">
                    <label for="basic-url" class="label-text-head">ค่าจ้างเริ่มต้น</label>
                    <input type="number" class="form-control" pattern="[A-Za-z-0-9]{20}" title="ระบุจำนวนค่าจ้างของคุณ" name="starting_wage" required 
                    style="font-family: DB Adman X; font-style: normal; font-weight: normal; font-size: 25px; line-height: 27px; color: #057ADF;">
                     </div>

                    <div class="form-group mb-3">
                    <label for="basic-url" class="label-text-head">ค่าจ้างสูงสุด</label>
                    <input type="number" class="form-control" pattern="[A-Za-z-0-9]{20}" title="ระบุจำนวนค่าจ้างของคุณ" name="highest_wage" required  
                    style="font-family: DB Adman X; font-style: normal; font-weight: normal; font-size: 25px; line-height: 27px; color: #057ADF;">
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 40px;margin-bottom: 40px;">
                <div class="col-12 text-right">
                    <button type="submit" class="btn btn-primary" style="width: 160px;height: 50px;left: 900px;top: 3px;background: #057ADF;font-size: 26px;border-radius: 45px;">ต่อไป</button>
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