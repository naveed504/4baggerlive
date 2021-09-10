<!DOCTYPE html>
<html lang="en">
    @include('frontend.partials._head')
    @include('frontend.modals.login')
<body>
    {{-- header --}}
    @include('frontend.partials._header')

    {{-- slider --}}
    @include('frontend.partials._slider')

    @yield('content')
    {{-- Footer --}}
    @include('frontend.partials._footer')
    @include('frontend.partials._scripts')
</body>
@toastr_render
</html>
