<!-- Reference the PHP file -->
<?

  session_start();
  include("connection.php");

  $query = "SELECT `diary` FROM `users` WHERE id='".mysqli_real_escape_string($link, $_SESSION['id'])."' LIMIT 1";
  $result = mysqli_query($link, $query);
  $row = mysqli_fetch_array($result);
  $diary = $row['diary'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Secret Diary</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!--- Reference to the CSS --->
    <link rel="stylesheet" type="text/css" href="styles.css" />

  </head>
  <body data-spy="scroll" data-target=".navbar-collapse">

    <!--- The navigation bar --->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header pull-left">
          <a href="" class="navbar-brand">Secret Diary</a>
        </div>
        <div class="pull-right">
          <ul class="navbar-nav nav">
            <li><a href="index.php?logout=1">Log Out</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!--- First container for brief summary --->
    <div class="container contentContainer" id="home">
      <div class="row">
        <div class="col-md-8 col-md-offset-2" id="topRow">
          <textarea name="diary" class="form-control"><?php echo $diary; ?></textarea>
        </div>
      </div>
    </div>

    <!-- Reference to jQuery -->
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- Reference to the JavaScript file -->
    <script type="text/javascript" src="scripts.js"></script>

  </body>
</html>
