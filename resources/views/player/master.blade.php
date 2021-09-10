<!DOCTYPE html>
<html lang="en">
    @include('player.partials._head')
    @include('player.modals.login')
<body>
    {{-- header --}}
    @include('player.partials._header')

    {{-- slider --}}
    @include('player.partials._slider')

    @yield('content')
    {{-- Footer --}}
    @include('player.partials._footer')
    @include('player.partials._scripts')
</body>
@toastr_render
</html>
