<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_buyer extends CI_Model
{
    private $_t_buyer = "tb_m_buyer";
    private $_t_kota = "kabupaten";
    private $_t_provinsi = "provinsi";

    public function getAll()
    {
        return $this->db->get($this->_t_buyer)->result();
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
    
    public function saveBuyer($Arraybuyers,$sheetData)
    {
            return $this->db->insert_batch($this->_t_buyer, $Arraybuyers); //function untuk insert kedalam database
        /*
        for($i = 1;$i <= count($sheetData);$i++){
            $this->FIRST_NAME = $Arraybuyers[$i]->FIRST_NAME;
            $this->LAST_NAME = $Arraybuyers[$i]->LAST_NAME;
            $this->ADDRESS = $Arraybuyers[$i]->ADDRESS; //parameter product name dari view
            $this->PHONE_NO = $Arraybuyers[$i]->PHONE_NO; //parameter product name dari view
            $this->EMAIL = $Arraybuyers[$i]->EMAIL; //parameter product description dari view
            $this->PROVINCE = $Arraybuyers[$i]->PROVINCE; //parameter price dari view
            $this->CITY = $Arraybuyers[$i]->CITY; //parameter price dari view
            $this->POSTAL_CODE = $Arraybuyers[$i]->POSTAL_CODE; //parameter price dari view
            return $this->db->insert($this->_t_buyer, $this); //function untuk insert kedalam database
        }*/
    }
}
