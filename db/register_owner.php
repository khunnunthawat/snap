<?php
session_start();
    require_once('db_connect.php');

    $status = $_SESSION['status'];

    // รับค่าเพื่อไปใช้งานเฉยๆ ยังไม่เข้า database
    $username = mysqli_real_escape_string($connect, $_POST['company']);

    $username = mysqli_real_escape_string($connect, $_POST['address']);
    
    $username = mysqli_real_escape_string($connect, $_POST['phone-number']);

    $username = mysqli_real_escape_string($connect, $_POST['tax-id']);

    $username = mysqli_real_escape_string($connect, $_POST['business-type']);
    
    $username = mysqli_real_escape_string($connect, $_POST['company-website']);

    $username = mysqli_real_escape_string($connect, $_POST['tax-invoice']);

    $upSQL = "UPDATE `user` SET `status`= '$status' WHERE `id` = '$userid' ";
    $upQRY = mysqli_query($connect,$upSQL);
    
    $sql = "INSERT INTO `Photographers`( `username`, `province`, `Job_type`, `Starting_wage`, `Highest_wage`,`user_id`)
             VALUES ('$username','$province','".implode(",", $type_job)."','$starting_wage','$highest_wage','$userid')";
             



    // if(mysqli_query($connect, $sql)) {
    //     echo '
    //         <script>
    //             alert("สมัตรสมาชิกเรียบร้อย");
    //             window.location.href = "../index.php";
    //         </script>
    //     ';
    // } else {
    //     echo $sql;
    //    echo '
    //         <script>
    //             alert("ERROR");
    //             window.location.href = "../input_photographer.php";
    //         </script>
    // //     ';
    // }
?>