<?php

namespace App\Controllers;

use App\Models\SiswaModel;

class siswa extends BaseController
{

    public function index()
    {
        $siswa = $this->siswaModel->findAll();
        $data = [
            'siswa' => $siswa
        ];

        // echo view('admin/layout/navbar');
        echo view('admin/data_siswa', $data);
        // echo view('admin/layout/footer');
    }

    public function create()
    {
        $data['kelas'] = $this->kelasModel->findAll();
        $data['users'] = $this->usersModel->findAll();
        // echo view('admin/layout/navbar');
        echo view('admin/create_siswa', $data);
        // echo view('admin/layout/footer');
    }

    public function save()
    {
        $this->siswaModel->save([
            'id_siswa' => $this->request->getVar('id_siswa'),
            'nama' => $this->request->getVar('nama'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'id_kelas' => $this->request->getVar('id_kelas'),
            'username' => $this->request->getVar('username'),

        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('admin/data_siswa');
    }

    public function delete($id_siswa)
    {
        $this->siswaModel->delete($id_siswa);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('admin/data_siswa');
    }

    public function edit($id)
    {
        $data['siswa'] = $this->siswaModel->getSiswa($id);
        $data['kelas'] = $this->kelasModel->findAll();
        $data['users'] = $this->usersModel->findAll();

        if (empty($data['siswa'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Kelas dengan ID ' . $id . ' tidak ditemukan.');
        }

        // echo view('admin/layout/navbar');
        echo view('admin/edit_siswa', $data);
        // echo view('admin/layout/footer');
    }

    public function update()
    {
        $id = $this->request->getVar('id_siswa');
        $data = [
            // 'nama' => $this->request->getVar('nama'),
            // 'id_guru' => $this->request->getVar('id_guru'),
            'id_siswa' => $this->request->getVar('id_siswa'),
            'nama' => $this->request->getVar('nama'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'id_kelas' => $this->request->getVar('id_kelas'),
            'username' => $this->request->getVar('username'),

        ];

        $this->siswaModel->update($id, $data);

        session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('admin/data_siswa');
    }
}
