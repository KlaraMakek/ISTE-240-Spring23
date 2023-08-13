<!--
	Simple php form
	@author Klara Makek
	@version 2023
	ISTE 240 - HX06
-->
<?php 
$path='./';
$page='OrderForm';
include $path . 'assets/inc/header.php';
?>

	<div id="container">
		<h2>Order a Delicious Pizza!</h2>
	
		<form name="OrderForm" action="orderprocess.php"  onsubmit="return validateForm();" method="post">
			<p>Name:  <input type="text" name="customerName" 	<?php if (isset($_GET['name'])) {
				echo 'value="'.$_GET['name'].'"';
			}?> /></p>
			<p>ID:  <input type="text"  name="customerID" <?php if (isset($_GET['name'])) {
				echo 'style = "background-color:pink"';
			}?>/></p>
			<p> Check the size of Pizza you would like to order:<br />
				<!-- Note the <label> tags below that allow the user to click on the text! -->
				<input type="radio" name ="pizzaSize" value = "P" id="personal"/><label for="personal">Personal<label><br/>
				<input type="radio" name ="pizzaSize" value = "S" id="small"/><label for="small">Small<label><br/>
				<input type="radio" name ="pizzaSize" value = "M"  id="medium" checked="true"/><label for="medium">Medium<label><br/>
				<input type="radio" name ="pizzaSize" value = "L"  id="large"/><label for="large">Large<label>
			</p>
			<p>Select the number of toppings you want on your pizza:</p>
			<input type="radio" name="toppings" value="NET" id="NoExtraToppings"/><label for="NoExtraToppings">No Extra Toppings<label><br/>
			<input type="radio" name="toppings" value="OT" id="OneTopping"/><label for="OneTopping">One Topping<label><br/>
			<input type="radio" name="toppings" value="TT" id="TwoTopping"/><label for="TwoTopping">Two Topping<label><br/>
			<input type="radio" name="toppings" value="THT" id="ThreeTopping"/><label for="ThreeTopping">Three Topping<label><br/>
			<p>
				<input type="submit"  name="Submit"  value=" Send Form"  />
			</p>
		</form>
	</div> 

	<?php include $path . 'assets/inc/footer.php'?>

	
	<?php ?>
