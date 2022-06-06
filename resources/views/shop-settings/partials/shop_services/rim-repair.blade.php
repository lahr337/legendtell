@extends('layout.default')
<!-- leftcode -->
@section('content')
@include('shop-settings.leftshowmenu')
<div class="account-settings__content-wr">
   <div class="account-settings__content-form">
      <div class="grid-view-shop">
         <div class="common-wrap">
            <div class="cmn-content">
               <form id="rimRepairData">
                  @csrf
                  <input type="hidden" id="servicedata" name="carShopService" value="@if(isset($_GET['servicedata'])){{ $_GET['servicedata'] }} @endif">
                  <div class="rim-repair grid-3 cmn-radio cmn-mx-75">
                     <div class="btn-group" role="group">
                        <div class="form-btnw-wrap">
                           <input type="radio" class="btn-check service_type" value="NEW INSTALL" name="service_type" id="rim-repair1" autocomplete="off" @if($serviceData) @if($serviceData->service_type == "NEW INSTALL") checked @endif @endif>
                           <label for="rim-repair1">NEW INSTALL</label>
                        </div>
                        <div class="form-btnw-wrap">
                           <input type="radio" class="btn-check service_type" value="REPAIR" name="service_type" id="rim-repair2" autocomplete="off" @if($serviceData) @if($serviceData->service_type == "REPAIR") checked @endif @endif>
                           <label for="rim-repair2">REPAIR</label>
                        </div>
                        <div class="form-btnw-wrap">
                           <input type="radio" class="btn-check service_type" value="REPLACEMENT" name="service_type" id="rim-repair3" autocomplete="off" @if($serviceData) @if($serviceData->service_type == "REPLACEMENT") checked @endif @endif>
                           <label for="rim-repair3">REPLACEMENT</label>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <h3 class="mainrimheader">UPLOAD BEFORE PHOTOS</h3>
                     </div>
                     <div class="form-box w-100">
                        <div class="form-group">
                           <div class="upload-wrap">
                              <div class="row align-items-center">
                                 <div class="col-lg-4 col-12">
                                    <button class="btn uplaod">UPLOAD <br />
                                       Photos & Docs<input type="file" name="products_uploaded_before[]" id="insert_products_uploaded" class="form-control before_image" value="Upload" multiple="multiple"> </button>
                                 </div>
                                 <div class="col-md-8 col-12 text-center display_product_list_before">
                                    <ul>
                                       @if($serviceData && $serviceData->before_service_image)

                                       @foreach(explode(',',$serviceData->before_service_image) as $key=>$value)
                                       <?php $chkextension = explode('.', $value); error_reporting(0); ?>
                                       @if(trim($chkextension[5])=="pdf")
                                       <li id="before{{$key}}"><span><button type='button' class="btn cross_before" id="{{$key}}">&nbsp;</button><img id="{{$key}}" src="/assets/images/pdf.png" class="imgupdate"></span></li>
                                       @else
                                       <li id="before{{$key}}"><span><button type='button' class="btn cross_before" id="{{$key}}">&nbsp;</button><img id="{{$key}}" src="/assets/images/jpg.png" class="imgupdate"></span></li>
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
                     <div class="col-md-12">
                        <h3 class="mainrimheader">UPLOAD AFTER PHOTOS</h3>
                     </div>
                     <div class="form-box w-100">
                        <div class="form-group">
                           <div class="upload-wrap">
                              <div class="row align-items-center">
                                 <div class="col-lg-4 col-12">
                                    <button class="btn uplaod">UPLOAD <br />
                                       Photos & Docs<input type="file" name="products_uploaded[]" id="insert_products" class="form-control after_image" value="Upload" multiple="multiple"> </button>
                                 </div>
                                 <div class="col-md-8 col-12 text-center display_product_list_after_image">
                                    <ul>
                                       @if($serviceData && $serviceData->after_service_images)

                                       @foreach(explode(',',$serviceData->after_service_images) as $key=>$value)
                                       <?php $chkextension = explode('.', $value); error_reporting(0); ?>
                                       @if(trim($chkextension[5])=="pdf")
                                       <li id="after{{$key}}"><span><button type='button' class="btn cross_three" data-id="{{$key}}" id="{{$key}}">&nbsp;</button><img id="{{$key}}" src="/assets/images/pdf.png" class="imgupdate"></span></li>
                                       @else
                                       <li id="after{{$key}}"><span><button type='button' class="btn cross_three" data-id="{{$key}}" id="{{$key}}">&nbsp;</button><img id="{{$key}}" src="/assets/images/jpg.png" class="imgupdate"></span></li>
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
                     <button class="car-adding__btn btn btn--accent cmn-btn" id="rimRepairSave" type="button">Save</button>
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