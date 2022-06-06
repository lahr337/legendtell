@extends('layout.default')
<!-- leftcode -->
@section('content')
@include('shop-settings.leftshowmenu')
<div class="account-settings__content-wr">
   <div class="account-settings__content-form">
      <div class="grid-view-shop">
         <div class="common-wrap">
            <div class="cmn-content">
               <div class="vinyl_wrap">
                  <div class="row">
                     <div class="col-12 col-md-3">
                        <div class="ac_service_checklist_pdf">
                           <div class="chk_pdf_wrap">
                              <img src="/assets/images/pdf.png" />
                           </div>
                           <button class="cmn-btn cmn-btn-dwnld" type="button">Download Checklist</button>
                        </div>
                     </div>
                     <div class="col-12 col-md-9">
                        <ul class="nav nav-pills nav-tabs" role="tablist">
                           <li class="nav-item" role="presentation">
                              <button class="nav-link navTabs active myvinlytab" id="car-tab" data-bs-toggle="tab" data-bs-target="#car" type="button" role="tab" aria-controls="car" aria-selected="true">Car/Truck/SUV</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link navTabs myvinlytab" id="van-tab" data-bs-toggle="tab" data-bs-target="#van" type="button" role="tab" aria-controls="van" aria-selected="false">VAN</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link navTabs myvinlytab" id="rv-tab" data-bs-toggle="tab" data-bs-target="#rv" type="button" role="tab" aria-controls="rv" aria-selected="false">RV</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link navTabs myvinlytab" id="trailer-tab" data-bs-toggle="tab" data-bs-target="#trailer" type="button" role="tab" aria-controls="trailer" aria-selected="false">TRAILER</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link navTabs myvinlytab" id="bus-tab" data-bs-toggle="tab" data-bs-target="#bus" type="button" role="tab" aria-controls="bus" aria-selected="false">BUS</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link navTabs myvinlytab" id="other-tab" data-bs-toggle="tab" data-bs-target="#other" type="button" role="tab" aria-controls="other" aria-selected="false">OTHER</button>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade show active" id="car" role="tabpanel" aria-labelledby="car-tab">
                        <form id="carvinlyIn">
                           @csrf
                           <input type="hidden" name="outType" value="Car">
                           <input type="hidden" id="servicedata" name="carShopService" value="@if(isset($_GET['servicedata'])){{ $_GET['servicedata'] }} @endif" > 
                           <div class="vinyl-content">
                              <div class="row">
                                 <div class="col-12 col-md-4">
                                    <div class="cmn-vinyl-content">
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">Hood:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_car" name="hood_radio" id="vinyl-tab1" autocomplete="off"  value="Partial" @if($checkCarData) @if($checkCarData->hood=='Partial') checked @endif @endif>
                                                      <label for="vinyl-tab1">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check car_check" name="hood_radio" id="vinyl-tab2" autocomplete="off" value="Full" @if($checkCarData) @if($checkCarData->hood=='Full') checked @endif  @endif>
                                                      <label for="vinyl-tab2">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">Roof:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_car" name="roof_radio" id="vinyl-tab3" autocomplete="off" value="Partial" @if($checkCarData) @if($checkCarData->roof=='Partial') checked @endif @endif>
                                                      <label for="vinyl-tab3">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check car_check" name="roof_radio" value="Full" id="vinyl-tab4" autocomplete="off"  @if($checkCarData) @if($checkCarData->roof=='Full') checked @endif  @endif>
                                                      <label for="vinyl-tab4">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">Trunk:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_car" name="truck_radio" id="vinyl-tab5" autocomplete="off" value="Partial" @if($checkCarData) @if($checkCarData->truck=='Partial') checked @endif @endif>
                                                      <label for="vinyl-tab5">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check car_check" name="truck_radio" value="Full" id="vinyl-tab6" autocomplete="off"  @if($checkCarData) @if($checkCarData->truck=='Full') checked @endif  @endif>
                                                      <label for="vinyl-tab6">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">Hatch:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_car" name="hatch_radio" id="vinyl-tab7" autocomplete="off" value="Partial"@if($checkCarData) @if($checkCarData->hatch=='Partial') checked @endif @endif>
                                                      <label for="vinyl-tab7">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check car_check" name="hatch_radio" value="Full" id="vinyl-tab8" autocomplete="off"  @if($checkCarData) @if($checkCarData->hatch=='Full') checked @endif  @endif>
                                                      <label for="vinyl-tab8">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">Front Bumper:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_car" name="front_bumper_radio" id="vinyl-tab9" autocomplete="off" value="Partial" @if($checkCarData) @if($checkCarData->front_bumper=='Partial') checked @endif @endif>
                                                      <label for="vinyl-tab9">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check car_check" name="front_bumper_radio" value="Full" id="vinyl-tab10" autocomplete="off"  @if($checkCarData) @if($checkCarData->front_bumper=='Full') checked @endif  @endif>
                                                      <label for="vinyl-tab10">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">Rear Bumper:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_car" name="rear_bumper_radio" id="vinyl-tab11" autocomplete="off" value="Partial" @if($checkCarData) @if($checkCarData->rear_bumper=='Partial') checked @endif @endif>
                                                      <label for="vinyl-tab11">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check car_check" name="rear_bumper_radio" value="Full" id="vinyl-tab12" autocomplete="off"  @if($checkCarData) @if($checkCarData->rear_bumper=='Full') checked @endif  @endif>
                                                      <label for="vinyl-tab12">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="form-group my-4 align-items-center">
                                          <div class="row">
                                             <div class="col-lg-12 col-12">
                                                <label class="p-0 cmn-label">WRAP BRAND:</label>
                                             </div>
                                             <div class="col-lg-12 col-12">
                                                <input class="form-control border-0" style="height:35px" name="wrap_brand" value="@if($checkCarData) {{$checkCarData->wrap_brand}} @endif">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group my-4 align-items-center">
                                          <div class="row">
                                             <div class="col-lg-12 col-12">
                                                <label class="p-0 cmn-<label">WRAP COLOR:</label>
                                             </div>
                                             <div class="col-lg-12 col-12">
                                                <input class="form-control border-0" style="height:35px" name="wrap_color"  value="@if($checkCarData) {{$checkCarData->wrap_color}} @endif">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">WARRANTY:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check" name="warranty_radio" id="vinyl-tab13" autocomplete="off" value="YES" @if($checkCarData) @if($checkCarData->warranty=='YES') checked @endif @endif>
                                                      <label for="vinyl-tab13">YES</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check" name="warranty_radio" value="NO" id="vinyl-tab14" autocomplete="off"  @if($checkCarData) @if($checkCarData->warranty=='NO') checked @endif  @endif>
                                                      <label for="vinyl-tab14">NO</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="form-group my-4 align-items-center mb-0">
                                          <div class="row">
                                             <div class="col-lg-12 col-12">
                                                <label class="p-0 cmn-label">WARRANTY COMPANY:</label>
                                             </div>
                                             <div class="col-lg-12 col-12">
                                                <input class="form-control border-0" style="height:35px" name="warranty_company" value="@if($checkCarData) {{$checkCarData->warranty_company}} @endif" >
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Col -->
                                 <div class="col-12 col-md-4">
                                    <div class="cmn-vinyl-content vinylcol">
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">DRIVER FRONT QUARTER PANEL:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_car" name="driver_front_panel_radio" id="vinyl-tab15" autocomplete="off" value="Partial" @if($checkCarData) @if($checkCarData->driver_front_quarter=='Partial') checked @endif @endif>
                                                      <label for="vinyl-tab15">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check car_check" name="driver_front_panel_radio" id="vinyl-tab16" autocomplete="off" value="Full"  @if($checkCarData) @if($checkCarData->driver_front_quarter=='Full') checked @endif  @endif>
                                                      <label for="vinyl-tab16">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">DRIVER REAR QUARTER PANEL:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_car" name="driver_rear_panel" id="vinyl-tab17" autocomplete="off" @if($checkCarData) @if($checkCarData->driver_rear_quarter=='Partial') checked @endif @endif value="Partial">
                                                      <label for="vinyl-tab17">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check car_check" name="driver_rear_panel" id="vinyl-tab18" autocomplete="off" value="Full"  @if($checkCarData) @if($checkCarData->driver_rear_quarter=='Full') checked @endif  @endif>
                                                      <label for="vinyl-tab18">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">DRIVER FRONT DOOR:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_car" name="driver_front_door" id="vinyl-tab19" autocomplete="off" value="Partial" @if($checkCarData) @if($checkCarData->driver_front_door=='Partial') checked @endif @endif>
                                                      <label for="vinyl-tab19">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check car_check" name="driver_front_door" id="vinyl-tab20" autocomplete="off" value="Full"  @if($checkCarData) @if($checkCarData->driver_front_door=='Full') checked @endif  @endif>
                                                      <label for="vinyl-tab20">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">DRIVER REAR DOOR:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_car" name="driver_rear_door" id="vinyl-tab21" autocomplete="off" value="Partial" @if($checkCarData) @if($checkCarData->driver_rear_door=='Partial') checked @endif @endif>
                                                      <label for="vinyl-tab21">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check car_check" name="driver_rear_door" value="Full" id="vinyl-tab22" autocomplete="off"  @if($checkCarData) @if($checkCarData->driver_rear_door=='Full') checked @endif  @endif>
                                                      <label for="vinyl-tab22">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">DRIVER A PILLAR:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_car" name="driver_a_pillar" id="vinyl-tab23" autocomplete="off" value="Partial" @if($checkCarData) @if($checkCarData->driver_a_pilar=='Partial') checked @endif @endif>
                                                      <label for="vinyl-tab23">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check car_check" name="driver_a_pillar" value="Full" id="vinyl-tab24" autocomplete="off"  @if($checkCarData) @if($checkCarData->driver_a_pilar=='Full') checked @endif  @endif>
                                                      <label for="vinyl-tab24">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">DRIVER B PILLAR:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_car" name="driver_b_pillar" id="vinyl-tab25" autocomplete="off" value="Partial" @if($checkCarData) @if($checkCarData->driver_b_pilar=='Partial') checked @endif @endif>
                                                      <label for="vinyl-tab25">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check car_check" name="driver_b_pillar" id="vinyl-tab26" autocomplete="off" value="Full"  @if($checkCarData) @if($checkCarData->driver_b_pilar=='Full') checked @endif  @endif>
                                                      <label for="vinyl-tab26">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">DRIVER C PILLAR:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_car" name="driver_c_pillar" id="vinyl-tab27" autocomplete="off" value="Partial" @if($checkCarData)  @if($checkCarData->driver_c_pilar=='Partial') checked @endif @endif>
                                                      <label for="vinyl-tab27">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check car_check" name="driver_c_pillar" value="Full" id="vinyl-tab28" autocomplete="off"  @if($checkCarData) @if($checkCarData->driver_c_pilar=='Full') checked @endif  @endif>
                                                      <label for="vinyl-tab28">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">DRIVER ROCKER PANEL:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_car" name="driver_rocker_panel" id="vinyl-tab29" autocomplete="off" value="Partial" @if($checkCarData) @if($checkCarData->driver_rocker_pilar=='Partial') checked @endif @endif>
                                                      <label for="vinyl-tab29">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check car_check" name="driver_rocker_panel" value="Full" id="vinyl-tab30" autocomplete="off"  @if($checkCarData) @if($checkCarData->driver_rocker_pilar=='Full') checked @endif  @endif>
                                                      <label for="vinyl-tab30">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">DRIVER MIRROR:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_car" name="driver_mirroe" id="vinyl-tab31" autocomplete="off" value="Partial" @if($checkCarData) @if($checkCarData->driver_mirror=='Partial') checked @endif @endif>
                                                      <label for="vinyl-tab31">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check car_check" name="driver_mirroe" value="Full" id="vinyl-tab32" autocomplete="off"  @if($checkCarData) @if($checkCarData->driver_mirror=='Full') checked @endif  @endif>
                                                      <label for="vinyl-tab32">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">PREF DRIVER WINDOWS:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_car" name="pref_driver_window" id="vinyl-tab33" autocomplete="off" value="Partial" @if($checkCarData) @if($checkCarData->pref_driver_window=='Partial') checked @endif @endif>
                                                      <label for="vinyl-tab33">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check car_check" name="pref_driver_window" value="Full" id="vinyl-tab34" autocomplete="off"  @if($checkCarData) @if($checkCarData->pref_driver_window=='Full') checked @endif  @endif>
                                                      <label for="vinyl-tab34">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-checked">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="checkbox" class="btn-check selectallcar" name="full_vehicle_wrap" id="vinyl-tab35" autocomplete="off" value="Full"  @if($checkCarData) @if($checkCarData->full_vechile_wrap=='Full') checked @endif  @endif>
                                                      <label for="vinyl-tab35">FULL VEHICLE WRAP</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Col -->
                                 <div class="col-12 col-md-4">
                                    <div class="cmn-vinyl-content vinylcol">
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">PASS FRONT QUARTER PANEL:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_car" name="pass_front_quarter" id="vinyl-tab36" autocomplete="off" value="Partial" @if($checkCarData) @if($checkCarData->pass_front_quarter_panel=='Partial') checked @endif @endif>
                                                      <label for="vinyl-tab36">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check car_check" name="pass_front_quarter" id="vinyl-tab37" autocomplete="off"  @if($checkCarData) @if($checkCarData->pass_front_quarter_panel=='Full') checked @endif  @endif>
                                                      <label for="vinyl-tab37">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">PASS REAR QUARTER PANEL:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_car" name="pass_rear_quarter" id="vinyl-tab38" autocomplete="off" value="Partial" @if($checkCarData) @if($checkCarData->pass_rear_quarter_panel=='Partial') checked @endif @endif>
                                                      <label for="vinyl-tab38">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check car_check" name="pass_rear_quarter" value="Full" id="vinyl-tab39" autocomplete="off"  @if($checkCarData) @if($checkCarData->pass_rear_quarter_panel=='Full') checked @endif  @endif>
                                                      <label for="vinyl-tab39">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">PASSENGER REAR DOOR:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_car" name="passenger_rear_door" id="vinyl-tab40" autocomplete="off" value="Partial" @if($checkCarData) @if($checkCarData->passenger_rear_door=='Partial') checked @endif @endif>
                                                      <label for="vinyl-tab40">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check car_check" name="passenger_rear_door" id="vinyl-tab41" autocomplete="off"  @if($checkCarData) @if($checkCarData->passenger_rear_door=='Full') checked @endif  @endif>
                                                      <label for="vinyl-tab41">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">PASS A PILLAR:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_car" name="pass_a_pillar" value="Partial" id="vinyl-tab44" autocomplete="off" @if($checkCarData) @if($checkCarData->pass_a_pillar=='Partial') checked @endif @endif>
                                                      <label for="vinyl-tab44">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check car_check" name="pass_a_pillar" value="Full" id="vinyl-tab45" autocomplete="off"  @if($checkCarData) @if($checkCarData->pass_a_pillar=='Full') checked @endif  @endif>
                                                      <label for="vinyl-tab45">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">PASS B PILLAR:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_car" name="pass_b_pillar" id="vinyl-tab46" autocomplete="off" value="Partial" @if($checkCarData)  @if($checkCarData->pass_b_pillar=='Partial') checked @endif @endif>
                                                      <label for="vinyl-tab46">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check car_check" name="pass_b_pillar" value="Full" id="vinyl-tab47" autocomplete="off"  @if($checkCarData) @if($checkCarData->pass_b_pillar=='Full') checked @endif  @endif>
                                                      <label for="vinyl-tab47">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">PASS C PILLAR:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_car" name="pass_c_pillar" id="vinyl-tab48" autocomplete="off" value="Partial" @if($checkCarData) @if($checkCarData->pass_c_pillar=='Partial') checked @endif @endif>
                                                      <label for="vinyl-tab48">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check car_check" name="pass_c_pillar" value="Full" id="vinyl-tab49" autocomplete="off"  @if($checkCarData) @if($checkCarData->pass_c_pillar=='Full') checked @endif  @endif>
                                                      <label for="vinyl-tab49">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">PASSENGER ROCKER PANEL:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_car" name="passenger_rocker_panel" value="Partial" id="vinyl-tab50" autocomplete="off" @if($checkCarData) @if($checkCarData->passenger_rocker_panel=='Partial') checked @endif @endif>
                                                      <label for="vinyl-tab50">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check car_check" name="passenger_rocker_panel" value="Full" id="vinyl-tab51" autocomplete="off"  @if($checkCarData) @if($checkCarData->passenger_rocker_panel=='Full') checked @endif  @endif>
                                                      <label for="vinyl-tab51">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">PASSENGER MIRROR:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_car" name="passenger_mirror" id="vinyl-tab52" autocomplete="off" value="Partial" @if($checkCarData) @if($checkCarData->passenger_mirror=='Partial') checked @endif @endif>
                                                      <label for="vinyl-tab52">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check car_check" name="passenger_mirror" value="Full" id="vinyl-tab53" autocomplete="off"  @if($checkCarData) @if($checkCarData->passenger_mirror=='Full') checked @endif  @endif>
                                                      <label for="vinyl-tab53">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">PREF PASS WINDOWS:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_car" name="pref_pass_windows" id="vinyl-tab54" autocomplete="off" value="Partial" @if($checkCarData) @if($checkCarData->pref_pass_window=='Partial') checked @endif @endif>
                                                      <label for="vinyl-tab54">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check car_check" name="pref_pass_windows" id="vinyl-tab55" autocomplete="off" value="Full"  @if($checkCarData) @if($checkCarData->pref_pass_window=='Full') checked @endif  @endif>
                                                      <label for="vinyl-tab55">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">PREF BACK WINDSHIELD:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_car" name="pref_back_windshield" id="vinyl-tab56" autocomplete="off" value="Partial" @if($checkCarData) @if($checkCarData->pref_back_windshild=='Partial') checked @endif @endif>
                                                      <label for="vinyl-tab56">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check car_check" name="pref_back_windshield" value="Full" id="vinyl-tab57" autocomplete="off"  @if($checkCarData) @if($checkCarData->pref_back_windshild=='Full') checked @endif  @endif>
                                                      <label for="vinyl-tab57">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">TAILGATE:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_car" name="tailgate" id="vinyl-tab58" autocomplete="off" value="Partial" @if($checkCarData) @if($checkCarData->taligate=='Partial') checked @endif @endif>
                                                      <label for="vinyl-tab58">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check car_check" name="tailgate" value="Full" id="vinyl-tab59" autocomplete="off"  @if($checkCarData) @if($checkCarData->taligate=='Full') checked @endif  @endif>
                                                      <label for="vinyl-tab59">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Col -->
                              </div>
                              <div class="form-box">
                                 <div class="form-group">
                                    <div class="upload-wrap">
                                       <div class="row d-flex align-items-center">
                                          <div class="col-lg-4 col-12">
                                             <button class="btn uplaod">UPLOAD <br /> Photos & Docs <input type="file" name="image_uploaded[]" id="insert_image_uploaded" class="form-control image_uploaded" value="Upload" multiple="multiple"> </button>
                                          </div>
                                          <div class="col-lg-8 col-12 text-center display_image_list"  id="display_image_list">
                                             <ul></ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="cmn-btn-wrap">
                                 {{-- <a href="{{$redirectUrl}}"  class="car-adding__btn btn btn--accent cmn-btn btn btn-danger redirectUrl m-0">Back</a> --}}
                              <button class="car-adding__btn btn btn--accent cmn-btn saveVinly" type="button" id="saveCarVinly">Save</button>
                                
                              </div>
                           </div>
                        </form>
                     </div>
                     <!-- Van Tab -->
                     <div class="tab-pane fade" id="van" role="tabpanel" aria-labelledby="van-tab">
                        <div class="vinyl-content">
                           <form id="InsertVanVinly">
                              @csrf
                              <input type="hidden" name="outType" value="Van">
                              <input type="hidden" id="servicedata" name="carShopService" value="@if(isset($_GET['servicedata'])){{ $_GET['servicedata'] }} @endif" > 
                           <div class="row">
                              <div class="col-12 col-md-4">
                                 <div class="cmn-vinyl-content">
                                    <div class="row align-items-center">
                                       <div class="col-12 col-md-12">
                                          <label class="cmn-label">Hood:</label>
                                       </div>
                                       <div class="col-12 col-md-12">
                                          <ul class="cmn-radio">
                                             <li>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check check_van" name="vantab1" id="vinyl-vantab1" autocomplete="off" value="Partial" 
                                                   @if($checkVanData) @if($checkVanData->hood=='Partial') checked @endif @endif>
                                                   <label for="vinyl-vantab1">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check van_check" name="vantab1" id="vinyl-vantab2"  value="Full" autocomplete="off" @if($checkVanData) @if($checkVanData->hood=='Full') checked @endif  @endif>
                                                   <label for="vinyl-vantab2">Full</label>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="row align-items-center">
                                       <div class="col-12 col-md-12">
                                          <label class="cmn-label">Roof:</label>
                                       </div>
                                       <div class="col-12 col-md-12">
                                          <ul class="cmn-radio">
                                             <li>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check check_van" name="vantab2" id="vinyl-vantab3" autocomplete="off" value="Partial"  @if($checkVanData) @if($checkVanData->hood=='Partial') checked @endif @endif>
                                                   <label for="vinyl-vantab3">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check van_check" name="vantab2" id="vinyl-vantab4" autocomplete="off" value="Full" @if($checkVanData) @if($checkVanData->taligate=='Full') checked @endif  @endif>
                                                   <label for="vinyl-vantab4">Full</label>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="row align-items-center">
                                       <div class="col-12 col-md-12">
                                          <label class="cmn-label">BACK DOORS:</label>
                                       </div>
                                       <div class="col-12 col-md-12">
                                          <ul class="cmn-radio">
                                             <li>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check check_van" name="vantab3" id="vinyl-vantab5" autocomplete="off" value="Partial"  @if($checkVanData) @if($checkVanData->roof=='Partial') checked @endif @endif>
                                                   <label for="vinyl-vantab5">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check van_check" name="vantab3" id="vinyl-vantab6" autocomplete="off" value="Full" @if($checkVanData) @if($checkVanData->roof=='Full') checked @endif  @endif>
                                                   <label for="vinyl-vantab6">Full</label>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="row align-items-center">
                                       <div class="col-12 col-md-12">
                                          <label class="cmn-label">Hatch:</label>
                                       </div>
                                       <div class="col-12 col-md-12">
                                          <ul class="cmn-radio">
                                             <li>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check check_van" name="vantab4" id="vinyl-vantab7" autocomplete="off"  @if($checkVanData) @if($checkVanData->hatch=='Partial') checked @endif @endif value="Partial">
                                                   <label for="vinyl-vantab7">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check van_check" name="vantab4" id="vinyl-vantab8" autocomplete="off" value="Full" @if($checkVanData) @if($checkVanData->hatch=='Full') checked @endif  @endif>
                                                   <label for="vinyl-vantab8">Full</label>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="row align-items-center">
                                       <div class="col-12 col-md-12">
                                          <label class="cmn-label">Front Bumper:</label>
                                       </div>
                                       <div class="col-12 col-md-12">
                                          <ul class="cmn-radio">
                                             <li>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check check_van" name="vantab5" id="vinyl-vantab9" autocomplete="off" value="Partial"  @if($checkVanData) @if($checkVanData->front_bumper=='Partial') checked @endif @endif>
                                                   <label for="vinyl-vantab9">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check van_check" name="vantab5" id="vinyl-vantab10" autocomplete="off" value="Full" @if($checkVanData) @if($checkVanData->front_bumper=='Full') checked @endif  @endif>
                                                   <label for="vinyl-vantab10">Full</label>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="row align-items-center">
                                       <div class="col-12 col-md-12">
                                          <label class="cmn-label">Rear Bumper:</label>
                                       </div>
                                       <div class="col-12 col-md-12">
                                          <ul class="cmn-radio">
                                             <li>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check check_van" name="vantab6" id="vinyl-vantab11" autocomplete="off" value="Partial"  @if($checkVanData) @if($checkVanData->rear_bumper=='Partial') checked @endif @endif>
                                                   <label for="vinyl-vantab11">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check van_check" name="vantab6" id="vinyl-vantab12" autocomplete="off" value="Full" @if($checkVanData) @if($checkVanData->rear_bumper=='Full') checked @endif  @endif>
                                                   <label for="vinyl-vantab12">Full</label>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="form-group my-4 align-items-center">
                                       <div class="row">
                                          <div class="col-lg-12 col-12">
                                             <label class="p-0 cmn-label">WRAP BRAND:</label>
                                          </div>
                                          <div class="col-lg-12 col-12">
                                             <input class="form-control border-0" style="height:35px" name="van_wrap_brand" value="@if($checkVanData) {{$checkVanData->wrap_brand}}  @endif">
                                          </div>
                                       </div>
                                       <div class="form-group my-4 align-items-center">
                                          <div class="row">
                                             <div class="col-lg-12 col-12">
                                                <label class="p-0 cmn-label">WRAP COLOR:</label>
                                             </div>
                                             <div class="col-lg-12 col-12">
                                                <input class="form-control border-0" style="height:35px" name="van_wrap_color" value="  @if($checkVanData) {{$checkVanData->wrap_color}}  @endif">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">WARRANTY:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check" name="vantab7" id="vinyl-vantab13" autocomplete="off" value="YES"  @if($checkVanData) @if($checkVanData->warranty=='YES') checked @endif @endif>
                                                      <label for="vinyl-vantab13">YES</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check" name="vantab7" value="NO" id="vinyl-vantab14" autocomplete="off" @if($checkVanData) @if($checkVanData->warranty=='NO') checked @endif  @endif>
                                                      <label for="vinyl-vantab14">NO</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="form-group my-4 align-items-center mb-0">
                                          <div class="row">
                                             <div class="col-lg-12 col-12">
                                                <label class="p-0 cmn-label">WARRANTY COMPANY:</label>
                                             </div>
                                             <div class="col-lg-12 col-12">
                                                <input class="form-control border-0" style="height:35px" name="van_warranty_company" value="   @if($checkVanData){{$checkVanData->warranty_company}}  @endif">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                                 <!-- Col -->
                                 <div class="col-12 col-md-4">
                                    <div class="cmn-vinyl-content vinylcol">
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">DRIVER MIRROR:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_van" name="vantab8" id="vinyl-vantab15" autocomplete="off" value="Partial"  @if($checkVanData) @if($checkVanData->driver_mirror=='Partial') checked @endif @endif>
                                                      <label for="vinyl-vantab15">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check van_check" name="vantab8" id="vinyl-vantab16" autocomplete="off" value="Full" @if($checkVanData) @if($checkVanData->driver_mirror=='Full') checked @endif  @endif>
                                                      <label for="vinyl-vantab16">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">PASSENGER MIRROR:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_van" name="vantab9" id="vinyl-vantab17" autocomplete="off"  @if($checkVanData) @if($checkVanData->passenger_mirror=='Partial') checked @endif @endif value="Partial">
                                                      <label for="vinyl-vantab17">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check van_check" name="vantab9" id="vinyl-vantab18" autocomplete="off" value="Full" @if($checkVanData) @if($checkVanData->passenger_mirror=='Full') checked @endif  @endif>
                                                      <label for="vinyl-vantab18">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                      
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">DRIVER FRONT QUARTER PANEL:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_van" name="vantab12" id="vinyl-vantab23" autocomplete="off" value="Partial"  @if($checkVanData) @if($checkVanData->driver_front_quarter=='Partial') checked @endif @endif>
                                                      <label for="vinyl-vantab23">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check van_check" name="vantab12" value="Full" id="vinyl-vantab24" autocomplete="off" @if($checkVanData) @if($checkVanData->driver_front_quarter=='Full') checked @endif  @endif>
                                                      <label for="vinyl-vantab24">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">DRIVER REAR QUARTER PANEL:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_van" name="vantab13" id="vinyl-vantab25" autocomplete="off" value="Partial"  @if($checkVanData) @if($checkVanData->driver_rear_quarter=='Partial') checked @endif @endif>
                                                      <label for="vinyl-vantab25">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check van_check" name="vantab13" id="vinyl-vantab26" autocomplete="off" value="Full" @if($checkVanData) @if($checkVanData->driver_rear_quarter=='Full') checked @endif  @endif>
                                                      <label for="vinyl-vantab26">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">DRIVER FRONT DOOR:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_van" name="vantab14" id="vinyl-vantab27" autocomplete="off" value="Partial"  @if($checkVanData) @if($checkVanData->driver_front_door=='Partial') checked @endif @endif>
                                                      <label for="vinyl-vantab27">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check van_check" name="vantab14" id="vinyl-vantab28" autocomplete="off" value="Full" @if($checkVanData) @if($checkVanData->driver_front_door=='Full') checked @endif  @endif>
                                                      <label for="vinyl-vantab28">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">DRIVER REAR DOOR:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_van" name="vantab15" id="vinyl-vantab29" autocomplete="off" value="Partial"  @if($checkVanData) @if($checkVanData->driver_rear_door=='Partial') checked @endif @endif>
                                                      <label for="vinyl-vantab29">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check van_check" name="vantab15" id="vinyl-vantab30" autocomplete="off" value="Full" @if($checkVanData) @if($checkVanData->driver_rear_door=='Full') checked @endif  @endif>
                                                      <label for="vinyl-vantab30">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Col -->
                                 <div class="col-12 col-md-4">
                                    <div class="cmn-vinyl-content vinylcol">
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">PASS FRONT QUARTER PANEL:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_van" name="vantab16" id="vinyl-vantab31" autocomplete="off" value="Partial"  @if($checkVanData) @if($checkVanData->pass_front_quarter_panel=='Partial') checked @endif @endif>
                                                      <label for="vinyl-vantab31">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check van_check" name="vantab16" id="vinyl-vantab32" autocomplete="off" value="Full" @if($checkVanData) @if($checkVanData->pass_front_quarter_panel=='Full') checked @endif  @endif>
                                                      <label for="vinyl-vantab32">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">PASS REAR QUARTER PANEL:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_van" name="vantab17" id="vinyl-vantab33" autocomplete="off" value="Partial"  @if($checkVanData) @if($checkVanData->pass_rear_quarter_panel=='Partial') checked @endif @endif>
                                                      <label for="vinyl-vantab33">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check van_check" name="vantab17" id="vinyl-vantab34" autocomplete="off" value="Full" @if($checkVanData) @if($checkVanData->pass_rear_quarter_panel=='Full') checked @endif  @endif>
                                                      <label for="vinyl-vantab34">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">PASSENGER FRONT DOOR:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_van" name="vantab18" id="vinyl-vantab35" autocomplete="off" value="Partial"  @if($checkVanData) @if($checkVanData->passenger_front_door=='Partial') checked @endif @endif>
                                                      <label for="vinyl-vantab35">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check van_check" name="vantab18" id="vinyl-vantab36" autocomplete="off" value="Full" @if($checkVanData) @if($checkVanData->passenger_front_door=='Full') checked @endif  @endif>
                                                      <label for="vinyl-vantab36">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">PASSENGER REAR DOOR:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_van" name="vantab19" id="vinyl-vantab37" autocomplete="off" value="Partial"  @if($checkVanData) @if($checkVanData->passenger_rear_door=='Partial') checked @endif @endif>
                                                      <label for="vinyl-vantab37">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check van_check" name="vantab19" value="Full" id="vinyl-vantab38" autocomplete="off" @if($checkVanData) @if($checkVanData->passenger_rear_door=='Full') checked @endif  @endif>
                                                      <label for="vinyl-vantab38">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">PREF DRIVER WINDOWS:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_van" name="vantab20" id="vinyl-vantab39" autocomplete="off" value="Partial"  @if($checkVanData) @if($checkVanData->pref_driver_window=='Partial') checked @endif @endif>
                                                      <label for="vinyl-vantab39">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check van_check" name="vantab20" id="vinyl-vantab40" autocomplete="off" value="Full" @if($checkVanData) @if($checkVanData->pref_driver_window=='Full') checked @endif  @endif>
                                                      <label for="vinyl-vantab40">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">PREF PASS WINDOWS:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_van" name="vantab21" id="vinyl-vantab41" autocomplete="off" value="Partial"  @if($checkVanData) @if($checkVanData->pref_pass_window=='Partial') checked @endif @endif>
                                                      <label for="vinyl-vantab41">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check van_check" name="vantab21" id="vinyl-vantab42" autocomplete="off" value="Full" @if($checkVanData) @if($checkVanData->pref_pass_window=='Full') checked @endif  @endif>
                                                      <label for="vinyl-vantab42">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">PREF BACK WINDSHIELD:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_van" name="vantab22" id="vinyl-vantab43" autocomplete="off" value="Partial"  @if($checkVanData) @if($checkVanData->pref_back_windshild=='Partial') checked @endif @endif>
                                                      <label for="vinyl-vantab43">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check van_check" name="vantab22" id="vinyl-vantab44" autocomplete="off" value="Full" @if($checkVanData) @if($checkVanData->pref_back_windshild=='Full') checked @endif  @endif>
                                                      <label for="vinyl-vantab44">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-checked">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="checkbox" class="btn-check vanselectall" name="vantab23" id="vinyl-vantab45" autocomplete="off" value="Full" @if($checkVanData) @if($checkVanData->taligate=='Full') checked @endif  @endif>
                                                      <label for="vinyl-vantab45">FULL VAN WRAP</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Col -->
                              
                              <div class="form-box">
                                 <div class="form-group">
                                    <div class="upload-wrap">
                                       <div class="row d-flex align-items-center">
                                          <div class="col-lg-4 col-12">
                                             <button class="btn uplaod">UPLOAD <br /> Photos & Docs <input type="file" name="image_uploaded[]" id="insert_image_uploaded" class="form-control image_uploaded" value="Upload" multiple="multiple"> </button>
                                          </div>
                                          <div class="col-lg-8 col-12 text-center display_image_list"  id="display_image_list">
                                             <ul></ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              {{-- <button class="car-adding__btn btn btn--accent saveVinly cmn-btn" type="button" id="saveVanVinly">Save</button> --}}

                              <div class="cmn-btn-wrap">
                                 {{-- <a href="{{$redirectUrl}}"  class="car-adding__btn btn btn--accent cmn-btn btn btn-danger redirectUrl m-0">Back</a> --}}
                              <button class="car-adding__btn btn btn--accent cmn-btn saveVinly" type="button" id="saveVanVinly">Save</button>
                                
                              </div>
                            
                           </div>
                        </form>
                        </div>
                     </div>
                        <!-- RV Tab -->
                        <div class="tab-pane fade" id="rv" role="tabpanel" aria-labelledby="rv-tab">
                           <div class="vinyl-content">
                              <form id="InsertRvVinly1">
                                 @csrf
                                 <input type="hidden" name="outType" value="RV">
                                 <input type="hidden" id="servicedata" name="carShopService" value="@if(isset($_GET['servicedata'])){{ $_GET['servicedata'] }} @endif" > 
                              <div class="row">
                                 <div class="col-12 col-md-4">
                                    <div class="cmn-vinyl-content">
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">Hood:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_rv" name="rvtab1" id="vinyl-rvtab1" autocomplete="off" value="Partial" @if($checkRvData) @if($checkRvData->hood=='Partial') checked @endif @endif>
                                                      <label for="vinyl-rvtab1">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check rv_check" name="rvtab1" value="Full" id="vinyl-rvtab2" autocomplete="off"  @if($checkRvData) @if($checkRvData->hood=='Full') checked @endif @endif>
                                                      <label for="vinyl-rvtab2">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">FRONT:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_rv" name="rvtab2" id="vinyl-rvtab3" autocomplete="off" value="Partial" @if($checkRvData) @if($checkRvData->front=='Partial') checked @endif @endif>
                                                      <label for="vinyl-rvtab3">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check rv_check" name="rvtab2" value="Full" id="vinyl-rvtab4" autocomplete="off"  @if($checkRvData) @if($checkRvData->front=='Full') checked @endif @endif>
                                                      <label for="vinyl-rvtab4">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">REAR:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_rv" name="rvtab3" id="vinyl-rvtab5" autocomplete="off" value="Partial" @if($checkRvData) @if($checkRvData->rear=='Partial') checked @endif @endif>
                                                      <label for="vinyl-rvtab5">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check rv_check" name="rvtab3" Value="Full" id="vinyl-rvtab6" autocomplete="off"  @if($checkRvData) @if($checkRvData->rear=='Full') checked @endif @endif>
                                                      <label for="vinyl-rvtab6">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="form-group my-4 align-items-center">
                                          <div class="row">
                                             <div class="col-lg-12 col-12">
                                                <label class="p-0 cmn-label">WRAP BRAND:</label>
                                             </div>
                                             <div class="col-lg-12 col-12">
                                                <input class="form-control border-0" name ="rv_wrap_brand" style="height:35px" value=" @if($checkRvData) {{$checkRvData->wrap_brand}} @endif">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group my-4 align-items-center">
                                          <div class="row">
                                             <div class="col-lg-12 col-12">
                                                <label class="p-0 cmn-label">WRAP COLOR:</label>
                                             </div>
                                             <div class="col-lg-12 col-12">
                                                <input class="form-control border-0" name="rv_wrap_color" style="height:35px" value=" @if($checkRvData) {{$checkRvData->wrap_color}} @endif">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">WARRANTY:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check" name="rvtab4" id="vinyl-rvtab7" autocomplete="off" value="YES" @if($checkRvData) @if($checkRvData->warranty=='YES') checked @endif @endif>
                                                      <label for="vinyl-rvtab7">YES</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check" name="rvtab4" value="NO" id="vinyl-rvtab8" autocomplete="off"  @if($checkRvData) @if($checkRvData->warranty=='NO') checked @endif @endif>
                                                      <label for="vinyl-rvtab8">NO</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="form-group my-4 align-items-center mb-0">
                                          <div class="row">
                                             <div class="col-lg-12 col-12">
                                                <label class="p-0 cmn-label">WARRANTY COMPANY:</label>
                                             </div>
                                             <div class="col-lg-12 col-12">
                                                <input class="form-control border-0" name="rv_warranty_Company" style="height:35px" value=" @if($checkRvData) {{$checkRvData->warranty_company}} @endif">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Col -->
                                 <div class="col-12 col-md-4">
                                    <div class="cmn-vinyl-content vinylcol">
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">DRIVER FRONT SECTION:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_rv" name="rvtab5" id="vinyl-rvtab9" autocomplete="off" value="Partial" @if($checkRvData) @if($checkRvData->full_driver_front_section=='Partial') checked @endif @endif>
                                                      <label for="vinyl-rvtab9">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check rv_check" name="rvtab5" value="Full" id="vinyl-rvtab10" autocomplete="off"  @if($checkRvData) @if($checkRvData->full_driver_front_section=='Full') checked @endif @endif>
                                                      <label for="vinyl-rvtab10">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">DRIVER MID SECTION:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_rv" name="rvtab6" id="vinyl-rvtab11" autocomplete="off" value="Partial" @if($checkRvData) @if($checkRvData->full_driver_mid_section=='Partial') checked @endif @endif>
                                                      <label for="vinyl-rvtab11">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check rv_check" name="rvtab6" id="vinyl-rvtab12" autocomplete="off" value="Full"  @if($checkRvData) @if($checkRvData->full_driver_mid_section=='Full') checked @endif @endif>
                                                      <label for="vinyl-rvtab12">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">DRIVER REAR SECTION:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_rv" name="rvtab7" id="vinyl-rvtab13" autocomplete="off" value="Partial" @if($checkRvData) @if($checkRvData->full_driver_rear_section=='Partial') checked @endif @endif>
                                                      <label for="vinyl-rvtab13">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check rv_check" name="rvtab7" id="vinyl-rvtab14" autocomplete="off" value="Full"  @if($checkRvData) @if($checkRvData->full_driver_rear_section=='Full') checked @endif @endif>
                                                      <label for="vinyl-rvtab14">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-checked">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="checkbox" class="btn-check rvselectall" name="rv_full_wrap" id="vinyl-rvtab15" value="Full" autocomplete="off" @if($checkRvData) @if($checkRvData->full_vechile_wrap=='Full') checked @endif @endif>
                                                      <label for="vinyl-rvtab15">FULL RV WRAP</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Col -->
                                 <div class="col-12 col-md-4">
                                    <div class="cmn-vinyl-content vinylcol">
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">DRIVER FRONT SECTION:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_rv" name="rvtab9" id="vinyl-rvtab16" autocomplete="off" value="Partial" @if($checkRvData) @if($checkRvData->roof_driver_front_section=='Partial') checked @endif @endif>
                                                      <label for="vinyl-rvtab16">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check rv_check" name="rvtab9" value="Full" id="vinyl-rvtab17" autocomplete="off"  @if($checkRvData) @if($checkRvData->roof_driver_front_section=='Full') checked @endif @endif>
                                                      <label for="vinyl-rvtab17">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">DRIVER MID SECTION:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_rv" name="rvtab10" id="vinyl-rvtab18" autocomplete="off" value="Partial" @if($checkRvData) @if($checkRvData->roof_driver_mid_section=='Partial') checked @endif @endif>
                                                      <label for="vinyl-rvtab18">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check rv_check" name="rvtab10" id="vinyl-rvtab19" autocomplete="off" value="Full"  @if($checkRvData) @if($checkRvData->roof_driver_mid_section=='Full') checked @endif @endif>
                                                      <label for="vinyl-rvtab19">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">DRIVER REAR SECTION:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_rv" name="rvtab11" id="vinyl-rvtab20" autocomplete="off" value="Partial" @if($checkRvData) @if($checkRvData->roof_driver_rear_section=='Partial') checked @endif @endif>
                                                      <label for="vinyl-rvtab20">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check rv_check" name="rvtab11" id="vinyl-rvtab21" autocomplete="off" value="Full"  @if($checkRvData) @if($checkRvData->roof_driver_rear_section=='Full') checked @endif @endif>
                                                      <label for="vinyl-rvtab21">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">ROOF:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_rv" name="rvtab12" id="vinyl-rvtab22" autocomplete="off" value="Partial" @if($checkRvData) @if($checkRvData->roof=='Partial') checked @endif @endif>
                                                      <label for="vinyl-rvtab22">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check rv_check" name="rvtab12" id="vinyl-rvtab23" autocomplete="off" value="Full" @if($checkRvData) @if($checkRvData->roof=='Full') checked @endif @endif>
                                                      <label for="vinyl-rvtab23">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Col -->
                              </div>
                              <div class="form-box">
                                 <div class="form-group">
                                    <div class="upload-wrap">
                                       <div class="row d-flex align-items-center">
                                          <div class="col-lg-4 col-12">
                                             <button class="btn uplaod">UPLOAD <br /> Photos & Docs <input type="file" name="image_uploaded[]" id="insert_image_uploaded2" class="form-control image_uploaded" value="Upload" multiple="multiple"> </button>
                                          </div>
                                          <div class="col-lg-8 col-12 text-center display_image_list"  id="display_image_list">
                                             <ul></ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              {{-- <button class="car-adding__btn btn btn--accent saveVinly cmn-btn" type="button" id="saveRvVinly">Save</button> --}}
                              <div class="cmn-btn-wrap">
                                 {{-- <a href="{{$redirectUrl}}"  class="car-adding__btn btn btn--accent cmn-btn btn btn-danger redirectUrl m-0">Back</a> --}}
                              <button class="car-adding__btn btn btn--accent cmn-btn saveVinly" type="button" id="saveRvVinly">Save</button>
                                
                              </div>
                           </form>
                           </div>
                        
                        </div>
                        <!-- Trailer -->
                        <div class="tab-pane fade" id="trailer" role="tabpanel" aria-labelledby="trailer-tab">
                           <div class="vinyl-content">
                              <form id="InsertTrailerVinly">
                                 @csrf
                                 <input type="hidden" name="outType" value="Trailer">
                                 <input type="hidden" id="servicedata" name="carShopService" value="@if(isset($_GET['servicedata'])){{ $_GET['servicedata'] }} @endif" > 
                              <div class="row">
                                 <div class="col-12 col-md-4">
                                    <div class="cmn-vinyl-content">
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">Hood:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_trailor" name="trailertab1" id="vinyl-trailertab1" autocomplete="off" value="Partial"  @if($checktrailerData) @if($checktrailerData->hood=='Partial') checked @endif @endif>
                                                      <label for="vinyl-trailertab1">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check trailor_check" name="trailertab1" value="Full" id="vinyl-trailertab2" autocomplete="off"  @if($checktrailerData) @if($checktrailerData->hood=='Full') checked @endif @endif>
                                                      <label for="vinyl-trailertab2">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">FRONT:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_trailor" name="trailertab2" id="vinyl-trailertab3" autocomplete="off" value="Partial" @if($checktrailerData) @if($checktrailerData->front=='Partial') checked @endif @endif>
                                                      <label for="vinyl-trailertab3">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check trailor_check" name="trailertab2" value="Full" id="vinyl-trailertab4" autocomplete="off" @if($checktrailerData) @if($checktrailerData->front=='Full') checked @endif @endif>
                                                      <label for="vinyl-trailertab4">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">REAR:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_trailor" name="trailertab3" id="vinyl-trailertab5" autocomplete="off" value="Partial" @if($checktrailerData) @if($checktrailerData->rear=='Partial') checked @endif @endif>
                                                      <label for="vinyl-trailertab5">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check trailor_check" name="trailertab3" value="Full" id="vinyl-trailertab6" autocomplete="off" @if($checktrailerData) @if($checktrailerData->rear=='Full') checked @endif @endif>
                                                      <label for="vinyl-trailertab6">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="form-group my-4 align-items-center">
                                          <div class="row">
                                             <div class="col-lg-12 col-12">
                                                <label class="p-0 cmn-label">WRAP BRAND:</label>
                                             </div>
                                             <div class="col-lg-12 col-12">
                                                <input class="form-control border-0" style="height:35px" name="trailer_wrap_brand" value="@if($checktrailerData) {{$checktrailerData->wrap_brand}} @endif">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group my-4 align-items-center">
                                          <div class="row">
                                             <div class="col-lg-12 col-12">
                                                <label class="p-0 cmn-label">WRAP COLOR:</label>
                                             </div>
                                             <div class="col-lg-12 col-12">
                                                <input class="form-control border-0" style="height:35px" name="trailer_wrap_color" value="@if($checktrailerData) {{$checktrailerData->wrap_color}} @endif">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">WARRANTY:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check" name="trailertab4" id="vinyl-trailertab7" autocomplete="off" value="YES" @if($checktrailerData) @if($checktrailerData->warranty=='YES') checked @endif @endif>
                                                      <label for="vinyl-trailertab7">YES</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check" name="trailertab4" value="NO" id="vinyl-trailertab8" autocomplete="off" @if($checktrailerData) @if($checktrailerData->warranty=='NO') checked @endif @endif>
                                                      <label for="vinyl-trailertab8">NO</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="form-group my-4 align-items-center mb-0">
                                          <div class="row">
                                             <div class="col-lg-12 col-12">
                                                <label class="p-0 cmn-label">WARRANTY COMPANY:</label>
                                             </div>
                                             <div class="col-lg-12 col-12">
                                                <input class="form-control border-0" style="height:35px" value="@if($checktrailerData) {{$checktrailerData->warranty_company}} @endif" name="trailer_warranty_company">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Col -->
                                 <div class="col-12 col-md-4">
                                    <div class="cmn-vinyl-content vinylcol">
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">DRIVER FRONT SECTION:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_trailor" name="trailertab5" id="vinyl-trailertab9" autocomplete="off" value="Partial" @if($checktrailerData) @if($checktrailerData->full_driver_front_section=='Partial') checked @endif @endif>
                                                      <label for="vinyl-trailertab9">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check trailor_check" name="trailertab5" id="vinyl-trailertab10" autocomplete="off" value="Full" @if($checktrailerData) @if($checktrailerData->full_driver_front_section=='Full') checked @endif @endif>
                                                      <label for="vinyl-trailertab10">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">DRIVER MID SECTION:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_trailor" name="trailertab6" id="vinyl-trailertab11" autocomplete="off" value="Partial" @if($checktrailerData) @if($checktrailerData->full_driver_mid_section=='Partial') checked @endif @endif>
                                                      <label for="vinyl-trailertab11">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check trailor_check" name="trailertab6" id="vinyl-trailertab12" autocomplete="off" value="Full" @if($checktrailerData) @if($checktrailerData->full_driver_mid_section=='Full') checked @endif @endif>
                                                      <label for="vinyl-trailertab12">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">DRIVER REAR SECTION:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_trailor" name="trailertab7" id="vinyl-trailertab13" autocomplete="off" value="Partial" @if($checktrailerData) @if($checktrailerData->full_driver_rear_section=='Partial') checked @endif @endif>
                                                      <label for="vinyl-trailertab13">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check trailor_check" name="trailertab7" value="Full"  id="vinyl-trailertab14" autocomplete="off" @if($checktrailerData) @if($checktrailerData->full_driver_rear_section=='Full') checked @endif @endif>
                                                      <label for="vinyl-trailertab14">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-checked">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="checkbox" class="btn-check trailorselectall" name="trailertab8" id="vinyl-trailertab15" autocomplete="off" name="full_rv_wrap" value="Full" @if($checktrailerData) @if($checktrailerData->full_rv_wrap=='Full') checked @endif @endif>
                                                      <label for="vinyl-trailertab15">FULL RV WRAP</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Col -->
                                 <div class="col-12 col-md-4">
                                    <div class="cmn-vinyl-content vinylcol">
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">DRIVER FRONT SECTION:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_trailor" name="trailertab9" id="vinyl-trailertab16" autocomplete="off" value="Partial" @if($checktrailerData) @if($checktrailerData->roof_driver_front_section=='Partial') checked @endif @endif>
                                                      <label for="vinyl-trailertab16">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check trailor_check" name="trailertab9" value="Full" id="vinyl-trailertab17" autocomplete="off" @if($checktrailerData) @if($checktrailerData->roof_driver_front_section=='Full') checked @endif @endif>
                                                      <label for="vinyl-trailertab17">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">DRIVER MID SECTION:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_trailor" name="trailertab10" value="Partial" id="vinyl-trailertab18" autocomplete="off" @if($checktrailerData) @if($checktrailerData->roof_driver_mid_section=='Partial') checked @endif @endif>
                                                      <label for="vinyl-trailertab18">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check trailor_check" name="trailertab10" value="Full" id="vinyl-trailertab19" autocomplete="off" @if($checktrailerData) @if($checktrailerData->roof_driver_mid_section=='Full') checked @endif @endif>
                                                      <label for="vinyl-trailertab19">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">DRIVER REAR SECTION:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_trailor" name="trailertab11" id="vinyl-trailertab20" autocomplete="off" value="Partial" @if($checktrailerData) @if($checktrailerData->roof_driver_rear_section=='Partial') checked @endif @endif>
                                                      <label for="vinyl-trailertab20">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check trailor_check" name="trailertab11" value="Full"  id="vinyl-trailertab21" autocomplete="off" @if($checktrailerData) @if($checktrailerData->roof_driver_rear_section=='Full') checked @endif @endif>
                                                      <label for="vinyl-trailertab21">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">ROOF:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_trailor" name="trailertab12" id="vinyl-trailertab22" autocomplete="off" value="Partial" @if($checktrailerData) @if($checktrailerData->roof=='Partial') checked @endif @endif>
                                                      <label for="vinyl-trailertab22">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check trailor_check" name="trailertab12" value="Full" id="vinyl-trailertab23" autocomplete="off" @if($checktrailerData) @if($checktrailerData->roof=='Full') checked @endif @endif>
                                                      <label for="vinyl-trailertab23">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Col -->
                              </div>
                              <div class="form-box">
                                 <div class="form-group">
                                    <div class="upload-wrap">
                                       <div class="row d-flex align-items-center">
                                          <div class="col-lg-4 col-12">
                                             <button class="btn uplaod">UPLOAD <br /> Photos & Docs <input type="file3" name="image_uploaded[]" id="insert_image_uploaded" class="form-control image_uploaded" value="Upload" multiple="multiple"> </button>
                                          </div>
                                          <div class="col-lg-8 col-12 text-center display_image_list"  id="display_image_list">
                                             <ul></ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              {{-- <button class="car-adding__btn btn btn--accent saveVinly cmn-btn" type="button" id="savetrailerVinly">Save</button> --}}
                              
                              <div class="cmn-btn-wrap">
                                 {{-- <a href="{{$redirectUrl}}"  class="car-adding__btn btn btn--accent cmn-btn btn btn-danger redirectUrl m-0">Back</a> --}}
                              <button class="car-adding__btn btn btn--accent cmn-btn saveVinly" type="button" id="savetrailerVinly">Save</button>
                                
                              </div>
                              </form>
                           </div>
                        </div>
                        <!-- Bus Tab -->
                        <div class="tab-pane fade" id="bus" role="Bus" aria-labelledby="bus-tab">
                           <form id="InsertBusVinly">
                              @csrf
                              <input type="hidden" name="outType" value="Bus">
                              <input type="hidden" id="servicedata" name="carShopService" value="@if(isset($_GET['servicedata'])){{ $_GET['servicedata'] }} @endif" > 
                           <div class="vinyl-content">
                              <div class="row">
                                 <div class="col-12 col-md-4">
                                    <div class="cmn-vinyl-content">
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">Hood:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_bus" name="bustab1" id="vinyl-bustab1" autocomplete="off" value="Partial"  @if($checkbusData) @if($checkbusData->hood=='Partial') checked @endif @endif>
                                                      <label for="vinyl-bustab1">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check bus_check" name="bustab1" value="Full" id="vinyl-bustab2" autocomplete="off">
                                                      <label for="vinyl-bustab2"  @if($checkbusData) @if($checkbusData->hood=='Full') checked @endif @endif>Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">FRONT:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_bus" name="bustab2" id="vinyl-bustab3" autocomplete="off" value="Partial"  @if($checkbusData) @if($checkbusData->front=='Partial') checked @endif @endif>
                                                      <label for="vinyl-bustab3">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check bus_check" name="bustab2" value="Full" id="vinyl-bustab4" autocomplete="off"  @if($checkbusData) @if($checkbusData->front=='Full') checked @endif @endif>
                                                      <label for="vinyl-bustab4">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">REAR:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_bus" name="bustab3" id="vinyl-bustab5" autocomplete="off" value="Partial"  @if($checkbusData) @if($checkbusData->rear=='Partial') checked @endif @endif>
                                                      <label for="vinyl-bustab5">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check bus_check" name="bustab3" id="vinyl-bustab6" autocomplete="off" value="Full"  @if($checkbusData) @if($checkbusData->rear=='Full') checked @endif @endif>
                                                      <label for="vinyl-bustab6">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="form-group my-4 align-items-center">
                                          <div class="row">
                                             <div class="col-lg-12 col-12">
                                                <label class="p-0 cmn-label">WRAP BRAND:</label>
                                             </div>
                                             <div class="col-lg-12 col-12">
                                                <input class="form-control border-0" name="bus_wrap_brand" style="height:35px" value="@if($checkbusData) {{$checkbusData->wrap_brand}} @endif">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group my-4 align-items-center">
                                          <div class="row">
                                             <div class="col-lg-12 col-12">
                                                <label class="p-0 cmn-label">WRAP COLOR:</label>
                                             </div>
                                             <div class="col-lg-12 col-12">
                                                <input class="form-control border-0"  name="bus_wrap_color" style="height:35px" value="@if($checkbusData) {{$checkbusData->wrap_color}} @endif">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">WARRANTY:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check" name="bustab4" id="vinyl-bustab7" autocomplete="off" value="Yes"  @if($checkbusData) @if($checkbusData->warranty=='Yes') checked @endif @endif>
                                                      <label for="vinyl-bustab7">YES</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check" name="bustab4" id="vinyl-bustab8" autocomplete="off" value="No"  @if($checkbusData) @if($checkbusData->warranty=='No') checked @endif @endif>
                                                      <label for="vinyl-bustab8">NO</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="form-group my-4 align-items-center mb-0">
                                          <div class="row">
                                             <div class="col-lg-12 col-12">
                                                <label class="p-0 cmn-label">WARRANTY COMPANY:</label>
                                             </div>
                                             <div class="col-lg-12 col-12">
                                                <input class="form-control border-0" name="bus_warranty_company" style="height:35px" value="@if($checkbusData) {{$checkbusData->warranty}} @endif">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Col -->
                                 <div class="col-12 col-md-4">
                                    <div class="cmn-vinyl-content vinylcol">
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">DRIVER FRONT SECTION:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_bus" name="bustab5" id="vinyl-bustab9" autocomplete="off" value="Partial"  @if($checkbusData) @if($checkbusData->full_driver_front_section=='Partial') checked @endif @endif>
                                                      <label for="vinyl-bustab9">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check bus_check" name="bustab5" id="vinyl-bustab10" autocomplete="off" value="Full"  @if($checkbusData) @if($checkbusData->full_driver_front_section=='Full') checked @endif @endif>
                                                      <label for="vinyl-bustab10">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">DRIVER MID SECTION:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_bus" name="bustab6" id="vinyl-bustab11" autocomplete="off" value="Partial"  @if($checkbusData) @if($checkbusData->full_driver_mid_section=='Partial') checked @endif @endif>
                                                      <label for="vinyl-bustab11">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check bus_check" name="bustab6" id="vinyl-bustab12" autocomplete="off" value="Full"  @if($checkbusData) @if($checkbusData->full_driver_mid_section=='Full') checked @endif @endif>
                                                      <label for="vinyl-bustab12">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">DRIVER REAR SECTION:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_bus" name="bustab7" id="vinyl-bustab13" autocomplete="off" value="Partial"  @if($checkbusData) @if($checkbusData->full_driver_rear_section=='Partial') checked @endif @endif>
                                                      <label for="vinyl-bustab13">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check bus_check" name="bustab7" id="vinyl-bustab14" autocomplete="off" value="Full"  @if($checkbusData) @if($checkbusData->full_driver_rear_section=='Full') checked @endif @endif>
                                                      <label for="vinyl-bustab14">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-checked">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="checkbox" class="btn-check busselectall" name="bustab8" id="vinyl-bustab15" autocomplete="off" Value="Full" @if($checkbusData) @if($checkbusData->full_rv_wrap=='Full') checked @endif @endif>
                                                      <label for="vinyl-bustab15">FULL RV WRAP</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Col -->
                                 <div class="col-12 col-md-4">
                                    <div class="cmn-vinyl-content vinylcol">
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">DRIVER FRONT SECTION:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_bus" name="bustab9" id="vinyl-bustab16" autocomplete="off" value="Partial"  @if($checkbusData) @if($checkbusData->roof_driver_front_section=='Partial') checked @endif @endif>
                                                      <label for="vinyl-bustab16">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check bus_check" name="bustab9" value="Full" id="vinyl-bustab17" autocomplete="off"  @if($checkbusData) @if($checkbusData->roof_driver_front_section=='Full') checked @endif @endif>
                                                      <label for="vinyl-bustab17">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">DRIVER MID SECTION:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_bus" name="bustab10" id="vinyl-bustab18" autocomplete="off" value="Partial"  @if($checkbusData) @if($checkbusData->roof_driver_mid_section=='Partial') checked @endif @endif>
                                                      <label for="vinyl-bustab18">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check bus_check" name="bustab10" id="vinyl-bustab19" autocomplete="off" value="Full"  @if($checkbusData) @if($checkbusData->roof_driver_mid_section=='Full') checked @endif @endif>
                                                      <label for="vinyl-bustab19">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">DRIVER REAR SECTION:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_bus" name="bustab11" id="vinyl-bustab20" autocomplete="off" value="Partial"  @if($checkbusData) @if($checkbusData->roof_driver_rear_section=='Partial') checked @endif @endif>
                                                      <label for="vinyl-bustab20">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check bus_check" name="bustab11" id="vinyl-bustab21" autocomplete="off" value="Full"  @if($checkbusData) @if($checkbusData->roof_driver_rear_section=='Full') checked @endif @endif>
                                                      <label for="vinyl-bustab21">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="row align-items-center">
                                          <div class="col-12 col-md-12">
                                             <label class="cmn-label">ROOF:</label>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <ul class="cmn-radio">
                                                <li>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check check_bus" name="bustab12" id="vinyl-bustab22" autocomplete="off" value="Partial"  @if($checkbusData) @if($checkbusData->roof=='Partial') checked @endif @endif>
                                                      <label for="vinyl-bustab22">Partial</label>
                                                   </div>
                                                   <div class="form-btnw-wrap">
                                                      <input type="radio" class="btn-check bus_check" name="bustab12" id="vinyl-bustab23" autocomplete="off" value="Full"  @if($checkbusData) @if($checkbusData->roof=='Full') checked @endif @endif>
                                                      <label for="vinyl-bustab23">Full</label>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Col -->
                              </div>
                              <div class="form-box">
                                 <div class="form-group">
                                    <div class="upload-wrap">
                                       <div class="row d-flex align-items-center">
                                          <div class="col-lg-4 col-12">
                                             <button class="btn uplaod">UPLOAD <br /> Photos & Docs <input type="file" name="image_uploaded[]" id="insert_image_uploaded4" class="form-control image_uploaded" value="Upload" multiple="multiple"> </button>
                                          </div>
                                          <div class="col-lg-8 col-12 text-center display_image_list"  id="display_image_list">
                                             <ul></ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              {{-- <button class="car-adding__btn btn btn--accent saveVinly cmn-btn" type="button" id="saveBusVinly">Save</button> --}}
                              <div class="cmn-btn-wrap">
                                 {{-- <a href="{{$redirectUrl}}"  class="car-adding__btn btn btn--accent cmn-btn btn btn-danger redirectUrl m-0">Back</a> --}}
                              <button class="car-adding__btn btn btn--accent cmn-btn saveVinly" type="button" id="saveBusVinly">Save</button>
                                
                              </div>
                           </div>
                        </form>
                        </div>
                        <div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="other-tab">
                           <form id="InsertOtherVinly">
                              @csrf
                              <input type="hidden" name="outType" value="Other">
                              <input type="hidden" id="servicedata" name="carShopService" value="@if(isset($_GET['servicedata'])){{ $_GET['servicedata'] }} @endif" > 
                           <div class="form-box other-tab vinyl-content cmn-radio">
                              <div class="form-group">
                                 <div class="row d-flex align-items-center">
                                    <div class="col-lg-12 col-12">
                                       <span class="label-title">
                                       <label class="cmn-label">Service Completed:</label>
                                       </span>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                       <span class="input-wrap">
                                       <textarea class="form-control" rows="3" name="other_service_competed">@if($checkotherData) {{$checkotherData->other_service_competed}} @endif</textarea>
                                       </span>
                                    </div>
                                 </div>
                              </div>
                              <div class="other-content-max">
                                 <div class="form-group my-4 align-items-center">
                                    <div class="row">
                                       <div class="col-lg-12 col-12">
                                          <label class="p-0 cmn-label">BRAND WRAP:</label>
                                       </div>
                                       <div class="col-lg-12 col-12">
                                          <input class="form-control border-0" style="height:35px" name="other_brand_wrap" value="@if($checkotherData) {{$checkotherData->other_brand_wrap}} @endif">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group my-4 align-items-center">
                                    <div class="row">
                                       <div class="col-lg-12 col-12">
                                          <label class="p-0 cmn-label">WRAP COLOR:</label>
                                       </div>
                                       <div class="col-lg-12 col-12">
                                          <input class="form-control border-0" style="height:35px" name="other_wrap_color"  value="@if($checkotherData) {{$checkotherData->other_wrap_color}} @endif">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row align-items-center vinyl-other-warranty">
                                    <div class="col-12 col-md-4">
                                       <label class="cmn-label">WARRANTY:</label>
                                    </div>
                                    <div class="col-12 col-md-8 d-flex">
                                       <div class="manage-notifications__item custom-check custom-check--with-label custom-check--with-label-xl mt-0">
                                          <div class="custom-check__field-wr m-0">
                                             <input class="custom-check__field notifications" id="vinyl-other-warn1" type="radio" value="Yes" name="vinyl_other_warranty"  @if($checkotherData) @if($checkotherData->warranty=='Yes') checked @endif  @endif>
                                             <div class="custom-check__customize">
                                                <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M1 7.66667L7 12.3333L12.3333 1" stroke="white"></path>
                                                </svg>
                                             </div>
                                          </div>
                                          <label class="custom-check__label cmn-label" for="serviceCheck">Yes</label>
                                       </div>
                                       <div class="manage-notifications__item custom-check custom-check--with-label custom-check--with-label-xl mt-0">
                                          <div class="custom-check__field-wr">
                                             <input class="custom-check__field notifications" id="vinyl-other-warn2" type="radio" value="No" name="vinyl_other_warranty" @if($checkotherData) @if($checkotherData->warranty=='No') checked @endif d @endif>
                                             <div class="custom-check__customize">
                                                <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M1 7.66667L7 12.3333L12.3333 1" stroke="white"></path>
                                                </svg>
                                             </div>
                                          </div>
                                          <label class="custom-check__label cmn-label" for="serviceCheck">No</label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group my-4 align-items-center mb-0">
                                    <div class="row">
                                       <div class="col-lg-12 col-12">
                                          <label class="p-0 cmn-label">WARRANTY COMPANY:</label>
                                       </div>
                                       <div class="col-lg-12 col-12">
                                          <input class="form-control border-0" name="other_warranty_company" style="height:35px" value="@if($checkotherData) {{$checkotherData->warranty_company}} @endif">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-box">
                                 <div class="form-group">
                                    <div class="upload-wrap">
                                       <div class="row d-flex align-items-center">
                                          <div class="col-md-4 col-12">
                                             <button class="btn uplaod">UPLOAD <br /> Photos & Docs <input type="file" name="image_uploaded[]" id="insert_image_uploaded5" class="form-control image_uploaded" value="Upload" multiple="multiple"> </button>
                                          </div>
                                          <div class="col-md-8 col-12 text-center display_image_list"  id="display_image_list">
                                             <ul></ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              {{-- <button class="car-adding__btn btn btn--accent saveVinly cmn-btn" type="button" id="saveOtherVinly">Save</button> --}}
                              <div class="cmn-btn-wrap">
                                 {{-- <a href="{{$redirectUrl}}"  class="car-adding__btn btn btn--accent cmn-btn btn btn-danger redirectUrl m-0">Back</a> --}}
                              <button class="car-adding__btn btn btn--accent cmn-btn saveVinly" type="button" id="saveOtherVinly">Save</button>
                                
                              </div>
                           </div>
                        </form>
                        </div>
                     </div>
                  </div>
              
            </div>
            </div>
            @include('shop-settings.partials.rightvinnumber')
         </div>
      </div>
   </div>
</div>
</main>
@endsection