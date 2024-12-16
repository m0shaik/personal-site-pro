<?php 
	
	$heading = $section["heading"] ?? "Goal Heading";
	$goalsList = $section["goals"] ?? [
		"this is goal 1",
		"this is goal 2",
		"this is goal 3",
	];

 ?>

 <section class="goals">
 	<inner-column>
 		<h2 class="attention-voice"><?=$heading?></h2>
 		<ul class='titles'>

 			<?php foreach($goalsList as $goal) {

 		

 			?>


	
			<li>
				<p><?=$goal?></p>
			</li>
		

 				
 			<?php }?>
 		</ul>
 	</inner-column>
 </section>`