{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
    <main class="page-wrapper">
        <div class="container">
        <div class="account-settings page">
            <div class="page-heading page-heading--with-buttons">
            <div class="account-settings__heading page-heading__title-wr">
                <h1 class="page-heading__title">Admin</h1>
            </div>
            <div class="page-heading__btns account-settings__btns {{ $tab == 'myReports' ? 'account-settings__btns--active' : '' }}" id="headingButtons">
                <div class="reports-available">
                    <span class="reports-available__title">Reports available</span>
                    <span class="reports-available__number">2</span>
                </div>
                <a class="btn btn--accent" href="/">Buy reports</a>
            </div>
            </div>
            <div class="account-settings__grid">
            <div class="account-settings__nav-wr">
                <ul class="account-settings__nav-wr nav-tabs" id="settingsTabs">
                    <li class="nav-tabs__item">
                        <a class="nav-tabs__link nav-tabs-item nav-tabs-item--choose {{ $tab == 'editProfile' ? 'nav-tabs-item--active' : '' }}" href="#editProfile" data-tab="editProfile">
                            <div class="nav-tabs__item-icon nav-tabs-item__icon-wr">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.7812 3.75C9.48656 3.75 8.4375 4.79906 8.4375 6.09375C8.4375 7.38844 9.48656 8.4375 10.7812 8.4375C12.0759 8.4375 13.125 7.38844 13.125 6.09375C13.125 4.79906 12.0759 3.75 10.7812 3.75Z" fill="white" />
                                    <path d="M10.781 8.4375C10.1923 8.4375 9.6326 8.54625 9.12354 8.74125C9.8651 9.69469 10.3123 10.8881 10.3123 12.1875C10.3123 12.5306 10.2129 12.8484 10.0517 13.125H14.0623C14.5798 13.125 14.9998 12.705 14.9998 12.1875C14.9998 10.1194 13.107 8.4375 10.781 8.4375Z" fill="white" />
                                    <path d="M8.265 9.195C7.40438 8.16844 6.12937 7.5 4.6875 7.5C2.10281 7.5 0 9.60281 0 12.1875C0 12.4462 0.105 12.6806 0.274687 12.8503C0.444375 13.02 0.67875 13.125 0.9375 13.125H7.5H8.4375C8.955 13.125 9.375 12.705 9.375 12.1875C9.375 11.0447 8.9475 10.0097 8.265 9.195Z" fill="white" />
                                    <path d="M4.6875 7.5C3.13687 7.5 1.875 6.23812 1.875 4.6875C1.875 3.13687 3.13687 1.875 4.6875 1.875C6.23812 1.875 7.5 3.13687 7.5 4.6875C7.5 6.23812 6.23812 7.5 4.6875 7.5Z" fill="white" />
                                </svg>
                            </div>
                            <span class="nav-tabs-item__name">Edit Profile</span>
                        </a>
                    </li>
                    {{-- <li class="nav-tabs__item">
                        <a class="nav-tabs__link nav-tabs-item nav-tabs-item--choose {{ $tab == 'myshopServices' ? 'nav-tabs-item--active' : '' }}" href="#myshopServices" data-tab="myshopServices">
                        <div class="nav-tabs__item-icon nav-tabs-item__icon-wr">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.25 0H3.75C2.71594 0 1.875 0.840937 1.875 1.875V13.125C1.875 14.1591 2.71594 15 3.75 15H11.25C12.2841 15 13.125 14.1591 13.125 13.125V1.875C13.125 0.840937 12.2841 0 11.25 0ZM10.7812 12.1875H7.03125C6.7725 12.1875 6.5625 11.9775 6.5625 11.7188C6.5625 11.46 6.7725 11.25 7.03125 11.25H10.7812C11.04 11.25 11.25 11.46 11.25 11.7188C11.25 11.9775 11.04 12.1875 10.7812 12.1875ZM10.7812 9.375H7.03125C6.7725 9.375 6.5625 9.165 6.5625 8.90625C6.5625 8.6475 6.7725 8.4375 7.03125 8.4375H10.7812C11.04 8.4375 11.25 8.6475 11.25 8.90625C11.25 9.165 11.04 9.375 10.7812 9.375ZM10.7812 6.5625H7.03125C6.7725 6.5625 6.5625 6.3525 6.5625 6.09375C6.5625 5.835 6.7725 5.625 7.03125 5.625H10.7812C11.04 5.625 11.25 5.835 11.25 6.09375C11.25 6.3525 11.04 6.5625 10.7812 6.5625ZM10.7812 3.75H7.03125C6.7725 3.75 6.5625 3.54 6.5625 3.28125C6.5625 3.0225 6.7725 2.8125 7.03125 2.8125H10.7812C11.04 2.8125 11.25 3.0225 11.25 3.28125C11.25 3.54 11.04 3.75 10.7812 3.75ZM5.15625 3.75H4.21875C3.96 3.75 3.75 3.54 3.75 3.28125C3.75 3.0225 3.96 2.8125 4.21875 2.8125H5.15625C5.415 2.8125 5.625 3.0225 5.625 3.28125C5.625 3.54 5.415 3.75 5.15625 3.75ZM5.15625 6.5625H4.21875C3.96 6.5625 3.75 6.3525 3.75 6.09375C3.75 5.835 3.96 5.625 4.21875 5.625H5.15625C5.415 5.625 5.625 5.835 5.625 6.09375C5.625 6.3525 5.415 6.5625 5.15625 6.5625ZM5.15625 9.375H4.21875C3.96 9.375 3.75 9.165 3.75 8.90625C3.75 8.6475 3.96 8.4375 4.21875 8.4375H5.15625C5.415 8.4375 5.625 8.6475 5.625 8.90625C5.625 9.165 5.415 9.375 5.15625 9.375ZM5.15625 12.1875H4.21875C3.96 12.1875 3.75 11.9775 3.75 11.7188C3.75 11.46 3.96 11.25 4.21875 11.25H5.15625C5.415 11.25 5.625 11.46 5.625 11.7188C5.625 11.9775 5.415 12.1875 5.15625 12.1875Z" fill="#0077C6" />
                            </svg>
                        </div>
                        <span class="nav-tabs-item__name">Shop Services</span>
                        </a>
                    </li> --}}
                    {{-- <li class="nav-tabs__item">
                        <a class="nav-tabs__link nav-tabs-item nav-tabs-item--choose {{ $tab == 'myuseredit' ? 'nav-tabs-item--active' : '' }}" href="#myuseredit" data-tab="myuseredit">
                        <div class="nav-tabs__item-icon nav-tabs-item__icon-wr">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.25 0H3.75C2.71594 0 1.875 0.840937 1.875 1.875V13.125C1.875 14.1591 2.71594 15 3.75 15H11.25C12.2841 15 13.125 14.1591 13.125 13.125V1.875C13.125 0.840937 12.2841 0 11.25 0ZM10.7812 12.1875H7.03125C6.7725 12.1875 6.5625 11.9775 6.5625 11.7188C6.5625 11.46 6.7725 11.25 7.03125 11.25H10.7812C11.04 11.25 11.25 11.46 11.25 11.7188C11.25 11.9775 11.04 12.1875 10.7812 12.1875ZM10.7812 9.375H7.03125C6.7725 9.375 6.5625 9.165 6.5625 8.90625C6.5625 8.6475 6.7725 8.4375 7.03125 8.4375H10.7812C11.04 8.4375 11.25 8.6475 11.25 8.90625C11.25 9.165 11.04 9.375 10.7812 9.375ZM10.7812 6.5625H7.03125C6.7725 6.5625 6.5625 6.3525 6.5625 6.09375C6.5625 5.835 6.7725 5.625 7.03125 5.625H10.7812C11.04 5.625 11.25 5.835 11.25 6.09375C11.25 6.3525 11.04 6.5625 10.7812 6.5625ZM10.7812 3.75H7.03125C6.7725 3.75 6.5625 3.54 6.5625 3.28125C6.5625 3.0225 6.7725 2.8125 7.03125 2.8125H10.7812C11.04 2.8125 11.25 3.0225 11.25 3.28125C11.25 3.54 11.04 3.75 10.7812 3.75ZM5.15625 3.75H4.21875C3.96 3.75 3.75 3.54 3.75 3.28125C3.75 3.0225 3.96 2.8125 4.21875 2.8125H5.15625C5.415 2.8125 5.625 3.0225 5.625 3.28125C5.625 3.54 5.415 3.75 5.15625 3.75ZM5.15625 6.5625H4.21875C3.96 6.5625 3.75 6.3525 3.75 6.09375C3.75 5.835 3.96 5.625 4.21875 5.625H5.15625C5.415 5.625 5.625 5.835 5.625 6.09375C5.625 6.3525 5.415 6.5625 5.15625 6.5625ZM5.15625 9.375H4.21875C3.96 9.375 3.75 9.165 3.75 8.90625C3.75 8.6475 3.96 8.4375 4.21875 8.4375H5.15625C5.415 8.4375 5.625 8.6475 5.625 8.90625C5.625 9.165 5.415 9.375 5.15625 9.375ZM5.15625 12.1875H4.21875C3.96 12.1875 3.75 11.9775 3.75 11.7188C3.75 11.46 3.96 11.25 4.21875 11.25H5.15625C5.415 11.25 5.625 11.46 5.625 11.7188C5.625 11.9775 5.415 12.1875 5.15625 12.1875Z" fill="#0077C6" />
                            </svg>
                        </div>
                        <span class="nav-tabs-item__name">Edit User</span>
                        </a>
                    </li> --}}
                    <li class="nav-tabs__item">
                        <a class="nav-tabs__link nav-tabs-item nav-tabs-item--choose {{ $tab == 'pendingapprasial' ? 'nav-tabs-item--active' : '' }}" href="#pendingapprasial" data-tab="pendingapprasial">
                        <div class="nav-tabs__item-icon nav-tabs-item__icon-wr">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.25 0H3.75C2.71594 0 1.875 0.840937 1.875 1.875V13.125C1.875 14.1591 2.71594 15 3.75 15H11.25C12.2841 15 13.125 14.1591 13.125 13.125V1.875C13.125 0.840937 12.2841 0 11.25 0ZM10.7812 12.1875H7.03125C6.7725 12.1875 6.5625 11.9775 6.5625 11.7188C6.5625 11.46 6.7725 11.25 7.03125 11.25H10.7812C11.04 11.25 11.25 11.46 11.25 11.7188C11.25 11.9775 11.04 12.1875 10.7812 12.1875ZM10.7812 9.375H7.03125C6.7725 9.375 6.5625 9.165 6.5625 8.90625C6.5625 8.6475 6.7725 8.4375 7.03125 8.4375H10.7812C11.04 8.4375 11.25 8.6475 11.25 8.90625C11.25 9.165 11.04 9.375 10.7812 9.375ZM10.7812 6.5625H7.03125C6.7725 6.5625 6.5625 6.3525 6.5625 6.09375C6.5625 5.835 6.7725 5.625 7.03125 5.625H10.7812C11.04 5.625 11.25 5.835 11.25 6.09375C11.25 6.3525 11.04 6.5625 10.7812 6.5625ZM10.7812 3.75H7.03125C6.7725 3.75 6.5625 3.54 6.5625 3.28125C6.5625 3.0225 6.7725 2.8125 7.03125 2.8125H10.7812C11.04 2.8125 11.25 3.0225 11.25 3.28125C11.25 3.54 11.04 3.75 10.7812 3.75ZM5.15625 3.75H4.21875C3.96 3.75 3.75 3.54 3.75 3.28125C3.75 3.0225 3.96 2.8125 4.21875 2.8125H5.15625C5.415 2.8125 5.625 3.0225 5.625 3.28125C5.625 3.54 5.415 3.75 5.15625 3.75ZM5.15625 6.5625H4.21875C3.96 6.5625 3.75 6.3525 3.75 6.09375C3.75 5.835 3.96 5.625 4.21875 5.625H5.15625C5.415 5.625 5.625 5.835 5.625 6.09375C5.625 6.3525 5.415 6.5625 5.15625 6.5625ZM5.15625 9.375H4.21875C3.96 9.375 3.75 9.165 3.75 8.90625C3.75 8.6475 3.96 8.4375 4.21875 8.4375H5.15625C5.415 8.4375 5.625 8.6475 5.625 8.90625C5.625 9.165 5.415 9.375 5.15625 9.375ZM5.15625 12.1875H4.21875C3.96 12.1875 3.75 11.9775 3.75 11.7188C3.75 11.46 3.96 11.25 4.21875 11.25H5.15625C5.415 11.25 5.625 11.46 5.625 11.7188C5.625 11.9775 5.415 12.1875 5.15625 12.1875Z" fill="#0077C6" />
                            </svg>
                        </div>
                        <span class="nav-tabs-item__name">Appraiser Requests</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="account-settings__content-wr">
                <!-- Edit Profile -->
                @include('admin-settings.partials._edit-profile')
                 <!-- Edit Profile -->
                 @include('admin-settings.partials._shop-services')
                  <!-- Edit User -->
                  @include('admin-settings.partials._users-list')
                   <!-- Edit User -->
                   @include('admin-settings.partials.shop-appraisal')
                <!-- Reports -->
                @include('admin-settings.partials._reports')

                <!-- Payment methods -->
                @include('admin-settings.partials._payment-methods')

                <!-- Manage Notification -->
                @include('admin-settings.partials._manage-notifications')

            </div>
            </div>
        </div>
        </div>

    </main>

    @include('shop-settings.partials._modals._add-payment-method-modal')

@endsection

{{-- Styles Section --}}
@section('styles')
    <link href="{{ asset('/assets/css/adminSettings.css') }}" rel="stylesheet" type="text/css" />
@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('/assets/js/adminSettings.js') }}" type="text/javascript"></script>
@endsection