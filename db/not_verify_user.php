<?php
session_start();
require_once('db_connect.php');


$id_user = $_REQUEST['id_user'];

$sql = "UPDATE `Photographers` SET `verify`= 'not' WHERE `user_id`='$id_user'";

if(mysqli_query($connect, $sql)) {
    echo '
        <script>
            alert("ไม่อนุมัติ");
            window.location.href = "../admin_snap.php";
        </script>
    ';
}
?>