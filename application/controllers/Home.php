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
        $dato = array('title' => 'Ejemplo', 'essay' => '<p>Ejemplo caragado desde el controlado queda pendiente el cargue desde la base de datos con respectiva tabala y sus campos y las naturalezas de estos; adicional a esto hay que mirar como se da solocion para la jsutificacion del texto<p>');
        $partsModal = $this->load->view('Home/loginViewParts', '', true);
        $partsMenu = $this->load->view('Home/menuViewParts', '', true);
        $partsSlide = $this->load->view('Home/slideViewParts', '', true);
        /**
         * Constructores de contenido
         */
        $partExperien = $this->load->view('Home/experiencieViewParts', $dato, true);
        $partNews = $this->load->view('New/parts/partsNews', $dato, true);
        $News = $this->load->view('New/newsHome', $dato, true);
        /**
         * Vistas a cargar
         */
        $array = array(
            'partLogin' => $partsModal,
            'partMenu' => $partsMenu,
            'partSlide' => $partsSlide,
            'partExperien' => $partExperien,
            'partNews' => $partNews,
            'news' => $News,
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

    public function calculo()
    {
        echo json_encode($this->input->post());
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

}
