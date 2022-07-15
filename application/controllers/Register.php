<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('register_model'); //load model login
        $this->load->library('form_validation'); //load library form_validation
    }
    public function index()
    {
        $this->load->view('Auth/register'); //load view login
    }
    //method add digunakan untuk menampilkan form tambah data jurnal
    function add_account()
    {
        $register = $this->register_model; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($register->rules()); //menerapkan rules validasi pada jurnal_model
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada jurnal_model
        if ($validation->run()) {
            $register->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Register berhasil, Silahkan login untuk melanjutkan. </div>');

            redirect("Login");
        }

        $data["title"] = "Register account"; //judul halaman
        $this->load->view('adminjurnal/add', $data);
    }
}
