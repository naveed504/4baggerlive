<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/site.js') }} "></script>
<script src="{{ asset('js/toastr.js') }} "></script>
<script src="{{ asset('js/font-awesome.js') }}"></script>
<script src="{{ asset('js/inputmask.js') }}"></script>
<script>
    $('.custom-file input').change(function (e) {
        var files = [];
        for (var i = 0; i < $(this)[0].files.length; i++) {
            files.push($(this)[0].files[i].name);
        }
        $(this).next('.custom-file-label').html(files.join(', '));
        });
</script>
@yield('scripts')

<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! JsValidator::formRequest('App\Http\Requests\coach\CoachRequest', '#reg_coach_team') !!}
{!! JsValidator::formRequest('App\Http\Requests\coach\CoachRequest', '#edit_coach_team') !!}
{!! JsValidator::formRequest('App\Http\Requests\Payment\PaymentRequest', '#paymentformrequest') !!}


