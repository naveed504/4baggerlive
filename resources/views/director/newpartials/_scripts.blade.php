<script src="{{ asset('director_assets/js/jquery.js') }} "></script>
<script src="{{ asset('director_assets/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('js/site.js') }} "></script>
<script src="{{ asset('js/toastr.js') }} "></script>
<script src="{{ asset('js/font-awesome.js') }}"></script>
<script src="{{ asset('js/inputmask.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $('.phoneNumber').inputmask("(+1) 999-999-9999"); 
</script>
@yield('scripts')
   
    <script src="{{ asset('director_assets/js/script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! JsValidator::formRequest('App\Http\Requests\director\DirectorRequest', '#dir_tem_reg') !!}
{!! JsValidator::formRequest('App\Http\Requests\director\EditRequest', '#dir_team_edit') !!}
{!! JsValidator::formRequest('App\Http\Requests\director\CreateEventRequest', '#createEvent') !!}
{!! JsValidator::formRequest('App\Http\Requests\director\EditEventRequest', '#editEvent') !!}
{!! JsValidator::formRequest('App\Http\Requests\Payment\RefundPaymentRequest', '#paymentRefundForm') !!}