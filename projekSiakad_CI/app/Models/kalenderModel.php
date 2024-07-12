<?php

namespace App\Models;

use CodeIgniter\Model;

class kalenderModel extends Model
{
    protected $table = 'kalender';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'bulan', 'tanggal_mulai', 'tanggal_berakhir', 'uraian_kegiatan'];
    // protected $useAutoIncrement = false;

    public function getkalender($id)
    {
        return $this->find($id);
    }
}
