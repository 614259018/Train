<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Train extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Train_Model','TM');
		$this->load->helper('url');
	}
    public function index()
    {
    $result['TM'] = $this->TM->view_table();
    $this->load->view('index',$result);
	}    
	public function insert_Register(){
        $result = array(
            'st_id' => $this->input->post("st_id"),
            'note' => $this->input->post("note"),
            
        );

        $result1 = array(   
            'st_id'=> $this->input->post("st_id"),
            's_station' => $this->input->post("s_station"),
            's_start_time' => $this->input->post("s_start_time"),
            
        );

        $result2 = array(
            'st_id'=> $this->input->post("st_id"),
            'h_time_to' => $this->input->post("h_time_to"),
            'h_start_time' => $this->input->post("h_start_time"),
        );

        $result3 = array(
            'st_id' => $this->input->post("st_id"),
            'e_station' => $this->input->post("e_station"),
            'e_time_to' => $this->input->post("e_time_to"),
            
        );
        
        

        if($this->input->post("note")!= "" && $this->input->post("st_id")!== ""){
            $this->TM->insert_train($result);
            $this->TM->insert_starting_point($result1);
            $this->TM->insert_huay_rach($result2);
            $this->TM->insert_end_point($result3);
            $this->load->view('view_insert_successwithmenulink');

        }else {
            echo "ไม่สามารถเพิ่มข้อมูลได้ค่ะ !";
        }

    }
	public function add_data()
    {
    $this->load->view('add_data');
    }    
}
	