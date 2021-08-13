<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian extends CI_Controller {

      
    public function __construct()
    {
        parent::__construct();
        //load model
        $this->load->model('M_coach');
        
    }

    public function index()
    {
        $id = $this->input->post('coache');
        $data['coache'] = $this->M_coach->coache($id)->row_array();
        
     
        $this->load->view('nilai', $data, FALSE);
        
        
    }


}

/* End of file Penilaian.php */
    