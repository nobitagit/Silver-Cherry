<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if (!have_posts()) : ?>
	<div class="panel">
		<p class="bottom"><?php _e('Sorry, no results were found.', 'reverie'); ?><br />
        Maybe try another search?</p>
        
	</div>
		
<?php endif; ?>

<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header>
        <span class="meta-post"><?php echo get_the_date(); ?></span>
     <h2><a href="<?php the_permalink(); ?>" class="fadeIn">
     <?php if(the_title( '', '', false ) !='') the_title(); else 
	 /* handles posts with no title */
	 echo 'Untitled';?>  </a></h2>
     
     <div class="meta-post">
    	<p class="right">
        	<?php /* highlight the bubble of comments only if comments are present*/ ?>
            <?php $num_comments = get_comments_number();  ?>
			 
			<?php if ( $num_comments == 0 ) : ?>
			<a href="<?php comments_link(); ?>" class="spch-bub-inside fadeIn">
        
            <?php else : ?>
			<a href="<?php comments_link(); ?>" class="spch-bub-inside bub-commented fadeIn">

            <?php endif; ?>
            
            <span class="point"></span>  
        	<em class=""><?php comments_number('0', '1', '%'); ?></em>
      		<span class="show-on-desktops"><?php comments_number('comments', 'comment', 'comments'); ?></span></a>
       </p>
    	<span class="post-categories fadeIn"><?php the_category('  &bull; '); ?></span>
    </div>
		</header>
		<div class="entry-content">
			<?php the_content('<span class="cherry radius label fadeIn">Continue reading </span>'); ?>
		</div>
		<footer>
  <!--tags' labels are here -->
        <!-- uncomment to show author ...
        <span class="meta-post">By: <?php // the_author_posts_link(); ?></span><br /> 
            ... -->
            
			  <?php
			  if(get_the_tag_list()) {
			      echo get_the_tag_list('<span class="meta-post">Tags: <span class="grey radius label fadeIn">',
			  						'</span>  <span class="grey radius label fadeIn">',
			  						'</span></span><br />');
			  						}
			  ?>
			  
		</footer>
		<div class="divider"></div>
	</article>

<?php endwhile; // End the loop ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ($wp_query->max_num_pages > 1) : ?>
	<nav id="post-nav">
		<div class="post-previous left"><?php next_posts_link( __( '<span class="white nice button radius fadeIn">Older posts</span>', 'reverie' ) ); ?></div>
		<div class="post-next right"><?php previous_posts_link( __( '<span class="white nice button radius fadeIn">Newer posts</span>', 'reverie' ) ); ?></div>
	</nav>
<?php endif; ?>