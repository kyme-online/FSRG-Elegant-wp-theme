ts to display</h2>
								<?php endif; ?>

							</div>

								

							<div id="right">
 
               						<div id="rightbanner">
										
               							<img src="<?php bloginfo('template_directory'); ?>/images/homeslides/img2.png" />
               						</div>


                        	</div>
                        		  <div style="clear:both"></div>

						</div>

						  <div style="clear:both"></div>

				</div>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>/shared/html-header', /*'parts/shared/header'*/ ) ); ?>

				<div id="content">


						<div id="bodycontent">
							<div id="left">
								<?php if ( have_posts() ): ?>
								<!--h2>Latest Posts</h2-->	
								<ol>

								<?php while ( have_posts() ) : the_post(); ?>
									<li>
										<article>
											<a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a> <br/> <div class="line1"></div>
											<!--<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?> -->
										</article><p><?php the_content(); ?></p>
										
									</li>
								<?php endwhile; ?>
								</ol>
								<?php else: ?>
								<h2>No posts to display</h2>
								<?php endif; ?>

							</div>

								

							<div id="right">
 
               						<div id="rightbanner">
										
               							<img src="<?php bloginfo('template_directory'); ?>/images/homeslides/img2.png" />
               						</div>


                        	</div>
                        		  <div style="clear:both"></div>

						</div>

						  <div style="clear:both"></div>

				</div>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>