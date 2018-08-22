<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Icons extends CI_Controller
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

    public function font_awesome()
    {
        display('icons/font_awesome');
    }

    public function themefy_icons()
    {
        display('icons/themefy_icons');
    }
}