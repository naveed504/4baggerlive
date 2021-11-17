
<section class="mt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="font-weight-bold miss pb-3">{{ $blogdetail->title }}</h1>
            </div>
            <div class="col-12">
                <div class="product-detail-image">
                    <img class="img-fluid w-100"  src="{{ asset('admin/allimages/'.$blogdetail->image) }}" alt="">
                </div>
            </div>
         
            <div class="col-md-12">
                <div class="product-detail-content py-4">
                   <div class="mt-2">
                   
                    <span>{!! $blogdetail->detail !!}</span>
                   </div>
                  
                  
                </div>
            </div>
        </div>
    </div>
</section>
