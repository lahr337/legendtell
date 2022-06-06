@extends('layout.default')
<!-- leftcode -->
@section('content')
@include('shop-settings.leftshowmenu')
<div class="account-settings__content-wr">
   <div class="account-settings__content-form">
      <div class="grid-view-shop">
         <div class="common-wrap common-wrap-bg-none">
            <div class="cmn-content">
               <div class="cmn-detailing">
                  <div class="mechanic cmn-mx-55 text-center cmn-radio">
                     <h4>You can change your vehicle type selection if needed:</h4>
                     <div class="custom-input custom-input--default custom-input--with-label-above settings-form__field settings-form__field--state">
                        <div class="custom-input__field-wr fv-row">
                           <select class="custom-input__field" id="state" name="state" type="text" >
                              <option value="">-select </option>
                              <option>Car - Sedan</option>
                              <option>Car - Coupe</option>
                              <option>Truck</option>
                              <option>SUV - X-Large</option>
                              <option>SUV</option>
                              <option>RV</option>
                              <option>Camper - Small</option>
                              <option>Camper - Large</option>
                              <option>Van - Family</option>
                              <option>Van - Small</option>
                              <option>Van - Large</option>
                              <option>Van - Hauler</option>
                              <option>Bus</option>
                              <option>Commercial Truck - Small</option>
                              <option>Commercial Truck - Medium</option>
                              <option>Commercial Truck - Large</option>
                              <option>18-Wheeler Cab</option>
                              <option>Travel Trailer</option>
                           </select>
                        </div>
                        <div class="btn-group" role="group">
                           <div class="form-btnw-wrap">
                              <input type="radio" class="btn-check" value="Micron ( µm )" name="units1" id="units1" autocomplete="off" checked>
                              <label for="units1">Micron ( µm )</label>
                           </div>
                           <div class="form-btnw-wrap">
                              <input type="radio" class="btn-check" value="Millimeter (mils)" name="units1" id="units2" autocomplete="off">
                              <label for="units2">Millimeter (mils)</label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-12 col-md-12">
                        <div class="wheeler-1 cmn-input" data-bs-toggle="modal" href="#exampleModalToggle" role="button">
                           <img src="/assets/images/details-page/1/wheeler-cab.jpg" class="vehicle-full-1 d-none">
                           <img src="/assets/images/details-page/bus/bus.jpg" class="vehicle-full-2 d-none">
                           <img src="/assets/images/details-page/camper-lg/camper-lg.jpg" class="vehicle-full-3">
                        </div>
                     </div>
                  </div>
                  <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                     <div class="modal-dialog modal-dialog-centered vehicle-modal">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                           </div>
                           <div class="modal-body">
                              <div class="vehicle-1 d-none">
                                 <div class="row justify-content-center">
                                    <div class="col-12 col-md-2 space-between">
                                       <div class="wheeler-1 cmn-input">
                                          <img src="/assets/images/details-page/1/vehicle-1.png">
                                          <input type="text" value="" class="wheeler-input1" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input2" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input3" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input4" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input5" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input6" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input7" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input8" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input9" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input10" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input11" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input12" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input13" placeholder="0" />
                                       </div>
                                       <div class="wheeler-2 cmn-input">
                                          <img src="/assets/images/details-page/1/vehicle-2.png">
                                          <input type="text" value="" class="wheeler-input14" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input15" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input16" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input17" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input18" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input19" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input20" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input21" placeholder="0" />
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-5 space-between">
                                       <div class="wheeler-3 cmn-input">
                                          <img src="/assets/images/details-page/1/vehicle-3.png">
                                          <input type="text" value="" class="wheeler-input22" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input23" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input24" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input25" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input26" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input27" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input28" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input29" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input30" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input31" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input32" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input33" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input34" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input35" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input36" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input37" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input38" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input39" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input40" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input41" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input42" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input43" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input44" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input45" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input46" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input47" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input48" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input49" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input50" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input51" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input52" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input53" placeholder="0" />
                                       </div>
                                       <div class="wheeler-4 cmn-input">
                                          <img src="/assets/images/details-page/1/vehicle-4.png">
                                          <input type="text" value="" class="wheeler-input54" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input55" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input56" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input57" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input58" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input59" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input60" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input61" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input62" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input63" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input65" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input66" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input67" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input68" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input69" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input70" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input71" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input72" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input73" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input74" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input75" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input76" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input77" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input78" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input79" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input80" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input81" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input82" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input84" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input85" placeholder="0" />
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-2 space-between">
                                       <div class="wheeler-5 cmn-input">
                                          <img src="/assets/images/details-page/1/vehicle-5.png">
                                          <input type="text" value="" class="wheeler-input86" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input87" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input88" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input89" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input90" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input91" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input92" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input93" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input94" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input95" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input96" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input97" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input98" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input99" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input100" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input101" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input102" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input103" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input104" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input105" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input106" placeholder="0" />
                                          <input type="text" value="" class="wheeler-input107" placeholder="0" />
                                       </div>
                                    </div>
                                 </div>
                                 <button class="car-adding__btn btn btn--accent insertvinform cmn-btn mt-5" type="submit">Save</button>
                              </div>

                              <div class="vehicle-2 d-none">
                                 <div class="row justify-content-center">
                                    <div class="col-12 col-md-2 space-between">
                                       <div class="bus-1 cmn-input">
                                          <img src="/assets/images/details-page/bus/front-view.png">
                                          <input type="text" value="" class="bus-input1" placeholder="0" />
                                          <input type="text" value="" class="bus-input2" placeholder="0" />
                                          <input type="text" value="" class="bus-input3" placeholder="0" />
                                          <input type="text" value="" class="bus-input4" placeholder="0" />
                                          <input type="text" value="" class="bus-input5" placeholder="0" />
                                          <input type="text" value="" class="bus-input6" placeholder="0" />
                                          <input type="text" value="" class="bus-input7" placeholder="0" />
                                          <input type="text" value="" class="bus-input8" placeholder="0" />
                                          <input type="text" value="" class="bus-input9" placeholder="0" />
                                          <input type="text" value="" class="bus-input10" placeholder="0" />
                                          <input type="text" value="" class="bus-input11" placeholder="0" />
                                          <input type="text" value="" class="bus-input12" placeholder="0" />
                                          <input type="text" value="" class="bus-input13" placeholder="0" />
                                          <input type="text" value="" class="bus-input14" placeholder="0" />
                                          <input type="text" value="" class="bus-input15" placeholder="0" />
                                          <input type="text" value="" class="bus-input16" placeholder="0" />
                                       </div>
                                       <div class="bus-2 cmn-input">
                                          <img src="/assets/images/details-page/bus/back-view.png">
                                          <input type="text" value="" class="bus-input17" placeholder="0" />
                                          <input type="text" value="" class="bus-input18" placeholder="0" />
                                          <input type="text" value="" class="bus-input19" placeholder="0" />
                                          <input type="text" value="" class="bus-input20" placeholder="0" />
                                          <input type="text" value="" class="bus-input21" placeholder="0" />
                                          <input type="text" value="" class="bus-input22" placeholder="0" />
                                          <input type="text" value="" class="bus-input23" placeholder="0" />
                                          <input type="text" value="" class="bus-input24" placeholder="0" />
                                          <input type="text" value="" class="bus-input25" placeholder="0" />
                                          <input type="text" value="" class="bus-input26" placeholder="0" />
                                          <input type="text" value="" class="bus-input27" placeholder="0" />
                                          <input type="text" value="" class="bus-input28" placeholder="0" />
                                          <input type="text" value="" class="bus-input29" placeholder="0" />
                                          <input type="text" value="" class="bus-input30" placeholder="0" />
                                          <input type="text" value="" class="bus-input31" placeholder="0" />
                                          <input type="text" value="" class="bus-input32" placeholder="0" />
                                          <input type="text" value="" class="bus-input33" placeholder="0" />
                                          <input type="text" value="" class="bus-input34" placeholder="0" />
                                          <input type="text" value="" class="bus-input35" placeholder="0" />
                                          <input type="text" value="" class="bus-input36" placeholder="0" />
                                          <input type="text" value="" class="bus-input37" placeholder="0" />
                                          <input type="text" value="" class="bus-input38" placeholder="0" />
                                          <input type="text" value="" class="bus-input39" placeholder="0" />
                                          <input type="text" value="" class="bus-input40" placeholder="0" />
                                          
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-6 space-between">
                                       <div class="bus-3 cmn-input">
                                          <img src="/assets/images/details-page/bus/side-right.png">
                                          <input type="text" value="" class="bus-input41" placeholder="0" />
                                          <input type="text" value="" class="bus-input42" placeholder="0" />
                                          <input type="text" value="" class="bus-input43" placeholder="0" />
                                          <input type="text" value="" class="bus-input44" placeholder="0" />
                                          <input type="text" value="" class="bus-input45" placeholder="0" />
                                          <input type="text" value="" class="bus-input46" placeholder="0" />
                                          <input type="text" value="" class="bus-input47" placeholder="0" />
                                          <input type="text" value="" class="bus-input48" placeholder="0" />
                                          <input type="text" value="" class="bus-input49" placeholder="0" />
                                          <input type="text" value="" class="bus-input50" placeholder="0" />
                                          <input type="text" value="" class="bus-input51" placeholder="0" />
                                          <input type="text" value="" class="bus-input52" placeholder="0" />
                                          <input type="text" value="" class="bus-input53" placeholder="0" />
                                          <input type="text" value="" class="bus-input54" placeholder="0" />
                                          <input type="text" value="" class="bus-input55" placeholder="0" />
                                          <input type="text" value="" class="bus-input56" placeholder="0" />
                                          <input type="text" value="" class="bus-input57" placeholder="0" />
                                          <input type="text" value="" class="bus-input58" placeholder="0" />
                                          <input type="text" value="" class="bus-input59" placeholder="0" />
                                          <input type="text" value="" class="bus-input60" placeholder="0" />
                                          <input type="text" value="" class="bus-input61" placeholder="0" />
                                          <input type="text" value="" class="bus-input62" placeholder="0" />
                                          <input type="text" value="" class="bus-input63" placeholder="0" />
                                          <input type="text" value="" class="bus-input64" placeholder="0" />
                                          <input type="text" value="" class="bus-input65" placeholder="0" />
                                          <input type="text" value="" class="bus-input66" placeholder="0" />
                                          <input type="text" value="" class="bus-input67" placeholder="0" />
                                          <input type="text" value="" class="bus-input68" placeholder="0" />
                                          <input type="text" value="" class="bus-input69" placeholder="0" />
                                          <input type="text" value="" class="bus-input70" placeholder="0" />
                                          <input type="text" value="" class="bus-input71" placeholder="0" />
                                          <input type="text" value="" class="bus-input72" placeholder="0" />
                                          <input type="text" value="" class="bus-input73" placeholder="0" />
                                          <input type="text" value="" class="bus-input74" placeholder="0" />
                                          <input type="text" value="" class="bus-input75" placeholder="0" />
                                          <input type="text" value="" class="bus-input76" placeholder="0" />
                                          <input type="text" value="" class="bus-input77" placeholder="0" />
                                          <input type="text" value="" class="bus-input78" placeholder="0" />
                                          <input type="text" value="" class="bus-input79" placeholder="0" />
                                          <input type="text" value="" class="bus-input80" placeholder="0" />
                                          <input type="text" value="" class="bus-input81" placeholder="0" />
                                          <input type="text" value="" class="bus-input82" placeholder="0" />
                                          <input type="text" value="" class="bus-input83" placeholder="0" />
                                          <input type="text" value="" class="bus-input84" placeholder="0" />
                                          <input type="text" value="" class="bus-input85" placeholder="0" />
                                          <input type="text" value="" class="bus-input86" placeholder="0" />
                                          <input type="text" value="" class="bus-input87" placeholder="0" />
                                          <input type="text" value="" class="bus-input88" placeholder="0" />
                                          <input type="text" value="" class="bus-input89" placeholder="0" />
                                          <input type="text" value="" class="bus-input90" placeholder="0" />
                                          <input type="text" value="" class="bus-input91" placeholder="0" />
                                          <input type="text" value="" class="bus-input92" placeholder="0" />
                                          <input type="text" value="" class="bus-input93" placeholder="0" />
                                          <input type="text" value="" class="bus-input94" placeholder="0" />
                                          <input type="text" value="" class="bus-input95" placeholder="0" />
                                          <input type="text" value="" class="bus-input96" placeholder="0" />
                                          <input type="text" value="" class="bus-input97" placeholder="0" />
                                          <input type="text" value="" class="bus-input98" placeholder="0" />
                                          <input type="text" value="" class="bus-input99" placeholder="0" />
                                          <input type="text" value="" class="bus-input100" placeholder="0" />
                                          <input type="text" value="" class="bus-input101" placeholder="0" />
                                          <input type="text" value="" class="bus-input102" placeholder="0" />
                                          <input type="text" value="" class="bus-input103" placeholder="0" />
                                          <input type="text" value="" class="bus-input104" placeholder="0" />
                                          <input type="text" value="" class="bus-input105" placeholder="0" />
                                          <input type="text" value="" class="bus-input106" placeholder="0" />
                                       </div>
                                       <div class="bus-4 cmn-input">
                                          <img src="/assets/images/details-page/bus/side-left.png">
                                          <input type="text" value="" class="bus-input107" placeholder="0" />
                                          <input type="text" value="" class="bus-input108" placeholder="0" />
                                          <input type="text" value="" class="bus-input109" placeholder="0" />
                                          <input type="text" value="" class="bus-input110" placeholder="0" />
                                          <input type="text" value="" class="bus-input111" placeholder="0" />
                                          <input type="text" value="" class="bus-input112" placeholder="0" />
                                          <input type="text" value="" class="bus-input113" placeholder="0" />
                                          <input type="text" value="" class="bus-input114" placeholder="0" />
                                          <input type="text" value="" class="bus-input115" placeholder="0" />
                                          <input type="text" value="" class="bus-input116" placeholder="0" />
                                          <input type="text" value="" class="bus-input117" placeholder="0" />
                                          <input type="text" value="" class="bus-input118" placeholder="0" />
                                          <input type="text" value="" class="bus-input119" placeholder="0" />
                                          <input type="text" value="" class="bus-input120" placeholder="0" />
                                          <input type="text" value="" class="bus-input121" placeholder="0" />
                                          <input type="text" value="" class="bus-input122" placeholder="0" />
                                          <input type="text" value="" class="bus-input123" placeholder="0" />
                                          <input type="text" value="" class="bus-input124" placeholder="0" />
                                          <input type="text" value="" class="bus-input125" placeholder="0" />
                                          <input type="text" value="" class="bus-input126" placeholder="0" />
                                          <input type="text" value="" class="bus-input127" placeholder="0" />
                                          <input type="text" value="" class="bus-input128" placeholder="0" />
                                          <input type="text" value="" class="bus-input129" placeholder="0" />
                                          <input type="text" value="" class="bus-input130" placeholder="0" />
                                          <input type="text" value="" class="bus-input131" placeholder="0" />
                                          <input type="text" value="" class="bus-input132" placeholder="0" />
                                          <input type="text" value="" class="bus-input133" placeholder="0" />
                                          <input type="text" value="" class="bus-input134" placeholder="0" />
                                          <input type="text" value="" class="bus-input135" placeholder="0" />
                                          <input type="text" value="" class="bus-input136" placeholder="0" />
                                          <input type="text" value="" class="bus-input137" placeholder="0" />
                                          <input type="text" value="" class="bus-input138" placeholder="0" />
                                          <input type="text" value="" class="bus-input139" placeholder="0" />
                                          <input type="text" value="" class="bus-input140" placeholder="0" />
                                          <input type="text" value="" class="bus-input141" placeholder="0" />
                                          <input type="text" value="" class="bus-input142" placeholder="0" />
                                          <input type="text" value="" class="bus-input143" placeholder="0" />
                                          <input type="text" value="" class="bus-input144" placeholder="0" />
                                          <input type="text" value="" class="bus-input145" placeholder="0" />
                                          <input type="text" value="" class="bus-input146" placeholder="0" />
                                          <input type="text" value="" class="bus-input147" placeholder="0" />
                                          <input type="text" value="" class="bus-input148" placeholder="0" />
                                          <input type="text" value="" class="bus-input149" placeholder="0" />
                                          <input type="text" value="" class="bus-input150" placeholder="0" />
                                          <input type="text" value="" class="bus-input151" placeholder="0" />
                                          <input type="text" value="" class="bus-input152" placeholder="0" />
                                          <input type="text" value="" class="bus-input153" placeholder="0" />
                                          <input type="text" value="" class="bus-input154" placeholder="0" />
                                          <input type="text" value="" class="bus-input154" placeholder="0" />
                                          <input type="text" value="" class="bus-input155" placeholder="0" />
                                          <input type="text" value="" class="bus-input156" placeholder="0" />
                                          <input type="text" value="" class="bus-input157" placeholder="0" />
                                          <input type="text" value="" class="bus-input158" placeholder="0" />
                                          <input type="text" value="" class="bus-input159" placeholder="0" />
                                          <input type="text" value="" class="bus-input160" placeholder="0" />
                                          <input type="text" value="" class="bus-input161" placeholder="0" />
                                          <input type="text" value="" class="bus-input162" placeholder="0" />
                                          <input type="text" value="" class="bus-input163" placeholder="0" />
                                          <input type="text" value="" class="bus-input164" placeholder="0" />
                                          <input type="text" value="" class="bus-input165" placeholder="0" />
                                          <input type="text" value="" class="bus-input166" placeholder="0" />
                                          <input type="text" value="" class="bus-input167" placeholder="0" />
                                          <input type="text" value="" class="bus-input168" placeholder="0" />
                                          <input type="text" value="" class="bus-input169" placeholder="0" />
                                          <input type="text" value="" class="bus-input170" placeholder="0" />
                                          <input type="text" value="" class="bus-input171" placeholder="0" />
                                          <input type="text" value="" class="bus-input172" placeholder="0" />
                                          <input type="text" value="" class="bus-input173" placeholder="0" />
                                          <input type="text" value="" class="bus-input174" placeholder="0" />
                                          <input type="text" value="" class="bus-input175" placeholder="0" />
                                          <input type="text" value="" class="bus-input176" placeholder="0" />
                                          <input type="text" value="" class="bus-input177" placeholder="0" />
                                          <input type="text" value="" class="bus-input178" placeholder="0" />
                                          <input type="text" value="" class="bus-input179" placeholder="0" />
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-2 space-between">
                                       <div class="bus-5 cmn-input">
                                          <img src="/assets/images/details-page/bus/top-view.png">
                                          <input type="text" value="" class="bus-input180" placeholder="0" />
                                          <input type="text" value="" class="bus-input181" placeholder="0" />
                                          <input type="text" value="" class="bus-input182" placeholder="0" />
                                          <input type="text" value="" class="bus-input183" placeholder="0" />
                                          <input type="text" value="" class="bus-input184" placeholder="0" />
                                          <input type="text" value="" class="bus-input185" placeholder="0" />
                                          <input type="text" value="" class="bus-input186" placeholder="0" />
                                          <input type="text" value="" class="bus-input187" placeholder="0" />
                                          <input type="text" value="" class="bus-input188" placeholder="0" />
                                          <input type="text" value="" class="bus-input189" placeholder="0" />
                                          <input type="text" value="" class="bus-input190" placeholder="0" />
                                          <input type="text" value="" class="bus-input191" placeholder="0" />
                                          <input type="text" value="" class="bus-input192" placeholder="0" />
                                          <input type="text" value="" class="bus-input193" placeholder="0" />
                                          <input type="text" value="" class="bus-input194" placeholder="0" />
                                          <input type="text" value="" class="bus-input195" placeholder="0" />
                                          <input type="text" value="" class="bus-input196" placeholder="0" />
                                          <input type="text" value="" class="bus-input197" placeholder="0" />
                                          <input type="text" value="" class="bus-input198" placeholder="0" />
                                          <input type="text" value="" class="bus-input199" placeholder="0" />
                                          <input type="text" value="" class="bus-input200" placeholder="0" />
                                          <input type="text" value="" class="bus-input201" placeholder="0" />
                                          <input type="text" value="" class="bus-input202" placeholder="0" />
                                          <input type="text" value="" class="bus-input203" placeholder="0" />
                                          <input type="text" value="" class="bus-input204" placeholder="0" />
                                          <input type="text" value="" class="bus-input205" placeholder="0" />
                                          <input type="text" value="" class="bus-input206" placeholder="0" />
                                          <input type="text" value="" class="bus-input207" placeholder="0" />
                                          <input type="text" value="" class="bus-input208" placeholder="0" />
                                          <input type="text" value="" class="bus-input209" placeholder="0" />
                                          <input type="text" value="" class="bus-input210" placeholder="0" />
                                          <input type="text" value="" class="bus-input211" placeholder="0" />
                                          <input type="text" value="" class="bus-input212" placeholder="0" />
                                          <input type="text" value="" class="bus-input213" placeholder="0" />
                                          <input type="text" value="" class="bus-input214" placeholder="0" />
                                          <input type="text" value="" class="bus-input215" placeholder="0" />
                                          <input type="text" value="" class="bus-input216" placeholder="0" />
                                          <input type="text" value="" class="bus-input217" placeholder="0" />
                                          <input type="text" value="" class="bus-input218" placeholder="0" />
                                          <input type="text" value="" class="bus-input219" placeholder="0" />
                                          <input type="text" value="" class="bus-input220" placeholder="0" />
                                          <input type="text" value="" class="bus-input221" placeholder="0" />
                                          <input type="text" value="" class="bus-input222" placeholder="0" />
                                          <input type="text" value="" class="bus-input223" placeholder="0" />
                                          <input type="text" value="" class="bus-input224" placeholder="0" />
                                          <input type="text" value="" class="bus-input225" placeholder="0" />
                                          <input type="text" value="" class="bus-input226" placeholder="0" />
                                          <input type="text" value="" class="bus-input227" placeholder="0" />
                                          <input type="text" value="" class="bus-input228" placeholder="0" />
                                          <input type="text" value="" class="bus-input229" placeholder="0" />
                                          <input type="text" value="" class="bus-input230" placeholder="0" />
                                          <input type="text" value="" class="bus-input231" placeholder="0" />
                                          <input type="text" value="" class="bus-input232" placeholder="0" />
                                          <input type="text" value="" class="bus-input233" placeholder="0" />
                                          <input type="text" value="" class="bus-input234" placeholder="0" />
                                          <input type="text" value="" class="bus-input235" placeholder="0" />
                                          <input type="text" value="" class="bus-input236" placeholder="0" />
                                          <input type="text" value="" class="bus-input237" placeholder="0" />
                                          <input type="text" value="" class="bus-input238" placeholder="0" />
                                          <input type="text" value="" class="bus-input239" placeholder="0" />
                                          <input type="text" value="" class="bus-input240" placeholder="0" />
                                          <input type="text" value="" class="bus-input241" placeholder="0" />
                                          <input type="text" value="" class="bus-input242" placeholder="0" />
                                          <input type="text" value="" class="bus-input243" placeholder="0" />
                                          <input type="text" value="" class="bus-input244" placeholder="0" />
                                          <input type="text" value="" class="bus-input245" placeholder="0" />
                                          <input type="text" value="" class="bus-input246" placeholder="0" />
                                          <input type="text" value="" class="bus-input247" placeholder="0" />
                                          <input type="text" value="" class="bus-input248" placeholder="0" />
                                          <input type="text" value="" class="bus-input249" placeholder="0" />
                                          <input type="text" value="" class="bus-input250" placeholder="0" />
                                          <input type="text" value="" class="bus-input251" placeholder="0" />
                                          <input type="text" value="" class="bus-input252" placeholder="0" />
                                          <input type="text" value="" class="bus-input253" placeholder="0" />
                                          <input type="text" value="" class="bus-input254" placeholder="0" />
                                          <input type="text" value="" class="bus-input255" placeholder="0" />
                                          <input type="text" value="" class="bus-input256" placeholder="0" />
                                          <input type="text" value="" class="bus-input257" placeholder="0" />
                                          <input type="text" value="" class="bus-input258" placeholder="0" />
                                          <input type="text" value="" class="bus-input259" placeholder="0" />
                                          <input type="text" value="" class="bus-input260" placeholder="0" />
                                          <input type="text" value="" class="bus-input261" placeholder="0" />
                                          <input type="text" value="" class="bus-input262" placeholder="0" />
                                          <input type="text" value="" class="bus-input263" placeholder="0" />
                                          <input type="text" value="" class="bus-input264" placeholder="0" />
                                          <input type="text" value="" class="bus-input265" placeholder="0" />
                                          <input type="text" value="" class="bus-input266" placeholder="0" />
                                          <input type="text" value="" class="bus-input267" placeholder="0" />
                                          <input type="text" value="" class="bus-input268" placeholder="0" />
                                          <input type="text" value="" class="bus-input269" placeholder="0" />
                                          <input type="text" value="" class="bus-input270" placeholder="0" />
                                          <input type="text" value="" class="bus-input271" placeholder="0" />
                                          <input type="text" value="" class="bus-input272" placeholder="0" />
                                          <input type="text" value="" class="bus-input273" placeholder="0" />
                                          <input type="text" value="" class="bus-input274" placeholder="0" />
                                          <input type="text" value="" class="bus-input275" placeholder="0" />
                                          <input type="text" value="" class="bus-input276" placeholder="0" />
                                          <input type="text" value="" class="bus-input277" placeholder="0" />
                                          <input type="text" value="" class="bus-input278" placeholder="0" />
                                          <input type="text" value="" class="bus-input279" placeholder="0" />
                                          <input type="text" value="" class="bus-input280" placeholder="0" />
                                          <input type="text" value="" class="bus-input281" placeholder="0" />
                                       </div>
                                    </div>
                                 </div>
                                 <button class="car-adding__btn btn btn--accent insertvinform cmn-btn mt-5" type="submit">Save</button>
                              </div>

                              <div class="vehicle-3">
                                 <div class="row justify-content-center">
                                    <div class="col-12 col-md-8 space-between">
                                       <div class="camper-lg cmn-input">
                                          <img src="/assets/images/details-page/camper-lg/camper-lg-right.png">
                                          <input type="text" value="" class="camper-lg-1" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-2" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-3" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-4" placeholder="0" />  
                                          <input type="text" value="" class="camper-lg-5" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-6" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-7" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-8" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-9" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-10" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-11" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-12" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-13" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-14" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-15" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-16" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-17" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-18" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-19" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-20" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-21" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-22" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-23" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-24" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-25" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-26" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-27" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-28" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-29" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-30" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-31" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-32" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-33" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-34" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-35" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-36" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-37" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-38" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-39" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-40" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-41" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-42" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-43" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-44" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-45" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-46" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-47" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-48" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-49" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-50" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-51" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-52" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-53" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-54" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-55" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-56" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-57" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-58" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-59" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-60" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-61" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-62" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-63" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-64" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-65" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-66" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-67" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-68" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-69" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-70" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-71" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-72" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-73" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-74" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-75" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-76" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-77" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-78" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-79" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-80" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-81" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-82" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-83" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-84" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-85" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-86" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-87" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-88" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-89" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-90" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-91" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-92" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-93" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-94" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-95" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-96" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-97" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-98" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-99" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-100" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-101" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-102" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-103" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-104" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-105" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-106" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-107" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-108" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-109" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-110" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-111" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-112" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-113" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-114" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-115" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-116" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-117" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-118" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-119" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-120" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-121" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-122" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-123" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-124" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-125" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-127" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-128" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-129" placeholder="0" />
                                          
                                       </div>
                                       <div class="camper-lg cmn-input">
                                          <img src="/assets/images/details-page/camper-lg/camper-lg-left.png">
                                          <input type="text" value="" class="camper-lg-131" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-132" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-133" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-134" placeholder="0" />  
                                          <input type="text" value="" class="camper-lg-135" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-136" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-137" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-138" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-139" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-140" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-141" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-142" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-143" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-144" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-145" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-146" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-147" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-148" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-149" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-150" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-151" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-152" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-153" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-154" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-155" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-156" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-157" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-158" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-159" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-160" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-161" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-162" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-163" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-164" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-165" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-166" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-167" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-168" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-169" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-170" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-171" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-172" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-173" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-174" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-175" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-176" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-178" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-179" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-180" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-181" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-182" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-183" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-184" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-185" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-186" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-187" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-188" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-189" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-190" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-191" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-192" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-194" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-195" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-196" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-197" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-198" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-199" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-200" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-201" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-202" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-203" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-204" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-205" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-206" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-207" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-208" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-209" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-210" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-211" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-212" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-213" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-214" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-215" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-216" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-217" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-218" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-219" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-220" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-221" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-222" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-223" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-224" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-225" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-226" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-227" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-228" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-229" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-230" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-231" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-232" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-233" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-234" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-235" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-236" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-238" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-239" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-240" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-241" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-242" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-243" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-244" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-245" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-246" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-247" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-248" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-249" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-250" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-251" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-252" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-253" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-254" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-255" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-256" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-257" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-258" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-259" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-260" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-261" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-263" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-264" placeholder="0" />
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-2 space-between">
                                       <div class="camper-lg cmn-input">
                                          <img src="/assets/images/details-page/camper-lg/camper-lg-front.png"> 
                                          <input type="text" value="" class="camper-lg-265" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-266" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-267" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-268" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-269" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-270" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-271" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-272" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-273" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-274" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-275" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-276" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-277" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-278" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-279" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-280" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-281" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-282" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-283" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-284" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-285" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-286" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-287" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-288" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-289" placeholder="0" />
                                          <input type="text" value="" class="camper-lg-290" placeholder="0" />

                                       </div>
                                       <div class="camper-lg cmn-input">
                                          <img src="/assets/images/details-page/camper-lg/camper-lg-back.png">   
                                       </div>
                                    </div>
                                 </div>
                                 <button class="car-adding__btn btn btn--accent insertvinform cmn-btn mt-5" type="submit">Save</button>
                              </div>
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