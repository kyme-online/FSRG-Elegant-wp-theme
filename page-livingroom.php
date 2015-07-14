<?php
/**
 * Template Name: livingroom  
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

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/jquery.pajinate.js'; ?>"></script>

		<script type="text/javascript">
			$(document).ready(function(){
				$('#paging_container3').pajinate({
					items_per_page : 3,
					item_container_id : '.alt_content',
					nav_panel_id : '.alt_page_navigation'
					
				});
			});	
			
		</script>

				<div id="content-image">

						<div id="bodycontent">
								
								<div id="gallery">

									<div class="headertitle">

										<div id="subpage-content">
											<h1>LIVINGROOM</h1>
											<!--div class="subpageline"></div-->
										</div>

										<a href="<?php echo home_url(); ?>" class="back"><img class="back" src="<?php echo get_template_directory_uri().'/images/back.png'; ?>" /></a>

									</div>

									<div id="livingroom">
															<?php if ( have_posts() ): ?>
															<!--h2>Latest Posts</h2-->	
															<ol>

															<?php while ( have_posts() ) : the_post(); ?>
																<li>
																	<article>
																		<!--a class="image-title" href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a><br/--!> 
																		<!--<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?> -->
																	</article><p><?php the_content(); ?></p>
																	
																</li>
															<?php endwhile; ?>
															</ol>
															<?php else: ?>
															<h2>No posts to display</h2>
												<?php endif; ?>

									</div>

										<div id="paging_container3" class="container">
											
												<ul class="alt_content"> 

													<li><p>  <!-- TO ADD IMAGE, PLEASE COPY THIS BLOCK AND RENAME IMAGE.JPG /PNG -->
																 <div class="gallery-content">
																	<div class="item"><a href="/livingroompost-1/" ><img alt="dubai furniture" src="<?php echo get_template_directory_uri().'/images/livingroom/FS-11000-small-livingroom.png'; ?>"/></a><p><a href="/livingroompost-1/">FS-11000</a></p></div>
																	<div class="item"><a href="/livingroompost-2/" ><img alt="dubai furniture" src="<?php echo get_template_directory_uri().'/images/livingroom/W2323A-XM0193A-small-livingroom.png'; ?>"/></a><p><a href="/livingroompost-2/">W2323A-XM0193A</a></p></div>
																	<div class="item"><a href="/livingroompost-3/" ><img alt="dubai furniture" src="<?php echo get_template_directory_uri().'/images/livingroom/FS-11120-small-livingroom.png'; ?>"/></a><p><a href="/livingroompost-3">FS-11120</a></p></div>
																	<div class="item"><a href="/livingroompost-4/" ><img alt="dubai furniture" src="<?php echo get_template_directory_uri().'/images/livingroom/3330-082-A-small-livingroom.png'; ?>"/></a><p><a href="/livingroompost-4">3330-082-A</a></p></div>
																	<div class="item"><a href="/livingroompost-5/" ><img alt="dubai furniture" src="<?php echo get_template_directory_uri().'/images/livingroom/FS-11130-A-GL06.png'; ?>"/></a><p><a href="/livingroompost-5">FS-11130-A-GL06</a></p></div>
																	<div class="item"><a href="/livingroompost-6/" ><img alt="dubai furniture" src="<?php echo get_template_directory_uri().'/images/livingroom/ARISOFA-small-livingroom.png'; ?>"/></a><p><a href="/livingroompost-6">ARISOFA</a></p></div>
																<div style="clear:both"></div> 
																</div> 
													</p></li>

													<li><p>	  <!-- TO ADD IMAGE, PLEASE COPY THIS BLOCK AND RENAME IMAGE.JPG /PNG -->
																 <div class="gallery-content">
																	<div class="item"><a href="/livingroompost-7/" ><img alt="dubai furniture" src="<?php echo get_template_directory_uri().'/images/livingroom/BELLAGIOSOFA-small-livingroom.png'; ?>"/></a><p><a href="/livingroompost-7/">BELLAGIOSOFA</a></p></div>
																	<div class="item"><a href="/livingroompost-8/" ><img alt="dubai furniture" src="<?php echo get_template_directory_uri().'/images/livingroom/COCOSWIVELCHAIR-small-livingroom.png'; ?>"/></a><p><a href="/livingroompost-8/">COCO SWIVEL CHAIR</a></p></div>
																	<div class="item"><a href="/livingroompost-9/" ><img alt="dubai furniture" src="<?php echo get_template_directory_uri().'/images/livingroom/CORSET-CHR-small-livingroom.png'; ?>"/></a><p><a href="/livingroompost-9">CORSET-CHR</a></p></div>
																	<div class="item"><a href="/livingroompost-10/" ><img alt="dubai furniture" src="<?php echo get_template_directory_uri().'/images/livingroom/KUROSOFA-small-livingroom.png'; ?>"/></a><p><a href="/livingroompost-10">KURO SOFA</a></p></div>
																	<div class="item"><a href="/livingroompost-11/" ><img alt="dubai furniture" src="<?php echo get_template_directory_uri().'/images/livingroom/Mez-sofa-small-livingroom.png'; ?>"/></a><p><a href="/livingroompost-11">W2321-XM0300</a></p></div>
																
																</div>
													</p></li>

													
												</ul>

											<div class="alt_page_navigation"></div>
										</div>


					            </div>

								
                     					<div style="clear:both"></div>

						</div>


				</div>


				

					<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>

			

