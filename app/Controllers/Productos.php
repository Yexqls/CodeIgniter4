<?php

namespace App\Controllers;

class Productos extends BaseController
{
    public function index()
    {
        /* Indice de arreglo ()nombre de la varible) y un valor*/
        $data = ['titulo' => 'Catalago de productos '];
        return view('plantilla/header', $data)
        .view('productos/index', $data)
        .view('plantilla/footer', ["copy" => "2023"]);


        // return view('productos/index', $data);
    }

    public function show($id)
    {
        $data = ['titulo' => 'Catalago de productos', 'id' => $id];
        return view('plantilla/header', $data)
        .view('productos/show', $data)
        .view('plantilla/footer', ["copy" => "2023"]);
    }

    public function cat($categoria, $id)
    {
        return "<h2>Categoria: $categoria <br> Producto: $id</h2>";
    }
}
