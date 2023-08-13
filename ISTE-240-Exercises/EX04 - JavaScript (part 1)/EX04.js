// Klara Makek
// 19.02.2023
// ISTE240 Exercise 4 – JavaScript Part 1

//EX04 - A
function jsStyle() {
  // function to changes style of the text (id="text")
  text.style.fontSite = "12pt"; // changes the size
  text.style.fontFamily = "Comic Sans MS"; //changes the font
  text.style.color = "red"; //changes the color
}

//EX04 - B
function getFormValues() {
  // function to send first and last names to an 'alert' message.
  var name = document.getElementById("fname").value; //to get the first name from form
  var lname = document.getElementById("lname").value; //to get last name from form

  alert("First name: " + name + "\nLast name: " + lname); //alert message
}

//EX04 - C
function getOptions() {
  // function to display the number of options in an alert()
  var op = document.getElementById("mySelect").value; //to get the value
  alert("My option is: " + op); // the alert box
}

//EX04 - D
function colorRed(R) {
  //to connect with p
  R.style.color = "red"; //to change to color red
}
function colorBlack(B) {
  //to connect with p
  B.style.color = "black"; //to change to color black
}

//EX04 - E
function divide() {
  number1 = document.getElementById("firstoperand").value;
  number2 = document.getElementById("secondoperand").value;
  document.getElementById("result").innerHTML = number1 / number2;
}
function multiply() {
  number1 = document.getElementById("firstoperand").value;
  number2 = document.getElementById("secondoperand").value;
  document.getElementById("result").innerHTML = number1 * number2;
}
