<?php
class Utama extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("jurnal_model");
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

        $this->db->like('judul', $data['keyword']);
        $this->db->from('jurnal');
        $config = [

            'total_rows' => $this->db->count_all_results(),
            'per_page' => 4

        ];

        $this->pagination->initialize($config);

        $data['start'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data = [
            'title' => "JurnalTIF",
            'data_jurnal' => $this->jurnal_model->getJurnal($config['per_page'], $data['start'], $data['keyword']),
        ];


        //load View
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

    public function download($id = null)
    {
        $data = $this->db->get_where('jurnal', ['id_jurnal' => $id])->row();
        $path = './upload/jurnal/' .  $data->file;
        force_download($path, NULL);
    }
}
