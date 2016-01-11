<?php
/**
 * Template Name: sculpturepost-3
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
										<img src="<?php echo get_template_directory_uri().'/images/sculptures/JRA-8765.jpg'; ?>" />							

										
									</div>

								

									<div id="contentpost-content">
										<h1>Sculpture</h1>
											
				 						<p>
											<b>JRA-8765</b><br/><br/>
											Size: <br/> 
											Width:     5"   inch <br/> 
											Height:    24"  inch <br/>
											Diameter:  4"   <br/><br/>

											These art glass sculptural figures are individually formed. This figure is clear over a black center with Murano style gold flecks. It is shown in the larger size. 
				 						</p>

									     </div>

							     	

							     	<div style="clear:both"></div>


				</div>

					<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>

			

