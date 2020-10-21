<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("model_produk");		
        $this->load->helper(array('url'));
    }

    public function index()
    {
        
        $content["dataCategory"] = $this->model_produk->getAllCategory();
        $content["dataUnit"] = $this->model_produk->getAllUnit();
        $content['isi']='product/product';
        
        $from = $this->uri->segment(3);
        $totalData =   $this->model_produk->getAllCount();
        
        $this->load->library('Pagination_Config',$totalData);
        //$config = $this->Pagination_Config->GetPaginationConfig($totalData,10);
        $content["dataProduk"] = $this->model_produk->getAll(10,$from);
        	
        $this->load->view('layout',$content);
    }

    public function search()
    {
        $totalData = $this->model_produk->getByCriteriaCount();
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
        //$from = $this->uri->segment(3);
        $currentPage = $this->input->post('currentPage');
        $this->pagination->initialize($config);		
        $content["dataProduk"] = $this->model_produk->getByCriteria($config['per_page'],$currentPage);
        $data=$this->load->view('product/_Gridview',$content, TRUE);
        echo $data;
    }

    public function submit(){
        $stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
        $data = json_decode($stream_clean);
        $scr = $data->screenMode;
        try{
            if($scr=="ADD"){
                    $this->model_produk->save($data);
                }
                else{
                    $this->model_produk->update($data);
                }
                $content['Result']="SUCCESS";
        }

        catch(Exception $E){
            $content['Result']="ERROR";
            $content['message']='Caught exception: '.$e->getMessage()."\n";            
            echo json_encode($content);
        }
        echo json_encode($content);
    }

    public function edit()
    {
        $productId = $this->input->post('productId'); # add this
        $data["product"] = $this->model_produk->getById($productId);
        echo json_encode($data);
    }

    public function delete()
    {
        $productId = $this->input->post('productId'); # add this
        $this->model_produk->delete($productId);
        $content['Result']="SUCCESS";
        echo json_encode($content);
    }

}
 
# nama file Product.php
# folder apllication/controller/