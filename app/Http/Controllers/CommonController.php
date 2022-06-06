<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CarQueryApi;
use App\Http\Requests\Common\GetMakesRequest;
use App\Http\Requests\Common\GetModelsRequest;
use App\Models\Car;
use App\Models\User;
use App\Models\CarOwnerHistory;
use App\Models\ShopApparisal;
use App\Models\ShopServices;
use Illuminate\Support\Facades\Storage;

class CommonController extends Controller
{
    public function getYears(Request $request)
    {
        return $this->sendResponse(CarQueryApi::getYears());
    }

    public function getMakes(GetMakesRequest $request)
    {
        return $this->sendResponse(CarQueryApi::getMakes($request->year));
    }

    public function getModels(GetModelsRequest $request)
    {
        return $this->sendResponse(CarQueryApi::getModels($request->year, $request->make));
    }

    public function createdate()
    {
        // date_default_timezone_set('America/New_York');
        date_default_timezone_set('America/New_York');

        return date("Y-m-d H:i:s");
    }
    public function base_url()
    {
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
            $link = "https";
        else
            $link = "http";

        // Here append the common URL characters.
        $link .= "://";

        // Append the host(domain name, ip) to the URL.
        $link .= $_SERVER['HTTP_HOST'];

        // Print the link
        return $link;
    }
    public function google_password()
    {
        $password = "legend@123#";
        return $password;
    }
    public function checkCar($carId)
    {
        $cardara = Car::where('id', $carId)->first();
        if ($cardara) {
            return $cardara;
        }
        return 'fail';
    }
    public function checkServiceId($serviceId)
    {
        $shopdata = ShopServices::where('service_id', $serviceId)->first();
        if ($shopdata) {
            return $shopdata;
        }
        return 'fail';
    }
    function uploadimg($removeId, $imageid, $pathimport)
    {
        $ownerdoc = '';
        $insert = array();

        $remove_products_ids = array();
        if (isset($removeId) && !empty($removeId)) {
            $remove_products_ids = explode(",", $removeId);
        }
        foreach ($imageid as $key => $file) {
            if (!in_array($key, $remove_products_ids)) {
                $fileName = time() . $key . '.' . $file->getClientOriginalExtension();
                $path1 = Storage::disk('s3')->put($pathimport, $file);
                $path1 = Storage::disk('s3')->url($path1);
                $insert[$key]['path'] = $path1;
            }
        }
        return $ownerdoc = implode(" , ", array_column($insert, 'path'));
    }

    public function uplodeimages($removeId, $imageid, $pathimport, $before_image_arr)
    {
        $ownerdoc = '';
        $insert = array();

        $remove_products_ids = array();
        if (isset($removeId) && !empty($removeId)) {
            $remove_products_ids = explode(",", $removeId);
        }
        foreach ($imageid as $key => $file) {
                $fileName = time() . $key . '.' . $file->getClientOriginalExtension();
                $path1 = Storage::disk('s3')->put($pathimport, $file);
                $path1 = Storage::disk('s3')->url($path1);
                $insert[$key]['path'] = $path1;
        }
       if(count($before_image_arr) > 0)
       {
        $insert = array_merge($insert,$before_image_arr);
       }

        return $ownerdoc = implode(" , ", array_column($insert, 'path'));
    }

    

    public function getAppreiaslStatus($p)
    {


        $apprisasetting = ShopApparisal::where('user_id', auth()->user()->id)->first();
        if ($apprisasetting) {
            return $status = $apprisasetting->status;
        }
        return $status = 4;
    }

    public function imageUpload()
    {
        return view('pages.imageupload');
    }

    public function imageUploadPost(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $imageName = time() . '.' . $request->image->extension();

        $path = Storage::disk('s3')->put('images', $request->image);

        $path = Storage::disk('s3')->url($path);
        die();
       

        return back()
            ->with('success', 'You have successfully upload image.')
            ->with('image', $path);
    }
    public function addServiceData($car_id, $serviceId)
    {
        date_default_timezone_set('America/New_York');

        $service_date= date("Y-m-d H:i:s");
        $service_date_new= date("Y-m-d H:i:s");
        $ownerhistory = Car::where('id', $car_id)->first();
        if ($ownerhistory) {
            if (in_array($serviceId, explode(',', $ownerhistory->service_id))) {
            } else {
                if ($ownerhistory->service_id == "" || $ownerhistory->service_id == null) {
                    $ownerinsert = Car::where('id', $car_id)->update(['service_id' => $serviceId,'service_date'=>$service_date,'allservice_date'=>$service_date]);
                } else {
                    $Service_id = explode(',', $ownerhistory->service_id);
                    $Service_newdate = explode(',', $ownerhistory->allservice_date);
                    if (count($Service_id) == 0) {

                        $ownerinsert = Car::where('id', $car_id)->update(['service_id' => $serviceId,'service_date'=>$service_date,'allservice_date'=>$service_date]);
                    } else {

                        $arrchk =  array_push($Service_id, $serviceId);
                        $arrchk =  array_push($Service_newdate, $service_date_new);
                        $ownerinsert = Car::where('id', $car_id)->update(['service_id' => implode(',', $Service_id),'service_date'=>$service_date,'allservice_date'=>implode(',', $Service_newdate)]);
                    }
                }
            }
        }
    }
    public static function getServiceName($serviceId) {
        $data=array();
        $shopdata=ShopServices::where('service_id',$serviceId)->first();
        if($shopdata)
        {
            $data['service_name']=$shopdata->service_name;
            $data['service_page']=$shopdata->service_page;
            $data['service_photo']=$shopdata->service_photo;
          
        }
        return $data;
    }

    public static function getUserInfo($user_id)
    {
        $userdata=User::where('id',$user_id)->first();
        if($userdata)
        {
            return $userdata;
        }
        return ;
    }
}