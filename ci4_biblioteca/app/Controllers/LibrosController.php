<?php
namespace App\Controllers;
use App\Models\LibrosModel;

class LibrosController extends BaseController
{
    public function vistaLibros(): string{
        $libro = new LibrosModel();
        $datos['datos'] = $libro->findAll();
        return view('libros',$datos);
    }

    public function agregarLibro()
{
    $libro = new LibrosModel();
    $datos = [
        'codigo_libro' => $this->request->getPost('txt_id'),
        'codigo_autor' => $this->request->getPost('txt_autor'),
        'codigo_editorial' => $this->request->getPost('txt_edi'),
        'titulo' => $this->request->getPost('txt_titulo'),
        'numero_paginas' => $this->request->getPost('txt_paginas'),
        'tamanio' => $this->request->getPost('txt_tamaño'),
        'precio' => $this->request->getPost('txt_precio'),
        'estado' => $this->request->getPost('txt_estado'),
        'edicion' => $this->request->getPost('txt_edicion'),
    ];

    $libro->insert($datos);
    return redirect()->to(base_url('libros'));
}
    public function eliminarLibro($id)
    {
        $libro = new  LibrosModel();
        $libro->delete($id);
        return redirect()->to(base_url('libros'));
    }

    public function buscarLibro($id)
    {
        $libro = new LibrosModel();
        $datos['libro'] = $libro->find($id);
        return view('editar_libro',$datos);
    }
    
    public function actualizarLibro($id){

        $libro = new LibrosModel();
          $datos = [
        'codigo_autor' => $this->request->getPost('txt_autor'),
        'codigo_editorial' => $this->request->getPost('txt_edi'),
        'titulo' => $this->request->getPost('txt_titulo'),
        'numero_paginas' => $this->request->getPost('txt_paginas'),
        'tamanio' => $this->request->getPost('txt_tamaño'),
        'precio' => $this->request->getPost('txt_precio'),
        'estado' => $this->request->getPost('txt_estado'),
        'edicion' => $this->request->getPost('txt_edicion'),
    ];
     
    $libro->update($id, $datos);
    return redirect()->to(base_url('libros'));
    }
}

