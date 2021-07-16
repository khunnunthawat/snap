<?php
session_start();
require_once('db_connect.php');

if(isset($_FILES["pro-image"]))
{
	echo count($_FILES["pro-image"]["name"]);
	$sql = "SELECT * FROM `Photographers` WHERE user_id = '".$_SESSION['id']."'";
	$result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);

	foreach($_FILES['pro-image']['tmp_name'] as $key => $val)
	{
		$file_name = $_FILES['pro-image']['name'][$key];
		$file_size =$_FILES['pro-image']['size'][$key];
		$file_tmp =$_FILES['pro-image']['tmp_name'][$key];
		$file_type=$_FILES['pro-image']['type'][$key];  
		
		if (move_uploaded_file($file_tmp,"../img/photographer_img/".$file_name)) {
			$sql = "INSERT INTO `photographer_image`(`img_name`, `photographer_id`) 
			VALUES ('$file_name', '".$row['id']."')";
			$result = mysqli_query($connect, $sql);
		}
	}

	echo '
            <script>
                alert("เพิ่มรูปเรียบร้อย");
                window.location.href = "../snap_add_photo_all.php";
            </script>
        ';
	

}
?>