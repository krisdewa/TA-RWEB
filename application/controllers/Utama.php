<?php
class Utama extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("jurnal_model");
    }


    public function index()
    {
        $data = [

            'title' => "JurnalTIF",
            'data_jurnal' => $this->jurnal_model->getAll()
        ];

        $this->load->view("Utama/templates/header", $data);
        $this->load->view("Utama/templates/navbar");
        $this->load->view("Utama/Jurnal_v", $data);
        $this->load->view("Utama/templates/footer");
    }

    public function detail($id_jurnal = null)
    {
        $data = [

            'title' => "JurnalTIF | detail",
            'data_detail' => $this->jurnal_model->getById($id_jurnal),
        ];

        $this->load->view("Utama/templates/header", $data);
        $this->load->view("Utama/templates/navbar");
        $this->load->view("Utama/detail_v", $data);
        $this->load->view("Utama/templates/footer");
    }
}
