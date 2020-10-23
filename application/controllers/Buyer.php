<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Buyer extends MY_Secure_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_buyer');
		$this->load->helper(array('url'));
        $this->load->library('pagination');
	}
    public function index()
    {
        $content['isi']='Buyer/VBuyer';
        
        $from = $this->uri->segment(3);
        $totalData =   $this->Model_buyer->getAllCount();

        $config['base_url'] = base_url().'#';
        $config['total_rows'] = $totalData;
        $config['per_page'] = 10;
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item"><a href="#" onClick="onSearchCriteria(\'1\')" class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['prev_link'] = '<i class="fa fa-long-arrow-left"></i>Previous Page';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next Page<i class="fa fa-long-arrow-right"></i>';
        $config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
        $this->pagination->initialize($config);	
        //$config = $this->Pagination_Config->GetPaginationConfig($totalData,10);
        $content["row"] = $this->Model_buyer->getAll(10,$from);
        $content["dataBuyer"] = $this->Model_buyer->getAll(10,$from);
        $content["dataKota"] = $this->Model_buyer->getKota();
        $content["dataProvinsi"] = $this->Model_buyer->getProvinsi();
        $this->load->view('layout',$content);
    }

    public function getCityById(){
        $regionId = $this->input->post('regionId'); # add this
        $data = $this->Model_buyer->getKotaById($regionId);
        echo json_encode($data);
    }
}
 
# nama file home.php
# folder apllication/controller/