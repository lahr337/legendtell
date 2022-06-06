@extends('layout.default')
<!-- leftcode -->
@section('content')
@include('shop-settings.leftshowmenu')
<div class="account-settings__content-wr">
   <div class="account-settings__content-form">
      <div class="grid-view-shop">
         <div class="common-wrap">
            <div class="cmn-content">
               <form id="collisionSave">
                  @csrf
                  <input type="hidden" id="servicedata" name="carShopService" value="@if(isset($_GET['servicedata'])){{ $_GET['servicedata'] }} @endif">
                  <!-- <input type="hidden" id="c_id" name="tint_id" value="@if($serviceData){{ $serviceData->tint_id }} @endif"> -->
                  <div class="service-type_collison-repair">
                     <div class="row">
                        <div class="form-box w-100">
                           <div class="form-group row">
                              <div class="col-lg-4">
                                 <label>Notes:</label>
                              </div>
                              <div class="col-lg-8">
                                 <textarea class="form-control" name="collision_notes" rows="5">@if($serviceData){{$serviceData->collision_notes}}@endif</textarea>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="upload-wrap">
                                 <div class="row align-items-center">
                                    <div class="col-12 col-md-4">
                                       <button class="btn uplaod">UPLOAD <br> BEFORE PHOTOS <input type="file" name="before_image[]" id="insert_products_uploaded" class="form-control before_image" value="Upload" multiple="multiple"> </button>
                                    </div>
                                    <div class="col-12 col-md-8 text-center display_product_list_before">
                                       <ul>
                                          @if($serviceData && $serviceData->before_image)

                                          @foreach(explode(',',$serviceData->before_image) as $before_image_key=>$before_image_value)
                                          <?php $chkextension = explode('.', $before_image_value); ?>
                                          @if((trim($chkextension[5])=='pdf'))
                                          <li id="before{{$before_image_key}}"><span><button type='button' class="btn cross_before" id="{{$before_image_key}}">&nbsp;</button><img id="{{$before_image_key}}" src="/assets/images/pdf.png" class="imgupdate"></span></li>
                                          @else
                                          <li id="before{{$before_image_key}}"><span><button type='button' class="btn cross_before" id="{{$before_image_key}}">&nbsp;</button><img id="{{$before_image_key}}" src="/assets/images/jpg.png" class="imgupdate"></span></li>
                                          @endif

                                          @endforeach
                                          @endif
                                       </ul>
                                    </div>
                                    <!--col-->
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="upload-wrap">
                                 <div class="row align-items-center">
                                    <div class="col-12 col-md-4">
                                       <button class="btn uplaod">UPLOAD <br> ESTIMATE DOCS <input type="file" name="document_of_estimate[]" id="insert_products_estimate" class="form-control estimated_document" value="Upload" multiple="multiple"> </button>
                                    </div>
                                    <div class="col-12 col-md-8 text-center display_product_list_estimate">
                                       <ul>
                                          @if($serviceData && $serviceData->document_of_estimate)

                                          @foreach(explode(',',$serviceData->document_of_estimate) as $document_of_estimate_key=>$document_of_estimate_value)
                                          <?php $chkextension = explode('.', $document_of_estimate_value); ?>
                                          @if((trim($chkextension[5])=='pdf'))
                                          <li id="estimate{{$document_of_estimate_key}}"><span><button type='button' class="btn cross_one" id="{{$document_of_estimate_key}}">&nbsp;</button><img id="{{$document_of_estimate_key}}" src="/assets/images/pdf.png" class="imgupdate"></span></li>
                                          @else
                                          <li id="estimate{{$document_of_estimate_key}}"><span><button type='button' class="btn cross_one" id="{{$document_of_estimate_key}}">&nbsp;</button><img id="{{$document_of_estimate_key}}" src="/assets/images/jpg.png" class="imgupdate"></span></li>
                                          @endif

                                          @endforeach
                                          @endif
                                       </ul>
                                    </div>
                                    <!--col-->
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="upload-wrap">
                                 <div class="row align-items-center">
                                    <div class="col-12 col-md-4">
                                       <button class="btn uplaod">UPLOAD <br> REPAIR DOCS <input type="file" name="document_of_repair[]" id="insert_products_repair_document" class="form-control repair_document" value="Upload" multiple="multiple"> </button>
                                    </div>
                                    <div class="col-12 col-md-8 text-center display_product_list_repair_document">
                                       <ul>
                                          @if($serviceData && $serviceData->document_of_repair)

                                          @foreach(explode(',',$serviceData->document_of_repair) as $document_of_repair_key=>$document_of_repair_value)
                                          <?php $chkextension = explode('.', $document_of_repair_value); ?>
                                          @if((trim($chkextension[5])=='pdf'))
                                          <li id="repair{{$document_of_repair_key}}"><span><button type='button' class="btn cross_two" id="{{$document_of_repair_key}}">&nbsp;</button><img id="{{$document_of_repair_key}}" src="/assets/images/pdf.png" class="imgupdate"></span></li>
                                          @else
                                          <li id="repair{{$document_of_repair_key}}"><span><button type='button' class="btn cross_two" id="{{$document_of_repair_key}}">&nbsp;</button><img id="{{$document_of_repair_key}}" src="/assets/images/jpg.png" class="imgupdate"></span></li>
                                          @endif

                                          @endforeach
                                          @endif
                                       </ul>
                                    </div>
                                    <!--col-->
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="upload-wrap">
                                 <div class="row align-items-center">
                                    <div class="col-12 col-md-4">
                                       <button class="btn uplaod">UPLOAD <br> AFTER PHOTOS<input type="file" name="after_image[]" id="insert_products_after_image" class="form-control after_image" value="Upload" multiple="multiple"> </button>
                                    </div>
                                    <div class="col-12 col-md-8 text-center display_product_list_after_image">
                                       <ul>
                                          @if($serviceData && $serviceData->after_image)

                                          @foreach(explode(',',$serviceData->after_image) as $key=>$value)
                                          <?php $chkextension = explode('.', $value); ?>
                                          @if((trim($chkextension[5])=='pdf'))
                                          <li id="after{{$key}}"><span><button type='button' class="btn cross_three" id="{{$key}}" data-id="{{$key}}">&nbsp;</button><img id="{{$key}}" src="/assets/images/pdf.png" class="imgupdate"></span></li>
                                          @else
                                          <li id="after{{$key}}"><span><button type='button' class="btn cross_three" id="{{$key}}" data-id="{{$key}}">&nbsp;</button><img id="{{$key}}" src="/assets/images/jpg.png" class="imgupdate"></span></li>
                                          @endif

                                          @endforeach
                                          @endif
                                       </ul>
                                    </div>
                                    <!--col-->
                                 </div>
                              </div>
                           </div>
                        </div>
                        <button class="car-adding__btn btn btn--accent cmn-btn" id="saveCollision" type="button">Save</button>
                     </div>
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