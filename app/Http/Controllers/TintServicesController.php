<?php

namespace App\Http\Controllers;
use App\Models\User;
use DB;
use App\Models\TintServices;
use App\Models\ShopServices;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\ShopSettingController;
use Illuminate\Http\Request;

class TintServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function tintIndex(Request $request,$vinid=null,$tab='editProfile')
    {
        $tintserviceId=explode("%%%",base64_decode($_GET['servicedata'],true));
        $page_title="Tint Services";
        $car_id=base64_decode($tintserviceId[0]);
        $vinid=base64_encode($car_id);
        $service_id=$tintserviceId[1];
        $serviceData=TintServices::where('car_id',$car_id)->where('service_id',$tintserviceId[1])->where('user_id',auth()->user()->id)->first();
        
        $shopsetting = new ShopSettingController;
        $VInGet= $shopsetting->FetchgetVinList($tab);
        return view('shop-settings.partials.shop_services.tint',compact('vinid','VInGet','serviceData','service_id','page_title'));
       
    }

    public function storeTintService(Request $request)
    {

        $input = $request->except(['_token']);
        $commonClass = new CommonController;

        $mainid = base64_decode($request->carShopService);

        $carserviceId = explode("%%%", base64_decode($request->carShopService));
        // echo "<pre>";
        // print_r($carserviceId);
        // die;
        if (empty($carserviceId[1])) {
            return "no carid";
        }
        $serviceId = $carserviceId[1];
        $car_id = base64_decode($carserviceId[0]);
        if ($commonClass->checkCar($car_id) == 'fail') {
            return "wroungdata";
        }
        $serviceData = $commonClass->checkServiceId($carserviceId[1]);

        if ($commonClass->checkServiceId($carserviceId[1]) == 'fail') {
            return "wroungdata";
        }
        $acdoc = '';


        $img_arr = array();


        $tintservice_check =  TintServices::where('car_id', $car_id)->where('user_id', auth()->user()->id)->first();


        if ($tintservice_check) {
            if (!empty($tintservice_check->document)) {

                $documents = explode(',', $tintservice_check->document);
                $remove_products_ids = explode(",", $_POST['remove_products_ids']);

                if (isset($_POST['remove_products_ids']) && $remove_products_ids[0] != "" ) {
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

        if ($request->hasfile('products_uploaded')) {
            $acdoc = $commonClass->uplodeimages($_POST['remove_products_ids'], $request->file('products_uploaded'), 'tintservices', $img_arr);
        } else {
            $acdoc = implode(" , ", array_column($img_arr, 'path'));
        }



        $tintservice = new TintServices();
        $serviceData = TintServices::where('car_id', $car_id)->where('service_id', $serviceId)->where('user_id', auth()->user()->id)->first();
        if ($serviceData) {
            $tintservice = $tintservice->where('car_id', $car_id)->where('service_id', $serviceId)->where('user_id', auth()->user()->id)->first();
        }
       
        $tintservices = implode(',',$request->tintservices);
        $tintservice->user_id=auth()->user()->id;
        $tintservice->car_id=$car_id;
        $tintservice->service_id=$serviceId;    
        $tintservice->tintservices=$tintservices;  
        $tintservice->tint_manufacture=$request->tint_manufacture;  
        $tintservice->tint_type=$request->tint_type;  
        $tintservice->percentage = $request->percentage;
        $tintservice->tint_oem_match=$request->tint_oem_match;  
        $tintservice->oem_manufacture=$request->oem_manufacture;  
        $tintservice->tint_warranty=$request->tint_warranty;  
        $tintservice->warranty_company=$request->warranty_company;  
        $tintservice->tint_notes=$request->tint_notes;  
        $tintservice->document=$acdoc;  
        if($tintservice->save())
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
}
