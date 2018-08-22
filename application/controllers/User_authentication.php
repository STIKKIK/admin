<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
//session_start(); //we need to start session in order to access it through CI

class User_Authentication extends CI_Controller
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
        // Load Facebook library
        $this->load->library('facebook_library');
        // Load model
        $this->load->model('login_model');
    }

    // Show login page
    public function index()
    {
        // load library facebook
        $fb = $this->facebook_library->load_facebook();
        // get Redirect Login Helper
        $helper = $this->facebook_library->get_redirect_login_helper($fb);
        // get login url
        $data['loginurl'] = $this->facebook_library->get_login_url($helper);

        $this->load->view('templates/header');
        $this->load->view('authentication/login', $data);
    }

    // Check for user login process
    public function user_login_process()
    {
        // load library facebook
        $fb = $this->facebook_library->load_facebook();
        // get Redirect Login Helper
        $helper = $this->facebook_library->get_redirect_login_helper($fb);
        // get login url
        $data['loginurl'] = $this->facebook_library->get_login_url($helper);

        $this->form_validation->set_rules('username', 'Username', 'trim|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|xss_clean');

        if ($this->form_validation->run() == false) {
            if (isset($this->session->userdata['logged_in_login'])) {
                $this->load->view('templates/header');
                $this->load->view('templates/menu');
                $this->load->view('dashboard');
            } else {
                $this->load->view('templates/header');
                $this->load->view('authentication/login', $data);
            }
        } else {
            $data_login = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
            );
            $result = $this->login_model->login($data_login);
            if ($result == true) {

                $username = $this->input->post('username');
                $result = $this->login_model->read_user_information($username);
                if ($result != false) {
                    $session_data_login = array(
                        'username_admin' => $result[0]->user_name,
                        'email_admin' => $result[0]->user_email,
                    );
                    // Add user data in session
                    $this->session->set_userdata('logged_in_login', $session_data_login);
                    $this->load->view('templates/header');
                    $this->load->view('templates/menu');
                    $this->load->view('dashboard');
                }
            } else {
                /* $data = array(
                    'error_message' => 'Invalid Username or Password',
                );
                */
                $data['error_message'] = 'Invalid Username or Password';
                $this->load->view('templates/header');
                $this->load->view('authentication/login', $data);
            }
        }
    }

    // Show registration page
    public function user_registration_show()
    {
        // load library facebook
        $fb = $this->facebook_library->load_facebook();
        // get Redirect Login Helper
        $helper = $this->facebook_library->get_redirect_login_helper($fb);
        // get login url
        $data['loginurl'] = $this->facebook_library->get_login_url($helper);

        $this->load->view('templates/header');
        $this->load->view('authentication/registration', $data);
    }

    // Validate and store registration data in database
    public function new_user_registration()
    {
        // Check validation for user input in SignUp form
        $this->form_validation->set_rules('username', 'username', 'trim|xss_clean');
        $this->form_validation->set_rules('email', 'email', 'trim|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'trim|xss_clean');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('authentication/registration');
        } else {
            $data = array(
                'user_name' => $this->input->post('username'),
                'user_email' => $this->input->post('email'),
                'user_password' => $this->input->post('password'),
                'channel_id' => 1,
                'datetime_create' => date('Y-m-d H:i:s'),
                'is_actived' => 1,
            );
            $result = $this->login_model->registration_insert($data);
            if ($result == true) {
                $data['message_display'] = 'Registration Successfully !';
                $this->load->view('templates/header');
                $this->load->view('authentication/login', $data);
            } else {
                $data['message_display'] = 'Username already exist!';
                $this->load->view('templates/header');
                $this->load->view('authentication/registration', $data);
            }
        }
    }

    public function facebook_callback()
    {
        // load library facebook
        $fb = $this->facebook_library->load_facebook();
        // get Redirect Login Helper
        $helper = $this->facebook_library->get_redirect_login_helper($fb);
        // get access token
        $accessToken = $this->facebook_library->get_access_token($fb, $helper);
        // get user login
        $user_login = $this->facebook_library->get_user_login($fb, $accessToken);
        // save user facebook
        $this->save_user_facebook($user_login);
    }

    public function save_user_facebook($user_login)
    {
        $data_user_facebook = array(
            'user_name' => $user_login['name'],
            'user_email' => $user_login['email'],
            'channel_id' => 2,
            'datetime_create' => date('Y-m-d H:i:s'),
            'is_actived' => 1,
        );
        $result = $this->login_model->registration_insert($data_user_facebook);
        if ($result == true) {
            // write log insert new user
            log_message('debug', 'Add user: ' . print_r($data_user_facebook, TRUE));
        } else {
            // write log alrady user
            log_message('debug', 'Alrady user: ' . print_r($data_user_facebook, TRUE));
        }
        // set value session
        $result = $this->login_model->read_user_information($data_user_facebook['user_name']);
        if ($result != false) {
            $session_data_login = array(
                'username_admin' => $result[0]->user_name,
                'email_admin' => $result[0]->user_email,
            );
            // Add user data in session
            $this->session->set_userdata('logged_in_login', $session_data_login);
            // redirect because facebook api limit token one time
            redirect(base_url('user_authentication/user_login_process'), 'refresh');
        }
    }

    // Logout from admin page
    public function logout()
    {
        // load library facebook
        $fb = $this->facebook_library->load_facebook();
        // get Redirect Login Helper
        $helper = $this->facebook_library->get_redirect_login_helper($fb);
        // get login url
        $data['loginurl'] = $this->facebook_library->get_login_url($helper);

        // Removing session data
        $sess_array = array(
            'username' => '',
        );
        $this->session->unset_userdata('logged_in_login', $sess_array);
        $data['message_display'] = 'Successfully Logout';
        $this->load->view('templates/header');
        $this->load->view('authentication/login', $data);
    }

    /*public function new_user_registration_facebook()
    {
        // print data
        //print_r($objectdata = json_decode($this->input->post('data'))); exit;

        $objectdata = json_decode($this->input->post('data'));
        $data = array(
            'user_name' => $objectdata->name,
            'user_email' => $objectdata->email,
            'channel_id' => 2,
            'datetime_create' => date('Y-m-d H:i:s'),
            'is_actived' => 1,
        );
        $result = $this->login_model->registration_insert($data);
        if ($result == true) {
            // write log insert new user
        } else {
            // write log alrady user
        }
    }
    

    // Check for user login process facebook
    public function user_login_process_facebook()
    {

        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
        );
        $result = $this->login_model->login($data);
        if ($result == true) {

            $username = $this->input->post('username');
            $result = $this->login_model->read_user_information($username);
            if ($result != false) {
                $session_data_login = array(
                    'username_admin' => $result[0]->user_name,
                    'email_admin' => $result[0]->user_email,
                );
                // Add user data in session
                $this->session->set_userdata('logged_in_login', $session_data_login);
                $this->load->view('dashboard');
            }
        } else {
            $data = array(
                'error_message' => 'Invalid Username or Password',
            );
            $this->load->view('templates/header');
            $this->load->view('authentication/login', $data);
        }
    }
    */
}
