<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\User\SaveProfileRequest;
use App\Http\Requests\User\EmailExistsRequest;
use App\Http\Requests\User\ChangePasswordRequest;
use App\Http\Requests\User\SaveNotificationSettingRequest;
use App\Models\Car;
use App\Models\User;
use App\Models\Country;
use App\Models\State;
use App\Models\ShopServices;
use App\Models\PaymentCard;
use App\Models\NotificationSetting;
use App\Classes\StripePayment;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\User\AddPaymentMethodRequest;

class AccountSettingsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($tab = 'editProfile',$car_id=1)
    {
        $car=[];
        $CarData=[];
        $SelectServices=[];
        $page_title = 'Account Settings';
        $reported_cars = Car::has('submittions')->get();
        $payment_methods = [];
        $idByCardIds = [];
        $carsShop=[];
        if(auth()->user()->stripe_customer_id != null){
            $idByCardIds = PaymentCard::pluck('id','card_id')->toArray();
            $payment_methods = \Stripe::paymentMethods()->all([
                'type' => 'card',
                'customer' => auth()->user()->stripe_customer_id,
            ]);
        }
        $states=State::where('country_id','233')->where('status','1')->orderBy('name','ASC')->get();
        $shopDetails=User::where('role',2)->where('approve',1)->get();
        if($car = Car::find($car_id)){
            $page_title = $car->title;
            $CarData = new Car;
            
            $CarData = $CarData->where('id',$car_id)->with('ownerHistory')->with('acHistory')->with('breakHistory')->with('carwashHistory')->with('userData')->first();
            $carsShop = Car::where('vin',$car->vin)->with('ownerHistory')->with('userData')->orderBy('id','DESC')->get();
            if(!empty($CarData->service_id))
            {
                $SelectServices=ShopServices::whereIn('service_id',explode(',',$CarData->service_id))->get();
               
            }
            
            
        }
        return view('account-settings.index', compact('page_title','tab','reported_cars','payment_methods','idByCardIds','page_title', 'car','CarData','SelectServices','shopDetails','carsShop','states'));
    }

    public function makeDefaultPaymentMethod($id){
        $payment_method = PaymentCard::find($id);
        if($payment_method){
            if($this->setDefaultPaymentMethod($payment_method)){
                return $this->sendResponse();
            }
        }
        return $this->sendError([], "Fail to make default");
    }

    public function deletePaymentMethod($id){
        $user = auth()->user();
        $payment_method = PaymentCard::find($id);
        if($payment_method){
            $payment_method->delete();
            $card = \Stripe::cards()->delete($user->stripe_customer_id, $payment_method->card_id);
            if($card && $this->setDefaultPaymentMethod()){
                return $this->sendResponse();
            }
        }
        return $this->sendError([], "Fail to delete payment method");
    }

    public function setDefaultPaymentMethod(PaymentCard $payment_method = null, User $user = null){
        $user = $user ?? auth()->user();
        if(PaymentCard::count() == 0) {
            $user->update(['stripe_default_card_id' => null]);
            return true;
        }
        $payment_method = $payment_method ?? PaymentCard::orderBy('id','desc')->first();
        if($payment_method){
            $customer = \Stripe::customers()->update($user->stripe_customer_id, [
                'default_source'    => $payment_method->card_id,
            ]);
            $user->update(['stripe_default_card_id' => $payment_method->card_id]);
            return true;
        }
        return false;
    }

    public function addPaymentMethod(AddPaymentMethodRequest $request){
        $input = $request->all();
        $user = auth()->user();
        $payment_method = [];
        if($paymentData = StripePayment::addPaymentMethod($user, $input + ['payment_source' => 'new'])){
            return $paymentData['payment_card'];
            // if($paymentData['payment_card']) {
            //     $db_id = $paymentData['payment_card']->id;
            //     $payment_method['id'] = $paymentData['card']['id'];
            //     $payment_method['card'] = $paymentData['card'];
            //     return view('account-settings.partials._content._payment-method-item', compact('db_id', 'payment_method'));
            // }
        }
        // return $this->sendError([], "Fail to add payment method");
    }

    /**
     * save Profile.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function saveProfile(SaveProfileRequest $request)
    {
        if($user = \Auth::user()){
            $input = $request->except(['password','current_password','_token','_method']);

            // if( isset($input['avatar']) && $file = $input['avatar'] ){
            //     $fileName = time().'.'.$file->getClientOriginalExtension();
            //     $file->move(public_path().'/storage/uploads/users/', $fileName);
            //     // $file->move(storage_path('app/public/uploads/users/'), $fileName);
            //     $input['avatar'] = $fileName;
            // }
            if( isset($input['avatar']) && $file = $input['avatar'] ){
                // return public_path().'/storage/uploads/shoplogo/';
                $fileName = time().'.'.$file->getClientOriginalExtension();
                // $file->move(public_path().'/storage/uploads/users/', $fileName);
                // $imageName = time().'.'.$request->image->extension();  
        
            $path = Storage::disk('s3')->put('User', $file);
       
             $path = Storage::disk('s3')->url($path);
                $input['avatar'] = $path;
            }
            $user->update($input+['status' => 'active']);
        }
        return $this->sendResponse();
    }

    public function emailExists(EmailExistsRequest $request){
        return $this->sendResponse();
    }

    /**
     * change password.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function changePassword(ChangePasswordRequest $request)
    {
        if($user = \Auth::user()){
            $input = $request->all();
            if (\Hash::check($input['current_password'], $user->password)) {
                $user->update([
                    'password'  => \Hash::make($input['password']),
                ]);
                return $this->sendResponse();
            } else {
                return $this->sendValidationError('current_password', 'password not match');
            }
        }
        return $this->sendError([],"something want wrong");
    }

    public function saveNotificationSetting(SaveNotificationSettingRequest $request){
        if($user = \Auth::user()){
            if($request->notifications)
                $input = $request->notifications;
            else
                $input = [
                    'open_recall' => 0,
                    'oil_change_due' => 0,
                    'tire_rotation_due' => 0,
                    'safety_inspection_due' => 0,
                    'registration_due' => 0,
                    'emissions_inspection_due' => 0,
                    'leave_service_review' => 0,
                    'monthly_vehicle_report' => 0,
                    'add_vehicle_reminder' => 0,
                    'still_own_vehicle' => 0,
                ];
            NotificationSetting::updateOrCreate(['user_id' => $user->id],$input);
            return $this->sendResponse();
        }
        return $this->sendError([],"something want wrong");
    }

    public function userservices(Request $request ,$servicedata=null)
    {
        $car=[];
        $CarData=[];
        $carsShop=[];
        $SelectServices=[];
        $page_title = 'Services';
        $carserviceId=explode("%%%",base64_decode($servicedata,true));
        $tab = 'vindashboard';
        $car_id=$carserviceId[0];
        $serviceId=$carserviceId[1];
        $nextservice=$carserviceId[2];
        $shopAllServices=ShopServices::where('status',1)->get();
        $shopDetails=User::where('role',2)->where('approve',1)->get();
        if($car = Car::find($car_id)){
            $page_title = $car->title;
            $CarData = new Car;
            $carsShop = Car::where('vin',$car->vin)->with('ownerHistory')->with('userData')->orderBy('id','DESC')->get();
           $mynxtservice="";
            $newarray=explode(',',$car->service_id);
            sort($newarray, SORT_NUMERIC); //Sorts in reverse order, so high to low
         
           if(!empty($newarray[$nextservice+1]))
           {
              
               $mynxtservice=$newarray[$nextservice+1];
           }
           $nextservice=$nextservice+1;
            $xyz = implode(',', $newarray);
      
            $CarData = $CarData->where('id',$car_id)->with('ownerHistory')->with('acHistory')->with('carwashHistory')->with('breakHistory')->with('userData')->with('carhandwashHistory')->with('carselfHistory')->with('cartunnelHistory')->with('concerigeHistory')->with('colisonRepair')->with('engineblockService')->with('exhaustService')->with('OilServices')->with('batteryServices')->with('powderCoatingServices')->with('tireServices')->with('partServices')->with('electricServices')->with('transmissionServices')->with('tintServices')->with('glassServices')->with('rimServices')->with('raceTrackServices')->with('spicalotherServices')->with('SuspensionServices')->with('spicalotherServices')->with('mechicalServices')->first();
        //     echo "<pre>";
        //   print_r($CarData);
        //   echo "</pre>";
        //   die();
            if(!empty($CarData->service_id))
            {
                $SelectServices=ShopServices::whereIn('service_id',explode(',',$CarData->service_id))->get();
               
            }
            
            
        }
        // echo "carid=".$carId.'--serviceId--'.$serviceId;
        return view('account-settings.web._vin-dashboard-service', compact('page_title','tab', 'car','CarData','SelectServices','shopDetails','serviceId','mynxtservice','nextservice','carsShop','shopAllServices'));
    }
}
