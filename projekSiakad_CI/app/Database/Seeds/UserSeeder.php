<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Myth\Auth\Entities\User;
use Myth\Auth\Models\UserModel;
use Myth\Auth\Models\GroupModel;


class UserSeeder extends Seeder
{
    public function run()
    {
        $users = model(UserModel::class);
        $groupModel = model(GroupModel::class);

        // Buat user admin
        $admin = new User([
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => 'admin123',
            'active' => 1
        ]);

        $users->save($admin);
        $adminId = $users->getInsertID();
        $groupModel->addUserToGroup($adminId, 1); // Asumsi ID grup admin adalah 1

        // Buat user biasa
        $user = new User([
            'username' => 'user',
            'email' => 'user@example.com',
            'password' => 'user123',
            'active' => 1
        ]);

        $users->save($user);
        $userId = $users->getInsertID();
        $groupModel->addUserToGroup($userId, 2); // Asumsi ID grup user adalah 2

        //
    }
}
