<div class="container">
    <div class="row">
        <div class="col-sm-12 my-5">
            <p class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">
                <strong>Total Events</strong>
            </p>
        </div>
        @forelse ($events as $event)
        <div class="col-sm-4 mb-5">
                <a class="text-decoration-none text-dark"
                    href="{{ Auth::check() ? route('view.event.coach', $event->id) : route('view.event', $event->id) }}">
                <div class="bg-light border-grey">
                    <div class="row p-3">
                        <div class="col-2">
                            <img src="{{ asset('/images/event/'.$event->event_logo) }}" alt="" width="50">
                        </div>
                        <div class="col-sm-7 sub_line">
                            {{ date('M y', strtotime($event->start_date)) }}
                        </div>
                        <div class="col-sm-3">
                            <p class="sub_para text-primary">  {{ $event->eventRegTeams->count() ?? 0 }}  Teams</p>
                        </div>
                    </div>
                    <div class="row py-4">
                        <div class="col-sm-12 text-center">
                            <p class="heading-color"><strong>{{ $event->event_name }}</strong></p>
                            <p class="text-brown">{{ implode(" | ",json_decode($event->event_venue)) }}</p>
                            <p class="text-brown">{{ $event->event_city}}, {{ $event->state->state_name }}</p>
                        </div>
                        <div class="col-sm-12 text-center mt-3">
                            <p class="sub_line text-uppercase text-danger">Four Baggers Headquarters</p>
                        </div>
                    </div>
                </div>
            </a>
            </div>
        @empty
            <div class="col-sm-12 my-5">
                <h6 class="text-danger text-center text-uppercase">No Event Registered Yet</h6>
            </div>
        @endforelse
    </div>
</div>
