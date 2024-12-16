


<?php

function showErrors() {
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
}
showErrors();



$rate = 0;
$distance = 0;
	
	if( isset($_POST["submitted"]) ) {



		if ( isset($_POST["rate"]) ) {
			if ( $_POST["rate"] >= 0 ) {	
				$rate = $_POST["rate"];
			}
		}

		if ( isset($_POST["distance"]) ) {
			if ( $_POST["distance"] >= 0 ) {
				$distance = $_POST["distance"];
			}	

		}

		$total = floatval($rate) * floatval($distance);


	

	}

?>






<form method='POST' class='e4p-form'>

	<h2> Car rental Form.</h2>
	<div class="cost-form form-field">
		<label for="">Charges per Km</label>
		<input type="number" name='rate'>
	</div>

	<div class="km-form form-field">
		<label for=""> Number of Km</label>
		<input type="number" name='distance'>
	</div>

	<button type='submit' name='submitted'> Submit </button>

	<?php 	
	if (isset ($total)) {
	echo "<p class='result'> Your total cost is " . "$total" . "$. </p>"; }

	 ?>


			

</form>