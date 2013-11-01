<?php


?>

<?php get_header(); ?>

			<main id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="eightcol first clearfix" role="main">
								<header>
									<h1 class="page-title"> <?php the_title() ?></h1>
								</header>
								<?php $pastCat = "";
								 $query = new WP_Query( 'post_type=link' ); ?>
								<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
								<?php 
									
									$currentCats = get_the_category();
									
									foreach($currentCats as $currentCat){
									  
									if ($currentCat->slug !== $pastCat){
									echo "<section><h2>". $currentCat->cat_name . "</h2>";
									$queryArgs = array(
										"post_type" => "link",
										"tax_query" => array(
											array(
												"taxonomy" => $currentCat->taxonomy,
												"field"    => "slug",
												"terms"	   => $currentCat->slug
											)
										)
									);
								 ?>
								 <ul>
								<?php $queryCat = new WP_Query( $queryArgs );  ?>
							<?php if ($queryCat->have_posts()) :  while ($queryCat->have_posts()) : $queryCat->the_post(); ?>

							
									
									
										
										<?php  if ( get_post_meta( get_the_ID(), 'wpcf-link', true ) ) : ?>
   									 <?php 
   									 $link = get_post_meta( get_the_ID(), 'wpcf-link', true ); 									?>
   									<li> <a target="_blank" href="<?php echo $link ?>"><?php the_title(); ?></a></li>
   									 <?php endif;?>
										
										
						
									<?php the_content();  ?>
									
								

							<?php endwhile; endif;$pastCat = $currentCat->slug; }}  ?>
								 </ul></section>
							<?php endwhile; endif; ?>
								
						</main> <?php // end #main ?>


				</div> <?php // end #inner-content ?>

			</div> <?php // end #content ?>

<?php get_footer(); ?>