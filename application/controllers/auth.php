<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use App\Models\UserModels;
class Auth extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function login()
	{
		$this->load->view('login');
	}

	public function auth()
    {
        $session = session();
        $model = new UserModels();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('username', $username)->first();
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'id_user'       => $data['id_user'],
                    'username'    => $data['username'],
                    'status'     => 1
                ];
                $session->set($ses_data);
                return redirect()->to('/admin');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/auth/login');
            }
        }else{
            $session->setFlashdata('msg', 'Username not Found');
            return redirect()->to('/auth/login');
        }
    }
}
