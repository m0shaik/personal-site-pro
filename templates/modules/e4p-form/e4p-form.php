<?php 

	$exercise = getExercise();

	$path = "";

	if (isset ($exercise['path'])) {

		$path = $exercise['path']; ?>

		 <section class="e4p-form">
 	
 	<inner-column>

		 
		 <?php include "projects/e4p/forms/$path/index.php"; ?>


 	</inner-column>

 </section>

	<?php } else { ?>
		<section class="e4p-form">
 	
 	<inner-column>

		 
		 <h1 class="strong-voice">
		 	Form does not exist. 
		 </h1>


 	</inner-column>

 </section>
	<?php } ?>

	





 		


