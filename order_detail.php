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


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

</head>
<body>
    <div class="wrapper">
        <?php
            require_once("header.php");
            require_once('./db/db_connect.php');
        ?>


        <form action="./db/reserve_package.php?package_id=<?php echo $_REQUEST['package_id']; ?>" method="POST" enctype="multipart/form-data">
        <!----- order-detail------>
        <div class="container">
            <div class="order-detail">
                <h2>รายละเอียดการจอง</h2>
                <div class="row">

                    <!-- กล่องซ้าย -->
                    <div class="col-lg-6" style="margin-top: 15px;">
                        <div class="detail-wrap">
                            <div class="module-bg">
                                <!-- ชื่อลูกค้า -->
                                <div class="m-guestInfo">
                                    <h4 class="guestInfo_title">ข้อมูลลูกค้า</h4>
                                    <div class="m-guest">
                                        <div class="m-guest-form">
                                            <div class="m-guest-item">
                                                <div class="guestLable">
                                                    <label>
                                                        <i class="fas fa-user-circle"></i> ชื่อ - นามสกุล
                                                    </label>
                                                </div>
                                                <div class="guestContainer">
                                                    <div>
                                                        <div class="guestContainer-input">
                                                            <div class="m-input">
                                                                <input type="text" class="form-control" id="basic-url" name="name_surname" value="<?php echo $_SESSION['name_surname']; ?>" disabled>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div>
                                                <div class="guestLable">
                                                    <label>
                                                        <i class="fas fa-at"></i> E-mail
                                                    </label>
                                                </div>
                                                <div class="guestContainer">
                                                    <div>
                                                        <div class="guestContainer-input">
                                                            <div class="m-input">
                                                                <input type="text" class="form-control" id="basic-url" name="name_surname" value="<?php echo $_SESSION['email']; ?>" disabled>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- รายะละเอียดงาน -->
                                <div class="m-JobDescription">
                                    <h5 class="guestInfo_title">รายละเอียดงาน</h5>
                                    <div class="m-guest-item">
                                        <div class="guestLable">
                                            <label>
                                                <i class="fas fa-camera" aria-hidden="true"></i>ประเภทงาน
                                            </label>
                                            <p> <?php echo $_SESSION['type_job_name']; ?> </p>
                                        </div>
                                        <div class="guestContainer">
                                            <div>
                                                <div class="guestContainer-input">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">รายละเอียดงานเพิ่มเติม</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="detail_work" rows="6"></textarea>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- เวลาที่เจอ -->
                                <div class="m-discount">
                                    <div class="start-work">
                                        <h4 class="guestInfo_title">
                                            <div class="guestLable">
                                                <label>
                                                    <i class="fas fa-user-clock"></i>
                                                </label>เวลา : เริ่มงาน
                                            </div>
                                        </h4>
                                        <div class="m-guest-item">
                                            <div class="appointment">
                                                <input id="timepicker"  name="time_meet" width="300" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="end-work">
                                        <h4 class="guestInfo_title">
                                            <div class="guestLable">
                                                <label>
                                                    <i class="fas fa-user-clock"></i>
                                                </label>เวลา : จบงาน
                                            </div>
                                        </h4>
                                        <div class="m-guest-item">
                                            <div class="appointment">
                                                <input id="timepicker"  name="time_end" width="300" />
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="m-guestInfo_remark">* โปรดระบุเวลานัดพบ ช่างภาพ
                                    </div>
                                </div>


                                <!-- สถานที่ -->
                                <div class="m-location">
                                    <h4 class="guestInfo_title">
                                        <div class="guestLable">
                                            <label>
                                                <i class="fas fa-map-marker-alt"></i>
                                            </label>สถานที่
                                            <div class="guestLable">
                                            <label>
                                                จังหวัด
                                            </label>
                                            <p> <?php echo $_SESSION['province']; ?> </p>
                                        </div>
                                        </div>
                                    </h4>
                                    <div class="m-guest-item">
                                        <div class="location">
                                            <textarea class="form-control" id="exampleFormControlTextarea1"  name="location" rows="3"></textarea require>
                                        </div>
                                        <div class="m-guestInfo_remark">* โปรดระบุสถานที่ หรือ ลิงค์ location ของ Google Map
                                            <img src="img/icons/info.svg" alt>
                                        </div>
                                    </div>
                                </div>

                                <!-- ใบกำกับภาษี-->
                                <div class="m-taxinvoice">
                                    <h4 class="guestInfo_title">หนังสือรับรอง หัก ณ ที่จ่าย</h4>
                                    <div class="m-guestInfo_remark"> 
                                        สำหรับผู้ว่าจ้างในรูปแบบบริษัท ใช้ในการออกเอกสารบัญชี VAT
                                    </div>
                                    <div class="m-guest">
                                        <div class="m-guest-form">
                                            <div class="m-guest-item">
                                                <div class="guestLable">
                                                    <div id="msg"></div>
                                                    <form method="post" id="image-form">
                                                        <input type="file" name="img[]" class="file" accept="image/*" id="file_tax" name="file_tax">
                                                        <div class="input-group my-3">
                                                            <input type="text" class="form-control" disabled placeholder="Upload File" id="file" for="file_tax" aria-describedby="inputGroupFileAddon02">
                                                            <div class="input-group-append">
                                                                <button type="button" class="browse btn btn-primary" id="tax_file_name">สลีป</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="m-taxinvoice">
                                                    <img src="img/icons/slip_box.svg" id="preview" class="img-thumbnail" style="width: 75%;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- กล่องขวา -->
                    <div class="col-lg-6" style="margin-top: 15px;">
                        <div class="m-module-bg">

                        <?php
                            $sql_package = "SELECT *
                                FROM photographer_package 
                                WHERE id = '".$_REQUEST['package_id']."'";

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
                            
                            <input type="text" name="hour" value="<?php echo $row['hour']; ?>" hidden>
                            <input type="text" name="photographer_id" value="<?php echo $row['photographer_id']; ?>" hidden>

                            <!-- packageinfo -->
                            <div class="m-packageInfo">
                                <div class="package">
                                    <div class="packageInfo-photographer" >
                                        <div class="row" style="align-items: center;">
                                            <div class="col-6">
                                                <div class="packagephoto">
                                                    <img src="img/photo/<?php echo $row['img_package']; ?>" alt="">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="packageinfo-detail">
                                                    <h4><?php echo $row['package_name']; ?></h4>
                                                    <p><i class="far fa-clock"></i> <?php echo $row['hour']; ?> ชั่วโมง</p>
                                                    <h3>ราคา : <?php echo $row['price']; ?> บาท</h3>
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
                                                <div class="timeLable">วันที่ : เริ่มงาน</div>
                                                <div class="time"><?php echo DateThai($date[0]); ?></div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="m-checkInOut_time">
                                                <div class="timeLable">วันที่ : จบงาน</div>
                                                <div class="time"><?php echo DateThai($date[1]); ?></div>
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
                                                            <div price="1222.76" currency="THB" class="u-price">
                                                                <span>
                                                                    <span class="u-txt u-txt-warn u-price_num" id="price"><?php echo $row['price']; ?></span>
                                                                    <span class="u-txt u-txt-warn u-price_currency">บาท</span>
                                                                </span>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </li>
                                            </div>
                                        </div>

                                        <div class="row" id="tax" style="display: none">
                                            <div class="col-12">
                                                <li class="priceItem summary">
                                                    <span class="priceLable">หัก ภาษี ณ ที่จ่าย</span>
                                                    <span class="priceCell">
                                                        <div class="u-price" price="3%" currency="THB">
                                                            <span>
                                                                <span class="u-txt u-txt-warn u-price_num">3</span> 
                                                                <span class="u-txt u-txt-warn u-price_currency">%</span>
                                                            </span>
                                                        </div>
                                                    </span>
                                                </li>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <li class="priceItem summary">
                                                    <span class="priceLable">ยอดทั้งหมด </span>
                                                    <span class="priceCell">
                                                        <div class="u-price" price="3,500" currency="THB">
                                                            <span>
                                                                <span id="actual-price" hidden><?php echo $row['price']; ?></span>
                                                                <input class="total-price" name="total-price" id="total-price" type="text" value="<?php echo $row['price']; ?>" hidden/>
                                                                <span class="u-txt u-txt-warn u-price_num" id="show-price"><?php echo $row['price']; ?></span> 
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


                            <!-- เงื่อนไข -->
                            <div class="m-pc">
                                <div class="m-policies">
                                    <li>
                                        <ul class="m-cancelPolicy-box">
                                            <li class="m-cancelPolicy">
                                                <div class="m-title cancel-warning">
                                                    <img src="img/icons/exclamation.svg" alt>
                                                    <span>เงื่อนไขการจองช่างภาพ</span>
                                                </div>
                                                <ul class="m-content">
                                                    <li>
                                                        มีการมัดจำให้กับช่างภาพ ขั้นต่ำ 500 บาท
                                                    </li>
                                                    <li>
                                                        เมื่อยืนยันการจองแล้ว คุณจะไม่สามารถเปลี่ยนแปลงวันจองได้
                                                    </li>
                                                    <li>
                                                        ยกเลิกการจองฟรี ไม่เกินก่อนวันงาน 1 อาทิตย์
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </div>
                            </div>

                            <!-- เช็ค -->
                            <div class="m-check">
                                <h4 class="guestInfo_title">
                                    <div class="guestLable">
                                        <div class="check-text">
                                            <p>* กรุณาตรวจสอบความถูกต้องของข้อมูล </p>
                                        </div>
                                    </div>
                                </h4>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                        <label class="form-check-label" for="invalidCheck">
                                            ยืนยันการจองครั้งนี้
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- กดจอง -->
                            <div class="m-bookingnow">
                                <div class="m-bookingnow_content">
                                    <div class="price0 payText">
                                        <span parentlabel="span" txt="ชำระออนไลน์" class="warn" childlabel="span" label="span">ดำเนินการจอง</span>
                                    </div>
                                </div>
                                <div class="m-payment_button"> 
                                    <button type="submit" class="btn btn-primary btn-lg">จอง</button>
                                </div>
                            </div>

                        </div>
                    </div><!-- กล่องขวา -->

                </div><!-- row -->
            </div>
        </div>
        <!----- order-detail------>
        </form>

    </div>
    <!------------ wrapper ------------>

    
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="js/bootstrap.min.js" ></script>

    <script>
        $('#timepicker').timepicker({
            uiLibrary: 'bootstrap4'
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

        if (this.files && this.files[0]) {
                    console.log('test1');
                    var price = $('#price').text();
                    var price_tax = price * 1.03;

                    $("#tax").show();
                    $("#show-price").text(price_tax);
                    $("#total-price").val(price_tax);

                    var fileName = $(this).val();
                    var cleanFileName = fileName.replace('C:\\fakepath\\', " ");
                    $(this).next('.custom-file-label').html(cleanFileName);
                    
                } else {
                    console.log('3');
                    var actual_price = $('#actual-price').text();
                    $("#tax").hide();
                    $("#show-price").text(actual_price);
                    $("#total-price").val(actual_price);
                }

        });
    </script>
</body>
</html>