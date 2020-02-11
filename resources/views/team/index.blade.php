@extends('main')

@section('page-name')


@endsection

@section('content')
@include('inc.top_image')
<div class="container top-title">
    <div class="row">
        <div class="col-md-12">
            <h1>
                Team Members
            </h1>
        </div>

    </div>
</div>
<div class="container">
    @if (count($team_members) > 0)
    <div class="row">
        @foreach ($team_members as $team_member)
        <div class="col-md-3">

        </div>
        @endforeach

    </div>

    @else
    <h1>No Team Members</h1>
    @endif

</div>

@endsection
@section('scripts')


@endsection