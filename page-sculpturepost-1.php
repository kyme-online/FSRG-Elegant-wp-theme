<?php
/**
 * Template Name: sculpturepost-1
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


				<div class="headerproduct">

					<div id="subpage-content">
						<h1>SCULPTURE</h1>
						<!--div class="subpageline"></div-->
					</div>

					<a href="/sculpture/" class="back"><img class="back" src="<?php echo get_template_directory_uri().'/images/back.png'; ?>" /></a>

				</div>

				<div id="content-post">


									<div id="contentpost-img">                                           
										<img src="<?php echo get_template_directory_uri().'/images/sculptures/JRA-8398.jpg'; ?>" />							

											
									</div>

								

									<div id="contentpost-content">
										<h1>Sculpture</h1>
											
				 						<p>
											<b>JRA-8398</b><br/><br/>
											Size: <br/> 
											Width:     15" inch <br/>
											Height:    28" inch <br/>
											Diameter:  95  <br/> <br/>

											Oxidized Alum Flame Sculpture.
				 						</p>

									     </div>

							     	

							     	<div style="clear:both"></div>

								


				</div>

					<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>

			

