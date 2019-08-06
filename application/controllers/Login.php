<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->view('templateNoLogin/header');
        $this->load->view('usuarios/login');
        $this->load->view('templateNoLogin/footer');
    }
}