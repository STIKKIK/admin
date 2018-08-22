

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('display'))
{
    function display($view = '')
    {
        $ci =& get_instance();
        // session logged
        if (isset($ci->session->userdata['logged_in_admin'])) {
            $ci->load->view('templates/header');
            $ci->load->view('templates/menu');
            $ci->load->view($view);
            $ci->load->view('templates/footer');
        } else {
            // redirect to login page
            redirect(base_url('user_authentication/user_login_process'));
        }
    }   
    function display_datatable($view = '')
    {
        $ci =& get_instance();
        // session logged
        if (isset($ci->session->userdata['logged_in_admin'])) {
            $ci->load->view('templates/header_datatable');
            $ci->load->view('templates/menu');
            $ci->load->view($view);
        } else {
            // redirect to login page
            redirect(base_url('user_authentication/user_login_process'));
        }
    }   
}