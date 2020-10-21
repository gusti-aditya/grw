<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Home extends MY_Secure_Controller
{
    public function index()
    {
		$content['isi']='';
        $this->load->view('layout',$content);
    }
}
 
# nama file home.php
# folder apllication/controller/