@extends('director.newmaster')
@section('content')
    <div class="container mb-5">
        <div class="col-sm-12 mb-5">
            <h3 class="text-center p-4 heading-color">EDIT EVENT</h3>
            <h5 class="text-center heading-color">BASEBALL EVENT</h5>
        </div>
        <div class="row">
            <div class="col-sm-10 mx-auto border p-0">
                <p class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">
                    <strong>Event Information</strong>
                </p>
                <form action="{{ route('event.update', $event->id) }}" enctype="multipart/form-data" method="post" id="editEvent" onsubmit="return submitForm(this, event);">
                    @method('PUT')
                    @csrf




                    @include('shared.event.editform')

                </form>
            </div>
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
        let bats = @php  echo "'".$event->allowed_bats."'"  @endphp;
    </script>
    <script src="{{ asset('js/multiselect.js')}}" async defer></script>

@endsection
