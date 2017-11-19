<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $config['js'] = array('jquery-3.2.1.min');
        $config['css'] = array('home');
        $this->resources->initialize($config);
        $this->load->view('home');
    }

    public function calculo()
    {
        return false;
    }

}
