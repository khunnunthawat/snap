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
        
        <form action="./db/confirm_payment.php?id_reserve=<?php echo $_REQUEST['id_reserve']; ?>" method="POST" style="background-color: #f0f8ff;" enctype="multipart/form-data">
            <!----- account setting ------>
            <div class="container">
                <div class="ac-setting">
                    <div class="account_setting">
                        <h2>ชำระเงิน</h2>
                        <h3> เลขที่การจอง : #<?php echo $_REQUEST['id_reserve']; ?> </h3>
                    </div>
                    <div class="row">
                        <!-- กล่องซ้าย -->
                        <div class="col-lg-4" style="margin-top: 15px;">
                            <div class="info-right">
                                <div class="menu-bg">

                                    <div class="payment-head">
                                        <p><i class="fas fa-wallet"></i> โอนเงินผ่านธนาคาร</p>
                                    </div>

                                    <div class="payment-text">
                                        <h4> ท่านสามารถชำระค่าสินค้า โดยการโอนเงินผ่านธนาคารได้ง่ายๆ ตามรายชื่อบัญชีธนาคารดังต่อไปนี้ </h4>
                                    </div>
                                    
                                    <!-- ธนาคาร -->
                                    <div class="bank-detail">
                                        <div class="bank-logo">
                                            <img src="img/logo_bank/kbank.jpg">
                                        </div>
                                        <div class="bank-right">
                                            <div class="bank-detail">
                                                <div class="account-number">
                                                    <span>เลขที่บัญชี :</span> <p>064-161137-9</p> 
                                                </div>
                                                <div class="account-name">
                                                    <span>ชื่อบัญชี :</span> <p>บริษัท ช่างภาพสแนพ จำกัด</p>
                                                </div>
                                                <div class="branch">
                                                    <span>สาขา :</span> <p>เซ็นทรัลลาดพร้าว</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ธนาคาร -->
                                    <div class="bank-detail">
                                        <div class="bank-logo">
                                            <img src="img/logo_bank/ktb.jpg">
                                        </div>
                                        <div class="bank-right">
                                            <div class="bank-detail">
                                                <div class="account-number">
                                                    <span>เลขที่บัญชี :</span> <p>984-9-44303-0</p>
                                                </div>
                                                <div class="account-name">
                                                    <span>ชื่อบัญชี :</span> <p>บริษัท ช่างภาพสแนพ จำกัด</p>
                                                </div>
                                                <div class="branch">
                                                    <span>สาขา :</span> <p>เซ็นทรัลเมืองทอง</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <!-- menu-bg -->
                            </div>
                        </div>

                        <!-- กล่องขวา -->
                        <div class="col-lg-8" style="margin-top: 15px;">
                            <div class="info-left">
                                <div class="menu-bg">
                                    <?php
                                    $sql_package = "SELECT *, r.id as reserve_id
                                    FROM reserve_package r
                                    INNER JOIN photographer_package p ON p.id = r.id_package
                                    WHERE r.id = '".$_REQUEST['id_reserve']."'";
                                    
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



                                    <!-- ชื่อลุกค้า -->
                                    <div class="m-user-name-email">
                                        <div class="row">
                                            <div class="user-name-echo">
                                                <h3><?php echo $_SESSION['name_surname']; ?></h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="user-email-echo">
                                                <h3><?php echo $_SESSION['email']; ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                    

                                    <!-- packageinfo -->
                                    <div class="m-packageInfo">
                                        <div class="package">
                                            <div class="packageInfo-photographer" >
                                                <div class="row" style="align-items: center;">
                                                    <div class="col-6">
                                                        <div class="packagephoto">
                                                            <img src="img/package/<?php echo $row['img_package']; ?>" alt="" style="width:100%;">
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

                                    <!-- เวลาเริ่มงานจบงาน -->
                                    <div class="m-dateInfo m-module-normal">
                                        <div class="m-checkInOut">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="m-checkInOut_time">
                                                        <div class="timeLable">เวลา : เริ่มงาน</div>
                                                        <div class="time"> 13:00 น. </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="m-checkInOut_time">
                                                        <div class="timeLable">เวลา : จบงาน</div>
                                                        <div class="time"> 17:00 น. </div>
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
                                    
                                    <!-- แนบหลักฐานการโอน -->
                                    <div class="col-12">
                                        <div id="msg"></div>
                                            <form method="post" id="image-form">
                                                <input type="file" id="file-upload" name="file-upload" class="file" accept="image/*" >
                                                <div class="input-group my-3">
                                                    <input type="text" class="form-control" disabled placeholder="แนบหลักฐานการชำระเงิน" id="slip-file">
                                                    <div class="input-group-append">
                                                        <button type="button" class="browse btn btn-primary">สลีป</button>
                                                    </div>
                                                </div>
                                            </form>
                                    </div>
                                    <div class="col-12">
                                        <img src="img/icons/slip_box.svg" id="preview" class="img-thumbnail" style="width: 75%;">
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


                                    <!-- กดจอง -->
                                    <div class="m-bookingnow">
                                        <div class="m-bookingnow_content">
                                            <div class="price0 payText">
                                                <span parentlabel="span" txt="ชำระออนไลน์" class="warn" childlabel="span" label="span">ดำเนินการ</span>
                                            </div>
                                        </div>
                                        <div class="m-payment_button"> 
                                            <button type="submit" class="btn btn-primary btn-lg">ชำระเงิน</button>
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
    // Add the following code if you want the name of the file appear on select
        $("#file-upload").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".file-upload").addClass("selected").html(fileName);
        });
    </script>

    <script>
        $(document).on("click", ".browse", function() {
            var file = $(this).parents().find(".file");
            file.trigger("click");
            });
            $('input[type="file"]').change(function(e) {
            var fileName = e.target.files[0].name;
            $("#slip-file").val(fileName);

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