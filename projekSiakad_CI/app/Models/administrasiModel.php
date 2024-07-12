<?php

namespace App\Models;

use CodeIgniter\Model;


class administrasiModel extends Model
{
    protected $table = 'administrasi';
    protected $primaryKey = 'id_administrasi';
    protected $allowedFields = ['nama_siswa', 'juli', 'agustus', 'september', 'oktober', 'november', 'desember', 'januari', 'februari', 'maret', 'april', 'mei', 'juni'];
    // protected $useAutoIncrement = false;

    public function getAdministrasi($id)
    {
        return $this->find($id);
    }
}
