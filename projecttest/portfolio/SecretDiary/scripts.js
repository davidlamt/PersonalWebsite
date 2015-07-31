/*
 * File: scripts.js
 * Author: David Tran
 * References: Rob Percival from Udemy
 * https://www.udemy.com/complete-web-developer-course/
*/

// Sets the background image's height to the window's height
$(".contentContainer").css("min-height", $(window).height());

$("textarea").css("min-height", $(window).height() - 110);

$("textarea").keyup(function() {
  $.post("updatediary.php", { diary:$("textarea").val() });
});
