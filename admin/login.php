<?php
  if (strpos($_SERVER['PHP_SELF'], "index.php") !== false) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="./admin/login.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <form method="POST" action="./index.php" target="updated-list">
          <div class="form-group">
              <div class="ns-icon">
                <img src="./admin/img/logo_1k.png" alt="">
              </div>
            <?php if ($pass!=null) { ?>
              <input type="password" class="form-control error" id="Password" name="pass" placeholder="Incorrect Password">
            <?php } else {  ?>
              <input type="password" class="form-control" id="Password" name="pass" placeholder="Password">
            <?php } ?>
          </div>
          <button type="submit" class="btn btn-primary btn-rsvp">Submit</button>
        </form>
        <iframe id="update-list" style="display:none"></iframe>
      </div>
    </div>
  </div>



</body>
</html>



<?php } else { ?>
<iframe src="https://giphy.com/embed/C87IXdLfJ44Zq" width="480" height="205" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
<?php } ?>
