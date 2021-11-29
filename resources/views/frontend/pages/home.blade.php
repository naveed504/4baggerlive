@extends('frontend.master')

@section('content')
@include('shared.frontend.home')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@if(Route::currentRouteName() === 'login')
<script type="text/javascript">
    $(window).on('load', function() {
        $('#myModal').modal('show');
    });
</script>
@endif
@endsection
