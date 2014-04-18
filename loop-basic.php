<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<!-- check for thumbnail -->
		<a href="<?php the_permalink(); ?>">
		<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail();
		} else { ?>
		<img src="<?php echo catch_that_image(); ?>"/>
		<?php } ?>
		</a>
		
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<p>Posted <?php the_time(); ?></p>
		<p><?php the_excerpt(); ?></p>
		
		<br/>
		
		<a href="<?php the_permalink(); ?>"><span class="more">Continue reading</span></a>
		
	<?php endwhile; ?>
<?php endif; ?>