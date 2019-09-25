//jshint esversion:6

function clickMe () {
  alert("Clicked!");
}

function changeColor() {

   //variable for textbox input
  var textInput = document.querySelector('#colorChange');

  //variable for div
  var div = document.querySelector('#first-div');

  //get input value and use it for background color
  div.style.backgroundColor = textInput.value;
}

function fadeToggle(e) {
  //Used jQuery
  $("#thirdDiv").fadeToggle("slow", "linear");
}
