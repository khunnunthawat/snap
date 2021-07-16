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
        
        <form action="" style="background-color: #f0f8ff;">
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
                                                    <a class="userpage-sidebar-menu-entry" href="user_order.php" >
                                                        <div class="userpage-sidebar-menu-entry__text">การจองของฉัน</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="stardust-dropdown">
                                                <div class="stardust-dropdown__item-header">
                                                    <a class="userpage-sidebar-menu-entry" href="user_info.php">
                                                        <div class="userpage-sidebar-menu-entry__text">ข้อมูลส่วนตัว</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="stardust-dropdown">
                                                <div class="stardust-dropdown__item-header">
                                                    <a class="userpage-sidebar-menu-entry" href="user_password.php">
                                                        <div class="userpage-sidebar-menu-entry__text">อีเมล รหัสผ่าน</div>
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
                                    $sql_package = "SELECT *, r.id as reserve_id
                                    FROM reserve_package r
                                    INNER JOIN photographer_package p ON p.id = r.id_package
                                    WHERE r.customer_id = '".$_SESSION['id']."'";

                                    $result_package = mysqli_query($connect, $sql_package);
                                    $row = mysqli_fetch_array($result_package);

                                    function DateThai($strDate)
                                    {
                                        $strYear = date("Y",strtotime($strDate))+543;
                                        $strMonth= date("n",strtotime($strDate));
                                        $strDay= date("j",strtotime($strDate));
                                        $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
                                        $strMonthThai=$strMonthCut[$strMonth];
                                        return "$strDay $strMonthThai $strYear";
                                    }

                                    $date = explode(" - ", $_SESSION['date']);
                                    ?>  
                            
                                    <!-- เมนูสถานะ -->
                                    <div class="purchase-list-page__tabs-container">

                                        <div class="purchase-list-page__tab">
                                            <span class="purchase-list-page__tab-label">รายการทั้งหมด</span>
                                        </div>

                                        <div class="purchase-list-page__tab purchase-list-page__tab--has-count">
                                            <span class="purchase-list-page__tab-label">กำลังดำเนินการ</span>
                                            <span class="purchase-list-page__tab-count">(1)</span>
                                        </div>

                                        <div class="purchase-list-page__tab purchase-list-page__tab--selected">
                                            <span class="purchase-list-page__tab-label">ที่ต้องชำระ</span>
                                            <span class="purchase-list-page__tab-count">(1)</span>
                                        </div>

                                        <div class="purchase-list-page__tab">
                                            <span class="purchase-list-page__tab-label">สำเร็จแล้ว</span>
                                        </div>

                                        <div class="purchase-list-page__tab">
                                            <span class="purchase-list-page__tab-label">ยกเลิกแล้ว</span>
                                        </div>

                                    </div>

                                    <!-- รายการ -->
                                    <div class="purchase-list-page__checkout-list-card-container">
                                        <div class="purchase-list-page__checkout-card-wrapper">
                                            <div class="order-card__container">
                                                <div class="order-card__content-wrapper">
                                                    <div class="order-card__content">
                                                        <div class="order-content__container">
                                                            <div class="order-content__header">
                                                                <div class="order-content__header__seller">
                                                                    <div class="snap-avatar" style="width:50px; height:50px;">
                                                                        <img class="snap-avatar__img" src="img/<?php echo $avatar; ?>" alt="">
                                                                    </div>
                                                                    <span class="order-content__header__seller__name"><?php echo $name_surname; ?></span>
                                                                </div>
                                                                <div class="order-delivery-status__wrapper">
                                                                    <a class="order-content__header__delivery-status" href="#">
                                                                        <span class="order-delivery-status__desc">
                                                                            สถานะ
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="order-content-status">
                                                                    รอการชำระเงิน
                                                                </div>
                                                            </div>

                                                            <div class="row" style="align-items: center;">
                                                                <div class="col-8">
                                                                    <div class="package-ex-photo">
                                                                        <img src="img/photo/IMG_3837.JPG" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="package-info-detail">
                                                                        <h3><?php echo $row['package_name']; ?> TEXT </h3>
                                                                        <p><i class="far fa-clock"></i> <?php echo $row['hour']; ?> ชั่วโมง</p>
                                                                        <h3>ราคา : <?php echo $row['price']; ?> บาท</h3>
                                                                    </div>
                                                                    <div class="checkInOut-time">
                                                                        <div class="timeLable">เริ่มงาน</div>
                                                                        <div class="time"><?php echo DateThai($date[0]); ?></div>
                                                                    </div>
                                                                    <div class="checkInOut-time">
                                                                        <div class="timeLable">จบงาน</div>
                                                                        <div class="time"><?php echo DateThai($date[1]); ?></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="order-card__buttons-container">
                                                            <div class="purchase-card-buttons__wrapper">
                                                                <div class="purchase-card-buttons__total-payment">
                                                                    <span class="purchase-card-buttons__label-price"> มัดจำ : </span>
                                                                    <span class="purchase-card-buttons__total-price"> 500 ฿ </span>
                                                                </div>
                                                                <div class="purchase-card-buttons__total-payment">
                                                                    <span class="purchase-card-buttons__label-price"> ยอดที่ต้องชำระทั้งหมด : </span>
                                                                    <span class="purchase-card-buttons__total-price"> 3,500 ฿ </span>
                                                                </div>
                                                            </div>
                                                            <div class="purchase-card-buttons__container">
                                                                <div class="purchase-card-buttons__text-info">
                                                                    <span class="purchase-text-info">
                                                                        <span>
                                                                            วันที่ทำการจอง :
                                                                        </span>
                                                                        <div class="snap-drawer ">
                                                                            <span class="purchase-text-info__hover-point"> 25-03-2020 </span>
                                                                        </div>
                                                                    </span>
                                                                </div>
                                                                <a href="user_payment.php">
                                                                    <div class="purchase-card-buttons__show-button-wrapper">
                                                                        <a href="./user_payment_input.php?id_reserve=<?php echo $row['reserve_id']; ?>" class="snap-button-solid snap-button-solid--fill snap-button-solid--primary ">
                                                                            <span class="purchase-card-buttons__button-content"> ชำระเงิน </span>
                                                                        </a>
                                                                    </div>
                                                                </a>
                                                                <div class="purchase-card-buttons__show-button-wrapper">
                                                                    <button class="snap-button-outline1 snap-button-outline--fill snap-button-outline--primary ">
                                                                        <span class="purchase-card-buttons__button-content"> ดูรายละเอียดการจอง </span>
                                                                    </button>
                                                                </div>
                                                                <div class="purchase-card-buttons__open-more-wrapper">
                                                                    <button class="snap-button-outline2 snap-button-outline--fill snap-button-outline--primary ">
                                                                        <span class="purchase-card-buttons__button-content"> ยกเลิกการจอง </span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>



                                                    </div>
                                                </div>
                                                <!-- wrapper -->
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

    <!-- <script>
        $(document).ready(function() {
            var readURL = function(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('.avatar').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }
            $(".file-upload").on('change', function(){
                readURL(this);
            });
        });
    </script> -->


</body>
</html>