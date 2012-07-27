<?php /* Start loop */ ?>

<?php while (have_posts()) : the_post(); ?>
	<h1><?php the_title(); ?></h1>
    

	<?php the_content(); ?>
    
    
    	<footer>
        
        <?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
		
		</footer>
        <div class="divider"></div>
		<?php comments_template(); ?>

    
	
<?php endwhile; // End the loop ?>
		
