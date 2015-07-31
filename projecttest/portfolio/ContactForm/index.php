<?php

  if ($_POST["submit"]) {
    $result = '<div class="alert alert-success">Form submitted</div>';

    if (!$_POST['name']) {
      $error = '<br />Please enter your name';
    }

    if (!$_POST['email']) {
      $error.= '<br />Please enter your email address';
    }

    /* Not needed since bootstrap has email validation */
    if ($_POST['email'] != "" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $error.= "<br />Please enter a valid email address";
    }

    if (!$_POST['comment']) {
      $error.= '<br />Please enter a comment';
    }

    if ($error) {
        $result = '<div class="alert alert-danger"><strong>There were error(s)
          in the form: </strong>'.$error.'</div>';
    } else {
      if (mail("test@test.com", /* Replace with real email */
        "Contact Inquiry",
        "Name: ".$_POST['name']."\nEmail: ".$_POST['email']."\nComment: ".$_POST['comment'])) {
          $result = '<div class="alert alert-success"><strong>Thank you!<br /></strong>I\'ll be in touch.</div>';
      } else {
        $result = '<div class="alert alert-danger"><strong>Sorry, there was an error with sending your message. Please try again.</strong></div>';
      }
    }
  }

?>

<!doctype html>
<html>
<head>
    <title>Contact Form</title>

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

  <div class="wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 emailForm">
        <h1>Let's Get In Touch!</h1>
        <?php echo ($result); ?>
        <p class="lead">Questions, comments, inquiries? Send me an email and i'll get back to you as soon as possible!</p>
        <form method="POST">
          <div class="form-group">
            <label for="name">Your Name:</label>
            <input type="text" name="name" class="form-control" placeholder="Your Name" value="<?php echo $_POST['name']; ?>" />
          </div>
          <div class="form-group">
            <label for="email">Your Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $_POST['email']; ?>" />
          </div>
          <div class="form-group">
            <label for="comment">Your comment:</label>
            <textarea class="form-control" name="comment"><?php echo $_POST['comment']; ?></textarea>
          </div>
          <input type="submit" name="submit" class="btn btn-success btn-lg" value="Submit" />
        </form>
      </div>
    </div>
  </div>
  </div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
