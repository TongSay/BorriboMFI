@include('layouts.head')



@include('layouts.nav')

    @yield('content')

@include('sweetalert::alert')


@include('layouts.footer')