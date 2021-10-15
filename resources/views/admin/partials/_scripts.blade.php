<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{asset('admin/js/scripts.js')}}"></script>
<script src="{{asset('js/toastr.js')}}"></script>
<script src="{{asset('js/admin.js')}}"></script>



<!-- *************************yajra datatable*********************************************** !-->
<script src="{{ asset('admin/js/adminjs/jquery-validate.js') }}"></script>
<script src="{{ asset('admin/js/adminjs/datatables.min.js') }}"></script>
<script src="{{ asset('admin/js/adminjs/bootstrap4.1.min.js') }}"></script>
<script src="{{ asset('admin/js/adminjs/datatable.bootstrap4.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
<!-- *************************yajra datatable*********************************************** !-->

{!! JsValidator::formRequest('App\Http\Requests\director\CreateEventRequest', '#createEvent') !!}
{!! JsValidator::formRequest('App\Http\Requests\director\EditEventRequest', '#editEvent') !!}
{!! jsValidator::formRequest('App\Http\Requests\coach\CoachRequest','#edit_coach_team') !!}
{!! jsValidator::formRequest('App\Http\Requests\director\EditEventRequest','#editEvent') !!}
{!! JsValidator::formRequest('App\Http\Requests\admin\EditDirectorRequest','#director_registration_form') !!}
{!! JsValidator::formRequest('App\Http\Requests\admin\SliderRequest','#sliderRequest') !!}
{!! JsValidator::formRequest('App\Http\Requests\admin\GeneralContactInfoRequest','#generalprofilesetting') !!}
@yield('scripts')
