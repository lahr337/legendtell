@extends('layout.default')
<!-- leftcode -->
@section('content')
@include('shop-settings.leftshowmenu')
<div class="account-settings__content-wr">
   <div class="account-settings__content-form">
      <div class="grid-view-shop">
         <div class="common-wrap">
            <div class="cmn-content">
               <div class="battery-service ppf cmn-radio">
                  <div class="btn-group cmn-mx-50" role="group">
                     <div class="form-btnw-wrap">
                        <input type="radio" class="btn-check" name="btnradio" id="ppf1" autocomplete="off" checked>
                        <label for="ppf1">FILM DETAILS</label>
                     </div>
                     <div class="form-btnw-wrap">
                        <a href="#">
                            <label for="ppf2">INSTALL DETAILS</label>
                        </a>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 col-12">
                        <div class="form-box mt-5">
                           <div class="form-group">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-4 col-12">
                                    <label class="p-0">FILM MANUFACTURER:</label>
                                 </div>
                                 <div class="col-md-8 col-12">
                                    <input type="text" class="form-control border-0" style="height:35px"></input>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-4 col-12">
                                    <label class="p-0">FILM THICKNESS:</label>
                                 </div>
                                 <div class="col-md-6 col-12">
                                    <div class="btn-group d-flex flex-row cmn-radio" role="group" style="column-gap: 10px;">
                                       <div class="form-btnw-wrap">
                                          <input type="radio" class="btn-check" value="8 MIL" name="btnradio1" id="btnradio1" autocomplete="off" checked>
                                          <label for="btnradio1">8 MIL</label>
                                       </div>
                                       <div class="form-btnw-wrap">
                                          <input type="radio" class="btn-check" value="10 MIL" name="btnradio1" id="btnradio2" autocomplete="off">
                                          <label for="btnradio2">10 MIL</label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-4 col-12">
                                    <label class="p-0">REGISTERED:</label>
                                 </div>
                                 <div class="col-md-6 col-12">
                                    <div class="btn-group d-flex flex-row cmn-radio" role="group" style="column-gap: 10px;">
                                       <div class="form-btnw-wrap">
                                          <input type="radio" class="btn-check" value="Yes" name="btnradio2" id="btnradio3" autocomplete="off" checked>
                                          <label for="btnradio3">YES</label>
                                       </div>
                                       <div class="form-btnw-wrap">
                                          <input type="radio" class="btn-check" value="No" name="btnradio2" id="btnradio4" autocomplete="off">
                                          <label for="btnradio4">NO</label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-4 col-12">
                                    <label class="p-0">REGISTERED COMPANY:</label>
                                 </div>
                                 <div class="col-md-8 col-12">
                                    <input type="text" class="form-control border-0" style="height:35px"></input>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-4 col-12">
                                    <label class="p-0">WARRANTY:</label>
                                 </div>
                                 <div class="col-md-6 col-12">
                                    <div class="btn-group d-flex flex-row cmn-radio" role="group" style="column-gap: 10px;">
                                       <div class="form-btnw-wrap">
                                          <input type="radio" class="btn-check" value="Yes" name="btnradio9" id="btnradio30" autocomplete="off" checked>
                                          <label for="btnradio30">YES</label>
                                       </div>
                                       <div class="form-btnw-wrap">
                                          <input type="radio" class="btn-check" value="No" name="btnradio9" id="btnradio31" autocomplete="off">
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
                                    <input class="form-control border-0" style="height:35px"></input>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-12">
                        <div class="form-box mt-5">
                           <div class="form-group">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-4 col-12">
                                    <label class="p-0">ANNUAL REQUIRED:</label>
                                 </div>
                                 <div class="col-md-6 col-12">
                                    <div class="btn-group d-flex flex-row cmn-radio" role="group" style="column-gap: 10px;">
                                       <div class="form-btnw-wrap">
                                          <input type="radio" class="btn-check" value="YES" name="btnradio3" id="btnradio5" autocomplete="off" checked>
                                          <label for="btnradio5">YES</label>
                                       </div>
                                       <div class="form-btnw-wrap">
                                          <input type="radio" class="btn-check" value="NO" name="btnradio3" id="btnradio6" autocomplete="off">
                                          <label for="btnradio6">NO</label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="row d-flex">
                                 <div class="col-md-4 col-12">
                                    <label class="p-0">ANNUAL COMPLETED:</label>
                                 </div>
                                 <div class="col-md-6 col-12">
                                    <div class="btn-group annual-year cmn-radio" role="group" style="column-gap: 10px;">
                                       <div class="form-btnw-wrap">
                                          <input type="radio" class="btn-check" value="YEAR 1" name="btnradio4" id="btnradio7" autocomplete="off" checked>
                                          <label for="btnradio7">YEAR 1</label>
                                       </div>
                                       <div class="form-btnw-wrap">
                                          <input type="radio" class="btn-check" value="YEAR 2" name="btnradio4" id="btnradio8" autocomplete="off">
                                          <label for="btnradio8">YEAR 2</label>
                                       </div>
                                       <div class="form-btnw-wrap">
                                          <input type="radio" class="btn-check" value="YEAR 3" name="btnradio4" id="btnradio9" autocomplete="off">
                                          <label for="btnradio9">YEAR 3</label>
                                       </div>
                                       <div class="form-btnw-wrap">
                                          <input type="radio" class="btn-check" value="YEAR 4" name="btnradio4" id="btnradio10" autocomplete="off">
                                          <label for="btnradio10">YEAR 4</label>
                                       </div>
                                       <div class="form-btnw-wrap">
                                          <input type="radio" class="btn-check" value="YEAR 5" name="btnradio4" id="btnradio11" autocomplete="off">
                                          <label for="btnradio11">YEAR 5</label>
                                       </div>
                                       <div class="form-btnw-wrap">
                                          <input type="radio" class="btn-check" value="YEAR 6" name="btnradio4" id="btnradio12" autocomplete="off">
                                          <label for="btnradio12">YEAR 6</label>
                                       </div>
                                       <div class="form-btnw-wrap">
                                          <input type="radio" class="btn-check" value="YEAR 7" name="btnradio4" id="btnradio13" autocomplete="off">
                                          <label for="btnradio13">YEAR 7</label>
                                       </div>
                                       <div class="form-btnw-wrap">
                                          <input type="radio" class="btn-check" value="YEAR 8" name="btnradio4" id="btnradio14" autocomplete="off">
                                          <label for="btnradio14">YEAR 8</label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           
                           <div class="form-group">
                              <div class="row d-flex">
                                 <div class="col-md-4 col-12">
                                    <label class="p-0">NOTES:</label>
                                 </div>
                                 <div class="col-md-8 col-12">
                                    <textarea class="form-control" rows="5"></textarea>
                                 </div>
                              </div>
                           </div>
                           
                           
                        </div>
                     </div>
                  </div>
                  <div class="form-box w-100">
                     <div class="form-group">
                        <div class="upload-wrap">
                           <div class="row align-items-center">
                              <div class="col-lg-4 col-12">
                                 <button class="btn uplaod">UPLOAD <br/>
                                 Photos & Docs<input type="file" name="products_uploaded[]" id="insert_products_uploaded" class="form-control products_uploaded" value="Upload" multiple="multiple"> </button>
                              </div>
                              <div class="col-lg-8 col-12 text-center">
                                 <ul>
                                    <li><span><button class="btn cross"></button><img src="/assets/images/pdf.png" alt=""></span></li>
                                    <li><span><button class="btn cross"></button><img src="/assets/images/pdf.png" alt=""></span></li>
                                    <li><span><button class="btn cross"></button><img src="/assets/images/pdf.png" alt=""></span></li>
                                    <li><span><button class="btn cross"></button><img src="/assets/images/pdf.png" alt=""></span></li>
                                    <li><span><button class="btn cross"></button><img src="/assets/images/pdf.png" alt=""></span></li>
                                 </ul>
                              </div>
                              <!--col-->
                           </div>
                           <!--row-->
                        </div>
                     </div>
                  </div>
                  <button class="car-adding__btn btn btn--accent insertvinform cmn-btn" type="submit">Save</button>
               </div>
            </div>
         </div>
         @include('shop-settings.partials.rightvinnumber')
      </div>
   </div>
</div>
</main>
@endsection