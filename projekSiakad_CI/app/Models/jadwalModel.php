<?php

namespace App\Models;

use CodeIgniter\Model;


class jadwalModel extends Model
{
    protected $table = 'jadwal';
    protected $primaryKey = 'id_jadwal';
    protected $allowedFields = ['id_kegiatan', 'nama_kegiatan', 'hari', 'jam_mulai', 'jam_selesai'];
    protected $useAutoIncrement = false;

    public function getjadwal($id)
    {
        return $this->find($id);
    }
}
