<?php 

$diptychImage = $section['image'];

$diptychParagraph = $section['paragraph'];



 ?>



<section class="graphic-diptych">
	<inner-column>

		<picture>
			<img src="<?= $diptychImage ?>" alt="">
		</picture>


		<p>
			<?= $diptychParagraph ?>
		</p>


	</inner-column>
</section>