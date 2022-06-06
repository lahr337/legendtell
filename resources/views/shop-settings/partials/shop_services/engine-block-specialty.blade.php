@extends('layout.default')
<!-- leftcode -->
@section('content')
@include('shop-settings.leftshowmenu')
<div class="account-settings__content-wr">
   <div class="account-settings__content-form">
      <div class="grid-view-shop">
         <div class="common-wrap">
            <div class="cmn-content">
               <div class="brake-service-wrap">
                  <form id="saveEngineBlock">
                     @csrf
                  <input type="hidden" id="servicedata" name="carShopService" value="@if(isset($_GET['servicedata'])){{ $_GET['servicedata'] }} @endif" > 
                  <div class="row">
                     <div class="col-12 col-md-6">
                        <div class="engine-block-pdf">
                           <div class="row">
                              <div class="col-12 col-md-6">
                                 <div class="ac_service_checklist_pdf">
                                    <div class="chk_pdf_wrap"><img src="/assets/images/pdf.png"></div>
                                    <button class="cmn-btn cmn-btn-dwnld" type="button">Download Checklist</button>
                                 </div>
                              </div>
                              <div class="col-12 col-md-6">
                                 <div class="form-group">
                                    <label class="textarea-custom">Issue/Diagnosis:<span class="astrick">*</span></label>
                                    <textarea class="form-control" id="issue_diagnosis" name="issue_diagnosis" rows="7">@if($serviceData) {{$serviceData->issue_diagnosis}} @endif</textarea>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="">
                           <div class="ac_service_content">
                              <h3 class="ac_service_title">
                                 BLOCK 
                              </h3>
                              <div class="btn-group" role="group">
                                 <div class="form-btnw-wrap good-checked">
                                    <input type="radio" class="btn-check" value="Good" name="engine_block" id="engine_block" autocomplete="off" @if($serviceData) @if($serviceData->engine_block=='Good') checked @endif @endif>
                                    <label for="engine_block">Good</label>
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" value="Leaks" name="engine_block" id="brkradio2" autocomplete="off" @if($serviceData) @if($serviceData->engine_block=='Leaks') checked @endif @endif>
                                    <label for="brkradio2">Leaks</label>
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" value="Repaired" name="engine_block" id="brkradio3" autocomplete="off" @if($serviceData) @if($serviceData->engine_block=='Repaired') checked @endif @endif>
                                    <label for="brkradio3">Repaired</label>
                                 </div>
                                 <div class="form-btnw-wrap replaced-checked">
                                    <input type="radio" class="btn-check" value="Replaced" name="engine_block" id="brkradio4" autocomplete="off" @if($serviceData) @if($serviceData->engine_block=='Replaced') checked @endif @endif>
                                    <label for="brkradio4">Replaced</label>
                                 </div>
                              </div>
                           </div>
                           <div class="ac_service_content">
                              <h3 class="ac_service_title">
                                 PISTONS
                              </h3>
                              <div class="btn-group" role="group">
                                 <div class="form-btnw-wrap good-checked">
                                    <input type="radio" class="btn-check" value="Good" name="engine_pistons" id="brkradio5" autocomplete="off" @if($serviceData) @if($serviceData->engine_pistons=='Good') checked @endif @endif>
                                    <label for="brkradio5">Good</label>
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" value="Leaks" name="engine_pistons" id="brkradio6" autocomplete="off" @if($serviceData) @if($serviceData->engine_pistons=='Leaks') checked @endif  @endif>
                                    <label for="brkradio6">Leaks</label>
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" value="Repaired" name="engine_pistons" id="brkradio7" autocomplete="off" @if($serviceData) @if($serviceData->engine_pistons=='Repaired') checked @endif  @endif>
                                    <label for="brkradio7">Repaired</label>
                                 </div>
                                 <div class="form-btnw-wrap replaced-checked">
                                    <input type="radio" class="btn-check" value="Replaced" name="engine_pistons" id="brkradio8" autocomplete="off" @if($serviceData) @if($serviceData->engine_pistons=='Replaced') checked @endif  @endif>
                                    <label for="brkradio8">Replaced</label>
                                 </div>
                              </div>
                           </div>
                           <div class="ac_service_content">
                              <h3 class="ac_service_title">
                                 RODS
                              </h3>
                              <div class="btn-group" role="group">
                                 <div class="form-btnw-wrap good-checked">
                                    <input type="radio" class="btn-check" value="Good" name="engine_rods" id="brkradio9" autocomplete="off" @if($serviceData) @if($serviceData->engine_rods=='Good') checked @endif @endif>
                                    <label for="brkradio9">Good</label>
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" value="Leaks" name="engine_rods" id="brkradio10" autocomplete="off" @if($serviceData) @if($serviceData->engine_rods=='Leaks') checked @endif  @endif>
                                    <label for="brkradio10">Leaks</label>
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" value="Repaired" name="engine_rods" id="brkradio11" autocomplete="off" @if($serviceData) @if($serviceData->engine_rods=='Repaired') checked @endif  @endif>
                                    <label for="brkradio11">Repaired</label>
                                 </div>
                                 <div class="form-btnw-wrap replaced-checked">
                                    <input type="radio" class="btn-check" value="Replaced" name="engine_rods" id="brkradio12" autocomplete="off" @if($serviceData) @if($serviceData->engine_rods=='Replaced') checked @endif  @endif>
                                    <label for="brkradio12">Replaced</label>
                                 </div>
                              </div>
                           </div>
                           <div class="ac_service_content">
                              <h3 class="ac_service_title">
                                 CRANKSHAFT
                              </h3>
                              <div class="btn-group" role="group">
                                 <div class="form-btnw-wrap good-checked">
                                    <input type="radio" class="btn-check" value="Good" name="engine_crankshaft" id="brkradio13" autocomplete="off" @if($serviceData) @if($serviceData->engine_crankshaft=='Good') checked @endif @endif>
                                    <label for="brkradio13">Good</label>
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" value="Leaks" name="engine_crankshaft" id="brkradio14" autocomplete="off" @if($serviceData) @if($serviceData->engine_crankshaft=='Leaks') checked @endif @endif>
                                    <label for="brkradio14">Leaks</label>
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" value="Repaired" name="engine_crankshaft" id="brkradio15" autocomplete="off"  @if($serviceData) @if($serviceData->engine_crankshaft=='Repaired') checked @endif @endif>
                                    <label for="brkradio15">Repaired</label>
                                 </div>
                                 <div class="form-btnw-wrap replaced-checked">
                                    <input type="radio" class="btn-check" value="Replaced" name="engine_crankshaft" id="brkradio16" autocomplete="off"  @if($serviceData) @if($serviceData->engine_crankshaft=='Replaced') checked @endif @endif>
                                    <label for="brkradio16">Replaced</label>
                                 </div>
                              </div>
                           </div>
                           <div class="ac_service_content">
                              <h3 class="ac_service_title">
                                 MAIN BEARINGS
                              </h3>
                              <div class="btn-group" role="group">
                                 <div class="form-btnw-wrap good-checked">
                                    <input type="radio" class="btn-check" value="Good" name="engine_main_bearings" id="brkradio17" autocomplete="off" @if($serviceData) @if($serviceData->engine_main_bearings=='Good') checked @endif @endif>
                                    <label for="brkradio17">Good</label>
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" value="Leaks" name="engine_main_bearings" id="brkradio18" autocomplete="off" @if($serviceData) @if($serviceData->engine_main_bearings=='Leaks') checked @endif  @endif>
                                    <label for="brkradio18">Leaks</label>
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" value="Repaired" name="engine_main_bearings" id="brkradio19" autocomplete="off" @if($serviceData) @if($serviceData->engine_main_bearings=='Repaired') checked @endif  @endif>
                                    <label for="brkradio19">Repaired</label>
                                 </div>
                                 <div class="form-btnw-wrap replaced-checked">
                                    <input type="radio" class="btn-check" value="Replaced" name="engine_main_bearings" id="brkradio20" autocomplete="off" @if($serviceData) @if($serviceData->engine_main_bearings=='Replaced') checked @endif  @endif>
                                    <label for="brkradio20">Replaced</label>
                                 </div>
                              </div>
                           </div>
                           <div class="ac_service_content">
                              <h3 class="ac_service_title">
                                 ROD BEARINGS
                              </h3>
                              <div class="btn-group" role="group">
                                 <div class="form-btnw-wrap good-checked">
                                    <input type="radio" class="btn-check" value="Good" name="engine_rod_bearing" id="brkradio21" autocomplete="off" @if($serviceData) @if($serviceData->engine_rod_bearing=='Good') checked @endif  @endif>
                                    <label for="brkradio21">Good</label>
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" value="Leaks" name="engine_rod_bearing" id="brkradio22" autocomplete="off" @if($serviceData) @if($serviceData->engine_rod_bearing=='Leaks') checked @endif   @endif>
                                    <label for="brkradio22">Leaks</label>
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" value="Repaired" name="engine_rod_bearing" id="brkradio23" autocomplete="off" @if($serviceData) @if($serviceData->engine_rod_bearing=='Repaired') checked @endif   @endif>
                                    <label for="brkradio23">Repaired</label>
                                 </div>
                                 <div class="form-btnw-wrap replaced-checked">
                                    <input type="radio" class="btn-check" value="Replaced" name="engine_rod_bearing" id="brkradio24" autocomplete="off" @if($serviceData) @if($serviceData->engine_rod_bearing=='Replaced') checked @endif   @endif>
                                    <label for="brkradio24">Replaced</label>
                                 </div>
                              </div>
                           </div>
                           <div class="ac_service_content">
                              <h3 class="ac_service_title">
                                 CAM BEARINGS
                              </h3>
                              <div class="btn-group" role="group">
                                 <div class="form-btnw-wrap good-checked">
                                    <input type="radio" class="btn-check" value="Good" name="engine_cam_bearing" id="brkradio25" autocomplete="off" @if($serviceData) @if($serviceData->engine_cam_bearing=='Replaced') checked @endif   @endif>
                                    <label for="brkradio25">Good</label>
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" value="Leaks" name="engine_cam_bearing" id="brkradio26" autocomplete="off" @if($serviceData) @if($serviceData->engine_cam_bearing=='Leaks') checked @endif  @endif>
                                    <label for="brkradio26">Leaks</label>
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" value="Repaired" name="engine_cam_bearing" id="brkradio27" autocomplete="off" @if($serviceData) @if($serviceData->engine_cam_bearing=='Repaired') checked @endif  @endif>
                                    <label for="brkradio27">Repaired</label>
                                 </div>
                                 <div class="form-btnw-wrap replaced-checked">
                                    <input type="radio" class="btn-check" value="Replaced" name="engine_cam_bearing" id="brkradio28" autocomplete="off" @if($serviceData) @if($serviceData->engine_cam_bearing=='Replaced') checked @endif  @endif>
                                    <label for="brkradio28">Replaced</label>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-6">
                        <div class="brake-col">
                           <div class="ac_service_content">
                              <h3 class="ac_service_title">
                                 PISTON RINGS
                              </h3>
                              <div class="btn-group" role="group">
                                 <div class="form-btnw-wrap good-checked">
                                    <input type="radio" class="btn-check" value="Good" name="engine_piston_rings" id="brkradio33" autocomplete="off" @if($serviceData) @if($serviceData->engine_piston_rings=='Good') checked @endif  @endif>
                                    <label for="brkradio33">Good</label>
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" value="Leaks" name="engine_piston_rings" id="brkradio34" autocomplete="off" @if($serviceData) @if($serviceData->engine_piston_rings=='Leaks') checked @endif  @endif>
                                    <label for="brkradio34">Leaks</label>
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" value="Repaired" name="engine_piston_rings" id="brkradio35" autocomplete="off" @if($serviceData) @if($serviceData->engine_piston_rings=='Repaired') checked @endif  @endif>
                                    <label for="brkradio35">Repaired</label>
                                 </div>
                                 <div class="form-btnw-wrap replaced-checked">
                                    <input type="radio" class="btn-check" value="Replaced" name="engine_piston_rings" id="brkradio36" autocomplete="off"  @if($serviceData) @if($serviceData->engine_piston_rings=='Replaced') checked @endif  @endif>
                                    <label for="brkradio36">Replaced</label>
                                 </div>
                              </div>
                           </div>
                           <div class="ac_service_content">
                              <h3 class="ac_service_title">
                                 HEADS
                              </h3>
                              <div class="btn-group" role="group">
                                 <div class="form-btnw-wrap good-checked">
                                    <input type="radio" class="btn-check" value="Good" name="engine_heads" id="brkradio37" autocomplete="off"  @if($serviceData) @if($serviceData->engine_heads=='Good') checked @endif  @endif>
                                    <label for="brkradio37">Good</label>
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" value="Leaks" name="engine_heads" id="brkradio38" autocomplete="off"  @if($serviceData) @if($serviceData->engine_heads=='Leaks') checked @endif  @endif>
                                    <label for="brkradio38">Leaks</label>
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" value="Repaired" name="engine_heads" id="brkradio39" autocomplete="off" @if($serviceData) @if($serviceData->engine_heads=='Repaired') checked @endif  @endif>
                                    <label for="brkradio39">Repaired</label>
                                 </div>
                                 <div class="form-btnw-wrap replaced-checked">
                                    <input type="radio" class="btn-check" value="Replaced" name="engine_heads" id="brkradio40" autocomplete="off" @if($serviceData) @if($serviceData->engine_heads=='Replaced') checked @endif  @endif>
                                    <label for="brkradio40">Replaced</label>
                                 </div>
                              </div>
                           </div>
                           <div class="ac_service_content">
                              <h3 class="ac_service_title">
                                 LIFTERS
                              </h3>
                              <div class="btn-group" role="group">
                                 <div class="form-btnw-wrap good-checked">
                                    <input type="radio" class="btn-check" value="Good" name="engine_lifters" id="brkradio41" autocomplete="off" @if($serviceData) @if($serviceData->engine_lifters=='Good') checked @endif  @endif>
                                    <label for="brkradio41">Good</label>
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" value="Leaks" name="engine_lifters" id="brkradio42" autocomplete="off" @if($serviceData) @if($serviceData->engine_lifters=='Leaks') checked @endif   @endif>
                                    <label for="brkradio42">Leaks</label>
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" value="Repaired" name="engine_lifters" id="brkradio43" autocomplete="off"  @if($serviceData) @if($serviceData->engine_lifters=='Repaired') checked @endif  @endif>
                                    <label for="brkradio43">Repaired</label>
                                 </div>
                                 <div class="form-btnw-wrap replaced-checked">
                                    <input type="radio" class="btn-check" value="Replaced" name="engine_lifters" id="brkradio44" autocomplete="off"  @if($serviceData) @if($serviceData->engine_lifters=='Replaced') checked @endif  @endif>
                                    <label for="brkradio44">Replaced</label>
                                 </div>
                              </div>
                           </div>
                           <div class="ac_service_content">
                              <h3 class="ac_service_title">
                                 EXHAUST MANIFOLD
                              </h3>
                              <div class="btn-group" role="group">
                                 <div class="form-btnw-wrap good-checked">
                                    <input type="radio" class="btn-check" value="Good" name="engine_exhaust_manifold" id="brkradio45" autocomplete="off"  @if($serviceData) @if($serviceData->engine_exhaust_manifold=='Good') checked @endif  @endif>
                                    <label for="brkradio45">Good</label>
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" value="Leaks" name="engine_exhaust_manifold" id="brkradio46" autocomplete="off" @if($serviceData) @if($serviceData->engine_exhaust_manifold=='Leaks') checked @endif  @endif>
                                    <label for="brkradio46">Leaks</label>
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" value="Repaired" name="engine_exhaust_manifold" id="brkradio47" autocomplete="off"  @if($serviceData) @if($serviceData->engine_exhaust_manifold=='Repaired') checked @endif  @endif>
                                    <label for="brkradio47">Repaired</label>
                                 </div>
                                 <div class="form-btnw-wrap replaced-checked">
                                    <input type="radio" class="btn-check" value="Replaced" name="engine_exhaust_manifold" id="brkradio48" autocomplete="off" @if($serviceData) @if($serviceData->engine_exhaust_manifold=='Replaced') checked @endif  @endif>
                                    <label for="brkradio48">Replaced</label>
                                 </div>
                              </div>
                           </div>
                           <div class="ac_service_content">
                              <h3 class="ac_service_title">
                                 INTAKE MANIFOLD
                              </h3>
                              <div class="btn-group" role="group">
                                 <div class="form-btnw-wrap good-checked">
                                    <input type="radio" class="btn-check" value="Good" name="engine_intake_manifold" id="brkradio49" autocomplete="off" @if($serviceData) @if($serviceData->engine_intake_manifold=='Good') checked @endif  @endif>
                                    <label for="brkradio49">Good</label>
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" value="Leaks" name="engine_intake_manifold" id="brkradio50" autocomplete="off" @if($serviceData) @if($serviceData->engine_intake_manifold=='Leaks') checked @endif  @endif>
                                    <label for="brkradio50">Leaks</label>
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" value="Repaired" name="engine_intake_manifold" id="brkradio51" autocomplete="off" @if($serviceData) @if($serviceData->engine_intake_manifold=='Repaired') checked @endif  @endif>
                                    <label for="brkradio51">Repaired</label>
                                 </div>
                                 <div class="form-btnw-wrap replaced-checked">
                                    <input type="radio" class="btn-check" value="Replaced" name="engine_intake_manifold" id="brkradio52" autocomplete="off" @if($serviceData) @if($serviceData->engine_intake_manifold=='Replaced') checked @endif  @endif>
                                    <label for="brkradio52">Replaced</label>
                                 </div>
                              </div>
                           </div>
                           <div class="ac_service_content">
                              <h3 class="ac_service_title">
                                 OIL PAN
                              </h3>
                              <div class="btn-group" role="group">
                                 <div class="form-btnw-wrap good-checked">
                                    <input type="radio" class="btn-check" value="Good" name="engine_oil_pan" id="brkradio53" autocomplete="off" @if($serviceData) @if($serviceData->engine_oil_pan=='Good') checked @endif  @endif>
                                    <label for="brkradio53">Good</label>
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" value="Leaks" name="engine_oil_pan" id="brkradio54" autocomplete="off" @if($serviceData) @if($serviceData->engine_oil_pan=='Leaks') checked @endif   @endif>
                                    <label for="brkradio54">Leaks</label>
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" value="Repaired" name="engine_oil_pan" id="brkradio55" autocomplete="off"  @if($serviceData) @if($serviceData->engine_oil_pan=='Repaired') checked @endif   @endif>
                                    <label for="brkradio55">Repaired</label>
                                 </div>
                                 <div class="form-btnw-wrap replaced-checked">
                                    <input type="radio" class="btn-check" value="Replaced" name="engine_oil_pan" id="brkradio56" autocomplete="off"  @if($serviceData) @if($serviceData->engine_oil_pan=='Replaced') checked @endif   @endif>
                                    <label for="brkradio56">Replaced</label>
                                 </div>
                              </div>
                           </div>
                           <div class="ac_service_content">
                              <h3 class="ac_service_title">
                                 VALVES/SPRINGS/RETAINERS
                              </h3>
                              <div class="btn-group" role="group">
                                 <div class="form-btnw-wrap good-checked">
                                    <input type="radio" class="btn-check" value="Good" name="engine_valves" id="brkradio57" autocomplete="off"  @if($serviceData) @if($serviceData->engine_valves=='Good') checked @endif  @endif>
                                    <label for="brkradio57">Good</label>
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" value="Leaks" name="engine_valves" id="brkradio58" autocomplete="off" @if($serviceData) @if($serviceData->engine_valves=='Leaks') checked @endif   @endif>
                                    <label for="brkradio58">Leaks</label>
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" value="Repaired" name="engine_valves" id="brkradio59" autocomplete="off" @if($serviceData) @if($serviceData->engine_valves=='Repaired') checked @endif   @endif>
                                    <label for="brkradio59">Repaired</label>
                                 </div>
                                 <div class="form-btnw-wrap replaced-checked">
                                    <input type="radio" class="btn-check" value="Replaced" name="engine_valves" id="brkradio60" autocomplete="off" @if($serviceData) @if($serviceData->engine_valves=='Replaced') checked @endif   @endif>
                                    <label for="brkradio60">Replaced</label>
                                 </div>
                              </div>
                           </div>
                           <div class="ac_service_content">
                              <h3 class="ac_service_title">
                                 TIMING <small>(CHAIN/BELT)</small>
                              </h3>
                              <div class="btn-group" role="group">
                                 <div class="form-btnw-wrap good-checked">
                                    <input type="radio" class="btn-check" value="Good" name="engine_timing" id="brkradio61" autocomplete="off" @if($serviceData) @if($serviceData->engine_timing=='Good') checked @endif  @endif>
                                    <label for="brkradio61">Good</label>
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" value="Leaks" name="engine_timing" id="brkradio62" autocomplete="off" @if($serviceData) @if($serviceData->engine_timing=='Leaks') checked @endif   @endif>
                                    <label for="brkradio62">Leaks</label>
                                 </div>
                                 <div class="form-btnw-wrap upgrade-checked">
                                    <input type="radio" class="btn-check" value="Repaired" name="engine_timing" id="brkradio63" autocomplete="off" @if($serviceData) @if($serviceData->engine_timing=='Repaired') checked @endif   @endif>
                                    <label for="brkradio63">Repaired</label>
                                 </div>
                                 <div class="form-btnw-wrap replaced-checked">
                                    <input type="radio" class="btn-check" value="Replaced" name="engine_timing" id="brkradio64" autocomplete="off" @if($serviceData) @if($serviceData->engine_timing=='Replaced') checked @endif   @endif>
                                    <label for="brkradio64">Replaced</label>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <?php
                        $trimmed_array = array();
                        if(isset($serviceData->engine_services))
                        {
                        $trimmed_array = array_map('trim', explode(',',$serviceData->engine_services));
                        }
                     ?>
                        <div class="grid-2">
                           <span id="newerr" class="newerr" style="color:red;display:none">Please Select </span>
                           <div class="btn-group" role="group">
                             
                              <div class="form-btnw-wrap upgrade-checked">
                                 <input type="checkbox" class="btn-check" value="BLOCK CLEANING" name="engine_services" id="checkbox1" autocomplete="off" @if($serviceData) @if(in_array('BLOCK CLEANING', $trimmed_array))
                                 checked
                              @endif @endif >
                                 <label for="checkbox1" class="text-center">BLOCK CLEANING</label>
                              </div>
                              <div class="form-btnw-wrap upgrade-checked">
                                 <input type="checkbox" class="btn-check" value="DECK MACHINING" name="engine_services" id="checkbox2" autocomplete="off"  @if($serviceData) @if(in_array('DECK MACHINING', $trimmed_array))
                                 checked
                              @endif @endif>
                                 <label for="checkbox2" class="text-center">DECK MACHINING</label>
                              </div>
                              <div class="form-btnw-wrap upgrade-checked">
                                 <input type="checkbox" class="btn-check" value="MAIN BORE HONE" name="engine_services" id="checkbox3" autocomplete="off"  @if($serviceData) @if(in_array('MAIN BORE HONE', $trimmed_array))
                                 checked
                              @endif @endif>
                                 <label for="checkbox3" class="text-center">MAIN BORE HONE</label>
                              </div>
                              <div class="form-btnw-wrap upgrade-checked">
                                 <input type="checkbox" class="btn-check" value="CYLINDER BORE" name="engine_services" id="checkbox4" autocomplete="off"  @if($serviceData) @if(in_array('CYLINDER BORE', $trimmed_array))
                                 checked
                              @endif @endif>
                                 <label for="checkbox4" class="text-center">CYLINDER BORE</label>
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
                  <button class="btn btn--accent cmn-btn insertEngine" type="button">Save</button>
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