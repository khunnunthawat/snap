<?php
session_start();
    require_once('db_connect.php');

    $id = $_REQUEST['id'];
    $sql = "UPDATE `photographer_coin_transaction` SET `status`='success' WHERE `id` = '$id'";
            
            if(mysqli_query($connect, $sql)) {
                echo '
                    <script>
                        alert("ยืนยันเรียบร้อย");
                        window.location.href = "../admin_snap.php";
                    </script>
                ';
            }
?>