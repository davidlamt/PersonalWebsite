/* Sets the background image's height to the window's height */
$(".contentContainer").css("min-height", $(window).height());

/* Performs smooth scrolling to an anchor on the same page */
/*Found the following code online */
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

/* jQuery accordion set to closed by default*/
$(".accordion").accordion( {
  active: false,
  collapsible: true
});

/* Contact form validation */
/* Prevents modal from closing on submission */
/* Found this online */
$('#myFormSubmit').click(function(e){
  var nameCheck;
  var emailCheck;
  var subjectCheck;
  var messageCheck;

  e.preventDefault();

  function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(emailAddress);
  };

  if ($(".nameInput").val() == '') {
    $("#warningName").css("display", "block");
    nameCheck = false;
  } else {
    $("#warningName").css("display", "none");
    nameCheck = true;
  }

  if (!isValidEmailAddress($(".emailInput").val())) {
    $("#warningEmail").css("display", "block");
    emailCheck = false;
  } else {
    $("#warningEmail").css("display", "none");
    emailCheck = true;
  }

  if ($(".subjectInput").val() == '') {
    $("#warningSubject").css("display", "block");
    subjectCheck = false;
  } else {
    $("#warningSubject").css("display", "none");
    subjectCheck = true;
  }

  if ($(".messageInput").val() == '') {
    $("#warningMessage").css("display", "block");
    messageCheck = false;
  } else {
    $("#warningMessage").css("display", "none");
    messageCheck = true;
  }

  if(nameCheck==true && emailCheck==true && subjectCheck==true && messageCheck==true) {
    $.ajax({
       type: "POST",
       url: "email.php", //process to mail
       data: $('.emailForm').serialize(),
       success: function(){
           $("#submitSuccess").css("display", "block");
       },
       error: function(){
           $("#submitFail").css("display", "block");
       }
   });
  }

  $("#contactModal").on('hidden.bs.modal', function(e) {
    $(".formWarning").css("display", "none");
    $(".submitSuccess").css("display", "none");
    $(".submitFail").css("display", "none");
    $(".textInput").val('');
  });
});
