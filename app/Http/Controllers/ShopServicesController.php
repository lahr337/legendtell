<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Models\ShopServices;
use App\Http\Requests\User\SaveProfileRequest;
use App\Http\Requests\User\EmailExistsRequest;
use App\Http\Requests\User\ChangePasswordRequest;
use App\Http\Requests\User\SaveNotificationSettingRequest;
use App\Models\Car;
use App\Models\CarOwnerHistory;
use App\Models\AcServices;
use App\Models\PaymentCard;
use App\Http\Controllers\ShopSettingController;
use App\Http\Controllers\CommonController;
use App\Models\NotificationSetting;
use App\Classes\StripePayment;
use App\Models\User;
use App\Http\Requests\User\AddPaymentMethodRequest;
class ShopServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function addServices(Request $request)
    {
       
        $input = $request->except(['_token']);
        $validator = Validator::make($request->all(), [
            'service_name' => 'required|min:3',
          ]);
        if ($validator->fails()) {
        $errors = $this->object_error($validator->errors());
        return response()->json(['status'=>false,'message' => $errors,'type' => 'object'], 422);
        }
        else{
            $serviceData=new ShopServices;
            if(empty($request->service_id))
            {
               
                $serviceData->user_id=auth()->user()->id;
            }
            else
            {
                $serviceData=$serviceData->where('service_id',$request->service_id)->first();
            }
            $string = str_replace(' ', '-', $request->service_name);
           $servicePage= preg_replace('/[^A-Za-z0-9\-]/', '', $string);
           $serviceData->service_name=$request->service_name;
           $serviceData->service_page=strtolower($servicePage);
           $serviceData->save();
        //    return $serviceData->service_id;
        $dataredirect="<tr><td>".$serviceData->service_id."</td><td>".$request->service_name."</td><td><button class='btn--accent'>Edit</button></td></tr>";
        // return redirect()->back()->with('success', $dataredirect); 
        return redirect()->route('admin-settings.index',['myshopServices']);
        // return response()->json(['status'=>true,'message' => $dataredirect,'type' => 'object'], 422);
       
        }
    }
    public function listServices(Request $request)
    {
        
        $serviceData=ShopServices::find($request->service_id);
        return $serviceData;
    }

   //service pages
   public function acServices(Request $request,$vinid=null,$tab='editProfile')
    {
        $page_title = 'Ac Services';
        $carserviceId=explode("%%%",base64_decode($_GET['servicedata'],true));

        $car_id=base64_decode($carserviceId[0]);
        $vinid=base64_encode($car_id);
       
        $checkACData=AcServices::where('car_id',$car_id)->where('service_id',$carserviceId[1])->where('user_id',auth()->user()->id)->first();
        
        $shopsetting = new ShopSettingController;
        $VInGet= $shopsetting->FetchgetVinList($tab);
        return view('shop-settings.partials.shop_services.ac_service_details',compact('vinid','VInGet','checkACData','page_title'));
    }
    public function AcStore(Request $request)
    {
        $input = $request->except(['_token']);
        $commonClass = new CommonController;
      
       $mainid= base64_decode($request->carShopService);

        $carserviceId=explode("%%%",base64_decode($request->carShopService));
        if(empty($carserviceId[1]))
        {
            return "no carid";
        }
         $serviceId=$carserviceId[1];
        $car_id=base64_decode($carserviceId[0]);
        if($commonClass->checkCar($car_id) =='fail')
        {
            return "wroungdata";
        }
        $serviceData=$commonClass->checkServiceId($carserviceId[1]);
       
        if($commonClass->checkServiceId($carserviceId[1]) =='fail')
        {
            return "wroungdata";
        }
        $acdoc='';

        $img_arr = array();


        $ac_service_check =  AcServices::where('car_id', $car_id)->where('user_id', auth()->user()->id)->first();


        if ($ac_service_check) {
            if (!empty($ac_service_check->documents)) {

                $documents = explode(',', $ac_service_check->documents);
                $remove_products_ids = explode(",", $_POST['remove_products_ids']);

                if (isset($_POST['remove_products_ids']) && $remove_products_ids[0] != "") {
                    foreach ($documents as $doc_key => $doc_value) {
                        if (!in_array($doc_key, $remove_products_ids)) {
                            $img_arr[$doc_key]['path'] = $doc_value;
                        }
                    }
                } else {
                    foreach ($documents as $doc_key => $doc_value) {
                        $img_arr[$doc_key]['path'] = $doc_value;
                    }
                }
            }
        }

        if ($request->hasfile('image_uploaded')) {
            $acdoc = $commonClass->uplodeimages($_POST['remove_products_ids'], $request->file('image_uploaded'), 'acservices', $img_arr);
        } else {
            $acdoc = implode(" , ", array_column($img_arr, 'path'));
        }
     
       
        $acservices=new AcServices;
        $checkAcData=AcServices::where('car_id',$car_id)->where('service_id',$serviceId)->where('user_id',auth()->user()->id)->first();
        if($checkAcData)
        {
        $acservices=$acservices->where('car_id',$car_id)->where('service_id',$serviceId)->where('user_id',auth()->user()->id)->first();   
        }
       
        $acservices->user_id=auth()->user()->id;
        $acservices->car_id=$car_id;
        $acservices->service_id=$serviceId;    
        $acservices->condensor=$request->condensorInput;  
        $acservices->compressor=$request->compressorInput;  
        $acservices->evaporator_core=$request->evaportorInput;  
        $acservices->receiver_dryer=$request->rdryerInput;  
        $acservices->ac_line=$request->aclineInput;  
        $acservices->pressure_switches=$request->pressureswitch;  
        $acservices->office_tube=$request->officeTube6;  
        $acservices->expansion_valve=$request->expansionIinput;  
        $acservices->seals=$request->sealInput; 
        $acservices->documents=$acdoc;  
        $acservices->static_pressure_low=$request->static_pressure_low; 
        $acservices->static_pressure_high=$request->static_pressure_high; 
        $acservices->dynamic_pressure_low=$request->dynamic_pressure_low;    
        $acservices->dynamic_pressure_high=$request->dynamic_pressure_high; 
        $acservices->ac_notes=$request->ac_notes; 
        if($acservices->save())
        {
            $commonClass = new CommonController;
            $commonClass->addServiceData($car_id,$serviceId);
         
            $checkservice=explode(',',auth()->user()->shop_services);
            if(count($checkservice)<1)
            {
                
                return redirect()->route('shop-settings.mydashboard',['myshopServices']);
                $redirecturl='/shop-settings/mydashboard';
            }
            else{
                $carid=base64_encode($car_id);
                $redirecturl='/shop-settings/completedshop/'.$carid;
            }

            // return response()->json(['status'=>true,'message' => $redirecturl,'type' => 'object'], 422);
            return $redirecturl;
        }
        else{
            return "fail";
        }

    }
    // function uploadimg($removeId, $imageid,$pathimport)
    // {
    //     $ownerdoc='';
    //     $insert=array();
     
    //     $remove_products_ids = array();
    //     if(isset($removeId) && !empty($removeId)) {
    //         $remove_products_ids = explode(",", $removeId);
    //     }
    //     foreach($imageid as $key => $file)
    //     {   
    //         if(!in_array($key, $remove_products_ids)) {
    //             $fileName=time().$key.'.'.$file->getClientOriginalExtension();
    //         // $file->move(public_path().'/storage/uploads/onwerdoc/', $fileName);
    //         $path = $file->move(public_path().'/storage/uploads/'.$pathimport.'/', $fileName);
    //         $name = $file->getClientOriginalName();
    //         $insert[$key]['path'] = $fileName;
    //         $json = json_encode($fileName);
    //         }
            
    //     }   
    //     return $ownerdoc = implode(" , ",array_column($insert,'path'));
    // } 

    public function vinlyIndex(Request $request,$vinid=null,$tab='editProfile')
    {
        echo $_GET['servicedata'];
        // $carserviceId=explode("%%%",base64_decode($_GET['servicedata'],true));

        // $car_id=base64_decode($carserviceId[0]);
        // $vinid=base64_encode($car_id);
       
        // $checkACData=AcServices::where('car_id',$car_id)->where('service_id',$carserviceId[1])->where('user_id',auth()->user()->id)->first();
        
        // $shopsetting = new ShopSettingController;
        // $VInGet= $shopsetting->FetchgetVinList($tab);
        // return view('shop-settings.partials.shop_services.ac_service_details',compact('vinid','VInGet','checkACData'));
       
       
    }
    
}
