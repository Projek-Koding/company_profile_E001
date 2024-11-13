
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Link ke favicon -->
    <link rel="icon" href="{{ asset('img/muhammadiyah-putih.png') }}" type="image/png">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title') - PMD Kab. Pinrang </title>
</head>

<body class="overflow-y: auto font-main">
    @include('components.navbar')
    @yield('content')
    @include('components.footer')
</body>

</html>
