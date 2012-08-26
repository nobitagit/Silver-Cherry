<?php function silverCherry_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?>>
		<article id="comment-<?php comment_ID(); ?>">
			<header class="comment-author vcard">
				<?php echo get_avatar($comment,$size='40'); ?>
				<?php printf(__('<cite class="fn">%s</cite>', 'silverCherry'), get_comment_author_link()) ?>
				<time datetime="<?php echo comment_date('c') ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s', 'silverCherry'), get_comment_date(),  get_comment_time()) ?></a></time>
				<?php edit_comment_link(__('(Edit)', 'silverCherry'), '', '') ?>
			</header>
			
			<?php if ($comment->comment_approved == '0') : ?>
       			<div class="panel">
					<p class="bottom"><?php _e('Your comment is awaiting moderation.', 'silverCherry') ?></p>
          		</div>
			<?php endif; ?>
			
			<section class="comment">
				<?php comment_text() ?>
			</section>
			
			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
			
		</article>
<?php } ?>

<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die (__('Please do not load this page directly. Thanks!', 'silverCherry'));

	if ( post_password_required() ) { ?>
	<section id="comments">
		<div class="panel">
			<p class="bottom"><?php _e('This post is password protected. Enter the password to view comments.', 'silverCherry'); ?></p>
		</div>
	</section>
	<?php
		return;
	}
?>
<?php // You can start editing here. Customize the respond form below ?>
<?php if ( have_comments() ) : ?>
	<section id="comments">
		<h3><?php comments_number(__('No comments until now.', 'silverCherry'), __('One comment.', 'silverCherry'), __('% comments', 'silverCherry') ); ?></h3>
		<?php wp_list_comments(array(
    'walker'            => null,
    'style'             => 'div',
    'callback'          => null,
    'end-callback'      => null,
    'type'              => 'all',
    'avatar_size'       => 45,
	'reply_text'        => '<span class="small grey label">Reply</span>',
    'reverse_top_level' => null )); ?>
		<?php // wp_list_comments(); ?>
		<footer>
			<nav id="comments-nav">
				<div class="comments-previous left"><?php previous_comments_link( __( '<span class="white nice button radius fadeIn">Older comments</span>', 'silverCherry' ) ); ?></div>
				<div class="comments-next right"><?php next_comments_link( __( '<span class="white nice button radius fadeIn">Newer comments</span>', 'silverCherry' ) ); ?></div>
			</nav>
		</footer>
	</section>
<?php else : // this is displayed if there are no comments so far ?>
	<?php if ( comments_open() ) : ?>
	<?php else : // comments are closed ?>
	<section id="comments">
		<div class="panel">
			<p class="bottom"><?php _e('Comments are closed.', 'silverCherry') ?></p>
		</div>
	</section>
	<?php endif; ?>
<?php endif; ?>
<?php if ( comments_open() ) : ?>
<section id="respond">
	<h3><?php comment_form_title( __('Leave a Reply', 'silverCherry'), __('Leave a Reply to %s', 'silverCherry') ); ?></h3>
	<p class="cancel-comment-reply"><?php cancel_comment_reply_link(); ?></p>
	<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
	<p><?php printf( __('You must be <a href="%s">logged in</a> to post a comment.', 'silverCherry'), wp_login_url( get_permalink() ) ); ?></p>
	<?php else : ?>
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="nice">
		<?php if ( is_user_logged_in() ) : ?>
		<p>
		
         
 <?php printf(__('Logged in as <a href="%s/wp-admin/profile.php">%s</a>.', 'silverCherry'), get_option('siteurl'), $user_identity); ?><br />
		<?php global $current_user; get_currentuserinfo();
       	 echo get_avatar( $current_user->ID, 65 ); ?>
         
          <br />
 			<a href="<?php echo wp_logout_url(get_permalink()); ?>" class="grey radius label fadeIn" title="<?php __('Log out of this account', 'silverCherry');  ?>"><?php _e('Log out &raquo;', 'silverCherry'); ?></a>
         </p>
		<?php else : ?>
		<p>
			<label for="author"><?php _e('Name', 'silverCherry'); if ($req) _e(' (required)', 'silverCherry'); ?></label>
			<input type="text" class="input-text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?>>
		</p>
		<p>
			<label for="email"><?php _e('Email (will not be published)', 'silverCherry'); if ($req) _e(' (required)', 'silverCherry'); ?></label>
			<input type="email" class="input-text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?>>
		</p>
		<p>
			<label for="url"><?php _e('Website', 'silverCherry'); ?></label>
			<input type="url" class="input-text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3">
		</p>
		<?php endif; ?>
		<p>
			<label for="comment"><?php _e('Your message', 'silverCherry'); ?></label>
			<textarea name="comment" id="comment" tabindex="4"></textarea>
		</p>
		
		<p><input name="submit" class="cherry radius small button fadeIn" type="submit" id="submit" tabindex="5" value="<?php _e('Submit', 'silverCherry'); ?>"></p>
		<?php comment_id_fields(); ?>
		<?php do_action('comment_form', $post->ID); ?>
	</form>
	<?php endif; // If registration required and not logged in ?>
</section>
<?php endif; // if you delete this the sky will fall on your head ?>