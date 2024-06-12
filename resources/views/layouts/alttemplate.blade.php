<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/navbar.css')
    @vite('resources/css/footer.css')
    <title>Belajar Daring Wikimedia Indonesia</title>
</head>

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