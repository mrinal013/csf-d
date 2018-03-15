<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Field: Datepicker
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
class CSFramework_Option_date_picker extends CSFramework_Options {

  public function __construct( $field, $value = '', $unique = '' ) {
    parent::__construct( $field, $value, $unique );
  }

  public function output() {

    echo $this->element_before();
    echo '<input type="text" id="datepicker">';
    echo $this->element_after();

  }

}

add_action( 'admin_enqueue_scripts', 'admin_scripts' );
if ( ! function_exists( 'admin_scripts' ) ) {
	/**
	 * Load jquery ui datepicker script and stylesheet.
	 */
	function admin_scripts() {
		wp_enqueue_style( 'jquery-ui-css', '//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css' );
		wp_enqueue_script('jquery-ui', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js', array('jquery'));
	}
} // endif function_exists( 'admin_scripts' )

add_action('admin_footer', 'my_admin_add_js');
function my_admin_add_js() {
  echo '<script>$( "#datepicker" ).datepicker();</script>';
}
