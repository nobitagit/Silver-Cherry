<?php get_header(); ?>
               
				<div id="content" role="main">
					<div class="post-box">
						<?php get_template_part('loop', 'page'); ?>
					</div>
				</div><!-- /#main -->
        
    		</div><!-- /* container of nav+main -->

			<!-- sidebar container --->
            <div class="four columns sidebar-box" role="complementary">            
            	<?php get_sidebar(); ?>
            </div><!-- /* sidebar container --->
            
    	</div><!-- /* container of Nav +  Main + Aside -->

<?php get_footer(); ?>
