<?php

namespace App\Controllers;

class Productos extends BaseController
{
    public function index(){
        echo "<h1>ControllerProductos</h1>";
       // print_r ($this->session);
    }

    public function show(){
        return "<h2>Detalles del producto</h2>";
    }

    public function edit(){
        return "<h2>Editar producto</h2>";
    }
}