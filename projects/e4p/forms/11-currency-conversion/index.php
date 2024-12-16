<!-- 

Prompt user for euros.
	Store in variable

Prompt user for conversion rate.
	store in variable

implement formula 
	designate necessary variables.



print result

 -->

 <?php

 $euro = NULL;

 $rateEuro = NULL;

 $rateDollar = 1;

 $result = NULL;

 $isSubmitted = false;

 if (isset($_POST['submitted']) ) {

 	$isSubmitted = true;

 	if(isset($_POST['euro']) ) { 
 		if($_POST['euro'] > 0) {
 			$euro = $_POST['euro'];
 		}
 	}

	if(isset($_POST['rateEuro']) ) { 
		if($_POST['rateEuro'] > 0) {
 			$rateEuro = $_POST['rateEuro'];
 		}
 	}



 	$result = ($euro * $rateEuro) / $rateDollar;

 	$template = 'For ' . $euro .  ' euros at an exchange rate of ' . $rateEuro . ' is ' . round($result) . ' U.S. dollar.';

 }

 ?>




<form method="POST" class='e4p-form currency-conversion'>
	

	<h2>Currency Conversion</h2>

	<div class="form-field">
		<label for="euro">How many Euros are you exchanging?</label>
		<input type="number" name='euro' min='0' step='0.01' required>

	</div>


	<div class="form-field">

		<label for="rateEuro">What is the exchange rate?</label>
		<input type="number" name='rateEuro' min='0' step='0.01' required>
		
	</div>

	<button type='submit' name='submitted'>Submit</button>

	<?php if($isSubmitted) { ?>

	<output>
		
		<p><?=$template?></p>

	</output>

	<?php } ?>

</form>

