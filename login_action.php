<?php 
require 'connection.php'; 
// print_r($_POST);
if (empty($_POST['log_email'])) {
	echo "Enter email";
}else if(empty($_POST['log_password'])){
	echo "Enter password";
}else{
	$email=$_POST['log_email'];
	$password=$_POST['log_password'];
	$str="select * from login where email='$email'";
	$res=mysqli_query($conn,$str) or die(mysqli_error($conn));
	if ($res->num_rows==0) {
		echo "Enter valid email";
	}else{
		$ans=mysqli_fetch_assoc($res);
		$dbpass=$ans['password'];
		if ($dbpass==$password) {
			$_SESSION['id']=$ans['id'];
			$_SESSION['name']=$ans['name'];
			$_SESSION['mobile']=$ans['mobile'];
			$_SESSION['email']=$ans['email'];
			$_SESSION['password']=$ans['password'];		
			echo "ok";

		}else{
			echo "Invalid password";
		}
	}
}
?>