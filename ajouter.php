<?php
//tester la session
session_start();
if(!isset($_SESSION['user'])&&!isset($_SESSION['password'])&&empty($_SESSION['user'])&&empty($_SESSION['password'])){
    header('location:index.php');
  }
include "connexion.php";
$users=$_POST['user'];
$dates=$_POST['date'];
$quantity=$_POST['quantity'];
if (isset($_POST['submit']) && isset($_FILES['file'])) {

	echo "<pre>";
	print_r($_FILES['file']);
	echo "</pre>";

	$img_name = $_FILES['file']['name'];
	$img_size = $_FILES['file']['size'];
	$tmp_name = $_FILES['file']['tmp_name'];
	$error = $_FILES['file']['error'];

	if ($error === 0) {
		if ($img_size > 1250000) {
			echo "error";
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'upload/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql = "INSERT INTO products(id,users,dates,quantity,images) 
				        VALUES(NULL,'$users','$dates','$quantity','$new_img_name')";
				$stat = $pdo->prepare($sql);
                $stat->execute();
				header("Location: dashboard.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: create.php");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: create.php");
	}

}else {
	header("Location: create.php");
}