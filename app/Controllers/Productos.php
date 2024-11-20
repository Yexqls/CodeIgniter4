<?php

namespace App\Controllers;

class Productos extends BaseController
{
    public function index(){
        echo "<h1>ControllerProductos</h1>";
       // print_r ($this->session);
    }

    public function show($id){
        return "<h2>Detalles del producto $id</h2>";
    }

    public function cat($categoria, $id){
        return "<h2>Categoria: $categoria <br> Producto: $id</h2>";
    }
}