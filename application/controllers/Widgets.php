<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Widgets extends CI_Controller
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

    public function index()
    {
        display_custom_header('templates/header_widgets', 'widgets');
    }
}