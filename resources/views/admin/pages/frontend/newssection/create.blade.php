@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-sm-12">
            <h4 class="bg-light p-3 mt-2">
            Manage Home News
            </h4>
    </div>
     <div class="container mb-5">
      <br><br>
        <form action="{{ route('newssection.store') }}" method="post" id="newsRequest" >
            @csrf

            <div class="row">
                <div class="col-sm-10 mx-auto border p-0">
                    <p class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">
                    <strong>News Information </strong>
                    </p>
                    <div class="col-sm-12 mt-2 p-4">
                        <div class="row mb-2">
                            <input type="hidden" name="news_id"  value="{{ $news->id ?? ''}}">
                                <div class="col-sm-6">
                                    <label class="label__wrapper required">Heading One</label>
                                    <input type="text" name="heading_one" class="form-control input__box--wrapper" value="{{ $news->heading_one ?? ''}}" >
                                    @error('heading_one')
                                    <div class="error text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label class="label__wrapper required">Heading Two</label>
                                    <input type="text" name="heading_two" class="form-control input__box--wrapper" value="{{ $news->heading_two ?? ''}}" >
                                    @error('heading_two')
                                    <div class="error text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-12">
                                    <label class="label__wrapper required">Content</label>
                                    <textarea  name="content" class="form-control input__box--wrapper" style="width: inherit;" >{{ $news->content ?? ''}}</textarea>
                                    @error('content')
                                    <div class="error text-danger">{{ $message }}</div>
                                    @enderror
                                 </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 mx-auto p-0 mt-3 text-center">
                        <button class="btn btn__next" type="submit">Submit </button>
                    </div>
                </div>
        </form>
    </div>
</div>
@endsection