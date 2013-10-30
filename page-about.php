

<?php get_header(); ?>

			<div id="content">
				<div id="front-page" class="front-page">
					<?php 
					    if ( has_post_thumbnail() ) { 
					        the_post_thumbnail( 'front-page' ); 
					    } 
					?>
				</div>
				<div id="inner-content" class="wrap clearfix">

						<main id="main" class="eightcol first clearfix" role="main">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article id="page-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">
							
								<header class="article-header">

									<h1 class="page-title"><?php the_title(); ?></h1>


								</header> <?php // end article header ?>

								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
								</section> <?php // end article section ?>

								<footer class="article-footer">

								</footer> <?php // end article footer ?>

							</article> <?php // end article ?>
							<?php endwhile; endif; ?>

						</main> <?php // end #main ?>

				</div> <?php // end #inner-content ?>

			</div> <?php // end #content ?>

<?php get_footer(); ?>
