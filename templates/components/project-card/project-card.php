<?php 

	$projectName = $project["name"] ?? "Project Name";

	$projectDate = $project["date"] ??  "01/01/01";

	$projectDescription = $project["description"] ?? "Lorem LoremLorem Lorem Lorem";

	$projectLink = $project["detail-link"] ?? "path/to/projects";

	$projectImage= $project["image"] ??  "images/landscape.jpg";

?>

<project-card>
	<h2 class="strong-voice">
		<?=$projectName?>
	</h2>
	<p class="project-date">
		<?=$projectDate?>
	</p>
	

	<a href="<?=$projectLink?>">
		<picture>
			<img src="<?=$projectImage?>" alt="">
		</picture>
	</a>

	<p class="project-description">
		<?=$projectDescription?>
	</p>
</project-card>