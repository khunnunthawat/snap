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

            if (isset($_SESSION['id'])) {
                $sql = "SELECT * FROM user u
                 INNER JOIN Photographers p ON p.user_id = u.id
                 WHERE u.id = '".$_SESSION['id']."'";
                $result = mysqli_query($connect, $sql);
                $row = mysqli_fetch_array($result);
                $name_surname = $row['name_surname'];
                $verify = $row['verify'];
            }

        ?>
        
        <form action="./db/upload_verify.php" method="POST" style="background-color: #f0f8ff;" enctype="multipart/form-data">
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
                                            <div class="stardust-dropdown">
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
                                            <div class="stardust-dropdown" style="background-color: #f0f8ff;border-left: solid #282828;border-radius: 2px;">
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
                                    
                                    <div class="v-head-box-verified">
                                        <h3 class="ex-verified">การยืนยันตัวตน Verified Member</h3>
                                        
                                            <?php
                                            if($verify != 'verified'){
                                               echo '<h4> สถานะ : ยังไม่ได้ทำการยืนยันตัวตน </h4>';//สีดำ
                                            } else {
                                               echo '<h4> สถานะ : ยืนยันตัวตนแล้ว </h4>
                                               <div class="verified">
                                                <h3><img src="img/icons/verified.svg" alt="">Verified</h3></div>';//สีฟ้า
                                            }
                                            ?>
                                            
                                        
                                        <div class="text-list">
                                            <h5> <i class="fas fa-circle"></i> สร้างความน่าเชื่อถือให้กับลูกค้า มีเครื่องหมาย Verified Member </h5>
                                            <h5> <i class="fas fa-circle"></i> แสดงสัญลักษณ์ Verified Member บนหน้า Profile ของท่าน </h5>
                                            <h5> <i class="fas fa-circle"></i> แสดงสัญลักษณ์ Verified Member ในหน้าการค้นหาช่างภาพ </h5>
                                        </div>
                                    </div>

                                    <div class="v-ex-verified-profie">
                                        <div class="verified_profile">
                                            <img src="img/logo/verified_ex_profile.svg">
                                        </div>
                                    </div>

                                    <div class="v-step-verified">
                                        <h3 class="ex-verified">ขั้นตอนการยืนยันตัวตน Verified Member</h3>
                                        <div class="text-list">
                                            <h5> <i class="fas fa-circle"></i> ถ่ายภาพใบหน้าคู่กับบัตรประชาชน โดยเห็นใบหน้าและบัตรประชาชนชัดเจน </h5>
                                            <h5> <i class="fas fa-circle"></i> ถ่ายสำเนาบัตรประชาชน พร้อมลายเซ็นบนสำเนาบัตรประชาชน </h5>
                                            <h5 style="color: #ff4797"> <i class="fas fa-circle" style="color: #FFF;"></i> (ใช้เฉพาะสมัครเป็นช่างภาพในเว็บไซต์ changphaphsnap.com เท่านั้น) </h5>
                                            <h5> <i class="fas fa-circle"></i> ชำระเงินค่าดำเนินการยืนยันตัวตน Verified Member  </h5>
                                            <h5 style="color: #057ADF"> <i class="fas fa-circle" style="color: #FFF;"></i> -  ค่าดำเนินการ จำนวน 100 บาท (ตลอดชีพ)  </h5>
                                            <h5> <i class="fas fa-circle" style="color: #FFF;"></i> -  พร้อมแนบหลักฐานการชำระเงิน </h5>
                                        </div>
                                    </div>

                                    <div class="v-bank-verified">
                                        <h4 class="ex-verified-1">คุณสามารถชำระเงินค่าดำเนินการยิืนยันตัวตน Verified Member</h4>
                                        <h4 class="ex-verified-1">ผ่านทาง เคาท์เตอร์ธนาคาร, Online Banking หรือ ตู้ ATM</h4>
                                        <h4 class="ex-verified-1"> เข้าบัญชี ธนาคารกสิกรไทยหรือธนาคารกรุงไทย ตามรายละเอียดดังนี้</h4>
                                        <div class="bank-list">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="bank-detail-verified">
                                                        <div class="bank-logo-verified">
                                                            <img src="img/logo_bank/kbank.jpg">
                                                        </div>
                                                        <div class="bank-right-verified">
                                                            <div class="bank-detail-verified">
                                                                <div class="account-number">
                                                                    <span>เลขที่บัญชี :</span> <p>064-161137-9</p> 
                                                                </div>
                                                                <div class="account-name">
                                                                    <span>ชื่อบัญชี :</span> <p>บริษัท ช่างภาพสแนพ จำกัด</p>
                                                                </div>
                                                                <div class="branch">
                                                                    <span>สาขา :</span> <p>เซ็นทรัลลาดพร้าว</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="bank-detail-verified">
                                                        <div class="bank-logo-verified">
                                                            <img src="img/logo_bank/ktb.jpg">
                                                        </div>
                                                        <div class="bank-right-verified">
                                                            <div class="bank-detail-verified">
                                                                <div class="account-number">
                                                                    <span>เลขที่บัญชี :</span> <p>984-9-44303-0</p> 
                                                                </div>
                                                                <div class="account-name">
                                                                    <span>ชื่อบัญชี :</span> <p>บริษัท ช่างภาพสแนพ จำกัด</p>
                                                                </div>
                                                                <div class="branch">
                                                                    <span>สาขา :</span> <p>เซ็นทรัลเมืองทอง</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <?php 
                                    if($verify != 'verified'){
                                    ?>
                                        <div class="form-verified">   
                                            <h3>แบบฟอร์มขอดำเนินการยืนยันตัวตน changphaphsnap</h3>
                                        </div>

                                        <div class="v-transfer-verified1">
                                            <h5>ถ่ายภาพคู่บัตรประชาชน</h5>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="photo_1" class="custom-file-input" id="photo_1">
                                                    <label class="custom-file-label" for="photo_1">Choose file</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="v-transfer-verified2">
                                            <h5>สำเนาบัตรประชาชน</h5>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="photo_2" class="custom-file-input" id="photo_2">
                                                    <label class="custom-file-label" for="photo_2">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="v-transfer-verified3">
                                            <h5>หลักฐานการชำระเงิน</h5>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="photo_3" class="custom-file-input" id="photo_3">
                                                    <label class="custom-file-label" for="photo_3">Choose file</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="v-remind-verified">
                                            <h4>* เอกสารทั้งหมด ทำลายน้ำระบุการใช้งาน (ใช้เฉพาะสมัครเป็นช่างภาพในเว็บไซต์ changphaphsnap.com เท่านั้น)</h4>
                                            <h4>* หลักฐานทั้งหมดจะไม่เปิดเผยสู่สาธารณะเป็นอันขาด</h4>
                                        </div>
                                        
                                        <div class="v-send-verified">
                                            <div class="v-right-verified">
                                                <h4>กรุณาตรวจสอบข้อมูลให้ถูกต้อง</h4>
                                                <button name="<?php echo $submit; ?>" type="submit" class="btn btn-primary">ส่ง</button>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    
                                    
                                    
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
            $("#photo_1").on("change", function() {
              var fileName = $(this).val().split("\\").pop();
              $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
            $("#photo_2").on("change", function() {
              var fileName = $(this).val().split("\\").pop();
              $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
            $("#photo_3").on("change", function() {
              var fileName = $(this).val().split("\\").pop();
              $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
        </script>


</body>
</html>