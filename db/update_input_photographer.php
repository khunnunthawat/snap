<?php
session_start();
    require_once('db_connect.php');

    $id_pho = $_REQUEST['id_pho'];

    $province = $_POST['province'];

    $type_job = $_POST['type_job'];

    $Starting_wage = $_POST['starting_wage'];

    $Highest_wage = $_POST['highest_wage'];

    $hour = $_POST['hour'];

    $sql = "UPDATE `Photographers` SET `province`='$province',`Starting_wage`='$Starting_wage',`Highest_wage`='$Highest_wage',`work_hour`='$hour'
    WHERE `id`='$id_pho'";
            
            if(mysqli_query($connect, $sql)) {
                $sql_delete = "DELETE FROM `photographer_type_job` WHERE `id_photographer` = '$id_pho'";
                
                if(mysqli_query($connect, $sql_delete)){
                    foreach($type_job as &$value){
                        $sql = "INSERT INTO `photographer_type_job`(`id_photographer`, `id_type_job`) 
                            VALUES ('$id_pho', '$value')";
                
                            echo $sql;
                            mysqli_query($connect, $sql);
                    }

                    echo '
                    <script>
                        alert("แก้ไขข้อมูลเรียบร้อย");
                        window.location.href = "../snap_input.php";
                    </script>
                ';
                }
            }
?>