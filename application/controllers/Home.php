<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $config['js'] = array(
            'jquery-3.2.1.min', 'bootstrap', 'jquery.validate.min',
            'home/login.send', 'home/liveChat'
        );
        $config['css'] = array('bootstrap.min', 'master');
        $this->resources->initialize($config);

        $partsModal = $this->load->view('Home/loginViewParts', '', true);
        $partsMenu = $this->load->view('Home/menuViewParts', '', true);
        $partsSlide = $this->load->view('Home/slideViewParts', '', true);
        $array = array(
            'partLogin' => $partsModal,
            'partMenu' => $partsMenu,
            'partSlide' => $partsSlide,
            'titleModal' => ucwords(_('identificacion')));
        $this->load->view('Home/viewLogin', $array, false);
    }

    public function login()
    {
        if ($this->input->post('send')) {
            if ($this->makeSession()) {
                $result = array(
                    'valido' => true,
                    'uri' => 'Admin/desarrollo'
                );
                echo json_encode($result);
            } else {
                echo json_encode(array('valido' => false));
            }
        }
    }

    private function makeSession()
    {
        $this->load->model('login');
        $user = $this->input->post('user');
        $pass = $this->input->post('pass');
        $resul = $this->login->conexion(array('user' => $user, 'pass' => $pass));

        if ($resul) {
            foreach ($resul as $item) {
                $_SESSION['identificacion'] = $item->cedula;
                $_SESSION['usuario'] = "{$item->nombres} {$item->apellidos}";
            }
            $_SESSION['validado'] = true;
            return true;
        } else {
            return false;
        }
    }

    public function calculo()
    {
        echo json_encode($this->input->post());
    }

}
