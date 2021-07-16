<?php
session_start();
    require_once('db_connect.php');

    $name_surname = mysqli_real_escape_string($connect, $_POST['name_surname']);

    $id_passport_number = mysqli_real_escape_string($connect, $_POST['id_passport_number']);

    $birthday = mysqli_real_escape_string($connect, $_POST['birthday']);

    $tel = mysqli_real_escape_string($connect, $_POST['tel']);

    $target_dir = "../img/";
    $target_file = $target_dir . basename($_FILES["file-input"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $image_file = basename($_FILES["file-input"]["name"]);
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"]) && $image_file != '') {
        $check = getimagesize($_FILES["file-input"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    // if (file_exists($target_file) && $image_file != '') {
    //     echo "Sorry, file already exists.";
    //     $uploadOk = 0;
    // }
    // Check file size
    // if ($_FILES["file-input"]["size"] > 5000000 && $image_file != '') {
    //     echo "Sorry, your file is too large.";
    //     $uploadOk = 0;
    // }
    // Allow certain file formats
    if(($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") && $image_file != '') {
        echo "Sorry, only JPG, JPEG, PNG files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if ($image_file == '') {
            $sql = "UPDATE `user` 
            SET `name_surname`='$name_surname',`id_passport_number`='$id_passport_number',
            `birthday`='$birthday',`phone`='$tel',`updated_at`= now()
            WHERE `id`='".$_SESSION['id']."'";
            
            if(mysqli_query($connect, $sql)) {
                echo '
                    <script>
                        alert("บันทึกข้อมูลเรียบร้อย");
                        window.location.href = "../user_info.php";
                    </script>
                ';
            }
        }
        if (move_uploaded_file($_FILES["file-input"]["tmp_name"], $target_file)) {
            $sql = "UPDATE `user` 
            SET `avatar`='".basename($_FILES["file-input"]["name"])."',`name_surname`='$name_surname',`id_passport_number`='$id_passport_number',
            `birthday`='$birthday',`phone`='$tel',`updated_at`= now()
            WHERE `id`='".$_SESSION['id']."'";
            
            if(mysqli_query($connect, $sql)) {
                echo '
                    <script>
                        alert("บันทึกข้อมูลเรียบร้อย");
                        window.location.href = "../user_info.php";
                    </script>
                ';
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
?>