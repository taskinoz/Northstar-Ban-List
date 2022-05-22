<?php
// Set the password variable
session_start();
if (isset($_POST['pass'])){
  $pass = $_POST['pass'];
  $_SESSION["pass"] = $pass;
}
elseif (isset($_SESSION["pass"])) {
  $pass = $_SESSION["pass"];
}
else {
  $pass = null;
}

// Import Password
include("password.php");

// If login works show site
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
