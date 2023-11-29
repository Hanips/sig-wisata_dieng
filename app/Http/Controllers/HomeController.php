<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $infotanah = \App\Models\InfoTanah::all();
        $pemiliklahan = \App\Models\PemilikLahan::all();
        $desa = \App\Models\Desa::all();
        $potensi = \App\Models\Potensi::all();
        return view('home', compact('infotanah', 'pemiliklahan', 'desa', 'potensi'));
    }

    public function qgis()
    {
        return view('layouts/qgis');
    }
}
