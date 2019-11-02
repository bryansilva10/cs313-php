<?php
require("database.php");
$db = get_db();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Check Out</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body id="confirmation-body">

    <section class="pricing py-5">
    <div class="container">
        <?php
            foreach ($db->query('SELECT * FROM wishList ORDER BY id DESC LIMIT 1') as $row) 
            {

                echo '
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                            <h6 class="card-price text-center">Your Message has been sent!</h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Name: <strong>' . ucfirst($row['buyer_name']) . '</strong></li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Email: <strong>' . $row['email_address'] . '</strong></li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Brand: <strong>' . ucfirst($row['laptop_brand']) . '</strong></li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Storage: <strong>' . ucfirst($row['laptop_storage']) . '</strong></li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Notes: $ <strong>' . ucfirst($row['request']) . '</strong></li>                     
                            </ul>
                            <hr>
                            <h6 class="text-center">We will contact you soon!</h6>
                        </div>
                    </div>';
            }
        ?>
    </div>
    <!-- Footer -->
    <footer class="footer mt-auto py-3 bg-blue">

      <!-- Copyright -->
      <div class="container text-center" style="color: white">© 2019 Copyright
        <a href="https://github.com/bryansilva10"> Check my Github!</a>
      </div>
      <!-- Copyright -->

    </footer>
      <!-- Footer -->
</section>


</body>
</html>