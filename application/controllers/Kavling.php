<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require 'vendor/autoload.php';
 use PhpOffice\PhpSpreadsheet\Spreadsheet as spreadSheet;
 use PhpOffice\PhpSpreadsheet\Reader\Csv as CsvReader;
 use PhpOffice\PhpSpreadsheet\Reader\Xlsx as XlsxReader;
 use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

 class Kavling extends MY_Secure_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_kavling');
		$this->load->helper(array('url'));
        $this->load->library('pagination');
	}
    public function index()
    {
        $content['isi']='Kavling/VKavling';
        $content['title']='- Kavling';
        
        $from = $this->uri->segment(3);
        $content["datanya"] = $this->Model_kavling->getAll();
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
        
        $ArrayKavling = []; 
    
        $sheetData = $spreadsheet->getActiveSheet()->toArray();
            for($i = 2;$i < count($sheetData);$i++)
            {
                array_push($ArrayKavling,(object)[
                    'CODE'=> $sheetData[$i]['0'],
                    'CLASS_ID'=> $sheetData[$i]['1'],
                    'STATUS'=> $sheetData[$i]['2']
                ]);
            }
            // echo json_encode($ArrayKavling);
            $this->Model_kavling->saveKavling($ArrayKavling,$sheetData);
            }
        }

    
    public function excel()
		{
            $this->Model_kavling->getAll();
			$spreadsheet = new spreadSheet();
			$sheet = $spreadsheet->getActiveSheet();
			$sheet->setCellValue('A1', 'No');
			$sheet->setCellValue('B1', 'Name');
			$sheet->setCellValue('C1', 'Status');
            
			$kavling = $this->Model_kavling->getAll();
			$no = 1;
			$x = 2;
			foreach($kavling as $row)
			{
                $sheet->setCellValue('A'.$x, $no++);
                $sheet->setCellValue('B'.$x, $row->CLASS_ID);
				$sheet->setCellValue('C'.$x, $row->name);
				$sheet->setCellValue('D'.$x, $row->status);
				$x++;
			}
			$writer = new Xlsx($spreadsheet);
			$filename = 'laporan-Kavling';
			
			header('Content-Type: application/vnd.ms-excel');
			header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
			header('Cache-Control: max-age=0');
	
			$writer->save('php://output');
		}
}