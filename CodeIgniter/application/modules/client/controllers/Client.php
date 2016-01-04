<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Client
 *
 * @author cong
 */
class Client extends MX_Controller {

    var $data = array();

    public function __construct() {

        parent::__construct();
        $this->load->model('auth/ion_auth_model');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '900';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';

        $this->load->library('upload', $config);
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
    }

    public function index() {
        $this->data['title'] = 'Home';
        $this->data['content'] = 'home';
        $this->load->view('client/client_layout', $this->data);
    }

    public function profile() {
        if ($this->logged_in()) {
            $this->data['title'] = 'Profile';
            $this->data['content'] = 'profile';
            $this->load->view('client/client_layout', $this->data);
        } else {
            redirect('auth/login', 'refresh');
        }
    }

    public function logged_in() {
        $this->ion_auth_model->trigger_events('logged_in');
        return (bool) $this->session->userdata('identity');
    }

    public function doupload() {
        if (!$this->logged_in()) {
            redirect('auth/login', 'refresh');
        }
        if ($this->input->post('upload')) {
            if ($this->upload->do_upload('img')) {
                echo 'Upload Ok';
                $check = $this->upload->data();
                echo '<pre>';
                print_r($check);
                echo '</pre>';
            } else {
                $data['error'] = $this->upload->display_errors();
                show_error($data);
            }
        }
    }

}
