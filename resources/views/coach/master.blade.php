<!DOCTYPE html>
<html lang="en">
    @include('coach.partials._head')
    @include('coach.modals.login')
<body>
    {{-- header --}}
    @include('coach.partials._header')

    {{-- slider --}}
    @include('coach.partials._slider')

    @yield('content')
    {{-- Footer --}}
    @include('coach.partials._footer')
    @include('coach.partials._scripts')
</body>
@toastr_render
</html>
