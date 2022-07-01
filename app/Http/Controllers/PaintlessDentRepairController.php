<?php

namespace App\Http\Controllers;

use App\Models\PaintlessDentRepair;
use Illuminate\Http\Request;

class PaintlessDentRepairController extends Controller
{
    public function indexPaintlessDentRepairPdr(Request $request, $vinid = null, $tab = 'editProfile')
    {
        $collisionserviceId = explode("%%%", base64_decode($_GET['servicedata'], true));
        $page_title = "Paint Body";
        $car_id = base64_decode($collisionserviceId[0]);
        $vinid = base64_encode($car_id);
        $service_id = $collisionserviceId[1];
        $serviceData = PaintlessDentRepair::where('car_id', $car_id)->where('service_id', $collisionserviceId[1])->where('user_id', auth()->user()->id)->first();

        $shopsetting = new ShopSettingController;
        $VInGet = $shopsetting->FetchgetVinList($tab);

        return view('shop-settings.partials.shop_services.paintless-dent-repair-pdr', compact('vinid', 'VInGet', 'serviceData', 'service_id', 'page_title'));
    }

    public function savePaintlessDentRepairPdr(Request $request)
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


        // $paint_dent_repair =  PaintlessDentRepair::where('car_id', $car_id)->where('user_id', auth()->user()->id)->first();


        // if ($paint_dent_repair) {
        //     if (!empty($paint_dent_repair->document)) {

        //         $documents = explode(',', $paint_dent_repair->document);
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

        if ($request->hasfile('image_uploaded')) {
            $products_uploaded = $commonClass->uplodeimages($_POST['remove_products_ids'], $request->file('image_uploaded'), 'paintless_dent_repair', $img_arr);
        }
        //  else {
        //     $products_uploaded = implode(" , ", array_column($img_arr, 'path'));
        // }

        $paintless_dent_repair_pdr = new PaintlessDentRepair();
        // $serviceData = PaintlessDentRepair::where('car_id', $car_id)->where('service_id', $serviceId)->where('user_id', auth()->user()->id)->first();
        // if ($serviceData) {
        //     $paintless_dent_repair_pdr = $paintless_dent_repair_pdr->where('car_id', $car_id)->where('service_id', $serviceId)->where('user_id', auth()->user()->id)->first();
        // }

        if(!empty($request->repaired_panels))
        {
            $repaired_panels = implode(',',$request->repaired_panels);
        }
       
        $paintless_dent_repair_pdr->user_id = auth()->user()->id;
        $paintless_dent_repair_pdr->car_id = $car_id;
        $paintless_dent_repair_pdr->service_id = $serviceId;
        $paintless_dent_repair_pdr->document = $products_uploaded;
        $paintless_dent_repair_pdr->damage_type = $request->damage_type;
        $paintless_dent_repair_pdr->repaired_panels = $repaired_panels;
        $paintless_dent_repair_pdr->paintless_note = $request->paintless_note;
        $paintless_dent_repair_pdr->vehicle_type = trim($request->vehicle_type);

        if ($paintless_dent_repair_pdr->save()) {
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
