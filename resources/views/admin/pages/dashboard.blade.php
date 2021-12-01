@extends('admin.master')
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-xl-3 col-md-3">
          <div class="card card__one--wrapper text-white mb-4">
            <div class="card-body">
              <div class="flex__wrapper-two">
                <div class="float-left">
                  <i class="fas fa-users team_box1"></i>
                </div>
                <div>
                  <p class="card-label-one">Total Teams</p>
                  <h3 class="card-heading-one">{{ $totalteams }}</h3>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-3">
          <div class="card card__two--wrapper text-white mb-4">
            <div class="card-body">
              <div class="flex__wrapper-two">
              <div class="float-left">

                <i class="fas fa-football-ball team_box1"></i>
                </div>
                <div>
                  <p class="card-label-one">Active Teams</p>
                  <h3 class="card-heading-one">{{$activeteams}} </h3>
                </div>

              </div>
            </div>
          </div>
        </div>
          <div class="col-xl-3 col-md-3">
            <div class="card card__three--wrapper text-white mb-4">
              <div class="card-body">
                <div class="flex__wrapper-two">
                <div class="float-left">

                    <i class="far fa-calendar-alt team_box1"></i>
                  </div>
                  <div>
                    <p class="card-label-one">Teams In Event</p>
                    <h3 class="card-heading-one">{{ $teamsinevent}}</h3>
                  </div>

                </div>
              </div>

            </div>
          </div>
        <div class="col-xl-3 col-md-3">
          <div class="card card__four--wrapper text-white mb-4">
            <div class="card-body">
              <div class="flex__wrapper-two">
              <div class="float-left">

                 <i class="far fa-edit team_box1"></i>
                </div>
                <div>
                  <p class="card-label-one">  Buy Subscription Plans   </p>
                  <h3 class="card-heading-one">{{ $totalsubscriptionusers }}</h3>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="row">
        <div class="col-xl-3 col-md-3">
          <div class="card card__two--wrapper text-white mb-4">
            <div class="card-body">
              <div class="flex__wrapper-two">
                <div class="float-left">
                  <i class="fas fa-skating team_box1"></i>
                </div>
                <div>
                  <p class="card-label-one">Total Active Events</p>
                  <h3 class="card-heading-one">{{ $totalactiveevents }}</h3>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-3">
          <div class="card card__one--wrapper text-white mb-4">
            <div class="card-body">
              <div class="flex__wrapper-two">
              <div class="float-left">
                <i class="fas fa-users-cog team_box1"></i>
                </div>
                <div>
                  <p class="card-label-one">Total Users</p>
                  <h3 class="card-heading-one">{{$totalusers}} </h3>
                </div>

              </div>
            </div>
          </div>
        </div>
          <div class="col-xl-3 col-md-3">
            <div class="card card__four--wrapper text-white mb-4">
              <div class="card-body">
                <div class="flex__wrapper-two">
                <div class="float-left">

                    <i class="fas fa-users team_box1"></i>
                  </div>
                  <div>
                    <p class="card-label-one">total Coach</p>
                    <h3 class="card-heading-one">{{ $totalcoach}}</h3>
                  </div>

                </div>
              </div>

            </div>
          </div>
        <div class="col-xl-3 col-md-3">
          <div class="card card__three--wrapper text-white mb-4">
            <div class="card-body">
              <div class="flex__wrapper-two">
              <div class="float-left">

                 <i class="fas fa-football-ball team_box1"></i>
                </div>
                <div>
                  <p class="card-label-one">  Total Player   </p>
                  <h3 class="card-heading-one">{{ $totalplayer }}</h3>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  
     <div class="row">
        <div class="col-xl-12 col-md-6 p-0">
            <div class="graph__wrapper-width">
              <h2 class="main-right-heading">4Bagger Monthly Stats</h2>
              <div class="chart-container">
                <div class="chart has-fixed-height" id="bars_basic"></div>
              </div>          
          </div>
        </div>
     </div>

    <script type="text/javascript" src="{{asset('admin/graphchart/js/echarts.min.js')}}"></script>
    <script type="text/javascript">
var bars_basic_element = document.getElementById('bars_basic');
if (bars_basic_element) {
    var bars_basic = echarts.init(bars_basic_element);
    bars_basic.setOption({
        color: ['#3398DB'],
        tooltip: {
            trigger: 'axis',
            axisPointer: {            
                type: 'shadow'
            }
        },
        grid: {
            left: '3%',
            right: '4%',
            bottom: '3%',
            containLabel: true
        },
        xAxis: [
            {
                type: 'category',
                data: ['Users', 'Teams','DirectorEvent','TeamsInEvent'],
                axisTick: {
                    alignWithLabel: true
                }
            }
        ],
        yAxis: [
            {
                type: 'value'
            }
        ],
        series: [
            {
                name: '4Bagger Current Month Stats',
                type: 'bar',
                barWidth: '20%',
                data: [
                    {{$userscount}},
                    {{$teamscount}},
                    {{$eventscount}},
                    {{$teamseventcount}}, 
                ]
            }
        ]
    });
}
</script>
@endsection
