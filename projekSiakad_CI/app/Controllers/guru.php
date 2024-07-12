<?php

namespace App\Controllers;

use App\Models\GuruModel;

class guru extends BaseController
{

    public function index()
    {
        $guru = $this->guruModel->findAll();
        $data = [
            'guru' => $guru
        ];

        // echo view('admin/layout/navbar');
        echo view('admin/data_guru', $data);
        // echo view('admin/layout/footer');
    }

    public function create()
    {
        // echo view('admin/layout/navbar');
        echo view('admin/create_guru');
        // echo view('admin/layout/footer');
    }

    public function save()
    {
        $this->guruModel->save([
            'id_guru' => $this->request->getVar('id_guru'),
            'nama' => $this->request->getVar('nama'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'tmt' => $this->request->getVar('tmt'),
            'pendidikan' => $this->request->getVar('pendidikan'),
            'tugas' => $this->request->getVar('tugas'),
            'kontak' => $this->request->getVar('kontak'),

        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('admin/data_guru');
    }

    public function delete($id_guru)
    {
        $this->guruModel->delete($id_guru);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('admin/data_guru');
    }
    public function edit($id)
    {
        $data['guru'] = $this->guruModel->getGuru($id);
        // $data['guru'] = $this->guruModel->findAll();

        if (empty($data['guru'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Kelas dengan ID ' . $id . ' tidak ditemukan.');
        }

        // echo view('admin/layout/navbar');
        echo view('admin/edit_guru', $data);
        // echo view('admin/layout/footer');
    }

    public function update()
    {
        $id = $this->request->getVar('id_guru');
        $data = [
            // 'nama' => $this->request->getVar('nama'),
            // 'id_guru' => $this->request->getVar('id_guru'),
            'id_guru' => $this->request->getVar('id_guru'),
            'nama' => $this->request->getVar('nama'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'tmt' => $this->request->getVar('tmt'),
            'pendidikan' => $this->request->getVar('pendidikan'),
            'tugas' => $this->request->getVar('tugas'),
            'kontak' => $this->request->getVar('kontak'),
        ];

        $this->guruModel->update($id, $data);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('admin/data_guru');
    }
}
