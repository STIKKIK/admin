<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
//session_start(); //we need to start session in order to access it through CI

class Component extends CI_Controller
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
        check_session('component/badges');
    }

    public function badges()
    {
        check_session('component/buttons');
    }

    public function tabs()
    {
        check_session('component/tabs');
    }

    public function social_buttons()
    {
        check_session('component/social_buttons');
    }

    public function cards()
    {
        check_session('component/cards');
    }

    public function alerts()
    {
        check_session('component/alerts');
    }

    public function progress_bars()
    {
        check_session('component/progress_bars');
    }

    public function modals()
    {
        check_session('component/modals');
    }

    public function switches()
    {
        check_session('component/switches');
    }

    public function grids()
    {
        check_session('component/grids');
    }

    public function typography()
    {
        check_session('component/typography');
    }
}