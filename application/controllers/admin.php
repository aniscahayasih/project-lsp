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
  public function ganti_status()
  {
    $id_pendaftaran = $this->input->post('id_pendaftaran'); // Assuming it's a GET parameter
    $status = $this->input->post('status'); 

    $this->db->set('status', "'$status'", FALSE);
    $this->db->where('id_pendaftaran', $id_pendaftaran);
    $this->db->update('pendaftaran');

    return redirect()->to(base_url('admin/pendaftaran'));
    
    
  }
}