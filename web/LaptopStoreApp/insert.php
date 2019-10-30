<?php
require("database.php");
$db = get_db();
// get the data from the POST
$name = $_POST['name'];
$email = $_POST['email'];
$brand = $_POST['brand'];
$storage = $_POST['storage'];
$request = $_POST['request'];

try
{
   $query = 'INSERT INTO wishList(buyer_name, email_address, laptop_brand, laptop_storage, request) VALUES(:buyer_name, :email_address, :laptop_brand, :laptop_storage, :request)';
   $statement = $db->prepare($query);
   $statement->bindValue(':name', $name);
   $statement->bindValue(':email', $email);
   $statement->bindValue(':model', $brand);
   $statement->bindValue(':color', $storage);
   $statement->bindValue(':price', $request);
   $statement->execute();

	// Now we bind the values to the placeholders. This does some nice things
	// including sanitizing the input with regard to sql commands.
}
catch (Exception $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error with DB. Details: $ex";
	die();
}

// finally, redirect them to a new page to actually show the topics
header("Location: confirmation.php");
die(); // we always include a die after redirects. In this case, there would be no
       // harm if the user got the rest of the page, because there is nothing else
       // but in general, there could be things after here that we don't want them
       // to see.
?>