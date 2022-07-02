@extends('layout.default')
<!-- leftcode -->
@section('content')
@include('shop-settings.leftshowmenu')
<?php
$vehicle_type = $_GET['vehicle_type']

?>
<div class="account-settings__content-wr">
   <div class="account-settings__content-form">
      <div class="grid-view-shop">
         <div class="common-wrap common-wrap-bg-none">
            <div class="cmn-content">
               <div class="cmn-detailing">
                  <div class="mechanic cmn-mx-55 number-center cmn-radio">
                     <h4>You can change your vehicle type selection if needed:</h4>
                     <div class="custom-input custom-input--default custom-input--with-label-above settings-form__field settings-form__field--state">
                        <div class="custom-input__field-wr fv-row">
                           <select class="custom-input__field" id="vehicle_type" name="vehicle_type">
                              <option value="">-select </option>
                              <option value="Car - Sedan">Car - Sedan</option>
                              <option value="Car - Coupe">Car - Coupe</option>
                              <option value="Truck">Truck</option>
                              <option value="SUV - X-Large">SUV - X-Large</option>
                              <option value="SUV">SUV</option>
                              <option value="RV">RV</option>
                              <option value="Camper - Small">Camper - Small</option>
                              <option value="Camper - Large" @if($vehicle_type=='camper-lg' )selected @endif data-id="camper-lg">Camper - Large</option>
                              <option value="Van - Family">Van - Family</option>
                              <option value="Van - Small">Van - Small</option>
                              <option value="Van - Large">Van - Large</option>
                              <option value="Van - Hauler">Van - Hauler</option>
                              <option value="Bus" data-id="bus" @if($vehicle_type=='bus' )selected @endif>Bus</option>
                              <option value="Commercial Truck - Small">Commercial Truck - Small</option>
                              <option value="Commercial Truck - Medium">Commercial Truck - Medium</option>
                              <option value="Commercial Truck - Large">Commercial Truck - Large</option>
                              <option value="18-Wheeler Cab" @if($vehicle_type=='wheeler-cab' )selected @endif data-id="wheeler-cab">18-Wheeler Cab</option>
                              <option value="Travel Trailer">Travel Trailer</option>
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
                           <img src="/assets/images/details-page/1/wheeler-cab.jpg" class="vehicle-full-1 @if($vehicle_type != 'wheeler-cab')d-none @endif vehicle ">
                           <img src="/assets/images/details-page/bus/bus.jpg" class="vehicle-full-2 vehicle @if($vehicle_type != 'bus')d-none @endif" id="bus">
                           <img src="/assets/images/details-page/camper-lg/camper-lg.jpg" class="vehicle-full-3 @if($vehicle_type != 'camper-lg')d-none @endif vehicle">
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
                              <div class="vehicle-1 @if($vehicle_type != 'wheeler-cab')d-none @endif ">
                                 <form id="wheelercabData">
                                    @csrf
                                    <input type="hidden" id="servicedata" name="carShopService" value="@if(isset($_GET['servicedata'])){{$_GET['servicedata']}} @endif">
                                    <input type="hidden" name="vehicle_type" value="18-Wheeler Cab">
                                    <div class="row justify-content-center">
                                       <div class="col-12 col-md-2 space-between">
                                          <div class="wheeler-1 cmn-input">
                                             <img src="/assets/images/details-page/1/vehicle-1.png">
                                             <input type="number" value="" name="wheeler_cab_front_view_1" class="wheeler-input1" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_front_view_2" class="wheeler-input2" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_front_view_3" class="wheeler-input3" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_front_view_4" class="wheeler-input4" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_front_view_5" class="wheeler-input5" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_front_view_6" class="wheeler-input6" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_front_view_7" class="wheeler-input7" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_front_view_8" class="wheeler-input8" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_front_view_9" class="wheeler-input9" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_front_view_10" class="wheeler-input10" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_front_view_11" class="wheeler-input11" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_front_view_12" class="wheeler-input12" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_front_view_13" class="wheeler-input13" placeholder="0" />
                                          </div>
                                          <div class="wheeler-2 cmn-input">
                                             <img src="/assets/images/details-page/1/vehicle-2.png">
                                             <input type="number" value="" name="wheeler_cab_back_view_14" class="wheeler-input14" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_back_view_15" class="wheeler-input15" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_back_view_16" class="wheeler-input16" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_back_view_17" class="wheeler-input17" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_back_view_18" class="wheeler-input18" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_back_view_19" class="wheeler-input19" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_back_view_20" class="wheeler-input20" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_back_view_21" class="wheeler-input21" placeholder="0" />
                                          </div>
                                       </div>
                                       <div class="col-12 col-md-5 space-between">
                                          <div class="wheeler-3 cmn-input">
                                             <img src="/assets/images/details-page/1/vehicle-3.png">
                                             <input type="number" value="" name="wheeler_cab_right_side_22" class="wheeler-input22" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_right_side_23" class="wheeler-input23" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_right_side_24" class="wheeler-input24" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_right_side_25" class="wheeler-input25" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_right_side_26" class="wheeler-input26" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_right_side_27" class="wheeler-input27" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_right_side_28" class="wheeler-input28" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_right_side_29" class="wheeler-input29" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_right_side_30" class="wheeler-input30" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_right_side_31" class="wheeler-input31" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_right_side_32" class="wheeler-input32" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_right_side_33" class="wheeler-input33" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_right_side_34" class="wheeler-input34" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_right_side_35" class="wheeler-input35" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_right_side_36" class="wheeler-input36" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_right_side_37" class="wheeler-input37" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_right_side_38" class="wheeler-input38" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_right_side_39" class="wheeler-input39" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_right_side_40" class="wheeler-input40" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_right_side_41" class="wheeler-input41" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_right_side_42" class="wheeler-input42" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_right_side_43" class="wheeler-input43" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_right_side_44" class="wheeler-input44" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_right_side_45" class="wheeler-input45" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_right_side_46" class="wheeler-input46" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_right_side_47" class="wheeler-input47" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_right_side_48" class="wheeler-input48" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_right_side_49" class="wheeler-input49" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_right_side_50" class="wheeler-input50" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_right_side_51" class="wheeler-input51" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_right_side_52" class="wheeler-input52" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_right_side_53" class="wheeler-input53" placeholder="0" />
                                          </div>
                                          <div class="wheeler-4 cmn-input">
                                             <img src="/assets/images/details-page/1/vehicle-4.png">
                                             <input type="number" value="" name="wheeler_cab_left_side_54" class="wheeler-input54" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_left_side_55" class="wheeler-input55" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_left_side_56" class="wheeler-input56" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_left_side_57" class="wheeler-input57" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_left_side_58" class="wheeler-input58" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_left_side_59" class="wheeler-input59" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_left_side_60" class="wheeler-input60" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_left_side_61" class="wheeler-input61" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_left_side_62" class="wheeler-input62" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_left_side_63" class="wheeler-input63" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_left_side_64" class="wheeler-input65" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_left_side_65" class="wheeler-input66" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_left_side_66" class="wheeler-input67" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_left_side_67" class="wheeler-input68" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_left_side_68" class="wheeler-input69" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_left_side_69" class="wheeler-input70" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_left_side_70" class="wheeler-input71" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_left_side_71" class="wheeler-input72" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_left_side_72" class="wheeler-input73" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_left_side_73" class="wheeler-input74" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_left_side_74" class="wheeler-input75" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_left_side_75" class="wheeler-input76" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_left_side_76" class="wheeler-input77" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_left_side_77" class="wheeler-input78" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_left_side_78" class="wheeler-input79" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_left_side_79" class="wheeler-input80" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_left_side_80" class="wheeler-input81" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_left_side_81" class="wheeler-input82" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_left_side_82" class="wheeler-input84" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_left_side_83" class="wheeler-input85" placeholder="0" />
                                          </div>
                                       </div>
                                       <div class="col-12 col-md-2 space-between">
                                          <div class="wheeler-5 cmn-input">
                                             <img src="/assets/images/details-page/1/vehicle-5.png">
                                             <input type="number" value="" name="wheeler_cab_top_side_84" class="wheeler-input86" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_top_side_85" class="wheeler-input87" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_top_side_86" class="wheeler-input88" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_top_side_87" class="wheeler-input89" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_top_side_88" class="wheeler-input90" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_top_side_89" class="wheeler-input91" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_top_side_90" class="wheeler-input92" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_top_side_91" class="wheeler-input93" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_top_side_92" class="wheeler-input94" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_top_side_93" class="wheeler-input95" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_top_side_94" class="wheeler-input96" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_top_side_95" class="wheeler-input97" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_top_side_96" class="wheeler-input98" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_top_side_97" class="wheeler-input99" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_top_side_98" class="wheeler-input100" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_top_side_99" class="wheeler-input101" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_top_side_100" class="wheeler-input102" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_top_side_101" class="wheeler-input103" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_top_side_102" class="wheeler-input104" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_top_side_103" class="wheeler-input105" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_top_side_104" class="wheeler-input106" placeholder="0" />
                                             <input type="number" value="" name="wheeler_cab_top_side_105" class="wheeler-input107" placeholder="0" />
                                          </div>
                                       </div>
                                    </div>
                                    <button class="car-adding__btn btn btn--accent cmn-btn mt-5 saveVehicle" id="Wheeler-cab" type="button">Save</button>
                                 </form>
                              </div>

                              <div class="vehicle-2 @if($vehicle_type != 'bus')d-none @endif">
                              <form id="busData">
                                    @csrf
                                    <input type="hidden" id="servicedata" name="carShopService" value="@if(isset($_GET['servicedata'])){{$_GET['servicedata']}} @endif">
                                    <input type="hidden" name="vehicle_type" value="Bus">
                                 <div class="row justify-content-center">
                                    <div class="col-12 col-md-2 space-between">
                                       <div class="bus-1 cmn-input">
                                          <img src="/assets/images/details-page/bus/front-view.png">
                                          <input type="number" value="" name="front_view_1" class="bus-input1" placeholder="0" />
                                          <input type="number" value="" name="front_view_2" class="bus-input2" placeholder="0" />
                                          <input type="number" value="" name="front_view_3" class="bus-input3" placeholder="0" />
                                          <input type="number" value="" name="front_view_4" class="bus-input4" placeholder="0" />
                                          <input type="number" value="" name="front_view_5" class="bus-input5" placeholder="0" />
                                          <input type="number" value="" name="front_view_6" class="bus-input6" placeholder="0" />
                                          <input type="number" value="" name="front_view_7" class="bus-input7" placeholder="0" />
                                          <input type="number" value="" name="front_view_8" class="bus-input8" placeholder="0" />
                                          <input type="number" value="" name="front_view_9" class="bus-input9" placeholder="0" />
                                          <input type="number" value="" name="front_view_10" class="bus-input10" placeholder="0" />
                                          <input type="number" value="" name="front_view_11" class="bus-input11" placeholder="0" />
                                          <input type="number" value="" name="front_view_12" class="bus-input12" placeholder="0" />
                                          <input type="number" value="" name="front_view_13" class="bus-input13" placeholder="0" />
                                          <input type="number" value="" name="front_view_14" class="bus-input14" placeholder="0" />
                                          <input type="number" value="" name="front_view_15" class="bus-input15" placeholder="0" />
                                          <input type="number" value="" name="front_view_16" class="bus-input16" placeholder="0" />
                                       </div>
                                       <div class="bus-2 cmn-input">
                                          <img src="/assets/images/details-page/bus/back-view.png">
                                          <input type="number" value="" name="back_view_17" class="bus-input17" placeholder="0" />
                                          <input type="number" value="" name="back_view_18" class="bus-input18" placeholder="0" />
                                          <input type="number" value="" name="back_view_19" class="bus-input19" placeholder="0" />
                                          <input type="number" value="" name="back_view_20" class="bus-input20" placeholder="0" />
                                          <input type="number" value="" name="back_view_21" class="bus-input21" placeholder="0" />
                                          <input type="number" value="" name="back_view_22" class="bus-input22" placeholder="0" />
                                          <input type="number" value="" name="back_view_23" class="bus-input23" placeholder="0" />
                                          <input type="number" value="" name="back_view_24" class="bus-input24" placeholder="0" />
                                          <input type="number" value="" name="back_view_25" class="bus-input25" placeholder="0" />
                                          <input type="number" value="" name="back_view_26" class="bus-input26" placeholder="0" />
                                          <input type="number" value="" name="back_view_27" class="bus-input27" placeholder="0" />
                                          <input type="number" value="" name="back_view_28" class="bus-input28" placeholder="0" />
                                          <input type="number" value="" name="back_view_29" class="bus-input29" placeholder="0" />
                                          <input type="number" value="" name="back_view_30" class="bus-input30" placeholder="0" />
                                          <input type="number" value="" name="back_view_31" class="bus-input31" placeholder="0" />
                                          <input type="number" value="" name="back_view_32" class="bus-input32" placeholder="0" />
                                          <input type="number" value="" name="back_view_33" class="bus-input33" placeholder="0" />
                                          <input type="number" value="" name="back_view_34" class="bus-input34" placeholder="0" />
                                          <input type="number" value="" name="back_view_35" class="bus-input35" placeholder="0" />
                                          <input type="number" value="" name="back_view_36" class="bus-input36" placeholder="0" />
                                          <input type="number" value="" name="back_view_37" class="bus-input37" placeholder="0" />
                                          <input type="number" value="" name="back_view_38" class="bus-input38" placeholder="0" />
                                          <input type="number" value="" name="back_view_39" class="bus-input39" placeholder="0" />
                                          <input type="number" value="" name="back_view_40" class="bus-input40" placeholder="0" />

                                       </div>
                                    </div>
                                    <div class="col-12 col-md-6 space-between">
                                       <div class="bus-3 cmn-input">
                                          <img src="/assets/images/details-page/bus/side-right.png">
                                          <input type="number" value="" name="side_right_41" class="bus-input41" placeholder="0" />
                                          <input type="number" value="" name="side_right_42" class="bus-input42" placeholder="0" />
                                          <input type="number" value="" name="side_right_43" class="bus-input43" placeholder="0" />
                                          <input type="number" value="" name="side_right_44" class="bus-input44" placeholder="0" />
                                          <input type="number" value="" name="side_right_45" class="bus-input45" placeholder="0" />
                                          <input type="number" value="" name="side_right_46" class="bus-input46" placeholder="0" />
                                          <input type="number" value="" name="side_right_47" class="bus-input47" placeholder="0" />
                                          <input type="number" value="" name="side_right_48" class="bus-input48" placeholder="0" />
                                          <input type="number" value="" name="side_right_49" class="bus-input49" placeholder="0" />
                                          <input type="number" value="" name="side_right_50" class="bus-input50" placeholder="0" />
                                          <input type="number" value="" name="side_right_51" class="bus-input51" placeholder="0" />
                                          <input type="number" value="" name="side_right_52" class="bus-input52" placeholder="0" />
                                          <input type="number" value="" name="side_right_53" class="bus-input53" placeholder="0" />
                                          <input type="number" value="" name="side_right_54" class="bus-input54" placeholder="0" />
                                          <input type="number" value="" name="side_right_55" class="bus-input55" placeholder="0" />
                                          <input type="number" value="" name="side_right_56" class="bus-input56" placeholder="0" />
                                          <input type="number" value="" name="side_right_57" class="bus-input57" placeholder="0" />
                                          <input type="number" value="" name="side_right_58" class="bus-input58" placeholder="0" />
                                          <input type="number" value="" name="side_right_59" class="bus-input59" placeholder="0" />
                                          <input type="number" value="" name="side_right_60" class="bus-input60" placeholder="0" />
                                          <input type="number" value="" name="side_right_61" class="bus-input61" placeholder="0" />
                                          <input type="number" value="" name="side_right_62" class="bus-input62" placeholder="0" />
                                          <input type="number" value="" name="side_right_63" class="bus-input63" placeholder="0" />
                                          <input type="number" value="" name="side_right_64" class="bus-input64" placeholder="0" />
                                          <input type="number" value="" name="side_right_65" class="bus-input65" placeholder="0" />
                                          <input type="number" value="" name="side_right_66" class="bus-input66" placeholder="0" />
                                          <input type="number" value="" name="side_right_67" class="bus-input67" placeholder="0" />
                                          <input type="number" value="" name="side_right_68" class="bus-input68" placeholder="0" />
                                          <input type="number" value="" name="side_right_69" class="bus-input69" placeholder="0" />
                                          <input type="number" value="" name="side_right_70" class="bus-input70" placeholder="0" />
                                          <input type="number" value="" name="side_right_71" class="bus-input71" placeholder="0" />
                                          <input type="number" value="" name="side_right_72" class="bus-input72" placeholder="0" />
                                          <input type="number" value="" name="side_right_73" class="bus-input73" placeholder="0" />
                                          <input type="number" value="" name="side_right_74" class="bus-input74" placeholder="0" />
                                          <input type="number" value="" name="side_right_75" class="bus-input75" placeholder="0" />
                                          <input type="number" value="" name="side_right_76" class="bus-input76" placeholder="0" />
                                          <input type="number" value="" name="side_right_77" class="bus-input77" placeholder="0" />
                                          <input type="number" value="" name="side_right_78" class="bus-input78" placeholder="0" />
                                          <input type="number" value="" name="side_right_79" class="bus-input79" placeholder="0" />
                                          <input type="number" value="" name="side_right_80" class="bus-input80" placeholder="0" />
                                          <input type="number" value="" name="side_right_81" class="bus-input81" placeholder="0" />
                                          <input type="number" value="" name="side_right_82" class="bus-input82" placeholder="0" />
                                          <input type="number" value="" name="side_right_83" class="bus-input83" placeholder="0" />
                                          <input type="number" value="" name="side_right_84" class="bus-input84" placeholder="0" />
                                          <input type="number" value="" name="side_right_85" class="bus-input85" placeholder="0" />
                                          <input type="number" value="" name="side_right_86" class="bus-input86" placeholder="0" />
                                          <input type="number" value="" name="side_right_87" class="bus-input87" placeholder="0" />
                                          <input type="number" value="" name="side_right_88" class="bus-input88" placeholder="0" />
                                          <input type="number" value="" name="side_right_89" class="bus-input89" placeholder="0" />
                                          <input type="number" value="" name="side_right_90" class="bus-input90" placeholder="0" />
                                          <input type="number" value="" name="side_right_91" class="bus-input91" placeholder="0" />
                                          <input type="number" value="" name="side_right_92" class="bus-input92" placeholder="0" />
                                          <input type="number" value="" name="side_right_93" class="bus-input93" placeholder="0" />
                                          <input type="number" value="" name="side_right_94" class="bus-input94" placeholder="0" />
                                          <input type="number" value="" name="side_right_95" class="bus-input95" placeholder="0" />
                                          <input type="number" value="" name="side_right_96" class="bus-input96" placeholder="0" />
                                          <input type="number" value="" name="side_right_97" class="bus-input97" placeholder="0" />
                                          <input type="number" value="" name="side_right_98" class="bus-input98" placeholder="0" />
                                          <input type="number" value="" name="side_right_99" class="bus-input99" placeholder="0" />
                                          <input type="number" value="" name="side_right_100" class="bus-input100" placeholder="0" />
                                          <input type="number" value="" name="side_right_101" class="bus-input101" placeholder="0" />
                                          <input type="number" value="" name="side_right_102" class="bus-input102" placeholder="0" />
                                          <input type="number" value="" name="side_right_103" class="bus-input103" placeholder="0" />
                                          <input type="number" value="" name="side_right_104" class="bus-input104" placeholder="0" />
                                          <input type="number" value="" name="side_right_105" class="bus-input105" placeholder="0" />
                                          <input type="number" value="" name="side_right_106" class="bus-input106" placeholder="0" />
                                       </div>
                                       <div class="bus-4 cmn-input">
                                          <img src="/assets/images/details-page/bus/side-left.png">
                                          <input type="number" value="" name="side_left_107" class="bus-input107" placeholder="0" />
                                          <input type="number" value="" name="side_left_108" class="bus-input108" placeholder="0" />
                                          <input type="number" value="" name="side_left_109" class="bus-input109" placeholder="0" />
                                          <input type="number" value="" name="side_left_110" class="bus-input110" placeholder="0" />
                                          <input type="number" value="" name="side_left_111" class="bus-input111" placeholder="0" />
                                          <input type="number" value="" name="side_left_112" class="bus-input112" placeholder="0" />
                                          <input type="number" value="" name="side_left_113" class="bus-input113" placeholder="0" />
                                          <input type="number" value="" name="side_left_114" class="bus-input114" placeholder="0" />
                                          <input type="number" value="" name="side_left_115" class="bus-input115" placeholder="0" />
                                          <input type="number" value="" name="side_left_116" class="bus-input116" placeholder="0" />
                                          <input type="number" value="" name="side_left_117" class="bus-input117" placeholder="0" />
                                          <input type="number" value="" name="side_left_118" class="bus-input118" placeholder="0" />
                                          <input type="number" value="" name="side_left_119" class="bus-input119" placeholder="0" />
                                          <input type="number" value="" name="side_left_120" class="bus-input120" placeholder="0" />
                                          <input type="number" value="" name="side_left_121" class="bus-input121" placeholder="0" />
                                          <input type="number" value="" name="side_left_122" class="bus-input122" placeholder="0" />
                                          <input type="number" value="" name="side_left_123" class="bus-input123" placeholder="0" />
                                          <input type="number" value="" name="side_left_124" class="bus-input124" placeholder="0" />
                                          <input type="number" value="" name="side_left_125" class="bus-input125" placeholder="0" />
                                          <input type="number" value="" name="side_left_126" class="bus-input126" placeholder="0" />
                                          <input type="number" value="" name="side_left_127" class="bus-input127" placeholder="0" />
                                          <input type="number" value="" name="side_left_128" class="bus-input128" placeholder="0" />
                                          <input type="number" value="" name="side_left_129" class="bus-input129" placeholder="0" />
                                          <input type="number" value="" name="side_left_130" class="bus-input130" placeholder="0" />
                                          <input type="number" value="" name="side_left_131" class="bus-input131" placeholder="0" />
                                          <input type="number" value="" name="side_left_132" class="bus-input132" placeholder="0" />
                                          <input type="number" value="" name="side_left_133" class="bus-input133" placeholder="0" />
                                          <input type="number" value="" name="side_left_134" class="bus-input134" placeholder="0" />
                                          <input type="number" value="" name="side_left_135" class="bus-input135" placeholder="0" />
                                          <input type="number" value="" name="side_left_136" class="bus-input136" placeholder="0" />
                                          <input type="number" value="" name="side_left_137" class="bus-input137" placeholder="0" />
                                          <input type="number" value="" name="side_left_138" class="bus-input138" placeholder="0" />
                                          <input type="number" value="" name="side_left_139" class="bus-input139" placeholder="0" />
                                          <input type="number" value="" name="side_left_140" class="bus-input140" placeholder="0" />
                                          <input type="number" value="" name="side_left_141" class="bus-input141" placeholder="0" />
                                          <input type="number" value="" name="side_left_142" class="bus-input142" placeholder="0" />
                                          <input type="number" value="" name="side_left_143" class="bus-input143" placeholder="0" />
                                          <input type="number" value="" name="side_left_144" class="bus-input144" placeholder="0" />
                                          <input type="number" value="" name="side_left_145" class="bus-input145" placeholder="0" />
                                          <input type="number" value="" name="side_left_146" class="bus-input146" placeholder="0" />
                                          <input type="number" value="" name="side_left_147" class="bus-input147" placeholder="0" />
                                          <input type="number" value="" name="side_left_148" class="bus-input148" placeholder="0" />
                                          <input type="number" value="" name="side_left_149" class="bus-input149" placeholder="0" />
                                          <input type="number" value="" name="side_left_150" class="bus-input150" placeholder="0" />
                                          <input type="number" value="" name="side_left_151" class="bus-input151" placeholder="0" />
                                          <input type="number" value="" name="side_left_152" class="bus-input152" placeholder="0" />
                                          <input type="number" value="" name="side_left_153" class="bus-input153" placeholder="0" />
                                          <input type="number" value="" name="side_left_154" class="bus-input154" placeholder="0" />
                                          <input type="number" value="" name="side_left_155" class="bus-input154" placeholder="0" />
                                          <input type="number" value="" name="side_left_156" class="bus-input155" placeholder="0" />
                                          <input type="number" value="" name="side_left_157" class="bus-input156" placeholder="0" />
                                          <input type="number" value="" name="side_left_158" class="bus-input157" placeholder="0" />
                                          <input type="number" value="" name="side_left_159" class="bus-input158" placeholder="0" />
                                          <input type="number" value="" name="side_left_160" class="bus-input159" placeholder="0" />
                                          <input type="number" value="" name="side_left_161" class="bus-input160" placeholder="0" />
                                          <input type="number" value="" name="side_left_162" class="bus-input161" placeholder="0" />
                                          <input type="number" value="" name="side_left_163" class="bus-input162" placeholder="0" />
                                          <input type="number" value="" name="side_left_164" class="bus-input163" placeholder="0" />
                                          <input type="number" value="" name="side_left_165" class="bus-input164" placeholder="0" />
                                          <input type="number" value="" name="side_left_166" class="bus-input165" placeholder="0" />
                                          <input type="number" value="" name="side_left_167" class="bus-input166" placeholder="0" />
                                          <input type="number" value="" name="side_left_168" class="bus-input167" placeholder="0" />
                                          <input type="number" value="" name="side_left_169" class="bus-input168" placeholder="0" />
                                          <input type="number" value="" name="side_left_170" class="bus-input169" placeholder="0" />
                                          <input type="number" value="" name="side_left_171" class="bus-input170" placeholder="0" />
                                          <input type="number" value="" name="side_left_172" class="bus-input171" placeholder="0" />
                                          <input type="number" value="" name="side_left_173" class="bus-input172" placeholder="0" />
                                          <input type="number" value="" name="side_left_174" class="bus-input173" placeholder="0" />
                                          <input type="number" value="" name="side_left_175" class="bus-input174" placeholder="0" />
                                          <input type="number" value="" name="side_left_176" class="bus-input175" placeholder="0" />
                                          <input type="number" value="" name="side_left_177" class="bus-input176" placeholder="0" />
                                          <input type="number" value="" name="side_left_178" class="bus-input177" placeholder="0" />
                                          <input type="number" value="" name="side_left_179" class="bus-input178" placeholder="0" />
                                          <input type="number" value="" name="side_left_180" class="bus-input179" placeholder="0" />
                                          <input type="number" value="" name="side_left_181" class="bus-input179" placeholder="0" />
                                          <input type="number" value="" name="side_left_182" class="bus-input179" placeholder="0" />
                                          <input type="number" value="" name="side_left_183" class="bus-input179" placeholder="0" />
                                          <input type="number" value="" name="side_left_184" class="bus-input179" placeholder="0" />
                                          <input type="number" value="" name="side_left_185" class="bus-input179" placeholder="0" />
                                          <input type="number" value="" name="side_left_186" class="bus-input179" placeholder="0" />
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-2 space-between">
                                       <div class="bus-5 cmn-input">
                                          <img src="/assets/images/details-page/bus/top-view.png">
                                          <input type="number" value="" name="top_view_187" class="bus-input180" placeholder="0" />
                                          <input type="number" value="" name="top_view_188" class="bus-input181" placeholder="0" />
                                          <input type="number" value="" name="top_view_189" class="bus-input182" placeholder="0" />
                                          <input type="number" value="" name="top_view_190" class="bus-input183" placeholder="0" />
                                          <input type="number" value="" name="top_view_191" class="bus-input184" placeholder="0" />
                                          <input type="number" value="" name="top_view_192" class="bus-input185" placeholder="0" />
                                          <input type="number" value="" name="top_view_193" class="bus-input186" placeholder="0" />
                                          <input type="number" value="" name="top_view_194" class="bus-input187" placeholder="0" />
                                          <input type="number" value="" name="top_view_195" class="bus-input188" placeholder="0" />
                                          <input type="number" value="" name="top_view_196" class="bus-input189" placeholder="0" />
                                          <input type="number" value="" name="top_view_197" class="bus-input190" placeholder="0" />
                                          <input type="number" value="" name="top_view_198" class="bus-input191" placeholder="0" />
                                          <input type="number" value="" name="top_view_199" class="bus-input192" placeholder="0" />
                                          <input type="number" value="" name="top_view_200" class="bus-input193" placeholder="0" />
                                          <input type="number" value="" name="top_view_201" class="bus-input194" placeholder="0" />
                                          <input type="number" value="" name="top_view_202" class="bus-input195" placeholder="0" />
                                          <input type="number" value="" name="top_view_203" class="bus-input196" placeholder="0" />
                                          <input type="number" value="" name="top_view_204" class="bus-input197" placeholder="0" />
                                          <input type="number" value="" name="top_view_205" class="bus-input198" placeholder="0" />
                                          <input type="number" value="" name="top_view_206" class="bus-input199" placeholder="0" />
                                          <input type="number" value="" name="top_view_207" class="bus-input200" placeholder="0" />
                                          <input type="number" value="" name="top_view_208" class="bus-input201" placeholder="0" />
                                          <input type="number" value="" name="top_view_209" class="bus-input202" placeholder="0" />
                                          <input type="number" value="" name="top_view_210" class="bus-input203" placeholder="0" />
                                          <input type="number" value="" name="top_view_211" class="bus-input204" placeholder="0" />
                                          <input type="number" value="" name="top_view_212" class="bus-input205" placeholder="0" />
                                          <input type="number" value="" name="top_view_213" class="bus-input206" placeholder="0" />
                                          <input type="number" value="" name="top_view_214" class="bus-input207" placeholder="0" />
                                          <input type="number" value="" name="top_view_215" class="bus-input208" placeholder="0" />
                                          <input type="number" value="" name="top_view_216" class="bus-input209" placeholder="0" />
                                          <input type="number" value="" name="top_view_217" class="bus-input210" placeholder="0" />
                                          <input type="number" value="" name="top_view_218" class="bus-input211" placeholder="0" />
                                          <input type="number" value="" name="top_view_219" class="bus-input212" placeholder="0" />
                                          <input type="number" value="" name="top_view_220" class="bus-input213" placeholder="0" />
                                          <input type="number" value="" name="top_view_221" class="bus-input214" placeholder="0" />
                                          <input type="number" value="" name="top_view_222" class="bus-input215" placeholder="0" />
                                          <input type="number" value="" name="top_view_223" class="bus-input216" placeholder="0" />
                                          <input type="number" value="" name="top_view_224" class="bus-input217" placeholder="0" />
                                          <input type="number" value="" name="top_view_225" class="bus-input218" placeholder="0" />
                                          <input type="number" value="" name="top_view_226" class="bus-input219" placeholder="0" />
                                          <input type="number" value="" name="top_view_227" class="bus-input220" placeholder="0" />
                                          <input type="number" value="" name="top_view_228" class="bus-input221" placeholder="0" />
                                          <input type="number" value="" name="top_view_229" class="bus-input222" placeholder="0" />
                                          <input type="number" value="" name="top_view_230" class="bus-input223" placeholder="0" />
                                          <input type="number" value="" name="top_view_231" class="bus-input224" placeholder="0" />
                                          <input type="number" value="" name="top_view_232" class="bus-input225" placeholder="0" />
                                          <input type="number" value="" name="top_view_233" class="bus-input226" placeholder="0" />
                                          <input type="number" value="" name="top_view_234" class="bus-input227" placeholder="0" />
                                          <input type="number" value="" name="top_view_235" class="bus-input228" placeholder="0" />
                                          <input type="number" value="" name="top_view_236" class="bus-input229" placeholder="0" />
                                          <input type="number" value="" name="top_view_237" class="bus-input230" placeholder="0" />
                                          <input type="number" value="" name="top_view_238" class="bus-input231" placeholder="0" />
                                          <input type="number" value="" name="top_view_239" class="bus-input232" placeholder="0" />
                                          <input type="number" value="" name="top_view_240" class="bus-input233" placeholder="0" />
                                          <input type="number" value="" name="top_view_241" class="bus-input234" placeholder="0" />
                                          <input type="number" value="" name="top_view_242" class="bus-input235" placeholder="0" />
                                          <input type="number" value="" name="top_view_243" class="bus-input236" placeholder="0" />
                                          <input type="number" value="" name="top_view_244" class="bus-input237" placeholder="0" />
                                          <input type="number" value="" name="top_view_245" class="bus-input238" placeholder="0" />
                                          <input type="number" value="" name="top_view_246" class="bus-input239" placeholder="0" />
                                          <input type="number" value="" name="top_view_247" class="bus-input240" placeholder="0" />
                                          <input type="number" value="" name="top_view_248" class="bus-input241" placeholder="0" />
                                          <input type="number" value="" name="top_view_249" class="bus-input242" placeholder="0" />
                                          <input type="number" value="" name="top_view_250" class="bus-input243" placeholder="0" />
                                          <input type="number" value="" name="top_view_251" class="bus-input244" placeholder="0" />
                                          <input type="number" value="" name="top_view_252" class="bus-input245" placeholder="0" />
                                          <input type="number" value="" name="top_view_253" class="bus-input246" placeholder="0" />
                                          <input type="number" value="" name="top_view_254" class="bus-input247" placeholder="0" />
                                          <input type="number" value="" name="top_view_255" class="bus-input248" placeholder="0" />
                                          <input type="number" value="" name="top_view_256" class="bus-input249" placeholder="0" />
                                          <input type="number" value="" name="top_view_257" class="bus-input250" placeholder="0" />
                                          <input type="number" value="" name="top_view_258" class="bus-input251" placeholder="0" />
                                          <input type="number" value="" name="top_view_259" class="bus-input252" placeholder="0" />
                                          <input type="number" value="" name="top_view_260" class="bus-input253" placeholder="0" />
                                          <input type="number" value="" name="top_view_261" class="bus-input254" placeholder="0" />
                                          <input type="number" value="" name="top_view_262" class="bus-input255" placeholder="0" />
                                          <input type="number" value="" name="top_view_263" class="bus-input256" placeholder="0" />
                                          <input type="number" value="" name="top_view_264" class="bus-input257" placeholder="0" />
                                          <input type="number" value="" name="top_view_265" class="bus-input258" placeholder="0" />
                                          <input type="number" value="" name="top_view_266" class="bus-input259" placeholder="0" />
                                          <input type="number" value="" name="top_view_267" class="bus-input260" placeholder="0" />
                                          <input type="number" value="" name="top_view_268" class="bus-input261" placeholder="0" />
                                          <input type="number" value="" name="top_view_269" class="bus-input262" placeholder="0" />
                                          <input type="number" value="" name="top_view_270" class="bus-input263" placeholder="0" />
                                          <input type="number" value="" name="top_view_271" class="bus-input264" placeholder="0" />
                                          <input type="number" value="" name="top_view_272" class="bus-input265" placeholder="0" />
                                          <input type="number" value="" name="top_view_273" class="bus-input266" placeholder="0" />
                                          <input type="number" value="" name="top_view_274" class="bus-input267" placeholder="0" />
                                          <input type="number" value="" name="top_view_275" class="bus-input268" placeholder="0" />
                                          <input type="number" value="" name="top_view_276" class="bus-input269" placeholder="0" />
                                          <input type="number" value="" name="top_view_277" class="bus-input270" placeholder="0" />
                                          <input type="number" value="" name="top_view_278" class="bus-input271" placeholder="0" />
                                          <input type="number" value="" name="top_view_279" class="bus-input272" placeholder="0" />
                                          <input type="number" value="" name="top_view_280" class="bus-input273" placeholder="0" />
                                          <input type="number" value="" name="top_view_281" class="bus-input274" placeholder="0" />
                                          <input type="number" value="" name="top_view_282" class="bus-input275" placeholder="0" />
                                          <input type="number" value="" name="top_view_283" class="bus-input276" placeholder="0" />
                                          <input type="number" value="" name="top_view_284" class="bus-input277" placeholder="0" />
                                          <input type="number" value="" name="top_view_285" class="bus-input278" placeholder="0" />
                                          <input type="number" value="" name="top_view_286" class="bus-input279" placeholder="0" />
                                          <input type="number" value="" name="top_view_287" class="bus-input280" placeholder="0" />
                                          <input type="number" value="" name="top_view_288" class="bus-input281" placeholder="0" />
                                       </div>
                                    </div>
                                 </div>
                                 <button class="car-adding__btn btn btn--accent cmn-btn mt-5 saveVehicle" id="saveBus" type="button">Save</button>
                              </form>
                              </div>

                              <div class="vehicle-3 @if($vehicle_type != 'camper-lg')d-none @endif">
                              <form id="camperLargeData">
                                    @csrf
                                    <input type="hidden" id="servicedata" name="carShopService" value="@if(isset($_GET['servicedata'])){{$_GET['servicedata']}} @endif">
                                    <input type="hidden" name="vehicle_type" value="Camper - Large">
                                 <div class="row justify-content-center">
                                    <div class="col-12 col-md-8 space-between">
                                       <div class="camper-lg cmn-input">
                                          <img src="/assets/images/details-page/camper-lg/camper-lg-right.png">
                                          <input type="number" value="" name="camper_lg_right_1" class="camper-lg-1" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_2" class="camper-lg-2" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_3" class="camper-lg-3" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_4" class="camper-lg-4" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_5" class="camper-lg-5" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_6" class="camper-lg-6" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_7" class="camper-lg-7" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_8" class="camper-lg-8" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_9" class="camper-lg-9" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_10" class="camper-lg-10" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_11" class="camper-lg-11" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_12" class="camper-lg-12" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_13" class="camper-lg-13" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_14" class="camper-lg-14" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_15" class="camper-lg-15" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_16" class="camper-lg-16" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_17" class="camper-lg-17" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_18" class="camper-lg-18" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_19" class="camper-lg-19" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_20" class="camper-lg-20" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_21" class="camper-lg-21" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_22" class="camper-lg-22" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_23" class="camper-lg-23" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_24" class="camper-lg-24" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_25" class="camper-lg-25" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_26" class="camper-lg-26" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_27" class="camper-lg-27" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_28" class="camper-lg-28" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_29" class="camper-lg-29" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_30" class="camper-lg-30" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_31" class="camper-lg-31" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_32" class="camper-lg-32" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_33" class="camper-lg-33" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_34" class="camper-lg-34" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_35" class="camper-lg-35" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_36" class="camper-lg-36" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_37" class="camper-lg-37" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_38" class="camper-lg-38" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_39" class="camper-lg-39" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_40" class="camper-lg-40" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_41" class="camper-lg-41" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_42" class="camper-lg-42" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_43" class="camper-lg-43" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_44" class="camper-lg-44" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_45" class="camper-lg-45" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_46" class="camper-lg-46" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_47" class="camper-lg-47" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_48" class="camper-lg-48" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_49" class="camper-lg-49" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_50" class="camper-lg-50" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_51" class="camper-lg-51" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_52" class="camper-lg-52" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_53" class="camper-lg-53" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_54" class="camper-lg-54" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_55" class="camper-lg-55" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_56" class="camper-lg-56" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_57" class="camper-lg-57" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_58" class="camper-lg-58" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_59" class="camper-lg-59" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_60" class="camper-lg-60" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_61" class="camper-lg-61" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_62" class="camper-lg-62" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_63" class="camper-lg-63" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_64" class="camper-lg-64" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_65" class="camper-lg-65" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_66" class="camper-lg-66" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_67" class="camper-lg-67" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_68" class="camper-lg-68" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_69" class="camper-lg-69" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_70" class="camper-lg-70" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_71" class="camper-lg-71" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_72" class="camper-lg-72" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_73" class="camper-lg-73" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_74" class="camper-lg-74" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_75" class="camper-lg-75" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_76" class="camper-lg-76" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_77" class="camper-lg-77" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_78" class="camper-lg-78" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_79" class="camper-lg-79" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_80" class="camper-lg-80" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_81" class="camper-lg-81" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_82" class="camper-lg-82" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_83" class="camper-lg-83" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_84" class="camper-lg-84" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_85" class="camper-lg-85" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_86" class="camper-lg-86" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_87" class="camper-lg-87" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_88" class="camper-lg-88" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_89" class="camper-lg-89" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_90" class="camper-lg-90" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_91" class="camper-lg-91" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_92" class="camper-lg-92" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_93" class="camper-lg-93" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_94" class="camper-lg-94" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_95" class="camper-lg-95" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_96" class="camper-lg-96" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_97" class="camper-lg-97" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_98" class="camper-lg-98" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_99" class="camper-lg-99" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_100" class="camper-lg-100" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_101" class="camper-lg-101" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_102" class="camper-lg-102" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_103" class="camper-lg-103" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_104" class="camper-lg-104" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_105" class="camper-lg-105" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_106" class="camper-lg-106" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_107" class="camper-lg-107" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_108" class="camper-lg-108" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_109" class="camper-lg-109" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_110" class="camper-lg-110" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_111" class="camper-lg-111" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_112" class="camper-lg-112" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_113" class="camper-lg-113" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_114" class="camper-lg-114" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_115" class="camper-lg-115" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_116" class="camper-lg-116" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_117" class="camper-lg-117" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_118" class="camper-lg-118" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_119" class="camper-lg-119" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_120" class="camper-lg-120" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_121" class="camper-lg-121" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_122" class="camper-lg-122" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_123" class="camper-lg-123" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_124" class="camper-lg-124" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_125" class="camper-lg-125" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_126" class="camper-lg-127" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_127" class="camper-lg-128" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_right_128" class="camper-lg-129" placeholder="0" />

                                       </div>
                                       <div class="camper-lg cmn-input">
                                          <img src="/assets/images/details-page/camper-lg/camper-lg-left.png">
                                          <input type="number" value="" name="camper_lg_left_129" class="camper-lg-131" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_130" class="camper-lg-132" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_131" class="camper-lg-133" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_132" class="camper-lg-134" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_133" class="camper-lg-135" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_134" class="camper-lg-136" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_135" class="camper-lg-137" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_136" class="camper-lg-138" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_137" class="camper-lg-139" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_138" class="camper-lg-140" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_139" class="camper-lg-141" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_140" class="camper-lg-142" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_141" class="camper-lg-143" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_142" class="camper-lg-144" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_143" class="camper-lg-145" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_144" class="camper-lg-146" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_145" class="camper-lg-147" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_146" class="camper-lg-148" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_147" class="camper-lg-149" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_148" class="camper-lg-150" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_149" class="camper-lg-151" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_150" class="camper-lg-152" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_151" class="camper-lg-153" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_152" class="camper-lg-154" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_153" class="camper-lg-155" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_154" class="camper-lg-156" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_155" class="camper-lg-157" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_156" class="camper-lg-158" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_157" class="camper-lg-159" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_158" class="camper-lg-160" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_159" class="camper-lg-161" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_160" class="camper-lg-162" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_161" class="camper-lg-163" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_162" class="camper-lg-164" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_163" class="camper-lg-165" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_164" class="camper-lg-166" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_165" class="camper-lg-167" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_166" class="camper-lg-168" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_167" class="camper-lg-169" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_168" class="camper-lg-170" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_169" class="camper-lg-171" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_170" class="camper-lg-172" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_171" class="camper-lg-173" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_172" class="camper-lg-174" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_173" class="camper-lg-175" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_174" class="camper-lg-176" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_175" class="camper-lg-178" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_176" class="camper-lg-179" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_177" class="camper-lg-180" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_178" class="camper-lg-181" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_179" class="camper-lg-182" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_180" class="camper-lg-183" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_181" class="camper-lg-184" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_182" class="camper-lg-185" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_183" class="camper-lg-186" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_184" class="camper-lg-187" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_185" class="camper-lg-188" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_186" class="camper-lg-189" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_187" class="camper-lg-190" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_188" class="camper-lg-191" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_189" class="camper-lg-192" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_190" class="camper-lg-194" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_191" class="camper-lg-195" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_192" class="camper-lg-196" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_193" class="camper-lg-197" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_194" class="camper-lg-198" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_195" class="camper-lg-199" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_196" class="camper-lg-200" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_197" class="camper-lg-201" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_198" class="camper-lg-202" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_199" class="camper-lg-203" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_200" class="camper-lg-204" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_201" class="camper-lg-205" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_202" class="camper-lg-206" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_203" class="camper-lg-207" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_204" class="camper-lg-208" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_205" class="camper-lg-209" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_206" class="camper-lg-210" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_207" class="camper-lg-211" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_208" class="camper-lg-212" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_209" class="camper-lg-213" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_210" class="camper-lg-214" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_211" class="camper-lg-215" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_212" class="camper-lg-216" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_213" class="camper-lg-217" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_214" class="camper-lg-218" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_215" class="camper-lg-219" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_216" class="camper-lg-220" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_217" class="camper-lg-221" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_218" class="camper-lg-222" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_219" class="camper-lg-223" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_220" class="camper-lg-224" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_221" class="camper-lg-225" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_221" class="camper-lg-226" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_223" class="camper-lg-227" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_224" class="camper-lg-228" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_225" class="camper-lg-229" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_226" class="camper-lg-230" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_227" class="camper-lg-231" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_228" class="camper-lg-232" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_229" class="camper-lg-233" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_230" class="camper-lg-234" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_231" class="camper-lg-235" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_232" class="camper-lg-236" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_233" class="camper-lg-238" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_234" class="camper-lg-239" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_235" class="camper-lg-240" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_236" class="camper-lg-241" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_237" class="camper-lg-242" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_238" class="camper-lg-243" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_239" class="camper-lg-244" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_240" class="camper-lg-245" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_241" class="camper-lg-246" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_242" class="camper-lg-247" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_243" class="camper-lg-248" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_244" class="camper-lg-249" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_245" class="camper-lg-250" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_246" class="camper-lg-251" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_247" class="camper-lg-252" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_248" class="camper-lg-253" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_249" class="camper-lg-254" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_250" class="camper-lg-255" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_251" class="camper-lg-256" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_252" class="camper-lg-257" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_253" class="camper-lg-258" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_254" class="camper-lg-259" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_255" class="camper-lg-260" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_256" class="camper-lg-261" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_257" class="camper-lg-263" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_left_258" class="camper-lg-264" placeholder="0" />
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-2 space-between">
                                       <div class="camper-lg cmn-input">
                                          <img src="/assets/images/details-page/camper-lg/camper-lg-front.png">
                                          <input type="number" value="" name="camper_lg_front_259" class="camper-lg-265" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_260" class="camper-lg-266" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_261" class="camper-lg-267" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_262" class="camper-lg-268" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_263" class="camper-lg-269" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_264" class="camper-lg-270" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_265" class="camper-lg-271" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_266" class="camper-lg-272" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_267" class="camper-lg-273" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_268" class="camper-lg-274" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_269" class="camper-lg-275" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_270" class="camper-lg-276" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_271" class="camper-lg-277" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_272" class="camper-lg-278" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_273" class="camper-lg-279" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_274" class="camper-lg-280" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_275" class="camper-lg-281" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_276" class="camper-lg-282" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_277" class="camper-lg-283" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_278" class="camper-lg-284" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_279" class="camper-lg-285" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_280" class="camper-lg-286" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_281" class="camper-lg-287" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_282" class="camper-lg-288" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_283" class="camper-lg-289" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_284" class="camper-lg-290" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_285" class="camper-lg-291" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_286" class="camper-lg-292" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_287" class="camper-lg-293" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_288" class="camper-lg-294" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_289" class="camper-lg-295" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_290" class="camper-lg-296" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_291" class="camper-lg-297" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_292" class="camper-lg-298" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_293" class="camper-lg-299" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_294" class="camper-lg-300" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_295" class="camper-lg-301" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_296" class="camper-lg-302" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_297" class="camper-lg-303" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_front_298" class="camper-lg-304" placeholder="0" />



                                       </div>
                                       <div class="camper-lg cmn-input">
                                          <img src="/assets/images/details-page/camper-lg/camper-lg-back.png">
                                          <input type="number" value="" name="camper_lg_back_299" class="camper-lg-305" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_back_300" class="camper-lg-306" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_back_301" class="camper-lg-307" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_back_302" class="camper-lg-308" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_back_303" class="camper-lg-309" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_back_304" class="camper-lg-310" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_back_305" class="camper-lg-311" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_back_306" class="camper-lg-312" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_back_307" class="camper-lg-313" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_back_308" class="camper-lg-314" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_back_309" class="camper-lg-315" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_back_310" class="camper-lg-316" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_back_311" class="camper-lg-317" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_back_312" class="camper-lg-318" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_back_313" class="camper-lg-319" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_back_314" class="camper-lg-320" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_back_315" class="camper-lg-321" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_back_316" class="camper-lg-322" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_back_317" class="camper-lg-323" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_back_318" class="camper-lg-324" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_back_319" class="camper-lg-325" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_back_320" class="camper-lg-326" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_back_321" class="camper-lg-327" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_back_322" class="camper-lg-328" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_back_323" class="camper-lg-329" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_back_324" class="camper-lg-330" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_back_325" class="camper-lg-331" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_back_326" class="camper-lg-332" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_back_327" class="camper-lg-333" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_back_328" class="camper-lg-334" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_back_329" class="camper-lg-335" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_back_330" class="camper-lg-336" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_back_331" class="camper-lg-337" placeholder="0" />
                                          <input type="number" value="" name="camper_lg_back_332" class="camper-lg-338" placeholder="0" />
                                       </div>
                                    </div>
                                 </div>
                                 <button class="car-adding__btn btn btn--accent cmn-btn mt-5 saveVehicle" id="saveCamperLG" type="button">Save</button>
                              </form>
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