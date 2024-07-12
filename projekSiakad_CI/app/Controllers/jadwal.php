<?php

namespace App\Controllers;

use App\Models\jadwalModel;

class jadwal extends BaseController
{
    public function index()
    {
        $jadwal = $this->jadwalModel->findAll();
        $kalender = $this->kalenderModel->findAll();
        $data = [
            'jadwal' => $jadwal,
            'kalender' => $kalender
        ];

        // echo view('admin/layout/navbar');
        echo view('admin/data_jadwal', $data);
        // echo view('admin/layout/footer');
    }

    public function create()
    {
        $data['kegiatan'] = $this->kegiatanModel->findAll();

        // echo view('admin/layout/navbar');
        echo view('admin/create_jadwal', $data);
        // echo view('admin/layout/footer');
    }

    public function save()
    {



        // Ambil data dari form
        $data = [
            'id_jadwal' => $this->request->getVar('id_jadwal'),
            'id_kegiatan' => $this->request->getVar('id_kegiatan'),
            'nama_kegiatan' => $this->request->getVar('nama_kegiatan'),
            'hari' => $this->request->getVar('hari'),
            'jam_mulai' => $this->request->getVar('jam_mulai'),
            'jam_selesai' => $this->request->getVar('jam_selesai'),
        ];

        // Debug data sebelum save

        // Simpan data ke database
        $this->jadwalModel->save($data);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('admin/data_jadwal');
    }

    public function delete($id_jadwal)
    {
        $this->jadwalModel->delete($id_jadwal);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('admin/data_jadwal');
    }

    public function edit($id)
    {
        $data['jadwal'] = $this->jadwalModel->getjadwal($id);
        $data['kegiatan'] = $this->kegiatanModel->findAll();

        if (empty($data['jadwal'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('jadwal dengan ID ' . $id . ' tidak ditemukan.');
        }

        // echo view('admin/layout/navbar');
        echo view('admin/edit_jadwal', $data);
        // echo view('admin/layout/footer');
    }

    public function update()
    {
        $id = $this->request->getVar('id_jadwal');
        $data = [
            'id_jadwal' => $this->request->getVar('id_jadwal'),
            'nama_kegiatan' => $this->request->getVar('nama_kegiatan'),
            'hari' => $this->request->getVar('hari'),
            'jam_mulai' => $this->request->getVar('jam_mulai'),
            'jam_selesai' => $this->request->getVar('jam_selesai'),
        ];

        $this->jadwalModel->update($id, $data);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('admin/data_jadwal');
    }
}
