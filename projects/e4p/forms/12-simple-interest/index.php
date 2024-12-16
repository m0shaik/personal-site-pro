<?php

$amount = NULL;

$rate = NULL;

$year = NULL;

$result = NULL;

$isSubmitted = false;

if (isset($_POST['submitted'])) {
	
	$isSubmitted = true;

	if(isset($_POST['amount']) ) {
		if($_POST['amount'] > 0) {
			$amount = $_POST['amount'];
		}
	}

	if(isset($_POST['rate']) ) {
		if($_POST['rate'] > 0) {
			$rate = $_POST['rate'];
		}
	}

	if(isset($_POST['year']) ) {
		if($_POST['year'] > 0) {
			$year = $_POST['year'];
		}
	}

	$result = $amount * (1 + (($rate/100) * $year));

	$template = 'After ' . $year . ' years at ' . $rate . '%, the investment will be worth $' . $result . '.' ;
}



?>


<form method="POST" class='e4p-form simple-interest'>
	
<h2>Simple Interest</h2>	

<div class="form-field">
	<label for="amount">Please enter the amount.</label>
	<input type="number" name='amount' min='0' step='0.01' required>
</div>

<div class="form-field">
	<label for="rate">Please enter the rate of interest</label>
	<input type="number" name='rate' min='0' step='0.01' required>
</div>

<div class="form-field">
	<label for="year">Please enter the number of years</label>
	<input type="number" name='year' min='0' step='0.01' required>
</div>

<button type='submit' name='submitted'>Submit</button>

<?php if($isSubmitted) { ?>

<output>
	
	<p><?=$template?></p>

</output>

<?php } ?>


</form>