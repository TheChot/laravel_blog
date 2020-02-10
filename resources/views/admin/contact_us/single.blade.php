@extends('admin.layouts.main')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="page-head-line">VIEW CONTACTS</h1>


    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>{{$contact->first_name.' '.$contact->last_name}}</h2>
        <h3>{{$contact->email}}</h3>
        <h3>{{$contact->phone_number}}</h3>
        <p>{{$contact->body}}</p>
    </div>
</div>


@endsection