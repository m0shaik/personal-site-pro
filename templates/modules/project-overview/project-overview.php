<?php 

	$project = getProject();

 ?>


<section class="project-overview">
	
	<inner-column>

		<h2 class="strong-voice">
			Overview
		</h2>

		<p>
			<?=$project['overview']  ?? "This is the project overview?"?>
		</p>

		<a href="<?=$project['live-link']  ?? "#"?>" class="strong-voice"    >
			Live Link
		</a>
		
	</inner-column>

</section>
