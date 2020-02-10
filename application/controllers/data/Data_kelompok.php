<?php 

/**
 * 
 */
class Data_kelompok extends CI_Controller
{
	
	public function index()
	{
		$data['data_kelompok'] = $this->data_kelompok_model->tampil_data_kelompok()->result();
		$data['anggota'] = $this->data_kelompok_model->pilih_anggota()->result();

		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('data/v_data_kelompok',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function simpan_kelompok(){

		$this->data_kelompok_model->tambah_data_kelompok();
		$this->session->set_flashdata('flash', 'Ditambahkan');
		redirect('data/data_kelompok');
	}

	// public function edit_kelompok(){

	// 	// $id = $this->input->post('id');
 //  //       $data = array(
 //  //       	'id' => $this->input->post('id', TRUE),
 //  //           'kode_kelompok' => $this->input->post('kode_kelompok', TRUE),
	// 	// 	'nama_kelompok' => strtoupper($this->input->post('nama_kelompok', TRUE)),
	// 	// 	'nama_kepala_kelompok' => strtoupper($this->input->post('nama_kepala_kelompok', TRUE)),
	// 	// 	'nama_kecamatan' => strtoupper($this->input->post('nama_kecamatan', TRUE))
 //  //       );
 //  //       $this->data_kelompok_model->edit_data_kelompok($data, $id);
	// 	// // $this->load->view('data/v_data_kelompok', $data, $id);
	// 	// $this->session->set_flashdata('flash', 'Diedit');
	// 	// redirect('data/data_kelompok');
	// }

	public function hapus_kelompok($id_kelompok){

		$this->data_kelompok_model->hapus_data_kelompok($id_kelompok);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('data/data_kelompok');
	}
}