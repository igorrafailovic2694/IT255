<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>Met Hotels</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">

  </head>

  <body>

    <div class="container">

      <h1 id="main_header" align="center">Welcome to Met Hotels</h1>

      <div id="hotel_info" class="jumbotron">
        <span>
          Met Hotels was founded in 1983 by a dude named Chad<br>
          If you don't know who that is, too bad, because neither do we<hr>

          Met Hotels is actually just one hotel despite the name, it just sounds<br>
          cooler when it is said in plural<br><br>

          This hotel holds 400 rooms, each containing 4 beds so it's able<br>
          to hold 1600 people<br>

          <img src="wow.jpg" alt="Owen Wilson Wow" width="400" height="300"> <br>

          You can book your room below, TODAY!
        </span>
      </div>

      <form id="booking_form" action="MetHotels.php" method="post">
        <span>
          <input type="text" name="first_name" placeholder="First name" class="form-control">
          <input type="text" name="last_name" placeholder="Last name" class="form-control">
          <input type="email" name="email" placeholder="Email" class="form-control">

          <input type="submit" value="Book a room" class="btn btn-primary" class="form-control">
        </span>
      </form>

    </div>


    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>

</html>

<?php

  if(isset($_POST["first_name"]) && isset($_POST["last_name"]) && isset($_POST["email"])){
    if(ctype_alnum($_POST["first_name"]) && ctype_alnum($_POST["last_name"])){
      $first_name = $_POST["first_name"];
      $last_name = $_POST["last_name"];
      $email = $_POST["email"];

      echo "
        <div class='alert alert-success alert-dismissible fade show'>
          Booked! $first_name $last_name $email <a class='close' data-dismiss='alert'>&times</a>
        </div>
      ";
    }
  }



?>
