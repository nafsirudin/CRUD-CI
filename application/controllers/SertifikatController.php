<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class SertifikatController extends CI_Controller
{
	public function index()
	{
		$data['sertifikats'] = $this->SertifikatModel->get_sertifikat();
		$this->load->view('layout/top',$data);
		$this->load->view('layout/navbar');
		$this->load->view('sertifikat/index');
		$this->load->view('layout/bottom');
	}

	public function tambah()
	{
		$data['nama'] 		= $this->input->post('nama');
		$data['tanggal'] 	= $this->input->post('tanggal');
		$data['kegiatan'] 	= $this->input->post('kegiatan');
		$this->SertifikatModel->tambah($data);
		$this->session->set_flashdata('success', 'Data telah tersimpan');
		redirect('/#sertifikat');
	}

	public function ubah($id)
	{
		$where['id'] = $id;
		$data['sertifikats'] = $this->SertifikatModel->get_sertifikat();
		$data['sertifikat'] = $this->SertifikatModel->get_by_id($where)->row();
		$this->load->view('layout/top',$data);
		$this->load->view('layout/navbar');
		$this->load->view('sertifikat/index');
		$this->load->view('layout/bottom');
	}

	public function aksi_ubah()
	{
		$where['id']			= $this->input->post('id');
		$data['nama'] 		= $this->input->post('nama');
		$data['tanggal'] 	= $this->input->post('tanggal');
		$data['kegiatan'] 	= $this->input->post('kegiatan');
		$this->SertifikatModel->ubah($data,$where);
		$this->session->set_flashdata('success', 'Data telah tersimpan');
		redirect('/#sertifikat');
	}

	public function hapus($id)
	{
		$where['id'] = $id;
		$this->SertifikatModel->hapus($where);
		$this->session->set_flashdata('success', 'Data telah terhapus');
		redirect('/#sertifikat');
	}
}