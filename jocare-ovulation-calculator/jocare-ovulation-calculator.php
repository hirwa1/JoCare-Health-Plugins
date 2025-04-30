<?php
/**
 * Plugin Name: JoCare® Ovulation Calculator
 * Plugin URI: 
 * Description: An ovulation calculator estimates how likely a woman is to release an egg on a particular day in her menstrual cycle.
 * Version: 0.4
 * Author: NIYIBIZI HIRWA
 * Author URI: https://kigalidevelopers.com/
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: jocare-ovulation-calculator
 */

if (!defined('ABSPATH')) exit;

if (!class_exists('JcOvulationCalculator')) :

define('CBOC_PLUGIN_URL',   plugin_dir_url(__FILE__));
define('CBOC_BASENAME',     'jocare-ovulation-calculator');
define('CBOC_NAME',         'Ovulation Calculator');
define('CBOC_VERSION',      '0.4');

require dirname(__FILE__) . '/class/plugin.php';
require dirname(__FILE__) . '/class/admin.php';
require dirname(__FILE__) . '/class/widget.php';
require dirname(__FILE__) . '/class/shortcode.php';
require dirname(__FILE__) . '/class/data.php';

new JcOvulationCalculator();

endif;
