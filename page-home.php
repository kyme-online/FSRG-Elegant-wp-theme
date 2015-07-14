<?php
/**
 * Template Name: home  
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


<div class="cycle-slideshow" data-fx=scroll data-timeout=4000 data-scss='{"top":"20px"}'>
    <img alt="framing in dubai" src="<?php bloginfo('template_directory'); ?>/images/bg1.png"/>
   	<img alt="dubai lightings" src="<?php bloginfo('template_directory'); ?>/images/bg2.png"/>
	<img alt="dubai furnitures" src="<?php bloginfo('template_directory'); ?>/images/bg3.png"/>  
	<img alt="dubai artworks" src="<?php bloginfo('template_directory'); ?>/images/bg4.png"/>
</div>
	
	

				<div id="homecontent">

						<div class="body-mobile">

							<div class="mobilemenus">
										<li><a href="mobile-furniture-page/">Furniture</a>   </li>
										<li><a href="mobile-accessories-page/">Accessories</a> </li>
										<li><a href="mobile-photography-page/">Photography</a> </li>
										<li><a href="http://fsrg.com/blog/">Blog</a> </li>
										<li><a href="mobile-contact-page/">Contact Us</a>  </li>
							</div>

							<div class="home-mobile">


							<div id="mobile-about">

									<?php query_posts( 'post_type=about'); ?>
												<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
														

												<h1><?php the_title(); ?> </h1>
																<div class="homemobile-line"></div>


												<?php the_content(); ?>
												<?php comments_template( '', true ); ?>
												<?php endwhile; ?>

							</div>

							<div id="mobile-service">

												<?php query_posts( 'post_type=services'); ?>
											<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
													

											<h1><?php the_title(); ?></h1> 
															<div class="homemobile-line"></div>


											<?php the_content(); ?>
											<?php comments_template( '', true ); ?>
											<?php endwhile; ?>

							</div>

							<div id="mobile-partners">

								<h1>Partners</h1>
									<a href="http://troy-lighting.com">Troy Lighting</a>  <a href="http://corbettlighting.com">Corbette</a> <br/>
									<a href="http://www.fineartlamps.com/">Fine Arts Lamp</a>  <a href="http://sonnemanawayoflight.com/index.php">Sonneman</a> <br/>
									<a href="http://alineahome.com/">Alinea </a>

							</div>
								

							</div>

						</div>
					
						<div id="homebodycontent">
										
									

								<div id="homeleft">

												<?php query_posts( 'post_type=home'); ?>
										<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
												

										<h1><?php the_title(); ?></h1> 
														<div class="homemobile-line"></div>


										<?php the_content(); ?>
										<?php comments_template( '', true ); ?>
										<?php endwhile; ?> 

										
								</div>

								<div id="homeright">
 
               						<div id="homerightbanner">
										
               						
               						</div>


                        	</div>

								
                     					<div style="clear:both"></div>  

						</div>
					

				</div> 


				<div class="home-footer"><?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?> </div>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57635748-1', 'auto');
  ga('send', 'pageview');

</script>
