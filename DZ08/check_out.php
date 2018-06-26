<?php

  session_start();

  require "global_stuff.php";

  $username = $_SESSION["username"];
  $room_number = $_SESSION["room_number"];

  $connection = mysqli_connect("localhost", "root", "", "met_hotels_igor_rafailovic_2694");

  $successful_users = mysqli_query($connection, "UPDATE users SET room_number = NULL WHERE username = '$username'");
  $successful_rooms = mysqli_query($connection, "UPDATE rooms SET occupied = 'no' WHERE room_number = $room_number");

  if($successful_users && $successful_rooms){
    redirectToMainPage("Check out successful");

  } else {
    redirectToMainPage("Sorry, there was an error");
  }

?>
