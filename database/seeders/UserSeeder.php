<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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
            'name' => 'Luis Andrés García Perdomo',
            'email' => 'luisoerizo@gmail.com',
            'password' => bcrypt('3312'),
        ])->assignRole('Admin');

        User::factory(50)->create();
    }
}
