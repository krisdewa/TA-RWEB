<?php
class Utama extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("jurnal_model");
        $this->load->library('pagination');
    }


    public function index()
    {

        $config = [
            'base_url' => "http://ta-rweb.test/Utama/index",
            'total_rows' => $this->jurnal_model->countAllJurnal(),
            'per_page' => 4,

            'full_tag_open' => '<nav><ul class="pagination">',
            'full_tag_close' => ' </ul></nav>',

            'first_link' => 'First',
            'first_tag_open' => '<li class="page-item">',
            'first_tag_close' => '</li>',

            'last_link' => 'Last',
            'last_tag_open' => '<li class="page-item">',
            'last_tag_close' => '</li>',

            'next_link' => 'Next',
            'next_tag_open' => '<li class="page-item">',
            'next_tag_close' => '</li>',

            'prev_link' => 'prev',
            'prev_tag_open' => '<li class="page-item">',
            'prev_tag_close' => '</li>',

            'cur_tag_open' => '<li class="page-item active"><a class="page-link" href="#">',
            'cur_tag_close' => '</a></li>',

            'num_tag_open' => '<li class="page-item">',
            'num_tag_close' => '</li>',

            'attributes' => array('class' => 'page-link')

        ];

        $this->pagination->initialize($config);

        $data = [
            'start' => $this->uri->segment(0),
            'title' => "JurnalTIF",
            'data_jurnal' => $this->jurnal_model->getJurnal($config['per_page'], 0)
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
}
