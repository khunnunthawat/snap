<?php
    session_start();
    require_once('db_connect.php');

    $type_job = $_POST['type_job'];
    $name_package = $_POST['name_package'];
    $price = $_POST['price'];
    $hour = $_POST['hour'];
    $detail_job = $_POST['detail_job'];
    $detail = $_POST['detail'];

    $target_dir = "../img/package/";
    $target_file = $target_dir . basename($_FILES["file_image_package"]["name"]);

    $sql_photo = "SELECT * FROM `Photographers` WHERE user_id = '".$_SESSION['id']."' ";
    $reult_photo = mysqli_query($connect, $sql_photo);
    $row_photo = mysqli_fetch_array($reult_photo);

    if(move_uploaded_file($_FILES["file_image_package"]["tmp_name"], $target_file) ){
        $sql = "INSERT INTO `photographer_package`(`photographer_id`, `package_name`, `price`, `hour`, `type_id`, `detail_job`, `detail`, `img_package`) 
        VALUES ('".$row_photo['id']."','$name_package','$price','$hour','$type_job','$detail_job','$detail', '".basename($_FILES["file_image_package"]["name"])."')";

        if(mysqli_query($connect, $sql)) {
            echo '
                <script>
                    alert("เพิ่มแบคเกตเรียบร้อย");
                    window.location.href = "../snap_my_work.php";
                </script>
            ';
        } else {
           echo '
                <script>
                    alert("ERROR");
                    window.location.href = "../snap_add_work.php";
                </script>
            ';
        }

    }
    
?>