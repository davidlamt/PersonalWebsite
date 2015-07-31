<?php

?>

<!doctype html>
<html>
<head>
    <title>Weather Predictor</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	  <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Reference to the CSS file -->
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 center white">
        <h1>Weather Predictor</h1>
        <p class="lead">Enter your city below to get a forecast of the weather.</p>
        <form>
          <div class="form-group">
            <input type="text" class="form-control" name="cityEntry" id="cityEntry" placeholder="Eg. London, Paris, San Francisco..." />
          </div>
          <div class="form-group">
            <input type="submit" name="findWeatherButton" id="findWeatherButton" class="btn btn-success btn-lg" value="Find The Weather" />
          </div>
        </form>
        <div class="alert alert-success alertSuccess">Success</div>
        <div class="alert alert-danger alertFailed">Failed</div>
      </div>
    </div>
  </div>

<!-- Reference to jQuery -->
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!-- Reference to the JavaScript -->
<script type="text/javascript" src="scripts.js"></script>

</body>
</html>
