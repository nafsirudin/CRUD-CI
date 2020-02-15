<?php
class SertifikatModel extends CI_Model
{
	public function get_sertifikat()
	{
		$this->db->order_by('tanggal','DESC');
		$query = $this->db->get('sertifikat');
		return $query;
	}

	public function get_by_id($where)
	{
		$query = $this->db->get_where('sertifikat',$where);
		return $query;
	}

	public function tambah($data)
	{
		$this->db->insert('sertifikat',$data);
	}

	public function ubah($data,$where)
	{
		$this->db->update('sertifikat',$data,$where);
	}

	public function hapus($where)
	{
		$this->db->delete('sertifikat',$where);
	}
}