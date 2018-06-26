<?php

  function redirectToMainPage($message){
    sessionEnd();

    echo "<script>
          alert('$message');
          location = 'MetHotels.php';
          </script>";  //displays the error message and redirects the users to the main page
    exit();    //kills the program
}

  function sessionEnd(){
    session_unset();
    session_destroy();
    echo "Ended";
  }

  function displayMessage($message){
    echo "<script> alert('$message'); </script>";
  }

?>
