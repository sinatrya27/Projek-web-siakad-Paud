<?php

namespace App\Controllers;

use App\Models\kalenderModel;

class kalender extends BaseController
{

    public function index()
    {
        $kalender = $this->kalenderModel->findAll();
        $data = [
            'kalender' => $kalender
        ];

        // echo view('admin/layout/navbar');
        echo view('petualangan', $data);
        // echo view('admin/layout/footer');
    }

    public function create()
    {

        // echo view('admin/layout/navbar');
        echo view('admin/create_kalender');
        // echo view('admin/layout/footer');
    }

    public function save()
    {
        $this->kalenderModel->save([
            'id' => $this->request->getVar('id'),
            'bulan' => $this->request->getVar('bulan'),
            'tanggal_mulai' => $this->request->getVar('tanggal_mulai'),
            'tanggal_berakhir' => $this->request->getVar('tanggal_berakhir'),
            'uraian_kegiatan' => $this->request->getVar('uraian_kegiatan'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('admin/data_jadwal');
    }

    public function delete($id_kalender)
    {
        $this->kalenderModel->delete($id_kalender);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('admin/data_jadwal');
    }

    public function edit($id)
    {
        $data['kalender'] = $this->kalenderModel->getkalender($id);


        if (empty($data['kalender'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Kelas dengan ID ' . $id . ' tidak ditemukan.');
        }

        // echo view('admin/layout/navbar');
        echo view('admin/edit_kalender', $data);
        // echo view('admin/layout/footer');
    }

    public function update()
    {
        $id = $this->request->getVar('id_kalender');
        $data = [
            'id' => $this->request->getVar('id'),
            'bulan' => $this->request->getVar('bulan'),
            'tanggal_mulai' => $this->request->getVar('tanggal_mulai'),
            'tanggal_berakhir' => $this->request->getVar('tanggal_berakhir'),
            'uraian_kegiatan' => $this->request->getVar('uraian_kegiatan'),
            // 'nama' => $this->request->getVar('nama'),
            // 'id_guru' => $this->request->getVar('id_guru'),

        ];

        $this->kalenderModel->update($id, $data);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('admin/data_jadwal');
    }
}
