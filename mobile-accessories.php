<?php
/**
 * Template Name: mobile-accessories
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




					<div class="subpage-mobilebody">

							<div class="mobile-back">
								<a href="<?php echo home_url(); ?>"> <img src="<?php echo get_template_directory_uri().'/images/mobile-back.png'; ?>"/> </a>
							</div>

							<div style="clear:both"></div>

							<div id="mobile-accessories">

									<?php if ( have_posts() ): ?>
															<!--h2>Latest Posts</h2-->
															<ol>

															<?php while ( have_posts() ) : the_post(); ?>
																<li>
																	<article>
																		<a class="mobile-subtitle" href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>	<div class="mobile-line"></div> <br/>
																		<!--<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?> -->
																	</article><p><?php the_content(); ?></p>

																</li>
															<?php endwhile; ?>
															</ol>
															<?php else: ?>
															<h2>No posts to display</h2>
												<?php endif; ?>

							</div>

							<div id="mobile-subpages-img">

									<h1></h1>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/1.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/2.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/3.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/4.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/5.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/6.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/7.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/8.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/9.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/10.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/11.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/12.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/13.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/14.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/15.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/16.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/17.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/18.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/19.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/20.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/21.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/22.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/23.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/24.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/25.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/26.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/27.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/28.jpg'; ?>"/> <br/>
										
										<br/><br/><br/>

							</div>


					</div>
