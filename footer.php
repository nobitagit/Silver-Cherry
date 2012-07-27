		<footer id="content-info" class="footer-container" role="contentinfo">
			<div class="row">
				<?php dynamic_sidebar("Footer"); ?>
			</div>
			<div id="credits" class="row">
				<div class="nine columns">
					
					<p class="hide-on-phones"><?php bloginfo('name'); ?> is based on the Silver Cherry theme delivered by Pixelite. <br />
                    Powered by <a href="http://foundation.zurb.com/">Foundation</a>  &amp; <a href="http://themefortress.com/reverie/" title="Reverie Framework">Reverie Framework</a>.</p>
				</div>
                <div class="three columns">
				<a href="#top" id="scrollTop" class="white nice button radius fadeIn">back to top</a>
                </div>
			</div>
		</footer>
			
	</div><!-- Container End -->

	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-ui-1.8.18.custom.min.js"></script>

	<!-- Included JS Files of Foundation -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/foundation.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/myjquery.js"></script>
    
	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	     chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7]>
		<script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->
	
	<?php wp_footer(); ?>
</body>
</html>