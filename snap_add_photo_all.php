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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
        
        <form action="./db/upload_image_multiple.php" method="POST" style="background-color: #f0f8ff;" enctype="multipart/form-data">
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
                                            <div class="stardust-dropdown" style="background-color: #f0f8ff;border-left: solid #282828;border-radius: 2px;">
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
                                    <div class="col" style="margin-top: 20px;">
                                        
                                        <div class="text_add_photo">
                                            <h3>ผลงานของคุณทั้งหมด</h3>
                                        </div>

                                        <!-- เพิ่มผลงาน  -->
                                        <div class="add_photos_changphapa">
                                            <fieldset class="form-group">
                                                <a href="javascript:void(0)" onclick="$('#pro-image').click()" style="font-size: 24px; color: #057ADF;">
                                                    <i class="fas fa-file-import" style="font-size: 24px; color: #057ADF; margin-right: 10px;"></i> Upload ผลงานภาพถ่ายของคุณ
                                                </a>
                                                <input type="file" id="pro-image" name="pro-image[]" style="display: none;" class="form-control"  multiple>
                                            </fieldset>
                                            <div class="preview-images-zone">
                                                <div class="preview-image preview-show-1">
                                                    <div class="image-cancel" data-no="1">x</div>
                                                    <div class="image-zone"><img id="pro-img-1" src="img/icons/file_image.svg"></div>
                                                </div>
                                            </div>
                                        </div>

                                        
                                    </div>
                                    <!-- save  -->
                                    <div class="col" style="margin-top: 20px;">
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

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="js/bootstrap.min.js" ></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        $(document).ready(function() {
            document.getElementById('pro-image').addEventListener('change', readImage, false);
            
            $( ".preview-images-zone" ).sortable();
            
            $(document).on('click', '.image-cancel', function() {
                let no = $(this).data('no');
                $(".preview-image.preview-show-"+no).remove();
            });
        });



        var num = 4;
        function readImage() {
            if (window.File && window.FileList && window.FileReader) {
                var files = event.target.files; //FileList object
                var output = $(".preview-images-zone");

                for (let i = 0; i < files.length; i++) {
                    var file = files[i];
                    if (!file.type.match('image')) continue;
                    
                    var picReader = new FileReader();
                    
                    picReader.addEventListener('load', function (event) {
                        var picFile = event.target;
                        var html =  '<div class="preview-image preview-show-' + num + '">' +
                                    '<div class="image-cancel" data-no="' + num + '">x</div>' +
                                    '<div class="image-zone"><img id="pro-img-' + num + '" src="' + picFile.result + '"></div>'
                                    '</div>';

                        output.append(html);
                        num = num + 1;
                    });

                    picReader.readAsDataURL(file);
                }
            } else {
                console.log('Browser not support');
            }
        }


    </script>

    


</body>
</html>