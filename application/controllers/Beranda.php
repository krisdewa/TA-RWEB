<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function index()
	{
        $data = ['title' => "Beranda"];
		$this->load->view('Utama/templates/header', $data);
        $this->load->view('Utama/templates/navbar');
        $this->load->view('Utama/beranda_v');
        $this->load->view('Utama/templates/footer');
	}
}