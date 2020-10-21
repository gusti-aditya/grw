<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Survey extends MY_Secure_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Model_survey");		
        $this->load->helper(array('url'));
        $this->load->library('pagination');
    }

    public function index()
    {
        $content['isi']='Survey/Survey';
        
        $from = $this->uri->segment(3);
        $totalData =   $this->Model_survey->getAllCount();

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
        $content["dataSurvey"] = $this->Model_survey->getAll(10,$from);
        	
        $this->load->view('layout',$content);
    }

    public function search()
    {
        $totalData = $this->Model_survey->getByCriteriaCount();
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
        $content["dataSurvey"] = $this->Model_survey->getByCriteria($config['per_page'],$currentPage);
        $data=$this->load->view('product/_Gridview',$content, TRUE);
        echo $data;
    }

    public function submit(){
        $stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
        $data = json_decode($stream_clean);
        $scr = $data->screenMode;
        try{
            if($scr=="ADD"){
                    $this->Model_survey->save($data);
                }
                else{
                    $this->Model_survey->update($data);
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
        $productId = $this->input->post('Id'); # add this
        $data["id"] = $this->Model_survey->getById($id);
        echo json_encode($data);
    }

    public function delete()
    {
        $productId = $this->input->post('Id'); # add this
        $this->Model_survey->delete($Id);
        $content['Result']="SUCCESS";
        echo json_encode($content);
    }

    public function uploadImage()
    {
        $config['upload_path']          = './assets/images/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $_FILES['file']['name'];
        $config['fields'] = 'image';
        $config['overwrite']			= true;
        $config['max_size']             = 10024; // 10MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file')) {
            $uploadData = $this->upload->data();
        }
        
        echo json_encode($uploadData);
    }

}
 
# nama file Product.php
# folder apllication/controller/