<?php

  $city = $_GET['cityEntry'];
  $city = str_replace(" ", "", $city);
  $entireWebsiteContents = @file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");
  preg_match('/3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)</s',
    $entireWebsiteContents, $matches);
  echo ($matches[1]);

?>
