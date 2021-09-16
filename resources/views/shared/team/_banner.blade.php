<section class="bgbanner1">
</section>
<section>
    <div class="d__flex-one">
        <div class="mx__50">
            <div class="logo--wrapper--inner">
                <img src=" @if(empty($team->team_profile)) {{ asset('images/team/teamimages/logo.png') }} @else {{ asset('images/team/teamimages/'.$team->team_profile) }} @endif " class="img-fluid" alt="">
            </div>
            <h2>Team</h2>
        </div>
        <div class="mx__60">
            <h2>{{ $team->team_name }}</h2>
        </div>
    </div>
</section>
