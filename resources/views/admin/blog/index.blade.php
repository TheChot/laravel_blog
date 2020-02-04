@extends('admin.layouts.main')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="page-head-line">ALL BLOGS</h1>
        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                {{-- This is where the blog types are switched --}}
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    @if (count($blogs) > 0)
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Date Posted</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($blogs as $blog)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$blog->title}}</td>
                                <td>Some Guy</td>
                                <td>ACTIVE </td>
                                <td><a href="{{route('admin.news.edit.page', $blog->id)}} "
                                        class="btn btn-info">EDIT</a> </td>
                                <td>{{$blog->created_at}}</td>

                            </tr>
                            @endforeach




                        </tbody>
                    </table>

                    @else
                    <h2>No Posts</h2>

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>


@endsection