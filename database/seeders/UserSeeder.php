<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username'      => 'admin',
            'name'          => 'Admin',
            'phone'         => '123654789',
            'designation'   => 'owner',
            'status'        => 1,
            'email'         => 'info@matribhuni.com',
            'password'      => bcrypt('admin'),
            'role_id'      => 1
        ]);
    }
}
