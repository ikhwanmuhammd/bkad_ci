<?php 

/**
 * 
 */
class Buku_kas_model extends CI_Model
{
	
	public function tampil_buku_kas()
	{
		return $this->db->get('tb_kas');
	}

	public function tambah_buku_kas()
	{
		$data = array(
			'kode_kas' => $this->input->post('kode_kas', TRUE),
			'nama_kas' => $this->input->post('nama_kas', TRUE),
			'saldo_kas' => $this->input->post('saldo_kas', TRUE),
			'status_kas' => $this->input->post('status_kas', TRUE),
			'ket_kas' => $this->input->post('ket_kas', TRUE),
		);
		$this->db->insert('tb_kas',$data);
	}

	public function hapus_buku_kas($id_kas){
		$this->db->where('id_kas',$id_kas);
		$this->db->delete('tb_kas');
	}
}