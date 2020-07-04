<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Corona extends CI_Controller
{
    var $API = "";

    public function __construct()
    {
        parent::__construct();
        $this->API = "https://api.kawalcorona.com";
    }

    public function index()
    {
        //Indonesia
        $result =  $this->curl->simple_get($this->API . '/indonesia');
        $data['indonesia'] = json_decode($result, true);

        //Provinsi
        $result =  $this->curl->simple_get($this->API . '/indonesia/provinsi');
        $data['provinsi'] = json_decode($result, true);

        $this->load->view('corona/header');
        $this->load->view('corona/index', $data);
        $this->load->view('corona/footer');
    }
}
