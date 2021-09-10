<table class="table table-striped">
    <thead>
        <th>Season</th>
        <th>Matches</th>
        <th>INN</th>
        <th>GS</th>
        <th>CG</th>
        <th>SHO</th>
        <th>H</th>
        <th>R</th>
        <th>ER</th>
        <th>HR</th>
        <th>BB</th>
        <th>K</th>
    </thead>
    <tbody>
        @foreach(Helpers::pitchGroupBySeason($player) as $key => $pitch)
        <tr>
            <td>{{ __('2021') }}</td>
            <td>{{ $pitch->total_matches }}</td>
            <td>{{ $pitch->innings_pitched }}</td>
            <td>{{ $pitch->games_started }}</td>
            <td>{{ $pitch->complete_games }}</td>
            <td>{{ $pitch->shut_out }}</td>
            <td>{{ $pitch->hits }}</td>
            <td>{{ $pitch->runs }}</td>
            <td>{{ $pitch->earned_runs }}</td>
            <td>{{ $pitch->home_runs }}</td>
            <td>{{ $pitch->base_on_balls }}</td>
            <td>{{ $pitch->strike_out }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
