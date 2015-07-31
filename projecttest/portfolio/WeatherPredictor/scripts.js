$("#findWeatherButton").click(function(event) {
  event.preventDefault();

  if ($("#cityEntry").val() != "") {
    $.get("scraper.php?cityEntry=" + $("#cityEntry").val(), function(data) {
      $(".alertFailed").css("display", "none");
      $(".alertSuccess").html("<strong>3 Day Weather Forecast</strong><br />" + data).fadeIn();
      if (data == "") {
        $(".alertSuccess").css("display", "none");
        $(".alertFailed").html("Could not find the data for that city. Please try again.").fadeIn();
      }
    });
  } else {
    $(".alertSuccess").css("display", "none");
    $(".alertFailed").html("Please enter a city.").fadeIn();
  }
});
