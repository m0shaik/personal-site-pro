<?php 

	$project = getProject();

 ?>

 <section class="project-about">
 	<inner-column>
 		<h1 class="loud-voice">
 			<?=$project['name'] ?? "Project Name"?>
 		</h1>

 		<div class="wh-cards">
 			<div class="when-card">
 				<h2 class="firm-voice">
 					WHEN?
 				</h2>
 				<p>
 					<?=$project['when'] ?? "When Info?"?>
 				</p>
 			</div>


 			<div class="what-card">
 				<h2 class="firm-voice">
 					WHAT?
 				</h2>
 				<p >
 					<?=$project['what']  ?? "What Info?"?>
 				</p>
 			</div>


 			<div class="where-card">
 				<h2 class="firm-voice">
 					WHERE?
 				</h2>
 				<p>
 					<?=$project['where']  ?? "Where Info?"?>
 				</p>
 			</div>


 		</div>
 	</inner-column>
 </section>