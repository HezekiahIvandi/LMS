<!DOCTYPE html>
<html lang="id">
@include('layouts.head')

    <body>
        @include('layouts.nav')

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @yield('content')
        
        @include('layouts.footer')
    </body>
</html>