<?php

namespace App\Controllers;

use App\Models\KelasModel;

class kelas extends BaseController
{
    public function index()
    {
        $kelas = $this->kelasModel->findAll();
        $data = [
            'kelas' => $kelas
        ];

        // echo view('admin/layout/navbar');
        echo view('admin/data_kelas', $data);
        // echo view('admin/layout/footer');
    }

    public function create()
    {
        $data['guru'] = $this->guruModel->findAll();
        // echo view('admin/layout/navbar');
        echo view('admin/create_kelas', $data);
        // echo view('admin/layout/footer');
    }

    public function save()
    {

        $this->kelasModel->save([
            'id_kelas' => $this->request->getVar('id_kelas'),
            'nama_kelas' => $this->request->getVar('nama_kelas'),
            'id_guru' => $this->request->getVar('id_guru'),

        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('admin/data_kelas');
    }

    public function delete($id_kelas)
    {
        $this->kelasModel->delete($id_kelas);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('admin/data_kelas');
    }

    public function edit($id)
    {
        $data['kelas'] = $this->kelasModel->getKelas($id);
        $data['guru'] = $this->guruModel->findAll();

        if (empty($data['kelas'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Kelas dengan ID ' . $id . ' tidak ditemukan.');
        }

        // echo view('admin/layout/navbar');
        echo view('admin/edit_kelas', $data);
        // echo view('admin/layout/footer');
    }

    public function update()
    {
        $id = $this->request->getVar('id_kelas');
        $data = [
            'id_kelas' => $this->request->getVar('id_kelas'),
            'nama_kelas' => $this->request->getVar('nama_kelas'),
            'id_guru' => $this->request->getVar('id_guru'),
        ];

        $this->kelasModel->update($id, $data);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('admin/data_kelas');
    }
}
