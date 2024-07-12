<?php

namespace App\Models;

use CodeIgniter\Model;

class artikelModel extends Model
{
    protected $table = 'artikel';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'judul', 'isi', 'tanggal'];
    // protected $useAutoIncrement = false;

    public function getArtikel($id)
    {
        return $this->find($id);
    }
}
