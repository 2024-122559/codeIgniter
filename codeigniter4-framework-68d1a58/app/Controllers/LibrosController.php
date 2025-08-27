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
}


