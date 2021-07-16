<?php
    session_start();
    require_once('db_connect.php');

    $id_reserve = $_REQUEST['id_reserve'];

    $target_dir =  '../slip/';
    $target_file = $target_dir . basename($_FILES["file-upload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $image_file = basename($_FILES["file-upload"]["name"]);

    if (move_uploaded_file($_FILES["file-upload"]["tmp_name"], $target_file)) {
        $sql = "UPDATE `reserve_package` SET `status`='working', `slip_payment`='".basename($_FILES["file-upload"]["name"])."' WHERE `id`='".$id_reserve."'";
        
        echo $sql;
        if(mysqli_query($connect, $sql)) {
            $sql_pt = "SELECT * FROM `Photographers` WHERE user_id = '".$_SESSION['id']."'";
                $result = mysqli_query($connect, $sql_pt);
                $num = mysqli_num_rows($result);

                if ($num > 0) {
                    echo '
                    <script>
                        alert("ชำระเงินเรียบร้อบ");
                        window.location.href = "../snap_user_order.php";
                    </script>
                ';
                } else {
                    echo '
                    <script>
                        alert("ชำระเงินเรียบร้อบ");
                        window.location.href = "../user_order.php";
                    </script>
                ';
                }
        }
    } else {
        echo '
                <script>
                    alert("จองไม่เรียบร้อย");
                    window.location.href = "../user_payment_input.php";
                </script>
            ';
    }
?>