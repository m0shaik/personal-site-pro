<!-- Prompt user for an input

store the input in a variable

set a function to calculate the characters of variable

store the above in new variable.

Make a template and concatenate the variable to form the sentence.
 -->

<!--  if nothinh is entered
 	prompt user for some input.
 -->

<!-- User is prompted to enter a value

The value text has to be red in color.  -->

 
<?php

$template = NULL;

if (isset($_POST['enter']) ) {

	if (isset ($_POST['name']) ) {

		$name = $_POST['name'];

		$charName = strlen($name);

		if ($name == "") {

		$template = "Please enter a value";

		$class = "invalid";


	} else {

		$class = "valid";

		$template = "$name" . " has " . "$charName" . " characters.";
	}

	}
	
}

	


?>




 <form method="POST" class='e4p-form'>
 	
 	<h2>Counting the Numbers of Characters.</h2>

 	<div class="form-field">
 		<label for="">Enter your Name</label>
 		<input type="text" name='name'>
 	</div>

 	<button type='submit' name='enter'>
 		Submit.
 	</button>

 <output class="<?=$class?>">
	<p><?=$template?></p>
</output>
