<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->db->select('*');
    $this->db->from('jenis_cucian');
    $jenis_cuci = $this->db->get()->result();
		$type_mobil = $this->db->select("*")->from('type_mobil')->get()->result();

		$data["jenis_cuci"] = $jenis_cuci;
		$data["type_mobil"] = $type_mobil;

		$this->load->view('index/home', $data);
	}

	public function createKritik() 
	{
		$data['nama'] = $this->input->post('nama');
		$data['email'] = $this->input->post('email');
		$data['pesan'] = $this->input->post('pesan');
    $data['kebersihan'] = $this->input->post('kebersihan');
    $data['keramahan'] = $this->input->post('keramahan');
		$data['ketelitian'] = $this->input->post('ketelitian');

		$this->KritikModels->insert('saran', $data);

		$this->session->set_flashdata('flash', 'Ditambahkan');

		redirect(base_url('/'));
	}	

	public function createPendaftaran()
	{
		$data['nama'] = $this->input->post('nama');
		$data['no_hp'] = $this->input->post('no_hp');
		$data['alamat'] = $this->input->post('alamat');
    $data['nomor_plat'] = $this->input->post('nomor_plat');
    $data['type_mobil'] = $this->input->post('type_mobil');
		$data['nomor_antrian'] = $this->input->post('no_antrian');
		$data['jenis_cucian'] = $this->input->post('jenis_cucian');
		$data['tgl_pendaftaran'] = $this->input->post('tgl_pendaftaran');
		$data['jam_pendaftaran'] = $this->input->post('jam_pendaftaran');
		$data['total_biaya'] = $this->input->post('total_biaya');

		$data_customer = array(
			'nama' => $data['nama'],
			'no_hp' => $data['no_hp'],
			'alamat' => $data['alamat'],
			'nomor_plat' => $data['nomor_plat'],
			'type_mobil' => $data['type_mobil']
		);

		$this->CustomerModels->insert('customer', $data_customer);
		$id_customer = $this->db->insert_id();

		$data_pendaftaran = array(
			'no_antrian' => $data['nomor_antrian'],
			'id_customer' => $id_customer,
			'id_jenis_cucian' => $data['jenis_cucian'],
			'tgl_pendaftaran' => $data['tgl_pendaftaran'],
			'jam_pendaftaran' => $data['jam_pendaftaran'],
			'total_biaya' => $data['total_biaya'],
			'status' => 'Pendaftaran'
		);

		$this->PendaftaranModels->insert('pendaftaran', $data_pendaftaran);

		$this->session->set_flashdata('flash', 'Ditambahkan');

		redirect(base_url('/'));

	}
}