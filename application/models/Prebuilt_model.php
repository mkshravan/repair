<?php 
class Prebuilt_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_pc($id){
        // $this->db->select('*')
        //         ->from('prebuilt_pc')
        //         ->where('id', $id);
        // // $res=$this->db->get()->row()->complaint_no;
        // //$arr=explode(" ",$res);
        // //$q_no=$res[0];
        return $this->db->get_where('prebuilt_pc', array('id'=>$id))->result_array();
    }

    function get_all_pcs()
    {
        $this->db->select('*')
        ->from('prebuilt_pc');
        return $this->db->get()->result_array();
    }

}
