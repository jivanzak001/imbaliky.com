<?php class Social extends CI_Controller
{
    public function session($provider,$id)
    {
        $this->load->helper('url_helper');

//$this->load->spark('oauth2/0.3.1');

        $provider = $this->oauth2->provider($provider, array(
            'id' => '547541085400238',
            'secret' => 'aa0eb44670ae5362e81a040d31661bb1',
        ));

        if (!$this->input->get('code')) {
// By sending no options it'll come back here
            $provider->authorize();
        } else {
// Howzit?
            try {
                $token = $provider->access($_GET['code']);

                $user = $provider->get_user_info($token);

// Here you should use this information to A) look for a user B) help a new user sign up with existing data.
// If you store it all in a cookie and redirect to a registration page this is crazy-simple.
                $fb_user = array(
                    'user_id' => $user['uid'],
                    'name' => $user['name'],
                    'image' => $user['image']
                );
                $this->session->set_userdata($fb_user);

                redirect(base_url().'competitions/images/'.$id);
            } catch (OAuth2_Exception $e) {
                show_error('That didnt work: ' . $e);
            }

        }
    }
}