<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require 'vendor/autoload.php';
 use PhpOffice\PhpSpreadsheet\Spreadsheet as spreadSheet;
 use PhpOffice\PhpSpreadsheet\Reader\Csv as CsvReader;
 use PhpOffice\PhpSpreadsheet\Reader\Xlsx as XlsxReader;
 use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

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
        // $config['base_url'] = base_url().'#';
        // $config['total_rows'] = $totalData;
        // $config['per_page'] = 10;
        // $config['full_tag_open'] = "<ul class='pagination'>";
        // $config['full_tag_close'] = '</ul>';
        // $config['num_tag_open'] = '<li class="page-item">';
        // $config['num_tag_close'] = '</li>';
        // $config['cur_tag_open'] = '<li class="page-item"><a href="#" onClick="onSearchCriteria(\'1\')" class="page-link">';
        // $config['cur_tag_close'] = '</a></li>';
        // $config['prev_tag_open'] = '<li>';
        // $config['prev_tag_close'] = '</li>';
        // $config['first_tag_open'] = '<li>';
        // $config['first_tag_close'] = '</li>';
        // $config['last_tag_open'] = '<li>';
        // $config['last_tag_close'] = '</li>';
        // $config['prev_link'] = '<i class="fa fa-long-arrow-left"></i>Previous Page';
        // $config['prev_tag_open'] = '<li>';
        // $config['prev_tag_close'] = '</li>';
        // $config['next_link'] = 'Next Page<i class="fa fa-long-arrow-right"></i>';
        // $config['next_tag_open'] = '<li>';
		// $config['next_tag_close'] = '</li>';
        // $this->pagination->initialize($config);	
        //$config = $this->Pagination_Config->GetPaginationConfig($totalData,10);
        $content["row"] = $this->Model_buyer->getAll(10,$from);
        $content["dataBuyer"] = $this->Model_buyer->getAll(10,$from);
        $content["dataKota"] = $this->Model_buyer->getKota();
        $content["dataProvinsi"] = $this->Model_buyer->getProvinsi();
        $content["datanya"] = $this->Model_buyer->getAll();
        $this->load->view('layout',$content);
    }

    public function getCityById(){
        $regionId = $this->input->post('regionId'); # add this
        $data = $this->Model_buyer->getKotaById($regionId);
        echo json_encode($data);
    }

    public function uploadExcel(){
    
    $file_mimes = array('application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
 
    if(isset($_FILES['file']['name']) && in_array($_FILES['file']['type'], $file_mimes)) {
 
    $arr_file = explode('.', $_FILES['file']['name']);
    $extension = end($arr_file);
 
    if('csv' == $extension) {
        $reader = new CsvReader;
    } else {
        $reader = new XlsxReader;
    }
 
    $spreadsheet = $reader->load($_FILES['file']['tmp_name']);
    
    /*$buyers = new stdClass();
    $buyers->FIRST_NAME = "";
    $buyers->LAST_NAME = "";
    $buyers->ADDRESS = "";
    $buyers->PHONE_NO = "";
    $buyers->EMAIL = "";
    $buyers->PROVINCE = "";
    $buyers->CITY = "";
    $buyers->POSTAL_CODE = "";*/
    $Arraybuyers = []; 

    $sheetData = $spreadsheet->getActiveSheet()->toArray();
        for($i = 1;$i < count($sheetData);$i++)
        {
            array_push($Arraybuyers,(object)[
                'FIRST_NAME'=> $sheetData[$i]['1'],
                'LAST_NAME'=> $sheetData[$i]['2'],
                'ADDRESS'=> $sheetData[$i]['3'],
                'PHONE_NO'=> $sheetData[$i]['4'],
                'EMAIL'=> $sheetData[$i]['5'],
                'PROVINCE'=> $sheetData[$i]['6'],
                'CITY'=> $sheetData[$i]['7'],
                'POSTAL_CODE'=> $sheetData[$i]['8']
            ]);
        }
        // echo json_encode($Arraybuyers);
        $this->Model_buyer->saveBuyer($Arraybuyers,$sheetData);
        }
    }

    public function excel()
		{
            $this->Model_buyer->getAll();
			$spreadsheet = new spreadSheet();
			$sheet = $spreadsheet->getActiveSheet();
			$sheet->setCellValue('A1', 'No');
			$sheet->setCellValue('B1', 'First Name');
			$sheet->setCellValue('C1', 'Last Name');
			$sheet->setCellValue('D1', 'Address');
            $sheet->setCellValue('E1', 'Phone');
			$sheet->setCellValue('F1', 'Email');
			$sheet->setCellValue('G1', 'Province');
            $sheet->setCellValue('H1', 'City');
            $sheet->setCellValue('I1', 'Postal Code');
            
			$siswa = $this->Model_buyer->getAll();
			$no = 1;
			$x = 2;
			foreach($siswa as $row)
			{
                $sheet->setCellValue('A'.$x, $no++);
                $sheet->setCellValue('B'.$x, $row->FIRST_NAME);
				$sheet->setCellValue('C'.$x, $row->LAST_NAME);
				$sheet->setCellValue('D'.$x, $row->ADDRESS);
				$sheet->setCellValue('E'.$x, $row->PHONE_NO);
				$sheet->setCellValue('F'.$x, $row->EMAIL);
				$sheet->setCellValue('G'.$x, $row->PROVINCE);
				$sheet->setCellValue('H'.$x, $row->CITY);
				$sheet->setCellValue('I'.$x, $row->POSTAL_CODE);
				$x++;
			}
			$writer = new Xlsx($spreadsheet);
			$filename = 'laporan-Buyer';
			
			header('Content-Type: application/vnd.ms-excel');
			header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
			header('Cache-Control: max-age=0');
	
			$writer->save('php://output');
		}
}


# nama file home.php
# folder apllication/controller/