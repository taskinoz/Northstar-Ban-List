<?php
  if (strpos($_SERVER['PHP_SELF'], "index.php") !== false) {
    include('password.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <div class="row p-2">
      <div class="col-md-12">
        <h1>Dashboard</h1>
      </div>
    </div>
    <div class="row p-2">
      <div class="col-sm-12 order-sm-1 col-md-6 order-2">
        <form action="./update.php" method="post">
          <div class="form-group">
            <label for="uid">Enter UID</label>
            <input type="text" class="form-control" id="uid" placeholder="1000000000" name="uid">
            <input type="hidden" disables value="<?php echo $password; ?>" name="p">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="col-sm-12 order-sm-2 col-md-6 order-1">
        <p>Banned Users</p>
        <?php
          $dirctory = './';
          $fileName = 'banlist.txt';
          if (file_exists($dirctory.$fileName)) {
            $bannedUsers = explode("\n", file_get_contents($dirctory.$fileName));
            echo "<ul>";
            foreach ($bannedUsers as $user) {
              echo "<li>$user</li>";
            }
            echo "</ul>";
          }
          else {
            echo "No banned users";
          }
          
        ?>
      </div>
    </div>
  </div>
</body>
</html>

<?php } else { ?>
<iframe src="https://giphy.com/embed/C87IXdLfJ44Zq" width="480" height="205" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
<?php } ?>
