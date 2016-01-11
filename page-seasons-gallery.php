<?php
/**
 * Template Name: seasons-gallery
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
											<h1>SEASON'S</h1>
											<!--div class="subpageline"></div-->
										</div>

										<a href="/seasons/" class="back"><img class="back" src="<?php echo get_template_directory_uri().'/images/back.png'; ?>" /></a>

									</div>

									<div id="vase">
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
																	<div class="item"><a href="" ><img alt="home decor" src="<?php echo get_template_directory_uri().'/images/seasons/1-small.png'; ?>"/></a><p><a href="/seasons-1/">Christmas Top Hat with Pinecone</a></p></div>
																	<div class="item"><a href="" ><img alt="home decor" src="<?php echo get_template_directory_uri().'/images/seasons/2-small.png'; ?>"/></a><p><a href="/seasons-2/">Glitter and Rust Deer</a></p></div>
																	<div class="item"><a href="" ><img alt="home decor" src="<?php echo get_template_directory_uri().'/images/seasons/3-small.png'; ?>"/></a><p><a href="/seasons-3/">Golden Leaf Dish</a></p></div>
																	<div class="item"><a href="" ><img alt="home decor" src="<?php echo get_template_directory_uri().'/images/seasons/4-small.png'; ?>"/></a><p><a href="/seasons-4/">Silver Acorn with Glass Jar</a></p></div>
																	<div class="item"><a href="" ><img alt="home decor" src="<?php echo get_template_directory_uri().'/images/seasons/5-small.png'; ?>"/></a><p><a href="/seasons-5/">Christmas Glass Acorn</a></p></div>
																	<div class="item"><a href="" ><img alt="home decor" src="<?php echo get_template_directory_uri().'/images/seasons/6-small.png'; ?>"/></a><p><a href="/seasons-6/">Tiny Christmas White LED Candles</a></p></div>

																	<div class="item"><a href="" ><img alt="home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/7-small.png'; ?>"/></a><p><a href="/seasons-7/">A Christmas Cream Bread Candle</a></p></div>
																	<div class="item"><a href="" ><img alt="home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/8-small.png'; ?>"/></a><p><a href="/seasons-8/">Stocking with Pinecone</a></p></div>
																	<div class="item"><a href="" ><img alt="home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/9-small.png'; ?>"/></a><p><a href="/seasons-9/">Snowflake Ornament with Pearl</a></p></div>
																	<div class="item"><a href="" ><img alt="home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/10-small.png'; ?>"/></a><p><a href="/seasons-10/">Assorted Vintage Santa</a></p></div>
																	<div class="item"><a href=""><img alt="home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/11-small.png'; ?>"/></a><p><a href="/seasons-11/">Pillar Candles with Pinecone Holder</a></p></div>
																	<div class="item"><a href=""><img alt="home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/12-small.png'; ?>"/></a><p><a href="/seasons-12/">Copper Acorn with Apothecary Jar</a></p></div>

																	<div class="item"><a href="" ><img alt="home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/13-small.png'; ?>"/></a><p><a href="/seasons-13/">Silver Beaded</a></p></div>
																	<div class="item"><a href="" ><img alt="home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/14-small.png'; ?>"/></a><p><a href="/seasons-14/">Silver Snowflake Ornament</a></p></div>
																	<div class="item"><a href="" ><img alt="home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/15-small.png'; ?>"/></a><p><a href="/seasons-15/">Tall Black Top Hat with Trimming</a></p></div>
																	<div class="item"><a href=""><img alt="home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/16-small.png'; ?>"/></a><p><a href="/seasons-16/">Gold Glitter Artichoke</a></p></div>
																	<div class="item"><a href=""><img alt="home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/17-small.png'; ?>"/></a><p><a href="/seasons-17/">Assorted Blue Vintage Final Ornament</a></p></div>
																	<div class="item"><a href=""><img alt="home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/18-small.png'; ?>"/></a><p><a href="/seasons-18/">Resin Acorn with Netted Urn Balls</a></p></div>

																	<div class="item"><a href="" ><img alt="home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/19-small.png'; ?>"/></a><p><a href="/seasons-19/">Glitter and Rust Deer  Sleigh</a></p></div>
																	<div class="item"><a href="" ><img alt="home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/20-small.png'; ?>"/></a><p><a href="/seasons-20/">Gold Acorn Ornaments</a></p></div>
																	<div class="item"><a href="" ><img alt="home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/21-small.png'; ?>"/></a><p><a href="/seasons-21/">Gold Stripe Ornament</a></p></div>
																	<div class="item"><a href=""><img alt="home accessories" src="<?php echo get_template_directory_uri().'/images/seasons/22-small.png'; ?>"/></a><p><a href="/seasons-22/">Vintage Woodland Tree</a></p></div>


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
