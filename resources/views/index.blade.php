<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
    <title>Tư Vấn Tuyến Sinh</title>

    <!-- Fonts -->
    {{-- <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Styles -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    {{-- header --}}
    @include('layouts.inc.header')

    {{-- Menu --}}
    @include('layouts.inc.navbar')

    {{--  Content --}}
    @yield('content')
    {{-- Footer --}}
    @include('layouts.inc.footer')
</body>

</html>
