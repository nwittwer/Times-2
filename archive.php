<?php get_header(); ?>
			
			<div class="row" id="archive">
				<div class="large-12 columns">
				
					    <?php if (is_category()) { ?>
						    <div class="large-12 columns center">
							    <h2 class="archive-title h2">
								    <?php single_cat_title(); ?>
						    	</h2>
						    	<br/>
					    	</div>

					    	<hr/>
					    	
					    	<br/>

					    <?php } elseif (is_tag()) { ?> 
						    <h2 class="archive-title h2">
							    <span><?php _e("Posts Tagged:", "bonestheme"); ?></span> <?php single_tag_title(); ?>
						    </h2>
					    
					    <?php } elseif (is_author()) { 
					    	global $post;
					    	$author_id = $post->post_author;
					    ?>
						    <h2 class="archive-title h2">

						    	<span><?php _e("Posts By:"); ?></span> <?php echo get_the_author_meta('display_name', $author_id); ?>

						    </h2>
					    <?php } elseif (is_day()) { ?>
						    <h2 class="archive-title h2">
	    						<span><?php _e("Daily Archives:", "bonestheme"); ?></span> <?php the_time('l, F j, Y'); ?>
						    </h2>
		
		    			<?php } elseif (is_month()) { ?>
			    		    <h2 class="archive-title h2">
				    	    	<span><?php _e("Monthly Archives:", "bonestheme"); ?></span> <?php the_time('F Y'); ?>
					        </h2>
					
					    <?php } elseif (is_year()) { ?>
					        <h2 class="archive-title h2">
					    	    <span><?php _e("Yearly Archives:", "bonestheme"); ?></span> <?php the_time('Y'); ?>
					        </h2>
					       
					    <?php } ?>
					    
					    
						<div class="large-8 columns">
						<!-- Queue The Posts! (video) -->
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					     
						    <!-- Is it the video category? -->
						    <?php if (is_category('Videos')) { ?>
	
						    <div <?php post_class( 0 === ++$GLOBALS['wpdb']->wpse_post_counter % 3 ? 'end' : '' ); ?>>
	
								<div class="large-6 columns">
									<div class="flex-video" style="margin-left: -15px;">
										<p>
											<?php the_content(); ?>
										</p>    
									</div>
							    </div>
							 </div>
					    
					    <!-- Otherwise show this... -->
					    <?php } else { ?> 
											
								<article id="post-<?php the_ID(); ?>" role="article">
									
										<header class="article-header">
									
											<h3 class="search-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
											
											<br/>
									
											<p class="byline subheader" style="margin-top: -15px;"><?php _e("Posted"); ?> <time class="updated" pubdate><?php the_time('F jS, Y'); ?></time></p>
								
										</header> <!-- end article header -->
							
										<section class="entry-content">
										    <p><?php echo get_excerpt(320); ?></p>
							
										</section> <!-- end article section -->
							
								</article> <!-- end article -->

					    <?php } ?>
					    
					    <?php endwhile; ?>	
					    
					    </div><!-- end 8 columns left -->
					    	
					    	<!-- Popular/Archive Sidebar -->
					    	<aside class="large-4 columns hide-for-small">
					    		<?php include ('sidebar-2.php'); ?>
					    	</aside>
					    	

					        <?php kriesi_pagination();?>
					
					    <?php else : ?>
					
    					    <article id="post-not-found" class="hentry clearfix">
    						    <header class="article-header">
    							    <h1><?php _e("Ruh-roh, that post or page has disappeared!", "bonestheme"); ?></h1>
    					    	</header>
    						    <section class="entry-content">
    							    <p><?php _e("Try double checking the URL.", "bonestheme"); ?></p>
        						</section>
    	    					<footer class="article-footer">
    		    				    <p><?php _e("This is the error message in the archive.php template. Please alert the webmaster.", "bonestheme"); ?></p>
    			    			</footer>
    				    	</article>
					
					    <?php endif; ?>
					    
					   
					
                </div> <!-- end #inner-content -->

<?php get_footer(); ?>