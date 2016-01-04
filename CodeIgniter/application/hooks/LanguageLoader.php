<?php
defined('BASEPATH') or exit('No direct script access allowed');
class LanguageLoader
{
    function initialize() {
        $ci =& get_instance();
        $ci->load->helper('language');
        $ci->load->library('session');

        $site_lang = $ci->session->userdata('site_lang');
        if ($site_lang) {
            $ci->lang->load('auth',$ci->session->userdata('site_lang'));
            $ci->lang->load('ion_auth',$ci->session->userdata('site_lang'));
        } else {
            $ci->lang->load('auth','english');
            $ci->lang->load('ion_auth','english');
        }
    }
}