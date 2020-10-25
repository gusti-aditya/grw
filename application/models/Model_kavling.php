<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kavling extends CI_Model
{
    private $_t_buyer = "tb_m_buyer";
    private $_t_kavling = "tb_m_kavling";
    private $_t_kota = "kabupaten";
    private $_t_provinsi = "provinsi";

    public function getAll()
    {
        return $this->db->query("SELECT a.CODE,b.class_id as name,a.status FROM tb_m_kavling a INNER JOIN tb_m_kavling_class b ON a.CLASS_ID = b.CLASS_ID")->result();
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
    
    public function saveKavling($ArrayKavlings,$sheetData)
    {
        return $this->db->update_batch($this->_t_kavling, $ArrayKavlings,'CODE'); //function untuk uupdate kedalam database
    }
}
