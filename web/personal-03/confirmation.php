<?php

session_start();
if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = [];  
}

?>

<!doctype html>
<html lang="en">
  <head>
    <?php require_once("headTag.php"); ?>
    <title>Purchase Completed</title>
  </head>

  <body>
  <?php require_once("header.php"); ?>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2><u>Please Review your Order</u></h2>
        <br>
        <br>
        <br>
			</div>

				<div class="col-sm border-right">
					<h4>Order</h4>
					<?php 
					$total = 0;
					for ($i=0; $i < count($_SESSION['cart']); $i++) { 
						if ($_SESSION['cart'][$i] == 'normie') {
							$price = 100.00;
							$total += $price;
						}
						if ($_SESSION['cart'][$i] == 'padawan') {
							$price = 250.00;
							$total += $price;
						}
						if ($_SESSION['cart'][$i] == 'master') {
							$price = 499.00;
							$total += $price;
						}
						?>
						<div class="col-sm border-bottom">
							<ul class="list-unstyled mt-3 mb-4">
								<li><small class="text-muted">Price $</small><?php echo number_format($price, 2); ?></li>
							</ul>
						</div>
					<?php } ?>
					<span class="float-right"><small class="text-muted">Total (price + taxes) $</small><?php echo number_format($total * 1.06, 2); ?></span>
					
				</div>
				<div class="col-sm">
					<h4>Address</h4>
					<div class="col-sm">
						<ul class="list-unstyled mt-3 mb-4">
							<li><small class="text-muted">Name: </small><small><?php echo $_SESSION['userInfo']['inputName']; ?></small></li>
							<li><small class="text-muted">Last Name: </small><small><?php echo $_SESSION['userInfo']['inputLastName']; ?></small></li>
							<li><small class="text-muted">Address: </small><small><?php echo $_SESSION['userInfo']['inputAddress']; ?></small></li>
							<?php
							if (isset($_SESSION['userInfo']['inputAddress2'])) { ?>
								<li><small class="text-muted">Address 2: </small><small><?php echo $_SESSION['userInfo']['inputAddress2']; ?></small></li>
							<?php } ?>
							<li><small class="text-muted">City: </small><small><?php echo $_SESSION['userInfo']['inputCity']; ?></small></li>
							<li><small class="text-muted">State: </small><small><?php echo $_SESSION['userInfo']['inputState']; ?></small></li>
							<li><small class="text-muted">Zip: </small><small><?php echo $_SESSION['userInfo']['inputZip']; ?></small></li>
						</ul>

					</div>
          
				</div>
          
		</div>
    <h3> Thanks for your business! </h3>
      <?php require_once("footer.php"); ?>
    </body>