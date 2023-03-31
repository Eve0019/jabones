<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use Livewire\Component;
use Livewire\WithPagination;

class ListadoProductos extends Component
{
    use WithPagination;

    public $categoria = '';

    protected $listeners = ['cambioCategoria'];

    // public $productos;

    public function mount(){
        // $this->productos = Producto::all();   
    }

    public function cambioCategoria($categoria)
    {
        $this->categoria = $categoria;
        $this->resetPage();
    }



    public function render()
    {
        $contenido = [];
        if($this->categoria === ''){
            $contenido['productos'] = Producto::paginate(8);
        }else{
            $contenido['productos'] = Producto::where('categoria',$this->categoria)->paginate(8);
        }
        return view('livewire.listado-productos', $contenido);
    }
}
