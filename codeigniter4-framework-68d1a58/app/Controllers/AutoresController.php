<?php
namespace App\Controllers;
use App\Models\AutoresModel;

class AutoresController extends BaseController
{
    public function vistaAutores(): string
    {
        $autor = new AutoresModel();
        $datos['datos'] = $autor->findAll();
        return view('autores', $datos);
    }

    public function agregarAutor()
    {
        $autor = new AutoresModel();
        $datos = [
            'codigo_autor' => $this->request->getPost('txt_id'),
            'apellido'     => $this->request->getPost('txt_ape'),
            'nombre'       => $this->request->getPost('txt_nombre'),
            'nacionalidad' => $this->request->getPost('txt_nac'),
        ];
  print_r($datos);
        //$autor->insert($datos); 
       // return redirect()->to(base_url('autores')); 
    }

    public function eliminarAutor($id)
    {
        $autor = new AutoresModel();
        $autor->delete($id);
        return redirect()->to(base_url('autores'));
    }
}
