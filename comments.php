<?php ?>
 
<?php if ( post_password_required() ) return; ?>
 
    <?php if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])){ die ('Please do not load this page directly. Thanks!'); }
 if ( post_password_required() ) { ?>
	<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.'); ?></p>
    <?php return; } ?>
        
     <div id="comments" class="comments-area large-9 columns">
     
     
     
     
     
        
        
     <?php function ahs_comment($comment, $args, $depth) { $GLOBALS['comment'] = $comment; ?>
        <li <?php comment_class(empty($args['has_children']) ? '' : 'parent'); ?> id="li-comment-<?php comment_ID() ?>">
          <div id="comment-<?php comment_ID(); ?>">
          	<div class="comment-data">
          	<div class="comment-data2">
     			<div class="avatarnreply">
     			 <?php echo get_avatar($comment,$size='78',$default=get_bloginfo('stylesheet_directory').'/images/comment-avatar.png' ); ?>
     			
     			  <div class="reply">
     			     <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
     			  </div>
     			</div>
     			
     			<div class="commentbody">
     				<h4><?php printf(__('%s'), get_comment_author_link()) ?><?php edit_comment_link(__('Edit'),'<span class="sm"> | ','</span>') ?></h4>
     				<div class="dateandtime"><?php printf(__('%1$s  &nbsp;  %2$s'), get_comment_date('m/d/Y'),  get_comment_time('H:iA')) ?></a></div>
     				
     				<?php comment_text() ?>
     				
     				<?php if ($comment->comment_approved == '0') : ?>
     				 <br /><em><?php _e('Your comment is awaiting moderation.') ?></em>
     				<?php endif; ?>
     			</div>
     			<div class="clr">&nbsp;</div>     	
          	</div>
          	</div>
     		<div class="clr">&nbsp;</div>     	
          </div>
     <?php } ?>   
     
     

    <?php if ( have_comments() ) : ?>
    

    <?php $comments_per_page = 5;
    global $post;
    $total = $post->comment_count;
    if($total > 0) {
    $apage=isset($_GET['apage']) ? intval($_GET['apage']) : 1;
    $comments=array_slice($comments, intval(($apage-1)*$comments_per_page),intval($comments_per_page));
    } ?>
    
    <?php $commentCounter = (($apage-1)*$comments_per_page);
    $from_page = $commentCounter+1;
    if($apage == 1) {
    $to_page = $comments_per_page;
    if($total < $to_page) {
    $to_page = $total;
    }
    }
    else {
    $to_page = $from_page + $comments_per_page - 1;
    if($to_page > $total) {
    $to_page = $total;
    }
    } ?>
    
	
	<br/>
	
    	<div class="response-header rs-rh">
        	<h3 id="comments" class="rs-h3"><?php comments_number('No Responses. Add your thoughts!', 'One comment. Add your thoughts!', '% comments');?></h3>
        	<p class="rs-p"><a href="#commentform">Comment</a></p>
        </div>

            <div class="navigation">
                <div class="alignleft"></div>
                <div class="alignright"></div>
            </div>
            
            
						
								            
				       <ol class="commentlist">
				       
					       <?php $comment_paged = ( get_query_var('cpage') && get_query_var('cpage') > 1 ) ? get_query_var('cpage') : 1; foreach ($comments as $comment) : ?>
					   
							<div class="large-12 columns the-comment">	
							
								<div class="large-12 columns">
								
									<div class="comment-container">
								
										<div class="comment-content">
											
											<div class="large-2 columns comment-img">
												<?php $email = get_comment_author_email(); echo get_avatar( $email , 140); ?>
												<br/>
												<p class="comment-author-name"><?php comment_author(); ?></p>
											</div>
											
											<div class="large-10 columns">
											<li id="comment-<?php comment_ID() ?>" class="comment-body">
												<div class="quote"><?php comment_text() ?></div>
												
												<p><a class="reply-link" href="<?php the_permalink(); ?>?replytocom=<?php comment_ID() ?>#commentform">Reply</a></p>

												<p class="comment-small"><?php the_time(); ?></p>
												
												<?php echo get_comment_reply_link(); ?>
												<?php edit_comment_link('Edit','<span class="edit-comment-link">','</span>'); ?> 
												
												
												<?php if ($comment->comment_approved == '0') : ?>
												<em>Your comment is awaiting moderation.</em>
												<?php endif; ?>
											</li>
											</div>
											
											<div style="clear: both;"></div>
											
										</div>
									
									</div>
								
								</div>
								
											   
					       		
					       		<!--<div class="large-4 columns">
					       		
							       =
							       <p style="vertical-align:middle"><?php echo get_avatar( $id_or_email, $size = '124'); ?></p>
							       
							       <cite class="comment-info text-right"><?php comment_author_link() ?><br/> 
							       
							       <a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('M j, Y') ?> at <?php comment_time() ?> 

							       <br/>
							       <br/>
							       
							      <?php edit_comment_link('Edit','<span class="edit-comment-link">','</span>'); ?> 
							       <?php delete_comment_link(get_comment_ID()); ?> 
							       
							       <?php comment_reply_link( array ( 'reply_text' => 'Reply' ) ); ?>
							       
							       </a></cite>
							    </div> 
							    
							

						       	<div class="large-8 columns">
						       	
							       =
							       <li id="comment-<?php comment_ID() ?>" class="comment-body">
							       <div class="quote"><?php comment_text() ?></div>
							       
							       <?php if ($comment->comment_approved == '0') : ?>
							       <em>Your comment is awaiting moderation.</em>
							       <?php endif; ?>
						        </div> -->
					       		
					       		
					       		 </div><!-- end comment design -->
					       	<?php endforeach; /* end for each comment */ ?>
				       </ol>
				       
				 
				       
            <?php echo paginate_links( array(
            'base' => add_query_arg( 'apage', '%#%#comments' ),
            'format' => '',
            'total' => ceil($total / intval($comments_per_page)),
            'current' => $apage
            )); ?>
            
            <br/><br/>
            

        <?php
        if ( ! comments_open() ) : // There are comments but comments are now closed
            echo"<p class='nocomments'>Comments are closed.</p>";
        endif;
     
    else : // I.E. There are no Comments
        if ( comments_open() ) : // Comments are open, but there are none yet
            // echo"<p>Be the first to write a comment.</p>";
        else : // comments are closed
            echo"<p class='nocomments'>Comments are closed.</p>";
        endif;
    endif;
     
    // Display Form/Login info Section
    // the comment_form() function handles this and can be used without any paramaters simply as "comment_form()"
    comment_form(array(
      // see codex http://codex.wordpress.org/Function_Reference/comment_form for default values
      // tutorial here http://blogaliving.com/wordpress-adding-comment_form-theme/
      'comment_field' => '<p>Comment*<textarea name="comment" id="comment" cols="58" rows="10" tabindex="4" aria-required="true"></textarea></p>',
      'label_submit' => 'Add Comment',
      'comment_notes_after' => '',
      'title_reply'=>'Comment' 
      ));
     
    ?>
    
    <?php $page_comment = get_query_var('cpage'); if ($page_comment > 1) { ?>
   
	   	<?php echo paginate_links( array(
	   	'base' => add_query_arg( 'apage', '%#%#comments' ),
	   	'format' => '',
	   	'total' => ceil($total / intval($comments_per_page)),
	   	'current' => $apage
	   	)); ?>
   
    <?php } ?>

    
    </div><!-- #comments .comments-area -->