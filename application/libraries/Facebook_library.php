<?php defined('BASEPATH') or exit('No direct script access allowed');

class Facebook_library
{

    public function __construct()
    {
    }

    public function load_facebook()
    {
        //add facebook sdk
        require_once '../Facebook/autoload.php';
        
        // set config facebook
        $fb = new Facebook\Facebook([
            'app_id' => '268283360663726',
            'app_secret' => '3aa1deb6c8dc632f87aa2d3de7f2e5df',
            'default_graph_version' => 'v3.1',
        ]);

        return $fb;
    }

    public function get_login_url($helper)
    {
        $permissions = ['email']; // Optional permissions
        $loginurl = $helper->getLoginUrl(base_url() . 'user_authentication/facebook_callback', $permissions);

        return $loginurl;
    }

    public function get_redirect_login_helper($fb)
    {
        $helper = $fb->getRedirectLoginHelper();
        return $helper;
    }

    public function get_access_token($fb, $helper)
    {
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
        // app_id
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
        // User is logged in with a long-lived access token.
        // You can redirect them to a members-only page.
        //header('Location: https://example.com/members.php');

        return $accessToken;
    }

    public function get_user_login($fb, $accessToken)
    {
        try {
            // Get the \Facebook\GraphNodes\GraphUser object for the current user.
            // If you provided a 'default_access_token', the '{access-token}' is optional.
            $response = $fb->get('/me?fields=name,email', $accessToken->getValue());
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            echo $e->getMessage();
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            echo $e->getMessage();
        }

        // Get user details from facebook.
        $user_login = $response->getGraphUser();
        return $user_login;
    }

}
