<banner>

    @if(Route::currentRouteName() == 'welcome' ||  Route::currentRouteName() == 'login' )
    <div id="demo" class="carousel slide banner-section" data-ride="carousel">
        <ul class="carousel-indicators custm__indicators">
            @foreach($sliders as $key=>$slider)
            <li data-target="#demo" data-slide-to="{{ $key }}" class="{{ $loop->first ? 'active' : 'inactive' }}"></li>
            @endforeach
        </ul>
        <div class="carousel-inner mm_bagger_slider">
           @foreach($sliders as $slider)
            <div class="carousel-item  {{ $loop->first ? ' active' : 'inactive' }}">
                <img src="{{ asset('admin/allimages/'. $slider->cover_photo) }}" alt="Los Angeles" />
                <div class="banner-inner">
                    <div class="banner-inner-text">
                        <h1>
                            {{ $slider->title_one }}<span> {{ $slider->title_two }}</span>
                        </h1>
                        <p>{!! $slider->content !!} </p>
                        
                    </div>
                </div>
            </div>
            @endforeach           
        </div>    
      
   </div>
@else
<div class="bg-top">
    <img src="{{ asset('images/profileBG.jpg') }}" alt="" class="img-bg-top mb-5">
</div>
@endif


</banner>
