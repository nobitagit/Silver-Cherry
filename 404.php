<?php get_header(); ?>

	<!-- Row for main content area -->
	<div id="content" class="row">
	
		<div id="main" class="twelve columns" role="main">
			<div class="post-box">
				<h1><?php _e('Wow, this is embarassing...', 'reverie'); ?></h1>
				<div class="error">
					<p class="bottom"><?php _e('The page you are looking for might be temporarily unavailable, had its name changed, or might have been removed by aliens.', 'reverie'); ?></p>
				</div>
				<p><?php _e('Please try the following:', 'reverie'); ?></p>
				<ul> 
					<li><?php printf(__('- Return to the <a href="%s">home page</a>', 'reverie'), home_url()); ?></li>
					<li><?php _e('- Click the <a href="javascript:history.back()">Back</a> button', 'reverie'); ?></li>
					<li><?php _e('- Check your spelling and search again', 'reverie'); ?></li>
				</ul>
			</div>
		</div><!-- /#main -->
		
		
	</div><!-- End main row -->
	
			
	</div><!-- Container End -->

	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-ui-1.8.18.custom.min.js"></script>
	<!-- Included JS Files of Foundation -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/foundation.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/myjquery.js"></script>
	
	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	     chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7]>
		<script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->
	
	<?php wp_footer(); ?>
</body>