<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


    public function index()
    {
        $data['title'] = 'Desa Jayi';
        $this->load->view('backend/themes/header', $data);
        $this->load->view('backend/pages/index');
        $this->load->view('backend/themes/footer');
    }

}