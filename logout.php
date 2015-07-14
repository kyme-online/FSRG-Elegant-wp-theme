
<?php
/**
 * Template Name: logout
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
wp_logout(); auth_redirect(); 
?>
<!--php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); -->

<!--
				<div id="content-download">

						
 								<div class="download-frame">

									<div id="download-files">

										<a href="<?php wp_logout(); auth_redirect(); ?>" title="Logout">Logout</a>

									</div>
										

											


								</div>

									

			     </div>

							     		<div style="clear:both"></div>




-->