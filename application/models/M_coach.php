<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_coach extends CI_Model {

    
    public function getCoach()
    {
        $this->db->select('*');
        $this->db->from('coach');
        $query = $this->db->get();
        return $query;
        
    }
    public function getCoache($id_coach)
    {
        $this->db->where('id_coach', $id_coach);
        $this->db->order_by('id', 'ASC');
        return $this->db->from('coache')
            ->get()
            ->result();
    }
    public function coache($id)
    {
        $this->db->from('coache');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query;
        
    }

}

/* End of file M_coach.php */
