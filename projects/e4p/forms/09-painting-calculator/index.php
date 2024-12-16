<!-- Prompt user for width and length.
	store them in variable.

Create a variable with default gallon specs.

divide the total area variable by gallon variable
	store the result in a new variable

display result in whole number rounded off to nearest.

 -->

<?php 

	$width = NULL;

	$length = NULL;

	$diameter = NULL;

	$roomShape = NULL;

	$isSubmitted = false;

	$isRadioSubmitted = false;

	$roomArea = NULL;


	if (isset($_POST['radio-submitted']) ) {

		$isRadioSubmitted = true;

			if (isset($_POST['room-shape']) ) {
				$roomShape = $_POST['room-shape'];
		}

	}

	


		if (isset($_POST['submitted']) ) {

			$isSubmitted = true;
			$isRadioSubmitted = true;

		if (isset($_POST['room-shape']) ) {
				$roomShape = $_POST['room-shape'];
		}

			if (isset($_POST['width']) ) {
				if ($_POST['width'] > 0) {
					$width = $_POST['width'];
				}
			}

			if (isset($_POST['length']) ) {
				if ($_POST['length'] > 0) {
					$length = $_POST['length'];
				}
			}

			if (isset($_POST['diameter']) ) {
				if ($_POST['diameter'] > 0) {
					$diameter = $_POST['diameter'];
				}
			}

			if ($roomShape == 'rectangle') {

			$roomArea = $width * $length;

			} 

			if ($roomShape == 'circle') {

			$radius = $diameter / 2;

			$roomArea = 3.14 * $radius * $radius;

			} 

			$paintGallon = $roomArea / 350;

			$roundedPaintGallon = ceil($paintGallon);

			$templateResult = "You will need " . $roundedPaintGallon . " gallons of paint to cover " . "$roomArea" . " square feet.";

			if ($roundedPaintGallon == 1) {

				$templateResult = "You will need " . $roundedPaintGallon . " gallon of paint to cover " . "$roomArea" . " square feet.";

			}


		}

	


 ?>




 <form method='POST' class='e4p-form'>


	<h2> Paint Calclulator. </h2>

	<fieldset class='radio-set'>
		<legend>Select the shape of your room. </legend>

		<div class='circle-form radio-field'>
			
			<input type="radio" id='circle' name='room-shape' value='circle' required/>
			<label for="circle"> Circle </label>

		</div>

		<div class='rectangle-form radio-field'>
			
			<input type="radio" id='rectangle' name='room-shape' value='rectangle' required/>
			<label for="rectangle"> Rectangle </label>

		</div>

		<?php if (!$isRadioSubmitted) { ?>

		<button type='submit' name='radio-submitted'> Select Room </button>

		<?php } ?>

	</fieldset>

	<?php if ($roomShape=='rectangle') { ?>

	<fieldset class="rectangle-set">

		<div class="width-form form-field">
			<label for="">Specify the width of the room.</label>
			<input type="number" name='width' min='0' required>
		</div>

		<div class="length-form form-field">
			<label for=""> Specify length of the room </label>
			<input type="number" name='length' min='0' required>
		</div>

	</fieldset>

	<?php } ?>

	<?php if ($roomShape=='circle') { ?>

	<fieldset class="circle-set">

		<div class="diameter-form form-field">
			<label for="">Specify the diameter of the room.</label>
			<input type="number" name='diameter' min='0' required>
		</div>

	</fieldset>

	<?php } ?>

	<?php if ($isRadioSubmitted) { ?>

	<button type='submit' name='submitted'> Submit </button>

	<?php } ?>

	<?php if ($isSubmitted) { ?>

	<output>
		<p><?=$templateResult?></p>

	</output>

	<?php } ?>


</form>