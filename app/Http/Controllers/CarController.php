<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BaseCar;
use App\Models\Car;
use App\Models\CarUser;
use App\Models\CarService;
use App\Models\CarRegistration;
use App\Models\CarCondition;
use App\Models\CarAppraisal;
use App\Services\CarQueryApi;
use App\Services\NhtsaApi;
use App\Services\CarsxeApi;
use App\Models\State;
use App\Models\ShopServices;
use App\Models\User;
use App\Models\CarOwnerHistory;
use App\Http\Requests\Car\AddRequest;
use App\Http\Requests\Car\AddRegistrationRequest;
use App\Http\Requests\Car\AddServiceRequest;
use App\Http\Requests\Car\UpdateAppraisalRequest;
use Redirect;
class CarController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $page_title = 'My Cars';
        $cars = Car::where('user_id',auth()->user()->id)->get();
        return view("cars.index", compact('page_title','cars'));
    }

    public function add(AddRequest $request)
    {
        $input = $request->except(['_token']);
        $carDatafetch=Car::where('vin',$request->vin)->where('user_id',auth()->user()->id)->first();
        if($carDatafetch)
        {
            return Redirect::back()->withErrors(['msg' => 'Vin Number already enter']);
           
        }
        if($request->vin) {
            $carlastdata=Car::where('vin',$request->vin)->first();
            if($carlastdata)
            {

          
                $car = Car::updateOrCreate($input + ['user_id' => auth()->user()->id]);
                $car_user = CarUser::create(['car_id' => $carlastdata->id, 'user_id' => auth()->user()->id]);
                $car->trims = $carlastdata->trims;
                $car->ref_type = 'nhtsa';
                $car->make = $carlastdata->make;
                $car->model = $carlastdata->model;
                $car->year = $carlastdata->year;
                $car->drive = $carlastdata->drive;
                $car->vin = $carlastdata->vin;
                $car->model_engine_cc = $carlastdata->model_engine_cc;
                $car->model_engine_cyl = $carlastdata->model_engine_cyl;
                $car->model_engine_type = $carlastdata->model_engine_type;
                $car->save();
            }
            else
            {
          
            $data = NhtsaApi::getByVIN($request->vin);
            // $data = CarsxeApi::getSpecsByVin($request->vin);
            if(isset($data['Results'])) {
                $result = current($data['Results']);
                if(isset($result['ModelYear']) && !empty($result['ModelYear'])){
                    $car = Car::updateOrCreate($input + ['user_id' => auth()->user()->id]);
                    $car_user = CarUser::create(['car_id' => $car->id, 'user_id' => auth()->user()->id]);
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
                }
            }
            else{
                $data = CarQueryApi::getTrims($request->year, $request->make, $request->model);
                if(isset($data['Trims']) && is_array($data['Trims'])){
                    $car = Car::updateOrCreate($input + ['user_id' => auth()->user()->id]);
                    $car_user = CarUser::create(['car_id' => $car->id, 'user_id' => auth()->user()->id]);
                    $car->trims = $data['Trims'];
                    $car->ref_type = 'carquery';
                    $trim = current($data['Trims']);
                    $car->drive = $trim['model_drive'];
                    $car->model_engine_cc = $trim['model_engine_cc'];
                    $car->model_engine_cyl = $trim['model_engine_cyl'];
                    $car->model_engine_type = $trim['model_engine_type'];
                    $car->save();
                }
            }
        }
        // } elseif($request->year && $request->make && $request->model) {
        //     $data = CarQueryApi::getTrims($request->year, $request->make, $request->model);
        //     if(isset($data['Trims']) && is_array($data['Trims'])){
        //         $car = Car::updateOrCreate($input + ['user_id' => auth()->user()->id]);
        //         $car_user = CarUser::create(['car_id' => $car->id, 'user_id' => auth()->user()->id]);
        //         $car->trims = $data['Trims'];
        //         $car->ref_type = 'carquery';
        //         $trim = current($data['Trims']);
        //         $car->drive = $trim['model_drive'];
        //         $car->model_engine_cc = $trim['model_engine_cc'];
        //         $car->model_engine_cyl = $trim['model_engine_cyl'];
        //         $car->model_engine_type = $trim['model_engine_type'];
        //         $car->save();
        //     }
        }
   
        return redirect()->back();
    }

    public function appraisalUpdate(UpdateAppraisalRequest $request, $car_id)
    {
        if($car = Car::find($car_id)){
            $input = $request->except(['_token', 'condition']);
            // $car->update($input);
            CarAppraisal::updateOrCreate([
                'user_id'   =>  auth()->user()->id,
                'car_id'    =>  $car_id,
            ], $input);
            if($request->condition){
                foreach($request->condition as $text => $condition) {
                    CarCondition::updateOrCreate([
                        'user_id'   =>  auth()->user()->id,
                        'car_id'    =>  $car_id,
                        'text'      =>  $text,
                    ],[
                        'ok'        =>  isset($condition['ok']) && $condition['ok'] == 1,
                        'damaged'   =>  isset($condition['damaged']) && $condition['damaged'] == 1,
                        'other'     =>  isset($condition['other']) ? $condition['other'] : '',
                    ]);
                }
            }
        }
        return $this->sendResponse();
    }

    public function setDefaultPicture(Request $request){
        if($car = Car::find($request->car_id)){
            $car->update(['picture' => $request->media_id]);
        }
        return $this->sendResponse();
    }

    public function addRegistration(AddRegistrationRequest $request, $car_id)
    {
        if($car = Car::find($car_id)){
            $input = $request->except(['_token']);
            $car_registration = CarRegistration::create($input + ['car_id' => $car_id,'user_id' => auth()->user()->id]);
        }
        return redirect()->back();
    }

    public function addService(AddServiceRequest $request, $car_id)
    {
        if($car = Car::find($car_id)){
            $input = $request->except(['_token']);
            $car_service = CarService::create($input + ['car_id' => $car_id,'user_id' => auth()->user()->id]);
        }

        return redirect()->back();
    }

    public function editService(AddServiceRequest $request, $car_id)
    {
        
        if($car = Car::find($car_id) && $car_service = CarService::find($request->service_id)){
            $input = $request->except(['_token']);
            $input['completed'] = isset($input['completed']) ? $input['completed'] : [];
            $car_service->update($input);
        }

        return redirect()->back();
    }

    public function view($car_id)
    {
        $MyCar=$car_id;
        
        $car = Car::find($car_id);
        $firstshop=CAR::where('vin',$car->vin)->where('service_id','!=','')->orderBy('vin','desc')->first();
        if($firstshop)
        {
            $car_id=$firstshop->id;
        }
     
        $car=[];
        $CarData=[];
        $SelectServices=[];
        $page_title = 'Account Settings';
        $reported_cars = Car::has('submittions')->get();
        $payment_methods = [];
        $idByCardIds = [];
        $carsShop=[];
        if(auth()->user()->stripe_customer_id != null){
            $idByCardIds = PaymentCard::pluck('id','card_id')->toArray();
            $payment_methods = \Stripe::paymentMethods()->all([
                'type' => 'card',
                'customer' => auth()->user()->stripe_customer_id,
            ]);
        }
        $states=State::where('country_id','233')->where('status','1')->orderBy('name','ASC')->get();
        $shopDetails=User::where('role',2)->where('approve',1)->get();
        if($car = Car::find($car_id)){
            $page_title = $car->title;
            $CarData = new Car;
            
            $CarData = $CarData->where('id',$car_id)->with('ownerHistory')->with('acHistory')->with('breakHistory')->with('carwashHistory')->with('userData')->first();
            $carsShop = Car::where('vin',$car->vin)->with('ownerHistory')->with('userData')->orderBy('id','DESC')->get();
            if(!empty($CarData->service_id))
            {
                $SelectServices=ShopServices::whereIn('service_id',explode(',',$CarData->service_id))->get();
               
            }
            
            
        }

       // echo "<pre>"; print_r($car->medias); die;

        return view('cars.view', compact('page_title','reported_cars','payment_methods','idByCardIds','page_title', 'car','CarData','SelectServices','shopDetails','carsShop','states','MyCar'));
        // return redirect()->back();

       
    }

    public function delete($id)
    {
        if($car = Car::find($id)){
            $car->delete();
            return $this->sendResponse();
        }
        return $this->sendError([],'fail to delete car!');
    }

    public function viewservices(Request $request,$servicedata=null)
    {
     
        $car=[];
        $CarData=[];
        $carsShop=[];
        $SelectServices=[];
        $page_title = 'Services';
        $carserviceId=explode("%%%",base64_decode($servicedata,true));
        $tab = 'vindashboard';
        // print_r($carserviceId);
        $car_id=$carserviceId[0];
        $serviceId=$carserviceId[1];
        $nextservice=$carserviceId[2];
        $MyCar=$carserviceId[3];
       
  
        $shopDetails=User::where('role',2)->where('approve',1)->get();
        if($car = Car::find($car_id)){
            $page_title = $car->title;
            $CarData = new Car;
            $carsShop = Car::where('vin',$car->vin)->with('ownerHistory')->with('userData')->orderBy('id','DESC')->get();
           $mynxtservice="";
            $newarray=explode(',',$car->service_id);
            sort($newarray, SORT_NUMERIC); //Sorts in reverse order, so high to low
         
           if(!empty($newarray[$nextservice+1]))
           {
              
               $mynxtservice=$newarray[$nextservice+1];
           }
           $nextservice=$nextservice+1;
            $xyz = implode(',', $newarray);
      
            $CarData = $CarData->where('id',$car_id)->with('ownerHistory')->with('acHistory')->with('carwashHistory')->with('breakHistory')->with('userData')->with('carhandwashHistory')->with('carselfHistory')->with('cartunnelHistory')->with('concerigeHistory')->with('colisonRepair')->with('engineblockService')->with('exhaustService')->with('OilServices')->with('batteryServices')->with('powderCoatingServices')->with('tireServices')->with('partServices')->with('electricServices')->with('transmissionServices')->with('tintServices')->with('glassServices')->with('rimServices')->with('raceTrackServices')->with('spicalotherServices')->with('SuspensionServices')->with('spicalotherServices')->with('mechicalServices')->first();
          
            if(!empty($CarData->service_id))
            {
                $SelectServices=ShopServices::whereIn('service_id',explode(',',$CarData->service_id))->get();
               
            }
            
            
        }
     
        // echo print_r($shopDetails);
        // die();
        // echo "carid=".$carId.'--serviceId--'.$serviceId;
        return view('cars.partials._tab-contents.service-view', compact('page_title','tab', 'car','CarData','SelectServices','shopDetails','serviceId','mynxtservice','nextservice','carsShop','MyCar'));
    }
}
