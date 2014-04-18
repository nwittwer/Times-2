<?php get_header(); ?>

<!-- MAIN CONTENT -->

<?php if ( is_home() and !is_paged() ) { ?>
<?php } ?>

	<!-- GET READY FOR A SLIDER (WITH OPTIONS CHECKBOX! 
	<?php
	if (isset($_POST['sport'])) {
	    // do something
	} 
	?>
	-->
	
	
	<!-- ================================= -->
	<!-- ======== BEGIN HOME PAGE ======== -->
	<!-- ================================= -->
	
<!--	<!-- Quick Story --*>
	
	<div class="row" id="first-featured-article">
	<?php query_posts('category_name=mini&showposts=1'); ?>
			<?php $counter = 0; if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				
					 <?php if( $counter ) : ?>
					 <? else : ?>
						
						<div class="large-6 columns">
								<h4 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark">
								<div class="clear"></div>
								<?php the_title(); ?>
								</a></h4>
						</div>
						
						<div class="large-6 columns">
							<p class="entry-summary"><?php echo get_excerpt(250); ?>
							<a class="link" href="<?php the_permalink(); ?>">Read More &raquo;</a>
						</div>	
						
					<?php endif; ?>
					<?php $counter++; ?>
					<?php endwhile; ?>
<?php endif; ?>
	
	<hr/>
	
	</div>-->

			<!--<div class="row">
				<div class="large-12 columns">
				
				<div data-alert class="alert-box info radius">
					Test alert
				</div>
				
				</div>
			</div>-->



		
	<!--============= First Content (Featured) =================-->
	
			<div class="row">
				<div class="large-12 columns">
				
				
				<!-- WP version -->
				<div class="large-4 medium-4 small-6 columns">
				<dl class="tabs vertical" data-tab>
				  
				  <a href="<?php echo home_url(); ?>/category/top-stories/"><span class="tabs-title">Featured Stories</span></a>
				  
				  <dd class="active">
					  <a href="#panel1a">
						<?php query_posts('category_name=top-stories&showposts=1'); if (have_posts()) { while (have_posts()) { the_post(); ?>
							<?php the_title(); ?>
						<?php }} wp_reset_query(); ?>
					  </a>
				  </dd>
				  
				  <dd>
					  <a href="#panel2a">
						  <?php query_posts('category_name=top-stories&showposts=1&offset=1'); if (have_posts()) { while (have_posts()) { the_post(); ?>
						  	<?php the_title(); ?>
						  <?php }} wp_reset_query(); ?>
					  </a>
				  </dd>
				  
				  <dd>
					  <a href="#panel3a">
					  	  <?php query_posts('category_name=top-stories&showposts=1&offset=2'); if (have_posts()) { while (have_posts()) { the_post(); ?>
					  	  	<?php the_title(); ?>
					  	  <?php }} wp_reset_query(); ?>
					  </a>
				  </dd>
				  
				  <dd>
					  <a href="#panel4a">
					  	  <?php query_posts('category_name=top-stories&showposts=1&offset=3'); if (have_posts()) { while (have_posts()) { the_post(); ?>
					  	  	<?php the_title(); ?>
					  	  <?php }} wp_reset_query(); ?>
					  </a>
				  </dd>
				  
				  <dd>
					  <a href="#panel5a">
					  	  <?php query_posts('category_name=top-stories&showposts=1&offset=4'); if (have_posts()) { while (have_posts()) { the_post(); ?>
					  	  	<?php the_title(); ?>
					  	  <?php }} wp_reset_query(); ?>
					  </a>
				  </dd>
				  
				  <a href="<?php echo home_url(); ?>/category/top-stories/"><span class="tabs-title">View all &rarr;</span></a>
				</dl>
				</div>
				
				<div class="large-8 medium-8 small-6 columns">
				<div class="tabs-content vertical" id="hp-image">
				  <div class="content active" id="panel1a">
					<?php query_posts('category_name=top-stories&showposts=1&offset=0'); ?>
							<?php include('loop-basic.php') ?>
					<?php wp_reset_query(); ?>
				  </div>
				  <div class="content" id="panel2a">
				    <?php query_posts('category_name=top-stories&showposts=1&offset=1'); ?>
				    		<?php include('loop-basic.php') ?>
				    <?php wp_reset_query(); ?>
				  </div>
				  <div class="content" id="panel3a">
				    <?php query_posts('category_name=top-stories&showposts=1&offset=2'); ?>
				    		<?php include('loop-basic.php') ?>
				    <?php wp_reset_query(); ?>
				  </div>
				  <div class="content" id="panel4a">
				    <?php query_posts('category_name=top-stories&showposts=1&offset=3'); ?>
				    		<?php include('loop-basic.php') ?>
				    <?php wp_reset_query(); ?>
				  </div>
				  <div class="content" id="panel5a">
				    <?php query_posts('category_name=top-stories&showposts=1&offset=4'); ?>
				    		<?php include('loop-basic.php') ?>
				    <?php wp_reset_query(); ?>
				  </div>
				</div>
				</div>
				
				</div>
				</div>
	
	
	<div class="large-12 columns">
		<br/>
		<hr/>
		<br/>
	</div>
	
	<div class="row">
	<div class="large-9 columns">
		
		<dl class="tabs" data-tab>
		  <span class="tabs-title">All Stories &amp; Categories</span>
		  <dd class="active"><a href="#panel2-1">All Stories</a></dd>
		  <dd><a href="#panel2-2">News</a></dd>
		  <dd><a href="#panel2-3">Sports</a></dd>
		  <dd><a href="#panel2-4">Features</a></dd>
		  <dd><a href="#panel2-5">Opinions</a></dd>
		  <dd><a href="#panel2-6" class="moretab">More</a></dd>
		</dl>
		
		<div class="tabs-content">
		
		
		  <div class="content active" id="panel2-1">
		    <?php query_posts('showposts=4'); ?>
		    		<?php include('loop-2-small.php') ?>
		    <?php wp_reset_query(); ?>
		  </div>
		  
		  <div class="content" id="panel2-2">
		    <?php query_posts('category_name=news&showposts=3'); ?>
		    		<?php include('loop-basic-2.php') ?>
		    <?php wp_reset_query(); ?>
		  </div>
		  
		  <div class="content" id="panel2-3">
		    <?php query_posts('category_name=sports&showposts=3'); ?>
		    		<?php include('loop-basic-2.php') ?>
		    <?php wp_reset_query(); ?>
		  </div>
		  
		  <div class="content" id="panel2-4">
		    <?php query_posts('category_name=features&showposts=3'); ?>
		    		<?php include('loop-basic-2.php') ?>
		    <?php wp_reset_query(); ?>
		  </div>
		  
		  <div class="content" id="panel2-5">
		    <?php query_posts('category_name=opinions&showposts=3'); ?>
		    		<?php include('loop-basic-2.php') ?>
		    <?php wp_reset_query(); ?>
		  </div>
		  
		  <div class="content" id="panel2-6">
		  <br/>
		    <a href="<?php echo home_url();?>/category/columns"><span class="more">Columns</span></a>
		    <a href="<?php echo home_url();?>/category/entertainment"><span class="more">Entertainment</span></a>
		    <a href="<?php echo home_url();?>/category/web-exclusives"><span class="more">Web Exclusives</span></a>
		  </div>
		</div>
	
	</div>


	<div class="large-3 columns">
		<a href="<?php echo home_url();?>/category/videos"><span class="tabs-title">Videos &rarr;</span></a>
		
		<br/>
		
		<?php query_posts('category_name=Videos&showposts=5'); ?>
				<?php $counter = 0; if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					
						 <?php if( $counter ) : ?>
							
							<!-- Display other videos -->
							
							<div class="six columns">
							<div class="flex-video" style="margin-left: -14px;">				
								<?php the_content(); ?>
							</div>
							</div>
							
		
						 <? else : ?>
							
							<!-- Display most recent video -->
							
							<div class="twelve columns">
							<div class="flex-video" style="margin-left: -14px;">				
								<?php the_content(); ?>
							</div>
							</div>
							
							
				<?php endif; ?>
				<?php $counter++; ?>
				<?php endwhile; ?>
				<?php endif; ?>
		
		
		
	</div>




		<?php if (function_exists('vote_poll') && !in_pollarchive()): ?>  
		  <div class="large-3 columns">
		  	<span class="tabs-title">Poll</span>
		  	
		  	<br/> 
			    <ul class="no-bullet poll-container">  
			      <li><?php get_poll();?></li>  
			    </ul>     
		  
		  </div>
		<?php endif; ?>

	


	</div>
	
	
	<!-- More Top Stories -->
			  <div class="row">
			  	<div class="large-12 columns">
			  	<h4>More Top Stories</h4>
				
			  	<ul class="small-block-grid-2 large-block-grid-6">
			  	
			  		<?php query_posts('category_name=top-stories&showposts=6&offset=8'); ?>
			  			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			  				
							<li>
			  				<!-- check for thumbnail -->
			  				<div class="cropped-thumb-container">
			  				<a href="<?php the_permalink(); ?>" class="cropped-thumb">
				  				<?php if ( has_post_thumbnail() ) {
				  				the_post_thumbnail('medium');
				  				} else { ?>
				  				<img src="<?php echo catch_that_image(); ?>"/>
				  				<?php } ?>
				  			</a>
			  				</div>
			  				</span>
			  				
			  				<!-- Title -->
							<p class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
							</li>
		
						<?php endwhile; ?>
				  	<?php endif; ?>
			  	</ul>
			  	
			  	</div> 
			  </div><!-- end row -->
	
	
	<div class="large-12 columns">
		<hr/>
	</div>
	
	<!-- ======= Begin Category Displays ========= -->
	<div class="row">
		<!-- News -->
		<div class="large-6 columns">
			<h3>News</h3>
			<?php query_posts('category_name=news&showposts=3'); ?>
	  			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	  				
						<h5 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
						<p><?php echo get_excerpt(250); ?></p>
						<hr/>

	  			<?php endwhile; ?>
		  	<?php endif; ?>	
		  	<a href="<?php echo home_url(); ?>/category/news" class="right"><span class="more-from-category">More articles</span></a>
		</div>
		
		
		
		
		<!-- Sports -->
		<div class="large-6 columns">
			<h3>Sports</h3>
			<?php query_posts('category_name=sports&showposts=3'); ?>
	  			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	  				
						<h5 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
						<p><?php echo get_excerpt(250); ?></p>
						<hr/>

	  			<?php endwhile; ?>
		  	<?php endif; ?>	
		  	<a href="<?php echo home_url(); ?>/category/sports" class="right"><span class="more-from-category">More articles</span></a>
		</div>
		<br/>
		<br/>
		</div>
		
		
		
		<div class="breathing-room"></div>		
		
		
		<div class="row">
		<!-- Features -->
		<div class="large-6 columns">
			<h3>Features</h3>
			<?php query_posts('category_name=features&showposts=3'); ?>
	  			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	  				
						<h5 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
						<p><?php echo get_excerpt(250); ?></p>
						<hr/>
	
	  			<?php endwhile; ?>
		  	<?php endif; ?>	
		  	<a href="<?php echo home_url(); ?>/category/features" class="right"><span class="more-from-category">More articles</span></a>
		</div>
		
		<!-- Opinions -->
		<div class="large-6 columns end">
			<h3>Opinions</h3>
			<?php query_posts('category_name=opinions&showposts=3'); ?>
	  			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	  				
						<h5 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
						<p><?php echo get_excerpt(300); ?></p>
						<hr/>
	
	  			<?php endwhile; ?>
		  	<?php endif; ?>	
		  	<a href="<?php echo home_url(); ?>/category/opinions" class="right"><span class="more-from-category">More articles</span></a>
		</div>
	</div><!-- end row -->


		
			
		</div>
		</div>
		    
	
		
			
		
		<?php get_footer(); ?>
		
	<?php wp_footer(); ?>			
	
	</body>
</html>