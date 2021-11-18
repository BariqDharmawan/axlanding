<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $quickFeature = [
            [
                'icon' => 'calculation',
                'name' => 'Cek Tarif',
            ],
            [
                'icon' => 'delivery',
                'name' => 'Order Pengiriman',
            ],
            [
                'icon' => 'maps-and-flags',
                'name' => 'Agen kami',
            ],
        ];
        collect($quickFeature);

        return view('landing', compact('quickFeature'));
    }
}
