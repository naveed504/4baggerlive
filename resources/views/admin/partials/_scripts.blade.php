    <script src="{{ asset('js/jquery.js') }}"></script>
    <script
      src="{{ asset('js/bootstrap.bundle.min.js') }}"
    ></script>
    <script src="{{asset("admin/js/scripts.js")}}"></script>
    <script src="{{asset("js/toastr.js")}}"></script>
    <script src="{{asset("js/admin.js")}}"></script>
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\director\CreateEventRequest', '#createEvent') !!}
    {!! JsValidator::formRequest('App\Http\Requests\director\EditEventRequest', '#editEvent') !!}
    {!! jsValidator::formRequest('App\Http\Requests\coach\CoachRequest','#edit_coach_team') !!}
    {!! jsValidator::formRequest('App\Http\Requests\director\EditEventRequest','#editEvent') !!}
    {!! JsValidator::formRequest('App\Http\Requests\admin\EditDirectorRequest','#director_registration_form') !!}
    @yield('scripts')
