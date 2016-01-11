<?php
/**
 * Template Name: seasons
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


				<div id="seasons-container">

						<div id="seasons-content">
							<a href="#" class="scrollToTop"></a>
									<div id="seasons-body-content">
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



											<div id="seasons-leftbar">

													<a class="seasons-leftbar-link" href="#designertree">The Designer Trees</a>
													<a class="seasons-leftbar-link" href="#ornaments">Designer Ornaments</a>
												  <a class="seasons-leftbar-link" href="#gift">Perfect Gifts</a>
													<a class="seasons-leftbar-link" href="#service">Service</a>

											</div>

											<div id="seasons-rightbar">

													<div id="video">
														<iframe width="1024" height="576" src="https://www.youtube.com/embed/uH-pjuRQ_8g?autoplay=0"> </iframe>

													</div>

													<div id="tabs-seasons-content">
														<h1 id="designertree">THE DESIGNER TREE</h1>
														<p>Themed trees in vibrant colors decorated with  eclectic elegant ornament combinations aimed at adding sparkle to your living space.</p>
															<div class="tabs">
																		<ul class="tab-links">
																				<li class="active"><a href="#tab1">TOP HAT TREE</a></li>
																				<li><a href="#tab2">GOLD TREE</a></li>
																				<li><a href="#tab3">TURQUOISE TREE</a></li>
																				<li><a href="#tab4">FLOCKED TREE</a></li>
																				<li><a href="#tab5">MUSIC TREE</a></li>
																		</ul>
															</div>

															<div class="tab-content">
															        <div id="tab1" class="tab active">
															            <img class="tab1-one" alt="christmas tree" src="<?php echo get_template_directory_uri().'/images/tophat/top-hat-tree.png'; ?>" />
																					<a href="https://fsrg.com/wp-content/themes/starkers-master/images/tophat/tophat-1.jpg" data-lightbox="tophat" data-title="Top Hat Tree"><img class="tab1-two example-image" alt="christmas tree" src="<?php echo get_template_directory_uri().'/images/tophat/tophat-1-small.jpg'; ?>"/>   </a>
																					<a href="https://fsrg.com/wp-content/themes/starkers-master/images/tophat/tophat-2.png" data-lightbox="tophat" data-title="Top Hat Tree"><img class="tab1-three" alt="christmas tree" src="<?php echo get_template_directory_uri().'/images/tophat/tophat-2-small.png'; ?>"/> </a>
																						<div class="tab1-text">
																						 <h1 id="designornament">TOP HAT TREE</h1>
																						 <p>
																							 These traditional and whimsical top hats are created for decoration  as tree toppers, table decorations and much more. Top hat tree is a unique setup using top hats incorporated with other decoration ornaments to adorn a beautiful tree display on a whimsical sleigh. This tree setup  is un doubtfully a creative way to add fun and personalised touch to your holiday decorations.
																						 </p>
																					  </div>
																					<a href="https://fsrg.com/wp-content/themes/starkers-master/images/tophat/tophat-3.png" data-lightbox="tophat" data-title="Top Hat Tree"><img class="tab1-four" alt="christmas tree" src="<?php echo get_template_directory_uri().'/images/tophat/tophat-3-small.png'; ?>"/> </a>
																					<a href="https://fsrg.com/wp-content/themes/starkers-master/images/tophat/tophat-4.png" data-lightbox="tophat" data-title="Top Hat Tree"><img class="tab1-five" alt="christmas tree" src="<?php echo get_template_directory_uri().'/images/tophat/tophat-4-small.png'; ?>"/> </a>
																						<div style="clear:both"></div>
															        </div>

															        <div id="tab2" class="tab">
																				<img class="tab1-one" alt="christmas tree" src="<?php echo get_template_directory_uri().'/images/goldentree/goldentree.png'; ?>"/></a>
																				<a href="https://fsrg.com/wp-content/themes/starkers-master/images/goldentree/golden-tree-1.jpg" data-lightbox="goldentree" data-title="Golden Tree" ><img class="tab1-two" alt="christmas tree" src="<?php echo get_template_directory_uri().'/images/goldentree/golden-tree-1-small.jpg'; ?>"/></a>
																				<a href="https://fsrg.com/wp-content/themes/starkers-master/images/goldentree/golden-tree-2.jpg" data-lightbox="goldentree" data-title="Golden Tree"><img class="tab1-three" alt="christmas tree" src="<?php echo get_template_directory_uri().'/images/goldentree/golden-tree-2-small.jpg'; ?>"/></a>
																					<div class="tab1-text">
																					 <h1>GOLD TREE</h1>
																					 <p>Traditional, whimsical, and sure to create nostalgia, this is the perfect setup to make and evoke  memories. Golden deer tree  has an assortment of golden acorns, balls ornaments etc.., adorning  a beautiful christmas tree in a golden vase.
																					 </p>
																					</div>
																				<a href="https://fsrg.com/wp-content/themes/starkers-master/images/goldentree/golden-tree-3.jpg" data-lightbox="goldentree" data-title="Golden Tree"><img class="tab1-four" alt="christmas tree" src="<?php echo get_template_directory_uri().'/images/goldentree/golden-tree-3-small.jpg'; ?>"/></a>
																				<a href="https://fsrg.com/wp-content/themes/starkers-master/images/goldentree/golden-tree-4.jpg" data-lightbox="goldentree" data-title="Golden Tree"><img class="tab1-five" alt="christmas tree" src="<?php echo get_template_directory_uri().'/images/goldentree/golden-tree-4-small.jpg'; ?>"/></a>
																					<div style="clear:both"></div>
															        </div>

															        <div id="tab3" class="tab">
																				<img class="tab1-one" alt="christmas tree" src="<?php echo get_template_directory_uri().'/images/turquoise/turquoise.png'; ?>"/>
																				<a href="https://fsrg.com/wp-content/themes/starkers-master/images/turquoise/turquoise-1.jpg" data-lightbox="turquoise" data-title="Turquoise Tree"><img class="tab1-two" alt="christmas tree" src="<?php echo get_template_directory_uri().'/images/turquoise/turquoise-1-small.jpg'; ?>"/></a>
																				<a href="https://fsrg.com/wp-content/themes/starkers-master/images/turquoise/turquoise-2.jpg" data-lightbox="turquoise" data-title="Turquoise Tree"><img class="tab1-three" alt="christmas tree" src="<?php echo get_template_directory_uri().'/images/turquoise/turquoise-2-small.jpg'; ?>"/></a>
																					<div class="tab1-text">
																					 <h1>TURQUOISE TREE</h1>
																					 <p>Blue and Silver. Antiqued metallic finish, exceptionally elegant and shimmery Christmas ornaments. Add some character to your tree by bringing in blue. This bright, vibrant color complements the silver ornaments and gives complementing Christmas decorations a fresh feel.
																					 </p>
																					</div>
																				<a href="https://fsrg.com/wp-content/themes/starkers-master/images/turquoise/turquoise-3.jpg" data-lightbox="turquoise" data-title="Turquoise Tree"><img class="tab1-four" alt="christmas tree" src="<?php echo get_template_directory_uri().'/images/turquoise/turquoise-3-small.jpg'; ?>"/></a>
																				<a href="https://fsrg.com/wp-content/themes/starkers-master/images/turquoise/turquoise-4.jpg" data-lightbox="turquoise" data-title="Turquoise Tree"><img class="tab1-five" alt="christmas tree" src="<?php echo get_template_directory_uri().'/images/turquoise/turquoise-4-small.jpg'; ?>"/></a>
																				  <div style="clear:both"></div>
															        </div>

															        <div id="tab4" class="tab">
																				<img class="tab1-one" alt="christmas tree" src="<?php echo get_template_directory_uri().'/images/flockedgoldtree/flockedgoldtree.png'; ?>"/>
																				<a href="https://fsrg.com/wp-content/themes/starkers-master/images/flockedgoldtree/flockedgoldtree-1.jpg" data-lightbox="flockedgoldtree" data-title="Flocked Gold Tree"><img class="tab1-two" alt="christmas tree" src="<?php echo get_template_directory_uri().'/images/flockedgoldtree/flockedgoldtree-1-small.jpg'; ?>"/></a>
																				<a href="https://fsrg.com/wp-content/themes/starkers-master/images/flockedgoldtree/flockedgoldtree-2.jpg" data-lightbox="flockedgoldtree" data-title="Flocked Gold Tree"><img class="tab1-three" alt="christmas tree" src="<?php echo get_template_directory_uri().'/images/flockedgoldtree/flockedgoldtree-2-small.jpg'; ?>"/></a>
																					<div class="tab1-text">
																					 <h1>FLOCKED GOLD TREE</h1>
																					 <p>Snow flakes dancing in the sky. The stillness of a cold winter day. Fluffy piles of fresh snow on dark green branches. Are you dreaming of a white Christmas? Now you can bring the beauty of winter inside with a tree from our large selection of flocked artificial Christmas trees. These trees are adorned with gold and copper beaded drums, berry ornaments and leafy docorations.</p>
																					</div>
																				<a href="https://fsrg.com/wp-content/themes/starkers-master/images/flockedgoldtree/flockedgoldtree-3.jpg" data-lightbox="flockedgoldtree" data-title="Flocked Gold Tree"><img class="tab1-four" alt="christmas tree" src="<?php echo get_template_directory_uri().'/images/flockedgoldtree/flockedgoldtree-3-small.jpg'; ?>"/></a>
																				<a href="https://fsrg.com/wp-content/themes/starkers-master/images/flockedgoldtree/flockedgoldtree-4.jpg" data-lightbox="flockedgoldtree" data-title="Flocked Gold Tree"><img class="tab1-five" alt="christmas tree" src="<?php echo get_template_directory_uri().'/images/flockedgoldtree/flockedgoldtree-4-small.jpg'; ?>"/></a>
																					<div style="clear:both"></div>
															        </div>

																			<div id="tab5" class="tab">
																				<img class="tab1-one" alt="christmas tree" src="<?php echo get_template_directory_uri().'/images/musictree/music-tree.png';?>"/>
																				<a href="https://fsrg.com/wp-content/themes/starkers-master/images/musictree/musictree-1.jpg" data-lightbox="musictree" data-title="Music Tree"><img class="tab1-two" alt="christmas tree" src="<?php echo get_template_directory_uri().'/images/musictree/musictree-1-small.jpg';?>"/></a>
																				<a href="https://fsrg.com/wp-content/themes/starkers-master/images/musictree/musictree-2.jpg" data-lightbox="musictree" data-title="Music Tree"><img class="tab1-three" alt="christmas tree" src="<?php echo get_template_directory_uri().'/images/musictree/musictree-2-small.jpg';?>"/></a>
																					<div class="tab1-text">
																					 <h1>MUSIC TREE</h1>
																					 <p>Start with a lit tree, placed where you want it shown. Always start from largest to smallest. Add the larger ornaments and position them further into the branches of the tree. Medium sized ornaments are best when clustered in pairs.
																					 </p>
																					</div>
																				<a href="https://fsrg.com/wp-content/themes/starkers-master/images/musictree/musictree-3.jpg" data-lightbox="musictree" data-title="Music Tree"><img class="tab1-four" alt="christmas tree" src="<?php echo get_template_directory_uri().'/images/musictree/musictree-3-small.jpg'; ?>"/></a>
																				<a href="https://fsrg.com/wp-content/themes/starkers-master/images/musictree/musictree-4.jpg" data-lightbox="musictree" data-title="Music Tree"><img class="tab1-five" alt="christmas tree" src="<?php echo get_template_directory_uri().'/images/musictree/musictree-4-small.jpg'; ?>"/></a>
																					<div style="clear:both"></div>
															        </div>
														   </div>

													</div>

													<div id="ornament">
														<h1 id="ornaments">DESIGN ORNAMENTS</h1>
															<p>Come and experience the diversity of our hand embellished ornaments in various themes and finishes.</p>
														<img class="ornament-left" src="<?php echo get_template_directory_uri().'/images/ornaments/ornament-left.png';?>"/>
														<img class="ornament-center" src="<?php echo get_template_directory_uri().'/images/ornaments/ornament-center.png'; ?>"/>
														<img class="ornament-right" src="<?php echo get_template_directory_uri().'/images/ornaments/ornament-right.png'; ?>"/>
															<div style="clear:both"></div>
															<a class="btn-ornament" href="/seasons-gallery/"><img src="<?php echo get_template_directory_uri().'/images/seasons/icons/btn-ornament.png'; ?>" /></a>
													</div>

													<div id="bottom-seasons-content">
																	<div id="nest">
																				<img class="nest-right" src="<?php echo get_template_directory_uri().'/images/nest.png'; ?>"  />
																				<h1 id="gift">FIND THE PERFECT GIFT</h1>
																				<p>
																				Add to your wish list this cosmetic pharmaceutical grade <br/>home fragrances range.
																				</p>
																	</div>

																	<div id="delivery">
																			<h1 id="service">DELIVERY SERVICE</h1>
																				<p>Our Christmas trees are  simple and easy  to order. We offer home delivery service  which includes flexible delivery times and valuable additional services such  as installation and guided placements of ornaments to suite customers needs.</p>
																			<img class="step1" src="<?php echo get_template_directory_uri().'/images/seasons/icons/truck.png'; ?>" />
																			<img class="step2" src="<?php echo get_template_directory_uri().'/images/seasons/icons/tree.png'; ?>" />
																			<img class="step3" src="<?php echo get_template_directory_uri().'/images/seasons/icons/cart.png'; ?>"/>
																	</div>

													</div>

											</div>

                     					<div style="clear:both"></div>

	<script>
	$(document).ready(function() {
	    $('.tabs .tab-links a').on('click', function(e)  {
	        var currentAttrValue = jQuery(this).attr('href');

	        // Show/Hide Tabs
	      $(currentAttrValue).addClass('active').siblings().removeClass('active');

	        // Change/remove current tab to active
	        $(this).parent('li').addClass('active').siblings().removeClass('active');

	        e.preventDefault();
	    });



	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});

	//to scroll up
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});

});

// Left Bar links that points in the Content
$('#seasons-leftbar a').off('click').on('click', function(e) {
    e.preventDefault(); // don't auto-scroll, we scroll it programatically

    // get id of title
    var titleId = this.href.split('#').pop();

    // .offset().top = distance of title heading from top of page
    // - 80 = subtract height of top menu
    // quick scrolling
    //$(document).scrollTop($('#'+titleId).offset().top - 80);
    // smooth scrolling
    var body = $('body,html');
    var top = $('#'+titleId).offset().top - 80;
    var time = '3000'; // how long the animation will be
    body.animate({scrollTop: top}, time, function() { /* do something after scrolling is done */ });
});


	</script>
 <script src="https://fsrg.com/wp-content/themes/starkers-master/js/dist/js/lightbox-plus-jquery.min.js"></script>

					</div> <!-- End of Seasons Content -->
				</div> <!-- End of Seasons-container -->

					<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
