@extends('layout.default')
<!-- leftcode -->
@section('content')
@include('shop-settings.leftshowmenu')
<div class="account-settings__content-wr">
   <div class="account-settings__content-form">
      <div class="grid-view-shop">
         <div class="common-wrap">
            <div class="cmn-content">
               <form id="paintbodyData">
                  @csrf
                  <input type="hidden" id="servicedata" name="carShopService" value="@if(isset($_GET['servicedata'])){{ $_GET['servicedata'] }} @endif">
                  <div class="vinyl_wrap detailing-correction">
                     <div class="vinyl-content">
                        <div class="row">
                           <div class="col-12 col-md-4">
                              <div class="">
                                 <h4 class="text-center">Select vehicle type from dropdown menu to record paint thickness</h4>
                                 <div class="custom-input custom-input--default custom-input--with-label-above settings-form__field settings-form__field--state">
                                    <div class="custom-input__field-wr fv-row">
                                       <select class="custom-input__field bg-white p-3" id="state" name="vehicle_type" type="text">
                                          <option value="">-select </option>
                                          <option value="Car-Sedan" @if($serviceData) @if($serviceData->vehicle_type == "Car-Sedan") selected @endif @endif>Car - Sedan</option>
                                          <option value="Car-Coupe" @if($serviceData) @if($serviceData->vehicle_type == "Car-Coupe") selected @endif @endif>Car - Coupe</option>
                                          <option value="Truck" @if($serviceData) @if($serviceData->vehicle_type == "Truck") selected @endif @endif>Truck</option>
                                          <option value="SUV-X-Large" @if($serviceData) @if($serviceData->vehicle_type == "SUV-X-Large") selected @endif @endif>SUV - X-Large</option>
                                          <option value="SUV" @if($serviceData) @if($serviceData->vehicle_type == "SUV") selected @endif @endif>SUV</option>
                                          <option value="RV" @if($serviceData) @if($serviceData->vehicle_type == "RV") selected @endif @endif>RV</option>
                                          <option value="Camper-Small" @if($serviceData) @if($serviceData->vehicle_type == "Camper-Small") selected @endif @endif>Camper - Small</option>
                                          <option value="Camper-Large" @if($serviceData) @if($serviceData->vehicle_type == "Camper-Large") selected @endif @endif>Camper - Large</option>
                                          <option value="Van-Family" @if($serviceData) @if($serviceData->vehicle_type == "Van-Family") selected @endif @endif>Van - Family</option>
                                          <option value="Van-Small" @if($serviceData) @if($serviceData->vehicle_type == "Van-Small") selected @endif @endif>Van - Small</option>
                                          <option value="Van-Large" @if($serviceData) @if($serviceData->vehicle_type == "Van-Large") selected @endif @endif>Van - Large</option>
                                          <option value="Van-Hauler" @if($serviceData) @if($serviceData->vehicle_type == "Van-Hauler") selected @endif @endif>Van - Hauler</option>
                                          <option value="Bus" @if($serviceData) @if($serviceData->vehicle_type == "Bus") selected @endif @endif>Bus</option>
                                          <option value="Commercial-Truck-Small" @if($serviceData) @if($serviceData->vehicle_type == "Commercial-Truck-Small") selected @endif @endif>Commercial Truck - Small</option>
                                          <option value="Commercial-Truck-Medium" @if($serviceData) @if($serviceData->vehicle_type == "Commercial-Truck-Medium") selected @endif @endif>Commercial Truck - Medium</option>
                                          <option value="Commercial-Truck-Large" @if($serviceData) @if($serviceData->vehicle_type == "Commercial-Truck-Large") selected @endif @endif>Commercial Truck - Large</option>
                                          <option value="18-Wheeler-Cab" @if($serviceData) @if($serviceData->vehicle_type == "18-Wheeler-Cab") selected @endif @endif>18-Wheeler Cab</option>
                                          <option value="Travel-Trailer" @if($serviceData) @if($serviceData->vehicle_type == "Travel-Trailer") selected @endif @endif>Travel Trailer</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div>
                                    <img class="w-100 mt-4" src="/assets/images/not-recorded.png" />
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-md-8">
                              <div class="correc-detail cmn-checked grid-2">
                                 <div class="form-box">
                                    <div class="form-group">
                                       <div class="row d-flex">
                                          <div class="col-md-4 col-12">
                                             <label class="p-0">Body <br /> Panels <br /> Repaired <br /> or replaced:</label>
                                          </div>
                                          <div class="col-md-8 col-12">
                                             <textarea class="form-control diagnosis-electric myerr body_panels_repaired_or_replaced" name="body_panels_repaired_or_replaced" rows="5">@if($serviceData) {{$serviceData->body_panels_repaired_or_replaced}} @endif</textarea>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="row d-flex align-items-center">
                                          <div class="col-md-4 col-12">
                                             <label class="p-0">Paint Manufacturer:</label>
                                          </div>
                                          <div class="col-md-8 col-12">
                                             <input type="text" name="paint_manufacturer" value="@if($serviceData) {{$serviceData->paint_manufacturer}} @endif" class="form-control border-0 myerr paint_manufacturer" style="height:35px"></input>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="form-group">
                                       <div class="row d-flex align-items-center">
                                          <div class="col-md-4 col-12">
                                             <label class="p-0">Paint System:</label>
                                          </div>
                                          <div class="col-md-8 col-12">
                                             <input type="text" name="paint_system" value="@if($serviceData) {{$serviceData->paint_system}} @endif" class="form-control border-0" style="height:35px"></input>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="form-group">
                                       <div class="row d-flex align-items-center">
                                          <div class="col-md-4 col-12">
                                             <label class="p-0">Paint CODE:</label>
                                          </div>
                                          <div class="col-md-8 col-12">
                                             <input type="text" name="paint_code" value="@if($serviceData) {{$serviceData->paint_code}} @endif" class="form-control border-0 myerr paint_code" style="height:35px"></input>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="form-group">
                                       <div class="row d-flex align-items-center">
                                          <div class="col-md-4 col-12">
                                             <label class="p-0">Paint COLOR:</label>
                                          </div>
                                          <div class="col-md-8 col-12">
                                             <input type="text" name="paint_color" value="@if($serviceData) {{$serviceData->paint_color}} @endif" class="form-control border-0 myerr paint_color" style="height:35px"></input>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="form-group">
                                       <div class="row d-flex">
                                          <div class="col-md-4 col-12">
                                             <label class="p-0">NOTES:</label>
                                          </div>
                                          <div class="col-md-8 col-12">
                                             <textarea class="form-control" name="paint_notes" rows="5">@if($serviceData) {{$serviceData->paint_notes}} @endif</textarea>
                                          </div>
                                       </div>
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
                                       <button class="btn uplaod">UPLOAD <br /> Photos | Videos | Docs <input type="file" name="image_uploaded[]" id="insert_image_uploaded" class="form-control image_uploaded" value="Upload" multiple="multiple"> </button>
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
                        <button class="car-adding__btn btn btn--accent cmn-btn" id="savePaintBody" type="button">Save</button>
                     </div>
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