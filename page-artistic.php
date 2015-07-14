<?php
/**
 * Template Name: artistic
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
			$('a.back').live('click', function() { 
      		$('#paging_container3').find('a.previous_link').trigger('click'); 
	      return false;
	    </script>

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
											<h1>ARTISTIC PHOTOGRAPHS</h1>
											<!--div class="subpageline"></div-->
										</div>

										<a href="/artistic/" class="back"><img class="back" src="<?php echo get_template_directory_uri().'/images/back.png'; ?>" /></a>

									</div>

									<div id="artistic">
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
																	<div class="item"><a href="/artisticpost-1/" ><img alt="artwork gallery" src="<?php echo get_template_directory_uri().'/images/artistic/1-small.png'; ?>"/></a><p><a href="/artisticpost-1/">FS14_100</a></p></div>
																	<div class="item"><a href="/artisticpost-2/" ><img alt="artwork gallery" src="<?php echo get_template_directory_uri().'/images/artistic/2-small.png'; ?>"/></a><p><a href="/artisticpost-2/">FS14_101</a></p></div>        
																	<div class="item"><a href="/artisticpost-3/" ><img alt="artwork gallery" src="<?php echo get_template_directory_uri().'/images/artistic/3-small.png'; ?>"/></a><p><a href="/artisticpost-3/">FS14_102</a></p></div>
																	<div class="item"><a href="/artisticpost-4/" ><img alt="artwork gallery" src="<?php echo get_template_directory_uri().'/images/artistic/4-small.png'; ?>"/></a><p><a href="/artisticpost-4/">FS14_103</a></p></div>
																	<div class="item"><a href="/artisticpost-5/" ><img alt="artwork gallery" src="<?php echo get_template_directory_uri().'/images/artistic/5-small.png'; ?>"/></a><p><a href="/artisticpost-5/">FS14_104</a></p></div>
																	<div class="item"><a href="/artisticpost-6/" ><img alt="artwork gallery" src="<?php echo get_template_directory_uri().'/images/artistic/6-small.png'; ?>"/></a><p><a href="/artisticpost-6/">FS14_105</a></p></div>
																</div>
														</p></li>

															<li><p>  <!-- TO ADD IMAGE, PLEASE COPY THIS BLOCK AND RENAME IMAGE.JPG -->
																 <div class="gallery-images">
																 	<div class="item"><a href="/artisticpost-7/" ><img alt="artwork gallery" src="<?php echo get_template_directory_uri().'/images/artistic/7-small.png'; ?>"/></a><p><a href="/artisticpost-7/">FS14_106</a></p></div>
																	<div class="item"><a href="/artisticpost-8/" ><img alt="artwork gallery" src="<?php echo get_template_directory_uri().'/images/artistic/8-small.png'; ?>"/></a><p><a href="/artisticpost-8/">FS14_107</a></p></div>        
																	<div class="item"><a href="/artisticpost-9/" ><img alt="artwork gallery" src="<?php echo get_template_directory_uri().'/images/artistic/9-small.png'; ?>"/></a><p><a href="/artisticpost-9/">FS14_108</a></p></div>
																	<div class="item"><a href="/artisticpost-10/"><img alt="artwork gallery" src="<?php echo get_template_directory_uri().'/images/artistic/10-small.png'; ?>"/></a><p><a href="/artisticpost-10/">FS14_109</a></p></div>        
																	<div class="item"><a href="/artisticpost-11/"><img alt="artwork gallery" src="<?php echo get_template_directory_uri().'/images/artistic/201411_4472AR-small.png'; ?>"/></a><p><a href="/artisticpost-11/">201411_4472AR</a></p></div>
																	<div class="item"><a href="/artisticpost-12/"><img alt="artwork gallery" src="<?php echo get_template_directory_uri().'/images/artistic/201411_4529AR-small.png'; ?>"/></a><p><a href="/artisticpost-12/">201411_4529AR</a></p></div>
																</div>
														</p></li>

														<li><p>  <!-- TO ADD IMAGE, PLEASE COPY THIS BLOCK AND RENAME IMAGE.JPG -->
																 <div class="gallery-images">
																	<div class="item"><a href="/artisticpost-13/" ><img alt="artwork gallery" src="<?php echo get_template_directory_uri().'/images/artistic/201411_4599AR-small.png'; ?>"/></a><p><a href="/artisticpost-13/">201411_4599AR</a></p></div>
																	<div class="item"><a href="/artisticpost-14/" ><img alt="artwork gallery" src="<?php echo get_template_directory_uri().'/images/artistic/201411_4769AR-small.png'; ?>"/></a><p><a href="/artisticpost-14/">201411_4769AR</a></p></div>
																	<div class="item"><a href="/artisticpost-15/" ><img alt="artwork gallery" src="<?php echo get_template_directory_uri().'/images/artistic/201411_5006AR-small.png'; ?>"/></a><p><a href="/artisticpost-15/">201411_5006AR</a></p></div>
																	<div class="item"><a href="/artisticpost-16/" ><img alt="artwork gallery" src="<?php echo get_template_directory_uri().'/images/artistic/201411_5061AR-small.png'; ?>"/></a><p><a href="/artisticpost-16/">201411_5061AR</a></p></div>
																	<div class="item"><a href="/artisticpost-17/" ><img alt="artwork gallery" src="<?php echo get_template_directory_uri().'/images/artistic/201411_5174AR-small.png'; ?>"/></a><p><a href="/artisticpost-17/">201411_5174AR</a></p></div>
																	<div class="item"><a href="/artisticpost-18/" ><img alt="artwork gallery" src="<?php echo get_template_directory_uri().'/images/artistic/201411_6359AR-small.png'; ?>"/></a><p><a href="/artisticpost-18/">201411_6359AR</a></p></div>
																</div>
														</p></li>

															<li><p>  <!-- TO ADD IMAGE, PLEASE COPY THIS BLOCK AND RENAME IMAGE.JPG -->
																 <div class="gallery-images">
																	<div class="item"><a href="/artisticpost-19/" ><img alt="artwork gallery" src="<?php echo get_template_directory_uri().'/images/artistic/201411_6416AR-small.png'; ?>"/></a><p><a href="/artisticpost-19/">201411_6416AR</a></p></div>        
																	<div class="item"><a href="/artisticpost-20/" ><img alt="artwork gallery" src="<?php echo get_template_directory_uri().'/images/artistic/201411_6565AR-small.png'; ?>"/></a><p><a href="/artisticpost-20/">201411_6565AR</a></p></div>
																	<div class="item"><a href="/artisticpost-21/" ><img alt="artwork gallery" src="<?php echo get_template_directory_uri().'/images/artistic/201411_6702AR-small.png'; ?>"/></a><p><a href="/artisticpost-21/">201411_6702AR</a></p></div>
																	
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

			

