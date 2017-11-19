<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $config['js'] = array('jquery-3.2.1.min', 'popper.min', 'bootstrap');
        $config['css'] = array('bootstrap.min');

        if (isset($_SESSION['validado'])) {
            $this->resources->initialize($config);
            $this->load->view('home');
        } else {
            $config['js'] = array_merge($config['js'], array('home/login.send'));
            $this->resources->initialize($config);
            $this->load->view('login');
        }
    }

    public function login()
    {
        if ($this->input->post('send')) {
            if ($this->makeSession()) {
                echo json_encode(array('valido' => true));
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
//            var_dump($resul);
            session_start();
            foreach ($resul as $item) {
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
