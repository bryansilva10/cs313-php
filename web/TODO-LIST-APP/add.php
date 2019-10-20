<?php

require_once('action.php');

$db = get_db();

if(isset($_POST['name'])) {
  $name = trim($_POST['name']); //get rid of whitespace

  if (!empty($name)) { //so we don't add an empty item to database
    $addedQuery = $db->prepare("
      INSERT INTO items (name, id_user, done, created)
      VALUES (:name, :user, 0, NOW())
    ");

    $addedQuery->execute([
      'name' => $name,
      'id_user' => $_SESSION['user_id']
    ]);
  }
}
header('Location: index.php'); //REDIRECT