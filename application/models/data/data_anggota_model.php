<?php 

/**
 * 
 */
class Data_anggota_model extends CI_Model
{
	
	public function tampil_data_anggota()
	{
		return $this->db->get('tb_anggota');
	}

	public function pilih_desa()
	{
		return $this->db->get('tb_desa');
	}

	public function pilih_kecamatan(){
		return $this->db->get('tb_kecamatan');
	}

	public function tambah_data_anggota()
	{
		$id 			= $this->input->post('id');
		$nik 			= $this->input->post('nik');
		$nama 			= $this->input->post('nama');
		$tmp_lahir 		= $this->input->post('tmp_lahir');
		$tgl_lahir 		= $this->input->post('tgl_lahir');
		$jk 			= $this->input->post('jk');
		$no_tlp 		= $this->input->post('no_tlp');
		$no_hp 			= $this->input->post('no_hp');
		$dtl_alamat 	= $this->input->post('dtl_alamat');
		$desa 			= $this->input->post('desa');
		$kecamatan 		= $this->input->post('kecamatan');
		$kota 			= $this->input->post('kota');
		$kode_pos 		= $this->input->post('kode_pos');
		$pekerjaan 		= $this->input->post('pekerjaan');
		$ahli_waris 	= $this->input->post('ahli_waris');
		$status_anggota = $this->input->post('status_anggota');
		$foto_anggota 	= $_FILES['foto_anggota'];
		if ($foto_anggota='') {
			
		}else{
			$config['upload_path']	= './assets/foto/anggota';
			$config['allowed_types']	= 'jpg|png|gif';

			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('foto_anggota')) {
				// $this->session->set_flashdata('gagal', 'Gagal Upload'); //blm jalan
				// die();
			}else{
				$foto_anggota = $this->upload->data('file_name');
			}
		}

		$data = array(
			'id'			=> $id,
			'nik'			=> $nik,
			'nama'			=> strtoupper($nama),
			'tmp_lahir'		=> $tmp_lahir,
			'tgl_lahir'		=> $tgl_lahir,
			'jk'			=> $jk,
			'no_tlp'		=> $no_tlp,
			'no_hp'			=> $no_hp,
			'dtl_alamat'	=> $dtl_alamat,
			'desa'			=> $desa,
			'kecamatan'		=> $kecamatan,
			'kota'			=> $kota,
			'kode_pos'		=> $kode_pos,
			'pekerjaan'		=> $pekerjaan,
			'ahli_waris'	=> $ahli_waris,
			'status_anggota'=> $status_anggota,
			'foto_anggota'	=> $foto_anggota

		);
		$this->db->insert('tb_anggota',$data);
	}

	public function detail_data($id = NULL){
		$query = $this->db->get_where('tb_anggota', array('id' => $id))->row();
		return $query;
	}

	public function edit_data_anggota($data,$id)
	{
		$id 			= $this->input->post('id');

		$data = array(
			'id'			=> $this->input->post('id',TRUE),
			'nik'			=> $this->input->post('nik',TRUE),
			'nama'			=> $this->input->post('nama',TRUE),
			'tmp_lahir'		=> $this->input->post('tmp_lahir',TRUE),
			'tgl_lahir'		=> $this->input->post('tgl_lahir',TRUE),
			'jk'			=> $this->input->post('jk',TRUE),
			'no_tlp'		=> $this->input->post('no_tlp',TRUE),
			'no_hp'			=> $this->input->post('no_hp',TRUE),
			'dtl_alamat'	=> $this->input->post('dtl_alamat',TRUE),
			'desa'			=> $this->input->post('desa',TRUE),
			'kecamatan'		=> $this->input->post('kecamatan',TRUE),
			'kota'			=> $this->input->post('kota',TRUE),
			'kode_pos'		=> $this->input->post('kode_pos',TRUE),
			'pekerjaan'		=> $this->input->post('pekerjaan',TRUE),
			'ahli_waris'	=> $this->input->post('ahli_waris',TRUE)
		);
        
		$this->db->where('id',$id);
	    $this->db->replace('tb_anggota', $data);
	    return TRUE;
	}

	public function ubah_status_anggota($data,$id)
	{
		$id 			= $this->input->post('id');

		$data = array(
			'status_anggota'	=> $this->input->post('status_anggota',TRUE)
		);
        
		$this->db->where('id',$id);
	    $this->db->replace('tb_anggota', $data);
	    return TRUE;
	}

	public function hapus_data_anggota($id){
		$this->db->where('id',$id);
		$this->db->delete('tb_anggota');
	}
}