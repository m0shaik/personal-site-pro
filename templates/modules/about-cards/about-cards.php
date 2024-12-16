<?php

	$cards = $section['cards'] ?? [

		"This part contains information about different topics.",
		"This part contains information about different topics.",
		"This part contains information about different topics."

	];
?>

<section class="about-cards">
	<inner-column>
		<ul>
			<?php foreach ($cards as $card) { ?>

				<li>
					<?php

					$cardContent = $card;

					 include "templates/components/standard-card/standard-card.php" ; ?>
				</li>

			<?php } ?>


		</ul>
	</inner-column>
</section>