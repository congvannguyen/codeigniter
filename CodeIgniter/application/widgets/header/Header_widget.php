<?php
defined('BASEPATH') or exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Header_widget
 *
 * @author cong
 */
class Header_widget extends MY_Widget {
    function index($title, $content) {
        $this->load->view('views', array('title'=>$title,'content'=>$content));
    }
}
