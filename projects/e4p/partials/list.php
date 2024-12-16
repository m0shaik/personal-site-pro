	
	<?php

	$formsList = [
			[
				"link" => "01-saying-hello",
				"name" => "Saying Hello"
			],
			[
				"link" => "02-number-character",
				"name" => "Character Count"
			],
			[
				"link" => "04-mad-lib",
				"name" => "Mad Lib"
			],
			[
				"link" => "05-simple-math",
				"name" => "Simple Math"
			],
			[
				"link" => "06-car-rental",
				"name" => "Car Rental"
			],
			[
				"link" => "07-area-of-rectangle",
				"name" => "Area of rectangle"
			],
			[
				"link" => "08-pizza-party",
				"name" => "Pizza Party"
			],

			[
				"link" => "09-painting-calculator",
				"name" => "Paint Calculator"
			],
			[
				"link" => "10-self-checkout",
				"name" => "Self Checkout"
			],
			[
				"link" => "11-currency-conversion",
				"name" => "Currency Conversion"
			],
						[
				"link" => "12-simple-interest",
				"name" => "Simple Interest"
			]





		]
	?>


	<section class="intro">


		<h1 class="attention-voice"> Welcome to my experimental forms page.</h1>

		<p>Below you will find different forms. Each form demonstrates my applicable knowledge of PHP, functions, delimiter, etc. </p>

	</section>

	<section class='forms-section'>
		<div class="inner-column">
			<nav>
				<ul>
					<?php foreach($formsList as $form) { 
						$link = $form['link'];
						$name = $form['name'];
						?>
					<li>
						<div class='link-container'>
							<a 
								href="?form=<?=$link?>"
								class='calm-voice'
							> 
							 <?=$name?>	
							</a>
						</div>
						<?php include 'partials/project-boxes.php' ?>
					</li>

				<?php }?>

				</ul>
			</nav>	

		</div>

	</section>