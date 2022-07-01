@extends('layout.default')
<!-- leftcode -->
@section('content')
@include('shop-settings.leftshowmenu')
<div class="account-settings__content-wr">
   <div class="account-settings__content-form">
      <div class="grid-view-shop">
         <div class="common-wrap">
            <div class="cmn-content">
               <div class="oil-service cmn-right-label cmn-mx-75">
                  
                  <form id="saveConcierge">
                     @csrf
                  <input type="hidden" id="servicedata" name="carShopService" value="@if(isset($_GET['servicedata'])){{ $_GET['servicedata'] }} @endif" > 
                        <div class="form-box">
                           <div class="form-group">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-4 col-12">
                                  
                                    <label class="p-0">TRIP BEGIN:</label>
                                 </div>
                                 <div class="col-md-8 col-12">
                                   <!-- @if($serviceData)
                                    <input class="form-control border-0 myrequire" type="datetime-local" name="trip_begin" id="trip_begin" style="height:35px" value="{{$serviceData->trip_begin}}">
                                    @else -->
                                    <input class="form-control border-0 myrequire" type="datetime-local" name="trip_begin" id="trip_begin" style="height:35px" >
                                    <!-- @endif -->
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-4 col-12">
                                    <label class="p-0">TRIP END:</label>
                                 </div>
                                 <div class="col-md-8 col-12">
                                    <!-- @if($serviceData)
                                    <input class="form-control border-0 myrequire" type="datetime-local" name="trip_end" id="trip_end" style="height:35px" value="{{$serviceData->trip_end}}">
                                    @else -->
                                    <input class="form-control border-0 myrequire" type="datetime-local" name="trip_end" id="trip_end" style="height:35px" >
                                <!--     @endif -->
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="row d-flex">
                                 <div class="col-md-4 col-12">
                                    <label class="p-0">TRIP DETAILS:</label>
                                 </div>
                                 <div class="col-md-8 col-12">
                                 <textarea class="form-control myrequire" id="trip_details" name="trip_details"  rows="5"></textarea>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-4 col-12">
                                    <label class="p-0">CLIENT:</label>
                                 </div>
                                 <div class="col-md-8 col-12">
                                    <input class="form-control border-0 myrequire" name="client" id="client" type="text" style="height:35px" value="">
                                 </div>
                              </div>
                           </div>
                           <div class="form-group cmn-radio cst-mtb-20">
                              <div class="row d-flex align-items-center">
                                 <div class="col-md-4 col-12">
                                    <label class="p-0">INCIDENT/ISSUES:</label>
                                 </div>
                                 <div class="col-md-8 col-12 d-flex">
                                    <div class="btn-group btn-group d-flex flex-row" role="group" style="column-gap: 10px;">
                                       <div class="form-btnw-wrap upgrade-checked">
                                          <input type="radio" class="btn-check yes_incident_condition" name="incident_condition" id="btnradio112" autocomplete="off" value="Yes">
                                          <label for="btnradio112">YES</label>
                                       </div>
                                       <div class="form-btnw-wrap upgrade-checked">
                                          <input type="radio" class="btn-check no_incident_condition" name="incident_condition" id="btnradio113" autocomplete="off" value="No">
                                          <label for="btnradio113">NO</label>
                                       </div>
                                    </div>
                                 {{-- <div class="custom-check custom-check--with-label custom-check--with-label-xl mt-0">
                                    <div class="custom-check__field-wr m-0">
                                       <input class="custom-check__field notifications" id="vinyl-other-warn1" type="radio" value="Yes" name="incident_condition">
                                       <div class="custom-check__customize">
                                          <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M1 7.66667L7 12.3333L12.3333 1" stroke="white"></path>
                                          </svg>
                                       </div>
                                    </div>
                                    <label class="custom-check__label cmn-label ml-2" for="serviceCheck">YES</label>
                                 </div>
                                 <div class="custom-check custom-check--with-label custom-check--with-label-xl mt-0">
                                    <div class="custom-check__field-wr">
                                       <input class="custom-check__field notifications" id="vinyl-other-warn2" type="radio" value="No" name="incident_condition">
                                       <div class="custom-check__customize">
                                          <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M1 7.66667L7 12.3333L12.3333 1" stroke="white"></path>
                                          </svg>
                                       </div>
                                    </div>
                                    <label class="custom-check__label cmn-label" for="serviceCheck">NO</label>
                                 </div> --}}
                                 </div>
                              </div>
                           </div>
                           
                           <div class="form-group">
                              <div class="row d-flex">
                                 <div class="col-md-4 col-12">
                                    <label class="p-0">DETAILS:</label>
                                 </div>
                                 <div class="col-md-8 col-12">
                                 <textarea class="form-control incident_detail" name="notesdata" rows="5"></textarea>
                                 </div>
                              </div>
                           </div>

                           
                           
                           
                          

                        </div>
                     
                     <!--col-->
                  
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
                                       </ul>                  
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     <button class="car-adding__btn btn btn--accent insertconcierge cmn-btn" type="button">Save</button>
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