<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ListadoCategorias extends Component
{
    public $categorias;

    public function mount(){
        $this->categorias = ['shampoo','acondicionador','jabón','crema','pasta dental'];
    }

    public function render()
    {
        return view('livewire.listado-categorias');
    }
}
