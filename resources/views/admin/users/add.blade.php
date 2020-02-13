@extends('admin.layouts.main')
@section('css')
{{-- <link href="{{ asset('admin/css/bootstrap-fileupload.min.css') }}" rel="stylesheet" /> --}}

@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="page-head-line">ADD USER</h1>
        <h1 class="page-subhead-line">Use this page to add a User </h1>

    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                ADD A USER
            </div>
            <div class="panel-body">
                <form role="form" method="POST" action="{{route('admin.user.add')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>Enter Name</label>
                        <input class="form-control" type="text" name="name">

                    </div>
                    <div class="form-group">
                        <label>Enter Email</label>
                        <input class="form-control" type="email" name="email">

                    </div>
                    <div class="form-group">
                        <label>Enter Username</label>
                        <input class="form-control" type="text" name="username">

                    </div>
                    <div class="form-group">
                        <label>Enter Password</label>
                        <input class="form-control" type="password" name="password">

                    </div>
                    <div class="form-group">
                        <label>User Type </label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="user_type" id="optionsRadios1" value="0" checked>User
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="user_type" id="optionsRadios2" value="1">Admin
                            </label>
                        </div>

                    </div>





                    <div class="form-group">
                        <label>Active </label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="status" id="optionsRadios1" value="0" checked>Yes
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="status" id="optionsRadios2" value="1">No
                            </label>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary">SAVE USER </button>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
{{-- <script src="{{ asset('admin/js/bootstrap-fileupload.js') }}"></script> --}}
@endsection