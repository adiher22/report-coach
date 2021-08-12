<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian extends CI_Controller {

    
    public function index()
    {
        $id_coache = $this->input->post('coache');
        $this->load->view('nilai', FALSE);
        
    }


}

/* End of file Penilaian.php */
    