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
                        <h2>งานของฉัน</h2>
                        <a href="snap_profile.php"><h3> <i class="fas fa-user-circle"></i> : <?php echo $name_surname; ?> </h3></a>
                    </div>
                    <div class="row">
                        <!-- กล่อง -->
                        <div class="col-lg-12" style="margin-top: 15px;">
                            <div class="info-right">
                                <div class="menu-bg-snap">
                                    <div class="snap-work-head">
                                        <div class="page-title">
                                            <p>
                                                แพ็คเกจงานทั้งหมด
                                            </p>
                                        </div>
                                        <a href="./snap_add_work.php">
                                            <button type="button" class="btn btn-outline-primary waves-effect">
                                                <i class="fas fa-plus"></i> เพิ่มงานใหม่
                                            </button>
                                        </a>
                                    </div>
                                    
                                    <div class="table-snap-works">
                                        <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th class="th-sm">ชื่องาน
                                                    </th>
                                                    <th class="th-sm">ประเภทงาน
                                                    </th>
                                                    <th class="th-sm">ราคา
                                                    </th>
                                                    <th class="th-sm">ระยะเวลา
                                                    </th>
                                                    <th class="th-sm">ที่กำลังจอง
                                                    </th>
                                                    <th class="th-sm">ที่จองไปแล้ว
                                                    </th>
                                                    <th class="th-sm">เสร็จสิ้น
                                                    </th>
                                                    <th class="th-sm">เครื่องมือ
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                  $sql_package = "SELECT * FROM photographer_package p
                                                  INNER JOIN type_job t ON t.id = p.type_id";
                                                    $result_package = mysqli_query($connect, $sql_package);
                                                    while ($row = mysqli_fetch_array($result_package)) {
                                                    echo '
                                                <tr>
                                                    <td>'.$row['package_name'].'</td>
                                                    <td>'.$row['name'].'</td>
                                                    <td>'.$row['price'].'</td>
                                                    <td>'.$row['hour'].' ชม.</td>
                                                    <td>2</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td><button type="button" class="btn btn-danger">ลบ</button><a href="snap_add_work.php"><button type="button" class="btn btn-dark">แก้ไข</button></a></td>
                                                </tr>
                                                    ';
                                                    }                                          
                                                ?>
                                            </tbody>
                                        </table>
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

    <script>
        $(document).ready(function () {
            $().DataTable()
            $('#dtBasicExample').DataTable();
            $('.dataTables_length').addClass('bs-select');
        });
    </script>


</body>
</html>