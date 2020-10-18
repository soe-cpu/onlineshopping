<?php  
include 'include/header.php';
?>

	<div class="container my-5 pd">
		<div class="row">
			<div class="offset-2 col-md-8">
				<h3 class="animate__animated animate__bounce main-color">Checkout list</h3>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Item Name</th>
							<th scope="col">Price</th>
							<th scope="col">Qty</th>
							<th scope="col">Subtotal</th>
						</tr>
					</thead>
					<tbody>

					</tbody>
				</table>
				<div class="form-group">
					<label>Notes</label>
					<textarea class="form-control notes"></textarea>
					<input type="hidden" name="" class="total">
				</div>
				<a href="product.php" class="btn btn-success">Continue Shopping</a>

				<?php  
					if (isset($_SESSION['loginuser'])) {
					
				?>

				<button class="btn btn-warning float-right buy_now">Buy Now</button>
				<?php  }else{
				 echo '<a href="backend/login.php"  class="btn btn-warning float-right">Login to buy</a>';
				}



					?>


			</div>
		</div>
	</div>

	


<?php  

	include 'include/footer.php';

?>