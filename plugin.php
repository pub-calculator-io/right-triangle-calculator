<?php
/*
Plugin Name: Right Triangle Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/right-triangle-calculator/
Description: Right triangle calculator finds missing triangle measurements. It calculates side lengths, angles, perimeter, area, altitude-to-hypotenuse, inradius, and circumradius.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_right_triangle_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Right Triangle Calculator by Calculator.iO";

function display_ci_right_triangle_calculator(){
    $page = 'index.html';
    return '<h2><a href="https://www.calculator.io/right-triangle-calculator/" target="_blank"><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48"></a> Right Triangle Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_right_triangle_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_right_triangle_calculator', 'display_ci_right_triangle_calculator' );