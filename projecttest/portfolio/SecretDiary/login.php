<?php

  session_start();

  if($_GET['logout'] == 1 AND $_SESSION['id']) {
    session_destroy();
    $message = "You have been logged out. Have a nice day!";
  }

  include("connection.php");

  if ($_POST['submit'] == "Sign Up") { /* registering a user */
    if(!$_POST['email']) { /* Email validation */
      $error .= "<br />Please enter your email";
    } else if (!(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))) {
      $error .= "<br />Please enter a valid email address";
    }

    if (!$_POST['password']) { /* Password validation */
      $error .= "<br />Please enter your password";
    } else {
      if (strlen($_POST['password']) < 8) { /* Password must have at least 8 characters */
        $error .= "<br />Please enter a password with at least 8 characters";
      }
      if (!preg_match('`[A-Z]`', $_POST['password'])) { /* Password must have at least one capital letter */
        $error .= "<br />Please include at least one capital letter in your password";
      }
    }

    if ($error) { /* Summarize error(s) if there are any */
      $error = "There were error(s) in your signup details:".$error;
    } else { /* Adds the user into the database */
      $query = "SELECT * FROM `users` WHERE `email`='".mysqli_real_escape_string($link, $_POST['email'])."'"; /* Protection against SQL injection */
      $result = mysqli_query($link, $query);
      $results = mysqli_num_rows($result);
      if ($results) { /* If the email is already in the database, ask the user if they want to log in instead */
        $error = "That email address is already registered. Do you want to log in?";
      } else { /* Adds the new user into the database */
        /* Hashes the user's email, append their password to it, and take a hash of that */
        $query = "INSERT INTO `users` (`email`, `password`) VALUES('".mysqli_real_escape_string($link, $_POST['email'])."', '".md5(md5($_POST['email']).$_POST['password'])."')";
        mysqli_query($link, $query);
        $_SESSION['id'] = mysqli_insert_id($link);
        header("Location:mainpage.php"); /* Redirects to logged in page */
      }
    }
  }

  if ($_POST['submit'] == "Log In") { /* Logging in a user */
    $query = "SELECT * FROM  `users` WHERE `email`='".mysqli_real_escape_string($link, $_POST['loginemail'])."' AND `password`='".md5(md5($_POST['loginemail']).$_POST['loginpassword'])."' LIMIT 1";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
    if ($row) {
      $_SESSION['id'] = $row['id'];
      header("Location:mainpage.php"); /* Redirects to logged in page */
      print_r($_SESSION);
    } else {
      $error = "We could not find a user with that email and password. Please try again.";
    }
  }

?>
