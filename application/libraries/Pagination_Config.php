<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pagination_Config {

    protected $CI;
    public function __construct($totalData) {
        $this->CI = & get_instance();
        
       
    }


    function GetPaginationConfig($totalData,$RecordPerPage)
    {
       
		return "a";
    }
}

?>