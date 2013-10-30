

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<main id="main" class="eightcol first clearfix" role="main">
								<?php $query = new WP_Query( 'post_type=interview_video' ); ?>
							<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title"><?php the_title(); ?>Hello</h1>



								</header> <?php // end article header ?>
								<?php  if ( get_post_meta( get_the_ID(), 'wpcf-interview-video', true ) ) : ?>
   									 <?php 
   									 $embedded_video_url = get_post_meta( get_the_ID(), 'wpcf-interview-video', true );
   									
   									 $embedded_video = wp_oembed_get($embedded_video_url);
   									 print $embedded_video;
?>
								<?php endif;?>
								
								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content();  ?>
									
								</section> <?php // end article section ?>


							</article> <?php // end article ?>

							<?php endwhile; endif; ?>
								
						</main> <?php // end #main ?>


				</div> <?php // end #inner-content ?>

			</div> <?php // end #content ?>

<?php get_footer(); ?>
