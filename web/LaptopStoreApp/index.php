<?php
require "database.php";
$db = get_db();

?>

<!DOCTYPE html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laptop Store | Guillen</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
  </head>
    <body id="bodyId">

    <header>
      <div class="container text-center">
        <div class="jumbotron text-jumbo" style="background-color:#007bff">
          <h1>Guillen Laptop Store</h1>
          <h3>We have any kind of brand and storage you wish!</h3>
        </div>
      </div>
    </header>

    <section class="pricing py-5">
      <div class="container">
        <div class="row">

    <?php
          foreach ($db->query('SELECT *
                               FROM LAPTOP_STORAGE
                               JOIN LAPTOP ON LAPTOP_STORAGE.laptop_id = LAPTOP.id
                               JOIN STORAGE ON LAPTOP_STORAGE.storage_id  = STORAGE.id') as $row) 
          {

            echo '
              <div class="col-lg-4">
                <div class="card mb-5 mb-lg-0">
                  <div class="card-body">
                    <img src="img/' . ucfirst($row['img']) . '" class="card-img-top" alt="...">
                    <h6 class="card-price text-center">$' . ucfirst($row['price']) . '</h6>
                    <hr>
                    <ul class="fa-ul">
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Laptop Model: <strong>' . ucfirst($row['name_laptop']) . '</strong></li>
                      <li><span class="fa-li"><i class="fas fa-check"></i></span>Capacity: <strong>' . ucfirst($row['capacity']) . '</strong></li>
                    </ul>
                    <input type="hidden" value="'. $row['id'] .'">
                    <a href="#request"><button type="submit" class="btn btn-block btn-primary text-uppercase">Request more info</button></a>
                  </div>
                </div>
                <br>
              </div>
            ';
          }
    ?>

        </div>
      </div>
    </section>

    <div id="request" class="container carousel slide text-center" data-ride="carousel">
      <div class="jumbotron text-jumbo carousel-inner" style="background-color:#007bff">
        <div class="carousel-item active" data-interval="6000">
          <h3>Put your contact information in the form below</h3>
          <h4>We will contact you as soon as possible!</h4>
        </div>
        <div class="carousel-item" data-interval="6000">
          <h3>Didn't like any of our Preset options?</h3>
          <h4>Select your desired specs below and we will contact you when we have it!</h4>
        </div>
      </div> 
    </div>
    
    <div class="container">
      <form method="POST" action='insert.php'>
        <div class="form-group">
          <label for="exampleFormControlInput1">Name</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="Mirio Togata...">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput2">Email address</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Laptop Brand</label>
          <select class="form-control" name="brand" id="brand">
            <option>Acer</option>
            <option>Apple</option>
            <option>Dell</option>
            <option>HP</option>
            <option>Lenovo</option>
            <option>Toshiba</option>    
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Laptop Storage</label>
          <select class="form-control" name="storage" id="storage">
            <option>64GB</option>
            <option>128GB</option>
            <option>256GB</option>
            <option>512GB</option>
            <option>1TB</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Any special Requests? (We'll do what we can!)</label>
          <textarea class="form-control" name="request" id="request" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
      </form>
    </div>




    <!-- Footer -->
    <footer class="footer mt-auto py-3 bg-blue">

      <!-- Copyright -->
      <div class="container text-center" style="color: white">© 2019 Copyright
        <a href="https://github.com/bryansilva10">Check my Github!</a>
      </div>
      <!-- Copyright -->

    </footer>
      <!-- Footer -->

        <script src=""></script>
    </body>
</html>