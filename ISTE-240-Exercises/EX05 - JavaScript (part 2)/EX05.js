// Klara Makek
// 04.02.2023
// ISTE 240 Exercise 4 – JavaScript Part 1

//EX04 - A

function moveText() {
  var myText = document.getElementById("myText");
  var currentLeft = parseInt(myText.style.left) || 0;
  myText.style.left = currentLeft + 10 + "px";
}

//EX05 - B+

function howmany() {
  // It counts the amount of inputs
  var form = document.getElementById("regForm");
  var inputElements = form.getElementsByTagName("input");
  var totalInputs = inputElements.length;
  var textInputs = form.getElementsByTagName("input");
  var count = 0;
  for (var i = 0; i < textInputs.length; i++) {
    if (textInputs[i].type === "text") {
      count++;
    }
  }
  alert("Total inputs: " + totalInputs + "\nText inputs: " + count);
}

//EX05 - C
function colorchanger() {
  // It changes the background of div from selected color
  var getColor =
    document.getElementById("color").options[color.selectedIndex].value;
  document.getElementById("colorchanger").style.backgroundColor = getColor;
}

//EX05 - D
function mouseOver() {
  // Changes color of sentence form selected color before (EX05 - C)
  var getColor =
    document.getElementById("color").options[color.selectedIndex].value;
  document.getElementById("txtColor").style.color = getColor; // gets color from EX05 - C
}

function mouseOut() {
  // Sets the color of sentence to default
  document.getElementById("txtColor").style.color = "black";
}

//EX05 - E
function changeText() {
  // Inputs text node
  var normalTxt = document.getElementById("normalTxt");
  var newTextNode = document.createTextNode("Node txt");
  normalTxt.innerHTML = "";
  normalTxt.appendChild(newTextNode);
}
