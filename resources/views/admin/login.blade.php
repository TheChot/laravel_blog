@extends('admin.layouts.login-layout')

@section('content')
<div class="login-page">
    <div class="panel panel-danger login-area">
        <div class="panel-heading">
            LOGIN
        </div>
        <div class="panel-body">
            <form role="form">

                <div class="form-group">
                    <label>Enter Email</label>
                    <input class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label>Enter Password</label>
                    <input class="form-control" type="password">
                </div>


                <a href="{{route('admin.dashboard')}}" class="btn btn-danger">LOGIN</a>

            </form>
        </div>
    </div>
</div>

@endsection