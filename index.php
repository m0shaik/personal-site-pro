

<?php 

	include ('functions.php');

	$pageSlug = getPage();


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $pageSlug ?></title>
</head>
<body>

	<?php include('templates/pages/standard.php') ?>
	
</body>
</html>