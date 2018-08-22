

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if ( ! function_exists('display'))
{
    function display($content)
    {
        $ci =& get_instance();
        // session logged
        if (isset($ci->session->userdata['logged_in_admin'])) {
            $ci->load->view('templates/header');
            $ci->load->view('templates/menu');
            $ci->load->view($content);
            $ci->load->view('templates/footer');
        } else {
            // redirect to login page
            redirect(base_url('user_authentication/user_login_process'));
        }
    }     
}
if ( ! function_exists('display_custom_header'))
{
    function display_custom_header($header, $content)
    {
        $ci =& get_instance();
        // session logged
        if (isset($ci->session->userdata['logged_in_admin'])) {
            $ci->load->view($header);
            $ci->load->view('templates/menu');
            $ci->load->view($content);
        } else {
            // redirect to login page
            redirect(base_url('user_authentication/user_login_process'));
        }
    }   
}

if ( ! function_exists('display_pages'))
{
    function display_pages($content)
    {
        $ci =& get_instance();
        // session logged
        if (isset($ci->session->userdata['logged_in_admin'])) {
            $ci->load->view('templates/header');
            $ci->load->view($content);
            $ci->load->view('templates/footer');
        } else {
            // redirect to login page
            redirect(base_url('user_authentication/user_login_process'));
        }
    }   
}