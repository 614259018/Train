<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Train extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('session', 'database');
		$this->load->model('Train_Model','TM');
		$this->load->helper('url');
	}
    public function index()
    {
    $result['TM'] = $this->TM->view_table();
    $this->load->view('index',$result);
    }    
}
	