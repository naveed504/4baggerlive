<table class="table table-striped">
    <thead>
        <th>Season</th>
        <th>Matches</th>
        <th>INN</th>
        <th>A</th>
        <th>CI</th>
        <th>DB</th>
        <th>FP</th>
        <th>PB</th>
        <th>PO</th>
        <th>E</th>
        <th>TC</th>
        <th>TP</th>
    </thead>
    <tbody>
        @foreach(Helpers::fieldGroupBySeason($player) as $key => $field)
        <tr>
            <td>{{ __('2021') }}</td>
            <td>{{ $field->total_matches }}</td>
            <td>{{ $field->innings }}</td>
            <td>{{ $field->assists }}</td>
            <td>{{ $field->catcher_interference }}</td>
            <td>{{ $field->double_plays }}</td>
            <td>{{ $field->fielding_percentage }}</td>
            <td>{{ $field->passed_ball }}</td>
            <td>{{ $field->put_out }}</td>
            <td>{{ $field->errors }}</td>
            <td>{{ $field->total_chances }}</td>
            <td>{{ $field->triple_play }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
