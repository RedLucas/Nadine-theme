<?php
/*
Template Name: Custom Page Example
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="eightcol first clearfix" role="main">
								<?php $query = new WP_Query( 'post_type=interview_video' ); ?>
							<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title"><?php the_title(); ?></h1>
									


								</header> <?php // end article header ?>
								<?php if( get_field( "interview_video" ) ): ?>
   									 <p><?php the_field( "interview_video
   									 " ); ?></p>
								<?php endif;?>
								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
								</section> <?php // end article section ?>


							</article> <?php // end article ?>

							<?php endwhile; endif; ?>

						</div> <?php // end #main ?>

						<?php get_sidebar(); ?>

				</div> <?php // end #inner-content ?>

			</div> <?php // end #content ?>

<?php get_footer(); ?>
