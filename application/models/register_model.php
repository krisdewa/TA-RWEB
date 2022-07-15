<?php
defined('BASEPATH') or exit('No direct script access allowed');

class register_model extends CI_Model
{
    private $table = 'admin';

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
    {
        return [
            [
                'field' => 'nama',  //samakan dengan atribute name pada tags input
                'label' => 'nama',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'email',
                'label' => 'email',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'password',
                'label' => 'password',
                'rules' => 'trim|required|min_length[5]'
            ]
        ];
    }

    //menyimpan data jurnal
    public function save()
    {
        $data = array(
            "nama" => $this->input->post('nama'),
            "email" => $this->input->post('email'),
            "password" => $this->input->post('password')
        );
        return $this->db->insert($this->table, $data);
    }
}
