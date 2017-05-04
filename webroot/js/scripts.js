var firstHeight = window.innerHeight;
var heightDiv = firstHeight - (firstHeight / 3);
var firstWidth = window.innerWidth / 100;
//var widthDiv = firstWidth / 100;
$("#content-editor").css("height", heightDiv);
/*$("#content-editor").css("left", (firstWidth * 26));*/

console.log(heightDiv);

$(window).resize(function() {
  var height = window.innerHeight;
  heightDiv = height - (height / 3);
  $("#content-editor").css("height", heightDiv);
});