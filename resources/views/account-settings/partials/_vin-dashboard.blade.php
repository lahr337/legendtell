<?php use App\Http\Controllers\CommonController; 
 $UserInfo= App\Http\Controllers\CommonController::getUserInfo(1);
?> 

<div class="account-settings__content account-settings__content-history-wr {{ $tab == 'vindashboard' ? 'account-settings__content--active' : '' }}" id="vindashboard">
   <link href="{{ asset('/assets/css/web_service.css') }}" rel="stylesheet" type="text/css" />
   @if($car)
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
              
               @endif
              
               @else
               <img class ="w-100" src="{{ asset('/assets/images/image-empty-state.jpg') }}">
               @endif
            </div>
            <div class="col-12 col-md-6">
               <ul class="desc-wrap">
                  <li class="cmn-serve-title primary-red">{{ $car->vin ?? ''}} </li>
                  <li class="cmn-serve-title">{{ $car->year ?? '2021'}}</li>
                  <li class="cmn-serve-title">{{ $car->make ?? ''}}</li>
                  <li class="cmn-serve-title">{{ $car->model ?? '2021'}}</li>
                  {{-- <li class="cmn-serve-title">Belize Blue</li> --}}
                  <li class="cmn-serve-title">@if($car->miles){{ $car->miles ?? ''}} Miles @endif</li>
               </ul>
            </div>
         </div>
         <div class="row mt-5">
            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p>Most recent service:</p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details">
                  <?php
                  $servicenamenew="";
                  $arr=array();
                 
                  $last_key="";
                  if($car->service_id)
                  {
                     if(!empty($car->service_id) || $car->service_id !=null  )
                     {
                        $arr=explode(',',$car->service_id);
                  
                        $last_key = ($arr)[count($arr)-1];
                     
                        $servicename= App\Http\Controllers\CommonController::getServiceName($last_key);
                        $servicenamenew= $servicename['service_name'];
                        
                     }
                  }
                 
              
               
                  ?>
                  <p>{{ $servicenamenew}}</p>
                 
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p>Serviced by:</p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details ">
                  <p>{{ucwords($CarData->userData->shop_name)}}</p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details text-right">
                  <p>Date of service:</p>
               </div>
            </div>
            <div class="col-6 col-md-6">
               <div class="services-details ">
                  <p>{{date("m/d/Y", strtotime($car->service_date) ) ?? ''  }}</p>
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
      </div>
   </div>

   <div id="imageSlider">
      <div id="prev">
         <img src="{{ asset('/assets/images/caret-prev.png') }}">
      </div>
      <div id="next">
         <img src="{{ asset('/assets/images/caret-next.png') }}">
      </div>
      <div id="sliderWrapper" class="sliderWrapper">
         <ul class="slider-container">
            {{-- @foreach($shopDetails as $shoplist)
            <li>
               <div class="shop-content-wrap">
                  <div class="shop-logo">
                     <img src="{{$shoplist->avatar}}">
                  </div>
                  <ul class="shop-content">
                     <li>{{ucwords($shoplist->shop_name) }}</li>
                     <li> shop_type</li>
                     <li class="primary-red">date_serviced</li>
                     <li>shortened service description...</li>
                  </ul>
               </div>
            </li>
            @endforeach --}}
          
            @if(count($carsShop)>0)
            @foreach($carsShop as $carslide)
           @if($carslide->service_id)
            <?php $lastckId=explode(',',$carslide->service_id);
                     $AllService=[];
                     $servicenamenew="";
                     foreach ($lastckId as $key => $value) {
                        $servicename2= App\Http\Controllers\CommonController::getServiceName(($value));
                    $AllService[]= $servicename2['service_name'];
                     }
                   
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
                   
                  
                     <li>{{$servicenamenew ?? ''}}</li>
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
      
      <div class="row">
       
         <?php 
         $dataService=array(); if(!empty($CarData->userData->shop_services))
         { $dataService=explode(',',$CarData->userData->shop_services); } 
         $dataServiceDate=array(); if(!empty($car->allservice_date))
         { $dataServiceDate=explode(',',$car->allservice_date);
      
      }
     
      $chkarrlength=0;
            ?>
         @if(count($dataService)>0)
        <?php  
        $newarr=sort($arr);
      //  print_r($arr);
         ?>
        
         @foreach($dataService as $carService =>$value)
         <?php
     
         // echo 'sarv-'.$carService.'value'. $value;
         // die();
         $servicename= App\Http\Controllers\CommonController::getServiceName($value);
         ?>
         <div class="col-12 col-md-6 col-lg-4">
            <div class="services-wrap">
               <div class="img-wrap">
                  <img src="{{asset('/assets/images/services/').'/'.$servicename['service_photo']}}">
                  
               </div>
               <h4><a href="">{{ucwords($servicename['service_name'])}}</a></h4>
              
               <p class="rcnt-date">recent service date</p>
               <?php
                  $nextservice="";
                  if(!empty($arr[$carService+1]))
                  {
                     $nextservice=$arr[$carService+1];
                  }
                ?>

               @if(in_array($value,$arr))
             
               
               <p class="product-date">@if(!empty($dataServiceDate))@if(!empty($dataServiceDate[$chkarrlength])) {{date("m/d/Y", strtotime($dataServiceDate[$chkarrlength]) )  }} @endif @endif</p>
               @if($value==$last_key)
               <a href="/account-settings/vin-dashboard-service/{{base64_encode($car->id.'%%%'.$value.'%%%'.$chkarrlength)}}" class="service-btn new-service-btn">New Service</a>
               @else
               <a href="/account-settings/vin-dashboard-service/{{base64_encode($car->id.'%%%'.$value.'%%%'.$chkarrlength)}}" class="service-btn">View Service  </a>
               
               @endif
               <?php $chkarrlength++;?>
               @else
               <p class="product-date" style="color:red">None </p>
               <a href="#" class="service-btn no-service-btn">NO Service</a>
               @endif
               
            </div>
         </div>
         @endforeach
         @endif
        
      </div>
   </div>
   @endif
</div>
<script>
   $(document).ready(function() {
        // var owl = $('.owl-carousel');
   
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