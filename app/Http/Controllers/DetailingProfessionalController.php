<?php

namespace App\Http\Controllers;

use App\Models\DetailingCorrection;
use Illuminate\Http\Request;

class DetailingProfessionalController extends Controller
{
   public function indexDetailingProfessional(Request $request, $vinid = null, $tab = 'editProfile')
   {
    $collisionserviceId = explode("%%%", base64_decode($_GET['servicedata'], true));
    $page_title = "Detailing Professional";
    $car_id = base64_decode($collisionserviceId[0]);
    $vinid = base64_encode($car_id);
    $service_id = $collisionserviceId[1];
    // $serviceData = FrameAlignment::with('AfterFrameAlignment')->where('car_id', $car_id)->where('service_id', $collisionserviceId[1])->where('user_id', auth()->user()->id)->first();

    $shopsetting = new ShopSettingController;
    $VInGet = $shopsetting->FetchgetVinList($tab);

    return view('shop-settings.partials.shop_services.detailing-correction', compact('vinid', 'VInGet', 'service_id', 'page_title'));

   }

   public function indexDetailingCorrection(Request $request, $vinid = null, $tab = 'editProfile')
   {
      $collisionserviceId = explode("%%%", base64_decode($_GET['servicedata'], true));
      $page_title = "Detailing Professional";
      $car_id = base64_decode($collisionserviceId[0]);
      $vinid = base64_encode($car_id);
      $service_id = $collisionserviceId[1];
      // $serviceData = FrameAlignment::with('AfterFrameAlignment')->where('car_id', $car_id)->where('service_id', $collisionserviceId[1])->where('user_id', auth()->user()->id)->first();
  
      $shopsetting = new ShopSettingController;
      $VInGet = $shopsetting->FetchgetVinList($tab);
  
      return view('shop-settings.partials.shop_services.detailing-professional', compact('vinid', 'VInGet', 'service_id', 'page_title'));
   }

   public function saveDetailing(Request $request)
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
      

    

      if ($request->hasfile('image_uploaded')) {
          $products_uploaded = $commonClass->uplodeimages($_POST['remove_products_ids'], $request->file('image_uploaded'), 'detailing', $img_arr);
      } 
      $correction ="";
      if(!empty($request->correction))
      {
         $correction = implode(',',$request->correction);
      }
      $cleaning = "";
      if(!empty($request->cleaning)){
         $cleaning = implode(',',$request->cleaning);
      }

      $detailing_correction = new DetailingCorrection();
  
      $detailing_correction->user_id = auth()->user()->id;
      $detailing_correction->car_id = $car_id;
      $detailing_correction->service_id = $serviceId;
      $detailing_correction->document = $products_uploaded;
      $detailing_correction->service_type = $request->service_type;
      $detailing_correction->vehicle_type = $request->vehicle_type;
      $detailing_correction->correction = $correction;
      $detailing_correction->cleaning_mobile = $cleaning;
      // $detailing_correction->waranty_company = $request->waranty_company;
      // $detailing_correction->electric_notes = $request->electric_notes;
      // $detailing_correction->manufacturer_by = $request->manufacturer_by;

      if ($detailing_correction->save()) {
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
