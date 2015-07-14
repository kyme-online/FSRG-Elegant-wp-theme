<?php
/**
 * Template Name: services
 *
 * Selectable from a dropdown menu on the edit page screen.
 *
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>


				<div id="content-service">

					
								<div class="frame-service">

										<div id="service">

												<?php if ( have_posts() ): ?>
															<!--h2>Latest Posts</h2-->	
															<ol>

															<?php while ( have_posts() ) : the_post(); ?>
																<li>
																	<article>
																		<a class="image-title" href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>	<div class="service-line"></div> <br/> 
																		<!--<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?> -->
																	</article><p><?php the_content(); ?></p>
																	
																</li>
															<?php endwhile; ?>
															</ol>
															<?php else: ?>
															<h2>No posts to display</h2>
												<?php endif; ?>

										</div>
								</div>

										<div class="rightframe-service">
				 
														<div class="rightcontent">
															
																		<div class="service-img1">
																			<img alt="dubai lightings" src="<?php echo get_template_directory_uri().'/images/service-img1.png'; ?>" />

																		</div>

																		<div class="service-img2">
																			<img alt="dubai furnitures" src="<?php echo get_template_directory_uri().'/images/service-img2.png'; ?>" />

																		</div>

																		<div class="service-img3">
																			<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/service-img3.png'; ?>" />

																		</div>

																		<div class="service-img4">
																			<img alt="dubai framing" src="<?php echo get_template_directory_uri().'/images/service-img4.png'; ?>" />

																		</div>

																<div style="clear:both"></div>
														</div>


									     </div>

							     		<div style="clear:both"></div>

						


				</div>

					<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>

			<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57635748-1', 'auto');
  ga('send', 'pageview');

</script>

			

