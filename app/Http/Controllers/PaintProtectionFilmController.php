<?php

namespace App\Http\Controllers;

use App\Models\PaintProtectionFilm;
use Illuminate\Http\Request;

class PaintProtectionFilmController extends Controller
{
    public function indexPaintProtectionFilm(Request $request, $vinid = null, $tab = 'editProfile')
    {
        $collisionserviceId = explode("%%%", base64_decode($_GET['servicedata'], true));
        $page_title = "Rim Repair";
        $car_id = base64_decode($collisionserviceId[0]);
        $vinid = base64_encode($car_id);
        $service_id = $collisionserviceId[1];
       // $serviceData = PaintProtectionFilm::where('car_id', $car_id)->where('service_id', $collisionserviceId[1])->where('user_id', auth()->user()->id)->first();
        $shopsetting = new ShopSettingController;
        $VInGet = $shopsetting->FetchgetVinList($tab);
        return view('shop-settings.partials.shop_services.paint-protection-film-ppf', compact('vinid', 'VInGet', 'service_id', 'page_title'));
    }
}
