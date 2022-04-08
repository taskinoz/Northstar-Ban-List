<?php
$dirctory = '../admin/';
$fileName='banlist.txt';

// Check for file
if (file_exists($dirctory.$fileName)) {
    $fp = fopen($dirctory.$fileName, 'r');//opens file in append mode
    echo fread($fp, filesize($dirctory.$fileName));
    fclose($fp);
}
// Create new file if it doesnt exist
else {
    echo "cannot find banlist";
}
?>