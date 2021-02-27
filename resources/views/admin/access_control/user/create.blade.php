@extends('admin.layouts.master')
@section('styles')
@endsection
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
                    <h5 class="text-dark font-weight-bold my-2 mr-5">Base Controls</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="" class="text-muted">Crud</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="" class="text-muted">Forms &amp; Controls</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
        </div>
    </div>
    <!--end::Subheader-->
    <div class="content flex-column-fluid" id="kt_content">
        <div class="row">
            <div class="col-md-12">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Create New User</h3>
                        <div class="card-toolbar">
                            <!--begin::Button-->
                            <a href="{{route('roles.index')}}" class="btn btn-primary font-weight-bolder">
                                <i class="la la-list"></i>See Record</a>
                            <!--end::Button-->
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form action="{{route('users.store')}}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input class="form-control" name="name" type="text" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input class="form-control" name="email" type="text" placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label class="control-label">password</label>
                                <input class="form-control" name="password" type="password" placeholder="Enter password">
                            </div>
                            <div class="form-group">
                                <label class="control-label">password_confirmation</label>
                                <input class="form-control" name="password_confirmation" type="password" placeholder="Enter password_confirmation">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Roles</label>
                                <select class="form-control demoSelect" name="roles[]" id="demoSelect" multiple="">
                                    @forelse($roles as $role)
                                    <option value="{{$role}}">{{$role}}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card-->


            </div>

        </div>
    </div>
    <!--end::Content-->
</div>
@endsection
@section('scripts')
@endsection