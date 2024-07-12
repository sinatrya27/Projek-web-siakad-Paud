<?php

namespace App\Models;

use CodeIgniter\Model;

class usersModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = [''];
    // protected $useAutoIncrement = false;

    public function getUsers($id)
    {
        return $this->find($id);
    }
}
