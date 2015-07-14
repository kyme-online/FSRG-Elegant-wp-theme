<?php
/**
 * Template Name: historical
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
											<h1>HISTORICAL PHOTOGRAPH</h1>
											<!--div class="subpageline"></div-->
										</div>

										<a href="<?php echo home_url(); ?>" class="back"><img class="back" src="<?php echo get_template_directory_uri().'/images/back.png'; ?>" /></a>

									</div>


									<div id="historical">
													<?php if ( have_posts() ): ?>
															<!--h2>Latest Posts</h2-->	
															<ol>

															<?php while ( have_posts() ) : the_post(); ?>
																<li>
																	<article>
																		<!--a class="image-title" href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a> <br/--!> 
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
																	<div class="item"><a href="/historicalpost-1/" ><img alt="picture framing in dubai" src="<?php echo get_template_directory_uri().'/images/historical/historical-1-small.png'; ?>"/></a><p><a href="/historicalpost-1/">RM_100</a></p></div>  
																	<div class="item"><a href="/historicalpost-2/" ><img alt="picture framing in dubai" src="<?php echo get_template_directory_uri().'/images/historical/historical-2-small.png'; ?>"/></a><p><a href="/historicalpost-2/">RM_101</a></p></div> 
																	<div class="item"><a href="/historicalpost-3/" ><img alt="picture framing in dubai" src="<?php echo get_template_directory_uri().'/images/historical/historical-3-small.png'; ?>"/></a><p><a href="/historicalpost-3/">RM_102</a></p></div> 
																	<div class="item"><a href="/historicalpost-4/" ><img alt="picture framing in dubai" src="<?php echo get_template_directory_uri().'/images/historical/historical-4-small.png'; ?>"/></a><p><a href="/historicalpost-4/">RM_103</a></p></div> 
																	<div class="item"><a href="/historicalpost-5/" ><img alt="picture framing in dubai" src="<?php echo get_template_directory_uri().'/images/historical/historical-5-small.png'; ?>"/></a><p><a href="/historicalpost-5/">RM_104</a></p></div> 
																	<div class="item"><a href="/historicalpost-6/" ><img alt="picture framing in dubai" src="<?php echo get_template_directory_uri().'/images/historical/historical-6-small.png'; ?>"/></a><p><a href="/historicalpost-6/">RM_105</a></p></div> 
																</div>
													</p></li>

													<li><p>	  <!-- TO ADD IMAGE, PLEASE COPY THIS BLOCK AND RENAME IMAGE.JPG -->
																 <div class="gallery-images">
																	<div class="item"><a href="/historicalpost-7/" ><img alt="picture framing in dubai" src="<?php echo get_template_directory_uri().'/images/historical/historical-7-small.png'; ?>"/></a><p><a href="/historicalpost-7/">RM_106</a></p></div> 
																	<div class="item"><a href="/historicalpost-8/" ><img alt="picture framing in dubai" src="<?php echo get_template_directory_uri().'/images/historical/historical-8-small.png'; ?>"/></a><p><a href="/historicalpost-8/">RM_107</a></p></div> 
																	<div class="item"><a href="/historicalpost-9/" ><img alt="picture framing in dubai" src="<?php echo get_template_directory_uri().'/images/historical/historical-9-small.png'; ?>"/></a><p><a href="/historicalpost-9/">RM_108</a></p></div> 
																	<div class="item"><a href="/historicalpost-10/"><img alt="picture framing in dubai" src="<?php echo get_template_directory_uri().'/images/historical/historical-10-small.png'; ?>"/></a><p><a href="/historicalpost-10/">RM_109</a></p></div> 
																	<div class="item"><a href="/historicalpost-11/"><img alt="picture framing in dubai" src="<?php echo get_template_directory_uri().'/images/historical/historical-11-small.png'; ?>"/></a><p><a href="/historicalpost-11/">RM_110</a></p></div> 
																	<div class="item"><a href="/historicalpost-12/"><img alt="picture framing in dubai" src="<?php echo get_template_directory_uri().'/images/historical/historical-12-small.png'; ?>"/></a><p><a href="/historicalpost-12/">RM_111</a></p></div>
																</div>
													</p></li>

														<li><p>	  <!-- TO ADD IMAGE, PLEASE COPY THIS BLOCK AND RENAME IMAGE.JPG -->
																 <div class="gallery-images">
																	<div class="item"><a href="/historicalpost-13/" ><img alt="picture framing in dubai" src="<?php echo get_template_directory_uri().'/images/historical/historical-13-small.png'; ?>"/></a><p><a href="/historicalpost-13/">RM_112</a></p></div> 
																	<div class="item"><a href="/historicalpost-14/" ><img alt="picture framing in dubai" src="<?php echo get_template_directory_uri().'/images/historical/historical-14-small.png'; ?>"/></a><p><a href="/historicalpost-14/">RM_113</a></p></div> 
																	<div class="item"><a href="/historicalpost-15/" ><img alt="picture framing in dubai" src="<?php echo get_template_directory_uri().'/images/historical/historical-15-small.png'; ?>"/></a><p><a href="/historicalpost-15/">RM_114</a></p></div> 
																	<div class="item"><a href="/historicalpost-16/" ><img alt="picture framing in dubai" src="<?php echo get_template_directory_uri().'/images/historical/historical-16-small.png'; ?>"/></a><p><a href="/historicalpost-16/">RM_115</a></p></div> 
																	<div class="item"><a href="/historicalpost-17/" ><img alt="picture framing in dubai" src="<?php echo get_template_directory_uri().'/images/historical/historical-17-small.png'; ?>"/></a><p><a href="/historicalpost-17/">RM_116</a></p></div> 
																	<div class="item"><a href="/historicalpost-18/" ><img alt="picture framing in dubai" src="<?php echo get_template_directory_uri().'/images/historical/historical-18-small.png'; ?>"/></a><p><a href="/historicalpost-18/">RM_117</a></p></div>
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

			

