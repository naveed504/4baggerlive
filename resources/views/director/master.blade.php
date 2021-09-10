<!DOCTYPE html>
<html lang="en">
    @include('director.partials._head')
    @include('director.modals.login')
    @stack('css')
<body>
    {{-- header --}}
    @include('director.partials._header')

    {{-- slider --}}
    @include('director.partials._slider')

    @yield('content')
    {{-- Footer --}}
    @include('director.partials._footer')
    @include('director.partials._scripts')

    {{-- Delete Modal  --}}
    @include('modals.deleteModal')
</body>
@toastr_render
</html>
