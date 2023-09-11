<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'title' => 'Elit reprehenderit eu nostrud et.',
            'price' => 19.03,
            'quantity' => 3,
            'category_id'=> 1,
            'brand_id'=>1,
            'description'=>'Occaecat cupidatat consequat eu eiusmod sint commodo aute. Fugiat commodo amet do dolore. Ullamco ullamco nisi laboris cillum ea. Excepteur exercitation laborum culpa ex do ipsum id laboris ut ad est commodo. Commodo occaecat commodo ex laborum ea esse consequat pariatur tempor qui reprehenderit. Irure ullamco esse cupidatat voluptate in sunt do officia ullamco fugiat deserunt.'
        ]);
    }
}
