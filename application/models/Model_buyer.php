<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_buyer extends CI_Model
{
    private $_t_buyer = "tb_m_buyer";
    private $_t_kota = "kabupaten";
    private $_t_provinsi = "provinsi";

    public function getAll($number,$offset)
    {
        return $this->db->get($this->_t_buyer,$number,$offset)->result();
    }

    public function getKota()
    {
        return $this->db->get($this->_t_kota)->result();
    }

    public function getProvinsi()
    {
        return $this->db->get($this->_t_provinsi)->result();
    }

    public function getKotaById($idProvinsi)
    {
        return $this->db->get_where($this->_t_kota,["id_prov" => $this->input->post('regionId')])->result();
    }

    function getAllCount(){
		return $this->db->get($this->_t_buyer)->num_rows();
	}
}
