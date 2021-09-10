<div class="container">
    <div class="row my-5 ">
        <div class="col-sm-12">
            <h5 class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">Teams Of  {{ $event->event_name}}</h5>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-sm-6">
        @forelse($event->team as $team)
            <div class="row">
                <div class="col-sm-3">
                    <img src="{{ asset('images/event/'.$event->event_logo) }}" class="rounded img-responsive " alt="" style="height:100px; width:100px;" >
                </div>
                <div class="col-sm-6">
                    <h6> <a href="{{route('show.teamdetails', $team->id) }}" style="text-decoration:none">{{$team->team_name}} </a></h6>
                    <p>{{$team->team_city}}</p>
                    <p>{{ $event->event_name }}</p>
                </div>
            </div>
            <hr>
        @empty
            <h4 class="text-center">Records Not Found</h4>
        @endforelse
       </div>
    </div>
</div>
