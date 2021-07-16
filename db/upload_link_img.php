<?php
session_start();
require_once('db_connect.php');

$id_reserve = $_REQUEST['id_reserve'];
$link_img = $_POST['link_img'];

$sql = "UPDATE `reserve_package` SET `link_work`='$link_img', `status`='finish'  WHERE `id`='$id_reserve'";

if(mysqli_query($connect, $sql)) {
    echo '
        <script>
            alert("ส่งงานเรียบร้อย");
            window.location.href = "../snap_order.php";
        </script>
    ';
}
?>