<?php get_header(); ?>
               
				<div id="main" role="main">
					<div class="post-box">
						<h3>
					<?php if (is_day()) : ?>
						<?php printf(__('Daily Archives: %s', 'silverCherry'), get_the_date()); ?>
					<?php elseif (is_month()) : ?>
						<?php printf(__('Monthly Archives: %s', 'silverCherry'), get_the_date('F Y')); ?>
					<?php elseif (is_year()) : ?>
						<?php printf(__('Yearly Archives: %s', 'silverCherry'), get_the_date('Y')); ?>
					<?php else : ?>
						<?php single_cat_title(); ?>
					<?php endif; ?>
				</h3>
				<hr>
				<?php get_template_part('loop', 'category'); ?>
					</div>
				</div><!-- /#main -->
        
    		</div><!-- /* container of nav+main -->

			<!-- sidebar container --->
            <div class="four columns sidebar-box" role="complementary">            
            	<?php get_sidebar(); ?>
            </div><!-- /* sidebar container --->
            
    	</div><!-- /* container of Nav +  Main + Aside -->

<?php get_footer(); ?>
