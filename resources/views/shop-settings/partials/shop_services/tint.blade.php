@extends('layout.default')
<!-- leftcode -->
@section('content')
@include('shop-settings.leftshowmenu')
<div class="account-settings__content-wr">
   <div class="account-settings__content-form">
      <div class="grid-view-shop">
         <div class="common-wrap">
            <?php
            if (isset($serviceData->tintservices)) {
               $tintservices_arr = explode(',', $serviceData->tintservices);
            } else {
               $tintservices_arr = array();
            }
            ?>
            <div class="cmn-content">
               <form id="saveTint">
                  @csrf
                  <input type="hidden" id="servicedata" name="carShopService" value="@if(isset($_GET['servicedata'])){{ $_GET['servicedata'] }} @endif">
                  <input type="hidden" id="tint_id" name="tint_id" value="@if($serviceData){{ $serviceData->tint_id }} @endif">

                  <div class="tint-service">
                     <div class="row" style="row-gap:25px;">
                        <div class="col-12 col-md-5">
                           <div class="cmn-checked cmn-col-1 mt-0">
                              <div class="btn-group" role="group">
                                 <div class="form-btnw-wrap">
                                    <input type="checkbox" value="FRONT WINDSHIELD" @if($serviceData) @if(in_array('FRONT WINDSHIELD',$tintservices_arr)) checked @endif @endif class="btn-check" name="tintservices[]" id="windshield-front" autocomplete="off">
                                    <label for="windshield-front">FRONT WINDSHIELD</label>
                                 </div>
                                 <div class="form-btnw-wrap">
                                    <input type="checkbox" value="DRIVER FRONT WINDOW" @if($serviceData) @if(in_array('DRIVER FRONT WINDOW',$tintservices_arr)) checked @endif @endif class="btn-check" name="tintservices[]" id="windshield-rear" autocomplete="off">
                                    <label for="windshield-rear">DRIVER FRONT WINDOW</label>
                                 </div>
                                 <div class="form-btnw-wrap">
                                    <input type="checkbox" value="DRIVER REAR WINDOW" @if($serviceData) @if(in_array('DRIVER REAR WINDOW',$tintservices_arr)) checked @endif @endif class="btn-check" name="tintservices[]" id="gasket-front" autocomplete="off">
                                    <label for="gasket-front">DRIVER REAR WINDOW</label>
                                 </div>
                                 <div class="form-btnw-wrap">
                                    <input type="checkbox" value="DRIVER REAR PANEL WINDOW" @if($serviceData) @if(in_array('DRIVER REAR PANEL WINDOW',$tintservices_arr)) checked @endif @endif class="btn-check" name="tintservices[]" id="gasket-rear" autocomplete="off" >
                                    <label for="gasket-rear">DRIVER REAR PANEL WINDOW</label>
                                 </div>
                                 <div class="form-btnw-wrap">
                                    <input type="checkbox" value="PASSENGER FRONT WINDOW" @if($serviceData) @if(in_array('PASSENGER FRONT WINDOW',$tintservices_arr)) checked @endif @endif class="btn-check" name="tintservices[]" id="mirror-alignment" autocomplete="off">
                                    <label for="mirror-alignment">PASSENGER FRONT WINDOW</label>
                                 </div>
                                 <div class="form-btnw-wrap">
                                    <input type="checkbox" value="PASSENGER REAR WINDOW" @if($serviceData) @if(in_array('PASSENGER REAR WINDOW',$tintservices_arr)) checked @endif @endif class="btn-check" name="tintservices[]" id="sensor" autocomplete="off" >
                                    <label for="sensor">PASSENGER REAR WINDOW</label>
                                 </div>
                                 <div class="form-btnw-wrap">
                                    <input type="checkbox" value="PASSENGER REAR PANEL WINDOW" @if($serviceData) @if(in_array('PASSENGER REAR PANEL WINDOW',$tintservices_arr)) checked @endif @endif class="btn-check" name="tintservices[]" id="sensor-replace" autocomplete="off">
                                    <label for="sensor-replace">PASSENGER REAR PANEL WINDOW</label>
                                 </div>
                                 <div class="form-btnw-wrap">
                                    <input type="checkbox" value="REAR WINDSHIELD" @if($serviceData) @if(in_array('REAR WINDSHIELD',$tintservices_arr)) checked @endif @endif class="btn-check" name="tintservices[]" id="replace-driver" autocomplete="off" >
                                    <label for="replace-driver">REAR WINDSHIELD</label>
                                 </div>
                                 <div class="form-btnw-wrap">
                                    <input type="checkbox" value="SUNROOF" @if($serviceData) @if(in_array('SUNROOF',$tintservices_arr)) checked @endif @endif class="btn-check" name="tintservices[]" id="replace-driver-door" autocomplete="off">
                                    <label for="replace-driver-door">SUNROOF</label>
                                 </div>
                                 <div class="form-btnw-wrap">
                                    <input type="checkbox" value="FULL MOONROOF" @if($serviceData) @if(in_array('FULL MOONROOF',$tintservices_arr)) checked @endif @endif class="btn-check" name="tintservices[]" id="replace-driver-panel" autocomplete="off" >
                                    <label for="replace-driver-panel">FULL MOONROOF</label>
                                 </div>
                              </div>
                           </div>
                           <!-- car-handwash -->





                        </div>
                        <div class="col-12 col-md-7">

                           <div class="form-box">
                              <div class="form-group my-4 align-items-center">
                                 <div class="row">
                                    <div class="col-lg-4 col-12">
                                       <label class="p-0">TINT MANUFACTURER:</label>
                                    </div>
                                    <div class="col-lg-8 col-12">
                                       <input type="text" class="form-control border-0 tint_manufacture myerr" value="@if($serviceData) {{$serviceData->tint_manufacture}} @endif" style="height:35px" name="tint_manufacture">
                                    </div>
                                 </div>
                              </div>

                              <div class="form-group my-4 align-items-center">
                                 <div class="row">
                                    <div class="col-lg-4 col-12">
                                       <label class="p-0">TINT TYPE:</label>
                                    </div>
                                    <div class="col-lg-8 col-12 tint_types myerr">
                                       <div class="btn-group d-flex flex-row cmn-radio flex-wrap" role="group" style="column-gap: 10px; row-gap: 10px;">
                                          <div class="form-btnw-wrap">
                                             <input type="radio" value="HYBRID" class="btn-check" name="tint_type" id="btnradio25" autocomplete="off" @if($serviceData) @if($serviceData->tint_type == "HYBRID") checked @endif @endif>
                                             <label for="btnradio25">HYBRID</label>
                                          </div>
                                          <div class="form-btnw-wrap">
                                             <input type="radio" value="CARBON" class="btn-check" name="tint_type" id="btnradio26" autocomplete="off" @if($serviceData) @if($serviceData->tint_type == "CARBON") checked @endif @endif>
                                             <label for="btnradio26">CARBON</label>
                                          </div>
                                          <div class="form-btnw-wrap upgrade-checked">
                                             <input type="radio" value="CERAMIC" class="btn-check" name="tint_type" id="btnradio27" autocomplete="off" @if($serviceData) @if($serviceData->tint_type == "CERAMIC") checked @endif @endif>
                                             <label for="btnradio27">CERAMIC</label>
                                          </div>
                                          <div class="form-btnw-wrap upgrade-checked">
                                             <input type="radio" value="METALIZED" class="btn-check" name="tint_type" id="btnradio28" autocomplete="off" @if($serviceData) @if($serviceData->tint_type == "METALIZED") checked @endif @endif>
                                             <label for="btnradio28">METALIZED</label>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group my-4 align-items-center">
                                 <div class="row">
                                    <div class="col-lg-4 col-12">
                                       <label class="p-0">PERCENTAGE:</label>
                                    </div>
                                    <div class="col-lg-8 col-12">
                                       <input type="text" class="form-control border-0 percentage myerr" value="@if($serviceData) {{$serviceData->percentage}} @endif" style="height:35px" name="percentage">
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group my-4 align-items-center">
                                 <div class="row">
                                    <div class="col-lg-4 col-12">
                                       <label class="p-0">OEM MATCH:</label>
                                    </div>
                                    <div class="col-lg-8 col-12">
                                       <div class="btn-group btn-group d-flex flex-row myerr" id="tint_oem_matchs" role="group" style="column-gap: 10px;">
                                          <div class="form-btnw-wrap upgrade-checked">
                                             <input type="radio" value="Yes" class="btn-check" name="tint_oem_match" id="btnradio30" autocomplete="off" @if($serviceData) @if($serviceData->tint_oem_match == "Yes") checked @endif @endif>
                                             <label for="btnradio30">YES</label>
                                          </div>
                                          <div class="form-btnw-wrap upgrade-checked">
                                             <input type="radio" value="No" class="btn-check" name="tint_oem_match" id="btnradio31" autocomplete="off" @if($serviceData) @if($serviceData->tint_oem_match == "No") checked @endif @endif>
                                             <label for="btnradio31">NO</label>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                              <div class="form-group mb-3 align-items-center">
                                 <div class="row">
                                    <div class="col-lg-4 col-12">
                                       <label class="p-0">OEM MANUFACTURER:</label>
                                    </div>
                                    <div class="col-lg-8 col-12">
                                       <input type="text" class="form-control border-0 oem_manufacturer myerr" value="@if($serviceData) {{$serviceData->oem_manufacture}} @endif" style="height:35px" name="oem_manufacture">
                                    </div>
                                 </div>
                              </div>

                              <div class="form-group my-4 align-items-center">
                                 <div class="row">
                                    <div class="col-lg-4 col-12">
                                       <label class="p-0">Warranty:</label>
                                    </div>
                                    <div class="col-lg-8 col-12">
                                       <div class="btn-group btn-group d-flex flex-row tints_warranty myerr" role="group" style="column-gap: 10px;">
                                          <div class="form-btnw-wrap upgrade-checked tintWarrenty">
                                             <input type="radio" value="Yes" class="btn-check" name="tint_warranty" id="btnradio32" autocomplete="off" @if($serviceData) @if($serviceData->tint_warranty == "Yes") checked @endif @endif>
                                             <label for="btnradio32">YES</label>
                                          </div>
                                          <div class="form-btnw-wrap upgrade-checked tintWarrenty">
                                             <input type="radio" value="No" class="btn-check" name="tint_warranty" id="btnradio33" autocomplete="off" @if($serviceData) @if($serviceData->tint_warranty == "No") checked @endif @endif>
                                             <label for="btnradio33">NO</label>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group mb-3 align-items-center">
                                 <div class="row">
                                    <div class="col-lg-4 col-12">
                                       <label class="p-0">Warranty Company:</label>
                                    </div>
                                    <div class="col-lg-8 col-12">
                                       <input type="text" class="form-control border-0 waranty_company myerr tintwarentycompany" value="@if($serviceData) {{$serviceData->warranty_company}} @endif" style="height:35px" name="warranty_company">
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="row">
                                    <div class="col-lg-4 col-12">
                                       <label class="p-0">Notes:</label>
                                    </div>
                                    <div class="col-lg-8 col-12">
                                       <textarea class="form-control" name="tint_notes" rows="5">@if($serviceData) {{$serviceData->tint_notes}} @endif</textarea>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--col-->
                     </div>
                     <div class="form-box w-100">
                        <div class="form-group">
                           <div class="upload-wrap">
                              <div class="row align-items-center">
                                 <div class="col-lg-4 col-12">
                                    <button class="btn uplaod">UPLOAD <br />
                                       Photos & Docs<input type="file" name="products_uploaded[]" id="insert_products_uploaded" class="form-control products_uploaded" value="Upload" multiple="multiple"> </button>
                                 </div>
                                 <div class="col-lg-8 col-12 text-center display_image_list3">
                                    <ul>
                                       @if($serviceData && $serviceData->document)

                                       @foreach(explode(',',$serviceData->document) as $key=>$value)
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
                     <button class="car-adding__btn btn btn--accent inserttintservices cmn-btn" id="tintSave" type="button">Save</button>
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