<?php
function reverie_setup() {
	// Add language supports. Please note that Reverie Framework does not include language files.
	load_theme_textdomain('reverie', get_template_directory() . '/lang');
	
	// Add post thumbnail supports. http://codex.wordpress.org/Post_Thumbnails
	add_theme_support('post-thumbnails');
	// set_post_thumbnail_size(150, 150, false);
	
	// Add post formarts supports. http://codex.wordpress.org/Post_Formats
	add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));
	
	// Add menu supports. http://codex.wordpress.org/Function_Reference/register_nav_menus
	add_theme_support('menus');
	register_nav_menus(array(
		'primary_navigation' => __('Primary Navigation', 'reverie'),
		'utility_navigation' => __('Utility Navigation', 'reverie')
	));	
}
add_action('after_setup_theme', 'reverie_setup');

// create widget areas: sidebar, footer
$sidebars = array('Sidebar');
foreach ($sidebars as $sidebar) {
	register_sidebar(array('name'=> $sidebar,
		'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="sidebar-section twelve columns">',
		'after_widget' => '</div></article>',
		'before_title' => '<h6><strong>',
		'after_title' => '</strong></h6>'
	));
}
$sidebars = array('Footer');
foreach ($sidebars as $sidebar) {
	register_sidebar(array('name'=> $sidebar,
		'before_widget' => '<article id="%1$s" class="four columns widget %2$s"><div class="footer-section">',
		'after_widget' => '</div></article>',
		'before_title' => '<h6><strong>',
		'after_title' => '</strong></h6>'
	));
}

// return entry meta information for posts, used by multiple loops.
function reverie_entry_meta() {
	echo '<p class="byline author vcard meta-post">'.' <a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .'</a>, <time class="updated" datetime="'. get_the_time('c') .'" >'. sprintf(get_the_time('jS F Y'), get_the_time()) .'</time></p>';
}


// Clean the output of attributes of images in editor. Courtesy of SitePoint. http://www.sitepoint.com/wordpress-change-img-tag-html/
function image_tag_class($class, $id, $align, $size) {
	$align = 'align' . esc_attr($align);
	return $align;
}
add_filter('get_image_tag_class', 'image_tag_class', 0, 4);
function image_tag($html, $id, $alt, $title) {
	return preg_replace(array(
			'/\s+width="\d+"/i',
			'/\s+height="\d+"/i',
			'/alt=""/i'
		),
		array(
			'',
			'',
			'',
			'alt="' . $title . '"'
		),
		$html);
}
add_filter('get_image_tag', 'image_tag', 0, 4);

// Customize the output of menus to fit the ZURB navigation style. Courtesy of Kriesi.at. http://www.kriesi.at/archives/improve-your-wordpress-navigation-menu-output
class description_walker extends Walker_Nav_Menu
{
	function start_el(&$output, $item, $depth, $args)
	{
		global $wp_query;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		
		$class_names = $value = '';
		
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
		$class_names = ' class="'. esc_attr( $class_names ) . '"';
		
		$output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
		
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		
		$prepend = '';
		$append = '';
		$description  = ! empty( $item->description ) ? '' : '';
		
		if($depth != 0)
		{
			$description = $append = $prepend = "";
		}
		
		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
		$item_output .= $description.$args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;
		
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

// img unautop, Courtesy of Interconnectit http://interconnectit.com/2175/how-to-remove-p-tags-from-images-in-wordpress/
function img_unautop($pee) {
    $pee = preg_replace('/<p>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s', '<figure>$1</figure>', $pee);
    return $pee;
}
add_filter( 'the_content', 'img_unautop', 30 );


// Silver Cherry customs

// —————Add Settings to General Settings—————–
// courtesy of http://www.marketingtechblog.com/add-general-settings-wordpress-api/

//to get the output of the user settings simply copy, paste, edit and uncomment this sample line 
// <?php echo get_option('general_setting_facebook'); ?/*>
function social_settings_api_init() {
// Add the section to general settings so we can add our
// fields to it
add_settings_section('social_setting_section',
'Social sites on the web',
'social_setting_section_callback_function',
'general');
// Add the field with the names and function to use for our new
// settings, put it in our new section
add_settings_field('general_setting_facebook',
'Facebook Page',
'general_setting_facebook_callback_function',
'general',
'social_setting_section');
// Register our setting so that $_POST handling is done for us and
// our callback function just has to echo the <input>
register_setting('general','general_setting_facebook');
add_settings_field('general_setting_twitter',
'Twitter Account',
'general_setting_twitter_callback_function',
'general',
'social_setting_section');
register_setting('general','general_setting_twitter');
add_settings_field('general_setting_googleplus',
'Google Plus Page',
'general_setting_googleplus_callback_function',
'general',
'social_setting_section');
register_setting('general','general_setting_googleplus');
add_settings_field('general_setting_youtube',
'YouTube Page',
'general_setting_youtube_callback_function',
'general',
'social_setting_section');
register_setting('general','general_setting_youtube');
add_settings_field('general_setting_linkedin',
'LinkedIn Page',
'general_setting_linkedin_callback_function',
'general',
'social_setting_section');
register_setting('general','general_setting_linkedin');
}
add_action('admin_init', 'social_settings_api_init');
// —————-Settings section callback function———————-
function social_setting_section_callback_function() {
echo '<p>Please fille these forms to link to your social profiles. <br />Go to your profile, <b>copy the address of you page</b>, then <b>paste it in the appropriate field here below</b>. Click save and enjoy.</p>';
}
function general_setting_facebook_callback_function() {
echo '<input name="general_setting_facebook" id="general_setting_facebook" type="text" value="'. get_option('general_setting_facebook') .'" />';
}
function general_setting_twitter_callback_function() {
echo '<input name="general_setting_twitter" id="general_setting_twitter" type="text" value="'. get_option('general_setting_twitter') .'" />';
}
function general_setting_googleplus_callback_function() {
echo '<input name="general_setting_googleplus" id="general_setting_googleplus" type="text" value="'. get_option('general_setting_googleplus') .'" />';
}
function general_setting_youtube_callback_function() {
echo '<input name="general_setting_youtube" id="general_setting_youtube" type="text" value="'. get_option('general_setting_youtube') .'" />';
}
function general_setting_linkedin_callback_function() {
echo '<input name="general_setting_linkedin" id="general_setting_linkedin" type="text" value="'. get_option('general_setting_linkedin') .'" />';
}




?>