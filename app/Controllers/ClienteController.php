<?php

namespace App\Controllers;

use App\Models\ClienteModel;

class ClienteController extends BaseController
{
    public function index(): string
    {
        $clientes = $ClienteModel->findAll();
        return view('show_clientes',['clientes'=>$clientes]);
    }
}
