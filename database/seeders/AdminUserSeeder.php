<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@fmipa.unila.ac.id',
            'password' =>  bcrypt('wifinyarusak'),
        ]);

        $user->assignRole('admin');
    }
}
