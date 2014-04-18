	<hr />
	
	<div class="row">
	<div class="large-12 columns">

		<div class="large-4 small-2 columns">
		
		<?php if (! is_home()) { ?>
		    <h5>You may also enjoy:</h5>
		    
		    <!-- display related posts -->
		    <?php if(function_exists('related_entries')){
		        related_posts();
		        } else {
		        echo "Requires the YARPP Plugin"; 
		    } ?>
		    
		<?php } else { ?>
		
			<h5>Top Stories</h5>
			<ul class="no-bullet">
			
				<?php query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC&posts_per_page=5'); if (have_posts()) : while (have_posts()) : the_post(); ?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; endif; wp_reset_query(); ?>
				
			</ul>
			
		<?php } ?>

		</div>
		
		<div class="large-4 columns">
			<h5>What is The Page?</h5>
			<p>Welcome to <b>The Page</b>, the website for the student-run Journalism class at Las Lomas High School. We post our articles for the whole world to see because we're rockstars like that.</p>
		</div>

		<div class="large-4 columns">
			<h5>Like &amp; Follow Us</h5>
			
			
			
			<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FLasLomasPage&amp;width=293&amp;layout=standard&amp;action=like&amp;show_faces=true&amp;share=false&amp;height=80&amp;appId=384230264988191" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:293px; height:80px;" allowTransparency="true"></iframe>
			
			<br/><br/>
			
			<a href="https://twitter.com/LasLomasPage" class="twitter-follow-button" data-show-count="false" data-dnt="true">Follow @LasLomasPage</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				
		</div>
	</div>				
	</div>	
	
	
	
	<div class="large-12 columns">
		<hr/>
	</div>
	
	<div class="row">
		<div class="large-12 columns">
		
		<p class="right"></p>
		<p>Copyright &copy; The Las Lomas Page 2002-<?php echo date('Y'); ?>. All rights reserved.</p>		
		
					</div>
				</div>
			</div>

			</section>


		<script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/foundation/foundation.js"></script>
		
		<script src="<?php bloginfo('template_url'); ?>/js/foundation/foundation.tab.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/foundation/foundation.offcanvas.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/foundation/foundation.alert.js"></script>

		<script src="<?php bloginfo('template_url'); ?>/js/respond.js"></script>
		
		
		<a href="#" class="back-to-top">&uarr;  Back to Top</a>
		
		<script>
		jQuery(document).ready(function() {
		    var offset = 220;
		    var duration = 500;
		    jQuery(window).scroll(function() {
		        if (jQuery(this).scrollTop() > offset) {
		            jQuery('.back-to-top').fadeIn(duration);
		        } else {
		            jQuery('.back-to-top').fadeOut(duration);
		        }
		    });
		    
		    jQuery('.back-to-top').click(function(event) {
		        event.preventDefault();
		        jQuery('html, body').animate({scrollTop: 0}, duration);
		        return false;
		    })
		});
		</script>
		
		

		<script>
		  $(document).foundation();
		</script>

		<script>
		  var navigation = responsiveNav("#nav");
		</script>
				
		<?php wp_footer(); ?>
		
		</div>
		</div>
		</div>
	
	</div>
	
	
	
	
	
	</section>
	
	  <a class="exit-off-canvas"></a>
	
	  </div>
	</div>
	
	
	
	</body>

</html> <!-- end page. what a ride! -->