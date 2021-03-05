<?php  
require 'connection.php';
?>
<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<?php  
							$str="select * from category";
							$res=mysqli_query($conn,$str) or die(mysqli_error($conn));
							if ($res->num_rows>0):
								while ($ans=mysqli_fetch_array($res)):
							?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php echo $ans['id']; ?>"><?php echo $ans['name']; ?></a></h4>
								</div>
							</div>
							<?php  
						endwhile;
					endif;
							?>
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<?php  
							$str="select * from brand";
							$res=mysqli_query($conn,$str) or die(mysqli_error($conn));
							if ($res->num_rows>0):
								while ($ans=mysqli_fetch_array($res)):
							?>
								<ul class="nav nav-pills nav-stacked">
									<li><a href="<?php echo $ans['id']; ?>"> <span class="pull-right">(50)</span><?php echo $ans['name']; ?></a></li>
								</ul>
								<?php  
						endwhile;
					endif;
							?>

							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>