<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require 'vendor/autoload.php';
 use PhpOffice\PhpSpreadsheet\Spreadsheet as spreadSheet;
 use PhpOffice\PhpSpreadsheet\Reader\Csv as CsvReader;
 use PhpOffice\PhpSpreadsheet\Reader\Xlsx as XlsxReader;
 use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

 class Order extends MY_Secure_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_order');
		$this->load->helper(array('url'));
        $this->load->library('pagination');
	}
    public function index()
    {
        $content['isi']='Order/VOrder';
        
        $from = $this->uri->segment(3);
        $content["datanya"] = $this->Model_order->getAll();
        $this->load->view('layout',$content);
    }

    public function excel()
    {
        $this->Model_order->getAll();
        $spreadsheet = new spreadSheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'First Name');
        $sheet->setCellValue('C1', 'Last Name');
        $sheet->setCellValue('D1', 'Email');
        $sheet->setCellValue('E1', 'Phone No');
        $sheet->setCellValue('F1', 'Kavling ID');
        $sheet->setCellValue('G1', 'Order Date');
        $sheet->setCellValue('H1', 'Payment Method');
        $sheet->setCellValue('I1', 'Payment Prove');
        $sheet->setCellValue('J1', 'Order Expired');
        $sheet->setCellValue('K1', 'Payment Approval');
        
        $order = $this->Model_order->getAll();
        $no = 1;
        $x = 2;
        foreach($order as $row)
        {
            $sheet->setCellValue('A'.$x, $no++);
            $sheet->setCellValue('B'.$x, $row->FIRST_NAME);
            $sheet->setCellValue('C'.$x, $row->LAST_NAME);
            $sheet->setCellValue('D'.$x, $row->EMAIL);
            $sheet->setCellValue('E'.$x, $row->PHOE_NO);
            $sheet->setCellValue('F'.$x, $row->KAVLING_ID);
            $sheet->setCellValue('G'.$x, $row->ORDER_DATE);
            $sheet->setCellValue('H'.$x, $row->PAYMENT_METHOD);
            $sheet->setCellValue('I'.$x, $row->PAYMEN_PROVE);
            $sheet->setCellValue('J'.$x, $row->ORDER_EXPIRED);
            $sheet->setCellValue('K'.$x, $row->PAYMENT_APPROVAL);
            $x++;
        }
        $writer = new Xlsx($spreadsheet);
        $filename = 'laporan-Order';
        
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }

    public function updateOrder(){
        $data = $this->input->post();
        $approval = $data['PAYMENT_APPROVAL'];
        $id = $data['ID'];
        $this->Model_order->updateApproval($id,$approval);
    }
}