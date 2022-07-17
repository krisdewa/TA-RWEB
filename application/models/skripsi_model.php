<?php
defined('BASEPATH') or exit('No direct script access allowed');

class skripsi_model extends CI_Model
{
    private $table = "skripsi";

    public function rules()
    {
        return [
            [
                'field' => 'Judul',  //samakan dengan atribute name pada tags input
                'label' => 'Judul',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'penulis',
                'label' => 'penulis',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'penerbit',
                'label' => 'penerbit',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'jenis',
                'label' => 'jenis',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'abstrak',
                'label' => 'abstrak',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'tahun',
                'label' => 'tahun',
                'rules' => 'trim|required|numeric|min_length[4]|max_length[4]'
            ]
        ];
    }

    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from jurnal where id_jurnal='$id'
    }

    //Pagination
    public function getSkripsi($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('judul', $keyword);
        }
        return $this->db->get($this->table, $limit, $start)->result_array();
    }

    public function countAllJurnal()
    {
        return $this->db->get($this->table)->num_rows();
    }

    //menyimpan data jurnal
    public function save()
    {
        $config = [
            'upload_path' => './upload/skripsi',
            'allowed_types' => 'pdf',
            'max_size' => '3000'
        ];

        $this->load->library('upload', $config);
        $this->upload->do_upload('file_skripsi');
        $filedata = $this->upload->data();

        $data = array(
            "Judul" => $this->input->post('Judul'),
            "penulis" => $this->input->post('penulis'),
            "penerbit" => $this->input->post('penerbit'),
            "jenis_penelitian" => $this->input->post('jenis'),
            "abstrak" => $this->input->post('abstrak'),
            "tahun" => $this->input->post('tahun'),
            "file" => $filedata['file_name']
        );
        return $this->db->insert($this->table, $data);
    }

    //edit data jurnal
    public function update()
    {
        $config = [
            'upload_path' => './upload/skripsi',
            'allowed_types' => 'pdf',
            'max_size' => '3000'
        ];

        $this->load->library('upload', $config);
        $this->upload->do_upload('file_skripsi');
        $filedata = $this->upload->data();

        $data = array(
            "Judul" => $this->input->post('Judul'),
            "penulis" => $this->input->post('penulis'),
            "penerbit" => $this->input->post('penerbit'),
            "jenis_penelitian" => $this->input->post('jenis'),
            "abstrak" => $this->input->post('abstrak'),
            "tahun" => $this->input->post('tahun'),
            "file" => $filedata['file_name']
        );

        // return var_dump($data);

        return $this->db->update($this->table, $data, array('id' => $this->input->post('id')));
    }

    //hapus data jurnal
    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }
}
