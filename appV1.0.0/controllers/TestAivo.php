<?php

use Facebook\Facebook;
use Facebook\FacebookRequest;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;

class TestAivo extends CI_Controller {

    private $appId = '1450786174981540';
    private $appSecrete = 'fd6a19ea60682c937b173ad09c5c4705';
    private $fb;

    public function index($id = '') {

        if (empty($id)) {
            echo 'call service with an id';
            exit;
        }

        $accessToken = $this->getAccessToken();

        if ($accessToken) {

            try {

                $response = $this->fb->get('/' . $id . '?fields=id,name,last_name', $accessToken);
            } catch (FacebookResponseException $e) {

                log_message('error', 'Graph returned an error: ' . $e->getMessage());

                exit('Error');
            } catch (FacebookSDKException $e) {

                log_message('error', 'Facebook SDK returned an error: ' . $e->getMessage());

                exit('Error');
            }

            echo 'Success<br>';

            $user = $response->getGraphUser();

            foreach ($user as $key => $value) {

                echo '<br>' . $key . ': ' . $value;
            }
        } else {
            $this->loginOnFacebook($id);
        }
    }

    /**
     * Executes the call to the service
     *
     * @param int $id Profile id
     * @return void
     * 
     * */
    public function loginOnFacebook($id) {

        $this->initFacebookApp();

        $params = array('req_perms' => 'user_about_me');

        $helper = $this->fb->getRedirectLoginHelper();

        $loginUrl = $helper->getLoginUrl(base_url('TestAivo/index/' . $id) . '/', $params);

        header('Location: ' . $loginUrl);

        exit;
    }

    /**
     * Get access token to operate with api Facebook
     * 
     * 
     * @return boolean/string Returns access token or FALSE on failure.
     * 
     * */
    private function getAccessToken() {

        $this->initFacebookApp();

        $helper = $this->fb->getRedirectLoginHelper();

        try {

            $accessToken = $helper->getAccessToken();
        } catch (FacebookResponseException $e) {

            log_message('error', 'Graph returned an error: ' . $e->getMessage());

            return FALSE;
        } catch (FacebookSDKException $e) {

            log_message('error', 'Facebook SDK returned an error: ' . $e->getMessage());

            return FALSE;
        }

        return $accessToken;
    }

    /**
     * Initialize Facebook
     * 
     * @return void
     * 
     * */
    private function initFacebookApp() {

        $this->fb = new Facebook([
            'app_id' => $this->appId,
            'app_secret' => $this->appSecrete,
            'default_graph_version' => 'v2.9',
        ]);
    }

}
