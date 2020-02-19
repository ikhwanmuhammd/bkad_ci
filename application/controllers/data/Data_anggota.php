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

	public function tambah_anggota()
	{
		$data['desa'] = $this->data_anggota_model->pilih_desa()->result();
		$data['kecamatan'] = $this->data_anggota_model->pilih_kecamatan()->result();

		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('data/v_tambah_anggota',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function simpan_anggota(){

		$this->data_anggota_model->tambah_data_anggota();
		$this->session->set_flashdata('flash', 'Ditambahkan');
		redirect('data/data_anggota');
	}

	public function detail_anggota($id)
	{
		$detail = $this->data_anggota_model->detail_data($id);
		$data['detail'] = $detail;

		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('data/v_detail_anggota', $data);
		$this->load->view('templates_administrator/footer');
	}

	public function edit_anggota($id){

		$data['desa'] = $this->data_anggota_model->pilih_desa()->result();
		$data['kecamatan'] = $this->data_anggota_model->pilih_kecamatan()->result();

		$detail = $this->data_anggota_model->detail_data($id);
		$data['detail'] = $detail;

		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('data/v_edit_anggota', $data);
		$this->load->view('templates_administrator/footer');
	}

	public function update_anggota(){

		$this->data_anggota_model->edit_data_anggota($data, $id);
		$this->session->set_flashdata('flash', 'Diedit');
		redirect('data/data_anggota');
		// redirect('data/data_anggota/detail_anggota/');

	}

	public function ubah_status(){

		$this->data_anggota_model->ubah_status_anggota($data, $id);
		$this->session->set_flashdata('flash', 'Diedit');
		redirect('data/data_anggota');
		// redirect('data/data_anggota/detail_anggota/');

	}

	public function hapus_anggota($id){

		$this->data_anggota_model->hapus_data_anggota($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('data/data_anggota');
	}
}