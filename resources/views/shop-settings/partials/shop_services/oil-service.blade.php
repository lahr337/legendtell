@extends('layout.default')
<!-- leftcode -->
@section('content')
@include('shop-settings.leftshowmenu')
<div class="account-settings__content-wr">
   <div class="account-settings__content-form">
      <div class="grid-view-shop">
         <div class="common-wrap">
            <div class="cmn-content">
               <form id="SaveOilData">
               <div class="oil-service cmn-right-label cmn-mx-75">
                  
                  @csrf
                  <input type="hidden" id="servicedata" name="carShopService" value="@if(isset($_GET['servicedata'])){{ $_GET['servicedata'] }} @endif" > 
                        <div class="form-box">
                           <div class="form-group">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-4 col-12">
                                    <label class="p-0">MILEAGE:</label>
                                 </div>
                                 <div class="col-md-8 col-12">
                                    <input class="form-control border-0 myerr" type="text" id="oil_mileage" name="oil_mileage" style="height:35px" value="@if($serviceData) {{$serviceData->oil_mileage}} @endif">
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-4 col-12">
                                    <label class="p-0">OIL TYPE:</label>
                                 </div>
                                 <div class="col-md-8 col-12">
                                    <input class="form-control border-0 myerr"  type="text" id="oil_type" name="oil_type" style="height:35px" value="@if($serviceData) {{$serviceData->oil_type}} @endif">
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-4 col-12">
                                    <label class="p-0">OIL BRAND:</label>
                                 </div>
                                 <div class="col-md-8 col-12">
                                    <input class="form-control border-0 myerr"  type="text" id="oil_brand" name="oil_brand" style="height:35px" value="@if($serviceData) {{$serviceData->oil_brand}} @endif">
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-4 col-12">
                                    <label class="p-0">AMOUNT ADDED:</label>
                                 </div>
                                 <div class="col-md-8 col-12">
                                    <input class="form-control border-0 myerr"  type="text" id="oil_amount_added" name="oil_amount_added" style="height:35px" value="@if($serviceData) {{$serviceData->oil_amount_added}} @endif">
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-4 col-12">
                                    <label class="p-0">FILTER TYPE:</label>
                                 </div>
                                 <div class="col-md-8 col-12">
                                    <input class="form-control border-0 myerr"  type="text" id="oil_filter_type" name="oil_filter_type" style="height:35px" value="@if($serviceData) {{$serviceData->oil_filter_type}} @endif">
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-4 col-12">
                                    <label class="p-0">FILTER BRAND:</label>
                                 </div>
                                 <div class="col-md-8 col-12">
                                    <input class="form-control border-0 myerr"  type="text" id="oil_filter_brand" name="oil_filter_brand" style="height:35px" value="@if($serviceData) {{$serviceData->oil_filter_brand}} @endif">
                                 </div>
                              </div>
                           </div>
                           @if($serviceData)
                           <?php
                              $trimmed_array = array_map('trim', explode(',',$serviceData->oil_fluid_service));
                           ?>
                           @endif
                           <div class="form-group">
                              <div class="row d-flex">
                                 <div class="col-md-4 col-12">
                                    <label class="p-0">FLUID SERVICE:</label>
                                 </div>
                                 <div class="col-md-8 col-12">
                                    <div class="btn-group btn-group flex-row fluid-service" role="group">
                                       <div class="form-btnw-wrap upgrade-checked">
                                          <input type="checkbox" class="btn-check" name="oil_fluid_service" value="WINDSHIELD" id="checkbox1" autocomplete="off" @if($serviceData) @if(in_array('WINDSHIELD', $trimmed_array))
                                          checked
                                       @endif @endif >
                                          <label for="checkbox1" class="text-center">WINDSHIELD <br> WASHER</label>
                                       </div>
                                       <div class="form-btnw-wrap upgrade-checked">
                                          <input type="checkbox" class="btn-check" name="oil_fluid_service" value="COOLANT" id="checkbox2" autocomplete="off" @if($serviceData) @if(in_array('COOLANT', $trimmed_array))
                                          checked
                                       @endif @endif >
                                          <label for="checkbox2" class="text-center">COOLANT</label>
                                       </div>
                                       <div class="form-btnw-wrap upgrade-checked">
                                          <input type="checkbox" class="btn-check" value="TRANSMISSION" name="oil_fluid_service" id="checkbox3" autocomplete="off" @if($serviceData) @if(in_array('TRANSMISSION', $trimmed_array))
                                          checked 
                                       @endif @endif>
                                          <label for="checkbox3" class="text-center"  >TRANSMISSION <br> FLUID </label>
                                       </div>

                                       <div class="form-btnw-wrap upgrade-checked">
                                          <input type="checkbox" class="btn-check" name="oil_fluid_service" id="checkbox4" value="BRAKE FLUID" autocomplete="off" @if($serviceData) @if(in_array('BRAKE FLUID', $trimmed_array))
                                          checked
                                       @endif @endif >
                                          <label for="checkbox4" class="text-center">BRAKE FLUID</label>
                                       </div>
                                       <div class="form-btnw-wrap upgrade-checked">
                                          <input type="checkbox" class="btn-check" name="oil_fluid_service" value="POWER" id="checkbox5" autocomplete="off" @if($serviceData) @if(in_array('POWER', $trimmed_array))
                                          checked
                                       @endif @endif >
                                          <label for="checkbox5" class="text-center">POWER <br> STEERING</label>
                                       </div>
                                       
                                    </div>
                                    <span class="newerrr" style="color:red;display:none">Please select fluid serivces</span>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-4 col-12">
                                    <label class="p-0">OIL PAN REMOVED:</label>
                                 </div>
                                 <div class="col-md-8 col-12">
                                    <div class="btn-group btn-group d-flex flex-row" role="group" style="column-gap: 10px;">
                                       <div class="form-btnw-wrap upgrade-checked">
                                          <input type="radio" class="btn-check" name="oil_pan_removed" value="Yes" id="btnradio30" autocomplete="off" @if($serviceData) @if($serviceData->oil_pan_removed=='Yes') checked @endif @endif >
                                          <label for="btnradio30">YES</label>
                                       </div>
                                       <div class="form-btnw-wrap upgrade-checked">
                                          <input type="radio" class="btn-check" name="oil_pan_removed" value="No" id="btnradio31" autocomplete="off"  @if($serviceData) @if($serviceData->oil_pan_removed=='No') checked  @endif @else checked @endif>
                                          <label for="btnradio31">NO</label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                          
                           <div class="form-group">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-4 col-12">
                                    <label class="p-0">OIL PAN GASKET REPLACED:</label>
                                 </div>
                                 <div class="col-md-8 col-12">
                                    <div class="btn-group btn-group d-flex flex-row" role="group" style="column-gap: 10px;">
                                       <div class="form-btnw-wrap upgrade-checked">
                                          <input type="radio" class="btn-check" value="Yes" name="oil_pan_gaskit" id="btnradio110" autocomplete="off"  @if($serviceData) @if($serviceData->oil_pan_gaskit=='Yes') checked @endif @endif>
                                          <label for="btnradio110">YES</label>
                                       </div>
                                       <div class="form-btnw-wrap upgrade-checked">
                                          <input type="radio" class="btn-check" value="No" name="oil_pan_gaskit" id="btnradio111" autocomplete="off"  @if($serviceData) @if($serviceData->oil_pan_gaskit=='No') checked @endif @else checked @endif>
                                          <label for="btnradio111">NO</label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="form-group">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-4 col-12">
                                    <label class="p-0">OIL PAN NUT REPLACED:</label>
                                 </div>
                                 <div class="col-md-8 col-12">
                                    <div class="btn-group btn-group d-flex flex-row" role="group" style="column-gap: 10px;">
                                       <div class="form-btnw-wrap upgrade-checked">
                                          <input type="radio" class="btn-check" name="oil_pan_nut" id="btnradio112" autocomplete="off" value="Yes"  @if($serviceData) @if($serviceData->oil_pan_nut=='Yes') checked @endif @endif>
                                          <label for="btnradio112">YES</label>
                                       </div>
                                       <div class="form-btnw-wrap upgrade-checked">
                                          <input type="radio" class="btn-check" name="oil_pan_nut" id="btnradio113" autocomplete="off" value="No"  @if($serviceData) @if($serviceData->oil_pan_nut=='No') checked  @endif @else checked  @endif>
                                          <label for="btnradio113">NO</label>
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
                                       Photos & Docs
                                        <input type="file" name="image_uploaded[]" id="insert_image_uploaded" class="form-control image_uploaded" value="Upload" multiple="multiple" accept="image/*,.pdf"> </button>
                                 </div>
               
                                 <div class="col-lg-8 col-12 text-center display_image_list"  id="display_image_list">
                                    <ul>@if($serviceData && $serviceData->document)
                                   
                                       @foreach(explode(',',$serviceData->document) as $key=>$value)
                                       <?php  $chkextension= explode('.',$value);?>
                                       @if((trim($chkextension[5])=='pdf'))
                                       <li id="{{$key}}"><span><button type='button' class="btn cross" id="{{$key}}">&nbsp;</button><img id="{{$key}}" src="/assets/images/pdf.png"  class="imgupdate"></span></li>
                                       @else
                                       <li id="{{$key}}"><span><button type='button' class="btn cross" id="{{$key}}">&nbsp;</button><img id="{{$key}}" src="/assets/images/jpg.png"  class="imgupdate"></span></li>
                                       @endif
                                      
                                       @endforeach
                                       @endif
                                       
                                    </ul>                  
                                 </div>
                              </div>
                           </div>
                        </div>
                  </div>
                  <button class="car-adding__btn btn btn--accent insertOilServices cmn-btn" type="button">Save</button>
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