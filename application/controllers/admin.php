<?php
defined("BASEPATH") or exit("no direct script access allowed");
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
  }
}