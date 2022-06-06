@extends('layout.default')
<!-- leftcode -->
@section('content')
@include('shop-settings.leftshowmenu')
<div class="account-settings__content-wr">
   <div class="account-settings__content-form">
      <div class="grid-view-shop">
         <div class="common-wrap">
            <div class="cmn-content">
               <form id="transmissionData">
                  @csrf
                  <input type="hidden" id="servicedata" name="carShopService" value="@if(isset($_GET['servicedata'])){{ $_GET['servicedata'] }} @endif">
                  <div class="oil-service cmn-right-label cmn-mx-75">


                     <div class="form-box">
                        <div class="form-group">
                           <div class="row d-flex align-items-center">
                              <div class="col-md-4 col-12">
                                 <label class="p-0">SERVICE TYPE:</label>
                              </div>
                              <div class="col-md-8 col-12">
                                 <div class="btn-group flex-row fluid-service cmn-radio myerr service_type" role="group">
                                    <div class="form-btnw-wrap">
                                       <input type="radio" class="btn-check" value="FLUID/FILTER CHANGE" name="service_type" id="checkbox1" autocomplete="off" @if($serviceData) @if($serviceData->service_type == "FLUID/FILTER CHANGE") checked @endif @endif>
                                       <label for="checkbox1" class="text-center">FLUID/FILTER CHANGE</label>
                                    </div>
                                    <div class="form-btnw-wrap">
                                       <input type="radio" class="btn-check" value="DIAGNOSIS" name="service_type" id="checkbox2" autocomplete="off" @if($serviceData) @if($serviceData->service_type == "DIAGNOSIS") checked @endif @endif>
                                       <label for="checkbox2" class="text-center">DIAGNOSIS</label>
                                    </div>
                                    <div class="form-btnw-wrap">
                                       <input type="radio" class="btn-check" value="REBUILD" name="service_type" id="checkbox3" autocomplete="off" @if($serviceData) @if($serviceData->service_type == "REBUILD") checked @endif @endif>
                                       <label for="checkbox3" class="text-center">REBUILD</label>
                                    </div>

                                    <div class="form-btnw-wrap">
                                       <input type="radio" class="btn-check" value="REPAIR" name="service_type" id="checkbox4" autocomplete="off" @if($serviceData) @if($serviceData->service_type == "REPAIR") checked @endif @endif>
                                       <label for="checkbox4" class="text-center">REPAIR</label>
                                    </div>
                                    <div class="form-btnw-wrap">
                                       <input type="radio" class="btn-check" value="REPLACE / INSTALLATION" name="service_type" id="checkbox5" autocomplete="off" @if($serviceData) @if($serviceData->service_type == "REPLACE / INSTALLATION") checked @endif @endif>
                                       <label for="checkbox5" class="text-center">REPLACE / INSTALLATION</label>
                                    </div>

                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="form-group">
                           <div class="row d-flex align-items-center">
                              <div class="col-md-4 col-12">
                                 <label class="p-0">FLUID TYPE:</label>
                              </div>
                              <div class="col-md-8 col-12">
                                 <input class="form-control border-0 myerr fluid_type" name="fluid_type" value="@if($serviceData){{$serviceData->fluid_type}}@endif" style="height:35px">
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="row d-flex align-items-center">
                              <div class="col-md-4 col-12">
                                 <label class="p-0">FILTER BRAND:</label>
                              </div>
                              <div class="col-md-8 col-12">
                                 <input class="form-control border-0 myerr filter_brand" name="filter_brand" value="@if($serviceData){{$serviceData->filter_brand}}@endif" style="height:35px">
                              </div>
                           </div>
                        </div>


                        <div class="form-group">
                           <div class="row d-flex align-items-center">
                              <div class="col-md-4 col-12">
                                 <label class="p-0">LUBRICATION PAN GASKET REPLACED:</label>
                              </div>
                              <div class="col-md-8 col-12">
                                 <div class="btn-group btn-group d-flex flex-row" role="group" style="column-gap: 10px;">
                                    <div class="form-btnw-wrap upgrade-checked">
                                       <input type="radio" class="btn-check" value="Yes" name="lubrication_pan_gasket_replaced" id="btnradio30" autocomplete="off" @if($serviceData) @if($serviceData->lubrication_pan_gasket_replaced == "Yes") checked @endif @endif>
                                       <label for="btnradio30">YES</label>
                                    </div>
                                    <div class="form-btnw-wrap upgrade-checked">
                                       <input type="radio" class="btn-check" value="No" name="lubrication_pan_gasket_replaced" id="btnradio31" autocomplete="off" @if($serviceData) @if($serviceData->lubrication_pan_gasket_replaced == "No") checked @endif @endif>
                                       <label for="btnradio31">NO</label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="form-group">
                           <div class="row d-flex align-items-center">
                              <div class="col-md-4 col-12">
                                 <label class="p-0">LUBRICATION PAN REPLACED:</label>
                              </div>
                              <div class="col-md-8 col-12">
                                 <div class="btn-group btn-group d-flex flex-row" role="group" style="column-gap: 10px;">
                                    <div class="form-btnw-wrap upgrade-checked">
                                       <input type="radio" class="btn-check" value="Yes" name="lubrication_pan_replaced" id="btnradio110" autocomplete="off" @if($serviceData) @if($serviceData->lubrication_pan_replaced == "Yes") checked @endif @endif>
                                       <label for="btnradio110">YES</label>
                                    </div>
                                    <div class="form-btnw-wrap upgrade-checked">
                                       <input type="radio" class="btn-check" value="No" name="lubrication_pan_replaced" id="btnradio111" autocomplete="off" @if($serviceData) @if($serviceData->lubrication_pan_replaced == "No") checked @endif @endif>
                                       <label for="btnradio111">NO</label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="form-group">
                           <div class="row d-flex align-items-center">
                              <div class="col-md-4 col-12">
                                 <label class="p-0">MILEAGE:</label>
                              </div>
                              <div class="col-md-8 col-12">
                                 <input class="form-control border-0 myerr mileage numberonly" name="mileage" value="@if($serviceData){{$serviceData->mileage}}@endif" style="height:35px">
                              </div>
                           </div>
                        </div>

                        <div class="form-group">
                           <div class="row d-flex">
                              <div class="col-md-4 col-12">
                                 <label class="p-0">NOTES:</label>
                              </div>
                              <div class="col-md-8 col-12">
                                 <textarea class="form-control transmission_notes" name="transmission_notes" rows="5">@if($serviceData){{$serviceData->transmission_notes}}@endif</textarea>
                              </div>
                           </div>
                        </div>




                     </div>

                     <!--col-->

                     <div class="form-box w-100">
                        <div class="form-group">
                           <div class="upload-wrap">
                              <div class="row align-items-center">
                                 <div class="col-md-4 col-12">
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
                     <button class="car-adding__btn btn btn--accent cmn-btn" id="transmissionSave" type="button">Save</button>
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