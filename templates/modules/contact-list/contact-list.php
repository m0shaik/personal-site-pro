<?php

	$contactList = $section['contacts'];

?>

<section class="contact-list">
	<inner-column>
		<ul>
			<?php foreach ($contactList as $contact)  { ?>


				<li>
					<a href="<?=$contact["link"]?>" target=”_blank”>
						<picture>
							<img src="<?=$contact["image"]?>" alt="<?=$contact["name"]?>">
						</picture>
					</a>
				</li>

			<?php } ?>
		</ul>
	</inner-column>
</section>