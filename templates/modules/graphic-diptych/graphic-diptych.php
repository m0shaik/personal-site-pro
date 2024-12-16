<?php 

	$imageDiptych = $section['image'];

	$paraDiptych = $section['description'] ?? "This is a graphic dyptich paragraph, which will conatain information about relevant stuff.";

 ?>



<section class="graphic-diptych">
	<inner-column>
		<picture>
			<img src="images/<?= $imageDiptych ?>" alt="">
		</picture>

		<p>
			<?= $paraDiptych ?>
		</p>
	</inner-column>
</section>