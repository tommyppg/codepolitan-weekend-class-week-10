<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Artikel_Model');
	}

	public function index(){
		//get all artikel data
		$data['artikel_data'] = $this->Artikel_Model->get_all()->result_array();

		//cara menampilkan view dan passing data
		$this->load->view('artikel/index', $data);
	}

	public function add(){
		$this->load->view('artikel/form');
	}

	public function update(){
		$this->load->view('artikel/form');
	}

	public function process(){
		//get input form
		$data['judul_artikel'] = $this->input->post('judul_artikel');
		$data['isi_artikel'] = $this->input->post('isi_artikel');
		$data['author_artikel'] = $this->input->post('author_artikel');
		$data['id_kategori'] = $this->input->post('id_kategori');
		
		//panggil insert function dari model
		$result = $this->Artikel_Model->insert($data);

		if($result){
			//mengarahkan halaman ke fungsi yang diinginkan
			redirect('artikel');
		}else{
			echo "Gagal menyimpan data";
		}
	}

}