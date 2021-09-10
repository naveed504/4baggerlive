<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
@yield('scripts')
<script src="{{ asset('js/site.js') }}"></script>
<script src="{{ asset('js/toastr.js') }}"></script>
<script src="{{ asset('js/font-awesome.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! JsValidator::formRequest('App\Http\Requests\coach\CoachRequest', '#reg_coach_team') !!}
{!! JsValidator::formRequest('App\Http\Requests\coach\CoachRequest', '#edit_coach_team') !!}
{!! JsValidator::formRequest('App\Http\Requests\Payment\PaymentRequest', '#paymentformrequest') !!}


