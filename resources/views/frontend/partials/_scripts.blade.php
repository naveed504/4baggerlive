<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/font-awesome.js') }}"></script>
<script src="{{ asset("js/toastr.js") }}"></script>
 <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
 <script src="{{ asset('js/inputmask.js') }}"></script>
 {!! JsValidator::formRequest('App\Http\Requests\DirectorRequest', '#director_registration_form') !!}
 {!! JsValidator::formRequest('App\Http\Requests\CoachRequest', '#team_registration_form') !!}
 {!! JsValidator::formRequest('App\Http\Requests\PlayerRequest', '#player_registration_form') !!}
<script>
    $('.phoneNumber').inputmask("(+1) 999-999-9999");
</script>
