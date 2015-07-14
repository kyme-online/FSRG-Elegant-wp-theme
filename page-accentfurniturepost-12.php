<?php
/**
 * Template Name: accentfurniturepost-12
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


				<div class="headerproduct">

					<div id="subpage-content">
						<h1>Accent Furniture</h1>
						<!--div class="subpageline"></div-->
					</div>

					<a href="/accentfurniture/" class="back"><img class="back" src="<?php echo get_template_directory_uri().'/images/back.png'; ?>" /></a>

				</div>

				<div id="content-post">


									<div id="contentpost-img">                                           
										<img alt="home accessories" src="<?php echo get_template_directory_uri().'/images/accentfurniture/FC-11250.jpg'; ?>" />							

									
									</div>

								

									<div id="contentpost-content">
											
					 								<?php if ( have_posts() ): ?>
															<!--h2>Latest Posts</h2-->	
															<ol>

															<?php while ( have_posts() ) : the_post(); ?>
																<li>
																	<article>
																		<a class="image-title" href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a> <br/> 
																		<!--<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?> -->
																	</article><p><?php the_content(); ?></p>
																	
																</li>
															<?php endwhile; ?>
															</ol>
															<?php else: ?>
															<h2>No posts to display</h2>
													<?php endif; ?>


									     </div>

							     	

							     	<div style="clear:both"></div>



				</div>

					<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>

			

