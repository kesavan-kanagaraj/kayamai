<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

//include Rest Controller library
require APPPATH . '/libraries/REST_Controller.php';

class TrivaController extends REST_Controller {

    public function __construct() { 
        parent::__construct();
        
        //load user model
        $this->load->model('TrivaModel');
    }
    
    public function user_get($id = 0) {
        //returns all rows if the id parameter doesn't exist,
        //otherwise single row will be returned
        $triva = $this->TrivaModel->getRows($id);
        
        //check if the user data exists
        if(!empty($triva)){
            //set the response and exit
            $this->response($triva, REST_Controller::HTTP_OK);
        }else{
            //set the response and exit
            $this->response([
                'status' => FALSE,
                'message' => 'No user were found.'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}

?>