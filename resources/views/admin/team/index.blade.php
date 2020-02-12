@extends('admin.layouts.main')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="page-head-line">ALL TEAM MEMBERS</h1>
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
                    @if (count($team_members) > 0)
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Name</th>
                                <th>Level</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Date Posted</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($team_members as $team_member)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$team_member->title}}</td>
                                <td>{{$team_member->name}}</td>
                                <td>{{$team_member->level}}</td>
                                <td>@if($team_member->status == 0) <p class="btn btn-success">ACTIVE</p> @else <p
                                        class="btn btn-danger">DISABLED</p> @endif</td>
                                <td><a href="{{route('admin.team.edit.page', $team_member->id)}} "
                                        class="btn btn-info">EDIT</a> </td>
                                <td>{{$team_member->created_at}}</td>

                            </tr>
                            @endforeach




                        </tbody>
                    </table>
                    {{-- <div>{{$team_members->links}}</div> --}}


                @else
                <h2>No Team Members Added Yet</h2>

                @endif
            </div>
        </div>
    </div>
</div>
</div>


@endsection