<?php

if (!defined('ABSPATH')) exit;

class JcOvulationCalculator_Data {

    public static $data = [];
    public static $locale = [];
    public static $__ = [];

    /*
    *  __construct
    *
    *  @type    function
    *  @date    2020-02-13
    *  @since   1.0
    *
    *  @param   N/A
    *  @return  N/A
    */

    function __construct() {
        $this->get_tool_data();
        $this->get_locale();
    }


    /*
    *  get_tool_data
    *
    *  @type    function
    *  @date    2020-02-13
    *  @since   1.0
    *
    *  @param   N/A
    *  @return  N/A
    */

    public function get_tool_data() {
        ob_start();
        require dirname(__FILE__) . '/../data/' . CBOC_BASENAME . '.json';
        $data = json_decode(ob_get_clean());

        JcOvulationCalculator_Data::$data = $data;
    }

    /*
    *  get_locale
    *
    *  @type    function
    *  @date    2020-02-13
    *  @since   1.0
    *
    *  @param   N/A
    *  @return  N/A
    */

    public function get_locale() {
        ob_start();
        require dirname(__FILE__) . '/../data/locale-' . JcOvulationCalculator_Admin::$options['language'] . '.json';
        $locale = json_decode(ob_get_clean());

        JcOvulationCalculator_Data::$locale = (array) $locale->locale;
        JcOvulationCalculator_Data::$__ = (array) $locale->__;
    }

    /*
    *  display_js_data
    *
    *  @type    function
    *  @date    2020-02-13
    *  @since   1.0
    *
    *  @param   N/A
    *  @return  N/A
    */

    public static function display_js_data() {
        $js = '';

        $js .= '<script type="text/javascript">';
        $js .= 'var CBOC_DATA = ' . json_encode(JcOvulationCalculator_Data::$data) . ';';
        $js .= 'var CBOC_LOCALE = ' . json_encode(JcOvulationCalculator_Data::$locale) . ';';
        $js .= '</script>';

        echo $js;
    }

    /*
    *  __
    *
    *  @type    function
    *  @date    2020-02-13
    *  @since   1.0
    *
    *  @param   $text
    *  @return  $text
    */

    public static function __($text) {
        if (array_key_exists($text, JcOvulationCalculator_Data::$__)) {
            return JcOvulationCalculator_Data::$__[$text];
        }

        return $text;
    }

    /*
    *  _e
    *
    *  @type    function
    *  @date    2020-02-13
    *  @since   1.0
    *
    *  @param   $text
    *  @return  echo
    */

    public static function _e($text) {
        echo JcOvulationCalculator_Data::__($text);
    }

}
