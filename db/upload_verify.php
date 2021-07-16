<?php
session_start();
    require_once('db_connect.php');

    $target_dir = "../verify/";
    $target_file1 = $target_dir . basename($_FILES["photo_1"]["name"]);
    $target_file2 = $target_dir . basename($_FILES["photo_2"]["name"]);
    $target_file3 = $target_dir . basename($_FILES["photo_3"]["name"]);
    $image_file1 = basename($_FILES["photo_1"]["name"]);
    $image_file2 = basename($_FILES["photo_2"]["name"]);
    $image_file3 = basename($_FILES["photo_3"]["name"]);

    if (move_uploaded_file($_FILES["photo_1"]["tmp_name"], $target_file1) 
        && move_uploaded_file($_FILES["photo_2"]["tmp_name"], $target_file2)
        && move_uploaded_file($_FILES["photo_3"]["tmp_name"], $target_file3)) {
        $sql = "INSERT INTO `verify_upload`(`photo_card`, `copy_card`, `slip_snap`, `id_user`) 
        VALUES ('$image_file1','$image_file2','$image_file3', '".$_SESSION['id']."')";
        
        if(mysqli_query($connect, $sql)) {
            echo '
                <script>
                    alert("บันทึกข้อมูลเรียบร้อย");
                    window.location.href = "../snap_info.php";
                </script>
            ';
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
?>