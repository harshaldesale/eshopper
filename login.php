<?php  
require 'header.php';
?>
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form id="login_form">
							<input type="text" name="log_email" placeholder="Enter email"/>
							<input type="text" name="log_password" placeholder="Enter password" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="button" class="btn btn-default btn-login">Login</button>
						</form>
						<br>
						<div class="login_msg"></div>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form id="register_form">
							<input type="text" name="name" placeholder="Enter Name"/>
							<input type="text" name="mobile" placeholder="Enter Mobile"/>
							<input type="text" name="email" placeholder="Enter Email"/>
							<input type="password" name="password" placeholder="Enter Password"/>
							<input type="password" name="cpassword" placeholder="Enter Confirm Password"/>
							<button type="button" class="btn btn-default btn btn-register">Signup</button>
						</form>
						<br>
						<div class="register_msg"></div>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
<?php  
require 'footer.php';
?>