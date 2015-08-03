<?php
/**
 * Template Name: about
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


				<div id="content-about">

						

								<div class="frame-about">

									<div id="about">

										<?php if ( have_posts() ): ?>
															<!--h2>Latest Posts</h2-->	
															<ol>

															<?php while ( have_posts() ) : the_post(); ?>
																<li>
																	<article>
																		<a class="image-title" href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>	<div class="about-line"></div> <br/> 
																		<!--<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?> -->
																	</article><p><?php the_content(); ?></p>
																	
																</li>
															<?php endwhile; ?>
															</ol>
															<?php else: ?>
															<h2>No posts to display</h2>
												<?php endif; ?>

									</div>
											<!--a class="download download-1" type="button" value="Company Profile" href="http://fsrg.com/downloadfiles/CompanyProfile.pdf" target="_blank">Download Company Profile</a-->
								</div>

									

							     		<div style="clear:both"></div>

				</div>

				<div id="about-downloadmedia">
							<div class="profile-download">
									<a value="Company Profile" href="http://fsrg.com/downloadfiles/CompanyProfile.pdf" target="_blank"></a>
							</div>
							<div class="mediapress">
									<a value="Company Profile" href="/press/" ></a>
							</div>
							<div class="insideout-award">

							</div>
				</div>
										<div style="clear:both"></div>

				<div id="content-lightings">

									<div class="righ-light-frame">

											<div class="header-partners"></div>
				 
														<div class="right-light-img">

															<a href="http://troy-lighting.com" target="_blank" ><img  alt="dubai lightings" src="<?php echo get_template_directory_uri().'/images/troy.png'; ?>" /></a> 
															<a href="http://corbettlighting.com" target="_blank"  ><img alt="dubai framing" src="<?php echo get_template_directory_uri().'/images/corbet.png'; ?>" /></a>
															<a href="http://fineartlamps.com/" target="_blank" ><img alt="dubai furniture" src="<?php echo get_template_directory_uri().'/images/finearts.png'; ?>" /></a>
															<a href="http://sonnemanawayoflight.com/" target="_blank" ><img alt="dubai accent furnitures" src="<?php echo get_template_directory_uri().'/images/sonneman.png'; ?>" /></a>
															<a href="http://alineahome.com/" target="_blank" ><img alt="dubai history photograph" src="<?php echo get_template_directory_uri().'/images/alinea.png'; ?>" /></a>
														</div>


									</div>

							     		<div style="clear:both"></div>

								

						


				</div>



					<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>



<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57635748-1', 'auto');
  ga('send', 'pageview');

</script>



			

