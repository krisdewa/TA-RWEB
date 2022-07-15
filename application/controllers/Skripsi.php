<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Skripsi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('skripsi_model');
    }
    public function index()
    {
        $data["title"] = "List Data Jurnal";

        $data = [

            'title' => "Skripsi TIF",
            'skripsi_data' => $this->skripsi_model->getAll()
        ];

        //load View
        $this->load->view("Utama/templates/header", $data);
        $this->load->view("Utama/templates/navbar");
        $this->load->view("Utama/skripsi_v", $data);
        $this->load->view("Utama/templates/footer");
    }
}
