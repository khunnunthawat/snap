<?php
session_start();
require_once('db_connect.php');

$id_reserve = $_REQUEST['id_reserve'];

$sql = "UPDATE `reserve_package` SET `status`='confirm' WHERE `id`='$id_reserve'";

if(mysqli_query($connect, $sql)) {
    echo '
        <script>
            alert("คอนเฟร์มการจองเรียบร้อย");
            window.location.href = "../snap_order.php";
        </script>
    ';
}
?>