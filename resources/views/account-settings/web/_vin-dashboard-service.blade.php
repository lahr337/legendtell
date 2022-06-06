@extends('layout.default')
<!-- leftcode -->
@section('content')
@include('account-settings.web.leftmenu')
<?php use App\Http\Controllers\CommonController; ?> 
<div class="account-settings__content-wr vin-user-active">
   <div class="account-settings__content account-settings__content-history-wr account-settings__content--active" id="vindashboard">
   
      <link href="{{ asset('/assets/css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('/assets/css/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link href="{{ asset('/assets/css/web_service.css') }}" rel="stylesheet" type="text/css" />
      <div id="imageSlider">
         <div id="prev">
            <img src="{{ asset('/assets/images/caret-prev.png') }}">
         </div>
         <div id="next">
            <img src="{{ asset('/assets/images/caret-next.png') }}">
         </div>
         <div id="sliderWrapper" class="sliderWrapper">
            <ul class="slider-container">
               @if(count($carsShop)>0)
               @foreach($carsShop as $carslide)
               @if($carslide->service_id)
               <?php $lastckId=explode(',',$carslide->service_id);
                        $AllService=[];
                        foreach ($lastckId as $key => $value) {
                           $servicename2= App\Http\Controllers\CommonController::getServiceName(($value));
                       $AllService[]= $servicename2['service_name'];
                        }
                        $servicenamenew="";
                        if(!empty($lastckId))
                        {
                           $servicename= App\Http\Controllers\CommonController::getServiceName(end($lastckId));
                           $servicenamenew= $servicename['service_name'];
                        }
                       ?>
               <li>
                  <div class="shop-content-wrap">
                     <a href="{{route('account-settings.index',['vindashboard',$carslide->id])}}">
                     <div class="shop-logo">
                        <img src="{{$carslide->userData->shop_photo ? $carslide->userData->shop_photo : '/shop_photo.png' }}">
                     </div></a>
                     <ul class="shop-content">
                        <li>{{ucwords($carslide->userData->shop_name)}}</li>
                        {{-- <li> shop_type</li> --}}
                        <li> {{COUNT($AllService)}} Service types</li>
                        <li class="primary-red">{{date("m/d/Y", strtotime($carslide->service_date) )  }}</li>
                      
                       
                        <li>{{($servicenamenew)}}</li>
                     </ul>
                  </div>
               </li>
               @endif
               @endforeach
               @endif
               
            </ul>
         </div>
      </div>
      <div>
         <div class="content-cmn-wrap">
            <div class="row">
               <div class="col-12 col-md-6">
                  @if($CarData->ownerHistory && $CarData->ownerHistory->owner_document)
               <?php
                   $testdata=explode(',',$CarData->ownerHistory->owner_document);
               ?>
             
               <?php  $chkextension= explode('.',$testdata[0]); error_reporting(0);?>
               @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')
              
               <img class ="w-100" src="{{$testdata[0]}}">
               @else
                  <img class ="w-100" src="{{ asset('/assets/images/image-empty-state.jpg') }}">
               @endif
              
              
               @endif
                  {{-- <img class="w-100" src="{{ asset('/assets/images/image-empty-state.jpg') }}"> --}}
               </div>
               <div class="col-12 col-md-6">
                  <ul class="desc-wrap">
                     <li class="cmn-serve-title primary-red">{{$car->vin ?? ''}}</li>
                     <li class="cmn-serve-title">{{ $car->year ?? ''}}</li>
                     <li class="cmn-serve-title">{{ $car->make}}</li>
                     <li class="cmn-serve-title">{{ $car->model ?? ''}}</li>
                     {{-- <li class="cmn-serve-title">Belize primary-Blue</li> --}}
                     <li class="cmn-serve-title">@if($car->miles){{ $car->miles ?? ''}} Miles @endif</li>
                  </ul>
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
                     $servicename="";
                     if(!($car->service_id) || $car->service_id !=null  )
                     {
                        $arr=explode(',',$car->service_id);
                        $last_key = ($arr)[count($arr)-1];
                        $servicename= App\Http\Controllers\CommonController::getServiceName($last_key);
                       
                     }
                     
                  
                     ?>
                     <p>{{ $servicename['service_name']}}</p>
                  </div>
               </div>
               <div class="col-6 col-md-6 mt-4">
                  <div class="services-details text-right">
                     <p>Serviced by:</p>
                  </div>
               </div>
               <div class="col-6 col-md-6 mt-4">
                  <div class="services-details">
                     <p>{{ucwords($CarData->userData->shop_name)}}</p>
                  </div>
               </div>
               <div class="col-6 col-md-6">
                  <div class="services-details text-right">
                     <p>Shop phone number:</p>
                  </div>
               </div>
               <div class="col-6 col-md-6">
                  <div class="services-details">
                     <p>{{($CarData->userData->contact_number)}}</p>
                  </div>
               </div>
               <div class="col-6 col-md-6">
                  <div class="services-details text-right">
                     <p>Shop Email:</p>
                  </div>
               </div>
               <div class="col-6 col-md-6">
                  <div class="services-details">
                     <p>{{($CarData->userData->email )}}</p>
                  </div>
               </div>
               <div class="col-6 col-md-6 my-4">
                  <div class="services-details text-right">
                     <p>Date of service:</p>
                  </div>
               </div>
               <div class="col-6 col-md-6 my-4">
                  <div class="services-details">
                     <p>{{date("m/d/Y", strtotime($car->service_date) )  }}</p>
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
               @if($CarData->acHistory)
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
                           <p>{{ucwords($CarData->acHistory->static_pressure_low)}} PSI</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details text-right">
                           <p>High Side Check</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details">
                           <p> {{ucwords($CarData->acHistory->static_pressure_high)}} PSI</p>
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
                           <p> {{ucwords($CarData->acHistory->dynamic_pressure_low)}} PSI</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details text-right">
                           <p>High Side Check</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details">
                           <p>{{ucwords($CarData->acHistory->dynamic_pressure_high)}} PSI</p>
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
                           <p class="primary-@if($CarData->acHistory->condensor=='good')green @elseif($CarData->acHistory->condensor=='bad')red  @elseif($CarData->acHistory->condensor=='replaced')yellow @else primary-blue @endif">@if($CarData->acHistory->condensor=='good')Checks @elseif($CarData->acHistory->condensor=='bad')  @elseif($CarData->acHistory->condensor=='replaced')Was @else Was @endif {{ucwords($CarData->acHistory->condensor)}}</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details text-right">
                           <p class="font-bold">COMPRESSOR:</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details">
                           <p class="primary-@if($CarData->acHistory->compressor=='good')green @elseif($CarData->acHistory->compressor=='bad')red  @elseif($CarData->acHistory->compressor=='replaced')yellow @else primary-blue @endif">@if($CarData->acHistory->compressor=='good')Checks @elseif($CarData->acHistory->compressor=='bad')  @elseif($CarData->acHistory->compressor=='replaced')Was @else Was @endif {{ucwords($CarData->acHistory->compressor)}}</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details text-right">
                           <p class="font-bold">EVAPORATOR CORE:</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details">
                           <p class="primary-@if($CarData->acHistory->evaporator_core=='good')green @elseif($CarData->acHistory->evaporator_core=='bad')red  @elseif($CarData->acHistory->evaporator_core=='replaced')yellow @else primary-blue @endif">@if($CarData->acHistory->evaporator_core=='good')Checks @elseif($CarData->acHistory->evaporator_core=='bad')  @elseif($CarData->acHistory->evaporator_core=='replaced')Was @else Was @endif {{ucwords($CarData->acHistory->evaporator_core)}}</p>
                           {{-- <p class="primary-yellow">Was REPLACED</p> --}}
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details text-right">
                           <p class="font-bold">RECEIVER DRYER:</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details">
                           <p class="primary-@if($CarData->acHistory->receiver_dryer=='good')green @elseif($CarData->acHistory->receiver_dryer=='bad')red  @elseif($CarData->acHistory->receiver_dryer=='replaced')yellow @else primary-blue @endif">@if($CarData->acHistory->receiver_dryer=='good')Checks @elseif($CarData->acHistory->receiver_dryer=='bad')  @elseif($CarData->acHistory->receiver_dryer=='replaced')Was @else Was @endif {{ucwords($CarData->acHistory->receiver_dryer)}}</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details text-right">
                           <p class="font-bold">A/C LINES:</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details">
                        
                           <p class="primary-@if($CarData->acHistory->ac_line=='good')green @elseif($CarData->acHistory->ac_line=='bad')red  @elseif($CarData->acHistory->ac_line=='replaced')yellow @else primary-blue @endif">@if($CarData->acHistory->ac_line=='good')Checks @elseif($CarData->acHistory->ac_line=='bad')  @elseif($CarData->acHistory->ac_line=='replaced')Was @else Was @endif {{ucwords($CarData->acHistory->ac_line)}}</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details text-right">
                           <p class="font-bold">PRESSURE SWITCHES:</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details">
                           <p class="primary-@if($CarData->acHistory->pressure_switches=='good')green @elseif($CarData->acHistory->pressure_switches=='bad')red  @elseif($CarData->acHistory->pressure_switches=='replaced')yellow @else primary-blue @endif">@if($CarData->acHistory->pressure_switches=='good')Checks @elseif($CarData->acHistory->pressure_switches=='bad')  @elseif($CarData->acHistory->pressure_switches=='replaced')Was @else Was @endif {{ucwords($CarData->acHistory->pressure_switches)}}</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details text-right">
                           <p class="font-bold">ORIFICE TUBE:</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details">
                           <p class="primary-@if($CarData->acHistory->office_tube=='good')green @elseif($CarData->acHistory->office_tube=='bad')red  @elseif($CarData->acHistory->office_tube=='replaced')yellow @else primary-blue @endif">@if($CarData->acHistory->office_tube=='good')Checks @elseif($CarData->acHistory->office_tube=='bad')  @elseif($CarData->acHistory->office_tube=='replaced')Was @else Was @endif {{ucwords($CarData->acHistory->office_tube)}}</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details text-right">
                           <p class="font-bold">EXPANSION VALVE:</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details">
                           <p class="primary-@if($CarData->acHistory->expansion_valve=='good')green @elseif($CarData->acHistory->expansion_valve=='bad')red  @elseif($CarData->acHistory->expansion_valve=='replaced')yellow @else primary-blue @endif">@if($CarData->acHistory->expansion_valve=='good')Checks @elseif($CarData->acHistory->expansion_valve=='bad')  @elseif($CarData->acHistory->expansion_valve=='replaced')Was @else Was @endif {{ucwords($CarData->acHistory->expansion_valve)}}</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details text-right">
                           <p class="font-bold">SEALS:</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details">
                           <p class="primary-@if($CarData->acHistory->seals=='good')green @elseif($CarData->acHistory->seals=='bad')red  @elseif($CarData->acHistory->seals=='replaced')yellow @else primary-blue @endif">@if($CarData->acHistory->seals=='good')Checks @elseif($CarData->acHistory->seals=='bad')  @elseif($CarData->acHistory->seals=='replaced')Was @else Was @endif {{ucwords($CarData->acHistory->seals)}}</p>
                        </div>
                     </div>
                  </div>
            
               <div class="service-desc-content border-bb">
                  <h4>SHOP NOTES / DETAILS</h4>
                  <p>
                     {{($CarData->acHistory->ac_notes)}}
                  </p>
               </div>
               <div class="service-desc-content border-bb">
                  <h4>PHOTOS</h4>
                  <div class="cmn-slider-wrap">
                     @if($CarData->acHistory && $CarData->acHistory->documents)
                     <div class="owl-carousel owl-theme photos-slider">
                        @foreach(explode(',',$CarData->acHistory->documents) as $key=>$value)
                        <?php  $chkextension= explode('.',$value); error_reporting(0);?>
                        
                     @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')
                     
                        <div class="item">
                           <div class="slider-img lightbox"  id="{{ $value}}">
                              <img src="{{ $value}}" >
                              <span class="plus-overlay ">
                           
                              <img src="{{ asset('/assets/images/plus.png') }}">
                              </span>
                           </div>
                        </div>
                        @endif
                        @endforeach
                        {{-- <div class="item">
                           <div class="slider-img">
                              <img src="{{ asset('/assets/images/slider-img-1.png') }}" class="lightbox">
                              <span class="plus-overlay">
                              <img src="{{ asset('/assets/images/plus.png') }}">
                              </span>
                           </div>
                        </div>
                        <div class="item">
                           <div class="slider-img">
                              <img src="{{ asset('/assets/images/slider-img-1.png') }}" class="lightbox">
                              <span class="plus-overlay">
                              <img src="{{ asset('/assets/images/plus.png') }}">
                              </span>
                           </div>
                        </div>
                        <div class="item">
                           <div class="slider-img">
                              <img src="{{ asset('/assets/images/slider-img-1.png') }}" class="lightbox">
                              <span class="plus-overlay">
                              <img src="{{ asset('/assets/images/plus.png') }}">
                              </span>
                           </div>
                        </div>
                        <div class="item">
                           <div class="slider-img">
                              <img src="{{ asset('/assets/images/slider-img-1.png') }}" class="lightbox">
                              <span class="plus-overlay">
                              <img src="{{ asset('/assets/images/plus.png') }}">
                              </span>
                           </div>
                        </div>
                        <div class="item">
                           <div class="slider-img">
                              <img src="{{ asset('/assets/images/slider-img-1.png') }}" class="lightbox">
                              <span class="plus-overlay">
                              <img src="{{ asset('/assets/images/plus.png') }}">
                              </span>
                           </div>
                        </div> --}}
                     </div>
                     @endif
                  </div>
               </div>
               <div class="service-desc-content border-bb">
                  <h4>DOCUMENTS</h4>
                  <div class="cmn-slider-wrap">
                     @if($CarData->acHistory && $CarData->acHistory->documents)
                     <div class="owl-carousel owl-theme document-slider">
                        @foreach(explode(',',$CarData->acHistory->documents) as $key=>$value)
                        <?php  $chkextension= explode('.',$value);?>
                     @if( trim($chkextension[5]) =='pdf')
                  
                        <div class="item">
                           <a href="{{ $value}}" target="_blank">
                           <div class="slider-img"  id="{{ $value}}" style="background:none">
                           <img src="/assets/images/pdf.png" >
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
               @if($CarData->breakHistory)
                  <div class="row border-bb">
                     <div class="col-6 col-md-6">
                        <div class="services-details text-right">
                           <p class="font-bold">DRIVER FRONT BRAKES:</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details">
                           <p class="primary-@if($CarData->breakHistory->driver_front_break=='Good')green @elseif($CarData->breakHistory->driver_front_break=='Bad')red  @elseif($CarData->breakHistory->driver_front_break=='Replaced')yellow @else primary-blue @endif">@if($CarData->breakHistory->driver_front_break=='Good')Checks @elseif($CarData->breakHistory->driver_front_break=='Bad')  @elseif($CarData->breakHistory->driver_front_break=='Replaced')Was @else Was @endif{{ucwords($CarData->breakHistory->driver_front_break)}}</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details text-right">
                           <p class="font-bold"> DRIVER REAR BRAKES:</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details">
                           <p class="primary-@if($CarData->breakHistory->driver_rear_break=='Good')green @elseif($CarData->breakHistory->driver_rear_break=='Bad')red  @elseif($CarData->breakHistory->driver_rear_break=='Replaced')yellow @else primary-blue @endif">@if($CarData->breakHistory->driver_rear_break=='Good')Checks @elseif($CarData->breakHistory->driver_rear_break=='Bad')  @elseif($CarData->breakHistory->driver_rear_break=='Replaced')Was @else Was @endif{{ucwords($CarData->breakHistory->driver_rear_break)}}</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details text-right">
                           <p class="font-bold"> DRIVER FRONT ROTORS:</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details">
                           <p class="primary-@if($CarData->breakHistory->driver_front_rotors=='Good')green @elseif($CarData->breakHistory->driver_front_rotors=='Bad')red  @elseif($CarData->breakHistory->driver_front_rotors=='Replaced')yellow @else primary-blue @endif">@if($CarData->breakHistory->driver_front_rotors=='Good')Checks @elseif($CarData->breakHistory->driver_front_rotors=='Bad')  @elseif($CarData->breakHistory->driver_front_rotors=='Replaced')Was @else Was @endif{{ucwords($CarData->breakHistory->driver_front_rotors)}}</p>
                           {{-- <p class="primary-yellow">Was REPLACED</p> --}}
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details text-right">
                           <p class="font-bold">DRIVER REAR ROTORS:</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details">
                           <p class="primary-@if($CarData->breakHistory->driver_rear_rotors=='Good')green @elseif($CarData->breakHistory->driver_rear_rotors=='Bad')red  @elseif($CarData->breakHistory->driver_rear_rotors=='Replaced')yellow @else primary-blue @endif">@if($CarData->breakHistory->driver_rear_rotors=='Good')Checks @elseif($CarData->breakHistory->driver_rear_rotors=='Bad')  @elseif($CarData->breakHistory->driver_rear_rotors=='Replaced')Was @else Was @endif{{ucwords($CarData->breakHistory->driver_rear_rotors)}}</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details text-right">
                           <p class="font-bold">PASSENGER FRONT BRAKES:</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details">
                        
                           <p class="primary-@if($CarData->breakHistory->passenger_front_brakes=='Good')green @elseif($CarData->breakHistory->passenger_front_brakes=='Bad')red  @elseif($CarData->breakHistory->passenger_front_brakes=='Replaced')yellow @else primary-blue @endif">@if($CarData->breakHistory->passenger_front_brakes=='Good')Checks @elseif($CarData->breakHistory->passenger_front_brakes=='Bad')  @elseif($CarData->breakHistory->passenger_front_brakes=='Replaced')Was @else Was @endif{{ucwords($CarData->breakHistory->passenger_front_brakes)}}</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details text-right">
                           <p class="font-bold">PASSENTER REAR BRAKES:</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details">
                           <p class="primary-@if($CarData->breakHistory->passenter_rear_brakes=='Good')green @elseif($CarData->breakHistory->passenter_rear_brakes=='Bad')red  @elseif($CarData->breakHistory->passenter_rear_brakes=='Replaced')yellow @else primary-blue @endif">@if($CarData->breakHistory->passenter_rear_brakes=='Good')Checks @elseif($CarData->breakHistory->passenter_rear_brakes=='Bad')  @elseif($CarData->breakHistory->passenter_rear_brakes=='Replaced')Was @else Was @endif{{ucwords($CarData->breakHistory->passenter_rear_brakes)}}</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details text-right">
                           <p class="font-bold"> PASSENGER FRONT ROTORS:</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details">
                           <p class="primary-@if($CarData->breakHistory->passenger_front_rotors=='Good')green @elseif($CarData->breakHistory->passenger_front_rotors=='Bad')red  @elseif($CarData->breakHistory->passenger_front_rotors=='Replaced')yellow @else primary-blue @endif">@if($CarData->breakHistory->passenger_front_rotors=='Good')Checks @elseif($CarData->breakHistory->passenger_front_rotors=='Bad')  @elseif($CarData->breakHistory->passenger_front_rotors=='Replaced')Was @else Was @endif {{ucwords($CarData->breakHistory->passenger_front_rotors)}}</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details text-right">
                           <p class="font-bold">PASSENGER REAR ROTORS:</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details">
                           <p class="primary-@if($CarData->breakHistory->passenger_rear_rotors=='Good')green @elseif($CarData->breakHistory->passenger_rear_rotors=='Bad')red  @elseif($CarData->breakHistory->passenger_rear_rotors=='Replaced')yellow @else primary-blue @endif">@if($CarData->breakHistory->passenger_rear_rotors=='Good')Checks @elseif($CarData->breakHistory->passenger_rear_rotors=='Bad')  @elseif($CarData->breakHistory->passenger_rear_rotors=='Replaced')Was @else Was @endif {{ucwords($CarData->breakHistory->passenger_rear_rotors)}}</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details text-right">
                           <p class="font-bold"> DRIVER FRONT CALIPERS:</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details">
                           <p class="primary-@if($CarData->breakHistory->driver_front_calipers=='Good')green @elseif($CarData->breakHistory->driver_front_calipers=='Bad')red  @elseif($CarData->breakHistory->driver_front_calipers=='Replaced')yellow @else primary-blue @endif">@if($CarData->breakHistory->driver_front_calipers=='Good')Checks @elseif($CarData->breakHistory->driver_front_calipers=='Bad')  @elseif($CarData->breakHistory->driver_front_calipers=='Replaced')Was @else Was @endif {{ucwords($CarData->breakHistory->driver_front_calipers)}}</p>
                        </div>
                     </div>

                     <div class="col-6 col-md-6">
                        <div class="services-details text-right">
                           <p class="font-bold"> DRIVER REAR CALIPERS:</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details">
                           <p class="primary-@if($CarData->breakHistory->driver_rear_calipers=='Good')green @elseif($CarData->breakHistory->driver_rear_calipers=='Bad')red  @elseif($CarData->breakHistory->driver_rear_calipers=='Replaced')yellow @else primary-blue @endif">@if($CarData->breakHistory->driver_rear_calipers=='Good')Checks @elseif($CarData->breakHistory->driver_rear_calipers=='Bad')  @elseif($CarData->breakHistory->driver_rear_calipers=='Replaced')Was @else Was @endif {{ucwords($CarData->breakHistory->driver_rear_calipers)}}</p>
                        </div>
                     </div>

                     <div class="col-6 col-md-6">
                        <div class="services-details text-right">
                           <p class="font-bold">  PASSENGER FRONT CALIPERS:</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details">
                           <p class="primary-@if($CarData->breakHistory->passenger_front_calipers=='Good')green @elseif($CarData->breakHistory->passenger_front_calipers=='Bad')red  @elseif($CarData->breakHistory->passenger_front_calipers=='Replaced')yellow @else primary-blue @endif">@if($CarData->breakHistory->passenger_front_calipers=='Good')Checks @elseif($CarData->breakHistory->passenger_front_calipers=='Bad')  @elseif($CarData->breakHistory->passenger_front_calipers=='Replaced')Was @else Was @endif {{ucwords($CarData->breakHistory->passenger_front_calipers)}}</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details text-right">
                           <p class="font-bold"> PASSENGER REAR CALIPERS:</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details">
                           <p class="primary-@if($CarData->breakHistory->passenger_rear_calipers=='Good')green @elseif($CarData->breakHistory->passenger_rear_calipers=='Bad')red  @elseif($CarData->breakHistory->passenger_rear_calipers=='Replaced')yellow @else primary-blue @endif">@if($CarData->breakHistory->passenger_rear_calipers=='Good')Checks @elseif($CarData->breakHistory->passenger_rear_calipers=='Bad')  @elseif($CarData->breakHistory->passenger_rear_calipers=='Replaced')Was @else Was @endif {{ucwords($CarData->breakHistory->passenger_rear_calipers)}}</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details text-right">
                           <p class="font-bold">BRAKE HOSES:</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details">
                           <p class="primary-@if($CarData->breakHistory->brake_hoses=='Good')green @elseif($CarData->breakHistory->brake_hoses=='Bad')red  @elseif($CarData->breakHistory->brake_hoses=='Replaced')yellow @else primary-blue @endif">@if($CarData->breakHistory->brake_hoses=='Good')Checks @elseif($CarData->breakHistory->brake_hoses=='Bad')  @elseif($CarData->breakHistory->brake_hoses=='Replaced')Was @else Was @endif {{ucwords($CarData->breakHistory->brake_hoses)}}</p>
                        </div>
                     </div>

                     <div class="col-6 col-md-6">
                        <div class="services-details text-right">
                           <p class="font-bold"> BRAKE LINES:</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details">
                           <p class="primary-@if($CarData->breakHistory->brake_lines=='Good')green @elseif($CarData->breakHistory->brake_lines=='Bad')red  @elseif($CarData->breakHistory->brake_lines=='Replaced')yellow @else primary-blue @endif">@if($CarData->breakHistory->brake_lines=='Good')Checks @elseif($CarData->breakHistory->brake_lines=='Bad')  @elseif($CarData->breakHistory->brake_lines=='Replaced')Was @else Was @endif {{ucwords($CarData->breakHistory->brake_lines)}}</p>
                        </div>
                     </div>

                     <div class="col-6 col-md-6">
                        <div class="services-details text-right">
                           <p class="font-bold">WHEEL CYLINDER:</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details">
                           <p class="primary-@if($CarData->breakHistory->wheel_cylinder=='Good')green @elseif($CarData->breakHistory->wheel_cylinder=='Bad')red  @elseif($CarData->breakHistory->wheel_cylinder=='Replaced')yellow @else primary-blue @endif">@if($CarData->breakHistory->wheel_cylinder=='Good')Checks @elseif($CarData->breakHistory->wheel_cylinder=='Bad')  @elseif($CarData->breakHistory->wheel_cylinder=='Replaced')Was @else Was @endif {{ucwords($CarData->breakHistory->wheel_cylinder)}}</p>
                        </div>
                     </div>

                     <div class="col-6 col-md-6">
                        <div class="services-details text-right">
                           <p class="font-bold"> MASTER CYLINDER:</p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details">
                           <p class="primary-@if($CarData->breakHistory->master_cylinder=='Good')green @elseif($CarData->breakHistory->master_cylinder=='Bad')red  @elseif($CarData->breakHistory->master_cylinder=='Replaced')yellow @else primary-blue @endif">@if($CarData->breakHistory->master_cylinder=='Good')Checks @elseif($CarData->breakHistory->master_cylinder=='Bad')  @elseif($CarData->breakHistory->master_cylinder=='Replaced')Was @else Was @endif {{ucwords($CarData->breakHistory->master_cylinder)}}</p>
                        </div>
                     </div>

                     

                  </div>
            
            
               <div class="service-desc-content border-bb">
                  <h4>PHOTOS</h4>
                  <div class="cmn-slider-wrap">
                     @if($CarData->breakHistory && $CarData->breakHistory->document)
                     <div class="owl-carousel owl-theme photos-slider">
                        @foreach(explode(',',$CarData->breakHistory->document) as $key=>$value)
                        <?php  $chkextension= explode('.',$value);?>
                     @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')
                     
                        <div class="item">
                           <div class="slider-img lightbox"  id="{{ $value}}">
                              <img src="{{ $value}}" >
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
                     @if($CarData->breakHistory && $CarData->breakHistory->document)
                     <div class="owl-carousel owl-theme document-slider">
                        @foreach(explode(',',$CarData->breakHistory->document) as $key=>$value)
                        <?php  $chkextension= explode('.',$value);?>
                     @if( trim($chkextension[5]) =='pdf')
                  
                        <div class="item">
                           <a href="{{ $value}}" target="_blank">
                           <div class="slider-img"  id="{{ $value}}" style="background:none">
                           <img src="/assets/images/pdf.png" >
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
             @if($CarData->carhandwashHistory)
                  <div class="row border-bb">
                     <h3>Handwash Services</h3>
                     <div class="col-6 col-md-6">
                        <div class="services-details text-right">
                           <p>Services : </p>
                        </div>
                     </div>
                     <div class="col-6 col-md-6">
                        <div class="services-details">
                           <p>{{ucwords($CarData->carhandwashHistory->service_name)}} </p>
                        </div>
                     </div>
                  
                  
                     
                     
                     
                     </div>
                  </div>
                  
            
               <div class="service-desc-content border-bb">
                  <h4>SHOP NOTES / DETAILS</h4>
                  <p>
                     {{($CarData->carhandwashHistory->notes)}}
                  </p>
               </div>
               <div class="service-desc-content border-bb">
                  <h4>PHOTOS</h4>
                  <div class="cmn-slider-wrap">
                     @if($CarData->carhandwashHistory && $CarData->carhandwashHistory->documents)
                     <div class="owl-carousel owl-theme photos-slider">
                        @foreach(explode(',',$CarData->carhandwashHistory->documents) as $key=>$value)
                        <?php  $chkextension= explode('.',$value); error_reporting(0);?>
                        @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')
                     
                        <div class="item">
                           <div class="slider-img lightbox"  id="{{ $value}}">
                              <img src="{{ $value}}" >
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
                     @if($CarData->carhandwashHistory && $CarData->carhandwashHistory->documents)
                     <div class="owl-carousel owl-theme document-slider">
                        @foreach(explode(',',$CarData->carhandwashHistory->documents) as $key=>$value)
                        <?php  $chkextension= explode('.',$value);?>
                        @if( trim($chkextension[5]) =='pdf')
                     
                        <div class="item">
                           <a href="{{ $value}}" target="_blank">
                           <div class="slider-img"  id="{{ $value}}" style="background:none">
                           <img src="/assets/images/pdf.png" >
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
                     <div class="cmn-slider-wrap">
                        @if($CarData->carselfHistory && $CarData->carselfHistory->documents)
                        <div class="owl-carousel owl-theme photos-slider">
                           @foreach(explode(',',$CarData->carselfHistory->documents) as $key=>$value)
                           <?php  $chkextension= explode('.',$value); error_reporting(0);?>
                        @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')
                        
                           <div class="item">
                              <div class="slider-img lightbox"  id="{{ $value}}">
                                 <img src="{{ $value}}" >
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
                        @if($CarData->carselfHistory && $CarData->carselfHistory->documents)
                        <div class="owl-carousel owl-theme document-slider">
                           @foreach(explode(',',$CarData->carselfHistory->documents) as $key=>$value)
                           <?php  $chkextension= explode('.',$value);?>
                        @if( trim($chkextension[5]) =='pdf')
                     
                           <div class="item">
                              <a href="{{ $value}}" target="_blank">
                              <div class="slider-img"  id="{{ $value}}" style="background:none">
                              <img src="/assets/images/pdf.png" >
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
                  <div class="cmn-slider-wrap">
                     @if($CarData->cartunnelHistory && $CarData->cartunnelHistory->documents)
                     <div class="owl-carousel owl-theme photos-slider">
                        @foreach(explode(',',$CarData->cartunnelHistory->documents) as $key=>$value)
                        <?php  $chkextension= explode('.',$value); error_reporting(0);?>
                     @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')
                     
                        <div class="item">
                           <div class="slider-img lightbox"  id="{{ $value}}">
                              <img src="{{ $value}}" >
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
                     @if($CarData->cartunnelHistory && $CarData->cartunnelHistory->documents)
                     <div class="owl-carousel owl-theme document-slider">
                        @foreach(explode(',',$CarData->cartunnelHistory->documents) as $key=>$value)
                        <?php  $chkextension= explode('.',$value);?>
                     @if( trim($chkextension[5]) =='pdf')
                  
                        <div class="item">
                           <a href="{{ $value}}" target="_blank">
                           <div class="slider-img"  id="{{ $value}}" style="background:none">
                           <img src="/assets/images/pdf.png" >
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
        @if($CarData->colisonRepair)
        <div class="row border-bb">
        
          
         
          </div>
        </div>
     
  
        <div class="service-desc-content border-bb">
           <h4>SHOP NOTES / DETAILS</h4>
           <p>
              {{($CarData->colisonRepair->notes)}}
           </p>
        </div>
        <div class="service-desc-content border-bb">
           <h4>Before Image</h4>
           <div class="cmn-slider-wrap">
              @if($CarData->colisonRepair && $CarData->colisonRepair->before_image)
              <div class="owl-carousel owl-theme photos-slider">
                 @foreach(explode(',',$CarData->colisonRepair->before_image) as $key=>$value)
                 <?php  $chkextension= explode('.',$value); error_reporting(0);?>
              @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')
              
                 <div class="item">
                    <div class="slider-img lightbox"  id="{{ $value}}">
                       <img src="{{ $value}}" >
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
           <div class="cmn-slider-wrap">
              @if($CarData->colisonRepair && $CarData->colisonRepair->before_image)
              <div class="owl-carousel owl-theme document-slider">
                 @foreach(explode(',',$CarData->colisonRepair->before_image) as $key=>$value)
                 <?php  $chkextension= explode('.',$value);?>
              @if( trim($chkextension[5]) =='pdf')
           
                 <div class="item">
                    <a href="{{ $value}}" target="_blank">
                    <div class="slider-img"  id="{{ $value}}" style="background:none">
                    <img src="/assets/images/pdf.png" >
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
         <div class="cmn-slider-wrap">
            @if($CarData->colisonRepair && $CarData->colisonRepair->document_of_estimate)
            <div class="owl-carousel owl-theme photos-slider">
               @foreach(explode(',',$CarData->colisonRepair->document_of_estimate) as $key=>$value)
               <?php  $chkextension= explode('.',$value); error_reporting(0);?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')
            
               <div class="item">
                  <div class="slider-img lightbox"  id="{{ $value}}">
                     <img src="{{ $value}}" >
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
         <div class="cmn-slider-wrap">
            @if($CarData->colisonRepair && $CarData->colisonRepair->document_of_estimate)
            <div class="owl-carousel owl-theme document-slider">
               @foreach(explode(',',$CarData->colisonRepair->document_of_estimate) as $key=>$value)
               <?php  $chkextension= explode('.',$value);?>
            @if( trim($chkextension[5]) =='pdf')
         
               <div class="item">
                  <a href="{{ $value}}" target="_blank">
                  <div class="slider-img"  id="{{ $value}}" style="background:none">
                  <img src="/assets/images/pdf.png" >
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
            <div class="cmn-slider-wrap">
               @if($CarData->colisonRepair && $CarData->colisonRepair->document_of_repair)
               <div class="owl-carousel owl-theme photos-slider">
                  @foreach(explode(',',$CarData->colisonRepair->document_of_repair) as $key=>$value)
                  <?php  $chkextension= explode('.',$value); error_reporting(0);?>
               @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')
               
                  <div class="item">
                     <div class="slider-img lightbox"  id="{{ $value}}">
                        <img src="{{ $value}}" >
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
            <div class="cmn-slider-wrap">
               @if($CarData->colisonRepair && $CarData->colisonRepair->document_of_repair)
               <div class="owl-carousel owl-theme document-slider">
                  @foreach(explode(',',$CarData->colisonRepair->document_of_repair) as $key=>$value)
                  <?php  $chkextension= explode('.',$value);?>
               @if( trim($chkextension[5]) =='pdf')
            
                  <div class="item">
                     <a href="{{ $value}}" target="_blank">
                     <div class="slider-img"  id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png" >
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
            <div class="cmn-slider-wrap">
               @if($CarData->colisonRepair && $CarData->colisonRepair->after_image)
               <div class="owl-carousel owl-theme photos-slider">
                  @foreach(explode(',',$CarData->colisonRepair->after_image) as $key=>$value)
                  <?php  $chkextension= explode('.',$value); error_reporting(0);?>
               @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')
               
                  <div class="item">
                     <div class="slider-img lightbox"  id="{{ $value}}">
                        <img src="{{ $value}}" >
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
            <div class="cmn-slider-wrap">
               @if($CarData->colisonRepair && $CarData->colisonRepair->after_image)
               <div class="owl-carousel owl-theme document-slider">
                  @foreach(explode(',',$CarData->colisonRepair->after_image) as $key=>$value)
                  <?php  $chkextension= explode('.',$value);?>
               @if( trim($chkextension[5]) =='pdf')
            
                  <div class="item">
                     <a href="{{ $value}}" target="_blank">
                     <div class="slider-img"  id="{{ $value}}" style="background:none">
                     <img src="/assets/images/pdf.png" >
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
          {{-- car handwash tunnel service --}}
          @if($serviceId==7)
          @if($CarData->concerigeHistory)
          <div class="row border-bb">
          
             <div class="col-6 col-md-6">
                <div class="services-details text-right">
                   <p>TRIP BEGIN : </p>
                </div>
             </div>
             <div class="col-6 col-md-6">
                <div class="services-details">
                   <p>{{ucwords($CarData->concerigeHistory->trip_begin)}} </p>
                </div>
             </div>
       
             <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p>TRIP END : </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p>{{ucwords($CarData->concerigeHistory->trip_end)}} </p>
               </div>
            </div>
             
            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p>TRIP END : </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p>{{ucwords($CarData->concerigeHistory->trip_end)}} </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p>TRIP Details : </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p>{{ucwords($CarData->concerigeHistory->trip_details)}} </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p>Client : </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p>{{ucwords($CarData->concerigeHistory->client)}} </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p>Incident Condition : </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p>{{ucwords($CarData->concerigeHistory->incident_condition)}} </p>
               </div>
            </div>
          
             </div>
          </div>
       
    
          <div class="service-desc-content border-bb">
             <h4>SHOP NOTES / DETAILS</h4>
             <p>
                {{($CarData->concerigeHistory->notesdata)}}
             </p>
          </div>
          <div class="service-desc-content border-bb">
             <h4>PHOTOS</h4>
             <div class="cmn-slider-wrap">
                @if($CarData->concerigeHistory && $CarData->concerigeHistory->document)
                <div class="owl-carousel owl-theme photos-slider">
                   @foreach(explode(',',$CarData->concerigeHistory->document) as $key=>$value)
                   <?php  $chkextension= explode('.',$value); error_reporting(0);?>
                @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')
                
                   <div class="item">
                      <div class="slider-img lightbox"  id="{{ $value}}">
                         <img src="{{ $value}}" >
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
                @if($CarData->concerigeHistory && $CarData->concerigeHistory->document)
                <div class="owl-carousel owl-theme document-slider">
                   @foreach(explode(',',$CarData->concerigeHistory->document) as $key=>$value)
                   <?php  $chkextension= explode('.',$value);?>
                @if( trim($chkextension[5]) =='pdf')
             
                   <div class="item">
                      <a href="{{ $value}}" target="_blank">
                      <div class="slider-img"  id="{{ $value}}" style="background:none">
                      <img src="/assets/images/pdf.png" >
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

      {{-- car engine spicality service --}}
      @if($serviceId==12)
         @if($CarData->engineblockService)
               <div class="row border-bb">
               
                  <div class="col-6 col-md-6">
                     <div class="services-details text-right">
                        <p>Engine Block : </p>
                     </div>
                  </div>
                  <div class="col-6 col-md-6">
                     <div class="services-details">
                        <p class="primary-@if($CarData->engineblockService->engine_block=='Good')green @elseif($CarData->engineblockService->engine_block=='Leaks')red  @elseif($CarData->engineblockService->engine_block=='Repaired')green @else  primary-yellow @endif">@if($CarData->engineblockService->engine_block=='Good')Checks @elseif($CarData->engineblockService->engine_block=='Leaks')  @elseif($CarData->engineblockService->engine_block=='Repaired')Was @else Was @endif{{ucwords($CarData->engineblockService->engine_block)}} </p>
                     </div>
                  </div>
            
                  <div class="col-6 col-md-6">
                  <div class="services-details text-right">
                     <p>Engine Pistons: </p>
                  </div>
               </div>
               <div class="col-6 col-md-6">
                  <div class="services-details">
                     <p class="primary-@if($CarData->engineblockService->engine_pistons=='Good')green @elseif($CarData->engineblockService->engine_pistons=='Leaks')red  @elseif($CarData->engineblockService->engine_pistons=='Repaired')green @else  primary-yellow @endif">@if($CarData->engineblockService->engine_pistons=='Good')Checks @elseif($CarData->engineblockService->engine_pistons=='Leaks')  @elseif($CarData->engineblockService->engine_pistons=='Repaired')Was @else Was @endif{{ucwords($CarData->engineblockService->engine_pistons)}} </p>
                     {{-- <p>{{ucwords($CarData->engineblockService->engine_pistons)}} </p> --}}
                  </div>
               </div>
                  
               <div class="col-6 col-md-6">
                  <div class="services-details text-right">
                     <p>Engine Rods : </p>
                  </div>
               </div>
               <div class="col-6 col-md-6">
                  <div class="services-details">
                     <p class="primary-@if($CarData->engineblockService->engine_rods=='Good')green @elseif($CarData->engineblockService->engine_rods=='Leaks')red  @elseif($CarData->engineblockService->engine_rods=='Repaired')green @else  primary-yellow @endif">@if($CarData->engineblockService->engine_rods=='Good')Checks @elseif($CarData->engineblockService->engine_rods=='Leaks')  @elseif($CarData->engineblockService->engine_rods=='Repaired')Was @else Was @endif{{ucwords($CarData->engineblockService->engine_rods)}} </p>
                     {{-- <p>{{ucwords($CarData->engineblockService->engine_rods)}} </p> --}}
                  </div>
               </div>
               <div class="col-6 col-md-6">
                  <div class="services-details text-right">
                     <p>Engine Crankshaft : </p>
                  </div>
               </div>
               <div class="col-6 col-md-6">
                  <div class="services-details">
                     <p class="primary-@if($CarData->engineblockService->engine_crankshaft=='Good')green @elseif($CarData->engineblockService->engine_crankshaft=='Leaks')red  @elseif($CarData->engineblockService->engine_crankshaft=='Repaired')green @else primary-yellow @endif">@if($CarData->engineblockService->engine_crankshaft=='Good')Checks @elseif($CarData->engineblockService->engine_crankshaft=='Leaks')  @elseif($CarData->engineblockService->engine_crankshaft=='Repaired')Was @else Was @endif{{ucwords($CarData->engineblockService->engine_crankshaft)}} </p>
                     {{-- <p>{{ucwords($CarData->engineblockService->engine_crankshaft)}} </p> --}}
                  </div>
               </div>
               <div class="col-6 col-md-6">
                  <div class="services-details text-right">
                     <p>Engine Main Bearings : </p>
                  </div>
               </div>
               <div class="col-6 col-md-6">
                  <div class="services-details">
                     <p class="primary-@if($CarData->engineblockService->engine_main_bearings=='Good')green @elseif($CarData->engineblockService->engine_main_bearings=='Leaks')red  @elseif($CarData->engineblockService->engine_main_bearings=='Repaired')green @else primary-yellow @endif">@if($CarData->engineblockService->engine_main_bearings=='Good')Checks @elseif($CarData->engineblockService->engine_main_bearings=='Leaks')  @elseif($CarData->engineblockService->engine_main_bearings=='Repaired')Was @else Was @endif{{ucwords($CarData->engineblockService->engine_main_bearings)}} </p>
                     {{-- <p>{{ucwords($CarData->engineblockService->engine_main_bearings)}} </p> --}}
                  </div>
               </div>
               <div class="col-6 col-md-6">
                  <div class="services-details text-right">
                     <p>Engine Rod Bearing: </p>
                  </div>
               </div>
               <div class="col-6 col-md-6">
                  <div class="services-details">
                     <p class="primary-@if($CarData->engineblockService->engine_rod_bearing=='Good')green @elseif($CarData->engineblockService->engine_rod_bearing=='Leaks')red  @elseif($CarData->engineblockService->engine_rod_bearing=='Repaired')green @else primary-yellow @endif">@if($CarData->engineblockService->engine_rod_bearing=='Good')Checks @elseif($CarData->engineblockService->engine_rod_bearing=='Leaks')  @elseif($CarData->engineblockService->engine_rod_bearing=='Repaired')Was @else Was @endif{{ucwords($CarData->engineblockService->engine_rod_bearing)}} </p>
                  
                  </div>
               </div>
               <div class="col-6 col-md-6">
                  <div class="services-details text-right">
                     <p>Engine Cam Bearing: </p>
                  </div>
               </div>
               <div class="col-6 col-md-6">
                  <div class="services-details">
                     <p class="primary-@if($CarData->engineblockService->engine_cam_bearing=='Good')green @elseif($CarData->engineblockService->engine_cam_bearing=='Leaks')red  @elseif($CarData->engineblockService->engine_cam_bearing=='Repaired')green @else primary-yellow @endif">@if($CarData->engineblockService->engine_cam_bearing=='Good')Checks @elseif($CarData->engineblockService->engine_cam_bearing=='Leaks')  @elseif($CarData->engineblockService->engine_cam_bearing=='Repaired')Was @else Was @endif{{ucwords($CarData->engineblockService->engine_cam_bearing)}} </p>
                     {{-- <p>{{ucwords($CarData->engineblockService->engine_cam_bearing)}} </p> --}}
                  </div>
               </div>
               <div class="col-6 col-md-6">
                  <div class="services-details text-right">
                     <p>Engine Piston Rings: </p>
                  </div>
               </div>
               <div class="col-6 col-md-6">
                  <div class="services-details">
                     <p class="primary-@if($CarData->engineblockService->engine_piston_rings=='Good')green @elseif($CarData->engineblockService->engine_piston_rings=='Leaks')red  @elseif($CarData->engineblockService->engine_piston_rings=='Repaired')green @else primary-yellow @endif">@if($CarData->engineblockService->engine_piston_rings=='Good')Checks @elseif($CarData->engineblockService->engine_piston_rings=='Leaks')  @elseif($CarData->engineblockService->engine_piston_rings=='Repaired')Was @else Was @endif{{ucwords($CarData->engineblockService->engine_piston_rings)}} </p>
                     {{-- <p>{{ucwords($CarData->engineblockService->engine_piston_rings)}} </p> --}}
                  </div>
               </div>
               <div class="col-6 col-md-6">
                  <div class="services-details text-right">
                     <p>Engine Heads: </p>
                  </div>
               </div>
               <div class="col-6 col-md-6">
                  <div class="services-details">
                     <p class="primary-@if($CarData->engineblockService->engine_heads=='Good')green @elseif($CarData->engineblockService->engine_heads=='Leaks')red  @elseif($CarData->engineblockService->engine_heads=='Repaired')green @else primary-yellow @endif">@if($CarData->engineblockService->engine_heads=='Good')Checks @elseif($CarData->engineblockService->engine_heads=='Leaks')  @elseif($CarData->engineblockService->engine_heads=='Repaired')Was @else Was @endif{{ucwords($CarData->engineblockService->engine_heads)}} </p>
                     {{-- <p>{{ucwords($CarData->engineblockService->engine_heads)}} </p> --}}
                  </div>
               </div>
               <div class="col-6 col-md-6">
                  <div class="services-details text-right">
                     <p>Engine Oil Pan: </p>
                  </div>
               </div>
               <div class="col-6 col-md-6">
                  <div class="services-details">
                     <p class="primary-@if($CarData->engineblockService->engine_oil_pan=='Good')green @elseif($CarData->engineblockService->engine_oil_pan=='Leaks')red  @elseif($CarData->engineblockService->engine_oil_pan=='Repaired')green @else primary-yellow @endif">@if($CarData->engineblockService->engine_oil_pan=='Good')Checks @elseif($CarData->engineblockService->engine_oil_pan=='Leaks')  @elseif($CarData->engineblockService->engine_oil_pan=='Repaired')Was @else Was @endif{{ucwords($CarData->engineblockService->engine_oil_pan)}} </p>
                     {{-- <p>{{ucwords($CarData->engineblockService->engine_oil_pan)}} </p> --}}
                  </div>
               </div>
               <div class="col-6 col-md-6">
                  <div class="services-details text-right">
                     <p>Engine Valves: </p>
                  </div>
               </div>
               <div class="col-6 col-md-6">
                  <div class="services-details">
                     <p class="primary-@if($CarData->engineblockService->engine_valves=='Good')green @elseif($CarData->engineblockService->engine_valves=='Leaks')red  @elseif($CarData->engineblockService->engine_valves=='Repaired')green @else primary-yellow @endif">@if($CarData->engineblockService->engine_valves=='Good')Checks @elseif($CarData->engineblockService->engine_valves=='Leaks')  @elseif($CarData->engineblockService->engine_valves=='Repaired')Was @else Was @endif{{ucwords($CarData->engineblockService->engine_valves)}} </p>
                     {{-- <p>{{ucwords($CarData->engineblockService->engine_valves)}} </p> --}}
                  </div>
               </div>
               <div class="col-6 col-md-6">
                  <div class="services-details text-right">
                     <p>engine Lifters: </p>
                  </div>
               </div>
               <div class="col-6 col-md-6">
                  <div class="services-details">
                     <p class="primary-@if($CarData->engineblockService->engine_lifters=='Good')green @elseif($CarData->engineblockService->engine_lifters=='Leaks')red  @elseif($CarData->engineblockService->engine_lifters=='Repaired')green @else primary-yellow @endif">@if($CarData->engineblockService->engine_lifters=='Good')Checks @elseif($CarData->engineblockService->engine_lifters=='Leaks')  @elseif($CarData->engineblockService->engine_lifters=='Repaired')Was @else Was @endif{{ucwords($CarData->engineblockService->engine_lifters)}} </p>
                     {{-- <p>{{ucwords($CarData->engineblockService->engine_lifters)}} </p> --}}
                  </div>
               </div>
               <div class="col-6 col-md-6">
                  <div class="services-details text-right">
                     <p>Engine Exhaust Manifold: </p>
                  </div>
               </div>
               <div class="col-6 col-md-6">
                  <div class="services-details">
                     <p class="primary-@if($CarData->engineblockService->engine_exhaust_manifold=='Good')green @elseif($CarData->engineblockService->engine_exhaust_manifold=='Leaks')red  @elseif($CarData->engineblockService->engine_exhaust_manifold=='Repaired')green @else primary-yellow @endif">@if($CarData->engineblockService->engine_exhaust_manifold=='Good')Checks @elseif($CarData->engineblockService->engine_exhaust_manifold=='Leaks')  @elseif($CarData->engineblockService->engine_exhaust_manifold=='Repaired')Was @else Was @endif{{ucwords($CarData->engineblockService->engine_exhaust_manifold)}} </p>
                     {{-- <p>{{ucwords($CarData->engineblockService->engine_exhaust_manifold)}} </p> --}}
                  </div>
               </div>
               <div class="col-6 col-md-6">
                  <div class="services-details text-right">
                     <p>Engine Intake Manifold: </p>
                  </div>
               </div>
               <div class="col-6 col-md-6">
                  <div class="services-details">
                     <p class="primary-@if($CarData->engineblockService->engine_intake_manifold=='Good')green @elseif($CarData->engineblockService->engine_intake_manifold=='Leaks')red  @elseif($CarData->engineblockService->engine_intake_manifold=='Repaired')green @else primary-yellow @endif">@if($CarData->engineblockService->engine_intake_manifold=='Good')Checks @elseif($CarData->engineblockService->engine_intake_manifold=='Leaks')  @elseif($CarData->engineblockService->engine_intake_manifold=='Repaired')Was @else Was @endif{{ucwords($CarData->engineblockService->engine_intake_manifold)}} </p>
                  
                  </div>
               </div>
               <div class="col-6 col-md-6">
                  <div class="services-details text-right">
                     <p>Engine Timing: </p>
                  </div>
               </div>
               <div class="col-6 col-md-6">
                  <div class="services-details">
                     <p class="primary-@if($CarData->engineblockService->engine_timing=='Good')green @elseif($CarData->engineblockService->engine_timing=='Leaks')red  @elseif($CarData->engineblockService->engine_timing=='Repaired')green @else primary-yellow @endif">@if($CarData->engineblockService->engine_timing=='Good')Checks @elseif($CarData->engineblockService->engine_timing=='Leaks')  @elseif($CarData->engineblockService->engine_timing=='Repaired')Was @else Was @endif{{ucwords($CarData->engineblockService->engine_timing)}} </p>
                     {{-- <p>{{ucwords($CarData->engineblockService->engine_timing)}} </p> --}}
                  </div>
               </div>
               <div class="col-6 col-md-6">
                  <div class="services-details text-right">
                     <p>Engine Services: </p>
                  </div>
               </div>
               <div class="col-6 col-md-6">
                  <div class="services-details">
               
                     <p>{{ucwords($CarData->engineblockService->engine_services)}} </p>
                  </div>
               </div>

            
         
            </div>
            </div>
         

            <div class="service-desc-content border-bb">
               <h4>SHOP NOTES / DETAILS</h4>
               <p>
                  {{($CarData->engineblockService->issue_diagnosis)}}
               </p>
            </div>
            <div class="service-desc-content border-bb">
               <h4>PHOTOS</h4>
               <div class="cmn-slider-wrap">
                  @if($CarData->engineblockService && $CarData->engineblockService->document)
                  <div class="owl-carousel owl-theme photos-slider">
                     @foreach(explode(',',$CarData->engineblockService->document) as $key=>$value)
                     <?php  $chkextension= explode('.',$value); error_reporting(0);?>
                  @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')
                  
                     <div class="item">
                        <div class="slider-img lightbox"  id="{{ $value}}">
                           <img src="{{ $value}}" >
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
                  @if($CarData->engineblockService && $CarData->engineblockService->document)
                  <div class="owl-carousel owl-theme document-slider">
                     @foreach(explode(',',$CarData->engineblockService->document) as $key=>$value)
                     <?php  $chkextension= explode('.',$value);?>
                  @if( trim($chkextension[5]) =='pdf')
               
                     <div class="item">
                        <a href="{{ $value}}" target="_blank">
                        <div class="slider-img"  id="{{ $value}}" style="background:none">
                        <img src="/assets/images/pdf.png" >
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
   @if($CarData->exhaustService)
         <div class="row border-bb">
         
            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p > MANIFOLD (S):</p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p class="primary-@if($CarData->exhaustService->exhaust_manifold=='Good')green @elseif($CarData->exhaustService->exhaust_manifold=='Bad')red  @elseif($CarData->exhaustService->exhaust_manifold=='Replaced')yellow @else primary-blue @endif">@if($CarData->exhaustService->exhaust_manifold=='Good')Checks @elseif($CarData->exhaustService->exhaust_manifold=='Bad')  @elseif($CarData->exhaustService->exhaust_manifold=='Replaced')Was @else Was @endif {{ucwords($CarData->exhaustService->exhaust_manifold)}}</p>
               </div>
            </div>

            <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>RESONATOR(S): </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p class="primary-@if($CarData->exhaustService->exhaust_resonator=='Good')green @elseif($CarData->exhaustService->exhaust_resonator=='Bad')red  @elseif($CarData->exhaustService->exhaust_resonator=='Replaced')yellow @else primary-blue @endif">@if($CarData->exhaustService->exhaust_resonator=='Good')Checks @elseif($CarData->exhaustService->exhaust_resonator=='Bad')  @elseif($CarData->exhaustService->exhaust_resonator=='Replaced')Was @else Was @endif {{ucwords($CarData->exhaustService->exhaust_resonator)}}</p>
            </div>
         </div>

         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>MUFFLER(S): </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p class="primary-@if($CarData->exhaustService->exhaust_muffler=='Good')green @elseif($CarData->exhaustService->exhaust_muffler=='Bad')red  @elseif($CarData->exhaustService->exhaust_muffler=='Replaced')yellow @else primary-blue @endif">@if($CarData->exhaustService->exhaust_muffler=='Good')Checks @elseif($CarData->exhaustService->exhaust_muffler=='Bad')  @elseif($CarData->exhaustService->exhaust_muffler=='Replaced')Was @else Was @endif {{ucwords($CarData->exhaustService->exhaust_muffler)}}</p>
            </div>
         </div>
            
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>   PIPES / CLAMPS : </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p class="primary-@if($CarData->exhaustService->exhaust_pipes=='Good')green @elseif($CarData->exhaustService->exhaust_pipes=='Bad')red  @elseif($CarData->exhaustService->exhaust_pipes=='Replaced')yellow @else primary-blue @endif">@if($CarData->exhaustService->exhaust_pipes=='Good')Checks @elseif($CarData->exhaustService->exhaust_pipes=='Bad')  @elseif($CarData->exhaustService->exhaust_pipes=='Replaced')Was @else Was @endif {{ucwords($CarData->exhaustService->exhaust_pipes)}}</p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>ISOLATORS / GASKETS / LINKAGES : </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p class="primary-@if($CarData->exhaustService->exhaust_isolators=='Good')green @elseif($CarData->exhaustService->exhaust_isolators=='Bad')red  @elseif($CarData->exhaustService->exhaust_isolators=='Replaced')yellow @else primary-blue @endif">@if($CarData->exhaustService->exhaust_isolators=='Good')Checks @elseif($CarData->exhaustService->exhaust_isolators=='Bad')  @elseif($CarData->exhaustService->exhaust_isolators=='Replaced')Was @else Was @endif {{ucwords($CarData->exhaustService->exhaust_isolators)}}</p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>O2 SENSOR<small>(S)</small> : </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p class="primary-@if($CarData->exhaustService->exhaust_o2sensor=='Good')green @elseif($CarData->exhaustService->exhaust_o2sensor=='Bad')red  @elseif($CarData->exhaustService->exhaust_o2sensor=='Replaced')yellow @else primary-blue @endif">@if($CarData->exhaustService->exhaust_o2sensor=='Good')Checks @elseif($CarData->exhaustService->exhaust_o2sensor=='Bad')  @elseif($CarData->exhaustService->exhaust_o2sensor=='Replaced')Was @else Was @endif {{ucwords($CarData->exhaustService->exhaust_o2sensor)}}</p>
            </div>
         </div>
      
      
      </div>
      </div>


<div class="service-desc-content border-bb">
<h4>SHOP NOTES / DETAILS</h4>
<p>
   {{($CarData->exhaustService->exhasut_notes)}}
</p>
</div>
<div class="service-desc-content border-bb">
<h4>PHOTOS</h4>
<div class="cmn-slider-wrap">
   @if($CarData->exhaustService && $CarData->exhaustService->document)
   <div class="owl-carousel owl-theme photos-slider">
      @foreach(explode(',',$CarData->exhaustService->document) as $key=>$value)
      <?php  $chkextension= explode('.',$value); error_reporting(0);?>
   @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')
   
      <div class="item">
         <div class="slider-img lightbox"  id="{{ $value}}">
            <img src="{{ $value}}" >
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
   @if($CarData->exhaustService && $CarData->exhaustService->document)
   <div class="owl-carousel owl-theme document-slider">
      @foreach(explode(',',$CarData->exhaustService->document) as $key=>$value)
      <?php  $chkextension= explode('.',$value);?>
   @if( trim($chkextension[5]) =='pdf')

      <div class="item">
         <a href="{{ $value}}" target="_blank">
         <div class="slider-img"  id="{{ $value}}" style="background:none">
         <img src="/assets/images/pdf.png" >
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
      @if($CarData->OilServices)
         <div class="row border-bb">
      
            <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p > MILEAGE:</p>
            </div>
            </div>
            <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->OilServices->oil_mileage)}} </p>
            </div>
            </div>

            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p>OIL TYPE: </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p>{{ucwords($CarData->OilServices->oil_type)}} </p>
               </div>
            </div>

            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p>OIL BRAND: </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p>{{ucwords($CarData->OilServices->oil_brand)}} </p>
               </div>
            </div>
         
            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p>AMOUNT ADDED : </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p>{{ucwords($CarData->OilServices->oil_amount_added)}} </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p>FILTER TYPE: </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p>{{ucwords($CarData->OilServices->oil_filter_type)}} </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p>FILTER BRAND : </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p>{{ucwords($CarData->OilServices->oil_filter_brand)}} </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p>FLUID SERVICE : </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
               <p>{{ucwords($CarData->OilServices->oil_fluid_service)}} </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p>OIL PAN REMOVED: </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
                  <div class="services-details">
                  <p>{{ucwords($CarData->OilServices->oil_pan_removed)}} </p>
                  </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p>OIL PAN GASKET REPLACED : </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p>{{ucwords($CarData->OilServices->oil_pan_gaskit)}} </p>
               </div>
            </div>

            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p>OIL PAN NUT REPLACED : </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p>{{ucwords($CarData->OilServices->oil_pan_nut)}} </p>
               </div>
            </div>


         </div>



         <div class="service-desc-content border-bb">
            <h4>PHOTOS</h4>
            <div class="cmn-slider-wrap">
               @if($CarData->OilServices && $CarData->OilServices->document)
                  <div class="owl-carousel owl-theme photos-slider">
                     @foreach(explode(',',$CarData->OilServices->document) as $key=>$value)
                        <?php  $chkextension= explode('.',$value); error_reporting(0);?>
                        @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

                           <div class="item">
                              <div class="slider-img lightbox"  id="{{ $value}}">
                                 <img src="{{ $value}}" >
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
                  @if($CarData->OilServices && $CarData->OilServices->document)
                     <div class="owl-carousel owl-theme document-slider">
                        @foreach(explode(',',$CarData->OilServices->document) as $key=>$value)
                           <?php  $chkextension= explode('.',$value);?>
                           @if( trim($chkextension[5]) =='pdf')

                              <div class="item">
                              <a href="{{ $value}}" target="_blank">
                              <div class="slider-img"  id="{{ $value}}" style="background:none">
                              <img src="/assets/images/pdf.png" >
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

  {{-- brake service --}}
   @if($serviceId==3)
      @if($CarData->batteryServices)
         <div class="row border-bb">
      
            <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p >Service Type:</p>
            </div>
            </div>
            <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->batteryServices->service_type)}} </p>
            </div>
            </div>

            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p>Batery TYPE: </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p>{{ucwords($CarData->batteryServices->battery_type)}} </p>
               </div>
            </div>

            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p>Battery BRAND: </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p>{{ucwords($CarData->batteryServices->battery_brand)}} </p>
               </div>
            </div>
         
            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p> Part Number : </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p>{{ucwords($CarData->batteryServices->part_number)}} </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p>Manufactured Date: </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p>{{date("m/d/Y", strtotime($CarData->batteryServices->manufactured_date) )}} </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p>Expiration Date: </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p>{{date("m/d/Y", strtotime($CarData->batteryServices->expiration_date) )  }} </p>
               </div>
            </div>
        
         </div>



         <div class="service-desc-content border-bb">
            <h4>PHOTOS</h4>
            <div class="cmn-slider-wrap">
               @if($CarData->batteryServices && $CarData->batteryServices->document)
                  <div class="owl-carousel owl-theme photos-slider">
                     @foreach(explode(',',$CarData->batteryServices->document) as $key=>$value)
                        <?php  $chkextension= explode('.',$value); error_reporting(0);?>
                        @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

                           <div class="item">
                              <div class="slider-img lightbox"  id="{{ $value}}">
                                 <img src="{{ $value}}" >
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
                  @if($CarData->batteryServices && $CarData->batteryServices->document)
                     <div class="owl-carousel owl-theme document-slider">
                        @foreach(explode(',',$CarData->batteryServices->document) as $key=>$value)
                           <?php  $chkextension= explode('.',$value);?>
                           @if( trim($chkextension[5]) =='pdf')

                              <div class="item">
                              <a href="{{ $value}}" target="_blank">
                              <div class="slider-img"  id="{{ $value}}" style="background:none">
                              <img src="/assets/images/pdf.png" >
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
   @if($CarData->powderCoatingServices)
      <div class="row border-bb">
   
         <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p >Was Powder Coating:</p>
         </div>
         </div>
         <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->powderCoatingServices->was_powder_coating)}} </p>
         </div>
         </div>

         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Manufacturer By: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->powderCoatingServices->manufacturer_by)}} </p>
            </div>
         </div>

         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>PC System: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->powderCoatingServices->pc_system)}} </p>
            </div>
         </div>
      
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p> Color Code: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->powderCoatingServices->color_code)}} </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p> Paint Color: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->powderCoatingServices->paint_color)}} </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Is Waranty: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->powderCoatingServices->is_waranty)}} </p>
            </div>
         </div>
         
         @if($CarData->powderCoatingServices->is_waranty=='Yes')
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Waranty Company: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->powderCoatingServices->waranty_company)}} </p>
            </div>
         </div>
         @endif
         <div class="service-desc-content border-bb">
            <h4> NOTES / DETAILS</h4>
            <p>
               {{($CarData->powderCoatingServices->powder_coating_note)}}
            </p>
         </div>
      </div>



      <div class="service-desc-content border-bb">
         <h4>PHOTOS</h4>
         <div class="cmn-slider-wrap">
            @if($CarData->powderCoatingServices && $CarData->powderCoatingServices->document)
               <div class="owl-carousel owl-theme photos-slider">
                  @foreach(explode(',',$CarData->powderCoatingServices->document) as $key=>$value)
                     <?php  $chkextension= explode('.',$value); error_reporting(0);?>
                     @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

                        <div class="item">
                           <div class="slider-img lightbox"  id="{{ $value}}">
                              <img src="{{ $value}}" >
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
               @if($CarData->powderCoatingServices && $CarData->powderCoatingServices->document)
                  <div class="owl-carousel owl-theme document-slider">
                     @foreach(explode(',',$CarData->powderCoatingServices->document) as $key=>$value)
                        <?php  $chkextension= explode('.',$value);?>
                        @if( trim($chkextension[5]) =='pdf')

                           <div class="item">
                           <a href="{{ $value}}" target="_blank">
                           <div class="slider-img"  id="{{ $value}}" style="background:none">
                           <img src="/assets/images/pdf.png" >
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
   @if($CarData->tireServices)
      <div class="row border-bb">
         {{-- Front side --}}
         @if($CarData->tireServices->driver_front_psi !="")
         <h3 class="tireheader">Driver Front</h3>
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p >PSI:</p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->tireServices->driver_front_psi)}} </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p >Tread Depth::</p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->tireServices->driver_front_tread_depth)}} </p>
            </div>
         </div>

         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Condition: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->tireServices->driver_front_condition)}} </p>
            </div>
         </div>

         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Brand: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->tireServices->driver_front_brand)}} </p>
            </div>
         </div>
      
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Tier Size: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->tireServices->driver_front_tire_size)}} </p>
            </div>
         </div>
         @endif
         {{-- end front size --}}
         {{-- Driver Rear side --}}
         @if($CarData->tireServices->driver_rear_psi !="")
         <h3 class="tireheader">Driver Rear</h3>
         <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p >PSI:</p>
         </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->tireServices->driver_rear_psi)}} </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p >Tread Depath::</p>
         </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->tireServices->driver_rear_tread_depth)}} </p>
            </div>
         </div>

         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Condition: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->tireServices->driver_rear_condition)}} </p>
            </div>
         </div>

         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Brand: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->tireServices->driver_rear_brand)}} </p>
            </div>
         </div>
      
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Tier Size: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->tireServices->driver_rear_tire_size)}} </p>
            </div>
         </div>
         @endif
         {{-- end Driver rear size --}}
         {{-- Passenger Front start side --}}
         @if($CarData->tireServices->passenger_front_psi !="")
         <h3 class="tireheader">Passenger Front</h3>
         <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p >PSI:</p>
         </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->tireServices->passenger_front_psi)}} </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p >Tread Depath::</p>
         </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->tireServices->passenger_front_tread_depth)}} </p>
            </div>
         </div>

         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Condition: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->tireServices->passenger_front_condition)}} </p>
            </div>
         </div>

         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Brand: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->tireServices->passenger_front_brand)}} </p>
            </div>
         </div>
      
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Tier Size: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->tireServices->passenger_front_tire_size)}} </p>
            </div>
         </div>
         @endif
         {{-- end Passenger Font --}}

           {{-- Passenger Rear start side --}}
           @if($CarData->tireServices->passenger_rear_psi !="")
           <h3 class="tireheader">Passenger Rear</h3>
           <div class="col-6 col-md-6">
           <div class="services-details text-right">
              <p >PSI:</p>
           </div>
           </div>
           <div class="col-6 col-md-6">
              <div class="services-details">
                 <p>{{ucwords($CarData->tireServices->passenger_rear_psi)}} </p>
              </div>
           </div>
           <div class="col-6 col-md-6">
           <div class="services-details text-right">
              <p >Tread Depath::</p>
           </div>
           </div>
           <div class="col-6 col-md-6">
              <div class="services-details">
                 <p>{{ucwords($CarData->tireServices->passenger_rear_tread_depth)}} </p>
              </div>
           </div>
  
           <div class="col-6 col-md-6">
              <div class="services-details text-right">
                 <p>Condition: </p>
              </div>
           </div>
           <div class="col-6 col-md-6">
              <div class="services-details">
                 <p>{{ucwords($CarData->tireServices->passenger_rear_condition)}} </p>
              </div>
           </div>
  
           <div class="col-6 col-md-6">
              <div class="services-details text-right">
                 <p>Brand: </p>
              </div>
           </div>
           <div class="col-6 col-md-6">
              <div class="services-details">
                 <p>{{ucwords($CarData->tireServices->passenger_rear_brand)}} </p>
              </div>
           </div>
        
           <div class="col-6 col-md-6">
              <div class="services-details text-right">
                 <p>Tier Size: </p>
              </div>
           </div>
           <div class="col-6 col-md-6">
              <div class="services-details">
                 <p>{{ucwords($CarData->tireServices->passenger_rear_tire_size)}} </p>
              </div>
           </div>
           @endif
           {{-- end Passenger Font --}}
         
       
      </div>



      <div class="service-desc-content border-bb">
         <h4>PHOTOS</h4>
         <div class="cmn-slider-wrap">
            @if($CarData->tireServices && $CarData->tireServices->document)
               <div class="owl-carousel owl-theme photos-slider">
                  @foreach(explode(',',$CarData->tireServices->document) as $key=>$value)
                     <?php  $chkextension= explode('.',$value); error_reporting(0);?>
                     @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

                        <div class="item">
                           <div class="slider-img lightbox"  id="{{ $value}}">
                              <img src="{{ $value}}" >
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
               @if($CarData->tireServices && $CarData->tireServices->document)
                  <div class="owl-carousel owl-theme document-slider">
                     @foreach(explode(',',$CarData->tireServices->document) as $key=>$value)
                        <?php  $chkextension= explode('.',$value);?>
                        @if( trim($chkextension[5]) =='pdf')

                           <div class="item">
                           <a href="{{ $value}}" target="_blank">
                           <div class="slider-img"  id="{{ $value}}" style="background:none">
                           <img src="/assets/images/pdf.png" >
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
 {{-- powder coating service --}}
 @if($serviceId==25)
   @if($CarData->partServices)
      <div class="row border-bb">
   
         <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p >System:</p>
         </div>
         </div>
         <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->partServices->system)}} </p>
         </div>
         </div>

         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Diagnosis: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->partServices->diagnosis)}} </p>
            </div>
         </div>

         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Part: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->partServices->part)}} </p>
            </div>
         </div>
      
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p> Manufacturer By: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->partServices->manufacturer_by)}} </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Part Number: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->partServices->part_number)}} </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Is Waranty: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->partServices->is_waranty)}} </p>
            </div>
         </div>
         
         @if($CarData->partServices->is_waranty=='Yes')
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Waranty Company: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->partServices->waranty_company)}} </p>
            </div>
         </div>
         @endif
         <div class="service-desc-content border-bb">
            <h4> NOTES / DETAILS</h4>
            <p>
               {{($CarData->partServices->part_note)}}
            </p>
         </div>
      </div>



      <div class="service-desc-content border-bb">
         <h4>PHOTOS</h4>
         <div class="cmn-slider-wrap">
            @if($CarData->partServices && $CarData->partServices->document)
               <div class="owl-carousel owl-theme photos-slider">
                  @foreach(explode(',',$CarData->partServices->document) as $key=>$value)
                     <?php  $chkextension= explode('.',$value); error_reporting(0);?>
                     @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

                        <div class="item">
                           <div class="slider-img lightbox"  id="{{ $value}}">
                              <img src="{{ $value}}" >
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
               @if($CarData->partServices && $CarData->partServices->document)
                  <div class="owl-carousel owl-theme document-slider">
                     @foreach(explode(',',$CarData->partServices->document) as $key=>$value)
                        <?php  $chkextension= explode('.',$value);?>
                        @if( trim($chkextension[5]) =='pdf')

                           <div class="item">
                           <a href="{{ $value}}" target="_blank">
                           <div class="slider-img"  id="{{ $value}}" style="background:none">
                           <img src="/assets/images/pdf.png" >
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
 {{-- electrical service --}}
 @if($serviceId==11)
   @if($CarData->electricServices)
      <div class="row border-bb">
   
         <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p >System:</p>
         </div>
         </div>
         <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->electricServices->system)}} </p>
         </div>
         </div>

         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Diagnosis: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->electricServices->diagnosis)}} </p>
            </div>
         </div>

         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Action: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->electricServices->action)}} </p>
            </div>
         </div>
      
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p> Manufacturer By: </p>
            </div>
         </div>

         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->electricServices->manufacturer_by)}} </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Is Waranty: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->electricServices->is_waranty)}} </p>
            </div>
         </div>
         
         @if($CarData->electricServices->is_waranty=='Yes')
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Waranty Company: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->electricServices->waranty_company)}} </p>
            </div>
         </div>
         @endif
         <div class="service-desc-content border-bb">
            <h4> NOTES / DETAILS</h4>
            <p>
               {{($CarData->electricServices->electric_notes)}}
            </p>
         </div>
      </div>



      <div class="service-desc-content border-bb">
         <h4>PHOTOS</h4>
         <div class="cmn-slider-wrap">
            @if($CarData->electricServices && $CarData->electricServices->documents)
               <div class="owl-carousel owl-theme photos-slider">
                  @foreach(explode(',',$CarData->electricServices->documents) as $key=>$value)
                     <?php  $chkextension= explode('.',$value); error_reporting(0);?>
                     @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

                        <div class="item">
                           <div class="slider-img lightbox"  id="{{ $value}}">
                              <img src="{{ $value}}" >
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
               @if($CarData->electricServices && $CarData->electricServices->documents)
                  <div class="owl-carousel owl-theme document-slider">
                     @foreach(explode(',',$CarData->electricServices->documents) as $key=>$value)
                        <?php  $chkextension= explode('.',$value);?>
                        @if( trim($chkextension[5]) =='pdf')

                           <div class="item">
                           <a href="{{ $value}}" target="_blank">
                           <div class="slider-img"  id="{{ $value}}" style="background:none">
                           <img src="/assets/images/pdf.png" >
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
   @if($CarData->transmissionServices)
      <div class="row border-bb">
   
         <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p >Service Type:</p>
         </div>
         </div>
         <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->transmissionServices->service_type)}} </p>
         </div>
         </div>

         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Fluid Type: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->transmissionServices->fluid_type)}} </p>
            </div>
         </div>

         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Filter Brand: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->transmissionServices->filter_brand)}} </p>
            </div>
         </div>
      
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Lubrication Pan Gasket Replaced: </p>
            </div>
         </div>

         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->transmissionServices->lubrication_pan_gasket_replaced)}} </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Lubrication Pan Replaced: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->transmissionServices->lubrication_pan_replaced)}} </p>
            </div>
         </div>
         
     
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Mileage: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->transmissionServices->mileage)}} </p>
            </div>
         </div>
       
         <div class="service-desc-content border-bb">
            <h4> NOTES / DETAILS</h4>
            <p>
               {{($CarData->transmissionServices->transmission_notes)}}
            </p>
         </div>
      </div>



      <div class="service-desc-content border-bb">
         <h4>PHOTOS</h4>
         <div class="cmn-slider-wrap">
            @if($CarData->transmissionServices && $CarData->transmissionServices->document)
               <div class="owl-carousel owl-theme photos-slider">
                  @foreach(explode(',',$CarData->transmissionServices->document) as $key=>$value)
                     <?php  $chkextension= explode('.',$value); error_reporting(0);?>
                     @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

                        <div class="item">
                           <div class="slider-img lightbox"  id="{{ $value}}">
                              <img src="{{ $value}}" >
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
               @if($CarData->transmissionServices && $CarData->transmissionServices->document)
                  <div class="owl-carousel owl-theme document-slider">
                     @foreach(explode(',',$CarData->transmissionServices->document) as $key=>$value)
                        <?php  $chkextension= explode('.',$value);?>
                        @if( trim($chkextension[5]) =='pdf')

                           <div class="item">
                           <a href="{{ $value}}" target="_blank">
                           <div class="slider-img"  id="{{ $value}}" style="background:none">
                           <img src="/assets/images/pdf.png" >
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
   @if($CarData->tintServices)
      <div class="row border-bb">
   
         <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p >Service:</p>
         </div>
         </div>
         <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->tintServices->tintservices)}} </p>
         </div>
         </div>

         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Manufacture: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->tintServices->tint_manufacture)}} </p>
            </div>
         </div>

         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Type: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->tintServices->tint_type)}} </p>
            </div>
         </div>
      
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Percentage: </p>
            </div>
         </div>

         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->tintServices->percentage)}} </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Oem Match: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->tintServices->tint_oem_match)}} </p>
            </div>
         </div>
         
     
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Oem Manufacture: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->tintServices->oem_manufacture)}} </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Is Waranty: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->tintServices->tint_warranty)}} </p>
            </div>
         </div>
         
         @if($CarData->tintServices->tint_warranty=='Yes')
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Waranty Company: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->tintServices->warranty_company)}} </p>
            </div>
         </div>
         @endif
       
         <div class="service-desc-content border-bb">
            <h4> NOTES / DETAILS</h4>
            <p>
               {{($CarData->tintServices->tint_notes)}}
            </p>
         </div>
      </div>



      <div class="service-desc-content border-bb">
         <h4>PHOTOS</h4>
         <div class="cmn-slider-wrap">
            @if($CarData->tintServices && $CarData->tintServices->document)
               <div class="owl-carousel owl-theme photos-slider">
                  @foreach(explode(',',$CarData->tintServices->document) as $key=>$value)
                     <?php  $chkextension= explode('.',$value); error_reporting(0);?>
                     @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

                        <div class="item">
                           <div class="slider-img lightbox"  id="{{ $value}}">
                              <img src="{{ $value}}" >
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
               @if($CarData->tintServices && $CarData->tintServices->document)
                  <div class="owl-carousel owl-theme document-slider">
                     @foreach(explode(',',$CarData->tintServices->document) as $key=>$value)
                        <?php  $chkextension= explode('.',$value);?>
                        @if( trim($chkextension[5]) =='pdf')

                           <div class="item">
                           <a href="{{ $value}}" target="_blank">
                           <div class="slider-img"  id="{{ $value}}" style="background:none">
                           <img src="/assets/images/pdf.png" >
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
   @if($CarData->glassServices)
      <div class="row border-bb">
   
         <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p >Windshield Services:</p>
         </div>
         </div>
         <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->glassServices->windshield)}} </p>
         </div>
         </div>

         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Brand Type: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->glassServices->brand)}} </p>
            </div>
         </div>

         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Driver Front Window Motor: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->glassServices->driver_front_window_motor)}} </p>
            </div>
         </div>
      
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Driver Back Window Motor: </p>
            </div>
         </div>

         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->glassServices->driver_back_window_motor)}} </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Passenger Rear Window Motor: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->glassServices->passenger_rear_window_motor)}} </p>
            </div>
         </div>
         
     
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Back Hatch Window Motor: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->glassServices->back_hatch_window_motor)}} </p>
            </div>
         </div>

         
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Windshield Replaced: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->glassServices->windshield_replaced)}} </p>
            </div>
         </div>

         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Sensor Data: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->glassServices->sensor_data)}} </p>
            </div>
         </div>

         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Is Waranty: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->glassServices->warranty)}} </p>
            </div>
         </div>
         
         @if($CarData->glassServices->warranty=='Yes')
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Waranty Company: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->glassServices->warranty_company)}} </p>
            </div>
         </div>
         @endif
       
         <div class="service-desc-content border-bb">
            <h4> NOTES / DETAILS</h4>
            <p>
               {{($CarData->glassServices->glass_notes)}}
            </p>
         </div>
      </div>



      <div class="service-desc-content border-bb">
         <h4>PHOTOS</h4>
         <div class="cmn-slider-wrap">
            @if($CarData->glassServices && $CarData->glassServices->document)
               <div class="owl-carousel owl-theme photos-slider">
                  @foreach(explode(',',$CarData->glassServices->document) as $key=>$value)
                     <?php  $chkextension= explode('.',$value); error_reporting(0);?>
                     @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

                        <div class="item">
                           <div class="slider-img lightbox"  id="{{ $value}}">
                              <img src="{{ $value}}" >
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
               @if($CarData->glassServices && $CarData->glassServices->document)
                  <div class="owl-carousel owl-theme document-slider">
                     @foreach(explode(',',$CarData->glassServices->document) as $key=>$value)
                        <?php  $chkextension= explode('.',$value);?>
                        @if( trim($chkextension[5]) =='pdf')

                           <div class="item">
                           <a href="{{ $value}}" target="_blank">
                           <div class="slider-img"  id="{{ $value}}" style="background:none">
                           <img src="/assets/images/pdf.png" >
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
   @if($CarData->rimServices)
      <div class="row border-bb">
   
         <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p >Service Type:</p>
         </div>
         </div>
         <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->rimServices->service_type)}} </p>
         </div>
         </div>

       
      </div>



      <div class="service-desc-content border-bb">
         <h4>BEFORE SERVICE PHOTOS</h4>
         <div class="cmn-slider-wrap">
            @if($CarData->rimServices && $CarData->rimServices->before_service_image)
               <div class="owl-carousel owl-theme photos-slider">
                  @foreach(explode(',',$CarData->rimServices->before_service_image) as $key=>$value)
                     <?php  $chkextension= explode('.',$value); error_reporting(0);?>
                     @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

                        <div class="item">
                           <div class="slider-img lightbox"  id="{{ $value}}">
                              <img src="{{ $value}}" >
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
               @if($CarData->rimServices && $CarData->rimServices->before_service_image)
                  <div class="owl-carousel owl-theme document-slider">
                     @foreach(explode(',',$CarData->rimServices->before_service_image) as $key=>$value)
                        <?php  $chkextension= explode('.',$value);?>
                        @if( trim($chkextension[5]) =='pdf')

                           <div class="item">
                           <a href="{{ $value}}" target="_blank">
                           <div class="slider-img"  id="{{ $value}}" style="background:none">
                           <img src="/assets/images/pdf.png" >
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
         <div class="cmn-slider-wrap">
            @if($CarData->rimServices && $CarData->rimServices->after_service_images)
               <div class="owl-carousel owl-theme photos-slider">
                  @foreach(explode(',',$CarData->rimServices->after_service_images) as $key=>$value)
                     <?php  $chkextension= explode('.',$value); error_reporting(0);?>
                     @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

                        <div class="item">
                           <div class="slider-img lightbox"  id="{{ $value}}">
                              <img src="{{ $value}}" >
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
               @if($CarData->rimServices && $CarData->rimServices->after_service_images)
                  <div class="owl-carousel owl-theme document-slider">
                     @foreach(explode(',',$CarData->rimServices->after_service_images) as $key=>$value)
                        <?php  $chkextension= explode('.',$value);?>
                        @if( trim($chkextension[5]) =='pdf')

                           <div class="item">
                           <a href="{{ $value}}" target="_blank">
                           <div class="slider-img"  id="{{ $value}}" style="background:none">
                           <img src="/assets/images/pdf.png" >
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
   @if($CarData->raceTrackServices)
      <div class="row border-bb">
   
         <div class="col-6 col-md-6">
         <div class="services-details text-right">
            <p >Track Name:</p>
         </div>
         </div>
         <div class="col-6 col-md-6">
         <div class="services-details">
            <p>{{ucwords($CarData->raceTrackServices->track_name)}} </p>
         </div>
         </div>

         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Location: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->raceTrackServices->location)}} </p>
            </div>
         </div>

         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Track Type: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->raceTrackServices->track_type)}} </p>
            </div>
         </div>
      
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>0-60 mph: </p>
            </div>
         </div>

         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{ucwords($CarData->raceTrackServices->zero_to_sixty_mph)}} </p>
            </div>
         </div>
         @if($CarData->raceTrackServices->lap_one)
         @php
         $lapdata=json_decode($CarData->raceTrackServices->lap_one,true);
      
         @endphp
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Lap 1: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{$lapdata['lap_one_min'] ?? '0'}} min  @if($lapdata['lap_one_sec']){{$lapdata['lap_one_sec'] }} @else 0 @endif Sec </p>
            </div>
         </div>
         @endif
         
         @if($CarData->raceTrackServices->lap_two)
         @php
         $lapdata2=json_decode($CarData->raceTrackServices->lap_two,true);
      
         @endphp
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Lap 2: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{$lapdata2['lap_two_min'] ?? '0'}} min  @if($lapdata2['lap_two_sec']){{$lapdata2['lap_two_sec'] }} @else 0 @endif Sec </p>
               {{-- <p>{{ucwords($CarData->raceTrackServices->lap_two)}} </p> --}}
            </div>
         </div>
         @endif
         @if($CarData->raceTrackServices->lap_three)
         @php
         $lapdata3=json_decode($CarData->raceTrackServices->lap_three,true);
      
         @endphp
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Lap 3: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{$lapdata3['lap_three_min'] ?? '0'}} min  @if($lapdata3['lap_three_sec']){{$lapdata3['lap_three_sec'] }} @else 0 @endif Sec </p>
               {{-- <p>{{ucwords($CarData->raceTrackServices->lap_three)}} </p> --}}
            </div>
         </div>
         @endif
         @if($CarData->raceTrackServices->lap_four)
         @php
         $lapdata4=json_decode($CarData->raceTrackServices->lap_four,true);
      
         @endphp
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Lap 4: </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{$lapdata4['lap_four_min'] ?? '0'}} min  @if($lapdata4['lap_four_sec']){{$lapdata4['lap_four_sec'] }} @else 0 @endif Sec </p>
               {{-- <p>{{ucwords($CarData->raceTrackServices->lap_four)}} </p> --}}
            </div>
         </div>
         @endif

         {{-- run 1 --}}
         @if($CarData->raceTrackServices->run_one)
            @php
            $run1=json_decode($CarData->raceTrackServices->run_one,true);
            @endphp
            <h3 class="tireheader">Run 1</h3>
            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p>Stripe Name : </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p>{{$run1['stripe_name_run_one'] ?? ''}}  </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p>Location : </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p>{{$run1['stripe_location_run_one'] ?? ''}}  </p>
               </div>
            </div>

            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p>Opponent  : </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p>{{$run1['stripe_opponent_run_one'] ?? ''}}  </p>
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
         @if($CarData->raceTrackServices->run_two)
            @php
            $run2=json_decode($CarData->raceTrackServices->run_two,true);
            @endphp
            <h3 class="tireheader">Run 2</h3>
            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p>Stripe Name : </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p>{{$run2['stripe_name_run_two'] ?? ''}}  </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p>Location : </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p>{{$run2['stripe_location_run_two'] ?? ''}}  </p>
               </div>
            </div>

            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p>Opponent  : </p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p>{{$run2['stripe_opponent_run_two'] ?? ''}}  </p>
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
         @if($CarData->raceTrackServices->run_three)
         @php
         $run3=json_decode($CarData->raceTrackServices->run_three,true);
         @endphp
         <h3 class="tireheader">Run 3</h3>
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Stripe Name : </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{$run3['stripe_name_run_three'] ?? ''}}  </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Location : </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{$run3['stripe_location_run_three'] ?? ''}}  </p>
            </div>
         </div>

         <div class="col-6 col-md-6">
            <div class="services-details text-right">
               <p>Opponent  : </p>
            </div>
         </div>
         <div class="col-6 col-md-6">
            <div class="services-details">
               <p>{{$run3['stripe_opponent_run_three'] ?? ''}}  </p>
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
            @if($CarData->raceTrackServices && $CarData->raceTrackServices->document)
               <div class="owl-carousel owl-theme photos-slider">
                  @foreach(explode(',',$CarData->raceTrackServices->document) as $key=>$value)
                     <?php  $chkextension= explode('.',$value); error_reporting(0);?>
                     @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

                        <div class="item">
                           <div class="slider-img lightbox"  id="{{ $value}}">
                              <img src="{{ $value}}" >
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
               @if($CarData->raceTrackServices && $CarData->raceTrackServices->document)
                  <div class="owl-carousel owl-theme document-slider">
                     @foreach(explode(',',$CarData->raceTrackServices->document) as $key=>$value)
                        <?php  $chkextension= explode('.',$value);?>
                        @if( trim($chkextension[5]) =='pdf')

                           <div class="item">
                           <a href="{{ $value}}" target="_blank">
                           <div class="slider-img"  id="{{ $value}}" style="background:none">
                           <img src="/assets/images/pdf.png" >
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
      @if($CarData->spicalotherServices)
         <div class="row border-bb">
      
            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p >LIST SPECIALTY:</p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p>{{ucwords($CarData->spicalotherServices->list_of_specialty)}} </p>
               </div>
            </div>

            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p >DETAILS OF SERVICE:</p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p>{{ucwords($CarData->spicalotherServices->detail_of_services)}} </p>
               </div>
            </div>

         </div>



         <div class="service-desc-content border-bb">
            <h4>PHOTOS</h4>
            <div class="cmn-slider-wrap">
               @if($CarData->spicalotherServices && $CarData->spicalotherServices->document)
                  <div class="owl-carousel owl-theme photos-slider">
                     @foreach(explode(',',$CarData->spicalotherServices->document) as $key=>$value)
                        <?php  $chkextension= explode('.',$value); error_reporting(0);?>
                        @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

                           <div class="item">
                              <div class="slider-img lightbox"  id="{{ $value}}">
                                 <img src="{{ $value}}" >
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
                  @if($CarData->spicalotherServices && $CarData->spicalotherServices->document)
                     <div class="owl-carousel owl-theme document-slider">
                        @foreach(explode(',',$CarData->spicalotherServices->document) as $key=>$value)
                           <?php  $chkextension= explode('.',$value);?>
                           @if( trim($chkextension[5]) =='pdf')

                              <div class="item">
                              <a href="{{ $value}}" target="_blank">
                              <div class="slider-img"  id="{{ $value}}" style="background:none">
                              <img src="/assets/images/pdf.png" >
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
      @if($CarData->SuspensionServices)
         <div class="row border-bb">
            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p class="font-bold">Frame Bracket Mounts:</p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p class="primary-@if($CarData->SuspensionServices->frame_bracket_mounts=='Good')green @elseif($CarData->SuspensionServices->frame_bracket_mounts=='Bad')red  @elseif($CarData->SuspensionServices->frame_bracket_mounts=='Replaced')yellow @else primary-blue @endif">@if($CarData->SuspensionServices->frame_bracket_mounts=='Good')Checks @elseif($CarData->SuspensionServices->frame_bracket_mounts=='Bad')  @elseif($CarData->SuspensionServices->frame_bracket_mounts=='Replaced')Was @else Was @endif{{ucwords($CarData->SuspensionServices->frame_bracket_mounts)}}</p>
               </div>
            </div>
         
         
            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p class="font-bold">Hanger Connections:</p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p class="primary-@if($CarData->SuspensionServices->hanger_connection=='Good')green @elseif($CarData->SuspensionServices->hanger_connection=='Bad')red  @elseif($CarData->SuspensionServices->hanger_connection=='Replaced')yellow @else primary-blue @endif">@if($CarData->SuspensionServices->hanger_connection=='Good')Checks @elseif($CarData->SuspensionServices->hanger_connection=='Bad')  @elseif($CarData->SuspensionServices->hanger_connection=='Replaced')Was @else Was @endif{{ucwords($CarData->SuspensionServices->hanger_connection)}}</p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p class="font-bold">Arm Bushings:</p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
               
                  <p class="primary-@if($CarData->SuspensionServices->arm_bushing=='Good')green @elseif($CarData->SuspensionServices->arm_bushing=='Bad')red  @elseif($CarData->SuspensionServices->arm_bushing=='Replaced')yellow @else primary-blue @endif">@if($CarData->SuspensionServices->arm_bushing=='Good')Checks @elseif($CarData->SuspensionServices->arm_bushing=='Bad')  @elseif($CarData->SuspensionServices->arm_bushing=='Replaced')Was @else Was @endif{{ucwords($CarData->SuspensionServices->arm_bushing)}}</p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p class="font-bold">Axles:</p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p class="primary-@if($CarData->SuspensionServices->axles=='Good')green @elseif($CarData->SuspensionServices->axles=='Bad')red  @elseif($CarData->SuspensionServices->axles=='Replaced')yellow @else primary-blue @endif">@if($CarData->SuspensionServices->axles=='Good')Checks @elseif($CarData->SuspensionServices->axles=='Bad')  @elseif($CarData->SuspensionServices->axles=='Replaced')Was @else Was @endif{{ucwords($CarData->SuspensionServices->axles)}}</p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p class="font-bold"> Axle Bushings & Bolts:</p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p class="primary-@if($CarData->SuspensionServices->axle_bushing_bolts=='Good')green @elseif($CarData->SuspensionServices->axle_bushing_bolts=='Bad')red  @elseif($CarData->SuspensionServices->axle_bushing_bolts=='Replaced')yellow @else primary-blue @endif">@if($CarData->SuspensionServices->axle_bushing_bolts=='Good')Checks @elseif($CarData->SuspensionServices->axle_bushing_bolts=='Bad')  @elseif($CarData->SuspensionServices->axle_bushing_bolts=='Replaced')Was @else Was @endif {{ucwords($CarData->SuspensionServices->axle_bushing_bolts)}}</p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p class="font-bold">Hub Bearings:</p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p class="primary-@if($CarData->SuspensionServices->hub_bearings=='Good')green @elseif($CarData->SuspensionServices->hub_bearings=='Bad')red  @elseif($CarData->SuspensionServices->hub_bearings=='Replaced')yellow @else primary-blue @endif">@if($CarData->SuspensionServices->hub_bearings=='Good')Checks @elseif($CarData->SuspensionServices->hub_bearings=='Bad')  @elseif($CarData->SuspensionServices->hub_bearings=='Replaced')Was @else Was @endif {{ucwords($CarData->SuspensionServices->hub_bearings)}}</p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p class="font-bold">King Pin Play:</p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p class="primary-@if($CarData->SuspensionServices->king_pin_play=='Good')green @elseif($CarData->SuspensionServices->king_pin_play=='Bad')red  @elseif($CarData->SuspensionServices->king_pin_play=='Replaced')yellow @else primary-blue @endif">@if($CarData->SuspensionServices->king_pin_play=='Good')Checks @elseif($CarData->SuspensionServices->king_pin_play=='Bad')  @elseif($CarData->SuspensionServices->king_pin_play=='Replaced')Was @else Was @endif {{ucwords($CarData->SuspensionServices->king_pin_play)}}</p>
               </div>
            </div>

            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p class="font-bold">Tie Rods & Castle Nuts:</p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p class="primary-@if($CarData->SuspensionServices->tie_roads_and_castle_nuts=='Good')green @elseif($CarData->SuspensionServices->tie_roads_and_castle_nuts=='Bad')red  @elseif($CarData->SuspensionServices->tie_roads_and_castle_nuts=='Replaced')yellow @else primary-blue @endif">@if($CarData->SuspensionServices->tie_roads_and_castle_nuts=='Good')Checks @elseif($CarData->SuspensionServices->tie_roads_and_castle_nuts=='Bad')  @elseif($CarData->SuspensionServices->tie_roads_and_castle_nuts=='Replaced')Was @else Was @endif {{ucwords($CarData->SuspensionServices->tie_roads_and_castle_nuts)}}</p>
               </div>
            </div>

            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p class="font-bold">Alignment:</p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p class="primary-@if($CarData->SuspensionServices->alignment=='Good')green @elseif($CarData->SuspensionServices->alignment=='Bad')red  @elseif($CarData->SuspensionServices->alignment=='Replaced')yellow @else primary-blue @endif">@if($CarData->SuspensionServices->alignment=='Good')Checks @elseif($CarData->SuspensionServices->alignment=='Bad')  @elseif($CarData->SuspensionServices->alignment=='Replaced')Was @else Was @endif {{ucwords($CarData->SuspensionServices->alignment)}}</p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p class="font-bold"> Shocks:</p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p class="primary-@if($CarData->SuspensionServices->shocks=='Good')green @elseif($CarData->SuspensionServices->shocks=='Bad')red  @elseif($CarData->SuspensionServices->shocks=='Replaced')yellow @else primary-blue @endif">@if($CarData->SuspensionServices->shocks=='Good')Checks @elseif($CarData->SuspensionServices->shocks=='Bad')  @elseif($CarData->SuspensionServices->shocks=='Replaced')Was @else Was @endif {{ucwords($CarData->SuspensionServices->shocks)}}</p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p class="font-bold">Air Compressor:</p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p class="primary-@if($CarData->SuspensionServices->air_compressor=='Good')green @elseif($CarData->SuspensionServices->air_compressor=='Bad')red  @elseif($CarData->SuspensionServices->air_compressor=='Replaced')yellow @else primary-blue @endif">@if($CarData->SuspensionServices->air_compressor=='Good')Checks @elseif($CarData->SuspensionServices->air_compressor=='Bad')  @elseif($CarData->SuspensionServices->air_compressor=='Replaced')Was @else Was @endif {{ucwords($CarData->SuspensionServices->air_compressor)}}</p>
               </div>
            </div>

            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p class="font-bold">Air Bags:</p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p class="primary-@if($CarData->SuspensionServices->air_bag=='Good')green @elseif($CarData->SuspensionServices->air_bag=='Bad')red  @elseif($CarData->SuspensionServices->air_bag=='Replaced')yellow @else primary-blue @endif">@if($CarData->SuspensionServices->air_bag=='Good')Checks @elseif($CarData->SuspensionServices->air_bag=='Bad')  @elseif($CarData->SuspensionServices->air_bag=='Replaced')Was @else Was @endif {{ucwords($CarData->SuspensionServices->air_bag)}}</p>
               </div>
            </div>

            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p class="font-bold">Air Manifold:</p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <p class="primary-@if($CarData->SuspensionServices->air_manifold=='Good')green @elseif($CarData->SuspensionServices->air_manifold=='Bad')red  @elseif($CarData->SuspensionServices->air_manifold=='Replaced')yellow @else primary-blue @endif">@if($CarData->SuspensionServices->air_manifold=='Good')Checks @elseif($CarData->SuspensionServices->air_manifold=='Bad')  @elseif($CarData->SuspensionServices->air_manifold=='Replaced')Was @else Was @endif {{ucwords($CarData->SuspensionServices->air_manifold)}}</p>
               </div>
            </div>

         
            

         </div>


      <div class="service-desc-content border-bb">
         <h4>PHOTOS</h4>
         <div class="cmn-slider-wrap">
            @if($CarData->SuspensionServices && $CarData->SuspensionServices->document)
            <div class="owl-carousel owl-theme photos-slider">
               @foreach(explode(',',$CarData->SuspensionServices->document) as $key=>$value)
               <?php  $chkextension= explode('.',$value);?>
            @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')
            
               <div class="item">
                  <div class="slider-img lightbox"  id="{{ $value}}">
                     <img src="{{ $value}}" >
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
            @if($CarData->SuspensionServices && $CarData->SuspensionServices->document)
            <div class="owl-carousel owl-theme document-slider">
               @foreach(explode(',',$CarData->SuspensionServices->document) as $key=>$value)
               <?php  $chkextension= explode('.',$value);?>
            @if( trim($chkextension[5]) =='pdf')
         
               <div class="item">
                  <a href="{{ $value}}" target="_blank">
                  <div class="slider-img"  id="{{ $value}}" style="background:none">
                  <img src="/assets/images/pdf.png" >
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
      @if($CarData->mechicalServices)
         <div class="row border-bb">
      
            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p >Service Type:</p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details" style="word-break: break-all;">
                  <p>{{ucwords($CarData->mechicalServices->service_type)}} </p>
               </div>
            </div>

          

         </div>



         <div class="service-desc-content border-bb">
            <h4>PHOTOS</h4>
            <div class="cmn-slider-wrap">
               @if($CarData->mechicalServices && $CarData->mechicalServices->document)
                  <div class="owl-carousel owl-theme photos-slider">
                     @foreach(explode(',',$CarData->mechicalServices->document) as $key=>$value)
                        <?php  $chkextension= explode('.',$value); error_reporting(0);?>
                        @if( trim($chkextension[5]) !='pdf' && trim($chkextension[5]) !='docx' && trim($chkextension[5]) !='doc')

                           <div class="item">
                              <div class="slider-img lightbox"  id="{{ $value}}">
                                 <img src="{{ $value}}" >
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
                  @if($CarData->mechicalServices && $CarData->mechicalServices->document)
                     <div class="owl-carousel owl-theme document-slider">
                        @foreach(explode(',',$CarData->mechicalServices->document) as $key=>$value)
                           <?php  $chkextension= explode('.',$value);?>
                           @if( trim($chkextension[5]) =='pdf')

                              <div class="item">
                              <a href="{{ $value}}" target="_blank">
                              <div class="slider-img"  id="{{ $value}}" style="background:none">
                              <img src="/assets/images/pdf.png" >
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

            <div class="text-center">
               @if($mynxtservice !="")
               <a  href="/account-settings/vin-dashboard-service/{{base64_encode($car->id.'%%%'.$mynxtservice.'%%%'.$nextservice)}}"class="btn btn--accent nxt-service-btn">NEXT SERVICE RECORD </a>
               @else
               <a  href="{{route('account-settings.index',['vindashboard',$car->id])}}" class="btn btn--accent nxt-service-btn">Back Menu</a>
               @endif
             
                {{-- <button class="btn btn--accent nxt-service-btn" type="submit"> NEXT SERVICE RECORD </button> --}}
            </div>
         </div>
      </div>
   </div>
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
      loop:false,
      margin:10,
      nav:true,
      dots: false,
      navText: [
       '<img src="/assets/images/caret-prev.png">',
       '<img src="/assets/images/caret-next.png">'
      ],
      responsive:{
       0:{
           items:1
       },
       600:{
           items:3
       },
       1000:{
           items:3
       }
      }
      })
   </script>
   <script>
      $('.document-slider').owlCarousel({
      loop:false,
      margin:10,
      nav:true,
      dots: false,
      navText: [
       '<img src="/assets/images/caret-prev.png">',
       '<img src="/assets/images/caret-next.png">'
      ],
      responsive:{
       0:{
           items:2
       },
       600:{
           items:4
       },
       1000:{
           items:8
       }
      }
      })
   </script>
   <script>
      $(document).ready(function () {
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

          $(".lightbox").click(function () {
            
              var imgsrc = this.id;
              $("body").append("<div class='img-popup'><span class='close-lightbox'>&times;</span><img src='" + imgsrc + "'></div>");
              $(".close-lightbox, .img-popup").click(function () {
                  $(".img-popup").fadeOut(500, function () {
                      $(this).remove();
                  }).addClass("lightboxfadeout");
              });
      
          });
         //  $(".plusicon").click(function () {
         //      $(".img-popup").fadeIn(500);
         //  });
          $(".lightbox").click(function () {
              $(".img-popup").fadeIn(500);
          });
      
      });
                 
   </script>
</div>
</div>
</div>
</div>
</main>
<script src="{{ asset('/assets/js/home.js') }}" type="text/javascript"></script>
@endsection
