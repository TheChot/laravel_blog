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
                    @if (count($contacts) > 0)
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Names</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Date Contacted</th>
                                <th>View</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($contacts as $contact)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$contact->first_name}}</td>
                                <td>{{$contact->last_name}}</td>
                                <td>{{$contact->email}}</td>
                                <td>{{$contact->created_at}}</td>
                                <td><a href="{{route('admin.single_contact', $contact->id)}} "
                                        class="btn btn-info">VIEW</a> </td>


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