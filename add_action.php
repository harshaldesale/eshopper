<?php  
require 'connection.php';
// print_r($_POST);
if (empty($_POST['br_name'])) {
	echo "Enter Brand name";
}else {
	// echo "ok";
	$name=strtoupper($_POST['br_name']);
	$str="insert into brand (name) values ('$name')";
	$res=mysqli_query($conn,$str) or die(mysqli_error($conn));
	if ($res) {
		?>
		<div class="alert alert-success">
			brand added successfull.
 		</div>
 		 <script type="text/javascript">
 			window.location.href="index.php"
 		</script>
		<?php  
	}
}
?>