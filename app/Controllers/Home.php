<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        helper('url');
        $title['title'] = 'Bsr Medianet';
        return view('index', $title);
    }
}
