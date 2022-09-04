<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use App\Models\CarModel;
class CarModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $car_models = [[

            'id'         => '1',
            'brand_id'      => '1',
            'Model_name' => 'A-Class',
           
        ],
        [
            'id'         => '2',
            'brand_id'      => '2',
            'Model_name' => 'A3',

        ],
        [
            'id'         => '3',
            'brand_id'      => '5',
            'Model_name' => 'A4',
            
        ],
        [
            'id'         => '4',
            'brand_id'      => '6',
            'Model_name' => 'A5',
            
        ],
        [
            'id'         => '5',
            'brand_id'      => '4',
            'Model_name' => 'A6',
           
        ],
        [
            'id'         => '6',
            'brand_id'      => '1',
            'Model_name' => 'A5',
         
        ],
        [
            'id'         => '7',
            'brand_id'      => '1',
            'Model_name' => 'A6',
            
        ],
        [
            'id'         => '8',
            'brand_id'      => '4',
            'Model_name' => 'A-Class',
            
        ],
        [
            'id'         => '9',
            'brand_id'      => '2',
            'Model_name' => 'A9',
           
        ],
        [
            'id'         => '10',
            'brand_id'      => '3',
            'Model_name' => 'A2',
          
        ],
        [
            'id'         => '11',
            'brand_id'      => '1',
            'Model_name' => 'A2',
           
        ],
        [
            'id'         => '12',
            'brand_id'      => '5',
            'Model_name' => 'B-Class',
          
        ],
        [
            'id'         => '13',
            'brand_id'      => '4',
            'Model_name' => 'C-Class',
          
        ],
        [
            'id'         => '14',
            'brand_id'      => '1',
            'Model_name' => 'A5',
          
        ],
        [
            'id'         => '15',
            'brand_id'      => '2',
            'Model_name' => 'A4',
           
        ],
        [
            'id'         => '16',
            'brand_id'      => '1',
            'Model_name' => 'A3',
           
        ],
        [
            'id'         => '17',
            'brand_id'      => '2',
            'Model_name' => 'A1',
           
        ],
        [
            'id'         => '18',
            'brand_id'      => '3',
            'Model_name' => 'A2',
           
        ],
        [
            'id'         => '19',
            'brand_id'      => '5',
            'Model_name' => 'A4',
          
        ],
        [
            'id'         => '20',
            'brand_id'      => '6',
            'Model_name' => 'A-Class',
           
        ],
        [
            'id'         => '21',
            'brand_id'      => '6',
            'Model_name' => 'B-Class',
          
        ]];

        CarModel::insert($car_models);
    }
}
