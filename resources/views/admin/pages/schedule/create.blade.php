@extends('admin.master')
@section('content')
<link href="{{ asset('datetime/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" media="screen">
<div class="container mb-5">
        <div class="col-sm-12 mb-5">
            <h3 class="text-center p-4 heading-color">Event Schedule</h3>
        </div>
        <form action="{{ route('managetimeschedule.store') }}" method="post" >
           
            @csrf

            <div class="row">
                <div class="col-sm-10 mx-auto border p-0">
                    <p class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">
                    <strong>Schedule Time  Information </strong>
                    </p>
                    <div class="col-sm-12 mt-2 p-4">
                        <div class="row mb-2">
                            <div class="col-sm-3"></div>
                                <div class="col-sm-6">
                                    <label class="label__wrapper required">Event Schedule Time</label>
                                 
                                    
                                    <div class="input-append date form_datetime" data-date="2013-02-21T15:25:00Z">
                                        <input size="16" type="text" class="form-control" name="event_schedule_time" value="" readonly>
                                     
                                        <span class="add-on"><i class="icon-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 mx-auto p-0 mt-3 text-center">
                        <button class="btn btn__next" type="submit">Update Service Fee</button>
                    </div>
                </div>
        </form>
    </div>
<script type="text/javascript" src="{{ asset('datetime/bootstrap-datetimepicker.js') }}" charset="UTF-8"></script>
<script type="text/javascript" src="{{ asset('datetime/bootstrap-datetimepicker.fr.js') }}" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });

</script>
@endsection