@extends('layout.default')
<!-- leftcode -->
@section('content')
@include('shop-settings.leftshowmenu')
<div class="account-settings__content-wr">
   <div class="account-settings__content-form">
      <div class="grid-view-shop">
         <div class="common-wrap">
            <?php
            if (isset($serviceData->service_type)) {
               $service_type_arr = explode(',', $serviceData->service_type);
            } else {
               $service_type_arr = array();
            }
            ?>
            <div class="cmn-content">
               <form id="mechanicData">
                  @csrf
                  <input type="hidden" id="servicedata" name="carShopService" value="@if(isset($_GET['servicedata'])){{ $_GET['servicedata'] }} @endif">
                  <div class="mechanic cmn-checked cmn-mx-75">
                     <div class="btn-group" role="group">
                        <div class="form-btnw-wrap">
                           <input type="checkbox" class="btn-check" value="SPARK PLUGS" name="service_type[]" id="mechanic1" autocomplete="off" @if($serviceData) @if(in_array('SPARK PLUGS',$service_type_arr)) checked @endif @endif>
                           <label for="mechanic1">SPARK PLUGS</label>
                        </div>
                        <div class="form-btnw-wrap">
                           <input type="checkbox" class="btn-check" value="TIRE ROTATION" name="service_type[]" id="mechanic2" autocomplete="off" @if($serviceData) @if(in_array('TIRE ROTATION',$service_type_arr)) checked @endif @endif>
                           <label for="mechanic2">TIRE ROTATION</label>
                        </div>
                        <div class="form-btnw-wrap">
                           <input type="checkbox" class="btn-check" value="FUEL INJECTORS" name="service_type[]" id="mechanic3" autocomplete="off" @if($serviceData) @if(in_array('FUEL INJECTORS',$service_type_arr)) checked @endif @endif>
                           <label for="mechanic3">FUEL INJECTORS</label>
                        </div>
                        <div class="form-btnw-wrap">
                           <input type="checkbox" class="btn-check" value="OIL CHANGE" name="service_type[]" id="mechanic4" autocomplete="off" @if($serviceData) @if(in_array('OIL CHANGE',$service_type_arr)) checked @endif @endif>
                           <label for="mechanic4">OIL CHANGE</label>
                        </div>
                        <div class="form-btnw-wrap">
                           <input type="checkbox" class="btn-check" value="TRANSMISSION" name="service_type[]" id="mechanic5" autocomplete="off" @if($serviceData) @if(in_array('TRANSMISSION',$service_type_arr)) checked @endif @endif>
                           <label for="mechanic5">TRANSMISSION</label>
                        </div>
                        <div class="form-btnw-wrap">
                           <input type="checkbox" class="btn-check" value="SUSPENSION" name="service_type[]" id="mechanic6" autocomplete="off" @if($serviceData) @if(in_array('SUSPENSION',$service_type_arr)) checked @endif @endif>
                           <label for="mechanic6">SUSPENSION</label>
                        </div>
                        <div class="form-btnw-wrap">
                           <input type="checkbox" class="btn-check" value="EXHAUST" name="service_type[]" id="mechanic7" autocomplete="off" @if($serviceData) @if(in_array('EXHAUST',$service_type_arr)) checked @endif @endif>
                           <label for="mechanic7">EXHAUST</label>
                        </div>
                        <div class="form-btnw-wrap">
                           <input type="checkbox" class="btn-check" value="CARWASH" name="service_type[]" id="mechanic8" autocomplete="off" @if($serviceData) @if(in_array('CARWASH',$service_type_arr)) checked @endif @endif>
                           <label for="mechanic8">CARWASH</label>
                        </div>
                        <div class="form-btnw-wrap">
                           <input type="checkbox" class="btn-check" value="BATTERY" name="service_type[]" id="mechanic9" autocomplete="off" @if($serviceData) @if(in_array('BATTERY',$service_type_arr)) checked @endif @endif>
                           <label for="mechanic9">BATTERY</label>
                        </div>
                        <div class="form-btnw-wrap">
                           <input type="checkbox" class="btn-check" value="TPMS" name="service_type[]" id="mechanic10" autocomplete="off" @if($serviceData) @if(in_array('TPMS',$service_type_arr)) checked @endif @endif>
                           <label for="mechanic10">TPMS</label>
                        </div>
                     </div>

                     <div class="form-box w-100">
                        <div class="form-group">
                           <div class="upload-wrap">
                              <div class="row align-items-center">
                                 <div class="col-lg-4 col-12">
                                    <button class="btn uplaod">UPLOAD <br />
                                       Photos & Docs<input type="file" name="products_uploaded[]" id="insert_products_uploaded" class="form-control products_uploaded_image" value="Upload" multiple="multiple"> </button>
                                 </div>
                                 <div class="col-md-8 col-12 text-center display_image_list3">
                                    <ul>
                                       @if($serviceData && $serviceData->document)

                                       @foreach(explode(',',$serviceData->document) as $key=>$value)
                                       <?php $chkextension = explode('.', $value); ?>
                                       @if(trim($chkextension[5])=="pdf")
                                       <li id="{{$key}}"><span><button type='button' class="btn cross_img" id="{{$key}}">&nbsp;</button><img id="{{$key}}" src="/assets/images/pdf.png" class="imgupdate"></span></li>
                                       @else
                                       <li id="{{$key}}"><span><button type='button' class="btn cross_img" id="{{$key}}">&nbsp;</button><img id="{{$key}}" src="/assets/images/jpg.png" class="imgupdate"></span></li>
                                       @endif

                                       @endforeach
                                       @endif
                                    </ul>
                                 </div>
                                 <!--col-->
                              </div>
                              <!--row-->
                           </div>
                        </div>
                     </div>
                     <button class="car-adding__btn btn btn--accent cmn-btn" id="saveMechanic" type="button">Save</button>
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