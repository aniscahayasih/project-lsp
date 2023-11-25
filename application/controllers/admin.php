<?php
defined("BASEPATH") or exit("no direct script access allowed");

use App\Models\UserModels;
use App\Models\TransaksiModels;


class Admin extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
  }
  public function index()
  {
    $this->load->view("template/head");
    $this->load->view("template/header");
    $this->load->view("template/sidebar");
    $this->load->view("content/home");
    $this->load->view("template/footer");
  }

  public function pendaftaran() 
  {
    $this->load->database();
    //$query = $this->db->select('(select * from pendaftaran join customer using (id_customer) join jenis_cucian using (id_jenis_cucian) order by id_pendaftaran desc')->get_compiled_select();
    $this->db->select('*');
    $this->db->from('pendaftaran');
    $this->db->join('customer', 'customer.id_customer = pendaftaran.id_customer');
    $this->db->join('jenis_cucian', 'jenis_cucian.id_jenis_cucian = pendaftaran.id_jenis_cucian');
    $query = $this->db->get()->result();
    $data["pendaftaran"] = $query;
    //var_dump($query);exit;
    $data["judul"] = "Halaman Depan";
    $this->load->view("template/head", $data);
    $this->load->view("template/header", $data);
    $this->load->view("template/sidebar", $data);
    $this->load->view("content/pendaftaran", $data);
    $this->load->view("template/footer", $data);
  }

  public function transaksi()
  {
    $this->load->database();
    //$query = $this->db->select('(select * from pendaftaran join customer using (id_customer) join jenis_cucian using (id_jenis_cucian) order by id_pendaftaran desc')->get_compiled_select();
    $this->db->select('*');
    $this->db->from('transaksi');
    $this->db->join('pendaftaran', 'transaksi.id_pendaftaran = pendaftaran.id_pendaftaran');
    $this->db->join('customer', 'pendaftaran.id_customer = customer.id_customer');
    $this->db->order_by('transaksi.id_transaksi', 'desc');
    $query = $this->db->get()->result();
    $data["transaksi"] = $query;

    $this->load->view("template/head", $data);
    $this->load->view("template/header", $data);
    $this->load->view("template/sidebar", $data);
    $this->load->view("content/transaksi", $data);
    $this->load->view("template/footer", $data);
  }

  public function customer()
  {
    $this->db->select('*');
    $this->db->from('customer');
    $this->db->order_by('id_customer', 'desc');

    $query = $this->db->get()->result();
    $data["customer"] = $query;

    $this->load->view("template/head", $data);
    $this->load->view("template/header", $data);
    $this->load->view("template/sidebar", $data);
    $this->load->view("content/customer", $data);
    $this->load->view("template/footer", $data);
  }

  public function saran()
  {
    $this->db->select('*');
    $this->db->from('saran');
    $this->db->order_by('id_saran', 'desc');

    $query = $this->db->get()->result();
    $data["saran"] = $query;

    $this->load->view("template/head", $data);
    $this->load->view("template/header", $data);
    $this->load->view("template/sidebar", $data);
    $this->load->view("content/saran", $data);
    $this->load->view("template/footer", $data);
  }

  //pendaftaran
  public function ganti_status($id)
  {
    $data['status'] = $this->input->post('status');
    
    $this->PendaftaranModels->update('pendaftaran', $data, $id);

    redirect(base_url('admin/pendaftaran'));
  }
  public function bayar_view($id)
  {
    $data['data'] = $this->PendaftaranModels->find_record_by_id('pendaftaran', $id);

    $this->load->view("template/head", $data);
    $this->load->view("template/header", $data);
    $this->load->view("template/sidebar", $data);
    $this->load->view("content/tambah_pembayaran", $data);
    $this->load->view("template/footer", $data);
  }

  //user
  public function user()
  {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->order_by('id_user', 'desc');

    $query = $this->db->get()->result();
    $data["user"] = $query;

    $this->load->view("template/head", $data);
    $this->load->view("template/header", $data);
    $this->load->view("template/sidebar", $data);
    $this->load->view("content/user/user", $data);
    $this->load->view("template/footer", $data);
  }
  public function add_user_view()
  {
    $this->load->view("template/head");
    $this->load->view("template/header");
    $this->load->view("template/sidebar");
    $this->load->view("content/user/addUser");
    $this->load->view("template/footer");
  }
  public function add_user()
  {
    $data['nama'] = $this->input->post('nama');
		$data['alamat'] = $this->input->post('alamat');
    $data['hp'] = $this->input->post('hp');
    $data['status'] = 1;
    $data['username'] = $this->input->post('username');
    $data['password'] = $this->input->post('password');

    $this->UserModels->insert('user', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success">Record has been saved successfully.</div>');

    redirect(base_url('admin/user'));
  }
  public function edit_user_view($id)
  {
    $data['data'] = $this->UserModels->find_record_by_id('user', $id);

    $this->load->view("template/head", $data);
    $this->load->view("template/header", $data);
    $this->load->view("template/sidebar", $data);
    $this->load->view("content/user/editUser", $data);
    $this->load->view("template/footer", $data);
  }
  public function edit_user($id)
  {
    $data['nama'] = $this->input->post('nama');
		$data['alamat'] = $this->input->post('alamat');
    $data['hp'] = $this->input->post('hp');
    $data['username'] = $this->input->post('username');
    $data['password'] = $this->input->post('password');

    $this->UserModels->update('user', $data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-success">Record has been saved successfully.</div>');

    redirect(base_url('admin/user'));
  }
  public function delete_user($id)
	{
		$this->UserModels->delete('user', $id);
		$this->session->set_flashdata('message', '<div class="alert alert-success">Record has been deleted successfully.</div>');
		redirect(base_url('admin/user'));
	}

  // Tipe mobil
  public function type_mobil()
  {
    $this->db->select('*');
    $this->db->from('type_mobil');
    $this->db->order_by('id_type_mobil', 'desc');

    $query = $this->db->get()->result();
    $data["type_mobil"] = $query;

    $this->load->view("template/head", $data);
    $this->load->view("template/header", $data);
    $this->load->view("template/sidebar", $data);
    $this->load->view("content/tipeMobil/tipeMobil", $data);
    $this->load->view("template/footer", $data);
  }
  public function add_type_mobil_view()
  {
    $this->load->view("template/head");
    $this->load->view("template/header");
    $this->load->view("template/sidebar");
    $this->load->view("content/tipeMobil/addTipeMobil");
    $this->load->view("template/footer");
  }
  public function add_type_mobil()
  {
    $data['type_mobil'] = $this->input->post('type_mobil');

    $this->TipeMobilModels->insert('type_mobil', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success">Record has been saved successfully.</div>');

    redirect(base_url('admin/type_mobil'));
  }
  public function edit_type_mobil_view($id)
  {
    $data['data'] = $this->TipeMobilModels->find_record_by_id('type_mobil', $id);

    $this->load->view("template/head", $data);
    $this->load->view("template/header", $data);
    $this->load->view("template/sidebar", $data);
    $this->load->view("content/tipeMobil/editTipeMobil", $data);
    $this->load->view("template/footer", $data);
  }
  public function edit_type_mobil($id)
  {
    $data['type_mobil'] = $this->input->post('type_mobil');
    
    $this->TipeMobilModels->update('type_mobil', $data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-success">Record has been saved successfully.</div>');

    redirect(base_url('admin/type_mobil'));
  }
  public function delete_type_mobil($id)
	{
		$this->TipeMobilModels->delete('type_mobil', $id);
		$this->session->set_flashdata('message', '<div class="alert alert-success">Record has been deleted successfully.</div>');
		redirect(base_url('admin/type_mobil'));
	}

  // Jenis Cucian
  public function jenis_cucian()
  {
    $this->db->select('*');
    $this->db->from('jenis_cucian');
    $this->db->order_by('id_jenis_cucian', 'desc');

    $query = $this->db->get()->result();
    $data["jenis_cucian"] = $query;

    $this->load->view("template/head", $data);
    $this->load->view("template/header", $data);
    $this->load->view("template/sidebar", $data);
    $this->load->view("content/jenisCucian/jenisCucian", $data);
    $this->load->view("template/footer", $data);
  }
  public function add_jenis_cucian_view()
  {
    $this->load->view("template/head");
    $this->load->view("template/header");
    $this->load->view("template/sidebar");
    $this->load->view("content/jenisCucian/addJenisCucian");
    $this->load->view("template/footer");
  }
  public function add_jenis_cucian()
  {
    $data['jenis_cucian'] = $this->input->post('jenis_cucian');
    $data['biaya'] = $this->input->post('biaya');

    $this->JenisCucianModels->insert('jenis_cucian', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success">Record has been saved successfully.</div>');

    redirect(base_url('admin/jenis_cucian'));
  }
  public function edit_jenis_cucian_view($id)
  {
    $data['data'] = $this->JenisCucianModels->find_record_by_id('jenis_cucian', $id);

    $this->load->view("template/head", $data);
    $this->load->view("template/header", $data);
    $this->load->view("template/sidebar", $data);
    $this->load->view("content/jenisCucian/editJenisCucian", $data);
    $this->load->view("template/footer", $data);
  }
  public function edit_jenis_cucian($id)
  {
    $data['jenis_cucian'] = $this->input->post('jenis_cucian');
    $data['biaya'] = $this->input->post('biaya');
    
    $this->JenisCucianModels->update('jenis_cucian', $data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-success">Record has been saved successfully.</div>');

    redirect(base_url('admin/jenis_cucian'));
  }
  public function delete_jenis_cucian($id)
	{
		$this->JenisCucianModels->delete('jenis_cucian', $id);
		$this->session->set_flashdata('message', '<div class="alert alert-success">Record has been deleted successfully.</div>');
		redirect(base_url('admin/jenis_cucian'));
	}
}