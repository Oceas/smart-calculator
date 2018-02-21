<?php
/*
Plugin Name:  GCS - Smart Calculator
Plugin URI:   https://getcodesmart.com
Description:  Simple 4 function calculator to embed where you need it through shortcode.
Version:      0.1
Author:       Get Code Smart
Author URI:   https://getcodesmart.com/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/

add_action('wp_enqueue_scripts', 'gcs_smart_calulator_scripts');
function gcs_smart_calulator_scripts()
{
    wp_enqueue_style('gcs_calculator_style', plugins_url('/css/gcs_calculator_style.css', __FILE__));
    wp_enqueue_script('gcs_calculator_core', plugins_url('/javascript/gcs_calculator.js', __FILE__), array(), '1.0.0', true);
}

//[gcs-four-function-calculator]
function gcs_calculator($atts)
{
    ob_start();
    include dirname(__FILE__) . '/templates/gcs_calculator_template.php';
    return ob_get_clean();
}

add_shortcode('gcs-four-function-calculator', 'gcs_calculator');

?>