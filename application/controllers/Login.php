<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model'); //load model login
        $this->load->library('form_validation'); //load library form_validation
    }
    public function index()
    {
        $this->load->view('Auth/login'); //load view login
    }

    function login_aksi()
    {
        $login = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );

        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');

        if ($this->form_validation->run() != false) {
            $data = $this->login_model->login_admin($login['email'], $login['password']);
            if ($data) {

                if ($data['role'] == "admin") {

                    $this->session->set_userdata('username', $data['username']);
                    $this->session->set_userdata('nama', $data['nama']);

                    $this->session->set_flashdata('login', '<div class="alert alert-success alert-dismissible fade show" role="alert"> 
                    Selamat Datang Di Website Sistem Informasi Jurnal </div>');

                    redirect("jurnal");
                } elseif ($data['role'] == "mahasiswa") {
                    $this->session->set_userdata('username', $data['username']);
                    $this->session->set_userdata('nama', $data['nama']);

                    $this->session->set_flashdata('login', '<div class="alert alert-success alert-dismissible fade show" role="alert"> 
                    Selamat Datang Di Website Sistem Informasi Jurnal </div>');

                    redirect("utama");
                }
            } else {
                // echo "Gagal Login";
                $this->session->set_flashdata('login', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
                                                        Email atau password anda salah </div>');
                redirect("/");
            }
        } else {
            $this->load->view('Auth/login');
        }
    }

    public function logout()
    {
        session_destroy();
        redirect(site_url());
    }
}
