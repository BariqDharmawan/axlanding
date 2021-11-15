<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        try {
            $waNumber = '85159116034';
            $menus = [
                ['text' => 'Beranda', 'url' => url('/')],
                ['text' => 'Mengapa kami', 'url' => url('/') . '#our-service'],
                ['text' => 'Tentang kami', 'url' => url('about-us')],
                ['text' => 'Blog', 'url' => url('blog')],
                ['text' => 'Pengaduan pelanggan', 'url' => 'https://wa.me/62' . $waNumber],
            ];

            View::share('menus', $menus);
            View::share('waNumber', $waNumber);

        } catch (\Throwable $th) {}
    }
}
