<?php  
	session_start();
	if (!isset($_SESSION['email'])) {
	header('location:login.php');
	}
	?>
<?php
require 'connection.php';  
require 'header.php';
?>
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Add product</h2>
						<form id="product_form">
							<input type="text" name="pr_name" placeholder="Enter Name" />
							<input type="text" name="pr_price" placeholder="Enter price">
							<input type="text" name="old_price" placeholder="Enter old price">
							<select name="br_id">
								<option>select any one brand</option>
								<?php 
								$str="select * from brand";
								$res=mysqli_query($conn,$str) or die(mysqli_error($conn));
								if ($res->num_rows>0):
									while ($ans=mysqli_fetch_array($res)):
								 ?>
								<option value="<?php echo $ans['id']; ?>"><?php echo $ans['name']; ?></option>
								<?php  
							endwhile;
						endif;
								?>
							</select>
							<br><br>
							<select name="cat_id">
								<option>select any one category</option>
								<?php 
								$str="select * from category";
								$res=mysqli_query($conn,$str) or die(mysqli_error($conn));
								if ($res->num_rows>0):
									while ($ans=mysqli_fetch_array($res)):
								 ?>
								<option value="<?php echo $ans['id']; ?>"><?php echo $ans['name']; ?></option>
								<?php  
							endwhile;
						endif;
								?>
							</select>
							<br><br>
							<label>product description:</label>
							<textarea name="pr_desc" placeholder="Enter description"></textarea>
							<label>upload image:</label>
							<input type="file" name="path">
							<button type="button" class="btn btn-default btn-add">add</button>
						</form>
						<br>
						<div class="product_msg"></div>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
<?php  
require 'footer.php'
?>