<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct(){
        parent::__construct();
            $this->load->model('register_model');//load model login
            $this->load->library('form_validation');//load library form_validation
    }
    public function index(){
        $this->load->view('Auth/register'); //load view login
    }
}

