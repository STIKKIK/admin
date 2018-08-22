<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Maps extends CI_Controller
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

    public function google_maps()
    {
        display_custom_header('templates/header', 'maps/google_maps');
    }

    public function vector_maps()
    {
        display_custom_header('templates/header_vector_maps', 'maps/vector_maps');
    }
}