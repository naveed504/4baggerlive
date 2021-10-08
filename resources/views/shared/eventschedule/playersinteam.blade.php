
                    <table class="table reduce-padding">
                        <thead>
                            <th>#</th>
                            <th>Team Name</th> 
                            <th> Name</th>                       
                            <th> Profile</th>                       
                                                    
                            <th> City</th>
                            <th> Height</th>
                            <th> Number</th>
                            <th> Throw</th>
                            <th> Bat</th>
                           
                        </thead>
                        <tbody> 
                            @forelse($playerinTeam as $teamplayer)     
                            <tr>
                                <td>{{  $loop->iteration }}</td>
                                <td>{{ $teamplayer->user->name }}</td>
                                <td>{{ $teamplayer->team->team_name }}</td>
                                <td><img src="{{ asset('frontend/player/'. $teamplayer->player_file)}}" style="height:50px;width:50px"></td>
                                <td>{{ $teamplayer->p_city }}</td>
                                <td>{{ $teamplayer->player_height }}</td>
                                <td>{{ $teamplayer->user->cell_number }}</td>
                                <td>{{ $teamplayer->player_throw }}</td>
                                <td>{{ $teamplayer->player_bat }}</td>
                               
                            </tr>
                            @empty
                            <tr>
                            <td></td>
                            <td>No Record Found</td>
                            <td></td>
                            </tr>
                            @endforelse
                       
                        </tbody>
                    </table>
               