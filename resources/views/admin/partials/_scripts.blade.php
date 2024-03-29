    <script src="{{ asset('js/jquery.js') }}"></script>
    <script
      src="{{ asset('js/bootstrap.bundle.min.js') }}"
    ></script>
    <script src="{{asset("admin/js/scripts.js")}}"></script>
    <script src="{{asset("js/toastr.js")}}"></script>
    <script src="{{asset("js/admin.js")}}"></script>



    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script>
$('.custom-file input').change(function (e) {
        var files = [];
        for (var i = 0; i < $(this)[0].files.length; i++) {
            files.push($(this)[0].files[i].name);
        }
        $(this).next('.custom-file-label').html(files.join(', '));
        });
</script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script  src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script  src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
        <!-- *************************yajra datatable*********************************************** !-->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> -->

    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
        <!-- *************************yajra datatable*********************************************** !-->
   

    {!! JsValidator::formRequest('App\Http\Requests\director\CreateEventRequest', '#createEvent') !!}
    {!! JsValidator::formRequest('App\Http\Requests\director\EditEventRequest', '#editEvent') !!}
    {!! jsValidator::formRequest('App\Http\Requests\coach\CoachRequest','#edit_coach_team') !!}
    {!! jsValidator::formRequest('App\Http\Requests\director\EditEventRequest','#editEvent') !!}
    {!! JsValidator::formRequest('App\Http\Requests\admin\EditDirectorRequest','#director_registration_form') !!}
    {!! JsValidator::formRequest('App\Http\Requests\admin\SliderRequest','#sliderRequest') !!}
    {!! JsValidator::formRequest('App\Http\Requests\admin\GeneralContactInfoRequest','#generalprofilesetting') !!}

    
    {!! JsValidator::formRequest('App\Http\Requests\player\PlayerRanksRequest', '#manage_player_ranks') !!} 
    {!! JsValidator::formRequest('App\Http\Requests\player\PlayerPitchRequest', '#player_pitch') !!}
    {!! JsValidator::formRequest('App\Http\Requests\player\PlayerFieldRequest', '#player_field') !!}
    {!! JsValidator::formRequest('App\Http\Requests\player\PlayerBatStateRequest','#batting_stats') !!}
    @yield('scripts')
