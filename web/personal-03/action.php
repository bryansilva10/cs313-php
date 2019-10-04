<?php
session_start();

#To Add Items
if (isset($_POST['normie']) || isset($_POST['padawan']) || isset($_POST['master'])) {
	if (isset($_POST['normie'])) {
		array_push($_SESSION['cart'], "normie");
	}
	if (isset($_POST['padawan'])) {
		array_push($_SESSION['cart'], "padawan");
	}
	if (isset($_POST['master'])) {
		array_push($_SESSION['cart'], "master");
	}
  #redirecting to the cart
	header('Location: index.php');
	exit(0);
}

#To Remove Items
if (isset($_GET['remove'])) {
	$cart = $_SESSION['cart'];
	
	if ($_GET['remove'] == 'normie') {
		$key = array_search("normie", $cart); //returns boolean
		if($key!==false)
			array_splice($cart, $key, 1);
	}
	if ($_GET['remove'] == 'padawan') {
		$key = array_search("padawan", $cart);
		if($key!==false)
			array_splice($cart, $key, 1);
	}
	if ($_GET['remove'] == 'master') {
		$key = array_search("master", $cart);
		if($key!==false)
			array_splice($cart, $key, 1);
	}
	$_SESSION['cart'] = $cart;
	header('Location: cart.php');
	exit(0);
}

#Set everything from the user information to SESSION 
if (isset($_POST['inputName']) ||
	isset($_POST['inputLastName']) ||
	isset($_POST['inputAddress']) ||
	isset($_POST['inputAddress2']) ||
	isset($_POST['inputCity']) ||
	isset($_POST['inputState']) ||
	isset($_POST['inputZip'])) {
	
	if (isset($_POST['inputName'])) {
		$_SESSION['userInfo']['inputName'] = filter_input(INPUT_POST, 'inputName');
	}
	if (isset($_POST['inputEmail'])) {
		$_SESSION['userInfo']['inputEmail'] = filter_input(INPUT_POST, 'inputLastName');
	}
	if (isset($_POST['inputAddress'])) {
		$_SESSION['userInfo']['inputAddress'] = filter_input(INPUT_POST, 'inputAddress');
	}
	if (isset($_POST['inputAddress2'])) {
		$_SESSION['userInfo']['inputAddress2'] = filter_input(INPUT_POST, 'inputAddress2');
	}
	if (isset($_POST['inputCity'])) {
		$_SESSION['userInfo']['inputCity'] = filter_input(INPUT_POST, 'inputCity');
	}
	if (isset($_POST['inputState'])) {
		$_SESSION['userInfo']['inputState'] = filter_input(INPUT_POST, 'inputState');
	}
	if (isset($_POST['inputZip'])) {
		$_SESSION['userInfo']['inputZip'] = filter_input(INPUT_POST, 'inputZip');
	}
	header('Location: confirmation.php');
	exit(0);
}
var_dump($_SESSION);
var_dump($_POST);
var_dump($_GET);