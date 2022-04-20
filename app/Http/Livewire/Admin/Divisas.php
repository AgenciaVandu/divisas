<?php

namespace App\Http\Livewire\Admin;

use App\Models\Divisa;
use Livewire\Component;

class Divisas extends Component
{
    public $divisas,$divisa;
    public $name,$compra,$venta,$description_compra,$description_venta;
    public $edit=false;

    public function mount()
    {
        $this->divisas = Divisa::all();
    }

    public function edit(Divisa $divisa){
        $this->edit=true;
        $this->divisa=$divisa;
        $this->name = $divisa->name;
        $this->compra = $divisa->compra;
        $this->venta = $divisa->venta;
        $this->description_compra = $divisa->description_compra;
        $this->description_venta = $divisa->description_venta;
    }

    public function update(){
        $this->validate([
            'name' => 'required',
            'compra' => 'required',
            'venta' => 'required',
        ]);

        $divisa = Divisa::find($this->divisa->id);
        $divisa->name = $this->name;
        $divisa->compra = $this->compra;
        $divisa->venta = $this->venta;
        $divisa->description_compra = $this->description_compra;
        $divisa->description_venta = $this->description_venta;
        $divisa->save();

        $this->edit=false;
        $this->reset('name','compra','venta','description_compra','description_venta');
        $this->divisas = Divisa::all();
    }

    public function render()
    {
        return view('livewire.admin.divisas');
    }
}
