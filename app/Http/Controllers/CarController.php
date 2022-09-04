<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$car= Car::all();
        $car=DB::table('cars')->get();
        return view('searchstock',compact('car'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request)
    {
       //dd($request);
      
        $brandid=$request->brand_id;
        $modelid=$request->model_id;
        $min_price = $request->min_price;
        $max_price = $request->max_price;

        // $car = Car::where( function($query) use($request){
        //                  return $request->brand_id ?
        //                         $query->from('brands')->where('id',$request->brand_id) : '';
        //             })->where(function($query) use($request){
        //                  return $request->model_id ?
        //                         $query->from('car_models')->where('id',$request->model_id) : '';
        //             })
        //             ->whereBetween('price', array($request->min_price, $request->max_price))
        //             ->get();
                    
                     
       // dd($car);
        $car = DB::table('cars')
            // ->join('brands', 'cars.brand_id', '=', 'brands.id')
            // ->join('car_models', 'cars.model_id', '=', 'car_models.id')
            // ->select('cars.*', 'car_models.model_name', 'brands.brand_name')
            ->where('brand_id',$request->brand_id)
            ->where('model_id',$request->model_id)
            ->whereBetween('price', array($request->min_price, $request->max_price))
            ->get();

        //  $car=
        //   // dd($car);


        // $cars = Car::where(function($query){

        //     $min_price = Input::has('min_price') ?  Input::get('min_price') : null;
        //     $max_price = Input::has('max_price') ? Input::get('max_price') : $max_price = null;
        //     // $brands = Input::has('brand_id') ? Input::get('brand_id') : null;
        //     // $model = Input::has('model_id') ? Input::get('model_id') : null;

        //     if(isset($min_price) && isset($max_price)){
    
        //         if(isset($brands)){
        //             foreach ($brands as $brand) {
        //                 $query-> orWhere('price','>=',$min_price);
        //                 $query-> where('price','<=',$max_price);
        //                 $query->where('brand_id','=', $brand);
        //             }
        //         }
    
        //         $query-> where('price','>=',$min_price);
        //         $query-> where('price','<=',$max_price);
        //     }
    
        // })->get();



        $selected_id = [];
        $selected_id['brand_id'] = $request->brand_id;
        $selected_id['model_id'] = $request->model_id;
    
        return view('searchstock',compact('car','selected_id'));
    }

    public function getModels($id)
    {
        return DB::table('car_models')->where([
            ['brand_id', $id]
        ])->get();
    }
}
