<?php get_header(); ?>
		
		<?php setPostViews(get_the_ID()); ?><!-- track post views -->
		
		<br/>


				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
					<div class="row">

					<!-- article content -->
					<div class="large-8 small-12 columns" id="the-article">
				    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				        <h2 class="link"><?php the_title(); ?></h2>
				        
				        <br/>

				  		<!-- show the article! -->	
				        <div class="entry">
				            <?php the_content(); ?>
				        </div>

					    </div>
					    </div>
					    <?php endwhile; endif; ?>
					    
					    
					    <!-- Popular/Archive Sidebar -->
					    <aside class="large-4 columns hide-for-small">
					    	<?php get_sidebar(); ?>
					    </aside>
					    
			    	</div><!-- close row -->
			   	</div><!-- close 9 columns -->
				
				<div class="large-12 columns">
				<hr/>
				</div>
			
			<!-- =============== Sharing & Stats =============== -->
			
			<div class="row">	
									
				<!-- load the comments! -->
				<?php comments_template(); ?>
				
	
			</div>

			<hr />
			
			<div class="row" id="next-prev-links">
				<div class="large-12 columns">

					<div class="large-6 small-6 columns"><h6 class="subheader">PREVIOUS</h6><?php previous_post_link('&laquo; %link') ?></div>
					<div class="large-6 small-6 columns" style="text-align: right; padding-bottom: 20px;"><h6 class="subheader">NEXT</h6><?php next_post_link('%link &raquo;') ?></div>
				</div>
			</div>			

			<?php wp_reset_postdata(); ?>

	<?php get_footer(); ?>