<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class TrivaModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        
        //load database library
        $this->load->database();
    }

    /*
     * Fetch user data
     */
    function getRows($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('triva', array('id' => $id));
            return $query->row_array();
        }else{
            $query = $this->db->get('triva');
            return $query->result_array();
        }
    }

}
?>