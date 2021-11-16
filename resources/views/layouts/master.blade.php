<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    @yield('content')
    <footer class="bg-red-blood text-white py-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-auto d-flex align-items-end">
                    <small>Copyright &copy; {{ date('Y') }}, {{ config('app.name') }}.</small>
                </div>
                <div class="col-lg-4 d-flex flex-column align-items-end">
                    @include('partials.nav-logo')
                    <address class="d-block mt-4 text-end">
                        Jl. Raya Condet No 27.B, Kel. Balekambang, Kec. Kramat Jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13530 Indonesia.
                    </address>
                    <ul class="d-flex ps-0 m-0">
                        <x-nav-item class="me-3 nav-item--link-no-padding">
                            <img src="{{ asset('img/icon/ig-white.svg') }}" alt="" height="20px">
                        </x-nav-item>
                        <x-nav-item class="pe-3 nav-item--link-no-padding">
                            <img src="{{ asset('img/icon/fb-white.svg') }}" alt="" height="20px">
                        </x-nav-item>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
