<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Конструктор передает управление последнику
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function __invoke(Request $request)
    {
        dump($request->session()->all());
        echo "Test AdminController!";
    }
}
