<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    \App\Models\Category::insert([
        ['name' => 'Sayur', 'created_at' => now(), 'updated_at' => now()],
        ['name' => 'Buah', 'created_at' => now(), 'updated_at' => now()],
        ['name' => 'Bahan Pokok', 'created_at' => now(), 'updated_at' => now()],
        ['name' => 'Protein', 'created_at' => now(), 'updated_at' => now()],
    ]);
}

}
