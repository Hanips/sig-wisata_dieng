<?php

namespace App\Http\Livewire;

use Livewire\Component;
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
