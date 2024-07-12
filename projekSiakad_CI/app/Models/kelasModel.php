<?php

namespace App\Models;

use CodeIgniter\Model;


class KelasModel extends Model
{
   protected $table = 'kelas';
   protected $primaryKey = 'id_kelas';
   protected $allowedFields = ['id_kelas', 'nama_kelas', 'id_guru'];
   protected $useAutoIncrement = false;

   public function getKelas($id)
   {
      return $this->find($id);
   }
}
