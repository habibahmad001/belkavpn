<?php

require_once get_template_directory() . '/inc/theme-settings.php';
require_once get_template_directory() . '/inc/widget-areas.php';
require_once get_template_directory() . '/inc/enqueue-script-style.php';
require_once get_template_directory() . '/inc/post-types.php';

require get_template_directory() . '/inc/custom-header.php';

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/template-functions.php';

require get_template_directory() . '/inc/customizer.php';

/*Carbon-Fields*/
add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
  require_once( get_template_directory() . '/inc/carbon-fields/vendor/autoload.php' );
  \Carbon_Fields\Carbon_Fields::boot();
}
add_action('carbon_fields_register_fields', 'crb_register_custom_fields');
function crb_register_custom_fields() {
  require get_template_directory() . '/inc/custom-fields-options/metabox.php';
  require get_template_directory() . '/inc/custom-fields-options/theme-options.php';
}
/*Carbon-Fields*/

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

