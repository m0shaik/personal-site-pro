<?php 
include ("partials/movie_data.php");
	$name = "";
	$hasName = false;
	$typeError = false;

	if (isset($_POST["add"]) ) {

		if (isset($_POST["name"]) ) {
			$name = $_POST["name"];

			if ( strlen($name) > 0) {
				$hasName = true;
			} else {
				$typeError = "Please add a name.";

			}
	}

	$newMovie = [
		"id" => uniqid('movie'),
		"name" => $name, 

	];

	array_push($movieList, $newMovie);

	$json = json_encode($movieList);

	file_put_contents('movie.json', $json);

	}

 ?>




<h1>Please save your movie name in the form below.</h1>

<form method="POST">

	<field>
		<label>Name</label>
		<input type="text" name="name">

	
		<button type='submit' name='add'>
			Submit
		</button>
			

	</field>


</form>