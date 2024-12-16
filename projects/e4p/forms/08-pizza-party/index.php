<!-- Prompt user for pizza ppl and slice quantity

store the information in variables.

create new variables that divide the above variables as needed

create templates as needed by concatenating above variables.

display templates as needed -->

<?php
	
	$people = NULL;

	$pizza = NULL;

	$slice = NULL;

	$isSubmitted = false;

	if (isset($_POST['submitted']) ) {

		$isSubmitted = true;

		if (isset($_POST['people']) ) {
			if($_POST['people'] > 0){
				$people = $_POST['people'];
			}
		}

		if (isset($_POST['pizza']) ) {
			if($_POST['pizza'] > 0){
				$pizza = $_POST['pizza'];	
			}
			
		}

		

		$slicesPerPizza = $pizza * 8;

		$slicesPerPerson = intval($slicesPerPizza / $people);

		$remainingSlices = intval($slicesPerPizza % $people);

		$templatePerPerson = "Each person gets " . ($slicesPerPerson). " slices of the pizza. ";

		$templateRemaining = "There will be " . ($remainingSlices) . " slices remaing. ";

		if ($slicesPerPerson == 1) {
			$templatePerPerson = "Each person gets " . $slicesPerPerson. " slice of the pizza. ";
		} 

		if ($remainingSlices == 1) {
			$templateRemaining = "There will be " . $remainingSlices . " slice remaing. ";
		} 

	}


?>



<form method='POST' class='e4p-form'>

	<h2> Pizza Party calclulator. </h2>
	<div class="people-form form-field">
		<label for="">Number of people in the party.</label>
		<input type="number" name='people' required>
	</div>

	<div class="pizza-form form-field">
		<label for=""> Number of pizzas in the room. </label>
		<input type="number" name='pizza' required>
	</div>

	<button type='submit' name='submitted'> Submit </button>

	<?php if ($isSubmitted) { ?>

	<output>
		<p><?=$templatePerPerson?></p>
		<p><?=$templateRemaining?></p>

	</output>

	<?php } ?>

</form>