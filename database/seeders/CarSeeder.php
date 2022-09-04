<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;
class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cars = [[

            'id'       => '1',
            'brand_id' => '1',
            'Model_id' => '1',
            'car_name' => 'Black',
            'price'    => '1000',
            'description' =>'Brack Car',
           
        ],
        [
            'id'         => '2',
            'brand_id'   => '2',
            'Model_id'   => '1',
            'car_name'   => 'Red',
            'price'      => '2000',
            'description' =>' Red Car',

        ],
        [
            'id'         => '3',
            'brand_id'      => '6',
            'Model_id' => '21',
            'car_name' => 'Blue ',
            'price'    => '3000',
            'description' =>'something',
            
        ],
        [
            'id'         => '4',
            'brand_id'      => '5',
            'Model_id' => '19',
            'car_name' => 'brown',
            'price'    => '9000',
            'description' =>'something',
            
        ],
        [
            'id'         => '5',
            'brand_id'      => '3',
            'Model_id' => '18',
            'car_name' => 'Abadal',
            'price'    => '2000',
            'description' =>'something',
           
        ],
        [
            'id'         => '6',
            'brand_id'      => '2',
            'Model_id' => '17',
            'car_name' => 'BAC',
            'price'    => '10000',
            'description' =>'something',
         
        ],
        [
            'id'         => '7',
            'brand_id'      => '1',
            'Model_id' => '1',
            'car_name' => 'AC',
            'price'    => '5000',
            'description' =>'something',
            
        ],
        [
            'id'         => '8',
            'brand_id'      => '1',
            'Model_id' => '1',
            'car_name' => 'ABT',
            'price'    => '6000',
            'description' =>'something',
            
        ],
        [
            'id'         => '9',
            'brand_id'      => '2',
            'Model_id' => '17',
            'car_name' => 'AlTA',
            'price'    => '6000',
            'description' =>'something',
           
        ],
        [
            'id'         => '10',
            'brand_id'      => '3',
            'Model_id' => '18',
            'car_name' => 'BZ4X',
            'price'    => '7000',
            'description' =>'something',
          
        ],
        [
            'id'         => '11',
            'brand_id'      => '3',
            'Model_id' => '18',
            'car_name' => 'CHR',
            'price'    => '8000',
            'description' =>'something',
           
        ],
        [
            'id'         => '12',
            'brand_id'      => '3',
            'Model_id' => '18',
            'car_name' => 'Voxy',
            'price'    => '6000',
            'description' =>'something',
          
        ],
        [
            'id'         => '13',
            'brand_id'      => '2',
            'Model_id' => '17',
            'car_name' => 'Yaris',
            'price'    => '7000',
            'description' =>'something',
          
        ],
        [
            'id'         => '14',
            'brand_id'      => '1',
            'Model_id' => '1',
            'car_name' => 'Roomy',
            'price'    => '4000',
            'description' =>'something',
          
        ],
        [
            'id'         => '15',
            'brand_id'      => '2',
            'Model_id' => '17',
            'car_name' => 'Axio',
            'price'    => '2000',
            'description' =>'something',
           
        ]];
        
        Car::insert($cars);
    }
}
