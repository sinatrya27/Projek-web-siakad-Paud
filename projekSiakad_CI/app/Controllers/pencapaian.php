<?php

namespace App\Controllers;

use App\Models\pencapaianModel;

class pencapaian extends BaseController
{
    public function index()
    {
        $pencapaian = $this->pencapaianModel->findAll();
        $data = [
            'pencapaian' => $pencapaian
        ];

        // echo view('admin/layout/navbar');
        echo view('admin/data_pencapaian', $data);
        // echo view('admin/layout/footer');
    }

    public function create()
    {
        $data['siswa'] = $this->siswaModel->findAll();
        $data['indikator'] = $this->indikatorModel->findAll();

        // echo view('admin/layout/navbar');
        echo view('admin/create_pencapaian', $data);
        // echo view('admin/layout/footer');
    }

    public function save()
    {
        $data =
            [
                // 'id_pencapaian' => $this->request->getVar('id_pencapaian'),
                'nama_siswa' => $this->request->getVar('nama_siswa'),
                'id_indikator' => $this->request->getVar('id_indikator'),
                'level_pencapaian' => $this->request->getVar('level_pencapaian'),

            ];
        // dd($data);
        $this->pencapaianModel->save(
            $data
        );

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('admin/data_pencapaian');
    }

    public function delete($id)
    {
        $this->pencapaianModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('admin/data_pencapaian');
    }

    public function edit($id)
    {
        $data['pencapaian'] = $this->pencapaianModel->getpencapaian($id);
        $data['siswa'] = $this->siswaModel->findAll();
        $data['indikator'] = $this->indikatorModel->findAll();

        if (empty($data['pencapaian'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('pencapaian dengan ID ' . $id . ' tidak ditemukan.');
        }

        // echo view('admin/layout/navbar');
        echo view('admin/edit_pencapaian', $data);
        // echo view('admin/layout/footer');
    }

    public function update()
    {
        $id = $this->request->getVar('id');
        $data = [
            'id' => $this->request->getVar('id'),
            'nama_siswa' => $this->request->getVar('nama_siswa'),
            'id_indikator' => $this->request->getVar('id_indikator'),
            'level_pencapaian' => $this->request->getVar('level_pencapaian'),
        ];

        $this->pencapaianModel->update($id, $data);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('admin/data_pencapaian');
    }
}
