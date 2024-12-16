<?php 

include 'functions.php';

$pageSlug = getPage();

$indexPageData = jsonDecode($pageSlug);

$pageTemplate = $indexPageData['template'] ?? "standard";

 ?>




<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $pageSlug ?></title>
	<link rel="stylesheet" href="styles/site.css">
</head>
<body class="<?= $pageSlug ?>-page">


	<?php include "templates/pages/$pageTemplate.php"; ?>
	
</body>
</html>