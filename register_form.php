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
    <!-- Header Section -->
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
        <form action="./db/update_profile.php" method="post"  enctype="multipart/form-data">

        <div class="container">

            <div class="row" style="margin-top: 50px; margin-left: 75px;">
                <div class="col">
                    <h4  style="font-weight: bold; font-size: 25px;">email : <?php echo $_SESSION['email']; ?></h4>
                </div>
            </div>

            <div class="row" style="margin-top: 20px;">
                <div class="col text-center">
                    <h2 style= "font-size: 45px;" >กรอกข้อมูลส่วนตัว</h2>
                </div>
            </div>

            <div class="row" style="margin-top: 50px; margin-right: 60px;">
                <div class="col text-center">

                <?php
                    if(empty($avatar)){
                ?>
                    <div class="img-register">
                        <img id="avatar" src="img/icons/profile_upload.jpg" style="width: 100%">
                    </div>
                <?php
                    }
                    else{
                ?>
                    <div class="img-register">
                        <img id="avatar" src="img/<?php echo $avatar; ?>" style="width: 100%;">
                    </div>
                <?php
                    }
                ?>
                    <i class="ellipse" style="position: absolute; width: 50px; height: 50px; 
                    left: 320px; top: 135px; background: #057ADF; 
                    border: 2px solid #FFFFFF; border-radius: 50%; object-position: 50% 50%;"></i>
                    <a href="#" id="up-photo"><i class="material-icons" 
                    style="position: absolute; width: 50px; height: 50px; left: 320px; top: 146px; color: #FFFFFF;
                    object-position: 50% 50%;">add_a_photo</i></a>
                    <input id="file-input" type="file" name="file-input" style="display: none;" />
                    <p class="description">* กรุณาเลือกรูปที่เห็นใบหน้าชัดเจน</p>
                </div>
                <div class="col">
                    
                    <div class="form-group mb-3">
                    <input type="text" class="form-control" id="basic-url" name="name_surname" 
                    style="font-family: DB Adman X; font-style: normal; font-weight: normal; font-size: 25px; line-height: 27px; color: #057ADF;" value="<?php echo $name_surname; ?>" required>
                    <p class="description">* ชื่อและนามสกุลตามบัตรประชาชน</p>
                    </div>

                    
                    <div class="form-group mb-3">
                    <label for="basic-url" style="font-family: DB Adman X; font-style: normal; font-weight: normal; font-size: 25px; line-height: 27px; color: #000000;">
                            เลขบัตรประชาชน</label>

                    <input pattern="[0-9]{13}" type="text" class="form-control" id="basic-url" name="id_passport_number" aria-describedby="basic-addon3"
                    style="font-family: DB Adman X; font-style: normal; font-weight: normal; font-size: 25px; line-height: 27px; color: #057ADF;" value="<?php echo $id_passport_number; ?>" required>
                    <p class="description">
                    *ใช้เพื่อยืนยันตัวตนและใช้ในการกู้คืนรหัสผ่านในกรณีที่ท่านลืม</p>
                    </div>

                    <div class="form-group mb-3">
                        <label class="label" style="font-family: DB Adman X; font-style: normal; font-weight: normal; font-size: 25px; line-height: 27px; color: #000000;">
                            วันเกิด</label>
                        <input type="date" name="birthday" class="form-control" style="font-family: DB Adman X; font-style: normal; font-weight: normal; font-size: 20px; line-height: 27px; color: #000000;" value="<?php echo $birthday; ?>" required/>
                    </div>

                    <div class="form-group mb-3">
                        <label for="basic-url" style="font-family: DB Adman X; font-style: normal; font-weight: normal; font-size: 25px; line-height: 27px; color: #000000;">
                            หมายเลขโทรศัพท์</label>
                    <input name="tel" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"  
                    style="font-family: DB Adman X; font-style: normal; font-weight: normal; font-size: 25px; line-height: 27px; color: #057ADF;" value="<?php echo $phone; ?>" required>
                    <p class="description">
                    *เบอร์โทรศัพท์ของท่านที่สามารถติดต่อได้และใช้ในการกู้คืนรหัสผ่านในกรณีที่ท่านลืม</p>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 30px;">
                <div class="col-12 text-center">
                    <h5 style="font-style: normal; font-weight: bold; font-size: 30px; line-height: 27px; color: #057ADF;">
                    *กรุณาตรวจสอบความถูกต้องของข้อมูล</h5>
                </div>
                <div class="col-12 text-right" style="margin-top: 15px; margin-right: 45px;">
                    <button name="<?php echo $submit; ?>" type="submit" class="btn btn-primary" style="position: absolute; width: 160px; height: 50px; left: 900px; top: 3px; background: #057ADF; font-size: 26px;
                    border-radius: 45px;">บันทึก</button>
                </div>
            </div>
        </div>
        </form>
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

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
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
</body>
</html>