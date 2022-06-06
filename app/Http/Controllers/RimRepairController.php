<?php

namespace App\Http\Controllers;

use App\Models\RimRepair;
use Illuminate\Http\Request;

class RimRepairController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function indexRimRepair(Request $request, $vinid = null, $tab = 'editProfile')
    {
        $collisionserviceId = explode("%%%", base64_decode($_GET['servicedata'], true));
        $page_title = "Rim Repair";
        $car_id = base64_decode($collisionserviceId[0]);
        $vinid = base64_encode($car_id);
        $service_id = $collisionserviceId[1];
        $serviceData = RimRepair::where('car_id', $car_id)->where('service_id', $collisionserviceId[1])->where('user_id', auth()->user()->id)->first();
        $shopsetting = new ShopSettingController;
        $VInGet = $shopsetting->FetchgetVinList($tab);
        return view('shop-settings.partials.shop_services.rim-repair', compact('vinid', 'VInGet', 'serviceData', 'service_id', 'page_title'));
    }

    public function saveRimRepair(Request $request)
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
        $img_arr_before = array();

        $rim_repair_check =  RimRepair::where('car_id', $car_id)->where('user_id', auth()->user()->id)->first();

        if ($rim_repair_check) {
            $documents = explode(',', $rim_repair_check->before_service_image);

            if (!empty($rim_repair_check->before_service_image)) {

                $remove_products_ids_four = explode(",", $_POST['remove_products_ids_four']);

                if (isset($_POST['remove_products_ids_four']) && $remove_products_ids_four[0] != "") {
                    foreach ($documents as $doc_key => $doc_value) {
                        if (!in_array($doc_key, $remove_products_ids_four)) {
                            $img_arr_before[$doc_key]['path'] = $doc_value;
                        }
                    }
                } else {
                    foreach ($documents as $doc_key => $doc_value) {
                        $img_arr_before[$doc_key]['path'] = $doc_value;
                    }
                }
            }

            $documents_after = explode(',', $rim_repair_check->after_service_images);

            if (!empty($rim_repair_check->after_service_images)) {
                $remove_products_ids_three = explode(",", $_POST['remove_products_ids_three']);


                if (isset($_POST['remove_products_ids_three']) && $remove_products_ids_three[0] != "") {
                    foreach ($documents_after as $doc_key_after => $doc_value_after) {
                        if (!in_array($doc_key_after, $remove_products_ids_three)) {
                            $img_arr[$doc_key_after]['path'] = $doc_value_after;
                        }
                    }
                } else {
                    foreach ($documents_after as $doc_key_after => $doc_value_after) {
                        $img_arr[$doc_key_after]['path'] = $doc_value_after;
                    }
                }
            }
        }


        //echo "<pre>"; print_r($img_arr); echo "<pre>"; print_r($img_arr_before); die;

        if ($request->hasfile('products_uploaded_before')) {
            $products_uploaded_before = $commonClass->uplodeimages($_POST['remove_products_ids_four'], $request->file('products_uploaded_before'), 'rim', $img_arr_before);
        } else {
            $products_uploaded_before = implode(" , ", array_column($img_arr_before, 'path'));
        }
        if ($request->hasfile('products_uploaded')) {
            $products_uploaded_after = $commonClass->uplodeimages($_POST['remove_products_ids_three'], $request->file('products_uploaded'), 'rim', $img_arr);
        } else {
            $products_uploaded_after = implode(" , ", array_column($img_arr, 'path'));
        }
        $rim_repair = new RimRepair();
        $serviceData = RimRepair::where('car_id', $car_id)->where('service_id', $serviceId)->where('user_id', auth()->user()->id)->first();
        if ($serviceData) {
            $rim_repair = $rim_repair->where('car_id', $car_id)->where('service_id', $serviceId)->where('user_id', auth()->user()->id)->first();
        }

        $rim_repair->user_id = auth()->user()->id;
        $rim_repair->car_id = $car_id;
        $rim_repair->service_id = $serviceId;
        $rim_repair->before_service_image = $products_uploaded_before;
        $rim_repair->service_type = $request->service_type;
        $rim_repair->after_service_images = $products_uploaded_after;

        if ($rim_repair->save()) {
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
