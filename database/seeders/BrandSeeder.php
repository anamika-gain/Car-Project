<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [[
            'id'         => '1',
            'brand_name' => 'Audi',
            'created_at' => '2019-04-15 19:14:42',
            'updated_at' => '2019-04-15 19:14:42',
        ],
        [
            'id'         => '2',
            'brand_name' => 'BMW',
            'created_at' => '2019-04-15 19:14:42',
            'updated_at' => '2019-04-15 19:14:42',
        ],
        [
            'id'         => '3',
            'brand_name' => 'Tesla',
            'created_at' => '2019-04-15 19:14:42',
            'updated_at' => '2019-04-15 19:14:42',
        ],
        [
            'id'         => '4',
            'brand_name' => 'Range Rover',
            'created_at' => '2019-04-15 19:14:42',
            'updated_at' => '2019-04-15 19:14:42',
        ],
        [
            'id'         => '5',
            'brand_name' => 'Allion',
            'created_at' => '2019-04-15 19:14:42',
            'updated_at' => '2019-04-15 19:14:42',
        ],
        [
            'id'         => '6',
            'brand_name' => 'Toyoto',
            'created_at' => '2019-04-15 19:14:42',
            'updated_at' => '2019-04-15 19:14:42',
        ]];

        Brand::insert($brands);
    }
}
