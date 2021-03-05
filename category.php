<?php  
	session_start();
	if (!isset($_SESSION['email'])) {
	header('location:login.php');
	}
	?>
<?php  
   require 'header.php';
?>
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Add category</h2>
						<form id="cat_form">
							<input type="text" name="cat_name" placeholder="Enter category name"/>
							<button type="button" class="btn btn-default btn btn-add">add</button>
						</form>
						<br>
						<div class="cat_msg"></div>
					</div><!--/login form-->
				</div>
		</div>
	</section><!--/form-->

<?php  
   require 'footer.php';
?>