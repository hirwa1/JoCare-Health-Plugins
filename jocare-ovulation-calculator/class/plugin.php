<?php

if (!defined('ABSPATH')) exit;

class JcOvulationCalculator {

    /*
    *  __construct
    *
    *  @type    function
    *  @date    2020-02-05
    *  @since   1.0
    *
    *  @param   N/A
    *  @return  N/A
    */

    function __construct() {
        new JcOvulationCalculator_Admin();
        new JcOvulationCalculator_Data();
        new JcOvulationCalculator_Widget();
        new JcOvulationCalculator_Shortcode();

        add_action('wp_enqueue_scripts', 'JcOvulationCalculator::load_assets');
        add_action('wp_head', 'JcOvulationCalculator::add_inline_style', 100);

    }


    /*
    *  load_assets
    *
    *  @type    static
    *  @date    2020-02-05
    *  @since   1.0
    *
    *  @param   N/A
    *  @return  N/A
    */

    public static function load_assets() {
        wp_enqueue_style(
            'air-datepicker',
            CBOC_PLUGIN_URL . 'assets/css/vendor/datepicker.min.css',
            array(),
            '2.2.3'
        );

        wp_enqueue_style(
            CBOC_BASENAME,
            CBOC_PLUGIN_URL . 'assets/css/' . CBOC_BASENAME . '.css',
            array(),
            CBOC_VERSION
        );

        wp_enqueue_script(
            'air-datepicker',
            CBOC_PLUGIN_URL . 'assets/js/vendor/datepicker.min.js',
            array('jquery'),
            '2.2.3',
            true
        );

        wp_enqueue_script(
            'jocare-ovulation-datepicker',
            CBOC_PLUGIN_URL . 'assets/js/jocare-datepicker.js',
            array('jquery'),
            '1.0.0',
            true
        );

        wp_enqueue_script(
            CBOC_BASENAME,
            CBOC_PLUGIN_URL . 'assets/js/' . CBOC_BASENAME . '.js',
            array('jquery'),
            CBOC_VERSION,
            true
        );
    }

    /*
    *  add_inline_style
    *
    *  @type    static
    *  @date    2020-02-11
    *  @since   1.0
    *
    *  @param   N/A
    *  @return  N/A
    */

    public static function add_inline_style() {
        $styles = '<style>';
        $styles .= ':root {';

        foreach (JcOvulationCalculator_Admin::$options['colors'] as $key => $value) {
            $styles .= '--cboc-color-' . $key . ': ' . $value . ';';
        }

        $styles .= '}';
        $styles .= '</style>';

        echo $styles;
    }

}
