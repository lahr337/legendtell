@extends('layout.default')
<!-- leftcode -->
@section('content')
@include('shop-settings.leftshowmenu')
<div class="account-settings__content-wr">
   <div class="account-settings__content-form">
      <div class="grid-view-shop">
         <div class="common-wrap">
            <div class="cmn-content">
               <form id="electricData">
                  @csrf
                  <input type="hidden" id="servicedata" name="carShopService" value="@if(isset($_GET['servicedata'])){{ $_GET['servicedata'] }} @endif">
                  <div class="oil-service cmn-right-label cmn-mx-75">


                     <div class="form-box">
                        <div class="form-group">
                           <div class="row d-flex align-items-center">
                              <div class="col-md-4 col-12">
                                 <label class="p-0">SYSTEM:</label>
                              </div>
                              <div class="col-md-8 col-12">
                                 <input type="text" name="system" value="@if($serviceData){{$serviceData->system}}@endif" class="form-control border-0 system myerr" style="height:35px">
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="row d-flex">
                              <div class="col-md-4 col-12">
                                 <label class="p-0">DIAGNOSIS:</label>
                              </div>
                              <div class="col-md-8 col-12">
                                 <textarea class="form-control diagnosis-electric myerr" name="diagnosis" rows="5">@if($serviceData){{$serviceData->diagnosis}}@endif</textarea>
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="row d-flex align-items-center">
                              <div class="col-md-4 col-12">
                                 <label class="p-0">ACTION:</label>
                              </div>
                              <div class="col-md-8 col-12">
                                 <div class="btn-group btn-group flex-row fluid-service" role="group">
                                    <div class="form-btnw-wrap upgrade-checked myerr electric-action">
                                       <input type="radio" class="btn-check" name="action" value="Repaired" id="checkbox1" autocomplete="off" @if($serviceData) @if($serviceData->action == "Repaired") checked @endif @endif>
                                       <label for="checkbox1" class="text-center">REPAIRED</label>
                                    </div>
                                    <div class="form-btnw-wrap upgrade-checked">
                                       <input type="radio" class="btn-check" name="action" value="Replaced" id="checkbox2" autocomplete="off" @if($serviceData) @if($serviceData->action == "Replaced") checked @endif @endif>
                                       <label for="checkbox2" class="text-center">REPLACED</label>
                                    </div>
                                    <div class="form-btnw-wrap upgrade-checked">
                                       <input type="radio" class="btn-check" name="action" value="upgraded" id="checkbox3" autocomplete="off" @if($serviceData) @if($serviceData->action == "upgraded") checked @endif @endif>
                                       <label for="checkbox3" class="text-center">UPGRADED</label>
                                    </div>

                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="form-group">
                           <div class="row d-flex align-items-center">
                              <div class="col-md-4 col-12">
                                 <label class="p-0">MANUFACTURER:</label>
                              </div>
                              <div class="col-md-8 col-12">
                                 <input type="text" name="manufacturer_by" value="@if($serviceData){{$serviceData->manufacturer_by}}@endif" class="form-control border-0 manufacturer_by myerr" style="height:35px">
                              </div>
                           </div>
                        </div>



                        <div class="form-group">
                           <div class="row d-flex align-items-center">
                              <div class="col-md-4 col-12">
                                 <label class="p-0">WARRANTY:</label>
                              </div>
                              <div class="col-md-8 col-12">
                                 <div class="btn-group btn-group d-flex flex-row myerr is_waranty" role="group" style="column-gap: 10px;">
                                    <div class="form-btnw-wrap upgrade-checked">
                                       <input type="radio" class="btn-check elictricalWarrenty" value="Yes" name="is_waranty" id="btnradio30" autocomplete="off" @if($serviceData) @if($serviceData->is_waranty == "Yes") checked @endif @endif>
                                       <label for="btnradio30">YES</label>
                                    </div>
                                    <div class="form-btnw-wrap upgrade-checked">
                                       <input type="radio" class="btn-check elictricalWarrenty" value="No" name="is_waranty" id="btnradio31" autocomplete="off" @if($serviceData) @if($serviceData->is_waranty == "No") checked @endif @endif>
                                       <label for="btnradio31">NO</label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="form-group">
                           <div class="row d-flex align-items-center">
                              <div class="col-md-4 col-12">
                                 <label class="p-0">WARRANTY COMPANY:</label>
                              </div>
                              <div class="col-md-8 col-12">
                                 <input type="text" name="waranty_company" class="form-control border-0 waranty_company electricalwarentycompany" value="@if($serviceData){{$serviceData->waranty_company}}@endif" style="height:35px">
                              </div>
                           </div>
                        </div>

                        <div class="form-group">
                           <div class="row d-flex">
                              <div class="col-md-4 col-12">
                                 <label class="p-0">NOTES:</label>
                              </div>
                              <div class="col-md-8 col-12">
                                 <textarea class="form-control" name="electric_notes" rows="5">@if($serviceData){{$serviceData->electric_notes}}@endif</textarea>
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
                                       Photos & Docs<input type="file" name="products_uploaded[]" id="insert_products_uploaded" class="form-control products_uploaded" value="Upload" multiple="multiple"> </button>
                                 </div>
                                 <div class="col-md-8 col-12 text-center display_image_list3">
                                    <ul>
                                       @if($serviceData && $serviceData->documents)

                                       @foreach(explode(',',$serviceData->documents) as $key=>$value)
                                       <?php $chkextension = explode('.', $value); ?>
                                       @if((trim($chkextension[5])=='pdf'))
                                       <li id="{{$key}}"><span><button type='button' class="btn cross" id="{{$key}}">&nbsp;</button><img id="{{$key}}" src="/assets/images/pdf.png" class="imgupdate"></span></li>
                                       @else
                                       <li id="{{$key}}"><span><button type='button' class="btn cross" id="{{$key}}">&nbsp;</button><img id="{{$key}}" src="/assets/images/jpg.png" class="imgupdate"></span></li>
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
                     <button class="car-adding__btn btn btn--accent cmn-btn" id="electricSave" type="button">Save</button>
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