@extends('admin.layouts.master')
@section('content')

<div class="main d-flex flex-column flex-row-fluid">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4" id="kt_subheader">
        <div class="w-100 d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-2 mr-5">Accounts</h5>
                    <!--end::Page Title-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
        </div>
    </div>
    <!--end::Subheader-->
    <div class="content flex-column-fluid" id="kt_content">
        <div class="row">
            <div class="col-xl-4">
                <!--begin::List Widget 2-->
                <div class="card card-custom bg-light-success card-stretch gutter-b">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <h3 class="card-title font-weight-bolder text-success">Bkash</h3>
                        <div class="card-toolbar">
                            <div class="dropdown dropdown-inline">
                                <a href="#" class="btn btn-clean btn-hover-success btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ki ki-bold-more-ver text-success"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                    <!--begin::Naviigation-->
                                    <ul class="navi">

                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="flaticon2-shopping-cart-1"></i>
                                                </span>
                                                <span class="navi-text">Payment</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="navi-icon flaticon2-calendar-8"></i>
                                                </span>
                                                <span class="navi-text">Transfer</span>
                                                <span class="navi-label">
                                                    <span class="label label-light-danger label-rounded font-weight-bold">3</span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--end::Naviigation-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-2">
                        <!--begin::Item-->
                        <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block">$50,000</span>
                        <!-- <span class="font-weight-bold text-muted font-size-sm">Milestone Reached</span> -->
                        <!--end::Item-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::List Widget 2-->
            </div>

            <div class="col-xl-4">
                <!--begin::List Widget 1-->
                <div class="card card-custom card-stretch gutter-b">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label font-weight-bolder text-dark">DBBL</span>
                            <!-- <span class="text-muted mt-3 font-weight-bold font-size-sm">Pending 10 tasks</span> -->
                        </h3>
                        <div class="card-toolbar">
                            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                                <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ki ki-bold-more-ver"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right" style="">
                                    <!--begin::Naviigation-->
                                    <ul class="navi">

                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="flaticon2-shopping-cart-1"></i>
                                                </span>
                                                <span class="navi-text">Payment</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="navi-icon flaticon2-calendar-8"></i>
                                                </span>
                                                <span class="navi-text">Transfer</span>
                                                <span class="navi-label">
                                                    <span class="label label-light-danger label-rounded font-weight-bold">3</span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--end::Naviigation-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-8">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-10">
                            <!--begin::Text-->
                            <!--begin::Item-->
                            <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block">$50,000</span>
                            <!-- <span class="font-weight-bold text-muted font-size-sm">Milestone Reached</span> -->
                            <!--end::Item-->
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->

                    </div>
                    <!--end::Body-->
                </div>
                <!--end::List Widget 1-->
            </div>

        </div>
        <!--end::Card-->
    </div>
    <!--end::Content-->
</div>
<!--begin::Content Wrapper-->
@endsection