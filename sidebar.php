            	<aside id="sidebar" role="complementary">
                    <div class="sidebar-box">
                       <?php get_search_form(); ?>
                     <div class="social-icons-container">
                       <a href="<?php echo get_option('general_setting_facebook'); ?>">
                       <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" class="social-icons fadeIn" alt="find me on facebook" />
                       </a>
                       <a href="<?php echo get_option('general_setting_twitter'); ?>">
                       <img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" class="social-icons fadeIn" alt="find on the twitters" />
                       </a>
                       <a href="<?php bloginfo('rss2_url'); ?>">
                       <img src="<?php echo get_template_directory_uri(); ?>/images/rss.png" class="social-icons fadeIn" alt="find on the twitters" />
                       </a>
                      </div>
						<?php dynamic_sidebar("Sidebar"); ?>
                    </div>
           
				</aside><!-- /#sidebar -->
