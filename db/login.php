<?php
session_start();
    require_once('db_connect.php');

    $email = mysqli_real_escape_string($connect, $_POST['email']);

    $password = mysqli_real_escape_string($connect, $_POST['password']);

    $sql = "SELECT * FROM `user` WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);

    if($row != []) {
        $_SESSION['email'] = $row['email'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['avatar'] = $row['avatar'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['name_surname'] = $row['name_surname'];

        $sql = "SELECT * FROM `admin` WHERE user_id = '".$_SESSION['id']."' ";
        $result = mysqli_query($connect, $sql);
        $num_row = mysqli_num_rows($result);
        if ($num_row > 0) {
            $row_admin = mysqli_fetch_array($result);
            $_SESSION['admin_id'] = $row_admin['id'];
            echo '
            <script>
                window.location.href = "../admin_snap.php";
            </script>
        ';
        } else {
            echo '
            <script>
                window.location.href = "../index.php";
            </script>
        ';
        }


        
    } else {
       echo '
            <script>
                alert("ERROR");
                window.location.href = "../register.php";
            </script>
        ';
    }
?>