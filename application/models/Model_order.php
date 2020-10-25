<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_order extends CI_Model
{
    private $_t_order = "tb_r_order";

    public function getAll()
    {
        return $this->db->get($this->_t_order)->result();
    }

    public function updateApproval($id,$approval){
        $data = array(
            'PAYMENT_APPROVAL' => $approval,
        );
        $this->db->where('ORDER_ID', $id); 
        $this->db->update('tb_r_order', $data);
    }

}
