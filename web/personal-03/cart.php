<?php

session_start();
if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = [];  
}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Your Cart | Guillen</title>
    <?php require_once("headTag.php"); ?>
  </head>

  <body>
    	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
		    <h5 class="my-0 mr-md-auto font-weight-normal">Lightsaber Shop</h5>
	    </div>

	<div class="container">
		<div class="row">
			<h2>Cart</h2>
			<div class="col-lg-12">
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Saber</th>
								<th scope="col">Price</th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
							<?php
							if (!count($_SESSION['cart']) > 0) {
								echo "<tr><td colspan=\"4\">No items in your cart. Click <a href=\"index.php\">here</a> to continue shoping!</td></tr>";
							} else {
								$price = 0.00;
								for ($i=0; $i < count($_SESSION['cart']); $i++) { 
									if ($_SESSION['cart'][$i] == 'normie') {
										$price += 100.00;
										?>
										<tr>
											<th scope="row">Normie Saber</th>
											<td>$ 100.00</td>
											<td><a href="action.php?remove=normie"><span class="btn btn-sm btn-danger">Remove Item</span></a></td>
										</tr>
										<?php
									}
									if ($_SESSION['cart'][$i] == 'padawan') {
										$price += 250.00;
										?>
										<tr>
											<th scope="row">Padawan Saber</th>
											<td>$ 250.00</td>
											<td><a href="action.php?remove=padawan"><span class="btn btn-sm btn-danger">Remove Item</span></a></td>
										</tr>
										<?php
									}
									if ($_SESSION['cart'][$i] == 'master') {
										$price += 499.00;
										?>
										<tr>
											<th scope="row">Master Saber</th>
											<td>$ 499.00</td>
											<td><a href="action.php?remove=master"><span class="btn btn-sm btn-danger">Remove Item</span></a></td>
										</tr>
										<?php
									}
								}
								?>
								<tr>
									<td colspan="3"></td>
									<td scope="col">Subtotal</td>
									<td scope="col">$ <?php echo number_format($price, 2); ?></td>
									<td scope="col"></td>
								</tr>
								<tr>
									<td colspan="3"></td>
									<td scope="col">Taxes (6%)</td>
									<td scope="col">$ <?php echo number_format($price * 0.06, 2); ?></td>
									<td scope="col"></td>
								</tr>
								<tr>
									<th scope="col" colspan="3"></th>
									<th scope="col">Total</th>
									<th scope="col">$ <?php echo number_format($price * 1.06, 2); ?></th>
									<th scope="col"></th>
								</tr>
								<?php
							}
							?>
						</tbody>
					</table>
				</div>
				<br />
				<br />
				<div class="float-right">
					<a class="btn btn-outline-dark" href="index.php">Keep shopping</a>
					<?php if (count($_SESSION['cart']) > 0) { ?>
						<a class="btn btn-success" href="checkout.php">Checkout</a>
					<?php } ?>
				</div>
			</div>
		</div>
    <?php require_once("footer.php"); ?>
  </body>

</html>