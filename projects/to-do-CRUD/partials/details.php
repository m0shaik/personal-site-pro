<?php include('partials/movie_data.php'); ?>

<?php 

$id = "";
$pos = '';

if (isset($_GET["movie"]) ) {
	$id = $_GET["movie"];
}

foreach ($movieList as $movieItem) {

	if ($id == $movieItem['id']) {
		echo $movieItem['name'];
		
	}

}



if (isset($_POST['deleted']) ) {

	foreach ($movieList as $index => $movieItem) {

	if ($id == $movieItem['id']) {
		array_splice($movieList, $index, 1);

		$movieJson = json_encode($movieList);

		file_put_contents('movie.json', $movieJson);

		echo "deleted";
		
	}

}


	

}


?>

<form method="POST">
<button type='submit' name='deleted'>
	delete
</button>	

</form>