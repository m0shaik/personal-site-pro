<?php 

	$e4psData = gete4psdata();


 ?>

 <section class="e4p-list">

 	<inner-column>
 		
 		<ul>
 			<?php foreach ($e4psData as $exercise) {

 				if (isset($exercise['path'])) {
 			 ?>

 				<li class="e4p-card">
 					
 					

 						<a href="?page=e4p-detail&id=<?=$exercise['number']?>">
 							
					 		<h2 class="attention-voice">
					 			<?=$exercise['name']?>
					 		</h2>

					 		<p>
					 			<?=$exercise['description']?>
					 		</p>

 						</a>


 				</li>

 			<?php } } ?>

 		</ul>

 	</inner-column>

 </section>