<?php 

	$data = convertJson($home);

 ?>


<main>

	<h1><?= $data['title'] ?></h1>

	<p> <?= $data['description'] ?></p>


</main>