@extends('layout.default')
<?php

use App\Http\Controllers\CommonController; ?>
@section('content')
<link href="{{ asset('/assets/css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/css/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="{{ asset('/assets/css/web_service.css') }}" rel="stylesheet" type="text/css" />
<main class="page-wrapper">
   <div class="container">
      @include('cars.partials.top-tab')
      <section class="add-car page">
         <div id="imageSlider">
            <div id="prev">
               <img src="{{ asset('/assets/images/caret-prev.png') }}">
            </div>
            <div id="next">
               <img src="{{ asset('/assets/images/caret-next.png') }}">
            </div>
            <?php
            $servicenamenew = "";
            $arr = array();

            $last_key = "";
            if ($car_service_data) {
               if (!empty($car_service_data) || $car_service_data != null) {
                  $arr = $car_service_data;

                  $last_key = ($arr)[count($arr) - 1];

                  $servicename = App\Http\Controllers\CommonController::getServiceName($last_key);
                  $servicenamenew = $servicename['service_name'];
               }
            }

            $newarr = sort($arr);

            $dataService = array();
            if (!empty($CarData->shop_user->shop_services)) {
               $dataService = explode(',', $CarData->shop_user->shop_services);
            }
            $dataServiceDate = array();
            if (!empty($car->allservice_date)) {
               $dataServiceDate = explode(',', $car->allservice_date);
            }

            $chkarrlength = 0;

            ?>
            {{-- new code --}}
            <div id="sliderWrapper" class="sliderWrapper">
               <ul class="slider-container">
                  @if(count($carsShop)>0)
                  @foreach($shopAllServices as $carslide)
                  @if($carslide->service_id)
                  <?php

      if ($carslide->service_id == '1') {
         $id = $carslide->ac_id;
      }
      if ($carslide->service_id == '2') {
         $id = $carslide->break_id;
      }
      if ($carslide->service_id == '3') {
         $id = $carslide->battery_service_id;
      }
      if ($carslide->service_id == '4') {
         $id = $carslide->wash_id;
      }
      if ($carslide->service_id == '5') {
         $id = "";
      }
      if ($carslide->service_id == '6') {
         $id = $carslide->collision_id;
      }
      if ($carslide->service_id == '7') {
         $id = $carslide->conc_id;
      }
      if ($carslide->service_id == '8') {
         $id = $carslide->custom_build_body_id;
      }
      if ($carslide->service_id == '9') {
         $id = $carslide->dealer_ship_id;
      }
      if ($carslide->service_id == '10') {
         $id = $carslide->detailing_correction_id;
      }
      if ($carslide->service_id == '11') {
         $id = $carslide->electric_controls_id;
      }
      if ($carslide->service_id == '12') {
         $id = $carslide->engine_id;
      }
      if ($carslide->service_id == '13') {
         $id = $carslide->exhaust_id;
      }
      if ($carslide->service_id == '14') {
         $id = $carslide->fabrication_welding;
      }
      if ($carslide->service_id == '15') {
         $id = $carslide->frame_alignment_id;
      }
      if ($carslide->service_id == '16') {
         $id = $carslide->fuel_system_id;
      }
      if ($carslide->service_id == '17') {
         $id = $carslide->glass_id;
      }
      if ($carslide->service_id == '18') {
         $id = $carslide->lubrication_id;
      }
      if ($carslide->service_id == '19') {
         $id = $carslide->mechanical_id;
      }
      if ($carslide->service_id == '20') {
         $id = $carslide->nitrous_id;
      }
      if ($carslide->service_id == '22') {
         $id = $carslide->oil_id;
      }
      if ($carslide->service_id == '23') {
         $id = $carslide->paint_body_id;
      }
      if ($carslide->service_id == '24') {
         $id = $carslide->paint_protection_film_id;
      }
      if ($carslide->service_id == '25') {
         $id = $carslide->part_id;
      }
      if ($carslide->service_id == '26') {
         $id = $carslide->paintless_dent_repair_id;
      }
      if ($carslide->service_id == '27') {
         $id = $carslide->performance_dyno_tuning_id;
      }
      if ($carslide->service_id == '28') {
         $id = $carslide->powder_coating_id;
      }
      if ($carslide->service_id == '29') {
         $id = $carslide->race_track_id;
      }
      if ($carslide->service_id == '31') {
         $id = $carslide->rim_repair_id;
      }
      if ($carslide->service_id == '32') {
         $id = $carslide->suspension_id;
      }
      if ($carslide->service_id == '33') {
         $id = $carslide->specialty_other_id;
      }
      if ($carslide->service_id == '34') {
         $id = $carslide->tire_id;
      }
      if ($carslide->service_id == '35') {
         $id = $carslide->tint_id;
      }
      if ($carslide->service_id == '36') {
         $id = $carslide->transmission_id;
      }
      if ($carslide->service_id == '37') {
         $id = $carslide->vinyl_id;
      }
      ?>
                  <li>
                     <div class="shop-content-wrap view-shop-slider">

                        <div class="shop-logo">
                           <img src="{{asset('/assets/images/services/').'/'.$carslide['shop_service']['service_photo']}}">
                        </div></a>
                        <?php
                        $nextservice = $nextservice;
                        if (!empty($arr[$carslide->service_id + 1])) {
                           $nextservice = $arr[$carslide->service_id + 1];
                        }
                        ?>
                        @if(in_array($carslide->service_id ,$arr))
                        <a href="/car/viewservices/{{base64_encode($carslide->car_id.'%%%'.$carslide->service_id.'%%%'.$chkarrlength.'%%%'.$MyCar.'%%%'.$id)}}">



                           <ul class="shop-content">

                              <li>{{ucwords($carslide['shop_service']['service_name'])}}</li>
                              <li>{{ucwords($carslide['shop_user']['shop_name'])}}</li>
                              <li class="primary-red"> {{date("m/d/Y", strtotime($carslide['created_at']))}}</li>

                           </ul>
                        </a>
                        <?php $chkarrlength++; ?>
                        @else
                        <ul class="shop-content" style="cursor: not-allowed;">

                           <li style="color: #c1c1c1;">{{ucwords($carslide['shop_service']['service_name'])}}</li>
                           <li style="color: #c1c1c1;">None</li>
                        </ul>
                        @endif
                     </div>
                  </li>
                  @endif
                  @endforeach
                  @endif

               </ul>
            </div>
            {{-- end code --}}
          
   </div>
   <div class="content-cmn-wrap">
      <div class="row">
         <div class="col-12 col-md-6">
           @if($CarData->car_user->ownerHistory && $CarData->car_user->ownerHistory->owner_document)
                  <?php
                  $testdata = explode(',', $CarData->car_user->ownerHistory->owner_document);

                  ?>

                  <?php $chkextension = explode('.', $testdata[0]);
                  error_reporting(0); ?>
                  @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

                  @if($car->medias_picture && $car->medias_picture->filename)

                  @if($car->medias_picture->type == "image")

                  <img class="w-100" src="{{$car->medias_picture->filename}}">
                  @else
                  <video width="320" height="240" controls>
                     <source src="{{$car->medias_picture->filename}}" type="video/mp4">
                     <source src="{{$car->medias_picture->filename}}" type="video/ogg">
                     Your browser does not support the video tag.
                  </video>
                  @endif
                  @else
                  <img class="w-100" src="{{$testdata[0]}}">
                  @endif
                  @else
                  @if($car->medias_picture && $car->medias_picture->filename)

                  @if($car->medias_picture->type == "image")


                  <img class="w-100" src="{{$car->medias_picture->filename}}">
                  @else
                  <video width="320" height="240" controls>
                     <source src="{{$car->medias_picture->filename}}" type="video/mp4">
                     <source src="{{$car->medias_picture->filename}}" type="video/ogg">
                     Your browser does not support the video tag.
                  </video>
                  @endif
                  @else
                  <img class="w-100" src="{{ asset('/assets/images/image-empty-state.jpg') }}">
                  @endif
                  @endif

                  @else
                  @if($car->medias_picture && $car->medias_picture->filename)
                  @if($car->medias_picture->type == "image")
                  <img class="w-100" src="{{$car->medias_picture->filename}}">
                  @else
                  <video width="320" height="240" controls>
                     <source src="{{$car->medias_picture->filename}}" type="video/mp4">
                     <source src="{{$car->medias_picture->filename}}" type="video/ogg">
                     Your browser does not support the video tag.
                  </video>
                  @endif
                  @else
                  <img class="w-100" src="{{ asset('/assets/images/image-empty-state.jpg') }}">
                  @endif
                  @endif
            {{-- <img class="w-100" src="{{ asset('/assets/images/image-empty-state.jpg') }}"> --}}
         </div>
         <div class="col-12 col-md-6">
            <ul class="desc-wrap">
               <li class="cmn-serve-title primary-red">{{ $car->vin}}</li>
               <li class="cmn-serve-title">{{ $car->year ?? ''}}</li>
               <li class="cmn-serve-title">{{ $car->make}}</li>
               <li class="cmn-serve-title">{{ $car->model ?? ''}}</li>
               {{-- <li class="cmn-serve-title">Belize Blue</li> --}}
               <li class="cmn-serve-title">@if($car->milage){{ $car->milage ?? ''}} Milage @endif</li>
               <li class="cmn-serve-title">@if($car->color){{ $car->color ?? ''}} @endif</li>

            </ul>
         </div>
      </div>
   </div>

   <div class="row border-bb">
      <div class="col-6 col-md-6">
         <div class="product-desc services-details text-right">
            <p>Service:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="product-desc services-details">
            <?php
            $servicename = "";
            if (!($car_service_data) || $car_service_data != null) {
               $arr = $car_service_data;
               $last_key = ($arr)[count($arr) - 1];
               $servicename = App\Http\Controllers\CommonController::getServiceName($last_key);
            }


            ?>
            <p>{{ $latest_services['shop_service']['service_name']}}</p>

         </div>
      </div>
      <div class="col-6 col-md-6 mt-4">
         <div class="services-details text-right">
            <p>Serviced by:</p>
         </div>
      </div>
      <div class="col-6 col-md-6 mt-4">
         <div class="services-details">
            <p>{{ucwords($latest_services->shop_user->shop_name)}}</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Shop phone number:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{($latest_services->shop_user->contact_number)}}</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Shop Email:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{($latest_services->shop_user->email )}}</p>
         </div>
      </div>
      <div class="col-6 col-md-6 my-4">
         <div class="services-details text-right">
            <p>Date of service:</p>
         </div>
      </div>
      <div class="col-6 col-md-6 my-4">
         <div class="services-details">
            <p>{{date("m/d/Y", strtotime($latest_services->created_at) )  }}</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="primary-red">Upcoming recommended service:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-red">None</p>
         </div>
      </div>
   </div>
   {{-- ac service --}}
   @if($serviceId==1)
   @if($CarData)
   <div class="row border-bb">
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold">STATIC PRESSURE</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         &nbsp;
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Low Side Check</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->static_pressure_low)}} @if(!empty($CarData->static_pressure_low))PSI @endif</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>High Side Check</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p> {{ucwords($CarData->static_pressure_high)}} @if(!empty($CarData->static_pressure_high))PSI @endif</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold mt-4">DYNAMIC PRESSURE</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         &nbsp;
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Low Side Check</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p> {{ucwords($CarData->dynamic_pressure_low)}} @if(!empty($CarData->dynamic_pressure_low))PSI @endif</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>High Side Check</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->dynamic_pressure_high)}} @if(!empty($CarData->dynamic_pressure_high))PSI @endif</p>
         </div>
      </div>
   </div>
   <div class="row border-bb">
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold">CONDENSOR:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->condensor=='good')green @elseif($CarData->condensor=='bad')red  @elseif($CarData->condensor=='replaced')yellow @else blue @endif"> @if($CarData->condensor=='good')Checks @elseif($CarData->condensor=='bad') @elseif($CarData->condensor=='replaced')Was @elseif($CarData->condensor=='Upgraded')Was @else N/A @endif {{ucwords($CarData->condensor)}}</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold">COMPRESSOR:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->compressor=='good')green @elseif($CarData->compressor=='bad')red  @elseif($CarData->compressor=='replaced')yellow @else blue @endif">@if($CarData->compressor=='good')Checks @elseif($CarData->compressor=='bad') @elseif($CarData->compressor=='replaced')Was @elseif($CarData->compressor=='Upgraded')Was @else N/A @endif {{ucwords($CarData->compressor)}}</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold">EVAPORATOR CORE:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->evaporator_core=='good')green @elseif($CarData->evaporator_core=='bad')red  @elseif($CarData->evaporator_core=='replaced')yellow @else blue @endif">@if($CarData->evaporator_core=='good')Checks @elseif($CarData->evaporator_core=='bad') @elseif($CarData->evaporator_core=='replaced')Was @elseif($CarData->evaporator_core=='Upgraded') Was @else N/A @endif {{ucwords($CarData->evaporator_core)}}</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold">RECEIVER DRYER:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->receiver_dryer=='good')green @elseif($CarData->receiver_dryer=='bad')red  @elseif($CarData->receiver_dryer=='replaced')yellow @else blue @endif">@if($CarData->receiver_dryer=='good')Checks @elseif($CarData->receiver_dryer=='bad') @elseif($CarData->receiver_dryer=='replaced')Was @elseif($CarData->receiver_dryer=='Upgraded')Was @else N/A @endif {{ucwords($CarData->receiver_dryer)}}</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold">A/C LINES:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">

            <p class="primary-@if($CarData->ac_line=='good')green @elseif($CarData->ac_line=='bad')red  @elseif($CarData->ac_line=='replaced')yellow @else blue @endif">@if($CarData->ac_line=='good')Checks @elseif($CarData->ac_line=='bad') @elseif($CarData->ac_line=='replaced')Was @elseif($CarData->ac_line=='Upgraded')Was @else N/A @endif {{ucwords($CarData->ac_line)}}</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold">PRESSURE SWITCHES:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->pressure_switches=='good')green @elseif($CarData->pressure_switches=='bad')red  @elseif($CarData->pressure_switches=='replaced')yellow @else blue @endif">@if($CarData->pressure_switches=='good')Checks @elseif($CarData->pressure_switches=='bad') @elseif($CarData->pressure_switches=='replaced')Was @elseif($CarData->pressure_switches=='Upgraded')Was @else N/A @endif {{ucwords($CarData->pressure_switches)}}</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold">ORIFICE TUBE:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->office_tube=='good')green @elseif($CarData->office_tube=='bad')red  @elseif($CarData->office_tube=='replaced')yellow @else blue @endif">@if($CarData->office_tube=='good')Checks @elseif($CarData->office_tube=='bad') @elseif($CarData->office_tube=='replaced')Was @elseif($CarData->office_tube=='Upgraded')Was @else N/A @endif {{ucwords($CarData->office_tube)}}</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold">EXPANSION VALVE:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->expansion_valve=='good')green @elseif($CarData->expansion_valve=='bad')red  @elseif($CarData->expansion_valve=='replaced')yellow @else blue @endif">@if($CarData->expansion_valve=='good')Checks @elseif($CarData->expansion_valve=='bad') @elseif($CarData->expansion_valve=='replaced')Was @elseif($CarData->expansion_valve=='Upgraded')Was @else N/A @endif {{ucwords($CarData->expansion_valve)}}</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold">SEALS:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->seals=='good')green @elseif($CarData->seals=='bad')red  @elseif($CarData->seals=='replaced')yellow @else blue @endif">@if($CarData->seals=='good')Checks @elseif($CarData->seals=='bad') @elseif($CarData->seals=='replaced')Was @elseif($CarData->seals=='Upgraded')Was @else N/A @endif {{ucwords($CarData->seals)}}</p>
         </div>
      </div>
   </div>

   <div class="service-desc-content border-bb">
      <h4>SHOP NOTES / DETAILS</h4>
      <p>
         {{($CarData->ac_notes)}}
      </p>
   </div>
   <div class="service-desc-content border-bb">
      <h4>PHOTOS</h4>
      <div class="cmn-slider-wrap carslider ">
         @if($CarData && $CarData->documents)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->documents) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>

            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap carslider">
         @if($CarData && $CarData->documents)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->documents) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach

      </div>
      @endif
   </div>
   </div>
   @endif
   @endif
   {{-- end ac service --}}
   {{-- Brake Service  --}}
   @if($serviceId==2)
   @if($CarData)
   <div class="row border-bb">
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold">DRIVER FRONT BRAKES:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->driver_front_break=='Good')green @elseif($CarData->driver_front_break=='Bad')red  @elseif($CarData->driver_front_break=='Replaced')yellow @else blue @endif">@if($CarData->driver_front_break=='Good')Checks @elseif($CarData->driver_front_break=='Bad') @elseif($CarData->driver_front_break=='Replaced')Was @elseif($CarData->driver_front_break=='Upgraded')Was @else N/A @endif{{ucwords($CarData->driver_front_break)}}</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold"> DRIVER REAR BRAKES:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->driver_rear_break=='Good')green @elseif($CarData->driver_rear_break=='Bad')red  @elseif($CarData->driver_rear_break=='Replaced')yellow @else blue @endif">@if($CarData->driver_rear_break=='Good')Checks @elseif($CarData->driver_rear_break=='Bad') @elseif($CarData->driver_rear_break=='Replaced')Was @elseif($CarData->driver_rear_break=='Upgraded')Was @else N/A @endif{{ucwords($CarData->driver_rear_break)}}</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold"> DRIVER FRONT ROTORS:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->driver_front_rotors=='Good')green @elseif($CarData->driver_front_rotors=='Bad')red  @elseif($CarData->driver_front_rotors=='Replaced')yellow @else blue @endif">@if($CarData->driver_front_rotors=='Good')Checks @elseif($CarData->driver_front_rotors=='Bad') @elseif($CarData->driver_front_rotors=='Replaced')Was @elseif($CarData->driver_front_rotors=='Upgraded')Was @else N/A @endif{{ucwords($CarData->driver_front_rotors)}}</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold">DRIVER REAR ROTORS:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->driver_rear_rotors=='Good')green @elseif($CarData->driver_rear_rotors=='Bad')red  @elseif($CarData->driver_rear_rotors=='Replaced')yellow @else blue @endif">@if($CarData->driver_rear_rotors=='good')Checks @elseif($CarData->driver_rear_rotors=='Bad') @elseif($CarData->driver_rear_rotors=='Replaced')Was @elseif($CarData->driver_rear_rotors=='Upgraded')Was @else N/A @endif{{ucwords($CarData->driver_rear_rotors)}}</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold">PASSENGER FRONT BRAKES:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">

            <p class="primary-@if($CarData->passenger_front_brakes=='Good')green @elseif($CarData->passenger_front_brakes=='Bad')red  @elseif($CarData->passenger_front_brakes=='Replaced')yellow @else blue @endif">@if($CarData->passenger_front_brakes=='Good')Checks @elseif($CarData->passenger_front_brakes=='Bad') @elseif($CarData->passenger_front_brakes=='Replaced')Was @elseif($CarData->passenger_front_brakes=='Upgraded')Was @else N/A @endif{{ucwords($CarData->passenger_front_brakes)}}</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold">PASSENTER REAR BRAKES:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->passenter_rear_brakes=='Good')green @elseif($CarData->passenter_rear_brakes=='Bad')red  @elseif($CarData->passenter_rear_brakes=='Replaced')yellow @else blue @endif">@if($CarData->passenter_rear_brakes=='Good')Checks @elseif($CarData->passenter_rear_brakes=='Bad') @elseif($CarData->passenter_rear_brakes=='Replaced')Was @elseif($CarData->passenter_rear_brakes=='Upgraded')Was @else N/A @endif{{ucwords($CarData->passenter_rear_brakes)}}</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold"> PASSENGER FRONT ROTORS:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->passenger_front_rotors=='Good')green @elseif($CarData->passenger_front_rotors=='Bad')red  @elseif($CarData->passenger_front_rotors=='Replaced')yellow @else blue @endif">@if($CarData->passenger_front_rotors=='Good')Checks @elseif($CarData->passenger_front_rotors=='Bad') @elseif($CarData->passenger_front_rotors=='Replaced')Was @elseif($CarData->passenger_front_rotors=='Upgraded')Was @else N/A @endif{{ucwords($CarData->passenger_front_rotors)}}</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold">PASSENGER REAR ROTORS:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->passenger_rear_rotors=='Good')green @elseif($CarData->passenger_rear_rotors=='Bad')red  @elseif($CarData->passenger_rear_rotors=='Replaced')yellow @else blue @endif">@if($CarData->passenger_rear_rotors=='Good')Checks @elseif($CarData->passenger_rear_rotors=='Bad') @elseif($CarData->passenger_rear_rotors=='Replaced')Was @elseif($CarData->passenger_rear_rotors=='Upgraded')Was @else N/A @endif{{ucwords($CarData->passenger_rear_rotors)}}</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold"> DRIVER FRONT CALIPERS:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->driver_front_calipers=='Good')green @elseif($CarData->driver_front_calipers=='Bad')red  @elseif($CarData->driver_front_calipers=='Replaced')yellow @else blue @endif">@if($CarData->driver_front_calipers=='Good')Checks @elseif($CarData->driver_front_calipers=='Bad') @elseif($CarData->driver_front_calipers=='Replaced')Was @elseif($CarData->driver_front_calipers=='Upgarded')Was @else N/A @endif{{ucwords($CarData->driver_front_calipers)}}</p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold"> DRIVER REAR CALIPERS:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->driver_rear_calipers=='Good')green @elseif($CarData->driver_rear_calipers=='Bad')red  @elseif($CarData->driver_rear_calipers=='Replaced')yellow @else blue @endif">@if($CarData->driver_rear_calipers=='Good')Checks @elseif($CarData->driver_rear_calipers=='Bad') @elseif($CarData->driver_rear_calipers=='Replaced')Was @elseif($CarData->driver_rear_calipers=='Upgraded')Was @else N/A @endif{{ucwords($CarData->driver_rear_calipers)}}</p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold"> PASSENGER FRONT CALIPERS:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->passenger_front_calipers=='Good')green @elseif($CarData->passenger_front_calipers=='Bad')red  @elseif($CarData->passenger_front_calipers=='Replaced')yellow @else blue @endif">@if($CarData->passenger_front_calipers=='Good')Checks @elseif($CarData->passenger_front_calipers=='Bad') @elseif($CarData->passenger_front_calipers=='Replaced')Was @elseif($CarData->passenger_front_calipers=='Upgraded')Was @else N/A @endif{{ucwords($CarData->passenger_front_calipers)}}</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold"> PASSENGER REAR CALIPERS:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->passenger_rear_calipers=='Good')green @elseif($CarData->passenger_rear_calipers=='Bad')red  @elseif($CarData->passenger_rear_calipers=='Replaced')yellow @else blue @endif">@if($CarData->passenger_rear_calipers=='Good')Checks @elseif($CarData->passenger_rear_calipers=='Bad') @elseif($CarData->passenger_rear_calipers=='Replaced')Was @elseif($CarData->passenger_rear_calipers=='Upgraded')Was @else N/A @endif{{ucwords($CarData->passenger_rear_calipers)}}</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold">BRAKE HOSES:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->brake_hoses=='Good')green @elseif($CarData->brake_hoses=='Bad')red  @elseif($CarData->brake_hoses=='Replaced')yellow @else blue @endif">@if($CarData->brake_hoses=='Good')Checks @elseif($CarData->brake_hoses=='Bad') @elseif($CarData->brake_hoses=='Replaced')Was @elseif($CarData->brake_hoses=='Upgraded')Was @else N/A @endif{{ucwords($CarData->brake_hoses)}}</p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold"> BRAKE LINES:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->brake_lines=='Good')green @elseif($CarData->brake_lines=='Bad')red  @elseif($CarData->brake_lines=='Replaced')yellow @else blue @endif">@if($CarData->brake_lines=='Good')Checks @elseif($CarData->brake_lines=='Bad') @elseif($CarData->brake_lines=='Replaced')Was @elseif($CarData->brake_lines=='Upgraded')Was @else N/A @endif{{ucwords($CarData->brake_lines)}}</p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold">WHEEL CYLINDER:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->wheel_cylinder=='Good')green @elseif($CarData->wheel_cylinder=='Bad')red  @elseif($CarData->wheel_cylinder=='Replaced')yellow @else blue @endif">@if($CarData->wheel_cylinder=='Good')Checks @elseif($CarData->wheel_cylinder=='Bad') @elseif($CarData->wheel_cylinder=='Replaced')Was @elseif($CarData->wheel_cylinder=='Upgraded')Was @else N/A @endif{{ucwords($CarData->wheel_cylinder)}}</p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold"> MASTER CYLINDER:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->master_cylinder=='Good')green @elseif($CarData->master_cylinder=='Bad')red  @elseif($CarData->master_cylinder=='Replaced')yellow @else blue @endif">@if($CarData->master_cylinder=='Good')Checks @elseif($CarData->master_cylinder=='Bad') @elseif($CarData->master_cylinder=='Replaced')Was @elseif($CarData->master_cylinder=='Upgraded')Was @else N/A @endif{{ucwords($CarData->master_cylinder)}}</p>
         </div>
      </div>



   </div>


   <div class="service-desc-content border-bb">
      <h4>PHOTOS</h4>
      <div class="cmn-slider-wrap carslider">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap carslider">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach

      </div>
      @endif
   </div>
   </div>
   @endif
   @endif
   {{-- end Brake Service--}}
   {{-- car handwash service --}}
   @if($serviceId==4)
   @if($CarData)
   <div class="row border-bb">
      <h3>Handwash Services</h3>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Services : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->service_name)}} </p>
         </div>
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>SHOP NOTES / DETAILS</h4>
      <p>
         {{($CarData->notes)}}
      </p>
   </div>
   <div class="service-desc-content border-bb">
      <h4>PHOTOS</h4>
      <div class="cmn-slider-wrap carslider">
         @if($CarData && $CarData->documents)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->documents) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap carslider">
         @if($CarData && $CarData->documents)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->documents) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach

      </div>
      @endif
   </div>
   </div>
   @endif
   @endif
   {{-- end car handwash service --}}
   {{-- car handwash self service --}}
   @if($serviceId==4)
   @if($CarData->carselfHistory)
   <div class="row border-bb">
      <h3>Touchless Services</h3>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Services : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->carselfHistory->service_name)}} </p>
         </div>
      </div>





   </div>
   </div>


   <div class="service-desc-content border-bb">
      <h4>SHOP NOTES / DETAILS</h4>
      <p>
         {{($CarData->carselfHistory->notes)}}
      </p>
   </div>
   <div class="service-desc-content border-bb">
      <h4>PHOTOS</h4>
      <div class="cmn-slider-wrap carslider">
         @if($CarData->carselfHistory && $CarData->carselfHistory->documents)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->carselfHistory->documents) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap carslider">
         @if($CarData->carselfHistory && $CarData->carselfHistory->documents)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->carselfHistory->documents) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach

      </div>
      @endif
   </div>
   </div>
   @endif
   @endif
   {{-- end car handwash self service --}}
   {{-- car handwash tunnel service --}}
   @if($serviceId==4)
   @if($CarData->cartunnelHistory)
   <div class="row border-bb">
      <h3>Tunnel Services</h3>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Services : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->cartunnelHistory->service_name)}} </p>
         </div>
      </div>





   </div>
   </div>


   <div class="service-desc-content border-bb">
      <h4>SHOP NOTES / DETAILS</h4>
      <p>
         {{($CarData->cartunnelHistory->notes)}}
      </p>
   </div>
   <div class="service-desc-content border-bb">
      <h4>PHOTOS</h4>
      <div class="cmn-slider-wrap carslider">
         @if($CarData->cartunnelHistory && $CarData->cartunnelHistory->documents)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->cartunnelHistory->documents) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap carslider">
         @if($CarData->cartunnelHistory && $CarData->cartunnelHistory->documents)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->cartunnelHistory->documents) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach

      </div>
      @endif
   </div>
   </div>
   @endif
   @endif
   {{-- end car handwash self service --}}
   {{-- car handwash tunnel service --}}
   @if($serviceId==6)
   @if($CarData)
   <div class="row border-bb">



   </div>
   </div>


   <div class="service-desc-content border-bb">
      <h4>SHOP NOTES / DETAILS</h4>
      <p>
         {{($CarData->collision_notes)}}
      </p>
   </div>
   <div class="service-desc-content border-bb">
      <h4>Before Image</h4>
      <div class="cmn-slider-wrap carslider">
         @if($CarData && $CarData->before_image)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->before_image) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>Before DOCUMENTS</h4>
      <div class="cmn-slider-wrap carslider">
         @if($CarData && $CarData->before_image)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->before_image) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach

      </div>
      @endif
   </div>
   </div>

   {{-- estimate --}}
   <div class="service-desc-content border-bb">
      <h4>Estimate Image</h4>
      <div class="cmn-slider-wrap carslider">
         @if($CarData && $CarData->document_of_estimate)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->document_of_estimate) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>Before DOCUMENTS</h4>
      <div class="cmn-slider-wrap carslider">
         @if($CarData && $CarData->document_of_estimate)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->document_of_estimate) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach

      </div>
      @endif
   </div>
   </div>
   {{-- end estimate --}}

   {{-- Repair --}}
   <div class="service-desc-content border-bb">
      <h4>Repair Image</h4>
      <div class="cmn-slider-wrap carslider">
         @if($CarData && $CarData->document_of_repair)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->document_of_repair) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>Repair DOCUMENTS</h4>
      <div class="cmn-slider-wrap carslider">
         @if($CarData && $CarData->document_of_repair)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->document_of_repair) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach

      </div>
      @endif
   </div>
   </div>
   {{-- end estimate --}}

   {{-- After Image --}}
   <div class="service-desc-content border-bb">
      <h4>After Image</h4>
      <div class="cmn-slider-wrap carslider">
         @if($CarData && $CarData->after_image)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->after_image) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>After Repair DOCUMENTS</h4>
      <div class="cmn-slider-wrap carslider">
         @if($CarData && $CarData->after_image)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->after_image) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach

      </div>
      @endif
   </div>
   </div>
   {{-- end estimate --}}
   @endif
   @endif
   {{-- end car handwash self service --}}
   {{-- car  tunnel service --}}
   @if($serviceId==7)
   @if($CarData)
   <div class="row border-bb">

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>TRIP BEGIN : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->trip_begin)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>TRIP END : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->trip_end)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>TRIP END : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->trip_end)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>TRIP Details : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->trip_details)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Client : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->client)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Incident Condition : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->incident_condition)}} </p>
         </div>
      </div>

   </div>
   </div>


   <div class="service-desc-content border-bb">
      <h4>SHOP NOTES / DETAILS</h4>
      <p>
         {{($CarData->notesdata)}}
      </p>
   </div>
   <div class="service-desc-content border-bb">
      <h4>PHOTOS</h4>
      <div class="cmn-slider-wrap carslider">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap carslider">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach

      </div>
      @endif
   </div>
   </div>
   @endif
   @endif
   {{-- end car tunnel service --}}
   {{-- car engine spicality service --}}
   @if($serviceId==12)
   @if($CarData)
   <div class="row border-bb">

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Engine Block : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->engine_block=='Good')green @elseif($CarData->engine_block=='Leaks')red  @elseif($CarData->engine_block=='Repaired')green @else  primary-yellow @endif">@if($CarData->engine_block=='Good')Checks @elseif($CarData->engine_block=='Leaks') @elseif($CarData->engine_block=='Repaired')Was @elseif($CarData->engine_block=='Replaced')Was @else N/A @endif{{ucwords($CarData->engine_block)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Engine Pistons: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->engine_pistons=='Good')green @elseif($CarData->engine_pistons=='Leaks')red  @elseif($CarData->engine_pistons=='Repaired')green @else  primary-yellow @endif">@if($CarData->engine_pistons=='Good')Checks @elseif($CarData->engine_pistons=='Leaks') @elseif($CarData->engine_pistons=='Repaired')Was @elseif($CarData->engine_pistons=='Replaced')Was @else N/A @endif{{ucwords($CarData->engine_pistons)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Engine Rods : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->engine_rods=='Good')green @elseif($CarData->engine_rods=='Leaks')red  @elseif($CarData->engine_rods=='Repaired')green @else  primary-yellow @endif">@if($CarData->engine_rods=='Good')Checks @elseif($CarData->engine_rods=='Leaks') @elseif($CarData->engine_rods=='Repaired')Was @elseif($CarData->engine_rods=='Replaced')Was @else N/A @endif{{ucwords($CarData->engine_rods)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Engine Crankshaft : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->engine_crankshaft=='Good')green @elseif($CarData->engine_crankshaft=='Leaks')red  @elseif($CarData->engine_crankshaft=='Repaired')green @else primary-yellow @endif">@if($CarData->engine_crankshaft=='Good')Checks @elseif($CarData->engine_crankshaft=='Leaks') @elseif($CarData->engine_crankshaft=='Repaired')Was @elseif($CarData->engine_crankshaft=='Replaced')Was @else N/A @endif{{ucwords($CarData->engine_crankshaft)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Engine Main Bearings : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->engine_main_bearings=='Good')green @elseif($CarData->engine_main_bearings=='Leaks')red  @elseif($CarData->engine_main_bearings=='Repaired')green @else primary-yellow @endif">@if($CarData->engine_main_bearings=='Good')Checks @elseif($CarData->engine_main_bearings=='Leaks') @elseif($CarData->engine_main_bearings=='Repaired')Was @elseif($CarData->engine_main_bearings=='Replaced')Was @else N/A @endif{{ucwords($CarData->engine_main_bearings)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Engine Rod Bearing: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->engine_rod_bearing=='Good')green @elseif($CarData->engine_rod_bearing=='Leaks')red  @elseif($CarData->engine_rod_bearing=='Repaired')green @else primary-yellow @endif">@if($CarData->engine_rod_bearing=='Good')Checks @elseif($CarData->engine_rod_bearing=='Leaks') @elseif($CarData->engine_rod_bearing=='Repaired')Was @elseif($CarData->engine_rod_bearing=='Replaced')Was @else N/A @endif{{ucwords($CarData->engine_rod_bearing)}} </p>

         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Engine Cam Bearing: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->engine_cam_bearing=='Good')green @elseif($CarData->engine_cam_bearing=='Leaks')red  @elseif($CarData->engine_cam_bearing=='Repaired')green @else primary-yellow @endif">@if($CarData->engine_cam_bearing=='Good')Checks @elseif($CarData->engine_cam_bearing=='Leaks') @elseif($CarData->engine_cam_bearing=='Repaired')Was @elseif($CarData->engine_cam_bearing=='Replaced')Was @else N/A @endif{{ucwords($CarData->engine_cam_bearing)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Engine Piston Rings: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->engine_piston_rings=='Good')green @elseif($CarData->engine_piston_rings=='Leaks')red  @elseif($CarData->engine_piston_rings=='Repaired')green @else primary-yellow @endif">@if($CarData->engine_piston_rings=='Good')Checks @elseif($CarData->engine_piston_rings=='Leaks') @elseif($CarData->engine_piston_rings=='Repaired')Was @elseif($CarData->engine_piston_rings=='Replaced')Was @else N/A @endif{{ucwords($CarData->engine_piston_rings)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Engine Heads: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->engine_heads=='Good')green @elseif($CarData->engine_heads=='Leaks')red  @elseif($CarData->engine_heads=='Repaired')green @else primary-yellow @endif">@if($CarData->engine_heads=='Good')Checks @elseif($CarData->engine_heads=='Leaks') @elseif($CarData->engine_heads=='Repaired')Was @elseif($CarData->engine_heads=='Replaced')Was @else N/A @endif{{ucwords($CarData->engine_heads)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Engine Oil Pan: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->engine_oil_pan=='Good')green @elseif($CarData->engine_oil_pan=='Leaks')red  @elseif($CarData->engine_oil_pan=='Repaired')green @else primary-yellow @endif">@if($CarData->engine_oil_pan=='Good')Checks @elseif($CarData->engine_oil_pan=='Leaks') @elseif($CarData->engine_oil_pan=='Repaired')Was @elseif($CarData->engine_oil_pan=='Replaced')Was @else N/A @endif{{ucwords($CarData->engine_oil_pan)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Engine Valves: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->engine_valves=='Good')green @elseif($CarData->engine_valves=='Leaks')red  @elseif($CarData->engine_valves=='Repaired')green @else primary-yellow @endif">@if($CarData->engine_valves=='Good')Checks @elseif($CarData->engine_valves=='Leaks') @elseif($CarData->engine_valves=='Repaired')Was @elseif($CarData->engine_valves=='Replaced')Was @else N/A @endif{{ucwords($CarData->engine_valves)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>engine Lifters: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->engine_lifters=='Good')green @elseif($CarData->engine_lifters=='Leaks')red  @elseif($CarData->engine_lifters=='Repaired')green @else primary-yellow @endif">@if($CarData->engine_lifters=='Good')Checks @elseif($CarData->engine_lifters=='Leaks') @elseif($CarData->engine_lifters=='Repaired')Was @elseif($CarData->engine_lifters=='Replaced')Was @else N/A @endif{{ucwords($CarData->engine_lifters)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Engine Exhaust Manifold: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->engine_exhaust_manifold=='Good')green @elseif($CarData->engine_exhaust_manifold=='Leaks')red  @elseif($CarData->engine_exhaust_manifold=='Repaired')green @else primary-yellow @endif">@if($CarData->engine_exhaust_manifold=='Good')Checks @elseif($CarData->engine_exhaust_manifold=='Leaks') @elseif($CarData->engine_exhaust_manifold=='Repaired')Was @elseif($CarData->engine_exhaust_manifold=='Replaced')Was @else N/A @endif{{ucwords($CarData->engine_exhaust_manifold)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Engine Intake Manifold: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->engine_intake_manifold=='Good')green @elseif($CarData->engine_intake_manifold=='Leaks')red  @elseif($CarData->engine_intake_manifold=='Repaired')green @else primary-yellow @endif">@if($CarData->engine_intake_manifold=='Good')Checks @elseif($CarData->engine_intake_manifold=='Leaks') @elseif($CarData->engine_intake_manifold=='Repaired')Was @elseif($CarData->engine_intake_manifold=='Replaced')Was @else N/A @endif{{ucwords($CarData->engine_intake_manifold)}} </p>

         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Engine Timing: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->engine_timing=='Good')green @elseif($CarData->engine_timing=='Leaks')red  @elseif($CarData->engine_timing=='Repaired')green @else primary-yellow @endif">@if($CarData->engine_timing=='Good')Checks @elseif($CarData->engine_timing=='Leaks') @elseif($CarData->engine_timing=='Repaired')Was @elseif($CarData->engine_timing=='Replaced')Was @else N/A @endif{{ucwords($CarData->engine_timing)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Engine Services: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">

            <p>{{ucwords($CarData->engine_services)}} </p>
         </div>
      </div>



   </div>
   </div>


   <div class="service-desc-content border-bb">
      <h4>SHOP NOTES / DETAILS</h4>
      <p>
         {{($CarData->issue_diagnosis)}}
      </p>
   </div>
   <div class="service-desc-content border-bb">
      <h4>PHOTOS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach

      </div>
      @endif
   </div>
   </div>
   @endif
   @endif
   {{-- end engine spicality service --}}
   {{-- exhaust service --}}
   @if($serviceId==13)
   @if($CarData)
   <div class="row border-bb">

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p> MANIFOLD (S):</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->exhaust_manifold=='Good')green @elseif($CarData->exhaust_manifold=='Bad')red  @elseif($CarData->exhaust_manifold=='Replaced')yellow @else blue @endif">@if($CarData->exhaust_manifold=='Good')Checks @elseif($CarData->exhaust_manifold=='Serviced') @elseif($CarData->exhaust_manifold=='Replaced')Was @elseif($CarData->exhaust_manifold=='Upgraded')Was @elseif($CarData->exhaust_manifold=='Fabricated') @else N/A @endif{{ucwords($CarData->exhaust_manifold)}}</p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>RESONATOR(S): </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->exhaust_resonator=='Good')green @elseif($CarData->exhaust_resonator=='Bad')red  @elseif($CarData->exhaust_resonator=='Replaced')yellow @else blue @endif">@if($CarData->exhaust_resonator=='Good')Checks @elseif($CarData->exhaust_resonator=='Serviced') @elseif($CarData->exhaust_resonator=='Replaced')Was @elseif($CarData->exhaust_resonator=='Upgraded')Was @elseif($CarData->exhaust_resonator=='Fabricated') @else N/A @endif{{ucwords($CarData->exhaust_resonator)}}</p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>MUFFLER(S): </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->exhaust_muffler=='Good')green @elseif($CarData->exhaust_muffler=='Bad')red  @elseif($CarData->exhaust_muffler=='Replaced')yellow @else blue @endif">@if($CarData->exhaust_muffler=='Good')Checks @elseif($CarData->exhaust_muffler=='Serviced') @elseif($CarData->exhaust_muffler=='Replaced')Was @elseif($CarData->exhaust_muffler=='Upgraded')Was @elseif($CarData->exhaust_muffler=='Fabricated') @else N/A @endif{{ucwords($CarData->exhaust_muffler)}}</p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p> PIPES / CLAMPS : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->exhaust_pipes=='Good')green @elseif($CarData->exhaust_pipes=='Bad')red  @elseif($CarData->exhaust_pipes=='Replaced')yellow @else blue @endif">@if($CarData->exhaust_pipes=='Good')Checks @elseif($CarData->exhaust_pipes=='Serviced') @elseif($CarData->exhaust_pipes=='Replaced')Was @elseif($CarData->exhaust_pipes=='Upgraded')Was @elseif($CarData->exhaust_pipes=='Fabricated') @else N/A @endif{{ucwords($CarData->exhaust_pipes)}}</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>ISOLATORS / GASKETS / LINKAGES : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->exhaust_isolators=='Good')green @elseif($CarData->exhaust_isolators=='Bad')red  @elseif($CarData->exhaust_isolators=='Replaced')yellow @else blue @endif">@if($CarData->exhaust_isolators=='Good')Checks @elseif($CarData->exhaust_isolators=='Serviced') @elseif($CarData->exhaust_isolators=='Replaced')Was @elseif($CarData->exhaust_isolators=='Upgraded')Was @elseif($CarData->exhaust_isolators=='Fabricated') @else N/A @endif{{ucwords($CarData->exhaust_isolators)}}</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>O2 SENSOR<small>(S)</small> : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->exhaust_o2sensor=='Good')green @elseif($CarData->exhaust_o2sensor=='Bad')red  @elseif($CarData->exhaust_o2sensor=='Replaced')yellow @else blue @endif">@if($CarData->exhaust_o2sensor=='Good')Checks @elseif($CarData->exhaust_o2sensor=='Serviced') @elseif($CarData->exhaust_o2sensor=='Replaced')Was @elseif($CarData->exhaust_o2sensor=='Upgraded')Was @elseif($CarData->exhaust_o2sensor=='Fabricated') @else N/A @endif{{ucwords($CarData->exhaust_o2sensor)}}</p>
         </div>
      </div>


   </div>



   <div class="service-desc-content border-bb">
      <h4>SHOP NOTES / DETAILS</h4>
      <p>
         {{($CarData->exhasut_notes)}}
      </p>
   </div>
   <div class="service-desc-content border-bb">
      <h4>PHOTOS</h4>
      <div class="cmn-slider-wrap carslider">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap carslider">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach

      </div>
      @endif
   </div>
   </div>
   @endif
   @endif
   {{-- end exhaust service --}}
   {{-- oil service --}}
   @if($serviceId==22)
   @if($CarData)
   <div class="row border-bb">

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p> MILEAGE:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->oil_mileage)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>OIL TYPE: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->oil_type)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>OIL BRAND: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->oil_brand)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>AMOUNT ADDED : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->oil_amount_added)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>FILTER TYPE: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->oil_filter_type)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>FILTER BRAND : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->oil_filter_brand)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>FLUID SERVICE : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->oil_fluid_service)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>OIL PAN REMOVED: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->oil_pan_removed)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>OIL PAN GASKET REPLACED : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->oil_pan_gaskit)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>OIL PAN NUT REPLACED : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->oil_pan_nut)}} </p>
         </div>
      </div>


   </div>
   </div>


   <div class="service-desc-content border-bb">
      <h4>PHOTOS</h4>
      <div class="cmn-slider-wrap carslider">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap carslider">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach

      </div>
      @endif
   </div>
   </div>
   @endif
   @endif
   {{-- brake service --}}
   @if($serviceId==3)
   @if($CarData)
   <div class="row border-bb">

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Service Type:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->service_type)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Batery TYPE: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->battery_type)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Battery BRAND: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->battery_brand)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p> Part Number : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->part_number)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Manufactured Date: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{date("m/d/Y", strtotime($CarData->manufactured_date) )}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Expiration Date: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{date("m/d/Y", strtotime($CarData->expiration_date) )  }} </p>
         </div>
      </div>

   </div>



   <div class="service-desc-content border-bb">
      <h4>PHOTOS</h4>
      <div class="cmn-slider-wrap carslider">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap carslider">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach
      </div>
      @endif
   </div>
   </div>
   @endif
   @endif
   {{-- end brake service --}}
   {{-- powder coating service --}}
   @if($serviceId==28)
   @if($CarData)
   <div class="row border-bb">

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Was Powder Coating:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->was_powder_coating)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Manufacturer By: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->manufacturer_by)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>PC System: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->pc_system)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p> Color Code: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->color_code)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p> Paint Color: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->paint_color)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Is Waranty: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->is_waranty)}} </p>
         </div>
      </div>

      @if($CarData->is_waranty=='Yes')
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Waranty Company: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->waranty_company)}} </p>
         </div>
      </div>
      @endif
      <div class="service-desc-content border-bb">
         <h4> NOTES / DETAILS</h4>
         <p>
            {{($CarData->powder_coating_note)}}
         </p>
      </div>
   </div>



   <div class="service-desc-content border-bb">
      <h4>PHOTOS</h4>
      <div class="cmn-slider-wrap carslider">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap carslider">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach
      </div>
      @endif
   </div>
   </div>
   @endif
   @endif
   {{-- end powder coating service --}}
   {{-- tire service --}}
   @if($serviceId==34)
   @if($CarData)
   <div class="row border-bb">
      {{-- Front side --}}
      @if($CarData->driver_front_psi !="")
      <h3 class="tireheader">Driver Front</h3>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>PSI:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->driver_front_psi)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Tread Depth::</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->driver_front_tread_depth)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Condition: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->driver_front_condition)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Brand: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->driver_front_brand)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Tier Size: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->driver_front_tire_size)}} </p>
         </div>
      </div>
      @endif
      {{-- end front size --}}
      {{-- Driver Rear side --}}
      @if($CarData->driver_rear_psi !="")
      <h3 class="tireheader">Driver Rear</h3>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>PSI:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->driver_rear_psi)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Tread Depath::</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->driver_rear_tread_depth)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Condition: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->driver_rear_condition)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Brand: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->driver_rear_brand)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Tier Size: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->driver_rear_tire_size)}} </p>
         </div>
      </div>
      @endif
      {{-- end Driver rear size --}}
      {{-- Passenger Front start side --}}
      @if($CarData->passenger_front_psi !="")
      <h3 class="tireheader">Passenger Front</h3>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>PSI:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->passenger_front_psi)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Tread Depath::</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->passenger_front_tread_depth)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Condition: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->passenger_front_condition)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Brand: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->passenger_front_brand)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Tier Size: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->passenger_front_tire_size)}} </p>
         </div>
      </div>
      @endif
      {{-- end Passenger Font --}}

      {{-- Passenger Rear start side --}}
      @if($CarData->passenger_rear_psi !="")
      <h3 class="tireheader">Passenger Rear</h3>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>PSI:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->passenger_rear_psi)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Tread Depath::</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->passenger_rear_tread_depth)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Condition: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->passenger_rear_condition)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Brand: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->passenger_rear_brand)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Tier Size: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->passenger_rear_tire_size)}} </p>
         </div>
      </div>
      @endif
      {{-- end Passenger Font --}}


   </div>



   <div class="service-desc-content border-bb">
      <h4>PHOTOS</h4>
      <div class="cmn-slider-wrap carslider">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap carslider">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach
      </div>
      @endif
   </div>
   </div>
   @endif
   @endif
   {{-- end tire service --}}
   {{-- parts service --}}
   @if($serviceId==25)
   @if($CarData)
   <div class="row border-bb">

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>System:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->system)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Diagnosis: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->diagnosis)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Part: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->part)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p> Manufacturer By: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->manufacturer_by)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Part Number: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->part_number)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Is Waranty: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->is_waranty)}} </p>
         </div>
      </div>

      @if($CarData->is_waranty=='Yes')
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Waranty Company: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->waranty_company)}} </p>
         </div>
      </div>
      @endif
      <div class="service-desc-content border-bb">
         <h4> NOTES / DETAILS</h4>
         <p>
            {{($CarData->part_note)}}
         </p>
      </div>
   </div>



   <div class="service-desc-content border-bb">
      <h4>PHOTOS</h4>
      <div class="cmn-slider-wrap carslider">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap carslider">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach
      </div>
      @endif
   </div>
   </div>
   @endif
   @endif
   {{-- end Parts service --}}
   {{-- electrical service --}}
   @if($serviceId==11)
   @if($CarData)
   <div class="row border-bb">

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>System:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->system)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Diagnosis: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->diagnosis)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Action: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->action)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p> Manufacturer By: </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->manufacturer_by)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Is Waranty: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->is_waranty)}} </p>
         </div>
      </div>

      @if($CarData->is_waranty=='Yes')
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Waranty Company: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->waranty_company)}} </p>
         </div>
      </div>
      @endif
      <div class="service-desc-content border-bb">
         <h4> NOTES / DETAILS</h4>
         <p>
            {{($CarData->electric_notes)}}
         </p>
      </div>
   </div>



   <div class="service-desc-content border-bb">
      <h4>PHOTOS</h4>
      <div class="cmn-slider-wrap carslider ">
         @if($CarData && $CarData->documents)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->documents) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap carslider ">
         @if($CarData && $CarData->documents)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->documents) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach
      </div>
      @endif
   </div>
   </div>
   @endif
   @endif
   {{-- end electrical service --}}
   {{-- transmission service --}}
   @if($serviceId==36)
   @if($CarData)
   <div class="row border-bb">

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Service Type:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->service_type)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Fluid Type: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->fluid_type)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Filter Brand: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->filter_brand)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Lubrication Pan Gasket Replaced: </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->lubrication_pan_gasket_replaced)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Lubrication Pan Replaced: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->lubrication_pan_replaced)}} </p>
         </div>
      </div>


      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Mileage: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->mileage)}} </p>
         </div>
      </div>

      <div class="service-desc-content border-bb">
         <h4> NOTES / DETAILS</h4>
         <p>
            {{($CarData->transmission_notes)}}
         </p>
      </div>
   </div>



   <div class="service-desc-content border-bb">
      <h4>PHOTOS</h4>
      <div class="cmn-slider-wrap carslider">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap carslider ">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach
      </div>
      @endif
   </div>
   </div>
   @endif
   @endif
   {{-- end tranmission service --}}
   {{-- tint service --}}
   @if($serviceId==35)
   @if($CarData)
   <div class="row border-bb">

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Service:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->tintservices)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Manufacture: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->tint_manufacture)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Type: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->tint_type)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Percentage: </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->percentage)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Oem Match: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->tint_oem_match)}} </p>
         </div>
      </div>


      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Oem Manufacture: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->oem_manufacture)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Is Waranty: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->tint_warranty)}} </p>
         </div>
      </div>

      @if($CarData->tint_warranty=='Yes')
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Waranty Company: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->warranty_company)}} </p>
         </div>
      </div>
      @endif

      <div class="service-desc-content border-bb">
         <h4> NOTES / DETAILS</h4>
         <p>
            {{($CarData->tint_notes)}}
         </p>
      </div>
   </div>



   <div class="service-desc-content border-bb">
      <h4>PHOTOS</h4>
      <div class="cmn-slider-wrap carslider ">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap carslider ">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach
      </div>
      @endif
   </div>
   </div>
   @endif
   @endif
   {{-- end tint service --}}

   {{-- glass service --}}
   @if($serviceId==17)
   @if($CarData)
   <div class="row border-bb">

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Windshield Services:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->windshield)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Brand Type: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->brand)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Driver Front Window Motor: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->driver_front_window_motor)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Driver Back Window Motor: </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->driver_back_window_motor)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Passenger Rear Window Motor: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->passenger_rear_window_motor)}} </p>
         </div>
      </div>


      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Back Hatch Window Motor: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->back_hatch_window_motor)}} </p>
         </div>
      </div>


      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Windshield Replaced: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->windshield_replaced)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Sensor Data: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->sensor_data)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Is Waranty: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->warranty)}} </p>
         </div>
      </div>

      @if($CarData->warranty=='Yes')
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Waranty Company: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->warranty_company)}} </p>
         </div>
      </div>
      @endif

      <div class="service-desc-content border-bb">
         <h4> NOTES / DETAILS</h4>
         <p>
            {{($CarData->glass_notes)}}
         </p>
      </div>
   </div>



   <div class="service-desc-content border-bb">
      <h4>PHOTOS</h4>
      <div class="cmn-slider-wrap carslider ">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap carslider ">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach
      </div>
      @endif
   </div>
   </div>
   @endif
   @endif
   {{-- end glass service --}}
   {{-- Rim track service --}}
   @if($serviceId==31)
   @if($CarData)
   <div class="row border-bb">

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Service Type:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->service_type)}} </p>
         </div>
      </div>


   </div>



   <div class="service-desc-content border-bb">
      <h4>BEFORE SERVICE PHOTOS</h4>
      <div class="cmn-slider-wrap carslider ">
         @if($CarData && $CarData->before_service_image)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->before_service_image) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap carslider ">
         @if($CarData && $CarData->before_service_image)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->before_service_image) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach
      </div>
      @endif
   </div>
   </div>

   {{-- AFTER PHOTO --}}
   <div class="service-desc-content border-bb">
      <h4>AFTER SERVICE PHOTOS</h4>
      <div class="cmn-slider-wrap carslider ">
         @if($CarData && $CarData->after_service_images)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->after_service_images) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap carslider ">
         @if($CarData && $CarData->after_service_images)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->after_service_images) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach
      </div>
      @endif
   </div>
   </div>
   {{-- END --}}
   @endif
   @endif
   {{-- end rim service --}}

   {{-- race and track --}}

   @if($serviceId==29)

   @if($CarData)
   <div class="row border-bb">

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Track Name:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->track_name)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Location: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->location)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Track Type: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->track_type)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>0-60 mph: </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->zero_to_sixty_mph)}} </p>
         </div>
      </div>
      @if($CarData->lap_one)
      @php
      $lapdata=json_decode($CarData->lap_one,true);

      @endphp
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Lap 1: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{$lapdata['lap_one_min'] ?? '0'}} min @if($lapdata['lap_one_sec']){{$lapdata['lap_one_sec'] }} @else 0 @endif Sec </p>
         </div>
      </div>
      @endif

      @if($CarData->lap_two)
      @php
      $lapdata2=json_decode($CarData->lap_two,true);

      @endphp
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Lap 2: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{$lapdata2['lap_two_min'] ?? '0'}} min @if($lapdata2['lap_two_sec']){{$lapdata2['lap_two_sec'] }} @else 0 @endif Sec </p>
            {{-- <p>{{ucwords($CarData->lap_two)}} </p> --}}
         </div>
      </div>
      @endif
      @if($CarData->lap_three)
      @php
      $lapdata3=json_decode($CarData->lap_three,true);

      @endphp
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Lap 3: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{$lapdata3['lap_three_min'] ?? '0'}} min @if($lapdata3['lap_three_sec']){{$lapdata3['lap_three_sec'] }} @else 0 @endif Sec </p>
            {{-- <p>{{ucwords($CarData->lap_three)}} </p> --}}
         </div>
      </div>
      @endif
      @if($CarData->lap_four)
      @php
      $lapdata4=json_decode($CarData->lap_four,true);

      @endphp
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Lap 4: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{$lapdata4['lap_four_min'] ?? '0'}} min @if($lapdata4['lap_four_sec']){{$lapdata4['lap_four_sec'] }} @else 0 @endif Sec </p>
            {{-- <p>{{ucwords($CarData->lap_four)}} </p> --}}
         </div>
      </div>
      @endif

      {{-- run 1 --}}
      @if($CarData->run_one)
      @php
      $run1=json_decode($CarData->run_one,true);
      @endphp
      <h3 class="tireheader">Run 1</h3>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Stripe Name : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{$run1['stripe_name_run_one'] ?? ''}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Location : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{$run1['stripe_location_run_one'] ?? ''}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Opponent : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{$run1['stripe_opponent_run_one'] ?? ''}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>R/T : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p> @if($run1['stripe_r_or_t_run_one']){{$run1['stripe_r_or_t_run_one'] }} @else 0 @endif Sec </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>60': </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p> @if($run1['stripe_sixty_degree_run_one']){{$run1['stripe_sixty_degree_run_one'] }} @else 0 @endif Sec </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>330: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p> @if($run1['stripe_three_hundred_degree_run_one']){{$run1['stripe_three_hundred_degree_run_one'] }} @else 0 @endif Sec </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>0-60 mph: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p> @if($run1['zero_to_sixty_mph_run_one']){{$run1['zero_to_sixty_mph_run_one'] }} @else 0 @endif Sec </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>1/8 mile: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p> @if($run1['one_or_eight_mile_run_one']){{$run1['one_or_eight_mile_run_one'] }} @else 0 @endif Sec </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>MPH: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p> @if($run1['mph_run_one']){{$run1['mph_run_one'] }} @else 0 @endif mph </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>1/4 mile: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p> @if($run1['one_or_four_mile_run_one']){{$run1['one_or_four_mile_run_one'] }} @else 0 @endif Sec </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Status: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p> {{$run1['status']}} </p>
         </div>
      </div>
      @endif
      {{-- end run1 --}}
      {{-- run 2 --}}
      @if($CarData->run_two)
      @php
      $run2=json_decode($CarData->run_two,true);
      @endphp
      <h3 class="tireheader">Run 2</h3>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Stripe Name : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{$run2['stripe_name_run_two'] ?? ''}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Location : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{$run2['stripe_location_run_two'] ?? ''}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Opponent : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{$run2['stripe_opponent_run_two'] ?? ''}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>R/T : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p> @if($run2['stripe_r_or_t_run_two']){{$run2['stripe_r_or_t_run_two'] }} @else 0 @endif Sec </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>60': </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p> @if($run2['stripe_sixty_degree_run_two']){{$run2['stripe_sixty_degree_run_two'] }} @else 0 @endif Sec </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>330: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p> @if($run2['stripe_three_hundred_degree_run_two']){{$run2['stripe_three_hundred_degree_run_two'] }} @else 0 @endif Sec </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>0-60 mph: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p> @if($run2['zero_to_sixty_mph_run_two']){{$run2['zero_to_sixty_mph_run_two'] }} @else 0 @endif Sec </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>1/8 mile: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p> @if($run2['one_or_eight_mile_run_two']){{$run2['one_or_eight_mile_run_two'] }} @else 0 @endif Sec </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>MPH: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p> @if($run2['mph_run_two']){{$run2['mph_run_two'] }} @else 0 @endif mph </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>1/4 mile: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p> @if($run2['one_or_four_mile_run_two']){{$run2['one_or_four_mile_run_two'] }} @else 0 @endif Sec </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Status: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p> {{$run2['status_two']}} </p>
         </div>
      </div>
      @endif
      {{-- end run2 --}}

      {{-- run 3 --}}
      @if($CarData->run_three)
      @php
      $run3=json_decode($CarData->run_three,true);
      @endphp
      <h3 class="tireheader">Run 3</h3>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Stripe Name : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{$run3['stripe_name_run_three'] ?? ''}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Location : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{$run3['stripe_location_run_three'] ?? ''}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Opponent : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{$run3['stripe_opponent_run_three'] ?? ''}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>R/T : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p> @if($run3['stripe_r_or_t_run_three']){{$run3['stripe_r_or_t_run_three'] }} @else 0 @endif Sec </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>60': </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p> @if($run3['stripe_sixty_degree_run_three']){{$run3['stripe_sixty_degree_run_three'] }} @else 0 @endif Sec </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>330: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p> @if($run3['stripe_three_hundred_degree_run_three']){{$run3['stripe_three_hundred_degree_run_three'] }} @else 0 @endif Sec </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>0-60 mph: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p> @if($run3['zero_to_sixty_mph_run_three']){{$run3['zero_to_sixty_mph_run_three'] }} @else 0 @endif Sec </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>1/8 mile: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p> @if($run3['one_or_eight_mile_run_three']){{$run3['one_or_eight_mile_run_three'] }} @else 0 @endif Sec </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>MPH: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p> @if($run3['mph_run_three']){{$run3['mph_run_three'] }} @else 0 @endif mph </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>1/4 mile: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p> @if($run3['one_or_four_mile_run_three']){{$run3['one_or_four_mile_run_three'] }} @else 0 @endif Sec </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Status: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p> {{$run3['status_three']}} </p>
         </div>
      </div>
      @endif
      {{-- end run3 --}}

   </div>



   <div class="service-desc-content border-bb">
      <h4>PHOTOS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach
      </div>
      @endif
   </div>
   </div>
   @endif
   @endif
   {{-- end race and track service --}}
   {{-- tint service --}}
   @if($serviceId==33)
   @if($CarData)
   <div class="row border-bb">

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>LIST SPECIALTY:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->list_of_specialty)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>DETAILS OF SERVICE:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->detail_of_services)}} </p>
         </div>
      </div>

   </div>



   <div class="service-desc-content border-bb">
      <h4>PHOTOS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach
      </div>
      @endif
   </div>
   </div>
   @endif
   @endif
   {{-- end tint service --}}
   {{-- Brake Service  --}}
   @if($serviceId==32)
   @if($CarData)
   <div class="row border-bb">
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold">Frame Bracket Mounts:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->frame_bracket_mounts=='Good')green @elseif($CarData->frame_bracket_mounts=='Bad')red  @elseif($CarData->frame_bracket_mounts=='Replaced')yellow @else primary-blue @endif">@if($CarData->frame_bracket_mounts=='Good')Checks @elseif($CarData->frame_bracket_mounts=='Bad') @elseif($CarData->frame_bracket_mounts=='Replaced')Was @elseif($CarData->frame_bracket_mounts=='Upgraded')Was @else N/A @endif{{ucwords($CarData->frame_bracket_mounts)}}</p>
         </div>
      </div>


      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold">Hanger Connections:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->hanger_connection=='Good')green @elseif($CarData->hanger_connection=='Bad')red  @elseif($CarData->hanger_connection=='Replaced')yellow @else primary-blue @endif">@if($CarData->hanger_connection=='Good')Checks @elseif($CarData->hanger_connection=='Bad') @elseif($CarData->hanger_connection=='Replaced')Was @elseif($CarData->hanger_connection=='Upgraded')Was @else N/A @endif{{ucwords($CarData->hanger_connection)}}</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold">Arm Bushings:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">

            <p class="primary-@if($CarData->arm_bushing=='Good')green @elseif($CarData->arm_bushing=='Bad')red  @elseif($CarData->arm_bushing=='Replaced')yellow @else primary-blue @endif">@if($CarData->arm_bushing=='Good')Checks @elseif($CarData->arm_bushing=='Bad') @elseif($CarData->arm_bushing=='Replaced')Was @elseif($CarData->arm_bushing=='Upgraded')Was @else N/A @endif{{ucwords($CarData->arm_bushing)}}</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold">Axles:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->axles=='Good')green @elseif($CarData->axles=='Bad')red  @elseif($CarData->axles=='Replaced')yellow @else primary-blue @endif">@if($CarData->axles=='Good')Checks @elseif($CarData->axles=='Bad') @elseif($CarData->axles=='Replaced')Was @elseif($CarData->axles=='Upgraded')Was @else N/A @endif{{ucwords($CarData->axles)}}</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold"> Axle Bushings & Bolts:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->axle_bushing_bolts=='Good')green @elseif($CarData->axle_bushing_bolts=='Bad')red  @elseif($CarData->axle_bushing_bolts=='Replaced')yellow @else primary-blue @endif">@if($CarData->axle_bushing_bolts=='Good')Checks @elseif($CarData->axle_bushing_bolts=='Bad') @elseif($CarData->axle_bushing_bolts=='Replaced')Was @elseif($CarData->axle_bushing_bolts=='Upgraded')Was @else N/A @endif {{ucwords($CarData->axle_bushing_bolts)}}</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold">Hub Bearings:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->hub_bearings=='Good')green @elseif($CarData->hub_bearings=='Bad')red  @elseif($CarData->hub_bearings=='Replaced')yellow @else primary-blue @endif">@if($CarData->hub_bearings=='Good')Checks @elseif($CarData->hub_bearings=='Bad') @elseif($CarData->hub_bearings=='Replaced')Was @elseif($CarData->hub_bearings=='Upgraded')Was @else N/A @endif {{ucwords($CarData->hub_bearings)}}</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold">King Pin Play:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->king_pin_play=='Good')green @elseif($CarData->king_pin_play=='Bad')red  @elseif($CarData->king_pin_play=='Replaced')yellow @else primary-blue @endif">@if($CarData->king_pin_play=='Good')Checks @elseif($CarData->king_pin_play=='Bad') @elseif($CarData->king_pin_play=='Replaced')Was @elseif($CarData->king_pin_play=='Upgraded')Was @else N/A @endif {{ucwords($CarData->king_pin_play)}}</p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold">Tie Rods & Castle Nuts:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->tie_roads_and_castle_nuts=='Good')green @elseif($CarData->tie_roads_and_castle_nuts=='Bad')red  @elseif($CarData->tie_roads_and_castle_nuts=='Replaced')yellow @else primary-blue @endif">@if($CarData->tie_roads_and_castle_nuts=='Good')Checks @elseif($CarData->tie_roads_and_castle_nuts=='Bad') @elseif($CarData->tie_roads_and_castle_nuts=='Replaced')Was @elseif($CarData->tie_roads_and_castle_nuts=='Upgraded')Was @else N/A @endif {{ucwords($CarData->tie_roads_and_castle_nuts)}}</p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold">Alignment:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->alignment=='Good')green @elseif($CarData->alignment=='Bad')red  @elseif($CarData->alignment=='Replaced')yellow @else primary-blue @endif">@if($CarData->alignment=='Good')Checks @elseif($CarData->alignment=='Bad') @elseif($CarData->alignment=='Replaced')Was @elseif($CarData->alignment=='Upgraded')Was @else N/A @endif {{ucwords($CarData->alignment)}}</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold"> Shocks:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->shocks=='Good')green @elseif($CarData->shocks=='Bad')red  @elseif($CarData->shocks=='Replaced')yellow @else primary-blue @endif">@if($CarData->shocks=='Good')Checks @elseif($CarData->shocks=='Bad') @elseif($CarData->shocks=='Replaced')Was @elseif($CarData->shocks=='Upgraded')Was @else N/A @endif {{ucwords($CarData->shocks)}}</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold">Air Compressor:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->air_compressor=='Good')green @elseif($CarData->air_compressor=='Bad')red  @elseif($CarData->air_compressor=='Replaced')yellow @else primary-blue @endif">@if($CarData->air_compressor=='Good')Checks @elseif($CarData->air_compressor=='Bad') @elseif($CarData->air_compressor=='Replaced')Was @elseif($CarData->air_compressor=='Upgraded')Was @else N/A @endif {{ucwords($CarData->air_compressor)}}</p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold">Air Bags:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->air_bag=='Good')green @elseif($CarData->air_bag=='Bad')red  @elseif($CarData->air_bag=='Replaced')yellow @else primary-blue @endif">@if($CarData->air_bag=='Good')Checks @elseif($CarData->air_bag=='Bad') @elseif($CarData->air_bag=='Replaced')Was @elseif($CarData->air_bag=='Upgraded')Was @else N/A @endif {{ucwords($CarData->air_bag)}}</p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p class="font-bold">Air Manifold:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p class="primary-@if($CarData->air_manifold=='Good')green @elseif($CarData->air_manifold=='Bad')red  @elseif($CarData->air_manifold=='Replaced')yellow @else primary-blue @endif">@if($CarData->air_manifold=='Good')Checks @elseif($CarData->air_manifold=='Bad') @elseif($CarData->air_manifold=='Replaced')Was @elseif($CarData->air_manifold=='Upgraded')Was @else N/A @endif {{ucwords($CarData->air_manifold)}}</p>
         </div>
      </div>




   </div>


   <div class="service-desc-content border-bb">
      <h4>PHOTOS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach

      </div>
      @endif
   </div>
   </div>
   @endif
   @endif
   {{-- end Brake Service--}}
   {{-- Mechnical service --}}

   @if($serviceId==19)
   @if($CarData)
   <div class="row border-bb">

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Service Type:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->service_type)}} </p>
         </div>
      </div>



   </div>



   <div class="service-desc-content border-bb">
      <h4>PHOTOS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach
      </div>
      @endif
   </div>
   </div>
   @endif
   @endif
   {{-- end mechical service --}}
   {{-- frame allignment service --}}

   @if($serviceId==15)
   <style>
      .chamber-float {
         display: flex;
         align-items: center;
         justify-content: space-between;
      }

      .chamber-wrap p {
         text-align: center;
         background: #efefef;
         padding: 2px 10px;
      }

      .chamber-float p {
         font-size: 1.5rem;
         background: #efefef;
         padding: 2px 10px;
      }

      .total-chamber {
         margin-top: 1rem
      }

      .colspnbtw {
         justify-content: space-evenly;
      }

      .colspncntr {
         justify-content: center;
      }
   </style>
   @if($CarData)


   <h3 class="tireheader">Before Frame Allignement</h3>

   {{-- camber --}}
   <div class="row mb-5 colspnbtw">

      <div class="col-6 col-md-3">
         <div class="services-details text-center">
            <p>Left Front Camber</p>
         </div>
         <div class="services-details" style="word-break: break-all;">
            <div class="chamber-wrap">
               <div class="chamber-float">
                  <p>{{$CarData->before_left_front_camber_left_top}}<sup>o</sup></p>
                  <p>{{$CarData->before_left_front_camber_right_top}}<sup>o</sup></p>
               </div>
               <p class="total-chamber">
                  {{$CarData->before_left_front_camber_middle}}<sup>o</sup>
               </p>
            </div>
         </div>

         {{-- caster --}}
         <div class="services-details text-center">
            <p>Caster</p>
         </div>
         <div class="services-details" style="word-break: break-all;">
            <div class="chamber-wrap">
               <div class="chamber-float">
                  <p>{{$CarData->before_left_front_caster_left_top}}<sup>o</sup></p>
                  <p>{{$CarData->before_left_front_caster_right_top}}<sup>o</sup></p>
               </div>
               <p class="total-chamber">
                  {{$CarData->before_left_front_caster_middle}}<sup>o</sup>
               </p>
            </div>
         </div>
         {{-- end caster --}}
         {{-- toe --}}
         <div class="services-details text-center">
            <p>Toe</p>
         </div>
         <div class="services-details" style="word-break: break-all;">
            <div class="chamber-wrap">
               <div class="chamber-float">
                  <p>{{$CarData->before_left_front_toe_left_top}}<sup>o</sup></p>
                  <p>{{$CarData->before_left_front_toe_right_top}}<sup>o</sup></p>
               </div>
               <p class="total-chamber">
                  {{$CarData->before_left_front_toe_middle}}<sup>o</sup>
               </p>
            </div>
         </div>
         {{-- end toe --}}
      </div>
      <div class="col-6 col-md-3">
         <div class="services-details text-center">
            <p>Right Front Camber</p>
         </div>
         <div class="services-details" style="word-break: break-all;">
            <div class="chamber-wrap">
               <div class="chamber-float">
                  <p>{{$CarData->before_right_front_camber_left_top}}<sup>o</sup></p>
                  <p>{{$CarData->before_right_front_camber_right_top}}<sup>o</sup></p>
               </div>
               <p class="total-chamber">
                  {{$CarData->before_right_front_camber_middle}}<sup>o</sup>
               </p>
            </div>
         </div>
         {{-- caster --}}
         <div class="services-details text-center">
            <p>Caster</p>
         </div>
         <div class="services-details" style="word-break: break-all;">
            <div class="chamber-wrap">
               <div class="chamber-float">
                  <p>{{$CarData->before_right_front_caster_left_top}}<sup>o</sup></p>
                  <p>{{$CarData->before_right_front_caster_right_top}}<sup>o</sup></p>
               </div>
               <p class="total-chamber">
                  {{$CarData->before_right_front_caster_middle }}<sup>o</sup>
               </p>
            </div>
         </div>
         {{-- end caster --}}
         {{-- toe --}}
         <div class="services-details text-center">
            <p>Toe</p>
         </div>
         <div class="services-details" style="word-break: break-all;">
            <div class="chamber-wrap">
               <div class="chamber-float">
                  <p>{{$CarData->before_right_front_toe_left_top}}<sup>o</sup></p>
                  <p>{{$CarData->before_right_front_toe_right_top}}<sup>o</sup></p>
               </div>
               <p class="total-chamber">
                  {{$CarData->before_right_front_toe_middle}}<sup>o</sup>
               </p>
            </div>
         </div>
         {{-- end toe --}}
      </div>

   </div>
   {{-- end camber --}}
   {{-- right --}}
   <div class="row mb-5 colspncntr">
      <div class="col-6 col-md-3">
         <div class="services-details text-center">
            <p>Front Total Toe</p>
         </div>
         <div class="services-details" style="word-break: break-all;">
            <div class="chamber-wrap">
               <div class="chamber-float">
                  <p>{{$CarData->before_front_total_toe_left_top}}<sup>o</sup></p>
                  <p>{{$CarData->before_front_total_toe_right_top}}<sup>o</sup></p>
               </div>
               <p class="total-chamber">
                  {{$CarData->before_front_total_toe_middle}}<sup>o</sup>
               </p>
            </div>
         </div>

         <div class="services-details text-center">
            <p>Steer Ahead</p>
         </div>
         <div class="services-details" style="word-break: break-all;">
            <div class="chamber-wrap">
               <div class="chamber-float">
                  <p>{{$CarData->before_front_steer_ahead_left_top}}<sup>o</sup></p>
                  <p>{{$CarData->before_front_steer_ahead_right_top}}<sup>o</sup></p>
               </div>
               <p class="total-chamber">
                  {{$CarData->before_front_steer_ahead_middle}}<sup>o</sup>
               </p>
            </div>
         </div>
      </div>

   </div>
   {{-- end right --}}
   {{-- camber --}}
   <div class="row mb-5 colspnbtw">

      <div class="col-6 col-md-3">
         <div class="services-details text-center">
            <p>Left Rear</p>
         </div>
         <div class="services-details" style="word-break: break-all;">
            <div class="chamber-wrap">
               <div class="chamber-float">
                  <p>{{$CarData->before_left_rear_camber_left_top}}<sup>o</sup></p>
                  <p>{{$CarData->before_left_rear_camber_right_top}}<sup>o</sup></p>
               </div>
               <p class="total-chamber">
                  {{$CarData->before_left_rear_camber_middle}}<sup>o</sup>
               </p>
            </div>
         </div>

         {{-- caster --}}
         <div class="services-details text-center">
            <p>Toe</p>
         </div>
         <div class="services-details" style="word-break: break-all;">
            <div class="chamber-wrap">
               <div class="chamber-float">
                  <p>{{$CarData->before_left_rear_toe_left_top}}<sup>o</sup></p>
                  <p>{{$CarData->before_left_rear_toe_right_top}}<sup>o</sup></p>
               </div>
               <p class="total-chamber">
                  {{$CarData->before_left_rear_toe_middle}}<sup>o</sup>
               </p>
            </div>
         </div>
         {{-- end caster --}}

      </div>
      <div class="col-6 col-md-3">
         <div class="services-details text-center">
            <p>Right Front Camber</p>
         </div>
         <div class="services-details" style="word-break: break-all;">
            <div class="chamber-wrap">
               <div class="chamber-float">
                  <p>{{$CarData->before_right_rear_camber_left_top}}<sup>o</sup></p>
                  <p>{{$CarData->before_right_rear_camber_right_top}}<sup>o</sup></p>
               </div>
               <p class="total-chamber">
                  {{$CarData->before_right_rear_camber_middle}}<sup>o</sup>
               </p>
            </div>
         </div>
         {{-- caster --}}
         <div class="services-details text-center">
            <p>Toe</p>
         </div>
         <div class="services-details" style="word-break: break-all;">
            <div class="chamber-wrap">
               <div class="chamber-float">
                  <p>{{$CarData->before_right_rear_toe_left_top}}<sup>o</sup></p>
                  <p>{{$CarData->before_right_rear_toe_right_top}}<sup>o</sup></p>
               </div>
               <p class="total-chamber">
                  {{$CarData->before_right_rear_toe_middle }}<sup>o</sup>
               </p>
            </div>
         </div>
         {{-- end caster --}}

      </div>

   </div>
   {{-- end camber --}}
   {{-- right --}}
   <div class="row mb-5 colspncntr">
      <div class="col-6 col-md-3">
         <div class="services-details text-center">
            <p>Total Toe</p>
         </div>
         <div class="services-details" style="word-break: break-all;">
            <div class="chamber-wrap">
               <div class="chamber-float">
                  <p>{{$CarData->before_rear_total_toe_left_top}}<sup>o</sup></p>
                  <p>{{$CarData->before_rear_total_toe_right_top}}<sup>o</sup></p>
               </div>
               <p class="total-chamber">
                  {{$CarData->before_rear_total_toe_middle}}<sup>o</sup>
               </p>
            </div>
         </div>

         <div class="services-details text-center">
            <p>Thrust Angel</p>
         </div>
         <div class="services-details" style="word-break: break-all;">
            <div class="chamber-wrap">
               <div class="chamber-float">
                  <p>{{$CarData->before_rear_thrust_angle_left_top}}<sup>o</sup></p>
                  <p>{{$CarData->before_rear_thrust_angle_right_top}}<sup>o</sup></p>
               </div>
               <p class="total-chamber">
                  {{$CarData->before_rear_thrust_angle_middle}}<sup>o</sup>
               </p>
            </div>
         </div>
      </div>

   </div>
   {{-- end right --}}
   {{-- end before --}}


   @endif
   {{-- after allignement --}}
   @if($CarData->AfterFrameAlignment)


   <h3 class="tireheader">After Frame Allignement</h3>

   {{-- camber --}}
   <div class="row mb-5 colspnbtw">

      <div class="col-6 col-md-3">
         <div class="services-details text-center">
            <p>Left Front Camber</p>
         </div>
         <div class="services-details" style="word-break: break-all;">
            <div class="chamber-wrap">
               <div class="chamber-float">
                  <p>{{$CarData->AfterFrameAlignment->after_left_front_camber_left_top}}<sup>o</sup></p>
                  <p>{{$CarData->AfterFrameAlignment->after_left_front_camber_right_top}}<sup>o</sup></p>
               </div>
               <p class="total-chamber">
                  {{$CarData->AfterFrameAlignment->after_left_front_camber_middle}}<sup>o</sup>
               </p>
            </div>
         </div>

         {{-- caster --}}
         <div class="services-details text-center">
            <p>Caster</p>
         </div>
         <div class="services-details" style="word-break: break-all;">
            <div class="chamber-wrap">
               <div class="chamber-float">
                  <p>{{$CarData->AfterFrameAlignment->after_left_front_caster_left_top}}<sup>o</sup></p>
                  <p>{{$CarData->AfterFrameAlignment->after_left_front_caster_right_top}}<sup>o</sup></p>
               </div>
               <p class="total-chamber">
                  {{$CarData->AfterFrameAlignment->after_left_front_caster_middle}}<sup>o</sup>
               </p>
            </div>
         </div>
         {{-- end caster --}}
         {{-- toe --}}
         <div class="services-details text-center">
            <p>Toe</p>
         </div>
         <div class="services-details" style="word-break: break-all;">
            <div class="chamber-wrap">
               <div class="chamber-float">
                  <p>{{$CarData->AfterFrameAlignment->after_left_front_toe_left_top}}<sup>o</sup></p>
                  <p>{{$CarData->AfterFrameAlignment->after_left_front_toe_right_top}}<sup>o</sup></p>
               </div>
               <p class="total-chamber">
                  {{$CarData->AfterFrameAlignment->after_left_front_toe_middle}}<sup>o</sup>
               </p>
            </div>
         </div>
         {{-- end toe --}}
      </div>
      <div class="col-6 col-md-3">
         <div class="services-details text-center">
            <p>Right Front Camber</p>
         </div>
         <div class="services-details" style="word-break: break-all;">
            <div class="chamber-wrap">
               <div class="chamber-float">
                  <p>{{$CarData->AfterFrameAlignment->after_right_front_camber_left_top}}<sup>o</sup></p>
                  <p>{{$CarData->AfterFrameAlignment->after_right_front_camber_right_top}}<sup>o</sup></p>
               </div>
               <p class="total-chamber">
                  {{$CarData->AfterFrameAlignment->after_right_front_camber_middle}}<sup>o</sup>
               </p>
            </div>
         </div>
         {{-- caster --}}
         <div class="services-details text-center">
            <p>Caster</p>
         </div>
         <div class="services-details" style="word-break: break-all;">
            <div class="chamber-wrap">
               <div class="chamber-float">
                  <p>{{$CarData->AfterFrameAlignment->after_right_front_caster_left_top}}<sup>o</sup></p>
                  <p>{{$CarData->AfterFrameAlignment->after_right_front_caster_right_top}}<sup>o</sup></p>
               </div>
               <p class="total-chamber">
                  {{$CarData->AfterFrameAlignment->after_right_front_caster_middle }}<sup>o</sup>
               </p>
            </div>
         </div>
         {{-- end caster --}}
         {{-- toe --}}
         <div class="services-details text-center">
            <p>Toe</p>
         </div>
         <div class="services-details" style="word-break: break-all;">
            <div class="chamber-wrap">
               <div class="chamber-float">
                  <p>{{$CarData->AfterFrameAlignment->after_right_front_toe_left_top}}<sup>o</sup></p>
                  <p>{{$CarData->AfterFrameAlignment->after_right_front_toe_right_top}}<sup>o</sup></p>
               </div>
               <p class="total-chamber">
                  {{$CarData->AfterFrameAlignment->after_right_front_toe_middle}}<sup>o</sup>
               </p>
            </div>
         </div>
         {{-- end toe --}}
      </div>

   </div>
   {{-- end camber --}}
   {{-- right --}}
   <div class="row mb-5 colspncntr">
      <div class="col-6 col-md-3">
         <div class="services-details text-center">
            <p>Front Total Toe</p>
         </div>
         <div class="services-details" style="word-break: break-all;">
            <div class="chamber-wrap">
               <div class="chamber-float">
                  <p>{{$CarData->AfterFrameAlignment->after_front_total_toe_left_top}}<sup>o</sup></p>
                  <p>{{$CarData->AfterFrameAlignment->after_front_total_toe_right_top}}<sup>o</sup></p>
               </div>
               <p class="total-chamber">
                  {{$CarData->AfterFrameAlignment->after_front_total_toe_middle}}<sup>o</sup>
               </p>
            </div>
         </div>

         <div class="services-details text-center">
            <p>Steer Ahead</p>
         </div>
         <div class="services-details" style="word-break: break-all;">
            <div class="chamber-wrap">
               <div class="chamber-float">
                  <p>{{$CarData->AfterFrameAlignment->after_front_steer_ahead_left_top}}<sup>o</sup></p>
                  <p>{{$CarData->AfterFrameAlignment->after_front_steer_ahead_right_top}}<sup>o</sup></p>
               </div>
               <p class="total-chamber">
                  {{$CarData->AfterFrameAlignment->after_front_steer_ahead_middle}}<sup>o</sup>
               </p>
            </div>
         </div>
      </div>

   </div>
   {{-- end right --}}
   {{-- camber --}}
   <div class="row mb-5 colspnbtw">

      <div class="col-6 col-md-3">
         <div class="services-details text-center">
            <p>Left Rear</p>
         </div>
         <div class="services-details" style="word-break: break-all;">
            <div class="chamber-wrap">
               <div class="chamber-float">
                  <p>{{$CarData->AfterFrameAlignment->after_left_rear_camber_left_top}}<sup>o</sup></p>
                  <p>{{$CarData->AfterFrameAlignment->after_left_rear_camber_right_top}}<sup>o</sup></p>
               </div>
               <p class="total-chamber">
                  {{$CarData->AfterFrameAlignment->after_left_rear_camber_middle}}<sup>o</sup>
               </p>
            </div>
         </div>

         {{-- caster --}}
         <div class="services-details text-center">
            <p>Toe</p>
         </div>
         <div class="services-details" style="word-break: break-all;">
            <div class="chamber-wrap">
               <div class="chamber-float">
                  <p>{{$CarData->AfterFrameAlignment->after_left_rear_toe_left_top}}<sup>o</sup></p>
                  <p>{{$CarData->AfterFrameAlignment->after_left_rear_toe_right_top}}<sup>o</sup></p>
               </div>
               <p class="total-chamber">
                  {{$CarData->AfterFrameAlignment->after_left_rear_toe_middle}}<sup>o</sup>
               </p>
            </div>
         </div>
         {{-- end caster --}}

      </div>
      <div class="col-6 col-md-3">
         <div class="services-details text-center">
            <p>Right Front Camber</p>
         </div>
         <div class="services-details" style="word-break: break-all;">
            <div class="chamber-wrap">
               <div class="chamber-float">
                  <p>{{$CarData->AfterFrameAlignment->after_right_rear_camber_left_top}}<sup>o</sup></p>
                  <p>{{$CarData->AfterFrameAlignment->after_right_rear_camber_right_top}}<sup>o</sup></p>
               </div>
               <p class="total-chamber">
                  {{$CarData->AfterFrameAlignment->after_right_rear_camber_middle}}<sup>o</sup>
               </p>
            </div>
         </div>
         {{-- caster --}}
         <div class="services-details text-center">
            <p>Toe</p>
         </div>
         <div class="services-details" style="word-break: break-all;">
            <div class="chamber-wrap">
               <div class="chamber-float">
                  <p>{{$CarData->AfterFrameAlignment->after_right_rear_toe_left_top}}<sup>o</sup></p>
                  <p>{{$CarData->AfterFrameAlignment->after_right_rear_toe_right_top}}<sup>o</sup></p>
               </div>
               <p class="total-chamber">
                  {{$CarData->AfterFrameAlignment->after_right_rear_toe_middle }}<sup>o</sup>
               </p>
            </div>
         </div>
         {{-- end caster --}}

      </div>

   </div>
   {{-- end camber --}}
   {{-- right --}}
   <div class="row mb-5 colspncntr">
      <div class="col-6 col-md-3">
         <div class="services-details text-center">
            <p>Total Toe</p>
         </div>
         <div class="services-details" style="word-break: break-all;">
            <div class="chamber-wrap">
               <div class="chamber-float">
                  <p>{{$CarData->AfterFrameAlignment->after_rear_total_toe_left_top}}<sup>o</sup></p>
                  <p>{{$CarData->AfterFrameAlignment->after_rear_total_toe_right_top}}<sup>o</sup></p>
               </div>
               <p class="total-chamber">
                  {{$CarData->AfterFrameAlignment->after_rear_total_toe_middle}}<sup>o</sup>
               </p>
            </div>
         </div>

         <div class="services-details text-center">
            <p>Thrust Angel</p>
         </div>
         <div class="services-details" style="word-break: break-all;">
            <div class="chamber-wrap">
               <div class="chamber-float">
                  <p>{{$CarData->AfterFrameAlignment->after_rear_thrust_angle_left_top}}<sup>o</sup></p>
                  <p>{{$CarData->AfterFrameAlignment->after_rear_thrust_angle_right_top}}<sup>o</sup></p>
               </div>
               <p class="total-chamber">
                  {{$CarData->AfterFrameAlignment->after_rear_thrust_angle_middle}}<sup>o</sup>
               </p>
            </div>
         </div>
      </div>

   </div>
   {{-- end right --}}
   {{-- end before --}}


   @endif
   {{-- end allignement --}}
   @endif
   {{-- end frame allignement service --}}
   {{-- paintless dent repiar --}}
   @if($serviceId==26)
   @if($CarData)
   <div class="row border-bb">

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Vehicle Type:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->vehicle_type)}} </p>
         </div>
      </div>
      @if($CarData->vehicle_type=='other')
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Notes:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->paintless_note)}} </p>
         </div>
      </div>
      @else
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Repaired Panels:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->repaired_panels)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Damage Type:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->damage_type)}} </p>
         </div>
      </div>
      @endif



   </div>
   <div class="service-desc-content border-bb">
      <h4>PHOTOS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach
      </div>
      @endif
   </div>
   </div>
   @endif
   @endif
   {{-- end paintless dent repair --}}


   {{-- Ceramic service --}}
   @if($serviceId==5)
   @if($CarData)
   <div class="row border-bb">
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Manufacturer By: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->coating_manufacturer)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>COATING TYPE: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->coating_type)}} </p>
         </div>
      </div>


      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Registered: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->registered)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Registered Company: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->registered_company)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Warranty : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->is_waranty)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Warranty Company : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->waranty_company)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Annual : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->annual_required)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Annual Completed : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->annual_completed)}} </p>
         </div>
      </div>
   </div>
   </div>

   <div class="service-desc-content border-bb">
      <h4>PHOTOS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach

      </div>
      @endif
   </div>
   </div>
   @endif
   @endif
   {{-- end Detailing  service --}}

   {{-- Ceramic service --}}
   @if($serviceId==10)
   @if($CarData)
   <div class="row border-bb">
      

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Service TYPE: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->service_type)}} </p>
         </div>
      </div>

      @if($CarData->service_type == 'correction')
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Correction: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->correction)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Vehicle Type: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->vehicle_type)}} </p>
         </div>
      </div>
      @endif
      @if($CarData->service_type == 'cleaning mobile')

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Cleaning Mobile: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->cleaning_mobile)}} </p>
         </div>
      </div>
      @endif
      
   </div>
   </div>

   <div class="service-desc-content border-bb">
      <h4>PHOTOS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach

      </div>
      @endif
   </div>
   </div>
   @endif
   @endif
   {{-- end Detailing  service --}}



   {{-- paint_body service --}}
   @if($serviceId==23)
   @if($CarData)
   <div class="row border-bb">
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Vehicle Type: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->vehicle_type)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Panels Repaired/Replaced: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->body_panels_repaired_or_replaced)}} </p>
         </div>
      </div>


      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Manufacturer: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->paint_manufacturer)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>System: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->paint_system)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Code : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->paint_code)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Color : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->paint_color)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Notes : </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->paint_notes)}} </p>
         </div>
      </div>
   </div>
   </div>

   <div class="service-desc-content border-bb">
      <h4>PHOTOS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach

      </div>
      @endif
   </div>
   </div>
   @endif
   @endif
   {{-- end paint_body  service --}}

   {{-- performance dyno tuning Service --}}
   @if($serviceId==27)
   @if($CarData)
   <div class="row border-bb">
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Engine Services: </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->engine_services)}} </p>
         </div>
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>PHOTOS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach

      </div>
      @endif
   </div>
   </div>
   @endif
   @endif
   {{-- end performance dyno tuning service --}}

   {{-- Custom Build Body service --}}
   @if($serviceId==8)
   @if($CarData)

   <div class="service-desc-content border-bb">
      <h4>PHOTOS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')
            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">
                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach
         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach

      </div>
      @endif
   </div>
   </div>
   @endif
   @endif
   {{-- end Custom Build Body  service --}}

   {{-- Dealership service --}}
   @if($serviceId==9)
   @if($CarData)

   <div class="service-desc-content border-bb">
      <h4>PHOTOS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach

      </div>
      @endif
   </div>
   </div>
   @endif
   @endif
   {{-- end Dealership service --}}

   {{-- Fabrication service --}}
   @if($serviceId==14)
   @if($CarData)

   <div class="service-desc-content border-bb">
      <h4>PHOTOS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach

      </div>
      @endif
   </div>
   </div>
   @endif
   @endif
   {{-- end Febrication service --}}

   {{-- Fuel system service --}}
   @if($serviceId==16)
   @if($CarData)

   <div class="service-desc-content border-bb">
      <h4>PHOTOS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach

      </div>
      @endif
   </div>
   </div>
   @endif
   @endif
   {{-- end Fuel System service --}}

   {{-- Lubrication service --}}
   @if($serviceId==18)
   @if($CarData)

   <div class="service-desc-content border-bb">
      <h4>PHOTOS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach

      </div>
      @endif
   </div>
   </div>
   @endif
   @endif
   {{-- end Lubrication service --}}

   {{-- Nitrous service --}}
   @if($serviceId==20)
   @if($CarData)

   <div class="service-desc-content border-bb">
      <h4>PHOTOS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach

      </div>
      @endif
   </div>
   </div>
   @endif
   @endif
   {{-- end Nitrous service --}}








   {{-- Vinly service --}}

   @if($serviceId==24)
   @if($CarData)

   <div class="row border-bb">

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>FILM MANUFACTURER:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->film_manufacturer)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>FILM THICKNESS:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->film_thickness)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>REGISTERED:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->registered)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>REGISTERED COMPANY:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->registered_company)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>WARRANTY:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->is_waranty)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>WARRANTY COMPANY:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->waranty_company)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>ANNUAL REQUIRED:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->annual_required)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>ANNUAL COMPLETED:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->annual_completed)}} </p>
         </div>
      </div>

      <div class="service-desc-content border-bb">
         <h4>PHOTOS</h4>
         <div class="cmn-slider-wrap">
            @if($CarData && $CarData->document)
            <div class="owl-carousel owl-theme photos-slider">
               @foreach(explode(',',$CarData->document) as $key=>$value)
               <?php $chkextension = explode('.', $value);
               error_reporting(0); ?>
               @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

               <div class="item">
                  <div class="slider-img lightbox" id="{{ $value}}">
                     <img src="{{ $value}}">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">
                     </span>
                  </div>
               </div>
               @endif
               @endforeach

            </div>
            @endif
         </div>
      </div>
      <div class="service-desc-content border-bb">
         <h4>DOCUMENTS</h4>
         <div class="cmn-slider-wrap">
            @if($CarData && $CarData->document)
            <div class="owl-carousel owl-theme document-slider">
               @foreach(explode(',',$CarData->document) as $key=>$value)
               <?php $chkextension = explode('.', $value); ?>
               @if( trim($chkextension[5]) =='pdf')

               <div class="item">
                  <a href="{{ $value}}" target="_blank">
                     <div class="slider-img" id="{{ $value}}" style="background:none">
                        <img src="/assets/images/pdf.png">
                        <span class="plus-overlay ">

                           <img src="{{ asset('/assets/images/plus.png') }}">

                        </span>
                  </a>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>

      @if($CarData->PPFInstall_Detail->type=='Car' || $CarData->PPFInstall_Detail->type=='Van')

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Hood:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->hood ?? 'N/A' ?? 'N/A')}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Roof:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->roof ?? 'N/A')}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Hatch:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->hatch ?? 'N/A')}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Front Bumper:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->front_bumper ?? 'N/A')}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Rear Bumper:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->rear_bumper ?? 'N/A')}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Driver Front Quarter:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->driver_front_quarter_panel ?? 'N/A')}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Driver Rear Quarter:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->driver_rear_quarter_panel ?? 'N/A')}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Driver Front Door:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->driver_front_door ?? 'N/A')}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Driver Rear Door:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->driver_rear_door ?? 'N/A')}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Driver Mirror:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->driver_mirror ?? 'N/A')}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Pass Front Quarter Panel:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->pass_front_quarter_panel ?? 'N/A')}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Pass Rear Quarter Panel:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->pass_rear_quarter_panel ?? 'N/A')}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Passenger Rear Door:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->passenger_rear_door ?? 'N/A')}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Passenger Mirror:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->passenger_mirror ?? 'N/A')}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Pref Pass Window:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->pref_passenger_window ?? 'N/A')}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Pref Back Windshild:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->pref_back_windshield ?? 'N/A')}} </p>
         </div>
      </div>
      @endif

      @if($CarData->PPFInstall_Detail->type=='RV' || $CarData->PPFInstall_Detail->type=='Trailer' || $CarData->PPFInstall_Detail->type=='Bus' )
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Front:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->front ?? 'N/A')}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Front:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->front ?? 'N/A')}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Rear:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->rear ?? 'N/A')}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Driver Front Section:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->driver_front_section ?? 'N/A')}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Driver MID Section:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->driver_mid_section ?? 'N/A')}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Driver Rear Section:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->driver_rear_section ?? 'N/A')}} </p>
         </div>
      </div>
      @endif

      @if($CarData->PPFInstall_Detail->type=='Car')

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Truck:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->trunk ?? 'N/A')}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Pref Driver Window:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->pref_driver_window ?? 'N/A')}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Pass A Pillar:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->pass_a_piller ?? 'N/A')}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Pass B Pillar:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->pass_b_piller ?? 'N/A')}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Pass C Pillar:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->pass_c_piller ?? 'N/A')}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Passenger Rocker Panel:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->passenger_rocker_panel ?? 'N/A')}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Taligate:</p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->tailgate ?? 'N/A')}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Driver A Pilar:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->driver_a_piller ?? 'N/A')}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Driver B Pilar:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->driver_b_piller ?? 'N/A')}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Driver C Pilar:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->driver_c_piller ?? 'N/A')}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Driver Rocker Pilar:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->driver_rocker_panel ?? 'N/A')}} </p>
         </div>
      </div>
      @endif

      @if($CarData->type !='Other')
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Wrap Color:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->wrap_color ?? 'N/A')}} </p>
         </div>
      </div>
      @endif


      @if($CarData->type=='Van')
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Back Door:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->back_door ?? 'N/A')}} </p>
         </div>
      </div>
      @endif


      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Warranty:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->is_waranty)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Warranty Company:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->waranty_company ?? 'N/A')}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Wrap Brand:</p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->wrap_brand ?? 'N/A') }} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Wrap Brand:</p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->PPFInstall_Detail->wrap_brand ?? 'N/A') }} </p>
         </div>
      </div>

   </div>

   <div class="service-desc-content border-bb">
      <h4>PHOTOS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData->PPFInstall_Detail && $CarData->PPFInstall_Detail->document)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->PPFInstall_Detail->document) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif

      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData->PPFInstall_Detail && $CarData->PPFInstall_Detail->document)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->PPFInstall_Detail->document) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach
      </div>
      @endif
   </div>
   </div>

   @endif
   @endif
   {{-- end PPF service --}}

   {{-- Vinly service --}}

   @if($serviceId==37)
   @if($CarData)
   <div class="row border-bb">

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Type:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->type)}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Hood:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->hood ?? 'N/A' ?? 'N/A')}} </p>
         </div>
      </div>
      @if($CarData->type=='Car' || ($CarData->type=='Van'))
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Roof:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->roof ?? 'N/A')}} </p>
         </div>
      </div>
      @if($CarData->type=='Van')
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Back Door:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->back_door ?? 'N/A')}} </p>
         </div>
      </div>
      @endif
      @if($CarData->type=='Car')
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Truck:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->truck ?? 'N/A')}} </p>
         </div>
      </div>
      @endif
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Hatch:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->hatch ?? 'N/A')}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Front Bumper:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->front_bumper ?? 'N/A')}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Rear Bumper:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->rear_bumper ?? 'N/A')}} </p>
         </div>
      </div>
      @endif
      @if($CarData->type=='RV' || $CarData->type=='Trailer' )
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Front:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->front ?? 'N/A')}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Rear:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->rear ?? 'N/A')}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Driver Front Section:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->full_driver_front_section ?? 'N/A')}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Driver MID Section:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->full_driver_mid_section ?? 'N/A')}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Driver Rear Section:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->full_driver_rear_section ?? 'N/A')}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Roof:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->roof ?? 'N/A')}} </p>
         </div>
      </div>

      @endif
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Wrap Brand:</p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->wrap_brand ?? 'N/A') }} </p>
         </div>
      </div>
      @if($CarData->type=='Car')
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Wrap Color:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->wrap_color ?? 'N/A')}} </p>
         </div>
      </div>
      @endif
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Warranty:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->warranty)}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Warranty Company:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->warranty_company ?? 'N/A')}} </p>
         </div>
      </div>
      @if($CarData->type=='Car' || ($CarData->type=='Van'))
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Driver Front Quarter:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->driver_front_quarter ?? 'N/A')}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Driver Rear Quarter:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->driver_rear_quarter ?? 'N/A')}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Driver Front Door:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->driver_front_door ?? 'N/A')}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Driver Rear Door:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->driver_rear_door ?? 'N/A')}} </p>
         </div>
      </div>
      @if($CarData->type=='Car')
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Driver A Pilar:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->driver_a_pilar ?? 'N/A')}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Driver B Pilar:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->driver_b_pilar ?? 'N/A')}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Driver C Pilar:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->driver_c_pilar ?? 'N/A')}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Driver Rocker Pilar:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->driver_rocker_pilar ?? 'N/A')}} </p>
         </div>
      </div>
      @endif
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Driver Mirror:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->driver_mirror ?? 'N/A')}} </p>
         </div>
      </div>
      @if($CarData->type=='Car')
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Pref Driver Window:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->pref_driver_window ?? 'N/A')}} </p>
         </div>
      </div>
      @endif
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Pass Front Quarter Panel:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->pass_front_quarter_panel ?? 'N/A')}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Pass Rear Quarter Panel:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->pass_rear_quarter_panel ?? 'N/A')}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Passenger Rear Door:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->passenger_rear_door ?? 'N/A')}} </p>
         </div>
      </div>
      @if($CarData->type=='Car')
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Pass A Pillar:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->pass_a_pillar ?? 'N/A')}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Pass B Pillar:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->pass_b_pillar ?? 'N/A')}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Pass C Pillar:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->pass_c_pillar ?? 'N/A')}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Passenger Rocker Panel:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->passenger_rocker_panel ?? 'N/A')}} </p>
         </div>
      </div>
      @endif
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Passenger Mirror:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->passenger_mirror ?? 'N/A')}} </p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Pref Pass Window:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->pref_pass_window ?? 'N/A')}} </p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Pref Back Windshild:</p>
         </div>
      </div>
      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->pref_back_windshild ?? 'N/A')}} </p>
         </div>
      </div>
      @if($CarData->type=='Car')
      <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p>Taligate:</p>
         </div>
      </div>

      <div class="col-6 col-md-6">
         <div class="services-details" style="word-break: break-all;">
            <p>{{ucwords($CarData->taligate ?? 'N/A')}} </p>
         </div>
      </div>
      @endif
      @endif
   </div>



   <div class="service-desc-content border-bb">
      <h4>PHOTOS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme photos-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value);
            error_reporting(0); ?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

            <div class="item">
               <div class="slider-img lightbox" id="{{ $value}}">
                  <img src="{{ $value}}">
                  <span class="plus-overlay ">

                     <img src="{{ asset('/assets/images/plus.png') }}">
                  </span>
               </div>
            </div>
            @endif
            @endforeach

         </div>
         @endif
      </div>
   </div>
   <div class="service-desc-content border-bb">
      <h4>DOCUMENTS</h4>
      <div class="cmn-slider-wrap">
         @if($CarData && $CarData->document)
         <div class="owl-carousel owl-theme document-slider">
            @foreach(explode(',',$CarData->document) as $key=>$value)
            <?php $chkextension = explode('.', $value); ?>
            @if( trim($chkextension[5]) =='pdf')

            <div class="item">
               <a href="{{ $value}}" target="_blank">
                  <div class="slider-img" id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png">
                     <span class="plus-overlay ">

                        <img src="{{ asset('/assets/images/plus.png') }}">

                     </span>
               </a>
            </div>
         </div>
         @endif
         @endforeach
      </div>
      @endif
   </div>
   </div>
   @endif
   @endif
   {{-- end Vinly service --}}
   <div class="text-center">
      @if($mynxtservice !="")
      <?php $ids = 0; ?>
      <a href="/car/viewservices/{{base64_encode($car->id.'%%%'.$mynxtservice.'%%%'.$nextservice.'%%%'.$MyCar.'%%%'.$ids)}}" class="btn btn--accent nxt-service-btn">NEXT SERVICE RECORD </a>
      @else
      <a href="/car/view/{{$MyCar}}" class="btn btn--accent nxt-service-btn">Back Menu</a>
      @endif

      {{-- <button class="btn btn--accent nxt-service-btn" type="submit"> NEXT SERVICE RECORD </button> --}}
   </div>
   </div>
   {{-- end exhaust service --}}
   </section>
   </div>
</main>
@endsection

{{-- Styles Section --}}
@section('styles')
<link href="{{ asset('/assets/css/addCar.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/css/dashboardReg.css') }}" rel="stylesheet" type="text/css" />
@endsection

{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('/assets/js/addCar.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/js/dashboardReg.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/js/servicejq.js') }}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js" integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('/assets/js/owl.carousel.min.js') }}"></script>
<script>
   $(document).ready(function() {
      function loopNext() {
         $('.sliderWrapper').stop().animate({
            scrollLeft: '+=20'
         }, 'fast', 'linear', loopNext);
      }

      function loopPrev() {
         $('.sliderWrapper').stop().animate({
            scrollLeft: '-=20'
         }, 'fast', 'linear', loopPrev);
      }

      function stop() {
         $('.sliderWrapper').stop();
      }


      $('#next').hover(function() {
         loopNext();
      }, function() {
         stop();
      });

      $('#prev').hover(function() {
         loopPrev();
      }, function() {
         stop();
      });
   })
   $('#imageSlider').on('mousewheel DOMMouseScroll', function(e) {
      var scrollTo = null;
      if (e.type == 'mousewheel') {
         scrollTo = (e.originalEvent.wheelDelta * -1);
      } else if (e.type == 'DOMMouseScroll') {
         scrollTo = 40 * e.originalEvent.detail;
      }

      if (scrollTo) {
         e.preventDefault();
         $(this).scrollTop(scrollTo + $(this).scrollTop());
      }
      if (typeof e.originalEvent.detail == 'number' && e.originalEvent.detail !== 0) {

         if (e.originalEvent.detail > 0) {
            $('.sliderWrapper').stop().animate({
               scrollLeft: '+=20'
            }, 'fast', 'linear');
         } else if (e.originalEvent.detail < 0) {
            console.log('Up');
            $('.sliderWrapper').stop().animate({
               scrollLeft: '-=20'
            }, 'fast', 'linear');
         }
      } else if (typeof e.originalEvent.wheelDelta == 'number') {
         if (e.originalEvent.wheelDelta < 0) {
            $('.sliderWrapper').stop().animate({
               scrollLeft: '+=20'
            }, 'fast', 'linear');
         } else if (e.originalEvent.wheelDelta > 0) {
            console.log('Up');
            $('.sliderWrapper').stop().animate({
               scrollLeft: '-=20'
            }, 'fast', 'linear');
         }
      }

   });
</script>
<script>
   $('.photos-slider').owlCarousel({
      loop: false,
      margin: 10,
      nav: true,
      dots: false,
      navText: [
         '<img src="/assets/images/caret-prev.png">',
         '<img src="/assets/images/caret-next.png">'
      ],
      responsive: {
         0: {
            items: 1
         },
         600: {
            items: 3
         },
         1000: {
            items: 7
         }
      }
   })
</script>
<script>
   $('.document-slider').owlCarousel({
      loop: false,
      margin: 10,
      nav: true,
      dots: false,
      navText: [
         '<img src="/assets/images/caret-prev.png">',
         '<img src="/assets/images/caret-next.png">'
      ],
      responsive: {
         0: {
            items: 2
         },
         600: {
            items: 4
         },
         1000: {
            items: 8
         }
      }
   })
</script>
<script>
   $(document).ready(function() {
      "use strict";
      //  $(".lightbox").click(function () {
      //      var imgsrc = $(this).attr('src');
      //      $("body").append("<div class='img-popup'><span class='close-lightbox'>&times;</span><img src='" + imgsrc + "'></div>");
      //      $(".close-lightbox, .img-popup").click(function () {
      //          $(".img-popup").fadeOut(500, function () {
      //              $(this).remove();
      //          }).addClass("lightboxfadeout");
      //      });

      //  });

      $(".lightbox").click(function() {

         var imgsrc = this.id;
         $("body").append("<div class='img-popup'><span class='close-lightbox'>&times;</span><img src='" + imgsrc + "'></div>");
         $(".close-lightbox, .img-popup").click(function() {
            $(".img-popup").fadeOut(500, function() {
               $(this).remove();
            }).addClass("lightboxfadeout");
         });

      });
      //  $(".plusicon").click(function () {
      //      $(".img-popup").fadeIn(500);
      //  });
      $(".lightbox").click(function() {
         $(".img-popup").fadeIn(500);
      });

   });

   if (document.getElementById('userInfo')) {
  var userInfo = document.getElementById('userInfo'),
      userNav = document.getElementById('userNav');
  var userInfoActiveClass = 'user-info--active',
      userNavActiveClass = 'user-nav--active';
  userInfo.addEventListener('click', function () {
    return showUserMenu();
  }); // Outside el click listener

  var clickOutside = function clickOutside() {
    document.addEventListener('click', function (e) {
      if (!e.target.closest('.user')) hideUserMenu();
    });
  }; // Hide/show functions


  var showUserMenu = function showUserMenu() {
    if (!userInfo.classList.contains(userInfoActiveClass)) {
      userInfo.classList.add(userInfoActiveClass);
      userNav.classList.add(userNavActiveClass);
      clickOutside();
    } else hideUserMenu();
  };

  var hideUserMenu = function hideUserMenu() {
    userInfo.classList.remove(userInfoActiveClass);
    userNav.classList.remove(userNavActiveClass);
  };
}
</script>
@endsection