<?php 
	
	$heading = $section['heading'];
	$experiences = $section['experiences'];

?>


<section class="resume-list">
	<inner-column>
		<h2 class="loud-voice"><?=$heading?></h2>
		<ul class="experiences">
			<?php foreach ($experiences as $experience){ 

				$expHeading = $experience['heading'];
				$expLocation = $experience['location'];
				$expDate = $experience['date'];
				$expDetails = $experience['details'];


			?>



			<li class="experience">

				<div class="experience-heading">
					<h3 class="strong-voice"><?=$expHeading?></h3>
					
					<h3 class="light-voice"><?=$expLocation?></h3>
					<p>
						<?=$expDate?>
					</p>
				</div>

				<ul class="experience-details">
					<?php foreach($expDetails as $detail) { ?>
						<li class="resume-details">
							<p><?=$detail?></p>
						</li>
					<?php } ?>
				</ul>

			</li>

			<?php } ?>

		</ul>

	</inner-column>
</section>