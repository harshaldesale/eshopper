<?php  
require 'connection.php';
// print_r($_POST);
if (empty($_POST['name'])) {
	echo "Enter name";
}else if (empty($_POST['mobile'])){
	echo "Enter Mobile No";
}else if (strlen($_POST['mobile'])>10){
	echo "Mobile number must be 10 digits";
}else if (strlen($_POST['mobile'])<10){
	echo "Mobile number must be 10 digits";
}
else if (empty($_POST['email'])){
	echo "Enter email";
}
else if (empty($_POST['password'])){
	echo "Enter password";
}
else if (empty($_POST['cpassword'])){
	echo "Enter confirm password";
}
else if ($_POST['cpassword']!=$_POST['password']){
	echo "confirm password not matched!!";
}
else{
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$q="select * from login where email='$email'";
	$rec=mysqli_query($conn,$q) or die(mysqli_error($conn));
	if ($rec->num_rows>0) {
		echo "Given email already exists";
	}else{
	$password=$_POST['password'];
	$str="insert into login (name,mobile,email,password) values ('$name','$mobile','$email','$password')";
	$res=mysqli_query($conn,$str) or die(mysqli_error($conn));
	if ($res) {
		?>
		<div class="alert alert-success">
			User Registration success!!!.
		</div>
		<script type="text/javascript">
			window.location.href="login.php"
		</script>
		<?php
	}
}
}
?>