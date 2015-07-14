<?php
/**
 * Template Name: mobile-furniture 
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
								<a href="<?php echo home_url(); ?>"> <img alt="dubai furnitures" src="<?php echo get_template_directory_uri().'/images/mobile-back.png'; ?>"/> </a>
							</div>

							<div style="clear:both"></div>  

							<div id="mobile-furniture">

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

									<h1>Living Room</h1>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/livingroom/FS-11000-livingroom.jpg'; ?>"/> <br/>
										<img alt="dubai furnitures" src="<?php echo get_template_directory_uri().'/images/livingroom/W2323A-XM0193A-livingroom.jpg'; ?>"/> <br/>
										<img alt="dubai ligthings" src="<?php echo get_template_directory_uri().'/images/livingroom/FS-11120-livingroom.jpg'; ?>"/> <br/>
										<img alt="dubai sculptures " alt="dubai accessories" src="<?php echo get_template_directory_uri().'/images/livingroom/F2311A-XM0328-livingroom.jpg'; ?>"/> <br/>
										<img alt="dubai history photograph" src="<?php echo get_template_directory_uri().'/images/livingroom/F2320-XM0174-livingroom.jpg'; ?>"/> <br/>
										<img alt="dubai lightings" src="<?php echo get_template_directory_uri().'/images/livingroom/FS-11000-livingroom.jpg'; ?>"/> <br/>
										<img alt="dubai home furnitures" src="<?php echo get_template_directory_uri().'/images/livingroom/FS-11060-livingroom.jpg'; ?>"/> <br/>
										<img alt="dubai framing" src="<?php echo get_template_directory_uri().'/images/livingroom/FS-11080-livingroom.jpg'; ?>"/> <br/>
										<img alt="framing in dubai" src="<?php echo get_template_directory_uri().'/images/livingroom/FS-11110-livingroom.jpg'; ?>"/> <br/>
										<img alt="dubai accent furnitures" src="<?php echo get_template_directory_uri().'/images/livingroom/FS-11120-livingroom.jpg'; ?>"/> <br/>
										<img alt="vase" src="<?php echo get_template_directory_uri().'/images/livingroom/W2206-XM0169-livingroom.jpg'; ?>"/> <br/>
										
										<br/><br/><br/>

									<h1> Accent Furniture </h1>	
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/accentfurniture/EUR-02-0158.jpg'; ?>"/> <br/>
										<img alt="dubai furnitures" src="<?php echo get_template_directory_uri().'/images/accentfurniture/FC-11000.jpg'; ?>"/> <br/>
										<img alt="dubai lightings" src="<?php echo get_template_directory_uri().'/images/accentfurniture/FC-11020.jpg'; ?>"/> <br/>
										<img alt="dubai sculptures" src="<?php echo get_template_directory_uri().'/images/accentfurniture/FC-11050.jpg'; ?>"/> <br/>
										<img alt="dubai history photograph" src="<?php echo get_template_directory_uri().'/images/accentfurniture/FC-11061.jpg'; ?>"/> <br/>
										<img alt="dubai lightings" src="<?php echo get_template_directory_uri().'/images/accentfurniture/FC-11101.jpg'; ?>"/> <br/>
										<img alt="dubai framing" src="<?php echo get_template_directory_uri().'/images/accentfurniture/FC-11180.jpg'; ?>"/> <br/>
										<img alt="framing in dubai" src="<?php echo get_template_directory_uri().'/images/accentfurniture/FC-11190.jpg'; ?>"/> <br/>
										<img alt="dubai photograph" src="<?php echo get_template_directory_uri().'/images/accentfurniture/FC-11200.jpg'; ?>"/> <br/>

							</div>


					</div>





















