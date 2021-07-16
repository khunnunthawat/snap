<?php
session_start();
    require_once('db_connect.php');

    $password = $_POST['password'];

    $sql = "UPDATE `user` SET `password`='$password' WHERE `id`='".$_SESSION['id']."'";
            
            if(mysqli_query($connect, $sql)) {
                $sql_pt = "SELECT * FROM `Photographers` WHERE user_id = '".$_SESSION['id']."'";
                $result = mysqli_query($connect, $sql_pt);
                $num = mysqli_num_rows($result);

                if ($num > 0) {
                    echo '
                    <script>
                        alert("แก้ไข password เรียบร้อย");
                        window.location.href = "../snap_password.php";
                    </script>
                ';
                } else {
                    echo '
                    <script>
                        alert("แก้ไข password เรียบร้อย");
                        window.location.href = "../user_password.php";
                    </script>
                ';
                }
                
            }
?>