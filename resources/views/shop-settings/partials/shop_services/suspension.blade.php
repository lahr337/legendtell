@extends('layout.default')
<!-- leftcode -->
@section('content')
@include('shop-settings.leftshowmenu')
<div class="account-settings__content-wr">
   <div class="account-settings__content-form">
      <div class="grid-view-shop">
         <div class="common-wrap">
            <div class="cmn-content">
               <form id="suspensionData">
                  @csrf
                  <input type="hidden" id="servicedata" name="carShopService" value="@if(isset($_GET['servicedata'])){{ $_GET['servicedata'] }} @endif">
                  <div class="service-type_issue-repair-form">
                     <div class="row">
                        <div class="col-12 col-md-6">
                           <div class="">
                              <div class="ac_service_content">
                                 <h3 class="ac_service_title">
                                    Frame Bracket Mounts
                                 </h3>
                                 <div class="btn-group" role="group">
                                    <div class="form-btnw-wrap good-checked">
                                       <input type="radio" class="btn-check" value="Good" name="frame_bracket_mounts" id="btnradio101" autocomplete="off" @if($serviceData) @if($serviceData->frame_bracket_mounts == "Good") checked @endif @endif>
                                       <label for="btnradio101">Good</label>
                                    </div>
                                    <div class="form-btnw-wrap bad-checked">
                                       <input type="radio" class="btn-check" value="Bad" name="frame_bracket_mounts" id="btnradio22" autocomplete="off" @if($serviceData) @if($serviceData->frame_bracket_mounts == "Bad") checked @endif @endif>
                                       <label for="btnradio22">Bad</label>
                                    </div>
                                    <div class="form-btnw-wrap replaced-checked">
                                       <input type="radio" class="btn-check" value="Replaced" name="frame_bracket_mounts" id="btnradio33" autocomplete="off" @if($serviceData) @if($serviceData->frame_bracket_mounts == "Replaced") checked @endif @endif>
                                       <label for="btnradio33">Replaced</label>
                                    </div>
                                    <div class="form-btnw-wrap upgrade-checked">
                                       <input type="radio" class="btn-check" value="Upgraded" name="frame_bracket_mounts" id="btnradio44" autocomplete="off" @if($serviceData) @if($serviceData->frame_bracket_mounts == "Upgraded") checked @endif @endif>
                                       <label for="btnradio44">Upgraded</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="ac_service_content">
                                 <h3 class="ac_service_title">
                                    Hanger Connections
                                 </h3>
                                 <div class="btn-group" role="group">
                                    <div class="form-btnw-wrap good-checked">
                                       <input type="radio" class="btn-check" value="Good" name="hanger_connection" id="btnradio55" autocomplete="off" @if($serviceData) @if($serviceData->hanger_connection == "Good") checked @endif @endif>
                                       <label for="btnradio55">Good</label>
                                    </div>
                                    <div class="form-btnw-wrap bad-checked">
                                       <input type="radio" class="btn-check" value="Bad" name="hanger_connection" id="btnradio66" autocomplete="off" @if($serviceData) @if($serviceData->hanger_connection == "Bad") checked @endif @endif>
                                       <label for="btnradio66">Bad</label>
                                    </div>
                                    <div class="form-btnw-wrap replaced-checked">
                                       <input type="radio" class="btn-check" value="Replaced" name="hanger_connection" id="btnradio77" autocomplete="off" @if($serviceData) @if($serviceData->hanger_connection == "Replaced") checked @endif @endif>
                                       <label for="btnradio77">Replaced</label>
                                    </div>
                                    <div class="form-btnw-wrap upgrade-checked">
                                       <input type="radio" class="btn-check" value="Upgraded" name="hanger_connection" id="btnradio88" autocomplete="off" @if($serviceData) @if($serviceData->hanger_connection == "Upgraded") checked @endif @endif>
                                       <label for="btnradio88">Upgraded</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="ac_service_content">
                                 <h3 class="ac_service_title">
                                    Arm Bushings
                                 </h3>
                                 <div class="btn-group" role="group">
                                    <div class="form-btnw-wrap good-checked">
                                       <input type="radio" class="btn-check" value="Good" name="arm_bushing" id="btnradio19" autocomplete="off" @if($serviceData) @if($serviceData->arm_bushing == "Good") checked @endif @endif>
                                       <label for="btnradio19">Good</label>
                                    </div>
                                    <div class="form-btnw-wrap bad-checked">
                                       <input type="radio" class="btn-check" value="Bad" name="arm_bushing" id="btnradio100" autocomplete="off" @if($serviceData) @if($serviceData->arm_bushing == "Bad") checked @endif @endif>
                                       <label for="btnradio100">Bad</label>
                                    </div>
                                    <div class="form-btnw-wrap replaced-checked">
                                       <input type="radio" class="btn-check" value="Replaced" name="arm_bushing" id="btnradio111" autocomplete="off" @if($serviceData) @if($serviceData->arm_bushing == "Replaced") checked @endif @endif>
                                       <label for="btnradio111">Replaced</label>
                                    </div>
                                    <div class="form-btnw-wrap upgrade-checked">
                                       <input type="radio" class="btn-check" value="Upgraded" name="arm_bushing" id="btnradio122" autocomplete="off" @if($serviceData) @if($serviceData->arm_bushing == "Upgraded") checked @endif @endif>
                                       <label for="btnradio122">Upgraded</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="ac_service_content">
                                 <h3 class="ac_service_title">
                                    Axles
                                 </h3>
                                 <div class="btn-group" role="group">
                                    <div class="form-btnw-wrap good-checked">
                                       <input type="radio" class="btn-check" value="Good" name="axles" id="btnradio133" autocomplete="off" @if($serviceData) @if($serviceData->axles == "Good") checked @endif @endif>
                                       <label for="btnradio133">Good</label>
                                    </div>
                                    <div class="form-btnw-wrap bad-checked">
                                       <input type="radio" class="btn-check" value="Bad" name="axles" id="btnradio144" autocomplete="off" @if($serviceData) @if($serviceData->axles == "Bad") checked @endif @endif>
                                       <label for="btnradio144">Bad</label>
                                    </div>
                                    <div class="form-btnw-wrap replaced-checked">
                                       <input type="radio" class="btn-check" value="Replaced" name="axles" id="btnradio155" autocomplete="off" @if($serviceData) @if($serviceData->axles == "Replaced") checked @endif @endif>
                                       <label for="btnradio155">Replaced</label>
                                    </div>
                                    <div class="form-btnw-wrap upgrade-checked">
                                       <input type="radio" class="btn-check" value="Upgraded" name="axles" id="btnradio166" autocomplete="off" @if($serviceData) @if($serviceData->axles == "Upgraded") checked @endif @endif>
                                       <label for="btnradio166">Upgraded</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="ac_service_content">
                                 <h3 class="ac_service_title">
                                    Axle Bushings & Bolts
                                 </h3>
                                 <div class="btn-group" role="group">
                                    <div class="form-btnw-wrap good-checked">
                                       <input type="radio" class="btn-check" value="Good" name="axle_bushing_bolts" id="btnradio177" autocomplete="off" @if($serviceData) @if($serviceData->axle_bushing_bolts == "Good") checked @endif @endif>
                                       <label for="btnradio177">Good</label>
                                    </div>
                                    <div class="form-btnw-wrap bad-checked">
                                       <input type="radio" class="btn-check" value="Bad" name="axle_bushing_bolts" id="btnradio188" autocomplete="off" @if($serviceData) @if($serviceData->axle_bushing_bolts == "Bad") checked @endif @endif>
                                       <label for="btnradio188">Bad</label>
                                    </div>
                                    <div class="form-btnw-wrap replaced-checked">
                                       <input type="radio" class="btn-check" value="Replaced" name="axle_bushing_bolts" id="btnradio199" autocomplete="off" @if($serviceData) @if($serviceData->axle_bushing_bolts == "Replaced") checked @endif @endif>
                                       <label for="btnradio199">Replaced</label>
                                    </div>
                                    <div class="form-btnw-wrap upgrade-checked">
                                       <input type="radio" class="btn-check" value="Upgraded" name="axle_bushing_bolts" id="btnradio200" autocomplete="off" @if($serviceData) @if($serviceData->axle_bushing_bolts == "Upgraded") checked @endif @endif>
                                       <label for="btnradio200">Upgraded</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="ac_service_content">
                                 <h3 class="ac_service_title">
                                    Hub Bearings
                                 </h3>
                                 <div class="btn-group" role="group">
                                    <div class="form-btnw-wrap good-checked">
                                       <input type="radio" class="btn-check" value="Good" name="hub_bearings" id="btnradio211" autocomplete="off" @if($serviceData) @if($serviceData->hub_bearings == "Good") checked @endif @endif>
                                       <label for="btnradio211">Good</label>
                                    </div>
                                    <div class="form-btnw-wrap bad-checked">
                                       <input type="radio" class="btn-check" value="Bad" name="hub_bearings" id="btnradio222" autocomplete="off" @if($serviceData) @if($serviceData->hub_bearings == "Bad") checked @endif @endif>
                                       <label for="btnradio222">Bad</label>
                                    </div>
                                    <div class="form-btnw-wrap replaced-checked">
                                       <input type="radio" class="btn-check" value="Replaced" name="hub_bearings" id="btnradio233" autocomplete="off" @if($serviceData) @if($serviceData->hub_bearings == "Replaced") checked @endif @endif>
                                       <label for="btnradio233">Replaced</label>
                                    </div>
                                    <div class="form-btnw-wrap upgrade-checked">
                                       <input type="radio" class="btn-check" value="Upgraded" name="hub_bearings" id="btnradio244" autocomplete="off" @if($serviceData) @if($serviceData->hub_bearings == "Upgraded") checked @endif @endif>
                                       <label for="btnradio244">Upgraded</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="ac_service_content">
                                 <h3 class="ac_service_title">
                                    King Pin Play
                                 </h3>
                                 <div class="btn-group" role="group">
                                    <div class="form-btnw-wrap good-checked">
                                       <input type="radio" class="btn-check" value="Good" name="king_pin_play" id="btnradio255" autocomplete="off" @if($serviceData) @if($serviceData->king_pin_play == "Good") checked @endif @endif>
                                       <label for="btnradio255">Good</label>
                                    </div>
                                    <div class="form-btnw-wrap bad-checked">
                                       <input type="radio" class="btn-check" value="Bad" name="king_pin_play" id="btnradio266" autocomplete="off" @if($serviceData) @if($serviceData->king_pin_play == "Bad") checked @endif @endif>
                                       <label for="btnradio266">Bad</label>
                                    </div>
                                    <div class="form-btnw-wrap replaced-checked">
                                       <input type="radio" class="btn-check" value="Replaced" name="king_pin_play" id="btnradio277" autocomplete="off" @if($serviceData) @if($serviceData->king_pin_play == "Replaced") checked @endif @endif>
                                       <label for="btnradio277">Replaced</label>
                                    </div>
                                    <div class="form-btnw-wrap upgrade-checked">
                                       <input type="radio" class="btn-check" value="Upgraded" name="king_pin_play" id="btnradio288" autocomplete="off" @if($serviceData) @if($serviceData->king_pin_play == "Upgraded") checked @endif @endif>
                                       <label for="btnradio288">Upgraded</label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-md-6">
                           <div class="">
                              <div class="ac_service_content">
                                 <h3 class="ac_service_title">
                                    Tie Rods & Castle Nuts
                                 </h3>
                                 <div class="btn-group" role="group">
                                    <div class="form-btnw-wrap good-checked">
                                       <input type="radio" class="btn-check" value="Good" name="tie_roads_and_castle_nuts" id="btnradio1" autocomplete="off" @if($serviceData) @if($serviceData->tie_roads_and_castle_nuts == "Good") checked @endif @endif>
                                       <label for="btnradio1">Good</label>
                                    </div>
                                    <div class="form-btnw-wrap bad-checked">
                                       <input type="radio" class="btn-check" value="Bad" name="tie_roads_and_castle_nuts" id="btnradio2" autocomplete="off" @if($serviceData) @if($serviceData->tie_roads_and_castle_nuts == "Bad") checked @endif @endif>
                                       <label for="btnradio2">Bad</label>
                                    </div>
                                    <div class="form-btnw-wrap replaced-checked">
                                       <input type="radio" class="btn-check" value="Replaced" name="tie_roads_and_castle_nuts" id="btnradio3" autocomplete="off" @if($serviceData) @if($serviceData->is_waratie_roads_and_castle_nutsnty == "Replaced") checked @endif @endif>
                                       <label for="btnradio3">Replaced</label>
                                    </div>
                                    <div class="form-btnw-wrap upgrade-checked">
                                       <input type="radio" class="btn-check" value="Upgraded" name="tie_roads_and_castle_nuts" id="btnradio4" autocomplete="off" @if($serviceData) @if($serviceData->tie_roads_and_castle_nuts == "Upgraded") checked @endif @endif>
                                       <label for="btnradio4">Upgraded</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="ac_service_content">
                                 <h3 class="ac_service_title">
                                    Alignment
                                 </h3>
                                 <div class="btn-group" role="group">
                                    <div class="form-btnw-wrap good-checked">
                                       <input type="radio" class="btn-check" value="Good" name="alignment" id="btnradio5" autocomplete="off" @if($serviceData) @if($serviceData->alignment == "Good") checked @endif @endif>
                                       <label for="btnradio5">Good</label>
                                    </div>
                                    <div class="form-btnw-wrap bad-checked">
                                       <input type="radio" class="btn-check" value="Bad" name="alignment" id="btnradio6" autocomplete="off" @if($serviceData) @if($serviceData->alignment == "Bad") checked @endif @endif>
                                       <label for="btnradio6">Bad</label>
                                    </div>
                                    <div class="form-btnw-wrap replaced-checked">
                                       <input type="radio" class="btn-check" value="Replaced" name="alignment" id="btnradio7" autocomplete="off" @if($serviceData) @if($serviceData->alignment == "Replaced") checked @endif @endif>
                                       <label for="btnradio7">Replaced</label>
                                    </div>
                                    <div class="form-btnw-wrap upgrade-checked">
                                       <input type="radio" class="btn-check" value="Upgraded" name="alignment" id="btnradio8" autocomplete="off" @if($serviceData) @if($serviceData->alignment == "Upgraded") checked @endif @endif>
                                       <label for="btnradio8">Upgraded</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="ac_service_content">
                                 <h3 class="ac_service_title">
                                    Shocks
                                 </h3>
                                 <div class="btn-group" role="group">
                                    <div class="form-btnw-wrap good-checked">
                                       <input type="radio" class="btn-check" value="Good" name="shocks" id="btnradio9" autocomplete="off" @if($serviceData) @if($serviceData->shocks == "Good") checked @endif @endif>
                                       <label for="btnradio9">Good</label>
                                    </div>
                                    <div class="form-btnw-wrap bad-checked">
                                       <input type="radio" class="btn-check" value="Bad" name="shocks" id="btnradio10" autocomplete="off" @if($serviceData) @if($serviceData->shocks == "Bad") checked @endif @endif>
                                       <label for="btnradio10">Bad</label>
                                    </div>
                                    <div class="form-btnw-wrap replaced-checked">
                                       <input type="radio" class="btn-check" value="Replaced" name="shocks" id="btnradio11" autocomplete="off" @if($serviceData) @if($serviceData->shocks == "Replaced") checked @endif @endif>
                                       <label for="btnradio11">Replaced</label>
                                    </div>
                                    <div class="form-btnw-wrap upgrade-checked">
                                       <input type="radio" class="btn-check" value="Upgraded" name="shocks" id="btnradio12" autocomplete="off" @if($serviceData) @if($serviceData->shocks == "Upgraded") checked @endif @endif>
                                       <label for="btnradio12">Upgraded</label>
                                    </div>
                                 </div>
                              </div>
                              
                              <div class="ac_service_content">
                                 <h3 class="ac_service_title">
                                    Air Compressor
                                 </h3>
                                 <div class="btn-group" role="group">
                                    <div class="form-btnw-wrap good-checked">
                                       <input type="radio" class="btn-check" value="Good" name="air_compressor" id="btnradio17" autocomplete="off" @if($serviceData) @if($serviceData->air_compressor == "Good") checked @endif @endif>
                                       <label for="btnradio17">Good</label>
                                    </div>
                                    <div class="form-btnw-wrap bad-checked">
                                       <input type="radio" class="btn-check" value="Bad" name="air_compressor" id="btnradio108" autocomplete="off" @if($serviceData) @if($serviceData->air_compressor == "Bad") checked @endif @endif>
                                       <label for="btnradio108">Bad</label>
                                    </div>
                                    <div class="form-btnw-wrap replaced-checked">
                                       <input type="radio" class="btn-check" value="Replaced" name="air_compressor" id="btnradio109" autocomplete="off" @if($serviceData) @if($serviceData->air_compressor == "Replaced") checked @endif @endif>
                                       <label for="btnradio109">Replaced</label>
                                    </div>
                                    <div class="form-btnw-wrap upgrade-checked">
                                       <input type="radio" class="btn-check" value="Upgraded" name="air_compressor" id="btnradio20" autocomplete="off" @if($serviceData) @if($serviceData->air_compressor == "Upgraded") checked @endif @endif>
                                       <label for="btnradio20">N/A</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="ac_service_content">
                                 <h3 class="ac_service_title">
                                    Air Bags
                                 </h3>
                                 <div class="btn-group" role="group">
                                    <div class="form-btnw-wrap good-checked">
                                       <input type="radio" class="btn-check" value="Good" name="air_bag" id="btnradio021" autocomplete="off" @if($serviceData) @if($serviceData->air_bag == "Good") checked @endif @endif>
                                       <label for="btnradio021">Good</label>
                                    </div>
                                    <div class="form-btnw-wrap bad-checked">
                                       <input type="radio" class="btn-check" value="Bad" name="air_bag" id="btnradio022" autocomplete="off" @if($serviceData) @if($serviceData->air_bag == "Bad") checked @endif @endif>
                                       <label for="btnradio022">Bad</label>
                                    </div>
                                    <div class="form-btnw-wrap replaced-checked">
                                       <input type="radio" class="btn-check" value="Replaced" name="air_bag" id="btnradio023" autocomplete="off" @if($serviceData) @if($serviceData->air_bag == "Replaced") checked @endif @endif>
                                       <label for="btnradio023">Replaced</label>
                                    </div>
                                    <div class="form-btnw-wrap upgrade-checked">
                                       <input type="radio" class="btn-check" value="Upgraded" name="air_bag" id="btnradio024" autocomplete="off" @if($serviceData) @if($serviceData->air_bag == "Upgraded") checked @endif @endif>
                                       <label for="btnradio024">N/A</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="ac_service_content">
                                 <h3 class="ac_service_title">
                                    Air Manifold
                                 </h3>
                                 <div class="btn-group" role="group">
                                    <div class="form-btnw-wrap good-checked">
                                       <input type="radio" class="btn-check" value="Good" name="air_manifold" id="btnradio25" autocomplete="off" @if($serviceData) @if($serviceData->air_manifold == "Good") checked @endif @endif>
                                       <label for="btnradio25">Good</label>
                                    </div>
                                    <div class="form-btnw-wrap bad-checked">
                                       <input type="radio" class="btn-check" value="Bad" name="air_manifold" id="btnradio26" autocomplete="off" @if($serviceData) @if($serviceData->air_manifold == "Bad") checked @endif @endif>
                                       <label for="btnradio26">Bad</label>
                                    </div>
                                    <div class="form-btnw-wrap replaced-checked">
                                       <input type="radio" class="btn-check" value="Replaced" name="air_manifold" id="btnradio27" autocomplete="off" @if($serviceData) @if($serviceData->air_manifold == "Replaced") checked @endif @endif>
                                       <label for="btnradio27">Replaced</label>
                                    </div>
                                    <div class="form-btnw-wrap upgrade-checked">
                                       <input type="radio" class="btn-check" value="Upgraded" name="air_manifold" id="btnradio28" autocomplete="off" @if($serviceData) @if($serviceData->air_manifold == "Upgraded") checked @endif @endif>
                                       <label for="btnradio28">N/A</label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="form-box w-100">
                        <div class="form-group">
                           <div class="upload-wrap" style="padding-top: 20px;">
                              <div class="row align-items-center">
                                 <div class="col-lg-4 col-12">
                                    <button class="btn uplaod">UPLOAD <br />
                                       Photos & Docs<input type="file" name="products_uploaded[]" id="insert_products_uploaded" class="form-control products_uploaded_image" value="Upload" multiple="multiple"> </button>
                                 </div>
                                 <div class="col-md-8 col-12 text-center display_image_list3">
                                    <ul>
                                       @if($serviceData && $serviceData->document)

                                       @foreach(explode(',',$serviceData->document) as $key=>$value)
                                       <?php $chkextension = explode('.', $value); ?>
                                       @if(trim($chkextension[5])=="pdf")
                                       <li id="{{$key}}"><span><button type='button' class="btn cross_img" id="{{$key}}">&nbsp;</button><img id="{{$key}}" src="/assets/images/pdf.png" class="imgupdate"></span></li>
                                       @else
                                       <li id="{{$key}}"><span><button type='button' class="btn cross_img" id="{{$key}}">&nbsp;</button><img id="{{$key}}" src="/assets/images/jpg.png" class="imgupdate"></span></li>
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
                     <button class="car-adding__btn btn btn--accent cmn-btn" id="saveSuspension" type="button">Save</button>
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