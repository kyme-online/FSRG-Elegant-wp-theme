<?php
/**
 * Template Name: mobile-contact
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

							<div id="mobile-contact">

									<?php query_posts( 'post_type=mobile-contact'); ?>
												<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


												<h1><?php the_title(); ?> </h1>
																<div class="mobile-line"></div>


												<?php the_content(); ?>
												<?php comments_template( '', true ); ?>
												<?php endwhile; ?>
<script src='https://www.google.com/recaptcha/api.js'></script>
							</div>

							<div id="mobile-subpages-img">



							</div>


					</div>
