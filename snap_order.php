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
                        <h2>ออร์เดอร์งาน</h2>
                        <a href="snap_info.php"><h3> <i class="fas fa-user-circle"></i> : <?php echo $name_surname; ?> </h3></a>
                    </div>
                    <div class="row">
                        <!-- กล่อง -->
                        <div class="col-lg-12" style="margin-top: 15px;">
                            <div class="info-right">
                                <div class="menu-bg-snap">
                                    <!-- เมนุ -->
                                    <ul class="purchase-list-page__tabs-container nav nav-tabs" role="tablist">
                                        <li class="nav-item purchase-list-page__tab purchase-list-page__tab--selected">
                                            <a class="nav-link active purchase-list-page__tab-label" id="home-tab" data-toggle="tab" href="#all" role="tab" aria-controls="home" aria-selected="true">ทั้งหมด</a>
                                        </li>
                                        <li class="nav-item purchase-list-page__tab">
                                            <a class="nav-link purchase-list-page__tab-label" id="profile-tab" data-toggle="tab" href="#wait" role="tab" aria-controls="profile" aria-selected="false">รอการยืนยัน</a>
                                        </li>
                                        <li class="nav-item purchase-list-page__tab">
                                            <a class="nav-link purchase-list-page__tab-label" id="contact-tab" data-toggle="tab" href="#payment" role="tab" aria-controls="contact" aria-selected="false">สถานะชำระเงิน</a>
                                        </li>
                                        <li class="nav-item purchase-list-page__tab">
                                            <a class="nav-link purchase-list-page__tab-label" id="contact-tab" data-toggle="tab" href="#working" role="tab" aria-controls="contact" aria-selected="false">กำลังทำงาน</a>
                                        </li>
                                        <li class="nav-item purchase-list-page__tab">
                                            <a class="nav-link purchase-list-page__tab-label" id="contact-tab" data-toggle="tab" href="#finish" role="tab" aria-controls="contact" aria-selected="false">ส่งงาน</a>
                                        </li>
                                        <li class="nav-item purchase-list-page__tab">
                                            <a class="nav-link purchase-list-page__tab-label" id="contact-tab" data-toggle="tab" href="#cancel" role="tab" aria-controls="contact" aria-selected="false">ยกเลิก</a>
                                        </li>
                                    </ul>

                                    <!-- วันที่ทำการจอง-->
                                    <div class="order-list">
                                        <div class="padding-wrap">
                                            <div class="order-panel-header">
                                                <div class="title">0 รายการ</div>
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="home-tab">
                                            <!-- ทั้งหมด -->
                                            <div class="booking-list">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr class="head-menu-order">
                                                            <th>วันที่ทำการจอง</th>
                                                            <th># เลขที่การจอง</th>
                                                            <th>ประเภทงาน</th>
                                                            <th>สถานะการจอง</th>
                                                            <th>มัดจำ</th>
                                                            <th>ยอดคงเหลือ</th>
                                                            <th>ยอดทั้งหมด</th>
                                                            <th>รายละเอียดงาน</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT r.id, r.reserve_date, t.name, r.status, p.price FROM reserve_package r 
                                                            INNER JOIN photographer_package p ON r.id_package = p.id
                                                            INNER JOIN type_job t ON t.id = p.type_id
                                                            INNER JOIN Photographers pg ON pg.id = r.photographer_id
                                                            WHERE pg.user_id = '".$_SESSION['id']."'";

                                                            $result = mysqli_query($connect, $sql);

                                                            while($row = mysqli_fetch_array($result)){
                                                                echo '
                                                                <tr class="order-list-table">
                                                                    <td>'.$row['reserve_date'].' </td>
                                                                    <td># '.$row['id'].'</td>
                                                                    <td class="text-type-jobs"> '.$row['name'].' </td>
                                                                    <td>
                                                                        <label class="label label-confirm">'.$row['status'].'</label>
                                                                    </td>
                                                                    <td>
                                                                        <label class="label label-deposit">0 ฿</label>
                                                                    </td>
                                                                    <td>
                                                                        <label class="label label-balance">'.$row['price'].' ฿</label>
                                                                    </td>
                                                                    <td>
                                                                        <label class="label label-total">'.$row['price'].' ฿</label>
                                                                    </td>
                                                                    <td class="text-type-jobs"><button type="button" class="btn btn-outline-primary" style="width: 100%;" data-toggle="modal" data-target="#exampleModalLong'.$row['id'].'">View</button></td>
                                                                </tr>
                                                                ';

                                                            }
                                                        ?>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="wait" role="tabpanel" aria-labelledby="profile-tab">
                                            <!-- รอการยืนยัน -->
                                            <div class="booking-list">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr class="head-menu-order">
                                                            <th># เลขที่การจอง</th>
                                                            <th>วันงาน</th>
                                                            <th>ประเภทงาน</th>
                                                            <th>สถานะ</th>
                                                            <th>เวลาเริ่มงาน</th>
                                                            <th>เวลาจบงาน</th>
                                                            <th>ยอดทั้งหมด</th>
                                                            <th style="text-align: center; align-items: center;">รับงาน</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                                $sql = "SELECT r.id, r.work_date, t.name, r.status, p.price, r.time_start, r.time_end
                                                                FROM reserve_package r 
                                                                INNER JOIN photographer_package p ON r.id_package = p.id
                                                                INNER JOIN type_job t ON t.id = p.type_id
                                                                INNER JOIN Photographers pg ON pg.id = r.photographer_id
                                                                WHERE r.status = 'reserve' 
                                                                AND pg.user_id = '".$_SESSION['id']."'";

                                                                $result = mysqli_query($connect, $sql);

                                                                while($row = mysqli_fetch_array($result)){
                                                                    echo '
                                                                    <tr class="order-list-table">
                                                                        <td># '.$row['id'].'</td>
                                                                        <td>'.$row['work_date'].' </td>
                                                                        <td class="text-type-jobs"> '.$row['name'].' </td>
                                                                        <td>
                                                                            <label class="label label-confirm">'.$row['status'].'</label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="label label-deposit">'.$row['time_start'].' น.</label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="label label-deposit">'.$row['time_end'].' น.</label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="label label-total">'.$row['price'].' ฿</label>
                                                                        </td>
                                                                        <td style="text-align: center; align-items: center;">
                                                                            <a href="./db/photographer_confirm.php?id_reserve='.$row['id'].'" class="btn btn-outline-primary">รับงาน</a>
                                                                            <a href="./db/photographer_cancel.php?id_reserve='.$row['id'].'" class="btn btn-outline-danger">ไม่รับงาน</a>
                                                                        </td>
                                                                    </tr>
                                                                    ';
                                                                }
                                                            ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        
                                        <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="contact-tab">
                                            <!-- สถานะการชำระเงิน -->
                                            <div class="booking-list">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr class="head-menu-order">
                                                            <th># เลขที่การจอง</th>
                                                            <th>สถานะ</th>
                                                            <th>ประเภทงาน</th>
                                                            <th>ยอดมัดจำ</th>
                                                            <th>ยอดทั้งหมด</th>
                                                            <th style="text-align: center; align-items: center;">สลีปโอนเงิน</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                            <?php
                                                                $sql = "SELECT r.id, t.name, r.status, p.price, r.slip_payment
                                                                FROM reserve_package r 
                                                                INNER JOIN photographer_package p ON r.id_package = p.id
                                                                INNER JOIN type_job t ON t.id = p.type_id
                                                                INNER JOIN Photographers pg ON pg.id = r.photographer_id
                                                                WHERE (r.status = 'confirm' OR r.status = 'working')
                                                                AND pg.user_id = '".$_SESSION['id']."'";

                                                                $result = mysqli_query($connect, $sql);

                                                                while($row = mysqli_fetch_array($result)){
                                                                    echo '
                                                                    <tr class="order-list-table">
                                                                        <td># '.$row['id'].'</td>
                                                                        <td>
                                                                            <label class="label label-confirm">'.$row['status'].'</label>
                                                                        </td>
                                                                        <td class="text-type-jobs"> '.$row['name'].' </td>
                                                                        <td>
                                                                            <label class="label label-deposit">0 ฿</label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="label label-total">'.$row['price'].' ฿</label>
                                                                        </td>
                                                                        <td style="text-align: center; align-items: center;">
                                                                            <button class="btn btn-primary" role="button" data-toggle="modal" data-target="#'.$row['name'].$row['id'].'">view file</button>
                                                                        </td>
                                                                    </tr>
                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="'.$row['name'].$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">สลิปเงิน</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <img src="./slip/'.$row['slip_payment'].'" >
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    ';
                                                                }
                                                            ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="working" role="tabpanel" aria-labelledby="contact-tab">
                                            <!-- กำลังทำงาน -->
                                            <div class="booking-list">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr class="head-menu-order">
                                                            <th># เลขที่การจอง</th>
                                                            <th>สถานะ</th>
                                                            <th>วันงาน</th>
                                                            <th>ประเภทงาน</th>
                                                            <th>เวลาเริ่มงาน</th>
                                                            <th>เวลาจบงาน</th>
                                                            <th>สถานที่</th>
                                                            <th>ยอดคงเหลือ</th>
                                                            <th>ถ่ายงาน</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                             <?php
                                                                $sql = "SELECT r.id, t.name, r.status, p.price, r.location, r.time_start, r.time_end
                                                                FROM reserve_package r 
                                                                INNER JOIN photographer_package p ON r.id_package = p.id
                                                                INNER JOIN type_job t ON t.id = p.type_id
                                                                INNER JOIN Photographers pg ON pg.id = r.photographer_id
                                                                WHERE pg.user_id = '".$_SESSION['id']."'
                                                                AND r.status = 'working'";

                                                                $result = mysqli_query($connect, $sql);

                                                                while($row = mysqli_fetch_array($result)){
                                                                    echo '
                                                                    <tr class="order-list-table">
                                                                        <td># '.$row['id'].'</td>
                                                                        <td style="text-align: center; align-items: center;"> 
                                                                            <div class="spinner-border spinner-border-sm text-primary" role="status">
                                                                                <span class="sr-only">กำลังถ่าย...</span>
                                                                            </div>
                                                                        </td>
                                                                        <td>01/24/2015</td>
                                                                        <td class="text-type-jobs"> '.$row['name'].' </td>
                                                                        <td>
                                                                            <label class="label label-deposit">'.$row['time_start'].'13:00 น.</label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="label label-deposit">'.$row['time_end'].' น.</label>
                                                                        </td>
                                                                        <td>
                                                                            <a href="'.$row['location'].'">
                                                                                มหาวิทยาลัยศิลปากร นครปฐม
                                                                            </a>
                                                                        </td>
                                                                        <td>
                                                                            <label class="label label-balance">'.$row['price'].'</label>
                                                                        </td>
                                                                        <td style="text-align: center; align-items: center;">
                                                                            <a href="./db/photographer_confirm_work.php?id_reserve='.$row['id'].'" class="btn btn-outline-primary">เสร็จแล้ว</a>
                                                                        </td>
                                                                    </tr>
                                                                    ';
                                                                }
                                                            ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="finish" role="tabpanel" aria-labelledby="contact-tab">
                                            <!-- ส่งงาน -->
                                            <div class="booking-list">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr class="head-menu-order">
                                                            <th># เลขที่การจอง</th>
                                                            <th>วันงาน</th>
                                                            <th>ประเภทงาน</th>
                                                            <th>กดงาน</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                            <?php
                                                                $sql = "SELECT r.id, r.work_date, t.name
                                                                FROM reserve_package r 
                                                                INNER JOIN photographer_package p ON r.id_package = p.id
                                                                INNER JOIN type_job t ON t.id = p.type_id
                                                                INNER JOIN Photographers pg ON pg.id = r.photographer_id
                                                                WHERE pg.user_id = '".$_SESSION['id']."'
                                                                AND r.status = 'finish'";

                                                                $result = mysqli_query($connect, $sql);

                                                                while($row = mysqli_fetch_array($result)){
                                                                    echo '
                                                                    <tr class="order-list-table">
                                                                        <td># '.$row['id'].'</td>
                                                                        <td>'.$row['work_date'].' </td>
                                                                        <td class="text-type-jobs"> '.$row['name'].' </td>
                                                                        <td style="text-align: center; align-items: center;">
                                                                        <button class="btn btn-primary" role="button" data-toggle="modal" data-target="#'.$row['name'].$row['id'].'">ส่งงาน</button>
                                                                        </td>
                                                                    </tr>
                                                                    <!-- Modal -->
                                                                    <form action="./db/upload_link_img.php?id_reserve='.$row['id'].'" method="POST" >
                                                                    <div class="modal fade" id="'.$row['name'].$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">ลิ้งค์งาน</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <input type="text" id="link_img" name="link_img" class="form-control">
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="submit" class="btn btn-primary">Upload</button>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    </form>
                                                                    ';
                                                                }
                                                            ?>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="cancel" role="tabpanel" aria-labelledby="contact-tab">
                                            <!-- ยกเลิก -->
                                            <div class="booking-list">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr class="head-menu-order">
                                                            <th># เลขที่การจอง</th>
                                                            <th>วันงาน</th>
                                                            <th>ประเภทงาน</th>
                                                            <th>สถานะการจอง</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                            <?php
                                                                $sql = "SELECT r.id, t.name, r.status, r.work_date
                                                                FROM reserve_package r 
                                                                INNER JOIN photographer_package p ON r.id_package = p.id
                                                                INNER JOIN type_job t ON t.id = p.type_id
                                                                INNER JOIN Photographers pg ON pg.id = r.photographer_id
                                                                WHERE pg.user_id = '".$_SESSION['id']."'
                                                                AND r.status = 'cancel' ";

                                                                $result = mysqli_query($connect, $sql);

                                                                while($row = mysqli_fetch_array($result)){
                                                                    echo '
                                                                    <tr class="order-list-table">
                                                                        <td># '.$row['id'].'</td>
                                                                        <td>'.$row['work_date'].' </td>
                                                                        <td class="text-type-jobs"> '.$row['name'].' </td>
                                                                        <td>
                                                                            <label class="label label-balance">'.$row['status'].'</label>
                                                                        </td>
                                                                    </tr>
                                                                    ';
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