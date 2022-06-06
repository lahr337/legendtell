@extends('layout.default')
<!-- leftcode -->
@section('content')
<style>
    .mynewcsl {
        pointer-events: none;
  background: #cdcdcd!Important;
} </style>
@include('shop-settings.leftshowmenu')
<div class="account-settings__content-wr">
                <div class="account-settings__content-form">
            <div class="grid-view-shop">
            <div class="common-wrap">
    <div class="cmn-content">
        <h3 class="cmn-title">Select type of issue/repair</h3>
        <ul class="services-c service-type">

            <li><a href="javascript:void(0)" id="regular_service" class="issueBtn @if( $checkCarData &&$checkCarData->repair_info !='') active @endif">General Repair</a></li>
            <li><a href="javascript:void(0)" id="known_issue" class="issueBtn @if($checkCarData &&$checkCarData->known_issue !='') active @endif">Known Issue</a></li>
            <li><a href="javascript:void(0)" id="new_install" class="issueBtn @if($checkCarData &&$checkCarData->recall_issue !='') active @endif">Manufacturer Recall</a></li>   
            <li><a href="javascript:void(0)" id="manfacture_recall" class="issueBtn @if($checkCarData &&$checkCarData->install_info !='') active @endif">New Install</a></li>
            <li><a href="javascript:void(0)" id="general_repair" class="issueBtn @if($checkCarData &&$checkCarData->diagnosis !='') active @endif">New Issue</a></li>
            <li><a href="javascript:void(0)" id="new_issue" class="issueBtn @if($checkCarData &&$checkCarData->servicing_issue !='') active @endif">Regular Servicing</a></li> 

            {{-- <li><a href="javascript:void(0)" id="general_repair" class="issueBtn @if( $checkCarData &&$checkCarData->diagnosis !='') active @endif">General Repair</a></li>
            <li><a href="javascript:void(0)" id="known_issue" class="issueBtn @if($checkCarData &&$checkCarData->known_issue !='') active @endif">Known Issue</a></li>
            <li><a href="javascript:void(0)" id="manfacture_recall" class="issueBtn @if($checkCarData &&$checkCarData->install_info !='') active @endif">Manufacturer Recall</a></li>
            <li><a href="javascript:void(0)" id="new_install" class="issueBtn @if($checkCarData &&$checkCarData->recall_issue !='') active @endif">New Install</a></li>
            <li><a href="javascript:void(0)" id="new_issue" class="issueBtn @if($checkCarData &&$checkCarData->servicing_issue !='') active @endif">New Issue</a></li>
            <li><a href="javascript:void(0)" id="regular_service" class="issueBtn @if($checkCarData &&$checkCarData->repair_info !='') active @endif">Regular Servicing</a></li>      --}}
        </ul>
       
        <div class="service-type_issue-repair-form">
            <form id="saveIssueForm" name="saveIssueForm" action="{{route('shop-settings.save-issue-repair')}}" method="PUT" accept-charset="multipart/form-data">
                @csrf
                @method('put')
               
                <input type="hidden" id="carShopService" name="carShopService" value="@if(isset($_GET['issueServiceid'])){{ $_GET['issueServiceid'] }}
             @endif" > 
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Important Repair Information:</label>
                            <textarea class="form-control txt_issueBtn issuetabclose  @if($checkCarData &&$checkCarData->repair_info !='') active mynewactive @else mynewcsl  @endif" name="repair_info" rows="5" id="text_regular_service"  @if($checkCarData &&$checkCarData->repair_info !='') '' @else readonly   @endif>{{$checkCarData->repair_info ?? ''}}</textarea>
                        </div>
                    </div>
                  
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Known Issue Details:</label>
                            <textarea class="form-control txt_issueBtn test issuetabclose @if( $checkCarData &&$checkCarData->known_issue !='') active mynewactive @else mynewcsl  @endif " name="know_issue" rows="5" id="text_known_issue" @if($checkCarData &&$checkCarData->known_issue !='') '' @else readonly  @endif >{{$checkCarData->known_issue ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Manufacturer Recall Information:</label>
                            <textarea class="form-control txt_issueBtn issuetabclose @if($checkCarData &&$checkCarData->recall_issue !='') active mynewactive @else mynewcsl  @endif" name="recall_issue" rows="5" id="text_new_install" @if($checkCarData &&$checkCarData->recall_issue !='') '' @else readonly  @endif  >{{$checkCarData->recall_issue ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Important New Install Information:</label>
                            <textarea class="form-control txt_issueBtn issuetabclose @if($checkCarData &&$checkCarData->install_info !='') active mynewactive @else mynewcsl  @endif " name="install_info" rows="5" id="text_manfacture_recall" @if($checkCarData &&$checkCarData->install_info !='') '' @else readonly  @endif   >{{$checkCarData->install_info ?? ''}}</textarea>
                        </div>
                    </div>
                   
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Diagnosis:</label>
                            <textarea class="form-control txt_issueBtn issuetabclose @if($checkCarData &&$checkCarData->diagnosis !='') active mynewactive @else mynewcsl 
                            @endif " name="diagnosis" rows="5" id="text_general_repair" @if($checkCarData &&$checkCarData->diagnosis !='') '' @else readonly  @endif  >{{$checkCarData->diagnosis ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Important Servicing Information:</label>
                            <textarea class="form-control txt_issueBtn issuetabclose @if($checkCarData &&$checkCarData->servicing_issue !='') active mynewactive @else mynewcsl  @endif" rows="5" name="service_info" id="text_new_issue" @if($checkCarData &&$checkCarData->servicing_issue !='') '' @else readonly  @endif >{{$checkCarData->servicing_issue ?? ''}}</textarea>
                        </div>
                    </div>
                   
                    <button type="button"  class="car-adding__btn btn btn--accent insertussueform cmn-btn" type="submit">Next</button>
                </div>  
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
