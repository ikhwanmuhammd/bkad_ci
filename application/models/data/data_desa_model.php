<?php 

/**
 * 
 */
class Data_desa_model extends CI_Model
{
	
	public function tampil_data_desa()
	{
		return $this->db->get('tb_desa');
	}

	public function pilih_kecamatan(){
		return $this->db->get('tb_kecamatan');
	}

	public function tambah_data_desa()
	{
		$data = array(
			'kode_desa' => $this->input->post('kode_desa', TRUE),
			'nama_desa' => strtoupper($this->input->post('nama_desa', TRUE)),
			'nama_kepala_desa' => strtoupper($this->input->post('nama_kepala_desa', TRUE)),
			'nama_kecamatan' => strtoupper($this->input->post('nama_kecamatan', TRUE))
		);
		$this->db->insert('tb_desa',$data);
	}

	public function edit_data_desa($data,$id)
	{
		$id = $this->input->post('id');
        $data = array(
        	'id' => $this->input->post('id', TRUE),
            'kode_desa' => $this->input->post('kode_desa', TRUE),
			'nama_desa' => strtoupper($this->input->post('nama_desa', TRUE)),
			'nama_kepala_desa' => strtoupper($this->input->post('nama_kepala_desa', TRUE)),
			'nama_kecamatan' => strtoupper($this->input->post('nama_kecamatan', TRUE))
        );
        
		$this->db->where('id',$id);
	    $this->db->replace('tb_desa', $data);
	    return TRUE;
	}

	public function hapus_data_desa($id){
		$this->db->where('id',$id);
		$this->db->delete('tb_desa');
	}
}