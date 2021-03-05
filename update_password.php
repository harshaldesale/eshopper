<?php  
	session_start();
	if (!isset($_SESSION['email'])) {
	header('location:login.php');
	}
	?>
<?php  
include ("header.php");
?>
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>update your password</h2>
						<form id="update_form">
							<input type="password" name="password" placeholder="Enter password" />
							<input type="password" name="cpassword" placeholder="Enter confirm password" />
							<input type="password" name="cnpassword" placeholder="Enter confirm new password" />
							<button type="button" class="btn btn-default btn-update">update</button>
						</form>
						<div class="update_msg"></div>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
<?php  
include ("footer.php");
?>