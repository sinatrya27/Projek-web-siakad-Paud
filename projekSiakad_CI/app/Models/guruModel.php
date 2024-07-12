<?php

namespace App\Models;

use CodeIgniter\Model;

class GuruModel extends Model
{
   protected $table = 'guru';
   protected $primaryKey = 'id_guru';
   protected $allowedFields = ['id_guru', 'nama', 'tanggal_lahir', 'tempat_lahir', 'tmt', 'tugas', 'kontak', 'pendidikan'];
   protected $useAutoIncrement = false;

   public function getGuru($id)
   {
      return $this->find($id);
   }
}
