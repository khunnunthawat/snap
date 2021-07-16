<?php
session_start();
    require_once('db_connect.php');

    $coin = mysqli_real_escape_string($connect, $_POST['coin']);
    $photographer_id = mysqli_real_escape_string($connect, $_POST['photographer_id']);

     $sql = "INSERT INTO `photographer_coin_transaction`(`request_coin`, `photographer_id`, `status`) 
     VALUES ('$coin', '$photographer_id','request')";
             

        if(mysqli_query($connect, $sql)) {
            echo '
                <script>
                    alert("ขอ coin เรียบร้อย");
                    window.location.href = "../snap_coin.php";
                </script>
            ';
        } else {
            echo $sql;
           echo '
                <script>
                    alert("ERROR");
                    window.location.href = "../snap_coin.php";
                </script>
                ';
        }

?>