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
                    @if (count($users) > 0)
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>User Type</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Date Created</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($users as $user)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>@if($user->user_type == 0) <p class="btn btn-info">USER</p> @else <p
                                        class="btn btn-warning">ADMIN</p> @endif
                                </td>
                                <td>@if($user->status == 0) <p class="btn btn-success">ACTIVE</p> @else <p
                                        class="btn btn-danger">DISABLED</p> @endif</td>
                                <td><a href="{{route('admin.user.edit.page', $user->id)}} "
                                        class="btn btn-info">EDIT</a> </td>
                                <td>{{$user->created_at}}</td>

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