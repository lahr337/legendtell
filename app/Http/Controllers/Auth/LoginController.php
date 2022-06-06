<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Socialite;

class LoginController extends Controller
{
  /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

  use AuthenticatesUsers;

  /**
   * Where to redirect users after login.
   *
   * @var string
   */
  // protected $redirectTo = RouteServiceProvider::HOME;
  public function redirectTo()
  {
    $role = Auth::user()->role;
    switch ($role) {
      case '1':
        return '/admin-settings/editProfile';
        break;
      case '2':
        if (Auth::user()->shop_name == null || Auth::user()->shop_name == '') {
          return '/shop-settings/editProfile';
        } else {
          return '/shop-settings/mydashboard';
        }


        break;
      case '3':
        $session_value = Session::get('vin_url');
        if (empty($session_value)) {
          return '/account-settings/editProfile';
        } else {
          Session::forget('vin_url');
          return $session_value;
        }
        break;
      default:
        return '/';
        break;
    }
  }
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('guest')->except('logout');
  }

  public function loginOrSignup(Request $request, $type = 'login')
  {
    $page_title = $type == 'login' ? 'Login' : 'Signup';
    if ($type == 'register') {
      return view('auth.register', compact('page_title', 'type'));
    } else {
      return view('auth.login', compact('page_title', 'type'));
    }
  }

  /**
   * Show the application's login form.
   *
   * @return \Illuminate\Http\Response
   */
  public function showLoginForm()
  {
    return redirect()->route('auth.login-or-signup', ['login']);
  }

  public function storeSession(Request $request)
  {
    Session::put(['vin_url' => $request->url_vin]);
    return true;
  }
}
