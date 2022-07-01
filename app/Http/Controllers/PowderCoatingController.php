<?php

namespace App\Http\Controllers;

use App\Models\PowderCoating;
use Illuminate\Http\Request;

class PowderCoatingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function indexPowderCoating(Request $request, $vinid = null, $tab = 'editProfile')
    {
        $collisionserviceId = explode("%%%", base64_decode($_GET['servicedata'], true));
        $page_title = "Powder Coating";
        $car_id = base64_decode($collisionserviceId[0]);
        $vinid = base64_encode($car_id);
        $service_id = $collisionserviceId[1];
        $serviceData = PowderCoating::where('car_id', $car_id)->where('service_id', $collisionserviceId[1])->where('user_id', auth()->user()->id)->first();

        $shopsetting = new ShopSettingController;
        $VInGet = $shopsetting->FetchgetVinList($tab);
        return view('shop-settings.partials.shop_services.powder-coating', compact('vinid', 'VInGet', 'serviceData', 'service_id', 'page_title'));
    }

    public function savePowderCoating(Request $request)
    {
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


        // $powder_coating_check =  PowderCoating::where('car_id', $car_id)->where('user_id', auth()->user()->id)->first();


        // if ($powder_coating_check) {
        //     if (!empty($powder_coating_check->document)) {

        //         $documents = explode(',', $powder_coating_check->document);
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
            $products_uploaded = $commonClass->uplodeimages($_POST['remove_products_ids'], $request->file('products_uploaded'), 'powder_coating', $img_arr);
        }
        //  else {
        //     $products_uploaded = implode(" , ", array_column($img_arr, 'path'));
        // }

        $powder_coating = new PowderCoating();
        // $serviceData = PowderCoating::where('car_id', $car_id)->where('service_id', $serviceId)->where('user_id', auth()->user()->id)->first();
        // if ($serviceData) {
        //     $powder_coating = $powder_coating->where('car_id', $car_id)->where('service_id', $serviceId)->where('user_id', auth()->user()->id)->first();
        // }
        $powder_coating->user_id = auth()->user()->id;
        $powder_coating->car_id = $car_id;
        $powder_coating->service_id = $serviceId;
        $powder_coating->document = $products_uploaded;
        $powder_coating->was_powder_coating = $request->was_powder_coating;
        $powder_coating->pc_system = $request->pc_system;
        $powder_coating->color_code = $request->color_code;
        $powder_coating->is_waranty = $request->is_waranty;
        $powder_coating->waranty_company = $request->waranty_company;
        $powder_coating->paint_color = $request->paint_color;
        $powder_coating->powder_coating_note = $request->powder_coating_note;
        $powder_coating->manufacturer_by = $request->manufacturer_by;

        if ($powder_coating->save()) {
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
