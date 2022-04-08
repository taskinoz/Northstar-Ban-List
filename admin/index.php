<?php
// Set the password variable
if (isset($_POST['pass'])){
  $pass = $_POST['pass'];
}
else {
  $pass = null;
}

// Import Password
include("password.php");

// If login works show wedding site
if ($pass == $password)
{
  include("dashboard.php");
}
// Show login form if no password
else
{
  if(isset($_POST))
  {
    include("login.php");
  }
}
?>
