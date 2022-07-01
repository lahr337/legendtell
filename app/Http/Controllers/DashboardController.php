<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Services\NhtsaApi;
use App\Services\CarsxeApi;
use App\Models\CarUser;

class DashboardController extends Controller
{


    public function index()
    {
        $page_title = 'Dashboard';
        return view('dashboard.index', compact('page_title'));
    }

    public function search(Request $request)
    {
        $search = $request->all();
        
        // echo auth()->check();
        $carsNew = Car::where($search)->where('service_id', '!=', '')->with('ownerHistory')->with('userData')->orderBy('updated_at', 'DESC')->first();
        // echo "<pre>";
        // print_r($search);
        // die;
        if ($carsNew) {
            $cars = Car::where($search)->where('service_id', '!=', '')->with('ownerHistory')->with('userData')->orderBy('updated_at', 'DESC')->first();
            // $cars = Car::where($search)->with('ownerHistory')->with('userData')->where('service_id','!=','')->orderBy('id','DESC')->first();
            // return $this->sendResponse(view('dashboard.partials._found', compact('cars'))->render());
        } else {

            if ($search['vin']) {
                $data = NhtsaApi::getByVIN($search['vin']);

                // $data = CarsxeApi::getSpecsByVin($request->vin);
                if (isset($data['Results'])) {

                    $result = current($data['Results']);
                
                    if (isset($result['ModelYear']) && !empty($result['ModelYear'])) {
                        $car = new Car();
                       
                        $car->trims = $result;
                        $car->ref_type = 'nhtsa';
                        $car->make = $result['Make'];
                        $car->model = $result['Model'];
                        $car->year = $result['ModelYear'];
                        $car->drive = $result['DriveType'];
                        $car->vin = $result['VIN'];
                        $car->model_engine_cc = $result['EngineCycles'];
                        $car->model_engine_cyl = $result['EngineCylinders'];
                        $car->model_engine_type = $result['EngineConfiguration'];
                        $car->save();
                        $cars = Car::where('vin', $result['VIN'])->with('ownerHistory')->with('userData')->orderBy('updated_at','DESC')->first();
                    } else {
                        echo "";
                    }
                }
            }
            // $cars = Car::where('vin',$search['vin'])->with('ownerHistory')->with('userData')->orderBy('id1','DESC')->first();
        }
        // $cars = Car::where($search)->whereHas('appraisal')->where(function($q){
        //     if(auth()->check()) $q->where('user_id','!=', auth()->user()->id);
        // })->get();

        //   return $cars;
        return $this->sendResponse(view('dashboard.partials._found', compact('cars'))->render());
    }
}
