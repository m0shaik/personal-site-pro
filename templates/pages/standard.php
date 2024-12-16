<?php 

	$pageData = jsonDecode($pageSlug);
	$sections = $pageData['sections'];
 ?>

 <?php include "templates/modules/header/header.php"; ?>

<main>
	<?php 

		foreach ($sections as $section) {

			$module = $section['module'];

			include "templates/modules/$module/$module.php";
		}
	?>
</main>

 <?php include "templates/modules/footer/footer.php"; ?>
