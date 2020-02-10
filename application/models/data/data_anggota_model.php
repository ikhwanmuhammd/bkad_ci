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

	// public function pilih_anggota(){
	// 	return $this->db->get('tb_anggota');
	// }

	// public function tambah_data_anggota()
	// {
	// 	$data = array(
	// 		'id_anggota' => $this->input->post('id_anggota', TRUE),
	// 		'nama_anggota' => strtoupper($this->input->post('nama_anggota', TRUE)),
	// 		'ketua_anggota' => strtoupper($this->input->post('ketua_anggota', TRUE)),
	// 		'status_anggota' => strtoupper($this->input->post('status_anggota', TRUE))
	// 	);
	// 	$this->db->insert('tb_anggota',$data);
	// }

	// // public function edit_data_desa($data,$id)
	// // {
	// // 	$this->db->where('id',$id);
	// //     $this->db->replace('tb_desa', $data);
	// //     return TRUE;
	// // }

	// public function hapus_data_anggota($id_anggota){
	// 	$this->db->where('id_anggota',$id_anggota);
	// 	$this->db->delete('tb_anggota');
	// }
}