$("#findPostcodeButton").click(function(event) {
  var result = 0;

  $(".alert").hide();
  event.preventDefault();

  $.ajax({
    type: "GET",
    url: "https://maps.googleapis.com/maps/api/geocode/xml?address=" + encodeURIComponent($('#addressEntry').val()) + "&key=AIzaSyAJ4r4rsWdLNWY0_3RXCTm6U_c300iqC3U",
    dataType: "xml",
    success: processXML,
    error: error
  });

  function processXML(xml) {
    $(xml).find("address_component").each(function() {
      if ($(this).find("type").text() == "postal_code") {
        $("#alertSuccess").html("The postcode for that address is " + $(this).find('long_name').text() + ".").fadeIn();
        result = 1;
      }
    });

    if (result == 0) {
      $("#alertFailed").html("Could not find the postcode for that address. Please try again.").fadeIn();
    }
  }

  function error() {
    $("#alertFailed").html("Could not connect to the server. Please try again.").fadeIn();
  }
});
