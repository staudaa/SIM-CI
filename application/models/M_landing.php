<?php

class M_landing extends CI_Model
{
    public function getLanding()
    {
        return $this->db->get('landing')->result_array();
    }
    
}
