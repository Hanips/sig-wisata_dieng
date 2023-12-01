<?php

namespace App\Http\Livewire;

use App\Models\Potensi as ModelsPotensi;
use Livewire\Component;
use App\Models\Infotanah;
use App\Models\Pemiliklahan;
use App\Models\Desa as ModelsDesa;
use App\Models\Tour;

class HalamanUser extends Component
{
    protected $tour;

    public function render()
    {
        $this->tour = Tour::all();

        return view('livewire.halaman-user',[
            'tour' => $this->tour
        ])->extends('welcome')->section('content');
    }
}
