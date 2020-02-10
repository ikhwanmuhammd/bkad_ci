<?php 

/**
 * 
 */
class Data_anggota extends CI_Controller
{
	
	public function index()
	{
		$data['data_anggota'] = $this->data_anggota_model->tampil_data_anggota()->result();

		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('data/v_data_anggota',$data);
		$this->load->view('templates_administrator/footer');
	}

	// public function simpan_anggota(){

	// 	$this->data_anggota_model->tambah_data_anggota();
	// 	$this->session->set_flashdata('flash', 'Ditambahkan');
	// 	redirect('data/data_anggota');
	// }

	// public function edit_anggota(){

	// 	// $id = $this->input->post('id');
 //  //       $data = array(
 //  //       	'id' => $this->input->post('id', TRUE),
 //  //           'kode_anggota' => $this->input->post('kode_anggota', TRUE),
	// 	// 	'nama_anggota' => strtoupper($this->input->post('nama_anggota', TRUE)),
	// 	// 	'nama_kepala_anggota' => strtoupper($this->input->post('nama_kepala_anggota', TRUE)),
	// 	// 	'nama_kecamatan' => strtoupper($this->input->post('nama_kecamatan', TRUE))
 //  //       );
 //  //       $this->data_anggota_model->edit_data_anggota($data, $id);
	// 	// // $this->load->view('data/v_data_anggota', $data, $id);
	// 	// $this->session->set_flashdata('flash', 'Diedit');
	// 	// redirect('data/data_anggota');
	// }

	public function hapus_anggota($id){

		$this->data_anggota_model->hapus_data_anggota($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('data/data_anggota');
	}
}