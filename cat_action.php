<?php  
require 'connection.php';
// print_r($_POST);
if (empty($_POST['cat_name'])) {
	echo "Enter category name";
}else {
	// echo "ok";
	$name=strtoupper($_POST['cat_name']);
	$str="insert into category (name) values ('$name')";
	$res=mysqli_query($conn,$str) or die(mysqli_error($conn));
	if ($res) {
		?>
		<div class="alert alert-success">
			category added successful.
 		</div>
 		<script type="text/javascript">
 			window.location.href="index.php"
 		</script>
		<?php  
	}
}
?>