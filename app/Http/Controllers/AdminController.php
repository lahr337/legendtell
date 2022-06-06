<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\User\SaveProfileRequest;
use App\Http\Requests\User\EmailExistsRequest;
use App\Http\Requests\User\ChangePasswordRequest;
use App\Http\Requests\User\SaveNotificationSettingRequest;
use App\Models\Car;
use App\Models\ShopServices;
use App\Models\PaymentCard;
use App\Models\NotificationSetting;
use App\Classes\StripePayment;
use App\Http\Requests\User\AddPaymentMethodRequest;
use App\Models\ShopApparisal;
use App\Http\Controllers\CommonController;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($tab = 'editProfile')
    {
       
        if(auth()->user()->role==1)
        {
            $page_title = 'Admin Settings';
            $reported_cars = Car::has('submittions')->get();
            $shopApperisal=ShopApparisal::where('status',1)->with('shopapperisalRequest')->get();
            $servicesData = ShopServices::where('status',1)->orderBy('service_id','DESC')->get();
            $payment_methods = [];
            $idByCardIds = [];
            if(auth()->user()->stripe_customer_id != null){
                $idByCardIds = PaymentCard::pluck('id','card_id')->toArray();
                $payment_methods = \Stripe::paymentMethods()->all([
                    'type' => 'card',
                    'customer' => auth()->user()->stripe_customer_id,
                ]);
            }
        
            return view('admin-settings.index', compact('page_title','tab','reported_cars','payment_methods','idByCardIds','servicesData','shopApperisal'));
            
        }
        else{
            return redirect('/');
        }

        
    }
    

    public function saveProfile(SaveProfileRequest $request)
    {
        print_r($request->all());
       die();

        if($user = \Auth::user()){
            $input = $request->except(['password','current_password','_token','_method']);

            if( isset($input['avatar']) && $file = $input['avatar'] ){
                // return public_path().'/storage/uploads/shoplogo/';
                $fileName = time().'.'.$file->getClientOriginalExtension();
                $file->move(public_path().'/storage/uploads/users/', $fileName);
                $input['avatar'] = $fileName;
            }
            //photoshop
            if( isset($input['shop_photo']) && $file = $input['shop_photo'] ){
                // return public_path().'/storage/uploads/shoplogo/';
                $fileName = time().'.'.$file->getClientOriginalExtension();
                $file->move(public_path().'/storage/uploads/shopphoto/', $fileName);
                $input['shop_photo'] = $fileName;
            }

            $user->update($input+['status' => 'active']);
        }
        return $this->sendResponse();
    }
}
