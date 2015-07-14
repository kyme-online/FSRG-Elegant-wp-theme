<?php
/**
 * Template Name: candleholder
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
											<h1>CANDLE HOLDER</h1>
											<!--div class="subpageline"></div-->
										</div>

										<a href="<?php echo home_url(); ?>" class="back"><img class="back" src="<?php echo get_template_directory_uri().'/images/back.png'; ?>" /></a>

									</div>

									<div id="candleholder">
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
																	<div class="item"><a href="/candleholderpost-1/" ><img alt="home accessories" src="<?php echo get_template_directory_uri().'/images/candleholder/JRA-8833S2-small.png'; ?>"/></a><p><a href="/candleholderpost-1/">JRA-8833S2</a></p></div>
																	<div class="item"><a href="/candleholderpost-2/"><img alt="home accessories" src="<?php echo get_template_directory_uri().'/images/candleholder/JRA-8860S2-small.png'; ?>"/></a><p><a href="/candleholderpost-2/">JRA-8860S2</a></p></div>
																	<div class="item"><a href="/candleholderpost-3/"><img alt="home accessories" src="<?php echo get_template_directory_uri().'/images/candleholder/JRA-9256-small.png'; ?>"/></a><p><a href="/candleholderpost-3/">JRA-9256</a></p></div>
																	<div class="item"><a href="/candleholderpost-4/"><img alt="home accessories" src="<?php echo get_template_directory_uri().'/images/candleholder/1654-718-small.png'; ?>"/></a><p><a href="/candleholderpost-4/">1654-718</a></p></div>
																	<div class="item"><a href="/candleholderpost-5/"><img alt="home accessories" src="<?php echo get_template_directory_uri().'/images/candleholder/JRA-8288-small.png'; ?>"/></a><p><a href="/candleholderpost-5/">JRA-8288</a></p></div>
																	<div class="item"><a href="/candleholderpost-6/"><img alt="home accessories" src="<?php echo get_template_directory_uri().'/images/candleholder/JRA-9272S2-small.png'; ?>"/></a><p><a href="/candleholderpost-6/">JRA-9272S2</a></p></div>
																</div>
													</p></li>

													<li><p>  <!-- TO ADD IMAGE, PLEASE COPY THIS BLOCK AND RENAME IMAGE.JPG -->
																 <div class="gallery-images">
																	<div class="item"><a href="/candleholderpost-7/" ><img alt="home accessories" src="<?php echo get_template_directory_uri().'/images/candleholder/02185-small.png'; ?>"/></a><p><a href="/candleholderpost-7/">02185</a></p></div>
																	<div class="item"><a href="/candleholderpost-8/"><img alt="home accessories" src="<?php echo get_template_directory_uri().'/images/candleholder/02187-small.png'; ?>"/></a><p><a href="/candleholderpost-8/">02187</a></p></div>
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

			

