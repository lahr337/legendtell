<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\CarWashServices;
use App\Models\User;
use DB;
use App\Models\CarOwnerHistory;
use App\Models\ShopServices;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\ShopSettingController;


class CarWashServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function carwashIndex(Request $request,$vinid=null,$tab='editProfile')
    {
        $carserviceId=explode("%%%",base64_decode($_GET['servicedata'],true));
        $page_title='Car Wash Services';
        $car_id=base64_decode($carserviceId[0]);
        $vinid=base64_encode($car_id);
        $service_id=$carserviceId[1];
        $checkwasData=CarWashServices::where('car_id',$car_id)->where('service_id',$carserviceId[1])->where('services_name',$request->service_name)->where('user_id',auth()->user()->id)->first();
        
    //    echo "<pre>"; print_r($car_id); echo "<pre>"; print_r($request->service_name); echo "<pre>"; print_r($carserviceId[1]); die;
        $shopsetting = new ShopSettingController;
        $VInGet= $shopsetting->FetchgetVinList($tab);
        $service_name = $request->service_name;
        return view('shop-settings.partials.shop_services.car_wash_handwash',compact('vinid','VInGet','checkwasData','service_id','car_id','page_title','service_name'));
       
    }
    public function tab_change_carwash(Request $request)
    {
       
        $tab='editProfile';
        $car_id=$request->car_id;
        $vinid=base64_encode($car_id);
        $service_id=$request->service_id;
        $checkwasData=CarWashServices::where('car_id',$car_id)->where('service_id',$request->service_id)->where('services_name',$request->service_name)->where('user_id',auth()->user()->id)->first();
        $service_name = $request->service_name;
       // print_r($service_name); die;
        $shopsetting = new ShopSettingController;
        $VInGet= $shopsetting->FetchgetVinList($tab);
        return view('shop-settings.partials.shop_services.car_wash_handwash',compact('vinid','VInGet','checkwasData','service_id','car_id','service_name'));
    }
    public function CarStore(Request $request)
    {
   
        $input = $request->except(['_token']);
        $commonClass = new CommonController;
      
       $mainid= base64_decode($request->carShopService);

        $carserviceId=explode("%%%",base64_decode($request->carShopService));
        if(empty($request->servicedataid))
        {
            return "no carid";
        }
         $serviceId=$request->servicedataid;
        $car_id=base64_decode($carserviceId[0]);
        if($commonClass->checkCar($car_id) =='fail')
        {
            return "wroungdata";
        }
        $serviceData=$commonClass->checkServiceId($request->servicedataid);
       
        if($commonClass->checkServiceId($request->servicedataid) =='fail')
        {
            return "wroungdata";
        }
        $imgdoc='';

        $img_arr = array();


        $car_wash_service_check =  CarWashServices::where('car_id', $car_id)->where('services_name',$request->services_name)->where('user_id', auth()->user()->id)->first();


        if ($car_wash_service_check) {
            if (!empty($car_wash_service_check->documents)) {

                $documents = explode(',', $car_wash_service_check->documents);
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
            $imgdoc = $commonClass->uplodeimages($_POST['remove_products_ids'], $request->file('image_uploaded'), 'carwashservices', $img_arr);
        } else {
            $imgdoc = implode(" , ", array_column($img_arr, 'path'));
        }
     
        
        $carwashservices=new CarWashServices;
        $checkAcData=CarWashServices::where('car_id',$car_id)->where('service_id',$serviceId)->where('services_name',$request->services_name)->where('user_id',auth()->user()->id)->first();
        if($checkAcData)
        {
        $carwashservices=$carwashservices->where('car_id',$car_id)->where('service_id',$serviceId)->where('services_name',$request->services_name)->where('user_id',auth()->user()->id)->first();   
        }
        
        $carwashservices->user_id=auth()->user()->id;
        $carwashservices->car_id=$car_id;
        $carwashservices->service_id=$request->servicedataid; 
        $carwashservices->services_name = $request->services_name;
        $carwashservices->service_name=implode(',',$request->serviceData);
        $carwashservices->notes=$request->notesdata;
        $carwashservices->documents=$imgdoc;
        if($carwashservices->save())
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
            return $redirecturl;
        }
        else{
            return "fail";
        }
    }

    //car tunnel
    public function CarTunnelStore(Request $request)
    {
    //    echo "<pre>"; print_r($request->all());
    //     // echo implode(',',$request->serviceData);
    //     die();
        $input = $request->except(['_token']);
        $commonClass = new CommonController;
      
       $mainid= base64_decode($request->carShopService);

        $carserviceId=explode("%%%",base64_decode($request->carShopService));
        if(empty($request->servicedataid))
        {
            return "no carid";
        }
         $serviceId=$request->servicedataid;
        $car_id=base64_decode($carserviceId[0]);
        if($commonClass->checkCar($car_id) =='fail')
        {
            return "wroungdata";
        }
        $serviceData=$commonClass->checkServiceId($request->servicedataid);
       
        if($commonClass->checkServiceId($request->servicedataid) =='fail')
        {
            return "wroungdata";
        }
        $imgdoc='';
     
        
        $carwashservices=new CarWashServices;
        $checkAcData=CarWashServices::where('car_id',$car_id)->where('service_id',$serviceId)->where('services_name',$request->services_name)->where('user_id',auth()->user()->id)->first();
        if($checkAcData)
        {
            $imgdoc=$checkAcData->documents;
        $carwashservices=$carwashservices->where('car_id',$car_id)->where('service_id',$serviceId)->where('services_name',$request->services_name)->where('user_id',auth()->user()->id)->first();   
        }
        $img_arr = array();


        $car_wash_service_check =  CarWashServices::where('car_id', $car_id)->where('services_name',$request->services_name)->where('user_id', auth()->user()->id)->first();


        if ($car_wash_service_check) {
            if (!empty($car_wash_service_check->documents)) {

                $documents = explode(',', $car_wash_service_check->documents);
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
            $imgdoc = $commonClass->uplodeimages($_POST['remove_products_ids'], $request->file('image_uploaded'), 'carwashservices', $img_arr);
        } else {
            $imgdoc = implode(" , ", array_column($img_arr, 'path'));
        }
        $carwashservices->user_id=auth()->user()->id;
        $carwashservices->car_id=$car_id;
        $carwashservices->service_id=$request->servicedataid; 
        $carwashservices->services_name = $request->services_name;
        $carwashservices->service_name=implode(',',$request->tunnelserviceData);
        $carwashservices->notes=$request->tunnelnotesdata;
        $carwashservices->documents=$imgdoc;
        if($carwashservices->save())
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
            return  $redirecturl;
        }
        else{
            return "fail";
        }
    }
}
