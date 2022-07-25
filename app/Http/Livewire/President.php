<?php

namespace App\Http\Livewire;

use Livewire\Component;

class President extends Component
{
    public function render()
    {
        return view('livewire.president');
    }
public function download()
{
    $pdf = app('dompdf.wrapper');
    $pdf->loadViews('livewire.president');

    return $pdf->download('mi-archivo.pdf');
}
}
