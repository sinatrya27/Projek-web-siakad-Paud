<?php

namespace App\Controllers;

class pages extends BaseController
{
    public function index()
    {
        echo view('Layout\Navbar');
        echo view('beranda');
        echo view('Layout\footer');
    }

    public function petualangan()
    {
        echo view('Layout\Navbar');
        echo view('petualangan');
        echo view('Layout\footer');
    }

    public function jejak_prestasi()
    {
        echo view('Layout\Navbar');
        echo view('jejak_prestasi');
        echo view('Layout\footer');
    }

    public function peta_emas()
    {
        echo view('Layout\Navbar');
        echo view('peta_emas');
        echo view('Layout\footer');
    }
}
