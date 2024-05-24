<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    {{-- <link rel="shortcut icon" href="/frontend/images/logo.png" type="image/x-icon" /> --}}
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>

    @include('layouts.app.header')

    @yield('content')

</body>

</html>
