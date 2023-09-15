<?php

namespace App\Controllers;

class pendapatan extends BaseController
{

    public function index()
    {
    }

    public function input()
    {
        $title['title'] = 'Input Pemasukan';
        return view('pendapatan/input_p', $title);
    }

    public function insert()
    {
        var_dump($this->request->getVar());
    }
}
