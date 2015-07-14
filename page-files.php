<?php
/**
 * Template Name: files
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
//
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>


				<div id="content-download">

						
						
								<div class="download-frame">

									<div id="download-container">

										
											<div id="files-to-download">
												<?php 
												global $post; 
												if ( ! post_password_required( ) ) { 
												 
												 	query_posts( 'post_type=files');
		 												if (have_posts()) : 
														 while (have_posts()) : the_post(); 

		 														the_content(); 

		 													endwhile;  
		 														endif; 
												?>
											</div>

										<a href="<?php echo get_bloginfo('home'); ?>/unset.php" class="logout download-1" title="Logout">Logout</a>
										<br>

										
										<?php
										
										} else { 
										  echo "REQUIRES A PASSWORD";
										  echo get_the_password_form();
										} 
										?>
										

									</div>
										

											


								</div>

									

							     		<div style="clear:both"></div>

								
 
						


				</div>

					<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>

			

