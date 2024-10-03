<?php 
	$pageSlug = getPage();
	$pageData = convertJson($pageSlug);
	$sections = $pageData['sections'];

 ?>


<main>

	<h1><?= $pageData['title'] ?></h1>

	<?php 
	foreach ($sections as $section) {
		$module= $section['module'];

	}
	include ("templates/modules/$module/$module.php")
	?>


</main>