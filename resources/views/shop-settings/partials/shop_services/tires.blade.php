@extends('layout.default')
<!-- leftcode -->
@section('content')
@include('shop-settings.leftshowmenu')
<div class="account-settings__content-wr">
   <div class="account-settings__content-form">
      <div class="grid-view-shop">
         <div class="common-wrap">
            <div class="cmn-content">
               <form id="saveTires">
                  @csrf
                  <input type="hidden" id="servicedata" name="carShopService" value="@if(isset($_GET['servicedata'])){{ $_GET['servicedata'] }} @endif" > 
               <div class="tires-service cmn-right-label">
                  <div class="tire-img">
                     <img src="/assets/images/tires.png" alt="">
                  </div>
                  <div class="row">
                     <div class="col-6 col-md-6 col-lg-3">
                        <h2 class="text-center">DRIVER FRONT</h2>
                        <div class="form-box">
                           <div class="form-group">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-5 col-12">
                                    <label class="p-0">PSI:</label>
                                 </div>
                                 <div class="col-md-7 col-12">
                                    <input class="form-control border-0 myerr" type="text" name="driver_front_psi" id="driver_front_psi" value="@if($tireserviceData) {{$tireserviceData->driver_front_psi}} @endif " style="height:35px">
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-5 col-12">
                                    <label class="p-0">TREAD DEPTH:</label>
                                 </div>
                                 <div class="col-md-7 col-12">
                                    <input class="form-control border-0 myerr" type="text" name="driver_front_depth" id="driver_front_depth" type="text"  style="height:35px" value="@if($tireserviceData) {{$tireserviceData->driver_front_tread_depth}} @endif ">
                                 </div>
                              </div>
                           </div>
                           <div class="tire-box-wrap row ac_service_content justify-content-end">
                              <div class="col-md-7">
                                 <div class="form-btnw-wrap good-checked">
                                    <input type="radio" class="btn-check" name="driver_front_condition" id="tireradio1" value="good" autocomplete="off" @if($tireserviceData) @if($tireserviceData->driver_front_condition=='good') checked @endif @else checked  @endif >
                                    <label for="tireradio1">Good</label> 
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" name="driver_front_condition" id="tireradio2" value="50% WORN" autocomplete="off"  @if($tireserviceData) @if($tireserviceData->driver_front_condition=='50% WORN') checked @endif @endif>
                                    <label for="tireradio2">50% WORN</label>
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" name="driver_front_condition" id="tireradio3" value="75% WORN" autocomplete="off"  @if($tireserviceData) @if($tireserviceData->driver_front_condition=='75% WORN') checked @endif @endif>
                                    <label for="tireradio3">75% WORN</label>
                                 </div>
                                 <div class="form-btnw-wrap bad-checked">
                                    <input type="radio" class="btn-check" name="driver_front_condition" id="tireradio4" value="bad" autocomplete="off" @if($tireserviceData) @if($tireserviceData->driver_front_condition=='bad') checked @endif @endif >
                                    <label for="tireradio4">Bad</label>
                                 </div>
                                 <div class="form-btnw-wrap replaced-checked">
                                    <input type="radio" class="btn-check" name="driver_front_condition" id="tireradio5" value="replaced" autocomplete="off"  @if($tireserviceData) @if($tireserviceData->driver_front_condition=='replaced') checked @endif @endif>
                                    <label for="tireradio5">Replaced</label>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-5 col-12">
                                    <label class="p-0">BRAND:</label>
                                 </div>
                                 <div class="col-md-7 col-12">
                                    <input class="form-control border-0 myerr"  type="text" name="driver_front_brand" id="driver_front_brand" style="height:35px"  value="@if($tireserviceData) {{$tireserviceData->driver_front_brand}} @endif ">
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-5 col-12">
                                    <label class="p-0">TIRE SIZE:</label>
                                 </div>
                                 <div class="col-md-7 col-12">
                                    <input class="form-control border-0 myerr" type="text" name="driver_front_tire_size" id="driver_front_tire_size" style="height:35px"  value="@if($tireserviceData) {{$tireserviceData->driver_front_tire_size}} @endif ">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="col-6 col-md-6 col-lg-3">
                        <h2 class="text-center">DRIVER REAR</h2>
                        <div class="form-box">
                           <div class="form-group">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-5 col-12">
                                    <label class="p-0">PSI:</label>
                                 </div>
                                 <div class="col-md-7 col-12">
                                    <input class="form-control border-0 myerr" id="driver_rear_psi" type="text" name="driver_rear_psi" style="height:35px"  value="@if($tireserviceData) {{$tireserviceData->driver_rear_psi}} @endif ">
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-5 col-12">
                                    <label class="p-0">TREAD DEPTH:</label>
                                 </div>
                                 <div class="col-md-7 col-12">
                                    <input class="form-control border-0 myerr" id="driver_rear_depth" type="text" name="driver_rear_depth"  style="height:35px"  value="@if($tireserviceData) {{$tireserviceData->driver_rear_tread_depth}} @endif ">
                                 </div>
                              </div>
                           </div>
                           <div class="tire-box-wrap row ac_service_content justify-content-end">
                              <div class="col-md-7">
                                 <div class="form-btnw-wrap good-checked">
                                    <input type="radio" class="btn-check" name="driver_rear_condition" id="tireradio6" value="good" autocomplete="off" @if($tireserviceData) @if($tireserviceData->driver_rear_condition=='good') checked @endif @else checked  @endif>
                                    <label for="tireradio6">Good</label> 
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" name="driver_rear_condition" id="tireradio7" value="50% WORN" autocomplete="off" @if($tireserviceData) @if($tireserviceData->driver_rear_condition=='50% WORN') checked @endif   @endif>
                                    <label for="tireradio7">50% WORN</label>
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" name="driver_rear_condition" id="tireradio8" value="75% WORN" autocomplete="off" @if($tireserviceData) @if($tireserviceData->driver_rear_condition=='75% WORN') checked @endif   @endif>
                                    <label for="tireradio8">75% WORN</label>
                                 </div>
                                 <div class="form-btnw-wrap bad-checked">
                                    <input type="radio" class="btn-check" name="driver_rear_condition" id="tireradio9" value="bad" autocomplete="off" @if($tireserviceData) @if($tireserviceData->driver_rear_condition=='bad') checked @endif   @endif>
                                    <label for="tireradio9">Bad</label>
                                 </div>
                                 <div class="form-btnw-wrap replaced-checked">
                                    <input type="radio" class="btn-check" name="driver_rear_condition" id="tireradio10" value="replaced" autocomplete="off" @if($tireserviceData) @if($tireserviceData->driver_rear_condition=='replaced') checked @endif   @endif>
                                    <label for="tireradio10">Replaced</label>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-5 col-12">
                                    <label class="p-0">BRAND:</label>
                                 </div>
                                 <div class="col-md-7 col-12">
                                    <input class="form-control border-0 myerr" id="driver_rear_brand" type="text" name="driver_rear_brand" style="height:35px"  value="@if($tireserviceData) {{$tireserviceData->driver_rear_brand}} @endif ">
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-5 col-12">
                                    <label class="p-0">TIRE SIZE:</label>
                                 </div>
                                 <div class="col-md-7 col-12">
                                    <input class="form-control border-0 myerr" id="driver_rear_size" type="text" name="driver_rear_size" style="height:35px"  value="@if($tireserviceData) {{$tireserviceData->driver_rear_tire_size}} @endif ">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="col-6 col-md-6 col-lg-3">
                        <h2 class="text-center">PASSENGER FRONT</h2>
                        <div class="form-box">
                           <div class="form-group">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-5 col-12">
                                    <label class="p-0">PSI:</label>
                                 </div>
                                 <div class="col-md-7 col-12">
                                    <input class="form-control border-0 myerr" type="text" name="passenger_front_psi" id="passenger_front_psi" style="height:35px"  value="@if($tireserviceData) {{$tireserviceData->passenger_front_psi}} @endif ">
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-5 col-12">
                                    <label class="p-0">TREAD DEPTH:</label>
                                 </div>
                                 <div class="col-md-7 col-12">
                                    <input class="form-control border-0 myerr" type="text" name="passenger_front_depth" id="passenger_front_depth" style="height:35px"  value="@if($tireserviceData) {{$tireserviceData->passenger_front_tread_depth}} @endif ">
                                 </div>
                              </div>
                           </div>
                           <div class="tire-box-wrap row ac_service_content justify-content-end">
                              <div class="col-md-7">
                                 <div class="form-btnw-wrap good-checked">
                                    <input type="radio" class="btn-check" name="passenger_front_condition" id="tireradio11" value="good" autocomplete="off" @if($tireserviceData) @if($tireserviceData->passenger_front_condition=='good') checked @endif @else checked  @endif >
                                    <label for="tireradio11">Good</label> 
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" name="passenger_front_condition" id="tireradio12" value="50% WORN" autocomplete="off" @if($tireserviceData) @if($tireserviceData->passenger_front_condition=='50% WORN') checked @endif   @endif >
                                    <label for="tireradio12">50% WORN</label>
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" name="passenger_front_condition" id="tireradio13" value="75% Worn" autocomplete="off" @if($tireserviceData) @if($tireserviceData->passenger_front_condition=='75% Worn') checked @endif   @endif>
                                    <label for="tireradio13">75% WORN</label>
                                 </div>
                                 <div class="form-btnw-wrap bad-checked">
                                    <input type="radio" class="btn-check" name="passenger_front_condition" id="tireradio14" value="bad" autocomplete="off" @if($tireserviceData) @if($tireserviceData->passenger_front_condition=='bad') checked @endif   @endif>
                                    <label for="tireradio14">Bad</label>
                                 </div>
                                 <div class="form-btnw-wrap replaced-checked">
                                    <input type="radio" class="btn-check" name="passenger_front_condition" id="tireradio15" value="replaced" autocomplete="off" @if($tireserviceData) @if($tireserviceData->passenger_front_condition=='replaced') checked @endif   @endif>
                                    <label for="tireradio15">Replaced</label>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-5 col-12">
                                    <label class="p-0">BRAND:</label>
                                 </div>
                                 <div class="col-md-7 col-12">
                                    <input class="form-control border-0 myerr" type="text" name="passenger_front_brand" id="passenger_front_brand" style="height:35px"  value="@if($tireserviceData) {{$tireserviceData->passenger_front_brand}} @endif ">
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-5 col-12">
                                    <label class="p-0">TIRE SIZE:</label>
                                 </div>
                                 <div class="col-md-7 col-12">
                                    <input class="form-control border-0 myerr" type="text" name="passenger_front_size" id="passenger_front_size" style="height:35px"  value="@if($tireserviceData) {{$tireserviceData->passenger_front_tire_size}} @endif ">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="col-6 col-md-6 col-lg-3">
                        <h2 class="text-center">PASSENGER REAR</h2>
                        <div class="form-box">
                           <div class="form-group">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-5 col-12">
                                    <label class="p-0">PSI:</label>
                                 </div>
                                 <div class="col-md-7 col-12">
                                    <input class="form-control border-0 myerr" type="text" name="passenger_rear_psi" id="passenger_rear_psi" style="height:35px"  value="@if($tireserviceData) {{$tireserviceData->passenger_rear_psi}} @endif ">
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-5 col-12">
                                    <label class="p-0">TREAD DEPTH:</label>
                                 </div>
                                 <div class="col-md-7 col-12">
                                    <input class="form-control border-0 myerr" type="text" name="passenger_rear_depth" id="passenger_rear_depth" style="height:35px"  value="@if($tireserviceData) {{$tireserviceData->passenger_rear_tread_depth}} @endif ">
                                 </div>
                              </div>
                           </div>
                           <div class="tire-box-wrap row ac_service_content justify-content-end">
                              <div class="col-md-7">
                                 <div class="form-btnw-wrap good-checked">
                                    <input type="radio" class="btn-check" name="passenger_rear_condition" id="tireradio16" value="good" autocomplete="off" @if($tireserviceData) @if($tireserviceData->passenger_rear_condition=='good') checked @endif @else checked  @endif>
                                    <label for="tireradio16">Good</label> 
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" name="passenger_rear_condition" id="tireradio17" value="50% WORN" autocomplete="off" @if($tireserviceData) @if($tireserviceData->passenger_rear_condition=='50% WORN') checked @endif  @endif>
                                    <label for="tireradio17">50% WORN</label>
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" name="passenger_rear_condition" id="tireradio18" value="75% WORN" autocomplete="off"  @if($tireserviceData) @if($tireserviceData->passenger_rear_condition=='75% WORN') checked @endif  @endif>
                                    <label for="tireradio18">75% WORN</label>
                                 </div>
                                 <div class="form-btnw-wrap bad-checked">
                                    <input type="radio" class="btn-check" name="passenger_rear_condition" id="tireradio19" value="bad" autocomplete="off"  @if($tireserviceData) @if($tireserviceData->passenger_rear_condition=='bad') checked @endif  @endif>
                                    <label for="tireradio19">Bad</label>
                                 </div>
                                 <div class="form-btnw-wrap replaced-checked">
                                    <input type="radio" class="btn-check" name="passenger_rear_condition" id="tireradio20" value="replaced" autocomplete="off"  @if($tireserviceData) @if($tireserviceData->passenger_rear_condition=='replaced') checked @endif  @endif>
                                    <label for="tireradio20">Replaced</label>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-5 col-12">
                                    <label class="p-0">BRAND:</label>
                                 </div>
                                 <div class="col-md-7 col-12">
                                    <input class="form-control border-0 myerr" type="text" name="passenger_rear_brand" id="passenger_rear_brand" style="height:35px"  value="@if($tireserviceData) {{$tireserviceData->passenger_rear_brand}} @endif ">
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-5 col-12">
                                    <label class="p-0">TIRE SIZE:</label>
                                 </div>
                                 <div class="col-md-7 col-12">
                                    <input class="form-control border-0 myerr" type="text" name="passenger_rear_size" id="passenger_rear_size" style="height:35px"  value="@if($tireserviceData) {{$tireserviceData->passenger_rear_tire_size}} @endif ">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     
                  </div>
                  <!--col-->
                  <div class="form-box w-100">
                     <div class="form-group">
                        <div class="upload-wrap">
                           <div class="row d-flex align-items-center">
                              <div class="col-lg-4 col-12">
                                 <button class="btn uplaod">UPLOAD
                                    Photos & Docs <input type="file" name="image_uploaded[]" id="insert_image_uploaded" class="form-control image_uploaded" value="Upload" multiple="multiple"> </button>
                              </div>
            
                              <div class="col-lg-8 col-12 text-center display_image_list"  id="display_image_list">
                                 <ul>@if($tireserviceData && $tireserviceData->document)
                                    @foreach(explode(',',$tireserviceData->document) as $key=>$value)
                                    <?php $chkextension= explode('.',$value);?>
                                    @if(trim($chkextension[5])=='pdf')
                                    <li id="{{$key}}"><span><button type='button' class="btn cross" id="{{$key}}">&nbsp;</button><img id="{{$key}}" src="/assets/images/pdf.png"  class="imgupdate"></span></li>
                                    @else
                                    <li id="{{$key}}"><span><button type='button' class="btn cross" id="{{$key}}">&nbsp;</button><img id="{{$key}}"  src="/assets/images/jpg.png" class="imgupdate"></span></li>
                                    @endif
                                   
                                    @endforeach
                                    @endif
                                 </ul>                  
                              </div>
                           </div>
                        </div>
                     </div>
               </div>
                  <button class="car-adding__btn btn btn--accent insertTireForm cmn-btn" type="button">Save</button>
               </div>
               </form>
            </div>
         </div>
         @include('shop-settings.partials.rightvinnumber')
      </div>
   </div>
</div>
</main>
@endsection