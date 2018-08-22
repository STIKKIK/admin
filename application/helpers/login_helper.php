

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('check_session'))
{
    function check_session($view = '')
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
            redirect(base_url());
        }
    }   
}