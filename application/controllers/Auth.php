<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


    public function index()
    {
        $data['title'] = 'Login';
        $this->load->view('auth/index', $data);
    }

}