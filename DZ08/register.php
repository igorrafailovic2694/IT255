<?php

  if(isset($_POST["username"]) && $_POST["username"] != "" &&   //check if all fields are set and not empty
     isset($_POST["password"]) && $_POST["password"] != "" &&
     isset($_POST["confirm_password"]) && $_POST["confirm_password"] != "" &&
     isset($_POST["email"]) && $_POST["email"] != "" &&
     isset($_POST["first_name"]) && $_POST["first_name"] != "" &&
     isset($_POST["last_name"]) && $_POST["last_name"] != ""){ //Don't leave anything blank

     if($_POST["password"] != $_POST["confirm_password"]){    //check if passwords match
       failedRegistration("Password and Confirm Password do not match");
     }

     $username = $_POST["username"];    //set variables
     $password = $_POST["password"];
     $confirm_password = $_POST["confirm_password"];
     $email = $_POST["email"];
     $first_name = $_POST["first_name"];
     $last_name = $_POST["last_name"];

     if(ctype_alnum($username) && ctype_alnum($password) && ctype_alnum($confirm_password) && strpos($email, "=") === false
       && strpos($email, "=") !== 0 && ctype_alnum($first_name) && ctype_alnum($last_name)){  //check if information is valid
       $e_password = md5($password);    //Your information can not contain symbols

       $connection = mysqli_connect("localhost", "root", "", "met_hotels_igor_rafailovic_2694");  //connect to database

       //check if username exists
       $existing_usernames = mysqli_query($connection, "SELECT username FROM users WHERE username = '$username'");
       $existing_emails = mysqli_query($connection, "SELECT email FROM users WHERE email = '$email'");


       if(mysqli_num_rows($existing_usernames) > 0){      //checks for already existing username
         failedRegistration("Username already exists");

       } else if(mysqli_num_rows($existing_emails) > 0){  //checks for already existing email
         failedRegistration("Email is already used");
       }

       //insert mysql statement
       $insert_user = "INSERT INTO users(username, password, email, first_name, last_name)
                       VALUES('$username', '$e_password', '$email', '$first_name', '$last_name')";



       $successful_insert = mysqli_query($connection, $insert_user);

       if($successful_insert){    //check if insert was successful    //something went wrong
         mysqli_close($connection);

         successfulRegistration();

       } else {
         failedRegistration("Something went wrong");
       }

     } else {
       failedRegistration("Your information can not contain symbols");
     }

  } else {
    failedRegistration("Don\'t leave anything blank");
  }

  function successfulRegistration(){
    echo "<script>
            alert('Registration completed successfully');
            location = 'MetHotels.php';
          </script>";
  }

  function failedRegistration($message){
    echo "<script>
            alert('$message');
            location = 'MetHotels.php';
          </script>";

    die();
  }

?>
