<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Jugadores extends Component
{
    public function render()
    {
        $jugadores= jugadores::all();
        return view('livewire.jugadores',compact('jugadores'));

        
        // $presidente=presidente::all();
        // return view('livewire.reporte', compact('presidente'));

    }
    
public function download()
{
    $pdf = app('dompdf.wrapper');
    $pdf->loadViews('livewire.jugadores');

    return $pdf->download('mi-archivo.pdf');
}


}
