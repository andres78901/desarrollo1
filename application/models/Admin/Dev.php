<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dev
 *
 * @author Andres Lopez <andres.lopez7890@gmail.com>
 */
class Dev extends CI_Model
{

    protected $bd;

    public function __construct()
    {
        parent::__construct();
        $this->bd = $this->load->database('default', true);
    }

    public function permisos($id = null)
    {
        try {
            if ($id != null) {
                $array = array(
                    'usuarios_cedula' => $id
                );
                $select = array(
                    'descripcion',
                    'permiso'
                );
                $result = $this->bd
                        ->select($select)
                        ->get_where('permisos', $array)
                        ->result();
                return $result;
            } else {
                throw new Exception('Error id vacio', 100);
                session_destroy();
            }
        } catch (Exception $exc) {
            $response = array(
                'menssage' => $exc->getMessage(),
                'file' => $exc->getFile(),
                'code' => $exc->getCode()
            );
            echo json_encode($response);
        }
    }

}
