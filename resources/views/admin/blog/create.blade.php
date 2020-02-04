@extends('admin.layouts.main')
@section('css')
{{-- <link href="{{ asset('admin/css/bootstrap-fileupload.min.css') }}" rel="stylesheet" /> --}}

@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="page-head-line">ADD BLOG</h1>
        <h1 class="page-subhead-line">Use this page to add a post </h1>

    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-danger">
            <div class="panel-heading">
                ADD BLOG
            </div>
            <div class="panel-body">
                <form role="form" method="POST" action="{{route('admin.blog.add')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>Enter Title</label>
                        <input class="form-control" type="text" name="title">

                    </div>
                    <div class="form-group">
                        <label class="control-label">Upload Image</label>
                        {{-- <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <span class="btn btn-file btn-default">
                                    <span class="fileupload-new">Select file</span>
                                    <span class="fileupload-exists">Change</span>
                                    <input type="file" name="cover_image">
                                </span>
                                <span class="fileupload-preview"></span>
                                <a href="#" class="close fileupload-exists" data-dismiss="fileupload"
                                    style="float: none">×</a>
                            </div>
                        </div> onchange="alert(this.value)" --}}
                        <input type="file" name="cover_image" id="">
                    </div>

                    <div class=" form-group">
                        <label>Text area</label>
                        <textarea class="form-control" rows="7" name="body"></textarea>
                    </div>

                    <button type="submit" class="btn btn-danger">Register Now </button>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
{{-- <script src="{{ asset('admin/js/bootstrap-fileupload.js') }}"></script> --}}
@endsection