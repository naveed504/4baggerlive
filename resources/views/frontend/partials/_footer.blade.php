<footer>
    <div class="row w-100 m-0">
        <div class="col-md-5 p-0">
            <div class="footer-left-sec">
                <div class="foote-left-inner">
                    <h2>{{ $generalSetting->mission_title ?? ''}}</h2>
                    <p>{{ $generalSetting->mission_statment ?? ''}} </p>
                    <ul class="social-list">
                        <li>
                            <a href="{{ $generalSetting->facebook ?? '' }}">
                                <span><i class="fa fa-facebook" aria-hidden="true"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $generalSetting->twitter ?? ''}}">
                                <span><i class="fa fa-twitter" aria-hidden="true"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $generalSetting->instagram ?? ''}}">
                                <span><i class="fa fa-instagram" aria-hidden="true"></i></span>
                            </a>
                        </li>
                       
                        <li>
                            <a href="{{ $generalSetting->google ?? ''}}">
                                <span><i class="fa fa-google-plus" aria-hidden="true"></i></span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>

        </div>
        <div class="col-md-7 p-0">
            <div class="footer-right">
                <ul>  
                    @forelse($blogs as $blog)                  
                    <li><a href="{{ route('blog', $blog->slug ?? '') }}">{{ $blog->title ??''}}</a></li>  
                    @empty
                    <li>No Result Found</li>   
                    @endforelse              
                </ul>
                
            </div>
        </div>
    </div>
</footer>

<section class="copyright__inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="copy__content">
                    <p class="m-0">2021 © All rights reserved by fourbaggerusa</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="copy__content text-right">
                    <p>
                        Designed & Developed by
                        <a class="text-white" href="https://leadconcept.com/" target="_blank">LEADconcept</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
