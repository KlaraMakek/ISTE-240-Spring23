<!--
 * Name: Klara Makek
 * Course/Section: ISTE-240-801
 * Final Practical
 * Date: 9.5.2023.
 * @ASSESSME.INTENSITY:HIGH
 -->

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>ISTE-240 2211 final</title>
	<style>
		/****************************************************/
		/*	Start - You won't need to mess with these rules	*/
		*,
		*:before,
		*:after {
			box-sizing: border-box;
		}

		.columnsContainer,
		.sidebar,
		footer,
		header {
			position: relative;
			margin: .5em;
		}

		.leftColumn,
		.rightColumn,
		.sidebar,
		footer,
		header {
			border: 1px solid #ccc;
			padding: 1.25em;
		}

		.leftColumn {
			margin-bottom: .5em;
			background-color: #93B9DE;
		}

		.rightColumn {
			background-color: #CDD5DC;
		}

		.sidebar {
			background-color: #CA93B0;
			z-index: 2;
		}

		footer {
			background-color: #7593B0;
		}

		header {
			background-color: #CA9F67;
		}

		figure {
			height: 203px;
		}

		li {
			display: inline
		}

		/*	End - You won't need to mess with these rules	*/
		/****************************************************/

		/****************************************************/
		/* Write your rules below!!! */


		/* CSS #1 */
		/* change the appearance of second and then every other p tag so that its text color is green */
		/* This change should only affect paragraphs in div.columnsContainer */
		.greenP {
			color: green;
		}


		/* CSS #2 */
		/* animate the header tag so it slides from off the screen (left to right) on load of the page */
		/* animation should happen over 3 seconds, should have both slow start and a slow end, start at time 1s and happen twice */
		/* think CSS animation using @keyframes */

		.slide {
			left: -100%;
			animation: slide 1s;
			animation-duration: 3s;
			animation-fill-mode: forwards;
			animation-iteration-count: 2;
		}

		@keyframes slide {
			to {
				left: 0;
			}
		}



		/* CSS #3 */
		/* MEDIA QUERIES */
		/* when the page is greater than 700px wide, make the .leftColumn and .rightColumn display side by side*/
		/* when the page is less than or equal than 700px wide, make the .sidebar stick at the top and scroll down */


		@media only screen and (max-width: 700px) {



			.leftColumn,
			.rightColumn {
				width: 100%;
				float: none;
			}

			.sidebar {
				position: -webkit-sticky;
				position: sticky;
				top: 0;
				height: auto;
				overflow-y: auto;
			}

			footer {
				position: relative;
			}

		}

		@media only screen and (min-width: 701px) {

			.leftColumn {
				width: 50%;
				float: left;
				height: 740px;
			}

			.rightColumn {
				height: 740px;
				width: 50%;
				float: right;
				margin-top: 0;
			}


			footer {
				width: 98%;
				margin-top: 53%;
				position: absolute;
			}
		}
	</style>
	<script type="text/javascript">
		/* JavaScript functions go here */


		/*1.*/
		function changeText() {
			// Inputs text node
			var normalTxt = document.getElementById("normalTxt");
			var newTextNode = document.createTextNode("I changed it!");
			normalTxt.innerHTML = "";
			normalTxt.appendChild(newTextNode);
		}
		function changeBack(text) {
			var display = document.getElementById('normalTxt');
			normalTxt.innerHTML = "";
			normalTxt.innerHTML = text;
		}

		/*2.*/
		function swapImage() {
			var image = document.getElementById('myImage');
			if (image.src.match('assets/img/img.png')) {
				image.src = 'assets/img/ap.jpg';
			} else {
				image.src = 'assets/img/img.png';
			}
		}

		/*3*/



	</script>
</head>

<body>

	<!-- JS #1 make the h1 below change its text (back and forth) between 'ISTE-240 2225 Final' and 'I changed it!' on rollover -->
	<?php
	include('assets\inc\header.php'); ?>

	<div class="sidebar">
		<nav>
			<li>Item 1</li>
			<li>Item 2</li>
			<li>Item 3</li>
			<li>Item 4</li>
		</nav>
	</div>

	<div class="columnsContainer">

		<div class="leftColumn">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam blandit vitae magna et euismod. Cras et
				sollicitudin nisl. Aliquam cursus pulvinar pulvinar. Nulla et neque enim. Nam eleifend erat ut ligula
				posuere dapibus. Vestibulum commodo velit sed nisi vehicula, sed lobortis odio lobortis. Proin lacus
				urna, condimentum non lacinia nec, volutpat nec ante. Sed sit amet metus tortor. In in risus ante.
				Suspendisse id pulvinar tellus, a iaculis neque. Ut ac risus varius, maximus orci nec, fringilla augue.
				Mauris ornare libero sed risus finibus molestie et tempor mi. Morbi risus erat, mattis sed sapien id,
				mollis suscipit orci. In hac habitasse platea dictumst.</p>
			<p class="greenP">Etiam vel pharetra nisi, vel mollis lectus. Morbi sodales, ipsum non vestibulum molestie,
				mauris nulla luctus erat, vel consequat lorem quam bibendum lorem. Cras vitae laoreet sapien.
				Pellentesque vel ante non eros bibendum sollicitudin id at lacus. Mauris aliquet ac justo non cursus.
				Sed sit amet fermentum nibh, non bibendum tellus. Maecenas fermentum scelerisque vulputate. Nullam
				fringilla condimentum libero. Phasellus tincidunt lectus in nibh mattis aliquet. Quisque fermentum quis
				dui ac gravida. In laoreet finibus odio eu lobortis. Phasellus tempus gravida eros, vitae tristique nunc
				lacinia quis. Proin ullamcorper aliquet imperdiet.</p>
			<!-- JS #2 make the image swap on click, (img.png to dsb.jpg on click, dsb.jpg to img.png on next click, etc..) -->
			<figure><img src="assets/img/img.png" id="myImage" onclick="swapImage()" /></figure>
			<p>Nullam semper sem nec risus rhoncus placerat. Curabitur lobortis ipsum sed accumsan pharetra. Morbi
				maximus, ante in varius convallis, nulla tortor pharetra eros, pharetra volutpat ex neque sit amet
				ipsum. Nam ornare ex massa. Vestibulum vel egestas dui, varius tempus urna. Curabitur vestibulum erat
				tellus, sit amet mattis nisl volutpat sed. In hac habitasse platea dictumst. Nullam volutpat mi sit amet
				sodales tincidunt. Nam laoreet sit amet mauris id ornare. Etiam placerat quis quam vel gravida. Cras
				scelerisque, turpis et feugiat aliquet, nibh elit aliquam sem, nec luctus tellus odio sed sem.</p>
			<p class="greenP">Suspendisse potenti. Pellentesque feugiat ultricies mattis.</p>
		</div>

		<div class="rightColumn">
			<!-- JS #3 when the form is submitted, check all 3 inputs have some value,
				 if they do - submit the form to the this page (index.php) via GET
				 if they don't - turn the background color of the empty input to red and do NOT submit the form (shouldn't leave the page).
			 -->
			<div id="form">
				<form>
					<h3>Calculate BMI:</h3>
					Name:<input type="input" name="name" id="name" /><br />
					<!-- arrows of the Weight and height field should have a 0.1 increment. Default values of fields are 60kg and 175cm -->
					Weight [kg]:<input type="number" name="width" style="width:7em" id="width" /><br />
					Height [cm]:<input type="number" name="height" style="width:5em" id="height" /><br />
					<br />
					<input type="submit" value="Calculate!" />
				</form>
			</div>
			<script>
				const form = document.querySelector('form');
				const input1 = document.querySelector('#name');
				const input2 = document.querySelector('#width');
				const input3 = document.querySelector('#height');

				form.addEventListener('submit', (event) => {
					event.preventDefault();

					if (input1.value && input2.value && input3.value) {
						const queryString = '?input1=${input1.value}$input2=${input2.value}$input3=${input3.value}';
						window.location.href = 'index.php${queryString}';
					} else {
						if (!input1.value) {
							input1.style.backgroundColor = 'red';
						} if (!input2.value) {
							input2.style.backgroundColor = 'red';
						} if (!input3.value) {
							input3.style.backgroundColor = 'red';
						}
					}
				});
			</script>
			<hr />
			<p>Morbi sapien sem, mattis venenatis sollicitudin non, molestie in ex. Nam maximus neque lectus, tristique
				ornare sapien mattis non. Etiam eget arcu et libero semper tempus eu at est. Etiam ut viverra eros.
				Phasellus sed leo sagittis, ultrices ipsum vitae, consequat mi. Sed tristique sollicitudin hendrerit.
				Proin semper mi purus, a fermentum diam rhoncus ut. Duis pellentesque enim eget ipsum commodo
				sollicitudin.</p>
			<p class="greenP">Ut pretium tristique nisl, ac rutrum felis ornare eget. Proin nec nunc eros. Aliquam
				maximus vitae lorem quis sollicitudin. </p>

		</div>
	</div>

	<!--PHP/modular site
		  //Cut this page into 3 logical chunks (header.php, index.php, footer.php)
		  //move the header.php and footer.php into your assets/inc/ folder
		  //write the php on the index.php page to pull them in!
		-->
	<?php
	include('assets\inc\footer.php'); ?>
</body>

</html>