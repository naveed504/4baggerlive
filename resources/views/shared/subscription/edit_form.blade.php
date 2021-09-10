<div class="row mb-2">
    <div class="col-sm-6">
        <label class="label__wrapper required">Type</label>
        <select name="package_type" class="form-control input__box--wrapper">
            <option selected="" disabled="">--Select Type--</option>
            <option value="Fourcast" selected="">Fourcast</option>
            <option value="Premium">Premium</option>
        </select>
    </div>
    <div class="col-sm-6">
        <label class="label__wrapper required">Price</label>
        <input type="number" name="package_price" class="form-control input__box--wrapper @error('package_price') is-invalid @enderror">
        @error('package_price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>


<div class="row">

        <label class="label__wrapper required ml-3">Description</label>
    <div class="col-sm-10">
        <div id="package_description_row">
            <div class="row">
                <div class="col-sm-12 mb-2">
                    <input type="text" name="package_description[]" class="form-control input__box--wrapper" required>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-2">
        <a class="btn btn-primary btn-sm add_package_description_row" onclick="addmoreFields()" style="margin-left:12px;font-size:19px;"><i class="fas fa-fw fa-plus "></i></a>
       </div>
</div>


