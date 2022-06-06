@extends('layout.default')
<!-- leftcode -->
@section('content')
@include('shop-settings.leftshowmenu')
<div class="account-settings__content-wr">
   <div class="account-settings__content-form">
      <div class="grid-view-shop">
         <div class="common-wrap">
            <div class="cmn-content">
               <div class="service-type_issue-repair-form">
                  <form id="saveACForm" name="saveIssueForm" action="{{route('shop-settings.save-ac-service')}}" method="PUT" accept-charset="multipart/form-data">
                     @csrf
                     @method('put')
                     <input type="hidden" id="servicedata" name="carShopService" value="@if(isset($_GET['servicedata'])){{ $_GET['servicedata'] }} @endif" > 
                     <div class="row">
                        <div class="col-12 col-md-4">
                           <div class="">
                              <div class="ac_service_checklist_pdf">
                                 <div class="chk_pdf_wrap"><img src="/assets/images/pdf.png" /></div>
                                 <button class="cmn-btn cmn-btn-dwnld" type="button">Download Checklist</button>
                              </div>
                              <div class="ac_pressure cmn-checked">
                                 <h4>Static Pressure</h4>
                                 <div class="btn-group d-flex flex-row cmn-checked" role="group" style="column-gap: 10px;">
                                    <div class="pressure_wrap form-btnw-wrap">
                                       <div class="cmn-slide">
                                          <input type="checkbox" class="btn-check static_pressure_low_check " value="8 MIL" name="btnradio1" id="btnradio1" autocomplete="off" @if($checkACData) @if($checkACData->static_pressure_low) checked @endif @endif>
                                          <label for="btnradio1">Low Side</label>
                                       </div>
                                       <input type="text" id="static_pressure_low" name="static_pressure_low" class="form-control static_pressure_low" value="{{$checkACData->static_pressure_low ?? ''}}" @if($checkACData) @if($checkACData->static_pressure_low)   @endif @else readonly @endif>
                                    </div>
                                 </div>
                                 <div class="btn-group d-flex flex-row cmn-checked" role="group" style="column-gap: 10px;">
                                    <div class="pressure_wrap form-btnw-wrap">
                                       <div class="cmn-slide">
                                          <input type="checkbox" class="btn-check static_pressure_high_check" value="10 MIL" name="btnradio1" id="btnradio2" autocomplete="off" @if($checkACData) @if($checkACData->static_pressure_high) checked @endif @endif>
                                          <label for="btnradio2">High Side</label>
                                       </div>
                                       <input type="text" id="static_pressure_high" name="static_pressure_high" class="form-control static_pressure_high" value="{{$checkACData->static_pressure_high ?? ''}}" @if($checkACData) @if($checkACData->static_pressure_high)  @endif @else readonly @endif>
                                    </div>
                                 </div>
                                 <!-- <div class="pressure_wrap form-group">
                                    <label class="active" for="rdryerInput">Low Side</label>
                                    <input type="checkbox" id="1" name="static_pressure_low" class="form-control" value="{{$checkACData->static_pressure_low ?? ''}}">
                                    </div>
                                    <div class="pressure_wrap form-group">
                                    <label for="rdryerInput2">High Side</label>
                                    <input type="checkbox"  id="2" name="static_pressure_high" class="form-control"  value="{{$checkACData->static_pressure_high ?? ''}}">
                                    </div> -->
                              </div>
                              <div class="ac_pressure">
                                 <h4>Dynamic Pressure</h4>
                                 <div class="btn-group d-flex flex-row cmn-checked" role="group" style="column-gap: 10px;">
                                    <div class="pressure_wrap form-btnw-wrap">
                                       <div class="cmn-slide">
                                          <input type="checkbox" class="btn-check dynamic_pressure_low_check" value="8 MIL" name="btnradio2" id="btnradio3" autocomplete="off" @if($checkACData) @if($checkACData->dynamic_pressure_low) checked @endif @endif>
                                          <label for="btnradio3">Low Side</label>
                                       </div>
                                       <input type="text" id="dynamic_pressure_low" name="dynamic_pressure_low" class="form-control dynamic_pressure_low" value="{{$checkACData->dynamic_pressure_low ?? ''}}" @if($checkACData) @if($checkACData->dynamic_pressure_low) style="display:block"  @endif @else readonly @endif>
                                    </div>
                                 </div>
                                 <div class="btn-group d-flex flex-row cmn-checked" role="group" style="column-gap: 10px;">
                                    <div class="pressure_wrap form-btnw-wrap">
                                       <div class="cmn-slide">
                                          <input type="checkbox" class="btn-check dynamic_pressure_high_check" value="10 MIL" name="btnradio2" id="btnradio4" autocomplete="off" @if($checkACData) @if($checkACData->dynamic_pressure_high) checked @endif @endif>
                                          <label for="btnradio4">High Side</label>
                                       </div>
                                       <input type="text" id="dynamic_pressure_high" name="dynamic_pressure_high" class="form-control dynamic_pressure_high" value="{{$checkACData->dynamic_pressure_high ?? ''}}" @if($checkACData) @if($checkACData->dynamic_pressure_high)   @endif @else readonly @endif>
                                    </div>
                                 </div>
                                 <!-- <div class="pressure_wrap form-group">
                                    <label>Low Side</label>
                                    <input type="text"  name="dynamic_pressure_low" class="form-control"  value="{{$checkACData->dynamic_pressure_low ?? ''}}">
                                 </div>
                                 <div class="pressure_wrap form-group">
                                    <label class="active">High Side</label>
                                    <input type="text" name="dynamic_pressure_high" class="form-control"  value="{{$checkACData->dynamic_pressure_high ?? ''}}">
                                 </div> -->
                              </div>
                              <div class="form-group">
                                 <label class="dark-grey">Notes:</label>
                                 <textarea class="form-control" name="ac_notes" rows="5">{{$checkACData->ac_notes ?? ''}}</textarea>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-md-8">
                           <div class="">
                              <div class="ac_service_content">
                                 <h3 class="ac_service_title">
                                    Condensor
                                 </h3>
                                 <div class="btn-group" role="group">
                                    <div class="form-btnw-wrap good-checked">
                                       <input type="radio" class="btn-check" name="condensorInput" id="condensorInput1" value="good" autocomplete="off" 
                                       @if ($checkACData &&$checkACData->condensor=='good')
                                       checked @endif>
                                       <label for="condensorInput1">Good</label> 
                                    </div>
                                    <div class="form-btnw-wrap bad-checked">
                                       <input type="radio" class="btn-check" name="condensorInput" id="condensorInput2" value="bad" autocomplete="off"  @if ($checkACData &&$checkACData->condensor=='bad')
                                       checked @endif>
                                       <label for="condensorInput2">Bad</label>
                                    </div>
                                    <div class="form-btnw-wrap replaced-checked">
                                       <input type="radio" class="btn-check" name="condensorInput" id="condensorInput3" value="replaced" autocomplete="off" @if ($checkACData &&$checkACData->condensor=='replaced')
                                       checked @endif>
                                       <label for="condensorInput3">Replaced</label>
                                    </div>
                                    <div class="form-btnw-wrap upgrade-checked">
                                       <input type="radio" class="btn-check" name="condensorInput" id="condensorInput4" value="Upgraded" autocomplete="off"  @if ($checkACData &&$checkACData->condensor=='Upgraded')
                                       checked @endif>
                                       <label for="condensorInput4">Upgraded</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="ac_service_content">
                                 <h3 class="ac_service_title">
                                    Compressor 
                                 </h3>
                                 <div class="btn-group" role="group">
                                    <div class="form-btnw-wrap good-checked">
                                       <input type="radio" class="btn-check" name="compressorInput" id="compressorInput5" value="good" autocomplete="off" @if($checkACData && $checkACData->compressor =='good') checked @endif>
                                       <label for="compressorInput5">Good</label>
                                    </div>
                                    <div class="form-btnw-wrap bad-checked">
                                       <input type="radio" class="btn-check" name="compressorInput" id="compressorInput6" value="bad" autocomplete="off" @if($checkACData && $checkACData->compressor =='bad') checked  @endif>
                                       <label for="compressorInput6">Bad</label>
                                    </div>
                                    <div class="form-btnw-wrap replaced-checked">
                                       <input type="radio" class="btn-check" name="compressorInput" id="compressorInput7" value="replaced" autocomplete="off"  @if($checkACData && $checkACData->compressor =='replaced') checked  @endif>
                                       <label for="compressorInput7">Replaced</label>
                                    </div>
                                    <div class="form-btnw-wrap upgrade-checked">
                                       <input type="radio" class="btn-check" name="compressorInput" id="compressorInput8" value="Upgraded" autocomplete="off"  @if($checkACData && $checkACData->compressor =='Upgraded') checked  @endif>
                                       <label for="compressorInput8">Upgraded</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="ac_service_content">
                                 <h3 class="ac_service_title">
                                    Evaporator Core {{$checkACData && $checkACData->evaporator_core}}
                                 </h3>
                                 <div class="btn-group" role="group">
                                    <div class="form-btnw-wrap good-checked">
                                       <input type="radio" class="btn-check" name="evaportorInput" id="evaportorInput9" value="good" autocomplete="off"  @if($checkACData && $checkACData->evaporator_core =='good') checked  @endif>
                                       <label for="evaportorInput9">Good</label>
                                    </div>
                                    <div class="form-btnw-wrap bad-checked">
                                       <input type="radio" class="btn-check" name="evaportorInput" value="bad" id="evaportorInput10" autocomplete="off"  @if($checkACData && $checkACData->evaporator_core =='bad') checked   @endif>
                                       <label for="evaportorInput10">Bad</label>
                                    </div>
                                    <div class="form-btnw-wrap replaced-checked">
                                       <input type="radio" value="replaced" class="btn-check" name="evaportorInput" id="evaportorInput11" autocomplete="off"  @if($checkACData && $checkACData->evaporator_core =='replaced') checked  @endif>
                                       <label for="evaportorInput11">Replaced</label>
                                    </div>
                                    <div class="form-btnw-wrap upgrade-checked">
                                       <input type="radio" class="btn-check" name="evaportorInput" value="Upgraded" id="evaportorInput12" autocomplete="off"  @if($checkACData && $checkACData->evaporator_core =='Upgraded') checked  @endif>
                                       <label for="evaportorInput12">Upgraded</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="ac_service_content">
                                 <h3 class="ac_service_title">
                                    Receiver Dryer
                                 </h3>
                                 <div class="btn-group" role="group">
                                    <div class="form-btnw-wrap good-checked">
                                       <input type="radio" class="btn-check" name="rdryerInput" value="good"  id="rdryerInput3" autocomplete="off" @if($checkACData && $checkACData->receiver_dryer == 'good') checked  @endif>
                                       <label for="rdryerInput3">Good</label>
                                    </div>
                                    <div class="form-btnw-wrap bad-checked">
                                       <input type="radio" class="btn-check" name="rdryerInput" id="rdryerInput4" autocomplete="off" value="bad" @if($checkACData && $checkACData->receiver_dryer == 'bad') checked  @endif>
                                       <label for="rdryerInput4">Bad</label>
                                    </div>
                                    <div class="form-btnw-wrap replaced-checked">
                                       <input type="radio" class="btn-check" name="rdryerInput" id="rdryerInput5" autocomplete="off" value="replaced" @if($checkACData && $checkACData->receiver_dryer == 'replaced') checked  @endif>
                                       <label for="rdryerInput5">Replaced</label>
                                    </div>
                                    <div class="form-btnw-wrap upgrade-checked">
                                       <input type="radio" class="btn-check" name="rdryerInput" id="rdryerInput6" autocomplete="off" value="Upgraded" @if($checkACData && $checkACData->receiver_dryer == 'Upgraded') checked  @endif>
                                       <label for="rdryerInput6">Upgraded</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="ac_service_content">
                                 <h3 class="ac_service_title">
                                    A/C Lines
                                 </h3>
                                 <div class="btn-group" role="group">
                                    <div class="form-btnw-wrap good-checked">
                                       <input type="radio" class="btn-check" name="aclineInput" id="aclines17" autocomplete="off" value="good" @if($checkACData && $checkACData->ac_line =='good') checked  @endif>
                                       <label for="aclines17">Good</label>
                                    </div>
                                    <div class="form-btnw-wrap bad-checked">
                                       <input type="radio" class="btn-check" name="aclineInput" id="aclines18" autocomplete="off" value="bad" @if($checkACData && $checkACData->ac_line =='bad') checked  @endif>
                                       <label for="aclines18">Bad</label>
                                    </div>
                                    <div class="form-btnw-wrap replaced-checked">
                                       <input type="radio" class="btn-check" name="aclineInput" id="aclines19" autocomplete="off" value="replaced" @if($checkACData && $checkACData->ac_line =='replaced') checked  @endif>
                                       <label for="aclines19">Replaced</label>
                                    </div>
                                    <div class="form-btnw-wrap upgrade-checked">
                                       <input type="radio" class="btn-check" name="aclineInput" id="aclines20" autocomplete="off" value="Upgraded" @if($checkACData && $checkACData->ac_line =='Upgraded') checked  @endif>
                                       <label for="aclines20">Upgraded</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="ac_service_content">
                                 <h3 class="ac_service_title">
                                    Pressure Switches
                                 </h3>
                                 <div class="btn-group" role="group">
                                    <div class="form-btnw-wrap good-checked">
                                       <input type="radio" class="btn-check" name="pressureswitch" id="pressureSwitch21" autocomplete="off" value="good"  @if($checkACData && $checkACData->pressure_switches =='good') checked  @endif>
                                       <label for="pressureSwitch21">Good</label>
                                    </div>
                                    <div class="form-btnw-wrap bad-checked">
                                       <input type="radio" class="btn-check" name="pressureswitch" id="pressureSwitch22" autocomplete="off" value="bad"  @if($checkACData && $checkACData->pressure_switches =='bad') checked  @endif>
                                       <label for="pressureSwitch22">Bad</label>
                                    </div>
                                    <div class="form-btnw-wrap replaced-checked">
                                       <input type="radio" class="btn-check" name="pressureswitch" id="pressureSwitch23" autocomplete="off" value="replaced"  @if($checkACData && $checkACData->pressure_switches =='replaced') checked  @endif>
                                       <label for="pressureSwitch23">Replaced</label>
                                    </div>
                                    <div class="form-btnw-wrap upgrade-checked">
                                       <input type="radio" class="btn-check" name="pressureswitch" id="pressureSwitch24" autocomplete="off" value="Upgraded"  @if($checkACData && $checkACData->pressure_switches =='Upgraded') checked  @endif>
                                       <label for="pressureSwitch24">Upgraded</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="ac_service_content">
                                 <h3 class="ac_service_title">
                                    Orifice Tube
                                 </h3>
                                 <div class="btn-group" role="group">
                                    <div class="form-btnw-wrap good-checked">
                                       <input type="radio" class="btn-check" name="officeTube6" id="officeTube25" autocomplete="off" value="good" @if($checkACData && $checkACData->office_tube =='good') checked @endif>
                                       <label for="officeTube25">Good</label>
                                    </div>
                                    <div class="form-btnw-wrap bad-checked">
                                       <input type="radio" class="btn-check" name="officeTube6" id="officeTube26" autocomplete="off" value="bad" @if($checkACData && $checkACData->office_tube =='bad') checked  @endif>
                                       <label for="officeTube26">Bad</label>
                                    </div>
                                    <div class="form-btnw-wrap replaced-checked">
                                       <input type="radio" class="btn-check" name="officeTube6" id="officeTube27" autocomplete="off" value="replaced" @if($checkACData && $checkACData->office_tube =='replaced') checked  @endif>
                                       <label for="officeTube27">Replaced</label>
                                    </div>
                                    <div class="form-btnw-wrap upgrade-checked">
                                       <input type="radio" class="btn-check" name="officeTube6" id="officeTube28" autocomplete="off" value="Upgraded" @if($checkACData && $checkACData->office_tube =='Upgraded') checked  @endif>
                                       <label for="officeTube28">Upgraded</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="ac_service_content">
                                 <h3 class="ac_service_title">
                                    Expansion Valve
                                 </h3>
                                 <div class="btn-group" role="group">
                                    <div class="form-btnw-wrap good-checked">
                                       <input type="radio" class="btn-check" name="expansionIinput" id="expansionIinput29" autocomplete="off" value="good" @if($checkACData && $checkACData->expansion_valve=='good') checked  @endif>
                                       <label for="expansionIinput29">Good</label>
                                    </div>
                                    <div class="form-btnw-wrap bad-checked">
                                       <input type="radio" class="btn-check" name="expansionIinput" id="expansionIinput30" autocomplete="off" value="bad" @if($checkACData && $checkACData->expansion_valve=='bad') checked  @endif>
                                       <label for="expansionIinput30">Bad</label>
                                    </div>
                                    <div class="form-btnw-wrap replaced-checked">
                                       <input type="radio" class="btn-check" name="expansionIinput" id="expansionIinput31" autocomplete="off" value="replaced" @if($checkACData && $checkACData->expansion_valve=='replaced') checked  @endif>
                                       <label for="expansionIinput31">Replaced</label>
                                    </div>
                                    <div class="form-btnw-wrap upgrade-checked">
                                       <input type="radio" class="btn-check" name="expansionIinput" id="expansionIinput32" autocomplete="off" value="Upgraded" @if($checkACData && $checkACData->expansion_valve=='Upgraded') checked  @endif>
                                       <label for="expansionIinput32">Upgraded</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="ac_service_content">
                                 <h3 class="ac_service_title">
                                    Seals
                                 </h3>
                                 <div class="btn-group" role="group">
                                    <div class="form-btnw-wrap good-checked">
                                       <input type="radio" class="btn-check" name="sealInput" id="sealInput33" autocomplete="off"  value="good" @if($checkACData && $checkACData->seals =='good') checked  @endif>
                                       <label for="sealInput33">Good</label>
                                    </div>
                                    <div class="form-btnw-wrap bad-checked">
                                       <input type="radio" class="btn-check" name="sealInput" id="sealInput34" autocomplete="off" value="bad" @if($checkACData && $checkACData->seals =='bad') checked  @endif>
                                       <label for="sealInput34">Bad</label>
                                    </div>
                                    <div class="form-btnw-wrap replaced-checked">
                                       <input type="radio" class="btn-check" name="sealInput" id="sealInput35" autocomplete="off" value="replaced" @if($checkACData && $checkACData->seals =='replaced') checked  @endif>
                                       <label for="sealInput35">Replaced</label>
                                    </div>
                                    <div class="form-btnw-wrap upgrade-checked">
                                       <input type="radio" class="btn-check" name="sealInput" id="sealInput36" autocomplete="off" value="Upgraded" @if($checkACData && $checkACData->seals =='Upgraded') checked  @endif>
                                       <label for="sealInput36">Upgraded</label>
                                    </div>
                                 </div>
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
                                    <div class="col-lg-8 col-12 text-center display_image_list"  id="display_image_list">
                                       <ul>
                                          @if($checkACData && $checkACData->documents)
                                          @foreach(explode(',',$checkACData->documents) as $key=>$value)
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
                        <button class="car-adding__btn btn btn--accent insertAcdata cmn-btn" type="button">Save</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         @include('shop-settings.partials.rightvinnumber')
      </div>
   </div>
</div>
</main>
@endsection