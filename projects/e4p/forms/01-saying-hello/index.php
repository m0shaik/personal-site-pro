<!-- Prompt user for a name

take the input and add into memory

store the name in variable

concatenate the variable into a template

display the template

 -->



<?php 

$template = NULL;

if (isset($_POST['enter']) ) {

	if (isset ($_POST['name']) ) {

		$name = $_POST['name'];

		$lowerName = strtolower($name);


		$template = 'Hello, ' . $name . " , nice to meeet you!";


		if ($lowerName == "burooj") {
			$template = 'Hello Sensei, welcome back and its nice to meeet you!';
		}

		if ($lowerName == "shaik") {
			$template = 'Its Shaik. Quickly hide your women!!';
		}
	} 
		
}

 ?>


 <form method="POST" class='e4p-form'>
 	
 	<h2>Saying Hello.</h2>

 	<div class="form-field">
 		<label for="">Enter your Name</label>
 		<input type="text" name='name'>
 	</div>

 	<button type='submit' name='enter'>
 		Submit.
 	</button>





 </form>


<output>
	<p><?=$template?></p>
</output>