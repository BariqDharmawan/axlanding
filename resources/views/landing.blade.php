@extends('layouts.master')

@section('content')
<header class="bg-gradient-pink-to-red-bottom pb-5 px-3 h-screen position-relative hero-darken-red">
    <nav class="bg-transparent px-3 py-2">
        <div class="container-fluid">
            <ul class="navbar-nav w-100 flex-row align-items-center justify-content-end d-flex">
                <x-nav-item text="hotline: 0{{ $waNumber }}" class="text-capitalize me-4 fw-bold
                nav-item--not-hoverable" />
                <x-nav-item class="me-3">
                    <img src="{{ asset('img/icon/ig-white.svg') }}" alt="" height="20px">
                </x-nav-item>
                <x-nav-item class="pe-3">
                    <img src="{{ asset('img/icon/fb-white.svg') }}" alt="" height="20px">
                </x-nav-item>
            </ul>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg bg-transparent px-3 z-10">
        <div class="container-fluid">
            <a href="{{ route('landing') }}" class="nav__logo">
                <img src="{{ asset('img/logo.png') }}" height="40px" alt="{{ config('app.en') }}">
            </a>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    @foreach ($menus as $menu)

                    <x-nav-item text="{{ $menu['text'] }}" url="{{ $menu['url'] }}"
                    class="text-capitalize d-flex align-items-center me-3 {{ $loop->first ? 'active' : '' }}" />

                    @endforeach
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn btn-orange fw-bold rounded-pill py-3 px-5">
                            Masuk
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row justify-content-between absolute-bottom pb-8 z-10">
        <div class="col-lg-5 position-relative">
            <div class="absolute-top absolute-top--left-45 animate-up-down">
                <img src="{{ asset('img/heli.png') }}" width="75px;">
            </div>
            <div class="absolute-top absolute-top--left-17 top-35px animate-up-down-little">
                <img src="{{ asset('img/cloud1.png') }}" width="55px">
            </div>
            <div class="absolute-top absolute-top--left-5 top-10px animate-up-down-little">
                <img src="{{ asset('img/sun.png') }}" width="40px">
            </div>
            <img src="{{ asset('img/city-left.png') }}" alt="" width="100%" srcset="" height="210px">
        </div>
        <div class="col-lg-45-percen position-relative">
            <div class="absolute-top absolute-top--right-26 left-auto top-35px animate-up-down-little">
                <img src="{{ asset('img/cloud1.png') }}" width="55px">
            </div>
            <div class="position-absolute top--16px right-6-5 left-auto animate-up-down-little">
                <img src="{{ asset('img/ballon.png') }}" width="57px">
            </div>
            <div class="position-absolute top-30px left-35 animate-up-down-little">
                <img src="{{ asset('img/cloud1.png') }}" width="57px">
            </div>
            <img src="{{ asset('img/city-right.png') }}" alt="" srcset="" width="100%">
        </div>
    </div>
</header>
@endsection
