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
        // Load database
        $this->load->model('login_model');
    }

    // Show login page
    public function index()
    {
        //add facebook sdk
        require_once '../Facebook/autoload.php';
        if (!session_id()) {
            session_start();
        }
        $fb = new Facebook\Facebook([
            'app_id' => '268283360663726',
            'app_secret' => '3aa1deb6c8dc632f87aa2d3de7f2e5df',
            'default_graph_version' => 'v3.1',
        ]);

        $helper = $fb->getRedirectLoginHelper();

        $permissions = ['email']; // Optional permissions
        $datalink['loginurl'] = $helper->getLoginUrl(base_url() . 'user_authentication/facebook_callback', $permissions);

        $this->load->view('templates/header');
        $this->load->view('authentication/login', $datalink);
    }

    // Show registration page
    public function user_registration_show()
    {
        $this->load->view('templates/header');
        $this->load->view('authentication/registration');
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

    // Check for user login process
    public function user_login_process()
    {

        $this->form_validation->set_rules('username', 'Username', 'trim|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|xss_clean');

        if ($this->form_validation->run() == false) {
            if (isset($this->session->userdata['logged_in'])) {
                $this->load->view('admin');
            } else {
                $this->load->view('templates/header');
                $this->load->view('authentication/login');
            }
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
            );
            $result = $this->login_model->login($data);
            if ($result == true) {

                $username = $this->input->post('username');
                $result = $this->login_model->read_user_information($username);
                if ($result != false) {
                    $session_data = array(
                        'username' => $result[0]->user_name,
                        'email' => $result[0]->user_email,
                    );
                    // Add user data in session
                    $this->session->set_userdata('logged_in', $session_data);
                    $this->load->view('admin');
                }
            } else {
                $data = array(
                    'error_message' => 'Invalid Username or Password',
                );
                $this->load->view('templates/header');
                $this->load->view('authentication/login', $data);
            }
        }
    }

    // Logout from admin page
    public function logout()
    {

        // Removing session data
        $sess_array = array(
            'username' => '',
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $data['message_display'] = 'Successfully Logout';
        $this->load->view('templates/header');
        $this->load->view('authentication/login', $data);
    }

    public function new_user_registration_facebook()
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
                $session_data = array(
                    'username' => $result[0]->user_name,
                    'email' => $result[0]->user_email,
                );
                // Add user data in session
                $this->session->set_userdata('logged_in', $session_data);
                $this->load->view('admin');
            }
        } else {
            $data = array(
                'error_message' => 'Invalid Username or Password',
            );
            $this->load->view('templates/header');
            $this->load->view('authentication/login', $data);
        }
    }
    public function facebook_callback()
    {
        require_once '../Facebook/autoload.php';
        if (!session_id()) {
            session_start();
        }
        $fb = new Facebook\Facebook([
            'app_id' => '268283360663726',
            'app_secret' => '3aa1deb6c8dc632f87aa2d3de7f2e5df',
            'default_graph_version' => 'v3.1',
        ]);

        $helper = $fb->getRedirectLoginHelper();

        try {
            $accessToken = $helper->getAccessToken();
        } catch (Facebook\Exceptions\FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch (Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }

        if (!isset($accessToken)) {
            if ($helper->getError()) {
                header('HTTP/1.0 401 Unauthorized');
                echo "Error: " . $helper->getError() . "\n";
                echo "Error Code: " . $helper->getErrorCode() . "\n";
                echo "Error Reason: " . $helper->getErrorReason() . "\n";
                echo "Error Description: " . $helper->getErrorDescription() . "\n";
            } else {
                header('HTTP/1.0 400 Bad Request');
                echo 'Bad request';
            }
            exit;
        }

        // ################Logged in
        //echo '<h3>Access Token</h3>';
        //var_dump($accessToken->getValue());

        // The OAuth 2.0 client handler helps us manage access tokens
        $oAuth2Client = $fb->getOAuth2Client();

        // Get the access token metadata from /debug_token
        $tokenMetadata = $oAuth2Client->debugToken($accessToken);
        //############
        //echo '<h3>Metadata</h3>';
        //var_dump($tokenMetadata);

        // Validation (these will throw FacebookSDKException's when they fail)
        $tokenMetadata->validateAppId('268283360663726');
        // If you know the user ID this access token belongs to, you can validate it here
        //$tokenMetadata->validateUserId('123');
        $tokenMetadata->validateExpiration();

        if (!$accessToken->isLongLived()) {
            // Exchanges a short-lived access token for a long-lived one
            try {
                $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
            } catch (Facebook\Exceptions\FacebookSDKException $e) {
                echo "<p>Error getting long-lived access token: " . $e->getMessage() . "</p>\n\n";
                exit;
            }

            echo '<h3>Long-lived</h3>';
            var_dump($accessToken->getValue());
        }

        $_SESSION['fb_access_token'] = (string) $accessToken;

        try {
            // Get the \Facebook\GraphNodes\GraphUser object for the current user.
            // If you provided a 'default_access_token', the '{access-token}' is optional.
            $response = $fb->get('/me?fields=name,email,location,gender,birthday,hometown', $accessToken->getValue());
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            echo $e->getMessage();
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            echo $e->getMessage();
        }

        // Get user details from facebook.
        $me = $response->getGraphUser();

        print_r($me);

        // User is logged in with a long-lived access token.
        // You can redirect them to a members-only page.
        //header('Location: https://example.com/members.php');
    }

}
