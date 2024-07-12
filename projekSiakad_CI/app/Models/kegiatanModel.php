<?php

namespace App\Models;

use CodeIgniter\Model;

class kegiatanModel extends Model
{
    protected $table = 'kegiatan';
    protected $primaryKey = 'id_kegiatan';
    protected $allowedFields = ['id_kegiatan', 'nama_kegiatan'];
    protected $useAutoIncrement = false;

    public function getKegiatan($id)
    {
        return $this->find($id);
    }
}
