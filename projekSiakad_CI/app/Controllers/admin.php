<?php

namespace App\Controllers;

use Myth\Auth\Authorization\GroupModel;

class admin extends BaseController
{
    public function index()
    {

        return view('register');
    }

    public function siswa()
    {
        // echo view('admin\Layout\Navbar');
        echo view('admin\data_siswa');
        // echo view('admin\Layout\footer');
    }
    public function guru()
    {
        // echo view('admin\Layout\Navbar');
        echo view('admin\data_guru');
        // echo view('admin\Layout\footer');
    }
    public function kegiatan()
    {
        // echo view('admin\Layout\Navbar');
        echo view('admin\data_kegiatan');
        // echo view('admin\Layout\footer');
    }
    public function jadwal()
    {
        // echo view('admin\Layout\Navbar');
        echo view('admin\data_jadwal');
        // echo view('admin\Layout\footer');
    }
    public function nilai()
    {
        // echo view('admin\Layout\Navbar');
        echo view('admin\data_nilai');
        // echo view('admin\Layout\footer');
    }
}
