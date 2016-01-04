<?php
defined('BASEPATH') or exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MY_Widget
 *
 * @author cong
 */
class MY_Widget {

    public function __get($key) {
        $CI = & get_instance();
        return $CI->$key;
    }

    public function __set($key, $val) {
        $CI = & get_instance();
        if (isset($CI->$key)) {
            $CI->$key = $val;
        } else {
            $this->$key = $val;
        }
    }

}
