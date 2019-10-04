<?php
session_start();
if (!isset($_SESSION['cart'])) {
	$_SESSION['cart'] = [];
}
if (isset($_SESSION['userInfo'])) {
	header('Location: checkout.php');
	exit(0);
} 
?>

<!doctype html>
<html lang="en">
  <head>
    <?php require_once("headTag.php"); ?>
    <title>Checkout | Guillen</title>
  </head>

  <body>
    <?php require_once("header.php"); ?>

  <div class="container">  
  <form id="userInfo" name="userInfo" method="post" action="action.php">
    <div class="row">
    <div class="col">
      <label for="name">Name</label>
      <input name="inputName" id="inputName" type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col">
    <label for="lastname">Last Name</label>
      <input name="inputLastName" id="inputLastName" type="text" class="form-control" placeholder="Last name">
    </div>
  </div>
  <br>
    <div class="form-group">
      <label for="inputAddress">Address</label>
      <input name="inputAddress" id="inputAddress" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="form-group">
      <label for="inputAddress2">Address 2</label>
      <input name="inputAddress2" id="inputAddress2" type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input name="inputCity" id="inputCity" type="text" class="form-control" id="inputCity">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">States we deliver to</label>
        <select name="inputState" id="inputState" class="form-control">
          <option selected>Choose...</option>
          <option value="AZ">Arizona</option>
          <option value="ID">Idaho</option>
          <option value="NV">Nevada</option>
          <option value="UT">Utah</option>
          <option value="WY">Wyoming</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input name="inputZip" type="text" class="form-control" id="inputZip">
      </div>
    </div>
    <button type="submit" class="container btn btn-primary">Complete Sale</button>
  </form>
  <?php require_once("footer.php"); ?>
  </div>
    

  </body>
</html>