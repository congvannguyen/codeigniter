<?php (defined('BASEPATH')) OR exit('No direct script access allowed');
/* load the My_Widget class*/
require 'MY_Widget.php';
/* load the MX_Loader class */
require APPPATH."third_party/MX/Loader.php";

class MY_Loader extends MX_Loader {
	
	public function widget($widget_directory, $agrs = array()) {
        $path = APPPATH . 'widgets/' . $widget_directory . '/Header_widget.php';

        $class_name = ucfirst(str_replace('/', '_', $widget_directory)) . '_widget';

        if (!file_exists($path)) {
            show_error('The widget ' . $path . ' not found');
        }

        $this->_ci_view_paths = array(APPPATH . 'widgets/' . $widget_directory . '/' => TRUE);

        require_once ($path);

        if (!class_exists($class_name)) {
            show_error("Class Name Widget $class_name Not Found, URL Is $path");
        }

        $MD = new $class_name;

        if (!method_exists($MD, 'index')) {
            show_error("Method Index Of Widget $class_name Not Found, URL Is $path");
        }

        ob_start();
        call_user_func_array(array($MD, 'index'), $agrs);
        $content = ob_get_contents();
        ob_end_clean();

        // Trả lại phương thức load views cho hệ thống CI
        $this->_ci_view_paths = array(APPPATH . 'views/' => TRUE);

        return $content;
    }
}