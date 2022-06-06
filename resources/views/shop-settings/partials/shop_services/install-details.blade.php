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
                              <button class="nav-link navTabs active" id="car-tab" data-bs-toggle="tab" data-bs-target="#car" type="button" role="tab" aria-controls="car" aria-selected="true">Car/Truck/SUV</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link navTabs" id="van-tab" data-bs-toggle="tab" data-bs-target="#van" type="button" role="tab" aria-controls="van" aria-selected="false">VAN</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link navTabs" id="rv-tab" data-bs-toggle="tab" data-bs-target="#rv" type="button" role="tab" aria-controls="rv" aria-selected="false">RV</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link navTabs" id="trailer-tab" data-bs-toggle="tab" data-bs-target="#trailer" type="button" role="tab" aria-controls="trailer" aria-selected="false">TRAILER</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link navTabs" id="bus-tab" data-bs-toggle="tab" data-bs-target="#bus" type="button" role="tab" aria-controls="bus" aria-selected="false">BUS</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link navTabs" id="other-tab" data-bs-toggle="tab" data-bs-target="#other" type="button" role="tab" aria-controls="other" aria-selected="false">OTHER</button>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade show active" id="car" role="tabpanel" aria-labelledby="car-tab">
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
                                                   <input type="radio" class="btn-check" name="btnradio1" id="vinyl-tab1" autocomplete="off" checked>
                                                   <label for="vinyl-tab1">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="btnradio1" id="vinyl-tab2" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="btnradio2" id="vinyl-tab3" autocomplete="off" checked>
                                                   <label for="vinyl-tab3">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="btnradio2" id="vinyl-tab4" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="btnradio3" id="vinyl-tab5" autocomplete="off" checked>
                                                   <label for="vinyl-tab5">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="btnradio3" id="vinyl-tab6" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="btnradio4" id="vinyl-tab7" autocomplete="off" checked>
                                                   <label for="vinyl-tab7">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="btnradio4" id="vinyl-tab8" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="btnradio5" id="vinyl-tab9" autocomplete="off" checked>
                                                   <label for="vinyl-tab9">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="btnradio5" id="vinyl-tab10" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="btnradio6" id="vinyl-tab11" autocomplete="off" checked>
                                                   <label for="vinyl-tab11">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="btnradio6" id="vinyl-tab12" autocomplete="off">
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
                                             <input class="form-control border-0" style="height:35px"></input>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group my-4 align-items-center">
                                       <div class="row">
                                          <div class="col-lg-12 col-12">
                                             <label class="p-0 cmn-label">WRAP COLOR:</label>
                                          </div>
                                          <div class="col-lg-12 col-12">
                                             <input class="form-control border-0" style="height:35px"></input>
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
                                                   <input type="radio" class="btn-check" name="btnradio7" id="vinyl-tab13" autocomplete="off" checked>
                                                   <label for="vinyl-tab13">YES</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="btnradio7" id="vinyl-tab14" autocomplete="off">
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
                                             <input class="form-control border-0" style="height:35px"></input>
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
                                                   <input type="radio" class="btn-check" name="btnradio8" id="vinyl-tab15" autocomplete="off" checked>
                                                   <label for="vinyl-tab15">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="btnradio8" id="vinyl-tab16" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="btnradio9" id="vinyl-tab17" autocomplete="off" checked>
                                                   <label for="vinyl-tab17">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="btnradio9" id="vinyl-tab18" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="btnradio10" id="vinyl-tab19" autocomplete="off" checked>
                                                   <label for="vinyl-tab19">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="btnradio10" id="vinyl-tab20" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="btnradio11" id="vinyl-tab21" autocomplete="off" checked>
                                                   <label for="vinyl-tab21">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="btnradio11" id="vinyl-tab22" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="btnradio12" id="vinyl-tab23" autocomplete="off" checked>
                                                   <label for="vinyl-tab23">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="btnradio12" id="vinyl-tab24" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="btnradio13" id="vinyl-tab25" autocomplete="off" checked>
                                                   <label for="vinyl-tab25">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="btnradio13" id="vinyl-tab26" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="btnradio14" id="vinyl-tab27" autocomplete="off" checked>
                                                   <label for="vinyl-tab27">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="btnradio14" id="vinyl-tab28" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="btnradio15" id="vinyl-tab29" autocomplete="off" checked>
                                                   <label for="vinyl-tab29">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="btnradio15" id="vinyl-tab30" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="btnradio16" id="vinyl-tab31" autocomplete="off" checked>
                                                   <label for="vinyl-tab31">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="btnradio16" id="vinyl-tab32" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="btnradio17" id="vinyl-tab33" autocomplete="off" checked>
                                                   <label for="vinyl-tab33">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="btnradio17" id="vinyl-tab34" autocomplete="off">
                                                   <label for="vinyl-tab34">Full</label>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="row align-items-center">
                                       <div class="col-12 col-md-12">
                                          <ul class="cmn-radio">
                                             <li>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="btnradio18" id="vinyl-tab35" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="btnradio19" id="vinyl-tab36" autocomplete="off" checked>
                                                   <label for="vinyl-tab36">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="btnradio19" id="vinyl-tab37" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="btnradio20" id="vinyl-tab38" autocomplete="off" checked>
                                                   <label for="vinyl-tab38">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="btnradio20" id="vinyl-tab39" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="btnradio21" id="vinyl-tab40" autocomplete="off" checked>
                                                   <label for="vinyl-tab40">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="btnradio21" id="vinyl-tab41" autocomplete="off">
                                                   <label for="vinyl-tab41">Full</label>
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
                                                   <input type="radio" class="btn-check" name="btnradio22" id="vinyl-tab42" autocomplete="off" checked>
                                                   <label for="vinyl-tab42">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="btnradio22" id="vinyl-tab43" autocomplete="off">
                                                   <label for="vinyl-tab43">Full</label>
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
                                                   <input type="radio" class="btn-check" name="btnradio23" id="vinyl-tab44" autocomplete="off" checked>
                                                   <label for="vinyl-tab44">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="btnradio23" id="vinyl-tab45" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="btnradio24" id="vinyl-tab46" autocomplete="off" checked>
                                                   <label for="vinyl-tab46">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="btnradio24" id="vinyl-tab47" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="btnradio25" id="vinyl-tab48" autocomplete="off" checked>
                                                   <label for="vinyl-tab48">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="btnradio25" id="vinyl-tab49" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="btnradio26" id="vinyl-tab50" autocomplete="off" checked>
                                                   <label for="vinyl-tab50">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="btnradio26" id="vinyl-tab51" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="btnradio27" id="vinyl-tab52" autocomplete="off" checked>
                                                   <label for="vinyl-tab52">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="btnradio27" id="vinyl-tab53" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="btnradio28" id="vinyl-tab54" autocomplete="off" checked>
                                                   <label for="vinyl-tab54">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="btnradio28" id="vinyl-tab55" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="btnradio29" id="vinyl-tab56" autocomplete="off" checked>
                                                   <label for="vinyl-tab56">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="btnradio29" id="vinyl-tab57" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="btnradio30" id="vinyl-tab58" autocomplete="off" checked>
                                                   <label for="vinyl-tab58">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="btnradio30" id="vinyl-tab59" autocomplete="off">
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
                           <div class="install-btn-wrap">
                                <a class="car-adding__btn btn btn--accent cmn-btn back-btn">BACK TO FILM DETAILS</a>
                                <button class="car-adding__btn btn btn--accent insertAcdata cmn-btn bck-btn-float" type="button">Save</button>
                           </div>
                           
                        </div>
                     </div>

                     <!-- Van Tab -->
                     <div class="tab-pane fade" id="van" role="tabpanel" aria-labelledby="van-tab">
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
                                                   <input type="radio" class="btn-check" name="vantab1" id="vinyl-vantab1" autocomplete="off" checked>
                                                   <label for="vinyl-vantab1">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="vantab1" id="vinyl-vantab2" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="vantab2" id="vinyl-vantab3" autocomplete="off" checked>
                                                   <label for="vinyl-vantab3">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="vantab2" id="vinyl-vantab4" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="vantab3" id="vinyl-vantab5" autocomplete="off" checked>
                                                   <label for="vinyl-vantab5">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="vantab3" id="vinyl-vantab6" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="vantab4" id="vinyl-vantab7" autocomplete="off" checked>
                                                   <label for="vinyl-vantab7">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="vantab4" id="vinyl-vantab8" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="vantab5" id="vinyl-vantab9" autocomplete="off" checked>
                                                   <label for="vinyl-vantab9">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="vantab5" id="vinyl-vantab10" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="vantab6" id="vinyl-vantab11" autocomplete="off" checked>
                                                   <label for="vinyl-vantab11">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="vantab6" id="vinyl-vantab12" autocomplete="off">
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
                                             <input class="form-control border-0" style="height:35px"></input>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group my-4 align-items-center">
                                       <div class="row">
                                          <div class="col-lg-12 col-12">
                                             <label class="p-0 cmn-label">WRAP COLOR:</label>
                                          </div>
                                          <div class="col-lg-12 col-12">
                                             <input class="form-control border-0" style="height:35px"></input>
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
                                                   <input type="radio" class="btn-check" name="vantab7" id="vinyl-vantab13" autocomplete="off" checked>
                                                   <label for="vinyl-vantab13">YES</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="vantab7" id="vinyl-vantab14" autocomplete="off">
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
                                             <input class="form-control border-0" style="height:35px"></input>
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
                                                   <input type="radio" class="btn-check" name="vantab8" id="vinyl-vantab15" autocomplete="off" checked>
                                                   <label for="vinyl-vantab15">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="vantab8" id="vinyl-vantab16" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="vantab9" id="vinyl-vantab17" autocomplete="off" checked>
                                                   <label for="vinyl-vantab17">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="vantab9" id="vinyl-vantab18" autocomplete="off">
                                                   <label for="vinyl-vantab18">Full</label>
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
                                                   <input type="radio" class="btn-check" name="vantab10" id="vinyl-vantab19" autocomplete="off" checked>
                                                   <label for="vinyl-vantab19">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="vantab10" id="vinyl-vantab20" autocomplete="off">
                                                   <label for="vinyl-vantab20">Full</label>
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
                                                   <input type="radio" class="btn-check" name="vantab11" id="vinyl-vantab21" autocomplete="off" checked>
                                                   <label for="vinyl-vantab21">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="vantab11" id="vinyl-vantab22" autocomplete="off">
                                                   <label for="vinyl-vantab22">Full</label>
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
                                                   <input type="radio" class="btn-check" name="vantab12" id="vinyl-vantab23" autocomplete="off" checked>
                                                   <label for="vinyl-vantab23">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="vantab12" id="vinyl-vantab24" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="vantab13" id="vinyl-vantab25" autocomplete="off" checked>
                                                   <label for="vinyl-vantab25">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="vantab13" id="vinyl-vantab26" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="vantab14" id="vinyl-vantab27" autocomplete="off" checked>
                                                   <label for="vinyl-vantab27">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="vantab14" id="vinyl-vantab28" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="vantab15" id="vinyl-vantab29" autocomplete="off" checked>
                                                   <label for="vinyl-vantab29">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="vantab15" id="vinyl-vantab30" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="vantab16" id="vinyl-vantab31" autocomplete="off" checked>
                                                   <label for="vinyl-vantab31">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="vantab16" id="vinyl-vantab32" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="vantab17" id="vinyl-vantab33" autocomplete="off" checked>
                                                   <label for="vinyl-vantab33">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="vantab17" id="vinyl-vantab34" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="vantab18" id="vinyl-vantab35" autocomplete="off" checked>
                                                   <label for="vinyl-vantab35">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="vantab18" id="vinyl-vantab36" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="vantab19" id="vinyl-vantab37" autocomplete="off" checked>
                                                   <label for="vinyl-vantab37">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="vantab19" id="vinyl-vantab38" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="vantab20" id="vinyl-vantab39" autocomplete="off" checked>
                                                   <label for="vinyl-vantab39">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="vantab20" id="vinyl-vantab40" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="vantab21" id="vinyl-vantab41" autocomplete="off" checked>
                                                   <label for="vinyl-vantab41">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="vantab21" id="vinyl-vantab42" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="vantab22" id="vinyl-vantab43" autocomplete="off" checked>
                                                   <label for="vinyl-vantab43">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="vantab22" id="vinyl-vantab44" autocomplete="off">
                                                   <label for="vinyl-vantab44">Full</label>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="row align-items-center">
                                       
                                       <div class="col-12 col-md-12">
                                          <ul class="cmn-radio">
                                             <li>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="vantab23" id="vinyl-vantab45" autocomplete="off">
                                                   <label for="vinyl-vantab45">FULL VAN WRAP</label>
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
                           <div class="install-btn-wrap">
                                <a class="car-adding__btn btn btn--accent cmn-btn back-btn">BACK TO FILM DETAILS</a>
                                <button class="car-adding__btn btn btn--accent insertAcdata cmn-btn bck-btn-float" type="button">Save</button>
                           </div>
                        </div>
                     </div>

                     <!-- RV Tab -->
                     <div class="tab-pane fade" id="rv" role="tabpanel" aria-labelledby="rv-tab">
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
                                                   <input type="radio" class="btn-check" name="rvtab1" id="vinyl-rvtab1" autocomplete="off" checked>
                                                   <label for="vinyl-rvtab1">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="rvtab1" id="vinyl-rvtab2" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="rvtab2" id="vinyl-rvtab3" autocomplete="off" checked>
                                                   <label for="vinyl-rvtab3">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="rvtab2" id="vinyl-rvtab4" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="rvtab3" id="vinyl-rvtab5" autocomplete="off" checked>
                                                   <label for="vinyl-rvtab5">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="rvtab3" id="vinyl-rvtab6" autocomplete="off">
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
                                             <input class="form-control border-0" style="height:35px"></input>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group my-4 align-items-center">
                                       <div class="row">
                                          <div class="col-lg-12 col-12">
                                             <label class="p-0 cmn-label">WRAP COLOR:</label>
                                          </div>
                                          <div class="col-lg-12 col-12">
                                             <input class="form-control border-0" style="height:35px"></input>
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
                                                   <input type="radio" class="btn-check" name="rvtab4" id="vinyl-rvtab7" autocomplete="off" checked>
                                                   <label for="vinyl-rvtab7">YES</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="rvtab4" id="vinyl-rvtab8" autocomplete="off">
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
                                             <input class="form-control border-0" style="height:35px"></input>
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
                                                   <input type="radio" class="btn-check" name="rvtab5" id="vinyl-rvtab9" autocomplete="off" checked>
                                                   <label for="vinyl-rvtab9">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="rvtab5" id="vinyl-rvtab10" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="rvtab6" id="vinyl-rvtab11" autocomplete="off" checked>
                                                   <label for="vinyl-rvtab11">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="rvtab6" id="vinyl-rvtab12" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="rvtab7" id="vinyl-rvtab13" autocomplete="off" checked>
                                                   <label for="vinyl-rvtab13">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="rvtab7" id="vinyl-rvtab14" autocomplete="off">
                                                   <label for="vinyl-rvtab14">Full</label>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    
                                    <div class="row align-items-center">
                                       
                                       <div class="col-12 col-md-12">
                                          <ul class="cmn-radio">
                                             <li>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="rvtab8" id="vinyl-rvtab15" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="rvtab9" id="vinyl-rvtab16" autocomplete="off" checked>
                                                   <label for="vinyl-rvtab16">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="rvtab9" id="vinyl-rvtab17" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="rvtab10" id="vinyl-rvtab18" autocomplete="off" checked>
                                                   <label for="vinyl-rvtab18">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="rvtab10" id="vinyl-rvtab19" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="rvtab11" id="vinyl-rvtab20" autocomplete="off" checked>
                                                   <label for="vinyl-rvtab20">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="rvtab11" id="vinyl-rvtab21" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="rvtab12" id="vinyl-rvtab22" autocomplete="off" checked>
                                                   <label for="vinyl-rvtab22">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="rvtab12" id="vinyl-rvtab23" autocomplete="off">
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
                                          <button class="btn uplaod">UPLOAD <br /> Photos & Docs <input type="file" name="image_uploaded[]" id="insert_image_uploaded" class="form-control image_uploaded" value="Upload" multiple="multiple"> </button>
                                       </div>
                                       <div class="col-lg-8 col-12 text-center display_image_list"  id="display_image_list">
                                          <ul></ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="install-btn-wrap">
                                <a class="car-adding__btn btn btn--accent cmn-btn back-btn">BACK TO FILM DETAILS</a>
                                <button class="car-adding__btn btn btn--accent insertAcdata cmn-btn bck-btn-float" type="button">Save</button>
                           </div>
                        </div>
                     </div>

                     <!-- Trailer -->
                     <div class="tab-pane fade" id="trailer" role="tabpanel" aria-labelledby="trailer-tab">
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
                                                   <input type="radio" class="btn-check" name="trailertab1" id="vinyl-trailertab1" autocomplete="off" checked>
                                                   <label for="vinyl-trailertab1">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="trailertab1" id="vinyl-trailertab2" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="trailertab2" id="vinyl-trailertab3" autocomplete="off" checked>
                                                   <label for="vinyl-trailertab3">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="trailertab2" id="vinyl-trailertab4" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="trailertab3" id="vinyl-trailertab5" autocomplete="off" checked>
                                                   <label for="vinyl-trailertab5">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="trailertab3" id="vinyl-trailertab6" autocomplete="off">
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
                                             <input class="form-control border-0" style="height:35px"></input>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group my-4 align-items-center">
                                       <div class="row">
                                          <div class="col-lg-12 col-12">
                                             <label class="p-0 cmn-label">WRAP COLOR:</label>
                                          </div>
                                          <div class="col-lg-12 col-12">
                                             <input class="form-control border-0" style="height:35px"></input>
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
                                                   <input type="radio" class="btn-check" name="trailertab4" id="vinyl-trailertab7" autocomplete="off" checked>
                                                   <label for="vinyl-trailertab7">YES</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="trailertab4" id="vinyl-trailertab8" autocomplete="off">
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
                                             <input class="form-control border-0" style="height:35px"></input>
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
                                                   <input type="radio" class="btn-check" name="trailertab5" id="vinyl-trailertab9" autocomplete="off" checked>
                                                   <label for="vinyl-trailertab9">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="trailertab5" id="vinyl-trailertab10" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="trailertab6" id="vinyl-trailertab11" autocomplete="off" checked>
                                                   <label for="vinyl-trailertab11">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="trailertab6" id="vinyl-trailertab12" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="trailertab7" id="vinyl-trailertab13" autocomplete="off" checked>
                                                   <label for="vinyl-trailertab13">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="trailertab7" id="vinyl-trailertab14" autocomplete="off">
                                                   <label for="vinyl-trailertab14">Full</label>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    
                                    <div class="row align-items-center">
                                       
                                       <div class="col-12 col-md-12">
                                          <ul class="cmn-radio">
                                             <li>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="trailertab8" id="vinyl-trailertab15" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="trailertab9" id="vinyl-trailertab16" autocomplete="off" checked>
                                                   <label for="vinyl-trailertab16">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="trailertab9" id="vinyl-trailertab17" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="trailertab10" id="vinyl-trailertab18" autocomplete="off" checked>
                                                   <label for="vinyl-trailertab18">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="trailertab10" id="vinyl-trailertab19" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="trailertab11" id="vinyl-trailertab20" autocomplete="off" checked>
                                                   <label for="vinyl-trailertab20">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="trailertab11" id="vinyl-trailertab21" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="trailertab12" id="vinyl-trailertab22" autocomplete="off" checked>
                                                   <label for="vinyl-trailertab22">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="trailertab12" id="vinyl-trailertab23" autocomplete="off">
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
                                          <button class="btn uplaod">UPLOAD <br /> Photos & Docs <input type="file" name="image_uploaded[]" id="insert_image_uploaded" class="form-control image_uploaded" value="Upload" multiple="multiple"> </button>
                                       </div>
                                       <div class="col-lg-8 col-12 text-center display_image_list"  id="display_image_list">
                                          <ul></ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="install-btn-wrap">
                                <a class="car-adding__btn btn btn--accent cmn-btn back-btn">BACK TO FILM DETAILS</a>
                                <button class="car-adding__btn btn btn--accent insertAcdata cmn-btn bck-btn-float" type="button">Save</button>
                           </div>
                        </div>
                     </div>
                     <!-- Bus Tab -->
                     <div class="tab-pane fade" id="bus" role="tabpanel" aria-labelledby="bus-tab">
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
                                                   <input type="radio" class="btn-check" name="bustab1" id="vinyl-bustab1" autocomplete="off" checked>
                                                   <label for="vinyl-bustab1">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="bustab1" id="vinyl-bustab2" autocomplete="off">
                                                   <label for="vinyl-bustab2">Full</label>
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
                                                   <input type="radio" class="btn-check" name="bustab2" id="vinyl-bustab3" autocomplete="off" checked>
                                                   <label for="vinyl-bustab3">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="bustab2" id="vinyl-bustab4" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="bustab3" id="vinyl-bustab5" autocomplete="off" checked>
                                                   <label for="vinyl-bustab5">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="bustab3" id="vinyl-bustab6" autocomplete="off">
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
                                             <input class="form-control border-0" style="height:35px"></input>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group my-4 align-items-center">
                                       <div class="row">
                                          <div class="col-lg-12 col-12">
                                             <label class="p-0 cmn-label">WRAP COLOR:</label>
                                          </div>
                                          <div class="col-lg-12 col-12">
                                             <input class="form-control border-0" style="height:35px"></input>
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
                                                   <input type="radio" class="btn-check" name="bustab4" id="vinyl-bustab7" autocomplete="off" checked>
                                                   <label for="vinyl-bustab7">YES</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="bustab4" id="vinyl-bustab8" autocomplete="off">
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
                                             <input class="form-control border-0" style="height:35px"></input>
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
                                                   <input type="radio" class="btn-check" name="bustab5" id="vinyl-bustab9" autocomplete="off" checked>
                                                   <label for="vinyl-bustab9">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="bustab5" id="vinyl-bustab10" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="bustab6" id="vinyl-bustab11" autocomplete="off" checked>
                                                   <label for="vinyl-bustab11">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="bustab6" id="vinyl-bustab12" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="bustab7" id="vinyl-bustab13" autocomplete="off" checked>
                                                   <label for="vinyl-bustab13">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="bustab7" id="vinyl-bustab14" autocomplete="off">
                                                   <label for="vinyl-bustab14">Full</label>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    
                                    <div class="row align-items-center">
                                       
                                       <div class="col-12 col-md-12">
                                          <ul class="cmn-radio">
                                             <li>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="bustab8" id="vinyl-bustab15" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="bustab9" id="vinyl-bustab16" autocomplete="off" checked>
                                                   <label for="vinyl-bustab16">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="bustab9" id="vinyl-bustab17" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="bustab10" id="vinyl-bustab18" autocomplete="off" checked>
                                                   <label for="vinyl-bustab18">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="bustab10" id="vinyl-bustab19" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="bustab11" id="vinyl-bustab20" autocomplete="off" checked>
                                                   <label for="vinyl-bustab20">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="bustab11" id="vinyl-bustab21" autocomplete="off">
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
                                                   <input type="radio" class="btn-check" name="bustab12" id="vinyl-bustab22" autocomplete="off" checked>
                                                   <label for="vinyl-bustab22">Partial</label>
                                                </div>
                                                <div class="form-btnw-wrap">
                                                   <input type="radio" class="btn-check" name="bustab12" id="vinyl-bustab23" autocomplete="off">
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
                                          <button class="btn uplaod">UPLOAD <br /> Photos & Docs <input type="file" name="image_uploaded[]" id="insert_image_uploaded" class="form-control image_uploaded" value="Upload" multiple="multiple"> </button>
                                       </div>
                                       <div class="col-lg-8 col-12 text-center display_image_list"  id="display_image_list">
                                          <ul></ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="install-btn-wrap">
                                <a class="car-adding__btn btn btn--accent cmn-btn back-btn">BACK TO FILM DETAILS</a>
                                <button class="car-adding__btn btn btn--accent insertAcdata cmn-btn bck-btn-float" type="button">Save</button>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="other-tab">
                        <div class="form-box other-tab vinyl-content">
                           <div class="form-group">
                                 <div class="row d-flex align-items-center">
                                    <div class="col-lg-12 col-12">
                                       <span class="label-title">
                                          <label class="cmn-label">WRAP DETAILS AND NOTES OF PROJECT</label>
                                       </span>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                       <span class="input-wrap">
                                          <textarea class="form-control" rows="3"></textarea>
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
                                             <input class="form-control border-0" style="height:35px"></input>
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
                                                      <input class="custom-check__field notifications" id="vinyl-other-warn1" type="radio" value="25" name="vinyl-other-warn">
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
                                             <input class="custom-check__field notifications" id="vinyl-other-warn2" type="radio" value="25" name="vinyl-other-warn">
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
                                             <input class="form-control border-0" style="height:35px"></input>
                                          </div>
                                       </div>
                                    </div>
</div>
                                    <div class="form-box">
                              <div class="form-group">
                                 <div class="upload-wrap">
                                    <div class="row d-flex align-items-center">
                                       <div class="col-md-4 col-12">
                                          <button class="btn uplaod">UPLOAD <br /> Photos & Docs <input type="file" name="image_uploaded[]" id="insert_image_uploaded" class="form-control image_uploaded" value="Upload" multiple="multiple"> </button>
                                       </div>
                                       <div class="col-md-8 col-12 text-center display_image_list"  id="display_image_list">
                                          <ul></ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="install-btn-wrap">
                                <a class="car-adding__btn btn btn--accent cmn-btn back-btn">BACK TO FILM DETAILS</a>
                                <button class="car-adding__btn btn btn--accent insertAcdata cmn-btn bck-btn-float" type="button">Save</button>
                           </div>

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