<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends CI_Controller {

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
	public function __contruct(){

	}

	public function index(){
		$this->load->model('model_laporan');

		$this->load->helper('url');
		$data['laporan'] = $this->model_laporan->get_laporan_teratas();

		$this->load->view('halaman_utama/halaman_utama', $data);

	}

	public function laporan_teratas(){
		$data['laporan'] = $this->model_laporan->get_laporan_teratas();
	}

	public function buatlaporan(){
			$this->load->view('Buat_laporan/Buat_Laporan');
	}

	public function lihatlaporan(){

		$data['laporan'] = $this->model_lihatlaporan->get_laporan_teratas();
	}


}
