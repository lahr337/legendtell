<?php

namespace App\Http\Controllers;

use App\Models\PerformanceDynoTuning;
use Illuminate\Http\Request;

class PerformanceDynoTuningController extends Controller
{
    public function indexPDT(Request $request, $vinid = null, $tab = 'editProfile')
    {
        $collisionserviceId = explode("%%%", base64_decode($_GET['servicedata'], true));
        $page_title = "Febrication Welding";
        $car_id = base64_decode($collisionserviceId[0]);
        $vinid = base64_encode($car_id);
        $service_id = $collisionserviceId[1];
        // $serviceData = PerformanceDynoTuning::where('car_id', $car_id)->where('service_id', $collisionserviceId[1])->where('user_id', auth()->user()->id)->first();
// 'serviceData',
        $shopsetting = new ShopSettingController;
        $VInGet = $shopsetting->FetchgetVinList($tab);
        return view('shop-settings.partials.shop_services.performance-dyno-tuning', compact('vinid', 'VInGet',  'service_id', 'page_title'));
    }

    public function savePDT(Request $request)
    {
       // echo "<pre>"; print_r($request->all()); die;
        $input = $request->except(['_token']);
        $commonClass = new CommonController;
        $mainid = base64_decode($request->carShopService);
        $carserviceId = explode("%%%", base64_decode($request->carShopService));

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
        $products_uploaded = '';


        $img_arr = array();


        if ($request->hasfile('products_uploaded')) {
            $products_uploaded = $commonClass->uplodeimages($_POST['remove_products_ids'], $request->file('products_uploaded'), 'mechanic', $img_arr);
        } 
        $engine_service = "";
        if(!empty($request->engine_services))
        {
            $engine_service = implode(',',$request->engine_services);
        }
        $pdt = new PerformanceDynoTuning();
        
        $pdt->user_id = auth()->user()->id;
        $pdt->car_id = $car_id;
        $pdt->service_id = $serviceId;
        $pdt->engine_services = $engine_service;
        $pdt->document = $products_uploaded;

        if ($pdt->save()) {
            $commonClass = new CommonController;
            $commonClass->addServiceData($car_id, $serviceId);

            $checkservice = explode(',', auth()->user()->shop_services);
            if (count($checkservice) < 1) {

                return redirect()->route('shop-settings.mydashboard', ['myshopServices']);
                $redirecturl = '/shop-settings/mydashboard';
            } else {
                $carid = base64_encode($car_id);
                $redirecturl = '/shop-settings/completedshop/' . $carid;
            }
            return $redirecturl;
        } else {
            return "fail";
        }
    }
}
