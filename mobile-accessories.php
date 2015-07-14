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

									<h1>Vases</h1>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/vases/JRA-8354.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/vases/JRA-8666S3.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/vases/JRA-8743.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/vases/JRA-8815.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/vases/JRA-8817S2.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/vases/JRA-8823.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/vases/JRA-8826S3.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/vases/JRA-8889.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/vases/JRA-8904.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/vases/JRA-8964.jpg'; ?>"/> <br/>
										
										<br/><br/><br/>

									<h1> Sculpture </h1>	
										<img alt="dubai sculpture" src="<?php echo get_template_directory_uri().'/images/sculptures/JRA-8398.jpg'; ?>"/> <br/>
										<img alt="dubai sculpture" src="<?php echo get_template_directory_uri().'/images/sculptures/JRA-8545.jpg'; ?>"/> <br/>
										<img alt="dubai sculpture" src="<?php echo get_template_directory_uri().'/images/sculptures/JRA-8765.jpg'; ?>"/> <br/>
										<img alt="dubai sculpture" src="<?php echo get_template_directory_uri().'/images/sculptures/JRA-8769.jpg'; ?>"/> <br/>
										<img alt="dubai sculpture" src="<?php echo get_template_directory_uri().'/images/sculptures/JRA-9069.jpg'; ?>"/> <br/>
										<img alt="dubai sculpture" src="<?php echo get_template_directory_uri().'/images/sculptures/JRA-9099.jpg'; ?>"/> <br/>
										<img alt="dubai sculpture" src="<?php echo get_template_directory_uri().'/images/sculptures/JRA-9217.jpg'; ?>"/> <br/>
										<img alt="dubai sculpture" src="<?php echo get_template_directory_uri().'/images/sculptures/JRA-9262.jpg'; ?>"/> <br/>

										<br/><br/><br/>

									<h1> Candle holder </h1>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/candleholder/JRA-8218.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/candleholder/JRA-8449S2.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/candleholder/JRA-8456.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/candleholder/JRA-8515S3.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/candleholder/JRA-8581.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/candleholder/JRA-8597.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/candleholder/JRA-8646.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/candleholder/JRA-8649.jpg'; ?>"/> <br/>
										
										<br/><br/><br/>

									<h1> Mirror </h1>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/mirror/bliss-m-11010.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/mirror/regattaII-M-11041.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/mirror/fusion-m-11050.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/mirror/vera-m-11151.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/mirror/tori-l-m-11190.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/mirror/sienna-m-11231.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/mirror/pompeii-m-11350.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/mirror/mesa-ll-m-13112.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/mirror/M-11040.jpg'; ?>"/> <br/>
									
							</div>


					</div> 





















