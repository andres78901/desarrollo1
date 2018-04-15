<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author Andres Lopez <andres.lopez7890@gmail.com>
 */
class Login extends CI_Model
{

    protected $bd = null;

    public function __construct()
    {
        parent::__construct();
        $this->bd = $this->load->database('default', true);
    }

    public function conexion($datos = array())
    {
        if (empty($datos)) {
            return false;
        }
        $parameters = array('usuario' => $datos['user'], 'password' => $datos['pass']);
        return $this->bd
                        ->get_where('usuarios', $parameters)
                        ->result();
    }

}
