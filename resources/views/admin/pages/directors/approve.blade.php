@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <h4 class="bg-light p-3 mt-2">
            Approve Directors
        </h4>
    </div>
    <div class="col-sm-12 table-responsive my-3">
        <table class="table">
            <thead>
                <th>#</th>
                <th>Director Name</th>
                <th>Email</th>
                <th>Cell Number</th>
                <th>Registered Events</th>
                <th>Approve</th>
                <th>Action</th>
            </thead>
            <tbody>
                @forelse($directors as $director)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $director->name }}</td>
                        <td>{{ $director->email }}</td>
                        <td>{{ $director->cell_number }}</td>
                        <td>{{ $director->events->count() }}</td>
                        <td>
                            <input type="checkbox" id="changestatus_agegroup" data-userId="{{ $director->id }}">
                        </td>
                        <td>
                            <a href="{{ route('director.show', $director->id) }}" class="text-decoration-none pr-1">
                                <i class="fa fa-eye text-primary" aria-hidden="true"></i>
                            </a>
                            <a href="javascript:void(0);" class="text-decoration-none"
                                onclick="deleteRecord({{ $director->id }}, '/admin/director/')">
                                <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                @empty
                    <td colspan="6" class="text-center">
                        <strong class="text-uppercase">No Director Found</strong>
                    </td>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
<script>
    $(document).on('click', '#changestatus_agegroup', function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var userid = $(this).attr("data-userId");
        $.ajax({
            data: {
                userid: userid
            },
            url: "{{ route('approveDirector') }}",
            type: "POST",
            dataType: 'json',
            success: function (data) {
                if (data.status = "updated") {
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                    toastr.success("Director Approve Successfully");
                }

            },
            error: function (data) {
                console.log('Error:', data);
                $('#btn-save').html('Save Changes');
            }
        });


    });

</script>
@endsection
