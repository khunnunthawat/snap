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
            <div class="container" >
                <div class="ac-setting">
                    <div class="account_setting">
                        <h2>Admin</h2>
                    </div>
                    <div class="row">
                        <!-- กล่อง -->
                        <div class="col-lg-12" style="margin-top: 15px;">
                            <div class="info-right">
                                <div class="menu-bg-admin">
                                    <!-- เมนุ -->
                                    <ul class="purchase-list-page__tabs-container nav nav-tabs" role="tablist">
                                        <li class="nav-item purchase-list-page__tab purchase-list-page__tab--selected">
                                            <a class="nav-link active purchase-list-page__tab-label" id="home-tab" data-toggle="tab" href="#order_all" role="tab" aria-controls="order_all" aria-selected="true">ออเดอร์</a>
                                        </li>
                                        <li class="nav-item purchase-list-page__tab">
                                            <a class="nav-link purchase-list-page__tab-label" id="home-tab" data-toggle="tab" href="#customer" role="tab" aria-controls="customer" aria-selected="true">ลูกค้า</a>
                                        </li>
                                        <li class="nav-item purchase-list-page__tab">
                                            <a class="nav-link purchase-list-page__tab-label" id="profile-tab" data-toggle="tab" href="#photographer" role="tab" aria-controls="photographer" aria-selected="false">ช่างภาพ</a>
                                        </li>
                                        <li class="nav-item purchase-list-page__tab">
                                            <a class="nav-link purchase-list-page__tab-label" id="profile-tab" data-toggle="tab" href="#coin" role="tab" aria-controls="coin" aria-selected="false">coin</a>
                                        </li>
                                        <li class="nav-item purchase-list-page__tab">
                                            <a class="nav-link purchase-list-page__tab-label" id="profile-tab" data-toggle="tab" href="#verified" role="tab" aria-controls="verified" aria-selected="false">verified</a>
                                        </li>
                                        <li class="nav-item purchase-list-page__tab">
                                            <a class="nav-link purchase-list-page__tab-label" id="profile-tab" data-toggle="tab" href="#payment" role="tab" aria-controls="payment" aria-selected="false">ชำระเงิน</a>
                                        </li>
                                        <li class="nav-item purchase-list-page__tab">
                                            <a class="nav-link purchase-list-page__tab-label" id="contact-tab" data-toggle="tab" href="#package" role="tab" aria-controls="package" aria-selected="false">แพ็คเกจงาน</a>
                                        </li>
                                        <li class="nav-item purchase-list-page__tab">
                                            <a class="nav-link purchase-list-page__tab-label" id="contact-tab" data-toggle="tab" href="#done" role="tab" aria-controls="done" aria-selected="false">สำเร็จ</a>
                                        </li>
                                        <li class="nav-item purchase-list-page__tab">
                                            <a class="nav-link purchase-list-page__tab-label" id="contact-tab" data-toggle="tab" href="#cancel" role="tab" aria-controls="cancel" aria-selected="false">ยกเลิก</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="order_all" role="tabpanel" aria-labelledby="order_all-tab">
                                            <!-- ออเดอร์ทั้งหมดในเว็บ -->
                                            <div class="booking-list">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr class="head-menu-order">
                                                            <th># เลขที่การจอง</th>
                                                            <th>วันที่ทำการจอง</th>
                                                            <th>สถานะการจอง</th>
                                                            <th>ลูกค้า</th>
                                                            <th>ช่างภาพ</th>
                                                            <th>ประเภทงาน</th>
                                                            <th>ราคา</th>
                                                            <th>ใบทำการจอง</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $sql = "SELECT r.id, r.reserve_date, t.name, r.status, p.price, pg.username 
                                                                , p.img_package, p.package_name, p.hour, r.work_date, r.file_tax
                                                                , r.location, r.scopeworks
                                                                FROM reserve_package r 
                                                                INNER JOIN photographer_package p ON r.id_package = p.id
                                                                INNER JOIN type_job t ON t.id = p.type_id
                                                                INNER JOIN Photographers pg ON pg.id = r.photographer_id";
                                                        $result = mysqli_query($connect, $sql);

                                                        function DateThai($strDate)
                                                        {
                                                            $strYear = date("Y",strtotime($strDate))+543;
                                                            $strMonth= date("n",strtotime($strDate));
                                                            $strDay= date("j",strtotime($strDate));
                                                            $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
                                                            $strMonthThai=$strMonthCut[$strMonth];
                                                            return "$strDay $strMonthThai $strYear";
                                                        }
                                                        
                                                        while($row = mysqli_fetch_array($result)) {
                                                            $sql_user = "SELECT * FROM `user` WHERE 1";
                                                            $result_user = mysqli_query($connect, $sql_user);
                                                            $row_user = mysqli_fetch_array($result_user);

                                                            echo '
                                                            <tr class="order-list-table">
                                                            <td> #'.$row['id'].'</td>
                                                            <td> '.$row['reserve_date'].'</td>
                                                            <td>
                                                                <label class="label label-balance">'.$row['status'].'</label>
                                                            </td>
                                                            <td class="text-type-jobs"> '.$row_user['name_surname'].' </td>
                                                            <td class="text-type-jobs"> '.$row['username'].' </td>
                                                            <td class="text-type-jobs"> '.$row['name'].' </td>
                                                            <td class="text-type-jobs"> '.$row['price'].' </td>
                                                            <td class="text-type-jobs"><button type="button" class="btn btn-outline-primary"  data-toggle="modal" data-target="#exampleModalLong'.$row['id'].'">View</button></td>
                                                            </tr>';

                                                            $date = explode(" - ", $row['work_date']);

                                                            echo '<div class="modal fade" id="exampleModalLong'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="customer" role="tabpanel" aria-labelledby="customer-tab">
                                            <!-- แสดงชื่อผู้ใช้งาน แยกได้ว่า ใครเป็นช่างภาพ ใครเป็นลุกค้า -->
                                            <div class="booking-list">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr class="head-menu-order">
                                                            <th>ชื่อผู้ใช้งาน</th>
                                                            <th>ช่างภาพ/ลูกค้า</th>
                                                            <th>เลขบัตรประชาชน</th>
                                                            <th>วันเกิด</th>
                                                            <th>หมายเลขโทรศัพท์</th>
                                                            <th>เป็นสมาชิกเมื่อวันที่</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $sql = "SELECT * FROM user u
                                                        LEFT JOIN Photographers p ON p.user_id = u.id
                                                        GROUP BY u.id";
                                                        $result = mysqli_query($connect, $sql);
                                                        
                                                        while($row = mysqli_fetch_array($result)) {
                                                            if (isset($row['username'])) {
                                                                $type = "ช่างภาพ";
                                                            } else {
                                                                $type = "ลูกค้า";
                                                            }
                                                            echo '
                                                            <tr class="order-list-table">
                                                            <td>'.$row['name_surname'].'</td>
                                                            <td>'.$type.'</td>
                                                            <td>'.$row['id_passport_number'].'</td>
                                                            <td class="text-type-jobs">'.$row['birthday'].'</td>
                                                            <td class="text-type-jobs">'.$row['phone'].'</td>
                                                            <td class="text-type-jobs">'.$row['created_at'].'</td>
                                                        </tr>';
                                                        }
                                                        ?>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        
                                        <div class="tab-pane fade" id="photographer" role="tabpanel" aria-labelledby="photographer-tab">
                                            <!-- โปรไฟลืของช่างภาพ -->
                                            <div class="booking-list">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr class="head-menu-order">
                                                            <th>รายชื่อ ช่างภาพ</th>
                                                            <th>ประเภทงาน</th>
                                                            <th>จังหวัด</th>
                                                            <th>ค่าบริการสูงสุด</th>
                                                            <th>ค่าบริการต่ำสุด</th>
                                                            <th>Verified Member</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $sql = "SELECT * FROM user u
                                                        INNER JOIN Photographers p ON p.user_id = u.id
                                                        WHERE p.verify = 'verified'";
                                                        $result = mysqli_query($connect, $sql);
                                                        
                                                        while($row = mysqli_fetch_array($result)) {
                                                            $sql_type = "SELECT * 
                                                            FROM photographer_type_job p
                                                            INNER JOIN type_job t ON t.id = p.id_type_job
                                                            WHERE p.id_photographer = '".$row['user_id']."'";
                                                            $result = mysqli_query($connect, $sql_type);
                                                            $job = "";
                                                            while($row_type = mysqli_fetch_array($result)) {
                                                                $job .= $row_type['name'];
                                                            }

                                                            echo '
                                                            <tr class="order-list-table">
                                                            <td>'.$row['name_surname'].'</td>
                                                            <td>'.$job.'</td>
                                                            <td>'.$row['province'].'</td>
                                                            <td class="text-type-jobs">'.$row['Starting_wage'].' บาท</td>
                                                            <td class="text-type-jobs">'.$row['Highest_wage'].' บาท</td>
                                                            <td class="text-type-jobs"><div class="verified">
                                            <h3><img src="img/icons/verified.svg" alt="">Verified</h3>
                                          </div></td>
                                                        </tr>';
                                                        }
                                                        ?>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="coin" role="tabpanel" aria-labelledby="coin-tab">
                                            <!-- โปรไฟลืของช่างภาพ -->
                                            <div class="booking-list">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr class="head-menu-order">
                                                            <th>ช่างภาพ</th>
                                                            <th>สถานะ</th>
                                                            <th>ธนาคาร</th>
                                                            <th>เลขที่บัญชี</th>
                                                            <th>จำนวนเงิน</th>
                                                            <th>คำขอการถอน</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $sql = "SELECT *, pc.status as pct_status, pc.id as pct_id
                                                        FROM photographer_coin_transaction pc
                                                        INNER JOIN Photographers p ON p.id = pc.photographer_id
                                                        INNER JOIN user u ON u.id = p.user_id
                                                        INNER JOIN photographer_bank pb ON pb.photographer_id = p.id
                                                        WHERE pc.status = 'request'
                                                        GROUP BY pc.id";
                                                        $result = mysqli_query($connect, $sql);
                                                        
                                                        while($row = mysqli_fetch_array($result)) {

                                                            echo '
                                                            <tr class="order-list-table">
                                                            <td>'.$row['name_surname'].'</td>
                                                            <td>
                                                                <label class="label label-balance">'.$row['pct_status'].'</label>
                                                            </td>
                                                            <td>'.$row['bank_name'].'</td>
                                                            <td>'.$row['bank_number'].'</td>
                                                            <td class="text-type-jobs">'.$row['request_coin'].' บาท</td>
                                                            <td class="text-type-jobs"><a href="./db/submit_request_coin.php?id='.$row['pct_id'].'" class="btn btn-outline-success">ยืนยัน</a></td>
                                                        </tr>';
                                                        }
                                                        ?>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="verified" role="tabpanel" aria-labelledby="verified-tab">
                                            <!-- คำขอยืนยัน -->
                                            <div class="booking-list">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr class="head-menu-order">
                                                            <th>user id</th>
                                                            <th>ชื่อช่างภาพ</th>
                                                            <th>เลขบัตรประชาชน</th>
                                                            <th>ภาพคู่บัตรประชาชน</th>
                                                            <th>สำเนาบัตรประชาชน</th>
                                                            <th>หลักฐานการชำระเงิน</th>
                                                            <th>คำขอ</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                                <tr class="order-list-table">
                                                                <td>Z Z</td>
                                                                <td class="text-type-jobs"> Z Z </td>
                                                                <td class="text-type-jobs">1234567890123</td>
                                                                <td class="text-type-jobs">  <button type="button" class="btn btn-outline-primary"  data-toggle="modal" data-target="#exampleModalLong'.$row['id'].'">View</button></td>
                                                                <td class="text-type-jobs">  <button type="button" class="btn btn-outline-primary"  data-toggle="modal" data-target="#exampleModalLong'.$row['id'].'">View</button></td>
                                                                <td class="text-type-jobs">  <button type="button" class="btn btn-outline-primary"  data-toggle="modal" data-target="#exampleModalLong'.$row['id'].'">View</button></td>
                                                                <td style="text-align: center; align-items: center;">
                                                                    <a href="./db/verify_user.php?id_user='.$row['id_user'].'" class="btn btn-outline-primary">อนุมัติ</a>
                                                                    <a href="./db/not_verify_user.php?id_user='.$row['id_user'].'" class="btn btn-outline-danger">ไม่อนุมัติ</a>
                                                                </td>
                                                            </tr>
                                                            
                                                        
                                                        
                                                        
                                                        
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab">
                                            <!-- ส่งงาน -->
                                            <div class="booking-list">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr class="head-menu-order">
                                                            <th># เลขที่การจอง</th>
                                                            <th>สถานะการชำระเงิน</th>
                                                            <th>ลูกค้า</th>
                                                            <th>ช่างภาพ</th>
                                                            <th>ประเภทงาน</th>
                                                            <th>ราคา</th>
                                                            <th>หลักฐานการชำระเงิน</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $sql = "SELECT r.status, u.name_surname, r.id, t.name, pp.price, r.customer_id
                                                        FROM reserve_package r
                                                        INNER JOIN Photographers p ON r.photographer_id = p.id
                                                        INNER JOIN user u ON u.id = p.user_id
                                                        INNER JOIN photographer_package pp ON pp.id = r.id
                                                        INNER JOIN type_job t ON t.id = pp.type_id
                                                        WHERE r.status = 'working'
                                                        ";

                                                        $result = mysqli_query($connect, $sql);
                                                        
                                                        while($row = mysqli_fetch_array($result)) {
                                                            $sql_user = "SELECT * FROM user WHERE id = '".$row['customer_id']."'";
                                                            $result_user = mysqli_query($connect, $sql_user);
                                                            $row_user = mysqli_fetch_array($result_user);

                                                            echo '
                                                            <tr class="order-list-table">
                                                            <td> #'.$row['id'].' </td>
                                                            <td>
                                                                <label class="label label-balance">'.$row['status'].'</label>
                                                            </td>
                                                            <td class="text-type-jobs"> '.$row_user['name_surname'].' </td>
                                                            <td class="text-type-jobs"> '.$row['name_surname'].' </td>
                                                            <td class="text-type-jobs"> '.$row['name'].' </td>
                                                            <td class="text-type-jobs"> '.$row['price'].' </td>
                                                            <td><button type="button" class="btn btn-outline-secondary">สลีป</button></td>
                                                        </tr>';
                                                        }
                                                        ?>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="package" role="tabpanel" aria-labelledby="package-tab">
                                            <!-- ยกเลิก -->
                                            <div class="booking-list">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr class="head-menu-order">
                                                            <th>id</th>
                                                            <th>name_surname</th>
                                                            <th>user ของช่างภาพ</th>
                                                            <th>ชื่องาน</th>
                                                            <th>ประเภทงาน type_job</th>
                                                            <th>ชั่วโมงทำงาน</th>
                                                            <th>ราคา</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT pp.id, u.name_surname, p.username, pp.package_name, t.name, pp.price, pp.hour
                                                            FROM photographer_package pp
                                                            INNER JOIN Photographers p ON p.id = pp.photographer_id
                                                            INNER JOIN user u ON u.id = p.user_id
                                                            INNER JOIN type_job t ON t.id = pp.type_id";
                                                            $result = mysqli_query($connect, $sql);

                                                            $num = mysqli_num_rows($result);

                                                            if ($num > 0) {
                                                                while($row = mysqli_fetch_array($result)) {
                                                                echo '<tr class="order-list-table">
                                                                    <th>'.$row['id'].'</th>
                                                                    <td>'.$row['name_surname'].'</td>
                                                                    <td>'.$row['username'].'</td>
                                                                    <td class="text-type-jobs"> '.$row['package_name'].' </td>
                                                                    <td class="text-type-jobs"> '.$row['name'].' </td>
                                                                    <td class="text-type-jobs"> '.$row['hour'].' </td>
                                                                    <td class="text-type-jobs"> '.$row['price'].' </td>
                                                                </tr>';
                                                                    }
                                                        
                                                        
                                                        }
                                                        ?>
                                                    </tbody>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="done" role="tabpanel" aria-labelledby="done-tab">
                                            <!-- ยกเลิก -->
                                            <div class="booking-list">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr class="head-menu-order">
                                                            <th># เลขที่การจอง</th>
                                                            <th>ชื่อ ลูกค้า</th>
                                                            <th>สถานะ</th>
                                                            <th>ช่างภาพ</th>
                                                            <th>ประเภทงาน</th>
                                                            <th>สถานที่</th>
                                                            <th>ราคา</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $sql = "SELECT r.status, u.name_surname, r.id, t.name, pp.price, r.customer_id, r.location
                                                        FROM reserve_package r
                                                        INNER JOIN Photographers p ON r.photographer_id = p.id
                                                        INNER JOIN user u ON u.id = p.user_id
                                                        INNER JOIN photographer_package pp ON pp.id = r.id
                                                        INNER JOIN type_job t ON t.id = pp.type_id
                                                        WHERE r.status = 'finish'
                                                        ";

                                                        $result = mysqli_query($connect, $sql);
                                                        
                                                        while($row = mysqli_fetch_array($result)) {
                                                            $sql_user = "SELECT * FROM user WHERE id = '".$row['customer_id']."'";
                                                            $result_user = mysqli_query($connect, $sql_user);
                                                            $row_user = mysqli_fetch_array($result_user);

                                                            echo '
                                                            <tr class="order-list-table">
                                                            <td>#'.$row['id'].'</td>
                                                            <td>'.$row_user['name_surname'].'</td>
                                                            <td>
                                                                <label class="label label-balance">'.$row['status'].'</label>
                                                            </td>
                                                            <td>'.$row['name_surname'].'</td>
                                                            <td class="text-type-jobs"> '.$row['name'].' </td>
                                                            <td class="text-type-jobs"> '.$row['location'].' </td>
                                                            <td class="text-type-jobs"> '.$row['price'].' </td>
                                                        </tr>';
                                                        }
                                                        ?>
                                                        
                                                    </tbody>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="cancel" role="tabpanel" aria-labelledby="cancel-tab">
                                            <!-- ยกเลิก -->
                                            <div class="booking-list">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr class="head-menu-order">
                                                            <th># เลขที่การจอง</th>
                                                            <th>สถานะการจอง</th>
                                                            <th>ลูกค้า</th>
                                                            <th>ช่างภาพ</th>
                                                            <th>ประเภทงาน</th>
                                                            <th>ราคา</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $sql = "SELECT r.status, u.name_surname, r.id, t.name, pp.price, r.customer_id, r.location
                                                        FROM reserve_package r
                                                        INNER JOIN Photographers p ON r.photographer_id = p.id
                                                        INNER JOIN user u ON u.id = p.user_id
                                                        INNER JOIN photographer_package pp ON pp.id = r.id
                                                        INNER JOIN type_job t ON t.id = pp.type_id
                                                        WHERE r.status = 'cancel'
                                                        ";

                                                        $result = mysqli_query($connect, $sql);
                                                        
                                                        while($row = mysqli_fetch_array($result)) {
                                                            $sql_user = "SELECT * FROM user WHERE id = '".$row['customer_id']."'";
                                                            $result_user = mysqli_query($connect, $sql_user);
                                                            $row_user = mysqli_fetch_array($result_user);

                                                            echo '
                                                            <tr class="order-list-table">
                                                            <td>#2</td>
                                                            <td>
                                                                <label class="label label-balance">'.$row['status'].'</label>
                                                            </td>
                                                            <td class="text-type-jobs"> '.$row_user['name_surname'].' </td>
                                                            <td class="text-type-jobs"> '.$row['name_surname'].' </td>
                                                            <td class="text-type-jobs"> '.$row['name'].' </td>
                                                            <td class="text-type-jobs"> '.$row['price'].' </td>
                                                        </tr>';
                                                        }
                                                        ?>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
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
        
        

    </div>
    <!-- end wrapper -->

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="js/bootstrap.min.js" ></script>

    


</body>
</html>