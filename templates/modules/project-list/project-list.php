<?php 

	$projects = getProjectsData();


?>

<section class="project-list">
	
	<inner-column>
		<ul>
			<?php foreach ($projects as $project){ ?>

				<li>
					

					<?php include "templates/components/project-card/project-card.php" ?>

				</li>

			<?php } ?> 
		</ul>
	</inner-column>
</section>