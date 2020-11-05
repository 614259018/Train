<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Train_Model extends CI_Model {
    function __construct(){
        parent::__construct();
    }
    function insert_train($result){
        $this->db->insert('train',$result);
    }
    function insert_starting_point($data){
        $this->db->insert('starting_point',$data);
    }
    function insert_huay_rach($data1){
        $this->db->insert('huay_rach',$data1);
    }
    function insert_end_point($data2){
        $this->db->insert('end_point',$data2);
    }
    function view_table(){
		$this->db->select('*');
        $this->db->from('train');
        $this->db->join('starting_point', 'starting_point.s_id = train.st_id', 'left');
        $this->db->join('huay_rach', 'huay_rach.h_id = train.st_id', 'left');
        $this->db->join('end_point', 'end_point.e_id = train.st_id', 'left');
        
        $query = $this->db->get();
        return $query->result();
        }
}