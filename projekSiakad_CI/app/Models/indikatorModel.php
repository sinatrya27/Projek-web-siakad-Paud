<?php

namespace App\Models;

use CodeIgniter\Model;


class indikatorModel extends Model
{
    protected $table = 'indikator';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id'];
    protected $useAutoIncrement = false;

    public function getpencapaian($id)
    {
        return $this->find($id);
    }
}
