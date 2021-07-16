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
        
        <form action="./db/update_user.php" method="POST" style="background-color: #f0f8ff;" enctype="multipart/form-data">
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
                                                    <a class="userpage-sidebar-menu-entry" href="user_order.php">
                                                        <div class="userpage-sidebar-menu-entry__text">การจองของฉัน</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="stardust-dropdown" style="background-color: #f0f8ff;border-left: solid #282828;border-radius: 2px;">
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
                                    <div class="col text-center" style="margin-top: 20px;">
                                        <?php
                                            if(empty($avatar)){
                                        ?>
                                            <div class="img-register">
                                                <img id="avatar" src="img/icons/profile_upload.jpg">
                                            </div>
                                        <?php
                                            }
                                            else{
                                        ?>
                                            <div class="img-register">
                                                <img id="avatar" src="img/<?php echo $avatar; ?>">
                                            </div>
                                        <?php
                                            }
                                        ?>
                                            <i class="ellipse"></i>
                                            <a href="#" id="up-photo"><i class="material-icons">add_a_photo</i></a>
                                            <input id="file-input" type="file" name="file-input" style="display: none;" />
                                            <p class="description">* กรุณาเลือกรูปที่เห็นใบหน้าชัดเจน</p>
                                    </div>

                                    <div class="col" style="margin-top: 10px;">
                                        <div class="form-group mb-3" style="width: 50%;">
                                            <label for="basic-url">ชื่อ และ นามสกุล</label>
                                            <input type="text" class="form-control" id="basic-url" name="name_surname" 
                                            style="font-family: DB Adman X; font-style: normal; font-weight: normal; font-size: 25px; line-height: 27px; color: #057ADF;" value="<?php echo $name_surname; ?>" required>
                                            <p class="description">* ชื่อและนามสกุลตามบัตรประชาชน</p>
                                        </div>
                                        
                                        <div class="form-group mb-3" style="width: 50%;">
                                            <label for="basic-url">เลขบัตรประชาชน</label>
                                            <input pattern="[0-9]{13}" type="text" class="form-control" id="basic-url" name="id_passport_number" aria-describedby="basic-addon3"
                                            style="font-family: DB Adman X; font-style: normal; font-weight: normal; font-size: 25px; line-height: 27px; color: #057ADF;" value="<?php echo $id_passport_number; ?>" required>
                                            <p class="description">* ใช้เพื่อยืนยันตัวตน</p>
                                        </div>

                                        <div class="form-group mb-3" style="width: 50%;">
                                            <label for="basic-url">วันเกิด</label>
                                            <input type="date" name="birthday" class="form-control" style="font-family: DB Adman X; font-style: normal; font-weight: normal; font-size: 20px; line-height: 27px; color: #000000;" value="<?php echo $birthday; ?>" required/>
                                        </div>
                    
                                        <div class="form-group mb-3" style="width: 50%;">
                                            <label for="basic-url">หมายเลขโทรศัพท์</label>
                                            <input name="tel" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"  
                                            style="font-family: DB Adman X; font-style: normal; font-weight: normal; font-size: 25px; line-height: 27px; color: #057ADF;" value="<?php echo $phone; ?>" required>
                                            <p class="description">* เบอร์โทรศัพท์ของท่านที่สามารถติดต่อได้</p>
                                        </div>
                                    </div>

                                    <div class="col" style="margin-top: 10px;">
                                        <div class="check-info-user">
                                            <h4>* กรุณาตรวจสอบความถูกต้องของข้อมูล</h4>
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