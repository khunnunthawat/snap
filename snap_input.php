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

            $name_surname = '';
            $username = '';
            $province = '';
            $Starting_wage = '';
            $Highest_wage = '';
            $disabled = '';
            $id_pho = '';
            $work_hour = '';

            $check_congra = '';
            $check_fashion = '';
            $check_wedding = '';
            $check_prewedding = '';
            $check_event = '';
            $check_product_food = '';
            $check_home_hotel = '';
            $check_ordination = '';
            $check_more_more = '';
            if (isset($_SESSION['id'])) {
                $sql = "SELECT *, p.id as pho_id FROM Photographers p
                INNER JOIN user u ON u.id = p.user_id
                WHERE u.id = '".$_SESSION['id']."'";
                $result = mysqli_query($connect, $sql);
                $row = mysqli_fetch_array($result);

                $sql_job = "SELECT * FROM `photographer_type_job` WHERE id_photographer = '".$row['pho_id']."'";
                $result_job = mysqli_query($connect, $sql_job);
                while($row_job = mysqli_fetch_array($result_job)){
                    if($row_job['id_type_job'] == 1){
                        $check_congra  = 'checked';
                    } else if ($row_job['id_type_job'] == 2){
                        $check_fashion = 'checked';
                    } else if ($row_job['id_type_job'] == 3){
                        $check_wedding = 'checked';
                    } else if ($row_job['id_type_job'] == 4){
                        $check_prewedding = 'checked';
                    } else if ($row_job['id_type_job'] == 5){
                        $check_event = 'checked';
                    } else if ($row_job['id_type_job'] == 6){
                        $check_product_food = 'checked';
                    } else if ($row_job['id_type_job'] == 7){
                        $check_home_hotel = 'checked';
                    } else if ($row_job['id_type_job'] == 8){
                        $check_ordination = 'checked';
                    } else if ($row_job['id_type_job'] == 9){
                        $check_more_more = 'checked';
                    }
                }
                // ส่วนที่ใช้ข้อมูล
                $name_surname = $row['name_surname'];
                $username = $row['username'];
                $province = $row['province'];
                $Starting_wage = $row['Starting_wage'];
                $Highest_wage = $row['Highest_wage'];
                $work_hour = $row['work_hour'];

                $disabled = "disabled";
            }
        ?>
        
        <form action="./db/update_input_photographer.php?id_pho=<?php echo $row['pho_id']; ?>"  method="POST" style="background-color: #f0f8ff;">
            <!----- account setting ------>
            <div class="container">
                <div class="ac-setting">
                    <div class="account_setting">
                        <h2>ตั้งค่าบัญชี</h2>
                        <h3> <i class="fas fa-user-circle"></i> : <?php echo $name_surname; ?> </h3>
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
                                                    <a class="userpage-sidebar-menu-entry" href="snap_my_work.php">
                                                        <div class="userpage-sidebar-menu-entry__text">งานของฉัน</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="stardust-dropdown">
                                                <div class="stardust-dropdown__item-header">
                                                    <a class="userpage-sidebar-menu-entry" href="snap_user_order.php">
                                                        <div class="userpage-sidebar-menu-entry__text">รายการจอง</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="stardust-dropdown">
                                                <div class="stardust-dropdown__item-header">
                                                    <a class="userpage-sidebar-menu-entry" href="snap_info.php">
                                                        <div class="userpage-sidebar-menu-entry__text">ข้อมูลส่วนตัว</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="stardust-dropdown">
                                                <div class="stardust-dropdown__item-header">
                                                    <a class="userpage-sidebar-menu-entry" href="snap_password.php">
                                                        <div class="userpage-sidebar-menu-entry__text">อีเมล รหัสผ่าน</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="stardust-dropdown" style="background-color: #f0f8ff;border-left: solid #282828;border-radius: 2px;">
                                                <div class="stardust-dropdown__item-header">
                                                    <a class="userpage-sidebar-menu-entry" href="snap_input.php">
                                                        <div class="userpage-sidebar-menu-entry__text">ข้อมูลช่างภาพ</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="stardust-dropdown">
                                                <div class="stardust-dropdown__item-header">
                                                    <a class="userpage-sidebar-menu-entry" href="snap_add_photo_all.php">
                                                        <div class="userpage-sidebar-menu-entry__text">ผลงานทั้งหมด</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="stardust-dropdown">
                                                <div class="stardust-dropdown__item-header">
                                                    <a class="userpage-sidebar-menu-entry" href="snap_verified.php">
                                                        <div class="userpage-sidebar-menu-entry__text">Verified Member</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="stardust-dropdown">
                                                <div class="stardust-dropdown__item-header">
                                                    <a class="userpage-sidebar-menu-entry" href="snap_coin.php">
                                                        <div class="userpage-sidebar-menu-entry__text">Coin ของฉัน</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="stardust-dropdown">
                                                <div class="stardust-dropdown__item-header">
                                                    <a class="userpage-sidebar-menu-entry" href="snap_bank.php">
                                                        <div class="userpage-sidebar-menu-entry__text">บัญชีธนาคาร</div>
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
                                    <div class="row">
                                        <div class="col" style="margin-top: 20px; margin-right: 100px; margin-left: 20px;">
                                            <div class="form-group mb-3">
                                                <label for="basic-url" class="label-text-head">username</label>
                                                <input type="text" class="form-control" title="username" name="username" style="font-family: DB Adman X; font-style: normal; font-weight: normal; font-size: 25px; line-height: 27px; color: #057ADF;"
                                                value="<?php echo $username; ?>">
                                                <!-- disabled  -->
                                            </div>
                                    
                                            <div class="form-group mb-3">
                                                <label class="label-text-head">จังหวัดที่รับงาน</label>
                                                <select id="province" name="province" class="form-control" style="font-family: DB Adman X; font-style: normal; font-weight: normal; font-size: 20px; line-height: 27px; color: #000000;" required>
                                                    <option value="select-with-status__dropdown-item">เลือกพื้นที่รับงาน</option>
                                                    <option value="ทั้งหมด">ทุกพื้นที่</option>
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
                                                            <input type="checkbox" class="custom-control-input" id="congra" name="type_job[]" value="1" 
                                                            <?php echo $check_congra; ?> >
                                                            <label class="custom-control-label" for="congra">รับปริญญา</label>
                                                        </div>

                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="fashion" name="type_job[]" value="2"
                                                            <?php echo $check_fashion; ?> >
                                                            <label class="custom-control-label" for="fashion">ภาพบุคคล/แฟชั่น</label>
                                                        </div>

                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="wedding" name="type_job[]" value="3"
                                                            <?php echo $check_wedding; ?> >
                                                            <label class="custom-control-label" for="wedding">งานแต่งงาน</label>
                                                        </div>

                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="prewedding" name="type_job[]" value="4"
                                                            <?php echo $check_prewedding; ?> >
                                                            <label class="custom-control-label" for="prewedding">พรีเวดดิ้ง</label>
                                                        </div>

                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="event" name="type_job[]" value="5"
                                                            <?php echo $check_event; ?> >
                                                            <label class="custom-control-label" for="event">งานอีเว้นท์</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6" >
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="product_food" name="type_job[]" value="6"
                                                            <?php echo $check_product_food; ?> >
                                                            <label class="custom-control-label" for="product_food">สินค้า/อาหาร</label>
                                                        </div>

                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="home_hotel" name="type_job[]" value="7"
                                                            <?php echo $check_home_hotel; ?> >
                                                            <label class="custom-control-label" for="home_hotel">บ้าน/โรงแรม/สถาปัตยกรรม</label>
                                                        </div>

                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="ordination" name="type_job[]" value="8"
                                                            <?php echo $check_ordination; ?> >
                                                            <label class="custom-control-label" for="ordination">งานอุปสมบท</label>
                                                        </div>

                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="more_more" name="type_job[]" value="9"
                                                            <?php echo $check_more_more; ?> >
                                                            <label class="custom-control-label" for="more_more">อื่นๆ</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group mb-3">
                                            <label for="basic-url" class="label-text-head">ชั่วโมงทำงานต่อวัน</label>
                                            <input type="number" class="form-control" pattern="[A-Za-z-0-9]{20}" title="ระบุจำนวนชั่วโมง" name="hour" value="<?php echo $work_hour; ?>" required 
                                            style="font-family: DB Adman X; font-style: normal; font-weight: normal; font-size: 25px; line-height: 27px; color: #057ADF;">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="basic-url" class="label-text-head">ค่าจ้างเริ่มต้น</label>
                                                <input type="number" class="form-control" pattern="[A-Za-z-0-9]{20}" title="ระบุจำนวนค่าจ้างของคุณ" name="starting_wage" value="<?php echo $Starting_wage; ?>" required 
                                                style="font-family: DB Adman X; font-style: normal; font-weight: normal; font-size: 25px; line-height: 27px; color: #057ADF;">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="basic-url" class="label-text-head">ค่าจ้างสูงสุด</label>
                                                <input type="number" class="form-control" pattern="[A-Za-z-0-9]{20}" title="ระบุจำนวนค่าจ้างของคุณ" name="highest_wage" value="<?php echo $Highest_wage; ?>" required  
                                                style="font-family: DB Adman X; font-style: normal; font-weight: normal; font-size: 25px; line-height: 27px; color: #057ADF;">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="col" style="margin-top: 10px;">
                                        <div class="save-bt">
                                            <button name="<?php echo $submit; ?>" type="submit" class="btn btn-primary">บันทึก</button>
                                        </div>
                                    </div>
                                    
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


    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="js/bootstrap.min.js" ></script>

    <script>
        $( document ).ready(function() {
            $('#province').val(<?php echo json_encode($province); ?>);
        });
    </script>

    


</body>
</html>