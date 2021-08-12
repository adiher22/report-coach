<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class ListCoach extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //load model
        $this->load->model('M_coach');
        
    }
    
    public function index()
    {
        // load data
        $data['data'] = $this->M_coach->getCoach()->result_array();
        $this->load->view('list-coach', $data, FALSE);
        
    }
    function getCoache()
    {
        $id_coach=$this->input->post('id_coach');
        $data=$this->M_coach->getCoache($id_coach);

        echo json_encode($data);
    }

}


/* End of file Controllername.php */
// 