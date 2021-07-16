<?php
session_start();
    require_once('db_connect.php');
    // รับค่าเพื่อไปใช้งานเฉยๆ ยังไม่เข้า database
    $username = mysqli_real_escape_string($connect, $_POST['username']);

    $province = mysqli_real_escape_string($connect, $_POST['province']);

    $type_job = $_POST['type_job'];

    $starting_wage = mysqli_real_escape_string($connect, $_POST['starting_wage']);

    $highest_wage = mysqli_real_escape_string($connect, $_POST['highest_wage']);

    $hour = mysqli_real_escape_string($connect, $_POST['hour']);

    $userid = $_SESSION['id'];

    $sql = "INSERT INTO `Photographers`( `username`, `province`, `Starting_wage`, `Highest_wage`,`user_id`,`work_hour`)
             VALUES ('$username','$province','$starting_wage','$highest_wage','$userid','$hour')";

    if(mysqli_query($connect, $sql)) {
        $last_id = $connect->insert_id;

        foreach($type_job as &$value){
            $sql = "INSERT INTO `photographer_type_job`(`id_photographer`, `id_type_job`) 
            VALUES ('$last_id', '$value')";

            echo $sql;
            mysqli_query($connect, $sql);
        }
        
        echo '
            <script>
                alert("สมัตรสมาชิกเรียบร้อย ระบบจะทำการ Logout");
                window.location.href = "./logout.php";
            </script>
        ';
    } else {
        echo $sql;
       echo '
            <script>
                alert("ERROR");
                window.location.href = "../input_photographer.php";
            </script>
        ';
    }
?>