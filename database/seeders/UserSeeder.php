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
            'name' => 'Alfredo Gonzalez Marenco',
            'email' => 'dev@agenciavandu.com',
            'password' => bcrypt('marencos6359:D'),
        ]);

        User::create([
            'name' => 'Alvar Buenfil Vadillo',
            'email' => 'ab@agenciavandu.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Pruebas',
            'email' => 'test@agenciavandu.com',
            'password' => bcrypt('password'),
        ]);
    }
}
