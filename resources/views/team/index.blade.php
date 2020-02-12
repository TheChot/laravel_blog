@extends('main')

@section('page-name')


@endsection

@section('content')
@include('inc.top_image')
{{-- You did something funny with the divvs to get the rows to work --}}
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
    @php
    $level_count = 0;
    $open_closing_tag = false;
    @endphp

    @foreach ($team_members as $team_member)
    @if ($team_member->level > $level_count || $loop->iteration == 1)
    {{-- 2. this is the closing div tag for the row --}}
</div>
{{-- 1. this is the opening div tag for the row this is a 4 step solution  --}}
{{-- 3.when the team member level is higher it closes the row for the other div and starts a new row --}}
<div class=" team-area">
    @php
    $level_count = $team_member->level;
    $open_closing_tag = true;
    @endphp
    @endif
    <div class="col-md-3 team-member-card" data-toggle="modal" data-target="#modal-{{$team_member->id}}">
        <div class="card-img">
            <img src="/storage/media/team_images/{{$team_member->profile_img}}" alt="" class="img-responsive"
                style="margin-bottom:20px;" />
        </div>
        <div class="card-bod">
            <h4>{{$team_member->name}}</h4>
            <p><em>{{$team_member->title}}</em> </p>



        </div>
        <div class="modal fade" id="modal-{{$team_member->id}}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-img">
                            <img src="/storage/media/team_images/{{$team_member->profile_img}}" alt=""
                                class="img-responsive" style="margin-bottom:20px;" />
                        </div>
                        <div class="card-bod">
                            <h4>{{$team_member->name}}</h4>
                            <p><em>{{$team_member->title}}</em></p>


                        </div>
                        <div class='card-info'>
                            <p>{{$team_member->bio}}</p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    @endforeach
    {{-- 4.this div closes the last row --}}
</div>



@else
<h1>No Team Members</h1>
@endif

</div>

@endsection
@section('scripts')


@endsection