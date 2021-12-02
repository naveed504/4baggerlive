<banner class="event-banner"> 
        <div class="event_banner_inner">
            <span class="event_heder-img"><img src="{{ asset('images/event/'.$event->event_logo) }}" class="img-fluid" alt="logo"></span>
            <div class="event_banner_text">
                <h1 class="event_bannerr_hed">{{ $event->event_name }}</h1>
                <p class="event_bannerr_text">{{ date('M d' , strtotime($event->start_date)) }} | {{ $event->event_city }}, {{ $event->state->state_name }}</p>
            </div>
        </div>

    </banner>