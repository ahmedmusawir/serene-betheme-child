<?php
/**
 * The main template file.
 *
 * @package Betheme
 * @author Muffin group
 * @link http://muffingroup.com
 */

get_header();


?>

<!-- #Content -->
<div id="Content">
	<div class="content_wrapper clearfix">


		<!-- .sections_group -->
		<div class="sections_group">
			
			
			<section class="container">

				<div id="primary" class="content-area col-md-9 col-lg-9">
					<main id="main" class="site-main" role="main">

					<?php
					if ( have_posts() ) : ?>

						<header class="page-header">
							<?php
								the_archive_title( '<h1 class="page-title">', '</h1>' );
								the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>
						</header><!-- .page-header -->

						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();
							
						?>
							<article class="" id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
								


									<header class="entry-header">
										<?php
											if ( is_single() ) {
												the_title( '<h1 class="entry-title">', '</h1>' );
											} else {
												the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
											}
										if ( 'post' === get_post_type() ) : ?>
										<div class="entry-meta">
											<?php //moose_frame_posted_on(); ?>
										</div><!-- .entry-meta -->
										<?php
										endif; ?>
									</header><!-- .entry-header -->

								<div class="entry-content col-sm-6 col-md-6 col-lg-6">
									
									<?php if ( has_post_thumbnail() ) : ?> 
										
										<div class="featured-img">
											<a href="<?php the_permalink(); ?>" title=""><?php the_post_thumbnail( 'full', array('class' => 'img-responsive'));  ?></a>

										</div>

									<?php endif; ?>
							
									<div class="tax-block">

						<!--================================
						=            MOOSE CODE            =
						=================================-->
						
						
						
												

										<table class="table table-condensed">
											<tbody>

												<tr>
												<td>TYPE:</td><td><?php echo get_the_term_list( $post->ID, 'property-type', '<span class="area_item"> ', ', ', '</span>' ) ?></td>
												<td>AREA:</td><td><?php echo get_the_term_list( $post->ID, 'area', '<span class="area_item"> ', ', ', '</li>' ) ?></td>
												</tr>
													
												<tr>
												<td>TENURE:</td><td><?php echo get_the_term_list( $post->ID, 'tenure', '<span class="area_item"> ', ', ', '</span>' ) ?></td>
												<td>TOTAL UNITS:</td><td><?php echo get_the_term_list( $post->ID, 'total-units', '<span class="area_item"> ', ', ', '</span>' ) ?></td>
												</tr>

												<tr>
												<td>DEVELOPER:</td><td><?php echo get_the_term_list( $post->ID, 'developer', '<span class="area_item"> ', ', ', '</span>' ) ?></td>
												<td>COMPLETION:</td><td><?php echo get_the_term_list( $post->ID, 'completion', '<span class="area_item"> ', ', ', '</span>' ) ?>
												</td>
												</tr>

											</tbody>
										</table>
										



						<!--====  End of MOOSE CODE  ====-->




									</div>		



									
									<article class="only-text">
										<?php
											the_excerpt( sprintf(
												/* translators: %s: Name of current post. */
												wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'moose-frame' ), array( 'span' => array( 'class' => array() ) ) ),
												the_title( '<span class="screen-reader-text">"', '"</span>', false )
											) );
											wp_link_pages( array(
												'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'moose-frame' ),
												'after'  => '</div>',
											) );
										?>


										<footer class="entry-footer">

											<button type="button" class="button  button_black button_js" data-toggle="modal" data-target="#myModal">Register Now!</button>
											<a class="button  button_grey button_js" href="<?php the_permalink(); ?>" title=""><span class="button_label">Read More</span></a>
											<!-- <a class="button  button_black button_js" href="http://serene.local/condo-3-2/" title=""><span class="button_label">Read More</span></a> -->

										</footer><!-- .entry-footer -->

									</article>
								</div><!-- .entry-content -->

							</article><!-- #post-## -->

						<?php

						endwhile;
						the_posts_navigation();
					else :
						// get_template_part( 'template-parts/content', 'none' );
						echo "<h2>No Results Found ... Please Try Another Way ...</h2>";
					endif; ?>

					</main><!-- #main -->
				</div><!-- #primary -->
				<div class="sidebar col-md-3 col-lg-3">

					<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
					    <ul id="sidebar">
					        <?php dynamic_sidebar( 'sidebar-1' ); ?>
					    </ul>
					<?php endif; ?>

				</div>
				
			</section> <!-- End Container -->		
			
			
		</div>	
		
		<!-- .four-columns - sidebar -->
		<?php //get_sidebar( 'offer' ); ?>

	</div>
</div>

<?php get_footer(); ?>