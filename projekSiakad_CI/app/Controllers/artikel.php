<?php

namespace App\Controllers;

use App\Models\artikelModel;

class artikel extends BaseController
{

    public function index()
    {
        $artikel = $this->artikelModel->findAll();
        $data = [
            'artikel' => $artikel
        ];

        // echo view('admin/layout/navbar');
        echo view('admin/data_artikel', $data);
        // echo view('admin/layout/footer');
    }

    public function create()
    {

        // echo view('admin/layout/navbar');
        echo view('admin/create_artikel');
        // echo view('admin/layout/footer');
    }

    public function save()
    {
        $this->artikelModel->save([
            'id' => $this->request->getVar('id'),
            'tanggal' => $this->request->getVar('tanggal'),
            'judul' => $this->request->getVar('judul'),
            'isi' => $this->request->getVar('isi'),

        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('admin/data_kegiatan');
    }

    public function delete($id_artikel)
    {
        $this->artikelModel->delete($id_artikel);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('admin/data_kegiatan');
    }

    public function edit($id)
    {
        $data['artikel'] = $this->artikelModel->getartikel($id);


        if (empty($data['artikel'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Kelas dengan ID ' . $id . ' tidak ditemukan.');
        }

        // echo view('admin/layout/navbar');
        echo view('admin/edit_artikel', $data);
        // echo view('admin/layout/footer');
    }

    public function update()
    {
        $id = $this->request->getVar('id');
        $data = [
            'id' => $this->request->getVar('id'),
            'tanggal' => $this->request->getVar('tanggal'),
            'judul' => $this->request->getVar('judul'),
            'isi' => $this->request->getVar('isi'),


        ];
        // dd($data);

        $this->artikelModel->update($id, $data);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('admin/data_kegiatan');
    }
}
