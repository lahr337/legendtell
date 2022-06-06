@extends('layout.default')
<!-- leftcode -->
@section('content')
@include('shop-settings.leftshowmenu')
<div class="account-settings__content-wr">
   <div class="account-settings__content-form">
      <div class="grid-view-shop">
         <div class="common-wrap">
            <div class="cmn-content">
               
               <form id="saveGlassServices">
                  
                  @csrf
                  <input type="hidden" id="servicedata" name="carShopService" value="@if(isset($_GET['servicedata'])){{ $_GET['servicedata'] }} @endif" > 
               <div class="carwash_wrap glass-service-wrap">
                  <div class="row" style="row-gap:25px;">
                     @if($serviceData)
                     <?php
                        $trimmed_array = array_map('trim', explode(',',$serviceData->windshield));
                        $serviceArray= array_map('trim', explode(',',$serviceData->sensor_data));
                     ?>
                     @endif
                   <span class="newerr" style="color:red;display:none">Please select services</span>
                     <div class="col-lg-6">
                        <div class="car-handwash mt-0">
                           <div class="btn-group" role="group">
                              <div class="form-btnw-wrap">
                                 <input type="checkbox" value="WINDSHIELD REPAIR - FRONT" class="btn-check" name="windhshield[]" id="windshield-front" autocomplete="off"     @if($serviceData) @if(in_array('WINDSHIELD REPAIR - FRONT', $trimmed_array))
                              checked
                           @endif @endif >
                                 <label for="windshield-front">WINDSHIELD <br> REPAIR - FRONT</label>
                              </div>
                              <div class="form-btnw-wrap">
                                 <input type="checkbox" value="WINDSHIELD REPAIR - REAR" class="btn-check" name="windhshield[]" id="windshield-rear" autocomplete="off" @if($serviceData) @if(in_array('WINDSHIELD REPAIR - REAR', $trimmed_array))
                              checked @endif @endif>
                                 <label for="windshield-rear">WINDSHIELD <br> REPAIR - REAR</label>
                              </div>
                              <div class="form-btnw-wrap">
                                 <input type="checkbox" value="SEAL/GASKET REPAIR - FRONT" class="btn-check" name="windhshield[]" id="gasket-front" autocomplete="off"  @if($serviceData) @if(in_array('SEAL/GASKET REPAIR - FRONT', $trimmed_array))
                              checked @endif @endif >
                                 <label for="gasket-front">SEAL/GASKET <br> REPAIR - FRONT</label>
                              </div>
                              <div class="form-btnw-wrap">
                                 <input type="checkbox" value="SEAL/GASKET REPAIR - REAR" class="btn-check" name="windhshield[]" id="gasket-rear" autocomplete="off"  @if($serviceData) @if(in_array('SEAL/GASKET REPAIR - REAR', $trimmed_array))
                              checked @endif @endif >
                                 <label for="gasket-rear">SEAL/GASKET <br> REPAIR - REAR</label>
                              </div>
                              <div class="form-btnw-wrap">
                                 <input type="checkbox" value="REAR-VIEW MIRROR ALIGNMENT" class="btn-check" name="windhshield[]" id="mirror-alignment" autocomplete="off" @if($serviceData) @if(in_array('REAR-VIEW MIRROR ALIGNMENT', $trimmed_array))
                                 checked @endif @endif >
                                 <label for="mirror-alignment">REAR-VIEW MIRROR <br> ALIGNMENT</label>
                              </div>
                              <div class="form-btnw-wrap">
                                 <input type="checkbox" value="SENSOR CALIBRATION" class="btn-check" name="windhshield[]" id="sensor" autocomplete="off" @if($serviceData) @if(in_array('SENSOR CALIBRATION', $trimmed_array))
                                 checked @endif @endif >
                                 <label for="sensor">SENSOR CALIBRATION</label>
                              </div>
                              <div class="form-btnw-wrap">
                                 <input type="checkbox" value="SENSOR REPLACEMENT" class="btn-check" name="windhshield[]" id="sensor-replace" autocomplete="off" @if($serviceData) @if(in_array('SENSOR REPLACEMENT', $trimmed_array))
                                 checked @endif @endif  >
                                 <label for="sensor-replace">SENSOR REPLACEMENT</label>
                              </div>
                              <div class="form-btnw-wrap">
                                 <input type="checkbox" value="REPLACE_DRIVER FRONT DOOR WINDOW" class="btn-check" name="windhshield[]" id="replace-driver" autocomplete="off"  @if($serviceData) @if(in_array('REPLACE_DRIVER FRONT DOOR WINDOW', $trimmed_array))
                                 checked @endif @endif >
                                 <label for="replace-driver">REPLACE - DRIVER <br> FRONT DOOR WINDOW</label>
                              </div>
                              <div class="form-btnw-wrap">
                                 <input type="checkbox" value="REPLACE_DRIVER REAR DOOR WINDOW" class="btn-check" name="windhshield[]" id="replace-driver-door" autocomplete="off" @if($serviceData) @if(in_array('REPLACE_DRIVER REAR DOOR WINDOW', $trimmed_array))
                                 checked @endif @endif >
                                 <label for="replace-driver-door">REPLACE - DRIVER <br> REAR DOOR WINDOW</label>
                              </div>
                              <div class="form-btnw-wrap">
                                 <input type="checkbox" value="REPLACE_DRIVER REAR PANEL WINDOW" class="btn-check" name="windhshield[]" id="replace-driver-panel-rear" autocomplete="off" @if($serviceData) @if(in_array('REPLACE_DRIVER REAR PANEL WINDOW', explode(',',$serviceData->windshield)))
                                 checked
                              @endif @endif >
                                 <label for="replace-driver-panel-rear">REPLACE - DRIVER <br> REAR PANEL WINDOW</label>
                              </div>
                              <div class="form-btnw-wrap">
                                 <input type="checkbox" value="REPLACE_PASS FRONT DOOR WINDOW" class="btn-check" name="windhshield[]" id="replace-pass-front-new" autocomplete="off" @if($serviceData) @if(in_array('REPLACE_PASS FRONT DOOR WINDOW', explode(',',$serviceData->windshield)))
                                 checked
                              @endif @endif >
                                 <label for="replace-pass-front-new">REPLACE - PASS <br> FRONT DOOR WINDOW</label>
                              </div>
                              <div class="form-btnw-wrap">
                                 <input type="checkbox" value="REPLACE_PASS REAR DOOR WINDOW" class="btn-check" name="windhshield[]" id="replace-pass-front11" autocomplete="off" @if($serviceData) @if(in_array('REPLACE_PASS REAR DOOR WINDOW', explode(',',$serviceData->windshield)))
                                 checked
                              @endif @endif >
                                 <label for="replace-pass-front11">REPLACE - PASS <br> REAR DOOR WINDOW</label>
                              </div>
                              <div class="form-btnw-wrap">
                                 <input type="checkbox" value="REPLACE_PASS REAR PANEL WINDOW" class="btn-check" name="windhshield[]" id="replace-pass-front34" autocomplete="off" @if($serviceData) @if(in_array('REPLACE_PASS REAR PANEL WINDOW', explode(',',$serviceData->windshield)))
                                 checked
                              @endif @endif >
                                 <label for="replace-pass-front34">REPLACE - PASS <br> REAR PANEL WINDOW</label>
                              </div>
                           </div>
                        </div>
                        <div class="ac_service_content mt-4">
                           <label class="cmn-label">DRIVER BACK WINDOW MOTOR:</label>   
                           <div class="btn-group" role="group">
                              <div class="form-btnw-wrap good-checked">
                                 <input type="radio" value="Good" class="btn-check" name="driver_back_window_motor" id="btnradio12" autocomplete="off" @if($serviceData) @if($serviceData->driver_back_window_motor=='Good') checked @endif @endif>
                                 <label for="btnradio12">Good</label>
                              </div>
                              <div class="form-btnw-wrap bad-checked">
                                 <input type="radio" value="Bad" class="btn-check" name="driver_back_window_motor" id="btnradio13" @if($serviceData) @if($serviceData->driver_back_window_motor=='Bad') checked @endif @endif autocomplete="off">
                                 <label for="btnradio13">Bad</label>
                              </div>
                              <div class="form-btnw-wrap replaced-checked">
                                 <input type="radio" value="Replaced" class="btn-check" name="driver_back_window_motor" id="btnradio14" autocomplete="off" @if($serviceData) @if($serviceData->driver_back_window_motor=='Replaced') checked @endif @endif>
                                 <label for="btnradio14">Replaced</label>
                              </div>
                           </div>
                        </div>
                        <div class="ac_service_content mt-4">
                           <label class="cmn-label">PASSENGER FRONT WINDOW MOTOR:</label>  
                           <div class="btn-group" role="group">
                              <div class="form-btnw-wrap good-checked">
                                 <input type="radio" value="Good" class="btn-check" name="passenger_front_window_motor" id="btnradio15" autocomplete="off" @if($serviceData) @if($serviceData->driver_front_window_motor=='Good') checked @endif @endif>
                                 <label for="btnradio15">Good</label>
                              </div>
                              <div class="form-btnw-wrap bad-checked">
                                 <input type="radio" value="Bad" class="btn-check" name="passenger_front_window_motor" id="btnradio16"  autocomplete="off" @if($serviceData) @if($serviceData->driver_front_window_motor=='Bad') checked @endif @endif>
                                 <label for="btnradio16">Bad</label>
                              </div>
                              <div class="form-btnw-wrap replaced-checked">
                                 <input type="radio" value="Replaced" class="btn-check" name="passenger_front_window_motor" id="btnradio17" autocomplete="off" @if($serviceData) @if($serviceData->driver_front_window_motor=='Replaced') checked @endif @endif>
                                 <label for="btnradio17">Replaced</label>
                              </div>
                           </div>
                        </div>
                        <div class="ac_service_content mt-4">
                           <label class="cmn-label">PASSENGER REAR WINDOW MOTOR:</label>   
                           <div class="btn-group" role="group">
                              <div class="form-btnw-wrap good-checked">
                                 <input type="radio" value="Good" class="btn-check" name="passenger_rear_window_motor" id="btnradio18" autocomplete="off" @if($serviceData) @if($serviceData->passenger_rear_window_motor=='Good') checked @endif  @endif>
                                 <label for="btnradio18">Good</label>
                              </div>
                              <div class="form-btnw-wrap bad-checked">
                                 <input type="radio" value="Bad" class="btn-check" name="passenger_rear_window_motor" id="btnradio19" autocomplete="off" @if($serviceData) @if($serviceData->passenger_rear_window_motor=='Bad') checked @endif @endif>
                                 <label for="btnradio19">Bad</label>
                              </div>
                              <div class="form-btnw-wrap replaced-checked">
                                 <input type="radio" value="Replaced" class="btn-check" name="passenger_rear_window_motor" id="btnradio20" autocomplete="off" @if($serviceData) @if($serviceData->passenger_rear_window_motor=='Replaced') checked @endif @endif>
                                 <label for="btnradio20">Replaced</label>
                              </div>
                           </div>
                        </div>
                        <div class="ac_service_content mt-4">
                           <label class="cmn-label">BACK HATCH/DOOR WINDOW MOTOR:</label>  
                           <div class="btn-group" role="group">
                              <div class="form-btnw-wrap good-checked">
                                 <input type="radio" value="Good" class="btn-check" name="back_hatch_window_motor" id="btnradio21" autocomplete="off" @if($serviceData) @if($serviceData->back_hatch_window_motor=='Good') checked @endif  @endif>
                                 <label for="btnradio21">Good</label>
                              </div>
                              <div class="form-btnw-wrap bad-checked">
                                 <input type="radio" value="Bad" class="btn-check" name="back_hatch_window_motor" id="btnradio22" autocomplete="off" @if($serviceData) @if($serviceData->back_hatch_window_motor=='Bad') checked @endif @endif>
                                 <label for="btnradio22">Bad</label>
                              </div>
                              <div class="form-btnw-wrap replaced-checked">
                                 <input type="radio" value="Replaced" class="btn-check" name="back_hatch_window_motor" id="btnradio23" autocomplete="off" @if($serviceData) @if($serviceData->back_hatch_window_motor=='Replaced') checked @endif @endif>
                                 <label for="btnradio23">Replaced</label>
                              </div>
                              <div class="form-btnw-wrap upgrade-checked">
                                 <input type="radio" value="NAH" class="btn-check" name="back_hatch_window_motor" id="btnradio24" autocomplete="off" @if($serviceData) @if($serviceData->back_hatch_window_motor=='NAH') checked @endif @endif>
                                 <label for="btnradio24">N/A</label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="btn-group" role="group" style="display: flex;
                           column-gap: 15px;">
                           <div class="form-btnw-wrap upgrade-checked">
                              <input type="radio" value="Front" class="btn-check" name="windshield_replaced" id="btnradio25" autocomplete="off" @if($serviceData) @if($serviceData->windshield_replaced=='Front') checked @endif @endif>
                              <label for="btnradio25">WINDSHIELD REPLACED - FRONT</label>
                           </div>
                           <div class="form-btnw-wrap upgrade-checked">
                              <input type="radio" value="Rear" class="btn-check" name="windshield_replaced" id="btnradio26" autocomplete="off" @if($serviceData) @if($serviceData->windshield_replaced=='Rear') checked @endif @endif>
                              <label for="btnradio26">WINDSHIELD REPLACED - REAR</label>
                           </div>
                        </div>
                        <div class="form-box">
                           <div class="form-group my-4 align-items-center">
                              <div class="row">
                                 <div class="col-lg-3 col-12">
                                    <label class="p-0">Brand:</label>
                                 </div>
                                 <div class="col-lg-9 col-12">
                                    <input type="text" class="form-control border-0 mynewactive" style="height:35px" name="brand" id="brand" value="@if($serviceData) {{$serviceData->brand}} @endif">
                                 </div>
                              </div>
                           </div>
                           <div class="btn-group btn-group d-flex flex-column my-4" role="group" style="row-gap: 10px;">
                              <div class="form-btnw-wrap upgrade-checked">
                                 <input type="checkbox" value="SEAL/GASKET REPAIR" class="btn-check" name="sensor_data" id="btnradio27" autocomplete="off" @if($serviceData) @if(in_array('SEAL/GASKET REPAIR', $serviceArray))
                                 checked
                              @endif @endif >
                                 <label for="btnradio27">SEAL/GASKET REPAIR</label>
                              </div>
                              <div class="form-btnw-wrap upgrade-checked">
                                 <input type="checkbox" value="SENSOR REPLACEMENT" class="btn-check" name="sensor_data" id="btnradio28" autocomplete="off" @if($serviceData) @if(in_array('SENSOR REPLACEMENT', $serviceArray))
                                 checked
                              @endif @endif>
                                 <label for="btnradio28">SENSOR REPLACEMENT</label>
                              </div>
                              <div class="form-btnw-wrap upgrade-checked">
                                 <input type="checkbox" value="SENSOR CALIBRATION" class="btn-check" name="sensor_data" id="btnradio29" autocomplete="off" @if($serviceData) @if(in_array('SENSOR CALIBRATION', $serviceArray))
                                 checked
                              @endif @endif>
                                 <label for="btnradio29">SENSOR CALIBRATION</label>
                              </div>
                           </div>
                           <div class="form-group my-4 align-items-center">
                              <div class="row">
                                 <div class="col-lg-3 col-12">
                                    <label class="p-0">Warranty:</label>
                                 </div>
                                 <div class="col-lg-9 col-12">
                                    <div class="btn-group btn-group d-flex flex-row" role="group" style="column-gap: 10px;">
                                       <div class="form-btnw-wrap upgrade-checked">
                                          <input type="radio" value="Yes" class="btn-check glassWarrenty" name="warranty" id="btnradio30" autocomplete="off" @if($serviceData) @if($serviceData->warranty=='Yes') checked @endif @endif >
                                          <label for="btnradio30">YES</label>
                                       </div>
                                       <div class="form-btnw-wrap upgrade-checked">
                                          <input type="radio" value="No" class="btn-check glassWarrenty" name="warranty" id="btnradio31" autocomplete="off" @if($serviceData) @if($serviceData->warranty=='No') checked @endif @endif>
                                          <label for="btnradio31">NO</label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group mb-3 align-items-center">
                              <div class="row">
                                 <div class="col-lg-3 col-12">
                                    <label class="p-0">Warranty Company:</label>
                                 </div>
                                 <div class="col-lg-9 col-12">
                                    <input type="text" name="warranty_company" id="warranty_company" class="form-control border-0 glasswarentycompany " value="@if($serviceData) {{$serviceData->warranty_company}} @endif" readonly style="height:35px">
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="row">
                                 <div class="col-lg-3 col-12">
                                    <label class="p-0">Notes:</label>
                                 </div>
                                 <div class="col-lg-9 col-12">
                                    <textarea class="form-control" name="glass_notes" rows="5">@if($serviceData) {{$serviceData->glass_notes}} @endif</textarea>
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
                  <button class="car-adding__btn btn btn--accent insertglassServices cmn-btn" type="button">Save</button>
             
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