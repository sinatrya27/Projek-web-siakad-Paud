<?php

namespace App\Controllers;

use App\Models\administrasiModel;

class administrasi extends BaseController
{
    public function index()
    {
        $administrasi = $this->administrasiModel->findAll();
        $data = [
            'administrasi' => $administrasi
        ];

        // echo view('admin/layout/navbar');
        echo view('admin/data_administrasi', $data);
        // echo view('admin/layout/footer');
    }

    public function create()
    {
        $data['siswa'] = $this->siswaModel->findAll();
        // echo view('admin/layout/navbar');
        echo view('admin/create_administrasi', $data);
        // echo view('admin/layout/footer');
    }

    public function save()
    {
        $data =
            [
                // 'id_administrasi' => $this->request->getVar('id_administrasi'),
                'nama_siswa' => $this->request->getVar('nama_siswa'),
                'juli' => $this->request->getVar('juli'),
                'agustus' => $this->request->getVar('agustus'),
                'september' => $this->request->getVar('september'),
                'oktober' => $this->request->getVar('oktober'),
                'november' => $this->request->getVar('november'),
                'desember' => $this->request->getVar('desember'),
                'januari' => $this->request->getVar('januari'),
                'februari' => $this->request->getVar('februari'),
                'maret' => $this->request->getVar('maret'),
                'april' => $this->request->getVar('april'),
                'mei' => $this->request->getVar('mei'),
                'juni' => $this->request->getVar('juni'),
            ];
        // dd($data);
        $this->administrasiModel->save(
            $data
        );

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('admin/data_administrasi');
    }

    public function delete($id_administrasi)
    {
        $this->administrasiModel->delete($id_administrasi);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('admin/data_administrasi');
    }

    public function edit($id)
    {
        $data['administrasi'] = $this->administrasiModel->getadministrasi($id);
        $data['siswa'] = $this->siswaModel->findAll();

        if (empty($data['administrasi'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('administrasi dengan ID ' . $id . ' tidak ditemukan.');
        }

        // echo view('admin/layout/navbar');
        echo view('admin/edit_administrasi', $data);
        // echo view('admin/layout/footer');
    }

    public function update()
    {
        $id = $this->request->getVar('id_administrasi');
        $data = [
            'id_administrasi' => $this->request->getVar('id_administrasi'),
            'nama_siswa' => $this->request->getVar('nama_siswa'),
            'juli' => $this->request->getVar('juli'),
            'agustus' => $this->request->getVar('agustus'),
            'september' => $this->request->getVar('september'),
            'oktober' => $this->request->getVar('oktober'),
            'november' => $this->request->getVar('november'),
            'desember' => $this->request->getVar('desember'),
            'januari' => $this->request->getVar('januari'),
            'februari' => $this->request->getVar('februari'),
            'maret' => $this->request->getVar('maret'),
            'april' => $this->request->getVar('april'),
            'mei' => $this->request->getVar('mei'),
            'juni' => $this->request->getVar('juni'),
        ];

        $this->administrasiModel->update($id, $data);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('admin/data_administrasi');
    }
}
