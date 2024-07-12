<?php

namespace App\Controllers;

use App\Models\kegiatanModel;

class kegiatan extends BaseController
{

    public function index()
    {
        // $kegiatan = $this->kegiatanModel->findAll();
        $kegiatan = $this->kegiatanModel->orderBy('id_kegiatan', 'ASC')->findAll();
        $artikel = $this->artikelModel->findAll();
        $data = [
            'kegiatan' => $kegiatan,
            'artikel' => $artikel,
        ];



        // echo view('admin/layout/navbar');
        echo view('admin/data_kegiatan', $data);
        // echo view('admin/layout/footer');
    }

    public function create()
    {
        // echo view('admin/layout/navbar');
        echo view('admin/create_kegiatan');
        // echo view('admin/layout/footer');
    }

    public function save()
    {
        $this->kegiatanModel->save([
            'id_kegiatan' => $this->request->getVar('id_kegiatan'),
            'nama_kegiatan' => $this->request->getVar('nama_kegiatan'),

        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('admin/data_kegiatan');
    }

    public function delete($id_kegiatan)
    {
        $this->kegiatanModel->delete($id_kegiatan);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('admin/data_kegiatan');
    }

    public function edit($id)
    {
        $data['kegiatan'] = $this->kegiatanModel->getkegiatan($id);
        // $data['kegiatan'] = $this->kegiatanModel->findAll();

        if (empty($data['kegiatan'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Kelas dengan ID ' . $id . ' tidak ditemukan.');
        }

        // echo view('admin/layout/navbar');
        echo view('admin/edit_kegiatan', $data);
        // echo view('admin/layout/footer');
    }

    public function update()
    {
        $id = $this->request->getVar('id_kegiatan');
        $data = [
            // 'nama' => $this->request->getVar('nama'),
            // 'id_guru' => $this->request->getVar('id_guru'),
            'id_kegiatan' => $this->request->getVar('id_kegiatan'),
            'nama_kegiatan' => $this->request->getVar('nama_kegiatan'),


        ];

        $this->kegiatanModel->update($id, $data);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('admin/data_kegiatan');
    }
}
