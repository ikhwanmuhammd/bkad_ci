<?php 

/**
 * 
 */
class Buku_kas extends CI_Controller
{
	
	public function index()
	{
		$data['buku_kas'] = $this->buku_kas_model->tampil_buku_kas()->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('kas/v_buku_kas', $data);
		$this->load->view('templates_administrator/footer');
	}

	public function simpan_buku_kas(){

		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('flash', 'Gagal Tambah Data');
			redirect('kas/buku_kas');
		}else {
			$this->buku_kas_model->tambah_buku_kas();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('kas/buku_kas');
		}
	}

	public function _rules(){
		
		$this->form_validation->set_rules('nama_kas','nama_kas','required',[
			'required' => 'Nama kas harus diisi!'
		]);
		$this->form_validation->set_rules('saldo_kas','saldo_kas','required',[
			'required' => 'Saldo kas harus diisi!'
		]);
		$this->form_validation->set_rules('status_kas','status_kas','required');
		$this->form_validation->set_rules('ket_kas','ket_kas','required',[
			'required' => 'Keterangan kas harus diisi!'
		]);
	}

	public function hapus_buku_kas($id_kas){
		$this->buku_kas_model->hapus_buku_kas($id_kas);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('kas/buku_kas');
	}
}