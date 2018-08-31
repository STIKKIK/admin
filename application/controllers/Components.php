<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Components extends CI_Controller
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

    public function buttons()
    {
        display('components/buttons');
    }

    public function badges()
    {
        display('components/badges');
    }

    public function tabs()
    {
        display('components/tabs');
    }

    public function social_buttons()
    {
        display('components/social_buttons');
    }

    public function cards()
    {
        display('components/cards');
    }

    public function alerts()
    {
        display('components/alerts');
    }

    public function progress_bars()
    {
        display('components/progress_bars');
    }

    public function modals()
    {
        display('components/modals');
    }

    public function switches()
    {
        display('components/switches');
    }

    public function grids()
    {
        display('components/grids');
    }

    public function typography()
    {
        display('components/typography');
    }
    public function sweet_alert()
    {
        display_sweet_alert('components/sweet_alert');
    }
}