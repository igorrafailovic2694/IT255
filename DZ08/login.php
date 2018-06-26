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

      <h3 id="username"></h3>

      <table>
        <th>
          <form action="room_booking.php" method="post">
            <input id="booking_button" type="submit" value="Book a Room" class="btn btn-primary">
          </form>
        </th>

        <th>
          <form action="check_out.php" method="post">
            <input id="check_out_button" type="submit" value="Check out" class="btn btn-warning">
          </form>
        </th>

        <th>
          <form action="MetHotels.php" method="post">
            <input id="logout_button" type="submit" value="Logout" class="btn btn-danger">
          </form>
        </th>
      </table>

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

  session_start();

  require "global_stuff.php";

  if(isset($_POST["username"]) && $_POST["username"] != "" &&
     isset($_POST["password"]) && $_POST["password"] != ""){  //Username or password is not set

       $username = $_POST["username"];
       $password = $_POST["password"];

       if(ctype_alnum($username) && ctype_alnum($password)){  //Incorrect username or password

         //checks if provided login information is correct
         $e_password = md5($password);

         $connection = mysqli_connect("localhost", "root", "", "met_hotels_igor_rafailovic_2694");

         $login_attempt = "SELECT * FROM users WHERE username='$username' AND password='$e_password'";

         $result = mysqli_query($connection, $login_attempt);

         if(mysqli_num_rows($result) == 1){
           displayMessage("Welcome $username");

           //logged in

          $check_for_booked_rooms = mysqli_query($connection, "SELECT room_number FROM users WHERE username = '$username'");
          $room_number = mysqli_fetch_array($check_for_booked_rooms)["room_number"];

          echo "<script>
                 var username = document.getElementById('username');
                 username.innerHTML = '$username<br> Room number: $room_number';
                </script>";

          $_SESSION["username"] = $username;
          $_SESSION["room_number"] = $room_number;

          if($room_number == ""){
            echo "<script>
                    document.getElementById('booking_button').disabled = false;
                    document.getElementById('check_out_button').disabled = true;
                  </script>";

          } else {
            echo "<script>
                    document.getElementById('booking_button').disabled = true;
                    document.getElementById('check_out_button').disabled = false;
                  </script>";
          }



         } else {
           redirectToMainPage("Incorrect username or password");
         }

       } else {
         redirectToMainPage("Incorrect username or password");
       }

     } else {
       redirectToMainPage("Username or password is not set");
     }

?>
