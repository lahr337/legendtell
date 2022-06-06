<?php

namespace App\Http\Controllers;

use App\Models\CarOwnerHistory;
use App\Models\CollisionRepair;
use Illuminate\Http\Request;

class CollisionRepairController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function collisionIndex(Request $request, $vinid = null, $tab = 'editProfile')
    {
        $collisionserviceId = explode("%%%", base64_decode($_GET['servicedata'], true));
        $page_title = "Collision Repair";
        $car_id = base64_decode($collisionserviceId[0]);
        $vinid = base64_encode($car_id);
        $service_id = $collisionserviceId[1];
        $serviceData = CollisionRepair::where('car_id', $car_id)->where('service_id', $collisionserviceId[1])->where('user_id', auth()->user()->id)->first();

        $shopsetting = new ShopSettingController;
        $VInGet = $shopsetting->FetchgetVinList($tab);
        return view('shop-settings.partials.shop_services.collision-repair', compact('vinid', 'VInGet', 'serviceData', 'service_id', 'page_title'));
    }

    public function collisionSave(Request $request)
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
        $before_image = '';
        $document_of_estimate = '';
        $document_of_repair = "";
        $after_image = "";

        $before_image_arr = array();
        $document_of_estimate_arr = array();
        $after_image_arr = array();
        $document_of_repair_arr = array();

        $collision_repair =  CollisionRepair::where('car_id', $car_id)->where('user_id', auth()->user()->id)->first();
        if ($collision_repair) {
            if (!empty($collision_repair->before_image)) {

                $before_image_document = explode(',', $collision_repair->before_image);
                $remove_products_ids = explode(",", $_POST['remove_products_ids_four']);

                if (isset($_POST['remove_products_ids_four']) && $remove_products_ids[0] != "") {
                    foreach ($before_image_document as $doc_key => $doc_value) {
                        if (!in_array($doc_key, $remove_products_ids)) {
                            $before_image_arr[$doc_key]['path'] = $doc_value;
                        }
                    }
                } else {
                    foreach ($before_image_document as $doc_key => $doc_value) {
                        $before_image_arr[$doc_key]['path'] = $doc_value;
                    }
                }
            }
            if (!empty($collision_repair->document_of_estimate)) {
                $document_of_estimate = explode(',', $collision_repair->document_of_estimate);
                $remove_products_ids_one = explode(",", $_POST['remove_products_ids_one']);
                if (isset($_POST['remove_products_ids_one']) && $remove_products_ids_one[0] != "") {
                    foreach ($document_of_estimate as $est_key => $est_value) {
                        if (!in_array($est_key, $remove_products_ids_one)) {
                            $document_of_estimate_arr[$est_key]['path'] = $est_value;
                        }
                    }
                } else {
                    foreach ($document_of_estimate as $est_key => $est_value) {
                        $document_of_estimate_arr[$est_key]['path'] = $est_value;
                    }
                }
            }

            if (!empty($collision_repair->document_of_repair)) {
                $document_of_repair = explode(',', $collision_repair->document_of_repair);
                $remove_products_ids_two = explode(",", $_POST['remove_products_ids_two']);
                if (isset($_POST['remove_products_ids_two']) && $remove_products_ids_two[0] != "") {
                    foreach ($document_of_repair as $repair_key => $repair_value) {
                        if (!in_array($repair_key, $remove_products_ids_two)) {
                            $document_of_repair_arr[$repair_key]['path'] = $repair_value;
                        }
                    }
                } else {
                    foreach ($document_of_repair as $repair_key => $repair_value) {
                        $document_of_repair_arr[$repair_key]['path'] = $repair_value;
                    }
                }
            }

            if (!empty($collision_repair->after_image)) {
                $after_image = explode(',', $collision_repair->after_image);
                $remove_products_ids_three = explode(",", $_POST['remove_products_ids_three']);

                if (isset($_POST['remove_products_ids_three']) && $remove_products_ids_three[0] != "") {
                    foreach ($after_image as $after_key => $after_value) {
                        if (!in_array($after_key, $remove_products_ids_three)) {
                            $after_image_arr[$after_key]['path'] = $after_value;
                        }
                    }
                } else {
                    foreach ($after_image as $after_key => $after_value) {
                        $after_image_arr[$after_key]['path'] = $after_value;
                    }
                }
            }
        }

        

        if ($request->hasfile('before_image')) {
            $before_image = $commonClass->uplodeimages($_POST['remove_products_ids_four'], $request->file('before_image'), 'collisionrepair', $before_image_arr);
        } else {
            $before_image = implode(" , ", array_column($before_image_arr, 'path'));
        }
        if ($request->hasfile('document_of_estimate')) {
            $document_of_estimate = $commonClass->uplodeimages($_POST['remove_products_ids_one'], $request->file('document_of_estimate'), 'collisionrepair', $document_of_estimate_arr);
        } else {
            $document_of_estimate = implode(" , ", array_column($document_of_estimate_arr, 'path'));
        }
        if ($request->hasfile('document_of_repair')) {
            $document_of_repair = $commonClass->uplodeimages($_POST['remove_products_ids_two'], $request->file('document_of_repair'), 'collisionrepair',$document_of_repair_arr);
        }else{
            $document_of_repair = implode(" , ", array_column($document_of_repair_arr, 'path'));
        }
        if ($request->hasfile('after_image')) {
            $after_image = $commonClass->uplodeimages($_POST['remove_products_ids_three'], $request->file('after_image'), 'collisionrepair',$after_image_arr);
        }else{
            $after_image = implode(" , ", array_column($after_image_arr, 'path'));
        }

        // echo "<pre>"; print_r($after_image); echo "<pre>"; print_r($document_of_repair);
        // echo "<pre>"; print_r($document_of_estimate) ; echo "<pre>"; print_r($before_image); die;

        $collision_service = new CollisionRepair();
        $serviceData = CollisionRepair::where('car_id', $car_id)->where('service_id', $serviceId)->where('user_id', auth()->user()->id)->first();
        if ($serviceData) {
            $collision_service = $collision_service->where('car_id', $car_id)->where('service_id', $serviceId)->where('user_id', auth()->user()->id)->first();
        }
        $collision_service->user_id = auth()->user()->id;
        $collision_service->car_id = $car_id;
        $collision_service->service_id = $serviceId;
        $collision_service->before_image = $before_image;
        $collision_service->document_of_estimate = $document_of_estimate;
        $collision_service->document_of_repair = $document_of_repair;
        $collision_service->after_image = $after_image;
        $collision_service->collision_notes = $request->collision_notes;

        if ($collision_service->save()) {
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
