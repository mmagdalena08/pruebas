<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Equipos extends Component
{
    public function render()
    {
        return view('livewire.equipos');
    }
public function download()
{
    $pdf = app('dompdf.wrapper');
    $pdf->loadViews('livewire.equipos');

    return $pdf->download('mi-archivo.pdf');
}
}
