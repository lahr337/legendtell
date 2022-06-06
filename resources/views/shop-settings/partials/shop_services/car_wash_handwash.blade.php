@extends('layout.default')
<!-- leftcode -->
@section('content')
@include('shop-settings.leftshowmenu')
<div class="account-settings__content-wr">
   <div class="account-settings__content-form">
      <div class="grid-view-shop">
         <div class="common-wrap">
            <div class="cmn-content">
               <div class="carwash_wrap">
                  <ul class="nav nav-pills nav-tabs" id="myTab" role="tablist">
                     <li class="nav-item" role="presentation">
                        <a href="/shop-settings/car-wash-handwash/?servicedata={{base64_encode($vinid.'%%%4')}}&service_name=Handwash"><button class="nav-link navTabs  @if($service_name=='Handwash') active @endif" id="home-tab%%%3" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Full Service
                              Handwash </button></a>
                     </li>
                     <li class="nav-item" role="presentation">
                        <a href="/shop-settings/car-wash-self-serve/?servicedata={{base64_encode($vinid.'%%%4')}}&service_name=Self-serve"> <button class="nav-link navTabs   @if($service_name=='Self-serve') active @endif" id="profile-tab%%%4" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Tunnel Carwash</button></a>
                     </li>
                     <li class="nav-item" role="presentation">
                        <a href="/shop-settings/car-wash-touchless/?servicedata={{base64_encode($vinid.'%%%4')}}&service_name=Touchless"><button class="nav-link navTabs cartabdata  @if($service_name=='Touchless') active @endif" id="contact-tab%%%5" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Touchless</button></a>
                     </li>
                  </ul>
                  <input type="hidden" value="{{$vinid}}" id="last_Car_id">
                  <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade show  @if($service_name=='Handwash') show active @endif" id="home" role="tabpanel" aria-labelledby="home-tab%%%3">
                        <form id="saveCarHandleForm" name="saveCarHandleForm" action="{{route('shop-settings.save-car-handle')}}" method="PUT" accept-charset="multipart/form-data">
                           @csrf
                           @method('put')
                           <input type="hidden" id="servicedata" name="carShopService" value="@if(isset($_GET['servicedata'])){{ $_GET['servicedata'] }} @endif">
                           <input type="hidden" name="servicedataid" value="4">
                           <input type="hidden" name="services_name" value="{{$service_name}}">
                           <div class="car-handwash">
                              <div class="btn-group" role="group">
                                 <div class="form-btnw-wrap">
                                    <input type="checkbox" class="btn-check" name="serviceData[]" id="handwash1" autocomplete="off" value="HANDWASH" @if($checkwasData) @if(in_array('HANDWASH', explode(',',$checkwasData->service_name)))
                                    checked
                                    @endif @endif >
                                    <label for="handwash1">HANDWASH</label>
                                 </div>
                                 <div class="form-btnw-wrap">
                                    <input type="checkbox" class="btn-check" name="serviceData[]" id="handwash2" autocomplete="off" value="RIM CLEANSE" @if($checkwasData) @if(in_array('RIM CLEANSE', explode(',',$checkwasData->service_name)))
                                    checked
                                    @endif @endif>
                                    <label for="handwash2">RIM CLEANSE</label>
                                 </div>
                                 <div class="form-btnw-wrap">
                                    <input type="checkbox" class="btn-check" name="serviceData[]" id="handwash3" autocomplete="off" value="INTERIOR VACUUM" @if($checkwasData) @if(in_array('INTERIOR VACUUM', explode(',',$checkwasData->service_name)))
                                    checked @endif
                                    @endif>
                                    <label for="handwash3">INTERIOR VACUUM</label>
                                 </div>
                                 <div class="form-btnw-wrap">
                                    <input type="checkbox" class="btn-check" name="serviceData[]" id="handwash4" autocomplete="off" value="CLAY" @if($checkwasData) @if(in_array('CLAY', explode(',',$checkwasData->service_name)))
                                    checked
                                    @endif
                                    @endif>
                                    <label for="handwash4">CLAY</label>
                                 </div>
                                 <div class="form-btnw-wrap">
                                    <input type="checkbox" class="btn-check" name="serviceData[]" id="handwash5" autocomplete="off" value="INTERIOR SHAMPOO" @if($checkwasData) @if(in_array('INTERIOR SHAMPOO', explode(',',$checkwasData->service_name)))
                                    checked
                                    @endif
                                    @endif>
                                    <label for="handwash5">INTERIOR SHAMPOO</label>
                                 </div>
                                 <div class="form-btnw-wrap">
                                    <input type="checkbox" class="btn-check" name="serviceData[]" id="handwash6" autocomplete="off" value="LIGHT POLISH" @if($checkwasData) @if(in_array('LIGHT POLISH', explode(',',$checkwasData->service_name)))
                                    checked
                                    @endif
                                    @endif>
                                    <label for="handwash6">LIGHT POLISH</label>
                                 </div>
                                 <div class="form-btnw-wrap">
                                    <input type="checkbox" class="btn-check" name="serviceData[]" id="handwash7" autocomplete="off" value="ENGINE BAY CLEANSE" @if($checkwasData) @if(in_array('ENGINE BAY CLEANSE', explode(',',$checkwasData->service_name)))
                                    checked
                                    @endif
                                    @endif>
                                    <label for="handwash7">ENGINE BAY CLEANSE</label>
                                 </div>
                                 <div class="form-btnw-wrap">
                                    <input type="checkbox" class="btn-check" name="serviceData[]" id="handwash8" autocomplete="off" value="WAX/SEALANT APPLICATION" @if($checkwasData) @if(in_array('WAX/SEALANT APPLICATION', explode(',',$checkwasData->service_name)))
                                    checked
                                    @endif
                                    @endif>
                                    <label for="handwash8">WAX / SEALANT
                                       APPLICATION</label>
                                 </div>
                              </div>
                              <div class="cmn-note-flex">
                                 <div class="form-group row">
                                    <div class="col-12 col-md-4">
                                       <label class="p-0">Notes:</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                       <textarea class="form-control" name="notesdata" rows="5">@if($checkwasData){{$checkwasData->notes}}@endif</textarea>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-box w-100">
                                 <div class="form-group">
                                    <div class="upload-wrap">
                                       <div class="row d-flex align-items-center">
                                          <div class="col-lg-4 col-12">
                                             <button class="btn uplaod">UPLOAD
                                                Photos & Docs <input type="file" name="image_uploaded[]" id="insert_image_uploaded" class="form-control image_uploaded" value="Upload" multiple="multiple"> </button>
                                          </div>

                                          <div class="col-lg-8 col-12 text-center display_image_list" id="display_image_list">
                                             <ul>@if($checkwasData && $checkwasData->documents)
                                                @foreach(explode(',',$checkwasData->documents) as $key=>$value)
                                                <?php $chkextension = explode('.', $value); ?>
                                                @if($chkextension[5]=='pdf')
                                                <li id="{{$key}}"><span><button type='button' class="btn cross" id="{{$key}}">&nbsp;</button><img id="{{$key}}" src="/assets/images/pdf.png" class="imgupdate"></span></li>
                                                @else
                                                <li id="{{$key}}"><span><button type='button' class="btn cross" id="{{$key}}">&nbsp;</button><img id="{{$key}}" src="/assets/images/jpg.png" class="imgupdate"></span></li>
                                                @endif

                                                @endforeach
                                                @endif
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                              <button class="car-adding__btn btn btn--accent insertHandle cmn-btn" type="button">Save</button>
                           </div>
                        </form>
                     </div>
                     <div class="tab-pane fade @if($service_name=='Self-serve') show active @endif" id="profile" role="tabpanel" aria-labelledby="profile-tab%%%4">
                        <form id="saveCarTunnelForm" name="saveCarTunnelForm" action="{{route('shop-settings.save-car-handle')}}" method="PUT" accept-charset="multipart/form-data">
                           @csrf
                           @method('put')
                           <input type="hidden" id="servicedata" name="carShopService" value="@if(isset($_GET['servicedata'])){{ $_GET['servicedata'] }} @endif">
                           <input type="hidden" name="servicedataid" value="4">
                           <input type="hidden" name="services_name" value="{{$service_name}}">

                           <div class="car-handwash tunnel-carwash">
                              <div class="btn-group" role="group">
                                 <div class="tunnel-wrap row">
                                    <div class="col-12 col-md-4">
                                       <div class="form-btnw-wrap">
                                          <input type="radio" class="btn-check" name="tunnelserviceData[]" id="tunnelwash1" autocomplete="off" value="Basic Wash" @if($checkwasData) @if(in_array('Basic Wash', explode(',',$checkwasData->service_name)))
                                          checked
                                          @endif
                                          @else
                                          checked
                                          @endif>
                                          <label for="tunnelwash1">Basic Wash</label>
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-8">
                                       <p>Apply Soap - Brush Scrub - Blower Dry</p>
                                    </div>
                                 </div>
                                 <div class="tunnel-wrap row">
                                    <div class="col-12 col-md-4">
                                       <div class="form-btnw-wrap">
                                          <input type="radio" class="btn-check" value="Deluxe Wash" name="tunnelserviceData[]" id="tunnelwash2" autocomplete="off" @if($checkwasData) @if(in_array('Deluxe Wash', explode(',',$checkwasData->service_name)))
                                          checked
                                          @endif
                                          @endif>
                                          <label for="tunnelwash2">Deluxe Wash</label>
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-8">
                                       <p>Pre-soak - Apply Soap - Brush Scrub - Rim Cleaner - Spray Wax - Blower Dry</p>
                                    </div>
                                 </div>
                                 <div class="tunnel-wrap row">
                                    <div class="col-12 col-md-4">
                                       <div class="form-btnw-wrap">
                                          <input type="radio" class="btn-check" value="Premier Wash" name="tunnelserviceData[]" id="tunnelwash3" autocomplete="off" @if($checkwasData) @if(in_array('Premier Wash', explode(',',$checkwasData->service_name)))
                                          checked
                                          @endif
                                          @endif>
                                          <label for="tunnelwash3">Premier Wash</label>
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-8">
                                       <p>Pre-soak - Apply Soap - Brush Scrub - Ceramic Spray Wax - Tire Scrub - Rim Cleaner - Tire
                                          Shine - Blower Dry
                                       </p>
                                    </div>
                                 </div>
                                 <div class="cmn-note-flex">
                                    <div class="form-group row">
                                       <div class="col-12 col-md-4">
                                          <label class="p-0">Additional Notes:</label>
                                       </div>
                                       <div class="col-12 col-md-8">
                                          <textarea class="form-control" name="tunnelnotesdata" rows="5">@if($checkwasData){{$checkwasData->notes}}@endif</textarea>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-box w-100">
                                    <div class="form-group">
                                       <div class="upload-wrap">
                                          <div class="row d-flex align-items-center">
                                             <div class="col-lg-4 col-12">
                                                <button class="btn uplaod">UPLOAD
                                                   Photos & Docs <input type="file" name="image_uploaded[]" id="insert_image_uploaded2" class="form-control image_uploaded2" value="Upload" multiple="multiple"> </button>
                                             </div>

                                             <div class="col-lg-8 col-12 text-center display_image_list2" id="display_image_list2">
                                                <ul>@if($checkwasData && $checkwasData->documents)
                                                   @foreach(explode(',',$checkwasData->documents) as $key=>$value)
                                                   <?php $chkextension = explode('.', $value); ?>
                                                   @if($chkextension[5]=='pdf')
                                                   <li id="repair{{$key}}"><span><button type='button' class="btn cross_two" id="{{$key}}">&nbsp;</button><img id="{{$key}}" src="/assets/images/pdf.png" class="imgupdate"></span></li>
                                                   @else
                                                   <li id="repair{{$key}}"><span><button type='button' class="btn cross_two" id="{{$key}}">&nbsp;</button><img id="{{$key}}" src="/assets/images/jpg.png" class="imgupdate"></span></li>
                                                   @endif

                                                   @endforeach
                                                   @endif
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <button class="car-adding__btn btn btn--accent inserttunnel cmn-btn mx-auto" type="button">Save</button>
                              </div>
                           </div>
                        </form>
                     </div>
                     <div class="tab-pane fade @if($service_name=='Touchless') show active @endif" id="contact" role="tabpanel" aria-labelledby="contact-tab%%%5">
                        <div class="car-handwash tunnel-carwash">
                           <form id="saveCarTouchlessForm" name="saveCarTouchlessForm" action="{{route('shop-settings.save-car-handle')}}" method="PUT" accept-charset="multipart/form-data">
                              @csrf
                              @method('put')
                              <input type="hidden" id="servicedata" name="carShopService" value="@if(isset($_GET['servicedata'])){{ $_GET['servicedata'] }} @endif">
                              <input type="hidden" name="servicedataid" value="4">
                              <input type="hidden" name="services_name" value="{{$service_name}}">
                              <div class="btn-group" role="group">
                                 <div class="tunnel-wrap row">
                                    <div class="col-12 col-md-4">
                                       <div class="form-btnw-wrap">
                                          <input type="radio" class="btn-check" id="touchwash1" autocomplete="off" value="Basic Wash" name="tunnelserviceData[]" @if($checkwasData) @if(in_array('Basic Wash', explode(',',$checkwasData->service_name)))
                                          checked
                                          @endif
                                          @else
                                          checked
                                          @endif>
                                          <label for="touchwash1">Basic Wash</label>
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-8">
                                       <p>Apply Soap - Brush Scrub - Blower Dry</p>
                                    </div>
                                 </div>
                                 <div class="tunnel-wrap row">
                                    <div class="col-12 col-md-4">
                                       <div class="form-btnw-wrap">
                                          <input type="radio" class="btn-check" id="touchwash2" autocomplete="off" value="Deluxe Wash" name="tunnelserviceData[]" @if($checkwasData) @if(in_array('Deluxe Wash', explode(',',$checkwasData->service_name)))
                                          checked
                                          @endif
                                          @endif>
                                          <label for="touchwash2">Deluxe Wash</label>
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-8">
                                       <p>Pre-soak - Apply Soap - Brush Scrub - Rim Cleaner - Spray Wax - Blower Dry</p>
                                    </div>
                                 </div>
                                 <div class="tunnel-wrap row">
                                    <div class="col-12 col-md-4">
                                       <div class="form-btnw-wrap">
                                          <input type="radio" class="btn-check" id="touchwash3" autocomplete="off" value="Premier Wash" name="tunnelserviceData[]" @if($checkwasData) @if(in_array('Premier Wash', explode(',',$checkwasData->service_name)))
                                          checked
                                          @endif
                                          @endif>
                                          <label for="touchwash3">Premier Wash</label>
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-8">
                                       <p>Pre-soak - Apply Soap - Brush Scrub - Ceramic Spray Wax - Tire Scrub - Rim Cleaner - Tire
                                          Shine - Blower Dry
                                       </p>
                                    </div>
                                 </div>
                                 <div class="cmn-note-flex">
                                    <div class="form-group row">
                                       <div class="col-12 col-md-4">
                                          <label class="p-0">Additional Notes:</label>
                                       </div>
                                       <div class="col-12 col-md-8">
                                          <textarea class="form-control" name="tunnelnotesdata" rows="5">@if($checkwasData){{$checkwasData->notes}}@endif</textarea>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-box w-100">
                                    <div class="form-group">
                                       <div class="upload-wrap">
                                          <div class="row d-flex align-items-center">
                                             <div class="col-lg-4 col-12">
                                                <button class="btn uplaod">UPLOAD
                                                   Photos & Docs <input type="file" name="image_uploaded[]" id="insert_image_uploaded3" class="form-control image_uploaded" value="Upload" multiple="multiple"> </button>
                                             </div>

                                             <div class="col-lg-8 col-12 text-center display_image_list" id="display_image_list">
                                                <ul>@if($checkwasData && $checkwasData->documents)
                                                   @foreach(explode(',',$checkwasData->documents) as $key=>$value)
                                                   <?php $chkextension = explode('.', $value); ?>
                                                   @if(trim($chkextension[5])=='pdf')
                                                   <li id="estimate{{$key}}"><span><button type='button' class="btn cross_one" id="{{$key}}">&nbsp;</button><img id="{{$key}}" src="/assets/images/pdf.png" class="imgupdate"></span></li>
                                                   @else
                                                   <li id="estimate{{$key}}"><span><button type='button' class="btn cross_one" id="{{$key}}">&nbsp;</button><img id="{{$key}}" src="/assets/images/jpg.png" class="imgupdate"></span></li>
                                                   @endif

                                                   @endforeach
                                                   @endif
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <button class="car-adding__btn btn btn--accent inserttouchless cmn-btn mx-auto" type="button">Save</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @include('shop-settings.partials.rightvinnumber')
      </div>
   </div>
</div>
</main>
@endsection