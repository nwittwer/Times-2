<div class="large-12 columns hide-on-phones">		
      		
		<!-- TIME FOR TABS!!! -->		
			<dl class="tabs" data-tab>
			  <dd class="active"><a href="#panel2-1">Social</a></dd>
			  <dd><a href="#panel2-2">Popular</a></dd>
			</dl>
			  
			  
			<div class="tabs-content">
			  <div class="content active" id="panel2-1">
				   	<?php comments_popup_link( 'Comment', '1 comment', '% comments', 'comments-link', 'Comments are off for this post'); ?> <br/>
				   		    
				   		<?php if ( is_user_logged_in() ) { ?>
							<br/>
							<?php edit_post_link('Edit', ''); ?>
							<br/>
				   		<?php }; ?>      

		   	  			<hr/>
		   	  			
		   	  			<!-- Facebook Integration -->
		   	  			<iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;layout=button_count&amp;show_faces=false&amp;
		   	  			width=450&amp;action=like&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:100px; height:20px;">
		   	  			</iframe> <br/><br/>
		   	  			<!-- / facebook -->
		   	  			
		   	  			<!-- Twitter Integration -->
		   	  			
		   	  			<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
		   	  			   <a href="http://twitter.com/share" class="twitter-share-button"
		   	  			      data-url="<?php the_permalink(); ?>"
		   	  			      data-via="laslomaspage"
		   	  			      data-text="<?php the_title(); ?>"
		   	  			      data-related="Las Lomas Page"
		   	  			      data-count="horizontal">Tweet</a><br/><hr/>
		   	  		
		   	  			Posted <?php the_time(); ?><br/><br/>
		   	  			<?php the_tags('Tags: ', ', ', '<br />'); ?> Categories: <?php the_category(', ') ?><br/>
		   	  			
		   	  			<?php
		   	  				if ( is_user_logged_in() ) {
		   	  					echo "<hr/><h5>Stats</h5>";
		   	  				    echo "<span>" . getPostViews(get_the_ID()) . "</span>";
						}; ?>
		   		    
			  </div>
			  
			  <div class="content" id="panel2-2">
			    <ul class="no-bullet">
    	      		<?php
    	      			query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC&posts_per_page=5');
    	      			if (have_posts()) : while (have_posts()) : the_post(); ?>
    	      			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    	      			<?php
    	      			endwhile; endif;
    	      			wp_reset_query();
    	      		?>
    	      		
    	      	</ul>
			  </div>
			  
			</div>  
			  
			  
			 
			
			
	</div>

	