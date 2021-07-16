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
    
    <!-- Banner -->
    <style>
        .carousel .carousel-item{    
            background:-webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(./img/banner/banner1.jpg) no-repeat center;
            background:-moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(./img/banner/banner1.jpg) no-repeat center;
            background:-ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(./img/banner/banner1.jpg) no-repeat center; 
            background:linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(./img/banner/banner1.jpg) no-repeat center;
            background-size:cover;	 
        }
        .carousel .carousel-item.item2{    
            background:-webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(./img/banner/banner2.jpg) no-repeat;
            background:-moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(./img/banner/banner2.jpg) no-repeat;
            background:-ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(./img/banner/banner2.jpg) no-repeat; 
            background:linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(./img/banner/banner2.jpg) no-repeat;
            background-size:cover;	 
        }.carousel .carousel-item.item3{    
            background:-webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(./img/banner/banner3.jpg) no-repeat;
            background:-moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(./img/banner/banner3.jpg) no-repeat;
            background:-ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(./img/banner/banner3.jpg) no-repeat; 
            background:linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(./img/banner/banner3.jpg) no-repeat;
            background-size:cover;	 
        }
    </style>
    <!-- Banner -->
</head>

<body>
    <!-- Header Section -->
    <div class="wrapper">
        <?php
            require_once("header.php");
        ?>
       <!-- Banner -->
       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
           <ol class="carousel-indicators">  <!-- จุดสามจุดอะ -->
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" style="border-radius: 50%; width: 10px; height: 10px;"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active" style="border-radius: 50%; width: 10px; height: 10px;"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active" style="border-radius: 50%; width: 10px; height: 10px;"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="text_banner">
						<h1>CHANGPHAPH SNAP</h1>
                        <p>แหล่งรวมช่างภาพมืออาชีพ</p>
                        <p>ค้นหาง่ายในไม่กี่นาที จองง่าย เชื่อถือได้</p>
                        <p>ผ่านการตรวจสอบจากเราแล้ว</p>
						<a class="outline-out button2 " href ="index.php">   เริ่มค้นหาช่างภาพ   </a>
					</div>
                </div>
                <div class="carousel-item item2">
                    <div class="text_banner">
					    <h1>   กำหนดการวันรับปริญญา   </h1>
                        <h1>   ของมหาวิทยาลัยทุกแห่งทั่วประเทศ  </h1>
                        <h1>   ประจำปี 2563   </h1>
						<a class="outline-out button2 " href ="graduation_calendar.php"> ดูทั้งหมด >>  </a>
					</div>
                </div>
                <div class="carousel-item item3">
                    <div class="text_banner">
						<h1>   ทำไมต้อง เป็น ช่างภาพ สแนป ? </h1>
                        <p>ทำให้คุณได้ค้นหาและจ้างงานช่างภาพอิสระ</p>
                        <p>เป็นตัวกลางช่วยถือเงินให้กับทั้งสองฝ่าย</p>
                        <p>หมดกังวลเรื่องโดนโกง !</p>
						<a class="outline-out button2 " href ="changphapa_snap_about.php"> อ่านเพิ่มเติม >>  </a>
					</div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <i class="material-icons" style ="font-size: 70px; color: #FFFFFF;" >keyboard_arrow_left</i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <i class="material-icons" style ="font-size: 70px; color: #FFFFFF;" >keyboard_arrow_right</i>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- End Banner -->
        
        <!-- Booking -->
        <div class="booking py-6" id="booking">
            <h2 class="text-center mb-4">ค้นหาช่างภาพ</h2>
            <div class="container-fluid" style="width: 70%;">
                <section class="content1">
                    <!-- book-form -->
                    <div class="book-form">
                        <form action="./search.php" method="POST">
                            <!--row1 -->
                            <div class="row"> <!--row1 -->
                                <!-- ประเภทงาน -->
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <label>
                                            <i class="fas fa-camera"></i>ประเภทงาน
                                        </label>
                                        <select class="form-control" name="type_job" required>
                                            <option value="1">รับปริญญา</option>
                                            <option value="2">ภาพบุคคล/แฟชั่น</option>
                                            <option value="3">งานแต่งงาน</option>
                                            <option value="4">พรีเวดดิ้ง</option>
                                            <option value="5">งานอีเว้นท์</option>
                                            <option value="6">สินค้า/อาหาร</option>
                                            <option value="7">บ้าน/โรงแรม/สถาปัตยกรรม</option>
                                            <option value="8">งานอุปสมบท</option>
                                            <option value="9">อื่นๆ</option>
                                        </select>
                                </div>
                                <!-- ประเภทงาน -->

                                <!-- งบประมาณ -->
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <label>
                                            <i class="far fa-money-bill-alt"></i>งบประมาณ
                                        </label>
                                        <select class="form-control"  name="price" required>
                                            <option value="all">ทั้งหมด</option>
                                            <option value="0-100">0 - 1000 บาท</option>
                                            <option value="1000-3000">1000 - 3,000 บาท</option>
                                            <option value="3000-5000">3,000 - 5,000 บาท</option>
                                            <option value="5000-7000">5,000 - 7,000 บาท</option>
                                            <option value="7000-9000">7,000 - 9,000 บาท</option>
                                            <option value="10000-12000">10,000 - 12,000 บาท</option>
                                            <option value="12000">12,000 บาท ขึ้นไป</option>
                                        </select>
                                </div>
                                <!-- งบประมาณ -->

                                <!-- วันที่ -->
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <label>
                                            <i class="fas fa-calendar-alt"></i>วันเวลาที่เริ่ม
                                        </label>
                                            <input class="form-control hasDatepicker" id="datepicker" name="datepicker" placeholder="Select Date" type="text" required>
                                </div>
                                <!-- วันที่ -->

                                <!-- จังหวัด -->
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <label>
                                            <i class="fas fa-map-marker-alt"></i>จังหวัด
                                        </label>
                                        <select name="province" class="form-control" required>
                                            <option value="all">ทุกพื้นที่</option>
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
                                <!-- จังหวัด -->
                            </div> 
                            <!-- End row1 -->
                        </div>
                        <!-- End book-form -->

                        <!-- ปุ่มกดค้นหา -->
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                    <div class="kohha">
                                        <button type="submit" name="submit" class="btn btn-outline-primary">ค้นหา</button>
                                    </div>
                                </div>
                            </div>    
                        </div>
                </section>    
            </div>
            </form>
        </div>
        <!-- End Booking -->

        <!-- ช่างภาพแนะนำ -->  
        <div class="recommended-changphapa">
            <div class="recommended-changphapa-title">ช่างภาพใหม่</div>   
                <div class="container-fluid">
                    <section class="recommended-profile">
                        <div class="row">
                            <?php 

                                require_once('./db/db_connect.php');

                                $sql = "SELECT u.avatar, p.Starting_wage, p.Highest_wage, p.province, 
                                p.username, u.status, u.created_at, p.id as id_photographer FROM user u 
                                INNER JOIN Photographers p ON u.id = p.user_id
                                LIMIT 8";
                                $result = mysqli_query($connect, $sql);

                                while($row = mysqli_fetch_array($result)){

                                    $sql_type_job = " SELECT t.name as Job_type
                                     FROM photographer_type_job pt
                                     INNER JOIN type_job t ON t.id = pt.id_type_job
                                     WHERE pt.id_photographer = '".$row['id_photographer']."'";

                                    $result_type_job = mysqli_query($connect, $sql_type_job);
                                    $count_row = mysqli_num_rows($result_type_job);

                                    $job_type = "";
                                    $i = 0;
                                    while($row_type_job = mysqli_fetch_array($result_type_job)){
                                        $i++;
                    
                                        $job_type .= $row_type_job['Job_type'];
                                        if($i<$count_row) {
                                            $job_type .= ", ";
                                        }
                                    }

                                    echo '
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style="margin-top:40px;">
                                            <div class="hover14 column">
                                                    <div class="agile_top_brand_left_grid1">
                                                        <figure>
                                                            <div class="changphapa-item block">
                                                                <div class="changphapa-thumb">
                                                                    <a href=" "><img title=" " alt=" " src="img/'.$row['avatar'].'"></a>		
                                                                    <a href=" "></a><h1>'.$row['username'].'</h1></a>
                                                                    <p><h4>ประเภทงาน : '.$job_type.'</h4></p>
                                                                </div>
                                                                <div class="changphapa-details top_brand_home_details">
                                                                    <form action="profile.php" method="post">
                                                                        <fieldset>
                                                                            <a href=" "></a><input type="submit" name="submit" value="ดูรายละเอียดเพิ่มเติม" class="button"></a>
                                                                        </fieldset>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                    </div>
                                            </div>
                                        </div> ';
                                }
                            ?>
                        </div>
                        </div>
                    </section>
                </div>
        </div>

        <!-- Recommended package -->
        <div class="recommended-package">
            <div class="recommended-package-title">
                <H2>แพ็กเกจยอดนิยม</H2>
            </div>
            <section class="pricing-table">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-5 col-lg-4">
                            <div class="item">
                                <div class="heading">
                                    <h3>งานแต่งงาน</h3>
                                    <h4>พิธี : เช้า - บ่าย</h4>
                                    <div class="price-package">
                                        <h5><label>ราคา </label> 14,500<span> บาท</span></h5>
                                    </div>
                                </div>
                            
                                <div class="tick-mark">
                                    <p class="tick-info"><i class="fas fa-check" style="color:#4dbe3b;"></i> แต่งสีทุกรูป </p>
                                    <p class="tick-info"><i class="fas fa-check" style="color:#4dbe3b;"></i> ส่งภาพตัวอย่างหลังวันถ่าย <br> 2 วัน 20 ภาพ </p>
                                    <p class="tick-info"><i class="fas fa-check" style="color:#4dbe3b;"></i> ส่งงานเป็นแฟลช์ไดร์ฟ 2 อาทิตย์ </p>
                                </div>
                                <button class="btn btn-block btn-outline-primary" type="submit" style="font-size: 18px;">รายละเอียดเพิ่มเติม</button>
                            </div>
                        </div>

                        <div class="col-md-5 col-lg-4">
                            <div class="item">
                                <div class="ribbon"> แพ็กเกจยอดนิยม </div>
                                <div class="heading">
                                    <h3>รับปริญญา</h3>
                                    <h4>วันซ้อม วันจริง : ครึ่งวัน</h4>
                                    <div class="price-package">
                                        <h5><label>ราคา </label> 3,500<span> บาท</span></h5>
                                    </div>
                                </div>
                                <div class="tick-mark">
                                    <p class="tick-info"><i class="fas fa-check" style="color:#4dbe3b;"></i> ถ่ายไม่จำกัด </p>
                                    <p class="tick-info"><i class="fas fa-check" style="color:#4dbe3b;"></i> แต่งสีทุกรูป </p>
                                    <p class="tick-info"><i class="fas fa-check" style="color:#4dbe3b;"></i> ส่งภาพตัวอย่างหลังวันถ่าย 1 วัน </p>
                                    <p class="tick-info"><i class="fas fa-check" style="color:#4dbe3b;"></i> ส่งงานเป็น google drive <br> ภายใน 2 อาทิตย์ </p>
                                    <p class="tick-info"><i class="fas fa-check" style="color:#4dbe3b;"></i> ล้างอัดรูปขนาด 4x6 จำนวน 30 รูป </p>
                                </div>
                                <button class="btn btn-block btn-primary" type="submit" style="font-size: 23px;">รายละเอียดเพิ่มเติม</button>
                            </div>
                        </div>

                        <div class="col-md-5 col-lg-4">
                            <div class="item">
                                <div class="heading">
                                    <h3>งานอีเว้นท์</h3>
                                    <h4>กลางคืน</h4>
                                    <div class="price-package">
                                        <h5><label>ราคา </label> 3,500<span> บาท</span></h5>
                                    </div>
                                </div>
                                <div class="tick-mark">
                                    <p class="tick-info"><i class="fas fa-check" style="color:#4dbe3b;"></i> แต่งสีทุกรูป </p>
                                    <p class="tick-info"><i class="fas fa-check" style="color:#4dbe3b;"></i> ส่งภาพตัวอย่างหลังวันถ่าย 30 รูป </p>
                                    <p class="tick-info"><i class="fas fa-check" style="color:#4dbe3b;"></i> ส่งงานเป็น google drive <br> ภายใน 1 อาทิตย์ </p>
                                </div>
                                <button class="btn btn-block btn-outline-primary" type="submit" style="font-size: 18px;">รายละเอียดเพิ่มเติม</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section> 
        </div>   
        <!-- Recommended package -->                   
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


    <!----------------------------------------------->
    <script type="text/javascript">
    $(function () {
        $('#datetimepicker6').datetimepicker();
        $('#datetimepicker7').datetimepicker({
            useCurrent: false //Important! See issue #1075
        });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
    });
    </script>
   <!----------------------------------------------->

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="js/bootstrap.min.js" ></script>

    <script>
        $(function() {
        $('#datepicker').daterangepicker({
            opens: 'left',
            locale: {
            format: 'YYYY-MM-DD'
            }
        });
        });
    </script>
</body>
</html>