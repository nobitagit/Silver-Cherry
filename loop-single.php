<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<header>
        	<span class="meta-post"><?php echo get_the_date(); ?></span>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		
			 	<div class="meta-post">
			    	<p class="right">
			        	<?php /* highlight the bubble of comments only if we got comments */ ?>
			            <?php $num_comments = get_comments_number();  ?>
						 
						<?php if ( $num_comments == 0 ) : ?>
						<a href="<?php comments_link(); ?>" class="spch-bub-inside fadeIn">
			        
			            <?php else : ?>
						<a href="<?php comments_link(); ?>" class="spch-bub-inside bub-commented fadeIn">
			
			            <?php endif; ?>
			            
			            <span class="point fadeIn"></span>  
			        	<em class="fadeIn"><?php comments_number('0', '1', '%'); ?></em>
			      		<span class="show-on-desktops"><?php comments_number('comments', 'comment', 'comments'); ?></span></a>
			       </p>
                   
					<span class="post-categories fadeIn"><?php the_category('  &bull; '); ?></span>
			    </div>
			
		</header>
		<div class="entry-content">

			<?php the_content(); ?>
            
            		<footer>
        <?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'silverCherry'), 'after' => '</p></nav>' )); ?>
                
            
		</footer>

            
		</div>
		<footer>
        <!-- uncomment to show author ...
        			<span class="meta-post">By: <span class="post-categories fadeIn">
			    	<?php // the_author_posts_link(); ?>, 
					</span></span><br />
        ... -->
        
        <!--tags' labels are here -->
            
<?php
if(get_the_tag_list()) {
    echo get_the_tag_list('<span class="meta-post">Tags: <span class="grey radius label fadeIn">',
						'</span>  <span class="grey radius label fadeIn">',
						'</span></span><br />');
						}
?>
        
        
			
			
		</footer>
        <div class="divider"></div>
		<?php comments_template(); ?>
	</article>
<?php endwhile; // End the loop ?>