<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helpers('url_helper');
    }

    public function index() {
        $this->load->view('template/home');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */