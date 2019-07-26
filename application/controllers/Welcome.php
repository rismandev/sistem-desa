<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['img'] = 'home-bg.png';
		$data['title'] = 'Desa Jayi';
		$data['subtitle'] = 'Kabanggaan Urang Sadaya';
		$this->load->view('frontend/themes/header', $data);
		$this->load->view('frontend/themes/header-img');
		$this->load->view('frontend/home/index');
		$this->load->view('frontend/themes/footer');
	}
	public function about()
	{
		$data['img'] = 'about-bg.jpg';
		$data['title'] = 'Profile Desa';
		$data['subtitle'] = 'Kabanggaan Urang Sadaya';
		$this->load->view('frontend/themes/header', $data);
		$this->load->view('frontend/themes/header-img');
		$this->load->view('frontend/home/about');
		$this->load->view('frontend/themes/footer');
	}

	public function post()
	{
		$data['img'] = 'post-bg.jpg';
		$data['title'] = 'Informasi Desa';
		$data['subtitle'] = 'Kabanggaan Urang sadaya';
		$this->load->view('frontend/themes/header', $data);
		$this->load->view('frontend/themes/header-img');
		$this->load->view('frontend/home/post');
		$this->load->view('frontend/themes/footer');
	}

	public function contact()
	{
		$data['img'] = 'contact-bg.jpg';
		$data['title'] = 'Hubungi Kami';
		$data['subtitle'] = 'Kabanggaan Urang sadaya';
		$this->load->view('frontend/themes/header', $data);
		$this->load->view('frontend/themes/header-img');
		$this->load->view('frontend/home/contact');
		$this->load->view('frontend/themes/footer');
	}
}
