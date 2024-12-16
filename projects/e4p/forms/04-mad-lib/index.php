




<?php 

$noun = "";
$verb = "";
$adjective = "";
$adverb = "";

if (isset($_POST["submitted"])  ) {



	if (isset($_POST["noun"]) && isset($_POST["verb"]) && isset($_POST["adjective"]) && isset($_POST["adverb"])  ) {



		$noun = $_POST["noun"];
		$verb = $_POST["verb"];
		$adjective = $_POST["adjective"];
		$adverb = $_POST["adverb"];


		if ($noun != '' && 
			$verb != '' && 
			$adjective != '' && 
			$adverb != ''
			){

				$template = "I always walk around and notice $noun. He can always be seen $verb. Aditionally he is $adjective and does it very $adverb.";


		}	else {
				$template = "Please fill all the fields to generate the sentence.";
	}		




		



	} 


}


	


?>



<form method="POST" class='e4p-form'>

	<h2>MAD LIB</h2>

	<div class="noun form-field">
		<label for="">Enter a noun.</label>
		<input type="text" name="noun">
	</div>

	<div class="verb form-field">
		<label for="">Enter a verb.</label>
		<input type="text" name="verb">
	</div>

	<div class="adjective form-field">
		<label for="">Enter an adjective.</label>
		<input type="text" name="adjective">
	</div>

	<div class="adverb form-field">
		<label for="">Enter an adverb.</label>
		<input type="text" name="adverb">
	</div>

	<button type="submit" name="submitted">Click to generate your sentence</button>

	<?php 
	if (isset($template)) {

		echo "<p> $template </p> ";
	}	

	?>

</form>