<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pages extends CI_Controller
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

    public function login()
    {
        display_pages('pages/login');
    }

    public function register()
    {
        display_pages('pages/register');
    }
    
    public function forget_password()
    {
        display_pages('pages/forget_password');
    }
}