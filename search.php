<?php get_header(); ?>
       
        
				<div id="main" role="main">
                    <div class="post-box">
                    	
                        <h3><img src="<?php bloginfo('template_directory'); ?>/images/06-magnify.png" height="16px" width="16px"><?php _e('', 'silverCherry'); ?> '<?php echo get_search_query(); ?>'</h3> 
                        <div class="divider"></div>
                        <?php get_template_part('loop', 'search'); ?>
                    </div>
				</div><!-- /#main -->
        
        
    		</div><!-- /* container of nav+main -->

			<!-- sidebar container --->
            <div class="four columns" role="container">
            
            	<?php get_sidebar(); ?>

            </div><!-- /* sidebar container --->
            
    	</div><!-- /* container of Nav +  Main + Aside -->

	
	
<?php get_footer(); ?>