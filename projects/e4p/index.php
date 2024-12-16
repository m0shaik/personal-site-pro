
	
<?php

function getForm() {
	$form = NULL;

	if ( isset($_GET["form"]) ) {
		$form = $_GET["form"];
	}

	return $form;
}


?>



<head>
	<link rel="stylesheet" href='styles/styles.css'>
</head>



<body>
	<?php 
			include 'partials/header.php'
	?>
	<main>


		<div class="inner-column">

			<?php

				if (!getForm()) {

					 include 'partials/list.php';

				} else {
					$form = getForm();
					include "forms/$form/index.php";
				}



			?>
	

		</div>





		<!--  -->

		<section class="links-section">
				<div class="inner-column">
					<nav>
						<ul>
							<li>
								<a href="../../resume/index.php" class="notice-voice">
									Resume
								</a>
							</li>

							<li>
								<a href="../../goals/index.php" class="notice-voice">
									Goals
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</section>	


</main>

		<?php 
			include 'partials/footer.php'
		 ?>

</body>
