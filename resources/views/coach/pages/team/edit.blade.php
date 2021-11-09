@extends('coach.newmaster')
@section('content')
    <div class="container mb-5">
        <div class="col-sm-12 mb-5">
            <h3 class="text-center p-4 heading-color">Update Team</h3>
        </div>
        <form action="{{ route('teams.update', $team->id) }}" method="post" id="edit_coach_team" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            @include('shared.team.editform')
        </form>
    </div>
@endsection
