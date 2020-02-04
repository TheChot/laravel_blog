@extends('admin.layouts.login-layout')

@section('content')
<div class="login-page">
    <div class="panel panel-danger login-area">
        <div class="panel-heading">
            LOGIN
        </div>
        <div class="panel-body">
            <form role="form" method="POST" action="{{ route('login') }}">

                <div class="form-group">
                    <label>Enter Email</label>
                    <input class="form-control" type="text" name="email">
                </div>
                <div class="form-group">
                    <label>Enter Password</label>
                    <input class="form-control" type="password" name="password">
                </div>

                <button type="submit" class="btn btn-danger">LOGIN</button>
                {{-- <a href="{{route('admin.dashboard')}}" class="btn btn-danger">LOGIN</a> --}}

            </form>
        </div>
    </div>
</div>

@endsection