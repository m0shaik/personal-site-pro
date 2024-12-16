






<?php

function showErrors() {
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
}
showErrors();


$firstno = 0;
$secondno = 0;


if( isset($_POST["submitted"]) ) {

	if (isset($_POST["first-no"]) ) {
		if ($_POST['first-no'] >= 0 ) {
			$firstno = $_POST["first-no"];
		}		
	}


	if (isset($_POST['second-no']) ) {
		if ($_POST['second-no'] >= 0) {
			$secondno = $_POST["second-no"];
		}		
	}

	$addition = floatval($firstno) + floatval($secondno);

	$subtraction = floatval($firstno) - floatval($secondno);

	$multiply = floatval($firstno) * floatval($secondno);

	$divide = floatval($firstno) / floatval($secondno);



}




?>

<form method='POST' class='e4p-form'>
	<h1>Basic Calculator</h1>

	<div class="first-no form-field">

		<label for="">What is the first number?</label>
		<input type="number" name="first-no">
		
	</div>

	<div class="second-no form-field">

		<label for="">What is the second number?</label>
		<input type="number" name="second-no">

	</div>

	<button type='submit' name='submitted'> Calculate </button>

<output>
	<?php 

	if (isset ($addition)) {
	echo "<p class='result'> $firstno + $secondno = $addition </p>"; }

	if (isset ($subtraction)) {
	echo "<p class='result'> $firstno - $secondno = $subtraction </p>"; }

	if (isset ($multiply)) {
	echo "<p class='result'> $firstno x $secondno = $multiply </p>"; }

	if (isset ($divide)) {
	echo "<p class='result'> $firstno / $secondno = $divide </p>"; }

?>
</output>
 



</form>