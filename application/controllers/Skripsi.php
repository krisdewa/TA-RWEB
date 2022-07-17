<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Skripsi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('skripsi_model');
        $this->load->library('pagination');
        $this->load->helper('download');

        header('Cache-Control: no-cache, must-revalidate, max-age=0');
        header('Cache-Control: post-check=0, pre-check=0', false);
        header('Pragma: no-cache');
    }

    public function index()
    {
        if ($this->input->post('submit')) {

            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $this->db->like('Judul', $data['keyword']);
        $this->db->from('skripsi');
        $config = [

            'total_rows' => $this->db->count_all_results(),
            'per_page' => 4,

        ];

        $this->pagination->initialize($config);

        $data['start'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data = [
            'title' => "JurnalTIF",
            'skripsi_data' => $this->skripsi_model->getSkripsi($config['per_page'], $data['start'], $data['keyword']),
        ];

        //load View
        $this->load->view("Utama/templates/header", $data);
        $this->load->view("Utama/templates/navbar");
        $this->load->view("Utama/skripsi_v", $data);
        $this->load->view("Utama/templates/footer");
    }

    public function detail($id = null)
    {
        $data = [

            'title' => "Skripsi TIF | detail",
            'detail_skripsi' => $this->skripsi_model->getById($id),
        ];

        $this->load->view("Utama/templates/header", $data);
        $this->load->view("Utama/templates/navbar");
        $this->load->view("Utama/detailSkripsi_v", $data);
        $this->load->view("Utama/templates/footer");
    }

    public function download($id = null)
    {
        $data = $this->db->get_where('skripsi', ['id' => $id])->row();
        $path = './upload/skripsi/' .  $data->file;
        force_download($path, NULL);
    }
}
