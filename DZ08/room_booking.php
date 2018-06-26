<?php

  session_start();

  require "global_stuff.php";

  $connection = mysqli_connect("localhost", "root", "", "met_hotels_igor_rafailovic_2694");

  //get room for user
  $get_room_query = mysqli_query($connection, "SELECT room_number FROM rooms WHERE occupied = 'no' LIMIT 1");
  $get_room_info = mysqli_fetch_array($get_room_query);

  $room_number = $get_room_info["room_number"];

  if(mysqli_num_rows($get_room_query) == 1){    //Something went wrong

    $book_room = mysqli_query($connection, "UPDATE rooms SET occupied = 'yes' WHERE room_number = '$room_number'");

    if($book_room){   //Sorry, there was an error with finding your room. Please try again later
      $username = $_SESSION["username"];

      $assign_room_to_user = mysqli_query($connection, "UPDATE users SET room_number = $room_number WHERE
                                                        username = '$username'");


      if($assign_room_to_user){    //Sorry, there was an error with assigning the room number to you
        redirectToMainPage("Room successfully booked. Your room number is $room_number");


      } else {
        redirectToMainPage("Sorry, there was an error with assigning the room number to you");
      }

    } else {
      redirectToMainPage("Sorry, there was an error with finding your room. Please try again later");
    }

  } else {
    redirectToMainPage("Something went wrong");
  }


?>
