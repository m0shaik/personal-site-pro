<?php include('partials/movie_data.php'); ?>

<h1>Latest Collection</h1>

<ul>

	<?php foreach ($movieList as $movie) { ?>


		<li class='movie'>
			<movie-card>
				<h2 class="name"><?=$movie["name"]?></h2>
				<a href="?page=detail&movie=<?=$movie['id']?>">View more.</a>
			</movie-card>
		</li>

	<?php } ?>
</ul>