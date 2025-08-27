<?php

namespace App\Controllers;
use App\Models\EmpleadosModel;

class EmpleadosCotroller extends BaseController
{
    public function index()
    {
        $empleado = new EmpleadosModel();
        $usuario = $this->request->getPost('txt_usu')
        $pass = $this->request->getPost('txt_pass')
        $datos ['datos']= $empleado->where('codigo_empleado',$usuario)->where('password',$pass)->first();

        print_r($datos);
        //return view('login');
    }
}
