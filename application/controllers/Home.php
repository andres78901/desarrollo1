<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $config['js'] = array('jquery-3.2.1.min', 'bootstrap', 'home/home.send');
        $config['css'] = array('bootstrap.min');
        $this->resources->initialize($config);
        $this->load->view('home');
    }

    public function calculo()
    {
        echo json_encode($this->input->post());
    }

}
