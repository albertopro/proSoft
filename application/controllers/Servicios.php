<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicios extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->view('templateNoLogin/header');
        $this->load->view('homeNoLogin/servicios');
        $this->load->view('templateNoLogin/footer');
    }
}