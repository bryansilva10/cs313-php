<?php

require_once 'action.php';

$itemsQuery = $db->prepare("
  SELECT id, name, completed
  FROM items
  WHERE user = :user 

"); //:user is placeholder to prevent sql injection

//execute query
$itemsQuery->execute([
  'user' => $_SESSION['user_id'] //pass the user id of the session
]);


//check if there is a sufficiente num of rows on ITEMS, else, set it to empty
$items = $itemsQuery->rowCount() ? $itemsQuery : [];

foreach($items as $item) {
  echo $item['name'], '<br>';
}
?>


<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>To Do App | Guillen</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="heading">
            <h2 style="font-style: 'Helvetica';">ToDo List App</h2>
        </div>
        
        <div class="list">

          <h1 class"list-header">Your list</h1>

          <?php if(!empty($items)): //if there is something, display it?>

          <ul class="items">
            <?php foreach($items as $item): //loop and display each item by templating?>
              <li>
                <span class="item<?php echo $item['done'] ? ' done' : '' ?>"><?php echo $item['name']; ?></span>
                <?php if(!$item['done']) : ?>
                  <a href="mark.php?as=done&item=<?php echo $item['id']; ?>" class="done-button">Mark as Done</a>
                <?php endif; ?>
              </li>
            <?php endforeach; //end statement?>
          </ul>

          <?php else: //if there is nothing, display this..?>
            <p>You haven't added any tasks yet...</p>
          <?php endif; //end the statement?>

          <form class="item-add" action="add.php" method="post">
            <input type="text" name="itemName" placeholder="Type a new item here..." class="input" autocomplete="off" required>
            <input type="submit" value="Add" class="submit">
          </form>
        </div>
        
    </body>
</html>