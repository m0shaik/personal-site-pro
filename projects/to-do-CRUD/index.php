<?php

function getPage() {
	$page = '';

	if ( isset($_GET["page"]) ) {
		$page = $_GET["page"];

	} else {
		$page = "home";
	}

	return $page;
}


?>


<!doctype html>

<html lang="en">
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Movie record</title>
		<link rel="stylesheet" href="styles/style.css">
	</head>

	<body>
		<div class="inner-column">
			<header>
				<nav class='site-menu'>
					<a href="?page=home">Home</a>
					<a href="?page=list">Movie Section</a>
					<a href="?page=create">Movie Info</a>
				</nav>
			</header> 

			<main class='page-content'>


			<?php
				if (getPage() == "home") {
					include('partials/home.php');
				}

				if (getPage() == "list") {
					include('partials/list.php');
				}

				if (getPage() == "detail") {
					include('partials/details.php');
				}

				if (getPage() == "create") {
					include('partials/create.php');
				}

			?>
			</main>

		</div>


	</body>
</html>
