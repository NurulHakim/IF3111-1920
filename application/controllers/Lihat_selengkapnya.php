<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lihat_selengkapnya extends CI_Controller
{

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
	public function __contruct()
	{ }

	public function index($id_laporan)
	{
		$this->load->model('model_lihat_selengkapnya');

		$this->load->helper('url');
		$data['laporan'] = $this->model_lihat_selengkapnya->get_one_laporan($id_laporan);
		$this->load->view('lihat_selengkapnya', $data);
	}

	public function lihat()
	{

		$data['laporan'] = $this->model_lihat_selengkapnya->get_lihat_selengkapnya();
	}

	public function hapus($id_laporan)
	{

		//$data['laporan'] = $this->model_lihat_selengkapnya->hapus_laporan();
		$this->load->model('model_lihat_selengkapnya');

		$where = array('id_laporan' => $id_laporan);
		$this->model_lihat_selengkapnya->hapus_laporan($where, 'laporan');
		redirect('Utama/index');
	}

	public function edit_laporan($id_laporan)
	{

		//$data['laporan'] = $this->model_lihat_selengkapnya->hapus_laporan();
		$this->load->model('model_lihat_selengkapnya');

		//$where = array('id_laporan' => $id_laporan);
		$data['laporan'] = $this->model_lihat_selengkapnya->get_one_laporan($id_laporan);
		$this->load->view('edit/edit_Laporan', $data);
		//redirect('Utama/index');
	}

	public function update_laporan($id_laporan)
	{
		$aspek = $this->input->post('aspek');
		$isi_laporan = $this->input->post('Komentar');
		$username = "iyuy";
		$config['upload_path'] = './assets/upload/';
		$config['allowed_types'] = 'jpg|jpeg|png|doc|docx|xls|xlxs|ppt|pptx|pdf'; //doc, docx, xls, xlsx, ppt, pptx, pdf
		$this->load->library('upload', $config);



		$this->upload->do_upload('lampiran');
		echo $this->upload->display_errors();
		$lampiran = $this->upload->data('file_name');

		$this->load->model('model_lihat_selengkapnya');
		if ($this->model_lihat_selengkapnya->edit_laporan($id_laporan, $aspek, $isi_laporan, $lampiran)) {
			redirect('Utama/index');
		}
	}
}
