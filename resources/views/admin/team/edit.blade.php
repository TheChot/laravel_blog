@extends('admin.layouts.main')
@section('css')
{{-- <link href="{{ asset('admin/css/bootstrap-fileupload.min.css') }}" rel="stylesheet" /> --}}

@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="page-head-line">EDIT TEAM MEMBER</h1>
        <h1 class="page-subhead-line">Use this page to edit a Team Member </h1>

    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                EDIT TEAM MEMBER
            </div>
            <div class="panel-body">
                <form role="form" method="POST" action="{{route('admin.team.edit', $team_member->id)}}"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>Enter Title</label>
                        <input class="form-control" type="text" name="title" value="{{$team_member->title}}">

                    </div>
                    <div class="form-group">
                        <label>Enter Name</label>
                        <input class="form-control" type="text" name="name" value="{{$team_member->name}}">

                    </div>
                    <div class="form-group">
                        <label>Level</label>
                        <input class="form-control" type="number" name="level" value="{{$team_member->level}}">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Upload Image</label>

                        <input type="file" name="cover_image" id="">
                        <p><em>{{$team_member->profile_img}}</em> </p>
                    </div>

                    <div class=" form-group">
                        <label>Bio</label>
                        <textarea class="form-control" rows="7" name="bio">{{$team_member->bio}}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Active </label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="status" id="optionsRadios1" value="0" @if($team_member->status
                                == 0) checked @endif>Yes
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="status" id="optionsRadios2" value="1" @if($team_member->status
                                == 1) checked @endif>No
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