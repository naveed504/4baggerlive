<div class="col-sm-12 mb-4 text-center text-uppercase">
    <img src="{{ asset('images/event/'.$event->event_logo) }}" class="rounded img-responsive imgresponsive w-25" alt="event logo image" >
    <h3 class="text-center p-4 heading-color">{{ $event->event_name }}</h3>
    <h5 class="text-center heading-color">
        {{ date('M d' , strtotime($event->start_date)) }} |
        {{ $event->event_city }}, {{ $event->state->state_name }}
    </h5>
</div>
<div class="col-sm-12 text-center mb-4">
    <a class="btn btn-primary heading_btn text-uppercase"
        @if($event->approved == 0) disabled @endif
        @if(Auth::user()->type == 3)
            href="{{ route('addToEvent', $event->id) }}"
        @endif
    >Invite Team</a>
    <a class="btn btn-primary heading_btn text-uppercase"
        @if(Auth::user()->type == 1)
            href="{{ route('events.show', $event->id) }}"
        @elseif(Auth::user()->type == 2)
            href="{{ route('event.show', $event->id) }}"
        @elseif(Auth::user()->type == 3)
            href="{{ route('view.event.coach', $event->id) }}"
        @endif
    >Event Information</a>
    <a class="btn btn-primary heading_btn text-uppercase"
    @if( Auth::user()->type == 3)
        href="{{ route('showTotalTeams', $event->id) }}"
    @elseif( Auth::user()->type == 2)
        href="{{ route('showteamsinevent', $event->id) }}"
    @elseif(Auth::user()->type == 1)
        href="{{ route('showAdminTeams', $event->id) }}"
    @endif

    >Total Teams</a>
    <button class="btn btn-primary heading_btn text-uppercase"
        @if($event->approved == 0) disabled @endif>Standings</button>
</div>
<div class="col-sm-12 mb-4">
    <h3 class="text-center p-4 heading-color text-uppercase">Event Information</h3>
    <p class="text-uppercase text-center">{{ $event->event_summary }}</p>
</div>
