<?php

namespace App\Http\Controllers;

use App\Models\PaintBody;
use Illuminate\Http\Request;

class PaintBodyController extends Controller
{
    public function indexPaintBody(Request $request, $vinid = null, $tab = 'editProfile')
    {
        $collisionserviceId = explode("%%%", base64_decode($_GET['servicedata'], true));
        $page_title = "Paint Body";
        $car_id = base64_decode($collisionserviceId[0]);
        $vinid = base64_encode($car_id);
        $service_id = $collisionserviceId[1];
        $serviceData = PaintBody::where('car_id', $car_id)->where('service_id', $collisionserviceId[1])->where('user_id', auth()->user()->id)->first();

        $shopsetting = new ShopSettingController;
        $VInGet = $shopsetting->FetchgetVinList($tab);
        return view('shop-settings.partials.shop_services.paint-body', compact('vinid', 'VInGet', 'serviceData', 'service_id', 'page_title'));
    }

    public function savePaintBody(Request $request)
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


        $paint_body_check =  PaintBody::where('car_id', $car_id)->where('user_id', auth()->user()->id)->first();


        if ($paint_body_check) {
            if (!empty($paint_body_check->document)) {

                $documents = explode(',', $paint_body_check->document);
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
            $products_uploaded = $commonClass->uplodeimages($_POST['remove_products_ids'], $request->file('image_uploaded'), 'paint_body', $img_arr);
        } else {
            $products_uploaded = implode(" , ", array_column($img_arr, 'path'));
        }

        $paint_body = new PaintBody();
        $serviceData = PaintBody::where('car_id', $car_id)->where('service_id', $serviceId)->where('user_id', auth()->user()->id)->first();
        if ($serviceData) {
            $paint_body = $paint_body->where('car_id', $car_id)->where('service_id', $serviceId)->where('user_id', auth()->user()->id)->first();
        }
       
        $paint_body->user_id = auth()->user()->id;
        $paint_body->car_id = $car_id;
        $paint_body->service_id = $serviceId;
        $paint_body->document = $products_uploaded;
        $paint_body->vehicle_type = $request->vehicle_type;
        $paint_body->body_panels_repaired_or_replaced = $request->body_panels_repaired_or_replaced;
        $paint_body->paint_manufacturer = $request->paint_manufacturer;
        $paint_body->paint_system = $request->paint_system;
        $paint_body->paint_code = $request->paint_code;
        $paint_body->paint_color = $request->paint_color;
        $paint_body->paint_notes = $request->paint_notes;

        if ($paint_body->save()) {
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
