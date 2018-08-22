<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
//session_start(); //we need to start session in order to access it through CI

class Component extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load form helper library
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('security');
        // Load form validation library
        $this->load->library('form_validation');
        // Load session library
        $this->load->library('session');
    }

    public function buttons()
    {
        // session logged
        if (isset($this->session->userdata['logged_in'])) {
            $this->load->view('templates/header');
            $this->load->view('templates/menu');
            $this->load->view('component/buttons');
        } else {
            // redirect to login page
            redirect(base_url(), 'refresh');
        }
    }
}