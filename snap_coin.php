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
    <div class="wrapper" style="background-color: #f0f8ff;">
        <?php
            require_once("header.php");
            require_once('./db/db_connect.php');

            if (isset($_SESSION['id'])) {
                $sql = "SELECT * FROM `user` WHERE id = '".$_SESSION['id']."'";
                $result = mysqli_query($connect, $sql);
                $row = mysqli_fetch_array($result);
                $avatar = $row['avatar'];
                $name_surname = $row['name_surname'];
                $id_passport_number = $row['id_passport_number'];
                $birthday = $row['birthday'];
                $phone = $row['phone'];
                $submit = 'edit';
            } else {
                $avatar = 'profile/profile_upload.jpg';
                $name_surname = '';
                $id_passport_number = '';
                $birthday = '';
                $phone = '';
                $submit = 'add';
            }

        ?>
            <!----- account setting ------>
            <div class="container" style="background-color: #f0f8ff;">
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
                                            <div class="stardust-dropdown">
                                                <div class="stardust-dropdown__item-header">
                                                    <a class="userpage-sidebar-menu-entry" href="snap_verified.php">
                                                        <div class="userpage-sidebar-menu-entry__text">Verified Member</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="stardust-dropdown" style="background-color: #f0f8ff;border-left: solid #282828;border-radius: 2px;">
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

                                    <div class="c-coin-head-text">
                                        <h3>Coin</h3>
                                        <h4>Coin คือ เงินค่าจ้างจากการทำงานบน changphapa snap ซึ่งฟรีแลนซ์จะได้รับหลังจากผู้ว่าจ้างทำการอนุมัติงานขั้นสุดท้ายของคุณเรียบร้อยแล้ว</h4>
                                        <h4>Coin นี้จะถูกสะสมไว้และโอนไปยังบัญชีธนาคารที่คุณใส่ไว้ในหน้าโปรไฟล์ตามรอบการโอนเงิน Coin ของคุณไม่สามารถนำมาใช้ในการจ้างช่างภาพบนเว็บได้</h4>
                                    </div>

                                    <div class="c-coin-box-account">
                                        <div class="box-coin">
                                            <div class="coin_snap">
                                                <?php
                                                    $sql_photographer = "SELECT * FROM `Photographers` WHERE user_id = '".$_SESSION['id']."'";
                                                    $result_photographer = mysqli_query($connect, $sql_photographer);
                                                    $row_photographer = mysqli_fetch_array($result_photographer);

                                                    $sql_reserve = "SELECT * 
                                                    FROM reserve_package r
                                                    INNER JOIN photographer_package p ON r.id_package = p.id 
                                                    WHERE r.photographer_id = '".$row_photographer["id"]."'
                                                    AND r.status = 'finish'";
                                                    $result_reserve = mysqli_query($connect, $sql_reserve);
                                                    $coin = 0;
                                                    while ($row_reserve = mysqli_fetch_array($result_reserve)) {
                                                        $coin += $row_reserve['price'];
                                                    }

                                                    $sql_coin = "SELECT * FROM `photographer_coin_transaction` 
                                                    WHERE photographer_id = '".$row_photographer["id"]."'";
                                                    $result_coin = mysqli_query($connect, $sql_coin);
                                                    $pending_coin = 0;
                                                    $success_coin = 0;
                                                    while ($row_coin = mysqli_fetch_array($result_coin)) {
                                                        $coin -= $row_coin['request_coin'];
                                                        if ($row_coin['status'] == "request") {
                                                            $pending_coin += $row_coin['request_coin'];
                                                        } else if ($row_coin['status'] == "success") {
                                                            $success_coin += $row_coin['request_coin'];
                                                        }
                                                    }

                                                ?>
                                                <h3> <i class="fas fa-coins"></i> Coin ที่มีอยู่ : <?php echo $coin; ?> บาท</h3>
                                                <br><h3> <i class="fas fa-coins"></i> Coin ที่รอยืนยัน : <?php echo $pending_coin; ?> บาท</h3>
                                                <br><h3> <i class="fas fa-coins"></i> Coin ที่ยืนยัน : <?php echo $success_coin; ?> บาท</h3>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="c-coin-modal">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="width: 50%;"><h4>ถอน coin</h4></button>
                                        <!-- Modal -->
                                        <form action="./db/request_coin.php" method="POST">
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title" id="exampleModalCenterTitle">คำขอ coin ของท่าน</h3>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="snap-condition">
                                                            <h4> ภายใต้เงื่อนไขการถอนเงินจาก coin </h4>
                                                            <h5> - รอแอดมินดำเนินการโอนเงินภายในระยะเวลา 4 ชั่วโมง</h5>
                                                            <h5> - กรุณาตรวจสอบข้อมูลเลขที่บัญชีและธนาคารของท่านให้ถูกต้อง</h5>
                                                        </div>
                                                        <input type="number" name="coin" value="<?php echo $coin; ?>" hidden>
                                                        <input type="text" name="photographer_id" value="<?php echo $row_photographer["id"]; ?>" hidden>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                                        <button type="submit" class="btn btn-primary">ยืนยัน</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                    
                                </div>
                                <!-- menu-bg -->

                            </div>

                        </div>
                    </div>
                    <!-- row -->
                </div>
            </div>
        
        

    </div>
    <!-- end wrapper -->

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="js/bootstrap.min.js" ></script>

    


</body>
</html>