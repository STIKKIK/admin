<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Forms extends CI_Controller
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

    public function basic_form()
    {
        display('forms/basic_form');
    }

    public function advanced_form()
    {
        display_custom_header('templates/header_advanced_form', 'forms/advanced_form');
    }
}