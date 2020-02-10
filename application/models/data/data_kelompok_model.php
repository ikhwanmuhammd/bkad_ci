<?php 

/**
 * 
 */
class Data_kelompok_model extends CI_Model
{
	
	public function tampil_data_kelompok()
	{
		return $this->db->get('tb_kelompok');
	}

	public function pilih_anggota(){
		return $this->db->get('tb_anggota');
	}

	public function tambah_data_kelompok()
	{
		$data = array(
			'id_kelompok' => $this->input->post('id_kelompok', TRUE),
			'nama_kelompok' => strtoupper($this->input->post('nama_kelompok', TRUE)),
			'ketua_kelompok' => strtoupper($this->input->post('ketua_kelompok', TRUE)),
			'status_kelompok' => strtoupper($this->input->post('status_kelompok', TRUE))
		);
		$this->db->insert('tb_kelompok',$data);
	}

	// public function edit_data_desa($data,$id)
	// {
	// 	$this->db->where('id',$id);
	//     $this->db->replace('tb_desa', $data);
	//     return TRUE;
	// }

	public function hapus_data_kelompok($id_kelompok){
		$this->db->where('id_kelompok',$id_kelompok);
		$this->db->delete('tb_kelompok');
	}
}