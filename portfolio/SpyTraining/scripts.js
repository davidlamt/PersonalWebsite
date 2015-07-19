/*
 * File: scripts.js
 * Author: David Tran
 * References: Rob Percival from Udemy
 * https://www.udemy.com/complete-web-developer-course/
*/

var randomTime;
var clickedTime;
var createdTime;
var reactionTime;
var totalReactionTime = 0;
var numOfShots = 0;
var averageReactionTime;

function displayTarget() {
  randomTime = Math.random() * 2000;

  setTimeout(function() {
    var topMargin = Math.random() * 339;
    var leftMargin = Math.random() * 780;

    document.getElementById("target").style.top = topMargin + "px";
    document.getElementById("target").style.left = leftMargin + "px";

    document.getElementById("target").style.display = "block";
    createdTime = Date.now();
  }, randomTime);
}

displayTarget();
document.getElementById("time").innerHTML = 0;
document.getElementById("averagetime").innerHTML = 0;

document.getElementById("target").onclick = function() {
  clickedTime = Date.now();
  reactionTime = (clickedTime - createdTime) / 1000;
  document.getElementById("time").innerHTML = Number(reactionTime).toFixed(2);

  numOfShots++;
  totalReactionTime = totalReactionTime + reactionTime;
  averageReactionTime = totalReactionTime / numOfShots;
  document.getElementById("averagetime").innerHTML = Number(averageReactionTime).toFixed(2);

  this.style.display = "none";
  displayTarget();
}
