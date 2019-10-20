<?php

require_once('action.php');

$db = get_db();

if(isset($_GET['as'], $_GET['item'])) {
  $as = $_GET['as'];
  $item = $_GET['item'];

  //swith over "as"
  switch($as) {
    case 'done':
      $doneQuery = $db->prepare("
        UPDATE items
        SET done = 1
        WHERE id = :item
        AND id_user = :user
      ");

      $doneQuery->execute([
        'item' => $item,
        'id_user' => $_SESSION['user_id']
      ]);
    break;
  }
}
header('Location: index.php'); //redirect