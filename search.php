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
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <script src="https://kit.fontawesome.com/c3d7626d0f.js" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link href="//db.onlinewebfonts.com/c/0b28d43e90a11a93d935b305ff2cefb2?family=Font+Awesome+5+Pro" rel="stylesheet" type="text/css"/>

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
        <form action="./search.php" method="POST">
            <!----- banner search ----->
            <div class="search-banner search-banner1-bg">
                <div class="row" align="center" style="width: 100%;max-width: 1200px;margin: 0 auto;padding: 30px;"">
                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                        <div class="text-search-graduation">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12"> <!----- หัวข้อประเภทงาน -----> 
                                <label>
                                    <i class="fas fa-search" style="font-size: 35px; margin-right: 12px; margin-bottom: 10px;"></i>ค้นหาช่างภาพ
                                </label>
                            </div>
                        </div>
                        <!----- ค้นหา ----->
                        
                        <section class="search-booking"> 
                            <div class="search-book-form">
                                <div class="row">
                                    <!-- ประเภทงาน -->
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <label>
                                            <i class="fas fa-camera"></i>ประเภทงาน
                                        </label>
                                        <?php 
                                        $sql_type_job = "select * from type_job";

                                        $result_type_job = mysqli_query($connect, $sql_type_job);
                                        echo '<select class="form-control" name="type_job" required>';
                                        while($row = mysqli_fetch_array($result_type_job)){
                                            if($row['id'] == $_POST['type_job']){
                                                echo '<option value="'.$row['id'].'" selected>'.$row['name'].'</option>';
                                            } else {
                                                echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
                                            }
                                            
                                        }
                                        echo '</select>';
                                        ?>
                                    </div>
                                    <!-- ประเภทงาน -->

                                    <!-- วันเวลา -->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <label>
                                            <i class="fas fa-calendar-alt"></i>วันเวลาที่เริ่ม
                                        </label>
                                        <input class="form-control hasDatepicker" id="datepicker" name="datepicker" placeholder="Select Date" type="text" value="<?php echo $_POST['datepicker']; ?>" required>
                                    </div>
                                    <!-- วันเวลา -->

                                    <!-- จังหวัด -->
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12"> 
                                        <label>
                                            <i class="fas fa-map-marker-alt"></i>จังหวัด
                                        </label>
                                        <select name="province" class="form-control" required>
                                                <option value="<?php echo $_POST['province'] ?>"><?php echo $_POST['province'] ?></option>
                                                <option value="ทุกพื้นที่">ทุกพื้นที่</option>
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
                                <!-- เปลี่ยนการค้นหา -->
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                            <div class="change-search">
                                                <button type="submit" name="submit" class="btn btn-outline-primary"> เปลี่ยนการค้นหา </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <!----- banner search ----->

            <?php
                if(isset($_POST['pricemin']) && isset($_POST['pricemax'])){
                    $start_price = $_POST['pricemin'];
                    $end_price = $_POST['pricemax'];
                    $price_range = "RANGE";
                } else if($_POST['price'] == 'all') {
                    $price_range = "";
                    $start_price = "";
                    $end_price = "";
                } else {
                    $price_range = explode("-", $_POST['price']);
                    $start_price = $price_range[0];
                    $end_price = $price_range[1];
                }
            ?>

            <!----- search-list-page ----->
            <div class="search-list-page" > 
                <div class="container">
                    <div class="row">
                        <!-- กล่องซ้าย -->
                        <div class="col-lg-3" style="margin-top: 40px;">
                            <!-- หัวข้อ กับ ตัวล้าง -->
                            <div class="discount">
                                <div class="discount-container">
                                    <div class="discount-title">
                                        <p>จำกัดการค้นหา : <span> ล้าง </span></p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- งบประมาณ -->
                            <div class="price-range">
                                <div class="price-container">
                                    <div class="price-title">
                                        <p>งบประมาณ</p>
                                    </div>

                                    <div class="price-text-a">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="price" id="0-1000" value="0-1000" onclick="js_filterSubmit()">
                                            <label class="custom-control-label" for="0-1000"></label>
                                            <span>
                                                <label><a>0 - 1,000 บาท</a></label>
                                            </span>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="price" id="1000-3000" value="1000-3000" onclick="js_filterSubmit()">
                                            <label class="custom-control-label" for="1000-3000"></label>
                                            <span>
                                                <label><a>1,000 - 3,000 บาท</a></label>
                                            </span>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="price" id="3000-5000" value="3000-5000" onclick="js_filterSubmit()">
                                            <label class="custom-control-label" for="3000-5000"></label>
                                            <span>
                                                <label><a>3,000 - 5,000 บาท</a></label>
                                            </span>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="price" id="5000-7000" value="5000-7000" onclick="js_filterSubmit()">
                                            <label class="custom-control-label" for="5000-7000"></label>
                                            <span>
                                                <label><a>5,000 - 7,000 บาท</a></label>
                                            </span>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="price" id="7000-9000" value="7000-9000" onclick="js_filterSubmit()">
                                            <label class="custom-control-label" for="7000-9000"></label>
                                            <span>
                                                <label><a>7,000 - 9,000 บาท</a></label>
                                            </span>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="price" id="10000-12000" value="10000-12000" onclick="js_filterSubmit()">
                                            <label class="custom-control-label" for="10000-12000"></label>
                                            <span>
                                                <label><a>10,000 - 12,000 บาท</a></label>
                                            </span>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="price" id="12000-null" value="12000-null" onclick="js_filterSubmit()">
                                            <label class="custom-control-label" for="12000-null"></label>
                                            <span>
                                                <label><a>12,000 บาท ขึ้นไป</a></label>
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <div class="form" style="margin-top: 10px;">
                                        <label>฿</label>
                                        <input type="text" class="pricemin" name="pricemin" value="<?php echo $start_price; ?>" tabindex="0">
                                        <span class="price-input-divider">-</span>
                                        <label>฿</label>
                                        <input type="text" class="pricemax" name="pricemax" value="<?php echo $end_price; ?>" tabindex="0">
                                    </div>
                                    
                                </div>
                            </div>

                            <!----- ดาว ----->
                            <div class="starrating"> 
                                <div class="starrating-container">
                                    <div>
                                        <p class="starrating-title">คะแนน
                                        </p>
                                    </div>
                                    <div class="starrating-content">
                                        <ul class="sr-ul"> 

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="5star">
                                                <label class="custom-control-label" for="5star"></label>
                                                <span class="sr-level">
                                                    <label class="fas fa-star"></i></label>
                                                    <label class="fas fa-star"></i></label>
                                                    <label class="fas fa-star"></i></label>
                                                    <label class="fas fa-star"></i></label>
                                                    <label class="fas fa-star"></i></label>
                                                </span>
                                            </div>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="4star">
                                                <label class="custom-control-label" for="4star"></label>
                                                <span class="sr-level">
                                                    <label class="fas fa-star"></i></label>
                                                    <label class="fas fa-star"></i></label>
                                                    <label class="fas fa-star"></i></label>
                                                    <label class="fas fa-star"></i></label>
                                                </span>
                                            </div>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="3star">
                                                <label class="custom-control-label" for="3star"></label>
                                                <span class="sr-level">
                                                    <label class="fas fa-star"></i></label>
                                                    <label class="fas fa-star"></i></label>
                                                    <label class="fas fa-star"></i></label>
                                                </span>
                                            </div>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="2star">
                                                <label class="custom-control-label" for="2star"></label>
                                                <span class="sr-level">
                                                    <label class="fas fa-star"></i></label>
                                                    <label class="fas fa-star"></i></label>
                                                </span>
                                            </div>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="1star">
                                                <label class="custom-control-label" for="1star"></label>
                                                <span class="sr-level">
                                                    <label class="fas fa-star"></i></label>
                                                </span>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- กล่องขวา -->
                        <div class="col-lg-9" style="margin-top: 40px;">
                            <!-- จัดเรียงตาม -->
                            <div class="tab-sort-wrap">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">จัดเรียงตาม</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>ค่าเริ่มต้น</option>
                                        <option value="1">ทั้งหมด</option>
                                        <option value="2">ยอดนิยม</option>
                                        <option value="3">ราคา : ถูก - แพง</option>
                                        <option value="4">ราคา : แพง - ถูก</option>
                                    </select>
                                </div>
                            </div>
                            </form>
                                <?php
                                    require_once('./db/db_connect.php');
                                    $type_job = $_POST['type_job'];
                                    $province = $_POST['province'];
                                    $datepicker = $_POST['datepicker'];
                                    $sql = "SELECT p.id, u.avatar, p.Starting_wage, p.Highest_wage, p.province, 
                                    p.username, u.status, u.created_at, t.name as Job_type, pk.img_package FROM user u 
                                    INNER JOIN Photographers p ON u.id = p.user_id
                                    INNER JOIN photographer_type_job pt ON pt.id_photographer = p.id 
                                    INNER JOIN type_job t ON t.id = pt.id_type_job
                                    INNER JOIN photographer_package pk ON pk.photographer_id = p.id
                                    LEFT JOIN reserve_package r ON p.id = r.photographer_id
                                    WHERE pt.id_type_job = '$type_job'";
                                    
                                    // $sql = "SELECT p.id, u.avatar, p.Starting_wage, p.Highest_wage, p.province, 
                                    // p.username, u.status, u.created_at, t.name as Job_type FROM user u 
                                    // INNER JOIN Photographers p ON u.id = p.user_id
                                    // INNER JOIN photographer_type_job pt ON pt.id_photographer = p.id 
                                    // INNER JOIN type_job t ON t.id = pt.id_type_job
                                    // WHERE pt.id_type_job = '$type_job'";

                                        if($province != 'all'){
                                            $sql .= " AND p.province = '$province'";
                                        } 
                                        if($price_range != "" && $start_price != '' && $end_price != ''){
                                            $sql .= " AND (($start_price BETWEEN p.Starting_wage AND p.Highest_wage)
                                            OR ($end_price BETWEEN p.Starting_wage AND p.Highest_wage))";
                                        }
                                        if($datepicker != ''){
                                                $date_range = explode(" - ", $datepicker);
                                                $start_date = $date_range[0];
                                                $end_date = $date_range[1];

                                                $sql .= " AND (((SUBSTRING_INDEX(r.work_date, ' - ',1) NOT BETWEEN '$start_date' AND '$end_date') AND (SUBSTRING_INDEX(r.work_date, ' - ',-1) NOT BETWEEN '$start_date' AND '$end_date'))  OR p.work_hour - r.time_reserve > 0 )";
                                            }

                                            $sql .= " GROUP BY p.id";
                                        $result = mysqli_query($connect, $sql);
                                        if($result) {
                                            while($row = mysqli_fetch_array($result)){
                                ?>
                                
                                <form action="./profile.php" method="post">
                                
                                    <input type="text" name="id_photographer" value="<?php echo $row['id']; ?>" hidden/>
                                    <input type="text" name="start_price" value="<?php echo $start_price; ?>" hidden/>
                                    <input type="text" name="end_price" value="<?php echo $end_price; ?>" hidden/>
                                    <input type="text" name="province" value="<?php echo $province; ?>" hidden/>
                                    <input type="text" name="datepicker" value="<?php echo $datepicker; ?>" hidden/>
                                    <input type="text" name="type_job" value="<?php echo $type_job; ?>" hidden/>
                                    <input type="text" name="img_package" value="<?php echo $img_package; ?>" hidden/>

                                    <!-- photographer-list -->
                                    <div class="photographer-list">
                                        <div class="col-lg-6">
                                            <!-- snap-detail-atlas_container -->
                                            <div class="left snap-detail-atlas">
                                                <div class="snap-detail-atlas-box">
                                                    <section class="snap-detail-atlas-bigpic">
                                                        <div style="position: absolute;left: 0px;right: -4px;top: 0px;bottom: 0px;">
                                                            <div class="m-img" style="width: 100%; height: 100%;">
                                                                <div style="background-repeat: no-repeat;background-size: cover; background-position: center center; width: 100%; color: rgb(255, 255, 255); height: 100%; background-image: url(./img/package/<?php echo $row['img_package']; ?>)">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class=" col-lg-6">
                                            <!-- info-photographer -->
                                            <div class="info">
                                                <div class="info-detail">
                                                    <div class="row" style="margin-top: 10px;">
                                                        <div class="col-2" style="padding: 5px;">
                                                            <div class="profile-user">
                                                                <a href=" "><img title=" " alt=" " src="img/<?php echo $row['avatar']; ?>"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-5" style="padding: 0px;">
                                                            <div class="username-text">
                                                                <a href=" "></a><h3><?php echo $row['username']; ?></h3></a>
                                                                <div class="verified-snap-info">
                                                                    <h3><img src="img/icons/verified.svg" alt="">Verified</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-5">
                                                            <h4> จังหวัด : <?php echo $province; ?></h4>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="margin-top: 20px;">
                                                        <div class="col-6" style="padding: 0px;">
                                                            <div class="detail-pice" >
                                                                <div class="info-text">
                                                                    <h4>เริ่มต้น</h4>
                                                                    <h4><?php echo $row['Starting_wage']; ?> บาท</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6" style="padding: 0px;">
                                                            <div class="detail-pice" >
                                                                <div class="info-text">
                                                                    <h4>สูงสุด</h4>
                                                                    <h4><?php echo $row['Highest_wage']; ?> บาท</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="button-info">
                                                                <fieldset>
                                                                    <input type="submit" name="form_search" value="รายละเอียดเพิ่มเติม" class="button">
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- กล่องขวา -->

                                    <!-- photographer-list -->
                                    <div class="photographer-list">
                                        <div class="col-lg-6">
                                            <!-- snap-detail-atlas_container -->
                                            <div class="left snap-detail-atlas">
                                                <div class="snap-detail-atlas-box">
                                                    <section class="snap-detail-atlas-bigpic">
                                                        <div style="position: absolute;left: 0px;right: -4px;top: 0px;bottom: 0px;">
                                                            <div class="m-img" style="width: 100%; height: 100%;">
                                                                <div style="background-repeat: no-repeat;background-size: cover; background-position: center center; width: 100%; color: rgb(255, 255, 255); height: 100%; background-image: url(./img/photo/pham.jpg)">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class=" col-lg-6">
                                            <!-- info-photographer -->
                                            <div class="info">
                                                <div class="info-detail">
                                                    <div class="row" style="margin-top: 10px;">
                                                        <div class="col-2" style="padding: 5px;">
                                                            <div class="profile-user">
                                                                <a href=" "><img title=" " alt=" " src="img/Ham Sitthidech.jpg"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-5" style="padding: 0px;">
                                                            <div class="username-text">
                                                                <a href=" "></a><h3>MOOHAM</h3></a>
                                                                <div class="verified-snap-info">
                                                                    <h3><img src="img/icons/verified.svg" alt="">Verified</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-5">
                                                            <h4> จังหวัด : <?php echo $province; ?></h4>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="margin-top: 20px;">
                                                        <div class="col-6" style="padding: 0px;">
                                                            <div class="detail-pice" >
                                                                <div class="info-text">
                                                                    <h4>เริ่มต้น</h4>
                                                                    <h4>1200 บาท</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6" style="padding: 0px;">
                                                            <div class="detail-pice" >
                                                                <div class="info-text">
                                                                    <h4>สูงสุด</h4>
                                                                    <h4>24000 บาท</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="button-info">
                                                                <fieldset>
                                                                    <input type="submit" name="form_search" value="รายละเอียดเพิ่มเติม" class="button">
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- กล่องขวา -->

                                    <!-- photographer-list -->
                                    <div class="photographer-list">
                                        <div class="col-lg-6">
                                            <!-- snap-detail-atlas_container -->
                                            <div class="left snap-detail-atlas">
                                                <div class="snap-detail-atlas-box">
                                                    <section class="snap-detail-atlas-bigpic">
                                                        <div style="position: absolute;left: 0px;right: -4px;top: 0px;bottom: 0px;">
                                                            <div class="m-img" style="width: 100%; height: 100%;">
                                                                <div style="background-repeat: no-repeat;background-size: cover; background-position: center center; width: 100%; color: rgb(255, 255, 255); height: 100%; background-image: url(./img/photo/aeee.jpg)">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class=" col-lg-6">
                                            <!-- info-photographer -->
                                            <div class="info">
                                                <div class="info-detail">
                                                    <div class="row" style="margin-top: 10px;">
                                                        <div class="col-2" style="padding: 5px;">
                                                            <div class="profile-user">
                                                                <a href=" "><img title=" " alt=" " src="img/Ae Wanchai.jpg"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-5" style="padding: 0px;">
                                                            <div class="username-text">
                                                                <a href=" "></a><h3>Ae Wanchai</h3></a>
                                                                <div class="verified-snap-info">
                                                                    <h3><img src="img/icons/verified.svg" alt="">Verified</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-5">
                                                            <h4> จังหวัด : <?php echo $province; ?></h4>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="margin-top: 20px;">
                                                        <div class="col-6" style="padding: 0px;">
                                                            <div class="detail-pice" >
                                                                <div class="info-text">
                                                                    <h4>เริ่มต้น</h4>
                                                                    <h4>1200 บาท</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6" style="padding: 0px;">
                                                            <div class="detail-pice" >
                                                                <div class="info-text">
                                                                    <h4>สูงสุด</h4>
                                                                    <h4>24000 บาท</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="button-info">
                                                                <fieldset>
                                                                    <input type="submit" name="form_search" value="รายละเอียดเพิ่มเติม" class="button">
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- กล่องขวา -->
                                    
                                    <!-- photographer-list -->
                                    <div class="photographer-list">
                                        <div class="col-lg-6">
                                            <!-- snap-detail-atlas_container -->
                                            <div class="left snap-detail-atlas">
                                                <div class="snap-detail-atlas-box">
                                                    <section class="snap-detail-atlas-bigpic">
                                                        <div style="position: absolute;left: 0px;right: -4px;top: 0px;bottom: 0px;">
                                                            <div class="m-img" style="width: 100%; height: 100%;">
                                                                <div style="background-repeat: no-repeat;background-size: cover; background-position: center center; width: 100%; color: rgb(255, 255, 255); height: 100%; background-image: url(./img/photo/25photo.jpg)">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class=" col-lg-6">
                                            <!-- info-photographer -->
                                            <div class="info">
                                                <div class="info-detail">
                                                    <div class="row" style="margin-top: 10px;">
                                                        <div class="col-2" style="padding: 5px;">
                                                            <div class="profile-user">
                                                                <a href=" "><img title=" " alt=" " src="img/Roungroat Kunhirunkit .jpg"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-5" style="padding: 0px;">
                                                            <div class="username-text">
                                                                <a href=" "></a><h3>Roungroat 25</h3></a>
                                                                <div class="verified-snap-info">
                                                                    <h3><img src="img/icons/verified.svg" alt="">Verified</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-5">
                                                            <h4> จังหวัด : <?php echo $province; ?></h4>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="margin-top: 20px;">
                                                        <div class="col-6" style="padding: 0px;">
                                                            <div class="detail-pice" >
                                                                <div class="info-text">
                                                                    <h4>เริ่มต้น</h4>
                                                                    <h4>1000 บาท</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6" style="padding: 0px;">
                                                            <div class="detail-pice" >
                                                                <div class="info-text">
                                                                    <h4>สูงสุด</h4>
                                                                    <h4>18500 บาท</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="button-info">
                                                                <fieldset>
                                                                    <input type="submit" name="form_search" value="รายละเอียดเพิ่มเติม" class="button">
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- กล่องขวา -->

                                    <!-- photographer-list -->
                                    <div class="photographer-list">
                                        <div class="col-lg-6">
                                            <!-- snap-detail-atlas_container -->
                                            <div class="left snap-detail-atlas">
                                                <div class="snap-detail-atlas-box">
                                                    <section class="snap-detail-atlas-bigpic">
                                                        <div style="position: absolute;left: 0px;right: -4px;top: 0px;bottom: 0px;">
                                                            <div class="m-img" style="width: 100%; height: 100%;">
                                                                <div style="background-repeat: no-repeat;background-size: cover; background-position: center center; width: 100%; color: rgb(255, 255, 255); height: 100%; background-image: url(./img/photo/Twentythree23.jpg">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class=" col-lg-6">
                                            <!-- info-photographer -->
                                            <div class="info">
                                                <div class="info-detail">
                                                    <div class="row" style="margin-top: 10px;">
                                                        <div class="col-2" style="padding: 5px;">
                                                            <div class="profile-user">
                                                                <a href=" "><img title=" " alt=" " src="img/Kaokoon Dechapituck.jpg"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-5" style="padding: 0px;">
                                                            <div class="username-text">
                                                                <a href=" "></a><h3>Kaokoon</h3></a>
                                                                <div class="verified-snap-info">
                                                                    <h3><img src="img/icons/verified.svg" alt="">Verified</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-5">
                                                            <h4> จังหวัด : <?php echo $province; ?></h4>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="margin-top: 20px;">
                                                        <div class="col-6" style="padding: 0px;">
                                                            <div class="detail-pice" >
                                                                <div class="info-text">
                                                                    <h4>เริ่มต้น</h4>
                                                                    <h4>1000 บาท</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6" style="padding: 0px;">
                                                            <div class="detail-pice" >
                                                                <div class="info-text">
                                                                    <h4>สูงสุด</h4>
                                                                    <h4>20000 บาท</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="button-info">
                                                                <fieldset>
                                                                    <input type="submit" name="form_search" value="รายละเอียดเพิ่มเติม" class="button">
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- กล่องขวา -->

                                    <!-- photographer-list -->
                                    <div class="photographer-list">
                                        <div class="col-lg-6">
                                            <!-- snap-detail-atlas_container -->
                                            <div class="left snap-detail-atlas">
                                                <div class="snap-detail-atlas-box">
                                                    <section class="snap-detail-atlas-bigpic">
                                                        <div style="position: absolute;left: 0px;right: -4px;top: 0px;bottom: 0px;">
                                                            <div class="m-img" style="width: 100%; height: 100%;">
                                                                <div style="background-repeat: no-repeat;background-size: cover; background-position: center center; width: 100%; color: rgb(255, 255, 255); height: 100%; background-image: url(./img/photo/our.jpg">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class=" col-lg-6">
                                            <!-- info-photographer -->
                                            <div class="info">
                                                <div class="info-detail">
                                                    <div class="row" style="margin-top: 10px;">
                                                        <div class="col-2" style="padding: 5px;">
                                                            <div class="profile-user">
                                                                <a href=" "><img title=" " alt=" " src="img/Natthapol Kongsuchart.jpg"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-5" style="padding: 0px;">
                                                            <div class="username-text">
                                                                <a href=" "></a><h3>Our Story</h3></a>
                                                                <div class="verified-snap-info">
                                                                    <h3><img src="img/icons/verified.svg" alt="">Verified</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-5">
                                                            <h4> จังหวัด : <?php echo $province; ?></h4>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="margin-top: 20px;">
                                                        <div class="col-6" style="padding: 0px;">
                                                            <div class="detail-pice" >
                                                                <div class="info-text">
                                                                    <h4>เริ่มต้น</h4>
                                                                    <h4>1000 บาท</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6" style="padding: 0px;">
                                                            <div class="detail-pice" >
                                                                <div class="info-text">
                                                                    <h4>สูงสุด</h4>
                                                                    <h4>26000 บาท</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="button-info">
                                                                <fieldset>
                                                                    <input type="submit" name="form_search" value="รายละเอียดเพิ่มเติม" class="button">
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- กล่องขวา -->

                                    <!-- photographer-list -->
                                    <div class="photographer-list">
                                        <div class="col-lg-6">
                                            <!-- snap-detail-atlas_container -->
                                            <div class="left snap-detail-atlas">
                                                <div class="snap-detail-atlas-box">
                                                    <section class="snap-detail-atlas-bigpic">
                                                        <div style="position: absolute;left: 0px;right: -4px;top: 0px;bottom: 0px;">
                                                            <div class="m-img" style="width: 100%; height: 100%;">
                                                                <div style="background-repeat: no-repeat;background-size: cover; background-position: center center; width: 100%; color: rgb(255, 255, 255); height: 100%; background-image: url(./img/photo/Anochai.jpg">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class=" col-lg-6">
                                            <!-- info-photographer -->
                                            <div class="info">
                                                <div class="info-detail">
                                                    <div class="row" style="margin-top: 10px;">
                                                        <div class="col-2" style="padding: 5px;">
                                                            <div class="profile-user">
                                                                <a href=" "><img title=" " alt=" " src="img/Anochai Padungsong.jpg"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-5" style="padding: 0px;">
                                                            <div class="username-text">
                                                                <a href=" "></a><h3>Anochai</h3></a>
                                                                <div class="verified-snap-info">
                                                                    <h3><img src="img/icons/verified.svg" alt="">Verified</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-5">
                                                            <h4> จังหวัด : <?php echo $province; ?></h4>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="margin-top: 20px;">
                                                        <div class="col-6" style="padding: 0px;">
                                                            <div class="detail-pice" >
                                                                <div class="info-text">
                                                                    <h4>เริ่มต้น</h4>
                                                                    <h4>1000 บาท</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6" style="padding: 0px;">
                                                            <div class="detail-pice" >
                                                                <div class="info-text">
                                                                    <h4>สูงสุด</h4>
                                                                    <h4>14000 บาท</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="button-info">
                                                                <fieldset>
                                                                    <input type="submit" name="form_search" value="รายละเอียดเพิ่มเติม" class="button">
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- กล่องขวา -->

                                    <!-- photographer-list -->
                                    <div class="photographer-list">
                                        <div class="col-lg-6">
                                            <!-- snap-detail-atlas_container -->
                                            <div class="left snap-detail-atlas">
                                                <div class="snap-detail-atlas-box">
                                                    <section class="snap-detail-atlas-bigpic">
                                                        <div style="position: absolute;left: 0px;right: -4px;top: 0px;bottom: 0px;">
                                                            <div class="m-img" style="width: 100%; height: 100%;">
                                                                <div style="background-repeat: no-repeat;background-size: cover; background-position: center center; width: 100%; color: rgb(255, 255, 255); height: 100%; background-image: url(./img/photo/Cityart_Pat.jpg">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class=" col-lg-6">
                                            <!-- info-photographer -->
                                            <div class="info">
                                                <div class="info-detail">
                                                    <div class="row" style="margin-top: 10px;">
                                                        <div class="col-2" style="padding: 5px;">
                                                            <div class="profile-user">
                                                                <a href=" "><img title=" " alt=" " src="img/Pat Rachhnu.jpg"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-5" style="padding: 0px;">
                                                            <div class="username-text">
                                                                <a href=" "></a><h3>Cityart_Pat</h3></a>
                                                                <div class="verified-snap-info">
                                                                    <h3><img src="img/icons/verified.svg" alt="">Verified</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-5">
                                                            <h4> จังหวัด : <?php echo $province; ?></h4>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="margin-top: 20px;">
                                                        <div class="col-6" style="padding: 0px;">
                                                            <div class="detail-pice" >
                                                                <div class="info-text">
                                                                    <h4>เริ่มต้น</h4>
                                                                    <h4>1500 บาท</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6" style="padding: 0px;">
                                                            <div class="detail-pice" >
                                                                <div class="info-text">
                                                                    <h4>สูงสุด</h4>
                                                                    <h4>35000 บาท</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="button-info">
                                                                <fieldset>
                                                                    <input type="submit" name="form_search" value="รายละเอียดเพิ่มเติม" class="button">
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- กล่องขวา -->
                                </form>
                                <?php
                                        }  
                                    }
                                ?>


                                            
                    </div>
                </div>
            </div>
            <!----- search-list-page ----->



    </div>
    <!-- wrapper -->
                              
        

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
    <!----------------------------------------------->

</body>
</html>