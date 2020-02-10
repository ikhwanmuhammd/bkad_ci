<?php 

/**
 * 
 */
class Data_desa extends CI_Controller
{
	
	public function index()
	{
		$data['data_desa'] = $this->data_desa_model->tampil_data_desa()->result();
		$data['kecamatan'] = $this->data_desa_model->pilih_kecamatan()->result();
		
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('data/v_data_desa', $data);
		$this->load->view('templates_administrator/footer');
	}

	public function simpan_desa(){

		$this->data_desa_model->tambah_data_desa();
		$this->session->set_flashdata('flash', 'Ditambahkan');
		redirect('data/data_desa');
	}

	public function edit_desa(){

		$id = $this->input->post('id');
        $data = array(
        	'id' => $this->input->post('id', TRUE),
            'kode_desa' => $this->input->post('kode_desa', TRUE),
			'nama_desa' => strtoupper($this->input->post('nama_desa', TRUE)),
			'nama_kepala_desa' => strtoupper($this->input->post('nama_kepala_desa', TRUE)),
			'nama_kecamatan' => strtoupper($this->input->post('nama_kecamatan', TRUE))
        );
        $this->data_desa_model->edit_data_desa($data, $id);
		// $this->load->view('data/v_data_desa', $data, $id);
		$this->session->set_flashdata('flash', 'Diedit');
		redirect('data/data_desa');
	}

	public function hapus_desa($id){

		$this->data_desa_model->hapus_data_desa($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('data/data_desa');
	}
}