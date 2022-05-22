<?php
$dirctory = './';
$fileName = 'banlist.txt';

include('password.php');

if (isset($_POST['p']) && isset($_POST['uid'])){
  if ($password==$_POST['p']){
    // Check for file
    if (file_exists($dirctory.$fileName)) {
        $fp = fopen($dirctory.$fileName, 'a');//opens file in append mode
        fwrite($fp, "\n".$_POST['uid']);
        fclose($fp);
    }
    // Create new file if it doesnt exist
    else {
        $fp = fopen($dirctory.$fileName, 'w');//Create file in write mode
        fwrite($fp, $_POST['uid']);
        fclose($fp);
    }

    // Go back to Dashboard
    header("Location: ../admin/");
    exit();

  }
}


