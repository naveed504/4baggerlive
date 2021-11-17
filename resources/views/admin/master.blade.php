<!DOCTYPE html>
<html lang="en">
@include('admin.partials._head')

<body>
    <div class="loader-wrapper">
        <img src="{{ asset('images/loader.svg') }}" alt="">
    </div>
    <div class="custom__container-wrapper">
        <div class="dboard-inner">
            {{-- header --}}
            @include('admin.partials._header')
            @include('modals.deleteModal')
            {{-- slider --}}
            <div id="layoutSidenav">
                @include('admin.partials._sidebar')
                <div id="layoutSidenav_content">
                    <main>
                        <div class="container-fluid">
                            @yield('content')
                        </div>
                    </main>
                    @include('admin.partials._footer')
                </div>
            </div>
            {{-- Footer --}}
        </div>
    </div>
    @include('admin.partials._scripts')
    {{-- Delete Modal --}}
    @include('modals.deleteModal')
</body>
@toastr_render

</html>
