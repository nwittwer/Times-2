<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<br/>
		
		<div class="row" style="margin:  0;">
		<div class="large-4 columns">
			<!-- check for thumbnail -->
			<a href="<?php the_permalink(); ?>">
			<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail();
			} else { ?>
			<img src="<?php echo catch_that_image(); ?>"/>
			<?php } ?>
			</a>
		</div>
		
		<div class="large-8 columns">
			<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			<p><?php the_time(); ?></p>
			<p><?php the_excerpt(); ?></p>
			<br/>
			<a href="<?php the_permalink(); ?>"><span class="more">Continue reading</span></a>
		</div>
		</div>
		
		<br/>
		
		<hr/>	
	
	<?php endwhile; ?>
	
	
<?php endif; ?>