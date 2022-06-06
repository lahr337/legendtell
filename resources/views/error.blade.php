{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
    <div class="d-flex flex-row-fluid flex-column bgi-size-cover bgi-position-center bgi-no-repeat p-10 p-sm-30" style="background-image: url(/media/error/bg1.jpg);">
        <!--begin::Content-->
        <h1 class="font-weight-boldest text-dark-75 mt-15" style="font-size: 10rem">404</h1>
        <p class="font-size-h3 text-muted font-weight-normal">OOPS! Something went wrong here</p>
        <!--end::Content-->
    </div>
@endsection

