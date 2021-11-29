<div class="container">
   
    <div class="row my-5 ">
        <div class="col-sm-12">
           
            <h5 class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">Teams Of  {{ $event->event_name}}</h5>
        </div>
    </div>
    @foreach($eventteams as $evntteam)
    <div class="row my-5">
        <div class="col-sm-6">
       
            <div class="row">
                <div class="col-sm-3">
                    <img src="{{ asset('images/team/teamimages/'. $evntteam->teams->team_profile) }}" class="rounded img-responsive " alt="" style="height:100px; width:100px;" >
                </div>
                <div class="col-sm-6">
                    <h6>Team Name : {{ $evntteam->teams->team_name}}</h6>
                     <p>Team State : {{ $evntteam->teams->state->state_name}}</p>
                    <h6>Team AgeGroup: {{$evntteam->teams->agegroup->age_group}}</h6>
                   
                </div>
            </div>
            <hr>
      
           
     
       </div>
    </div>
    @endforeach
</div>
<!-- <a href="{{route('show.teamdetails', $event->id) }}" style="text-decoration:none">{{$event->team_name}} </a> -->