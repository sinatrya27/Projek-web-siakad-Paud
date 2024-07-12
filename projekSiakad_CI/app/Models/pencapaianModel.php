<?php

namespace App\Models;

use CodeIgniter\Model;


class pencapaianModel extends Model
{
    protected $table = 'pencapaian';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'nama_siswa', 'id_indikator', 'level_pencapaian'];
    // protected $useAutoIncrement = false;

    public function getpencapaian($id)
    {
        return $this->find($id);
    }
}
