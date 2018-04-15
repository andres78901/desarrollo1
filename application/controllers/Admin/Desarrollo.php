<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Desarrollo
 *
 * @author Andres Lopez <andres.lopez7890@gmail.com>
 */
class Desarrollo extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $config['js'] = array(
            'jquery-3.2.1.min', 'popper.min',
            'bootstrap', 'Admin/jsAdmin'
        );
        $config['css'] = array('bootstrap.min');
        $this->resources->initialize($config);
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->model('admin/dev');
        $result = $this->dev->permisos($_SESSION['identificacion']);
        $datos = array(
            'sesion' => $result,
            'usuario' => $_SESSION['usuario'],
        );
        $this->load->view('Admin/viewAdmin', $datos);
    }

    public function closeSession()
    {
        if ($this->input->post('cerrar')) {
            session_destroy();
            echo json_encode(array('rec' => true));
        }
    }

    public function dashboard()
    {
        $result = array(
            'cols' => array(
                array("id" => "", "label" => "Topping", "pattern" => "", "type" => "string"),
                array("id" => "", "label" => "Slices", "pattern" => "", "type" => "number")
            ),
            'rows' => array(
                'C' => array(array("v" => 'Mushrooms', 'f' => null), array('v' => 3, 'f' => null)),
                'C' => array(array("v" => 'Onions', 'f' => null), array('v' => 2, 'f' => null))
            )
        );
        echo json_encode($result);
    }

}
