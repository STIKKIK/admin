<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Tables extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load form helper library
        $this->load->helper('url');
        $this->load->helper('login_helper');
        // Load session library
        $this->load->library('session');
    }

    public function basic_table()
    {
        display('tables/basic_table');
    }

    public function data_table()
    {
        display_datatable('tables/data_table');
    }
}