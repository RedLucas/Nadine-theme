<?php


?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<main id="main" class="twelvecol first clearfix" role="main">
							
								<header class="article-header">
									
									<h1 class="page-title">
										
									   									 
   									
   									<?php the_title(); ?>
										
										
									</h1>



								</header> <?php // end article header ?>
								
								<section class="entry-content clearfix" itemprop="articleBody">
									<?php gravity_form("1", false, true, false, null, true); ?>
									
								</section> <?php // end article section ?>


							

								
						</main> <?php // end #main ?>


				</div> <?php // end #inner-content ?>

			</div> <?php // end #content ?>

<?php get_footer(); ?>