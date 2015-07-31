<!doctype html>
<html>
  <head>
    <title>Hash It</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!--- Custom CSS file --->
    <link rel="stylesheet" type="text/css" href="creative.css" />

  </head>
  <body>

    <!--- Container for the front page --->
    <div class="container contentContainer" id="homePage">
      <div class="row">
        <div class="col-md-12">
            <button class="btn btn-info" data-toggle="modal" data-target="#moreInfoModal" id="moreInfoButton" >More Info</button>
        </div>
        <div class="col-md-6 col-md-offset-3" id="contentBox">
          <h1>Hash It</h1>
          <p class="lead">Enter any text to get its SHA-256 hash value</p>
          <form>
            <div class="form-group">
              <input type="text" class="form-control" name="textEntry" id="textEntry" placeholder="Your text..." />
            </div>
            <div class="form-group">
              <input type="submit" name="getHashValueButton" id="getHashValueButton" class="btn btn-success btn-lg" value="Get Hash Value" />
            </div>
          </form>
          <div class="alert alert-success alertSuccess">Success</div>
          <div class="alert alert-danger alertFailed">Failed</div>
        </div>
      </div>
    </div>

    <!-- More info modal -->
    <div class="modal" id="moreInfoModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" data-dismiss="modal">x</button>
            <h4 class="modal-title">Hash It</h4>
          </div>
          <div class="modal-body">
            <p>This web application uses a SHA-256 hash function to create a corresponding hash value to the input. It does not save information about the input and the hash value.</p>
          </div>
          <div class="modal-footer">
            <button class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- Custom JavaScript file -->
    <script type="text/javascript" src="creative.js"></script>

  </body>
</html>
