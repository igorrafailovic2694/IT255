<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>Met Hotels</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="main_css.css">

  </head>

  <body>

    <div class="container">

      <h1 id="main_header" align="center">Welcome to Met Hotels</h1>

      <input type="button" value="Register" class="btn btn-primary" data-toggle="modal" data-target="#register_modal">
      <input type="button" value="Login" class="btn btn-success" data-toggle="modal" data-target="#login_modal">

      <!-- register_modal -->
      <div id="register_modal" class="modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">

              <h3 class="modal-title text-primary">Registration</h3
              <button type="button" class="close" data-dismiss="modal">&times</button>

            </div> <!-- modal-header -->

            <form id="registration_form" action="register.php" method="post">
              <input type="text" name="username" placeholder="Username" class="form-control">
              <input type="password" name="password" placeholder="Password" class="form-control">
              <input type="password" name="confirm_password" placeholder="Confirm Password" class="form-control">
              <input type="email" name="email" placeholder="Email" class="form-control">
              <input type="text" name="first_name" placeholder="First Name" class="form-control">
              <input type="text" name="last_name" placeholder="Last Name" class="form-control">

              <input type="submit" value="Register" class="btn btn-primary form-control">
            </form>
          </div>  <!-- modal-dialog -->
        </div>  <!-- modal-content -->
      </div> <!-- register_modal -->

      <!-- login_modal -->
      <div id="login_modal" class="modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">

              <h3 class="modal-title text-success">Login</h3>
              <button type="button" class="close" data-dismiss="modal">&times</button>


            </div> <!-- modal-header -->

            <form id="login_form" action="login.php" method="post">
              <input type="text" name="username" placeholder="Username" class="form-control">
              <input type="password" name="password" placeholder="Password" class="form-control">

              <input type="submit" value="Login" class="btn btn-success form-control">
            </form>


          </div>  <!-- modal-dialog -->

        </div>  <!-- modal-content -->
      </div> <!-- login_modal -->

      <hr>

      <div id="hotel_info" class="jumbotron">
        <span>
          Met Hotels was founded in 1983 by a dude named Chad<br>
          If you don't know who that is, too bad, because neither do we<hr>

          Met Hotels is actually just one hotel despite the name, it just sounds<br>
          cooler when it is said in plural<br><br>

          This hotel holds 4 floors, each containing 400 rooms so it's able<br>
          to hold 1600 people<br>

          <img src="wow.jpg" alt="Owen Wilson Wow" width="400" height="300"> <br>

          You can book your room, TODAY! <br>
          Buuuuut first you have to log in <br>
        </span>
      </div>

    </div>


    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>

</html>

<?php



?>
