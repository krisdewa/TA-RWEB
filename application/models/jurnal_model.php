<?php
defined('BASEPATH') or exit('No direct script access allowed');

class jurnal_model extends CI_Model
{
    private $table = 'jurnal';

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
    {
        return [
            [
                'field' => 'judul',  //samakan dengan atribute name pada tags input
                'label' => 'judul',  // label yang kan ditampilkan pada pesan error
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
                'field' => 'tahun',
                'label' => 'tahun',
                'rules' => 'trim|required|numeric|min_length[4]|max_length[4]'
            ]
        ];
    }

    //menampilkan data jurnal berdasarkan id_jurnal
    public function getById($id_jurnal)
    {
        return $this->db->get_where($this->table, ["id_jurnal" => $id_jurnal])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from jurnal where id_jurnal='$id'
    }

    //menampilkan semua data jurnal
    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("id_jurnal", "desc");
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from jurnal order by id_jurnal desc
    }

    //Pagination
    public function getJurnal($limit, $start, $keyword = null)
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
            'upload_path' => './upload/jurnal',
            'allowed_types' => 'pdf',
            'max_size' => '3000'
        ];

        $this->load->library('upload', $config);
        $this->upload->do_upload('file_jurnal');
        $filedata = $this->upload->data();

        $data = array(
            "judul" => $this->input->post('judul'),
            "penulis" => $this->input->post('penulis'),
            "penerbit" => $this->input->post('penerbit'),
            "edisi" => $this->input->post('edisi'),
            "abstrak" => $this->input->post('abstrak'),
            "tahun" => $this->input->post('tahun'),
            "file" => $filedata['file_name']
        );

        return $this->db->insert($this->table, $data);
    }

    //edit data jurnal
    public function update()
    {
        $data = array(
            "judul" => $this->input->post('judul'),
            "penulis" => $this->input->post('penulis'),
            "penerbit" => $this->input->post('penerbit'),
            "edisi" => $this->input->post('edisi'),
            "abstrak" => $this->input->post('abstrak'),
            "tahun" => $this->input->post('tahun')
        );
        return $this->db->update($this->table, $data, array('id_jurnal' => $this->input->post('id_jurnal')));
    }

    //hapus data jurnal
    public function delete($id_jurnal)
    {
        return $this->db->delete($this->table, array("id_jurnal" => $id_jurnal));
    }
}
