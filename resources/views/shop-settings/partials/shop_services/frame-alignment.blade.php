@extends('layout.default')
<!-- leftcode -->
@section('content')
@include('shop-settings.leftshowmenu')
<div class="account-settings__content-wr">
   <div class="account-settings__content-form">
      <div class="grid-view-shop">
         <div class="common-wrap">
            <div class="cmn-content">
               <div class="frame-align">
                  <div class="row align-items-center mb-5">
                     <div class="col-12 col-md-3">
                        <div class="ac_service_checklist_pdf">
                           <div class="chk_pdf_wrap"><img src="/assets/images/pdf.png"></div>
                           <button class="cmn-btn cmn-btn-dwnld" type="button">DOWNLOAD CHECKLIST</button>
                        </div>
                     </div>
                     <div class="col-12 col-md-9">
                        <ul class="nav nav-pills nav-tabs" role="tablist">
                           <li class="nav-item" role="presentation">
                              <button class="nav-link navTabs active" id="align-before-tab" data-bs-toggle="tab" data-bs-target="#align-before" type="button" role="tab" aria-controls="align-before" aria-selected="true">Alignment Before</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link navTabs" id="align-after-tab" data-bs-toggle="tab" data-bs-target="#align-after" type="button" role="tab" aria-controls="align-after" aria-selected="false">Alignment After</button>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="roww">
                     <div class="tabs-panel">
                        <div class="tab-content" id="myTabContent">
                           <div class="tab-pane fade show active" id="align-before" role="tabpanel" aria-labelledby="align-before-tab">
                              <div class="frame-wrap">
                              <h5 class="frame-title">Before Measurements</h5>
                              <div class="row">
                                 <div class="col-12 col-md-3">
                                    <ul class="align-wrap">
                                       <li class="left-align">
                                          <div class="form-box">
                                             <div class="form-group my-4 align-items-center">
                                                <label class="cmn-label p-0">Left Front</label>           
                                                <div class="float-input">
                                                   <input type="text" class="form-control border-0">
                                                   <input type="text" class="form-control border-0">
                                                </div>
                                                <input type="text" class="form-control border-0" style="height:35px">  
                                             </div>
                                          </div>
                                       </li>
                                       <li class="left-align">
                                          <div class="form-box">
                                             <div class="form-group my-4 align-items-center">
                                                <label class="cmn-label p-0">Camber</label>           
                                                <div class="float-input">
                                                   <input type="text" class="form-control border-0">
                                                   <input type="text" class="form-control border-0">
                                                </div>
                                                <input type="text" class="form-control border-0" style="height:35px">  
                                             </div>
                                          </div>
                                       </li>
                                       <li class="left-align">
                                          <div class="form-box">
                                             <div class="form-group my-4 align-items-center">
                                                <label class="cmn-label p-0">Caster</label>           
                                                <div class="float-input">
                                                   <input type="text" class="form-control border-0" style="height:35px">
                                                   <input type="text" class="form-control border-0" style="height:35px">
                                                </div>
                                                <input type="text" class="form-control border-0" style="height:35px">
                                                <label class="cmn-label p-0">Toe</label>             
                                             </div>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="col-12 col-md-6">
                                    <img src="/assets/images/front.png">
                                    <div class="row justify-content-center">
                                       <div class="col-12 col-md-6">
                                          <ul class="align-wrap">
                                             <li class="left-align">
                                                <div class="form-box">
                                                   <div class="form-group my-4 align-items-center">
                                                      <label class="cmn-label p-0">Front</label>           
                                                      <div class="float-input">
                                                         <input type="text" class="form-control border-0">
                                                         <input type="text" class="form-control border-0">
                                                      </div>
                                                      <input type="text" class="form-control border-0" style="height:35px"> 
                                                   </div>
                                                </div>
                                             </li>
                                             <li class="left-align">
                                                <div class="form-box">
                                                   <div class="form-group my-4 align-items-center">
                                                      <label class="cmn-label p-0">Total Toe</label>           
                                                      <div class="float-input">
                                                         <input type="text" class="form-control border-0">
                                                         <input type="text" class="form-control border-0">
                                                      </div>
                                                      <input type="text" class="form-control border-0" style="height:35px">
                                                      <label class="cmn-label p-0">Steer Ahead</label>  
                                                   </div>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-md-3">
                                    <ul class="align-wrap">
                                       <li class="left-align">
                                          <div class="form-box">
                                             <div class="form-group my-4 align-items-center">
                                                <label class="cmn-label p-0">Right Front</label>           
                                                <div class="float-input">
                                                   <input type="text" class="form-control border-0">
                                                   <input type="text" class="form-control border-0">
                                                </div>
                                                <input type="text" class="form-control border-0" style="height:35px">  
                                             </div>
                                          </div>
                                       </li>
                                       <li class="left-align">
                                          <div class="form-box">
                                             <div class="form-group my-4 align-items-center">
                                                <label class="cmn-label p-0">Camber</label>           
                                                <div class="float-input">
                                                   <input type="text" class="form-control border-0">
                                                   <input type="text" class="form-control border-0">
                                                </div>
                                                <input type="text" class="form-control border-0" style="height:35px">  
                                             </div>
                                          </div>
                                       </li>
                                       <li class="left-align">
                                          <div class="form-box">
                                             <div class="form-group my-4 align-items-center">
                                                <label class="cmn-label p-0">Caster</label>           
                                                <div class="float-input">
                                                   <input type="text" class="form-control border-0" style="height:35px">
                                                   <input type="text" class="form-control border-0" style="height:35px">
                                                </div>
                                                <input type="text" class="form-control border-0" style="height:35px">  
                                                <label class="cmn-label p-0">Toe</label>           
                                             </div>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-12 col-md-3">
                                    <ul class="align-wrap">
                                       <li class="left-align">
                                          <div class="form-box">
                                             <div class="form-group my-4 align-items-center">
                                                <label class="cmn-label p-0">Left Rear</label>           
                                                <div class="float-input">
                                                   <input type="text" class="form-control border-0">
                                                   <input type="text" class="form-control border-0">
                                                </div>
                                                <input type="text" class="form-control border-0" style="height:35px">  
                                             </div>
                                          </div>
                                       </li>
                                       <li class="left-align">
                                          <div class="form-box">
                                             <div class="form-group my-4 align-items-center">
                                                <label class="cmn-label p-0">Camber</label>           
                                                <div class="float-input">
                                                   <input type="text" class="form-control border-0">
                                                   <input type="text" class="form-control border-0">
                                                </div>
                                                <input type="text" class="form-control border-0" style="height:35px">  
                                                <label class="cmn-label p-0">Toe</label>
                                             </div>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="col-12 col-md-6">
                                    <img src="/assets/images/rear.png">
                                    <div class="row justify-content-center">
                                       <div class="col-12 col-md-6">
                                          <ul class="align-wrap">
                                             <li class="left-align">
                                                <div class="form-box">
                                                   <div class="form-group my-4 align-items-center">
                                                      <label class="cmn-label p-0">Rear</label>           
                                                      <div class="float-input">
                                                         <input type="text" class="form-control border-0">
                                                         <input type="text" class="form-control border-0">
                                                      </div>
                                                      <input type="text" class="form-control border-0" style="height:35px"> 
                                                      <label class="cmn-label p-0">Total Toe</label>
                                                   </div>
                                                </div>
                                             </li>
                                             <li class="left-align">
                                                <div class="form-box">
                                                   <div class="form-group my-4 align-items-center">
                                                      <div class="float-input">
                                                         <input type="text" class="form-control border-0">
                                                         <input type="text" class="form-control border-0">
                                                      </div>
                                                      <input type="text" class="form-control border-0" style="height:35px">
                                                      <label class="cmn-label p-0">Thrust Angle</label>  
                                                   </div>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-md-3">
                                    <ul class="align-wrap">
                                       <li class="left-align">
                                          <div class="form-box">
                                             <div class="form-group my-4 align-items-center">
                                                <label class="cmn-label p-0">Right Rear</label>           
                                                <div class="float-input">
                                                   <input type="text" class="form-control border-0">
                                                   <input type="text" class="form-control border-0">
                                                </div>
                                                <input type="text" class="form-control border-0" style="height:35px">  
                                             </div>
                                          </div>
                                       </li>
                                       <li class="left-align">
                                          <div class="form-box">
                                             <div class="form-group my-4 align-items-center">
                                                <label class="cmn-label p-0">Camber</label>           
                                                <div class="float-input">
                                                   <input type="text" class="form-control border-0">
                                                   <input type="text" class="form-control border-0">
                                                </div>
                                                <input type="text" class="form-control border-0" style="height:35px"> 
                                                <label class="cmn-label p-0">Toe</label> 
                                             </div>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                              <button class="car-adding__btn btn btn--accent insertAcdata cmn-btn mt-4" type="button">Next</button>
                           </div>
                           <!-- Van Tab -->
                           <div class="tab-pane fade" id="align-after" role="tabpanel" aria-labelledby="align-after-tab">
                           <div class="frame-wrap">
                           <h5 class="frame-title">Current Measurements</h5>
                              <div class="row">
                                 <div class="col-12 col-md-3">
                                    <ul class="align-wrap">
                                       <li class="left-align">
                                          <div class="form-box">
                                             <div class="form-group my-4 align-items-center">
                                                <label class="cmn-label p-0">Left Front</label>           
                                                <div class="float-input">
                                                   <input type="text" class="form-control border-0">
                                                   <input type="text" class="form-control border-0">
                                                </div>
                                                <input type="text" class="form-control border-0" style="height:35px">  
                                             </div>
                                          </div>
                                       </li>
                                       <li class="left-align">
                                          <div class="form-box">
                                             <div class="form-group my-4 align-items-center">
                                                <label class="cmn-label p-0">Camber</label>           
                                                <div class="float-input">
                                                   <input type="text" class="form-control border-0">
                                                   <input type="text" class="form-control border-0">
                                                </div>
                                                <input type="text" class="form-control border-0" style="height:35px">  
                                             </div>
                                          </div>
                                       </li>
                                       <li class="left-align">
                                          <div class="form-box">
                                             <div class="form-group my-4 align-items-center">
                                                <label class="cmn-label p-0">Caster</label>           
                                                <div class="float-input">
                                                   <input type="text" class="form-control border-0" style="height:35px">
                                                   <input type="text" class="form-control border-0" style="height:35px">
                                                </div>
                                                <input type="text" class="form-control border-0" style="height:35px">
                                                <label class="cmn-label p-0">Toe</label>             
                                             </div>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="col-12 col-md-6">
                                    <img src="/assets/images/front.png">
                                    <div class="row justify-content-center">
                                       <div class="col-12 col-md-6">
                                          <ul class="align-wrap">
                                             <li class="left-align">
                                                <div class="form-box">
                                                   <div class="form-group my-4 align-items-center">
                                                      <label class="cmn-label p-0">Front</label>           
                                                      <div class="float-input">
                                                         <input type="text" class="form-control border-0">
                                                         <input type="text" class="form-control border-0">
                                                      </div>
                                                      <input type="text" class="form-control border-0" style="height:35px"> 
                                                   </div>
                                                </div>
                                             </li>
                                             <li class="left-align">
                                                <div class="form-box">
                                                   <div class="form-group my-4 align-items-center">
                                                      <label class="cmn-label p-0">Total Toe</label>           
                                                      <div class="float-input">
                                                         <input type="text" class="form-control border-0">
                                                         <input type="text" class="form-control border-0">
                                                      </div>
                                                      <input type="text" class="form-control border-0" style="height:35px">
                                                      <label class="cmn-label p-0">Steer Ahead</label>  
                                                   </div>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-md-3">
                                    <ul class="align-wrap">
                                       <li class="left-align">
                                          <div class="form-box">
                                             <div class="form-group my-4 align-items-center">
                                                <label class="cmn-label p-0">Right Front</label>           
                                                <div class="float-input">
                                                   <input type="text" class="form-control border-0">
                                                   <input type="text" class="form-control border-0">
                                                </div>
                                                <input type="text" class="form-control border-0" style="height:35px">  
                                             </div>
                                          </div>
                                       </li>
                                       <li class="left-align">
                                          <div class="form-box">
                                             <div class="form-group my-4 align-items-center">
                                                <label class="cmn-label p-0">Camber</label>           
                                                <div class="float-input">
                                                   <input type="text" class="form-control border-0">
                                                   <input type="text" class="form-control border-0">
                                                </div>
                                                <input type="text" class="form-control border-0" style="height:35px">  
                                             </div>
                                          </div>
                                       </li>
                                       <li class="left-align">
                                          <div class="form-box">
                                             <div class="form-group my-4 align-items-center">
                                                <label class="cmn-label p-0">Caster</label>           
                                                <div class="float-input">
                                                   <input type="text" class="form-control border-0" style="height:35px">
                                                   <input type="text" class="form-control border-0" style="height:35px">
                                                </div>
                                                <input type="text" class="form-control border-0" style="height:35px">  
                                                <label class="cmn-label p-0">Toe</label>           
                                             </div>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-12 col-md-3">
                                    <ul class="align-wrap">
                                       <li class="left-align">
                                          <div class="form-box">
                                             <div class="form-group my-4 align-items-center">
                                                <label class="cmn-label p-0">Left Rear</label>           
                                                <div class="float-input">
                                                   <input type="text" class="form-control border-0">
                                                   <input type="text" class="form-control border-0">
                                                </div>
                                                <input type="text" class="form-control border-0" style="height:35px">  
                                             </div>
                                          </div>
                                       </li>
                                       <li class="left-align">
                                          <div class="form-box">
                                             <div class="form-group my-4 align-items-center">
                                                <label class="cmn-label p-0">Camber</label>           
                                                <div class="float-input">
                                                   <input type="text" class="form-control border-0">
                                                   <input type="text" class="form-control border-0">
                                                </div>
                                                <input type="text" class="form-control border-0" style="height:35px">  
                                                <label class="cmn-label p-0">Toe</label>
                                             </div>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="col-12 col-md-6">
                                    <img src="/assets/images/rear.png">
                                    <div class="row justify-content-center">
                                       <div class="col-12 col-md-6">
                                          <ul class="align-wrap">
                                             <li class="left-align">
                                                <div class="form-box">
                                                   <div class="form-group my-4 align-items-center">
                                                      <label class="cmn-label p-0">Rear</label>           
                                                      <div class="float-input">
                                                         <input type="text" class="form-control border-0">
                                                         <input type="text" class="form-control border-0">
                                                      </div>
                                                      <input type="text" class="form-control border-0" style="height:35px"> 
                                                      <label class="cmn-label p-0">Total Toe</label>
                                                   </div>
                                                </div>
                                             </li>
                                             <li class="left-align">
                                                <div class="form-box">
                                                   <div class="form-group my-4 align-items-center">
                                                      <div class="float-input">
                                                         <input type="text" class="form-control border-0">
                                                         <input type="text" class="form-control border-0">
                                                      </div>
                                                      <input type="text" class="form-control border-0" style="height:35px">
                                                      <label class="cmn-label p-0">Thrust Angle</label>  
                                                   </div>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-md-3">
                                    <ul class="align-wrap">
                                       <li class="left-align">
                                          <div class="form-box">
                                             <div class="form-group my-4 align-items-center">
                                                <label class="cmn-label p-0">Right Rear</label>           
                                                <div class="float-input">
                                                   <input type="text" class="form-control border-0">
                                                   <input type="text" class="form-control border-0">
                                                </div>
                                                <input type="text" class="form-control border-0" style="height:35px">  
                                             </div>
                                          </div>
                                       </li>
                                       <li class="left-align">
                                          <div class="form-box">
                                             <div class="form-group my-4 align-items-center">
                                                <label class="cmn-label p-0">Camber</label>           
                                                <div class="float-input">
                                                   <input type="text" class="form-control border-0">
                                                   <input type="text" class="form-control border-0">
                                                </div>
                                                <input type="text" class="form-control border-0" style="height:35px"> 
                                                <label class="cmn-label p-0">Toe</label> 
                                             </div>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                              <button class="car-adding__btn btn btn--accent insertAcdata cmn-btn mt-4" type="button">Save</button>
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