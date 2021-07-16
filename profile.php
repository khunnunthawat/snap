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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <script src="https://kit.fontawesome.com/c3d7626d0f.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

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
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
</head>
<style>
    .show-profile {
        width: 100%;
        margin: 0 auto;
} ;
</style>
<body>
    <div class="wrapper">
        <?php
            require_once("header.php");
            require_once('./db/db_connect.php');

            if(isset($_POST['form_search'])) {
                $_SESSION['date'] = $_POST['datepicker'];
                $_SESSION['type_job'] = $_POST['type_job'];
                $_SESSION['province'] = $_POST['province'];
                $_SESSION['id_photographer'] = $_POST['id_photographer'];
                $_SESSION['start_price'] = $_POST['start_price'];
                $_SESSION['end_price'] = $_POST['end_price'];
            }
            
            if (isset($_SESSION['id_photographer'])) {
                $sql = "SELECT u.avatar, p.Starting_wage, p.Highest_wage, p.province, 
                p.username, u.status, u.created_at, t.name as Job_type FROM user u 
                INNER JOIN Photographers p ON u.id = p.user_id
                INNER JOIN photographer_type_job pt ON pt.id_photographer = p.id 
                INNER JOIN type_job t ON t.id = pt.id_type_job
                WHERE u.id = '".$_SESSION['id_photographer']."'";
                $result = mysqli_query($connect, $sql);
                $count_row = mysqli_num_rows($result);

                $Job_type = "";
                $i = 0;
                while($row = mysqli_fetch_array($result)){
                    $i++;
                    
                    $Job_type .= $row['Job_type'];
                    if($i<$count_row) {
                        $Job_type .= ", ";
                    }
                    
                    $avatar = $row['avatar'];
                    
                    $Starting_wage = $row['Starting_wage'];
                    $Highest_wage = $row['Highest_wage'];
                    $province = $row['province'];
                    $username = $row['username'];
                    $status = $row['status'];
                    $created_at = $row['created_at'];
                }
                
            } else if (isset($_SESSION['id'])){
                $sql = "SELECT u.avatar, p.Starting_wage, p.Highest_wage, p.province, 
                p.username, u.status, u.created_at, t.name as Job_type FROM user u 
                INNER JOIN Photographers p ON u.id = p.user_id
                INNER JOIN photographer_type_job pt ON pt.id_photographer = p.id 
                INNER JOIN type_job t ON t.id = pt.id_type_job
                WHERE u.id = '".$_SESSION['id']."'";
                $result = mysqli_query($connect, $sql);
                $count_row = mysqli_num_rows($result);

                $Job_type = "";
                $i = 0;
                while($row = mysqli_fetch_array($result)){
                    $i++;
                    
                    $Job_type .= $row['Job_type'];
                    if($i<$count_row) {
                        $Job_type .= ", ";
                    }
                    
                    $avatar = $row['avatar'];
                    
                    $Starting_wage = $row['Starting_wage'];
                    $Highest_wage = $row['Highest_wage'];
                    $province = $row['province'];
                    $username = $row['username'];
                    $status = $row['status'];
                    $created_at = $row['created_at'];
                }
            } else {
                $avatar = 'profile/profile_photographer.jpg';
                $avatar = '';
                $Job_type = '';
                $Starting_wage = '';
                $Highest_wage = '';
                $province = '';
                $username = '';
                $status = '';
                $created_at = '';
            }
        ?>
        <!----- profile-photographer ----->
        <div class="profile-photographer-bg">
            <div class="row" align="center" style="width: 100%; max-width: 1200px; margin: 0 auto;">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" >
                    <div class="avatar-photographer-box">
                        <div class="avatar-photo" style="width:150px;height:150px;">
                            <img src="img/<?php echo $avatar; ?>" alt="">
                        </div>
                        <div class="follow">
                            <h5>ผู้ติดตาม 29 คน</h5>
                            <h5>ถ่ายแล้ว 129 งาน</h5>
                        </div>
                        <div class="stars-info-photographer" style="margin-top: 5px;">
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-left: -140px;">
                    <div class="row">
                        <h1 class="title" style="color: #057ADF;"><?php echo $username; ?></h1>
                    </div>
                    <div class="row">
                        <div class="verified">
                            <h3><img src="img/icons/verified.svg" alt="">Verified</h3>
                        </div>
                        <div class="date-register-show" style="margin-top: 5px;">
                            <a style="color:#9D9D9D;" > เป็นสมาชิกเมื่อวันที่ : <?php echo $created_at; ?> </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="detail-info-photographer" style="margin-top: 5px;">
                            <h4> ประเภทงาน : <?php echo $Job_type; ?></h4>
                            <h4> พื้นที่ : <?php echo $province; ?></h4>
                            <h4> ค่าบริการเริ่มต้น : <?php echo $Starting_wage; ?></h4>
                            <h4> ค่าบริการสูงสุด : <?php echo $Highest_wage; ?></h4>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="tag-snap">
                            <a class="tag" href="#">portrait</a>
                            <a class="tag" href="#">skin</a>
                            <a class="tag" href="#">event</a>
                            <a class="tag" href="#">landscape</a>
                            <a href="#" style="margin-top:2px; color:darkgrey;">Edit Tags</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!----- profile-photographer ----->

        <div class="container" align="center">

            <!-- ตารางงาน -->
            <div class="snap_calendar">
                <div class="snap_calendar_works">
                    <h3>ตารางงาน</h3>
                </div>
                <?php
                    $sql_reserve_package = "SELECT * 
                    FROM reserve_package r
                    INNER JOIN Photographers p ON p.user_id = r.photographer_id
                    INNER JOIN user u ON u.id = p.user_id
                    INNER JOIN photographer_package pp ON pp.id = r.id_package
                    WHERE u.id = '".$_SESSION['id']."'
                    GROUP BY r.id";

                    $d_array = array(
                    "Sunday" => "อาทิตย์",
                    "Monday" => "จันทร์",
                    "Tuesday" => "อังคาร",
                    "Wednesday" => "พุธ",
                    "Thursday" => "พฤหัสบดี",
                    "Friday" => "ศุกร์",
                    "Saturday" => "เสาร์"
                    );

                    $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");

                            $result_reserve_package = mysqli_query($connect, $sql_reserve_package);
                            while($row = mysqli_fetch_array($result_reserve_package)){
                                $date = explode(" - ", $row['work_date']);

                                $strMonth= date("n",strtotime($date[0]));
                                
                                $strMonthThai=$strMonthCut[$strMonth];

                                $year = date("Y",strtotime($date[0]))+543;

                                echo '<div class="row row-striped">
                    <div class="col-3">
                        <h4 class="display-4"><span class="badge badge-secondary">'.date("d",strtotime($date[0])).'</span></h4>
                        <h3>'.$strMonthThai.' '.$year.'</h3>
                    </div>
                    <div class="col-9">
                        <h3 class="text-uppercase"><strong style="font-weight: 500;">'.$row['package_name'].'</strong></h3>
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> '.$d_array[date('l', strtotime($date[0]))].'</li>
                            <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> '.$row['time_start'].' - '.$row['time_end'].'</li>
                        </ul>
                    </div>
                </div>';
                            }
                ?>
            </div>

            <!-- konha-profile-snap -->
            <div class="konha-profile-snap">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="text-head-search">
                            <p class="booking">
                                <span><i class="fas fa-camera" style="margin-right: 10px;"></i>ประเภทงาน</span>
                            </p>
                            <?php 
                                    $sql_type_job = "select * from type_job";

                                    $result_type_job = mysqli_query($connect, $sql_type_job);
                                    echo '<select class="form-control" name="type_job" required>';
                                    while($row = mysqli_fetch_array($result_type_job)){
                                        if($row['id'] == $_SESSION['type_job']){
                                            $_SESSION['type_job_name'] = $row['name'];
                                            echo '<option value="'.$row['id'].'" selected>'.$row['name'].'</option>';
                                        } else {
                                            echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
                                        }
                                        
                                    }
                                    echo '</select>';
                                    ?>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="text-head-search">
                            <p class="booking">
                                <span><i class="fas fa-calendar-alt" style="margin-right: 10px;"></i>วัน เวลา</span>
                            </p>
                            <input class="form-control hasDatepicker" id="datepicker" name="datepicker" placeholder="Select Date" type="text" value="<?php echo $_SESSION['date']; ?>" required>
                        </div>
                    </div>

                </div>
                <!-- <div class="row">
                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                    <php 
                                    $sql_reserve_package = "select * from reserve_package where photographer_id = '".$_SESSION['id_photographer']."'
                                    ";

                                    $result_reserve_package = mysqli_query($connect, $sql_reserve_package);
                                    while($row = mysqli_fetch_array($result_reserve_package)){
                                        echo '<p>มีงานช่วง : '.$row['time_start'].' - </p>';
                                        
                                    }
                                    ?>
                        
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                        <div class="change-booking">
                            <button type="submit" name="submit" class="btn btn-outline-primary">ค้นหา</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- konha-profile-snap -->

            <!-- menu ประเภทงานกับผลงานทั้งหมด -->
            <div class="profile-menu">

                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="justify-content: center;">
                    <li class="nav-item">
                        <a class="nav-link active" id="type_job-tab" data-toggle="pill" href="#type_job" role="tab" aria-controls="type_job" aria-selected="true" style="font-size: 20px;">
                            <i class="fas fa-layer-group" style="margin-right: 10px;"></i>ประเภทงาน
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="snap_photo_all-tab" data-toggle="pill" href="#snap_photo_all" role="tab" aria-controls="snap_photo_all" aria-selected="false" style="font-size: 20px;">
                            <i class="fas fa-images" style="margin-right: 10px;"></i>ผลงานทั้งหมด
                        </a>
                    </li>
                </ul>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="type_job" role="tabpanel" aria-labelledby="type_job-tab">
                        <!-- type job -->
                        <div class="type-jobs">
                            <div class="row text-center">
                                <div class="col-lg-2 col-md-6 mb-4">
                                    <div class="menu">
                                        <a href="./profile.php" class="list-group-item">
                                            <img src="img/icons/iconfinder_editor-album-collection-glyph_763390.svg" alt="TEST" >งานทั้งหมด
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-4">
                                    <div class="menu">
                                        <a href="./profile.php?type_id=1" class="list-group-item">
                                            <i class="fas fa-user-graduate"></i>รับปริญญา
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-4">
                                    <div class="menu">
                                        <a href="./profile.php?type_id=2" class="list-group-item">
                                            <i class="fas fa-portrait"></i>ภาพบุคคล/แฟชั่น
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 mb-4">
                                    <div class="menu">
                                        <a href="./profile.php?type_id=3" class="list-group-item">
                                            <img src="img/svgs/solid/rings-wedding.svg" alt>งานแต่งงาน
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 mb-4">
                                    <div class="menu">
                                        <a href="./profile.php?type_id=4" class="list-group-item">
                                            <i class="fas fa-hand-holding-heart"></i>พรีเวดดิ้ง
                                        </a> 
                                    </div>
                                </div>
                            </div>

                            <div class="row text-center">
                                <div class="col-lg-2 col-md-6 mb-4">
                                    <div class="menu">
                                        <a href="./profile.php?type_id=5" class="list-group-item">
                                            <i class="fas fa-calendar-alt"></i>อีเว้นท์
                                        </a>     
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-4">
                                    <div class="menu">
                                        <a href="./profile.php?type_id=6" class="list-group-item">
                                            <i class="fas fa-drumstick-bite"></i>สินค้า/อาหาร
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-4">
                                    <div class="menu">
                                        <a href="./profile.php?type_id=7" class="list-group-item">
                                            <i class="fab fa-houzz"></i>บ้าน/โรงแรม/สถาปัตยกรรม
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 mb-4">
                                    <div class="menu">
                                        <a href="./profile.php?type_id=8" class="list-group-item">
                                            <i class="fas fa-praying-hands"></i>งานอุปสมบท
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 mb-4">
                                    <div class="menu">
                                        <a href="./profile.php?type_id=9" class="list-group-item">
                                            <!-- <i class="fas fa-ellipsis-v" ></i>--> อื่นๆ
                                        </a>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <!-- type job -->

                        <!-- package-photographer -->
                        <?php

                            if (isset($_REQUEST['type_id'])) {
                                $sql_package = "SELECT *
                                FROM photographer_package 
                                WHERE type_id = '".$_REQUEST['type_id']."'
                                AND photographer_id = '".$_SESSION['id_photographer']."'";
                            } else if (isset($_POST["form_search"])) {
                                $sql_package = "SELECT *
                                FROM photographer_package 
                                WHERE type_id = '".$_POST['type_job']."'
                                AND photographer_id = '".$_SESSION['id_photographer']."'";
                                
                            } else {
                                $sql_package = "SELECT *
                                FROM photographer_package 
                                WHERE photographer_id = '".$_SESSION['id_photographer']."'";
                            } 

                            $result_package = mysqli_query($connect, $sql_package);

                                while($row = mysqli_fetch_array($result_package)){
                                    echo '
                                    <div class="package">
                                        <div class="package-photographer" >
                                            <div class="row" style="padding: 25px;align-items: center;">
                                                <div class="col-6">
                                                    <div class="ex-photo">
                                                        <img src="img/package/'.$row['img_package'].'" alt="" style="width:100%;">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="text-detail">
                                                        <h4>'.$row['package_name'].'</h4>
                                                        <p><i class="far fa-clock"></i> : '.$row['hour'].' ชั่วโมง</p>
                                                        <h3>ราคา : '.$row['price'].' บาท</h3>
                                                    </div>
                                                    <div class="row" style="place-content: center;">
                                                        <div class="changphapa-details top_brand_home_details">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <a href="./package_changphaph.php?package_id='.$row['id'].'"><input type="button" name="submit" value="ดูรายละเอียดเพิ่มเติม" class="button"></a>
                                                                </fieldset>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    ';
                                }
                        ?>
                        <!-- package-photographer -->
                    </div>

                    <div class="tab-pane fade" id="snap_photo_all" role="tabpanel" aria-labelledby="snap_photo_all-tab">
                        <!-- ablum all
                        <img src="img/photo/IMG_3837.JPG" alt=""> -->
                        <div class="album-all">
                            <div class="gallery-container">
                                <div class="tz-gallery">
                                    <div class="row">
                                        <?php
                                            $sql_img = "SELECT * FROM `photographer_image`
                                             WHERE photographer_id = '".$_SESSION['id_photographer']."'";
                                             $result_img = mysqli_query($connect, $sql_img);
                                             while ($row_img = mysqli_fetch_array($result_img)) {
                                                echo '
                                                <div class="col-sm-6 col-md-4">
                                                    <a class="lightbox" href="./img/photographer_img/'.$row_img['img_name'].'">
                                                        <img src="./img/photographer_img/'.$row_img['img_name'].'" alt="">
                                                    </a>
                                                </div>
                                                ';
                                             }
                                        ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ablum all -->
                    </div>
                </div>
            </div>





            <div class="reviews">
                <h3>รีวิวจากผู้ใช้งาน</h3>
                <div class="row blockquote review-item">
                    <div class="col-md-3 text-center">
                        <div class="avatar-user">
                            <img src="img/icons/profile_upload.jpg" alt="" style="border-radius:50%; width: 4rem;">
                            <div class="caption">
                                <small><a href="#">Fal Nunthawat</a></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4>“รูปสวย ชอบใจๆ ส่งงานตรงเวลา” </h4>
                        <div class="ratebox text-center" data-id="0" data-rating="5"></div>
                        <small class="review-date">March 26, 2017</small>
                    </div>
                    <div class="col-md-3">
                        <div class="stars-user" style="margin-top: 5px;">
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        </div>
                    </div>  
                </div>
                <div class="row blockquote review-item">
                    <div class="col-md-3 text-center" style="padding: 5px;align-items: center;">
                        <div class="avatar-user">
                            <img src="img/icons/profile_upload.jpg" alt="" style="border-radius:50%; width: 4rem;">
                            <div class="caption">
                                <small><a href="#">Fal Nunthawat</a></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4>“รูปสวย ชอบใจๆ ส่งงานตรงเวลา” </h4>
                        <div class="ratebox text-center" data-id="0" data-rating="5"></div>
                        <small class="review-date">March 26, 2017</small>
                    </div>
                    <div class="col-md-3">
                        <div class="stars-user" style="margin-top: 5px;">
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        </div>
                    </div>  
                </div>  
                <div class="row blockquote review-item">
                    <div class="col-md-3 text-center" style="padding: 5px;align-items: center;">
                        <div class="avatar-user">
                            <img src="img/icons/profile_upload.jpg" alt="" style="border-radius:50%; width: 4rem;">
                            <div class="caption">
                                <small><a href="#">Fal Nunthawat</a></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4>“รูปสวย ชอบใจๆ ส่งงานตรงเวลา” </h4>
                        <div class="ratebox text-center" data-id="0" data-rating="5"></div>
                        <small class="review-date">March 26, 2017</small>
                    </div>
                    <div class="col-md-3">
                        <div class="stars-user" style="margin-top: 5px;">
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        </div>
                    </div>  
                </div>  
                <div class="row blockquote review-item">
                    <div class="col-md-3 text-center" style="padding: 5px;align-items: center;">
                        <div class="avatar-user">
                            <img src="img/icons/profile_upload.jpg" alt="" style="border-radius:50%; width: 4rem;">
                            <div class="caption">
                                <small><a href="#">Fal Nunthawat</a></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4>“รูปสวย ชอบใจๆ ส่งงานตรงเวลา” </h4>
                        <div class="ratebox text-center" data-id="0" data-rating="5"></div>
                        <small class="review-date">March 26, 2017</small>
                    </div>
                    <div class="col-md-3">
                        <div class="stars-user" style="margin-top: 5px;">
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        </div>
                    </div>  
                </div>    
            </div>
        </div>
        <!-- container -->
        
    </div>
    <!---------- wrapper ---------->

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
    
    
        
    
    <!-- ---------------------------------->
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');
    </script>
    <!-- ---------------------------------->

</body>
</html>