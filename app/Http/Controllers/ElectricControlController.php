<?php

namespace App\Http\Controllers;

use App\Models\ElectricControl;
use Illuminate\Http\Request;

class ElectricControlController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function indexElectricControl(Request $request, $vinid = null, $tab = 'editProfile')
    {
        $collisionserviceId = explode("%%%", base64_decode($_GET['servicedata'], true));
        $page_title = "Electric Control";
        $car_id = base64_decode($collisionserviceId[0]);
        $vinid = base64_encode($car_id);
        $service_id = $collisionserviceId[1];
        $serviceData = ElectricControl::where('car_id', $car_id)->where('service_id', $collisionserviceId[1])->where('user_id', auth()->user()->id)->first();

        $shopsetting = new ShopSettingController;
        $VInGet = $shopsetting->FetchgetVinList($tab);
        return view('shop-settings.partials.shop_services.electricalcontrols-specialty', compact('vinid', 'VInGet', 'serviceData', 'service_id', 'page_title'));
    }

    public function electricontrolSave(Request $request)
    {
        // echo "<pre>"; print_r($request->all()); die;

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
        $products_uploaded = '';
        

        $img_arr = array();
        

        // $electric_control =  ElectricControl::where('car_id', $car_id)->where('user_id', auth()->user()->id)->first();
        // if ($electric_control) {
        //     if (!empty($electric_control->documents)) {

        //         $documents = explode(',', $electric_control->documents);
        //         $remove_products_ids = explode(",", $_POST['remove_products_ids']);

        //         if (isset($_POST['remove_products_ids']) && $remove_products_ids[0] != "") {
        //             foreach ($documents as $doc_key => $doc_value) {
        //                 if (!in_array($doc_key, $remove_products_ids)) {
        //                     $img_arr[$doc_key]['path'] = $doc_value;
        //                 }
        //             }
        //         } else {
        //             foreach ($documents as $doc_key => $doc_value) {
        //                 $img_arr[$doc_key]['path'] = $doc_value;
        //             }
        //         }
        //     }
            
        // }

        if ($request->hasfile('products_uploaded')) {
            $products_uploaded = $commonClass->uplodeimages($_POST['remove_products_ids'], $request->file('products_uploaded'), 'electroniccontrol', $img_arr);
        } 
        // else {
        //     $products_uploaded = implode(" , ", array_column($img_arr, 'path'));
        // }

        $electricControl = new ElectricControl();
        // $serviceData = ElectricControl::where('car_id', $car_id)->where('service_id', $serviceId)->where('user_id', auth()->user()->id)->first();
        // if ($serviceData) {
        //     $electricControl = $electricControl->where('car_id', $car_id)->where('service_id', $serviceId)->where('user_id', auth()->user()->id)->first();
        // }
        $electricControl->user_id = auth()->user()->id;
        $electricControl->car_id = $car_id;
        $electricControl->service_id = $serviceId;
        $electricControl->documents = $products_uploaded;
        $electricControl->system = $request->system;
        $electricControl->action = $request->action;
        $electricControl->diagnosis = $request->diagnosis;
        $electricControl->is_waranty = $request->is_waranty;
        $electricControl->waranty_company = $request->waranty_company;
        $electricControl->electric_notes = $request->electric_notes;
        $electricControl->manufacturer_by = $request->manufacturer_by;

        if ($electricControl->save()) {
            //echo "<pre>"; print_r($collision_service); die;

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
