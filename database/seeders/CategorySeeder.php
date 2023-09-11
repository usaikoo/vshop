<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Computer',
            'slug'=>'dell'
        ]);
        Category::create([
            'name' => 'Phone',
            'slug'=>'dell'
        ]);
        Category::create([
            'name' => 'Watch',
            'slug'=>'dell'
        ]);
    }
}
