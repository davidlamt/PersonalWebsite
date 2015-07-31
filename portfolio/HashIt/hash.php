<?php

  $textEntry = $_GET['textEntry'];
  $hashValue = hash('sha256', $textEntry);
  echo $hashValue;

?>
