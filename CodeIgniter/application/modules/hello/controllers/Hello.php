<?php defined('BASEPATH') or exit('No direct script access allowed');
Class Hello extends MX_Controller
{
	public function index()
	{
		$title = 'Login';
        $content = 'Form';
        echo $this->load->widget('header', array($title,$content));
		//$this->load->view('hello');
	}
}