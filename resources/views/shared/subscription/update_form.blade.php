<form method="POST" id="upadate_form" action="{{ route('subscription.update',$data->id) }}">
    @csrf
    @method('PUT')
<div class="row mb-2">
    <div class="col-sm-6">
        <label class="label__wrapper required">Type</label>
        <select name="package_type" class="form-control input__box--wrapper plane_type">
            <option selected="" disabled="">--Select Type--</option>
            <option value="Fourcast" @php echo ($data->plan_type == 'Fourcast') ? 'selected' : ''; @endphp>Fourcast</option>
            <option value="Premium" @php echo ($data->plan_type == 'Premium') ? 'selected' : ''; @endphp>Premium</option>
        </select>
    </div>
    <div class="col-sm-6">
        <label class="label__wrapper required">Price</label>
        <input type="number" name="package_price" value="{{$data->plan_amount}}" class="form-control input__box--wrapper update_price @error('package_price') is-invalid @enderror">
        @error('package_price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>


<div class="row">
    <div class="col-sm-12">
        <label class="label__wrapper required">Description</label>
        <div id="update_package_description_row">
            @php
                $desc = json_decode($data->plan_des);
            @endphp
            @foreach ($desc as $value)
                <div class="row">
                    <div class="col-sm-12 mb-2">
                        <input type="text" value="{{$value}}" name="package_description[]" class="form-control input__box--wrapper" required>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            @endforeach
        </div>

    </div>
</div>

<div class="row">
    <a class="btn btn-primary add_package_description_btn" id=""><i class="fas fa-fw fa-plus "></i></a>
    <div class="col-sm-12 mb-2">
    </div>
</div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
