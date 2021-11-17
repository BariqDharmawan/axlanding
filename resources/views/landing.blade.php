@extends('layouts.master')

@section('content')
<header class="bg-gradient-pink-to-red-bottom pb-5 px-3 h-screen position-relative hero-darken-red">
    <nav class="bg-transparent px-3 py-2 d-none d-lg-block">
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
    <nav class="navbar navbar-expand-lg bg-transparent p-3 z-10">
        <div class="container-fluid">
            @include('partials.nav-logo')
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

    <div class="container center-all z-20">
        <h1 class="text-white text-center mb-5 fs-1 fs-lg-large fw-bold text-shadow-md">
            Selamat Datang <br> Pelanggan Abang Express
        </h1>
        <div class="row mx-0 justify-content-center">
            <div class="col-lg-6 row justify-content-end align-items-center">
                <form action="" method="get" class="col-12 row justify-content-center align-items-center
                bg-white p-3 rounded-pill shadow-lg">
                    <div class="col">
                        <input type="text" class="form-control shadow-none border-0 rounded-0"
                        placeholder="Ketik nomor resi disini" autocomplete="off" required>
                    </div>
                    <div class="col-auto pe-0">
                        <button type="submit" class="rounded-pill py-2 px-4 py-lg-3 px-lg-5 fw-bold btn btn-orange">
                            Cari
                        </button>
                    </div>
                </form>
                <div class="col-auto mt-3">
                    <a href="" class="btn rounded-pill btn btn-midnight-blue">Bantuan</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mx-0 justify-content-between absolute-bottom pb-8 z-10">
        <div class="col-lg-5 position-relative">
            <x-animate-icon type="left-45" name="up-down" icon="img/heli.png" width="75px" />
            <x-animate-icon type="left-17" name="up-down-little" icon="img/cloud1.png" />
            <x-animate-icon type="left-5" name="up-down-little" icon="img/sun.png" width="40px" />
            <img src="{{ asset('img/city-left.png') }}" alt="" width="100%" srcset="" height="210px">
        </div>
        <div class="col-lg-45-percen position-relative">
            <x-animate-icon type="right-26" name="up-down-little" icon="img/cloud1.png" />
            <x-animate-icon type="top--16px" name="up-down-little" icon="img/ballon.png" />
            <x-animate-icon type="top-30px" name="up-down-little" icon="img/cloud1.png" />
            <img src="{{ asset('img/city-right.png') }}" alt="" srcset="" width="100%">
        </div>
    </div>
</header>

<main>
    <section class="translate-y-lg--half fixed-bottom position-lg-relative z-20" id="landing-feature">
        <div class="container px-0 px-lg-3">
            <div class="row mx-0 justify-content-center">
                @for ($i = 0; $i < 3; $i++)
                <div class="col-4 col-lg-3 px-0 px-lg-3">
                    <div class="card h-100 shadow-sm rounded-0 border-start-0">
                        <div class="card-body d-flex align-items-center px-4">
                            <p class="text-midnight-blue fw-bold fs-4 d-none d-lg-block mb-0">Cek Tarif</p>
                            <div class="icon-quick calculation ms-lg-auto">
                                <i class="icon-calculation fs-4"></i>
                                <p class="text-midnight-blue fw-bold d-lg-none mb-0">Tarif</p>
                            </div>
                        </div>
                        <a href="#" class="stretched-link hw-0" data-bs-toggle="modal"
                        data-bs-target="#landing-feature-{{ $i }}"></a>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </section>

    <section class="mb-8 mt-4">
        <div class="container">
            <h2 class="fw-bold text-midnight-blue fs-1 mb-5">Mengapa kami ?</h2>

            <div class="swiper slider-third-on-desktop-one-on-mobile px-4">
                <div class="swiper-wrapper pb-8">
                    @for ($i = 0; $i < 6; $i++)
                    <div class="swiper-slide shadow-md rounded-10">
                        <div class="card rounded-10">
                            <div class="card-body p-lg-5">
                                <p class="text-midnight-blue mb-3 fs-3 text-capitalize">title {{ $i }}</p>
                                <p class="text-dark">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Quia nobis ducimus voluptates odit dolore veritatis ut cumque illo ab sapiente.
                                </p>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section class="mb-8">
        <div class="container">
            <h2 class="fw-bold text-midnight-blue fs-1 mb-5">Informasi kami</h2>
            <div class="row mx-0">
                @for ($i = 1; $i <= 3; $i++)
                <div class="col-lg-4  @if($i != 3) pe-lg-5 mb-5 mb-lg-0 @endif">
                    <div class="card bg-transparent h-100">
                        <img src="{{ asset('img/dummy/article-1.png') }}" alt=""
                        class="card-img-top object-cover" height="200px">
                        <div class="card-body">
                            <a href="" class="btn btn-maroon">Baca selengkapnya</a>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="fw-bold text-midnight-blue fs-1 mb-5 text-capitalize">
                Pertanyaan <br> yang sering diajukan
            </h2>
            <div class="swiper slider-third-on-desktop-one-on-mobile ps-3 pe-5 mb-4">
                <div class="swiper-wrapper py-8">
                    @for ($i = 0; $i < 6; $i++)
                    <div class="swiper-slide shadow-md rounded-10">
                        <div class="card rounded-10">
                            <div class="card-body p-lg-5">
                                <q class="text-dark">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Quia nobis ducimus voluptates odit dolore veritatis ut cumque illo ab sapiente.
                                </q>
                                <p class="text-midnight-blue mt-3 mb-0 fs-3 text-capitalize fw-bold">People name</p>
                                <img src="{{ asset('img/dummy/people.jpg') }}" alt=""
                                height="60px" width="60px" class="rounded-circle el-right-0-bottom-cuttof-xy-half">
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
</main>
@endsection

@section('components')
    @for ($i = 0; $i < 3; $i++)
    <div class="modal fade" id="landing-feature-{{ $i }}" tabindex="-1" aria-labelledby="landing-featureLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="landing-featureLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis saepe iure ut labore, distinctio minima nemo consequuntur perspiciatis a quibusdam molestias iusto. Suscipit odio voluptatum obcaecati quaerat ducimus saepe blanditiis?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    </div>
    @endfor
@endsection
