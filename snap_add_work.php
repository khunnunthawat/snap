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
    <form action="./db/add_package.php" method="POST" enctype="multipart/form-data">
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
                        <h2><a href="snap_my_work.php" style="color: #282828;">งานของฉัน</a></h2>
                        <h3> <i class="fas fa-user-circle"></i> : <?php echo $name_surname; ?> </h3>
                    </div>
                    <div class="row">
                        <!-- กล่อง -->
                        <div class="col-lg-12" style="margin-top: 15px;">
                            <div class="info-right">
                                <div class="menu-bg">
                                    <div class="text-snap-work-head"><h3>แพ็คเกจงาน</h3></div>
                                    <!-- ประเภทงาน + ชื่องาน  -->
                                    <div class="b-type-job-name-job">
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="snap-type-job">
                                                    <h4>เลือกประเภทงาน</h4>
                                                    <select name="type_job" class="browser-default custom-select">
                                                        <option selected>เลือกประเภทงาน</option>
                                                        <option value="1">รับปริญญา</option>
                                                        <option value="2">ภาพบุคคล/แฟชั่น</option>
                                                        <option value="3">งานแต่งงาน</option>
                                                        <option value="4">พรีเวดดิ้ง</option>
                                                        <option value="5">งานอีเว้นท์</option>
                                                        <option value="6">สินค้า/อาหาร</option>
                                                        <option value="7">บ้าน/โรงแรม/สถาปัตยกรรม</option>
                                                        <option value="8">งานอุปสมบท</option>
                                                        <option value="9">อื่นๆ</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="name-type-job">
                                                    <h4>ชื่องาน</h4>
                                                    <input name="name_package" class="form-control" type="text" placeholder="ตัวอย่าง ถ่ายภาพรับปริญญา วันจริง วันซ้อม นอกรอบ">
                                                </div>
                                            </div>

                                            <div class="col-2">
                                                <div class="name-type-job">
                                                    <h4>ราคา</h4>
                                                    <input name="price" class="form-control" type="text" placeholder="1,XXX บาท">
                                                </div>
                                            </div>

                                            <div class="col-2">
                                                <div class="name-type-job">
                                                    <h4>ระยะเวลาปฏิบัติงาน</h4>
                                                    <input  name="hour"class="form-control" type="text" placeholder="4 ชั่วโมง">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   

                                    <!-- รายละเอียดงาน -->
                                    <div class="b-detail-work-snap">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="list-detail-work-snap">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">รายละเอียดงาน</label>
                                                            <textarea name="detail_job" class="form-control rounded-0" id="exampleFormControlTextarea1" rows="7" placeholder="-  ถ่ายภาพไม่จำกัดจำนวน
-  ส่งไฟล์ขนาดใหญ่ : JPGE และ Size For Facebook
"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="list-detail-work-snap">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">รายละเอียดงานเพิ่มเติม</label>
                                                        <textarea name="detail" class="form-control rounded-0" id="exampleFormControlTextarea1" rows="7" placeholder="-  มีการมัดจำช่างภาพ ขั้นต่ำ 500 บาท
-  ทำการชำระเงินหลังปฏิบัติงานเสร็จ เต็มจำนวน
-  กรณีลูกค้าขอเลท/เพิ่มเวลา ชั่วโมงละ 500 บาท
-  ช่วงเช้า : เริ่ม 8:00 - 12.00 น.
-  ช่วงบ่าย : เริ่ม 13:00 - 17.00 น.
-  ต่างจังหวัด มีค่าเดินทางเพิ่ม"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="snap-add-photo">
                                        <h4> ภาพปกตัวอย่างผลงาน </h4>
                                        <div class="snap-image-manager">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div id="msg"></div>
                                                            <input type="file" class="file" accept="image/*" id="file_image_package" name="file_image_package">
                                                            <div class="input-group my-3">
                                                                <input type="text" class="form-control" disabled placeholder="Upload File" id="file" for="file_image_package" aria-describedby="inputGroupFileAddon01">
                                                                <div class="input-group-append">
                                                                    <button type="button" class="browse btn btn-primary" id="tax_file_name">รูป</button>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <img src="img/icons/ex-photo-wall.svg" id="preview" class="img-thumbnail">
                                                    </div>
                                                </div>
                                                <!-- row  -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="btn-add-snap-profile">
                                        <button type="submit" class="btn btn-success" style="width: 35%;" >เพิ่มงานสำเร็จ</button>
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
        
    </form>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="js/bootstrap.min.js" ></script>

    <script>
        $(document).ready(function () {
            $().DataTable()
            $('#dtBasicExample').DataTable();
            $('.dataTables_length').addClass('bs-select');
        });
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