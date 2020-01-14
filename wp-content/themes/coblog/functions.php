<?php
/**
 * Theme functions and definitions
 * @package coblog
*/
defined('ABSPATH') || exit;

define( 'COBLOG_VERSION', '1.0.2' );

// Custom template tags for this theme.
require_once get_parent_theme_file_path( '/inc/template-tags.php' );

// Customizer additions.
require_once get_parent_theme_file_path( '/inc/customizer.php' );

// Functions which enhance the theme by hooking into WordPress.
require_once get_parent_theme_file_path( '/inc/template-functions.php' );

// Add Widget
require_once get_parent_theme_file_path( '/inc/widget/latest-posts.php' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function coblog_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'coblog_skip_link_focus_fix' );