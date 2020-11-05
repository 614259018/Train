<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Train_Model extends CI_Model {
    function __construct(){
        parent::__construct();
    }
    function insert_train($result){
        $this->db->insert('train',$result);
    }
    function insert_starting_point($result1){
        $this->db->insert('starting_point',$result1);
    }
    function insert_huay_rach($result2){
        $this->db->insert('huay_rach',$result2);
    }
    function insert_end_point($result3){
        $this->db->insert('end_point',$result3);
    }
    function view_table(){
		$this->db->select('*');
        $this->db->from('train');
        $this->db->join('starting_point', 'starting_point.st_id = train.st_id', 'left');
        $this->db->join('huay_rach', 'huay_rach.st_id = train.st_id', 'left');
        $this->db->join('end_point', 'end_point.st_id = train.st_id', 'left');
        $this->db->where('h_time_to <', "06.00" );
        
        $query = $this->db->get();
        return $query->result();
        }
}