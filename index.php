<?php
$websiteURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Northstar Ban List</title>
  <!-- META -->
  <meta property="og:title" content="Control pannel for Northstar Ban Lists">
  <meta property="og:site_name" content="Northstar Ban List">
  <meta property="og:url" content="<?php echo $websiteURL; ?>">
  <meta property="og:description" content="Control pannel for Northstar Ban Lists">
  <meta property="og:type" content="website">
  <meta property="og:image" content="">

  <link rel="stylesheet" href="style.css">

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12 p-3">
        <div class="ns-icon">
          <img src="./admin/img/logo_1k.png" alt="Northstar Icon">
        </div>
        <h1>Northstar Ban List</h1>
      </div>
    </div>
    <div class="row buttons">
      <div class="col-md-12 d-flex flex-row p-1">
        <a class="btn btn-primary btn-nstr api" href="./api/">API</a>
        <a class="btn btn-primary btn-nstr download" href="./api/" download="banlist.txt">Download List</a>
      </div>
      <div class="col-md-12 d-flex flex-row p-1">
        <a class="btn btn-primary btn-nstr login" href="./admin/">Login</a>
      </div>
    </div>
  </div>
</body>
</html>
