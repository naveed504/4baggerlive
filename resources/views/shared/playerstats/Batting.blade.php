<table class="table table-striped">
    <thead>
        <th>Season</th>
        <th>Matches</th>
        <th>INN</th>
        <th>1B</th>
        <th>2B</th>
        <th>3B</th>
        <th>AB</th>
        <th>AB/HR</th>
        <th>BA </th>
        <th>BB</th>
        <th>BB/K</th>
        <th>BsR </th>
        <th>GPA</th>
        <th>GS</th>
        <th>H</th>
        <th>HBP</th>
        <th>HR</th>
        <th>HR/H </th>
        <th>K </th>
        <th>LOB  </th>
        <th>OBP </th>
        <th>R </th>
        <th>RC </th>
        <th>RP </th>
        <th>RBI </th>
        <th>TA </th>
        <th>TB </th>
    </thead>
    <tbody>
        @foreach(Helpers::batGroupBySeason($player) as $key => $bat)
        <tr>
            <td>{{ __('2021') }}</td>
            <td>{{ $bat->total_matches }}</td>
            <td>{{ $bat->innings }}</td>
            <td>{{ $bat->single }}</td>
            <td>{{ $bat->doubles }}</td>
            <td>{{ $bat->triple }}</td>
            <td>{{ $bat->at_bat }}</td>
            <td>{{ $bat->at_bats_per_homerun }}</td>
            <td>{{ $bat->batting_avg }}</td>
            <td>{{ $bat->base_on_balls }}</td>
            <td>{{ $bat->walk_to_strikeout_ratio }}</td>
            <td>{{ $bat->base_runs }}</td>
            <td>{{ $bat->gross_production_avg }}</td>
            <td>{{ $bat->grand_slam }}</td>
            <td>{{ $bat->hit }}</td>
            <td>{{ $bat->hit_by_pitch }}</td>
            <td>{{ $bat->home_runs }}</td>
            <td>{{ $bat->home_runs_per_hit }}</td>
            <td>{{ $bat->strikeout }}</td>
            <td>{{ $bat->left_on_base }}</td>
            <td>{{ $bat->on_base_percentage }}</td>
            <td>{{ $bat->runs_scored }}</td>
            <td>{{ $bat->runs_created }}</td>
            <td>{{ $bat->runs_produced }}</td>
            <td>{{ $bat->runs_batted_in}}</td>
            <td>{{ $bat->total_avg }}</td>
            <td>{{ $bat->total_bases }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
