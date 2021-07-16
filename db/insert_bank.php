<?php
    session_start();
    require_once('db_connect.php');

    $bank_name = mysqli_real_escape_string($connect, $_POST['bank_name']);

    $bank_number = mysqli_real_escape_string($connect, $_POST['bank_number']);

    $target_dir = "../bank/";
    $target_file = $target_dir . basename($_FILES["file_bank"]["name"]);
    $file_bank = basename($_FILES["file_bank"]["name"]);

    if (move_uploaded_file($_FILES["file_bank"]["tmp_name"], $target_file)) {
        $sql_pt = "SELECT * FROM `Photographers` WHERE user_id = '".$_SESSION['id']."'";
        $result_pt = mysqli_query($connect, $sql_pt);
        $row_pt = mysqli_fetch_array($result_pt);

        $sql = "INSERT INTO `photographer_bank`(`bank_name`, `bank_number`, `bank_file`,`photographer_id`) 
        VALUES ('$bank_name', '$bank_number', '$file_bank', '".$row_pt['id']."')";

        if(mysqli_query($connect, $sql)) {
            echo '
                <script>
                    alert("เพิ่มบัญชีเรียบร้อย");
                    window.location.href = "../snap_bank.php";
                </script>
            ';
        } else {
           echo $sql;
           echo '
                <script>
                    alert("ERROR");
                    window.location.href = "../snap_bank.php";
                </script>
                ';
        }
    }

?>