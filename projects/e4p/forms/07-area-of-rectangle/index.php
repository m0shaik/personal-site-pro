<!-- ask user for dimensions.
store dimensions in a variable.
create 2 functions
	first function multiplies the variables(feet) and store in a new variable.
	second function converts the data in above variable into square meters.
create 2 templates.
	first template shows results in feet.
	second template shows results in meters.  -->


<?php

	$width = NULL;
	$length = NULL;  
	$areaFeet = NULL;
	$areaMeter = NULL;
	$feetToMeterRate = 0.09290304;
	$meterToFeetRate = 2.2;
	$isSubmitted = false;


	if (isset($_POST['submitted']) ) {
		$isSubmitted = true;


		if(isset($_POST['unit']) ) {
			$unit = $_POST['unit'];

		}

		if (isset($_POST['width']) ) {
			if($_POST['width'] >= 0){
				$width = $_POST['width'];
			}
		}

		if (isset($_POST['length']) ) {
			if($_POST['length'] >= 0){
				$length = $_POST['length'];
			}
		}

	$area = $width * $length; //calculate area regardless of unit


		if($unit == 'meter'){
			$areaMeter = $area;
			$areaFeet = $meterToFeetRate * $areaMeter;
		} else {
			$areaFeet = $area;
			$areaMeter = $areaFeet * $feetToMeterRate;

		}	
		//if unit is meter
				// areaMeter = area
				// areaFt = converstionRate * areaMeter

			//else (unit is feet)
				//areaFeet = area
				//areaMt = convertion * areaFt


	}

	$tempFeet = "The area of your room is " . $areaFeet . " sq ft. ";

	$tempMeter = "The area of your room is " . $areaMeter . " sq mt. ";

	




?>




<form method='POST' class='e4p-form'>

	<h2> Area of a Rectangular room. </h2>

	<fieldset>
  		<legend>Select the unit of measurement:</legend>

  	<div>
	    <input type="radio"  name="unit" value="feet" required/>
	    <label for="huey">Feet</label>
 	 </div>

 	 <div>
	    <input type="radio"  name="unit" value="meter"  required/>
	    <label for="huey">Meters</label>
 	 </div>
 	</fieldset>



	<div class="width-form form-field">
		<label for="">Width of the room.</label>
		<input type="number" name='width' required>
	</div>

	<div class="length-form form-field">
		<label for=""> Length of the room.</label>
		<input type="number" name='length' required>
	</div>

	<button type='submit' name='submitted'> Submit </button>


	<!-- if submutted -->
	<?php if ($isSubmitted) { ?>
		<output>
			<p><?=$tempFeet?></p>
			<p><?=$tempMeter?></p>
		</output>
	<?php } ?>



</form>

