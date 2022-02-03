<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Section::create([
            'name' => 'header',
            'page' => 'index'
        ]);

        Section::create([
            'name' => 'aliados',
            'page' => 'index'
        ]);

        Section::create([
            'name' => 'clientes',
            'page' => 'index'
        ]);
    }
}
