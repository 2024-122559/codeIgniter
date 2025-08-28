<?php
namespace App\Controllers;
use App\Models\TiposModel;

class TiposController extends BaseController
{
    public function vistaTipos(): string
    {
        $tipo = new TiposModel();
        $datos['datos'] = $tipo->findAll();
        return view('tipo_usuario',$datos);
    }

    public function agregarTipos()
    {
        $tipo = new TiposModel();
        $datos = [
            'tipo_usuario_id'=> $this->request->getPost('txt_id'),
            'nombre_tipo' => $this->request->getPost('txt_nombre'),
            'descripcion' => $this->request->getPost('txt_des'),
        ];

        $tipo->insert($datos);
        return redirect()->to(base_url('tipo_usuario'));
    }

    public function eliminarTipos($id)
    {
        $tipo = new TiposModel();
        $tipo->delete($id);
        return redirect()->to(base_url('tipo_usuario'));
    }

    public function buscarTipos($id)
    {
        $tipo = new TiposModel();
        $datos = ['tipo' => $tipo->find($id)]; 
        return view('editar_tipo',$datos);
    }

    public function actualizarTipo($id)
    {
        $tipo = new TiposModel();
        $datos = [
            'tipo_usuario_id'=> $this->request->getPost('txt_id'),
            'nombre_tipo' => $this->request->getPost('txt_nombre'),
            'descripcion' => $this->request->getPost('txt_des'),
        ];

        $tipo->update($id, $datos);
        return redirect()->to(base_url('tipo_usuario'));
    }
    
}