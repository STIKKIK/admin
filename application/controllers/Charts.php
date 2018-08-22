<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Charts extends CI_Controller
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

    public function chart_js()
    {
        display_custom_header('templates/header', 'charts/charts_js');
    }

    public function flot_chart()
    {
        display_custom_header('templates/header', 'charts/flot_chart');
    }

    public function peity_chart()
    {
        display_custom_header('templates/header', 'charts/peity_chart');
    }
}