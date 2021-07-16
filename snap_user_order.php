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
        
        <div action="" style="background-color: #f0f8ff;">
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
                                            <div class="stardust-dropdown" style="background-color: #f0f8ff;border-left: solid #282828;border-radius: 2px;">
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
                                    <?php
                                    function DateThai($strDate)
                                    {
                                        $strYear = date("Y",strtotime($strDate))+543;
                                        $strMonth= date("n",strtotime($strDate));
                                        $strDay= date("j",strtotime($strDate));
                                        $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
                                        $strMonthThai=$strMonthCut[$strMonth];
                                        return "$strDay $strMonthThai $strYear";
                                    }
                                    ?>  
                            
                                    <!-- เมนูสถานะ -->

                                    <ul class="purchase-list-page__tabs-container nav nav-tabs" role="tablist" style="border-bottom: 1px solid #ffffff;">
                                        <li class="nav-item purchase-list-page__tab purchase-list-page__tab--selected">
                                            <a class="nav-link active purchase-list-page__tab-label" id="home-tab" data-toggle="tab" href="#all" role="tab" aria-controls="home" aria-selected="true">รายการทั้งหมด</a>
                                        </li>
                                        <li class="nav-item purchase-list-page__tab">
                                            <a class="nav-link purchase-list-page__tab-label" id="profile-tab" data-toggle="tab" href="#progress" role="tab" aria-controls="progress" aria-selected="false">กำลังดำเนินการ</a>
                                        </li>
                                        <li class="nav-item purchase-list-page__tab">
                                            <a class="nav-link purchase-list-page__tab-label" id="contact-tab" data-toggle="tab" href="#paid" role="tab" aria-controls="paid" aria-selected="false">ที่ต้องชำระ</a>
                                        </li>
                                        <li class="nav-item purchase-list-page__tab">
                                            <a class="nav-link purchase-list-page__tab-label" id="contact-tab" data-toggle="tab" href="#completed" role="tab" aria-controls="completed" aria-selected="false">สำเร็จแล้ว</a>
                                        </li>
                                        <li class="nav-item purchase-list-page__tab">
                                            <a class="nav-link purchase-list-page__tab-label" id="contact-tab" data-toggle="tab" href="#cancel" role="tab" aria-controls="cancel" aria-selected="false">ยกเลิกแล้ว</a>
                                        </li>
                                    </ul>
                                    
                                    <div class="tab-content" id="myTabContent">

                                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="purchase-list-page__checkout-list-card-container">
                                                <div class="purchase-list-page__checkout-card-wrapper">
                                                    <div class="order-card__container">
                                                        <div class="order-card__content-wrapper">
                                                            <div class="order-card__content">
                                                                <?php
                                                                $sql = "SELECT r.id, r.reserve_date, t.name, r.status, p.price, u.avatar, pg.username,
                                                                p.package_name, p.hour, r.work_date , p.img_package, r.file_tax, r.location, r.scopeworks
                                                                FROM reserve_package r 
                                                                INNER JOIN photographer_package p ON r.id_package = p.id
                                                                INNER JOIN type_job t ON t.id = p.type_id
                                                                INNER JOIN Photographers pg ON pg.id = r.photographer_id
                                                                INNER JOIN user u ON u.id = r.photographer_id
                                                                WHERE pg.user_id = '".$_SESSION['id']."'";

                                                                $result = mysqli_query($connect, $sql);

                                                                while($row = mysqli_fetch_array($result)){
                                                                    $date = explode(" - ", $row['work_date']);
                                                                    $date_reserve = explode(" ", $row['reserve_date']);

                                                                    if($row['status'] == 'finish'){
                                                                        $button = '
                                                                            <div class="purchase-card-buttons__show-button-wrapper">
                                                                                <button type="button" data-toggle="modal" data-target="#exampleModalLong1'.$row['id'].'" class="snap-button-outline1 snap-button-outline--fill snap-button-outline--primary">
                                                                                    <span class="purchase-card-buttons__button-content"> ดูรายละเอียดการจอง </span>
                                                                                </button>
                                                                            </div>
                                                                            ';
                                                                    } else if($row['status'] == 'cancel'){
                                                                        $button = '';
                                                                    } else {
                                                                        $button = '
                                                                            <a href="user_payment_input.php?id_reserve='.$row['id'].'">
                                                                                <div class="purchase-card-buttons__show-button-wrapper">
                                                                                    <button class="snap-button-solid snap-button-solid--fill snap-button-solid--primary">
                                                                                        <span class="purchase-card-buttons__button-content"> ชำระเงิน </span>
                                                                                    </button>
                                                                                </div>
                                                                            </a>
                                                                            <div class="purchase-card-buttons__show-button-wrapper">
                                                                                <button type="button" data-toggle="modal" data-target="#exampleModalLong1'.$row['id'].'" class="snap-button-outline1 snap-button-outline--fill snap-button-outline--primary">
                                                                                    <span class="purchase-card-buttons__button-content"> ดูรายละเอียดการจอง </span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="purchase-card-buttons__open-more-wrapper">
                                                                                <button class="snap-button-outline2 snap-button-outline--fill snap-button-outline--primary">
                                                                                    <span class="purchase-card-buttons__button-content"> ยกเลิกการจอง </span>
                                                                                </button>
                                                                            </div>';
                                                                    }
                                                                    
                                                                    echo '
                                                                    <div class="order-content__container">
                                                                        <div class="order-content__header">
                                                                            <div class="order-content__header__seller">
                                                                                <div class="snap-avatar" style="width:50px; height:50px;">
                                                                                    <img class="snap-avatar__img" src="img/profile/'.$row['avatar'].'">
                                                                                </div>
                                                                                <span class="order-content__header__seller__name">'.$row['username'].'</span>
                                                                            </div>
                                                                            <div class="order-delivery-status__wrapper">
                                                                                <a class="order-content__header__delivery-status" href="#">
                                                                                    <span class="order-delivery-status__desc">
                                                                                        สถานะ
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="order-content-status">
                                                                                <h3 class="status-home">'.$row['status'].'</h3>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row" style="align-items: center;">
                                                                            <div class="col-8">
                                                                                <h3 style="font-size: 25px; color: #057ADF; margin-top: 15px; margin-left: 5px;"> เลขที่การจอง : #'.$row['id'].' </h3>
                                                                                <div class="package-ex-photo">
                                                                                    <img src="img/package/'.$row['img_package'].'" alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-4">
                                                                                <div class="package-info-detail">
                                                                                    <h3> '.$row['package_name'].' </h3>
                                                                                    <p><i class="far fa-clock"></i> '.$row['hour'].' ชั่วโมง</p>
                                                                                    <h3>ราคา : '.$row['price'].' บาท</h3>
                                                                                </div>
                                                                                <div class="checkInOut-time">
                                                                                    <div class="timeLable">เริ่มงาน</div>
                                                                                    <div class="time">'.DateThai($date[0]).'</div>
                                                                                </div>
                                                                                <div class="checkInOut-time">
                                                                                    <div class="timeLable">จบงาน</div>
                                                                                    <div class="time">'.DateThai($date[1]).'</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="order-card__buttons-container">
                                                                        <div class="purchase-card-buttons__wrapper">
                                                                            <div class="purchase-card-buttons__total-payment">
                                                                                <span class="purchase-card-buttons__label-price"> ยอดที่ต้องชำระทั้งหมด : </span>
                                                                                <span class="purchase-card-buttons__total-price"> '.$row['price'].' ฿ </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="purchase-card-buttons__container">
                                                                            <div class="purchase-card-buttons__text-info">
                                                                                <span class="purchase-text-info">
                                                                                    <span>
                                                                                        วันที่ทำการจอง :
                                                                                    </span>
                                                                                    <div class="snap-drawer ">
                                                                                        <span class="purchase-text-info__hover-point"> '.DateThai($date_reserve[0]).' </span>
                                                                                    </div>
                                                                                </span>
                                                                            </div>
                                                                            '.$button.'
                                                                        </div>
                                                                    </div>
                                                                    ';

                                                                echo '<div class="modal fade" id="exampleModalLong1'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                                                <div class="modal-dialog" role="document">
                                                                                    <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title" id="exampleModalLongTitle">รายละเอียดการจองของท่าน</h5>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">

                                                                                        <div class="user_order_head">
                                                                                            <h3> เลขที่การจอง : #'.$row['id'].' </h3>
                                                                                        </div>

                                                                                        <div class="m-packageInfo">
                                                                                            <div class="package">
                                                                                                <div class="packageInfo-photographer" >
                                                                                                    <div class="row" style="align-items: center;">
                                                                                                        <div class="col-6">
                                                                                                            <div class="packagephoto">
                                                                                                                <img src="img/package/'.$row['img_package'].'" alt="">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-6">
                                                                                                            <div class="packageinfo-detail">
                                                                                                                <h4> '.$row['package_name'].' </h4>
                                                                                                                <p><i class="far fa-clock"></i> '.$row['hour'].' ชั่วโมง</p>
                                                                                                                <h3>ราคา : '.$row['price'].' บาท</h3>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        
                                                                                        <!-- บอกวันที่จะจอง -->
                                                                                        <div class="m-dateInfo m-module-normal">
                                                                                            <div class="m-checkInOut">
                                                                                                <div class="row">
                                                                                                    <div class="col-6">
                                                                                                        <div class="m-checkInOut_time">
                                                                                                            <div class="timeLable"> วันที่ : เริ่มงาน </div>
                                                                                                            <div class="time">'.DateThai($date[0]).'</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-6">
                                                                                                        <div class="m-checkInOut_time">
                                                                                                            <div class="timeLable"> วันที่ : จบงาน </div>
                                                                                                            <div class="time">'.DateThai($date[1]).'</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>   
                                                                                            </div>
                                                                                        </div>

                                                                                        <!-- ราคา -->
                                                                                        <div class="m-priceDetail">
                                                                                            <div class="m-priceDetail_content">
                                                                                                <ul class="priceList">
                                                                                                    <div class="row">
                                                                                                        <div class="col-12">
                                                                                                            <li>
                                                                                                                <div class="priceItem">
                                                                                                                    <span class="priceLable">1 วัน</span>
                                                                                                                    <span class="priceCell">
                                                                                                                        <div  currency="THB" class="u-price">
                                                                                                                            <span>
                                                                                                                                <span class="u-txt u-txt-warn u-price_num" id="price"> '.$row['price'].' </span>
                                                                                                                                <span class="u-txt u-txt-warn u-price_currency">บาท</span>
                                                                                                                            </span>
                                                                                                                        </div>
                                                                                                                    </span>
                                                                                                                </div>
                                                                                                            </li>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-12">
                                                                                                            <li class="priceItem summary">
                                                                                                                <span class="priceLable">ยอดทั้งหมด </span>
                                                                                                                <span class="priceCell">
                                                                                                                    <div class="u-price" currency="THB">
                                                                                                                        <span>
                                                                                                                            <span id="actual-price" hidden> price </span>
                                                                                                                            <input class="total-price" name="total-price" id="total-price" type="text" value="price" hidden/>
                                                                                                                            <span class="u-txt u-txt-warn u-price_num" id="show-price"> '.$row['price'].' </span> 
                                                                                                                            <span class="u-txt u-txt-warn u-price_currency">บาท</span>
                                                                                                                        </span>
                                                                                                                    </div>
                                                                                                                </span>
                                                                                                            </li>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                        
                                                                                        <div class="m-JobDescription">
                                                                                            <h5 class="guestInfo_title">รายละเอียดงาน</h5>
                                                                                            <div class="m-guest-item">
                                                                                                <div class="guestLable">
                                                                                                    <label>
                                                                                                        <i class="fas fa-camera" aria-hidden="true"></i>ประเภทงาน
                                                                                                    </label>
                                                                                                    <p> '.$row['name'].' </p>
                                                                                                </div>
                                                                                                <div class="guestContainer">
                                                                                                    <div>
                                                                                                        <div class="guestContainer-input">
                                                                                                            <div class="form-group">
                                                                                                                <label for="exampleFormControlTextarea1">รายละเอียดงานเพิ่มเติม</label>
                                                                                                                <textarea class="form-control" id="exampleFormControlTextarea1" name="detail_work" rows="6">
                                                                                                                '.$row['scopeworks'].'
                                                                                                                </textarea>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div> 
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="m-location">
                                                                                            <div class="m-guest-item">
                                                                                                <div class="location">
                                                                                                    <textarea class="form-control" id="exampleFormControlTextarea1"  name="location" rows="3">
                                                                                                    '.$row['location'].'
                                                                                                    </textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-12">
                                                                                            <img src="./slip/'.$row['file_tax'].'" id="preview" class="img-thumbnail" style="width: 75%;">
                                                                                        </div>


                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                                                                                    </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>';
                                                            }
                                                        ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="progress" role="tabpanel" aria-labelledby="progress-tab">
                                            <div class="purchase-list-page__checkout-list-card-container">
                                                <div class="purchase-list-page__checkout-card-wrapper">
                                                    <div class="order-card__container">
                                                        <div class="order-card__content-wrapper">
                                                            <div class="order-card__content">
                                                            <?php
                                                                $sql = "SELECT r.id, r.reserve_date, t.name, r.status, p.price, u.avatar, pg.username,
                                                                p.package_name, p.hour, r.work_date , p.img_package, r.file_tax, r.location, r.scopeworks
                                                                FROM reserve_package r 
                                                                INNER JOIN photographer_package p ON r.id_package = p.id
                                                                INNER JOIN type_job t ON t.id = p.type_id
                                                                INNER JOIN Photographers pg ON pg.id = r.photographer_id
                                                                INNER JOIN user u ON u.id = r.photographer_id
                                                                WHERE pg.user_id = '".$_SESSION['id']."' AND (r.status = 'reserve' OR r.status = 'working')";

                                                                $result = mysqli_query($connect, $sql);

                                                                while($row = mysqli_fetch_array($result)){
                                                                    $date = explode(" - ", $row['work_date']);
                                                                    $date_reserve = explode(" ", $row['reserve_date']);

                                                                    $status = '';

                                                                    if ($row['status'] == 'reserve') {
                                                                        $status = "รอช่างภาพยืนยันการรับงาน";
                                                                        $button = '
                                                                            <a href="user_payment_input.php?id_reserve='.$row['id'].'">
                                                                                <div class="purchase-card-buttons__show-button-wrapper">
                                                                                    <button class="snap-button-solid snap-button-solid--fill snap-button-solid--primary ">
                                                                                        <span class="purchase-card-buttons__button-content"> ชำระเงิน </span>
                                                                                    </button>
                                                                                </div>
                                                                            </a>
                                                                            <div class="purchase-card-buttons__show-button-wrapper">
                                                                                <button type="button" data-toggle="modal" data-target="#exampleModalLong2'.$row['id'].'" class="snap-button-outline1 snap-button-outline--fill snap-button-outline--primary">
                                                                                    <span class="purchase-card-buttons__button-content"> ดูรายละเอียดการจอง </span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="purchase-card-buttons__open-more-wrapper">
                                                                                <button class="snap-button-outline2 snap-button-outline--fill snap-button-outline--primary " type="button"
                                                                                data-toggle="modal" data-target="#cancel'.$row['id'].'">
                                                                                    <span class="purchase-card-buttons__button-content"> ยกเลิกการจอง </span>
                                                                                </button>
                                                                            </div>';
                                                                    } else {
                                                                        $status = "กำลังถ่ายงาน";
                                                                        $button = '
                                                                           <div class="purchase-card-buttons__show-button-wrapper">
                                                                                <button type="button" data-toggle="modal" data-target="#exampleModalLong2'.$row['id'].'" class="snap-button-outline1 snap-button-outline--fill snap-button-outline--primary">
                                                                                    <span class="purchase-card-buttons__button-content"> ดูรายละเอียดการจอง </span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="purchase-card-buttons__open-more-wrapper">
                                                                                <button class="snap-button-outline2 snap-button-outline--fill snap-button-outline--primary " type="button"
                                                                                data-toggle="modal" data-target="#cancel'.$row['id'].'">
                                                                                    <span class="purchase-card-buttons__button-content"> ยกเลิกการจอง </span>
                                                                                </button>
                                                                            </div>';
                                                                    }
                                                                    
                                                                    
                                                                    echo '
                                                                    <div class="order-content__container">
                                                                        <div class="order-content__header">
                                                                            <div class="order-content__header__seller">
                                                                                <div class="snap-avatar" style="width:50px; height:50px;">
                                                                                    <img class="snap-avatar__img" src="img/profile/'.$row['avatar'].'">
                                                                                </div>
                                                                                <span class="order-content__header__seller__name">'.$row['username'].'</span>
                                                                            </div>
                                                                            <div class="order-delivery-status__wrapper">
                                                                                <a class="order-content__header__delivery-status" href="#">
                                                                                    <span class="order-delivery-status__desc">
                                                                                        สถานะ
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="order-content-status">
                                                                                <h3 class="status-progress"> '.$status.' </h3>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row" style="align-items: center;">
                                                                            <div class="col-8">
                                                                                <h3 style="font-size: 25px; color: #057ADF; margin-top: 15px; margin-left: 5px;"> เลขที่การจอง : #'.$row['id'].' </h3>
                                                                                <div class="package-ex-photo">
                                                                                    <img src="img/package/'.$row['img_package'].'" alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-4">
                                                                                <div class="package-info-detail">
                                                                                    <h3> '.$row['package_name'].' </h3>
                                                                                    <p><i class="far fa-clock"></i> '.$row['hour'].' ชั่วโมง</p>
                                                                                    <h3>ราคา : '.$row['price'].' บาท</h3>
                                                                                </div>
                                                                                <div class="checkInOut-time">
                                                                                    <div class="timeLable">เริ่มงาน</div>
                                                                                    <div class="time">'.DateThai($date[0]).'</div>
                                                                                </div>
                                                                                <div class="checkInOut-time">
                                                                                    <div class="timeLable">จบงาน</div>
                                                                                    <div class="time">'.DateThai($date[1]).'</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="order-card__buttons-container">
                                                                        <div class="purchase-card-buttons__wrapper">
                                                                            <div class="purchase-card-buttons__total-payment">
                                                                                <span class="purchase-card-buttons__label-price"> ยอดที่ต้องชำระทั้งหมด : </span>
                                                                                <span class="purchase-card-buttons__total-price"> '.$row['price'].' ฿ </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="purchase-card-buttons__container">
                                                                            <div class="purchase-card-buttons__text-info">
                                                                                <span class="purchase-text-info">
                                                                                    <span>
                                                                                        วันที่ทำการจอง :
                                                                                    </span>
                                                                                    <div class="snap-drawer ">
                                                                                        <span class="purchase-text-info__hover-point"> '.DateThai($date_reserve[0]).' </span>
                                                                                    </div>
                                                                                </span>
                                                                            </div>
                                                                            '.$button.'
                                                                        </div>
                                                                    </div>
                                                                    ';

                                                                echo '<div class="modal fade" id="exampleModalLong2'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                                                <div class="modal-dialog" role="document">
                                                                                    <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title" id="exampleModalLongTitle">รายละเอียดการจองของท่าน</h5>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">

                                                                                        <div class="user_order_head">
                                                                                            <h3> เลขที่การจอง : #'.$row['id'].' </h3>
                                                                                        </div>

                                                                                        <div class="m-packageInfo">
                                                                                            <div class="package">
                                                                                                <div class="packageInfo-photographer" >
                                                                                                    <div class="row" style="align-items: center;">
                                                                                                        <div class="col-6">
                                                                                                            <div class="packagephoto">
                                                                                                                <img src="img/package/'.$row['img_package'].'" alt="">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-6">
                                                                                                            <div class="packageinfo-detail">
                                                                                                                <h4> '.$row['package_name'].' </h4>
                                                                                                                <p><i class="far fa-clock"></i> '.$row['hour'].' ชั่วโมง</p>
                                                                                                                <h3>ราคา : '.$row['price'].' บาท</h3>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        
                                                                                        <!-- บอกวันที่จะจอง -->
                                                                                        <div class="m-dateInfo m-module-normal">
                                                                                            <div class="m-checkInOut">
                                                                                                <div class="row">
                                                                                                    <div class="col-6">
                                                                                                        <div class="m-checkInOut_time">
                                                                                                            <div class="timeLable"> วันที่ : เริ่มงาน </div>
                                                                                                            <div class="time">'.DateThai($date[0]).'</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-6">
                                                                                                        <div class="m-checkInOut_time">
                                                                                                            <div class="timeLable"> วันที่ : จบงาน </div>
                                                                                                            <div class="time">'.DateThai($date[1]).'</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>   
                                                                                            </div>
                                                                                        </div>

                                                                                        <!-- ราคา -->
                                                                                        <div class="m-priceDetail">
                                                                                            <div class="m-priceDetail_content">
                                                                                                <ul class="priceList">
                                                                                                    <div class="row">
                                                                                                        <div class="col-12">
                                                                                                            <li>
                                                                                                                <div class="priceItem">
                                                                                                                    <span class="priceLable">1 วัน</span>
                                                                                                                    <span class="priceCell">
                                                                                                                        <div  currency="THB" class="u-price">
                                                                                                                            <span>
                                                                                                                                <span class="u-txt u-txt-warn u-price_num" id="price"> '.$row['price'].' </span>
                                                                                                                                <span class="u-txt u-txt-warn u-price_currency">บาท</span>
                                                                                                                            </span>
                                                                                                                        </div>
                                                                                                                    </span>
                                                                                                                </div>
                                                                                                            </li>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-12">
                                                                                                            <li class="priceItem summary">
                                                                                                                <span class="priceLable">ยอดทั้งหมด </span>
                                                                                                                <span class="priceCell">
                                                                                                                    <div class="u-price" currency="THB">
                                                                                                                        <span>
                                                                                                                            <span id="actual-price" hidden> price </span>
                                                                                                                            <input class="total-price" name="total-price" id="total-price" type="text" value="price" hidden/>
                                                                                                                            <span class="u-txt u-txt-warn u-price_num" id="show-price"> '.$row['price'].' </span> 
                                                                                                                            <span class="u-txt u-txt-warn u-price_currency">บาท</span>
                                                                                                                        </span>
                                                                                                                    </div>
                                                                                                                </span>
                                                                                                            </li>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                        
                                                                                        <div class="m-JobDescription">
                                                                                            <h5 class="guestInfo_title">รายละเอียดงาน</h5>
                                                                                            <div class="m-guest-item">
                                                                                                <div class="guestLable">
                                                                                                    <label>
                                                                                                        <i class="fas fa-camera" aria-hidden="true"></i>ประเภทงาน
                                                                                                    </label>
                                                                                                    <p> '.$row['name'].' </p>
                                                                                                </div>
                                                                                                <div class="guestContainer">
                                                                                                    <div>
                                                                                                        <div class="guestContainer-input">
                                                                                                            <div class="form-group">
                                                                                                                <label for="exampleFormControlTextarea1">รายละเอียดงานเพิ่มเติม</label>
                                                                                                                <textarea class="form-control" id="exampleFormControlTextarea1" name="detail_work" rows="6">
                                                                                                                '.$row['scopeworks'].'
                                                                                                                </textarea>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div> 
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="m-location">
                                                                                            <div class="m-guest-item">
                                                                                                <div class="location">
                                                                                                    <textarea class="form-control" id="exampleFormControlTextarea1"  name="location" rows="3">
                                                                                                    '.$row['location'].'
                                                                                                    </textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-12">
                                                                                            <img src="./slip/'.$row['file_tax'].'" id="preview" class="img-thumbnail" style="width: 75%;">
                                                                                        </div>


                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                                                                                    </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>';

                                                                        echo '<form action="./db/cancel_order.php?id_reserve='.$row['id'].'" method="POST" >
                                                                                <div class="modal fade" id="cancel'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                <div class="modal-dialog" role="document">
                                                                                    <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title" id="exampleModalLabel">ยกเลิกการจอง #'.$row['id'].'</h5>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="submit" class="btn btn-primary">ตกลงยกเลิก</button>
                                                                                    </div>
                                                                                    </div>
                                                                                </div>
                                                                                </div>
                                                                                </form>';
                                                            }
                                                        ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="paid" role="tabpanel" aria-labelledby="paid-tab">
                                            <div class="purchase-list-page__checkout-list-card-container">
                                                <div class="purchase-list-page__checkout-card-wrapper">
                                                    <div class="order-card__container">
                                                        <div class="order-card__content-wrapper">
                                                            <div class="order-card__content">
                                                            <?php
                                                                $sql = "SELECT r.id, r.reserve_date, t.name, r.status, p.price, u.avatar, pg.username,
                                                                p.package_name, p.hour, r.work_date , r.file_tax, r.location, r.scopeworks
                                                                FROM reserve_package r 
                                                                INNER JOIN photographer_package p ON r.id_package = p.id
                                                                INNER JOIN type_job t ON t.id = p.type_id
                                                                INNER JOIN Photographers pg ON pg.id = r.photographer_id
                                                                INNER JOIN user u ON u.id = r.photographer_id
                                                                WHERE pg.user_id = '".$_SESSION['id']."' AND (r.status = 'confirm')";

                                                                $result = mysqli_query($connect, $sql);

                                                                while($row = mysqli_fetch_array($result)){
                                                                    $date = explode(" - ", $row['work_date']);
                                                                    $date_reserve = explode(" ", $row['reserve_date']);

                                                                    $button = '
                                                                            <a href="user_payment_input.php?id_reserve='.$row['id'].'">
                                                                                <div class="purchase-card-buttons__show-button-wrapper">
                                                                                    
                                                                                    <button class="snap-button-solid snap-button-solid--fill snap-button-solid--primary ">
                                                                                        <span class="purchase-card-buttons__button-content"> ชำระเงิน </span>
                                                                                    </button>
                                                                                </div>
                                                                               </a>
                                                                            <div class="purchase-card-buttons__show-button-wrapper">
                                                                                <button type="button" data-toggle="modal" data-target="#exampleModalLong3'.$row['id'].'" class="snap-button-outline1 snap-button-outline--fill snap-button-outline--primary">
                                                                                    <span class="purchase-card-buttons__button-content"> ดูรายละเอียดการจอง </span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="purchase-card-buttons__open-more-wrapper">
                                                                                <button class="snap-button-outline2 snap-button-outline--fill snap-button-outline--primary ">
                                                                                    <span class="purchase-card-buttons__button-content"> ยกเลิกการจอง </span>
                                                                                </button>
                                                                            </div>';
                                                                    
                                                                    echo '
                                                                    <div class="order-content__container">
                                                                        <div class="order-content__header">
                                                                            <div class="order-content__header__seller">
                                                                                <div class="snap-avatar" style="width:50px; height:50px;">
                                                                                    <img class="snap-avatar__img" src="img/profile/'.$row['avatar'].'">
                                                                                </div>
                                                                                <span class="order-content__header__seller__name">'.$row['username'].'</span>
                                                                            </div>
                                                                            <div class="order-delivery-status__wrapper">
                                                                                <a class="order-content__header__delivery-status" href="#">
                                                                                    <span class="order-delivery-status__desc">
                                                                                        สถานะ
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="order-content-status">
                                                                                <h3 class="status-paid">'.$row['status'].'</h3>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row" style="align-items: center;">
                                                                            <div class="col-8">
                                                                                <h3 style="font-size: 25px; color: #057ADF; margin-top: 15px; margin-left: 5px;"> เลขที่การจอง : #'.$row['id'].' </h3>
                                                                                <div class="package-ex-photo">
                                                                                    <img src="img/package/'.$row['img_package'].'" alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-4">
                                                                                <div class="package-info-detail">
                                                                                    <h3> '.$row['package_name'].' </h3>
                                                                                    <p><i class="far fa-clock"></i> '.$row['hour'].' ชั่วโมง</p>
                                                                                    <h3>ราคา : '.$row['price'].' บาท</h3>
                                                                                </div>
                                                                                <div class="checkInOut-time">
                                                                                    <div class="timeLable">เริ่มงาน</div>
                                                                                    <div class="time">'.DateThai($date[0]).'</div>
                                                                                </div>
                                                                                <div class="checkInOut-time">
                                                                                    <div class="timeLable">จบงาน</div>
                                                                                    <div class="time">'.DateThai($date[1]).'</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="order-card__buttons-container">
                                                                        <div class="purchase-card-buttons__wrapper">
                                                                            <div class="purchase-card-buttons__total-payment">
                                                                                <span class="purchase-card-buttons__label-price"> ยอดที่ต้องชำระทั้งหมด : </span>
                                                                                <span class="purchase-card-buttons__total-price"> '.$row['price'].' ฿ </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="purchase-card-buttons__container">
                                                                            <div class="purchase-card-buttons__text-info">
                                                                                <span class="purchase-text-info">
                                                                                    <span>
                                                                                        วันที่ทำการจอง :
                                                                                    </span>
                                                                                    <div class="snap-drawer ">
                                                                                        <span class="purchase-text-info__hover-point"> '.DateThai($date_reserve[0]).' </span>
                                                                                    </div>
                                                                                </span>
                                                                            </div>
                                                                            '.$button.'
                                                                        </div>
                                                                    </div>
                                                                    ';

                                                                echo '<div class="modal fade" id="exampleModalLong3'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                                                <div class="modal-dialog" role="document">
                                                                                    <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title" id="exampleModalLongTitle">รายละเอียดการจองของท่าน</h5>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">

                                                                                        <div class="user_order_head">
                                                                                            <h3> เลขที่การจอง : #'.$row['id'].' </h3>
                                                                                        </div>

                                                                                        <div class="m-packageInfo">
                                                                                            <div class="package">
                                                                                                <div class="packageInfo-photographer" >
                                                                                                    <div class="row" style="align-items: center;">
                                                                                                        <div class="col-6">
                                                                                                            <div class="packagephoto">
                                                                                                                <img src="img/package/'.$row['img_package'].'" alt="">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-6">
                                                                                                            <div class="packageinfo-detail">
                                                                                                                <h4> '.$row['package_name'].' </h4>
                                                                                                                <p><i class="far fa-clock"></i> '.$row['hour'].' ชั่วโมง</p>
                                                                                                                <h3>ราคา : '.$row['price'].' บาท</h3>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        
                                                                                        <!-- บอกวันที่จะจอง -->
                                                                                        <div class="m-dateInfo m-module-normal">
                                                                                            <div class="m-checkInOut">
                                                                                                <div class="row">
                                                                                                    <div class="col-6">
                                                                                                        <div class="m-checkInOut_time">
                                                                                                            <div class="timeLable"> วันที่ : เริ่มงาน </div>
                                                                                                            <div class="time">'.DateThai($date[0]).'</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-6">
                                                                                                        <div class="m-checkInOut_time">
                                                                                                            <div class="timeLable"> วันที่ : จบงาน </div>
                                                                                                            <div class="time">'.DateThai($date[1]).'</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>   
                                                                                            </div>
                                                                                        </div>

                                                                                        <!-- ราคา -->
                                                                                        <div class="m-priceDetail">
                                                                                            <div class="m-priceDetail_content">
                                                                                                <ul class="priceList">
                                                                                                    <div class="row">
                                                                                                        <div class="col-12">
                                                                                                            <li>
                                                                                                                <div class="priceItem">
                                                                                                                    <span class="priceLable">1 วัน</span>
                                                                                                                    <span class="priceCell">
                                                                                                                        <div  currency="THB" class="u-price">
                                                                                                                            <span>
                                                                                                                                <span class="u-txt u-txt-warn u-price_num" id="price"> '.$row['price'].' </span>
                                                                                                                                <span class="u-txt u-txt-warn u-price_currency">บาท</span>
                                                                                                                            </span>
                                                                                                                        </div>
                                                                                                                    </span>
                                                                                                                </div>
                                                                                                            </li>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-12">
                                                                                                            <li class="priceItem summary">
                                                                                                                <span class="priceLable">ยอดทั้งหมด </span>
                                                                                                                <span class="priceCell">
                                                                                                                    <div class="u-price" currency="THB">
                                                                                                                        <span>
                                                                                                                            <span id="actual-price" hidden> price </span>
                                                                                                                            <input class="total-price" name="total-price" id="total-price" type="text" value="price" hidden/>
                                                                                                                            <span class="u-txt u-txt-warn u-price_num" id="show-price"> '.$row['price'].' </span> 
                                                                                                                            <span class="u-txt u-txt-warn u-price_currency">บาท</span>
                                                                                                                        </span>
                                                                                                                    </div>
                                                                                                                </span>
                                                                                                            </li>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                        
                                                                                        <div class="m-JobDescription">
                                                                                            <h5 class="guestInfo_title">รายละเอียดงาน</h5>
                                                                                            <div class="m-guest-item">
                                                                                                <div class="guestLable">
                                                                                                    <label>
                                                                                                        <i class="fas fa-camera" aria-hidden="true"></i>ประเภทงาน
                                                                                                    </label>
                                                                                                    <p> '.$row['name'].' </p>
                                                                                                </div>
                                                                                                <div class="guestContainer">
                                                                                                    <div>
                                                                                                        <div class="guestContainer-input">
                                                                                                            <div class="form-group">
                                                                                                                <label for="exampleFormControlTextarea1">รายละเอียดงานเพิ่มเติม</label>
                                                                                                                <textarea class="form-control" id="exampleFormControlTextarea1" name="detail_work" rows="6">
                                                                                                                '.$row['scopeworks'].'
                                                                                                                </textarea>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div> 
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="m-location">
                                                                                            <div class="m-guest-item">
                                                                                                <div class="location">
                                                                                                    <textarea class="form-control" id="exampleFormControlTextarea1"  name="location" rows="3">
                                                                                                    '.$row['location'].'
                                                                                                    </textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-12">
                                                                                            <img src="./slip/'.$row['file_tax'].'" id="preview" class="img-thumbnail" style="width: 75%;">
                                                                                        </div>


                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                                                                                    </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>';
                                                            }
                                                        ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="completed" role="tabpanel" aria-labelledby="completed-tab">
                                            <div class="purchase-list-page__checkout-list-card-container">
                                                <div class="purchase-list-page__checkout-card-wrapper">
                                                    <div class="order-card__container">
                                                        <div class="order-card__content-wrapper">
                                                            <div class="order-card__content">
                                                            <?php
                                                                $sql = "SELECT r.id, r.reserve_date, t.name, r.status, p.price, u.avatar, pg.username,
                                                                p.package_name, p.hour, r.work_date , p.img_package, r.file_tax, r.location, r.scopeworks, r.link_work
                                                                FROM reserve_package r 
                                                                INNER JOIN photographer_package p ON r.id_package = p.id
                                                                INNER JOIN type_job t ON t.id = p.type_id
                                                                INNER JOIN Photographers pg ON pg.id = r.photographer_id
                                                                INNER JOIN user u ON u.id = r.photographer_id
                                                                WHERE pg.user_id = '".$_SESSION['id']."' AND (r.status = 'finish')";

                                                                $result = mysqli_query($connect, $sql);

                                                                while($row = mysqli_fetch_array($result)){
                                                                    $date = explode(" - ", $row['work_date']);
                                                                    $date_reserve = explode(" ", $row['reserve_date']);

                                                                    $button = '
                                                                            <div class="purchase-card-buttons__show-button-wrapper">
                                                                                <button type="button" data-toggle="modal" data-target="#linkwork'.$row['id'].'" class="snap-button-outline1 snap-button-outline--fill snap-button-outline--primary">
                                                                                    <span class="purchase-card-buttons__button-content"> ดูงาน </span>
                                                                                </button>
                                                                            </div>';
                                                                    
                                                                    echo '
                                                                    <div class="order-content__container">
                                                                        <div class="order-content__header">
                                                                            <div class="order-content__header__seller">
                                                                                <div class="snap-avatar" style="width:50px; height:50px;">
                                                                                    <img class="snap-avatar__img" src="img/profile/'.$row['avatar'].'">
                                                                                </div>
                                                                                <span class="order-content__header__seller__name">'.$row['username'].'</span>
                                                                            </div>
                                                                            <div class="order-delivery-status__wrapper">
                                                                                <a class="order-content__header__delivery-status" href="#">
                                                                                    <span class="order-delivery-status__desc">
                                                                                        สถานะ
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="order-content-status">
                                                                                <h3 class="status-completed">'.$row['status'].'</h3>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row" style="align-items: center;">
                                                                            <div class="col-8">
                                                                                <h3 style="font-size: 25px; color: #057ADF; margin-top: 15px; margin-left: 5px;"> เลขที่การจอง : #'.$row['id'].' </h3>
                                                                                <div class="package-ex-photo">
                                                                                    <img src="img/package/'.$row['img_package'].'" alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-4">
                                                                                <div class="package-info-detail">
                                                                                    <h3> '.$row['package_name'].' </h3>
                                                                                    <p><i class="far fa-clock"></i> '.$row['hour'].' ชั่วโมง</p>
                                                                                    <h3>ราคา : '.$row['price'].' บาท</h3>
                                                                                </div>
                                                                                <div class="checkInOut-time">
                                                                                    <div class="timeLable">เริ่มงาน</div>
                                                                                    <div class="time">'.DateThai($date[0]).'</div>
                                                                                </div>
                                                                                <div class="checkInOut-time">
                                                                                    <div class="timeLable">จบงาน</div>
                                                                                    <div class="time">'.DateThai($date[1]).'</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="order-card__buttons-container">
                                                                        <div class="purchase-card-buttons__wrapper">
                                                                            <div class="purchase-card-buttons__total-payment">
                                                                                <span class="purchase-card-buttons__label-price"> ยอดที่ต้องชำระทั้งหมด : </span>
                                                                                <span class="purchase-card-buttons__total-price"> '.$row['price'].' ฿ </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="purchase-card-buttons__container">
                                                                            <div class="purchase-card-buttons__text-info">
                                                                                <span class="purchase-text-info">
                                                                                    <span>
                                                                                        วันที่ทำการจอง :
                                                                                    </span>
                                                                                    <div class="snap-drawer ">
                                                                                        <span class="purchase-text-info__hover-point"> '.DateThai($date_reserve[0]).' </span>
                                                                                    </div>
                                                                                </span>
                                                                            </div>
                                                                            '.$button.'
                                                                        </div>
                                                                    </div>
                                                                    ';
                                                                echo '
                                                                    <div class="modal fade" id="linkwork'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">ช่างภาพได้ส่งงานให้คุณแล้ว</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <input type="text" class="form-control" value="'.$row['link_work'].'" disabled>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                    </div>';
                                                            }
                                                        ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="cancel" role="tabpanel" aria-labelledby="cancel-tab">
                                            <div class="purchase-list-page__checkout-list-card-container">
                                                <div class="purchase-list-page__checkout-card-wrapper">
                                                    <div class="order-card__container">
                                                        <div class="order-card__content-wrapper">
                                                            <div class="order-card__content">
                                                            <?php
                                                                $sql = "SELECT r.id, r.reserve_date, t.name, r.status, p.price, u.avatar, pg.username,
                                                                p.package_name, p.hour, r.work_date , p.img_package, r.file_tax, r.location, r.scopeworks
                                                                FROM reserve_package r 
                                                                INNER JOIN photographer_package p ON r.id_package = p.id
                                                                INNER JOIN type_job t ON t.id = p.type_id
                                                                INNER JOIN Photographers pg ON pg.id = r.photographer_id
                                                                INNER JOIN user u ON u.id = r.photographer_id
                                                                WHERE pg.user_id = '".$_SESSION['id']."' AND (r.status = 'cancel')";

                                                                $result = mysqli_query($connect, $sql);

                                                                while($row = mysqli_fetch_array($result)){
                                                                    $date = explode(" - ", $row['work_date']);
                                                                    $date_reserve = explode(" ", $row['reserve_date']);

                                                                    $button = '';
                                                                    
                                                                    echo '
                                                                    <div class="order-content__container">
                                                                        <div class="order-content__header">
                                                                            <div class="order-content__header__seller">
                                                                                <div class="snap-avatar" style="width:50px; height:50px;">
                                                                                    <img class="snap-avatar__img" src="img/profile/'.$row['avatar'].'">
                                                                                </div>
                                                                                <span class="order-content__header__seller__name">'.$row['username'].'</span>
                                                                            </div>
                                                                            <div class="order-delivery-status__wrapper">
                                                                                <a class="order-content__header__delivery-status" href="#">
                                                                                    <span class="order-delivery-status__desc">
                                                                                        สถานะ
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="order-content-status">
                                                                                <h3 class="status-cancel">'.$row['status'].'</h3>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row" style="align-items: center;">
                                                                            <div class="col-8">
                                                                                <h3 style="font-size: 25px; color: #057ADF; margin-top: 15px; margin-left: 5px;"> เลขที่การจอง : #'.$row['id'].' </h3>
                                                                                <div class="package-ex-photo">
                                                                                    <img src="img/photo/'.$row['img_package'].'" alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-4">
                                                                                <div class="package-info-detail">
                                                                                    <h3> '.$row['package_name'].' </h3>
                                                                                    <p><i class="far fa-clock"></i> '.$row['hour'].' ชั่วโมง</p>
                                                                                    <h3>ราคา : '.$row['price'].' บาท</h3>
                                                                                </div>
                                                                                <div class="checkInOut-time">
                                                                                    <div class="timeLable">เริ่มงาน</div>
                                                                                    <div class="time">'.DateThai($date[0]).'</div>
                                                                                </div>
                                                                                <div class="checkInOut-time">
                                                                                    <div class="timeLable">จบงาน</div>
                                                                                    <div class="time">'.DateThai($date[1]).'</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="order-card__buttons-container">
                                                                        <div class="purchase-card-buttons__wrapper">
                                                                            <div class="purchase-card-buttons__total-payment">
                                                                                <span class="purchase-card-buttons__label-price"> ยอดที่ต้องชำระทั้งหมด : </span>
                                                                                <span class="purchase-card-buttons__total-price"> '.$row['price'].' ฿ </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="purchase-card-buttons__container">
                                                                            <div class="purchase-card-buttons__text-info">
                                                                                <span class="purchase-text-info">
                                                                                    <span>
                                                                                        วันที่ทำการจอง :
                                                                                    </span>
                                                                                    <div class="snap-drawer ">
                                                                                        <span class="purchase-text-info__hover-point"> '.DateThai($date_reserve[0]).' </span>
                                                                                    </div>
                                                                                </span>
                                                                            </div>
                                                                            '.$button.'
                                                                        </div>
                                                                    </div>
                                                                    ';
                                                                echo '<div class="modal fade" id="exampleModalLong5'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                                                <div class="modal-dialog" role="document">
                                                                                    <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title" id="exampleModalLongTitle">รายละเอียดการจองของท่าน</h5>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">

                                                                                        <div class="user_order_head">
                                                                                            <h3> เลขที่การจอง : #'.$row['id'].' </h3>
                                                                                        </div>

                                                                                        <div class="m-packageInfo">
                                                                                            <div class="package">
                                                                                                <div class="packageInfo-photographer" >
                                                                                                    <div class="row" style="align-items: center;">
                                                                                                        <div class="col-6">
                                                                                                            <div class="packagephoto">
                                                                                                                <img src="img/package/'.$row['img_package'].'" alt="">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-6">
                                                                                                            <div class="packageinfo-detail">
                                                                                                                <h4> '.$row['package_name'].' </h4>
                                                                                                                <p><i class="far fa-clock"></i> '.$row['hour'].' ชั่วโมง</p>
                                                                                                                <h3>ราคา : '.$row['price'].' บาท</h3>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        
                                                                                        <!-- บอกวันที่จะจอง -->
                                                                                        <div class="m-dateInfo m-module-normal">
                                                                                            <div class="m-checkInOut">
                                                                                                <div class="row">
                                                                                                    <div class="col-6">
                                                                                                        <div class="m-checkInOut_time">
                                                                                                            <div class="timeLable"> วันที่ : เริ่มงาน </div>
                                                                                                            <div class="time">'.DateThai($date[0]).'</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-6">
                                                                                                        <div class="m-checkInOut_time">
                                                                                                            <div class="timeLable"> วันที่ : จบงาน </div>
                                                                                                            <div class="time">'.DateThai($date[1]).'</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>   
                                                                                            </div>
                                                                                        </div>

                                                                                        <!-- ราคา -->
                                                                                        <div class="m-priceDetail">
                                                                                            <div class="m-priceDetail_content">
                                                                                                <ul class="priceList">
                                                                                                    <div class="row">
                                                                                                        <div class="col-12">
                                                                                                            <li>
                                                                                                                <div class="priceItem">
                                                                                                                    <span class="priceLable">1 วัน</span>
                                                                                                                    <span class="priceCell">
                                                                                                                        <div  currency="THB" class="u-price">
                                                                                                                            <span>
                                                                                                                                <span class="u-txt u-txt-warn u-price_num" id="price"> '.$row['price'].' </span>
                                                                                                                                <span class="u-txt u-txt-warn u-price_currency">บาท</span>
                                                                                                                            </span>
                                                                                                                        </div>
                                                                                                                    </span>
                                                                                                                </div>
                                                                                                            </li>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-12">
                                                                                                            <li class="priceItem summary">
                                                                                                                <span class="priceLable">ยอดทั้งหมด </span>
                                                                                                                <span class="priceCell">
                                                                                                                    <div class="u-price" currency="THB">
                                                                                                                        <span>
                                                                                                                            <span id="actual-price" hidden> price </span>
                                                                                                                            <input class="total-price" name="total-price" id="total-price" type="text" value="price" hidden/>
                                                                                                                            <span class="u-txt u-txt-warn u-price_num" id="show-price"> '.$row['price'].' </span> 
                                                                                                                            <span class="u-txt u-txt-warn u-price_currency">บาท</span>
                                                                                                                        </span>
                                                                                                                    </div>
                                                                                                                </span>
                                                                                                            </li>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                        
                                                                                        <div class="m-JobDescription">
                                                                                            <h5 class="guestInfo_title">รายละเอียดงาน</h5>
                                                                                            <div class="m-guest-item">
                                                                                                <div class="guestLable">
                                                                                                    <label>
                                                                                                        <i class="fas fa-camera" aria-hidden="true"></i>ประเภทงาน
                                                                                                    </label>
                                                                                                    <p> '.$row['name'].' </p>
                                                                                                </div>
                                                                                                <div class="guestContainer">
                                                                                                    <div>
                                                                                                        <div class="guestContainer-input">
                                                                                                            <div class="form-group">
                                                                                                                <label for="exampleFormControlTextarea1">รายละเอียดงานเพิ่มเติม</label>
                                                                                                                <textarea class="form-control" id="exampleFormControlTextarea1" name="detail_work" rows="6">
                                                                                                                '.$row['scopeworks'].'
                                                                                                                </textarea>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div> 
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="m-location">
                                                                                            <div class="m-guest-item">
                                                                                                <div class="location">
                                                                                                    <textarea class="form-control" id="exampleFormControlTextarea1"  name="location" rows="3">
                                                                                                    '.$row['location'].'
                                                                                                    </textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-12">
                                                                                            <img src="./slip/'.$row['file_tax'].'" id="preview" class="img-thumbnail" style="width: 75%;">
                                                                                        </div>


                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                                                                                    </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>';
                                                            }
                                                        ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- tab-content -->
                                </div>
                                <!-- menu-bg -->
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                </div>
            </div>
        </div>
        
        

    </div>
    <!-- end wrapper -->

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="js/bootstrap.min.js" ></script>

    <script>
        $( document ).ready(function() {
            $('#up-photo').on('click', function() {
                $('#file-input').trigger('click');
            });

            $("#file-input").change(function(){
                readURL(this);
            });
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#avatar').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
       
    </script>

    <script>
        $(document).on("click", ".browse", function() {
            var file = $(this).parents().find(".file");
            file.trigger("click");
            });
            $('input[type="file"]').change(function(e) {
            var fileName = e.target.files[0].name;
            $("#file").val(fileName);

            var reader = new FileReader();
            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                document.getElementById("preview").src = e.target.result;
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
            });
    </script>


</body>
</html>