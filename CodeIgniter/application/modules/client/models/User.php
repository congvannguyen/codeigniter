<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author cong
 */
class User extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function viewProfile(){
        $query = $this->db->select();
    }
}
