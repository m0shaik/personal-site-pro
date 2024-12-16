<?php 

	$substack_url = "https://shaikhm.substack.com";

	$articles = get_substack_articles($substack_url);


 ?>

 <section class="blogs-list">
 	<inner-column>
 		<ul>
 			<?php foreach ($articles as $article) { 
 				$image = "images/landscape.jpg";

 				 if ($article['image'] !==  "" ) {
 				 	$image = $article['image'];
 				 } 
 			?>



 				<li class="article-card">
 					
 					<h3 class="light-voice">
 						<a href="<?=$article['link']?>">
 							<?=$article['title']?>
	 					 </a>
 					</h3>

 					<picture>
 						<img src="<?=$image?>" alt="">
 					</picture>



 					<p class="light-voice">

 						<?=$article['date']?>
 					</p>


 				</li>

 			<?php } ?>
 		</ul>
 	</inner-column>
 </section>