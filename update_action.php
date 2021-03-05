<?php
require_once 'connection.php';
$pass=$_SESSION['password']; 
print_r($_POST);
if (empty($_POST['password'])) {
	echo "Enter password";
}else if ($pass!=$_POST['password']) {
	echo "Enter Correct password";
}else if (empty($_POST['cpassword'])) {
	echo "Enter confirm password";
}else if ($_POST['password']==$_POST['cpassword']) {
	echo "Enter different password";
}else if(empty($_POST['cnpassword'])){
	echo "Enter confirm new password";
}
else if ($_POST['cpassword']!=$_POST['cnpassword']) {
	echo "Enter confirm new password as same confirm password";
}
else {
	$cpassword=$_POST['cpassword'];
	$id=$_SESSION['id'];
	$str="update login set password='$cpassword' where id='$id'";
	$res=mysqli_query($conn,$str) or die(mysqli_error($conn));
	if ($res) {
		?>
		<div class="alert alert-success">
			password update successfully.
		</div>
		<script type="text/javascript">
			window.location.href="index.php"
		</script>
		<?php
	}
}
?>