@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h4 class="bg-light p-3">
                Edit Event
            </h4>
        </div>
        <div class="col-sm-12 mt-3">
            <form action="{{ route('events.update', $event->id) }}" enctype="multipart/form-data" method="post" id="editEvent" onsubmit="return submitForm(this, event);">
                @method('PUT')
                @csrf
                <input type="hidden" value="{{ $event->user_id }}" name="director">
                @include('shared.event.editform')
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $('#js-example-basic-multiple').select2({
             placeholder: "Select Age Group"
         });
         $('#js-example-basic').select2({
             placeholder : "Select Graduation Years"
         });

        let teamState = @php echo "'".$event->event_state."'" @endphp;
        let bats = @php echo "'".$event->allowed_bats."'" @endphp;
    </script>
    <script src="{{ asset('js/multiselect.js')}}" async defer></script>
@endsection
