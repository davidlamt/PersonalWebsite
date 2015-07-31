// Sets the background image's height to the window's height
$(".contentContainer").css("min-height", $(window).height());

// Gets the hash value for the input
$("#getHashValueButton").click(function(event) {
  event.preventDefault();
  $(".alert").css("display", "none");

  if ($("#textEntry").val()) {
    $.get("hash.php?textEntry=" + $("#textEntry").val(), function(data) {
      $(".alertSuccess").html(data).fadeIn();
    });
  } else {
    $(".alertFailed").html("Could not find the hash value. Please try again.").fadeIn();
  }
});
