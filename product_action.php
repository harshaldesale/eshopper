<?php 
require 'connection.php'; 
// print_r($_POST);
// print_r($_FILES);
if (empty($_POST['pr_name'])) {
	echo "Enter product name";
}else if(empty($_POST['pr_price'])){
	echo "Enter product price";
}else if (!ctype_digit($_POST['pr_price'])) {
	echo "enter valid price";
}
else if(empty($_POST['old_price'])){
	echo "Enter product old price";
}
else if (!ctype_digit($_POST['old_price'])) {
	echo "enter valid price";
}
else if (!ctype_digit($_POST['br_id'])) {
	echo "Please select brand";
}
else if (!ctype_digit($_POST['cat_id'])) {
	echo "Please select category";
}
else if (empty($_POST['pr_desc'])) {
	echo "Enter product descripation";
}
else if (empty($_FILES['path']['name'])) {
	echo "please select image";
}
else{
	$prname=$_POST['pr_name'];
	$price=$_POST['pr_price'];
	$oldprice=$_POST['old_price'];
	$brid=$_POST['br_id'];
	$catid=$_POST['cat_id'];
	$description=$_POST['pr_desc'];

	$tmp=$_FILES['path']['tmp_name'];
	$name="images/".time().$_FILES['path']['name'];
	$imgpath=$name;
	$re=move_uploaded_file($tmp,$name);
	if ($re) {
		$str="insert into product (name,price,oldprice,brid,catid,description,image) values ('$prname','$price','$oldprice','$brid','$catid','$description','$imgpath')";
		$res=mysqli_query($conn,$str) or die(mysqli_error($conn));
		if ($res) {
		?>
		<div class="alert alert-success">
			product added successfully.
		</div>
		<script type="text/javascript">
 			window.location.href="index.php"
 		</script>
		<?php
		}
	}else{
		echo "error";
	}

}
?>
