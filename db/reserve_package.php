<?php
session_start();
    require_once('db_connect.php');

    $location = mysqli_real_escape_string($connect, $_POST['location']);

    $time_meet = mysqli_real_escape_string($connect, $_POST['time_meet']);

    $time_end = mysqli_real_escape_string($connect, $_POST['time_end']);

    $detail_work = mysqli_real_escape_string($connect, $_POST['detail_work']);

    $photographer_id = mysqli_real_escape_string($connect, $_POST['photographer_id']);

    $hour = mysqli_real_escape_string($connect, $_POST['hour']);

    $id_package = $_REQUEST['package_id'];


    if (!isset($_FILES["file_tax"])) {
         $sql = "INSERT INTO `reserve_package`(`id_package`, `photographer_id`, `customer_id`, `work_date`, `time_start`, `time_end`, 
        `reserve_date`, `time_reserve`, `status`, `scopeworks`, `location`) 
        VALUES ('$id_package', '$photographer_id', '".$_SESSION['id']."',  '".$_SESSION['date']."'
        , '$time_meet', '$time_end', now(), '$hour', 'reserve', '$detail_work', '$location')";
        
        echo $sql;
        if(mysqli_query($connect, $sql)) {
            echo '
                <script>
                    alert("จองเรียบร้อย");
                    window.location.href = "../index.php";
                </script>
            ';
        }
    }
    else {
        $target_dir =  '../uploads_tax/';
        $target_file = $target_dir . basename($_FILES["file_tax"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $image_file = basename($_FILES["file_tax"]["name"]);

        if (move_uploaded_file($_FILES["file_tax"]["tmp_name"], $target_file)) {

            $sql = "INSERT INTO `reserve_package`(`id_package`, `photographer_id`, `customer_id`, `work_date`, `time_start`, `time_end`, 
        `reserve_date`, `time_reserve`, `status`, `scopeworks`, `location`, `file_tax`) 
        VALUES ('$id_package', '$photographer_id', '".$_SESSION['id']."',  '".$_SESSION['date']."'
        , '$time_meet', '$time_end', now(), '$hour', 'reserve', '$detail_work', '$location', '".basename($_FILES["file_tax"]["name"])."')";
        
        echo $sql;
        if(mysqli_query($connect, $sql)) {
            echo '
                <script>
                    alert("จองเรียบร้อย");
                    window.location.href = "../index.php";
                </script>
            ';
        }
        else {
        echo '
                <script>
                    alert("จองไม่เรียบร้อย");
                    window.location.href = "../index.php";
                </script>
            ';
    }

        }
        
    } 
?>