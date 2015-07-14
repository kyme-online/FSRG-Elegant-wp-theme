<?php
/**
 * Template Name: mirror
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
											<h1>MIRROR</h1>
											<!--div class="subpageline"></div-->
										</div>

										<a href="<?php echo home_url(); ?>" class="back"><img class="back" src="<?php echo get_template_directory_uri().'/images/back.png'; ?>" /></a>

									</div>


									<div id="mirror">
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

													<li><p>  <!-- TO ADD IMAGE, PLEASE COPY THIS BLOCK AND RENAME IMAGE.JPG -->
																 <div class="gallery-images">
																	<div class="item"><a href="/mirrorpost-1/" ><img alt="home mirror" src="<?php echo get_template_directory_uri().'/images/mirror/bliss-m-11010-small.png'; ?>"/></a><p><a href="/mirrorpost-1/">Bliss-m-11010</a></p></div>           
																	<div class="item"><a href="/mirrorpost-2/" ><img alt="home mirror" src="<?php echo get_template_directory_uri().'/images/mirror/regattaII-M-11041-small.png'; ?>"/></a><p><a href="/mirrorpost-2/">Regatta II-M-11041</a></p></div> 
																	<div class="item"><a href="/mirrorpost-3/" ><img alt="home mirror" src="<?php echo get_template_directory_uri().'/images/mirror/fusion-m-11050-small.png'; ?>"/></a><p><a href="/mirrorpost-3/">Fusion-m-11050</a></p></div> 
																	<div class="item"><a href="/mirrorpost-4/" ><img alt="home mirror" src="<?php echo get_template_directory_uri().'/images/mirror/vera-m-11151-small.png'; ?>"/></a><p><a href="/mirrorpost-4/">Vera-m-11151</a></p></div> 
																	<div class="item"><a href="/mirrorpost-5/" ><img alt="home mirror" src="<?php echo get_template_directory_uri().'/images/mirror/tori-l-m-11190-small.png'; ?>"/></a><p><a href="/mirrorpost-5/">Tori l-m-11190</a></p></div>           
																	<div class="item"><a href="/mirrorpost-6/" ><img alt="home mirror" src="<?php echo get_template_directory_uri().'/images/mirror/sienna-m-11231-small.png'; ?>"/></a><p><a href="/mirrorpost-6/">Sienna-m-11231</a></p></div> 
																</div>
													</p></li>

													<li><p>  <!-- TO ADD IMAGE, PLEASE COPY THIS BLOCK AND RENAME IMAGE.JPG -->
																 <div class="gallery-images">
																	<div class="item"><a href="/mirrorpost-7/" ><img alt="home mirror" src="<?php echo get_template_directory_uri().'/images/mirror/pompeii-m-11350-small.png'; ?>"/></a><p><a href="/mirrorpost-7/">Pompeii-m-11350</a></p></div>           
																	<div class="item"><a href="/mirrorpost-8/" ><img alt="home mirror" src="<?php echo get_template_directory_uri().'/images/mirror/mesa-ll-m-13112-small.png'; ?>"/></a><p><a href="/accentfurniturepost-8/">Mesa-ll-m-13112</a></p></div> 
																	<div class="item"><a href="/mirrorpost-9/" ><img alt="home mirror" src="<?php echo get_template_directory_uri().'/images/mirror/soleil-m-14380-small.png'; ?>"/></a><p><a href="/mirrorpost-9/">Soleil-m-14380</a></p></div> 
																	<div class="item"><a href="/mirrorpost-10/"><img alt="home mirror" src="<?php echo get_template_directory_uri().'/images/mirror/bacall-m-14391-small.png'; ?>"/></a><p><a href="/mirrorpost-10/">Bacall-m-14391</a></p></div> 
																	<div class="item"><a href="/mirrorpost-11/"><img alt="home mirror" src="<?php echo get_template_directory_uri().'/images/mirror/miranda-m-14401-small.png'; ?>"/></a><p><a href="/mirrorpost-11/">Miranda-m-14401</a></p></div>           
																	<div class="item"><a href="/mirrorpost-12/"><img alt="home mirror" src="<?php echo get_template_directory_uri().'/images/mirror/casablanca-m-14405-small.png'; ?>"/></a><p><a href="/mirrorpost-12/">Casablanca-m-14405</a></p></div> 
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

			

