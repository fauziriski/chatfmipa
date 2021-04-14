<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Dosen Unila',
            'email' => 'dosen@fmipa.unila.ac.id',
            'password' =>  bcrypt('wifinyarusak'),
        ]);

        $user->assignRole('dosen');
    }
}
