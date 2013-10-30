<?php
/*
Template Name: Custom Page Example
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="eightcol first clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title"><?php the_title(); ?></h1>

								</header> <?php // end article header ?>

								<section class="entry-content clearfix map" itemprop="articleBody">
									<?php the_content(); ?>
								</section> <?php // end article section ?>
								<section class="maps_form">
									<?php gravity_form("2", true, true, false, null, true); ?>
								</section>

								<footer class="article-footer">
									

								</footer> <?php // end article footer ?>

							</article> <?php // end article ?>

							<?php endwhile; else : ?>

							<?php endif; ?>

						</div> <?php // end #main ?>

				</div> <?php // end #inner-content ?>

			</div> <?php // end #content ?>

<?php get_footer(); ?>
