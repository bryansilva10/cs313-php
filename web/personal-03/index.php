<?php

session_start();

if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = [];  
}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Shopping Cart | Guillen</title>
    <?php require_once("headTag.php"); ?>
  </head>

  <body>

  <?php require_once("header.php"); ?>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Get your Lightsaber!</h1> <br>
  <p class="lead">Tired of <strong>NOT</strong> being a Jedi Master? (Or a Sith Lord, we are not judging). Buy a light saber and May the Force be with you! <small><u>Force sold separately</u></small></p>
</div>

<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Normie Saber</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$100</h1>
        <ul class="list-unstyled mt-3 mb-4">
        <img src=""> <!--add image here -->
          <li>3 colors</li>
          <li>Smaller Size</li>
          <li>6 months Tech Support</li>
          <br>
        </ul>
        <!-- ADD SUBMIT HERE -->
        <?php
          if (!in_array("normie", $_SESSION['cart'])) {
        ?>
        <form id="normie" action="action.php" method="post">
          <button type="submit" name="normie" class="btn btn-lg btn-block btn-outline-dark">Add to Cart</button>
        </form>
        <?php
        } else {
        ?>
        <button type="button" class="btn btn-lg btn-block btn-outline-dark" disabled="">Already in Cart</button>
        <?php
        }
        ?>
        <!-- ADD SUBMIT ABOVE -->
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Padawan Saber</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$250</h1>
        <ul class="list-unstyled mt-3 mb-4">
          <img src=""> <!--add image here -->
          <li>6 Colors</li>
          <li>Medium Size</li>
          <li>1 year Tech Support</li>
          <br>
        </ul>
        <!-- ADD SUBMIT HERE -->
        <?php
          if (!in_array("padawan", $_SESSION['cart'])) {
        ?>
        <form id="padawan" action="action.php" method="post">
          <button type="submit" name="padawan" class="btn btn-lg btn-block btn-dark">Add to Cart</button>
        </form>
        <?php
        } else {
        ?>
        <button type="button" class="btn btn-lg btn-block btn-dark" disabled="">Already in Cart</button>
        <?php
        }
        ?>
        <!-- ADD SUBMIT ABOVE -->
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Master Saber</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$499</h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Color changing / Mood</li>
          <li>Real Size</li>
          <li>Life Tech Support</li>
          <li>Force included!</li>
          <br>
        </ul>
        <!-- ADD SUBMIT HERE -->
        <?php
          if (!in_array("master", $_SESSION['cart'])) {
        ?>
        <form id="master" action="action.php" method="post">
          <button type="submit" name="master" class="btn btn-lg btn-block btn-dark">Add to Cart</button>
        </form>
        <?php
        } else {
        ?>
        <button type="button" class="btn btn-lg btn-block btn-outline-dark" disabled="">Already in Cart</button>
        <?php
        }
        ?>
        <!-- ADD SUBMIT ABOVE -->
      </div>
    </div>
  </div>

  <?php require_once("footer.php"); ?>
</div>
</body>
</html>