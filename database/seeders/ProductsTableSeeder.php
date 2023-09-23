<?php

namespace Database\Seeders;

use App\Models\product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        product::create([
            'name' => 'Glade Air Freshener 225 ML',
            'detail' => 'Pewangi Ruangan - Glade Air Freshener 225 ML',
        ]);
        product::create([
            'name' => 'Aqua 330 ML',
            'detail' => 'Air Mineral - Aqua 330 ML',
        ]);

    }
}
