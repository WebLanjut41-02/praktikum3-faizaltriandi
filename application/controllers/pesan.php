<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pesan extends CI_Controller {

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
	public function __construct(){
		parent::__construct();
		$this->load->model('m_pesan');
		$this->load->library('table');
	}
	public function index(){
		$this->load->view('v_user');
	}
	public function list_menu(){
		$x['data'] = $this->m_pesan->getAllmenu();
		// $this->
		$this->load->view('v_pemesanan', $x);
	}
	public function viewpemesanan(){
		// $data = $this->Model_Menu->getAllmenu();
		// $this->
		$this->load->view('v_viewpemesanan');
	}

}
