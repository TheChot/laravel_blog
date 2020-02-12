@extends('admin.layouts.main')
@section('css')
{{-- <link href="{{ asset('admin/css/bootstrap-fileupload.min.css') }}" rel="stylesheet" /> --}}

@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="page-head-line">ADD TEAM MEMBER</h1>
        <h1 class="page-subhead-line">Use this page to add a Team Member </h1>

    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                ADD TEAM MEMBER
            </div>
            <div class="panel-body">
                <form role="form" method="POST" action="{{route('admin.team.add')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>Enter Title</label>
                        <input class="form-control" type="text" name="title">

                    </div>
                    <div class="form-group">
                        <label>Enter Name</label>
                        <input class="form-control" type="text" name="name">

                    </div>
                    <div class="form-group">
                        <label>Level</label>
                        <input class="form-control" type="number" name="level">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Upload Image</label>

                        <input type="file" name="cover_image" id="">
                    </div>

                    <div class=" form-group">
                        <label>Bio</label>
                        <textarea class="form-control" rows="7" name="bio"></textarea>
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

                    <button type="submit" class="btn btn-primary">SAVE TEAM MEMBER </button>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
{{-- <script src="{{ asset('admin/js/bootstrap-fileupload.js') }}"></script> --}}
@endsection