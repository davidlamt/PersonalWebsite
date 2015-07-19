<!-- Reference the PHP file -->
<? include("login.php"); ?>

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
        <div class="navbar-header">
          <a href="" class="navbar-brand">Secret Diary</a>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <div class="collapse navbar-collapse">
          <form class="navbar-form navbar-right" method="POST">
            <div class="form-group">
              <input type="email" name="loginemail" placeholder="Email" class="form-control" value="<? echo addslashes($_POST['loginemail']); ?>" />
            </div>
            <div class="form-group">
              <input type="password" name="loginpassword" placeholder="Password" class="form-control" value="<? echo addslashes($_POST['loginpassword']); ?>" />
            </div>
            <input type="submit" name="submit" value="Log In" class="btn btn-success" />
          </form>
        </div>
      </div>
    </div>

    <!--- First container for brief summary --->
    <div class="container contentContainer" id="home">
      <div class="row">
        <div class="col-md-6 col-md-offset-3" id="topRow">
          <h1 class="marginBox">Secret Diary</h1>
          <p class="leadtext">Your own private diary, with you wherever you go.</p>
          <p class="bold marginTop">Interested? Sign Up Below!</p>
          <?php
            if($error) {
              echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
            }

            if($message) {
              echo '<div class="alert alert-success">'.addslashes($message).'</div>';
            }
          ?>
          <form class="marginTop" method="POST">
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Your Email" value="<? echo addslashes($_POST['email']); ?>" />
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control" placeholder="Your Password" value="<? echo addslashes($_POST['password']); ?>" />
            </div>
            <input type="submit" name="submit" value="Sign Up" class="btn btn-success btn-lg" />
          </form>
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
