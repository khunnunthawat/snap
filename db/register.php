<?php
    require_once('db_connect.php');

    $email = mysqli_real_escape_string($connect, $_POST['email']);

    $password = mysqli_real_escape_string($connect, $_POST['password']);

    $confirm_password = mysqli_real_escape_string($connect, $_POST['confirm_password']);

    if($password != $confirm_password) {
        echo '
            <script>
                alert("password ไม่ตรงกัน!!!");
                window.location.href = "../register.php";
            </script>
        ';
    }

    $sql = "INSERT INTO `user`(`email`, `password`, `created_at`, `updated_at` ,`star` ,`status`) 
            VALUES ('$email', '$password', now(), now(),0,0)";

    if(mysqli_query($connect, $sql)) {
        echo '
            <script>
                alert("สมัตรสมาชิกเรียบร้อย");
                window.location.href = "../login.php";
            </script>
        ';
    } else {
       echo '
            <script>
                alert("ERROR");
                window.location.href = "../register.php";
            </script>
        ';
    }
?>