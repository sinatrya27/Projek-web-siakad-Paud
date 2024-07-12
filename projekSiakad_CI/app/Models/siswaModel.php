<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id_siswa';
    protected $allowedFields = ['id_siswa', 'nama', 'tanggal_lahir', 'tempat_lahir', 'jenis_kelamin', 'id_kelas', 'username'];
    protected $useAutoIncrement = false;

    public function getSiswa($id)
    {
        return $this->find($id);
    }
}
