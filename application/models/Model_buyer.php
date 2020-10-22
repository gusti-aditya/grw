<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_buyer extends CI_Model
{
    private $_t_blog = "tb_m_buyer";

    public function getAll($number,$offset)
    {
        return $this->db->get($this->_t_blog,$number,$offset)->result();
    }

    function getAllCount(){
        return $this->db->get($this->_t_blog)->num_rows();
    }

    public function getByCriteria($number,$offset)
    {
        if($this->input->post('date') !="")
        {
            return $this->db->get_where($this->_t_blog,["DATE" => $this->input->post('date')],$number,$offset)->result();
        }
        else if ($this->input->post('title') !="")
        {
            //return $this->db->get_where($this->_t_blog,["PRODUCT_NAME" => $this->input->post('productName')])->result();
            return $this->db->like('TITLE',$this->input->post('title'),'after')
            ->get($this->_t_blog,$number,$offset)
            ->result();
        }
        else
        {
            return $this->db->get($this->_t_blog,$number,$offset)->result();
        }
    }

    public function getByCriteriaCount()
    {
        if($this->input->post('date') !="")
        {
            return $this->db->get_where($this->_t_blog,["DATE" => $this->input->post('date')])->num_rows();
        }
        else if ($this->input->post('title') !="")
        {
            //return $this->db->get_where($this->_t_blog,["PRODUCT_NAME" => $this->input->post('productName')])->result();
            return $this->db->like('PRODUCT_NAME',$this->input->post('productName'),'after')
            ->get($this->_t_blog)
            ->num_rows();
        }
        else
        {
            return $this->db->get($this->_t_blog)->num_rows();
        }
        
    }

    public function save($data)
    {
        $this->DATE = date("Y-m-d");
        $this->STATUS = 'SHOW';
        $this->TITLE = $data->TITLE; //parameter product name dari view
        $this->CONTENT = $data->CONTENT; //parameter product name dari view
        $this->CREATED_BY = $data->USER; //parameter product description dari view
        $this->CREATED_DT =date("Y-m-d"); //parameter price dari view
        $this->IMAGE = $data->IMAGE; //parameter price dari view
        return $this->db->insert($this->_t_blog, $this); //function untuk insert kedalam database
    }

    public function update($data)
    {
        $this->URL = $data->URL; //parameter product code dari view
        $this->DATE = $data->DATE; //parameter category dari view
        $this->STATUS = $data->STATUS; //parameter unit dari view
        $this->TITLE = $data->TITLE; //parameter product name dari view
        $this->CONTENT = $data->CONTENT; //parameter product name dari view
        $this->CREATED_BY = $data->USER; //parameter product description dari view
        $this->CREATED_DT = $data->DATE; //parameter price dari view
        $this->IMAGE = $data->IMAGE; //parameter price dari view
        return $this->db->update($this->_t_blog, $this, array('ID' => $data->ID));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_t_blog, array("ID" => $id));
    }
}
